-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: venus
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `about_us` (
  `about_us_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `image_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int DEFAULT NULL,
  `tagline` varchar(99) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `terms_and_conditions` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`about_us_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_us`
--

LOCK TABLES `about_us` WRITE;
/*!40000 ALTER TABLE `about_us` DISABLE KEYS */;
INSERT INTO `about_us` VALUES (1,'Venus ','As for any undergraduate, the first year passed in a blur of textbooks, lectures and nights out. The atmosphere at Cambridge was like nothing I’d ever experienced before: everyone seemed to share a common desire to debate.','about_us_venus.jpg',1500998091,'Alumni Association','<div class=\"main\">\r\n<div class=\"article\" id=\"content\">\r\n<div id=\"placeholders\">\r\n<h2><strong>Terms and Conditions</strong></h2>\r\n<p>Welcome to <span class=\"highlight preview_website_name\">Website Name</span>!</p>\r\n<p>These terms and conditions outline the rules and regulations for the use of <span class=\"highlight preview_company_name\">Company Name</span>\'s Website, located at <span class=\"highlight preview_website_url\">Website.com</span>.</p>\r\n<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use <span class=\"highlight preview_website_name\">Website Name</span> if you do not agree to take all of the terms and conditions stated on this page.</p>\r\n<p>The following terminology applies to these Terms and Conditions, \r\nPrivacy Statement and Disclaimer Notice and all Agreements: “Client”, \r\n“You” and “Your” refers to you, the person log on this website and \r\ncompliant to the Company\'s terms and conditions. “The Company”, \r\n“Ourselves”, “We”, “Our” and “Us”, refers to our Company. “Party”, \r\n“Parties”, or “Us”, refers to both the Client and ourselves. All terms \r\nrefer to the offer, acceptance and consideration of payment necessary to\r\n undertake the process of our assistance to the Client in the most \r\nappropriate manner for the express purpose of meeting the Client\'s needs\r\n in respect of provision of the Company\'s stated services, in accordance\r\n with and subject to, prevailing law of Netherlands. Any use of the \r\nabove terminology or other words in the singular, plural, capitalization\r\n and/or he/she or they, are taken as interchangeable and therefore as \r\nreferring to same.</p>\r\n<h3><strong>Cookies</strong></h3>\r\n<p>We employ the use of cookies. By accessing <span class=\"highlight preview_website_name\">Website Name</span>, you agreed to use cookies in agreement with the <span class=\"highlight preview_company_name\">Company Name</span>\'s Privacy Policy.</p>\r\n<p>Most interactive websites use cookies to let us retrieve the user\'s \r\ndetails for each visit. Cookies are used by our website to enable the \r\nfunctionality of certain areas to make it easier for people visiting our\r\n website. Some of our affiliate/advertising partners may also use \r\ncookies.</p>\r\n<h3><strong>License</strong></h3>\r\n<p>Unless otherwise stated, <span class=\"highlight preview_company_name\">Company Name</span> and/or its licensors own the intellectual property rights for all material on <span class=\"highlight preview_website_name\">Website Name</span>. All intellectual property rights are reserved. You may access this from <span class=\"highlight preview_website_name\">Website Name</span> for your own personal use subjected to restrictions set in these terms and conditions.</p>\r\n<p>You must not:</p>\r\n<ul><li>Republish material from <span class=\"highlight preview_website_name\">Website Name</span></li><li>Sell, rent or sub-license material from <span class=\"highlight preview_website_name\">Website Name</span></li><li>Reproduce, duplicate or copy material from <span class=\"highlight preview_website_name\">Website Name</span></li><li>Redistribute content from <span class=\"highlight preview_website_name\">Website Name</span></li></ul>\r\n<p>This Agreement shall begin on the date hereof.</p>\r\n<p>Parts of this website offer an opportunity for users to post and \r\nexchange opinions and information in certain areas of the website. <span class=\"highlight preview_company_name\">Company Name</span>\r\n does not filter, edit, publish or review Comments prior to their \r\npresence on the website. Comments do not reflect the views and opinions \r\nof <span class=\"highlight preview_company_name\">Company Name</span>,its \r\nagents and/or affiliates. Comments reflect the views and opinions of the\r\n person who post their views and opinions. To the extent permitted by \r\napplicable laws, <span class=\"highlight preview_company_name\">Company Name</span>\r\n shall not be liable for the Comments or for any liability, damages or \r\nexpenses caused and/or suffered as a result of any use of and/or posting\r\n of and/or appearance of the Comments on this website.</p>\r\n<p><span class=\"highlight preview_company_name\">Company Name</span> \r\nreserves the right to monitor all Comments and to remove any Comments \r\nwhich can be considered inappropriate, offensive or causes breach of \r\nthese Terms and Conditions.</p>\r\n<p>You warrant and represent that:</p>\r\n<ul><li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li><li>The Comments do not invade any intellectual property right, \r\nincluding without limitation copyright, patent or trademark of any third\r\n party;</li><li>The Comments do not contain any defamatory, libelous, offensive, \r\nindecent or otherwise unlawful material which is an invasion of privacy</li><li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li></ul>\r\n<p>You hereby grant <span class=\"highlight preview_company_name\">Company Name</span>\r\n a non-exclusive license to use, reproduce, edit and authorize others to\r\n use, reproduce and edit any of your Comments in any and all forms, \r\nformats or media.</p>\r\n<h3><strong>Hyperlinking to our Content</strong></h3>\r\n<p>The following organizations may link to our Website without prior written approval:</p>\r\n<ul><li>Government agencies;</li><li>Search engines;</li><li>News organizations;</li><li>Online directory distributors may link to our Website in the same \r\nmanner as they hyperlink to the Websites of other listed businesses; and</li><li>System wide Accredited Businesses except soliciting non-profit \r\norganizations, charity shopping malls, and charity fundraising groups \r\nwhich may not hyperlink to our Web site.</li></ul>\r\n<p>These organizations may link to our home page, to publications or to \r\nother Website information so long as the link: (a) is not in any way \r\ndeceptive; (b) does not falsely imply sponsorship, endorsement or \r\napproval of the linking party and its products and/or services; and (c) \r\nfits within the context of the linking party\'s site.</p>\r\n<p>We may consider and approve other link requests from the following types of organizations:</p>\r\n<ul><li>commonly-known consumer and/or business information sources;</li><li>dot.com community sites;</li><li>associations or other groups representing charities;</li><li>online directory distributors;</li><li>internet portals;</li><li>accounting, law and consulting firms; and</li><li>educational institutions and trade associations.</li></ul>\r\n<p>We will approve link requests from these organizations if we decide \r\nthat: (a) the link would not make us look unfavorably to ourselves or to\r\n our accredited businesses; (b) the organization does not have any \r\nnegative records with us; (c) the benefit to us from the visibility of \r\nthe hyperlink compensates the absence of <span class=\"highlight preview_company_name\">Company Name</span>; and (d) the link is in the context of general resource information.</p>\r\n<p>These organizations may link to our home page so long as the link: \r\n(a) is not in any way deceptive; (b) does not falsely imply sponsorship,\r\n endorsement or approval of the linking party and its products or \r\nservices; and (c) fits within the context of the linking party\'s site.</p>\r\n<p>If you are one of the organizations listed in paragraph 2 above and \r\nare interested in linking to our website, you must inform us by sending \r\nan e-mail to <span class=\"highlight preview_company_name\">Company Name</span>.\r\n Please include your name, your organization name, contact information \r\nas well as the URL of your site, a list of any URLs from which you \r\nintend to link to our Website, and a list of the URLs on our site to \r\nwhich you would like to link. Wait 2-3 weeks for a response.</p>\r\n<p>Approved organizations may hyperlink to our Website as follows:</p>\r\n<ul><li>By use of our corporate name; or</li><li>By use of the uniform resource locator being linked to; or</li><li>By use of any other description of our Website being linked to that \r\nmakes sense within the context and format of content on the linking \r\nparty\'s site.</li></ul>\r\n<p>No use of <span class=\"highlight preview_company_name\">Company Name</span>\'s logo or other artwork will be allowed for linking absent a trademark license agreement.</p>\r\n<h3><strong>iFrames</strong></h3>\r\n<p>Without prior approval and written permission, you may not create \r\nframes around our Webpages that alter in any way the visual presentation\r\n or appearance of our Website.</p>\r\n<h3><strong>Content Liability</strong></h3>\r\n<p>We shall not be hold responsible for any content that appears on your\r\n Website. You agree to protect and defend us against all claims that is \r\nrising on your Website. No link(s) should appear on any Website that may\r\n be interpreted as libelous, obscene or criminal, or which infringes, \r\notherwise violates, or advocates the infringement or other violation of,\r\n any third party rights.</p>\r\n<h3><strong>Reservation of Rights</strong></h3>\r\n<p>We reserve the right to request that you remove all links or any \r\nparticular link to our Website. You approve to immediately remove all \r\nlinks to our Website upon request. We also reserve the right to amen \r\nthese terms and conditions and it\'s linking policy at any time. By \r\ncontinuously linking to our Website, you agree to be bound to and follow\r\n these linking terms and conditions.</p>\r\n<h3><strong>Removal of links from our website</strong></h3>\r\n<p>If you find any link on our Website that is offensive for any reason,\r\n you are free to contact and inform us any moment. We will consider \r\nrequests to remove links but we are not obligated to or so or to respond\r\n to you directly.</p>\r\n<p>We do not ensure that the information on this website is correct, we \r\ndo not warrant its completeness or accuracy; nor do we promise to ensure\r\n that the website remains available or that the material on the website \r\nis kept up to date.</p>\r\n<h3><strong>Disclaimer</strong></h3>\r\n<p>To the maximum extent permitted by applicable law, we exclude all \r\nrepresentations, warranties and conditions relating to our website and \r\nthe use of this website. Nothing in this disclaimer will:</p>\r\n<ul><li>limit or exclude our or your liability for death or personal injury;</li><li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li><li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li><li>exclude any of our or your liabilities that may not be excluded under applicable law.</li></ul>\r\n<p>The limitations and prohibitions of liability set in this Section and\r\n elsewhere in this disclaimer: (a) are subject to the preceding \r\nparagraph; and (b) govern all liabilities arising under the disclaimer, \r\nincluding liabilities arising in contract, in tort and for breach of \r\nstatutory duty.</p>\r\n<p>As long as the website and the information and services on the \r\nwebsite are provided free of charge, we will not be liable for any loss \r\nor damage of any nature.</p>\r\n</div>\r\n</div>\r\n</div><p><br></p>');
/*!40000 ALTER TABLE `about_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(55) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `password` varchar(99) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `timestamp` int DEFAULT NULL,
  `admin_type` varchar(22) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `person_id` int DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin@venus.com','$2y$10$3keQeigrK1CKwCGvkQNs/eEboUPf4ycqTreuKa8WQfdZUp1N1ZnTa',1500998091,'admin',0);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `album` (
  `album_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `timestamp` int DEFAULT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `album`
--

LOCK TABLES `album` WRITE;
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
/*!40000 ALTER TABLE `album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumnus`
--

DROP TABLE IF EXISTS `alumnus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alumnus` (
  `alumnus_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(99) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(22) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_id` int NOT NULL,
  `website` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `batch` int DEFAULT NULL,
  `image_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `profession_id` int NOT NULL,
  `short_bio` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` varchar(9) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(111) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(111) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(111) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL COMMENT '0 = Pending; 1 = Active; 2 = Cancelled',
  `step` int DEFAULT NULL,
  `youtube` varchar(111) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `priority` int DEFAULT NULL,
  `timestamp` int DEFAULT NULL,
  `dob` int DEFAULT NULL,
  `deceased` int DEFAULT NULL COMMENT '0 = No; 1 = Yes',
  `public` int DEFAULT NULL COMMENT '0 = No; 1 = Yes',
  `story_permission` int DEFAULT NULL COMMENT '0 = No; 1 = Yes; 2 = Pending',
  PRIMARY KEY (`alumnus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnus`
--

LOCK TABLES `alumnus` WRITE;
/*!40000 ALTER TABLE `alumnus` DISABLE KEYS */;
/*!40000 ALTER TABLE `alumnus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chat` (
  `chat_id` int NOT NULL AUTO_INCREMENT,
  `sender_id` int DEFAULT NULL,
  `receiver_id` int DEFAULT NULL,
  `message` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `timestamp` int DEFAULT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat`
--

LOCK TABLES `chat` WRITE;
/*!40000 ALTER TABLE `chat` DISABLE KEYS */;
/*!40000 ALTER TABLE `chat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comment` (
  `comment_id` int NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `status` int DEFAULT NULL,
  `alumnus_id` int DEFAULT NULL,
  `story_id` int DEFAULT NULL,
  `timestamp` int DEFAULT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_us_message`
--

DROP TABLE IF EXISTS `contact_us_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_us_message` (
  `contact_us_message_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int DEFAULT NULL,
  PRIMARY KEY (`contact_us_message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_us_message`
--

LOCK TABLES `contact_us_message` WRITE;
/*!40000 ALTER TABLE `contact_us_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_us_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_us_settings`
--

DROP TABLE IF EXISTS `contact_us_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_us_settings` (
  `contact_us_settings_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_line_1` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_line_2` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(22) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `twitter` varchar(111) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(111) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(111) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube` varchar(111) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_map` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `timestamp` int DEFAULT NULL,
  PRIMARY KEY (`contact_us_settings_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_us_settings`
--

LOCK TABLES `contact_us_settings` WRITE;
/*!40000 ALTER TABLE `contact_us_settings` DISABLE KEYS */;
INSERT INTO `contact_us_settings` VALUES (1,'Venus Alumni Association','4877 Spruce Drive','West Newton, PA 15089','+1 (734) 123-4567','t1m9m.com@gmail.com','As for any undergraduate, the first year passed in a blur of textbooks, lectures and nights out. The atmosphere at Cambridge was like nothing I’d ever experienced before: everyone seemed to share a common desire to debate.','https://twitter.com/t1m9m','https://www.facebook.com/t1m9mofficial','https://www.linkedin.com/company/t1m9m','https://www.youtube.com/channel/UCSOsUZOu64EJrypoU3MJRjQ','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.437732482277!2d90.38093595102934!3d23.874091889879693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c40e3f6b4de5:0x17f36373eae86d6f!2sBeniasohokola!5e0!3m2!1sen!2sbd!4v1504682192708',1500998091);
/*!40000 ALTER TABLE `contact_us_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `currency`
--

DROP TABLE IF EXISTS `currency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `currency` (
  `currency_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `code` char(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `created_on` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `timestamp` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  PRIMARY KEY (`currency_id`)
) ENGINE=InnoDB AUTO_INCREMENT=168 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `currency`
--

LOCK TABLES `currency` WRITE;
/*!40000 ALTER TABLE `currency` DISABLE KEYS */;
INSERT INTO `currency` VALUES (1,'Andorran Peseta','ADP',1519583748,1,1519583748,1),(2,'United Arab Emirates Dirham','AED',1519583748,1,1519583748,1),(3,'Afghanistan Afghani','AFA',1519583748,1,1519583748,1),(4,'Albanian Lek','ALL',1519583748,1,1519583748,1),(5,'Netherlands Antillian Guilder','ANG',1519583748,1,1519583748,1),(6,'Angolan Kwanza','AOK',1519583748,1,1519583748,1),(7,'Argentine Peso','ARS',1519583748,1,1519583748,1),(9,'Australian Dollar','AUD',1519583748,1,1519583748,1),(10,'Aruban Florin','AWG',1519583748,1,1519583748,1),(11,'Barbados Dollar','BBD',1519583748,1,1519583748,1),(12,'Bangladeshi Taka','BDT',1519583748,1,1519583748,1),(14,'Bulgarian Lev','BGN',1519583748,1,1519583748,1),(15,'Bahraini Dinar','BHD',1519583748,1,1519583748,1),(16,'Burundi Franc','BIF',1519583748,1,1519583748,1),(17,'Bermudian Dollar','BMD',1519583748,1,1519583748,1),(18,'Brunei Dollar','BND',1519583748,1,1519583748,1),(19,'Bolivian Boliviano','BOB',1519583748,1,1519583748,1),(20,'Brazilian Real','BRL',1519583748,1,1519583748,1),(21,'Bahamian Dollar','BSD',1519583748,1,1519583748,1),(22,'Bhutan Ngultrum','BTN',1519583748,1,1519583748,1),(23,'Burma Kyat','BUK',1519583748,1,1519583748,1),(24,'Botswanian Pula','BWP',1519583748,1,1519583748,1),(25,'Belize Dollar','BZD',1519583748,1,1519583748,1),(26,'Canadian Dollar','CAD',1519583748,1,1519583748,1),(27,'Swiss Franc','CHF',1519583748,1,1519583748,1),(28,'Chilean Unidades de Fomento','CLF',1519583748,1,1519583748,1),(29,'Chilean Peso','CLP',1519583748,1,1519583748,1),(30,'Yuan (Chinese) Renminbi','CNY',1519583748,1,1519583748,1),(31,'Colombian Peso','COP',1519583748,1,1519583748,1),(32,'Costa Rican Colon','CRC',1519583748,1,1519583748,1),(33,'Czech Republic Koruna','CZK',1519583748,1,1519583748,1),(34,'Cuban Peso','CUP',1519583748,1,1519583748,1),(35,'Cape Verde Escudo','CVE',1519583748,1,1519583748,1),(36,'Cyprus Pound','CYP',1519583748,1,1519583748,1),(40,'Danish Krone','DKK',1519583748,1,1519583748,1),(41,'Dominican Peso','DOP',1519583748,1,1519583748,1),(42,'Algerian Dinar','DZD',1519583748,1,1519583748,1),(43,'Ecuador Sucre','ECS',1519583748,1,1519583748,1),(44,'Egyptian Pound','EGP',1519583748,1,1519583748,1),(45,'Estonian Kroon (EEK)','EEK',1519583748,1,1519583748,1),(46,'Ethiopian Birr','ETB',1519583748,1,1519583748,1),(47,'Euro','EUR',1519583748,1,1519583748,1),(49,'Fiji Dollar','FJD',1519583748,1,1519583748,1),(50,'Falkland Islands Pound','FKP',1519583748,1,1519583748,1),(52,'British Pound','GBP',1519583748,1,1519583748,1),(53,'Ghanaian Cedi','GHC',1519583748,1,1519583748,1),(54,'Gibraltar Pound','GIP',1519583748,1,1519583748,1),(55,'Gambian Dalasi','GMD',1519583748,1,1519583748,1),(56,'Guinea Franc','GNF',1519583748,1,1519583748,1),(58,'Guatemalan Quetzal','GTQ',1519583748,1,1519583748,1),(59,'Guinea-Bissau Peso','GWP',1519583748,1,1519583748,1),(60,'Guyanan Dollar','GYD',1519583748,1,1519583748,1),(61,'Hong Kong Dollar','HKD',1519583748,1,1519583748,1),(62,'Honduran Lempira','HNL',1519583748,1,1519583748,1),(63,'Haitian Gourde','HTG',1519583748,1,1519583748,1),(64,'Hungarian Forint','HUF',1519583748,1,1519583748,1),(65,'Indonesian Rupiah','IDR',1519583748,1,1519583748,1),(66,'Irish Punt','IEP',1519583748,1,1519583748,1),(67,'Israeli Shekel','ILS',1519583748,1,1519583748,1),(68,'Indian Rupee','INR',1519583748,1,1519583748,1),(69,'Iraqi Dinar','IQD',1519583748,1,1519583748,1),(70,'Iranian Rial','IRR',1519583748,1,1519583748,1),(73,'Jamaican Dollar','JMD',1519583748,1,1519583748,1),(74,'Jordanian Dinar','JOD',1519583748,1,1519583748,1),(75,'Japanese Yen','JPY',1519583748,1,1519583748,1),(76,'Kenyan Schilling','KES',1519583748,1,1519583748,1),(77,'Kampuchean (Cambodian) Riel','KHR',1519583748,1,1519583748,1),(78,'Comoros Franc','KMF',1519583748,1,1519583748,1),(79,'North Korean Won','KPW',1519583748,1,1519583748,1),(80,'(South) Korean Won','KRW',1519583748,1,1519583748,1),(81,'Kuwaiti Dinar','KWD',1519583748,1,1519583748,1),(82,'Cayman Islands Dollar','KYD',1519583748,1,1519583748,1),(83,'Lao Kip','LAK',1519583748,1,1519583748,1),(84,'Lebanese Pound','LBP',1519583748,1,1519583748,1),(85,'Sri Lanka Rupee','LKR',1519583748,1,1519583748,1),(86,'Liberian Dollar','LRD',1519583748,1,1519583748,1),(87,'Lesotho Loti','LSL',1519583748,1,1519583748,1),(89,'Libyan Dinar','LYD',1519583748,1,1519583748,1),(90,'Moroccan Dirham','MAD',1519583748,1,1519583748,1),(91,'Malagasy Franc','MGF',1519583748,1,1519583748,1),(92,'Mongolian Tugrik','MNT',1519583748,1,1519583748,1),(93,'Macau Pataca','MOP',1519583748,1,1519583748,1),(94,'Mauritanian Ouguiya','MRO',1519583748,1,1519583748,1),(95,'Maltese Lira','MTL',1519583748,1,1519583748,1),(96,'Mauritius Rupee','MUR',1519583748,1,1519583748,1),(97,'Maldive Rufiyaa','MVR',1519583748,1,1519583748,1),(98,'Malawi Kwacha','MWK',1519583748,1,1519583748,1),(99,'Mexican Peso','MXP',1519583748,1,1519583748,1),(100,'Malaysian Ringgit','MYR',1519583748,1,1519583748,1),(101,'Mozambique Metical','MZM',1519583748,1,1519583748,1),(102,'Namibian Dollar','NAD',1519583748,1,1519583748,1),(103,'Nigerian Naira','NGN',1519583748,1,1519583748,1),(104,'Nicaraguan Cordoba','NIO',1519583748,1,1519583748,1),(105,'Norwegian Kroner','NOK',1519583748,1,1519583748,1),(106,'Nepalese Rupee','NPR',1519583748,1,1519583748,1),(107,'New Zealand Dollar','NZD',1519583748,1,1519583748,1),(108,'Omani Rial','OMR',1519583748,1,1519583748,1),(109,'Panamanian Balboa','PAB',1519583748,1,1519583748,1),(110,'Peruvian Nuevo Sol','PEN',1519583748,1,1519583748,1),(111,'Papua New Guinea Kina','PGK',1519583748,1,1519583748,1),(112,'Philippine Peso','PHP',1519583748,1,1519583748,1),(113,'Pakistan Rupee','PKR',1519583748,1,1519583748,1),(114,'Polish Zloty','PLN',1519583748,1,1519583748,1),(116,'Paraguay Guarani','PYG',1519583748,1,1519583748,1),(117,'Qatari Rial','QAR',1519583748,1,1519583748,1),(118,'Romanian Leu','RON',1519583748,1,1519583748,1),(119,'Rwanda Franc','RWF',1519583748,1,1519583748,1),(120,'Saudi Arabian Riyal','SAR',1519583748,1,1519583748,1),(121,'Solomon Islands Dollar','SBD',1519583748,1,1519583748,1),(122,'Seychelles Rupee','SCR',1519583748,1,1519583748,1),(123,'Sudanese Pound','SDP',1519583748,1,1519583748,1),(124,'Swedish Krona','SEK',1519583748,1,1519583748,1),(125,'Singapore Dollar','SGD',1519583748,1,1519583748,1),(126,'St. Helena Pound','SHP',1519583748,1,1519583748,1),(127,'Sierra Leone Leone','SLL',1519583748,1,1519583748,1),(128,'Somali Schilling','SOS',1519583748,1,1519583748,1),(129,'Suriname Guilder','SRG',1519583748,1,1519583748,1),(130,'Sao Tome and Principe Dobra','STD',1519583748,1,1519583748,1),(131,'Russian Ruble','RUB',1519583748,1,1519583748,1),(132,'El Salvador Colon','SVC',1519583748,1,1519583748,1),(133,'Syrian Potmd','SYP',1519583748,1,1519583748,1),(134,'Swaziland Lilangeni','SZL',1519583748,1,1519583748,1),(135,'Thai Baht','THB',1519583748,1,1519583748,1),(136,'Tunisian Dinar','TND',1519583748,1,1519583748,1),(137,'Tongan Paanga','TOP',1519583748,1,1519583748,1),(138,'East Timor Escudo','TPE',1519583748,1,1519583748,1),(139,'Turkish Lira','TRY',1519583748,1,1519583748,1),(140,'Trinidad and Tobago Dollar','TTD',1519583748,1,1519583748,1),(141,'Taiwan Dollar','TWD',1519583748,1,1519583748,1),(142,'Tanzanian Schilling','TZS',1519583748,1,1519583748,1),(143,'Uganda Shilling','UGX',1519583748,1,1519583748,1),(144,'US Dollar','USD',1519583748,1,1519583748,1),(145,'Uruguayan Peso','UYU',1519583748,1,1519583748,1),(146,'Venezualan Bolivar','VEF',1519583748,1,1519583748,1),(147,'Vietnamese Dong','VND',1519583748,1,1519583748,1),(148,'Vanuatu Vatu','VUV',1519583748,1,1519583748,1),(149,'Samoan Tala','WST',1519583748,1,1519583748,1),(150,'CommunautÃƒÂ© FinanciÃƒÂ¨re Africaine BEAC, Francs','XAF',1519583748,1,1519583748,1),(151,'Silver, Ounces','XAG',1519583748,1,1519583748,1),(152,'Gold, Ounces','XAU',1519583748,1,1519583748,1),(153,'East Caribbean Dollar','XCD',1519583748,1,1519583748,1),(154,'International Monetary Fund (IMF) Special Drawing Rights','XDR',1519583748,1,1519583748,1),(155,'CommunautÃƒÂ© FinanciÃƒÂ¨re Africaine BCEAO - Francs','XOF',1519583748,1,1519583748,1),(156,'Palladium Ounces','XPD',1519583748,1,1519583748,1),(157,'Comptoirs FranÃƒÂ§ais du Pacifique Francs','XPF',1519583748,1,1519583748,1),(158,'Platinum, Ounces','XPT',1519583748,1,1519583748,1),(159,'Democratic Yemeni Dinar','YDD',1519583748,1,1519583748,1),(160,'Yemeni Rial','YER',1519583748,1,1519583748,1),(161,'New Yugoslavia Dinar','YUD',1519583748,1,1519583748,1),(162,'South African Rand','ZAR',1519583748,1,1519583748,1),(163,'Zambian Kwacha','ZMK',1519583748,1,1519583748,1),(164,'Zaire Zaire','ZRZ',1519583748,1,1519583748,1),(165,'Zimbabwe Dollar','ZWD',1519583748,1,1519583748,1),(166,'Slovak Koruna','SKK',1519583748,1,1519583748,1),(167,'Armenian Dram','AMD',1519583748,1,1519583748,1);
/*!40000 ALTER TABLE `currency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donation`
--

DROP TABLE IF EXISTS `donation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `donation` (
  `donation_id` int NOT NULL AUTO_INCREMENT,
  `alumnus_id` int DEFAULT NULL,
  `amount` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  `donation_purpose_id` int DEFAULT NULL,
  `timestamp` int DEFAULT NULL,
  `via` varchar(55) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`donation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donation`
--

LOCK TABLES `donation` WRITE;
/*!40000 ALTER TABLE `donation` DISABLE KEYS */;
/*!40000 ALTER TABLE `donation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donation_purpose`
--

DROP TABLE IF EXISTS `donation_purpose`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `donation_purpose` (
  `donation_purpose_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` int DEFAULT NULL,
  `timestamp` int DEFAULT NULL,
  PRIMARY KEY (`donation_purpose_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donation_purpose`
--

LOCK TABLES `donation_purpose` WRITE;
/*!40000 ALTER TABLE `donation_purpose` DISABLE KEYS */;
/*!40000 ALTER TABLE `donation_purpose` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event` (
  `event_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_date` int DEFAULT NULL,
  `event_time` varchar(22) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `venue` varchar(99) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `paragraph_1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paragraph_2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paragraph_3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `google_map` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `image_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hashtag` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` int DEFAULT NULL,
  `permalink` varchar(99) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_management`
--

DROP TABLE IF EXISTS `event_management`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_management` (
  `event_management_id` int NOT NULL AUTO_INCREMENT,
  `event_id` int NOT NULL,
  `yes` int NOT NULL,
  `no` int NOT NULL,
  `maybe` int NOT NULL,
  `volunteers` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `timestamp` int DEFAULT NULL,
  PRIMARY KEY (`event_management_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_management`
--

LOCK TABLES `event_management` WRITE;
/*!40000 ALTER TABLE `event_management` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_management` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gallery` (
  `gallery_id` int NOT NULL AUTO_INCREMENT,
  `image_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `album_id` int NOT NULL,
  `timestamp` int DEFAULT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job` (
  `job_id` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `title` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `position` varchar(99) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `not_remote` int DEFAULT NULL,
  `location` varchar(123) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `deadline` int DEFAULT NULL,
  `contact_email` varchar(66) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `contact_phone` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `timestamp` int DEFAULT NULL,
  `salary` int DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job`
--

LOCK TABLES `job` WRITE;
/*!40000 ALTER TABLE `job` DISABLE KEYS */;
/*!40000 ALTER TABLE `job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `location` (
  `location_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` int DEFAULT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=222 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` VALUES (2,'Afghanistan',1487740685),(3,'Albania',1487740685),(4,'Algeria',1487740685),(5,'Andorra',1487740685),(6,'Angola',1487740685),(7,'Antigua and Barbuda',1487740685),(8,'Argentina',1487740685),(9,'Armenia',1487740685),(10,'Australia',1487740685),(11,'Austria',1487740685),(12,'Azerbaijan',1487740685),(14,'Bahamas',1487740685),(15,'Bahrain',1487740685),(16,'Bangladesh',1487740685),(17,'Barbados',1487740685),(18,'Belarus',1487740685),(19,'Belgium',1487740685),(20,'Belize',1487740685),(21,'Benin',1487740685),(22,'Bhutan',1487740685),(23,'Bolivia',1487740685),(24,'Bosnia and Herzegovina',1487740685),(25,'Botswana',1487740685),(26,'Brazil',1487740685),(27,'Brunei',1487740685),(28,'Bulgaria',1487740685),(29,'Burkina Faso',1487740685),(30,'Burundi',1487740685),(32,'Cabo Verde',1487740685),(33,'Cambodia',1487740685),(34,'Cameroon',1487740685),(35,'Canada',1487740685),(36,'Central African Republic (CAR)',1487740685),(37,'Chad',1487740685),(38,'Chile',1487740685),(39,'China',1487740685),(40,'Colombia',1487740685),(41,'Comoros',1487740685),(42,'Democratic Republic of the Congo',1487740685),(43,'Republic of the Congo',1487740685),(44,'Costa Rica',1487740685),(45,'Cote d\'Ivoire',1487740685),(46,'Croatia',1487740685),(47,'Cuba',1487740685),(48,'Cyprus',1487740685),(49,'Czech Republic',1487740685),(51,'Denmark',1487740685),(52,'Djibouti',1487740685),(53,'Dominica',1487740685),(54,'Dominican Republic',1487740685),(56,'Ecuador',1487740685),(57,'Egypt',1487740685),(58,'El Salvador',1487740685),(59,'Equatorial Guinea',1487740685),(60,'Eritrea',1487740685),(61,'Estonia',1487740685),(62,'Ethiopia',1487740685),(64,'Fiji',1487740685),(65,'Finland',1487740685),(66,'France',1487740685),(68,'Gabon',1487740685),(69,'Gambia',1487740685),(70,'Georgia',1487740685),(71,'Germany',1487740685),(72,'Ghana',1487740685),(73,'Greece',1487740685),(74,'Grenada',1487740685),(75,'Guatemala',1487740685),(76,'Guinea',1487740685),(77,'Guinea-Bissau',1487740685),(78,'Guyana',1487740685),(80,'Haiti',1487740685),(81,'Honduras',1487740685),(82,'Hungary',1487740685),(84,'Iceland',1487740685),(85,'India',1487740685),(86,'Indonesia',1487740685),(87,'Iran',1487740685),(88,'Iraq',1487740685),(89,'Ireland',1487740685),(90,'Israel',1487740685),(91,'Italy',1487740685),(93,'Jamaica',1487740685),(94,'Japan',1487740685),(95,'Jordan',1487740685),(97,'Kazakhstan',1487740685),(98,'Kenya',1487740685),(99,'Kiribati',1487740685),(100,'Kosovo',1487740685),(101,'Kuwait',1487740685),(102,'Kyrgyzstan',1487740685),(104,'Laos',1487740685),(105,'Latvia',1487740685),(106,'Lebanon',1487740685),(107,'Lesotho',1487740685),(108,'Liberia',1487740685),(109,'Libya',1487740685),(110,'Liechtenstein',1487740685),(111,'Lithuania',1487740685),(112,'Luxembourg',1487740685),(114,'Macedonia',1487740685),(115,'Madagascar',1487740685),(116,'Malawi',1487740685),(117,'Malaysia',1487740685),(118,'Maldives',1487740685),(119,'Mali',1487740685),(120,'Malta',1487740685),(121,'Marshall Islands',1487740685),(122,'Mauritania',1487740685),(123,'Mauritius',1487740685),(124,'Mexico',1487740685),(125,'Micronesia',1487740685),(126,'Moldova',1487740685),(127,'Monaco',1487740685),(128,'Mongolia',1487740685),(129,'Montenegro',1487740685),(130,'Morocco',1487740685),(131,'Mozambique',1487740685),(132,'Myanmar (Burma)',1487740685),(134,'Namibia',1487740685),(135,'Nauru',1487740685),(136,'Nepal',1487740685),(137,'Netherlands',1487740685),(138,'New Zealand',1487740685),(139,'Nicaragua',1487740685),(140,'Niger',1487740685),(141,'Nigeria',1487740685),(142,'North Korea',1487740685),(143,'Norway',1487740685),(145,'Oman',1487740685),(147,'Pakistan',1487740685),(148,'Palau',1487740685),(149,'Palestine',1487740685),(150,'Panama',1487740685),(151,'Papua New Guinea',1487740685),(152,'Paraguay',1487740685),(153,'Peru',1487740685),(154,'Philippines',1487740685),(155,'Poland',1487740685),(156,'Portugal',1487740685),(158,'Qatar',1487740685),(160,'Romania',1487740685),(161,'Russia',1487740685),(162,'Rwanda',1487740685),(164,'Saint Kitts and Nevis',1487740685),(165,'Saint Lucia',1487740685),(166,'Saint Vincent and the Grenadines',1487740685),(167,'Samoa',1487740685),(168,'San Marino',1487740685),(169,'Sao Tome and Principe',1487740685),(170,'Saudi Arabia',1487740685),(171,'Senegal',1487740685),(172,'Serbia',1487740685),(173,'Seychelles',1487740685),(174,'Sierra Leone',1487740685),(175,'Singapore',1487740685),(176,'Slovakia',1487740685),(177,'Slovenia',1487740685),(178,'Solomon Islands',1487740685),(179,'Somalia',1487740685),(180,'South Africa',1487740685),(181,'South Korea',1487740685),(182,'South Sudan',1487740685),(183,'Spain',1487740685),(184,'Sri Lanka',1487740685),(185,'Sudan',1487740685),(186,'Suriname',1487740685),(187,'Swaziland',1487740685),(188,'Sweden',1487740685),(189,'Switzerland',1487740685),(190,'Syria',1487740685),(192,'Taiwan',1487740685),(193,'Tajikistan',1487740685),(194,'Tanzania',1487740685),(195,'Thailand',1487740685),(196,'Timor-Leste',1487740685),(197,'Togo',1487740685),(198,'Tonga',1487740685),(199,'Trinidad and Tobago',1487740685),(200,'Tunisia',1487740685),(201,'Turkey',1487740685),(202,'Turkmenistan',1487740685),(203,'Tuvalu',1487740685),(205,'Uganda',1487740685),(206,'Ukraine',1487740685),(207,'United Arab Emirates (UAE)',1487740685),(208,'United Kingdom (UK)',1487740685),(209,'United States of America (USA)',1487740685),(210,'Uruguay',1487740685),(211,'Uzbekistan',1487740685),(213,'Vanuatu',1487740685),(214,'Vatican City (Holy See)',1487740685),(215,'Venezuela',1487740685),(216,'Vietnam',1487740685),(218,'Yemen',1487740685),(220,'Zambia',1487740685),(221,'Zimbabwe',1487740685);
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notice` (
  `notice_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(111) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int DEFAULT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notice`
--

LOCK TABLES `notice` WRITE;
/*!40000 ALTER TABLE `notice` DISABLE KEYS */;
/*!40000 ALTER TABLE `notice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_request`
--

DROP TABLE IF EXISTS `permission_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permission_request` (
  `permission_request_id` int NOT NULL AUTO_INCREMENT,
  `person_id` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  `timestamp` int DEFAULT NULL,
  `user_type` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `module` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`permission_request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_request`
--

LOCK TABLES `permission_request` WRITE;
/*!40000 ALTER TABLE `permission_request` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profession`
--

DROP TABLE IF EXISTS `profession`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profession` (
  `profession_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` int DEFAULT NULL,
  PRIMARY KEY (`profession_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profession`
--

LOCK TABLES `profession` WRITE;
/*!40000 ALTER TABLE `profession` DISABLE KEYS */;
INSERT INTO `profession` VALUES (1,'Accountant',1484580450),(2,'Actor',1484580461),(3,'Air Steward',1484580483),(4,'Animator',1484580488),(5,'Architect',1484580494),(6,'Artist',1484580498),(7,'Author',1484580502),(8,'Baker',1484580507),(9,'Biologist',1484580511),(10,'Builder',1484580515),(11,'Butcher',1484580519),(12,'Counselor',1484580523),(13,'Chef',1484580527),(14,'Director',1484580532),(15,'Dentist',1484580537),(16,'Designer',1484580547),(17,'Doctor',1484580551),(18,'Economist',1484580556),(19,'Electrician',1484580560),(20,'Engineer',1484580565),(21,'Farmer',1484580576),(22,'Film Director',1484580582),(23,'Fisherman',1484580586),(24,'Geologist',1484581447),(25,'Head Teacher',1484581455),(26,'Journalist',1484581461),(27,'Judge',1484581466),(28,'Lawyer',1484581470),(29,'Lecturer',1484581474),(30,'Magician',1484581479),(31,'Manager',1484581483),(32,'Musician',1484581488),(33,'Nurse',1484581492),(34,'Painter',1484581497),(35,'Photographer',1484581501),(36,'Pilot',1484581506),(37,'Police Officer',1484581514),(38,'Politician',1484581519),(39,'Receptionist',1484581523),(40,'Salesperson',1484581527),(41,'Scientist',1484581532),(42,'Secretary',1484581537),(43,'Singer',1484581541),(44,'Software Engineer',1484581549),(45,'Soldier',1484581556),(46,'Surgeon',1484581560),(47,'Teacher',1484581565),(48,'Translator',1484581570),(49,'Waiter',1484581575),(50,'Web Developer',1484581588),(51,'Writer',1484581592),(52,'Other',1484581601);
/*!40000 ALTER TABLE `profession` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rsvp`
--

DROP TABLE IF EXISTS `rsvp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rsvp` (
  `rsvp_id` int NOT NULL AUTO_INCREMENT,
  `alumnus_id` int DEFAULT NULL,
  `event_id` int DEFAULT NULL,
  `rsvp` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timestamp` int DEFAULT NULL,
  PRIMARY KEY (`rsvp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rsvp`
--

LOCK TABLES `rsvp` WRITE;
/*!40000 ALTER TABLE `rsvp` DISABLE KEYS */;
/*!40000 ALTER TABLE `rsvp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `setting` (
  `setting_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(55) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `content` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `timestamp` int DEFAULT NULL,
  PRIMARY KEY (`setting_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting`
--

LOCK TABLES `setting` WRITE;
/*!40000 ALTER TABLE `setting` DISABLE KEYS */;
INSERT INTO `setting` VALUES (1,'frontend_title','Venus | Alumni',1501222072),(2,'backend_title','Venus | Admin',1501222089),(3,'copyright','t1m9m.com',1501222101),(4,'call_us','000-123-456-789',1501222112),(5,'header_logo','venus_logo.png',1501222126),(6,'footer_logo','venus_white.png',1501222136),(7,'favicon','venus.png',1501222187),(8,'login_bg','bg_venus.jpg',1501224501),(9,'copyright_url','https://t1m9m.com',1501224598),(10,'language','english',1501224598),(11,'currency','USD',1501224598),(12,'timezone','Asia/Dhaka',1501224598),(13,'smtp_user','',1501224598),(14,'smtp_pass','',1501224598),(15,'account_sid','',NULL),(16,'auth_token','',NULL),(17,'number','',NULL),(18,'font','\'Mukta\', sans-serif',NULL),(19,'font_family','Mukta',NULL),(20,'font_src','https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap',NULL);
/*!40000 ALTER TABLE `setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slide`
--

DROP TABLE IF EXISTS `slide`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `slide` (
  `slide_id` int NOT NULL AUTO_INCREMENT,
  `image_name` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` int DEFAULT NULL,
  PRIMARY KEY (`slide_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slide`
--

LOCK TABLES `slide` WRITE;
/*!40000 ALTER TABLE `slide` DISABLE KEYS */;
/*!40000 ALTER TABLE `slide` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `story`
--

DROP TABLE IF EXISTS `story`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `story` (
  `story_id` int NOT NULL AUTO_INCREMENT,
  `image_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `written_by` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `paragraph_1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paragraph_2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paragraph_3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `times` int NOT NULL,
  `month` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `year` int DEFAULT NULL,
  `timestamp` int DEFAULT NULL,
  `permalink` varchar(99) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `user_type` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`story_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `story`
--

LOCK TABLES `story` WRITE;
/*!40000 ALTER TABLE `story` DISABLE KEYS */;
/*!40000 ALTER TABLE `story` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `volunteer`
--

DROP TABLE IF EXISTS `volunteer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `volunteer` (
  `volunteer_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(99) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(22) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `batch` int DEFAULT NULL,
  `profession_id` int NOT NULL,
  `status` int DEFAULT NULL,
  `step` int DEFAULT NULL,
  `timestamp` int DEFAULT NULL,
  PRIMARY KEY (`volunteer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `volunteer`
--

LOCK TABLES `volunteer` WRITE;
/*!40000 ALTER TABLE `volunteer` DISABLE KEYS */;
/*!40000 ALTER TABLE `volunteer` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-17  9:29:44
