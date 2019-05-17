SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO"; 
SET AUTOCOMMIT = 0; 
START TRANSACTION; 

--
-- Kaga Akatsuki - Database: `blog`
--

-- --------------------------------------------------------

--
-- Kaga Akatsuki - Create Table `category`
--

DROP TABLE IF EXISTS `category`; 
CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `by_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

--
-- Kaga Akatsuki - Insert Data: `category`
--

INSERT INTO `category` (`cat_id`,`name`,`by_id`) VALUES 
('1','Wapmaster','0'),
('2','PHP','1');

-- --------------------------------------------------------

--
-- Kaga Akatsuki - Create Table `cms`
--

DROP TABLE IF EXISTS `cms`; 
CREATE TABLE `cms` (
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

--
-- Kaga Akatsuki - Insert Data: `cms`
--

INSERT INTO `cms` (`name`,`content`) VALUES 
('admin','{\"username\":\"kokoropie\",\"password\":\"9dedda5fdb3ee6842e411e4df4f1f57d\"}'),
('author','Kaga Akatsuki'),
('contact','{\"facebook\":\"https:\\/\\/fb.me\\/Kaga.Akatsuki.75\",\"phone\":\"+84852700247\",\"email\":\"filberttkarry2210@gmail.com\"}'),
('copyright','&copy; [year] <a href=\"/\">[title]</a>'),
('description','Blog Kaga Akatsuki'),
('favicon','/public/images/favicon.ico'),
('intro','giới thiệu thôi!!'),
('keywords','blog,kaga,akatsuki'),
('logo','KAGA AKATSUKI'),
('theme','blue'),
('thumbnail','/public/images/thumbnail.png'),
('timezone','Asia/Ho_Chi_Minh'),
('title','Blog Kaga Akatsuki');

-- --------------------------------------------------------

--
-- Kaga Akatsuki - Create Table `comment`
--

DROP TABLE IF EXISTS `comment`; 
CREATE TABLE `comment` (
  `comment_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ip` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `from` longtext COLLATE utf8_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) NOT NULL DEFAULT '0',
  `post_id` int(11) NOT NULL DEFAULT '0',
  `accept` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

--
-- Kaga Akatsuki - Insert Data: `comment`
--

INSERT INTO `comment` (`comment_id`,`ip`,`from`,`comment`,`time`,`post_id`,`accept`) VALUES 
('1','::1','{\"name\":\"D\\u01b0\\u01a1ng Ph\\u00fac Ngh\\u0129a\",\"email\":\"filberttkarry2210@gmail.com\"}','kkk','1556886049','1','1'),
('2','::1','{\"name\":\"D\\u01b0\\u01a1ng Ph\\u00fac Ngh\\u0129a\",\"email\":\"filberttkarry2210@gmail.com\"}','lll','1556886056','1','0'),
('3','::1','{\"name\":\"D\\u01b0\\u01a1ng Ph\\u00fac Ngh\\u0129a\",\"email\":\"filberttkarry2210@gmail.com\"}','kalalal','1556886063','1','1'),
('4','::1','{\"name\":\"D\\u01b0\\u01a1ng Ph\\u00fac Ngh\\u0129a\",\"email\":\"filberttkarry2210@gmail.com\"}','lalala','1556886069','1','1'),
('5','::1','{\"name\":\"D\\u01b0\\u01a1ng Ph\\u00fac Ngh\\u0129a\",\"email\":\"filberttkarry2210@gmail.com\"}','laoaiaklaa','1556886074','1','0'),
('6','::1','{\"name\":\"D\\u01b0\\u01a1ng Ph\\u00fac Ngh\\u0129a\",\"email\":\"filberttkarry2210@gmail.com\"}','lapaksos','1556886077','1','1'),
('7','::1','{\"name\":\"D\\u01b0\\u01a1ng Ph\\u00fac Ngh\\u0129a\",\"email\":\"filberttkarry2210@gmail.com\"}','kaoaKa','1556886082','1','0'),
('8','::1','{\"name\":\"D\\u01b0\\u01a1ng Ph\\u00fac Ngh\\u0129a\",\"email\":\"filberttkarry2210@gmail.com\"}','ờ','1556968918','1','0'),
('9','::1','{\"name\":\"D\\u01b0\\u01a1ng Ph\\u00fac Ngh\\u0129a\",\"email\":\"filberttkarry2210@gmail.com\"}','Test','1556977512','1','0'),
('10','::1','{\"name\":\"D\\u01b0\\u01a1ng Ph\\u00fac Ngh\\u0129a\",\"email\":\"filberttkarry2210@gmail.com\"}','o','1556978409','1','0'),
('11','::1','{\"name\":\"D\\u01b0\\u01a1ng Ph\\u00fac Ngh\\u0129a\",\"email\":\"filberttkarry2210@gmail.com\"}','o','1556978413','1','0');

-- --------------------------------------------------------

--
-- Kaga Akatsuki - Create Table `like`
--

DROP TABLE IF EXISTS `like`; 
CREATE TABLE `like` (
  `like_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ip` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '127.0.0.1',
  `time` int(11) NOT NULL DEFAULT '0',
  `post_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`like_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

--
-- Kaga Akatsuki - Insert Data: `like`
--

INSERT INTO `like` (`like_id`,`ip`,`time`,`post_id`) VALUES 
('3','::1','1556943924','1'),
('12','::1','1557030610','6');

-- --------------------------------------------------------

--
-- Kaga Akatsuki - Create Table `post`
--

DROP TABLE IF EXISTS `post`; 
CREATE TABLE `post` (
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

--
-- Kaga Akatsuki - Insert Data: `post`
--

INSERT INTO `post` (`post_id`,`thumbnail`,`name`,`content`,`view`,`time`,`cat_id`,`sticky`,`status`,`keywords`,`description`,`file`) VALUES 
('1','/upload/2019/04/29/thumbnail.png','Chào Mừng Đến Với Blog Kaga Akatsuki','<p>Cho vui thôi =))</p>','30','1556546389','2','1','public','Chào,Mừng,Đến,Với,Blog,Kaga,Akatsuki,Chao,Mung,den,Voi,Blog,Kaga,Akatsuki','',''),
('2','','Test Gallery','<p><img alt=\"\" class=\"img-responsive\" src=\"https://s1-ssl.dmcdn.net/X_2oX/x240-ZKb.jpg\" /></p>\n\n<p><img alt=\"\" class=\"img-responsive\" src=\"https://uploads.disquscdn.com/images/bb2f19e86fb3e5fc877ec728bd10c2c20fc20723c573e57834655cbd6dda8cfc.jpg\" /></p>','88','1556990011','2','1','public','Test,Gallery,test,gallery','',''),
('3','','what','<p>mmm</p>','2','1556994636','2','1','public','what,what','',''),
('4','','kèo','<p>moisw</p>','2','1556994929','2','0','public','kèo,keo','',''),
('5','','ahuhu','<p>fuck</p>','2','1556994993','2','1','public','ahuhu,ahuhu','',''),
('6','','akkaka','<p>skis</p>','5','1556995052','2','1','public','akkaka,akkaka','',''),
('7','','test','<div class=\"youtube-embed-wrapper\" style=\"height:0; overflow:hidden; padding-bottom:56.25%; padding-top:30px; position:relative\"><a href=\"https://www.youtube.com/embed/2DeBQiIfjWk\"><img height=\"auto\" src=\"//img.youtube.com/vi/2DeBQiIfjWk/sddefault.jpg\" style=\"left:0; position:absolute; top:0\" width=\"100%\" /></a></div>\n\n<p>&nbsp;</p>','50','1557030831','2','0','public','test','',''),
('9','','code','<pre>\n<code class=\"language-php\">/*************************\n	*Author: Kaga Akatsuki\n	*Date: 17/04/2019\n*************************/\n\nclass Count {\n\n  private $dir, $online, $count;\n\n  function __construct($dir) {\n		$this---&gt;dir = $dir;\n    if (!is_dir($this-&gt;dir)) {\n      mkdir($this-&gt;dir);\n    }\n    $this-&gt;online = $dir . \"online.log\";\n    $this-&gt;count = $dir . \"count/\";\n	}\n\n  public function get_online($ip) {\n    if (!file_exists($this-&gt;online) || !is_array(json_decode(file_get_contents($this-&gt;online), true))) {\n      file_put_contents($this-&gt;online, json_encode(array()));\n    }\n\n    $online = json_decode(file_get_contents($this-&gt;online), true);\n    $tmp = array();\n    $onl = 0;\n    $time = time();\n    foreach ($online as $key =&gt; $value) {\n      if ($key != $ip) {\n        if ($time - $value &gt; 300) continue;\n        $tmp[$key] = $value;\n        $onl++;\n      }\n    }\n    $onl++;\n    $tmp[$ip] = $time;\n\n    file_put_contents($this-&gt;online, json_encode($tmp));\n\n    return $onl;\n  }\n\n  public function get_count($true = true) {\n    $today = $this-&gt;count . date(\"Y-m-d\") . \".log\";\n    $yesterday = $this-&gt;count . date(\"Y-m-d\", time() - 24 * 60 * 60) . \".log\";\n\n    $count = array (\n      \'today\' =&gt; 0,\n      \'yesterday\' =&gt; 0,\n      \'total\' =&gt; 0,\n      \'date\' =&gt; 0,\n      \'avg\' =&gt; 0,\n      \'month\' =&gt; 0,\n      \'week\' =&gt; 0,\n      \'year\' =&gt; 0\n    );\n\n    if (!is_dir($this-&gt;count)) {\n      mkdir($this-&gt;count);\n    }\n\n    if (!file_exists($today)) {\n      file_put_contents($today, json_encode(array()));\n    }\n\n    if (file_exists($yesterday)) {\n      $count[\'yesterday\'] = count(json_decode(file_get_contents($yesterday), true));\n    }\n\n    $tmp = json_decode(file_get_contents($today), true);\n    if ($true) {\n      $tmp[] = time();\n      file_put_contents($today, json_encode($tmp));\n    }\n    $count[\'today\'] = count($tmp);\n\n    $tmp = glob($this-&gt;count . \"*.log\");\n    $count[\'date\'] = count($tmp);\n\n    foreach ($tmp as $key =&gt; $value) {\n      $count[\'total\'] += count(json_decode(file_get_contents($value), true));\n      foreach (json_decode(file_get_contents($value), true) as $time) {\n        if (date(\"Y-W\", $time) == date(\"Y-W\")) {\n          $count[\'week\']++;\n        }\n      }\n    }\n\n    $tmp = glob($this-&gt;count . date(\"Y-m\") . \"-*.log\");\n    foreach ($tmp as $key =&gt; $value) {\n      $count[\'month\'] += count(json_decode(file_get_contents($value), true));\n    }\n\n    $tmp = glob($this-&gt;count . date(\"Y\") . \"-*.log\");\n    foreach ($tmp as $key =&gt; $value) {\n      $count[\'year\'] += count(json_decode(file_get_contents($value), true));\n    }\n\n    $count[\'avg\'] = ceil($count[\'total\'] / $count[\'date\']);\n\n    return $count;\n  }\n\n  public function default_count() {\n    $today = $this-&gt;count . date(\"Y-m-d\") . \".log\";\n\n    if (!is_dir($this-&gt;count)) {\n      mkdir($this-&gt;count);\n    }\n\n    if (!file_exists($today)) {\n      file_put_contents($today, json_encode(array()));\n    }\n  }\n}</code></pre>','99','1557043048','2','0','public','code','',''),
('10','','hjx','<pre>\n<code class=\"language-php\">echo \"fuck me bro!!!!\";</code></pre>\n\n<p>&nbsp;</p>','18','1557206477','2','0','public','hjx','','');

-- --------------------------------------------------------

--
-- Kaga Akatsuki - Create Table `theme`
--

DROP TABLE IF EXISTS `theme`; 
CREATE TABLE `theme` (
  `ip` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `theme` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

--
-- Kaga Akatsuki - Insert Data: `theme`
--

INSERT INTO `theme` (`ip`,`theme`) VALUES 
('::1','cyan'),
('112.197.224.66','deep-orange'),
('112.197.226.84','orange'),
('127.0.0.1','amber'),
('14.162.176.109','black'),
('159.138.61.221','blue'),
('27.2.33.204','light-blue');

COMMIT; 