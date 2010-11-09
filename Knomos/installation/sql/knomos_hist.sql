-- MySQL dump 10.9
--
-- Host: localhost    Database: knomoshistory
-- ------------------------------------------------------
-- Server version	4.1.12

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `INT_last_viewed`
--

DROP TABLE IF EXISTS `INT_last_viewed`;
CREATE TABLE `INT_last_viewed` (
  `user_id` int(10) NOT NULL default '0',
  `module` varchar(20) NOT NULL default '',
  `obj_id` int(10) NOT NULL default '0',
  `viewed` datetime NOT NULL default '0000-00-00 00:00:00',
  KEY `userid` (`user_id`),
  KEY `obj_id` (`obj_id`),
  KEY `module` (`module`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `INT_last_viewed`
--


/*!40000 ALTER TABLE `INT_last_viewed` DISABLE KEYS */;
LOCK TABLES `INT_last_viewed` WRITE;
UNLOCK TABLES;
/*!40000 ALTER TABLE `INT_last_viewed` ENABLE KEYS */;

--
-- Table structure for table `calendar`
--

DROP TABLE IF EXISTS `calendar`;
CREATE TABLE `calendar` (
  `id` bigint(20) NOT NULL auto_increment,
  `real_id` int(11) NOT NULL default '0',
  `title` varchar(255) NOT NULL default '',
  `codice` varchar(5) NOT NULL default '0',
  `priorita` tinyint(2) NOT NULL default '0',
  `day` date NOT NULL default '0000-00-00',
  `time` time NOT NULL default '00:00:00',
  `dayend` date NOT NULL default '0000-00-00',
  `recurrent` int(2) NOT NULL default '0',
  `dayofweek` int(2) NOT NULL default '0',
  `type` tinyint(1) NOT NULL default '1',
  `type_app` varchar(20) NOT NULL default '0',
  `ref_prat` int(10) NOT NULL default '0',
  `ref_cont` int(10) NOT NULL default '0',
  `operator` varchar(255) NOT NULL default '',
  `operatore_old` varchar(255) NOT NULL default '',
  `done` int(10) NOT NULL default '0',
  `note` text NOT NULL,
  `perm` text NOT NULL,
  `provenienza` date NOT NULL default '0000-00-00',
  `id_provenienza` int(10) NOT NULL default '0',
  `notulato` int(5) NOT NULL default '0',
  `cal_comp_desc` varchar(10) NOT NULL default '',
  `cal_luogo_uff_giud` varchar(255) NOT NULL default '',
  `cal_giudice` varchar(100) NOT NULL default '',
  `id_google` varchar(255) NOT NULL default '',
  `servizio1` varchar(30) NOT NULL default '',
  `servizio2` varchar(30) NOT NULL default '',
  `servizio3` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `day` (`day`),
  KEY `time` (`time`),
  KEY `ref_prat` (`ref_prat`),
  KEY `operator` (`operatore_old`),
  KEY `title` (`title`),
  KEY `codice` (`codice`),
  KEY `recurrent` (`recurrent`,`dayofweek`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar`
--


/*!40000 ALTER TABLE `calendar` DISABLE KEYS */;
LOCK TABLES `calendar` WRITE;
insert into `calendar` values ('1', '', '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '');


UNLOCK TABLES;
/*!40000 ALTER TABLE `calendar` ENABLE KEYS */;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL auto_increment,
  `codice` varchar(255) NOT NULL default '',
  `nome` varchar(255) NOT NULL default '',
  `accountm` int(10) NOT NULL default '0',
  `indirizzo` varchar(255) NOT NULL default '',
  `cap` varchar(20) NOT NULL default '',
  `citta` varchar(255) NOT NULL default '',
  `stato` varchar(255) NOT NULL default '',
  `email` varchar(100) NOT NULL default '',
  `email1` varchar(100) NOT NULL default '',
  `email2` varchar(100) NOT NULL default '',
  `telefono` varchar(200) NOT NULL default '',
  `telefono2` varchar(50) NOT NULL default '',
  `telefono3` varchar(50) NOT NULL default '',
  `telefono4` varchar(50) NOT NULL default '',
  `fax` varchar(200) NOT NULL default '',
  `fax1` varchar(50) NOT NULL default '',
  `mansione` varchar(255) NOT NULL default '',
  `tipo_contatto` tinyint(2) NOT NULL default '0',
  `tipo` tinyint(2) NOT NULL default '0',
  `ref_contatto` int(10) NOT NULL default '0',
  `permessi` text NOT NULL,
  `leg_rap` varchar(255) NOT NULL default '',
  `cod_fis` varchar(200) NOT NULL default '',
  `on_orar` decimal(10,2) NOT NULL default '0.00',
  `piva` varchar(200) NOT NULL default '',
  `iscr_ccia` varchar(255) NOT NULL default '',
  `iscr_trib` varchar(255) NOT NULL default '',
  `data` date NOT NULL default '0000-00-00',
  `luogo` varchar(255) NOT NULL default '',
  `note` text NOT NULL,
  `country` int(10) NOT NULL default '0',
  `mobile` varchar(30) NOT NULL default '',
  `mobile1` varchar(30) NOT NULL default '',
  `mobile2` varchar(30) NOT NULL default '',
  `mobile3` varchar(30) NOT NULL default '',
  `skype` varchar(30) NOT NULL default '',
  `sharedfolder` varchar(100) NOT NULL default '',
  `sharedfolder1` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `codice` (`codice`),
  KEY `nome` (`nome`),
  KEY `ref_contatto` (`ref_contatto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--


/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
LOCK TABLES `contact` WRITE;
/*INSERT INTO `contact` VALUES (1,'','',0,'','','','','','','','',0,0,0,'D=6666','','','0.00','','','','0000-00-00','','',0,'')*/;
insert into `contact` values ('1', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', 'U5=6', '', '', '0.00', '', '', '', '0000-00-00', '', '', '0', '', '', '', '', '', '', '');
UNLOCK TABLES;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

--
-- Table structure for table `document`
--

DROP TABLE IF EXISTS `document`;
CREATE TABLE `document` (
  `id` int(10) NOT NULL default '0',
  `descr` varchar(255) NOT NULL default '',
  `filename` varchar(255) NOT NULL default '',
  `ext` varchar(5) NOT NULL default '',
  `ref_id` int(10) NOT NULL default '0',
  `version` varchar(10) NOT NULL default '',
  `ref_pres` int(10) NOT NULL default '0',
  `ref_prat` int(10) NOT NULL default '0',
  `note` text NOT NULL,
  `operatore` varchar(255) NOT NULL default '0',
  `data` date NOT NULL default '0000-00-00',
  `lock` int(10) NOT NULL default '0',
  `user_lock` int(10) NOT NULL default '0',
  `checksum` text NOT NULL,
  `ref_orig` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `data` (`data`),
  KEY `ref_pres` (`ref_pres`),
  KEY `ref_prat` (`ref_prat`),
  KEY `descr` (`descr`),
  KEY `version` (`version`),
  KEY `ref_id` (`ref_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Table structure for table `pratiche`
--

### structure of table `pratiche` ###

DROP TABLE IF EXISTS `pratiche`;

CREATE TABLE `pratiche` (
  `id` bigint(20) NOT NULL auto_increment,
  `pr_codice` varchar(150) NOT NULL default '',
  `pr_fascicolo` varchar(150) NOT NULL default '',
  `pr_schedario` varchar(150) NOT NULL default '',
  `pr_numero` int(14) NOT NULL default '0',
  `pr_numero_backup` varchar(20) NOT NULL default '',
  `pr_stato` int(5) NOT NULL default '0',
  `pr_fase` int(5) NOT NULL default '0',
  `pr_oggetto` text NOT NULL,
  `pr_oggetto2` varchar(255) NOT NULL default '',
  `pr_tipo` varchar(5) NOT NULL default '',
  `pr_operatore_old` varchar(5) NOT NULL default '',
  `pr_operatore` int(11) NOT NULL default '0',
  `pr_comp_cod` varchar(5) NOT NULL default '',
  `pr_comp_desc` varchar(100) NOT NULL default '',
  `pr_uff_giud` varchar(100) NOT NULL default '',
  `pr_luogo_uff_giud` varchar(100) NOT NULL default '',
  `pr_giudice` varchar(100) NOT NULL default '',
  `pr_nruolo` varchar(20) NOT NULL default '',
  `pr_nruolo_altri` varchar(255) NOT NULL default '',
  `pr_nprovv` varchar(20) NOT NULL default '',
  `pr_data_ins` date NOT NULL default '0000-00-00',
  `pr_data_mod` date NOT NULL default '0000-00-00',
  `pr_valore` decimal(20,2) NOT NULL default '0.00',
  `pr_fido` decimal(20,2) NOT NULL default '0.00',
  `pr_data_inizio` date NOT NULL default '0000-00-00',
  `pr_cliente` varchar(20) NOT NULL default '',
  `pr_ref_idcliente` int(11) NOT NULL default '0',
  `pr_ref_idavvr` varchar(255) NOT NULL default '0',
  `pr_ref_idbenefic` varchar(255) NOT NULL default '',
  `pr_ref_idaltri` varchar(255) NOT NULL default '',
  `pr_criterio` varchar(10) NOT NULL default '',
  `pr_on_orar` decimal(10,2) NOT NULL default '0.00',
  `pr_perc_onor` decimal(4,2) NOT NULL default '0.00',
  `pr_dept` int(10) NOT NULL default '0',
  `pr_uff` int(10) NOT NULL default '0',
  `note` text NOT NULL,
  `permessi` text NOT NULL,
  `pr_referral` varchar(255) NOT NULL default '',
  `pr_uff_orig` int(10) NOT NULL default '0',
  `real_id` int(11) NOT NULL default '0',
  `pr_prof_orig` int(10) NOT NULL default '0',
  `pr_riunita_a` varchar(100) NOT NULL default '',
  `pr_riunita_il` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`id`),
  KEY `pr_codice` (`pr_codice`),
  KEY `pr_ref_idcliente` (`pr_ref_idcliente`),
  KEY `pr_operatore` (`pr_operatore`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=240;

--
-- Dumping data for table `pratiche`
--


/*!40000 ALTER TABLE `pratiche` DISABLE KEYS */;
LOCK TABLES `pratiche` WRITE;
UNLOCK TABLES;
/*!40000 ALTER TABLE `pratiche` ENABLE KEYS */;

--
-- Table structure for table `prestazioni`
--

DROP TABLE IF EXISTS `prestazioni`;
CREATE TABLE `prestazioni` (
  `id` bigint(20) NOT NULL auto_increment,
  `data` date NOT NULL default '0000-00-00',
  `incr` varchar(5) NOT NULL default '',
  `ref_id` int(10) NOT NULL default '0',
  `codice` varchar(5) NOT NULL default '',
  `testo` varchar(255) NOT NULL default '',
  `operatore_old` varchar(10) NOT NULL default '',
  `operatore` int(11) NOT NULL default '0',
  `unita_misura` varchar(5) NOT NULL default '',
  `quantita` int(10) NOT NULL default '0',
  `spese_imponibili` decimal(10,2) NOT NULL default '0.00',
  `spese_non_imponibili` decimal(10,2) NOT NULL default '0.00',
  `acconti` decimal(10,2) NOT NULL default '0.00',
  `anticipazioni` decimal(10,2) NOT NULL default '0.00',
  `diritti` decimal(10,2) NOT NULL default '0.00',
  `onorari` decimal(10,2) NOT NULL default '0.00',
  `on_onorari` decimal(10,2) NOT NULL default '0.00',
  `on_utente` decimal(10,2) NOT NULL default '0.00',
  `criterio` varchar(6) NOT NULL default '',
  `tempo` varchar(10) NOT NULL default '',
  `nota1` varchar(15) NOT NULL default '',
  `fattura1` varchar(15) NOT NULL default '',
  `nota2` varchar(15) NOT NULL default '0',
  `fattura2` varchar(15) NOT NULL default '',
  `note` text NOT NULL,
  `permessi` text NOT NULL,
  `real_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `ref_id` (`ref_id`),
  KEY `operatore` (`operatore`),
  KEY `codice` (`codice`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestazioni`
--


/*!40000 ALTER TABLE `prestazioni` DISABLE KEYS */;
LOCK TABLES `prestazioni` WRITE;
INSERT INTO `prestazioni` VALUES (1,'0000-00-00','',0,'','','',0,'',0,'0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','','','','','','','','D=6666',0);
UNLOCK TABLES;
/*!40000 ALTER TABLE `prestazioni` ENABLE KEYS */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `codice` varchar(4) NOT NULL default '',
  `login` varchar(30) NOT NULL default '',
  `password` varchar(30) NOT NULL default '',
  `nome` varchar(250) NOT NULL default '',
  `natoa` varchar(250) NOT NULL default '',
  `natoil` varchar(250) NOT NULL default '',
  `citta` varchar(250) NOT NULL default '',
  `indirizzo` varchar(250) NOT NULL default '',
  `domfisc` varchar(250) NOT NULL default '',
  `codfisc` varchar(250) NOT NULL default '',
  `piva` varchar(250) NOT NULL default '',
  `telefonoip` varchar(250) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `onorario` decimal(10,2) NOT NULL default '0.00',
  `ono_prat` text NOT NULL,
  `ono_cli` text NOT NULL,
  `ono_tipo` text NOT NULL,
  `mansione` varchar(255) NOT NULL default '',
  `language` char(2) NOT NULL default 'it',
  `admin` tinyint(1) NOT NULL default '0',
  `lock` tinyint(1) NOT NULL default '0',
  `last_pw_change` date NOT NULL default '0000-00-00',
  `last_action` datetime NOT NULL default '0000-00-00 00:00:00',
  `sid` varchar(255) NOT NULL default '',
  `ref_prat` int(10) NOT NULL default '0',
  `move_prat` tinyint(1) NOT NULL default '0',
  `pratiche_add` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `nome` (`nome`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=0;

--
-- Dumping data for table `users`
--


/*!40000 ALTER TABLE `users` DISABLE KEYS */;
LOCK TABLES `users` WRITE;
UNLOCK TABLES;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

