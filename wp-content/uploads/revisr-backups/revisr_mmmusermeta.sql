
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
DROP TABLE IF EXISTS `mmmusermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mmmusermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `mmmusermeta` WRITE;
/*!40000 ALTER TABLE `mmmusermeta` DISABLE KEYS */;
INSERT INTO `mmmusermeta` VALUES (1,1,'nickname','admin'),(2,1,'first_name',''),(3,1,'last_name',''),(4,1,'description',''),(5,1,'rich_editing','true'),(6,1,'comment_shortcuts','false'),(7,1,'admin_color','fresh'),(8,1,'use_ssl','0'),(9,1,'show_admin_bar_front','true'),(10,1,'mmmcapabilities','a:1:{s:13:\"administrator\";b:1;}'),(11,1,'mmmuser_level','10'),(12,1,'dismissed_wp_pointers',''),(13,1,'show_welcome_panel','1'),(15,1,'mmmdashboard_quick_press_last_post_id','47'),(16,1,'mmmuser-settings','libraryContent=browse&urlbutton=custom&imgsize=large&editor=tinymce'),(17,1,'mmmuser-settings-time','1458640015'),(18,1,'closedpostboxes_dashboard','a:2:{i:0;s:19:\"dashboard_right_now\";i:1;s:18:\"dashboard_activity\";}'),(19,1,'metaboxhidden_dashboard','a:0:{}'),(20,1,'managenav-menuscolumnshidden','a:5:{i:0;s:11:\"link-target\";i:1;s:10:\"attr-title\";i:2;s:11:\"css-classes\";i:3;s:3:\"xfn\";i:4;s:11:\"description\";}'),(21,1,'metaboxhidden_nav-menus','a:2:{i:0;s:12:\"add-post_tag\";i:1;s:15:\"add-post_format\";}'),(24,1,'meta-box-order_dashboard','a:4:{s:6:\"normal\";s:38:\"dashboard_right_now,dashboard_activity\";s:4:\"side\";s:39:\"dashboard_quick_press,dashboard_primary\";s:7:\"column3\";s:0:\"\";s:7:\"column4\";s:0:\"\";}'),(27,1,'closedpostboxes_page','a:0:{}'),(28,1,'metaboxhidden_page','a:0:{}'),(29,1,'wporg_favorites',''),(30,1,'session_tokens','a:3:{s:64:\"95fd5145e63bcbb17648bb36896e1eb3dc09baa2c68272a5d6bfa53a893aa6e6\";a:4:{s:10:\"expiration\";i:1459245250;s:2:\"ip\";s:13:\"41.13.104.189\";s:2:\"ua\";s:140:\"Mozilla/5.0 (iPhone; CPU iPhone OS 9_3 like Mac OS X) AppleWebKit/601.1 (KHTML, like Gecko) CriOS/49.0.2623.73 Mobile/13E234 Safari/601.1.46\";s:5:\"login\";i:1459072450;}s:64:\"acccad37f7a72893fd7c224b43de3c9753c711994b63049386a27c6efa39c867\";a:4:{s:10:\"expiration\";i:1459346876;s:2:\"ip\";s:14:\"41.145.132.211\";s:2:\"ua\";s:109:\"Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36\";s:5:\"login\";i:1459174076;}s:64:\"a3a17aeea49a69a6b9c656b3c26510b5d13ea644b5d631dbd0704278203edacd\";a:4:{s:10:\"expiration\";i:1459358514;s:2:\"ip\";s:14:\"41.145.132.211\";s:2:\"ua\";s:109:\"Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36\";s:5:\"login\";i:1459185714;}}');
/*!40000 ALTER TABLE `mmmusermeta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

