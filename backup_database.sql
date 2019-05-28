SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO"; 
SET AUTOCOMMIT = 0; 
START TRANSACTION; 

--
-- Kaga Akatsuki - Database: `blog`
--

-- --------------------------------------------------------

--
-- Kaga Akatsuki - Create Table `block_comment`
--

DROP TABLE IF EXISTS `block_comment`; 
CREATE TABLE `block_comment` (
  `ip` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(12) NOT NULL,
  PRIMARY KEY (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

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
('11','::1','{\"name\":\"D\\u01b0\\u01a1ng Ph\\u00fac Ngh\\u0129a\",\"email\":\"filberttkarry2210@gmail.com\"}','o','1556978413','1','0'),
('12','94.29.73.233','{\"name\":\"Melvinfoogy\",\"email\":\"leonard_glybin@mail.ru\"}','Nous avons selectionne le meilleur des liquides internationaux, le top des liquides made in France, les ultra fruites Malaisiens ou Canadiens. Retrouvez les aromes et liquides classiques au gouts tabac, faites le plein d’aromes fruites, les liquides mentholes et les liquides gourmands. Nous vous proposons les plus grandes marques : Alfaliquid, Absolu, Green Vapes ou encore le French liquide. \r\nSurvival \r\n \r\n&lt;a href=https://www.e-garette.fr&gt;PГўtisserie FranГ§aise&lt;/a&gt;','1559013461','10','0'),
('13','37.203.214.30','{\"name\":\"Arabekjat\",\"email\":\"stanislavmoi1u2z@mail.ru\"}','https://clck.ru/FkugB - Знакомства Ragusa. Сайт знакомств Ragusa бесплатно, без регистрации, для серьезных отношений.','1559014251','10','0'),
('14','31.184.238.253','{\"name\":\"Dunaertriva\",\"email\":\"rudubain@zaim-fart.ru\"}','Today there are a lot of cafe in Dubai. If you want to visit a Russian cafe in Dubai, you should make an effort to search for them. Also, you can visit a restaurant, where you can try Russian cuisine in Dubai. \r\n \r\nIf you wish to go after hard working day to a cafe in Dubai, we recommend to visiting SorpCafe. In this cafe there are many rooms for meetings. You can meet an interesting girl on the street and to offer drink a cup of tea in a coffee house. A lot of foreigners, who visit Dubai, like to taste Russian cuisine. At sorpcafe.com there are many delicious dishes on the menu. You should visit this cafe and try to taste something. \r\n \r\nYou should visit Sorp Business cafe in UAE, DUBAI, JLT, CLUSTER F. If you wish to book some places, we recommend to call +97145898003. Managers will answer different your questions. If you desire to meet with a business partner, you can visit this business cafe and make an order for a cup of coffee. In this place a very pleasant ambiance. A lot of women from offices prefer to visit this place in dinner break. You can also connect with leadership &lt;a href=https://www.sorpcafe.com/&gt;Russian dishes in the Emirates&lt;/a&gt;  here. \r\n \r\nMore and more business guys prefer to visit with their husbands these places in the evening time. You may choose the best and national Russian dishes on the link. At the main page, there are photos of dishes, which are very popular in the cafe. If you desire to contact with managing director and ask about food delivery, you can do it in working time. You can also search photos of restaurant in social networks. Sorp business cafe presented on Instagram and Facebook. \r\n \r\nCurrently in Dubai there are many European restaurants. One of the famous is a restaurant of Russian cuisine in Dubai. You may try to taste oriental cakes. Very popular for citizens are eastern sweets. Every week more and more citizens are visiting this restaurant. If you speak about citizens of Dubai and &lt;a href=https://www.sorpcafe.com/delivery-en&gt;SorpCafe&lt;/a&gt; , necessary to say, that Sorp Business Cafe is very famous around them. \r\n \r\nCurrently food delivery in Dubai is very popular too. You could try to eat crepes or sandwiches. One of the popular dishes is Russian syrniki. If you want to celebrate your birthday, you could do it in this restaurant. On weekend a lot of tourists from Russia, Ukraine, and European countries like to visit this place. You can find diverse opinions about the restaurant at the link. Popular stars wrote their opinion at a link about Russian cuisine and rooms for presentations. If you desire to taste Russian dishes in the Emirates, you should visit SorpCafe.','1559015502','10','0'),
('15','46.147.144.243','{\"name\":\"Aprilginia\",\"email\":\"aprilll2258@gmail.com\"}','https://vk.com/public182669881 - рабыни бдсм знакомства\r\nhttps://vk.com/public182818064 - смотреть русское порно свингеры\r\nhttps://vk.com/public182669985 - сайт знакомств для взрослых\r\nhttps://vk.com/public182669030 - бдсм знакомства бесплатно\r\nhttps://vk.com/public182818078 - мастурбация\r\nhttps://vk.com/public182818991 - свингеры русские пары молодые\r\nhttps://vk.com/public182818318 - русское домашнее двойное проникновение\r\nhttps://vk.com/public182670879 - вирт чат бесплатно\r\nhttps://vk.com/public182701546 - Интим знакомства Москва\r\nhttps://vk.com/public182669995 - интим знакомства объявления\r\nhttps://vk.com/public182817994 - двойное проникновение смотреть онлайн\r\nhttps://vk.com/public182818080 - мастурбация молодых девушек\r\nhttps://vk.com/public182817885 - смотреть русское порно свингеры\r\nhttps://vk.com/public182702892 - Знакомства для взрослых Ростов-на-Дону\r\nhttps://vk.com/public182817680 - сквиртинг онлайн бесплатно\r\n \r\n&lt;a href=https://vk.com/public182703082&gt;Знакомства для взрослых Казань&lt;/a&gt;\r\n&lt;a href=https://vk.com/public182702788&gt;Знакомства для взрослых Нижний Новгород&lt;/a&gt;\r\n&lt;a href=https://vk.com/public182670296&gt;порно анал знакомство&lt;/a&gt;\r\n&lt;a href=https://vk.com/public182817766&gt;минет смотреть онлайн бесплатно&lt;/a&gt;\r\n&lt;a href=https://vk.com/public182817584&gt;мастурбация молодых девушек&lt;/a&gt;','1559016405','10','0'),
('16','89.238.186.46','{\"name\":\"RongieFug\",\"email\":\"ugrimovmakar@rambler.ru\"}','Каждая семья стремится встречать ради себя хорошую &lt;a href=https://simclinic.pro/&gt;стоматологическую клинику&lt;/a&gt; . Выбрать профессионального врача бывает порой не простой, следовательно надо владеть определенными знаниями, которые помогут подобрать фактически грамотного специалиста. \r\nБыть выборе семейной стоматологии нуждаться устремлять внимание на помещение. Оно должен совпадать государственным нормам. Ежели интерьер в здании приятен, в нем комфортно находиться. Немаловажным фактором служат косвенные признаки хорошего помещения – вентиляция, объяснение, температура. \r\nВнешний мишура персонала также важен чтобы оценки стоматологии. Опрятный вид, чистая фасон вызывают вера у пациентов. Отделка помещений должна дозволять проводить качественную стерилизацию. Наличие современного оборудования указывает на обновляемость кабинетов. \r\nПрофессиональные стоматологи работают в паре с медсестрой. На помощника возложено изрядно груда обязанностей, которые позволят стоматологу не отвлекаться для второстепенные вещи, тем самым, предоставляя услуги более качественно. \r\nУниверсальность стоматологии предполагает в рамках одного здания причинять безбрежный спектр услуг. Это рентгенологический кабинет, хирургия, сотрудничество ортодонта. Возможность проведения всех диагностических и лечебных процессов в одном здании ценится среди пациентов. \r\nОтзывы клиентов зачастую становятся решающими присутствие выборе конкретного специалиста. Опытные стоматологи имеют запись для хитрость для порядочно дней вперед. Сертификаты о прохождении курсов квалификации указывают на компетентность врача. Изучение новых технологий в сфере лечения зубов позволяет влагать на практике передовые наработки, которые имеют высокую эффективность в достижении конкретных результатов. \r\nПрофессиональный стоматолог принужден уметь обретать краткий народ со всеми участника семьи. Особенно это касается детей, к которым нужен особенный подход. Регулярные посещения семейного стоматолога в профилактических целях придадут доверие ребенку и не будут принуждать ощущения страха в будущем. \r\nЭксперимент работы подтверждается категорией врача. Высшую категорию получают специалисты, стаж работы которых достигает 10-ти лет. Профессиональный костоправ должен иметься хорошим психологом. Знание доктора выслушать вызывает у пациента вера к такому специалисту. В семейной стоматологии после лечения зубов пациенты получают рекомендации от врача. В них даются советы сообразно профилактическому уходу за полостью рта и мероприятия сообразно предотвращению возможных заболеваний. \r\nНаша &lt;a href=https://simclinic.pro/contacts/&gt;стоматология&lt;/a&gt; поможет вам! \r\nИсточник: https://simclinic.pro/','1559017277','10','0'),
('17','46.188.98.10','{\"name\":\"GeorgeDaf\",\"email\":\"karzhov.gena@mail.ru\"}','hdron.tv \r\n \r\n&lt;a href=https://hdron.tv/26903-vdovy-2018-film-smotret-onlayn.html&gt;https://hdron.tv/26903-vdovy-2018-film-smotret-onlayn.html&lt;/a&gt;','1559017569','10','0'),
('18','185.136.166.126','{\"name\":\"Herbertsar\",\"email\":\"swispbiolo@gmail.com\"}','cialis side effects go away \r\n&lt;a href=&quot;http://cialisdxt.com/&quot;&gt;cialis online&lt;/a&gt; \r\ncialis generico precio chile \r\n&lt;a href=&quot;http://cialisdxt.com/&quot;&gt;cialis online&lt;/a&gt; \r\ncialis dosage 80 mg','1559017579','10','0'),
('19','37.115.205.71','{\"name\":\"WillieHex\",\"email\":\"sdera12345@sisemazamkov.com\"}','Лечение гепатита \r\n \r\n&lt;a href=https://apteka-onko.ru/product-category/effektivnye-sredstva-lecheniya-raka/&gt;дазатиниб спрайсел&lt;/a&gt;\r\n&lt;a href=https://apteka-onko.ru/product-category/effektivnye-sredstva-lecheniya-raka/&gt;таблетки мекинист купить в москве&lt;/a&gt;\r\n&lt;a href=https://apteka-onko.ru/product-category/effektivnye-sredstva-lecheniya-raka/&gt;линпарза олапариб дженерики 13&lt;/a&gt;\r\n \r\n \r\n&lt;a href=https://apteka-onko.ru/product-category/effektivnye-sredstva-lecheniya-raka/&gt;зитига цена 250 мг 500 мг&lt;/a&gt;\r\n&lt;a href=https://apteka-onko.ru/product-category/effektivnye-sredstva-lecheniya-raka/&gt;алкеран аналоги&lt;/a&gt;\r\n&lt;a href=https://apteka-onko.ru/product-category/effektivnye-sredstva-lecheniya-raka/&gt;инлита отзывы пациентов&lt;/a&gt;','1559020935','10','0'),
('20','5.188.210.36','{\"name\":\"JudyAcurb\",\"email\":\"vivian@probbox.com\"}','[url=http://advair250.com/]advair[/url] [url=http://sildenafiltab.com/]buy sildenafil citrate[/url] [url=http://cialis60.com/]buy generic cialis online[/url] [url=http://tadalafil100.com/]tadalafil 10 mg[/url] [url=http://prednisone40.com/]10mg prednisone[/url] [url=http://phenergandm.com/]phenergan 12.5[/url] [url=http://cafergotbuy.com/]buy cafergot[/url] [url=http://sildenafilcitrate50.com/]citrate sildenafil[/url] [url=http://ventolinhf.com/]ventolin hfa 90 mcg inhaler[/url] [url=http://ventolinsale.com/]ventolin hfa price[/url]','1559021283','10','0'),
('21','5.188.210.61','{\"name\":\"KiaAcurb\",\"email\":\"asusskind@probbox.com\"}','[url=https://tetracyclinerx.com/]tetracycline buy online[/url]','1559021581','10','0'),
('22','46.188.98.10','{\"name\":\"Michaeledind\",\"email\":\"sabirulin.german@mail.ru\"}','hdclips.tv \r\n \r\n&lt;a href=https://hdclips.tv/165-serial-plakuchaja-iva-2018-smotret-onlajn.html&gt;https://hdclips.tv/165-serial-plakuchaja-iva-2018-smotret-onlajn.html&lt;/a&gt;','1559027615','10','0'),
('23','46.188.98.10','{\"name\":\"JamesFok\",\"email\":\"borya.makhonin@mail.ru\"}','hdron.tv \r\n \r\n&lt;a href=https://hdron.tv/10595-korol-vozduha-1997-film-smotret-onlayn.html&gt;https://hdron.tv/10595-korol-vozduha-1997-film-smotret-onlayn.html&lt;/a&gt;','1559027616','10','0'),
('24','46.161.63.95','{\"name\":\"sefusowon\",\"email\":\"geyazaha23@gmail.com\"}','how long before i stop smoking with champix. &lt;a href=http://champix.medinfoblog.com/can-i-cut-champix-in-half/&gt;champix.medinfoblog.com/can-i-cut-champix-in-half/&lt;/a&gt; - do champix tablets affect the sperm,','1559029032','10','0');

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
-- Kaga Akatsuki - Create Table `log_admin`
--

DROP TABLE IF EXISTS `log_admin`; 
CREATE TABLE `log_admin` (
  `log_id` bigint(15) NOT NULL AUTO_INCREMENT,
  `ip` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `action` longtext COLLATE utf8_unicode_ci,
  `time` int(12) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

--
-- Kaga Akatsuki - Insert Data: `log_admin`
--

INSERT INTO `log_admin` (`log_id`,`ip`,`action`,`time`) VALUES 
('1','::1','Đăng Nhập','1559036334'),
('2','::1','Cập Nhật Tài Khoản Admin','1559036442'),
('3','::1','Đăng Nhập','1559027220');

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
('1','/upload/2019/04/29/thumbnail.png','Chào Mừng Đến Với Blog Kaga Akatsuki','<p>Cho vui thôi =))</p>','45','1556546389','2','1','public','Chào,Mừng,Đến,Với,Blog,Kaga,Akatsuki,Chao,Mung,den,Voi,Blog,Kaga,Akatsuki','',''),
('2','','Test Gallery','<p><img alt=\"\" class=\"img-responsive\" src=\"https://s1-ssl.dmcdn.net/X_2oX/x240-ZKb.jpg\" /></p>\n\n<p><img alt=\"\" class=\"img-responsive\" src=\"https://uploads.disquscdn.com/images/bb2f19e86fb3e5fc877ec728bd10c2c20fc20723c573e57834655cbd6dda8cfc.jpg\" /></p>','98','1556990011','2','1','public','Test,Gallery,test,gallery','',''),
('3','','what','<p>mmm</p>','16','1556994636','2','1','public','what,what','',''),
('4','','kèo','<p>moisw</p>','18','1556994929','2','0','public','kèo,keo','',''),
('5','','ahuhu','<p>fuck</p>','14','1556994993','2','1','public','ahuhu,ahuhu','',''),
('6','','akkaka','<p>skis</p>','18','1556995052','2','1','public','akkaka,akkaka','',''),
('7','','test','<div class=\"youtube-embed-wrapper\" style=\"height:0; overflow:hidden; padding-bottom:56.25%; padding-top:30px; position:relative\"><a href=\"https://www.youtube.com/embed/2DeBQiIfjWk\"><img height=\"auto\" src=\"//img.youtube.com/vi/2DeBQiIfjWk/sddefault.jpg\" style=\"left:0; position:absolute; top:0\" width=\"100%\" /></a></div>\n\n<p>&nbsp;</p>','61','1557030831','2','0','public','test','',''),
('9','','code','<pre>\n<code class=\"language-php\">/*************************\n	*Author: Kaga Akatsuki\n	*Date: 17/04/2019\n*************************/\n\nclass Count {\n\n  private $dir, $online, $count;\n\n  function __construct($dir) {\n		$this---&gt;dir = $dir;\n    if (!is_dir($this-&gt;dir)) {\n      mkdir($this-&gt;dir);\n    }\n    $this-&gt;online = $dir . \"online.log\";\n    $this-&gt;count = $dir . \"count/\";\n	}\n\n  public function get_online($ip) {\n    if (!file_exists($this-&gt;online) || !is_array(json_decode(file_get_contents($this-&gt;online), true))) {\n      file_put_contents($this-&gt;online, json_encode(array()));\n    }\n\n    $online = json_decode(file_get_contents($this-&gt;online), true);\n    $tmp = array();\n    $onl = 0;\n    $time = time();\n    foreach ($online as $key =&gt; $value) {\n      if ($key != $ip) {\n        if ($time - $value &gt; 300) continue;\n        $tmp[$key] = $value;\n        $onl++;\n      }\n    }\n    $onl++;\n    $tmp[$ip] = $time;\n\n    file_put_contents($this-&gt;online, json_encode($tmp));\n\n    return $onl;\n  }\n\n  public function get_count($true = true) {\n    $today = $this-&gt;count . date(\"Y-m-d\") . \".log\";\n    $yesterday = $this-&gt;count . date(\"Y-m-d\", time() - 24 * 60 * 60) . \".log\";\n\n    $count = array (\n      \'today\' =&gt; 0,\n      \'yesterday\' =&gt; 0,\n      \'total\' =&gt; 0,\n      \'date\' =&gt; 0,\n      \'avg\' =&gt; 0,\n      \'month\' =&gt; 0,\n      \'week\' =&gt; 0,\n      \'year\' =&gt; 0\n    );\n\n    if (!is_dir($this-&gt;count)) {\n      mkdir($this-&gt;count);\n    }\n\n    if (!file_exists($today)) {\n      file_put_contents($today, json_encode(array()));\n    }\n\n    if (file_exists($yesterday)) {\n      $count[\'yesterday\'] = count(json_decode(file_get_contents($yesterday), true));\n    }\n\n    $tmp = json_decode(file_get_contents($today), true);\n    if ($true) {\n      $tmp[] = time();\n      file_put_contents($today, json_encode($tmp));\n    }\n    $count[\'today\'] = count($tmp);\n\n    $tmp = glob($this-&gt;count . \"*.log\");\n    $count[\'date\'] = count($tmp);\n\n    foreach ($tmp as $key =&gt; $value) {\n      $count[\'total\'] += count(json_decode(file_get_contents($value), true));\n      foreach (json_decode(file_get_contents($value), true) as $time) {\n        if (date(\"Y-W\", $time) == date(\"Y-W\")) {\n          $count[\'week\']++;\n        }\n      }\n    }\n\n    $tmp = glob($this-&gt;count . date(\"Y-m\") . \"-*.log\");\n    foreach ($tmp as $key =&gt; $value) {\n      $count[\'month\'] += count(json_decode(file_get_contents($value), true));\n    }\n\n    $tmp = glob($this-&gt;count . date(\"Y\") . \"-*.log\");\n    foreach ($tmp as $key =&gt; $value) {\n      $count[\'year\'] += count(json_decode(file_get_contents($value), true));\n    }\n\n    $count[\'avg\'] = ceil($count[\'total\'] / $count[\'date\']);\n\n    return $count;\n  }\n\n  public function default_count() {\n    $today = $this-&gt;count . date(\"Y-m-d\") . \".log\";\n\n    if (!is_dir($this-&gt;count)) {\n      mkdir($this-&gt;count);\n    }\n\n    if (!file_exists($today)) {\n      file_put_contents($today, json_encode(array()));\n    }\n  }\n}</code></pre>','110','1557043048','2','0','public','code','',''),
('10','','hjx','<pre>\n<code class=\"language-php\">echo \"fuck me bro!!!!\";</code></pre>\n\n<p>&nbsp;</p>','50','1557206477','2','0','public','hjx','','');

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