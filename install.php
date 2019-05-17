<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/core/config.php')) {
	header("location: /");
	die();
}

if (!empty($_GET['install'])) {
	if (isset($_POST['submit'])) {
		$return = [
			'msg' => NULL,
			'type' => 'error'
		];
		if (empty($_POST['localhost']) || empty($_POST['username']) || empty($_POST['name'])
		|| empty($_POST['title']) || empty($_POST['keywords']) || empty($_POST['description'])
		|| empty($_POST['username_admin']) || empty($_POST['password_admin'])) {
			$return['msg'] = "Vui Lòng Nhập Đầy Đủ Thông Tin!";
		} else {
			// Check Database
			$localhost = addslashes(htmlspecialchars(trim($_POST['localhost'])));
			$username = addslashes(htmlspecialchars(trim($_POST['username'])));
			$password = addslashes(htmlspecialchars(trim($_POST['password'])));
			$name = addslashes(htmlspecialchars(trim($_POST['name'])));

			$conn = mysqli_connect($localhost, $username, $password, $name);
			if (!$conn) {
				$return['msg'] = "Lỗi Database: ". mysqli_connect_error();
			} else {
				$conn->set_charset('utf8');
				$title = addslashes(htmlspecialchars(trim($_POST['title'])));
				$keywords = addslashes(htmlspecialchars(trim($_POST['keywords'])));
				$description = addslashes(htmlspecialchars(trim($_POST['description'])));
				$username_admin = addslashes(htmlspecialchars(trim($_POST['username_admin'])));
				$password_admin = addslashes(htmlspecialchars(trim($_POST['password_admin'])));
				$copyright = addslashes(trim($_POST['copyright']));
				$timezone = addslashes(trim($_POST['timezone']));
				$logo = addslashes(htmlspecialchars(trim($_POST['logo'])));

				// Create table category
				$conn->query("DROP TABLE IF EXISTS `category`");
				$conn->query("CREATE TABLE `category` (
				  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
				  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
				  `by_id` int(11) NOT NULL DEFAULT '0',
				  PRIMARY KEY (`cat_id`)
				) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
				$conn->query("INSERT INTO `category` (`cat_id`,`name`,`by_id`) VALUES
				('1','Chuyên Mục Mẹ','0'),('2','Chuyên Mục Con','1')");

				// Create table post
				$conn->query("DROP TABLE IF EXISTS `post`");
				$conn->query("CREATE TABLE `post` (
				  `post_id` int(11) NOT NULL AUTO_INCREMENT,
				  `thumbnail` longtext COLLATE utf8_unicode_ci,
				  `name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
				  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
				  `view` int(11) NOT NULL DEFAULT '0',
				  `time` int(11) NOT NULL,
				  `cat_id` int(11) NOT NULL,
				  `sticky` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
				  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'public',
				  `keywords` text COLLATE utf8_unicode_ci,
				  `description` longtext COLLATE utf8_unicode_ci,
				  `file` longtext COLLATE utf8_unicode_ci,
				  PRIMARY KEY (`post_id`)
				) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
				$conn->query("INSERT INTO `post` (`post_id`,`thumbnail`,`name`,`content`,`view`,`time`,`cat_id`,`sticky`,`status`,`keywords`,`description`,`file`) VALUES
				('1','','Bài Viết Ví Dụ','<h3>Test Thôi Nà</h3>','0','" . time() . "','2','0','public','Bài,Viết,Ví,Dụ,Bai,Viet,Vi,Du','Mô Tả Nè!!!','') ");

				// Create table comment
				$conn->query("DROP TABLE IF EXISTS `comment`");
				$conn->query("CREATE TABLE `comment` (
				  `comment_id` bigint(20) NOT NULL AUTO_INCREMENT,
				  `ip` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
				  `from` longtext COLLATE utf8_unicode_ci NOT NULL,
				  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
				  `time` int(11) NOT NULL DEFAULT '0',
				  `post_id` int(11) NOT NULL DEFAULT '0',
				  PRIMARY KEY (`comment_id`)
				) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
				$conn->query("INSERT INTO `comment` (`comment_id`,`ip`,`from`,`comment`,`time`,`post_id`) VALUES
				('1','127.0.0.1','{\"name\":\"Kaga\",\"email\":\"filberttkarry2210@gmail.com\"}','Test','" . time() . "','1')");

				// Create table like
				$conn->query("DROP TABLE IF EXISTS `like`");
				$conn->query("CREATE TABLE `like` (
				  `like_id` bigint(20) NOT NULL AUTO_INCREMENT,
				  `ip` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '127.0.0.1',
				  `time` int(11) NOT NULL DEFAULT '0',
				  `post_id` int(11) NOT NULL DEFAULT '0',
				  PRIMARY KEY (`like_id`)
				) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;");
				$conn->query("INSERT INTO `like` (`like_id`,`ip`,`time`,`post_id`) VALUES
				('1','127.0.0.1','".time()."','1')");

				// Create table theme
				$conn->query("DROP TABLE IF EXISTS `theme`");
				$conn->query("CREATE TABLE `theme` (
				  `ip` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
				  `theme` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
				  PRIMARY KEY (`ip`)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");

				// Create table cms
				$conn->query("DROP TABLE IF EXISTS `cms`");
				$conn->query("CREATE TABLE `cms` (
					`name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
				  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
				  PRIMARY KEY (`name`)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
				$conn->query("INSERT INTO `cms` (`name`,`content`) VALUES
				('admin','{\"username\":\"{$username_admin}\",\"password\":\"".md5($password_admin)."\"}'),
				('copyright','{$copyright}'),
				('description','{$description}'),
				('favicon','/public/images/favicon.ico'),
				('keywords','{$keywords}'),
				('theme','red'),
				('thumbnail','/public/images/thumbnail.png'),
				('title','{$title}'),
				('timezone','{$timezone}'),
				('logo','{$logo}'),
				('contact', '[]')
				");

				$config = "<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

/* Don't Change */
define('DIR_ROOT', \$_SERVER['DOCUMENT_ROOT'] . '/');

/* Config Folder For Includes File */
define('DIR', DIR_ROOT . 'includes');

/* Config Smarty */
define('SMARTY_DEBUGGING', 0); // Show Debug Smarty
define('SMARTY_CACHING', false); // Active Cache Smarty ()
define('SMARTY_CACHE_LIFETIME', 300); // Time Cache Smarty

/* Config Database */
define('HOST', '{$localhost}'); // Localhost
define('USER', '{$username}'); // Username
define('PASS', '{$password}'); // Password
define('NAME', '{$name}'); // Name Database
define('CHARSET', 'utf8'); // Don't Change";
				file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/core/config.php',$config);

				mkdir($_SERVER['DOCUMENT_ROOT'] . '/data');
				mkdir($_SERVER['DOCUMENT_ROOT'] . '/upload');
				chmod($_SERVER['DOCUMENT_ROOT'] . '/data', 0711);
				chmod($_SERVER['DOCUMENT_ROOT'] . '/upload', 0711);

				$return['msg'] = "Cài Đặt Website Thành Công! Hãy Xóa File install.php! \nTự Động Chuyển Sang Trang Chủ Sau 5s";
				$return['msg'] .= '<meta http-equiv="refresh" content="5;url=/" />';
				$return['type'] = "success";
			}
		}
		echo json_encode($return);
	}
	die();
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Cài Đặt</title>
	<!-- Favicon-->
	<link rel="icon" href="/public/images/favicon.ico" type="image/x-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

	<!-- Bootstrap Core Css -->
	<link href="/public/plugins/bootstrap/css/bootstrap.css?kaga=<?=time()?>" rel="stylesheet">

	<!-- Waves Effect Css -->
	<link href="/public/plugins/node-waves/waves.css?kaga=<?=time()?>" rel="stylesheet" />

	<!-- Animation Css -->
	<link href="/public/plugins/animate-css/animate.css?kaga=<?=time()?>" rel="stylesheet" />

	<!-- Sweet Alert Css -->
	<link href="/public/plugins/sweetalert/sweetalert.css?kaga=<?=time()?>" rel="stylesheet" />

	<!-- Bootstrap Select Css -->
  <link href="/public/plugins/bootstrap-select/css/bootstrap-select.css?kaga=<?=time()?>" rel="stylesheet" />

	<!-- Custom Css -->
	<link href="/public/css/style.css?kaga=<?=time()?>" rel="stylesheet">

	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	<link href="/public/css/themes/all-themes.css?kaga=<?=time()?>" rel="stylesheet" />
</head>

<body class="theme-red">
	<!-- Top Bar -->
	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
				<a href="javascript:void(0);" class="bars"></a>
				<a class="navbar-brand" id="logo" href="">KAGA AKATSUKI</a>
			</div>
		</div>
	</nav>
	<!-- #Top Bar -->
	<section>
		<!-- Left Sidebar -->
		<aside id="leftsidebar" class="sidebar">
			<!-- Menu -->
			<div class="menu">
				<ul class="list">
					<li class="active">
						<a href="index.html">
							<i class="material-icons">cloud_download</i>
							<span>Cài Đặt</span>
						</a>
					</li>
				</ul>
			</div>
			<!-- #Menu -->
		</aside>
		<!-- #END# Left Sidebar -->
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>CÀI ĐẶT</h2>
			</div>
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="body">
							<form id="install" method="POST" action="/install.php?install=ok">
								<h3>Thiết Lập Cơ Sở Dữ Liệu</h3>
								<fieldset>
									<div class="form-group form-float">
										<div class="form-line">
											<input type="text" class="form-control" name="localhost" required>
											<label class="form-label">Localhost</label>
										</div>
									</div>
									<div class="form-group form-float">
										<div class="form-line">
											<input type="text" class="form-control" name="username" required>
											<label class="form-label">Tài Khoản DB</label>
										</div>
									</div>
									<div class="form-group form-float">
										<div class="form-line">
											<input type="text" class="form-control" name="password" >
											<label class="form-label">Mật Khẩu DB</label>
										</div>
									</div>
									<div class="form-group form-float">
										<div class="form-line">
											<input type="text" class="form-control" name="name" required>
											<label class="form-label">Tên DB</label>
										</div>
									</div>
								</fieldset>

								<h3>Thông Tin Website</h3>
								<fieldset>
									<div class="form-group form-float">
										<div class="form-line">
											<input type="text" name="title" class="form-control" required>
											<label class="form-label">Tiêu Đề</label>
										</div>
									</div>
									<div class="form-group form-float">
										<div class="form-line">
											<input type="text" name="keywords" class="form-control" required>
											<label class="form-label">Từ Khóa</label>
										</div>
									</div>
									<div class="form-group form-float">
										<div class="form-line">
											<textarea name="description" class="form-control no-resize auto-growth" required></textarea>
											<label class="form-label">Mô Tả</label>
										</div>
									</div>
								</fieldset>

								<h3>Tài Khoản Admin</h3>
								<fieldset>
									<div class="form-group form-float">
										<div class="form-line">
											<input type="text" name="username_admin" class="form-control" required>
											<label class="form-label">Tài Khoản</label>
										</div>
									</div>
									<div class="form-group form-float">
										<div class="form-line">
											<input type="password" name="password_admin" class="form-control" required>
											<label class="form-label">Mật Khẩu</label>
										</div>
									</div>
								</fieldset>
								<h3>Cài Đặt Khác</h3>
								<fieldset>
									<div class="form-group form-float">
										<div class="form-line">
											<input type="text" name="logo" class="form-control" value="KAGA AKATSUKI" onkeyup="$('#logo').text(this.value)" required>
											<label class="form-label">Logo</label>
										</div>
									</div>
									<div class="form-group form-float">
										<div class="form-line">
											<select class="form-control ms" name="timezone">
		                    <?php
												foreach (timezone_identifiers_list() as $key => $value) {
													?><option value="<?=$value?>" <?=($value == date_default_timezone_get() ? "selected" : NULL)?>><?=$value?></option><?php
												}
												?>
		                  </select>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Jquery Core Js -->
	<script src="/public/plugins/jquery/jquery.min.js?kaga=<?=time()?>"></script>

	<!-- Bootstrap Core Js -->
	<script src="/public/plugins/bootstrap/js/bootstrap.js?kaga=<?=time()?>"></script>

	<!-- Select Plugin Js -->
	<script src="/public/plugins/bootstrap-select/js/bootstrap-select.js?kaga=<?=time()?>"></script>

	<!-- Slimscroll Plugin Js -->
	<script src="/public/plugins/jquery-slimscroll/jquery.slimscroll.js?kaga=<?=time()?>"></script>

	<!-- Jquery Validation Plugin Css -->
	<script src="/public/plugins/jquery-validation/jquery.validate.js?kaga=<?=time()?>"></script>

	<!-- JQuery Steps Plugin Js -->
	<script src="/public/plugins/jquery-steps/jquery.steps.js?kaga=<?=time()?>"></script>

	<!-- Select Plugin Js -->
	<script src="/public/plugins/bootstrap-select/js/bootstrap-select.js?kaga=<?=time()?>"></script>

	<!-- Sweet Alert Plugin Js -->
	<script src="/public/plugins/sweetalert/sweetalert.min.js?kaga=<?=time()?>"></script>

	<!-- Waves Effect Plugin Js -->
	<script src="/public/plugins/node-waves/waves.js?kaga=<?=time()?>"></script>

	<!-- Custom Js -->
	<script src="/public/js/admin.js?kaga=<?=time()?>"></script>

	<script>
		$(function() {
			var form = $('#install').show();
			form.steps({
				headerTag: 'h3',
				bodyTag: 'fieldset',
				transitionEffect: 'slideLeft',
				onInit: function(event, currentIndex) {
					$.AdminBSB.input.activate();

					//Set tab width
					var $tab = $(event.currentTarget).find('ul[role="tablist"] li');
					var tabCount = $tab.length;
					$tab.css('width', (100 / tabCount) + '%');

					//set button waves effect
					setButtonWavesEffect(event);
				},
				onStepChanging: function(event, currentIndex, newIndex) {
					if (currentIndex > newIndex) {
						return true;
					}

					if (currentIndex < newIndex) {
						form.find('.body:eq(' + newIndex + ') label.error').remove();
						form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
					}

					form.validate().settings.ignore = ':disabled,:hidden';
					return form.valid();
				},
				onStepChanged: function(event, currentIndex, priorIndex) {
					setButtonWavesEffect(event);
				},
				onFinishing: function(event, currentIndex) {
					form.validate().settings.ignore = ':disabled';
					return form.valid();
				},
				onFinished: function(event, currentIndex) {
					form.submit();
				}
			});

			form.validate({
				messages: {
		      "title": {
		        required: "Vui Lòng Nhập Tiêu Đề"
		      },
		      "keywords": {
		        required: "Vui Lòng Nhập Từ Khóa"
		      },
		      "description": {
		        required: "Vui Lòng Nhập Mô Tả"
		      },
					"localhost": {
						required: "Vui Lòng Nhập Localhost"
					},
					"username": {
						required: "Vui Lòng Nhập Tài Khoản DB"
					},
					"name": {
						required: "Vui Lòng Nhập Tên DB"
					},
					"username_admin": {
						required: "Vui Lòng Nhập Tài Khoản Admin"
					},
					"password_admin": {
						required: "Vui Lòng Nhập Mật Khẩu Admin"
					},
					"copyright": {
						required: "Vui Lòng Nhập Copyright"
					}
		    },
				highlight: function(input) {
					$(input).parents('.form-line').addClass('error');
				},
				unhighlight: function(input) {
					$(input).parents('.form-line').removeClass('error');
				},
				errorPlacement: function(error, element) {
 					$(element).parents('.form-group').append(error);
				},
		    submitHandler: function(form) {
		      var action = form.action;
		      var method = form.method;
		      var data = new FormData();
		      $.each(form, function(key, value) {
	          data.append(value.name, value.value);
		      });
					data.append("submit", "Submit");

		      try {
		        var request = new XMLHttpRequest();
		        request.open(method, action, false);
		        request.send(data);
		        var res = jQuery.parseJSON(request.response);
		        swal("Thông Báo", res.msg, res.type);
		      } catch (error) {
		        console.log(error);
		      }
		    }
			});
		});

		function setButtonWavesEffect(event) {
			$(event.currentTarget).find('[role="menu"] li a').removeClass('waves-effect');
			$(event.currentTarget).find('[role="menu"] li:not(.disabled) a').addClass('waves-effect');
		}
	</script>
</body>

</html>
