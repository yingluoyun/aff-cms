-- MySQL dump 10.13  Distrib 5.7.26, for Win64 (x86_64)
--
-- Host: localhost    Database: affcms
-- ------------------------------------------------------
-- Server version	5.7.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `article_list`
--

DROP TABLE IF EXISTS `article_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_list` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `mid` int(5) NOT NULL COMMENT '主站ID',
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `tag` int(9) NOT NULL,
  `img` varchar(500) NOT NULL,
  `view` int(9) NOT NULL,
  `like` int(9) NOT NULL,
  `dislike` int(9) NOT NULL,
  `created_at` int(10) NOT NULL,
  `updated_at` int(10) NOT NULL,
  `status` int(1) NOT NULL COMMENT '状态；0显示，1隐藏',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_list`
--

LOCK TABLES `article_list` WRITE;
/*!40000 ALTER TABLE `article_list` DISABLE KEYS */;
INSERT INTO `article_list` VALUES (20,1,'/xxxx.html','No.1 Herpes Dating Site For Positive Singles','MeetPositives.us , a warm-hearted community exclusively for singles with Herpes and other STDs , has been helping these people find love and support since 2001.',0,'/upload/image/20201211/1607680428203570.jpg',7348,362,6,1607694876,1607695392,0);
/*!40000 ALTER TABLE `article_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `aid` int(9) NOT NULL COMMENT '文章主id',
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (18,20,'<p><span style=\"box-sizing: border-box; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">When you have Herpes, HPV, HIV, Hepatitis B, Hepatitis C, Chlamydia, or another STD, you may feel like you are alone in the world. MeetPositives has always devoted to bringing all people with STDs together so that you don’t have to worry about rejection or discrimination.</span><br/><br/><span style=\"box-sizing: border-box; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 700; background-color: rgb(255, 255, 255);\">MeetPositives.us, a warm-hearted community exclusively for singles with Herpes and other STDs , has been helping these people find love and support since 2001.</span><span style=\"box-sizing: border-box; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">&nbsp;As the world’s best, largest, completely anonymous, and most trusted online dating site for people with Herpes, HPV, HIV/AIDS, Hepatitis B, Hepatitis C, Chlamydia, and other STDs, MeetPositives covers 60,000+ dating success stories, 2,550,000+ monthly conversations and 20,000+ monthly blog posts. Whether you are afflicted with Herpes, HPV, HIV/AIDS or any other STD, on MeetPositives you can find new friends, a potential spouse, community support, and get on with your life.</span><br/><br/><span style=\"box-sizing: border-box; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">We also understand you may be concerned about your privacy. But we can promise you that on MeetPositives you are not required to submit any information that makes you uncomfortable, and all your personal information remains private and anonymous until you decide to take things further.</span><br/><br/><span style=\"box-sizing: border-box; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">Everyone with an STD is welcome on MeetPositives regardless of race, religion, sexual orientation, or gender. There are over 110 million people living with STDs in the US, with an estimated 400 million people worldwide – you are not alone!</span></p>');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `main_sites`
--

DROP TABLE IF EXISTS `main_sites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `main_sites` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `abbr` varchar(255) NOT NULL COMMENT '主站简称',
  `url` varchar(500) NOT NULL,
  `theme` int(3) NOT NULL COMMENT '模板主题',
  `status` int(1) NOT NULL COMMENT '主站状态, 0开启，1停用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `main_sites`
--

LOCK TABLES `main_sites` WRITE;
/*!40000 ALTER TABLE `main_sites` DISABLE KEYS */;
INSERT INTO `main_sites` VALUES (1,'meetpositives','www.meetpositives.io',1,0);
/*!40000 ALTER TABLE `main_sites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programa`
--

DROP TABLE IF EXISTS `programa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programa` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `lid` int(9) NOT NULL COMMENT '栏目排序',
  `mid` int(9) NOT NULL,
  `rel` varchar(255) NOT NULL,
  `type` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(500) NOT NULL,
  `status` int(1) NOT NULL COMMENT '0显示、1隐藏',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programa`
--

