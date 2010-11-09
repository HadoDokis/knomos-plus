# MySQL dump of database 'knomos_db' on host 'localhost'
# backup date and time: 10/13/10 09:51:17
# built by phpMyBackupPro v.2.1
# http://www.phpMyBackupPro.net

CREATE DATABASE IF NOT EXISTS `knomos_db`;

USE `knomos_db`;



### structure of table `INT_contr_unificato` ###

DROP TABLE IF EXISTS `INT_contr_unificato`;

CREATE TABLE `INT_contr_unificato` (
  `id` int(5) NOT NULL auto_increment,
  `scaglione` int(3) NOT NULL default '0',
  `descrizione` varchar(255) NOT NULL default '',
  `importo` decimal(7,2) NOT NULL default '0.00',
  `ordine` int(5) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=109;


### data of table `INT_contr_unificato` ###

insert into `INT_contr_unificato` values ('1', '1', 'a) Inferiore 1.100,00', '30.00', '0');
insert into `INT_contr_unificato` values ('2', '2', 'b) da 1.100,00 a 5.200,00', '70.00', '0');
insert into `INT_contr_unificato` values ('3', '3', 'c) 5.200,00 26.000,00', '170.00', '0');
insert into `INT_contr_unificato` values ('4', '4', 'd) 26.000,00 52.000,00', '340.00', '0');
insert into `INT_contr_unificato` values ('5', '5', 'e) 52.000,00 260.000,00', '500.00', '0');
insert into `INT_contr_unificato` values ('6', '6', 'f) 260.000,00 520.000,00', '800.00', '0');
insert into `INT_contr_unificato` values ('7', '7', 'g) Superiore a  520.000,00', '1110.00', '0');
insert into `INT_contr_unificato` values ('8', '8', 'Cause di valore indeterminabile (G.di Pace)', '170.00', '0');
insert into `INT_contr_unificato` values ('9', '8', 'Cause di valore indeterminabile (Trib)', '340.00', '0');
insert into `INT_contr_unificato` values ('10', '0', 'Proc. Fallim. dalla sent. dich. alla chiusura', '672.00', '0');
insert into `INT_contr_unificato` values ('11', '0', 'Proc. Fallim. Insinuaz. tempestiva al passivo', '0.00', '0');
insert into `INT_contr_unificato` values ('12', '0', 'Proc. Fallim. Insinuaz. tardiva al passivo', '1.00', '0');
insert into `INT_contr_unificato` values ('13', '0', 'Giudizio di opposizione alla sentenza dichiarativa di fallimento', '0.50', '0');
insert into `INT_contr_unificato` values ('14', '0', 'Proc. Lib.IV, tit.I cpc (d.ing., conv.sfratto, cautelari, sommario cogn., possessori)', '0.50', '0');
insert into `INT_contr_unificato` values ('15', '0', 'Giudizio di opposizione a decreto ingiuntivo', '0.50', '0');
insert into `INT_contr_unificato` values ('16', '0', 'Regolamento di competenza e di giurisdizione', '1.00', '0');
insert into `INT_contr_unificato` values ('17', '0', 'Proc. cautelare in corso di causa', '0.50', '0');
insert into `INT_contr_unificato` values ('25', '0', 'Sfratto per morosit�', '0.50', '0');
insert into `INT_contr_unificato` values ('26', '0', 'Finita locazione', '0.50', '0');
insert into `INT_contr_unificato` values ('27', '0', 'Altri procedimenti in materia di locazione', '1.00', '0');
insert into `INT_contr_unificato` values ('31', '0', 'Procedimenti in camera di consiglio', '70.00', '0');
insert into `INT_contr_unificato` values ('32', '0', 'Procedimenti volontaria giurisdizione', '70.00', '0');
insert into `INT_contr_unificato` values ('51', '0', 'Separazione personale dei coniugi e divorzio', '0.00', '0');
insert into `INT_contr_unificato` values ('52', '0', 'Procedimenti relativi a rapporti patrimoniali fra coniugi', '0.00', '0');
insert into `INT_contr_unificato` values ('53', '0', 'Procedimenti in materia di assegni di mantenimento della prole', '0.00', '0');
insert into `INT_contr_unificato` values ('54', '0', 'Altri procedimenti riguardanti la prole', '0.00', '0');
insert into `INT_contr_unificato` values ('55', '0', 'Interdizione, inabilitazione, amm. di sostegno', '0.00', '0');
insert into `INT_contr_unificato` values ('56', '0', 'Dichiarazione assenza, morte presunta', '0.00', '0');
insert into `INT_contr_unificato` values ('57', '0', 'Ricorsi relativi a minori, interdetti, inabilitati', '0.00', '0');
insert into `INT_contr_unificato` values ('58', '0', 'Procedimenti di rettificazione dello stato civile', '0.00', '0');
insert into `INT_contr_unificato` values ('59', '0', 'Procedimenti in materia tavolare', '0.00', '0');
insert into `INT_contr_unificato` values ('60', '0', 'Proc. art. 3 L.24-3-2001 n. 89 (L.Pinto)', '0.00', '0');
insert into `INT_contr_unificato` values ('81', '0', 'Esecuzione immobiliare', '200.00', '0');
insert into `INT_contr_unificato` values ('82', '0', 'Esecuzioni mobiliari (di importo fino a 2500)', '30.00', '0');
insert into `INT_contr_unificato` values ('83', '0', 'Esecuzioni mobiliari (di importo superiore a 2500)', '100.00', '0');
insert into `INT_contr_unificato` values ('84', '0', 'Procedimenti esecutivi per consegna o rilascio', '0.00', '0');
insert into `INT_contr_unificato` values ('85', '0', 'Opposizione atti esecutivi', '120.00', '0');
insert into `INT_contr_unificato` values ('86', '0', 'Altri procedimenti esecutivi', '100.00', '0');
insert into `INT_contr_unificato` values ('101', '0', 'Ricorsi proposti davanti ai Tribunali amministrativi regionali e al Consiglio di Stato', '500.00', '0');
insert into `INT_contr_unificato` values ('102', '0', 'Ricorsi avverso il silenzio della PA (art. 21-bis l. 6-12-1971, n. 1034', '250.00', '0');
insert into `INT_contr_unificato` values ('103', '0', 'Ricorsi in tema di accesso agli atti ex art. 25/5, l. 7-8-1990, n. 241', '250.00', '0');
insert into `INT_contr_unificato` values ('104', '0', 'Ricorsi aventi ad oggetto il diritto di cittadinanza, di residenza, di soggiorno e di ingresso nel territorio dello Stato', '250.00', '0');
insert into `INT_contr_unificato` values ('105', '0', 'Ricorsi di esecuzione della sentenza o di ottemperanza del giudicato', '250.00', '0');
insert into `INT_contr_unificato` values ('106', '0', 'Ricorsi ex art. 23-bis., c. 1, l. 6.12.1971 n. 1034 ed altre disposizioni che lo richiamano', '1000.00', '0');
insert into `INT_contr_unificato` values ('107', '0', 'Ricorso ex art. 23-bis., c. 1, l. 6.12.1971 n. 1034 in materia di appalti e provv. Autor.', '2000.00', '0');
insert into `INT_contr_unificato` values ('108', '0', 'Ricorso ex art. 23 L.24-11-1981 n. 689', '8.00', '0');



### structure of table `INT_links` ###

DROP TABLE IF EXISTS `INT_links`;

CREATE TABLE `INT_links` (
  `id` int(5) NOT NULL auto_increment,
  `descrizione` varchar(50) NOT NULL default '',
  `url` varchar(100) NOT NULL default '',
  `link` int(2) NOT NULL default '0',
  `pulsante` int(1) NOT NULL default '0',
  `target` int(2) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=14;


### data of table `INT_links` ###

insert into `INT_links` values ('1', 'Mail', 'http://mail.zoho.com/mail/home.do', '1', '1', '0');
insert into `INT_links` values ('2', 'Calendar', 'http://calendar.zoho.com/mycalendar', '1', '0', '1');
insert into `INT_links` values ('3', 'Knomos (sito ufficiale)', 'http://www.knomos.org', '3', '0', '0');
insert into `INT_links` values ('5', 'Knomos', 'http://www.knomos.eu', '3', '0', '0');
insert into `INT_links` values ('6', 'Altalex', 'http://www.altalex.com', '3', '0', '1');
insert into `INT_links` values ('7', 'Documents', 'http://docs.zoho.com/index.do', '1', '0', '0');
insert into `INT_links` values ('8', 'Writer', 'http://writer.zoho.com/index.do', '1', '1', '0');
insert into `INT_links` values ('9', 'Sheet', 'http://sheet.zoho.com/home.do', '1', '0', '1');
insert into `INT_links` values ('10', 'Chat', 'http://chat.zoho.com/mpchat.do', '1', '1', '1');
insert into `INT_links` values ('11', 'CRM', 'http://crm.zoho.com/crm/ShowHomePage.do', '1', '2', '0');
insert into `INT_links` values ('12', 'Dropbox', 'https://www.dropbox.com/home#:::', '2', '0', '0');
insert into `INT_links` values ('13', 'Eutelia fax', 'http://fax.euteliavoip.com/index.php?option=com_wrapper&Itemid=89', '2', '1', '0');


### structure of table `INT_pratiche_std` ###

DROP TABLE IF EXISTS `INT_pratiche_std`;

CREATE TABLE `INT_pratiche_std` (
  `id` int(10) NOT NULL auto_increment,
  `cod_tipo` varchar(255) NOT NULL default '',
  `stato` int(5) NOT NULL default '0',
  `fase` int(5) NOT NULL default '0',
  `list_aut_comp` varchar(5) NOT NULL default '0',
  `curia` varchar(255) NOT NULL default '',
  `uff_giud` varchar(100) NOT NULL default '',
  `luogo_uff_giud` varchar(100) NOT NULL default '',
  `giudice` varchar(100) NOT NULL default '',
  `criterio` varchar(5) NOT NULL default '',
  `dipartimento` varchar(5) NOT NULL default '0',
  `descrizione` varchar(255) NOT NULL default '',
  `posizione` int(5) NOT NULL default '0',
  `servizio1` varchar(100) NOT NULL default '',
  `servizio2` int(5) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=16;


### data of table `INT_pratiche_std` ###

insert into `INT_pratiche_std` values ('1', 'DIPE', '0', '4', '4', 'CAP', 'Corte d\'Appello', 'Firenze', '3 PEN', 'MAX/1', '2', 'Diritto Penale (CAP Firenze 3 PEN)', '0', '', '0');
insert into `INT_pratiche_std` values ('2', 'DIPE', '0', '3', '1', 'TMP', 'Tribunale Monocratico Penale', 'Empoli', 'Masi', 'MAX/1', '2', 'Diritto Penale (TMP EM Masi)', '0', '', '0');
insert into `INT_pratiche_std` values ('3', 'DIPE', '0', '3', '1', 'TMP FI', 'Tribunale Monocratico Penale', 'Firenze', '', 'MAX/1', '2', 'Diritto Penale (TMP FI)', '0', '', '0');
insert into `INT_pratiche_std` values ('4', 'DIPE', '0', '3', '2', 'GPP', 'Giudice di Pace Penale', 'Empoli', 'Pruneti', 'max/1', '2', 'Diritto Penale (GPP Empoli Pruneti)', '0', '', '0');
insert into `INT_pratiche_std` values ('5', 'DIPE', '0', '3', '2', 'GPP', 'Giudice di Pace Penale', 'Empoli', '', 'MAX/1', '2', 'Diritto Penale (GPP Empoli)', '0', '', '0');
insert into `INT_pratiche_std` values ('6', 'DIPE', '1', '3', '1', 'TMP', 'Tribunale Monocratico Penale', 'Pontedera', '', 'MAX/1', '2', 'Diritto Penale (TMP Pontedera)', '0', '', '0');
insert into `INT_pratiche_std` values ('7', 'DIPE', '0', '3', '0', 'GPP', 'Giudice di Pace Penale', 'San Miniato', 'Giunti', 'MAX/1', '2', 'Diritto Penale (GPP San Miniato Giunti)', '0', '', '0');
insert into `INT_pratiche_std` values ('8', 'DIPE', '0', '3', '2', 'GPP San Miniato', '', '', '', 'MAX/1', '2', 'Diritto Penale (GPP San Miniato)', '0', '', '0');
insert into `INT_pratiche_std` values ('9', 'DIPE', '0', '3', '2', 'GPP', 'Giudice di Pace Penale', 'Pontedera', '', 'MAX/1', '2', 'Diritto Penale (GPP Pontedera)', '0', '', '0');
insert into `INT_pratiche_std` values ('10', 'DIPE', '0', '3', '1', 'TMP EM', 'Tribunale Monocratico Penale', 'Empoli', '', 'MAX/1', '2', 'Diritto Penale (TMP EM)', '0', '', '0');
insert into `INT_pratiche_std` values ('11', 'DIPE', '2', '4', '6', 'CAP', 'Corte d\'Appello', 'Firenze', '1 PEN', 'MED.5', '3', 'Diritto Penale (CAP Firenze 1 PEN)', '8', '', '0');
insert into `INT_pratiche_std` values ('12', 'DIPE', '0', '4', '4', 'CAP', 'Corte d\'Appello', 'Firenze', '2 PEN', 'MAX/1', '2', 'Diritto Penale (CAP Firenze 2 PEN)', '0', '', '0');
insert into `INT_pratiche_std` values ('13', 'DIPE', '0', '3', '3', 'TCP FI 2 PEN', 'Tribunale Collegiale Penale', 'Firenze', '1 PEN', 'MAX/1', '2', 'Diritto Penale (TCP FI 1 PEN)', '0', '', '0');
insert into `INT_pratiche_std` values ('14', 'DIPE', '0', '3', '3', 'TCP FI 2 PEN', '', '', '', 'MAX/1', '2', 'Diritto Penale (TCP FI 2 PEN)', '0', '', '0');
insert into `INT_pratiche_std` values ('15', 'DIPE', '0', '2', '6', 'GIP', 'Giudice per le indagini preliminari', 'Firenze', '', 'Max/1', '2', 'Diritto Penale (GIP FI)', '0', '', '0');


### structure of table `INT_pratiche_tipo` ###

DROP TABLE IF EXISTS `INT_pratiche_tipo`;

CREATE TABLE `INT_pratiche_tipo` (
  `id` int(10) NOT NULL auto_increment,
  `codice` varchar(5) NOT NULL default '',
  `ttp_desc` varchar(250) NOT NULL default '',
  `ttp_on_orar` decimal(10,2) NOT NULL default '0.00',
  `contr_unif` varchar(50) NOT NULL default '1',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `codice` (`codice`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=204;


### data of table `INT_pratiche_tipo` ###

insert into `INT_pratiche_tipo` values ('1', 'DIPE', 'Diritto Penale', '0.00', '0');
insert into `INT_pratiche_tipo` values ('2', 'DIUF', 'Difese d\'ufficio', '0.00', '0');
insert into `INT_pratiche_tipo` values ('3', 'CONS', 'Consulenza e assistenza', '0.00', '0');
insert into `INT_pratiche_tipo` values ('4', 'ASCO', 'Assistenza Contrattuale, redazione contratti, modulistica', '0.00', '0');
insert into `INT_pratiche_tipo` values ('5', 'AMM1', 'Diritto amministrativo (Tar e Consiglio di Stato)', '0.00', '500.00');
insert into `INT_pratiche_tipo` values ('6', 'AMM2', 'Ricorsi avverso il silenzio della PA (art. 21-bis l. 6-12-1971, n. 1034', '0.00', '250.00');
insert into `INT_pratiche_tipo` values ('7', 'AMM3', 'Ricorsi in tema di accesso agli atti ex art. 25/5, l. 7-8-1990, n. 241', '0.00', '250.00');
insert into `INT_pratiche_tipo` values ('8', 'AMM4', 'Ric. cittadinanza, di residenza, di soggiorno e di ingresso', '0.00', '250.00');
insert into `INT_pratiche_tipo` values ('9', 'AMM5', 'Esecuzione della sentenza o di ottemperanza del giudicato', '0.00', '250.00');
insert into `INT_pratiche_tipo` values ('10', 'AMM6', 'Ricorsi ex art. 23-bis., c. 1, l. 6.12.1971 n. 1034 e disp.che lo rich.', '0.00', '1000.00');
insert into `INT_pratiche_tipo` values ('11', 'AMM7', 'Ricorso ex art. 23-bis., c. 1, l. 6.12.1971 n. 1034 in materia di appalti e provv. Autor.', '0.00', '2000.00');
insert into `INT_pratiche_tipo` values ('12', 'OSAM', 'Opposizione a sanzione amministrativa', '0.00', '1');
insert into `INT_pratiche_tipo` values ('21', 'FALL1', 'Diritto Fallimentare (in genere)', '0.00', '1');
insert into `INT_pratiche_tipo` values ('22', 'FALL2', 'Diritto Fallim. (dalla sent. dich. alla chiusura)', '0.00', '672,00');
insert into `INT_pratiche_tipo` values ('23', 'FALL3', 'Diritto Fallim. (opposiz.alla sentenza dich. di fallimento)', '0.00', '0.5');
insert into `INT_pratiche_tipo` values ('24', 'FALL4', 'Diritto Fallim. (insinuaz. tempestiva al passivo)', '0.00', '0');
insert into `INT_pratiche_tipo` values ('25', 'FALL5', 'Diritto Fallim. (insinuaz. tardiva al passivo))', '0.00', '1');
insert into `INT_pratiche_tipo` values ('26', 'ASSO', 'Associazioni e simili', '0.00', '1');
insert into `INT_pratiche_tipo` values ('27', 'DISO', 'Diritto Societario', '0.00', '1');
insert into `INT_pratiche_tipo` values ('42', 'FAMI1', 'Separazione Consensuale', '0.00', '0');
insert into `INT_pratiche_tipo` values ('43', 'FAMI2', 'Separazione Giudiziale', '0.00', '0');
insert into `INT_pratiche_tipo` values ('44', 'FAMI3', 'Divorzio', '0.00', '0');
insert into `INT_pratiche_tipo` values ('45', 'FAMI4', 'Procedimenti in materia di assegni di mantenimento della prole', '0.00', '0');
insert into `INT_pratiche_tipo` values ('46', 'FAMI5', 'Procedimenti relativi a rapporti patrimoniali fra coniugi', '0.00', '0');
insert into `INT_pratiche_tipo` values ('47', 'FAMI6', 'Procedimenti riguardanti la prole', '0.00', '0');
insert into `INT_pratiche_tipo` values ('48', 'INTER', 'Interdizione, inabilitazione, amm. di sostegno', '0.00', '0');
insert into `INT_pratiche_tipo` values ('49', 'ASSEN', 'Dichiarazione assenza, morte presunta', '0.00', '0');
insert into `INT_pratiche_tipo` values ('50', 'MINO', 'Ricorsi relativi a minori, interdetti, inabilitati', '0.00', '0');
insert into `INT_pratiche_tipo` values ('51', 'STCIV', 'Procedimenti di rettificazione dello stato civile', '0.00', '0');
insert into `INT_pratiche_tipo` values ('52', 'TAVOL', 'Procedimenti in materia tavolare', '0.00', '0');
insert into `INT_pratiche_tipo` values ('53', 'PINTO', 'Proc. art. 3 L.24-3-2001 n. 89 (L.Pinto)', '0.00', '0');
insert into `INT_pratiche_tipo` values ('71', 'SUCC', 'Successioni', '0.00', '1');
insert into `INT_pratiche_tipo` values ('72', 'DLAV', 'Diritto del Lavoro', '0.00', '0');
insert into `INT_pratiche_tipo` values ('81', 'RECC', 'Recupero Crediti', '0.00', '1');
insert into `INT_pratiche_tipo` values ('82', 'DING', 'Decreti ingiuntivi', '0.00', '0.5');
insert into `INT_pratiche_tipo` values ('83', 'OPDI', 'Opposizione a Decreto Ingiuntivo', '0.00', '0.5');
insert into `INT_pratiche_tipo` values ('84', 'CAUT1', 'Procedimenti cautelari e d\'urgenza', '0.00', '0.5');
insert into `INT_pratiche_tipo` values ('85', 'CAUT2', 'Procedimenti per sequestro', '0.00', '0.5');
insert into `INT_pratiche_tipo` values ('86', 'CAUT3', 'Procedimenti possessori, di nuova opera e danno temuto', '0.00', '0.5');
insert into `INT_pratiche_tipo` values ('87', 'CAUT4', 'Procedimenti di istruzione preventiva', '0.00', '0.5');
insert into `INT_pratiche_tipo` values ('88', 'CAUT5', 'Procedimento sommario di cognizione', '0.00', '0.5');
insert into `INT_pratiche_tipo` values ('89', 'CAUT6', 'Proc. cautelare in corso di causa', '0.00', '0.5');
insert into `INT_pratiche_tipo` values ('90', 'RCOMP', 'Regolamento di competenza e di giurisdizione', '0.00', '1');
insert into `INT_pratiche_tipo` values ('110', 'DMAR', 'Diritto Marittimo', '0.00', '1');
insert into `INT_pratiche_tipo` values ('111', 'DICO1', 'Diritto Condominiale', '0.00', '1');
insert into `INT_pratiche_tipo` values ('112', 'DICO2', 'Impugnazione di delibere condominiali', '0.00', '1');
insert into `INT_pratiche_tipo` values ('113', 'DIND', 'Diritto Industriale', '0.00', '1');
insert into `INT_pratiche_tipo` values ('114', 'DAUT', 'Diritti d\'Autore', '0.00', '1');
insert into `INT_pratiche_tipo` values ('115', 'RCA', 'RC auto', '0.00', '1');
insert into `INT_pratiche_tipo` values ('116', 'RDCO', 'Risoluzione e Danni Contrattuali', '0.00', '1');
insert into `INT_pratiche_tipo` values ('117', 'ESCO', 'Azione per l\'Esecuzione del Contratto', '0.00', '1');
insert into `INT_pratiche_tipo` values ('118', 'INCO', 'Invalid., inesistenza, inefficacia Contrattuale', '0.00', '1');
insert into `INT_pratiche_tipo` values ('119', 'RDDI', 'Risarcimento danni diversi', '0.00', '1');
insert into `INT_pratiche_tipo` values ('120', 'RDIS', 'Risarcimento danni inc. stradale', '0.00', '1');
insert into `INT_pratiche_tipo` values ('121', 'INDE', 'Ripetizione di indebito', '0.00', '1');
insert into `INT_pratiche_tipo` values ('151', 'LONE1', 'Cause in materia di locazione, comodato, occup.senza titolo', '0.00', '1');
insert into `INT_pratiche_tipo` values ('152', 'LONE2', 'Finita Locazione', '0.00', '0.5');
insert into `INT_pratiche_tipo` values ('153', 'LONE4', 'Sfratto per morosit�', '0.00', '0.5');
insert into `INT_pratiche_tipo` values ('154', 'ESEI', 'Esecuzione Immobiliare', '0.00', '200.00');
insert into `INT_pratiche_tipo` values ('155', 'ESEM1', 'Esecuzione Mobiliare (sino a 2500,00)', '0.00', '30.00');
insert into `INT_pratiche_tipo` values ('156', 'ESEM2', 'Esecuzione Mobiliare (oltre 2500,00)', '0.00', '100.00');
insert into `INT_pratiche_tipo` values ('157', 'ESECR', 'Procedimenti esecutivi per consegna o rilascio', '0.00', '0');
insert into `INT_pratiche_tipo` values ('158', 'ESEC', 'Altri procedimenti esecutivi', '0.00', '100,00');
insert into `INT_pratiche_tipo` values ('160', 'OPAE', 'Opposizione agli Atti Esecutivi', '0.00', '120.00');
insert into `INT_pratiche_tipo` values ('181', 'CCONS', 'Procedimenti in camera di consiglio', '0.00', '70,00');
insert into `INT_pratiche_tipo` values ('182', 'VOLON', 'Procedimenti volontaria giurisdizione', '0.00', '70.00');
insert into `INT_pratiche_tipo` values ('201', 'VAR', 'Varie', '0.00', '0');
insert into `INT_pratiche_tipo` values ('202', 'PER', 'Personali', '0.00', '0');
insert into `INT_pratiche_tipo` values ('203', 'PROC', 'Procuratoria', '0.00', '0');


### structure of table `INT_settings` ###

DROP TABLE IF EXISTS `INT_settings`;

CREATE TABLE `INT_settings` (
  `id` int(10) NOT NULL default '1',
  `usa_link1` int(2) NOT NULL default '0',
  `label_link1` varchar(30) NOT NULL default '',
  `ico_link1` varchar(30) NOT NULL default '',
  `usa_link2` int(2) NOT NULL default '0',
  `label_link2` varchar(30) NOT NULL default '',
  `ico_link2` varchar(30) NOT NULL default '',
  `usa_link3` int(2) NOT NULL default '0',
  `label_link3` varchar(30) NOT NULL default '',
  `ico_link3` varchar(30) NOT NULL default '',
  `div_last_prat` int(2) NOT NULL default '0',
  `calc_autom_prest` int(2) NOT NULL default '0',
  `usa_tariffario_knomos` int(2) NOT NULL default '0',
  `tar_titolo_selettore1` varchar(30) NOT NULL default '',
  `tar_titolo_selettore2` varchar(30) NOT NULL default '',
  `tar_titolo_selettore3` varchar(30) NOT NULL default '',
  `tar_titolo_selettore4` varchar(30) NOT NULL default '',
  `tar_titolo_selettore5` varchar(30) NOT NULL default '',
  `tar_titolo_selettore6` varchar(30) NOT NULL default '',
  `fatt_aliq_cpa` decimal(5,2) NOT NULL default '0.00',
  `fatt_aliq_iva` decimal(5,2) NOT NULL default '0.00',
  `fatt_aliq_ritacc` decimal(5,2) NOT NULL default '0.00',
  `fatt_aliq_spgen` decimal(5,2) NOT NULL default '0.00',
  `fatt_avvocato` varchar(50) NOT NULL default '',
  `fatt_citta_studio` varchar(50) NOT NULL default '',
  `fatt_indirizzo_studio` varchar(50) NOT NULL default '',
  `fatt_codicefiscale` varchar(20) NOT NULL default '',
  `fatt_partitaIVA` varchar(20) NOT NULL default '',
  `fatt_domicilio_fiscale` varchar(50) NOT NULL default '',
  `fatt_data_luogo_nascita` varchar(50) NOT NULL default '',
  `usa_mail_default` int(5) NOT NULL default '0',
  `new_mail_default` int(5) NOT NULL default '0',
  `url_webmail` varchar(100) NOT NULL default '',
  `url_nuova_mail` varchar(100) NOT NULL default '',
  `webmail_service1` varchar(100) NOT NULL default '',
  `webmail_service2` varchar(100) NOT NULL default '',
  `webmail_service3` varchar(100) NOT NULL default '',
  `webmail_service4` varchar(100) NOT NULL default '',
  `webmail_service5` varchar(100) NOT NULL default '',
  `fin_mail_default` int(2) NOT NULL default '0',
  `UsaTelefonoIP` int(2) NOT NULL default '0',
  `UsaCentralino` int(2) NOT NULL default '0',
  `UsaDbox` int(2) NOT NULL default '0',
  `dbox_url` varchar(100) NOT NULL default '',
  `dbox_mobile_url` varchar(100) NOT NULL default '',
  `dbox_schedario` varchar(100) NOT NULL default '',
  `dbox_contatto` varchar(100) NOT NULL default '',
  `UsaGmail` int(2) NOT NULL default '0',
  `DominioGapps` varchar(100) NOT NULL default '',
  `gapps_url` varchar(100) NOT NULL default '',
  `gapps_mobile_url` varchar(100) NOT NULL default '',
  `gapps_new_url` varchar(100) NOT NULL default '',
  `gapps_service1` varchar(100) NOT NULL default '',
  `gapps_service2` varchar(100) NOT NULL default '',
  `gapps_service3` varchar(100) NOT NULL default '',
  `gmail_url` varchar(100) NOT NULL default '',
  `gmail_mobile_url` varchar(100) NOT NULL default '',
  `gmail_new_url` varchar(100) NOT NULL default '',
  `gmail_service1` varchar(100) NOT NULL default '',
  `gmail_service2` varchar(100) NOT NULL default '',
  `gmail_service3` varchar(100) NOT NULL default '',
  `UsaGcal` int(2) NOT NULL default '0',
  `gcal_url` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


### data of table `INT_settings` ###

insert into `INT_settings` values ('1', '1', 'Office suite', 'office_suite.png', '1', 'Comunicazioni', 'comunicazioni.png', '1', 'Personali', 'preferiti.png', '0', '1', '0', '', '', '', '', '', '', '0.00', '0.00', '0.00', '0.00', '', '', '', '', '', '', '', '1', '0', 'http://mail.google.com/mail/u/0/?hl=it&shva=1#mbox', 'http://mail.google.com/mail/u/0/?hl=it&shva=1#compose', '', '', '', '', '', '1', '1', '1', '1', 'https://www.dropbox.com/home#/', 'http://www.dropbox.com/m/browse/', 'Fascicoli/', 'Contatti/', '1', 'ammannati.it', '', '', '', '', '', '', 'http://mail.google.com/mail/x/2ryyqy343b0l-/?ie=UTF-8&s=q&q=', '', 'http://mail.google.com/mail/u/0/?hl=it&tab=wm#compose', '', '', '', '1', 'http://www.google.com/calendar/render?tab=mc');


### structure of table `INT_tariffe` ###

DROP TABLE IF EXISTS `INT_tariffe`;

CREATE TABLE `INT_tariffe` (
  `id` int(10) NOT NULL auto_increment,
  `tatid` varchar(5) NOT NULL default '',
  `tat_desc` varchar(250) NOT NULL default '',
  `tat_unita` varchar(5) NOT NULL default '',
  `tat_quantita` int(11) NOT NULL default '1',
  `tat_imp` decimal(10,2) NOT NULL default '0.00',
  `tat_imp_molt` char(1) NOT NULL default '',
  `tat_nonimp` decimal(10,2) NOT NULL default '0.00',
  `tat_nonimp_molt` char(1) NOT NULL default '',
  `tat_diritti` varchar(5) NOT NULL default '',
  `tat_stragiudiziali` varchar(5) NOT NULL default '',
  `tat_ccostituzionale` varchar(5) NOT NULL default '',
  `tat_conciliazione` varchar(5) NOT NULL default '',
  `tat_pretura` varchar(5) NOT NULL default '',
  `tat_tribunale` varchar(5) NOT NULL default '',
  `tat_amministrative` varchar(5) NOT NULL default '',
  `tat_cappello` varchar(5) NOT NULL default '',
  `tat_ccassazione` varchar(5) NOT NULL default '',
  `id_pdf` int(11) NOT NULL default '0',
  `selettore` int(2) NOT NULL default '1',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `tatid` (`tatid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=215;


### data of table `INT_tariffe` ###

insert into `INT_tariffe` values ('1', '$', 'PAGATO', '', '1', '0.00', '', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('2', '001', 'Ricerca dei documenti', '', '1', '0.00', '', '0.00', '', '', '', '', '', '0004', '0013', '0023', '0033', '0031', '0', '1');
insert into `INT_tariffe` values ('3', '002', 'Ispezione in luogo', '', '1', '0.00', '', '0.00', '', 'D082', '0013', '', '', '0004', '0013', '0023', '0033', '', '0', '1');
insert into `INT_tariffe` values ('4', '003', 'Posizione studio e archivio', '', '1', '10.33', 'F', '0.00', '', 'D002', 'S02A', '', 'S02A', 'S02A', 'S02A', 'S02A', 'S02A', '', '1', '1');
insert into `INT_tariffe` values ('5', '004', 'Studio della controversia', '', '1', '0.00', '', '0.00', '', '', 'S02C', '', '', '0203', '1112', '2122', '4142', '4141', '0', '1');
insert into `INT_tariffe` values ('6', '005', 'Redazione atto introduttivo', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '0005', '0014', '0024', '0034', '0041', '0', '1');
insert into `INT_tariffe` values ('7', '010', 'Iscrizione a Ruolo', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '0');
insert into `INT_tariffe` values ('8', '011', 'Costituzione in giudizio', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('9', '10', 'Iscrizione a ruolo', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '0');
insert into `INT_tariffe` values ('10', '100', 'Trasferta fuori circondario (1h.)', '', '1', '0.00', '', '0.00', '', '', '3939', '', '3939', '3939', '3939', '3939', '3939', '3939', '0', '1');
insert into `INT_tariffe` values ('11', '101', 'Domiciliazione', '', '1', '0.00', '', '0.00', '', '', '', '', '', 'D080', 'D080', 'D080', 'D080', 'D081', '0', '1');
insert into `INT_tariffe` values ('12', '102', 'Redazione Atto di Citazione', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '0005', '0014', '', '0034', '', '0', '1');
insert into `INT_tariffe` values ('13', '103', 'Redazione Atto di Appello', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '', '0014', '', '0034', '', '0', '1');
insert into `INT_tariffe` values ('14', '104', 'Redazione Comparsa di Risposta', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '0005', '0014', '', '0034', '', '0', '1');
insert into `INT_tariffe` values ('15', '105', 'Redazione Memoria di Replica', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '0008', '008N', '0018', '0029', '0038', '4141', '0', '1');
insert into `INT_tariffe` values ('16', '106', 'Redazione Memoria Istruttoria', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '0008', '0017', '', '0037', '', '0', '1');
insert into `INT_tariffe` values ('17', '107', 'Redazione reclamo al collegio', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '', '0017', '', '0037', '', '0', '1');
insert into `INT_tariffe` values ('18', '108', 'Redazione Comparsa Conclusionale', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '008N', '0018', '', '0038', '', '0', '1');
insert into `INT_tariffe` values ('19', '109', 'Redazione del Ricorso', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '0005', '0014', '0024', '0034', '4141', '0', '1');
insert into `INT_tariffe` values ('20', '11', 'Costituzione in giudizio', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('21', '110', 'Redazione del Controricorso', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '', '', '0024', '', '4141', '0', '1');
insert into `INT_tariffe` values ('22', '111', 'Discussione', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '0009', '0019', '0030', '0039', '4141', '0', '1');
insert into `INT_tariffe` values ('23', '112', 'Assistenza procedure concorsuali', '', '1', '0.00', '', '0.00', '', '', '', '', '', 'S004', 'S004', 'S004', '049C', 'S004', '0', '1');
insert into `INT_tariffe` values ('24', '113', 'Gestioni amministrative', '', '1', '0.00', '', '0.00', '', '', '', '', '', 'S006', 'S006', '', 'S006', 'S006', '0', '1');
insert into `INT_tariffe` values ('25', '114', '...', '', '1', '0.00', '', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('26', '115', 'Copia a cliente', '', '1', '0.00', '', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('27', '116', 'Lettera da controparte', '', '1', '0.00', '', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('28', '117', 'Lettera dal procuratore avversario', '', '1', '0.00', '', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('29', '118', 'Lettera dal ns. procuratore', '', '1', '0.00', '', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('30', '119', 'Redazione Ricorso Per Ingiunzione', '', '1', '0.00', '', '0.00', '', 'D003', '', '', 'S02A', '0050', '0050', '', '', '', '0', '1');
insert into `INT_tariffe` values ('31', '12', 'Disamina atti avversari', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('32', '120', 'Disamina', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('33', '121', 'Ritiro e disamina atto notificato', '', '1', '2.01', 'F', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('34', '122', 'Richiesta formula esecutiva', '', '1', '1.55', 'F', '4.13', 'F', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('35', '123', 'Accesso per ritiro', '', '1', '2.01', 'F', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('36', '124', 'Redazione reclamo ex art. 22 L.F.', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '', '', '', '049C', '', '0', '1');
insert into `INT_tariffe` values ('37', '125', 'Redazione istanza in materia fallimentare', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '', '049B', '', '049C', '', '0', '1');
insert into `INT_tariffe` values ('38', '126', 'Redazione Ricorso per separazione', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '049B', '', '', '', '0', '1');
insert into `INT_tariffe` values ('39', '127', 'Redazione Ricorso per divorzio', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '049B', '', '', '', '0', '1');
insert into `INT_tariffe` values ('40', '128', 'Redazione Intimazione', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '049A', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('41', '129', 'Copia verbale', '', '1', '0.00', '', '0.00', '', 'D006', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('42', '13', 'Redazione memoria', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '0008', '0017', '0029', '0037', '4141', '0', '1');
insert into `INT_tariffe` values ('43', '130', 'Lettera a cliente (estratto conto)', '', '1', '2.07', 'F', '0.41', 'F', '', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', '0', '1');
insert into `INT_tariffe` values ('44', '131', 'Accesso all\'Ufficio del Registro e tassa', '', '1', '2.01', 'F', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('45', '132', 'Redazione Ricorso anticipazione di udienza', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '0008', '0017', '', '0037', '', '0', '1');
insert into `INT_tariffe` values ('46', '133', 'Consultazioni con cliente', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '0003', '0012', '0022', '0032', '0042', '0', '1');
insert into `INT_tariffe` values ('47', '134', 'Lettera da cliente', '', '1', '0.00', '', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('48', '135', 'Disamina atto notificato', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('49', '136', 'Lettera a cliente (stato delle pratiche)', '', '1', '0.00', '', '0.00', '', '', 'S02B', '', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', '0', '1');
insert into `INT_tariffe` values ('50', '137', 'Redazione Atto di Pignoramento', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('51', '138', 'Lettera a cliente (sollecito)', '', '1', '2.48', 'F', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('52', '139', 'Lettera a cliente (richiesta istruzioni)', '', '1', '2.48', 'F', '0.00', '', '', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', '0', '1');
insert into `INT_tariffe` values ('53', '14', 'Redazione domanda introduttiva', '', '1', '0.00', '', '0.00', '', 'D002', 'S02E', '', '', '0005', '0014', '0024', '0034', '4141', '3', '1');
insert into `INT_tariffe` values ('54', '140', 'Lettera a nostro procuratore (s.o.)', '', '1', '2.07', 'Q', '0.41', 'F', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('55', '141', 'Telefonica a nostro procuratore pro-soluto', '', '1', '0.00', '', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('56', '143', 'Deposito calcolo interessi', '', '1', '2.01', 'F', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('57', '144', 'Bollo su fattura', '', '1', '0.00', '', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('58', '145', 'Archiviare', '', '1', '0.00', '', '0.00', '', 'D0001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('59', '147', 'FATTURA N.', '', '1', '0.00', '', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('60', '148', 'Lettera a cliente (dati precetto)', '', '1', '0.00', '', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('61', '149', 'Lettera a cliente (calcolo interessi)', '', '1', '0.00', '', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('62', '15', 'Disamina provvedimento', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('63', '150', 'Lettera a nostro procuratore', '30', '1', '2.07', 'Q', '0.39', 'Q', '', 'S02B', '', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', '0', '1');
insert into `INT_tariffe` values ('64', '151', 'Telefonica a nostro procuratore', '', '1', '0.00', '', '0.00', '', '', 'S02B', '', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', '0', '1');
insert into `INT_tariffe` values ('65', '152', 'Lettera a cliente', '', '1', '0.00', '', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('66', '154', 'Mail a cliente', '', '1', '0.00', '', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('67', '159', 'Telefonica a cliente (richiesta istruzioni)', '', '1', '0.00', '', '0.00', '', '', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', '0', '1');
insert into `INT_tariffe` values ('68', '16', 'Disamina sentenza', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('69', '17', 'Istanze e deduzioni a verbale', '', '1', '0.00', '', '0.00', '', 'D166', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('70', '18', 'Formazione fascicolo', '', '1', '10.33', 'F', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('71', '19', 'Udienza', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '0006', '0015', '', '0035', '', '0', '1');
insert into `INT_tariffe` values ('72', '20', 'Assistenza a cliente in udienza', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('73', '200', 'Termine per pagamento', '', '1', '0.00', '', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('74', '201', 'Richiesta documentazione danno', '', '1', '0.00', '', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('75', '21', 'Consultazioni col cliente (senza onorari)', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('76', '22', 'Corrispondenza col cliente', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('77', '23', 'Richiesta notifica', '', '1', '2.01', 'F', '20.66', 'F', 'D001', '', '', '', '', '', '', '', '', '23', '1');
insert into `INT_tariffe` values ('78', '24', 'Conciliazione', '', '1', '0.00', '', '0.00', '', 'D007', '', '', '0001', '0010', '0020', '', '0036', '', '0', '1');
insert into `INT_tariffe` values ('79', '25', 'Redazione intimazione a testi', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '26', '1');
insert into `INT_tariffe` values ('80', '26', 'Nomina consulente tecnico di parte', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '27', '1');
insert into `INT_tariffe` values ('81', '27', 'Assistenza alle prove', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '0007', '0016', '', '0036', '', '0', '1');
insert into `INT_tariffe` values ('82', '28', 'Richiesta documenti', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '29', '1');
insert into `INT_tariffe` values ('83', '29', 'Richiesta n. 2 copie autentiche', '', '1', '2.01', 'F', '0.00', '', 'D6X2', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('84', '291', 'Copie e marche D.I. per autentica', '', '1', '5.16', 'F', '72.30', 'F', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('85', '30', 'Deposito in cancelleria', '', '1', '2.01', 'F', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '31', '1');
insert into `INT_tariffe` values ('86', '31', 'Ritiro del fascicolo', '', '1', '2.01', 'F', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '32', '1');
insert into `INT_tariffe` values ('87', '32', 'Registrazione contratto', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('88', '33', 'Bollatura documenti', '', '1', '0.00', '', '0.00', '', 'D006', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('89', '34', 'Richiesta inserzione FAL', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('90', '35', 'Redazione querela di falso', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '0018', '', '0038', '', '0', '1');
insert into `INT_tariffe` values ('91', '36', 'Disamina prove', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('92', '37', 'Precisazione delle conclusioni', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('93', '38', 'Redazione nota spese', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('94', '39', 'Richiesta parere Consiglio Dell\'Ordine', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('95', '3S', 'Posizione studio e archivio (stragiudiziale)', '', '1', '10.33', 'F', '0.00', '', '', 'S02A', 'S02A', 'S02A', 'S02A', 'S02A', 'S02A', 'S02A', 'S02A', '0', '1');
insert into `INT_tariffe` values ('96', '40', 'Spedizione a sentenza', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '0001', '0009', '0019', '', '0039', '4141', '0', '1');
insert into `INT_tariffe` values ('97', '41', 'Registrazione provvedimento', '', '1', '1.55', 'F', '0.00', '', 'D142', '', '', '', '', '', '', '', '', '42', '1');
insert into `INT_tariffe` values ('98', '42', 'Versamento deposito cauzionale', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('99', '44', 'Richiesta n. 2 copie esecutive', '', '1', '2.01', 'F', '0.00', '', 'D006', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('100', '45', 'Disamina titolo esecutivo', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('101', '46', 'Redazione Atto di Precetto', '', '1', '0.00', '', '0.00', '', 'D002', 'PREC', 'PREC', 'PREC', 'PREC', 'PREC', 'PREC', 'PREC', 'PREC', '0', '1');
insert into `INT_tariffe` values ('102', '47', 'Richiesta pignoramento mobiliare', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('103', '48', 'Richiesta pignoramento immobiliare', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('104', '49', 'Disamina verbale di pignoramento', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('105', '50', 'Assistenza ad esecuzione', '', '1', '0.00', '', '0.00', '', 'D007', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('106', '51', 'Redazione istanza intervento', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('107', '52', 'Redazione note ipotecarie', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('108', '53', 'Richiesta trascrizione pignoramento', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('109', '54', 'Richiesta trascrizione sequestro', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('110', '55', 'Richiesta cancellazione ipoteca', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('111', '56', 'Visura ipotecaria', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('112', '57', 'Esami certificati ipotecari', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('113', '58', 'Richiesta certificati ipotecari', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('114', '59', 'Visura catastale', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('115', '6', 'Riassunzione in giudizio', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '0005', '0014', '0024', '0034', '', '0', '1');
insert into `INT_tariffe` values ('116', '60', 'Disamina certificati catastali', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('117', '61', 'Richiesta pubblicazione', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('118', '62', 'Disamina documentazione avversaria', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('119', '63', 'Deposito contanti', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('120', '64', 'Redazione istanza di vendita', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('121', '65', 'Udienza avanti Giudice dell\'esecuzione', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('122', '66', 'Deduzioni a verbali', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('123', '67', 'Assistenza alla vendita', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('124', '68', 'Partecipazione all\'incanto', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('125', '69', 'Offerta acquisto', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('126', '7', 'Redazione chiamata in causa', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '0005', '0014', '0024', '0041', '', '0', '1');
insert into `INT_tariffe` values ('127', '70', 'Partecipazione distribuzione somma', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('128', '71', 'Formazione piano distribuzione mobiliare', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('129', '72', 'Formazione piano distribuzione immobiliare', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('130', '73', 'Disamina piano distribuzione', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('131', '74', 'Udienza distribuzione somma', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('132', '75', 'Approvazione piano distribuzione', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('133', '76', 'Assistenza adunanza creditori', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('134', '77', 'Onorari complessivi', '', '1', '0.00', '', '0.00', '', '', '', '', '0001', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('135', '78', 'Onorari per esecuzione immobiliare', '', '1', '0.00', '', '0.00', '', '', '', '', '', '049A', '049B', '', '', '', '0', '1');
insert into `INT_tariffe` values ('136', '79', 'Onorari per esecuzione mobiliare', '', '1', '0.00', '', '0.00', '', '', '', '', '', '0054', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('137', '8', 'Autentica della delega', '', '1', '0.00', '', '0.00', 'F', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('138', '80', 'Onorari per l\'intero procedimento', '', '1', '0.00', '', '0.00', '', '', '', '', '049C', '049A', '049B', '', '', '', '0', '1');
insert into `INT_tariffe` values ('139', '81', 'Onorari per la procedura monitoria', '', '1', '0.00', '', '0.00', '', '', '', '', '', '0050', '0050', '', '', '', '0', '1');
insert into `INT_tariffe` values ('140', '82', 'Consultazione legale', '', '1', '0.00', '', '0.00', '', '', 'S01A', '', 'S01A', 'S01A', 'S01A', 'S01A', 'S01A', 'S01A', '0', '1');
insert into `INT_tariffe` values ('141', '83', 'Parere orale', '', '1', '0.00', '', '0.00', '', '', 'S1BA', '', 'S1BA', 'S1BA', 'S1BA', 'S1BA', 'S1BA', 'S1BA', '0', '1');
insert into `INT_tariffe` values ('142', '84', 'Redazione parere', '', '1', '0.00', '', '0.00', '', '', 'S1BB', '', 'S1BB', 'S1BB', 'S1BB', 'S1BB', 'S1BB', 'S1BB', '0', '1');
insert into `INT_tariffe` values ('143', '85', 'Lettera a cliente', '', '1', '2.07', 'Q', '0.41', 'F', '', 'S02B', '', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', '0', '1');
insert into `INT_tariffe` values ('144', '85F', 'Lettera a cliente via Fax', '', '1', '2.07', 'Q', '0.00', '', '', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', '0', '1');
insert into `INT_tariffe` values ('145', '85FRM', 'Lettera a cliente (Raccomandata a mani)', '', '1', '2.07', 'F', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('146', '86', 'Telefonica', '', '1', '0.00', '', '0.00', '', '', 'S02B', '', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', '0', '1');
insert into `INT_tariffe` values ('147', '87', 'Esame e studio della pratica', '', '1', '0.00', '', '0.00', '', '', 'S02C', '', '', 'S02C', 'S02C', 'S02C', 'S02C', 'S02C', '0', '1');
insert into `INT_tariffe` values ('148', '88', 'Conferenza con cliente', '', '1', '0.00', '', '0.00', '', '', 'S02D', 'S02D', 'S02D', 'S02D', 'S02D', 'S02D', 'S02D', 'S02D', '0', '1');
insert into `INT_tariffe` values ('149', '88F', 'E-mail per formula', '', '1', '0.00', '', '0.00', '', '', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', '0', '1');
insert into `INT_tariffe` values ('150', '88N', 'E-mail per notifica', '', '1', '0.00', '', '0.00', '', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', 'S02B', '0', '1');
insert into `INT_tariffe` values ('151', '88T', 'Conferenza Telefonica con Cliente', '', '1', '0.00', '', '0.00', '', '', 'S02D', 'S02D', 'S02D', 'S02D', 'S02D', 'S02D', 'S02D', 'S02D', '0', '1');
insert into `INT_tariffe` values ('152', '89', 'Conferenza collegiale con cliente', '', '1', '0.00', '', '0.00', '', '', 'S02D1', '', 'S02D1', 'S02D1', 'S02D1', 'S02D1', 'S02D1', 'S02D1', '0', '1');
insert into `INT_tariffe` values ('153', '9', 'Disamina procura notarile', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('154', '90', 'Conferenza fuori Studio', '', '1', '0.00', '', '0.00', '', '', 'S02D1', '', 'S02D1', 'S02D1', 'S02D1', 'S02D1', 'S02D1', 'S02D1', '0', '1');
insert into `INT_tariffe` values ('155', '91', 'Redazione diffida', '', '1', '2.07', 'F', '2.58', 'F', '', 'S02E', '', 'S02E', 'S02E', 'S02E', '', 'S02E', 'S02E', '0', '1');
insert into `INT_tariffe` values ('156', '92', 'Redazione e assistenza contratto', '', '1', '0.00', '', '0.00', '', '', 'S02F', '', 'S02F', 'S02F', 'S02F', '', 'S02F', 'S02F', '0', '1');
insert into `INT_tariffe` values ('157', '93', 'Redazione e assistenza contratto locazione', '', '1', '0.00', '', '0.00', '', '', 'S02F', '', 'S02F', 'S02F', 'S02F', '', 'S02F', 'S02F', '0', '1');
insert into `INT_tariffe` values ('158', '94', 'Assistenza ed assemblea', '', '1', '0.00', '', '0.00', '', '', 'S003', '', 'S003', 'S003', 'S003', '', 'S003', 'S003', '0', '1');
insert into `INT_tariffe` values ('159', '95', 'Collazioni', 'PA/4', '1', '0.00', '', '0.00', 'Q', 'DCOL', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('160', '96', 'Scritturazione', '', '1', '4.00', 'Q', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('161', '97', 'Copie', '', '1', '0.52', 'Q', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('162', '97DI', 'Copia libera DI', '', '1', '0.00', '', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('163', '98', 'Vacazione', '', '1', '0.00', '', '0.00', '', 'D082', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('164', '99', 'Trasferta nel circondario (1h.)', '', '1', '0.00', '', '0.00', '', '', '3939', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('165', 'CONC', 'Onorari per l\'intero giudizio', '', '1', '0.00', '', '0.00', '', '', '', '', '0001', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('166', 'ONOR', 'onorari orari:', '', '1', '0.00', '', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('167', 'VC', 'visura camerale', '', '1', '10.33', 'F', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('168', 'VS', 'visura soci (soc. capitali)', '', '1', '7.75', 'F', '0.00', '', '', '', '', '', '', '', '', '', '', '0', '1');
insert into `INT_tariffe` values ('169', 'P11', 'Corr. e sess.: 1.1. Informativa, anche telefonica', '', '1', '0.00', '', '0.00', '', '', '', 'P11G', 'P11D', 'P11F', 'P11E', 'P11C', 'P11B', 'P11A', '0', '5');
insert into `INT_tariffe` values ('170', 'P12', '1) Corr. e sess.: 1.2. In studio col cliente', '', '1', '0.00', '', '0.00', '', '', '', 'P12G', 'P12D', 'P12F', 'P12E', 'P12C', 'P12B', 'P12A', '0', '5');
insert into `INT_tariffe` values ('171', 'P13A', '1) Corr. e sess.: 1.3. In studio con colleghi o consulenti', '', '1', '0.00', '', '0.00', '', '', '', 'P13G', 'P13D', 'P13F', 'P13E', 'P13C', 'P13B', 'P13A', '0', '5');
insert into `INT_tariffe` values ('172', 'P13B', '1) Corr. e sess.: 1.3. Fuori studio', '', '1', '0.00', '', '0.00', '', '', '', 'P13G', 'P13D', 'P13F', 'P13E', 'P13C', 'P13B', 'P13A', '0', '5');
insert into `INT_tariffe` values ('173', 'P20', '2) Esame e studio', '', '1', '0.00', '', '0.00', '', '', '', 'P20G', 'P20D', 'P20F', 'P20E', 'P20C', 'P20B', 'P20A', '0', '5');
insert into `INT_tariffe` values ('174', 'P30A', '3) INV.DIF.: Per colloquio, rich.dich.e assunz.di inform.', '', '1', '0.00', '', '0.00', '', '', '', 'P30G', 'P30D', 'P30F', 'P30E', 'P30C', 'P30B', 'P30A', '0', '5');
insert into `INT_tariffe` values ('175', 'P30B', '3) INV.DIF.: Per rich.di docum.a PA/privati', '', '1', '0.00', '', '0.00', '', '', '', 'P30G', 'P30D', 'P30F', 'P30E', 'P30C', 'P30B', 'P30A', '0', '5');
insert into `INT_tariffe` values ('176', 'P30C', '3) INV.DIF.: Per attivitÃ  dif. relativa ad acc.tecnici', '', '1', '0.00', '', '0.00', '', '', '', 'P30G', 'P30D', 'P30F', 'P30E', 'P30C', 'P30B', 'P30A', '0', '5');
insert into `INT_tariffe` values ('177', 'P30D', '3) INV.DIF.: Per la produz.di doc. ad Aut.Giudiziaria', '', '1', '0.00', '', '0.00', '', '', '', 'P30G', 'P30D', 'P30F', 'P30E', 'P30C', 'P30B', 'P30A', '0', '5');
insert into `INT_tariffe` values ('178', 'P40A', '4) IndennitÃ : di accesso al carcere o ad uffici', '', '1', '0.00', '', '0.00', '', '', '', 'P40G', 'P40D', 'P40F', 'P40E', 'P40C', 'P40B', 'P40A', '0', '5');
insert into `INT_tariffe` values ('179', 'P40B', '4) IndennitÃ : di accesso ai luoghi inerenti i fatti', '', '1', '0.00', '', '0.00', '', '', '', 'P40G', 'P40D', 'P40F', 'P40E', 'P40C', 'P40B', 'P40A', '0', '5');
insert into `INT_tariffe` values ('180', 'P40C', '4) IndennitÃ : di attesa', '', '1', '0.00', '', '0.00', '', '', '', 'P40G', 'P40D', 'P40F', 'P40E', 'P40C', 'P40B', 'P40A', '0', '5');
insert into `INT_tariffe` values ('181', 'P50A', '5) Partecipazione ed assistenza', '', '1', '0.00', '', '0.00', '', '', '', 'P50G', 'P50D', 'P50F', 'P50E', 'P50C', 'P50B', 'P50A', '0', '5');
insert into `INT_tariffe` values ('182', 'P50B', '5) Partecip.ed assist.ad atti indagini preliminari', '', '1', '0.00', '', '0.00', '', '', '', 'P50G', 'P50D', 'P50F', 'P50E', 'P50C', 'P50B', 'P50A', '0', '5');
insert into `INT_tariffe` values ('183', 'P50C', '5) Partecip.ed assist.ad attiv.di form./ric.della prova', '', '1', '0.00', '', '0.00', '', '', '', 'P50G', 'P50D', 'P50F', 'P50E', 'P50C', 'P50B', 'P50A', '0', '5');
insert into `INT_tariffe` values ('184', 'P61', '6) Udienze: Per la partecipazione', '', '1', '0.00', '', '0.00', '', '', '', 'P61G', 'P61D', 'P61F', 'P61E', 'P61C', 'P61B', 'P61A', '0', '5');
insert into `INT_tariffe` values ('185', 'P62', '6) Udienze: Per la partecipaz.ad attiv.difensive', '', '1', '0.00', '', '0.00', '', '', '', 'P62G', 'P62D', 'P62F', 'P62E', 'P62C', 'P62B', 'P62A', '0', '5');
insert into `INT_tariffe` values ('186', 'P63', '6) Udienze: Per la discussione orale', '', '1', '0.00', '', '0.00', '', '', '', 'P63G', 'P63D', 'P63F', 'P63E', 'P63C', 'P63B', 'P63A', '0', '5');
insert into `INT_tariffe` values ('187', 'P71', '7) Redaz.scritti: 7.1. Esposti, denunzie, querele', '', '1', '0.00', '', '0.00', '', '', '', 'P713G', 'P713D', 'P713F', 'P713E', 'P713C', 'P713B', 'P713A', '0', '5');
insert into `INT_tariffe` values ('188', 'P72A', '7) Redaz.scritti: 7.2. Istanze, opp.ni, dichiaraz., richieste', '', '1', '0.00', '', '0.00', '', '', '', 'P713G', 'P713D', 'P713F', 'P713E', 'P713C', 'P713B', 'P713A', '0', '5');
insert into `INT_tariffe` values ('189', 'P72B', '7) Redaz.scritti: 7.2. Ricorso immediato al GdP', '', '1', '0.00', '', '0.00', '', '', '', 'P713G', 'P713D', 'P713F', 'P713E', 'P713C', 'P713B', 'P713A', '0', '5');
insert into `INT_tariffe` values ('190', 'P73', '7) Redaz.scritti: 7.3. Liste testimoniali', '', '1', '0.00', '', '0.00', '', '', '', 'P713G', 'P713D', 'P713F', 'P713E', 'P713C', 'P713B', 'P713A', '0', '5');
insert into `INT_tariffe` values ('191', 'P74', '7) Redaz.scritti: 7.4. Citazioni e notifiche', '', '1', '0.00', '', '0.00', '', '', '', 'P74G', 'P74D', 'P74F', 'P74E', 'P74C', 'P74B', 'P74A', '0', '5');
insert into `INT_tariffe` values ('192', 'P75', '7) Redaz.scritti: 7.5. Impugnazioni', '', '1', '0.00', '', '0.00', '', '', '', 'P75G', 'P75D', 'P75F', 'P75E', 'P75C', 'P75B', 'P75A', '0', '5');
insert into `INT_tariffe` values ('193', 'P76', '7) Redaz.scritti: 7.6. Memorie', '', '1', '0.00', '', '0.00', '', '', '', 'P767G', 'P767D', 'P767F', 'P767E', 'P767C', 'P767B', 'P767A', '0', '5');
insert into `INT_tariffe` values ('194', 'P77', '7) Redaz.scritti: 7.7. Pareri che esauriscono attivitÃ ', '', '1', '0.00', '', '0.00', '', '', '', 'P767G', 'P767D', 'P767F', 'P767E', 'P767C', 'P767B', 'P767A', '0', '5');
insert into `INT_tariffe` values ('195', 'XD001', 'Valore Disamina (2)', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '0');
insert into `INT_tariffe` values ('196', 'XD002', 'Valore Posizione e archivio (1)', '', '1', '0.00', '', '0.00', '', 'D002', '', '', '', '', '', '', '', '', '0', '0');
insert into `INT_tariffe` values ('197', 'XD003', 'Valore Esame scritti (11)', '', '1', '0.00', '', '0.00', '', 'D003', '', '', '', '', '', '', '', '', '0', '0');
insert into `INT_tariffe` values ('198', 'XD007', 'Valore Conciliaz. (25)', '', '1', '0.00', '', '0.00', '', 'D007', '', '', '', '', '', '', '', '', '0', '0');
insert into `INT_tariffe` values ('199', 'XD141', 'Valore Registrzione (42)', '', '1', '0.00', '', '0.00', '', 'D141', '', '', '', '', '', '', '', '', '0', '0');
insert into `INT_tariffe` values ('211', 'XIP75', 'Impugnazione', '', '1', '0.00', '', '0.00', '', '', '', 'P75G', 'P75D', 'P75F', 'P75E', 'P75C', 'P75B', 'P75A', '2', '0');
insert into `INT_tariffe` values ('212', 'XIP20', 'Esame e studio', '', '1', '0.00', '', '0.00', '', '', '', 'P20G', 'P20D', 'P20F', 'P20E', 'P20C', 'P20B', 'P20A', '0', '0');
insert into `INT_tariffe` values ('214', 'XUNIF', 'Contributo unificato', '', '1', '0.00', '', '0.00', '', 'D001', '', '', '', '', '', '', '', '', '0', '1');


### structure of table `INT_tariffe_STD` ###

DROP TABLE IF EXISTS `INT_tariffe_STD`;

CREATE TABLE `INT_tariffe_STD` (
  `id` int(10) NOT NULL auto_increment,
  `ordine` varchar(5) NOT NULL default '0',
  `descrizione` varchar(100) NOT NULL default '',
  `cod_tariffa` varchar(10) NOT NULL default '',
  `selettore` int(5) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=183;


### data of table `INT_tariffe_STD` ###

insert into `INT_tariffe_STD` values ('1', '101', '1. Posizione e archivio', 'XD002', '1');
insert into `INT_tariffe_STD` values ('7', '102', '2. Per la disamina', 'XD001', '1');
insert into `INT_tariffe_STD` values ('10', '103', '5. Per la chiamata di un terzo in causa', 'XD001', '1');
insert into `INT_tariffe_STD` values ('8', '104', '3. Per la domanda introduttiva', 'XD002', '1');
insert into `INT_tariffe_STD` values ('9', '105', '4. Per la rinnovazione o riassunzione della domanda', 'XD001', '1');
insert into `INT_tariffe_STD` values ('11', '106', '6. Per l&acute;autentica di firma', 'XD001', '1');
insert into `INT_tariffe_STD` values ('12', '107', '7. Per esame procura notarile', 'XD001', '1');
insert into `INT_tariffe_STD` values ('13', '108', '8. Per il versamento contributo unificato', 'XUNIF', '1');
insert into `INT_tariffe_STD` values ('14', '109', '9. Per l´iscrizione della causa a ruolo', 'XD001', '1');
insert into `INT_tariffe_STD` values ('15', '110', '10. Per la costituzione in giudizio', 'XD001', '1');
insert into `INT_tariffe_STD` values ('17', '111', '11. Per l&acute;esame degli scritti', 'XD003', '1');
insert into `INT_tariffe_STD` values ('18', '112', '12. Per l&acute;esame della documentazione prodotta da controparte', 'XD003', '1');
insert into `INT_tariffe_STD` values ('19', '113', '13. Per ogni scritto difensivo', 'XD002', '1');
insert into `INT_tariffe_STD` values ('20', '114', '14. Per ogni istanza, ricorso o reclamo', 'XD003', '1');
insert into `INT_tariffe_STD` values ('21', '115', '15. Per l&acute;esame di ogni dispositivo di provvedimento', 'XD001', '1');
insert into `INT_tariffe_STD` values ('22', '116', '16. Per l&acute;esame del testo integrale della sentenza od ordinanza', 'XD003', '1');
insert into `INT_tariffe_STD` values ('23', '117', '17. Per ogni dichiarazione resa nei casi espressamente previsti', 'XD001', '1');
insert into `INT_tariffe_STD` values ('24', '118', '18. Per la formazione del fascicolo e dell&acute;indice', 'XD001', '1');
insert into `INT_tariffe_STD` values ('25', '119', '19. Per la partecipazione ad udienza od operazioni del CTU', 'XD003', '1');
insert into `INT_tariffe_STD` values ('26', '120', '20. Per l&acute;assistenza della parte comparsa avanti al Giudice', 'XD003', '1');
insert into `INT_tariffe_STD` values ('27', '121', '21. Per le consultazioni col cliente', 'XD002', '1');
insert into `INT_tariffe_STD` values ('28', '122', '22. Per la corrispondenza informativa col cliente', 'XD002', '1');
insert into `INT_tariffe_STD` values ('29', '123', '23. Per la notificazione di ogni atto', 'XD001', '1');
insert into `INT_tariffe_STD` values ('30', '124', '24. Per l&acute;esame di ogni relata di notifica', 'XD001', '1');
insert into `INT_tariffe_STD` values ('31', '125', '25. Per la collaborazione prestata per la conciliazione', 'XD007', '1');
insert into `INT_tariffe_STD` values ('32', '126', '26. Per la intimazione ai testimoni', 'XD001', '1');
insert into `INT_tariffe_STD` values ('33', '127', '27. Per la designazione del CTP', 'XD001', '1');
insert into `INT_tariffe_STD` values ('34', '128', '28. Per l&acute;assistenza agli atti di istruzione probatoria', 'XD003', '1');
insert into `INT_tariffe_STD` values ('35', '129', '29. Per la richiesta di documenti e certificati', 'XD001', '1');
insert into `INT_tariffe_STD` values ('36', '130', '30. Per la richiesta di copia di atti', 'XD001', '1');
insert into `INT_tariffe_STD` values ('37', '131', '31. Per il deposito di atti e documenti', 'XD001', '1');
insert into `INT_tariffe_STD` values ('38', '132', '32. Per il ritiro del fascicolo di parte', 'XD001', '1');
insert into `INT_tariffe_STD` values ('39', '133', '33. Per sottoporre atti e documenti alla legalizzazione', 'XD001', '1');
insert into `INT_tariffe_STD` values ('40', '134', '34. Per ogni iscrizione nel FAL, GU o altre stampe', 'XD001', '1');
insert into `INT_tariffe_STD` values ('41', '135', '35. Per la proposizione di querela di falso', 'XD001', '1');
insert into `INT_tariffe_STD` values ('42', '136', '36. Per l&acute;esame delle prove testimoniali o interrogatorio', 'XD001', '1');
insert into `INT_tariffe_STD` values ('43', '137', '37. Per l&acute;esame di ogni relazione del consulente o documenti contabil', 'XD001', '1');
insert into `INT_tariffe_STD` values ('44', '138', '38. Per la precisazione delle conclusioni', 'XD002', '1');
insert into `INT_tariffe_STD` values ('45', '139', '39. Per l&acute;esame delle conclusioni di ogni controparte', 'XD002', '1');
insert into `INT_tariffe_STD` values ('46', '140', '40. Per la redazione della nota spese giudiziale', 'XD003', '1');
insert into `INT_tariffe_STD` values ('47', '141', '41. Per la richiesta di liquidazione al Consiglio dell&acute;Ordine', 'XD001', '1');
insert into `INT_tariffe_STD` values ('48', '142', '42. Per provvedere alla registrazione di ogni provvedimento', 'XD001', '1');
insert into `INT_tariffe_STD` values ('49', '143', '43. Per ogni deposito in Cancelleria', 'XD001', '1');
insert into `INT_tariffe_STD` values ('50', '144', '44. Per eseguire all\'Uff. Registro i depositi previsti dalla legge', 'XD001', '1');
insert into `INT_tariffe_STD` values ('51', '145', '45. Per ogni accesso agli uffici', 'XD001', '1');
insert into `INT_tariffe_STD` values ('52', '201', '46. Per la disamina di ogni titolo esecutivo', 'XD001', '2');
insert into `INT_tariffe_STD` values ('53', '202', '47. Per ogni precetto, pign. presso terzi o contro il terzo p.rio', 'XD002', '2');
insert into `INT_tariffe_STD` values ('54', '203', '48. Per la rich. di notif. titolo, precetto o pign. o rich. esec. mob.', 'XD001', '2');
insert into `INT_tariffe_STD` values ('55', '204', '49. Per l&acute;atto di pignoramento immobiliare o di navi o automobili', 'XD002', '2');
insert into `INT_tariffe_STD` values ('56', '205', '50. Per l&acute;esame del verbale di pignoramento mobiliare', 'XD003', '2');
insert into `INT_tariffe_STD` values ('57', '206', '51. Per la compilazione della nota di trascrizione od iscrizione', 'XD007', '2');
insert into `INT_tariffe_STD` values ('58', '207', '52. Per ogni ricorso al GE o di intimazione ad altri creditori', 'XD002', '2');
insert into `INT_tariffe_STD` values ('59', '208', '52. Per ogni istanza di fallimento o di insinuazionedel credito', '103', '2');
insert into `INT_tariffe_STD` values ('60', '209', '53. Per la compilazione della nota di iscrizione o trascrizione', 'XD003', '2');
insert into `INT_tariffe_STD` values ('61', '210', '54. Per ogni richiesta di formalit&agrave; presso Pubblici Registri', 'XD001', '2');
insert into `INT_tariffe_STD` values ('62', '211', '55. Per l&acute;esame di ogni certificato ipotecario o catastale', 'XD003', '2');
insert into `INT_tariffe_STD` values ('63', '212', '56. Per la richiesta di ogni certificato ipotecario o catastale', 'XD003', '2');
insert into `INT_tariffe_STD` values ('64', '213', '57. Per le ispezioni ipotecarie (per ogni nota)', 'XD003', '2');
insert into `INT_tariffe_STD` values ('65', '214', '58 .Per le ispezioni catastali (per ogni nominativo)', 'XD003', '2');
insert into `INT_tariffe_STD` values ('66', '215', '59. Per ottenere la pubblicit&agrave; di avvisi', 'XD001', '2');
insert into `INT_tariffe_STD` values ('67', '216', '60. Per l&acute;esame di ciascuna domanda e dei titoli esecutivi', 'XD001', '2');
insert into `INT_tariffe_STD` values ('68', '217', '61. Per il deposito di somme', 'XD001', '2');
insert into `INT_tariffe_STD` values ('69', '218', '62. Per la domanda di vendita dei beni pignorati', 'XD001', '2');
insert into `INT_tariffe_STD` values ('70', '219', '63. Per ogni comparizione davanti al GE', 'XD003', '2');
insert into `INT_tariffe_STD` values ('71', '220', '64. Per la dichiarazione nella procedura di incanto', 'XD001', '2');
insert into `INT_tariffe_STD` values ('72', '221', '65. Per l\'assistenza all&acute;incanto', 'XD003', '2');
insert into `INT_tariffe_STD` values ('73', '222', '66. Per le offerte all&acute;incanto', 'XD003', '2');
insert into `INT_tariffe_STD` values ('74', '223', '67. Per l&acute;offerta di acquisto dopo l&acute;incanto o durante l&acute;amm.ne giudiziaria', 'XD001', '2');
insert into `INT_tariffe_STD` values ('75', '224', '68. Per concorrere alla distribuzione del prezzo', 'XD001', '2');
insert into `INT_tariffe_STD` values ('76', '225', '69. Per la formazione del progetto di distribuzione amichevole del ricavato', 'XD002', '2');
insert into `INT_tariffe_STD` values ('77', '226', '70. Per l&acute;esame del progetto di distribuzione del ricavato dall&acute;esecuzione', 'XD002', '2');
insert into `INT_tariffe_STD` values ('78', '227', '71. Per la partecipazione alla discussione del prog. di distrib., per ogni ud.', 'XD002', '2');
insert into `INT_tariffe_STD` values ('79', '228', '72. Per l&acute;approvazione del progetto di distrib. del ricavato', 'XD002', '2');
insert into `INT_tariffe_STD` values ('80', '229', '73. Per l&acute;assistenza ad ogni adunanza dei credit. nel proc. esec. o concors.', 'XD003', '2');
insert into `INT_tariffe_STD` values ('81', '230', '74. Per ogni altra prestazione inerente il processo esecutivo', '#', '2');
insert into `INT_tariffe_STD` values ('82', '301', 'I - Cause davanti al Giudice di Pace', '0', '3');
insert into `INT_tariffe_STD` values ('83', '302', '1. Per l&acute;intero giudizio - per le cause fino ad Euro 600,00', '77', '3');
insert into `INT_tariffe_STD` values ('84', '303', '2. Studio della controversia', '004', '3');
insert into `INT_tariffe_STD` values ('85', '305', '3. Consultazioni con il cliente', '133', '3');
insert into `INT_tariffe_STD` values ('86', '305', '4. Ispezione dei luoghi della controversia - ric. dei documenti', '002', '3');
insert into `INT_tariffe_STD` values ('87', '306', '5. Perparaz.  red. dell&acute;atto introduttivo o comp. di risposta', '14', '3');
insert into `INT_tariffe_STD` values ('88', '307', '6. Assistenza a ciascuna udienza di trattazione', '19', '3');
insert into `INT_tariffe_STD` values ('89', '308', '7. Assistenza ai mezzi istruttorio (per ogni mezzo)', '27', '3');
insert into `INT_tariffe_STD` values ('90', '309', '8. Memorie depositate sino all&acute;ud. di precisazione delle conclusioni', '13', '3');
insert into `INT_tariffe_STD` values ('91', '310', '9. Redazione delle difese (conclusionali o repliche)', '108', '3');
insert into `INT_tariffe_STD` values ('92', '311', '10. Discussione in udienza', '111', '3');
insert into `INT_tariffe_STD` values ('93', '313', '11. Opera prestata per la conciliazione ove avvenga in sede giudiziale', '24', '3');
insert into `INT_tariffe_STD` values ('94', '314', '12. Studio della controversia', '004', '3');
insert into `INT_tariffe_STD` values ('95', '315', '13. Consultazioni con il cliente', '133', '3');
insert into `INT_tariffe_STD` values ('96', '316', '14. Ispezione dei luoghi della controversia - ric. dei documenti', '001', '3');
insert into `INT_tariffe_STD` values ('97', '317', '15. Perparaz.  red. dell&acute;atto introduttivo o comp. di risposta', '14', '3');
insert into `INT_tariffe_STD` values ('98', '318', '16. Assistenza a ciascuna udienza di trattazione', '19', '3');
insert into `INT_tariffe_STD` values ('99', '319', '17. Assistenza ai mezzi istruttorio (per ogni mezzo)', '27', '3');
insert into `INT_tariffe_STD` values ('100', '320', '18. Memorie depositate sino all&acute;ud. di precisazione delle conclusioni', '13', '3');
insert into `INT_tariffe_STD` values ('101', '321', '19. Redazione delle difese (conclusionali o repliche)', '108', '3');
insert into `INT_tariffe_STD` values ('102', '322', '20. Discussione in udienza', '111', '3');
insert into `INT_tariffe_STD` values ('103', '323', '21. Opera prestata per la conciliazione ove avvenga in sede giudiziale', '24', '3');
insert into `INT_tariffe_STD` values ('122', '324', '28. Atto di intervento', '7', '3');
insert into `INT_tariffe_STD` values ('121', '325', '27. Redazione dei motivi aggiunti', '14', '3');
insert into `INT_tariffe_STD` values ('120', '326', '26. Istanza di sospensione', '7', '3');
insert into `INT_tariffe_STD` values ('119', '327', '25. Perparaz.  red. dell&acute;atto introduttivo o memoria di costituzione', '14', '3');
insert into `INT_tariffe_STD` values ('118', '328', '24. Ricerca. dei documenti', '002', '3');
insert into `INT_tariffe_STD` values ('117', '329', '23. Consultazioni con il cliente', '133', '3');
insert into `INT_tariffe_STD` values ('116', '330', '22. Studio della controversia', '004', '3');
insert into `INT_tariffe_STD` values ('115', '331', 'III - Cause davanti al TAR, ricorsi straordinari o gerarchici', '0', '3');
insert into `INT_tariffe_STD` values ('123', '332', '29. Assistenza ai mezzi istruttorio (per ogni mezzo)', '13', '3');
insert into `INT_tariffe_STD` values ('124', '333', '30. Memorie difensive (per ciascuna)', '108', '3');
insert into `INT_tariffe_STD` values ('125', '334', '31. Discussione in udienza', '111', '3');
insert into `INT_tariffe_STD` values ('126', '335', 'IV - Cause davanti alla Corte di Appello ed alla Comm.Trib.Reg.', '0', '3');
insert into `INT_tariffe_STD` values ('127', '336', '32. Studio della controversia', '004', '3');
insert into `INT_tariffe_STD` values ('128', '337', '33. Consultazioni con il cliente', '133', '3');
insert into `INT_tariffe_STD` values ('129', '338', '34. Ispezione dei luoghi della controversia - ric. dei documenti', '002', '3');
insert into `INT_tariffe_STD` values ('130', '339', '35. Perparaz.  red. dell&acute;atto introduttivo o comp. di risposta', '14', '3');
insert into `INT_tariffe_STD` values ('131', '340', '36. Assistenza a ciascuna udienza di trattazione', '19', '3');
insert into `INT_tariffe_STD` values ('132', '341', '37. Assistenza ai mezzi istruttorio (per ogni mezzo)', '27', '3');
insert into `INT_tariffe_STD` values ('133', '342', '38. Memorie depositate sino all&acute;ud. di precisazione delle conclusioni', '13', '3');
insert into `INT_tariffe_STD` values ('134', '343', '39. Redazione delle difese (conclusionali o repliche)', '108', '3');
insert into `INT_tariffe_STD` values ('135', '344', '40. Discussione in udienza', '111', '3');
insert into `INT_tariffe_STD` values ('136', '345', '41. Opera prestata per la conciliazione ove avvenga in sede giudiziale', '24', '3');
insert into `INT_tariffe_STD` values ('137', '346', 'V - Cause davanti alla Corte di Cassazione ed altre Magistrature Sup.', '0', '3');
insert into `INT_tariffe_STD` values ('138', '347', '42. Studio della controversia', '004', '3');
insert into `INT_tariffe_STD` values ('139', '348', '43. Consultazioni con il cliente', '133', '3');
insert into `INT_tariffe_STD` values ('140', '349', '44. Redazione del ricorso, del controricorso, delle memorie', '110', '3');
insert into `INT_tariffe_STD` values ('141', '350', '45. Discussione', '4141', '3');
insert into `INT_tariffe_STD` values ('142', '351', 'IV - Cause davanti alla Corte Costituzionale ed equiparate', '0', '3');
insert into `INT_tariffe_STD` values ('143', '352', '46. Studio della controversia', '#', '3');
insert into `INT_tariffe_STD` values ('144', '353', '47. Consultazioni con il cliente', '#', '3');
insert into `INT_tariffe_STD` values ('145', '356', '48. Redazione del ricorso, del controricorso, delle memorie', '#', '3');
insert into `INT_tariffe_STD` values ('146', '357', '49. Discussione', '#', '3');
insert into `INT_tariffe_STD` values ('147', '358', 'VII - Procedimenti speciali, proc. esecutive e proc. tavolari', '0', '3');
insert into `INT_tariffe_STD` values ('148', '359', '50a. Proc. Spec. e concorsuali avanti ai Tribunali', '80', '3');
insert into `INT_tariffe_STD` values ('149', '360', '50b. Proc. Spec. e concorsuali avanti le Corti di appello', '#', '3');
insert into `INT_tariffe_STD` values ('150', '361', '51. Procedimenti di ingiunzione', '81', '3');
insert into `INT_tariffe_STD` values ('151', '362', '52. Redazione del precetto', '46', '3');
insert into `INT_tariffe_STD` values ('152', '363', '53. Iscrizione di ipoteca giudiziale', '#', '3');
insert into `INT_tariffe_STD` values ('153', '364', '54. Procedure esecutive immobiliari', '78', '3');
insert into `INT_tariffe_STD` values ('154', '365', '55. Procedure esecutive mobiliari e per affari tavolari', '79', '3');
insert into `INT_tariffe_STD` values ('155', '366', '56. Procedure esecutive presso terzi o per consegna e rilascio', '#', '3');
insert into `INT_tariffe_STD` values ('156', '501', '1) Corr. e sess.: 1.1. Informativa, anche telefonica', 'P11', '5');
insert into `INT_tariffe_STD` values ('157', '502', '1) Corr. e sess.: 1.2. In studio col cliente', 'P12', '5');
insert into `INT_tariffe_STD` values ('158', '503', '1) Corr. e sess.: 1.3. In studio con colleghi o consulenti', 'P13A', '5');
insert into `INT_tariffe_STD` values ('159', '504', 'Corr. e sess.: 1.3. Fuori studio', 'P12B', '5');
insert into `INT_tariffe_STD` values ('160', '505', '2) Esame e studio', 'P20', '5');
insert into `INT_tariffe_STD` values ('161', '506', '3) INV.DIF.: Per colloquio, rich.dich.e assunz.di inform.', 'P30A', '5');
insert into `INT_tariffe_STD` values ('162', '507', '3) INV.DIF.: Per rich.di docum.a PA/privati', 'P30B', '5');
insert into `INT_tariffe_STD` values ('163', '508', '3) INV.DIF.: Per attivit&agrave; dif. relativa ad acc.tecnici', 'P30C', '5');
insert into `INT_tariffe_STD` values ('164', '509', '3) INV.DIF.: Per la produz.di doc. ad Aut.Giudiziaria', 'P30C', '5');
insert into `INT_tariffe_STD` values ('165', '510', '4) Indennit&agrave;: di accesso al carcere o ad uffici', 'P40A', '5');
insert into `INT_tariffe_STD` values ('166', '511', '4) Indennit&agrave;: di accesso ai luoghi inerenti i fatti', 'P40B', '5');
insert into `INT_tariffe_STD` values ('167', '512', '4) Indennit&agrave;: di attesa', 'P40C', '5');
insert into `INT_tariffe_STD` values ('168', '513', '4) Indennit&agrave;: di attesa', 'P50A', '5');
insert into `INT_tariffe_STD` values ('169', '514', '5) Partecip.ed assist.ad atti indagini preliminari', 'P50B', '5');
insert into `INT_tariffe_STD` values ('170', '515', '5) Partecip.ed assist.ad attiv.di form./ric.della prova', 'P50C', '5');
insert into `INT_tariffe_STD` values ('171', '516', '6) Udienze: Per la partecipazione', 'P61', '5');
insert into `INT_tariffe_STD` values ('172', '517', '6) Udienze: Per la partecipaz.ad attiv.difensive', 'P62', '5');
insert into `INT_tariffe_STD` values ('173', '518', '6) Udienze: Per la discussione orale', 'P63', '5');
insert into `INT_tariffe_STD` values ('174', '519', '7) Redaz.scritti: 7.1. Esposti, denunzie, querele', 'P71', '5');
insert into `INT_tariffe_STD` values ('175', '520', '7) Redaz.scritti: 7.2. Istanze, opp.ni, dichiaraz., richieste<', 'P72A', '5');
insert into `INT_tariffe_STD` values ('176', '521', '7) Redaz.scritti: 7.2. Ricorso immediato al GdP', 'P72B', '5');
insert into `INT_tariffe_STD` values ('177', '522', '7) Redaz.scritti: 7.3. Liste testimoniali', 'P73', '5');
insert into `INT_tariffe_STD` values ('178', '523', '7) Redaz.scritti: 7.4. Citazioni e notifiche', 'P74', '5');
insert into `INT_tariffe_STD` values ('179', '524', '7) Redaz.scritti: 7.5. Impugnazioni', 'P75', '5');
insert into `INT_tariffe_STD` values ('180', '525', '7) Redaz.scritti: 7.6. Memorie', 'P76', '5');
insert into `INT_tariffe_STD` values ('181', '526', '7) Redaz.scritti: 7.7. Pareri che esauriscono attivit&agrave;', 'P77', '5');
insert into `INT_tariffe_STD` values ('182', '004', 'II CAUSE AVANTI AL TRIBUNALE ED ORGANI EQUIPARATI', '#', '3');


### structure of table `INT_termini_processuali` ###

DROP TABLE IF EXISTS `INT_termini_processuali`;

CREATE TABLE `INT_termini_processuali` (
  `id` int(10) NOT NULL auto_increment,
  `descrizione` varchar(100) NOT NULL default '',
  `termine` int(4) NOT NULL default '0',
  `gma` varchar(4) NOT NULL default '',
  `se_liberi` int(4) NOT NULL default '0',
  `se_todo` int(10) NOT NULL default '0',
  `se_evento` tinyint(1) NOT NULL default '1',
  `cod_tipo_impegno` varchar(20) NOT NULL default '',
  `priorita` tinyint(2) NOT NULL default '0',
  `cod_prest` varchar(5) NOT NULL default '',
  `civ_pen` int(3) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=32;


### data of table `INT_termini_processuali` ###

insert into `INT_termini_processuali` values ('3', '163 bis c.p.c. Termini per comparire( ESTERO 150)', '150', 'g', '0', '0', '1', 'REDZ', '2', 'P11', '1');
insert into `INT_termini_processuali` values ('2', '163 bis c.p.c. Termini per comparire (ITALIA 90', '90', 'g', '0', '0', '1', 'REDZ', '2', 'P20', '1');
insert into `INT_termini_processuali` values ('4', '165 c.p.c. - Iscrizione a ruolo (10)', '10', 'a', '0', '0', '1', 'TRIB', '2', '10', '1');
insert into `INT_termini_processuali` values ('5', '165 c.p.c. - Iscrizione a ruolo termini ridotti (5)', '5', 'g', '0', '0', '1', 'TRIB', '2', '10', '1');
insert into `INT_termini_processuali` values ('6', '166 c.p.c. - Costituzione del convenuto (-20)', '-20', 'g', '2', '0', '1', 'TRIB', '2', '011', '1');
insert into `INT_termini_processuali` values ('7', '183, VI comma c.p.c. - Memorie (30)', '30', 'g', '0', '0', '1', 'SCAD', '2', '106', '1');
insert into `INT_termini_processuali` values ('8', '183, VI comma c.p.c. - Memorie controprove (20)', '20', 'g', '0', '0', '1', 'SCAD', '2', '106', '1');
insert into `INT_termini_processuali` values ('9', '190 c.p.c. - Comparse conclusionali (60)', '60', 'g', '0', '0', '1', 'SCAD', '2', '108', '1');
insert into `INT_termini_processuali` values ('10', '190 c.p.c. - Memorie di replica (20)', '20', 'g', '0', '0', '1', 'SCAD', '2', '105', '1');
insert into `INT_termini_processuali` values ('11', '318 c.p.c. - Contenuto della domanda (GdP ITALIA 45)', '45', 'g', '0', '0', '1', 'REDZ', '0', '102', '1');
insert into `INT_termini_processuali` values ('12', '318 c.p.c. - Contenuto della domanda (GdP ESTERO 75)', '75', 'g', '0', '0', '1', 'REDZ', '0', '102', '1');
insert into `INT_termini_processuali` values ('13', '325 c.p.c. - Termine appello (30)', '30', 'g', '0', '0', '1', 'SCAD', '2', '103', '1');
insert into `INT_termini_processuali` values ('14', '325 c.p.c. - Termine ricorso Cassazione (60)', '60', 'g', '0', '0', '1', 'SCAD', '2', '109', '1');
insert into `INT_termini_processuali` values ('15', '327 c.p.c. - Decadenza dall\'impugnazione (VECCHIO RITO - 1 Anno)', '1', 'a', '0', '0', '1', 'SCAD', '2', '103', '1');
insert into `INT_termini_processuali` values ('16', '327 c.p.c. - Decadenza dall\'impugnazione ( NUOVO RITO - 6 mesi)', '6', 'm', '0', '0', '1', 'SCAD', '2', '103', '1');
insert into `INT_termini_processuali` values ('17', 'Intimazione ai testimoni (-7)', '-7', 'g', '2', '0', '1', 'SCAD', '2', '25', '1');
insert into `INT_termini_processuali` values ('18', '641 c.p.c. - Opposizione a decreto ingiuntivo (40)', '40', 'g', '0', '0', '1', 'SCAD', '2', '102', '1');
insert into `INT_termini_processuali` values ('19', 'Perenzione precetto (90)', '90', 'g', '0', '0', '1', 'SCAD', '2', '46', '1');
insert into `INT_termini_processuali` values ('20', 'Richiedere pignoramento mobiliare (10)', '10', 'g', '0', '0', '1', '0', '1', '47', '1');
insert into `INT_termini_processuali` values ('21', 'Dep. istanza di vendita (90)', '90', 'g', '0', '0', '1', 'SCAD', '2', '64', '1');
insert into `INT_termini_processuali` values ('22', '617 c.p.c. - Opposizione atti esecutivi (20)', '20', 'g', '0', '0', '1', 'SCAD', '2', '102', '1');
insert into `INT_termini_processuali` values ('23', '416 c.p.c. - Costituzione del convenuto  (LAVORO -10)', '-10', 'g', '2', '0', '1', 'SCAD', '2', '011', '1');
insert into `INT_termini_processuali` values ('24', '434 c.p.c. - Deposito ricorso in appello (LAVORO ITALIA 30)', '30', 'g', '0', '0', '1', 'SCAD', '2', '103', '1');
insert into `INT_termini_processuali` values ('25', '434 c.p.c. - Deposito ricorso in appello (LAVORO ESTERO 40)', '40', 'g', '0', '0', '1', 'SCAD', '2', '103', '1');
insert into `INT_termini_processuali` values ('26', 'Opposizione a decreto ingiuntivo Opposizione a decreto ingiuntivo (LAVORO 40)', '40', 'g', '0', '0', '1', 'SCAD', '2', '109', '1');
insert into `INT_termini_processuali` values ('27', 'Presentazione lista testim. (-7 gg)', '-7', 'g', '2', '0', '1', 'SCAD', '2', 'P73', '2');
insert into `INT_termini_processuali` values ('28', 'Intimazione testim. (-7 gg)', '-7', 'g', '2', '0', '1', 'SCAD', '2', 'P74', '2');
insert into `INT_termini_processuali` values ('29', 'Impugnazione (15 gg)', '15', 'g', '0', '0', '1', 'SCAD', '2', 'P75', '2');
insert into `INT_termini_processuali` values ('30', 'Impugnazione (30 gg)', '30', 'g', '0', '0', '1', 'SCAD', '2', 'P75', '2');
insert into `INT_termini_processuali` values ('31', 'Impugnazione (45 gg)', '45', 'g', '0', '0', '1', 'SCAD', '2', 'P75', '2');


### structure of table `INT_tipologie_varie` ###

DROP TABLE IF EXISTS `INT_tipologie_varie`;

CREATE TABLE `INT_tipologie_varie` (
  `id` int(10) NOT NULL auto_increment,
  `codice` varchar(30) NOT NULL default '',
  `codice2` varchar(30) NOT NULL default '',
  `descrizione` varchar(200) NOT NULL default '',
  `tipologia` int(5) NOT NULL default '0',
  `campo_tipologia` varchar(50) NOT NULL default '',
  `ordine` int(2) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=42;


### data of table `INT_tipologie_varie` ###

insert into `INT_tipologie_varie` values ('1', '1', '', 'In corso', '1', 'Pratiche->Stato', '0');
insert into `INT_tipologie_varie` values ('2', '2', '', 'Provvisoria', '1', 'Pratiche->Stato', '0');
insert into `INT_tipologie_varie` values ('3', '0', '', 'Stragiudiziale', '2', 'Pratiche->Fase', '0');
insert into `INT_tipologie_varie` values ('4', '2', '', 'Indagini preliminari', '2', 'Pratiche->Fase', '0');
insert into `INT_tipologie_varie` values ('5', '3', '', 'Primo grado', '2', 'Pratiche->Fase', '0');
insert into `INT_tipologie_varie` values ('6', '4', '', 'Secondo grado', '2', 'Pratiche->Fase', '0');
insert into `INT_tipologie_varie` values ('7', '5', '', 'Cassazione', '2', 'Pratiche->Fase', '0');
insert into `INT_tipologie_varie` values ('8', '3', '', 'Chiusa', '1', 'Pratiche->Stato', '0');
insert into `INT_tipologie_varie` values ('14', '0', '', 'Evento', '3', 'Impegno->Tipo', '0');
insert into `INT_tipologie_varie` values ('15', '1', '', 'Incombente', '3', 'Impegno->Tipo', '0');
insert into `INT_tipologie_varie` values ('16', '2', '', 'Provvedimento', '3', 'Impegno->Tipo', '0');
insert into `INT_tipologie_varie` values ('17', '3', '', 'Nota', '3', 'Impegno->Tipo', '0');
insert into `INT_tipologie_varie` values ('18', '0', '', 'In corso', '4', 'Impegno->Dinamica', '0');
insert into `INT_tipologie_varie` values ('19', '1', '', 'In riserva / attesa', '4', 'Impegno->Dinamica', '0');
insert into `INT_tipologie_varie` values ('20', '2', '', 'Completato', '4', 'Impegno->Dinamica', '0');
insert into `INT_tipologie_varie` values ('21', '3', '', 'Da aggiornare', '4', 'Impegno->Dinamica', '0');
insert into `INT_tipologie_varie` values ('22', '0', '', 'Imputato', '5', 'Pratiche->Posizione del cliente', '0');
insert into `INT_tipologie_varie` values ('23', '1', '', 'Persona offesa', '5', 'Pratiche->Posizione del cliente', '0');
insert into `INT_tipologie_varie` values ('24', '2', '', 'Parte civile', '5', 'Pratiche->Posizione del cliente', '0');
insert into `INT_tipologie_varie` values ('25', '3', '', 'Attore', '5', 'Pratiche->Posizione del cliente', '0');
insert into `INT_tipologie_varie` values ('26', '4', '', 'Convenuto', '5', 'Pratiche->Posizione del cliente', '0');
insert into `INT_tipologie_varie` values ('27', '5', '', 'Ricorrente', '5', 'Pratiche->Posizione del cliente', '0');
insert into `INT_tipologie_varie` values ('28', '6', '', 'Resistente', '5', 'Pratiche->Posizione del cliente', '0');
insert into `INT_tipologie_varie` values ('29', '7', '', 'Terzo chiamato', '5', 'Pratiche->Posizione del cliente', '0');
insert into `INT_tipologie_varie` values ('30', '8', '', 'Terzo intervenuto', '5', 'Pratiche->Posizione del cliente', '0');
insert into `INT_tipologie_varie` values ('31', '9', '', 'Terzo pignorato', '5', 'Pratiche->Posizione del cliente', '0');
insert into `INT_tipologie_varie` values ('32', '10', '', 'Creditore procedente', '5', 'Pratiche->Posizione del cliente', '0');
insert into `INT_tipologie_varie` values ('33', '11', '', 'Creditore intervenuto', '5', 'Pratiche->Posizione del cliente', '0');
insert into `INT_tipologie_varie` values ('34', '12', '', 'Debitore', '5', 'Pratiche->Posizione del cliente', '0');
insert into `INT_tipologie_varie` values ('35', '13', '', 'Opponente', '5', 'Pratiche->Posizione del cliente', '0');
insert into `INT_tipologie_varie` values ('36', '14', '', 'Opposto', '5', 'Pratiche->posizione del cliente', '0');
insert into `INT_tipologie_varie` values ('37', '15', '', 'Appellante', '5', 'Pratiche->posizione del cliente', '0');
insert into `INT_tipologie_varie` values ('38', '16', '', 'Appellato', '5', 'Pratiche->Posizione del cliente', '0');


### structure of table `INT_uff_giud` ###

DROP TABLE IF EXISTS `INT_uff_giud`;

CREATE TABLE `INT_uff_giud` (
  `codice` varchar(5) NOT NULL default '',
  `descrizione` varchar(200) NOT NULL default '',
  `ordine` int(5) NOT NULL default '0',
  `id` int(5) NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=12;


### data of table `INT_uff_giud` ###

insert into `INT_uff_giud` values ('GPP', 'Giudice di Pace Penale', '0', '1');
insert into `INT_uff_giud` values ('TMP', 'Tribunale Monocratico Penale', '0', '2');
insert into `INT_uff_giud` values ('TCP', 'Tribunale Collegiale Penale', '0', '3');
insert into `INT_uff_giud` values ('GUP', 'Giudice Udienza Preliminare', '0', '4');
insert into `INT_uff_giud` values ('GIP', 'Giudice Indagini preliminari', '0', '5');
insert into `INT_uff_giud` values ('CAP', 'Corte di Appello Penale', '0', '6');
insert into `INT_uff_giud` values ('ASS', 'Corte di Assise', '0', '7');
insert into `INT_uff_giud` values ('ASSAP', 'Corte di Assise di Appello', '0', '8');
insert into `INT_uff_giud` values ('TSORV', 'Tribunale di Sorveglianza', '0', '9');
insert into `INT_uff_giud` values ('MSORV', 'Magistrato di Sorveglianza', '0', '10');
insert into `INT_uff_giud` values ('MINP', 'Tribunale per i Minorenni Penale', '0', '11');




### structure of table `pratiche` ###

ALTER TABLE pratiche ADD COLUMN pr_stato varchar(150) NOT NULL default '';
ALTER TABLE pratiche ADD COLUMN pr_fase varchar(150) NOT NULL default '';


### structure of table `calendar` ###

ALTER TABLE calendar ADD COLUMN provenienza date NOT NULL '0000-00-00';
ALTER TABLE calendar ADD COLUMN id_provenienza int(10) NOT NULL default '0';
ALTER TABLE calendar ADD COLUMN notulato int(5) NOT NULL default '0';
ALTER TABLE calendar ADD COLUMN servizio1 varchar(30) NOT NULL default '';
ALTER TABLE calendar ADD COLUMN servizio2 varchar(30) NOT NULL default '';
ALTER TABLE calendar ADD COLUMN servizio3 varchar(30) NOT NULL default '';




