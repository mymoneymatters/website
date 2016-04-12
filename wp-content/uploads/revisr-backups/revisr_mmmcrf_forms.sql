
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
DROP TABLE IF EXISTS `mmmcrf_forms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mmmcrf_forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form_name` varchar(255) DEFAULT NULL,
  `form_desc` longtext,
  `form_type` varchar(255) NOT NULL,
  `custom_text` longtext,
  `crf_welcome_email_subject` varchar(255) NOT NULL,
  `success_message` longtext,
  `crf_welcome_email_message` longtext,
  `redirect_option` varchar(255) NOT NULL,
  `redirect_page_id` int(11) NOT NULL,
  `redirect_url_url` longtext NOT NULL,
  `send_email` int(11) NOT NULL,
  `form_option` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `mmmcrf_forms` WRITE;
/*!40000 ALTER TABLE `mmmcrf_forms` DISABLE KEYS */;
INSERT INTO `mmmcrf_forms` VALUES (1,'Test','','contact_form','','','','','none',0,'',0,'a:18:{s:19:\"submit_button_label\";s:6:\"Submit\";s:19:\"submit_button_color\";s:0:\"\";s:21:\"submit_button_bgcolor\";s:0:\"\";s:14:\"mailchimp_list\";s:0:\"\";s:12:\"auto_expires\";N;s:11:\"expiry_type\";N;s:16:\"submission_limit\";s:0:\"\";s:11:\"expiry_date\";s:0:\"\";s:14:\"expiry_message\";s:0:\"\";s:9:\"user_role\";s:0:\"\";s:15:\"let_user_decide\";N;s:15:\"user_role_label\";s:0:\"\";s:17:\"user_role_options\";N;s:20:\"mailchimp_emailfield\";s:0:\"\";s:20:\"mailchimp_firstfield\";s:0:\"\";s:19:\"mailchimp_lastfield\";s:0:\"\";s:9:\"optin_box\";N;s:14:\"optin_box_text\";s:0:\"\";}');
/*!40000 ALTER TABLE `mmmcrf_forms` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

