<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

class DB {

	private $host, $user, $pass, $name;

	public $conn = NULL;

	function __construct($host, $user, $pass, $name) {
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->name = $name;
	}

	public function connect () {
		$this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->name) or die(mysqli_connect_error());
	}

	public function query ($sql = NULL) {
		if ($this->conn) {
			return mysqli_query($this->conn, $sql);
		}
	}

	public function num_rows ($sql = NULL) {
		if ($this->conn) {
			$query = mysqli_query($this->conn, $sql);
			$row = mysqli_num_rows($query);
			return $row;
		}
	}

	public function fetch_assoc($sql = null, $many = true) {
    if ($this->conn) {
			$data = array();
      $query = mysqli_query($this->conn, $sql);
      if ($many) {
        while ($row = mysqli_fetch_assoc($query)) {
          $data[] = $row;
        }
      	return $data;
      } else {
        $data = mysqli_fetch_assoc($query);
        return $data;
      }
    }
	}

  public function real_escape_string($string) {
    if ($this->conn) {
      $string = mysqli_real_escape_string($this->conn, $string);
    } else {
      $string = $string;
    }
    return $string;
  }

  public function insert_id() {
    if ($this->conn) {
      return mysqli_insert_id($this->conn);
    }
  }

  public function error() {
  	if ($this->conn) {
  		return mysqli_error($this->conn);
    }
  }

	public function set_charset($charset) {
		if ($this->conn) {
			mysqli_set_charset($this->conn, $charset);
		}
	}

	public function backup() {
	  $return = "SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\"; \n";
	  $return .= "SET AUTOCOMMIT = 0; \n";
	  $return .= "START TRANSACTION; \n\n";
	  $return .= "--\n";
	  $return .= "-- Kaga Akatsuki - Database: `{$this->name}`\n";
	  $return .= "--\n\n";
	  $tables = $this->fetch_assoc("SHOW TABLES;");
	  foreach($tables as $val) {
	    $table = $val['Tables_in_' . $this->name];
	    $return .= "-- --------------------------------------------------------\n\n";
	    $return .= "--\n";
	    $return .= "-- Kaga Akatsuki - Create Table `{$table}`\n";
	    $return .= "--\n\n";
	    $return .= "DROP TABLE IF EXISTS `{$table}`; \n";
	    $createTable = $this->fetch_assoc("SHOW CREATE TABLE `{$table}`", false)['Create Table'];
	    $return .= $createTable."; \n\n";

			$rowdata = $this->fetch_assoc("SELECT * FROM `{$table}`");
			if (count($rowdata) > 0) {
				$return .= "--\n";
		    $return .= "-- Kaga Akatsuki - Insert Data: `{$table}`\n";
		    $return .= "--\n\n";

		    $return .= "INSERT INTO `{$table}` ";

		    $row = $this->fetch_assoc("DESCRIBE `{$table}`");

		    $return .= "(";
		    foreach ($row as $value) {
		      $return .= "`{$value['Field']}`,";
		    }
		    $return = substr("$return", 0, -1);
		    $return .= ")";

		    $return .= " VALUES \n";
		    foreach ($rowdata as $value) {
		      $return .= "(";
		      foreach ($value as $v) {
		        $return .= "'".$this->real_escape_string($v) . "',";
		      }
		      $return = substr("$return", 0, -1);
		      $return .= "),\n";
		    }
		    $return = substr("$return", 0, -3);
		    $return .= ");" ."\n\n";
		  }
		}

	  $return .= "COMMIT; ";

	  return $return;
	}
}