LOCK TABLES `programa` WRITE;
/*!40000 ALTER TABLE `programa` DISABLE KEYS */;
INSERT INTO `programa` VALUES (27,7,1,'nofollow',1,'SIGN UP','/signup.html',0),(25,5,1,'nofollow',1,'REGIONAL SITES IN US','/#sites',0),(26,6,1,'nofollow',1,'SIGN IN','/signin.html',0),(24,4,1,'nofollow',2,'ENHANCED PRIVACY PROTECTION','/extra_privacy.html',0),(21,2,1,'follow',3,'BLOG','/blog.html',0),(22,1,1,'follow',1,'MEETPOSITIVES.IO','/',0),(23,3,1,'nofollow',2,'PRESS & MEDIA','/press.html',0);
/*!40000 ALTER TABLE `programa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programa_1`
--

DROP TABLE IF EXISTS `programa_1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programa_1` (
  `id` int(9) NOT NULL AUTO_INCREMENT COMMENT '301重定向栏目',
  `pid` int(9) NOT NULL COMMENT '栏目主id',
  `redirect` varchar(500) NOT NULL COMMENT '重定向地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programa_1`
--

LOCK TABLES `programa_1` WRITE;
/*!40000 ALTER TABLE `programa_1` DISABLE KEYS */;
INSERT INTO `programa_1` VALUES (13,27,'https://www.positivesingles.com/guest?tid=meetps'),(11,25,'/#sites'),(12,26,'https://www.positivesingles.com/login?tid=meetpsin'),(10,22,'/');
/*!40000 ALTER TABLE `programa_1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programa_2`
--

DROP TABLE IF EXISTS `programa_2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programa_2` (
  `id` int(9) NOT NULL AUTO_INCREMENT COMMENT '栏目详情页',
  `pid` int(9) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programa_2`
--

LOCK TABLES `programa_2` WRITE;
/*!40000 ALTER TABLE `programa_2` DISABLE KEYS */;
INSERT INTO `programa_2` VALUES (3,23,'PRESS & MEDIA','The Best &amp; Largest STD Dating Site &amp; App for People with Herpes (HSV-1, HSV-2), HPV, HIV/AIDS &amp; Hepatitis. Join for FREE and meet singles with STDs','<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">\n    MeetPositives.us &amp; PositiveSingles welcomes press, news and media coverage.\n</p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">\n    For executive or spokesperson interviews, email us at&nbsp;<span style=\"box-sizing: border-box; font-weight: 700;\">Mediapress@PositiveSingles.com or call 1-416-628-1072.</span>\n</p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">\n    For high-resolution PositiveSingles screenshots, logo, and branding, please download our press kit.\n</p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">\n    <span style=\"box-sizing: border-box; color: rgb(51, 122, 183); font-weight: 700;\"><a rel=\"nofollow\" href=\"https://aws-static.tmatch.com/stdmm/press/press_kit_v3.rar\" style=\"box-sizing: border-box; color: rgb(51, 122, 183); text-decoration-line: none;\">Download the press kit</a></span>\n</p>\n<p>\n    <img src=\"/upload/image/20201211/1607680428203570.jpg\" title=\"1607680428203570.jpg\" alt=\"press_content_img_v3.jpg\"/>\n</p>'),(4,24,'ENHANCED PRIVACY PROTECTION & LONG-TERM PEACE OF MIND','MeetPositives.us takes your privacy very seriously. Check out the Service Agreement to know more information.','<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">For high-resolution PositiveSingles screenshots, logo, and branding, please download our press kit.</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">For more information, please check out our<a href=\"https://www.positivesingles.com/service_agreement?sa=1&tid=meetps\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(51, 122, 183); text-decoration-line: none;\">Service Agreement.</a></p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\"><span style=\"box-sizing: border-box; color: rgb(51, 122, 183); text-decoration-line: none; font-weight: 700;\"><a href=\"/signup.html\" style=\"box-sizing: border-box; color: rgb(51, 122, 183); text-decoration-line: none;\">JOIN NOW</a></span></p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\"><img src=\"/upload/image/20201211/1607680428203570.jpg\" title=\"1607680428203570.jpg\" alt=\"press_content_img_v3.jpg\"/></p><p><br/></p>');
/*!40000 ALTER TABLE `programa_2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programa_3`
--

DROP TABLE IF EXISTS `programa_3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programa_3` (
  `id` int(9) NOT NULL AUTO_INCREMENT COMMENT '栏目详情页',
  `pid` int(9) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programa_3`
--

LOCK TABLES `programa_3` WRITE;
/*!40000 ALTER TABLE `programa_3` DISABLE KEYS */;
INSERT INTO `programa_3` VALUES (5,21,'PS Blog - STD Dating Information','The Best and Largest US STD Dating Site &amp; App for People with Herpes (HSV-1, HSV-2), HPV, HIV/AIDS &amp; Hepatitis. Join for FREE and meet STD singles.');
/*!40000 ALTER TABLE `programa_3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programa_4`
--

DROP TABLE IF EXISTS `programa_4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programa_4` (
  `id` int(9) NOT NULL AUTO_INCREMENT COMMENT '栏目详情页',
  `pid` int(9) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programa_4`
--

LOCK TABLES `programa_4` WRITE;
/*!40000 ALTER TABLE `programa_4` DISABLE KEYS */;
/*!40000 ALTER TABLE `programa_4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_sites`
--

DROP TABLE IF EXISTS `sub_sites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sub_sites` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `mid` int(5) NOT NULL,
  `theme` int(3) NOT NULL,
  `abbr` varchar(255) NOT NULL,
  `url` varchar(500) NOT NULL,
  `status` int(1) NOT NULL COMMENT '主站状态, 0开启，1停用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_sites`
--

LOCK TABLES `sub_sites` WRITE;
/*!40000 ALTER TABLE `sub_sites` DISABLE KEYS */;
INSERT INTO `sub_sites` VALUES (19,1,1,'Test SubSite','/xxxx.html',0),(20,1,1,'ABBR','/yyyyy.html',1);
/*!40000 ALTER TABLE `sub_sites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `theme1_mainsites`
--

DROP TABLE IF EXISTS `theme1_mainsites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `theme1_mainsites` (
  `id` int(9) NOT NULL AUTO_INCREMENT COMMENT '主站详情表ID',
  `mid` int(9) NOT NULL COMMENT '主站ID',
  `title` varchar(128) NOT NULL COMMENT '网页标题',
  `description` varchar(500) NOT NULL COMMENT '网页描述',
  `topimgurl` varchar(128) NOT NULL COMMENT '顶部图片地址',
  `topimgalt` varchar(128) NOT NULL COMMENT '顶部图片描述',
  `toptext1` varchar(500) NOT NULL COMMENT '顶部文本1',
  `toptext2` varchar(500) NOT NULL COMMENT '顶部文本2',
  `toptext3` varchar(500) NOT NULL COMMENT '顶部文本3',
  `iosurl` varchar(128) NOT NULL COMMENT '苹果下载地址',
  `andurl` varchar(128) NOT NULL COMMENT '安卓下载地址',
  `weburl` varchar(128) NOT NULL COMMENT '网站注册地址',
  `webname` varchar(128) NOT NULL COMMENT '网站注册描述',
  `main1img1` varchar(128) NOT NULL COMMENT '主体1图片1',
  `main1img1alt` varchar(128) NOT NULL COMMENT '主体1图片1描述',
  `main1img2` varchar(128) NOT NULL COMMENT '主体1图片2',
  `main1img2alt` varchar(128) NOT NULL COMMENT '主体1图片2描述',
  `main1text1` varchar(500) NOT NULL COMMENT '主体1文本1',
  `main1text2` varchar(500) NOT NULL COMMENT '主体1文本2',
  `main2img1` varchar(128) NOT NULL COMMENT '主体2图片1',
  `main2img1alt` varchar(128) NOT NULL COMMENT '主体2图片1描述',
  `main2img2` varchar(128) NOT NULL COMMENT '主体2图片2',
  `main2img2alt` varchar(128) NOT NULL COMMENT '主体2图片2描述',
  `main2text1` varchar(500) NOT NULL COMMENT '主体2文本1',
  `main2text2` varchar(500) NOT NULL COMMENT '主体2文本2',
  `main3img1` varchar(128) NOT NULL COMMENT '主体3图片1',
  `main3img1alt` varchar(128) NOT NULL COMMENT '主体3图片1描述',
  `main3img2` varchar(128) NOT NULL COMMENT '主体3图片2',
  `main3img2alt` varchar(128) NOT NULL COMMENT '主体3图片2描述',
  `main3text1` varchar(500) NOT NULL COMMENT '主体3文本1',
  `main3text2` varchar(500) NOT NULL COMMENT '主体3文本2',
  `main4img1` varchar(128) NOT NULL COMMENT '主体4图片1',
  `main4img1alt` varchar(128) NOT NULL COMMENT '主体4图片1描述',
  `main4img2` varchar(128) NOT NULL COMMENT '主体4图片2',
  `main4img2alt` varchar(128) NOT NULL COMMENT '主体4图片2描述',
  `main4text1` varchar(500) NOT NULL COMMENT '主体4文本1',
  `main4text2` varchar(500) NOT NULL COMMENT '主体4文本2',
  `main5img1` varchar(128) NOT NULL COMMENT '主体5图片1',
  `main5img1alt` varchar(128) NOT NULL COMMENT '主体5图片1描述',
  `main5img2` varchar(128) NOT NULL COMMENT '主体5图片2',
  `main5img2alt` varchar(128) NOT NULL COMMENT '主体5图片2描述',
  `main5text1` varchar(500) NOT NULL COMMENT '主体5文本1',
  `main5text2` varchar(500) NOT NULL COMMENT '主体5文本2',
  `bannertitle` varchar(128) NOT NULL COMMENT '幻灯片标题',
  `banner1img` varchar(128) NOT NULL COMMENT '幻灯片1图片',
  `banner1imgalt` varchar(128) NOT NULL COMMENT '幻灯片1图片描述',
  `banner1title` varchar(128) NOT NULL COMMENT '幻灯片1标题',
  `banner1content` varchar(500) NOT NULL COMMENT '幻灯片1文本',
  `banner2img` varchar(128) NOT NULL COMMENT '幻灯片2图片',
  `banner2imgalt` varchar(128) NOT NULL COMMENT '幻灯片2图片描述',
  `banner2title` varchar(128) NOT NULL COMMENT '幻灯片2标题',
  `banner2content` varchar(500) NOT NULL COMMENT '幻灯片2文本',
  `footer` varchar(200) NOT NULL COMMENT '底部内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `theme1_mainsites`
--

LOCK TABLES `theme1_mainsites` WRITE;
/*!40000 ALTER TABLE `theme1_mainsites` DISABLE KEYS */;
INSERT INTO `theme1_mainsites` VALUES (1,1,'#1 US STD Dating Website for Positive Singles','The Best and Largest US STD Dating Site App for People with Herpes HSV 1, HSV 2 , HPV, HIV AIDS Hepatitis Join for FREE and meet STD singles.','/storage/upload/image/20201121/b3lIUj1bpsjnMkiYTcOQB50HWZ5GT6cQWcFHqiJr.png','meetpositive-banner','1,958,300+ Registered Members','World\'s Largest Confidential','Herpes & STD Dating and Support Community Since 2001','https://app.appsflyer.com/id1419085637?pid=meetps111','https://app.appsflyer.com/com.stddating.positivesingles?pid=meetps','/signup.html','Join For Free','/storage/upload/image/20201121/F1UyBd4o8J7iTHZCf5XfKV1Ve7MHWMwkv9yEtqZ4.png','Largest Confidential','/storage/upload/image/20201121/lkOZALy4Db32hfSNc8l3o3ZOAbLzZZVszpBwNUYL.png','Be friends','What We Do','Meetpositives.us, a branch of positivesingles, is the largest Herpes & STD Dating and Support Community Since 2001. With more than 1,956,300 members join us.We create meaningful connections that spark hearts and inspire people to share themselves authentically and enthusiastically.','/storage/upload/image/20201121/F1UyBd4o8J7iTHZCf5XfKV1Ve7MHWMwkv9yEtqZ4.png','Largest Confidential','/storage/upload/image/20201121/lkOZALy4Db32hfSNc8l3o3ZOAbLzZZVszpBwNUYL.png','Be friends','Smart Algorithm','Every day at noon, receive quality matches curated just for you by our ever-evolving algorithm.','/storage/upload/image/20201123/C1uDNK8nhC1FPpft0CrqHTvzpiIFfxYpjmwgKOla.png','In-Depth Profiles','/storage/upload/image/20201123/BFWXVSCB4busU8RBiWDYHtwi05reP8eSibpbwjob.png','like','In-Depth Profiles','Share the true you and get to know your matches with profiles that dig deep.','/storage/upload/image/20201123/Qo4wNl7s8euFPIuIutPWBqFTCjfUcBx70T8WCb81.png','Real Conversations','/storage/upload/image/20201123/IMmqJsxz9v8QmU75UGZFyRXbIAAzp9U3TRigKlvy.png','Real Conversations','Conversations','Skip the small talk and spark meaningful conversation with personalized Icebreakers.','/storage/upload/image/20201121/F1UyBd4o8J7iTHZCf5XfKV1Ve7MHWMwkv9yEtqZ4.png','Advanced Search','/storage/upload/image/20201121/lkOZALy4Db32hfSNc8l3o3ZOAbLzZZVszpBwNUYL.png','Advanced Search','Advanced Search','Narrow down search results by setting criteria like location, education level, body type, ethnicity and save for one-click convenience next time.','Successful Match','/storage/upload/image/20201123/dzhYxLWTTFEjenl0PfkPSDKAoaCwCQO3ePqEGZot.jpeg','Nate & Kristin','Nate & Kristin','The first time, we met for coffee (although, ironically, neither of us drink coffee) and chatted for a few hours. He called me the next day to ask me out for Valentine’s Day. He told me that he felt like he had known me for 6 months, and I felt the same.','/storage/upload/image/20201123/y5LFDKEYBEOu2boTurPlm8UQqmmfPZBoq9VHMEUx.jpeg','Tamara & Jon','Tamara & Jon','I was fed up with the LA dating scene and thought to myself, what do I have to lose?! Well, 2 years later I can now say…I lost nothing, but I gained EVERYTHING. […] Two years later I am still with this amazing man','MEETPOSITIVES.US © 2001-20201');
/*!40000 ALTER TABLE `theme1_mainsites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `theme1_subsites`
--

DROP TABLE IF EXISTS `theme1_subsites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `theme1_subsites` (
  `id` int(9) NOT NULL AUTO_INCREMENT COMMENT '主站详情表ID',
  `sid` int(9) NOT NULL COMMENT '主站ID',
  `title` varchar(128) NOT NULL COMMENT '网页标题',
  `description` varchar(500) NOT NULL COMMENT '网页描述',
  `topimgurl` varchar(128) NOT NULL COMMENT '顶部图片地址',
  `topimgalt` varchar(128) NOT NULL COMMENT '顶部图片描述',
  `toptext1` varchar(500) NOT NULL COMMENT '顶部文本1',
  `toptext2` varchar(500) NOT NULL COMMENT '顶部文本2',
  `toptext3` varchar(500) NOT NULL COMMENT '顶部文本3',
  `iosurl` varchar(128) NOT NULL COMMENT '苹果下载地址',
  `andurl` varchar(128) NOT NULL COMMENT '安卓下载地址',
  `weburl` varchar(128) NOT NULL COMMENT '网站注册地址',
  `webname` varchar(128) NOT NULL COMMENT '网站注册描述',
  `main1img1` varchar(128) NOT NULL COMMENT '主体1图片1',
  `main1img1alt` varchar(128) NOT NULL COMMENT '主体1图片1描述',
  `main1img2` varchar(128) NOT NULL COMMENT '主体1图片2',
  `main1img2alt` varchar(128) NOT NULL COMMENT '主体1图片2描述',
  `main1text1` varchar(500) NOT NULL COMMENT '主体1文本1',
  `main1text2` varchar(500) NOT NULL COMMENT '主体1文本2',
  `main2img1` varchar(128) NOT NULL COMMENT '主体2图片1',
  `main2img1alt` varchar(128) NOT NULL COMMENT '主体2图片1描述',
  `main2img2` varchar(128) NOT NULL COMMENT '主体2图片2',
  `main2img2alt` varchar(128) NOT NULL COMMENT '主体2图片2描述',
  `main2text1` varchar(500) NOT NULL COMMENT '主体2文本1',
  `main2text2` varchar(500) NOT NULL COMMENT '主体2文本2',
  `main3img1` varchar(128) NOT NULL COMMENT '主体3图片1',
  `main3img1alt` varchar(128) NOT NULL COMMENT '主体3图片1描述',
  `main3img2` varchar(128) NOT NULL COMMENT '主体3图片2',
  `main3img2alt` varchar(128) NOT NULL COMMENT '主体3图片2描述',
  `main3text1` varchar(500) NOT NULL COMMENT '主体3文本1',
  `main3text2` varchar(500) NOT NULL COMMENT '主体3文本2',
  `main4img1` varchar(128) NOT NULL COMMENT '主体4图片1',
  `main4img1alt` varchar(128) NOT NULL COMMENT '主体4图片1描述',
  `main4img2` varchar(128) NOT NULL COMMENT '主体4图片2',
  `main4img2alt` varchar(128) NOT NULL COMMENT '主体4图片2描述',
  `main4text1` varchar(500) NOT NULL COMMENT '主体4文本1',
  `main4text2` varchar(500) NOT NULL COMMENT '主体4文本2',
  `main5img1` varchar(128) NOT NULL COMMENT '主体5图片1',
  `main5img1alt` varchar(128) NOT NULL COMMENT '主体5图片1描述',
  `main5img2` varchar(128) NOT NULL COMMENT '主体5图片2',
  `main5img2alt` varchar(128) NOT NULL COMMENT '主体5图片2描述',
  `main5text1` varchar(500) NOT NULL COMMENT '主体5文本1',
  `main5text2` varchar(500) NOT NULL COMMENT '主体5文本2',
  `bannertitle` varchar(128) NOT NULL COMMENT '幻灯片标题',
  `banner1img` varchar(128) NOT NULL COMMENT '幻灯片1图片',
  `banner1imgalt` varchar(128) NOT NULL COMMENT '幻灯片1图片描述',
  `banner1title` varchar(128) NOT NULL COMMENT '幻灯片1标题',
  `banner1content` varchar(500) NOT NULL COMMENT '幻灯片1文本',
  `banner2img` varchar(128) NOT NULL COMMENT '幻灯片2图片',
  `banner2imgalt` varchar(128) NOT NULL COMMENT '幻灯片2图片描述',
  `banner2title` varchar(128) NOT NULL COMMENT '幻灯片2标题',
  `banner2content` varchar(500) NOT NULL COMMENT '幻灯片2文本',
  `footer` varchar(200) NOT NULL COMMENT '底部内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `theme1_subsites`
--

LOCK TABLES `theme1_subsites` WRITE;
/*!40000 ALTER TABLE `theme1_subsites` DISABLE KEYS */;
INSERT INTO `theme1_subsites` VALUES (1,19,'parent','parent','parent','parent','Test Site','Test Site Test Site','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent'),(2,20,'Test Site Test Site','parent','parent','parent','Test Site','Test Site','Test Site','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent','parent');
/*!40000 ALTER TABLE `theme1_subsites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` char(32) NOT NULL,
  `password` char(64) NOT NULL,
  `remember_token` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','$2y$10$jTMJFl9yXgEHA5elDym8H.rE7aS6nWKb1f1tChnXZ3qg1LrUvnGD2','0');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visit`
--

DROP TABLE IF EXISTS `visit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visit` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `num` int(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visit`
--

LOCK TABLES `visit` WRITE;
/*!40000 ALTER TABLE `visit` DISABLE KEYS */;
INSERT INTO `visit` VALUES (1,2);
/*!40000 ALTER TABLE `visit` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-11 22:23:20
