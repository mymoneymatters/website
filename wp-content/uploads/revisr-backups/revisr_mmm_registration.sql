
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
DROP TABLE IF EXISTS `mmm_registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mmm_registration` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_first` varchar(45) NOT NULL,
  `name_last` varchar(45) NOT NULL,
  `email_address` varchar(45) NOT NULL,
  `physical_address` varchar(45) NOT NULL,
  `marital_status` enum('Single','Relationship','Married') NOT NULL DEFAULT 'Single',
  `language_preference` enum('English','Afrikaans') NOT NULL DEFAULT 'English',
  `interests` int(10) unsigned NOT NULL COMMENT '1:Debt-to-debt Management 2:Wealth 4:Budgeting 8:Retirement 16:Investment 32:Personal Finance 64:Saving',
  `dietary_requirements` int(10) unsigned NOT NULL COMMENT '1:Vegetarian 2:Gluten Free 4:Dairy Free 8:No Pork 16:No Nuts',
  `referer` int(10) unsigned NOT NULL COMMENT '1:Word of Mouth 2:Online 4:Other',
  `seminar_id` int(10) unsigned NOT NULL DEFAULT '0',
  `paying` enum('Single','Couple') NOT NULL DEFAULT 'Single',
  `created` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `mmm_registration` WRITE;
/*!40000 ALTER TABLE `mmm_registration` DISABLE KEYS */;
/*!40000 ALTER TABLE `mmm_registration` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

