<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

class Session {
    public function start() {
        session_start();
    }

    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public function get($key) {
        if (isset($_SESSION[$key])) {
            $return = $_SESSION[$key];
        } else {
            $return = NULL;
        }
        return $return;
    }

    public function del($key) {
        unset($_SESSION[$key]);
    }

    public function destroy() {
      session_destroy();
    }
}
?>
