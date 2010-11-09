-- phpMyAdmin SQL Dump
-- version 2.6.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generato il: 24 Giu, 2005 at 04:35 PM
-- Versione MySQL: 4.0.18
-- Versione PHP: 4.3.10
-- 
-- Database: `knomos`
-- 

-- --------------------------------------------------------


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


-- 
-- Struttura della tabella `INT_calendar_tipo`
-- 

### structure of table `INT_calendar_tipo` ###

DROP TABLE IF EXISTS `INT_calendar_tipo`;

CREATE TABLE `INT_calendar_tipo` (
  `id` int(5) NOT NULL auto_increment,
  `ttsid` varchar(5) NOT NULL default '',
  `tts_desc` varchar(250) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `ttsid` (`ttsid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=21;


### data of table `INT_calendar_tipo` ###

insert into `INT_calendar_tipo` values ('1', 'APPE', 'Appuntamento fuori Studio');
insert into `INT_calendar_tipo` values ('2', 'APPI', 'Appuntamento in Studio');
insert into `INT_calendar_tipo` values ('3', 'REDZ', 'Redazione');
insert into `INT_calendar_tipo` values ('4', 'TEL', 'Telefonica');
insert into `INT_calendar_tipo` values ('5', 'TRIB', 'Accesso in Tribunale');
insert into `INT_calendar_tipo` values ('7', 'UD', 'Udienza');
insert into `INT_calendar_tipo` values ('10', 'CAUT', 'Provvedimento cautelare');
insert into `INT_calendar_tipo` values ('6', 'SCAD', 'Scadenza');
insert into `INT_calendar_tipo` values ('8', 'INT', 'Interrogatorio');
insert into `INT_calendar_tipo` values ('9', 'PROV', 'Provvedimento');


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



-- --------------------------------------------------------


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


-- --------------------------------------------------------
-- 
-- Struttura della tabella `INT_pratiche_std`
-- 

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
insert into `INT_pratiche_std` values ('3', 'DIPE', '0', '3', '1', 'TMP FI', 'Tribunale Monocratico Penale', 'Firenze', '', 'MAX/1', '2', 'Diritto Penale (TMP FI)', '0', '', '0');
insert into `INT_pratiche_std` values ('5', 'DIPE', '0', '3', '2', 'GPP', 'Giudice di Pace Penale', 'Empoli', '', 'MAX/1', '2', 'Diritto Penale (GPP Empoli)', '0', '', '0');
insert into `INT_pratiche_std` values ('6', 'DIPE', '1', '3', '1', 'TMP', 'Tribunale Monocratico Penale', 'Pontedera', '', 'MAX/1', '2', 'Diritto Penale (TMP Pontedera)', '0', '', '0');
insert into `INT_pratiche_std` values ('8', 'DIPE', '0', '3', '2', 'GPP San Miniato', '', '', '', 'MAX/1', '2', 'Diritto Penale (GPP San Miniato)', '0', '', '0');
insert into `INT_pratiche_std` values ('9', 'DIPE', '0', '3', '2', 'GPP', 'Giudice di Pace Penale', 'Pontedera', '', 'MAX/1', '2', 'Diritto Penale (GPP Pontedera)', '0', '', '0');
insert into `INT_pratiche_std` values ('10', 'DIPE', '0', '3', '1', 'TMP EM', 'Tribunale Monocratico Penale', 'Empoli', '', 'MAX/1', '2', 'Diritto Penale (TMP EM)', '0', '', '0');
insert into `INT_pratiche_std` values ('11', 'DIPE', '2', '4', '6', 'CAP', 'Corte d\'Appello', 'Firenze', '1 PEN', 'MED.5', '3', 'Diritto Penale (CAP Firenze 1 PEN)', '8', '', '0');
insert into `INT_pratiche_std` values ('12', 'DIPE', '0', '4', '4', 'CAP', 'Corte d\'Appello', 'Firenze', '2 PEN', 'MAX/1', '2', 'Diritto Penale (CAP Firenze 2 PEN)', '0', '', '0');
insert into `INT_pratiche_std` values ('13', 'DIPE', '0', '3', '3', 'TCP FI 2 PEN', 'Tribunale Collegiale Penale', 'Firenze', '1 PEN', 'MAX/1', '2', 'Diritto Penale (TCP FI 1 PEN)', '0', '', '0');
insert into `INT_pratiche_std` values ('14', 'DIPE', '0', '3', '3', 'TCP FI 2 PEN', '', '', '', 'MAX/1', '2', 'Diritto Penale (TCP FI 2 PEN)', '0', '', '0');
insert into `INT_pratiche_std` values ('15', 'DIPE', '0', '2', '6', 'GIP', 'Giudice per le indagini preliminari', 'Firenze', '', 'Max/1', '2', 'Diritto Penale (GIP FI)', '0', '', '0');


-- --------------------------------------------------------
-- 
-- Struttura della tabella `INT_termini_processuali`
-- 

DROP TABLE IF EXISTS `INT_termini_processuali`;
CREATE TABLE IF NOT EXISTS `INT_termini_processuali` (
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
) TYPE=MyISAM;

insert into `INT_termini_processuali` values ('3', '163 bis c.p.c. Termini per comparire( ESTERO 150)', '150', 'g', '0', '0', '1', 'REDZ', '2', '-P11', '1');
insert into `INT_termini_processuali` values ('2', '163 bis c.p.c. Termini per comparire (ITALIA 90', '90', 'g', '0', '0', '1', 'REDZ', '2', '-P20', '1');
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
insert into `INT_termini_processuali` values ('27', 'Presentazione lista testim. (-7 gg)', '-7', 'g', '2', '0', '1', 'SCAD', '2', '-P73', '2');
insert into `INT_termini_processuali` values ('28', 'Intimazione testim. (-7 gg)', '-7', 'g', '2', '0', '1', 'SCAD', '2', '-P74', '2');
insert into `INT_termini_processuali` values ('29', 'Impugnazione (15 gg)', '15', 'g', '0', '0', '1', 'SCAD', '2', '-P75', '2');
insert into `INT_termini_processuali` values ('30', 'Impugnazione (30 gg)', '30', 'g', '0', '0', '1', 'SCAD', '2', '-P75', '2');
insert into `INT_termini_processuali` values ('31', 'Impugnazione (45 gg)', '45', 'g', '0', '0', '1', 'SCAD', '2', '-P75', '2');



-- --------------------------------------------------------
-- 
-- Struttura della tabella `INT_calendar_std`
-- 

### structure of table `INT_calendar_std` ###

DROP TABLE IF EXISTS `INT_calendar_std`;

CREATE TABLE `INT_calendar_std` (
  `id` int(10) NOT NULL auto_increment,
  `descrizione` varchar(100) NOT NULL default '',
  `se_todo` int(10) NOT NULL default '0',
  `se_evento` tinyint(1) NOT NULL default '1',
  `cod_prest` varchar(10) NOT NULL default '',
  `cod_tipo_impegno` varchar(20) NOT NULL default '',
  `priorita` tinyint(2) NOT NULL default '0',
  `civ_pen` int(3) NOT NULL default '0',
  `comp_desc` varchar(10) NOT NULL default '',
  `luogo` varchar(255) NOT NULL default '',
  `giudice` varchar(100) NOT NULL default '',
  `servizio1` varchar(100) NOT NULL default '',
  `servizio2` varchar(100) NOT NULL default '',
  `servizio3` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=35;


### structure of table `INT_calendar_std` ###

DROP TABLE IF EXISTS `INT_calendar_std`;

CREATE TABLE `INT_calendar_std` (
  `id` int(10) NOT NULL auto_increment,
  `descrizione` varchar(100) NOT NULL default '',
  `se_todo` int(10) NOT NULL default '0',
  `se_evento` tinyint(1) NOT NULL default '1',
  `cod_prest` varchar(10) NOT NULL default '',
  `cod_tipo_impegno` varchar(20) NOT NULL default '',
  `priorita` tinyint(2) NOT NULL default '0',
  `civ_pen` int(3) NOT NULL default '0',
  `comp_desc` varchar(10) NOT NULL default '',
  `luogo` varchar(255) NOT NULL default '',
  `giudice` varchar(100) NOT NULL default '',
  `codice_giudice` varchar(10) NOT NULL default '',
  `servizio1` varchar(100) NOT NULL default '',
  `servizio2` varchar(100) NOT NULL default '',
  `servizio3` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=35;


### data of table `INT_calendar_std` ###

insert into `INT_calendar_std` values ('1', 'Tel. avv. avversario', '0', '1', 'P20', 'TEL', '0', '1', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('2', 'Udienza discussione', '0', '0', 'P61', 'UD', '2', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('3', 'Appunt. col cliente', '0', '0', 'P12', 'APPI', '0', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('5', 'Appunt. col cliente (fuori st.)', '0', '0', 'P13B', 'APPE', '0', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('6', 'Appuntamento col consulente', '0', '0', 'P13A', 'APPI', '0', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('7', 'Appuntamento col consulente (fuori st.)', '0', '0', 'P13B', 'APPE', '0', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('8', 'Appunt. col collega', '0', '0', 'P13A', 'APPI', '0', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('9', 'Appunt. col collega (fuori st.)', '0', '0', 'P13B', 'APPE', '0', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('10', 'Tel. avv. avversario', '0', '1', 'P13A', 'TEL', '0', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('11', 'Tel. cliente', '0', '1', 'P11', 'TEL', '0', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('12', 'Richiesta copie', '0', '1', 'P40A', 'TRIB', '0', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('13', 'Richiesta copie sent.', '0', '1', 'P40A', 'TRIB', '0', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('14', 'Richiesta copie verbali', '0', '1', 'P40A', 'TRIB', '0', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('15', 'Richiesta copie fasc. GIUD.', '0', '1', 'P40A', 'TRIB', '0', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('16', 'Richiesta copie fasc. PM', '0', '1', 'P40A', 'TRIB', '0', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('17', 'Ritiro copie', '0', '1', 'P40A', 'TRIB', '0', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('18', 'Udienza preliminare', '0', '0', 'P61', 'UD', '2', '3', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('19', 'Udienza in CC', '0', '0', 'P61', 'UD', '2', '3', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('20', 'Udienza smistamento', '0', '0', 'P61', 'UD', '2', '3', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('21', 'Udienza istruttoria', '0', '0', 'P61', 'UD', '2', '3', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('22', 'Udienza dibattim.', '0', '0', 'P61', 'UD', '2', '3', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('23', 'Udienza discussione', '0', '0', 'P61', 'UD', '2', '3', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('24', 'Dep. lista testimoniale', '0', '1', 'P73', 'SCAD', '2', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('25', 'Intimaz. testi', '0', '1', 'P74', 'SCAD', '2', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('26', 'Provv. sequestro', '1', '1', 'P20', 'CAUT', '2', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('27', 'Provv. arresto / fermo', '1', '1', 'P20', 'CAUT', '2', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('28', 'Provv. custodia cautelare', '1', '1', 'P20', 'CAUT', '0', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('29', 'Provv. arresti domiciliari', '2', '2', 'P20', 'CAUT', '2', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('30', 'Provv. misura coercitiva', '1', '1', 'P20', 'CAUT', '2', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('33', 'Rich. revoca misura', '0', '1', 'P72A', 'TRIB', '1', '2', '', '', '', '', '', '', '');
insert into `INT_calendar_std` values ('34', 'Opposizione DP', '0', '1', 'P72A', 'TRIB', '2', '2', '', '', '', '', '', '', '');

-- --------------------------------------------------------

-- 
-- Struttura della tabella `INT_country`
-- 

DROP TABLE IF EXISTS `INT_country`;
CREATE TABLE IF NOT EXISTS `INT_country` (
  `id` int(10) NOT NULL auto_increment,
  `country` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

INSERT INTO `INT_country` VALUES (2, 'Andorra');
INSERT INTO `INT_country` VALUES (3, 'United Arab Emirates');
INSERT INTO `INT_country` VALUES (4, 'Afghanistan');
INSERT INTO `INT_country` VALUES (5, 'Antigua and Barbuda');
INSERT INTO `INT_country` VALUES (6, 'Anguilla');
INSERT INTO `INT_country` VALUES (7, 'Albania');
INSERT INTO `INT_country` VALUES (8, 'Armenia');
INSERT INTO `INT_country` VALUES (9, 'Netherlands Antilles');
INSERT INTO `INT_country` VALUES (10, 'Angola');
INSERT INTO `INT_country` VALUES (11, 'Antarctica');
INSERT INTO `INT_country` VALUES (12, 'Argentina');
INSERT INTO `INT_country` VALUES (13, 'American Samoa');
INSERT INTO `INT_country` VALUES (14, 'Austria');
INSERT INTO `INT_country` VALUES (15, 'Australia');
INSERT INTO `INT_country` VALUES (16, 'Aruba');
INSERT INTO `INT_country` VALUES (17, 'Azerbaijan');
INSERT INTO `INT_country` VALUES (18, 'Bosnia and Herzegovina');
INSERT INTO `INT_country` VALUES (19, 'Barbados');
INSERT INTO `INT_country` VALUES (20, 'Bangladesh');
INSERT INTO `INT_country` VALUES (21, 'Belgium');
INSERT INTO `INT_country` VALUES (22, 'Burkina Faso');
INSERT INTO `INT_country` VALUES (23, 'Bulgaria');
INSERT INTO `INT_country` VALUES (24, 'Bahrain');
INSERT INTO `INT_country` VALUES (25, 'Burundi');
INSERT INTO `INT_country` VALUES (26, 'Benin');
INSERT INTO `INT_country` VALUES (27, 'Bermuda');
INSERT INTO `INT_country` VALUES (28, 'Brunei Darussalam');
INSERT INTO `INT_country` VALUES (29, 'Bolivia');
INSERT INTO `INT_country` VALUES (30, 'Brazil');
INSERT INTO `INT_country` VALUES (31, 'Bahamas');
INSERT INTO `INT_country` VALUES (32, 'Bhutan');
INSERT INTO `INT_country` VALUES (33, 'Bouvet Island');
INSERT INTO `INT_country` VALUES (34, 'Botswana');
INSERT INTO `INT_country` VALUES (35, 'Belarus');
INSERT INTO `INT_country` VALUES (36, 'Belize');
INSERT INTO `INT_country` VALUES (37, 'Canada');
INSERT INTO `INT_country` VALUES (38, 'Cocos (Keeling) Islands');
INSERT INTO `INT_country` VALUES (39, 'Central African Republic');
INSERT INTO `INT_country` VALUES (40, 'Congo');
INSERT INTO `INT_country` VALUES (41, 'Switzerland');
INSERT INTO `INT_country` VALUES (42, 'Cote D''Ivoire (Ivory Coast)');
INSERT INTO `INT_country` VALUES (43, 'Cook Islands');
INSERT INTO `INT_country` VALUES (44, 'Chile');
INSERT INTO `INT_country` VALUES (45, 'Cameroon');
INSERT INTO `INT_country` VALUES (46, 'China');
INSERT INTO `INT_country` VALUES (47, 'Colombia');
INSERT INTO `INT_country` VALUES (48, 'Costa Rica');
INSERT INTO `INT_country` VALUES (49, 'Czechoslovakia (former)');
INSERT INTO `INT_country` VALUES (50, 'Cuba');
INSERT INTO `INT_country` VALUES (51, 'Cape Verde');
INSERT INTO `INT_country` VALUES (52, 'Christmas Island');
INSERT INTO `INT_country` VALUES (53, 'Cyprus');
INSERT INTO `INT_country` VALUES (54, 'Czech Republic');
INSERT INTO `INT_country` VALUES (55, 'Germany');
INSERT INTO `INT_country` VALUES (56, 'Djibouti');
INSERT INTO `INT_country` VALUES (57, 'Denmark');
INSERT INTO `INT_country` VALUES (58, 'Dominica');
INSERT INTO `INT_country` VALUES (59, 'Dominican Republic');
INSERT INTO `INT_country` VALUES (60, 'Algeria');
INSERT INTO `INT_country` VALUES (61, 'Ecuador');
INSERT INTO `INT_country` VALUES (62, 'Estonia');
INSERT INTO `INT_country` VALUES (63, 'Egypt');
INSERT INTO `INT_country` VALUES (64, 'Western Sahara');
INSERT INTO `INT_country` VALUES (65, 'Eritrea');
INSERT INTO `INT_country` VALUES (66, 'Spain');
INSERT INTO `INT_country` VALUES (67, 'Ethiopia');
INSERT INTO `INT_country` VALUES (68, 'Finland');
INSERT INTO `INT_country` VALUES (69, 'Fiji');
INSERT INTO `INT_country` VALUES (70, 'Falkland Islands (Malvinas)');
INSERT INTO `INT_country` VALUES (71, 'Micronesia');
INSERT INTO `INT_country` VALUES (72, 'Faroe Islands');
INSERT INTO `INT_country` VALUES (73, 'France');
INSERT INTO `INT_country` VALUES (74, 'France, Metropolitan');
INSERT INTO `INT_country` VALUES (75, 'Gabon');
INSERT INTO `INT_country` VALUES (76, 'Great Britain (UK)');
INSERT INTO `INT_country` VALUES (77, 'Grenada');
INSERT INTO `INT_country` VALUES (78, 'Georgia');
INSERT INTO `INT_country` VALUES (79, 'French Guiana');
INSERT INTO `INT_country` VALUES (80, 'Ghana');
INSERT INTO `INT_country` VALUES (81, 'Gibraltar');
INSERT INTO `INT_country` VALUES (82, 'Greenland');
INSERT INTO `INT_country` VALUES (83, 'Gambia');
INSERT INTO `INT_country` VALUES (84, 'Guinea');
INSERT INTO `INT_country` VALUES (85, 'Guadeloupe');
INSERT INTO `INT_country` VALUES (86, 'Equatorial Guinea');
INSERT INTO `INT_country` VALUES (87, 'Greece');
INSERT INTO `INT_country` VALUES (88, 'S. Georgia and S. Sandwich Isls.');
INSERT INTO `INT_country` VALUES (89, 'Guatemala');
INSERT INTO `INT_country` VALUES (90, 'Guam');
INSERT INTO `INT_country` VALUES (91, 'Guinea-Bissau');
INSERT INTO `INT_country` VALUES (92, 'Guyana');
INSERT INTO `INT_country` VALUES (93, 'Hong Kong');
INSERT INTO `INT_country` VALUES (94, 'Heard and McDonald Islands');
INSERT INTO `INT_country` VALUES (95, 'Honduras');
INSERT INTO `INT_country` VALUES (96, 'Croatia (Hrvatska)');
INSERT INTO `INT_country` VALUES (97, 'Haiti');
INSERT INTO `INT_country` VALUES (98, 'Hungary');
INSERT INTO `INT_country` VALUES (99, 'Indonesia');
INSERT INTO `INT_country` VALUES (100, 'Ireland');
INSERT INTO `INT_country` VALUES (101, 'Israel');
INSERT INTO `INT_country` VALUES (102, 'India');
INSERT INTO `INT_country` VALUES (103, 'British Indian Ocean Territory');
INSERT INTO `INT_country` VALUES (104, 'Iraq');
INSERT INTO `INT_country` VALUES (105, 'Iran');
INSERT INTO `INT_country` VALUES (106, 'Iceland');
INSERT INTO `INT_country` VALUES (107, 'Italia');
INSERT INTO `INT_country` VALUES (108, 'Jamaica');
INSERT INTO `INT_country` VALUES (109, 'Jordan');
INSERT INTO `INT_country` VALUES (110, 'Japan');
INSERT INTO `INT_country` VALUES (111, 'Kenya');
INSERT INTO `INT_country` VALUES (112, 'Kyrgyzstan');
INSERT INTO `INT_country` VALUES (113, 'Cambodia');
INSERT INTO `INT_country` VALUES (114, 'Kiribati');
INSERT INTO `INT_country` VALUES (115, 'Comoros');
INSERT INTO `INT_country` VALUES (116, 'Saint Kitts and Nevis');
INSERT INTO `INT_country` VALUES (117, 'Korea (North)');
INSERT INTO `INT_country` VALUES (118, 'Korea (South)');
INSERT INTO `INT_country` VALUES (119, 'Kuwait');
INSERT INTO `INT_country` VALUES (120, 'Cayman Islands');
INSERT INTO `INT_country` VALUES (121, 'Kazakhstan');
INSERT INTO `INT_country` VALUES (122, 'Laos');
INSERT INTO `INT_country` VALUES (123, 'Lebanon');
INSERT INTO `INT_country` VALUES (124, 'Saint Lucia');
INSERT INTO `INT_country` VALUES (125, 'Liechtenstein');
INSERT INTO `INT_country` VALUES (126, 'Sri Lanka');
INSERT INTO `INT_country` VALUES (127, 'Liberia');
INSERT INTO `INT_country` VALUES (128, 'Lesotho');
INSERT INTO `INT_country` VALUES (129, 'Lithuania');
INSERT INTO `INT_country` VALUES (130, 'Luxembourg');
INSERT INTO `INT_country` VALUES (131, 'Latvia');
INSERT INTO `INT_country` VALUES (132, 'Libya');
INSERT INTO `INT_country` VALUES (133, 'Morocco');
INSERT INTO `INT_country` VALUES (134, 'Monaco');
INSERT INTO `INT_country` VALUES (135, 'Moldova');
INSERT INTO `INT_country` VALUES (136, 'Madagascar');
INSERT INTO `INT_country` VALUES (137, 'Marshall Islands');
INSERT INTO `INT_country` VALUES (138, 'Macedonia');
INSERT INTO `INT_country` VALUES (139, 'Mali');
INSERT INTO `INT_country` VALUES (140, 'Myanmar');
INSERT INTO `INT_country` VALUES (141, 'Mongolia');
INSERT INTO `INT_country` VALUES (142, 'Macau');
INSERT INTO `INT_country` VALUES (143, 'Northern Mariana Islands');
INSERT INTO `INT_country` VALUES (144, 'Martinique');
INSERT INTO `INT_country` VALUES (145, 'Mauritania');
INSERT INTO `INT_country` VALUES (146, 'Montserrat');
INSERT INTO `INT_country` VALUES (147, 'Malta');
INSERT INTO `INT_country` VALUES (148, 'Mauritius');
INSERT INTO `INT_country` VALUES (149, 'Maldives');
INSERT INTO `INT_country` VALUES (150, 'Malawi');
INSERT INTO `INT_country` VALUES (151, 'Mexico');
INSERT INTO `INT_country` VALUES (152, 'Malaysia');
INSERT INTO `INT_country` VALUES (153, 'Mozambique');
INSERT INTO `INT_country` VALUES (154, 'Namibia');
INSERT INTO `INT_country` VALUES (155, 'New Caledonia');
INSERT INTO `INT_country` VALUES (156, 'Niger');
INSERT INTO `INT_country` VALUES (157, 'Norfolk Island');
INSERT INTO `INT_country` VALUES (158, 'Nigeria');
INSERT INTO `INT_country` VALUES (159, 'Nicaragua');
INSERT INTO `INT_country` VALUES (160, 'Netherlands');
INSERT INTO `INT_country` VALUES (161, 'Norway');
INSERT INTO `INT_country` VALUES (162, 'Nepal');
INSERT INTO `INT_country` VALUES (163, 'Nauru');
INSERT INTO `INT_country` VALUES (164, 'Neutral Zone');
INSERT INTO `INT_country` VALUES (165, 'Niue');
INSERT INTO `INT_country` VALUES (166, 'New Zealand (Aotearoa)');
INSERT INTO `INT_country` VALUES (167, 'Oman');
INSERT INTO `INT_country` VALUES (168, 'Panama');
INSERT INTO `INT_country` VALUES (169, 'Peru');
INSERT INTO `INT_country` VALUES (170, 'French Polynesia');
INSERT INTO `INT_country` VALUES (171, 'Papua New Guinea');
INSERT INTO `INT_country` VALUES (172, 'Philippines');
INSERT INTO `INT_country` VALUES (173, 'Pakistan');
INSERT INTO `INT_country` VALUES (174, 'Poland');
INSERT INTO `INT_country` VALUES (175, 'St. Pierre and Miquelon');
INSERT INTO `INT_country` VALUES (176, 'Pitcairn');
INSERT INTO `INT_country` VALUES (177, 'Puerto Rico');
INSERT INTO `INT_country` VALUES (178, 'Portugal');
INSERT INTO `INT_country` VALUES (179, 'Palau');
INSERT INTO `INT_country` VALUES (180, 'Paraguay');
INSERT INTO `INT_country` VALUES (181, 'Qatar');
INSERT INTO `INT_country` VALUES (182, 'Reunion');
INSERT INTO `INT_country` VALUES (183, 'Romania');
INSERT INTO `INT_country` VALUES (184, 'Russia');
INSERT INTO `INT_country` VALUES (185, 'Rwanda');
INSERT INTO `INT_country` VALUES (186, 'Saudi Arabia');
INSERT INTO `INT_country` VALUES (187, 'Solomon Islands');
INSERT INTO `INT_country` VALUES (188, 'Seychelles');
INSERT INTO `INT_country` VALUES (189, 'Sudan');
INSERT INTO `INT_country` VALUES (190, 'Sweden');
INSERT INTO `INT_country` VALUES (191, 'Singapore');
INSERT INTO `INT_country` VALUES (192, 'St. Helena');
INSERT INTO `INT_country` VALUES (193, 'Slovenia');
INSERT INTO `INT_country` VALUES (194, 'Svalbard and Jan Mayen Islands');
INSERT INTO `INT_country` VALUES (195, 'Slovak Republic');
INSERT INTO `INT_country` VALUES (196, 'Sierra Leone');
INSERT INTO `INT_country` VALUES (197, 'San Marino');
INSERT INTO `INT_country` VALUES (198, 'Senegal');
INSERT INTO `INT_country` VALUES (199, 'Somalia');
INSERT INTO `INT_country` VALUES (200, 'Suriname');
INSERT INTO `INT_country` VALUES (201, 'Sao Tome and Principe');
INSERT INTO `INT_country` VALUES (202, 'USSR (former)');
INSERT INTO `INT_country` VALUES (203, 'El Salvador');
INSERT INTO `INT_country` VALUES (204, 'Syria');
INSERT INTO `INT_country` VALUES (205, 'Swaziland');
INSERT INTO `INT_country` VALUES (206, 'Turks and Caicos Islands');
INSERT INTO `INT_country` VALUES (207, 'Chad');
INSERT INTO `INT_country` VALUES (208, 'French Southern Territories');
INSERT INTO `INT_country` VALUES (209, 'Togo');
INSERT INTO `INT_country` VALUES (210, 'Thailand');
INSERT INTO `INT_country` VALUES (211, 'Tajikistan');
INSERT INTO `INT_country` VALUES (212, 'Tokelau');
INSERT INTO `INT_country` VALUES (213, 'Turkmenistan');
INSERT INTO `INT_country` VALUES (214, 'Tunisia');
INSERT INTO `INT_country` VALUES (215, 'Tonga');
INSERT INTO `INT_country` VALUES (216, 'East Timor');
INSERT INTO `INT_country` VALUES (217, 'Turkey');
INSERT INTO `INT_country` VALUES (218, 'Trinidad and Tobago');
INSERT INTO `INT_country` VALUES (219, 'Tuvalu');
INSERT INTO `INT_country` VALUES (220, 'Taiwan');
INSERT INTO `INT_country` VALUES (221, 'Tanzania');
INSERT INTO `INT_country` VALUES (222, 'Ukraine');
INSERT INTO `INT_country` VALUES (223, 'Uganda');
INSERT INTO `INT_country` VALUES (224, 'United Kingdom');
INSERT INTO `INT_country` VALUES (225, 'US Minor Outlying Islands');
INSERT INTO `INT_country` VALUES (226, 'United States');
INSERT INTO `INT_country` VALUES (227, 'Uruguay');
INSERT INTO `INT_country` VALUES (228, 'Uzbekistan');
INSERT INTO `INT_country` VALUES (229, 'Vatican City State (Holy See)');
INSERT INTO `INT_country` VALUES (230, 'Saint Vincent and the Grenadines');
INSERT INTO `INT_country` VALUES (231, 'Venezuela');
INSERT INTO `INT_country` VALUES (232, 'Virgin Islands (British)');
INSERT INTO `INT_country` VALUES (233, 'Virgin Islands (U.S.)');
INSERT INTO `INT_country` VALUES (234, 'Viet Nam');
INSERT INTO `INT_country` VALUES (235, 'Vanuatu');
INSERT INTO `INT_country` VALUES (236, 'Wallis and Futuna Islands');
INSERT INTO `INT_country` VALUES (237, 'Samoa');
INSERT INTO `INT_country` VALUES (238, 'Yemen');
INSERT INTO `INT_country` VALUES (239, 'Mayotte');
INSERT INTO `INT_country` VALUES (240, 'Yugoslavia');
INSERT INTO `INT_country` VALUES (241, 'South Africa');
INSERT INTO `INT_country` VALUES (242, 'Zambia');
INSERT INTO `INT_country` VALUES (243, 'Zaire');
INSERT INTO `INT_country` VALUES (244, 'Zimbabwe');

-- --------------------------------------------------------

-- 
-- Struttura della tabella `INT_document_template`
-- 

DROP TABLE IF EXISTS `INT_document_template`;
CREATE TABLE IF NOT EXISTS `INT_document_template` (
  `id` int(10) NOT NULL auto_increment,
  `descr` text NOT NULL,
  `ref_ta_code` int(10) NOT NULL default '0',
  `filename` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

-- --------------------------------------------------------

-- 
-- Struttura della tabella `INT_last_viewed`
-- 

DROP TABLE IF EXISTS `INT_last_viewed`;
CREATE TABLE IF NOT EXISTS `INT_last_viewed` (
  `user_id` int(10) NOT NULL default '0',
  `module` varchar(20) NOT NULL default '',
  `obj_id` int(10) NOT NULL default '0',
  `viewed` datetime NOT NULL default '0000-00-00 00:00:00',
  KEY `userid` (`user_id`),
  KEY `obj_id` (`obj_id`),
  KEY `module` (`module`)
) TYPE=MyISAM;

-- --------------------------------------------------------

-- 
-- Struttura della tabella `INT_pratiche_tipo`
-- 

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


        

-- --------------------------------------------------------

-- 
-- Struttura della tabella `INT_tariffe`
-- 

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


-- --------------------------------------------------------

-- 
-- Struttura della tabella `INT_tariffe_diritti`
-- 

DROP TABLE IF EXISTS `INT_tariffe_diritti`;
CREATE TABLE IF NOT EXISTS `INT_tariffe_diritti` (
  `tadid` bigint(20) NOT NULL auto_increment,
  `tad_codice` varchar(5) NOT NULL default '',
  `tad_inizio` date NOT NULL default '0000-00-00',
  `tad_fine` date NOT NULL default '0000-00-00',
  `tad_tipo` enum('num','oltre','ind','index') NOT NULL default 'num',
  `tad_fino` decimal(15,2) NOT NULL default '0.00',
  `tad_diritto` decimal(10,2) NOT NULL default '0.00',
  `tad_tipodiritto` char(1) NOT NULL default '',
  PRIMARY KEY  (`tadid`),
  KEY `tad_codice` (`tad_codice`),
  KEY `tad_inizio` (`tad_inizio`),
  KEY `tad_fine` (`tad_fine`),
  KEY `tad_fino` (`tad_fino`)
) TYPE=MyISAM ;



INSERT INTO `INT_tariffe_diritti` VALUES (1, 'D001', '0000-00-00', '1994-09-30', 'num', 128.60, 1.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (2, 'D001', '0000-00-00', '1994-09-30', 'num', 258.23, 2.07, '');
INSERT INTO `INT_tariffe_diritti` VALUES (3, 'D001', '0000-00-00', '1994-09-30', 'num', 516.46, 3.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (4, 'D001', '0000-00-00', '1994-09-30', 'num', 1549.37, 6.20, '');
INSERT INTO `INT_tariffe_diritti` VALUES (5, 'D001', '0000-00-00', '1994-09-30', 'num', 2582.28, 7.23, '');
INSERT INTO `INT_tariffe_diritti` VALUES (6, 'D001', '0000-00-00', '1994-09-30', 'num', 5164.57, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (7, 'D001', '0000-00-00', '1994-09-30', 'num', 25822.84, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (8, 'D001', '0000-00-00', '1994-09-30', 'num', 51645.69, 12.39, '');
INSERT INTO `INT_tariffe_diritti` VALUES (9, 'D001', '0000-00-00', '1994-09-30', 'num', 103291.40, 16.53, '');
INSERT INTO `INT_tariffe_diritti` VALUES (10, 'D001', '0000-00-00', '1994-09-30', 'num', 258228.50, 20.66, '');
INSERT INTO `INT_tariffe_diritti` VALUES (11, 'D001', '0000-00-00', '1994-09-30', 'num', 516456.90, 22.72, '');
INSERT INTO `INT_tariffe_diritti` VALUES (12, 'D001', '0000-00-00', '1994-09-30', 'num', 1549371.00, 26.86, '');
INSERT INTO `INT_tariffe_diritti` VALUES (13, 'D001', '0000-00-00', '1994-09-30', 'oltre', 0.00, 30.99, '');
INSERT INTO `INT_tariffe_diritti` VALUES (14, 'D001', '0000-00-00', '1994-09-30', 'ind', 0.00, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (15, 'D001', '0000-00-00', '1994-09-30', 'index', 0.00, 30.99, '');
INSERT INTO `INT_tariffe_diritti` VALUES (16, 'D001', '1994-10-01', '1995-03-31', 'num', 129.11, 1.94, '');
INSERT INTO `INT_tariffe_diritti` VALUES (17, 'D001', '1994-10-01', '1995-03-31', 'num', 258.23, 2.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (18, 'D001', '1994-10-01', '1995-03-31', 'num', 516.46, 4.13, '');
INSERT INTO `INT_tariffe_diritti` VALUES (19, 'D001', '1994-10-01', '1995-03-31', 'num', 1549.37, 6.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (20, 'D001', '1994-10-01', '1995-03-31', 'num', 2582.28, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (21, 'D001', '1994-10-01', '1995-03-31', 'num', 5164.57, 9.30, '');
INSERT INTO `INT_tariffe_diritti` VALUES (22, 'D001', '1994-10-01', '1995-03-31', 'num', 25822.84, 11.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (23, 'D001', '1994-10-01', '1995-03-31', 'num', 51645.69, 13.94, '');
INSERT INTO `INT_tariffe_diritti` VALUES (24, 'D001', '1994-10-01', '1995-03-31', 'num', 103291.40, 18.59, '');
INSERT INTO `INT_tariffe_diritti` VALUES (25, 'D001', '1994-10-01', '1995-03-31', 'num', 258228.50, 23.24, '');
INSERT INTO `INT_tariffe_diritti` VALUES (26, 'D001', '1994-10-01', '1995-03-31', 'num', 516456.90, 25.56, '');
INSERT INTO `INT_tariffe_diritti` VALUES (27, 'D001', '1994-10-01', '1995-03-31', 'num', 1549371.00, 30.21, '');
INSERT INTO `INT_tariffe_diritti` VALUES (28, 'D001', '1994-10-01', '1995-03-31', 'oltre', 0.00, 34.86, '');
INSERT INTO `INT_tariffe_diritti` VALUES (29, 'D001', '1994-10-01', '1995-03-31', 'ind', 0.00, 11.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (30, 'D001', '1994-10-01', '1995-03-31', 'index', 0.00, 18.59, '');
INSERT INTO `INT_tariffe_diritti` VALUES (31, 'D001', '1995-04-01', '2004-06-01', 'num', 129.11, 2.07, '');
INSERT INTO `INT_tariffe_diritti` VALUES (32, 'D001', '1995-04-01', '2004-06-01', 'num', 258.23, 2.58, '');
INSERT INTO `INT_tariffe_diritti` VALUES (33, 'D001', '1995-04-01', '2004-06-01', 'num', 516.46, 4.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (34, 'D001', '1995-04-01', '2004-06-01', 'num', 1549.37, 7.75, '');
INSERT INTO `INT_tariffe_diritti` VALUES (35, 'D001', '1995-04-01', '2004-06-01', 'num', 2582.28, 9.30, '');
INSERT INTO `INT_tariffe_diritti` VALUES (36, 'D001', '1995-04-01', '2004-06-01', 'num', 5164.57, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (37, 'D001', '1995-04-01', '2004-06-01', 'num', 25822.84, 12.91, '');
INSERT INTO `INT_tariffe_diritti` VALUES (38, 'D001', '1995-04-01', '2004-06-01', 'num', 51645.69, 15.49, '');
INSERT INTO `INT_tariffe_diritti` VALUES (39, 'D001', '1995-04-01', '2004-06-01', 'num', 103291.40, 20.66, '');
INSERT INTO `INT_tariffe_diritti` VALUES (40, 'D001', '1995-04-01', '2004-06-01', 'num', 258228.50, 25.82, '');
INSERT INTO `INT_tariffe_diritti` VALUES (41, 'D001', '1995-04-01', '2004-06-01', 'num', 516456.90, 28.41, '');
INSERT INTO `INT_tariffe_diritti` VALUES (42, 'D001', '1995-04-01', '2004-06-01', 'num', 1549371.00, 33.57, '');
INSERT INTO `INT_tariffe_diritti` VALUES (43, 'D001', '1995-04-01', '2004-06-01', 'oltre', 0.00, 38.73, '');
INSERT INTO `INT_tariffe_diritti` VALUES (44, 'D001', '1995-04-01', '2004-06-01', 'ind', 0.00, 12.91, '');
INSERT INTO `INT_tariffe_diritti` VALUES (45, 'D001', '1995-04-01', '2004-06-01', 'index', 0.00, 20.66, '');
INSERT INTO `INT_tariffe_diritti` VALUES (46, 'D002', '0000-00-00', '1994-09-30', 'num', 128.60, 6.61, '');
INSERT INTO `INT_tariffe_diritti` VALUES (47, 'D002', '0000-00-00', '1994-09-30', 'num', 258.23, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (48, 'D002', '0000-00-00', '1994-09-30', 'num', 516.46, 14.46, '');
INSERT INTO `INT_tariffe_diritti` VALUES (49, 'D002', '0000-00-00', '1994-09-30', 'num', 1549.37, 24.79, '');
INSERT INTO `INT_tariffe_diritti` VALUES (50, 'D002', '0000-00-00', '1994-09-30', 'num', 2582.28, 28.92, '');
INSERT INTO `INT_tariffe_diritti` VALUES (51, 'D002', '0000-00-00', '1994-09-30', 'num', 5164.57, 33.05, '');
INSERT INTO `INT_tariffe_diritti` VALUES (52, 'D002', '0000-00-00', '1994-09-30', 'num', 25822.84, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (53, 'D002', '0000-00-00', '1994-09-30', 'num', 51645.69, 49.58, '');
INSERT INTO `INT_tariffe_diritti` VALUES (54, 'D002', '0000-00-00', '1994-09-30', 'num', 103291.40, 66.11, '');
INSERT INTO `INT_tariffe_diritti` VALUES (55, 'D002', '0000-00-00', '1994-09-30', 'num', 258228.50, 82.63, '');
INSERT INTO `INT_tariffe_diritti` VALUES (56, 'D002', '0000-00-00', '1994-09-30', 'num', 516456.90, 90.90, '');
INSERT INTO `INT_tariffe_diritti` VALUES (57, 'D002', '0000-00-00', '1994-09-30', 'num', 1549371.00, 107.42, '');
INSERT INTO `INT_tariffe_diritti` VALUES (58, 'D002', '0000-00-00', '1994-09-30', 'oltre', 0.00, 123.95, '');
INSERT INTO `INT_tariffe_diritti` VALUES (59, 'D002', '0000-00-00', '1994-09-30', 'ind', 0.00, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (60, 'D002', '0000-00-00', '1994-09-30', 'index', 0.00, 123.95, '');
INSERT INTO `INT_tariffe_diritti` VALUES (61, 'D002', '1994-10-01', '1995-03-31', 'num', 129.11, 7.49, '');
INSERT INTO `INT_tariffe_diritti` VALUES (62, 'D002', '1994-10-01', '1995-03-31', 'num', 258.23, 9.30, '');
INSERT INTO `INT_tariffe_diritti` VALUES (63, 'D002', '1994-10-01', '1995-03-31', 'num', 516.46, 16.27, '');
INSERT INTO `INT_tariffe_diritti` VALUES (64, 'D002', '1994-10-01', '1995-03-31', 'num', 1549.37, 27.89, '');
INSERT INTO `INT_tariffe_diritti` VALUES (65, 'D002', '1994-10-01', '1995-03-31', 'num', 2582.28, 32.54, '');
INSERT INTO `INT_tariffe_diritti` VALUES (66, 'D002', '1994-10-01', '1995-03-31', 'num', 5164.57, 37.18, '');
INSERT INTO `INT_tariffe_diritti` VALUES (67, 'D002', '1994-10-01', '1995-03-31', 'num', 25822.84, 46.48, '');
INSERT INTO `INT_tariffe_diritti` VALUES (68, 'D002', '1994-10-01', '1995-03-31', 'num', 51645.69, 55.78, '');
INSERT INTO `INT_tariffe_diritti` VALUES (69, 'D002', '1994-10-01', '1995-03-31', 'num', 103291.40, 74.37, '');
INSERT INTO `INT_tariffe_diritti` VALUES (70, 'D002', '1994-10-01', '1995-03-31', 'num', 258228.50, 92.96, '');
INSERT INTO `INT_tariffe_diritti` VALUES (71, 'D002', '1994-10-01', '1995-03-31', 'num', 516456.90, 102.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (72, 'D002', '1994-10-01', '1995-03-31', 'num', 1549371.00, 120.85, '');
INSERT INTO `INT_tariffe_diritti` VALUES (73, 'D002', '1994-10-01', '1995-03-31', 'oltre', 0.00, 139.44, '');
INSERT INTO `INT_tariffe_diritti` VALUES (74, 'D002', '1994-10-01', '1995-03-31', 'ind', 0.00, 46.48, '');
INSERT INTO `INT_tariffe_diritti` VALUES (75, 'D002', '1994-10-01', '1995-03-31', 'index', 0.00, 74.37, '');
INSERT INTO `INT_tariffe_diritti` VALUES (76, 'D002', '1995-04-01', '2004-06-01', 'num', 129.11, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (77, 'D002', '1995-04-01', '2004-06-01', 'num', 258.23, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (78, 'D002', '1995-04-01', '2004-06-01', 'num', 516.46, 18.08, '');
INSERT INTO `INT_tariffe_diritti` VALUES (79, 'D002', '1995-04-01', '2004-06-01', 'num', 1549.37, 30.99, '');





INSERT INTO `INT_tariffe_diritti` VALUES (80, 'D002', '1995-04-01', '2004-06-01', 'num', 2582.28, 36.15, '');
INSERT INTO `INT_tariffe_diritti` VALUES (81, 'D002', '1995-04-01', '2004-06-01', 'num', 5164.57, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (82, 'D002', '1995-04-01', '2004-06-01', 'num', 25822.84, 51.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (83, 'D002', '1995-04-01', '2004-06-01', 'num', 51645.69, 61.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (84, 'D002', '1995-04-01', '2004-06-01', 'num', 103291.40, 82.63, '');
INSERT INTO `INT_tariffe_diritti` VALUES (85, 'D002', '1995-04-01', '2004-06-01', 'num', 258228.50, 103.29, '');
INSERT INTO `INT_tariffe_diritti` VALUES (86, 'D002', '1995-04-01', '2004-06-01', 'num', 516456.90, 113.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (87, 'D002', '1995-04-01', '2004-06-01', 'num', 1549371.00, 134.28, '');
INSERT INTO `INT_tariffe_diritti` VALUES (88, 'D002', '1995-04-01', '2004-06-01', 'oltre', 0.00, 154.94, '');
INSERT INTO `INT_tariffe_diritti` VALUES (89, 'D002', '1995-04-01', '2004-06-01', 'ind', 0.00, 51.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (90, 'D002', '1995-04-01', '2004-06-01', 'index', 0.00, 82.63, '');
INSERT INTO `INT_tariffe_diritti` VALUES (91, 'D003', '0000-00-00', '1994-09-30', 'num', 128.60, 2.48, '');
INSERT INTO `INT_tariffe_diritti` VALUES (92, 'D003', '0000-00-00', '1994-09-30', 'num', 258.23, 3.10, '');
INSERT INTO `INT_tariffe_diritti` VALUES (93, 'D003', '0000-00-00', '1994-09-30', 'num', 516.46, 5.42, '');
INSERT INTO `INT_tariffe_diritti` VALUES (94, 'D003', '0000-00-00', '1994-09-30', 'num', 1549.37, 9.30, '');
INSERT INTO `INT_tariffe_diritti` VALUES (95, 'D003', '0000-00-00', '1994-09-30', 'num', 2582.28, 10.85, '');
INSERT INTO `INT_tariffe_diritti` VALUES (96, 'D003', '0000-00-00', '1994-09-30', 'num', 5164.57, 12.39, '');
INSERT INTO `INT_tariffe_diritti` VALUES (97, 'D003', '0000-00-00', '1994-09-30', 'num', 25822.84, 15.49, '');
INSERT INTO `INT_tariffe_diritti` VALUES (98, 'D003', '0000-00-00', '1994-09-30', 'num', 51645.69, 18.59, '');
INSERT INTO `INT_tariffe_diritti` VALUES (99, 'D003', '0000-00-00', '1994-09-30', 'num', 103291.40, 24.79, '');
INSERT INTO `INT_tariffe_diritti` VALUES (100, 'D003', '0000-00-00', '1994-09-30', 'num', 258228.50, 30.99, '');
INSERT INTO `INT_tariffe_diritti` VALUES (101, 'D003', '0000-00-00', '1994-09-30', 'num', 516456.90, 34.09, '');
INSERT INTO `INT_tariffe_diritti` VALUES (102, 'D003', '0000-00-00', '1994-09-30', 'num', 1549371.00, 40.28, '');
INSERT INTO `INT_tariffe_diritti` VALUES (103, 'D003', '0000-00-00', '1994-09-30', 'oltre', 0.00, 46.48, '');
INSERT INTO `INT_tariffe_diritti` VALUES (104, 'D003', '0000-00-00', '1994-09-30', 'ind', 0.00, 15.49, '');
INSERT INTO `INT_tariffe_diritti` VALUES (105, 'D003', '0000-00-00', '1994-09-30', 'index', 0.00, 46.48, '');
INSERT INTO `INT_tariffe_diritti` VALUES (106, 'D003', '1994-10-01', '1995-03-31', 'num', 129.11, 0.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (107, 'D003', '1994-10-01', '1995-03-31', 'num', 258.23, 4.13, '');
INSERT INTO `INT_tariffe_diritti` VALUES (108, 'D003', '1994-10-01', '1995-03-31', 'num', 516.46, 7.23, '');
INSERT INTO `INT_tariffe_diritti` VALUES (109, 'D003', '1994-10-01', '1995-03-31', 'num', 1549.37, 12.39, '');
INSERT INTO `INT_tariffe_diritti` VALUES (110, 'D003', '1994-10-01', '1995-03-31', 'num', 2582.28, 14.46, '');
INSERT INTO `INT_tariffe_diritti` VALUES (111, 'D003', '1994-10-01', '1995-03-31', 'num', 5164.57, 16.53, '');
INSERT INTO `INT_tariffe_diritti` VALUES (112, 'D003', '1994-10-01', '1995-03-31', 'num', 25822.84, 20.66, '');
INSERT INTO `INT_tariffe_diritti` VALUES (113, 'D003', '1994-10-01', '1995-03-31', 'num', 51645.69, 24.79, '');
INSERT INTO `INT_tariffe_diritti` VALUES (114, 'D003', '1994-10-01', '1995-03-31', 'num', 103291.40, 33.05, '');
INSERT INTO `INT_tariffe_diritti` VALUES (115, 'D003', '1994-10-01', '1995-03-31', 'num', 258228.50, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (116, 'D003', '1994-10-01', '1995-03-31', 'num', 516456.90, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (117, 'D003', '1994-10-01', '1995-03-31', 'num', 1549371.00, 53.71, '');
INSERT INTO `INT_tariffe_diritti` VALUES (118, 'D003', '1994-10-01', '1995-03-31', 'oltre', 0.00, 61.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (119, 'D003', '1994-10-01', '1995-03-31', 'ind', 0.00, 20.66, '');
INSERT INTO `INT_tariffe_diritti` VALUES (120, 'D003', '1994-10-01', '1995-03-31', 'index', 0.00, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (121, 'D003', '1995-04-01', '2004-06-01', 'num', 129.11, 4.13, '');
INSERT INTO `INT_tariffe_diritti` VALUES (122, 'D003', '1995-04-01', '2004-06-01', 'num', 258.23, 5.16, '');
INSERT INTO `INT_tariffe_diritti` VALUES (123, 'D003', '1995-04-01', '2004-06-01', 'num', 516.46, 9.30, '');
INSERT INTO `INT_tariffe_diritti` VALUES (124, 'D003', '1995-04-01', '2004-06-01', 'num', 1549.37, 15.49, '');
INSERT INTO `INT_tariffe_diritti` VALUES (125, 'D003', '1995-04-01', '2004-06-01', 'num', 2582.28, 18.08, '');
INSERT INTO `INT_tariffe_diritti` VALUES (126, 'D003', '1995-04-01', '2004-06-01', 'num', 5164.57, 20.66, '');
INSERT INTO `INT_tariffe_diritti` VALUES (127, 'D003', '1995-04-01', '2004-06-01', 'num', 25822.84, 25.82, '');
INSERT INTO `INT_tariffe_diritti` VALUES (128, 'D003', '1995-04-01', '2004-06-01', 'num', 51645.69, 30.99, '');
INSERT INTO `INT_tariffe_diritti` VALUES (129, 'D003', '1995-04-01', '2004-06-01', 'num', 103291.40, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (130, 'D003', '1995-04-01', '2004-06-01', 'num', 258228.50, 51.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (131, 'D003', '1995-04-01', '2004-06-01', 'num', 516456.90, 56.81, '');
INSERT INTO `INT_tariffe_diritti` VALUES (132, 'D003', '1995-04-01', '2004-06-01', 'num', 1549371.00, 67.14, '');
INSERT INTO `INT_tariffe_diritti` VALUES (133, 'D003', '1995-04-01', '2004-06-01', 'oltre', 0.00, 77.47, '');
INSERT INTO `INT_tariffe_diritti` VALUES (134, 'D003', '1995-04-01', '2004-06-01', 'ind', 0.00, 25.82, '');
INSERT INTO `INT_tariffe_diritti` VALUES (135, 'D003', '1995-04-01', '2004-06-01', 'index', 0.00, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (136, 'D004', '0000-00-00', '1994-09-30', 'num', 128.60, 3.31, '');
INSERT INTO `INT_tariffe_diritti` VALUES (137, 'D004', '0000-00-00', '1994-09-30', 'num', 258.23, 4.13, '');
INSERT INTO `INT_tariffe_diritti` VALUES (138, 'D004', '0000-00-00', '1994-09-30', 'num', 516.46, 7.23, '');
INSERT INTO `INT_tariffe_diritti` VALUES (139, 'D004', '0000-00-00', '1994-09-30', 'num', 1549.37, 12.39, '');
INSERT INTO `INT_tariffe_diritti` VALUES (140, 'D004', '0000-00-00', '1994-09-30', 'num', 2582.28, 14.46, '');
INSERT INTO `INT_tariffe_diritti` VALUES (141, 'D004', '0000-00-00', '1994-09-30', 'num', 5164.57, 16.53, '');
INSERT INTO `INT_tariffe_diritti` VALUES (142, 'D004', '0000-00-00', '1994-09-30', 'num', 25822.84, 20.66, '');
INSERT INTO `INT_tariffe_diritti` VALUES (143, 'D004', '0000-00-00', '1994-09-30', 'num', 51645.69, 24.79, '');
INSERT INTO `INT_tariffe_diritti` VALUES (144, 'D004', '0000-00-00', '1994-09-30', 'num', 103291.40, 33.05, '');
INSERT INTO `INT_tariffe_diritti` VALUES (145, 'D004', '0000-00-00', '1994-09-30', 'num', 258228.50, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (146, 'D004', '0000-00-00', '1994-09-30', 'num', 516456.90, 45.45, '');
INSERT INTO `INT_tariffe_diritti` VALUES (147, 'D004', '0000-00-00', '1994-09-30', 'num', 1549371.00, 53.71, '');
INSERT INTO `INT_tariffe_diritti` VALUES (148, 'D004', '0000-00-00', '1994-09-30', 'oltre', 0.00, 61.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (149, 'D004', '0000-00-00', '1994-09-30', 'ind', 0.00, 20.66, '');
INSERT INTO `INT_tariffe_diritti` VALUES (150, 'D004', '0000-00-00', '1994-09-30', 'index', 0.00, 61.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (151, 'D004', '1994-10-01', '1995-03-31', 'num', 129.11, 3.74, '');
INSERT INTO `INT_tariffe_diritti` VALUES (152, 'D004', '1994-10-01', '1995-03-31', 'num', 258.23, 4.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (153, 'D004', '1994-10-01', '1995-03-31', 'num', 516.46, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (154, 'D004', '1994-10-01', '1995-03-31', 'num', 1549.37, 13.94, '');
INSERT INTO `INT_tariffe_diritti` VALUES (155, 'D004', '1994-10-01', '1995-03-31', 'num', 2582.28, 16.27, '');
INSERT INTO `INT_tariffe_diritti` VALUES (156, 'D004', '1994-10-01', '1995-03-31', 'num', 5164.57, 18.59, '');
INSERT INTO `INT_tariffe_diritti` VALUES (157, 'D004', '1994-10-01', '1995-03-31', 'num', 25822.84, 23.24, '');
INSERT INTO `INT_tariffe_diritti` VALUES (158, 'D004', '1994-10-01', '1995-03-31', 'num', 51645.69, 27.89, '');
INSERT INTO `INT_tariffe_diritti` VALUES (159, 'D004', '1994-10-01', '1995-03-31', 'num', 103291.40, 37.18, '');
INSERT INTO `INT_tariffe_diritti` VALUES (160, 'D004', '1994-10-01', '1995-03-31', 'num', 258228.50, 46.48, '');
INSERT INTO `INT_tariffe_diritti` VALUES (161, 'D004', '1994-10-01', '1995-03-31', 'num', 516456.90, 51.13, '');
INSERT INTO `INT_tariffe_diritti` VALUES (162, 'D004', '1994-10-01', '1995-03-31', 'num', 1549371.00, 60.43, '');
INSERT INTO `INT_tariffe_diritti` VALUES (163, 'D004', '1994-10-01', '1995-03-31', 'oltre', 0.00, 69.72, '');
INSERT INTO `INT_tariffe_diritti` VALUES (164, 'D004', '1994-10-01', '1995-03-31', 'ind', 0.00, 23.24, '');
INSERT INTO `INT_tariffe_diritti` VALUES (165, 'D004', '1994-10-01', '1995-03-31', 'index', 0.00, 37.18, '');
INSERT INTO `INT_tariffe_diritti` VALUES (166, 'D004', '1995-04-01', '2004-06-01', 'num', 129.11, 4.13, '');
INSERT INTO `INT_tariffe_diritti` VALUES (167, 'D004', '1995-04-01', '2004-06-01', 'num', 258.23, 5.16, '');
INSERT INTO `INT_tariffe_diritti` VALUES (168, 'D004', '1995-04-01', '2004-06-01', 'num', 516.46, 9.30, '');
INSERT INTO `INT_tariffe_diritti` VALUES (169, 'D004', '1995-04-01', '2004-06-01', 'num', 1549.37, 15.49, '');
INSERT INTO `INT_tariffe_diritti` VALUES (170, 'D004', '1995-04-01', '2004-06-01', 'num', 2582.28, 18.08, '');
INSERT INTO `INT_tariffe_diritti` VALUES (171, 'D004', '1995-04-01', '2004-06-01', 'num', 5164.57, 20.66, '');
INSERT INTO `INT_tariffe_diritti` VALUES (172, 'D004', '1995-04-01', '2004-06-01', 'num', 25822.84, 25.82, '');
INSERT INTO `INT_tariffe_diritti` VALUES (173, 'D004', '1995-04-01', '2004-06-01', 'num', 51645.69, 30.99, '');
INSERT INTO `INT_tariffe_diritti` VALUES (174, 'D004', '1995-04-01', '2004-06-01', 'num', 103291.40, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (175, 'D004', '1995-04-01', '2004-06-01', 'num', 258228.50, 51.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (176, 'D004', '1995-04-01', '2004-06-01', 'num', 516456.90, 56.81, '');
INSERT INTO `INT_tariffe_diritti` VALUES (177, 'D004', '1995-04-01', '2004-06-01', 'num', 1549371.00, 67.14, '');
INSERT INTO `INT_tariffe_diritti` VALUES (178, 'D004', '1995-04-01', '2004-06-01', 'oltre', 0.00, 77.47, '');
INSERT INTO `INT_tariffe_diritti` VALUES (179, 'D004', '1995-04-01', '2004-06-01', 'ind', 0.00, 25.82, '');
INSERT INTO `INT_tariffe_diritti` VALUES (180, 'D004', '1995-04-01', '2004-06-01', 'index', 0.00, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (181, 'D005', '0000-00-00', '1994-09-30', 'num', 128.60, 4.96, '');
INSERT INTO `INT_tariffe_diritti` VALUES (182, 'D005', '0000-00-00', '1994-09-30', 'num', 258.23, 6.20, '');
INSERT INTO `INT_tariffe_diritti` VALUES (183, 'D005', '0000-00-00', '1994-09-30', 'num', 516.46, 10.85, '');
INSERT INTO `INT_tariffe_diritti` VALUES (184, 'D005', '0000-00-00', '1994-09-30', 'num', 1549.37, 18.59, '');
INSERT INTO `INT_tariffe_diritti` VALUES (185, 'D005', '0000-00-00', '1994-09-30', 'num', 2582.28, 21.69, '');
INSERT INTO `INT_tariffe_diritti` VALUES (186, 'D005', '0000-00-00', '1994-09-30', 'num', 5164.57, 24.79, '');
INSERT INTO `INT_tariffe_diritti` VALUES (187, 'D005', '0000-00-00', '1994-09-30', 'num', 25822.84, 30.99, '');
INSERT INTO `INT_tariffe_diritti` VALUES (188, 'D005', '0000-00-00', '1994-09-30', 'num', 51645.69, 37.18, '');
INSERT INTO `INT_tariffe_diritti` VALUES (189, 'D005', '0000-00-00', '1994-09-30', 'num', 103291.40, 49.58, '');
INSERT INTO `INT_tariffe_diritti` VALUES (190, 'D005', '0000-00-00', '1994-09-30', 'num', 258228.50, 61.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (191, 'D005', '0000-00-00', '1994-09-30', 'num', 516456.90, 68.17, '');
INSERT INTO `INT_tariffe_diritti` VALUES (192, 'D005', '0000-00-00', '1994-09-30', 'num', 1549371.00, 80.57, '');
INSERT INTO `INT_tariffe_diritti` VALUES (193, 'D005', '0000-00-00', '1994-09-30', 'oltre', 0.00, 92.96, '');
INSERT INTO `INT_tariffe_diritti` VALUES (194, 'D005', '0000-00-00', '1994-09-30', 'ind', 0.00, 30.99, '');
INSERT INTO `INT_tariffe_diritti` VALUES (195, 'D005', '0000-00-00', '1994-09-30', 'index', 0.00, 92.96, '');
INSERT INTO `INT_tariffe_diritti` VALUES (196, 'D005', '1994-10-01', '1995-03-31', 'num', 129.11, 6.71, '');
INSERT INTO `INT_tariffe_diritti` VALUES (197, 'D005', '1994-10-01', '1995-03-31', 'num', 258.23, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (198, 'D005', '1994-10-01', '1995-03-31', 'num', 516.46, 14.46, '');
INSERT INTO `INT_tariffe_diritti` VALUES (199, 'D005', '1994-10-01', '1995-03-31', 'num', 1549.37, 24.79, '');
INSERT INTO `INT_tariffe_diritti` VALUES (200, 'D005', '1994-10-01', '1995-03-31', 'num', 2582.28, 28.92, '');
INSERT INTO `INT_tariffe_diritti` VALUES (201, 'D005', '1994-10-01', '1995-03-31', 'num', 5164.57, 33.05, '');
INSERT INTO `INT_tariffe_diritti` VALUES (202, 'D005', '1994-10-01', '1995-03-31', 'num', 25822.84, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (203, 'D005', '1994-10-01', '1995-03-31', 'num', 51645.69, 49.58, '');
INSERT INTO `INT_tariffe_diritti` VALUES (204, 'D005', '1994-10-01', '1995-03-31', 'num', 103291.40, 66.11, '');
INSERT INTO `INT_tariffe_diritti` VALUES (205, 'D005', '1994-10-01', '1995-03-31', 'num', 258228.50, 82.63, '');
INSERT INTO `INT_tariffe_diritti` VALUES (206, 'D005', '1994-10-01', '1995-03-31', 'num', 516456.90, 90.90, '');
INSERT INTO `INT_tariffe_diritti` VALUES (207, 'D005', '1994-10-01', '1995-03-31', 'num', 1549371.00, 107.42, '');
INSERT INTO `INT_tariffe_diritti` VALUES (208, 'D005', '1994-10-01', '1995-03-31', 'oltre', 0.00, 123.95, '');
INSERT INTO `INT_tariffe_diritti` VALUES (209, 'D005', '1994-10-01', '1995-03-31', 'ind', 0.00, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (210, 'D005', '1994-10-01', '1995-03-31', 'index', 0.00, 66.11, '');
INSERT INTO `INT_tariffe_diritti` VALUES (211, 'D005', '1995-04-01', '2004-06-01', 'num', 129.11, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (212, 'D005', '1995-04-01', '2004-06-01', 'num', 258.23, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (213, 'D005', '1995-04-01', '2004-06-01', 'num', 516.46, 18.08, '');
INSERT INTO `INT_tariffe_diritti` VALUES (214, 'D005', '1995-04-01', '2004-06-01', 'num', 1549.37, 30.99, '');
INSERT INTO `INT_tariffe_diritti` VALUES (215, 'D005', '1995-04-01', '2004-06-01', 'num', 2582.28, 36.15, '');
INSERT INTO `INT_tariffe_diritti` VALUES (216, 'D005', '1995-04-01', '2004-06-01', 'num', 5164.57, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (217, 'D005', '1995-04-01', '2004-06-01', 'num', 25822.84, 51.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (218, 'D005', '1995-04-01', '2004-06-01', 'num', 51645.69, 61.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (219, 'D005', '1995-04-01', '2004-06-01', 'num', 103291.40, 82.63, '');
INSERT INTO `INT_tariffe_diritti` VALUES (220, 'D005', '1995-04-01', '2004-06-01', 'num', 258228.50, 103.29, '');
INSERT INTO `INT_tariffe_diritti` VALUES (221, 'D005', '1995-04-01', '2004-06-01', 'num', 516456.90, 113.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (222, 'D005', '1995-04-01', '2004-06-01', 'num', 1549371.00, 134.28, '');
INSERT INTO `INT_tariffe_diritti` VALUES (223, 'D005', '1995-04-01', '2004-06-01', 'oltre', 0.00, 154.94, '');
INSERT INTO `INT_tariffe_diritti` VALUES (224, 'D005', '1995-04-01', '2004-06-01', 'ind', 0.00, 51.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (225, 'D005', '1995-04-01', '2004-06-01', 'index', 0.00, 82.63, '');
INSERT INTO `INT_tariffe_diritti` VALUES (226, 'D006', '0000-00-00', '1994-09-30', 'num', 129.11, 0.83, '');
INSERT INTO `INT_tariffe_diritti` VALUES (227, 'D006', '0000-00-00', '1994-09-30', 'num', 258.23, 1.03, '');
INSERT INTO `INT_tariffe_diritti` VALUES (228, 'D006', '0000-00-00', '1994-09-30', 'num', 516.46, 1.81, '');
INSERT INTO `INT_tariffe_diritti` VALUES (229, 'D006', '0000-00-00', '1994-09-30', 'num', 1549.37, 3.10, '');
INSERT INTO `INT_tariffe_diritti` VALUES (230, 'D006', '0000-00-00', '1994-09-30', 'num', 2582.28, 3.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (231, 'D006', '0000-00-00', '1994-09-30', 'num', 5164.57, 4.13, '');
INSERT INTO `INT_tariffe_diritti` VALUES (232, 'D006', '0000-00-00', '1994-09-30', 'num', 25822.84, 5.16, '');
INSERT INTO `INT_tariffe_diritti` VALUES (233, 'D006', '0000-00-00', '1994-09-30', 'num', 51645.69, 6.20, '');
INSERT INTO `INT_tariffe_diritti` VALUES (234, 'D006', '0000-00-00', '1994-09-30', 'num', 103291.40, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (235, 'D006', '0000-00-00', '1994-09-30', 'num', 258228.50, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (236, 'D006', '0000-00-00', '1994-09-30', 'num', 516456.90, 11.36, '');
INSERT INTO `INT_tariffe_diritti` VALUES (237, 'D006', '0000-00-00', '1994-09-30', 'num', 1549371.00, 13.43, '');
INSERT INTO `INT_tariffe_diritti` VALUES (238, 'D006', '0000-00-00', '1994-09-30', 'oltre', 0.00, 15.49, '');
INSERT INTO `INT_tariffe_diritti` VALUES (239, 'D006', '0000-00-00', '1994-09-30', 'ind', 0.00, 5.16, '');
INSERT INTO `INT_tariffe_diritti` VALUES (240, 'D006', '0000-00-00', '1994-09-30', 'index', 0.00, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (241, 'D006', '1994-10-01', '1995-03-31', 'num', 129.11, 1.29, '');
INSERT INTO `INT_tariffe_diritti` VALUES (242, 'D006', '1994-10-01', '1995-03-31', 'num', 258.23, 1.29, '');
INSERT INTO `INT_tariffe_diritti` VALUES (243, 'D006', '1994-10-01', '1995-03-31', 'num', 516.46, 2.45, '');
INSERT INTO `INT_tariffe_diritti` VALUES (244, 'D006', '1994-10-01', '1995-03-31', 'num', 1549.37, 3.87, '');
INSERT INTO `INT_tariffe_diritti` VALUES (245, 'D006', '1994-10-01', '1995-03-31', 'num', 2582.28, 4.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (246, 'D006', '1994-10-01', '1995-03-31', 'num', 5164.57, 5.16, '');
INSERT INTO `INT_tariffe_diritti` VALUES (247, 'D006', '1994-10-01', '1995-03-31', 'num', 25822.84, 6.46, '');
INSERT INTO `INT_tariffe_diritti` VALUES (248, 'D006', '1994-10-01', '1995-03-31', 'num', 51645.69, 7.75, '');
INSERT INTO `INT_tariffe_diritti` VALUES (249, 'D006', '1994-10-01', '1995-03-31', 'num', 103291.40, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (250, 'D006', '1994-10-01', '1995-03-31', 'num', 258228.50, 12.91, '');
INSERT INTO `INT_tariffe_diritti` VALUES (251, 'D006', '1994-10-01', '1995-03-31', 'num', 516456.90, 14.20, '');
INSERT INTO `INT_tariffe_diritti` VALUES (252, 'D006', '1994-10-01', '1995-03-31', 'num', 1549371.00, 16.78, '');
INSERT INTO `INT_tariffe_diritti` VALUES (253, 'D006', '1994-10-01', '1995-03-31', 'oltre', 0.00, 19.37, '');
INSERT INTO `INT_tariffe_diritti` VALUES (254, 'D006', '1994-10-01', '1995-03-31', 'ind', 0.00, 6.46, '');
INSERT INTO `INT_tariffe_diritti` VALUES (255, 'D006', '1994-10-01', '1995-03-31', 'index', 0.00, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (256, 'D006', '1995-04-01', '2004-06-01', 'num', 129.11, 1.55, '');
INSERT INTO `INT_tariffe_diritti` VALUES (257, 'D006', '1995-04-01', '2004-06-01', 'num', 258.23, 1.55, '');
INSERT INTO `INT_tariffe_diritti` VALUES (258, 'D006', '1995-04-01', '2004-06-01', 'num', 516.46, 3.10, '');
INSERT INTO `INT_tariffe_diritti` VALUES (259, 'D006', '1995-04-01', '2004-06-01', 'num', 1549.37, 4.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (260, 'D006', '1995-04-01', '2004-06-01', 'num', 2582.28, 5.68, '');
INSERT INTO `INT_tariffe_diritti` VALUES (261, 'D006', '1995-04-01', '2004-06-01', 'num', 5164.57, 6.20, '');
INSERT INTO `INT_tariffe_diritti` VALUES (262, 'D006', '1995-04-01', '2004-06-01', 'num', 25822.84, 7.75, '');
INSERT INTO `INT_tariffe_diritti` VALUES (263, 'D006', '1995-04-01', '2004-06-01', 'num', 51645.69, 9.30, '');
INSERT INTO `INT_tariffe_diritti` VALUES (264, 'D006', '1995-04-01', '2004-06-01', 'num', 103291.40, 12.39, '');
INSERT INTO `INT_tariffe_diritti` VALUES (265, 'D006', '1995-04-01', '2004-06-01', 'num', 258228.50, 15.49, '');
INSERT INTO `INT_tariffe_diritti` VALUES (266, 'D006', '1995-04-01', '2004-06-01', 'num', 516456.90, 17.04, '');
INSERT INTO `INT_tariffe_diritti` VALUES (267, 'D006', '1995-04-01', '2004-06-01', 'num', 1549371.00, 20.14, '');
INSERT INTO `INT_tariffe_diritti` VALUES (268, 'D006', '1995-04-01', '2004-06-01', 'oltre', 0.00, 23.24, '');
INSERT INTO `INT_tariffe_diritti` VALUES (269, 'D006', '1995-04-01', '2004-06-01', 'ind', 0.00, 7.75, '');
INSERT INTO `INT_tariffe_diritti` VALUES (270, 'D006', '1995-04-01', '2004-06-01', 'index', 0.00, 12.39, '');
INSERT INTO `INT_tariffe_diritti` VALUES (271, 'D007', '0000-00-00', '1994-09-30', 'num', 128.60, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (272, 'D007', '0000-00-00', '1994-09-30', 'num', 258.23, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (273, 'D007', '0000-00-00', '1994-09-30', 'num', 516.46, 18.08, '');
INSERT INTO `INT_tariffe_diritti` VALUES (274, 'D007', '0000-00-00', '1994-09-30', 'num', 1549.37, 30.99, '');
INSERT INTO `INT_tariffe_diritti` VALUES (275, 'D007', '0000-00-00', '1994-09-30', 'num', 2582.28, 36.15, '');
INSERT INTO `INT_tariffe_diritti` VALUES (276, 'D007', '0000-00-00', '1994-09-30', 'num', 5164.57, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (277, 'D007', '0000-00-00', '1994-09-30', 'num', 25822.84, 51.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (278, 'D007', '0000-00-00', '1994-09-30', 'num', 51645.69, 61.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (279, 'D007', '0000-00-00', '1994-09-30', 'num', 103291.40, 82.63, '');
INSERT INTO `INT_tariffe_diritti` VALUES (280, 'D007', '0000-00-00', '1994-09-30', 'num', 258228.50, 103.29, '');
INSERT INTO `INT_tariffe_diritti` VALUES (281, 'D007', '0000-00-00', '1994-09-30', 'num', 516456.90, 113.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (282, 'D007', '0000-00-00', '1994-09-30', 'num', 1549371.00, 134.28, '');
INSERT INTO `INT_tariffe_diritti` VALUES (283, 'D007', '0000-00-00', '1994-09-30', 'oltre', 0.00, 154.94, '');
INSERT INTO `INT_tariffe_diritti` VALUES (284, 'D007', '0000-00-00', '1994-09-30', 'ind', 0.00, 51.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (285, 'D007', '0000-00-00', '1994-09-30', 'index', 0.00, 154.94, '');
INSERT INTO `INT_tariffe_diritti` VALUES (286, 'D007', '1994-10-01', '1995-03-31', 'num', 129.11, 9.04, '');
INSERT INTO `INT_tariffe_diritti` VALUES (287, 'D007', '1994-10-01', '1995-03-31', 'num', 258.23, 11.10, '');
INSERT INTO `INT_tariffe_diritti` VALUES (288, 'D007', '1994-10-01', '1995-03-31', 'num', 516.46, 19.63, '');
INSERT INTO `INT_tariffe_diritti` VALUES (289, 'D007', '1994-10-01', '1995-03-31', 'num', 1549.37, 33.31, '');
INSERT INTO `INT_tariffe_diritti` VALUES (290, 'D007', '1994-10-01', '1995-03-31', 'num', 2582.28, 38.99, '');
INSERT INTO `INT_tariffe_diritti` VALUES (291, 'D007', '1994-10-01', '1995-03-31', 'num', 5164.57, 44.42, '');
INSERT INTO `INT_tariffe_diritti` VALUES (292, 'D007', '1994-10-01', '1995-03-31', 'num', 25822.84, 55.52, '');
INSERT INTO `INT_tariffe_diritti` VALUES (293, 'D007', '1994-10-01', '1995-03-31', 'num', 51645.69, 66.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (294, 'D007', '1994-10-01', '1995-03-31', 'num', 103291.40, 88.83, '');
INSERT INTO `INT_tariffe_diritti` VALUES (295, 'D007', '1994-10-01', '1995-03-31', 'num', 258228.50, 111.04, '');
INSERT INTO `INT_tariffe_diritti` VALUES (296, 'D007', '1994-10-01', '1995-03-31', 'num', 516456.90, 122.14, '');
INSERT INTO `INT_tariffe_diritti` VALUES (297, 'D007', '1994-10-01', '1995-03-31', 'num', 1549371.00, 144.35, '');
INSERT INTO `INT_tariffe_diritti` VALUES (298, 'D007', '1994-10-01', '1995-03-31', 'oltre', 0.00, 166.56, '');
INSERT INTO `INT_tariffe_diritti` VALUES (299, 'D007', '1994-10-01', '1995-03-31', 'ind', 0.00, 55.52, '');
INSERT INTO `INT_tariffe_diritti` VALUES (300, 'D007', '1994-10-01', '1995-03-31', 'index', 0.00, 88.83, '');
INSERT INTO `INT_tariffe_diritti` VALUES (301, 'D007', '1995-04-01', '2004-06-01', 'num', 129.11, 9.81, '');
INSERT INTO `INT_tariffe_diritti` VALUES (302, 'D007', '1995-04-01', '2004-06-01', 'num', 258.23, 11.88, '');
INSERT INTO `INT_tariffe_diritti` VALUES (303, 'D007', '1995-04-01', '2004-06-01', 'num', 516.46, 21.17, '');
INSERT INTO `INT_tariffe_diritti` VALUES (304, 'D007', '1995-04-01', '2004-06-01', 'num', 1549.37, 35.64, '');
INSERT INTO `INT_tariffe_diritti` VALUES (305, 'D007', '1995-04-01', '2004-06-01', 'num', 2582.28, 41.83, '');
INSERT INTO `INT_tariffe_diritti` VALUES (306, 'D007', '1995-04-01', '2004-06-01', 'num', 5164.57, 47.51, '');
INSERT INTO `INT_tariffe_diritti` VALUES (307, 'D007', '1995-04-01', '2004-06-01', 'num', 25822.84, 59.39, '');
INSERT INTO `INT_tariffe_diritti` VALUES (308, 'D007', '1995-04-01', '2004-06-01', 'num', 51645.69, 71.27, '');
INSERT INTO `INT_tariffe_diritti` VALUES (309, 'D007', '1995-04-01', '2004-06-01', 'num', 103291.40, 95.03, '');
INSERT INTO `INT_tariffe_diritti` VALUES (310, 'D007', '1995-04-01', '2004-06-01', 'num', 258228.50, 118.79, '');
INSERT INTO `INT_tariffe_diritti` VALUES (311, 'D007', '1995-04-01', '2004-06-01', 'num', 516456.90, 130.66, '');
INSERT INTO `INT_tariffe_diritti` VALUES (312, 'D007', '1995-04-01', '2004-06-01', 'num', 1549371.00, 154.42, '');
INSERT INTO `INT_tariffe_diritti` VALUES (313, 'D007', '1995-04-01', '2004-06-01', 'oltre', 0.00, 178.18, '');
INSERT INTO `INT_tariffe_diritti` VALUES (314, 'D007', '1995-04-01', '2004-06-01', 'ind', 0.00, 59.39, '');
INSERT INTO `INT_tariffe_diritti` VALUES (315, 'D007', '1995-04-01', '2004-06-01', 'index', 0.00, 95.03, '');
INSERT INTO `INT_tariffe_diritti` VALUES (316, 'D008', '0000-00-00', '1994-09-30', 'num', 128.60, 0.41, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (317, 'D008', '0000-00-00', '1994-09-30', 'num', 258.23, 0.52, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (318, 'D008', '0000-00-00', '1994-09-30', 'num', 516.46, 0.90, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (319, 'D008', '0000-00-00', '1994-09-30', 'num', 1549.37, 1.55, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (320, 'D008', '0000-00-00', '1994-09-30', 'num', 2582.28, 1.81, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (321, 'D008', '0000-00-00', '1994-09-30', 'num', 5164.57, 2.07, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (322, 'D008', '0000-00-00', '1994-09-30', 'num', 25822.84, 2.58, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (323, 'D008', '0000-00-00', '1994-09-30', 'num', 51645.69, 3.10, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (324, 'D008', '0000-00-00', '1994-09-30', 'num', 103291.40, 4.13, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (325, 'D008', '0000-00-00', '1994-09-30', 'num', 258228.50, 5.16, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (326, 'D008', '0000-00-00', '1994-09-30', 'num', 516456.90, 5.68, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (327, 'D008', '0000-00-00', '1994-09-30', 'num', 1549371.00, 6.71, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (328, 'D008', '0000-00-00', '1994-09-30', 'oltre', 0.00, 7.75, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (329, 'D008', '0000-00-00', '1994-09-30', 'ind', 0.00, 2.58, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (330, 'D008', '0000-00-00', '1994-09-30', 'index', 0.00, 7.75, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (331, 'D008', '1994-10-01', '1995-03-31', 'num', 129.11, 0.77, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (332, 'D008', '1994-10-01', '1995-03-31', 'num', 258.23, 0.77, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (333, 'D008', '1994-10-01', '1995-03-31', 'num', 516.46, 1.55, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (334, 'D008', '1994-10-01', '1995-03-31', 'num', 1549.37, 2.32, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (335, 'D008', '1994-10-01', '1995-03-31', 'num', 2582.28, 2.97, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (336, 'D008', '1994-10-01', '1995-03-31', 'num', 5164.57, 3.36, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (337, 'D008', '1994-10-01', '1995-03-31', 'num', 25822.84, 3.87, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (338, 'D008', '1994-10-01', '1995-03-31', 'num', 51645.69, 4.65, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (339, 'D008', '1994-10-01', '1995-03-31', 'num', 103291.40, 6.20, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (340, 'D008', '1994-10-01', '1995-03-31', 'num', 258228.50, 7.75, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (341, 'D008', '1994-10-01', '1995-03-31', 'num', 516456.90, 8.52, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (342, 'D008', '1994-10-01', '1995-03-31', 'num', 1549371.00, 9.55, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (343, 'D008', '1994-10-01', '1995-03-31', 'oltre', 0.00, 11.62, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (344, 'D008', '1994-10-01', '1995-03-31', 'ind', 0.00, 3.87, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (345, 'D008', '1994-10-01', '1995-03-31', 'index', 0.00, 6.20, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (346, 'D008', '1995-04-01', '2004-06-01', 'num', 129.11, 1.03, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (347, 'D008', '1995-04-01', '2004-06-01', 'num', 258.23, 1.03, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (348, 'D008', '1995-04-01', '2004-06-01', 'num', 516.46, 2.07, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (349, 'D008', '1995-04-01', '2004-06-01', 'num', 1549.37, 3.10, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (350, 'D008', '1995-04-01', '2004-06-01', 'num', 2582.28, 3.62, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (351, 'D008', '1995-04-01', '2004-06-01', 'num', 5164.57, 4.13, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (352, 'D008', '1995-04-01', '2004-06-01', 'num', 25822.84, 5.16, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (353, 'D008', '1995-04-01', '2004-06-01', 'num', 51645.69, 6.20, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (354, 'D008', '1995-04-01', '2004-06-01', 'num', 103291.40, 8.26, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (355, 'D008', '1995-04-01', '2004-06-01', 'num', 258228.50, 10.33, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (356, 'D008', '1995-04-01', '2004-06-01', 'num', 516456.90, 11.36, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (357, 'D008', '1995-04-01', '2004-06-01', 'num', 1549371.00, 13.43, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (358, 'D008', '1995-04-01', '2004-06-01', 'oltre', 0.00, 15.49, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (359, 'D008', '1995-04-01', '2004-06-01', 'ind', 0.00, 5.16, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (360, 'D008', '1995-04-01', '2004-06-01', 'index', 0.00, 8.26, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (361, 'D009', '0000-00-00', '1994-09-30', 'num', 128.60, 9.09, '');
INSERT INTO `INT_tariffe_diritti` VALUES (362, 'D009', '0000-00-00', '1994-09-30', 'num', 258.23, 11.36, '');
INSERT INTO `INT_tariffe_diritti` VALUES (363, 'D009', '0000-00-00', '1994-09-30', 'num', 516.46, 19.88, '');
INSERT INTO `INT_tariffe_diritti` VALUES (364, 'D009', '0000-00-00', '1994-09-30', 'num', 1549.37, 34.09, '');
INSERT INTO `INT_tariffe_diritti` VALUES (365, 'D009', '0000-00-00', '1994-09-30', 'num', 2582.28, 39.77, '');
INSERT INTO `INT_tariffe_diritti` VALUES (366, 'D009', '0000-00-00', '1994-09-30', 'num', 5164.57, 45.45, '');
INSERT INTO `INT_tariffe_diritti` VALUES (367, 'D009', '0000-00-00', '1994-09-30', 'num', 25822.84, 56.81, '');
INSERT INTO `INT_tariffe_diritti` VALUES (368, 'D009', '0000-00-00', '1994-09-30', 'num', 51645.69, 68.17, '');
INSERT INTO `INT_tariffe_diritti` VALUES (369, 'D009', '0000-00-00', '1994-09-30', 'num', 103291.40, 90.90, '');
INSERT INTO `INT_tariffe_diritti` VALUES (370, 'D009', '0000-00-00', '1994-09-30', 'num', 258228.50, 113.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (371, 'D009', '0000-00-00', '1994-09-30', 'num', 516456.90, 124.98, '');
INSERT INTO `INT_tariffe_diritti` VALUES (372, 'D009', '0000-00-00', '1994-09-30', 'num', 1549371.00, 147.71, '');
INSERT INTO `INT_tariffe_diritti` VALUES (373, 'D009', '0000-00-00', '1994-09-30', 'oltre', 0.00, 170.43, '');
INSERT INTO `INT_tariffe_diritti` VALUES (374, 'D009', '0000-00-00', '1994-09-30', 'ind', 0.00, 56.81, '');
INSERT INTO `INT_tariffe_diritti` VALUES (375, 'D009', '0000-00-00', '1994-09-30', 'index', 0.00, 170.43, '');
INSERT INTO `INT_tariffe_diritti` VALUES (376, 'D009', '1994-10-01', '1995-03-31', 'num', 129.11, 10.85, '');
INSERT INTO `INT_tariffe_diritti` VALUES (377, 'D009', '1994-10-01', '1995-03-31', 'num', 258.23, 13.43, '');
INSERT INTO `INT_tariffe_diritti` VALUES (378, 'D009', '1994-10-01', '1995-03-31', 'num', 516.46, 23.63, '');
INSERT INTO `INT_tariffe_diritti` VALUES (379, 'D009', '1994-10-01', '1995-03-31', 'num', 1549.37, 40.28, '');
INSERT INTO `INT_tariffe_diritti` VALUES (380, 'D009', '1994-10-01', '1995-03-31', 'num', 2582.28, 47.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (381, 'D009', '1994-10-01', '1995-03-31', 'num', 5164.57, 53.71, '');
INSERT INTO `INT_tariffe_diritti` VALUES (382, 'D009', '1994-10-01', '1995-03-31', 'num', 25822.84, 67.14, '');
INSERT INTO `INT_tariffe_diritti` VALUES (383, 'D009', '1994-10-01', '1995-03-31', 'num', 51645.69, 80.57, '');
INSERT INTO `INT_tariffe_diritti` VALUES (384, 'D009', '1994-10-01', '1995-03-31', 'num', 103291.40, 107.42, '');
INSERT INTO `INT_tariffe_diritti` VALUES (385, 'D009', '1994-10-01', '1995-03-31', 'num', 258228.50, 134.28, '');
INSERT INTO `INT_tariffe_diritti` VALUES (386, 'D009', '1994-10-01', '1995-03-31', 'num', 516456.90, 147.71, '');
INSERT INTO `INT_tariffe_diritti` VALUES (387, 'D009', '1994-10-01', '1995-03-31', 'num', 1549371.00, 174.56, '');
INSERT INTO `INT_tariffe_diritti` VALUES (388, 'D009', '1994-10-01', '1995-03-31', 'oltre', 0.00, 201.42, '');
INSERT INTO `INT_tariffe_diritti` VALUES (389, 'D009', '1994-10-01', '1995-03-31', 'ind', 0.00, 67.14, '');
INSERT INTO `INT_tariffe_diritti` VALUES (390, 'D009', '1994-10-01', '1995-03-31', 'index', 0.00, 107.42, '');
INSERT INTO `INT_tariffe_diritti` VALUES (391, 'D009', '1995-04-01', '2004-06-01', 'num', 129.11, 12.39, '');
INSERT INTO `INT_tariffe_diritti` VALUES (392, 'D009', '1995-04-01', '2004-06-01', 'num', 258.23, 15.49, '');
INSERT INTO `INT_tariffe_diritti` VALUES (393, 'D009', '1995-04-01', '2004-06-01', 'num', 516.46, 27.37, '');
INSERT INTO `INT_tariffe_diritti` VALUES (394, 'D009', '1995-04-01', '2004-06-01', 'num', 1549.37, 46.48, '');
INSERT INTO `INT_tariffe_diritti` VALUES (395, 'D009', '1995-04-01', '2004-06-01', 'num', 2582.28, 54.23, '');
INSERT INTO `INT_tariffe_diritti` VALUES (396, 'D009', '1995-04-01', '2004-06-01', 'num', 5164.57, 61.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (397, 'D009', '1995-04-01', '2004-06-01', 'num', 25822.84, 77.47, '');
INSERT INTO `INT_tariffe_diritti` VALUES (398, 'D009', '1995-04-01', '2004-06-01', 'num', 51645.69, 92.96, '');
INSERT INTO `INT_tariffe_diritti` VALUES (399, 'D009', '1995-04-01', '2004-06-01', 'num', 103291.40, 123.95, '');
INSERT INTO `INT_tariffe_diritti` VALUES (400, 'D009', '1995-04-01', '2004-06-01', 'num', 258228.50, 154.94, '');
INSERT INTO `INT_tariffe_diritti` VALUES (401, 'D009', '1995-04-01', '2004-06-01', 'num', 516456.90, 170.43, '');
INSERT INTO `INT_tariffe_diritti` VALUES (402, 'D009', '1995-04-01', '2004-06-01', 'num', 1549371.00, 201.42, '');
INSERT INTO `INT_tariffe_diritti` VALUES (403, 'D009', '1995-04-01', '2004-06-01', 'oltre', 0.00, 232.41, '');
INSERT INTO `INT_tariffe_diritti` VALUES (404, 'D009', '1995-04-01', '2004-06-01', 'ind', 0.00, 77.47, '');
INSERT INTO `INT_tariffe_diritti` VALUES (405, 'D009', '1995-04-01', '2004-06-01', 'index', 0.00, 123.95, '');
INSERT INTO `INT_tariffe_diritti` VALUES (406, 'D010', '0000-00-00', '1994-09-30', 'num', 128.60, 0.41, '');
INSERT INTO `INT_tariffe_diritti` VALUES (407, 'D010', '0000-00-00', '1994-09-30', 'num', 258.23, 0.52, '');
INSERT INTO `INT_tariffe_diritti` VALUES (408, 'D010', '0000-00-00', '1994-09-30', 'num', 516.46, 0.90, '');
INSERT INTO `INT_tariffe_diritti` VALUES (409, 'D010', '0000-00-00', '1994-09-30', 'num', 1549.37, 1.55, '');
INSERT INTO `INT_tariffe_diritti` VALUES (410, 'D010', '0000-00-00', '1994-09-30', 'num', 2582.28, 1.81, '');
INSERT INTO `INT_tariffe_diritti` VALUES (411, 'D010', '0000-00-00', '1994-09-30', 'num', 5164.57, 2.07, '');
INSERT INTO `INT_tariffe_diritti` VALUES (412, 'D010', '0000-00-00', '1994-09-30', 'num', 25822.84, 2.58, '');
INSERT INTO `INT_tariffe_diritti` VALUES (413, 'D010', '0000-00-00', '1994-09-30', 'num', 51645.69, 3.10, '');
INSERT INTO `INT_tariffe_diritti` VALUES (414, 'D010', '0000-00-00', '1994-09-30', 'num', 103291.40, 4.13, '');
INSERT INTO `INT_tariffe_diritti` VALUES (415, 'D010', '0000-00-00', '1994-09-30', 'num', 258228.50, 5.16, '');
INSERT INTO `INT_tariffe_diritti` VALUES (416, 'D010', '0000-00-00', '1994-09-30', 'num', 516456.90, 5.68, '');
INSERT INTO `INT_tariffe_diritti` VALUES (417, 'D010', '0000-00-00', '1994-09-30', 'num', 1549371.00, 6.71, '');
INSERT INTO `INT_tariffe_diritti` VALUES (418, 'D010', '0000-00-00', '1994-09-30', 'oltre', 0.00, 7.75, '');
INSERT INTO `INT_tariffe_diritti` VALUES (419, 'D010', '0000-00-00', '1994-09-30', 'ind', 0.00, 2.58, '');
INSERT INTO `INT_tariffe_diritti` VALUES (420, 'D010', '0000-00-00', '1994-09-30', 'index', 0.00, 7.75, '');
INSERT INTO `INT_tariffe_diritti` VALUES (421, 'D011', '1994-10-01', '1995-03-31', 'num', 129.11, 2.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (422, 'D011', '1994-10-01', '1995-03-31', 'num', 258.23, 3.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (423, 'D011', '1994-10-01', '1995-03-31', 'num', 516.46, 6.46, '');
INSERT INTO `INT_tariffe_diritti` VALUES (424, 'D011', '1994-10-01', '1995-03-31', 'num', 1549.37, 10.85, '');
INSERT INTO `INT_tariffe_diritti` VALUES (425, 'D011', '1994-10-01', '1995-03-31', 'num', 2582.28, 12.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (426, 'D011', '1994-10-01', '1995-03-31', 'num', 5164.57, 14.46, '');
INSERT INTO `INT_tariffe_diritti` VALUES (427, 'D011', '1994-10-01', '1995-03-31', 'num', 25822.84, 18.08, '');
INSERT INTO `INT_tariffe_diritti` VALUES (428, 'D011', '1994-10-01', '1995-03-31', 'num', 51645.69, 21.69, '');
INSERT INTO `INT_tariffe_diritti` VALUES (429, 'D011', '1994-10-01', '1995-03-31', 'num', 103291.40, 28.92, '');
INSERT INTO `INT_tariffe_diritti` VALUES (430, 'D011', '1994-10-01', '1995-03-31', 'num', 258228.50, 36.15, '');
INSERT INTO `INT_tariffe_diritti` VALUES (431, 'D011', '1994-10-01', '1995-03-31', 'num', 516456.90, 39.77, '');
INSERT INTO `INT_tariffe_diritti` VALUES (432, 'D011', '1994-10-01', '1995-03-31', 'num', 1549371.00, 47.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (433, 'D011', '1994-10-01', '1995-03-31', 'oltre', 0.00, 54.23, '');
INSERT INTO `INT_tariffe_diritti` VALUES (434, 'D011', '1994-10-01', '1995-03-31', 'ind', 0.00, 18.08, '');
INSERT INTO `INT_tariffe_diritti` VALUES (435, 'D011', '1994-10-01', '1995-03-31', 'index', 0.00, 28.92, '');
INSERT INTO `INT_tariffe_diritti` VALUES (436, 'D011', '1995-04-01', '2004-06-01', 'num', 129.11, 4.13, '');
INSERT INTO `INT_tariffe_diritti` VALUES (437, 'D011', '1995-04-01', '2004-06-01', 'num', 258.23, 5.16, '');
INSERT INTO `INT_tariffe_diritti` VALUES (438, 'D011', '1995-04-01', '2004-06-01', 'num', 516.46, 9.30, '');
INSERT INTO `INT_tariffe_diritti` VALUES (439, 'D011', '1995-04-01', '2004-06-01', 'num', 1549.37, 15.49, '');
INSERT INTO `INT_tariffe_diritti` VALUES (440, 'D011', '1995-04-01', '2004-06-01', 'num', 2582.28, 18.08, '');
INSERT INTO `INT_tariffe_diritti` VALUES (441, 'D011', '1995-04-01', '2004-06-01', 'num', 5164.57, 20.66, '');
INSERT INTO `INT_tariffe_diritti` VALUES (442, 'D011', '1995-04-01', '2004-06-01', 'num', 25822.84, 25.82, '');
INSERT INTO `INT_tariffe_diritti` VALUES (443, 'D011', '1995-04-01', '2004-06-01', 'num', 51645.69, 30.99, '');
INSERT INTO `INT_tariffe_diritti` VALUES (444, 'D011', '1995-04-01', '2004-06-01', 'num', 103291.40, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (445, 'D011', '1995-04-01', '2004-06-01', 'num', 258228.50, 51.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (446, 'D011', '1995-04-01', '2004-06-01', 'num', 516456.90, 56.81, '');
INSERT INTO `INT_tariffe_diritti` VALUES (447, 'D011', '1995-04-01', '2004-06-01', 'num', 1549371.00, 67.14, '');
INSERT INTO `INT_tariffe_diritti` VALUES (448, 'D011', '1995-04-01', '2004-06-01', 'oltre', 0.00, 77.47, '');
INSERT INTO `INT_tariffe_diritti` VALUES (449, 'D011', '1995-04-01', '2004-06-01', 'ind', 0.00, 25.82, '');
INSERT INTO `INT_tariffe_diritti` VALUES (450, 'D011', '1995-04-01', '2004-06-01', 'index', 0.00, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (451, 'D013', '1994-10-01', '1995-03-31', 'num', 129.11, 0.77, '');
INSERT INTO `INT_tariffe_diritti` VALUES (452, 'D013', '1994-10-01', '1995-03-31', 'num', 258.23, 0.77, '');
INSERT INTO `INT_tariffe_diritti` VALUES (453, 'D013', '1994-10-01', '1995-03-31', 'num', 516.46, 1.55, '');
INSERT INTO `INT_tariffe_diritti` VALUES (454, 'D013', '1994-10-01', '1995-03-31', 'num', 1549.37, 2.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (455, 'D013', '1994-10-01', '1995-03-31', 'num', 2582.28, 2.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (456, 'D013', '1994-10-01', '1995-03-31', 'num', 5164.57, 3.36, '');
INSERT INTO `INT_tariffe_diritti` VALUES (457, 'D013', '1994-10-01', '1995-03-31', 'num', 25822.84, 3.87, '');
INSERT INTO `INT_tariffe_diritti` VALUES (458, 'D013', '1994-10-01', '1995-03-31', 'num', 51645.69, 4.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (459, 'D013', '1994-10-01', '1995-03-31', 'num', 103291.40, 6.20, '');
INSERT INTO `INT_tariffe_diritti` VALUES (460, 'D013', '1994-10-01', '1995-03-31', 'num', 258228.50, 7.75, '');
INSERT INTO `INT_tariffe_diritti` VALUES (461, 'D013', '1994-10-01', '1995-03-31', 'num', 516456.90, 8.52, '');
INSERT INTO `INT_tariffe_diritti` VALUES (462, 'D013', '1994-10-01', '1995-03-31', 'num', 1549371.00, 9.55, '');
INSERT INTO `INT_tariffe_diritti` VALUES (463, 'D013', '1994-10-01', '1995-03-31', 'oltre', 0.00, 11.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (464, 'D013', '1994-10-01', '1995-03-31', 'ind', 0.00, 3.87, '');
INSERT INTO `INT_tariffe_diritti` VALUES (465, 'D013', '1994-10-01', '1995-03-31', 'index', 0.00, 6.20, '');
INSERT INTO `INT_tariffe_diritti` VALUES (466, 'D013', '1995-04-01', '2004-06-01', 'num', 129.11, 1.03, '');
INSERT INTO `INT_tariffe_diritti` VALUES (467, 'D013', '1995-04-01', '2004-06-01', 'num', 258.23, 1.03, '');
INSERT INTO `INT_tariffe_diritti` VALUES (468, 'D013', '1995-04-01', '2004-06-01', 'num', 516.46, 2.07, '');
INSERT INTO `INT_tariffe_diritti` VALUES (469, 'D013', '1995-04-01', '2004-06-01', 'num', 1549.37, 3.10, '');
INSERT INTO `INT_tariffe_diritti` VALUES (470, 'D013', '1995-04-01', '2004-06-01', 'num', 2582.28, 3.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (471, 'D013', '1995-04-01', '2004-06-01', 'num', 5164.57, 4.13, '');
INSERT INTO `INT_tariffe_diritti` VALUES (472, 'D013', '1995-04-01', '2004-06-01', 'num', 25822.84, 5.16, '');
INSERT INTO `INT_tariffe_diritti` VALUES (473, 'D013', '1995-04-01', '2004-06-01', 'num', 51645.69, 6.20, '');
INSERT INTO `INT_tariffe_diritti` VALUES (474, 'D013', '1995-04-01', '2004-06-01', 'num', 103291.40, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (475, 'D013', '1995-04-01', '2004-06-01', 'num', 258228.50, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (476, 'D013', '1995-04-01', '2004-06-01', 'num', 516456.90, 11.36, '');
INSERT INTO `INT_tariffe_diritti` VALUES (477, 'D013', '1995-04-01', '2004-06-01', 'num', 1549371.00, 13.43, '');
INSERT INTO `INT_tariffe_diritti` VALUES (478, 'D013', '1995-04-01', '2004-06-01', 'oltre', 0.00, 15.49, '');
INSERT INTO `INT_tariffe_diritti` VALUES (479, 'D013', '1995-04-01', '2004-06-01', 'ind', 0.00, 5.16, '');
INSERT INTO `INT_tariffe_diritti` VALUES (480, 'D013', '1995-04-01', '2004-06-01', 'index', 0.00, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (481, 'D014', '1994-10-01', '1995-03-31', 'num', 129.11, 10.85, '');
INSERT INTO `INT_tariffe_diritti` VALUES (482, 'D014', '1994-10-01', '1995-03-31', 'num', 258.23, 13.43, '');
INSERT INTO `INT_tariffe_diritti` VALUES (483, 'D014', '1994-10-01', '1995-03-31', 'num', 516.46, 23.63, '');
INSERT INTO `INT_tariffe_diritti` VALUES (484, 'D014', '1994-10-01', '1995-03-31', 'num', 1549.37, 40.28, '');
INSERT INTO `INT_tariffe_diritti` VALUES (485, 'D014', '1994-10-01', '1995-03-31', 'num', 2582.28, 47.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (486, 'D014', '1994-10-01', '1995-03-31', 'num', 5164.57, 53.71, '');
INSERT INTO `INT_tariffe_diritti` VALUES (487, 'D014', '1994-10-01', '1995-03-31', 'num', 25822.84, 67.14, '');
INSERT INTO `INT_tariffe_diritti` VALUES (488, 'D014', '1994-10-01', '1995-03-31', 'num', 51645.69, 80.57, '');
INSERT INTO `INT_tariffe_diritti` VALUES (489, 'D014', '1994-10-01', '1995-03-31', 'num', 103291.40, 107.42, '');
INSERT INTO `INT_tariffe_diritti` VALUES (490, 'D014', '1994-10-01', '1995-03-31', 'num', 258228.50, 134.28, '');
INSERT INTO `INT_tariffe_diritti` VALUES (491, 'D014', '1994-10-01', '1995-03-31', 'num', 516456.90, 147.71, '');
INSERT INTO `INT_tariffe_diritti` VALUES (492, 'D014', '1994-10-01', '1995-03-31', 'num', 1549371.00, 174.56, '');
INSERT INTO `INT_tariffe_diritti` VALUES (493, 'D014', '1994-10-01', '1995-03-31', 'oltre', 0.00, 201.42, '');
INSERT INTO `INT_tariffe_diritti` VALUES (494, 'D014', '1994-10-01', '1995-03-31', 'ind', 0.00, 67.14, '');
INSERT INTO `INT_tariffe_diritti` VALUES (495, 'D014', '1994-10-01', '1995-03-31', 'index', 0.00, 107.42, '');
INSERT INTO `INT_tariffe_diritti` VALUES (496, 'D014', '1995-04-01', '2004-06-01', 'num', 129.11, 12.39, '');
INSERT INTO `INT_tariffe_diritti` VALUES (497, 'D014', '1995-04-01', '2004-06-01', 'num', 258.23, 15.49, '');
INSERT INTO `INT_tariffe_diritti` VALUES (498, 'D014', '1995-04-01', '2004-06-01', 'num', 516.46, 27.37, '');
INSERT INTO `INT_tariffe_diritti` VALUES (499, 'D014', '1995-04-01', '2004-06-01', 'num', 1549.37, 46.48, '');
INSERT INTO `INT_tariffe_diritti` VALUES (500, 'D014', '1995-04-01', '2004-06-01', 'num', 2582.28, 54.23, '');
INSERT INTO `INT_tariffe_diritti` VALUES (501, 'D014', '1995-04-01', '2004-06-01', 'num', 5164.57, 61.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (502, 'D014', '1995-04-01', '2004-06-01', 'num', 25822.84, 77.47, '');
INSERT INTO `INT_tariffe_diritti` VALUES (503, 'D014', '1995-04-01', '2004-06-01', 'num', 51645.69, 92.96, '');
INSERT INTO `INT_tariffe_diritti` VALUES (504, 'D014', '1995-04-01', '2004-06-01', 'num', 103291.40, 123.95, '');
INSERT INTO `INT_tariffe_diritti` VALUES (505, 'D014', '1995-04-01', '2004-06-01', 'num', 258228.50, 154.94, '');
INSERT INTO `INT_tariffe_diritti` VALUES (506, 'D014', '1995-04-01', '2004-06-01', 'num', 516456.90, 170.43, '');
INSERT INTO `INT_tariffe_diritti` VALUES (507, 'D014', '1995-04-01', '2004-06-01', 'num', 1549371.00, 201.42, '');
INSERT INTO `INT_tariffe_diritti` VALUES (508, 'D014', '1995-04-01', '2004-06-01', 'oltre', 0.00, 232.41, '');
INSERT INTO `INT_tariffe_diritti` VALUES (509, 'D014', '1995-04-01', '2004-06-01', 'ind', 0.00, 77.47, '');
INSERT INTO `INT_tariffe_diritti` VALUES (510, 'D014', '1995-04-01', '2004-06-01', 'index', 0.00, 123.95, '');
INSERT INTO `INT_tariffe_diritti` VALUES (511, 'D016', '1994-10-01', '1995-03-31', 'num', 129.11, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (512, 'D016', '1994-10-01', '1995-03-31', 'num', 258.23, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (513, 'D016', '1994-10-01', '1995-03-31', 'num', 516.46, 18.08, '');
INSERT INTO `INT_tariffe_diritti` VALUES (514, 'D016', '1994-10-01', '1995-03-31', 'num', 1549.37, 30.99, '');
INSERT INTO `INT_tariffe_diritti` VALUES (515, 'D016', '1994-10-01', '1995-03-31', 'num', 2582.28, 36.15, '');
INSERT INTO `INT_tariffe_diritti` VALUES (516, 'D016', '1994-10-01', '1995-03-31', 'num', 5164.57, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (517, 'D016', '1994-10-01', '1995-03-31', 'num', 25822.84, 51.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (518, 'D016', '1994-10-01', '1995-03-31', 'num', 51645.69, 61.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (519, 'D016', '1994-10-01', '1995-03-31', 'num', 103291.40, 82.63, '');
INSERT INTO `INT_tariffe_diritti` VALUES (520, 'D016', '1994-10-01', '1995-03-31', 'num', 258228.50, 103.29, '');
INSERT INTO `INT_tariffe_diritti` VALUES (521, 'D016', '1994-10-01', '1995-03-31', 'num', 516456.90, 113.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (522, 'D016', '1994-10-01', '1995-03-31', 'num', 1549371.00, 134.28, '');
INSERT INTO `INT_tariffe_diritti` VALUES (523, 'D016', '1994-10-01', '1995-03-31', 'oltre', 0.00, 154.94, '');
INSERT INTO `INT_tariffe_diritti` VALUES (524, 'D016', '1994-10-01', '1995-03-31', 'ind', 0.00, 51.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (525, 'D016', '1994-10-01', '1995-03-31', 'index', 0.00, 82.63, '');
INSERT INTO `INT_tariffe_diritti` VALUES (526, 'D016', '1995-04-01', '2004-06-01', 'num', 129.11, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (527, 'D016', '1995-04-01', '2004-06-01', 'num', 258.23, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (528, 'D016', '1995-04-01', '2004-06-01', 'num', 516.46, 18.08, '');
INSERT INTO `INT_tariffe_diritti` VALUES (529, 'D016', '1995-04-01', '2004-06-01', 'num', 1549.37, 30.99, '');
INSERT INTO `INT_tariffe_diritti` VALUES (530, 'D016', '1995-04-01', '2004-06-01', 'num', 2582.28, 36.15, '');
INSERT INTO `INT_tariffe_diritti` VALUES (531, 'D016', '1995-04-01', '2004-06-01', 'num', 5164.57, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (532, 'D016', '1995-04-01', '2004-06-01', 'num', 25822.84, 51.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (533, 'D016', '1995-04-01', '2004-06-01', 'num', 51645.69, 61.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (534, 'D016', '1995-04-01', '2004-06-01', 'num', 103291.40, 82.63, '');
INSERT INTO `INT_tariffe_diritti` VALUES (535, 'D016', '1995-04-01', '2004-06-01', 'num', 258228.50, 103.29, '');
INSERT INTO `INT_tariffe_diritti` VALUES (536, 'D016', '1995-04-01', '2004-06-01', 'num', 516456.90, 113.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (537, 'D016', '1995-04-01', '2004-06-01', 'num', 1549371.00, 134.28, '');
INSERT INTO `INT_tariffe_diritti` VALUES (538, 'D016', '1995-04-01', '2004-06-01', 'oltre', 0.00, 154.94, '');
INSERT INTO `INT_tariffe_diritti` VALUES (539, 'D016', '1995-04-01', '2004-06-01', 'ind', 0.00, 51.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (540, 'D016', '1995-04-01', '2004-06-01', 'index', 0.00, 82.63, '');
INSERT INTO `INT_tariffe_diritti` VALUES (541, 'D038', '1994-10-01', '1995-03-31', 'num', 129.11, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (542, 'D038', '1994-10-01', '1995-03-31', 'num', 258.23, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (543, 'D038', '1994-10-01', '1995-03-31', 'num', 516.46, 18.08, '');
INSERT INTO `INT_tariffe_diritti` VALUES (544, 'D038', '1994-10-01', '1995-03-31', 'num', 1549.37, 30.99, '');
INSERT INTO `INT_tariffe_diritti` VALUES (545, 'D038', '1994-10-01', '1995-03-31', 'num', 2582.28, 36.15, '');
INSERT INTO `INT_tariffe_diritti` VALUES (546, 'D038', '1994-10-01', '1995-03-31', 'num', 5164.57, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (547, 'D038', '1994-10-01', '1995-03-31', 'num', 25822.84, 51.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (548, 'D038', '1994-10-01', '1995-03-31', 'num', 51645.69, 61.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (549, 'D038', '1994-10-01', '1995-03-31', 'num', 103291.40, 82.63, '');
INSERT INTO `INT_tariffe_diritti` VALUES (550, 'D038', '1994-10-01', '1995-03-31', 'num', 258228.50, 103.29, '');
INSERT INTO `INT_tariffe_diritti` VALUES (551, 'D038', '1994-10-01', '1995-03-31', 'num', 516456.90, 113.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (552, 'D038', '1994-10-01', '1995-03-31', 'num', 1549371.00, 134.28, '');
INSERT INTO `INT_tariffe_diritti` VALUES (553, 'D038', '1994-10-01', '1995-03-31', 'oltre', 0.00, 154.94, '');
INSERT INTO `INT_tariffe_diritti` VALUES (554, 'D038', '1994-10-01', '1995-03-31', 'ind', 0.00, 51.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (555, 'D038', '1994-10-01', '1995-03-31', 'index', 0.00, 82.63, '');
INSERT INTO `INT_tariffe_diritti` VALUES (556, 'D038', '1995-04-01', '2004-06-01', 'num', 129.11, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (557, 'D038', '1995-04-01', '2004-06-01', 'num', 258.23, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (558, 'D038', '1995-04-01', '2004-06-01', 'num', 516.46, 18.08, '');
INSERT INTO `INT_tariffe_diritti` VALUES (559, 'D038', '1995-04-01', '2004-06-01', 'num', 1549.37, 30.99, '');
INSERT INTO `INT_tariffe_diritti` VALUES (560, 'D038', '1995-04-01', '2004-06-01', 'num', 2582.28, 36.15, '');
INSERT INTO `INT_tariffe_diritti` VALUES (561, 'D038', '1995-04-01', '2004-06-01', 'num', 5164.57, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (562, 'D038', '1995-04-01', '2004-06-01', 'num', 25822.84, 51.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (563, 'D038', '1995-04-01', '2004-06-01', 'num', 51645.69, 61.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (564, 'D038', '1995-04-01', '2004-06-01', 'num', 103291.40, 82.63, '');
INSERT INTO `INT_tariffe_diritti` VALUES (565, 'D038', '1995-04-01', '2004-06-01', 'num', 258228.50, 103.29, '');
INSERT INTO `INT_tariffe_diritti` VALUES (566, 'D038', '1995-04-01', '2004-06-01', 'num', 516456.90, 113.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (567, 'D038', '1995-04-01', '2004-06-01', 'num', 1549371.00, 134.28, '');
INSERT INTO `INT_tariffe_diritti` VALUES (568, 'D038', '1995-04-01', '2004-06-01', 'oltre', 0.00, 154.94, '');
INSERT INTO `INT_tariffe_diritti` VALUES (569, 'D038', '1995-04-01', '2004-06-01', 'ind', 0.00, 51.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (570, 'D038', '1995-04-01', '2004-06-01', 'index', 0.00, 82.63, '');
INSERT INTO `INT_tariffe_diritti` VALUES (571, 'D080', '0000-00-00', '1994-09-30', 'num', 516456.90, 29.44, '');
INSERT INTO `INT_tariffe_diritti` VALUES (572, 'D080', '0000-00-00', '1994-09-30', 'ind', 0.00, 29.44, '');
INSERT INTO `INT_tariffe_diritti` VALUES (573, 'D080', '0000-00-00', '1994-09-30', 'index', 0.00, 29.44, '');
INSERT INTO `INT_tariffe_diritti` VALUES (574, 'D080', '1994-10-01', '1995-03-31', 'num', 516456.90, 32.80, '');
INSERT INTO `INT_tariffe_diritti` VALUES (575, 'D080', '1994-10-01', '1995-03-31', 'ind', 0.00, 32.80, '');
INSERT INTO `INT_tariffe_diritti` VALUES (576, 'D080', '1994-10-01', '1995-03-31', 'index', 0.00, 32.80, '');
INSERT INTO `INT_tariffe_diritti` VALUES (577, 'D080', '1995-04-01', '2004-06-01', 'num', 516456.90, 36.15, '');
INSERT INTO `INT_tariffe_diritti` VALUES (578, 'D080', '1995-04-01', '2004-06-01', 'ind', 0.00, 36.15, '');
INSERT INTO `INT_tariffe_diritti` VALUES (579, 'D080', '1995-04-01', '2004-06-01', 'index', 0.00, 36.15, '');
INSERT INTO `INT_tariffe_diritti` VALUES (580, 'D081', '0000-00-00', '1994-09-30', 'num', 516456.90, 48.55, '');
INSERT INTO `INT_tariffe_diritti` VALUES (581, 'D081', '0000-00-00', '1994-09-30', 'ind', 0.00, 48.55, '');
INSERT INTO `INT_tariffe_diritti` VALUES (582, 'D081', '0000-00-00', '1994-09-30', 'index', 0.00, 48.55, '');
INSERT INTO `INT_tariffe_diritti` VALUES (583, 'D081', '1994-10-01', '1995-03-31', 'num', 516456.90, 53.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (584, 'D081', '1994-10-01', '1995-03-31', 'ind', 0.00, 53.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (585, 'D081', '1994-10-01', '1995-03-31', 'index', 0.00, 53.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (586, 'D081', '1995-04-01', '2004-06-01', 'num', 516456.90, 59.39, '');
INSERT INTO `INT_tariffe_diritti` VALUES (587, 'D081', '1995-04-01', '2004-06-01', 'ind', 0.00, 59.39, '');
INSERT INTO `INT_tariffe_diritti` VALUES (588, 'D081', '1995-04-01', '2004-06-01', 'index', 0.00, 59.39, '');
INSERT INTO `INT_tariffe_diritti` VALUES (589, 'D082', '0000-00-00', '1994-09-30', 'num', 516456.90, 6.20, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (590, 'D082', '0000-00-00', '1994-09-30', 'ind', 0.00, 6.20, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (591, 'D082', '0000-00-00', '1994-09-30', 'index', 0.00, 6.20, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (592, 'D082', '1994-10-01', '1995-03-31', 'num', 516456.90, 9.30, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (593, 'D082', '1994-10-01', '1995-03-31', 'ind', 0.00, 9.30, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (594, 'D082', '1994-10-01', '1995-03-31', 'index', 0.00, 9.30, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (595, 'D082', '1995-04-01', '2004-06-01', 'num', 516456.90, 12.39, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (596, 'D082', '1995-04-01', '2004-06-01', 'ind', 0.00, 12.39, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (597, 'D082', '1995-04-01', '2004-06-01', 'index', 0.00, 12.39, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (598, 'D100', '0000-00-00', '1994-09-30', 'num', 129.11, 1.65, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (599, 'D100', '0000-00-00', '1994-09-30', 'num', 258.23, 2.07, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (600, 'D100', '0000-00-00', '1994-09-30', 'num', 516.46, 3.62, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (601, 'D100', '0000-00-00', '1994-09-30', 'num', 1549.37, 6.20, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (602, 'D100', '0000-00-00', '1994-09-30', 'num', 2582.28, 7.23, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (603, 'D100', '0000-00-00', '1994-09-30', 'num', 5164.57, 8.26, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (604, 'D100', '0000-00-00', '1994-09-30', 'num', 25822.84, 10.33, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (605, 'D100', '0000-00-00', '1994-09-30', 'num', 51645.69, 12.39, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (606, 'D100', '0000-00-00', '1994-09-30', 'num', 103291.40, 16.53, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (607, 'D100', '0000-00-00', '1994-09-30', 'num', 258228.50, 20.66, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (608, 'D100', '0000-00-00', '1994-09-30', 'num', 516456.90, 22.72, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (609, 'D100', '0000-00-00', '1994-09-30', 'num', 1549371.00, 26.86, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (610, 'D100', '0000-00-00', '1994-09-30', 'oltre', 0.00, 30.99, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (611, 'D100', '0000-00-00', '1994-09-30', 'ind', 0.00, 10.33, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (612, 'D100', '0000-00-00', '1994-09-30', 'index', 0.00, 30.99, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (613, 'D100', '1994-10-01', '1995-03-31', 'num', 129.11, 1.94, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (614, 'D100', '1994-10-01', '1995-03-31', 'num', 258.23, 2.32, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (615, 'D100', '1994-10-01', '1995-03-31', 'num', 516.46, 4.13, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (616, 'D100', '1994-10-01', '1995-03-31', 'num', 1549.37, 6.97, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (617, 'D100', '1994-10-01', '1995-03-31', 'num', 2582.28, 8.26, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (618, 'D100', '1994-10-01', '1995-03-31', 'num', 5164.57, 9.30, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (619, 'D100', '1994-10-01', '1995-03-31', 'num', 25822.84, 11.62, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (620, 'D100', '1994-10-01', '1995-03-31', 'num', 51645.69, 13.94, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (621, 'D100', '1994-10-01', '1995-03-31', 'num', 103291.40, 18.59, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (622, 'D100', '1994-10-01', '1995-03-31', 'num', 258228.50, 23.24, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (623, 'D100', '1994-10-01', '1995-03-31', 'num', 516456.90, 25.56, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (624, 'D100', '1994-10-01', '1995-03-31', 'num', 1549371.00, 30.21, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (625, 'D100', '1994-10-01', '1995-03-31', 'oltre', 0.00, 34.86, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (626, 'D100', '1994-10-01', '1995-03-31', 'ind', 0.00, 11.62, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (627, 'D100', '1994-10-01', '1995-03-31', 'index', 0.00, 18.59, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (628, 'D100', '1995-04-01', '2004-06-01', 'num', 129.11, 2.07, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (629, 'D100', '1995-04-01', '2004-06-01', 'num', 258.23, 2.58, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (630, 'D100', '1995-04-01', '2004-06-01', 'num', 516.46, 4.65, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (631, 'D100', '1995-04-01', '2004-06-01', 'num', 1549.37, 7.75, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (632, 'D100', '1995-04-01', '2004-06-01', 'num', 2582.28, 9.30, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (633, 'D100', '1995-04-01', '2004-06-01', 'num', 5164.57, 10.33, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (634, 'D100', '1995-04-01', '2004-06-01', 'num', 25822.84, 12.91, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (635, 'D100', '1995-04-01', '2004-06-01', 'num', 51645.69, 15.49, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (636, 'D100', '1995-04-01', '2004-06-01', 'num', 103291.40, 20.66, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (637, 'D100', '1995-04-01', '2004-06-01', 'num', 258228.50, 25.82, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (638, 'D100', '1995-04-01', '2004-06-01', 'num', 516456.90, 28.41, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (639, 'D100', '1995-04-01', '2004-06-01', 'num', 1549371.00, 33.57, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (640, 'D100', '1995-04-01', '2004-06-01', 'oltre', 0.00, 38.73, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (641, 'D100', '1995-04-01', '2004-06-01', 'ind', 0.00, 12.91, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (642, 'D100', '1995-04-01', '2004-06-01', 'index', 0.00, 20.66, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (643, 'D300', '0000-00-00', '1994-09-30', 'num', 129.11, 2.48, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (644, 'D300', '0000-00-00', '1994-09-30', 'num', 258.23, 3.10, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (645, 'D300', '0000-00-00', '1994-09-30', 'num', 516.46, 5.42, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (646, 'D300', '0000-00-00', '1994-09-30', 'num', 1549.37, 9.30, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (647, 'D300', '0000-00-00', '1994-09-30', 'num', 2582.28, 10.85, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (648, 'D300', '0000-00-00', '1994-09-30', 'num', 5164.57, 12.39, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (649, 'D300', '0000-00-00', '1994-09-30', 'num', 25822.84, 15.49, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (650, 'D300', '0000-00-00', '1994-09-30', 'num', 51645.69, 18.59, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (651, 'D300', '0000-00-00', '1994-09-30', 'num', 103291.40, 24.79, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (652, 'D300', '0000-00-00', '1994-09-30', 'num', 258228.50, 30.99, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (653, 'D300', '0000-00-00', '1994-09-30', 'num', 516456.90, 34.09, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (654, 'D300', '0000-00-00', '1994-09-30', 'num', 1549371.00, 40.28, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (655, 'D300', '0000-00-00', '1994-09-30', 'oltre', 0.00, 46.48, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (656, 'D300', '0000-00-00', '1994-09-30', 'ind', 0.00, 15.49, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (657, 'D300', '0000-00-00', '1994-09-30', 'index', 0.00, 46.48, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (658, 'D300', '1994-10-01', '1995-03-31', 'num', 129.11, 2.97, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (659, 'D300', '1994-10-01', '1995-03-31', 'num', 258.23, 3.62, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (660, 'D300', '1994-10-01', '1995-03-31', 'num', 516.46, 6.46, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (661, 'D300', '1994-10-01', '1995-03-31', 'num', 1549.37, 10.85, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (662, 'D300', '1994-10-01', '1995-03-31', 'num', 2582.28, 12.65, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (663, 'D300', '1994-10-01', '1995-03-31', 'num', 5164.57, 14.46, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (664, 'D300', '1994-10-01', '1995-03-31', 'num', 25822.84, 18.08, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (665, 'D300', '1994-10-01', '1995-03-31', 'num', 51645.69, 21.69, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (666, 'D300', '1994-10-01', '1995-03-31', 'num', 103291.40, 28.92, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (667, 'D300', '1994-10-01', '1995-03-31', 'num', 258228.50, 36.15, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (668, 'D300', '1994-10-01', '1995-03-31', 'num', 516456.90, 39.77, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (669, 'D300', '1994-10-01', '1995-03-31', 'num', 1549371.00, 47.00, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (670, 'D300', '1994-10-01', '1995-03-31', 'oltre', 0.00, 54.23, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (671, 'D300', '1994-10-01', '1995-03-31', 'ind', 0.00, 18.08, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (672, 'D300', '1994-10-01', '1995-03-31', 'index', 0.00, 28.92, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (673, 'D300', '1995-04-01', '2004-06-01', 'num', 129.11, 4.13, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (674, 'D300', '1995-04-01', '2004-06-01', 'num', 258.23, 5.16, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (675, 'D300', '1995-04-01', '2004-06-01', 'num', 516.46, 9.30, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (676, 'D300', '1995-04-01', '2004-06-01', 'num', 1549.37, 15.49, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (677, 'D300', '1995-04-01', '2004-06-01', 'num', 2582.28, 18.08, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (678, 'D300', '1995-04-01', '2004-06-01', 'num', 5164.57, 20.66, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (679, 'D300', '1995-04-01', '2004-06-01', 'num', 25822.84, 25.82, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (680, 'D300', '1995-04-01', '2004-06-01', 'num', 51645.69, 30.99, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (681, 'D300', '1995-04-01', '2004-06-01', 'num', 103291.40, 41.32, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (682, 'D300', '1995-04-01', '2004-06-01', 'num', 258228.50, 51.65, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (683, 'D300', '1995-04-01', '2004-06-01', 'num', 516456.90, 56.81, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (684, 'D300', '1995-04-01', '2004-06-01', 'num', 1549371.00, 67.14, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (685, 'D300', '1995-04-01', '2004-06-01', 'oltre', 0.00, 77.47, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (686, 'D300', '1995-04-01', '2004-06-01', 'ind', 0.00, 25.82, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (687, 'D300', '1995-04-01', '2004-06-01', 'index', 0.00, 41.32, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (688, 'D400', '0000-00-00', '1994-09-30', 'num', 129.11, 3.31, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (689, 'D400', '0000-00-00', '1994-09-30', 'num', 258.23, 4.13, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (690, 'D400', '0000-00-00', '1994-09-30', 'num', 516.46, 7.23, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (691, 'D400', '0000-00-00', '1994-09-30', 'num', 1549.37, 12.39, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (692, 'D400', '0000-00-00', '1994-09-30', 'num', 2582.28, 14.46, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (693, 'D400', '0000-00-00', '1994-09-30', 'num', 5164.57, 16.53, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (694, 'D400', '0000-00-00', '1994-09-30', 'num', 25822.84, 20.66, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (695, 'D400', '0000-00-00', '1994-09-30', 'num', 51645.69, 24.79, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (696, 'D400', '0000-00-00', '1994-09-30', 'num', 103291.40, 33.05, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (697, 'D400', '0000-00-00', '1994-09-30', 'num', 258228.50, 41.32, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (698, 'D400', '0000-00-00', '1994-09-30', 'num', 516456.90, 45.45, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (699, 'D400', '0000-00-00', '1994-09-30', 'num', 1549371.00, 53.71, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (700, 'D400', '0000-00-00', '1994-09-30', 'oltre', 0.00, 61.97, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (701, 'D400', '0000-00-00', '1994-09-30', 'ind', 0.00, 20.66, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (702, 'D400', '0000-00-00', '1994-09-30', 'index', 0.00, 61.97, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (703, 'D400', '1994-10-01', '1995-03-31', 'num', 129.11, 3.74, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (704, 'D400', '1994-10-01', '1995-03-31', 'num', 258.23, 4.65, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (705, 'D400', '1994-10-01', '1995-03-31', 'num', 516.46, 8.26, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (706, 'D400', '1994-10-01', '1995-03-31', 'num', 1549.37, 13.94, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (707, 'D400', '1994-10-01', '1995-03-31', 'num', 2582.28, 16.27, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (708, 'D400', '1994-10-01', '1995-03-31', 'num', 5164.57, 18.59, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (709, 'D400', '1994-10-01', '1995-03-31', 'num', 25822.84, 23.24, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (710, 'D400', '1994-10-01', '1995-03-31', 'num', 51645.69, 27.89, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (711, 'D400', '1994-10-01', '1995-03-31', 'num', 103291.40, 37.18, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (712, 'D400', '1994-10-01', '1995-03-31', 'num', 258228.50, 46.48, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (713, 'D400', '1994-10-01', '1995-03-31', 'num', 516456.90, 51.13, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (714, 'D400', '1994-10-01', '1995-03-31', 'num', 1549371.00, 60.43, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (715, 'D400', '1994-10-01', '1995-03-31', 'oltre', 0.00, 69.72, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (716, 'D400', '1994-10-01', '1995-03-31', 'ind', 0.00, 23.24, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (717, 'D400', '1994-10-01', '1995-03-31', 'index', 0.00, 37.18, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (718, 'D400', '1995-04-01', '2004-06-01', 'num', 129.11, 4.13, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (719, 'D400', '1995-04-01', '2004-06-01', 'num', 258.23, 5.16, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (720, 'D400', '1995-04-01', '2004-06-01', 'num', 516.46, 9.30, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (721, 'D400', '1995-04-01', '2004-06-01', 'num', 1549.37, 15.49, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (722, 'D400', '1995-04-01', '2004-06-01', 'num', 2582.28, 18.08, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (723, 'D400', '1995-04-01', '2004-06-01', 'num', 5164.57, 20.66, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (724, 'D400', '1995-04-01', '2004-06-01', 'num', 25822.84, 25.82, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (725, 'D400', '1995-04-01', '2004-06-01', 'num', 51645.69, 30.99, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (726, 'D400', '1995-04-01', '2004-06-01', 'num', 103291.40, 41.32, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (727, 'D400', '1995-04-01', '2004-06-01', 'num', 258228.50, 51.65, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (728, 'D400', '1995-04-01', '2004-06-01', 'num', 516456.90, 56.81, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (729, 'D400', '1995-04-01', '2004-06-01', 'num', 1549371.00, 67.14, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (730, 'D400', '1995-04-01', '2004-06-01', 'oltre', 0.00, 77.47, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (731, 'D400', '1995-04-01', '2004-06-01', 'ind', 0.00, 25.82, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (732, 'D400', '1995-04-01', '2004-06-01', 'index', 0.00, 41.32, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (733, 'D845', '0000-00-00', '1994-09-30', 'num', 129.11, 9.92, '');
INSERT INTO `INT_tariffe_diritti` VALUES (734, 'D845', '0000-00-00', '1994-09-30', 'num', 258.23, 12.39, '');
INSERT INTO `INT_tariffe_diritti` VALUES (735, 'D845', '0000-00-00', '1994-09-30', 'num', 516.46, 21.69, '');
INSERT INTO `INT_tariffe_diritti` VALUES (736, 'D845', '0000-00-00', '1994-09-30', 'num', 1549.37, 37.18, '');


INSERT INTO `INT_tariffe_diritti` VALUES (737, 'D845', '0000-00-00', '1994-09-30', 'num', 2582.28, 43.38, '');
INSERT INTO `INT_tariffe_diritti` VALUES (738, 'D845', '0000-00-00', '1994-09-30', 'num', 5164.57, 49.58, '');
INSERT INTO `INT_tariffe_diritti` VALUES (739, 'D845', '0000-00-00', '1994-09-30', 'num', 25822.84, 61.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (740, 'D845', '0000-00-00', '1994-09-30', 'num', 51645.69, 74.37, '');
INSERT INTO `INT_tariffe_diritti` VALUES (741, 'D845', '0000-00-00', '1994-09-30', 'num', 103291.40, 99.16, '');
INSERT INTO `INT_tariffe_diritti` VALUES (742, 'D845', '0000-00-00', '1994-09-30', 'num', 258228.50, 123.95, '');
INSERT INTO `INT_tariffe_diritti` VALUES (743, 'D845', '0000-00-00', '1994-09-30', 'num', 516456.90, 136.34, '');
INSERT INTO `INT_tariffe_diritti` VALUES (744, 'D845', '0000-00-00', '1994-09-30', 'num', 1549371.00, 161.13, '');
INSERT INTO `INT_tariffe_diritti` VALUES (745, 'D845', '0000-00-00', '1994-09-30', 'oltre', 0.00, 185.92, '');
INSERT INTO `INT_tariffe_diritti` VALUES (746, 'D845', '0000-00-00', '1994-09-30', 'ind', 0.00, 61.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (747, 'D845', '0000-00-00', '1994-09-30', 'index', 0.00, 185.92, '');
INSERT INTO `INT_tariffe_diritti` VALUES (748, 'D845', '1994-10-01', '1995-03-31', 'num', 129.11, 13.43, '');
INSERT INTO `INT_tariffe_diritti` VALUES (749, 'D845', '1994-10-01', '1995-03-31', 'num', 258.23, 16.53, '');
INSERT INTO `INT_tariffe_diritti` VALUES (750, 'D845', '1994-10-01', '1995-03-31', 'num', 516.46, 28.92, '');
INSERT INTO `INT_tariffe_diritti` VALUES (751, 'D845', '1994-10-01', '1995-03-31', 'num', 1549.37, 49.58, '');
INSERT INTO `INT_tariffe_diritti` VALUES (752, 'D845', '1994-10-01', '1995-03-31', 'num', 2582.28, 57.84, '');
INSERT INTO `INT_tariffe_diritti` VALUES (753, 'D845', '1994-10-01', '1995-03-31', 'num', 5164.57, 66.11, '');
INSERT INTO `INT_tariffe_diritti` VALUES (754, 'D845', '1994-10-01', '1995-03-31', 'num', 25822.84, 82.63, '');
INSERT INTO `INT_tariffe_diritti` VALUES (755, 'D845', '1994-10-01', '1995-03-31', 'num', 51645.69, 99.16, '');
INSERT INTO `INT_tariffe_diritti` VALUES (756, 'D845', '1994-10-01', '1995-03-31', 'num', 103291.40, 132.21, '');
INSERT INTO `INT_tariffe_diritti` VALUES (757, 'D845', '1994-10-01', '1995-03-31', 'num', 258228.50, 165.27, '');
INSERT INTO `INT_tariffe_diritti` VALUES (758, 'D845', '1994-10-01', '1995-03-31', 'num', 516456.90, 181.79, '');
INSERT INTO `INT_tariffe_diritti` VALUES (759, 'D845', '1994-10-01', '1995-03-31', 'num', 1549371.00, 214.85, '');
INSERT INTO `INT_tariffe_diritti` VALUES (760, 'D845', '1994-10-01', '1995-03-31', 'oltre', 0.00, 247.90, '');
INSERT INTO `INT_tariffe_diritti` VALUES (761, 'D845', '1994-10-01', '1995-03-31', 'ind', 0.00, 82.63, '');
INSERT INTO `INT_tariffe_diritti` VALUES (762, 'D845', '1994-10-01', '1995-03-31', 'index', 0.00, 132.21, '');
INSERT INTO `INT_tariffe_diritti` VALUES (763, 'D845', '1995-04-01', '2004-06-01', 'num', 129.11, 16.53, '');
INSERT INTO `INT_tariffe_diritti` VALUES (764, 'D845', '1995-04-01', '2004-06-01', 'num', 258.23, 20.66, '');
INSERT INTO `INT_tariffe_diritti` VALUES (765, 'D845', '1995-04-01', '2004-06-01', 'num', 516.46, 36.15, '');
INSERT INTO `INT_tariffe_diritti` VALUES (766, 'D845', '1995-04-01', '2004-06-01', 'num', 1549.37, 61.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (767, 'D845', '1995-04-01', '2004-06-01', 'num', 2582.28, 72.30, '');
INSERT INTO `INT_tariffe_diritti` VALUES (768, 'D845', '1995-04-01', '2004-06-01', 'num', 5164.57, 82.63, '');
INSERT INTO `INT_tariffe_diritti` VALUES (769, 'D845', '1995-04-01', '2004-06-01', 'num', 25822.84, 103.29, '');
INSERT INTO `INT_tariffe_diritti` VALUES (770, 'D845', '1995-04-01', '2004-06-01', 'num', 51645.69, 123.95, '');
INSERT INTO `INT_tariffe_diritti` VALUES (771, 'D845', '1995-04-01', '2004-06-01', 'num', 103291.40, 165.27, '');
INSERT INTO `INT_tariffe_diritti` VALUES (772, 'D845', '1995-04-01', '2004-06-01', 'num', 258228.50, 206.58, '');
INSERT INTO `INT_tariffe_diritti` VALUES (773, 'D845', '1995-04-01', '2004-06-01', 'num', 516456.90, 227.24, '');
INSERT INTO `INT_tariffe_diritti` VALUES (774, 'D845', '1995-04-01', '2004-06-01', 'num', 1549371.00, 268.56, '');
INSERT INTO `INT_tariffe_diritti` VALUES (775, 'D845', '1995-04-01', '2004-06-01', 'oltre', 0.00, 309.87, '');
INSERT INTO `INT_tariffe_diritti` VALUES (776, 'D845', '1995-04-01', '2004-06-01', 'ind', 0.00, 103.29, '');
INSERT INTO `INT_tariffe_diritti` VALUES (777, 'D845', '1995-04-01', '2004-06-01', 'index', 0.00, 165.27, '');
INSERT INTO `INT_tariffe_diritti` VALUES (778, 'DCOL', '1995-04-01', '2004-06-01', 'num', 129.11, 2.58, '');
INSERT INTO `INT_tariffe_diritti` VALUES (779, 'DCOL', '1995-04-01', '2004-06-01', 'num', 258.23, 3.10, '');
INSERT INTO `INT_tariffe_diritti` VALUES (780, 'DCOL', '1995-04-01', '2004-06-01', 'num', 516.46, 5.68, '');
INSERT INTO `INT_tariffe_diritti` VALUES (781, 'DCOL', '1995-04-01', '2004-06-01', 'num', 1549.37, 9.30, '');
INSERT INTO `INT_tariffe_diritti` VALUES (782, 'DCOL', '1995-04-01', '2004-06-01', 'num', 2582.28, 10.85, '');
INSERT INTO `INT_tariffe_diritti` VALUES (783, 'DCOL', '1995-04-01', '2004-06-01', 'num', 5164.57, 12.39, '');
INSERT INTO `INT_tariffe_diritti` VALUES (784, 'DCOL', '1995-04-01', '2004-06-01', 'num', 25822.84, 15.49, '');
INSERT INTO `INT_tariffe_diritti` VALUES (785, 'DCOL', '1995-04-01', '2004-06-01', 'num', 51645.69, 18.59, '');
INSERT INTO `INT_tariffe_diritti` VALUES (786, 'DCOL', '1995-04-01', '2004-06-01', 'num', 103291.40, 24.79, '');
INSERT INTO `INT_tariffe_diritti` VALUES (787, 'DCOL', '1995-04-01', '2004-06-01', 'num', 258228.50, 30.99, '');
INSERT INTO `INT_tariffe_diritti` VALUES (788, 'DCOL', '1995-04-01', '2004-06-01', 'num', 516456.90, 34.09, '');
INSERT INTO `INT_tariffe_diritti` VALUES (789, 'DCOL', '1995-04-01', '2004-06-01', 'num', 1549371.00, 40.28, '');
INSERT INTO `INT_tariffe_diritti` VALUES (790, 'DCOL', '1995-04-01', '2004-06-01', 'num', 1549371.00, 46.48, '');
INSERT INTO `INT_tariffe_diritti` VALUES (791, 'DNTS', '1995-04-01', '2004-06-01', 'num', 129.11, 4.13, '');
INSERT INTO `INT_tariffe_diritti` VALUES (792, 'DNTS', '1995-04-01', '2004-06-01', 'num', 258.23, 5.16, '');
INSERT INTO `INT_tariffe_diritti` VALUES (793, 'DNTS', '1995-04-01', '2004-06-01', 'num', 516.46, 9.30, '');
INSERT INTO `INT_tariffe_diritti` VALUES (794, 'DNTS', '1995-04-01', '2004-06-01', 'num', 1549.37, 15.49, '');
INSERT INTO `INT_tariffe_diritti` VALUES (795, 'DNTS', '1995-04-01', '2004-06-01', 'num', 2582.28, 18.08, '');
INSERT INTO `INT_tariffe_diritti` VALUES (796, 'DNTS', '1995-04-01', '2004-06-01', 'num', 5164.57, 20.66, '');
INSERT INTO `INT_tariffe_diritti` VALUES (797, 'DNTS', '1995-04-01', '2004-06-01', 'num', 25822.84, 25.82, '');
INSERT INTO `INT_tariffe_diritti` VALUES (798, 'DNTS', '1995-04-01', '2004-06-01', 'num', 51645.69, 30.99, '');
INSERT INTO `INT_tariffe_diritti` VALUES (799, 'DNTS', '1995-04-01', '2004-06-01', 'num', 103291.40, 41.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (800, 'DNTS', '1995-04-01', '2004-06-01', 'num', 258228.50, 51.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (801, 'DNTS', '1995-04-01', '2004-06-01', 'num', 516456.90, 56.81, '');
INSERT INTO `INT_tariffe_diritti` VALUES (802, 'DNTS', '1995-04-01', '2004-06-01', 'num', 1549371.00, 67.14, '');
INSERT INTO `INT_tariffe_diritti` VALUES (803, 'DPRV', '0000-00-00', '1994-09-30', 'num', 516456.90, 5.16, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (804, 'DPRV', '0000-00-00', '1994-09-30', 'ind', 0.00, 5.16, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (805, 'DPRV', '0000-00-00', '1994-09-30', 'index', 0.00, 5.16, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (806, 'DPRV', '1994-10-01', '1995-03-31', 'num', 516456.90, 5.16, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (807, 'DPRV', '1994-10-01', '1995-03-31', 'ind', 0.00, 5.16, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (808, 'DPRV', '1994-10-01', '1995-03-31', 'index', 0.00, 5.16, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (809, 'DPRV', '1995-04-01', '2004-06-01', 'num', 516456.90, 5.16, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (810, 'DPRV', '1995-04-01', '2004-06-01', 'ind', 0.00, 5.16, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (811, 'DPRV', '1995-04-01', '2004-06-01', 'index', 0.00, 5.16, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (929, 'D6X2', '1994-10-01', '1995-03-31', 'num', 51645.69, 7.75, '');
INSERT INTO `INT_tariffe_diritti` VALUES (928, 'D6X2', '1994-10-01', '1995-03-31', 'num', 25822.84, 6.46, '');
INSERT INTO `INT_tariffe_diritti` VALUES (927, 'D6X2', '1994-10-01', '1995-03-31', 'num', 5164.57, 5.16, '');
INSERT INTO `INT_tariffe_diritti` VALUES (926, 'D6X2', '1994-10-01', '1995-03-31', 'num', 2582.28, 4.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (925, 'D6X2', '1994-10-01', '1995-03-31', 'num', 1549.37, 3.87, '');
INSERT INTO `INT_tariffe_diritti` VALUES (924, 'D6X2', '1994-10-01', '1995-03-31', 'num', 516.46, 2.45, '');
INSERT INTO `INT_tariffe_diritti` VALUES (923, 'D6X2', '1994-10-01', '1995-03-31', 'num', 258.23, 1.29, '');
INSERT INTO `INT_tariffe_diritti` VALUES (922, 'D6X2', '1994-10-01', '1995-03-31', 'num', 129.11, 1.29, '');
INSERT INTO `INT_tariffe_diritti` VALUES (921, 'D6X2', '0000-00-00', '1994-09-30', 'index', 0.00, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (920, 'D6X2', '0000-00-00', '1994-09-30', 'ind', 0.00, 5.16, '');
INSERT INTO `INT_tariffe_diritti` VALUES (919, 'D6X2', '0000-00-00', '1994-09-30', 'oltre', 0.00, 15.49, '');
INSERT INTO `INT_tariffe_diritti` VALUES (918, 'D6X2', '0000-00-00', '1994-09-30', 'num', 1549371.00, 13.43, '');
INSERT INTO `INT_tariffe_diritti` VALUES (917, 'D6X2', '0000-00-00', '1994-09-30', 'num', 516456.90, 11.36, '');
INSERT INTO `INT_tariffe_diritti` VALUES (916, 'D6X2', '0000-00-00', '1994-09-30', 'num', 258228.50, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (915, 'D6X2', '0000-00-00', '1994-09-30', 'num', 103291.40, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (914, 'D6X2', '0000-00-00', '1994-09-30', 'num', 51645.69, 6.20, '');
INSERT INTO `INT_tariffe_diritti` VALUES (913, 'D6X2', '0000-00-00', '1994-09-30', 'num', 25822.84, 5.16, '');
INSERT INTO `INT_tariffe_diritti` VALUES (912, 'D6X2', '0000-00-00', '1994-09-30', 'num', 5164.57, 4.13, '');
INSERT INTO `INT_tariffe_diritti` VALUES (911, 'D6X2', '0000-00-00', '1994-09-30', 'num', 2582.28, 3.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (910, 'D6X2', '0000-00-00', '1994-09-30', 'num', 1549.37, 3.10, '');
INSERT INTO `INT_tariffe_diritti` VALUES (909, 'D6X2', '0000-00-00', '1994-09-30', 'num', 516.46, 1.81, '');
INSERT INTO `INT_tariffe_diritti` VALUES (908, 'D6X2', '0000-00-00', '1994-09-30', 'num', 258.23, 1.03, '');
INSERT INTO `INT_tariffe_diritti` VALUES (907, 'D6X2', '0000-00-00', '1994-09-30', 'num', 129.11, 0.83, '');
INSERT INTO `INT_tariffe_diritti` VALUES (906, 'D082', '2004-06-02', '0000-00-00', 'index', 0.00, 0.00, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (905, 'D082', '2004-06-02', '0000-00-00', 'ind', 0.00, 0.00, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (904, 'D082', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (903, 'D082', '2004-06-02', '0000-00-00', 'num', 1600.00, 15.00, 'Q');
INSERT INTO `INT_tariffe_diritti` VALUES (902, 'D082', '2004-06-02', '0000-00-00', 'num', 600.00, 0.00, 'Q');

INSERT INTO `INT_tariffe_diritti` VALUES (901, 'DCOL', '2004-06-02', '0000-00-00', 'index', 0.00, 31.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (900, 'DCOL', '2004-06-02', '0000-00-00', 'ind', 0.00, 16.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (899, 'DCOL', '2004-06-02', '0000-00-00', 'oltre', 0.00, 66.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (898, 'DCOL', '2004-06-02', '0000-00-00', 'num', 5164600.00, 62.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (897, 'DCOL', '2004-06-02', '0000-00-00', 'num', 2582300.00, 58.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (896, 'DCOL', '2004-06-02', '0000-00-00', 'num', 1549400.00, 50.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (895, 'DCOL', '2004-06-02', '0000-00-00', 'num', 516500.00, 43.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (894, 'DCOL', '2004-06-02', '0000-00-00', 'num', 258300.00, 39.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (893, 'DCOL', '2004-06-02', '0000-00-00', 'num', 103300.00, 31.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (892, 'DCOL', '2004-06-02', '0000-00-00', 'num', 51700.00, 23.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (891, 'DCOL', '2004-06-02', '0000-00-00', 'num', 25900.00, 19.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (890, 'DCOL', '2004-06-02', '0000-00-00', 'num', 5200.00, 16.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (889, 'DCOL', '2004-06-02', '0000-00-00', 'num', 2600.00, 14.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (888, 'DCOL', '2004-06-02', '0000-00-00', 'num', 1600.00, 12.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (887, 'DCOL', '2004-06-02', '0000-00-00', 'num', 600.00, 7.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (886, 'D007', '2004-06-02', '0000-00-00', 'index', 0.00, 252.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (885, 'D007', '2004-06-02', '0000-00-00', 'ind', 0.00, 119.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (884, 'D007', '2004-06-02', '0000-00-00', 'oltre', 0.00, 252.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (883, 'D007', '2004-06-02', '0000-00-00', 'num', 5164600.00, 238.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (882, 'D007', '2004-06-02', '0000-00-00', 'num', 2582300.00, 223.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (881, 'D007', '2004-06-02', '0000-00-00', 'num', 1549400.00, 193.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (880, 'D007', '2004-06-02', '0000-00-00', 'num', 516500.00, 163.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (879, 'D007', '2004-06-02', '0000-00-00', 'num', 258300.00, 149.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (878, 'D007', '2004-06-02', '0000-00-00', 'num', 103300.00, 119.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (877, 'D007', '2004-06-02', '0000-00-00', 'num', 51700.00, 89.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (876, 'D007', '2004-06-02', '0000-00-00', 'num', 25900.00, 74.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (875, 'D007', '2004-06-02', '0000-00-00', 'num', 5200.00, 59.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (874, 'D007', '2004-06-02', '0000-00-00', 'num', 2600.00, 52.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (873, 'D007', '2004-06-02', '0000-00-00', 'num', 1600.00, 45.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (872, 'D007', '2004-06-02', '0000-00-00', 'num', 600.00, 26.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (871, 'D006', '2004-06-02', '0000-00-00', 'index', 0.00, 33.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (870, 'D006', '2004-06-02', '0000-00-00', 'ind', 0.00, 16.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (869, 'D006', '2004-06-02', '0000-00-00', 'oltre', 0.00, 33.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (868, 'D006', '2004-06-02', '0000-00-00', 'num', 5164600.00, 31.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (867, 'D006', '2004-06-02', '0000-00-00', 'num', 2582300.00, 29.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (866, 'D006', '2004-06-02', '0000-00-00', 'num', 1549400.00, 25.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (865, 'D006', '2004-06-02', '0000-00-00', 'num', 516500.00, 21.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (864, 'D006', '2004-06-02', '0000-00-00', 'num', 258300.00, 19.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (863, 'D006', '2004-06-02', '0000-00-00', 'num', 103300.00, 16.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (862, 'D006', '2004-06-02', '0000-00-00', 'num', 51700.00, 12.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (861, 'D006', '2004-06-02', '0000-00-00', 'num', 25900.00, 10.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (860, 'D006', '2004-06-02', '0000-00-00', 'num', 5200.00, 8.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (859, 'D006', '2004-06-02', '0000-00-00', 'num', 2600.00, 7.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (858, 'D006', '2004-06-02', '0000-00-00', 'num', 1600.00, 6.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (857, 'D006', '2004-06-02', '0000-00-00', 'num', 600.00, 3.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (856, 'D003', '2004-06-02', '0000-00-00', 'index', 0.00, 52.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (855, 'D003', '2004-06-02', '0000-00-00', 'ind', 0.00, 39.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (854, 'D003', '2004-06-02', '0000-00-00', 'oltre', 0.00, 110.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (853, 'D003', '2004-06-02', '0000-00-00', 'num', 5164600.00, 103.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (852, 'D003', '2004-06-02', '0000-00-00', 'num', 2582300.00, 97.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (851, 'D003', '2004-06-02', '0000-00-00', 'num', 1549400.00, 84.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (850, 'D003', '2004-06-02', '0000-00-00', 'num', 516500.00, 71.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (849, 'D003', '2004-06-02', '0000-00-00', 'num', 258300.00, 65.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (848, 'D003', '2004-06-02', '0000-00-00', 'num', 103300.00, 52.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (847, 'D003', '2004-06-02', '0000-00-00', 'num', 51700.00, 39.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (846, 'D003', '2004-06-02', '0000-00-00', 'num', 25900.00, 32.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (845, 'D003', '2004-06-02', '0000-00-00', 'num', 5200.00, 26.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (844, 'D003', '2004-06-02', '0000-00-00', 'num', 2600.00, 23.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (843, 'D003', '2004-06-02', '0000-00-00', 'num', 1600.00, 19.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (842, 'D003', '2004-06-02', '0000-00-00', 'num', 600.00, 11.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (841, 'D001', '2004-06-02', '0000-00-00', 'index', 0.00, 26.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (840, 'D001', '2004-06-02', '0000-00-00', 'ind', 0.00, 19.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (839, 'D001', '2004-06-02', '0000-00-00', 'oltre', 0.00, 55.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (838, 'D001', '2004-06-02', '0000-00-00', 'num', 5164600.00, 52.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (837, 'D001', '2004-06-02', '0000-00-00', 'num', 2582300.00, 48.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (836, 'D001', '2004-06-02', '0000-00-00', 'num', 1549400.00, 42.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (835, 'D001', '2004-06-02', '0000-00-00', 'num', 516500.00, 35.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (834, 'D001', '2004-06-02', '0000-00-00', 'num', 258300.00, 32.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (833, 'D001', '2004-06-02', '0000-00-00', 'num', 103300.00, 26.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (832, 'D001', '2004-06-02', '0000-00-00', 'num', 51700.00, 19.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (831, 'D001', '2004-06-02', '0000-00-00', 'num', 25900.00, 16.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (830, 'D001', '2004-06-02', '0000-00-00', 'num', 5200.00, 13.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (829, 'D001', '2004-06-02', '0000-00-00', 'num', 2600.00, 11.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (828, 'D001', '2004-06-02', '0000-00-00', 'num', 1600.00, 10.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (827, 'D001', '2004-06-02', '0000-00-00', 'num', 600.00, 6.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (826, 'D002', '2004-06-02', '0000-00-00', 'index', 0.00, 220.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (825, 'D002', '2004-06-02', '0000-00-00', 'ind', 0.00, 103.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (824, 'D002', '2004-06-02', '0000-00-00', 'oltre', 0.00, 220.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (823, 'D002', '2004-06-02', '0000-00-00', 'num', 5164600.00, 207.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (822, 'D002', '2004-06-02', '0000-00-00', 'num', 2582300.00, 194.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (821, 'D002', '2004-06-02', '0000-00-00', 'num', 1549400.00, 168.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (820, 'D002', '2004-06-02', '0000-00-00', 'num', 516500.00, 142.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (819, 'D002', '2004-06-02', '0000-00-00', 'num', 258300.00, 129.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (818, 'D002', '2004-06-02', '0000-00-00', 'num', 103300.00, 103.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (817, 'D002', '2004-06-02', '0000-00-00', 'num', 51700.00, 77.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (816, 'D002', '2004-06-02', '0000-00-00', 'num', 25900.00, 65.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (815, 'D002', '2004-06-02', '0000-00-00', 'num', 5200.00, 52.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (814, 'D002', '2004-06-02', '0000-00-00', 'num', 2600.00, 45.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (813, 'D002', '2004-06-02', '0000-00-00', 'num', 1600.00, 39.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (812, 'D002', '2004-06-02', '0000-00-00', 'num', 600.00, 23.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (930, 'D6X2', '1994-10-01', '1995-03-31', 'num', 103291.40, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (931, 'D6X2', '1994-10-01', '1995-03-31', 'num', 258228.50, 12.91, '');
INSERT INTO `INT_tariffe_diritti` VALUES (932, 'D6X2', '1994-10-01', '1995-03-31', 'num', 516456.90, 14.20, '');
INSERT INTO `INT_tariffe_diritti` VALUES (933, 'D6X2', '1994-10-01', '1995-03-31', 'num', 1549371.00, 16.78, '');
INSERT INTO `INT_tariffe_diritti` VALUES (934, 'D6X2', '1994-10-01', '1995-03-31', 'oltre', 0.00, 19.37, '');
INSERT INTO `INT_tariffe_diritti` VALUES (935, 'D6X2', '1994-10-01', '1995-03-31', 'ind', 0.00, 6.46, '');
INSERT INTO `INT_tariffe_diritti` VALUES (936, 'D6X2', '1994-10-01', '1995-03-31', 'index', 0.00, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (937, 'D6X2', '1995-04-01', '2004-06-01', 'num', 129.11, 1.55, '');
INSERT INTO `INT_tariffe_diritti` VALUES (938, 'D6X2', '1995-04-01', '2004-06-01', 'num', 258.23, 1.55, '');
INSERT INTO `INT_tariffe_diritti` VALUES (939, 'D6X2', '1995-04-01', '2004-06-01', 'num', 516.46, 3.10, '');
INSERT INTO `INT_tariffe_diritti` VALUES (940, 'D6X2', '1995-04-01', '2004-06-01', 'num', 1549.37, 4.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (941, 'D6X2', '1995-04-01', '2004-06-01', 'num', 2582.28, 5.68, '');
INSERT INTO `INT_tariffe_diritti` VALUES (942, 'D6X2', '1995-04-01', '2004-06-01', 'num', 5164.57, 6.20, '');
INSERT INTO `INT_tariffe_diritti` VALUES (943, 'D6X2', '1995-04-01', '2004-06-01', 'num', 25822.84, 7.75, '');
INSERT INTO `INT_tariffe_diritti` VALUES (944, 'D6X2', '1995-04-01', '2004-06-01', 'num', 51645.69, 9.30, '');
INSERT INTO `INT_tariffe_diritti` VALUES (945, 'D6X2', '1995-04-01', '2004-06-01', 'num', 103291.40, 12.39, '');
INSERT INTO `INT_tariffe_diritti` VALUES (946, 'D6X2', '1995-04-01', '2004-06-01', 'num', 258228.50, 15.49, '');
INSERT INTO `INT_tariffe_diritti` VALUES (947, 'D6X2', '1995-04-01', '2004-06-01', 'num', 516456.90, 17.04, '');
INSERT INTO `INT_tariffe_diritti` VALUES (948, 'D6X2', '1995-04-01', '2004-06-01', 'num', 1549371.00, 20.14, '');
INSERT INTO `INT_tariffe_diritti` VALUES (949, 'D6X2', '1995-04-01', '2004-06-01', 'oltre', 0.00, 23.24, '');
INSERT INTO `INT_tariffe_diritti` VALUES (950, 'D6X2', '1995-04-01', '2004-06-01', 'ind', 0.00, 7.75, '');
INSERT INTO `INT_tariffe_diritti` VALUES (951, 'D6X2', '1995-04-01', '2004-06-01', 'index', 0.00, 12.39, '');
INSERT INTO `INT_tariffe_diritti` VALUES (952, 'D6X2', '2004-06-02', '0000-00-00', 'num', 600.00, 6.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (953, 'D6X2', '2004-06-02', '0000-00-00', 'num', 1600.00, 12.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (954, 'D6X2', '2004-06-02', '0000-00-00', 'num', 2600.00, 14.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (955, 'D6X2', '2004-06-02', '0000-00-00', 'num', 5200.00, 16.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (956, 'D6X2', '2004-06-02', '0000-00-00', 'num', 25900.00, 20.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (957, 'D6X2', '2004-06-02', '0000-00-00', 'num', 51700.00, 24.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (958, 'D6X2', '2004-06-02', '0000-00-00', 'num', 103300.00, 32.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (959, 'D6X2', '2004-06-02', '0000-00-00', 'num', 258300.00, 38.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (960, 'D6X2', '2004-06-02', '0000-00-00', 'num', 516500.00, 42.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (961, 'D6X2', '2004-06-02', '0000-00-00', 'num', 1549400.00, 50.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (962, 'D6X2', '2004-06-02', '0000-00-00', 'num', 2582300.00, 58.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (963, 'D6X2', '2004-06-02', '0000-00-00', 'num', 5164600.00, 62.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (964, 'D6X2', '2004-06-02', '0000-00-00', 'oltre', 0.00, 66.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (965, 'D6X2', '2004-06-02', '0000-00-00', 'ind', 0.00, 32.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (966, 'D6X2', '2004-06-02', '0000-00-00', 'index', 0.00, 66.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (967, 'D142', '0000-00-00', '1994-09-30', 'num', 128.60, 1.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (968, 'D142', '0000-00-00', '1994-09-30', 'num', 258.23, 2.07, '');
INSERT INTO `INT_tariffe_diritti` VALUES (969, 'D142', '0000-00-00', '1994-09-30', 'num', 516.46, 3.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (970, 'D142', '0000-00-00', '1994-09-30', 'num', 1549.37, 6.20, '');
INSERT INTO `INT_tariffe_diritti` VALUES (971, 'D142', '0000-00-00', '1994-09-30', 'num', 2582.28, 7.23, '');
INSERT INTO `INT_tariffe_diritti` VALUES (972, 'D142', '0000-00-00', '1994-09-30', 'num', 5164.57, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (973, 'D142', '0000-00-00', '1994-09-30', 'num', 25822.84, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (974, 'D142', '0000-00-00', '1994-09-30', 'num', 51645.69, 12.39, '');
INSERT INTO `INT_tariffe_diritti` VALUES (975, 'D142', '0000-00-00', '1994-09-30', 'num', 103291.40, 16.53, '');
INSERT INTO `INT_tariffe_diritti` VALUES (976, 'D142', '0000-00-00', '1994-09-30', 'num', 258228.50, 20.66, '');
INSERT INTO `INT_tariffe_diritti` VALUES (977, 'D142', '0000-00-00', '1994-09-30', 'num', 516456.90, 22.72, '');
INSERT INTO `INT_tariffe_diritti` VALUES (978, 'D142', '0000-00-00', '1994-09-30', 'num', 1549371.00, 26.86, '');
INSERT INTO `INT_tariffe_diritti` VALUES (979, 'D142', '0000-00-00', '1994-09-30', 'oltre', 0.00, 30.99, '');
INSERT INTO `INT_tariffe_diritti` VALUES (980, 'D142', '0000-00-00', '1994-09-30', 'ind', 0.00, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (981, 'D142', '0000-00-00', '1994-09-30', 'index', 0.00, 30.99, '');
INSERT INTO `INT_tariffe_diritti` VALUES (982, 'D142', '1994-10-01', '1995-03-31', 'num', 129.11, 1.94, '');
INSERT INTO `INT_tariffe_diritti` VALUES (983, 'D142', '1994-10-01', '1995-03-31', 'num', 258.23, 2.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (984, 'D142', '1994-10-01', '1995-03-31', 'num', 516.46, 4.13, '');
INSERT INTO `INT_tariffe_diritti` VALUES (985, 'D142', '1994-10-01', '1995-03-31', 'num', 1549.37, 6.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (986, 'D142', '1994-10-01', '1995-03-31', 'num', 2582.28, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (987, 'D142', '1994-10-01', '1995-03-31', 'num', 5164.57, 9.30, '');
INSERT INTO `INT_tariffe_diritti` VALUES (988, 'D142', '1994-10-01', '1995-03-31', 'num', 25822.84, 11.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (989, 'D142', '1994-10-01', '1995-03-31', 'num', 51645.69, 13.94, '');
INSERT INTO `INT_tariffe_diritti` VALUES (990, 'D142', '1994-10-01', '1995-03-31', 'num', 103291.40, 18.59, '');
INSERT INTO `INT_tariffe_diritti` VALUES (991, 'D142', '1994-10-01', '1995-03-31', 'num', 258228.50, 23.24, '');
INSERT INTO `INT_tariffe_diritti` VALUES (992, 'D142', '1994-10-01', '1995-03-31', 'num', 516456.90, 25.56, '');
INSERT INTO `INT_tariffe_diritti` VALUES (993, 'D142', '1994-10-01', '1995-03-31', 'num', 1549371.00, 30.21, '');
INSERT INTO `INT_tariffe_diritti` VALUES (994, 'D142', '1994-10-01', '1995-03-31', 'oltre', 0.00, 34.86, '');
INSERT INTO `INT_tariffe_diritti` VALUES (995, 'D142', '1994-10-01', '1995-03-31', 'ind', 0.00, 11.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (996, 'D142', '1994-10-01', '1995-03-31', 'index', 0.00, 18.59, '');
INSERT INTO `INT_tariffe_diritti` VALUES (997, 'D142', '1995-04-01', '2004-06-01', 'num', 129.11, 2.07, '');
INSERT INTO `INT_tariffe_diritti` VALUES (998, 'D142', '1995-04-01', '2004-06-01', 'num', 258.23, 2.58, '');
INSERT INTO `INT_tariffe_diritti` VALUES (999, 'D142', '1995-04-01', '2004-06-01', 'num', 516.46, 4.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1000, 'D142', '1995-04-01', '2004-06-01', 'num', 1549.37, 7.75, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1001, 'D142', '1995-04-01', '2004-06-01', 'num', 2582.28, 9.30, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1002, 'D142', '1995-04-01', '2004-06-01', 'num', 5164.57, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1003, 'D142', '1995-04-01', '2004-06-01', 'num', 25822.84, 12.91, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1004, 'D142', '1995-04-01', '2004-06-01', 'num', 51645.69, 15.49, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1005, 'D142', '1995-04-01', '2004-06-01', 'num', 103291.40, 20.66, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1006, 'D142', '1995-04-01', '2004-06-01', 'num', 258228.50, 25.82, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1007, 'D142', '1995-04-01', '2004-06-01', 'num', 516456.90, 28.41, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1008, 'D142', '1995-04-01', '2004-06-01', 'num', 1549371.00, 33.57, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1009, 'D142', '1995-04-01', '2004-06-01', 'oltre', 0.00, 38.73, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1010, 'D142', '1995-04-01', '2004-06-01', 'ind', 0.00, 12.91, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1011, 'D142', '1995-04-01', '2004-06-01', 'index', 0.00, 20.66, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1012, 'D142', '2004-06-02', '0000-00-00', 'num', 600.00, 9.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1013, 'D142', '2004-06-02', '0000-00-00', 'num', 1600.00, 15.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1014, 'D142', '2004-06-02', '0000-00-00', 'num', 2600.00, 18.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1015, 'D142', '2004-06-02', '0000-00-00', 'num', 5200.00, 21.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1016, 'D142', '2004-06-02', '0000-00-00', 'num', 25900.00, 26.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1017, 'D142', '2004-06-02', '0000-00-00', 'num', 51700.00, 31.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1018, 'D142', '2004-06-02', '0000-00-00', 'num', 103300.00, 41.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1019, 'D142', '2004-06-02', '0000-00-00', 'num', 258300.00, 52.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1020, 'D142', '2004-06-02', '0000-00-00', 'num', 516500.00, 57.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1021, 'D142', '2004-06-02', '0000-00-00', 'num', 1549400.00, 67.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1022, 'D142', '2004-06-02', '0000-00-00', 'num', 2582300.00, 77.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1023, 'D142', '2004-06-02', '0000-00-00', 'num', 5164600.00, 83.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1024, 'D142', '2004-06-02', '0000-00-00', 'oltre', 0.00, 88.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1025, 'D142', '2004-06-02', '0000-00-00', 'ind', 0.00, 26.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1026, 'D142', '2004-06-02', '0000-00-00', 'index', 0.00, 88.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1027, 'D166', '0000-00-00', '1994-09-30', 'num', 128.60, 1.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1028, 'D166', '0000-00-00', '1994-09-30', 'num', 258.23, 2.07, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1029, 'D166', '0000-00-00', '1994-09-30', 'num', 516.46, 3.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1030, 'D166', '0000-00-00', '1994-09-30', 'num', 1549.37, 6.20, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1031, 'D166', '0000-00-00', '1994-09-30', 'num', 2582.28, 7.23, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1032, 'D166', '0000-00-00', '1994-09-30', 'num', 5164.57, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1033, 'D166', '0000-00-00', '1994-09-30', 'num', 25822.84, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1034, 'D166', '0000-00-00', '1994-09-30', 'num', 51645.69, 12.39, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1035, 'D166', '0000-00-00', '1994-09-30', 'num', 103291.40, 16.53, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1036, 'D166', '0000-00-00', '1994-09-30', 'num', 258228.50, 20.66, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1037, 'D166', '0000-00-00', '1994-09-30', 'num', 516456.90, 22.72, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1038, 'D166', '0000-00-00', '1994-09-30', 'num', 1549371.00, 26.86, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1039, 'D166', '0000-00-00', '1994-09-30', 'oltre', 0.00, 30.99, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1040, 'D166', '0000-00-00', '1994-09-30', 'ind', 0.00, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1041, 'D166', '0000-00-00', '1994-09-30', 'index', 0.00, 30.99, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1042, 'D166', '1994-10-01', '1995-03-31', 'num', 129.11, 1.94, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1043, 'D166', '1994-10-01', '1995-03-31', 'num', 258.23, 2.32, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1044, 'D166', '1994-10-01', '1995-03-31', 'num', 516.46, 4.13, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1045, 'D166', '1994-10-01', '1995-03-31', 'num', 1549.37, 6.97, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1046, 'D166', '1994-10-01', '1995-03-31', 'num', 2582.28, 8.26, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1047, 'D166', '1994-10-01', '1995-03-31', 'num', 5164.57, 9.30, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1048, 'D166', '1994-10-01', '1995-03-31', 'num', 25822.84, 11.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1049, 'D166', '1994-10-01', '1995-03-31', 'num', 51645.69, 13.94, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1050, 'D166', '1994-10-01', '1995-03-31', 'num', 103291.40, 18.59, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1051, 'D166', '1994-10-01', '1995-03-31', 'num', 258228.50, 23.24, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1052, 'D166', '1994-10-01', '1995-03-31', 'num', 516456.90, 25.56, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1053, 'D166', '1994-10-01', '1995-03-31', 'num', 1549371.00, 30.21, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1054, 'D166', '1994-10-01', '1995-03-31', 'oltre', 0.00, 34.86, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1055, 'D166', '1994-10-01', '1995-03-31', 'ind', 0.00, 11.62, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1056, 'D166', '1994-10-01', '1995-03-31', 'index', 0.00, 18.59, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1057, 'D166', '1995-04-01', '2004-06-01', 'num', 129.11, 2.07, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1058, 'D166', '1995-04-01', '2004-06-01', 'num', 258.23, 2.58, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1059, 'D166', '1995-04-01', '2004-06-01', 'num', 516.46, 4.65, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1060, 'D166', '1995-04-01', '2004-06-01', 'num', 1549.37, 7.75, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1061, 'D166', '1995-04-01', '2004-06-01', 'num', 2582.28, 9.30, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1062, 'D166', '1995-04-01', '2004-06-01', 'num', 5164.57, 10.33, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1063, 'D166', '1995-04-01', '2004-06-01', 'num', 25822.84, 12.91, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1064, 'D166', '1995-04-01', '2004-06-01', 'num', 51645.69, 15.49, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1065, 'D166', '1995-04-01', '2004-06-01', 'num', 103291.40, 20.66, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1066, 'D166', '1995-04-01', '2004-06-01', 'num', 258228.50, 25.82, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1067, 'D166', '1995-04-01', '2004-06-01', 'num', 516456.90, 28.41, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1068, 'D166', '1995-04-01', '2004-06-01', 'num', 1549371.00, 33.57, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1069, 'D166', '1995-04-01', '2004-06-01', 'oltre', 0.00, 38.73, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1070, 'D166', '1995-04-01', '2004-06-01', 'ind', 0.00, 12.91, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1071, 'D166', '1995-04-01', '2004-06-01', 'index', 0.00, 20.66, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1072, 'D166', '2004-06-02', '0000-00-00', 'num', 600.00, 11.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1073, 'D166', '2004-06-02', '0000-00-00', 'num', 1600.00, 19.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1074, 'D166', '2004-06-02', '0000-00-00', 'num', 2600.00, 23.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1075, 'D166', '2004-06-02', '0000-00-00', 'num', 5200.00, 26.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1076, 'D166', '2004-06-02', '0000-00-00', 'num', 25900.00, 32.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1077, 'D166', '2004-06-02', '0000-00-00', 'num', 51700.00, 39.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1078, 'D166', '2004-06-02', '0000-00-00', 'num', 103300.00, 52.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1079, 'D166', '2004-06-02', '0000-00-00', 'num', 258300.00, 65.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1080, 'D166', '2004-06-02', '0000-00-00', 'num', 516500.00, 71.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1081, 'D166', '2004-06-02', '0000-00-00', 'num', 1549400.00, 84.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1082, 'D166', '2004-06-02', '0000-00-00', 'num', 2582300.00, 97.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1083, 'D166', '2004-06-02', '0000-00-00', 'num', 5164600.00, 103.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1084, 'D166', '2004-06-02', '0000-00-00', 'oltre', 0.00, 110.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1085, 'D166', '2004-06-02', '0000-00-00', 'ind', 0.00, 52.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1086, 'D166', '2004-06-02', '0000-00-00', 'index', 0.00, 110.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1087, 'D167', '2004-06-02', '0000-00-00', 'num', 600.00, 11.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1088, 'D167', '2004-06-02', '0000-00-00', 'num', 1600.00, 19.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1089, 'D167', '2004-06-02', '0000-00-00', 'num', 2600.00, 23.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1090, 'D167', '2004-06-02', '0000-00-00', 'num', 5200.00, 26.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1091, 'D167', '2004-06-02', '0000-00-00', 'num', 25900.00, 32.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1092, 'D167', '2004-06-02', '0000-00-00', 'num', 51700.00, 39.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1093, 'D167', '2004-06-02', '0000-00-00', 'num', 103300.00, 52.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1094, 'D167', '2004-06-02', '0000-00-00', 'num', 258300.00, 65.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1095, 'D167', '2004-06-02', '0000-00-00', 'num', 516500.00, 71.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1096, 'D167', '2004-06-02', '0000-00-00', 'num', 1549400.00, 84.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1097, 'D167', '2004-06-02', '0000-00-00', 'num', 2582300.00, 97.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1098, 'D167', '2004-06-02', '0000-00-00', 'num', 5164600.00, 103.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1099, 'D167', '2004-06-02', '0000-00-00', 'oltre', 0.00, 110.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1100, 'D167', '2004-06-02', '0000-00-00', 'ind', 0.00, 39.00, '');
INSERT INTO `INT_tariffe_diritti` VALUES (1101, 'D167', '2004-06-02', '0000-00-00', 'index', 0.00, 52.00, '');
        

-- --------------------------------------------------------

-- 
-- Struttura della tabella `INT_tariffe_onorari`
-- 

DROP TABLE IF EXISTS `INT_tariffe_onorari`;
CREATE TABLE IF NOT EXISTS `INT_tariffe_onorari` (
  `taoid` bigint(20) NOT NULL auto_increment,
  `tao_codice` varchar(5) NOT NULL default '',
  `tao_inizio` date NOT NULL default '0000-00-00',
  `tao_fine` date NOT NULL default '0000-00-00',
  `tao_tipo` enum('num','oltre','ind','index') NOT NULL default 'num',
  `tao_fino` decimal(15,2) NOT NULL default '0.00',
  `tao_min` decimal(15,2) NOT NULL default '0.00',
  `tao_min_perc` decimal(10,3) NOT NULL default '0.000',
  `tao_min_t` char(1) NOT NULL default '',
  `tao_max` decimal(15,2) NOT NULL default '0.00',
  `tao_max_perc` decimal(10,3) NOT NULL default '0.000',
  `tao_max_t` char(1) NOT NULL default '',
  PRIMARY KEY  (`taoid`),
  KEY `tao_codice` (`tao_codice`),
  KEY `tao_inizio` (`tao_inizio`),
  KEY `tao_fine` (`tao_fine`),
  KEY `tao_fino` (`tao_fino`)
) TYPE=MyISAM;



INSERT INTO `INT_tariffe_onorari` VALUES (1, '0001', '1900-01-01', '1949-12-31', 'num', 129.11, 41.32, 0.000, '', 77.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2, '0001', '1900-01-01', '1949-12-31', 'num', 258.23, 61.97, 0.000, '', 123.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3, '0001', '1900-01-01', '1949-12-31', 'num', 516.46, 77.47, 0.000, '', 154.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (4, '0001', '1900-01-01', '1949-12-31', 'num', 129.11, 41.32, 0.000, '', 77.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (5, '0001', '1900-01-01', '1949-12-31', 'num', 258.23, 61.97, 0.000, '', 123.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (6, '0001', '1900-01-01', '1949-12-31', 'num', 516.46, 77.47, 0.000, '', 154.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (7, '0001', '1950-01-01', '1994-09-30', 'num', 129.11, 32.54, 0.000, '', 64.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (8, '0001', '1950-01-01', '1994-09-30', 'num', 258.23, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (9, '0001', '1950-01-01', '1994-09-30', 'num', 516.46, 64.56, 0.000, '', 129.11, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (10, '0001', '1994-10-01', '1995-03-31', 'num', 129.11, 38.73, 0.000, '', 72.30, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (11, '0001', '1994-10-01', '1995-03-31', 'num', 258.23, 56.81, 0.000, '', 113.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (12, '0001', '1994-10-01', '1995-03-31', 'num', 516.46, 72.30, 0.000, '', 144.61, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (13, '0001', '1995-04-01', '2004-06-01', 'num', 129.11, 41.32, 0.000, '', 77.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (14, '0001', '1995-04-01', '2004-06-01', 'num', 258.23, 61.97, 0.000, '', 123.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (15, '0001', '1995-04-01', '2004-06-01', 'num', 516.46, 77.47, 0.000, '', 154.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (16, '0002', '1950-01-01', '1994-09-30', 'num', 1549.37, 35.12, 0.000, '', 116.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (17, '0002', '1950-01-01', '1994-09-30', 'num', 2582.28, 40.80, 0.000, '', 133.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (18, '0002', '1994-10-01', '1995-03-31', 'num', 1549.37, 41.32, 0.000, '', 116.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (19, '0002', '1994-10-01', '1995-03-31', 'num', 2582.28, 51.65, 0.000, '', 134.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (20, '0002', '1995-04-01', '2004-06-01', 'num', 1549.37, 43.90, 0.000, '', 116.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (21, '0002', '1995-04-01', '2004-06-01', 'num', 2582.28, 59.39, 0.000, '', 134.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (22, '0003', '1950-01-01', '1994-09-30', 'num', 1549.37, 17.56, 0.000, '', 58.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (23, '0003', '1950-01-01', '1994-09-30', 'num', 2582.28, 20.66, 0.000, '', 67.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (24, '0003', '1994-10-01', '1995-03-31', 'num', 1549.37, 20.66, 0.000, '', 58.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (25, '0003', '1994-10-01', '1995-03-31', 'num', 2582.28, 25.82, 0.000, '', 67.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (26, '0003', '1995-04-01', '2004-06-01', 'num', 1549.37, 23.24, 0.000, '', 58.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (27, '0003', '1995-04-01', '2004-06-01', 'num', 2582.28, 30.99, 0.000, '', 67.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (28, '0004', '1950-01-01', '1994-09-30', 'num', 1549.37, 14.46, 0.000, '', 29.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (29, '0004', '1950-01-01', '1994-09-30', 'num', 2582.28, 17.04, 0.000, '', 34.60, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (30, '0004', '1994-10-01', '1995-03-31', 'num', 1549.37, 18.08, 0.000, '', 29.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (31, '0004', '1994-10-01', '1995-03-31', 'num', 2582.28, 15.49, 0.000, '', 36.15, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (32, '0004', '1995-04-01', '2004-06-01', 'num', 1549.37, 18.08, 0.000, '', 29.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (33, '0004', '1995-04-01', '2004-06-01', 'num', 2582.28, 15.49, 0.000, '', 36.15, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (34, '0005', '1950-01-01', '1994-09-30', 'num', 1549.37, 29.95, 0.000, '', 92.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (35, '0005', '1950-01-01', '1994-09-30', 'num', 2582.28, 34.60, 0.000, '', 106.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (36, '0005', '1994-10-01', '1995-03-31', 'num', 1549.37, 33.57, 0.000, '', 92.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (37, '0005', '1994-10-01', '1995-03-31', 'num', 2582.28, 40.28, 0.000, '', 108.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (38, '0005', '1995-04-01', '2004-06-01', 'num', 1549.37, 36.15, 0.000, '', 92.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (39, '0005', '1995-04-01', '2004-06-01', 'num', 2582.28, 46.48, 0.000, '', 108.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (40, '0006', '1950-01-01', '1994-09-30', 'num', 1549.37, 11.88, 0.000, '', 22.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (41, '0006', '1950-01-01', '1994-09-30', 'num', 2582.28, 13.94, 0.000, '', 26.34, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (42, '0006', '1994-10-01', '1995-03-31', 'num', 1549.37, 13.94, 0.000, '', 22.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (43, '0006', '1994-10-01', '1995-03-31', 'num', 2582.28, 12.91, 0.000, '', 27.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (44, '0006', '1995-04-01', '2004-06-01', 'num', 1549.37, 15.49, 0.000, '', 22.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (45, '0006', '1995-04-01', '2004-06-01', 'num', 2582.28, 18.08, 0.000, '', 28.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (46, '0007', '1950-01-01', '1994-09-30', 'num', 1549.37, 22.72, 0.000, '', 92.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (47, '0007', '1950-01-01', '1994-09-30', 'num', 2582.28, 26.34, 0.000, '', 106.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (48, '0007', '1994-10-01', '1995-03-31', 'num', 1549.37, 25.82, 0.000, '', 92.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (49, '0007', '1994-10-01', '1995-03-31', 'num', 2582.28, 38.73, 0.000, '', 108.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (50, '0007', '1995-04-01', '2004-06-01', 'num', 1549.37, 28.41, 0.000, '', 92.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (51, '0007', '1995-04-01', '2004-06-01', 'num', 2582.28, 46.48, 0.000, '', 108.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (52, '0008', '1950-01-01', '1994-09-30', 'num', 1549.37, 97.09, 0.000, '', 226.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (53, '0008', '1950-01-01', '1994-09-30', 'num', 2582.28, 112.07, 0.000, '', 260.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (54, '0008', '1994-10-01', '1995-03-31', 'num', 1549.37, 108.46, 0.000, '', 226.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (55, '0008', '1994-10-01', '1995-03-31', 'num', 2582.28, 118.79, 0.000, '', 260.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (56, '0008', '1995-04-01', '2004-06-01', 'num', 1549.37, 108.46, 0.000, '', 226.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (57, '0008', '1995-04-01', '2004-06-01', 'num', 2582.28, 118.79, 0.000, '', 260.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (58, '0009', '1950-01-01', '1994-09-30', 'num', 1549.37, 29.95, 0.000, '', 118.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (59, '0009', '1950-01-01', '1994-09-30', 'num', 2582.28, 34.60, 0.000, '', 136.86, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (60, '0009', '1994-10-01', '1995-03-31', 'num', 1549.37, 33.57, 0.000, '', 118.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (61, '0009', '1994-10-01', '1995-03-31', 'num', 2582.28, 49.06, 0.000, '', 136.86, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (62, '0009', '1995-04-01', '2004-06-01', 'num', 1549.37, 36.15, 0.000, '', 118.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (63, '0009', '1995-04-01', '2004-06-01', 'num', 2582.28, 59.39, 0.000, '', 136.86, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (64, '001', '1900-01-01', '1949-12-31', 'num', 129.11, 41.32, 0.000, '', 77.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (65, '001', '1900-01-01', '1949-12-31', 'num', 258.23, 61.97, 0.000, '', 123.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (66, '001', '1900-01-01', '1949-12-31', 'num', 516.46, 77.47, 0.000, '', 154.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (67, '0010', '1950-01-01', '1994-09-30', 'num', 1549.37, 24.79, 0.000, '', 92.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (68, '0010', '1950-01-01', '1994-09-30', 'num', 2582.28, 28.92, 0.000, '', 106.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (69, '0010', '1994-10-01', '1995-03-31', 'num', 1549.37, 28.41, 0.000, '', 92.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (70, '0010', '1994-10-01', '1995-03-31', 'num', 2582.28, 38.73, 0.000, '', 108.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (71, '0010', '1995-04-01', '2004-06-01', 'num', 1549.37, 30.99, 0.000, '', 92.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (72, '0010', '1995-04-01', '2004-06-01', 'num', 2582.28, 46.48, 0.000, '', 108.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (73, '0011', '0000-00-00', '1994-09-30', 'num', 5164.57, 50.61, 0.000, '', 167.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (74, '0011', '0000-00-00', '1994-09-30', 'num', 25822.84, 75.92, 0.000, '', 335.70, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (75, '0011', '0000-00-00', '1994-09-30', 'num', 51645.69, 114.14, 0.000, '', 671.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (76, '0011', '0000-00-00', '1994-09-30', 'num', 103291.40, 151.84, 0.000, '', 1007.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (77, '0011', '0000-00-00', '1994-09-30', 'num', 258228.50, 190.06, 0.000, '', 1342.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (78, '0011', '0000-00-00', '1994-09-30', 'num', 387342.70, 227.76, 0.000, '', 1678.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (79, '0011', '0000-00-00', '1994-09-30', 'num', 516456.90, 288.18, 0.000, '', 2014.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (80, '0011', '0000-00-00', '1994-09-30', 'num', 1549371.00, 379.60, 0.000, '', 2685.58, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (81, '0011', '0000-00-00', '1994-09-30', 'num', 2582285.00, 531.43, 0.000, '', 3356.97, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (82, '0011', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.206, 'C', 0.00, 1.300, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (83, '0011', '0000-00-00', '1994-09-30', 'ind', 0.00, 57.33, 0.000, '', 671.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (84, '0011', '0000-00-00', '1994-09-30', 'index', 0.00, 190.06, 0.000, '', 2014.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (85, '0011', '1994-10-01', '1995-03-31', 'num', 5164.57, 56.29, 0.000, '', 167.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (86, '0011', '1994-10-01', '1995-03-31', 'num', 25822.84, 80.57, 0.000, '', 335.70, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (87, '0011', '1994-10-01', '1995-03-31', 'num', 51645.69, 140.99, 0.000, '', 671.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (88, '0011', '1994-10-01', '1995-03-31', 'num', 103291.40, 243.77, 0.000, '', 1007.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (89, '0011', '1994-10-01', '1995-03-31', 'num', 258228.50, 347.06, 0.000, '', 1342.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (90, '0011', '1994-10-01', '1995-03-31', 'num', 387342.70, 449.83, 0.000, '', 1678.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (91, '0011', '1994-10-01', '1995-03-31', 'num', 516456.90, 571.72, 0.000, '', 2014.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (92, '0011', '1994-10-01', '1995-03-31', 'num', 1549371.00, 693.60, 0.000, '', 2685.58, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (93, '0011', '1994-10-01', '1995-03-31', 'num', 2582285.00, 937.37, 0.000, '', 3356.97, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (94, '0011', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.363, 'C', 0.00, 1.300, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (95, '0011', '1994-10-01', '1995-03-31', 'ind', 0.00, 80.57, 0.000, '', 1007.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (96, '0011', '1994-10-01', '1995-03-31', 'index', 0.00, 140.99, 0.000, '', 2014.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (97, '0011', '1995-04-01', '2004-06-01', 'num', 5164.57, 61.97, 0.000, '', 167.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (98, '0011', '1995-04-01', '2004-06-01', 'num', 25822.84, 85.22, 0.000, '', 335.70, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (99, '0011', '1995-04-01', '2004-06-01', 'num', 51645.69, 167.85, 0.000, '', 671.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (100, '0011', '1995-04-01', '2004-06-01', 'num', 103291.40, 335.70, 0.000, '', 1007.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (101, '0011', '1995-04-01', '2004-06-01', 'num', 258228.50, 503.55, 0.000, '', 1342.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (102, '0011', '1995-04-01', '2004-06-01', 'num', 387342.70, 671.39, 0.000, '', 1678.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (103, '0011', '1995-04-01', '2004-06-01', 'num', 516456.90, 839.24, 0.000, '', 2014.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (104, '0011', '1995-04-01', '2004-06-01', 'num', 1549371.00, 1007.09, 0.000, '', 2685.58, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (105, '0011', '1995-04-01', '2004-06-01', 'num', 2582285.00, 1342.79, 0.000, '', 3356.97, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (106, '0011', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.520, 'C', 0.00, 1.300, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (107, '0011', '1995-04-01', '2004-06-01', 'ind', 0.00, 85.22, 0.000, '', 1007.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (108, '0011', '1995-04-01', '2004-06-01', 'index', 0.00, 167.85, 0.000, '', 2014.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (109, '0012', '0000-00-00', '1994-09-30', 'num', 5164.57, 25.31, 0.000, '', 84.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (110, '0012', '0000-00-00', '1994-09-30', 'num', 25822.84, 38.22, 0.000, '', 168.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (111, '0012', '0000-00-00', '1994-09-30', 'num', 51645.69, 57.33, 0.000, '', 336.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (112, '0012', '0000-00-00', '1994-09-30', 'num', 103291.40, 76.44, 0.000, '', 505.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (113, '0012', '0000-00-00', '1994-09-30', 'num', 258228.50, 95.54, 0.000, '', 673.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (114, '0012', '0000-00-00', '1994-09-30', 'num', 387342.70, 114.65, 0.000, '', 841.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (115, '0012', '0000-00-00', '1994-09-30', 'num', 516456.90, 152.87, 0.000, '', 1010.19, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (116, '0012', '0000-00-00', '1994-09-30', 'num', 1549371.00, 191.09, 0.000, '', 1346.92, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (117, '0012', '0000-00-00', '1994-09-30', 'num', 2582285.00, 267.52, 0.000, '', 1683.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (118, '0012', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.104, 'C', 0.00, 0.652, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (119, '0012', '0000-00-00', '1994-09-30', 'ind', 0.00, 28.92, 0.000, '', 336.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (120, '0012', '0000-00-00', '1994-09-30', 'index', 0.00, 95.54, 0.000, '', 1010.19, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (121, '0012', '1994-10-01', '1995-03-31', 'num', 5164.57, 28.41, 0.000, '', 84.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (122, '0012', '1994-10-01', '1995-03-31', 'num', 25822.84, 41.32, 0.000, '', 169.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (123, '0012', '1994-10-01', '1995-03-31', 'num', 51645.69, 72.30, 0.000, '', 343.96, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (124, '0012', '1994-10-01', '1995-03-31', 'num', 103291.40, 123.95, 0.000, '', 511.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (125, '0012', '1994-10-01', '1995-03-31', 'num', 258228.50, 178.18, 0.000, '', 681.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (126, '0012', '1994-10-01', '1995-03-31', 'num', 387342.70, 340.86, 0.000, '', 846.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (127, '0012', '1994-10-01', '1995-03-31', 'num', 516456.90, 340.86, 0.000, '', 1016.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (128, '0012', '1994-10-01', '1995-03-31', 'num', 1549371.00, 351.19, 0.000, '', 1355.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (129, '0012', '1994-10-01', '1995-03-31', 'num', 2582285.00, 475.14, 0.000, '', 1704.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (130, '0012', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.184, 'C', 0.00, 0.656, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (131, '0012', '1994-10-01', '1995-03-31', 'ind', 0.00, 41.32, 0.000, '', 511.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (132, '0012', '1994-10-01', '1995-03-31', 'index', 0.00, 71.27, 0.000, '', 1016.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (133, '0012', '1995-04-01', '2004-06-01', 'num', 5164.57, 30.99, 0.000, '', 84.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (134, '0012', '1995-04-01', '2004-06-01', 'num', 25822.84, 43.90, 0.000, '', 170.43, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (135, '0012', '1995-04-01', '2004-06-01', 'num', 51645.69, 85.22, 0.000, '', 340.86, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (136, '0012', '1995-04-01', '2004-06-01', 'num', 103291.40, 170.43, 0.000, '', 511.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (137, '0012', '1995-04-01', '2004-06-01', 'num', 258228.50, 255.65, 0.000, '', 681.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (138, '0012', '1995-04-01', '2004-06-01', 'num', 387342.70, 340.86, 0.000, '', 852.15, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (139, '0012', '1995-04-01', '2004-06-01', 'num', 516456.90, 426.08, 0.000, '', 1022.58, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (140, '0012', '1995-04-01', '2004-06-01', 'num', 1549371.00, 511.29, 0.000, '', 1363.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (141, '0012', '1995-04-01', '2004-06-01', 'num', 2582285.00, 681.72, 0.000, '', 1704.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (142, '0012', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.264, 'C', 0.00, 0.660, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (143, '0012', '1995-04-01', '2004-06-01', 'ind', 0.00, 43.90, 0.000, '', 511.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (144, '0012', '1995-04-01', '2004-06-01', 'index', 0.00, 85.22, 0.000, '', 1022.58, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (145, '0013', '0000-00-00', '1994-09-30', 'num', 5164.57, 20.66, 0.000, '', 43.38, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (146, '0013', '0000-00-00', '1994-09-30', 'num', 25822.84, 30.99, 0.000, '', 86.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (147, '0013', '0000-00-00', '1994-09-30', 'num', 51645.69, 46.48, 0.000, '', 173.53, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (148, '0013', '0000-00-00', '1994-09-30', 'num', 103291.40, 61.97, 0.000, '', 260.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (149, '0013', '0000-00-00', '1994-09-30', 'num', 258228.50, 77.47, 0.000, '', 347.06, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (150, '0013', '0000-00-00', '1994-09-30', 'num', 387342.70, 92.96, 0.000, '', 433.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (151, '0013', '0000-00-00', '1994-09-30', 'num', 516456.90, 123.95, 0.000, '', 520.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (152, '0013', '0000-00-00', '1994-09-30', 'num', 1549371.00, 154.94, 0.000, '', 694.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (153, '0013', '0000-00-00', '1994-09-30', 'num', 2582285.00, 216.91, 0.000, '', 867.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (154, '0013', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.084, 'C', 0.00, 0.336, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (155, '0013', '0000-00-00', '1994-09-30', 'ind', 0.00, 23.24, 0.000, '', 173.53, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (156, '0013', '0000-00-00', '1994-09-30', 'index', 0.00, 77.47, 0.000, '', 520.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (157, '0013', '1994-10-01', '1995-03-31', 'num', 5164.57, 23.24, 0.000, '', 43.38, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (158, '0013', '1994-10-01', '1995-03-31', 'num', 25822.84, 23.24, 0.000, '', 87.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (159, '0013', '1994-10-01', '1995-03-31', 'num', 51645.69, 43.90, 0.000, '', 174.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (160, '0013', '1994-10-01', '1995-03-31', 'num', 103291.40, 74.89, 0.000, '', 261.84, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (161, '0013', '1994-10-01', '1995-03-31', 'num', 258228.50, 104.84, 0.000, '', 349.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (162, '0013', '1994-10-01', '1995-03-31', 'num', 387342.70, 134.28, 0.000, '', 436.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (163, '0013', '1994-10-01', '1995-03-31', 'num', 516456.90, 171.98, 0.000, '', 523.69, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (164, '0013', '1994-10-01', '1995-03-31', 'num', 1549371.00, 209.17, 0.000, '', 698.25, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (165, '0013', '1994-10-01', '1995-03-31', 'num', 2582285.00, 284.05, 0.000, '', 872.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (166, '0013', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.110, 'C', 0.00, 0.338, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (167, '0013', '1994-10-01', '1995-03-31', 'ind', 0.00, 23.24, 0.000, '', 261.84, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (168, '0013', '1994-10-01', '1995-03-31', 'index', 0.00, 43.90, 0.000, '', 523.69, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (169, '0013', '1995-04-01', '2004-06-01', 'num', 5164.57, 25.82, 0.000, '', 43.38, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (170, '0013', '1995-04-01', '2004-06-01', 'num', 25822.84, 23.24, 0.000, '', 87.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (171, '0013', '1995-04-01', '2004-06-01', 'num', 51645.69, 43.90, 0.000, '', 175.60, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (172, '0013', '1995-04-01', '2004-06-01', 'num', 103291.40, 87.80, 0.000, '', 263.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (173, '0013', '1995-04-01', '2004-06-01', 'num', 258228.50, 131.70, 0.000, '', 351.19, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (174, '0013', '1995-04-01', '2004-06-01', 'num', 387342.70, 175.60, 0.000, '', 438.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (175, '0013', '1995-04-01', '2004-06-01', 'num', 516456.90, 219.49, 0.000, '', 526.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (176, '0013', '1995-04-01', '2004-06-01', 'num', 1549371.00, 263.39, 0.000, '', 702.38, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (177, '0013', '1995-04-01', '2004-06-01', 'num', 2582285.00, 351.19, 0.000, '', 877.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (178, '0013', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.136, 'C', 0.00, 0.340, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (179, '0013', '1995-04-01', '2004-06-01', 'ind', 0.00, 23.24, 0.000, '', 263.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (180, '0013', '1995-04-01', '2004-06-01', 'index', 0.00, 43.90, 0.000, '', 526.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (181, '0014', '0000-00-00', '1994-09-30', 'num', 5164.57, 43.38, 0.000, '', 133.25, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (182, '0014', '0000-00-00', '1994-09-30', 'num', 25822.84, 65.07, 0.000, '', 266.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (183, '0014', '0000-00-00', '1994-09-30', 'num', 51645.69, 97.61, 0.000, '', 532.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (184, '0014', '0000-00-00', '1994-09-30', 'num', 103291.40, 130.15, 0.000, '', 799.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (185, '0014', '0000-00-00', '1994-09-30', 'num', 258228.50, 162.68, 0.000, '', 1065.97, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (186, '0014', '0000-00-00', '1994-09-30', 'num', 387342.70, 195.22, 0.000, '', 1332.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (187, '0014', '0000-00-00', '1994-09-30', 'num', 516456.90, 260.29, 0.000, '', 1598.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (188, '0014', '0000-00-00', '1994-09-30', 'num', 1549371.00, 325.37, 0.000, '', 2131.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (189, '0014', '0000-00-00', '1994-09-30', 'num', 2582285.00, 455.51, 0.000, '', 2664.92, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (190, '0014', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.176, 'C', 0.00, 1.032, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (191, '0014', '0000-00-00', '1994-09-30', 'ind', 0.00, 49.06, 0.000, '', 532.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (192, '0014', '0000-00-00', '1994-09-30', 'index', 0.00, 162.68, 0.000, '', 1598.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (193, '0014', '1994-10-01', '1995-03-31', 'num', 5164.57, 49.06, 0.000, '', 133.25, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (194, '0014', '1994-10-01', '1995-03-31', 'num', 25822.84, 67.14, 0.000, '', 268.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (195, '0014', '1994-10-01', '1995-03-31', 'num', 51645.69, 116.20, 0.000, '', 537.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (196, '0014', '1994-10-01', '1995-03-31', 'num', 103291.40, 201.42, 0.000, '', 805.67, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (197, '0014', '1994-10-01', '1995-03-31', 'num', 258228.50, 284.05, 0.000, '', 1074.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (198, '0014', '1994-10-01', '1995-03-31', 'num', 387342.70, 418.33, 0.000, '', 1342.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (199, '0014', '1994-10-01', '1995-03-31', 'num', 516456.90, 467.39, 0.000, '', 1611.35, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (200, '0014', '1994-10-01', '1995-03-31', 'num', 1549371.00, 565.52, 0.000, '', 2148.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (201, '0014', '1994-10-01', '1995-03-31', 'num', 2582285.00, 766.94, 0.000, '', 2685.58, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (202, '0014', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.296, 'C', 0.00, 1.036, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (203, '0014', '1994-10-01', '1995-03-31', 'ind', 0.00, 67.14, 0.000, '', 805.67, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (204, '0014', '1994-10-01', '1995-03-31', 'index', 0.00, 116.20, 0.000, '', 1605.15, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (205, '0014', '1995-04-01', '2004-06-01', 'num', 5164.57, 54.23, 0.000, '', 133.25, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (206, '0014', '1995-04-01', '2004-06-01', 'num', 25822.84, 67.14, 0.000, '', 268.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (207, '0014', '1995-04-01', '2004-06-01', 'num', 51645.69, 134.28, 0.000, '', 537.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (208, '0014', '1995-04-01', '2004-06-01', 'num', 103291.40, 268.56, 0.000, '', 805.67, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (209, '0014', '1995-04-01', '2004-06-01', 'num', 258228.50, 402.84, 0.000, '', 1074.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (210, '0014', '1995-04-01', '2004-06-01', 'num', 387342.70, 537.12, 0.000, '', 1342.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (211, '0014', '1995-04-01', '2004-06-01', 'num', 516456.90, 671.39, 0.000, '', 1611.35, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (212, '0014', '1995-04-01', '2004-06-01', 'num', 1549371.00, 805.67, 0.000, '', 2148.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (213, '0014', '1995-04-01', '2004-06-01', 'num', 2582285.00, 1074.23, 0.000, '', 2685.58, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (214, '0014', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.416, 'C', 0.00, 1.040, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (215, '0014', '1995-04-01', '2004-06-01', 'ind', 0.00, 67.14, 0.000, '', 805.67, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (216, '0014', '1995-04-01', '2004-06-01', 'index', 0.00, 134.28, 0.000, '', 1611.35, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (217, '0015', '0000-00-00', '1994-09-30', 'num', 5164.57, 17.04, 0.000, '', 33.05, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (218, '0015', '0000-00-00', '1994-09-30', 'num', 25822.84, 25.82, 0.000, '', 66.11, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (219, '0015', '0000-00-00', '1994-09-30', 'num', 51645.69, 38.73, 0.000, '', 132.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (220, '0015', '0000-00-00', '1994-09-30', 'num', 103291.40, 51.65, 0.000, '', 198.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (221, '0015', '0000-00-00', '1994-09-30', 'num', 258228.50, 64.56, 0.000, '', 264.43, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (222, '0015', '0000-00-00', '1994-09-30', 'num', 387342.70, 77.47, 0.000, '', 330.53, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (223, '0015', '0000-00-00', '1994-09-30', 'num', 516456.90, 103.29, 0.000, '', 396.64, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (224, '0015', '0000-00-00', '1994-09-30', 'num', 1549371.00, 129.11, 0.000, '', 528.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (225, '0015', '0000-00-00', '1994-09-30', 'num', 2582285.00, 180.76, 0.000, '', 661.06, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (226, '0015', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.070, 'C', 0.00, 0.256, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (227, '0015', '0000-00-00', '1994-09-30', 'ind', 0.00, 19.63, 0.000, '', 132.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (228, '0015', '0000-00-00', '1994-09-30', 'index', 0.00, 64.56, 0.000, '', 396.64, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (229, '0015', '1994-10-01', '1995-03-31', 'num', 5164.57, 19.11, 0.000, '', 33.05, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (230, '0015', '1994-10-01', '1995-03-31', 'num', 25822.84, 18.08, 0.000, '', 67.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (231, '0015', '1994-10-01', '1995-03-31', 'num', 51645.69, 33.57, 0.000, '', 134.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (232, '0015', '1994-10-01', '1995-03-31', 'num', 103291.40, 59.39, 0.000, '', 201.42, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (233, '0015', '1994-10-01', '1995-03-31', 'num', 258228.50, 82.63, 0.000, '', 268.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (234, '0015', '1994-10-01', '1995-03-31', 'num', 387342.70, 105.87, 0.000, '', 335.70, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (235, '0015', '1994-10-01', '1995-03-31', 'num', 516456.90, 139.44, 0.000, '', 402.84, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (236, '0015', '1994-10-01', '1995-03-31', 'num', 1549371.00, 165.27, 0.000, '', 537.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (237, '0015', '1994-10-01', '1995-03-31', 'num', 2582285.00, 224.66, 0.000, '', 671.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (238, '0015', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.870, 'C', 0.00, 0.258, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (239, '0015', '1994-10-01', '1995-03-31', 'ind', 0.00, 18.08, 0.000, '', 201.42, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (240, '0015', '1994-10-01', '1995-03-31', 'index', 0.00, 33.57, 0.000, '', 399.74, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (241, '0015', '1995-04-01', '2004-06-01', 'num', 5164.57, 20.66, 0.000, '', 33.05, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (242, '0015', '1995-04-01', '2004-06-01', 'num', 25822.84, 18.08, 0.000, '', 67.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (243, '0015', '1995-04-01', '2004-06-01', 'num', 51645.69, 33.57, 0.000, '', 134.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (244, '0015', '1995-04-01', '2004-06-01', 'num', 103291.40, 67.14, 0.000, '', 201.42, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (245, '0015', '1995-04-01', '2004-06-01', 'num', 258228.50, 100.71, 0.000, '', 268.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (246, '0015', '1995-04-01', '2004-06-01', 'num', 387342.70, 134.28, 0.000, '', 335.70, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (247, '0015', '1995-04-01', '2004-06-01', 'num', 516456.90, 167.85, 0.000, '', 402.84, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (248, '0015', '1995-04-01', '2004-06-01', 'num', 1549371.00, 201.42, 0.000, '', 537.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (249, '0015', '1995-04-01', '2004-06-01', 'num', 2582285.00, 268.56, 0.000, '', 671.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (250, '0015', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.104, 'C', 0.00, 0.260, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (251, '0015', '1995-04-01', '2004-06-01', 'ind', 0.00, 18.08, 0.000, '', 201.42, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (252, '0015', '1995-04-01', '2004-06-01', 'index', 0.00, 33.57, 0.000, '', 402.84, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (253, '0016', '0000-00-00', '1994-09-30', 'num', 5164.57, 33.05, 0.000, '', 133.25, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (254, '0016', '0000-00-00', '1994-09-30', 'num', 25822.84, 49.58, 0.000, '', 266.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (255, '0016', '0000-00-00', '1994-09-30', 'num', 51645.69, 74.37, 0.000, '', 532.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (256, '0016', '0000-00-00', '1994-09-30', 'num', 103291.40, 99.16, 0.000, '', 799.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (257, '0016', '0000-00-00', '1994-09-30', 'num', 258228.50, 123.95, 0.000, '', 1065.97, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (258, '0016', '0000-00-00', '1994-09-30', 'num', 387342.70, 148.74, 0.000, '', 1332.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (259, '0016', '0000-00-00', '1994-09-30', 'num', 516456.90, 198.32, 0.000, '', 1598.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (260, '0016', '0000-00-00', '1994-09-30', 'num', 1549371.00, 247.90, 0.000, '', 2131.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (261, '0016', '0000-00-00', '1994-09-30', 'num', 2582285.00, 347.06, 0.000, '', 2664.92, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (262, '0016', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.134, 'C', 0.00, 1.032, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (263, '0016', '0000-00-00', '1994-09-30', 'ind', 0.00, 37.18, 0.000, '', 532.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (264, '0016', '0000-00-00', '1994-09-30', 'index', 0.00, 123.95, 0.000, '', 1598.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (265, '0016', '1994-10-01', '1995-03-31', 'num', 5164.57, 38.73, 0.000, '', 133.25, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (266, '0016', '1994-10-01', '1995-03-31', 'num', 25822.84, 59.39, 0.000, '', 268.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (267, '0016', '1994-10-01', '1995-03-31', 'num', 51645.69, 105.87, 0.000, '', 537.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (268, '0016', '1994-10-01', '1995-03-31', 'num', 103291.40, 185.92, 0.000, '', 805.67, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (269, '0016', '1994-10-01', '1995-03-31', 'num', 258228.50, 263.39, 0.000, '', 1074.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (270, '0016', '1994-10-01', '1995-03-31', 'num', 387342.70, 343.44, 0.000, '', 1342.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (271, '0016', '1994-10-01', '1995-03-31', 'num', 516456.90, 436.41, 0.000, '', 1611.35, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (272, '0016', '1994-10-01', '1995-03-31', 'num', 1549371.00, 526.79, 0.000, '', 2148.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (273, '0016', '1994-10-01', '1995-03-31', 'num', 2582285.00, 712.71, 0.000, '', 2685.58, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (274, '0016', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.227, 'C', 0.00, 1.036, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (275, '0016', '1994-10-01', '1995-03-31', 'ind', 0.00, 59.39, 0.000, '', 805.67, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (276, '0016', '1994-10-01', '1995-03-31', 'index', 0.00, 104.32, 0.000, '', 1605.15, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (277, '0016', '1995-04-01', '2004-06-01', 'num', 5164.57, 41.32, 0.000, '', 133.25, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (278, '0016', '1995-04-01', '2004-06-01', 'num', 25822.84, 67.14, 0.000, '', 268.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (279, '0016', '1995-04-01', '2004-06-01', 'num', 51645.69, 134.28, 0.000, '', 537.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (280, '0016', '1995-04-01', '2004-06-01', 'num', 103291.40, 268.56, 0.000, '', 805.67, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (281, '0016', '1995-04-01', '2004-06-01', 'num', 258228.50, 402.84, 0.000, '', 1074.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (282, '0016', '1995-04-01', '2004-06-01', 'num', 387342.70, 537.12, 0.000, '', 1342.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (283, '0016', '1995-04-01', '2004-06-01', 'num', 516456.90, 671.39, 0.000, '', 1611.35, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (284, '0016', '1995-04-01', '2004-06-01', 'num', 1549371.00, 805.67, 0.000, '', 2148.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (285, '0016', '1995-04-01', '2004-06-01', 'num', 2582285.00, 1074.23, 0.000, '', 2685.58, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (286, '0016', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.416, 'C', 0.00, 1.040, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (287, '0016', '1995-04-01', '2004-06-01', 'ind', 0.00, 67.14, 0.000, '', 805.67, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (288, '0016', '1995-04-01', '2004-06-01', 'index', 0.00, 134.28, 0.000, '', 1611.35, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (289, '0017', '0000-00-00', '1994-09-30', 'num', 5164.57, 38.73, 0.000, '', 77.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (290, '0017', '0000-00-00', '1994-09-30', 'num', 25822.84, 58.36, 0.000, '', 154.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (291, '0017', '0000-00-00', '1994-09-30', 'num', 51645.69, 87.80, 0.000, '', 309.87, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (292, '0017', '0000-00-00', '1994-09-30', 'num', 103291.40, 116.72, 0.000, '', 464.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (293, '0017', '0000-00-00', '1994-09-30', 'num', 258228.50, 146.16, 0.000, '', 619.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (294, '0017', '0000-00-00', '1994-09-30', 'num', 387342.70, 175.08, 0.000, '', 774.69, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (295, '0017', '0000-00-00', '1994-09-30', 'num', 516456.90, 233.44, 0.000, '', 929.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (296, '0017', '0000-00-00', '1994-09-30', 'num', 1549371.00, 291.80, 0.000, '', 1239.50, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (297, '0017', '0000-00-00', '1994-09-30', 'num', 2582285.00, 408.52, 0.000, '', 1549.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (298, '0017', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.158, 'C', 0.00, 0.600, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (299, '0017', '0000-00-00', '1994-09-30', 'ind', 0.00, 43.90, 0.000, '', 309.87, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (300, '0017', '0000-00-00', '1994-09-30', 'index', 0.00, 146.16, 0.000, '', 929.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (301, '0017', '1994-10-01', '1995-03-31', 'num', 5164.57, 42.87, 0.000, '', 77.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (302, '0017', '1994-10-01', '1995-03-31', 'num', 25822.84, 38.73, 0.000, '', 154.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (303, '0017', '1994-10-01', '1995-03-31', 'num', 51645.69, 77.47, 0.000, '', 309.87, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (304, '0017', '1994-10-01', '1995-03-31', 'num', 103291.40, 135.83, 0.000, '', 464.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (305, '0017', '1994-10-01', '1995-03-31', 'num', 258228.50, 189.54, 0.000, '', 619.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (306, '0017', '1994-10-01', '1995-03-31', 'num', 387342.70, 242.73, 0.000, '', 774.69, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (307, '0017', '1994-10-01', '1995-03-31', 'num', 516456.90, 310.39, 0.000, '', 929.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (308, '0017', '1994-10-01', '1995-03-31', 'num', 1549371.00, 378.56, 0.000, '', 1239.50, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (309, '0017', '1994-10-01', '1995-03-31', 'num', 2582285.00, 514.39, 0.000, '', 1549.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (310, '0017', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.199, 'C', 0.00, 0.600, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (311, '0017', '1994-10-01', '1995-03-31', 'ind', 0.00, 38.73, 0.000, '', 464.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (312, '0017', '1994-10-01', '1995-03-31', 'index', 0.00, 77.47, 0.000, '', 929.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (313, '0017', '1995-04-01', '2004-06-01', 'num', 5164.57, 46.48, 0.000, '', 77.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (314, '0017', '1995-04-01', '2004-06-01', 'num', 25822.84, 38.73, 0.000, '', 154.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (315, '0017', '1995-04-01', '2004-06-01', 'num', 51645.69, 77.47, 0.000, '', 309.87, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (316, '0017', '1995-04-01', '2004-06-01', 'num', 103291.40, 154.94, 0.000, '', 464.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (317, '0017', '1995-04-01', '2004-06-01', 'num', 258228.50, 232.41, 0.000, '', 619.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (318, '0017', '1995-04-01', '2004-06-01', 'num', 387342.70, 309.87, 0.000, '', 774.69, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (319, '0017', '1995-04-01', '2004-06-01', 'num', 516456.90, 387.34, 0.000, '', 929.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (320, '0017', '1995-04-01', '2004-06-01', 'num', 1549371.00, 464.81, 0.000, '', 1239.50, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (321, '0017', '1995-04-01', '2004-06-01', 'num', 2582285.00, 619.75, 0.000, '', 1549.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (322, '0017', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.240, 'C', 0.00, 0.600, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (323, '0017', '1995-04-01', '2004-06-01', 'ind', 0.00, 38.73, 0.000, '', 464.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (324, '0017', '1995-04-01', '2004-06-01', 'index', 0.00, 77.47, 0.000, '', 929.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (325, '0018', '0000-00-00', '1994-09-30', 'num', 5164.57, 139.44, 0.000, '', 325.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (326, '0018', '0000-00-00', '1994-09-30', 'num', 25822.84, 209.17, 0.000, '', 650.74, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (327, '0018', '0000-00-00', '1994-09-30', 'num', 51645.69, 314.01, 0.000, '', 1301.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (328, '0018', '0000-00-00', '1994-09-30', 'num', 103291.40, 418.33, 0.000, '', 1952.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (329, '0018', '0000-00-00', '1994-09-30', 'num', 258228.50, 523.17, 0.000, '', 2602.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (330, '0018', '0000-00-00', '1994-09-30', 'num', 387342.70, 627.50, 0.000, '', 3253.68, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (331, '0018', '0000-00-00', '1994-09-30', 'num', 516456.90, 836.66, 0.000, '', 3904.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (332, '0018', '0000-00-00', '1994-09-30', 'num', 1549371.00, 1045.83, 0.000, '', 5205.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (333, '0018', '0000-00-00', '1994-09-30', 'num', 2582285.00, 1464.16, 0.000, '', 6507.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (334, '0018', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.567, 'C', 0.00, 2.520, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (335, '0018', '0000-00-00', '1994-09-30', 'ind', 0.00, 157.00, 0.000, '', 1301.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (336, '0018', '0000-00-00', '1994-09-30', 'index', 0.00, 523.17, 0.000, '', 3904.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (337, '0018', '1994-10-01', '1995-03-31', 'num', 5164.57, 154.94, 0.000, '', 325.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (338, '0018', '1994-10-01', '1995-03-31', 'num', 25822.84, 162.68, 0.000, '', 650.74, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (339, '0018', '1994-10-01', '1995-03-31', 'num', 51645.69, 320.20, 0.000, '', 1301.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (340, '0018', '1994-10-01', '1995-03-31', 'num', 103291.40, 534.53, 0.000, '', 1952.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (341, '0018', '1994-10-01', '1995-03-31', 'num', 258228.50, 751.44, 0.000, '', 2602.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (342, '0018', '1994-10-01', '1995-03-31', 'num', 387342.70, 965.77, 0.000, '', 3253.68, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (343, '0018', '1994-10-01', '1995-03-31', 'num', 516456.90, 1231.75, 0.000, '', 3904.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (344, '0018', '1994-10-01', '1995-03-31', 'num', 1549371.00, 1499.27, 0.000, '', 5205.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (345, '0018', '1994-10-01', '1995-03-31', 'num', 2582285.00, 2034.84, 0.000, '', 6507.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (346, '0018', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.787, 'C', 0.00, 2.520, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (347, '0018', '1994-10-01', '1995-03-31', 'ind', 0.00, 162.68, 0.000, '', 1952.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (348, '0018', '1994-10-01', '1995-03-31', 'index', 0.00, 319.69, 0.000, '', 3904.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (349, '0018', '1995-04-01', '2004-06-01', 'num', 5164.57, 167.85, 0.000, '', 325.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (350, '0018', '1995-04-01', '2004-06-01', 'num', 25822.84, 162.68, 0.000, '', 650.74, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (351, '0018', '1995-04-01', '2004-06-01', 'num', 51645.69, 325.37, 0.000, '', 1301.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (352, '0018', '1995-04-01', '2004-06-01', 'num', 103291.40, 650.74, 0.000, '', 1952.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (353, '0018', '1995-04-01', '2004-06-01', 'num', 258228.50, 976.10, 0.000, '', 2602.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (354, '0018', '1995-04-01', '2004-06-01', 'num', 387342.70, 1301.47, 0.000, '', 3253.68, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (355, '0018', '1995-04-01', '2004-06-01', 'num', 516456.90, 1626.84, 0.000, '', 3904.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (356, '0018', '1995-04-01', '2004-06-01', 'num', 1549371.00, 1952.21, 0.000, '', 5205.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (357, '0018', '1995-04-01', '2004-06-01', 'num', 2582285.00, 2602.94, 0.000, '', 6507.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (358, '0018', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 1.008, 'C', 0.00, 2.520, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (359, '0018', '1995-04-01', '2004-06-01', 'ind', 0.00, 162.68, 0.000, '', 1952.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (360, '0018', '1995-04-01', '2004-06-01', 'index', 0.00, 325.37, 0.000, '', 3904.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (361, '0018', '1995-04-01', '2004-06-01', 'num', 5164.57, 167.85, 0.000, '', 325.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (362, '0018', '1995-04-01', '2004-06-01', 'num', 25822.84, 162.68, 0.000, '', 650.74, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (363, '0018', '1995-04-01', '2004-06-01', 'num', 51645.69, 325.37, 0.000, '', 1301.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (364, '0018', '1995-04-01', '2004-06-01', 'num', 103291.40, 650.74, 0.000, '', 1952.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (365, '0018', '1995-04-01', '2004-06-01', 'num', 258228.50, 976.10, 0.000, '', 2602.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (366, '0018', '1995-04-01', '2004-06-01', 'num', 387342.70, 1301.47, 0.000, '', 3253.68, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (367, '0018', '1995-04-01', '2004-06-01', 'num', 516456.90, 1626.84, 0.000, '', 3904.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (368, '0018', '1995-04-01', '2004-06-01', 'num', 1549371.00, 1952.21, 0.000, '', 5205.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (369, '0018', '1995-04-01', '2004-06-01', 'num', 2582285.00, 2602.94, 0.000, '', 6507.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (370, '0018', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 1.008, 'C', 0.00, 2.520, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (371, '0018', '1995-04-01', '2004-06-01', 'ind', 0.00, 162.68, 0.000, '', 1952.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (372, '0018', '1995-04-01', '2004-06-01', 'index', 0.00, 325.37, 0.000, '', 3904.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (373, '0019', '0000-00-00', '1994-09-30', 'num', 5164.57, 43.38, 0.000, '', 171.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (374, '0019', '0000-00-00', '1994-09-30', 'num', 25822.84, 65.07, 0.000, '', 342.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (375, '0019', '0000-00-00', '1994-09-30', 'num', 51645.69, 97.61, 0.000, '', 685.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (376, '0019', '0000-00-00', '1994-09-30', 'num', 103291.40, 130.15, 0.000, '', 1028.78, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (377, '0019', '0000-00-00', '1994-09-30', 'num', 258228.50, 162.68, 0.000, '', 1371.71, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (378, '0019', '0000-00-00', '1994-09-30', 'num', 387342.70, 195.22, 0.000, '', 1714.64, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (379, '0019', '0000-00-00', '1994-09-30', 'num', 516456.90, 260.29, 0.000, '', 2057.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (380, '0019', '0000-00-00', '1994-09-30', 'num', 1549371.00, 325.37, 0.000, '', 2743.42, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (381, '0019', '0000-00-00', '1994-09-30', 'num', 2582285.00, 455.51, 0.000, '', 3429.27, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (382, '0019', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.176, 'C', 0.00, 1.328, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (383, '0019', '0000-00-00', '1994-09-30', 'ind', 0.00, 49.06, 0.000, '', 685.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (384, '0019', '0000-00-00', '1994-09-30', 'index', 0.00, 162.68, 0.000, '', 2057.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (385, '0019', '1994-10-01', '1995-03-31', 'num', 5164.57, 49.06, 0.000, '', 171.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (386, '0019', '1994-10-01', '1995-03-31', 'num', 25822.84, 77.47, 0.000, '', 343.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (387, '0019', '1994-10-01', '1995-03-31', 'num', 51645.69, 136.86, 0.000, '', 686.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (388, '0019', '1994-10-01', '1995-03-31', 'num', 103291.40, 237.57, 0.000, '', 1030.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (389, '0019', '1994-10-01', '1995-03-31', 'num', 258228.50, 340.86, 0.000, '', 1373.78, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (390, '0019', '1994-10-01', '1995-03-31', 'num', 387342.70, 441.57, 0.000, '', 1717.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (391, '0019', '1994-10-01', '1995-03-31', 'num', 516456.90, 560.36, 0.000, '', 2060.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (392, '0019', '1994-10-01', '1995-03-31', 'num', 1549371.00, 679.14, 0.000, '', 2747.55, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (393, '0019', '1994-10-01', '1995-03-31', 'num', 2582285.00, 916.71, 0.000, '', 3434.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (394, '0019', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.354, 'C', 0.00, 1.329, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (395, '0019', '1994-10-01', '1995-03-31', 'ind', 0.00, 77.47, 0.000, '', 1030.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (396, '0019', '1994-10-01', '1995-03-31', 'index', 0.00, 135.31, 0.000, '', 2059.11, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (397, '0019', '1995-04-01', '2004-06-01', 'num', 5164.57, 54.23, 0.000, '', 171.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (398, '0019', '1995-04-01', '2004-06-01', 'num', 25822.84, 87.80, 0.000, '', 343.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (399, '0019', '1995-04-01', '2004-06-01', 'num', 51645.69, 173.01, 0.000, '', 686.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (400, '0019', '1995-04-01', '2004-06-01', 'num', 103291.40, 343.44, 0.000, '', 1030.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (401, '0019', '1995-04-01', '2004-06-01', 'num', 258228.50, 516.46, 0.000, '', 1373.78, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (402, '0019', '1995-04-01', '2004-06-01', 'num', 387342.70, 686.89, 0.000, '', 1717.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (403, '0019', '1995-04-01', '2004-06-01', 'num', 516456.90, 859.90, 0.000, '', 2060.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (404, '0019', '1995-04-01', '2004-06-01', 'num', 1549371.00, 1030.33, 0.000, '', 2747.55, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (405, '0019', '1995-04-01', '2004-06-01', 'num', 2582285.00, 1373.78, 0.000, '', 3434.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (406, '0019', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.532, 'C', 0.00, 1.330, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (407, '0019', '1995-04-01', '2004-06-01', 'ind', 0.00, 87.80, 0.000, '', 1030.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (408, '0019', '1995-04-01', '2004-06-01', 'index', 0.00, 173.01, 0.000, '', 2060.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (409, '0020', '0000-00-00', '1994-09-30', 'num', 5164.57, 35.64, 0.000, '', 133.25, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (410, '0020', '0000-00-00', '1994-09-30', 'num', 25822.84, 53.71, 0.000, '', 266.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (411, '0020', '0000-00-00', '1994-09-30', 'num', 51645.69, 80.57, 0.000, '', 532.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (412, '0020', '0000-00-00', '1994-09-30', 'num', 103291.40, 107.42, 0.000, '', 799.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (413, '0020', '0000-00-00', '1994-09-30', 'num', 258228.50, 134.28, 0.000, '', 1065.97, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (414, '0020', '0000-00-00', '1994-09-30', 'num', 387342.70, 161.13, 0.000, '', 1332.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (415, '0020', '0000-00-00', '1994-09-30', 'num', 516456.90, 214.85, 0.000, '', 1598.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (416, '0020', '0000-00-00', '1994-09-30', 'num', 1549371.00, 268.56, 0.000, '', 2131.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (417, '0020', '0000-00-00', '1994-09-30', 'num', 2582285.00, 375.98, 0.000, '', 2664.92, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (418, '0020', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.146, 'C', 0.00, 1.032, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (419, '0020', '0000-00-00', '1994-09-30', 'ind', 0.00, 40.28, 0.000, '', 532.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (420, '0020', '0000-00-00', '1994-09-30', 'index', 0.00, 134.28, 0.000, '', 1598.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (421, '0020', '1994-10-01', '1995-03-31', 'num', 5164.57, 41.32, 0.000, '', 133.25, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (422, '0020', '1994-10-01', '1995-03-31', 'num', 25822.84, 61.97, 0.000, '', 268.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (423, '0020', '1994-10-01', '1995-03-31', 'num', 51645.69, 116.20, 0.000, '', 537.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (424, '0020', '1994-10-01', '1995-03-31', 'num', 103291.40, 188.51, 0.000, '', 805.67, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (425, '0020', '1994-10-01', '1995-03-31', 'num', 258228.50, 268.56, 0.000, '', 1074.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (426, '0020', '1994-10-01', '1995-03-31', 'num', 387342.70, 351.19, 0.000, '', 1342.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (427, '0020', '1994-10-01', '1995-03-31', 'num', 516456.90, 444.15, 0.000, '', 1611.35, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (428, '0020', '1994-10-01', '1995-03-31', 'num', 1549371.00, 537.12, 0.000, '', 2148.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (429, '0020', '1994-10-01', '1995-03-31', 'num', 2582285.00, 725.62, 0.000, '', 2685.58, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (430, '0020', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.280, 'C', 0.00, 1.036, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (431, '0020', '1994-10-01', '1995-03-31', 'ind', 0.00, 61.97, 0.000, '', 805.67, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (432, '0020', '1994-10-01', '1995-03-31', 'index', 0.00, 107.42, 0.000, '', 1605.15, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (433, '0020', '1995-04-01', '2004-06-01', 'num', 5164.57, 43.90, 0.000, '', 133.25, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (434, '0020', '1995-04-01', '2004-06-01', 'num', 25822.84, 67.14, 0.000, '', 268.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (435, '0020', '1995-04-01', '2004-06-01', 'num', 51645.69, 134.28, 0.000, '', 537.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (436, '0020', '1995-04-01', '2004-06-01', 'num', 103291.40, 268.56, 0.000, '', 805.67, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (437, '0020', '1995-04-01', '2004-06-01', 'num', 258228.50, 402.84, 0.000, '', 1074.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (438, '0020', '1995-04-01', '2004-06-01', 'num', 387342.70, 537.12, 0.000, '', 1342.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (439, '0020', '1995-04-01', '2004-06-01', 'num', 516456.90, 671.39, 0.000, '', 1611.35, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (440, '0020', '1995-04-01', '2004-06-01', 'num', 1549371.00, 805.67, 0.000, '', 2148.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (441, '0020', '1995-04-01', '2004-06-01', 'num', 2582285.00, 1074.23, 0.000, '', 2685.58, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (442, '0020', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.416, 'C', 0.00, 1.040, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (443, '0020', '1995-04-01', '2004-06-01', 'ind', 0.00, 67.14, 0.000, '', 805.67, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (444, '0020', '1995-04-01', '2004-06-01', 'index', 0.00, 134.28, 0.000, '', 1611.35, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (445, '0021', '0000-00-00', '1994-09-30', 'num', 5164.57, 50.61, 0.000, '', 209.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (446, '0021', '0000-00-00', '1994-09-30', 'num', 25822.84, 75.92, 0.000, '', 418.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (447, '0021', '0000-00-00', '1994-09-30', 'num', 51645.69, 114.14, 0.000, '', 836.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (448, '0021', '0000-00-00', '1994-09-30', 'num', 103291.40, 151.84, 0.000, '', 1254.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (449, '0021', '0000-00-00', '1994-09-30', 'num', 258228.50, 190.06, 0.000, '', 1673.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (450, '0021', '0000-00-00', '1994-09-30', 'num', 387342.70, 227.76, 0.000, '', 2091.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (451, '0021', '0000-00-00', '1994-09-30', 'num', 516456.90, 303.68, 0.000, '', 2509.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (452, '0021', '0000-00-00', '1994-09-30', 'num', 1549371.00, 379.60, 0.000, '', 3346.64, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (453, '0021', '0000-00-00', '1994-09-30', 'num', 2582285.00, 531.43, 0.000, '', 4183.30, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (454, '0021', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.206, 'C', 0.00, 1.620, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (455, '0021', '0000-00-00', '1994-09-30', 'ind', 0.00, 57.33, 0.000, '', 836.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (456, '0021', '0000-00-00', '1994-09-30', 'index', 0.00, 190.06, 0.000, '', 2509.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (457, '0021', '1994-10-01', '1995-03-31', 'num', 5164.57, 56.81, 0.000, '', 209.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (458, '0021', '1994-10-01', '1995-03-31', 'num', 25822.84, 92.96, 0.000, '', 418.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (459, '0021', '1994-10-01', '1995-03-31', 'num', 51645.69, 162.68, 0.000, '', 836.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (460, '0021', '1994-10-01', '1995-03-31', 'num', 103291.40, 286.63, 0.000, '', 1254.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (461, '0021', '1994-10-01', '1995-03-31', 'num', 258228.50, 410.58, 0.000, '', 1673.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (462, '0021', '1994-10-01', '1995-03-31', 'num', 387342.70, 534.53, 0.000, '', 2091.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (463, '0021', '1994-10-01', '1995-03-31', 'num', 516456.90, 676.56, 0.000, '', 2509.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (464, '0021', '1994-10-01', '1995-03-31', 'num', 1549371.00, 818.58, 0.000, '', 3346.64, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (465, '0021', '1994-10-01', '1995-03-31', 'num', 2582285.00, 1102.64, 0.000, '', 4183.30, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (466, '0021', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.426, 'C', 0.00, 1.620, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (467, '0021', '1994-10-01', '1995-03-31', 'ind', 0.00, 92.96, 0.000, '', 1254.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (468, '0021', '1994-10-01', '1995-03-31', 'index', 0.00, 161.65, 0.000, '', 2509.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (469, '0021', '1995-04-01', '2004-06-01', 'num', 5164.57, 61.97, 0.000, '', 209.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (470, '0021', '1995-04-01', '2004-06-01', 'num', 25822.84, 105.87, 0.000, '', 418.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (471, '0021', '1995-04-01', '2004-06-01', 'num', 51645.69, 209.17, 0.000, '', 836.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (472, '0021', '1995-04-01', '2004-06-01', 'num', 103291.40, 418.33, 0.000, '', 1254.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (473, '0021', '1995-04-01', '2004-06-01', 'num', 258228.50, 627.50, 0.000, '', 1673.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (474, '0021', '1995-04-01', '2004-06-01', 'num', 387342.70, 836.66, 0.000, '', 2091.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (475, '0021', '1995-04-01', '2004-06-01', 'num', 516456.90, 1045.83, 0.000, '', 2509.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (476, '0021', '1995-04-01', '2004-06-01', 'num', 1549371.00, 1254.99, 0.000, '', 3346.64, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (477, '0021', '1995-04-01', '2004-06-01', 'num', 2582285.00, 1673.32, 0.000, '', 4183.30, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (478, '0021', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.648, 'C', 0.00, 1.620, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (479, '0021', '1995-04-01', '2004-06-01', 'ind', 0.00, 105.87, 0.000, '', 1254.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (480, '0021', '1995-04-01', '2004-06-01', 'index', 0.00, 209.17, 0.000, '', 2509.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (481, '0022', '0000-00-00', '1994-09-30', 'num', 5164.57, 25.31, 0.000, '', 104.84, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (482, '0022', '0000-00-00', '1994-09-30', 'num', 25822.84, 38.22, 0.000, '', 209.68, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (483, '0022', '0000-00-00', '1994-09-30', 'num', 51645.69, 57.33, 0.000, '', 419.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (484, '0022', '0000-00-00', '1994-09-30', 'num', 103291.40, 76.44, 0.000, '', 629.04, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (485, '0022', '0000-00-00', '1994-09-30', 'num', 258228.50, 95.54, 0.000, '', 838.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (486, '0022', '0000-00-00', '1994-09-30', 'num', 387342.70, 114.65, 0.000, '', 1048.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (487, '0022', '0000-00-00', '1994-09-30', 'num', 516456.90, 152.87, 0.000, '', 1258.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (488, '0022', '0000-00-00', '1994-09-30', 'num', 1549371.00, 191.09, 0.000, '', 1677.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (489, '0022', '0000-00-00', '1994-09-30', 'num', 2582285.00, 267.52, 0.000, '', 2096.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (490, '0022', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.104, 'C', 0.00, 0.812, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (491, '0022', '0000-00-00', '1994-09-30', 'ind', 0.00, 28.92, 0.000, '', 419.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (492, '0022', '0000-00-00', '1994-09-30', 'index', 0.00, 95.54, 0.000, '', 1258.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (493, '0022', '1994-10-01', '1995-03-31', 'num', 5164.57, 28.41, 0.000, '', 104.84, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (494, '0022', '1994-10-01', '1995-03-31', 'num', 25822.84, 46.48, 0.000, '', 211.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (495, '0022', '1994-10-01', '1995-03-31', 'num', 51645.69, 82.63, 0.000, '', 423.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (496, '0022', '1994-10-01', '1995-03-31', 'num', 103291.40, 144.61, 0.000, '', 635.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (497, '0022', '1994-10-01', '1995-03-31', 'num', 258228.50, 206.58, 0.000, '', 846.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (498, '0022', '1994-10-01', '1995-03-31', 'num', 387342.70, 271.14, 0.000, '', 1058.74, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (499, '0022', '1994-10-01', '1995-03-31', 'num', 516456.90, 343.44, 0.000, '', 1270.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (500, '0022', '1994-10-01', '1995-03-31', 'num', 1549371.00, 413.17, 0.000, '', 1693.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (501, '0022', '1994-10-01', '1995-03-31', 'num', 2582285.00, 557.77, 0.000, '', 2117.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (502, '0022', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.215, 'C', 0.00, 0.816, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (503, '0022', '1994-10-01', '1995-03-31', 'ind', 0.00, 46.48, 0.000, '', 635.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (504, '0022', '1994-10-01', '1995-03-31', 'index', 0.00, 81.60, 0.000, '', 1264.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (505, '0022', '1995-04-01', '2004-06-01', 'num', 5164.57, 30.99, 0.000, '', 104.84, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (506, '0022', '1995-04-01', '2004-06-01', 'num', 25822.84, 54.23, 0.000, '', 211.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (507, '0022', '1995-04-01', '2004-06-01', 'num', 51645.69, 105.87, 0.000, '', 423.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (508, '0022', '1995-04-01', '2004-06-01', 'num', 103291.40, 211.75, 0.000, '', 635.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (509, '0022', '1995-04-01', '2004-06-01', 'num', 258228.50, 317.62, 0.000, '', 846.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (510, '0022', '1995-04-01', '2004-06-01', 'num', 387342.70, 423.49, 0.000, '', 1058.74, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (511, '0022', '1995-04-01', '2004-06-01', 'num', 516456.90, 529.37, 0.000, '', 1270.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (512, '0022', '1995-04-01', '2004-06-01', 'num', 1549371.00, 635.24, 0.000, '', 1693.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (513, '0022', '1995-04-01', '2004-06-01', 'num', 2582285.00, 846.99, 0.000, '', 2117.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (514, '0022', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.328, 'C', 0.00, 0.820, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (515, '0022', '1995-04-01', '2004-06-01', 'ind', 0.00, 54.23, 0.000, '', 635.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (516, '0022', '1995-04-01', '2004-06-01', 'index', 0.00, 105.87, 0.000, '', 1270.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (517, '0023', '0000-00-00', '1994-09-30', 'num', 5164.57, 20.66, 0.000, '', 54.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (518, '0023', '0000-00-00', '1994-09-30', 'num', 25822.84, 30.99, 0.000, '', 108.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (519, '0023', '0000-00-00', '1994-09-30', 'num', 51645.69, 46.48, 0.000, '', 216.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (520, '0023', '0000-00-00', '1994-09-30', 'num', 103291.40, 61.97, 0.000, '', 325.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (521, '0023', '0000-00-00', '1994-09-30', 'num', 258228.50, 77.47, 0.000, '', 433.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (522, '0023', '0000-00-00', '1994-09-30', 'num', 387342.70, 92.96, 0.000, '', 542.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (523, '0023', '0000-00-00', '1994-09-30', 'num', 516456.90, 123.95, 0.000, '', 650.74, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (524, '0023', '0000-00-00', '1994-09-30', 'num', 1549371.00, 154.94, 0.000, '', 867.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (525, '0023', '0000-00-00', '1994-09-30', 'num', 2582285.00, 216.91, 0.000, '', 1084.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (526, '0023', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.084, 'C', 0.00, 0.420, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (527, '0023', '0000-00-00', '1994-09-30', 'ind', 0.00, 23.24, 0.000, '', 216.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (528, '0023', '0000-00-00', '1994-09-30', 'index', 0.00, 77.47, 0.000, '', 650.74, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (529, '0023', '1994-10-01', '1995-03-31', 'num', 5164.57, 23.24, 0.000, '', 54.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (530, '0023', '1994-10-01', '1995-03-31', 'num', 25822.84, 28.41, 0.000, '', 108.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (531, '0023', '1994-10-01', '1995-03-31', 'num', 51645.69, 50.61, 0.000, '', 216.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (532, '0023', '1994-10-01', '1995-03-31', 'num', 103291.40, 85.22, 0.000, '', 325.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (533, '0023', '1994-10-01', '1995-03-31', 'num', 258228.50, 121.37, 0.000, '', 433.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (534, '0023', '1994-10-01', '1995-03-31', 'num', 387342.70, 154.94, 0.000, '', 542.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (535, '0023', '1994-10-01', '1995-03-31', 'num', 516456.90, 198.84, 0.000, '', 650.74, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (536, '0023', '1994-10-01', '1995-03-31', 'num', 1549371.00, 240.15, 0.000, '', 867.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (537, '0023', '1994-10-01', '1995-03-31', 'num', 2582285.00, 325.37, 0.000, '', 1084.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (538, '0023', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.126, 'C', 0.00, 0.420, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (539, '0023', '1994-10-01', '1995-03-31', 'ind', 0.00, 28.41, 0.000, '', 325.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (540, '0023', '1994-10-01', '1995-03-31', 'index', 0.00, 50.61, 0.000, '', 650.74, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (541, '0023', '1995-04-01', '2004-06-01', 'num', 5164.57, 25.82, 0.000, '', 54.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (542, '0023', '1995-04-01', '2004-06-01', 'num', 25822.84, 28.41, 0.000, '', 108.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (543, '0023', '1995-04-01', '2004-06-01', 'num', 51645.69, 54.23, 0.000, '', 216.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (544, '0023', '1995-04-01', '2004-06-01', 'num', 103291.40, 108.46, 0.000, '', 325.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (545, '0023', '1995-04-01', '2004-06-01', 'num', 258228.50, 162.68, 0.000, '', 433.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (546, '0023', '1995-04-01', '2004-06-01', 'num', 387342.70, 216.91, 0.000, '', 542.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (547, '0023', '1995-04-01', '2004-06-01', 'num', 516456.90, 271.14, 0.000, '', 650.74, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (548, '0023', '1995-04-01', '2004-06-01', 'num', 1549371.00, 325.37, 0.000, '', 867.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (549, '0023', '1995-04-01', '2004-06-01', 'num', 2582285.00, 433.82, 0.000, '', 1084.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (550, '0023', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.168, 'C', 0.00, 0.420, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (551, '0023', '1995-04-01', '2004-06-01', 'ind', 0.00, 28.41, 0.000, '', 325.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (552, '0023', '1995-04-01', '2004-06-01', 'index', 0.00, 54.23, 0.000, '', 650.74, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (553, '0024', '0000-00-00', '1994-09-30', 'num', 5164.57, 68.69, 0.000, '', 284.05, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (554, '0024', '0000-00-00', '1994-09-30', 'num', 25822.84, 103.29, 0.000, '', 568.10, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (555, '0024', '0000-00-00', '1994-09-30', 'num', 51645.69, 154.94, 0.000, '', 1136.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (556, '0024', '0000-00-00', '1994-09-30', 'num', 103291.40, 206.58, 0.000, '', 1704.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (557, '0024', '0000-00-00', '1994-09-30', 'num', 258228.50, 258.23, 0.000, '', 2272.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (558, '0024', '0000-00-00', '1994-09-30', 'num', 387342.70, 309.87, 0.000, '', 2840.51, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (559, '0024', '0000-00-00', '1994-09-30', 'num', 516456.90, 413.17, 0.000, '', 3408.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (560, '0024', '0000-00-00', '1994-09-30', 'num', 1549371.00, 516.46, 0.000, '', 4544.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (561, '0024', '0000-00-00', '1994-09-30', 'num', 2582285.00, 723.04, 0.000, '', 5681.03, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (562, '0024', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.280, 'C', 0.00, 2.200, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (563, '0024', '0000-00-00', '1994-09-30', 'ind', 0.00, 77.47, 0.000, '', 1136.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (564, '0024', '0000-00-00', '1994-09-30', 'index', 0.00, 258.23, 0.000, '', 3408.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (565, '0024', '1994-10-01', '1995-03-31', 'num', 5164.57, 77.47, 0.000, '', 284.05, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (566, '0024', '1994-10-01', '1995-03-31', 'num', 25822.84, 123.95, 0.000, '', 568.10, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (567, '0024', '1994-10-01', '1995-03-31', 'num', 51645.69, 219.49, 0.000, '', 1136.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (568, '0024', '1994-10-01', '1995-03-31', 'num', 103291.40, 387.34, 0.000, '', 1704.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (569, '0024', '1994-10-01', '1995-03-31', 'num', 258228.50, 555.19, 0.000, '', 2272.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (570, '0024', '1994-10-01', '1995-03-31', 'num', 387342.70, 723.04, 0.000, '', 2840.51, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (571, '0024', '1994-10-01', '1995-03-31', 'num', 516456.90, 916.71, 0.000, '', 3408.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (572, '0024', '1994-10-01', '1995-03-31', 'num', 1549371.00, 1110.38, 0.000, '', 4544.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (573, '0024', '1994-10-01', '1995-03-31', 'num', 2582285.00, 1497.72, 0.000, '', 5681.03, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (574, '0024', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.580, 'C', 0.00, 2.200, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (575, '0024', '1994-10-01', '1995-03-31', 'ind', 0.00, 123.95, 0.000, '', 1704.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (576, '0024', '1994-10-01', '1995-03-31', 'index', 0.00, 219.49, 0.000, '', 3408.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (577, '0024', '1995-04-01', '2004-06-01', 'num', 5164.57, 82.63, 0.000, '', 284.05, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (578, '0024', '1995-04-01', '2004-06-01', 'num', 25822.84, 142.03, 0.000, '', 568.10, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (579, '0024', '1995-04-01', '2004-06-01', 'num', 51645.69, 284.05, 0.000, '', 1136.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (580, '0024', '1995-04-01', '2004-06-01', 'num', 103291.40, 568.10, 0.000, '', 1704.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (581, '0024', '1995-04-01', '2004-06-01', 'num', 258228.50, 852.15, 0.000, '', 2272.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (582, '0024', '1995-04-01', '2004-06-01', 'num', 387342.70, 1136.21, 0.000, '', 2840.51, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (583, '0024', '1995-04-01', '2004-06-01', 'num', 516456.90, 1420.26, 0.000, '', 3408.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (584, '0024', '1995-04-01', '2004-06-01', 'num', 1549371.00, 1704.31, 0.000, '', 4544.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (585, '0024', '1995-04-01', '2004-06-01', 'num', 2582285.00, 2272.41, 0.000, '', 5681.03, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (586, '0024', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.880, 'C', 0.00, 2.200, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (587, '0024', '1995-04-01', '2004-06-01', 'ind', 0.00, 142.03, 0.000, '', 1704.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (588, '0024', '1995-04-01', '2004-06-01', 'index', 0.00, 284.05, 0.000, '', 3408.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (589, '0026', '0000-00-00', '1994-09-30', 'num', 5164.57, 49.06, 0.000, '', 147.19, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (590, '0026', '0000-00-00', '1994-09-30', 'num', 25822.84, 73.85, 0.000, '', 294.38, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (591, '0026', '0000-00-00', '1994-09-30', 'num', 51645.69, 111.04, 0.000, '', 588.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (592, '0026', '0000-00-00', '1994-09-30', 'num', 103291.40, 147.71, 0.000, '', 883.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (593, '0026', '0000-00-00', '1994-09-30', 'num', 258228.50, 184.89, 0.000, '', 1177.52, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (594, '0026', '0000-00-00', '1994-09-30', 'num', 387342.70, 221.56, 0.000, '', 1471.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (595, '0026', '0000-00-00', '1994-09-30', 'num', 516456.90, 295.41, 0.000, '', 1766.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (596, '0026', '0000-00-00', '1994-09-30', 'num', 1549371.00, 369.27, 0.000, '', 2355.04, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (597, '0026', '0000-00-00', '1994-09-30', 'num', 2582285.00, 516.97, 0.000, '', 2943.80, 0.000, '');


INSERT INTO `INT_tariffe_onorari` VALUES (598, '0026', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.200, 'C', 0.00, 1.140, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (599, '0026', '0000-00-00', '1994-09-30', 'ind', 0.00, 55.78, 0.000, '', 588.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (600, '0026', '0000-00-00', '1994-09-30', 'index', 0.00, 184.89, 0.000, '', 1766.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (601, '0026', '1994-10-01', '1995-03-31', 'num', 5164.57, 56.81, 0.000, '', 147.19, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (602, '0026', '1994-10-01', '1995-03-31', 'num', 25822.84, 74.89, 0.000, '', 294.38, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (603, '0026', '1994-10-01', '1995-03-31', 'num', 51645.69, 129.11, 0.000, '', 588.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (604, '0026', '1994-10-01', '1995-03-31', 'num', 103291.40, 222.08, 0.000, '', 883.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (605, '0026', '1994-10-01', '1995-03-31', 'num', 258228.50, 315.04, 0.000, '', 1177.52, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (606, '0026', '1994-10-01', '1995-03-31', 'num', 387342.70, 405.42, 0.000, '', 1471.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (607, '0026', '1994-10-01', '1995-03-31', 'num', 516456.90, 516.46, 0.000, '', 1766.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (608, '0026', '1994-10-01', '1995-03-31', 'num', 1549371.00, 630.08, 0.000, '', 2355.04, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (609, '0026', '1994-10-01', '1995-03-31', 'num', 2582285.00, 849.57, 0.000, '', 2943.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (610, '0026', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.328, 'C', 0.00, 1.140, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (611, '0026', '1994-10-01', '1995-03-31', 'ind', 0.00, 74.89, 0.000, '', 883.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (612, '0026', '1994-10-01', '1995-03-31', 'index', 0.00, 129.11, 0.000, '', 1766.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (613, '0026', '1995-04-01', '2004-06-01', 'num', 5164.57, 59.39, 0.000, '', 147.19, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (614, '0026', '1995-04-01', '2004-06-01', 'num', 25822.84, 74.89, 0.000, '', 294.38, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (615, '0026', '1995-04-01', '2004-06-01', 'num', 51645.69, 147.19, 0.000, '', 588.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (616, '0026', '1995-04-01', '2004-06-01', 'num', 103291.40, 294.38, 0.000, '', 883.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (617, '0026', '1995-04-01', '2004-06-01', 'num', 258228.50, 441.57, 0.000, '', 1177.52, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (618, '0026', '1995-04-01', '2004-06-01', 'num', 387342.70, 588.76, 0.000, '', 1471.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (619, '0026', '1995-04-01', '2004-06-01', 'num', 516456.90, 735.95, 0.000, '', 1766.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (620, '0026', '1995-04-01', '2004-06-01', 'num', 1549371.00, 883.14, 0.000, '', 2355.04, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (621, '0026', '1995-04-01', '2004-06-01', 'num', 2582285.00, 1177.52, 0.000, '', 2943.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (622, '0026', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.456, 'C', 0.00, 1.140, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (623, '0026', '1995-04-01', '2004-06-01', 'ind', 0.00, 74.89, 0.000, '', 883.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (624, '0026', '1995-04-01', '2004-06-01', 'index', 0.00, 147.19, 0.000, '', 1766.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (625, '0029', '0000-00-00', '1994-09-30', 'num', 5164.57, 137.89, 0.000, '', 451.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (626, '0029', '0000-00-00', '1994-09-30', 'num', 25822.84, 207.10, 0.000, '', 903.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (627, '0029', '0000-00-00', '1994-09-30', 'num', 51645.69, 310.91, 0.000, '', 1807.60, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (628, '0029', '0000-00-00', '1994-09-30', 'num', 103291.40, 414.20, 0.000, '', 2711.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (629, '0029', '0000-00-00', '1994-09-30', 'num', 258228.50, 518.01, 0.000, '', 3615.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (630, '0029', '0000-00-00', '1994-09-30', 'num', 387342.70, 621.30, 0.000, '', 4519.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (631, '0029', '0000-00-00', '1994-09-30', 'num', 516456.90, 828.40, 0.000, '', 5422.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (632, '0029', '0000-00-00', '1994-09-30', 'num', 1549371.00, 1035.50, 0.000, '', 7230.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (633, '0029', '0000-00-00', '1994-09-30', 'num', 2582285.00, 1449.69, 0.000, '', 9038.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (634, '0029', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.561, 'C', 0.00, 3.500, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (635, '0029', '0000-00-00', '1994-09-30', 'ind', 0.00, 155.45, 0.000, '', 1807.60, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (636, '0029', '0000-00-00', '1994-09-30', 'index', 0.00, 518.01, 0.000, '', 5422.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (637, '0029', '1994-10-01', '1995-03-31', 'num', 5164.57, 154.94, 0.000, '', 451.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (638, '0029', '1994-10-01', '1995-03-31', 'num', 25822.84, 219.49, 0.000, '', 903.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (639, '0029', '1994-10-01', '1995-03-31', 'num', 51645.69, 382.18, 0.000, '', 1807.60, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (640, '0029', '1994-10-01', '1995-03-31', 'num', 103291.40, 661.06, 0.000, '', 2711.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (641, '0029', '1994-10-01', '1995-03-31', 'num', 258228.50, 937.37, 0.000, '', 3615.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (642, '0029', '1994-10-01', '1995-03-31', 'num', 387342.70, 1208.51, 0.000, '', 4519.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (643, '0029', '1994-10-01', '1995-03-31', 'num', 516456.90, 1544.21, 0.000, '', 5422.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (644, '0029', '1994-10-01', '1995-03-31', 'num', 1549371.00, 1616.51, 0.000, '', 7230.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (645, '0029', '1994-10-01', '1995-03-31', 'num', 2582285.00, 2533.22, 0.000, '', 9038.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (646, '0029', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.980, 'C', 0.00, 3.500, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (647, '0029', '1994-10-01', '1995-03-31', 'ind', 0.00, 219.49, 0.000, '', 2711.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (648, '0029', '1994-10-01', '1995-03-31', 'index', 0.00, 381.66, 0.000, '', 5422.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (649, '0029', '1995-04-01', '2004-06-01', 'num', 5164.57, 167.85, 0.000, '', 451.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (650, '0029', '1995-04-01', '2004-06-01', 'num', 25822.84, 227.24, 0.000, '', 903.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (651, '0029', '1995-04-01', '2004-06-01', 'num', 51645.69, 451.90, 0.000, '', 1807.60, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (652, '0029', '1995-04-01', '2004-06-01', 'num', 103291.40, 903.80, 0.000, '', 2711.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (653, '0029', '1995-04-01', '2004-06-01', 'num', 258228.50, 1355.70, 0.000, '', 3615.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (654, '0029', '1995-04-01', '2004-06-01', 'num', 387342.70, 1807.60, 0.000, '', 4519.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (655, '0029', '1995-04-01', '2004-06-01', 'num', 516456.90, 2259.50, 0.000, '', 5422.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (656, '0029', '1995-04-01', '2004-06-01', 'num', 1549371.00, 2711.40, 0.000, '', 7230.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (657, '0029', '1995-04-01', '2004-06-01', 'num', 2582285.00, 3615.20, 0.000, '', 9038.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (658, '0029', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 1.400, 'C', 0.00, 3.500, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (659, '0029', '1995-04-01', '2004-06-01', 'ind', 0.00, 227.24, 0.000, '', 2711.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (660, '0029', '1995-04-01', '2004-06-01', 'index', 0.00, 451.90, 0.000, '', 5422.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (661, '0030', '0000-00-00', '1994-09-30', 'num', 5164.57, 43.38, 0.000, '', 2352.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (662, '0030', '0000-00-00', '1994-09-30', 'num', 25822.84, 65.07, 0.000, '', 469.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (663, '0030', '0000-00-00', '1994-09-30', 'num', 51645.69, 97.61, 0.000, '', 939.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (664, '0030', '0000-00-00', '1994-09-30', 'num', 103291.40, 130.15, 0.000, '', 1409.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (665, '0030', '0000-00-00', '1994-09-30', 'num', 258228.50, 162.68, 0.000, '', 1879.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (666, '0030', '0000-00-00', '1994-09-30', 'num', 387342.70, 195.22, 0.000, '', 2349.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (667, '0030', '0000-00-00', '1994-09-30', 'num', 516456.90, 260.29, 0.000, '', 2819.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (668, '0030', '0000-00-00', '1994-09-30', 'num', 1549371.00, 325.37, 0.000, '', 3759.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (669, '0030', '0000-00-00', '1994-09-30', 'num', 2582285.00, 455.51, 0.000, '', 4699.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (670, '0030', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.176, 'C', 0.00, 1.820, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (671, '0030', '0000-00-00', '1994-09-30', 'ind', 0.00, 49.06, 0.000, '', 939.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (672, '0030', '0000-00-00', '1994-09-30', 'index', 0.00, 162.68, 0.000, '', 2819.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (673, '0030', '1994-10-01', '1995-03-31', 'num', 5164.57, 49.06, 0.000, '', 234.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (674, '0030', '1994-10-01', '1995-03-31', 'num', 25822.84, 92.96, 0.000, '', 469.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (675, '0030', '1994-10-01', '1995-03-31', 'num', 51645.69, 167.85, 0.000, '', 939.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (676, '0030', '1994-10-01', '1995-03-31', 'num', 103291.40, 302.13, 0.000, '', 1409.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (677, '0030', '1994-10-01', '1995-03-31', 'num', 258228.50, 433.82, 0.000, '', 1879.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (678, '0030', '1994-10-01', '1995-03-31', 'num', 387342.70, 568.10, 0.000, '', 2349.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (679, '0030', '1994-10-01', '1995-03-31', 'num', 516456.90, 717.88, 0.000, '', 2819.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (680, '0030', '1994-10-01', '1995-03-31', 'num', 1549371.00, 867.65, 0.000, '', 3759.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (681, '0030', '1994-10-01', '1995-03-31', 'num', 2582285.00, 1169.77, 0.000, '', 4699.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (682, '0030', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.452, 'C', 0.00, 1.820, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (683, '0030', '1994-10-01', '1995-03-31', 'ind', 0.00, 92.96, 0.000, '', 1409.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (684, '0030', '1994-10-01', '1995-03-31', 'index', 0.00, 166.30, 0.000, '', 2819.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (685, '0030', '1995-04-01', '2004-06-01', 'num', 5164.57, 54.23, 0.000, '', 234.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (686, '0030', '1995-04-01', '2004-06-01', 'num', 25822.84, 118.79, 0.000, '', 469.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (687, '0030', '1995-04-01', '2004-06-01', 'num', 51645.69, 234.99, 0.000, '', 939.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (688, '0030', '1995-04-01', '2004-06-01', 'num', 103291.40, 469.98, 0.000, '', 1409.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (689, '0030', '1995-04-01', '2004-06-01', 'num', 258228.50, 704.96, 0.000, '', 1879.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (690, '0030', '1995-04-01', '2004-06-01', 'num', 387342.70, 939.95, 0.000, '', 2349.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (691, '0030', '1995-04-01', '2004-06-01', 'num', 516456.90, 1174.94, 0.000, '', 2819.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (692, '0030', '1995-04-01', '2004-06-01', 'num', 1549371.00, 1409.93, 0.000, '', 3759.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (693, '0030', '1995-04-01', '2004-06-01', 'num', 2582285.00, 1879.90, 0.000, '', 4699.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (694, '0030', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.728, 'C', 0.00, 1.820, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (695, '0030', '1995-04-01', '2004-06-01', 'ind', 0.00, 118.79, 0.000, '', 1409.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (696, '0030', '1995-04-01', '2004-06-01', 'index', 0.00, 234.99, 0.000, '', 2819.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (697, '0031', '0000-00-00', '1994-09-30', 'num', 5164.57, 81.08, 0.000, '', 209.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (698, '0031', '0000-00-00', '1994-09-30', 'num', 25822.84, 121.88, 0.000, '', 418.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (699, '0031', '0000-00-00', '1994-09-30', 'num', 51645.69, 182.83, 0.000, '', 836.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (700, '0031', '0000-00-00', '1994-09-30', 'num', 103291.40, 243.77, 0.000, '', 1254.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (701, '0031', '0000-00-00', '1994-09-30', 'num', 258228.50, 304.71, 0.000, '', 1673.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (702, '0031', '0000-00-00', '1994-09-30', 'num', 387342.70, 365.65, 0.000, '', 2091.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (703, '0031', '0000-00-00', '1994-09-30', 'num', 516456.90, 487.54, 0.000, '', 2509.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (704, '0031', '0000-00-00', '1994-09-30', 'num', 1549371.00, 609.42, 0.000, '', 3346.64, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (705, '0031', '0000-00-00', '1994-09-30', 'num', 2582285.00, 853.19, 0.000, '', 4183.30, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (706, '0031', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.330, 'C', 0.00, 1.620, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (707, '0031', '0000-00-00', '1994-09-30', 'ind', 0.00, 91.41, 0.000, '', 836.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (708, '0031', '0000-00-00', '1994-09-30', 'index', 0.00, 304.71, 0.000, '', 2509.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (709, '0031', '1994-10-01', '1995-03-31', 'num', 5164.57, 90.38, 0.000, '', 209.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (710, '0031', '1994-10-01', '1995-03-31', 'num', 25822.84, 105.87, 0.000, '', 418.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (711, '0031', '1994-10-01', '1995-03-31', 'num', 51645.69, 196.25, 0.000, '', 836.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (712, '0031', '1994-10-01', '1995-03-31', 'num', 103291.40, 333.11, 0.000, '', 1254.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (713, '0031', '1994-10-01', '1995-03-31', 'num', 258228.50, 467.39, 0.000, '', 1673.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (714, '0031', '1994-10-01', '1995-03-31', 'num', 387342.70, 601.67, 0.000, '', 2091.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (715, '0031', '1994-10-01', '1995-03-31', 'num', 516456.90, 766.94, 0.000, '', 2509.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (716, '0031', '1994-10-01', '1995-03-31', 'num', 1549371.00, 932.20, 0.000, '', 3346.64, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (717, '0031', '1994-10-01', '1995-03-31', 'num', 2582285.00, 1654.73, 0.000, '', 4183.30, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (718, '0031', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.489, 'C', 0.00, 1.620, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (719, '0031', '1994-10-01', '1995-03-31', 'ind', 0.00, 105.87, 0.000, '', 1254.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (720, '0031', '1994-10-01', '1995-03-31', 'index', 0.00, 196.25, 0.000, '', 2509.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (721, '0031', '1995-04-01', '2004-06-01', 'num', 5164.57, 98.13, 0.000, '', 209.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (722, '0031', '1995-04-01', '2004-06-01', 'num', 25822.84, 105.87, 0.000, '', 418.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (723, '0031', '1995-04-01', '2004-06-01', 'num', 51645.69, 209.17, 0.000, '', 836.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (724, '0031', '1995-04-01', '2004-06-01', 'num', 103291.40, 418.33, 0.000, '', 1254.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (725, '0031', '1995-04-01', '2004-06-01', 'num', 258228.50, 627.50, 0.000, '', 1673.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (726, '0031', '1995-04-01', '2004-06-01', 'num', 387342.70, 836.66, 0.000, '', 2091.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (727, '0031', '1995-04-01', '2004-06-01', 'num', 516456.90, 1045.83, 0.000, '', 2509.98, 0.000, '');

INSERT INTO `INT_tariffe_onorari` VALUES (728, '0031', '1995-04-01', '2004-06-01', 'num', 1549371.00, 1254.99, 0.000, '', 3346.64, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (729, '0031', '1995-04-01', '2004-06-01', 'num', 2582285.00, 1673.32, 0.000, '', 4183.30, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (730, '0031', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.648, 'C', 0.00, 1.620, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (731, '0031', '1995-04-01', '2004-06-01', 'ind', 0.00, 105.87, 0.000, '', 1254.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (732, '0031', '1995-04-01', '2004-06-01', 'index', 0.00, 209.17, 0.000, '', 2509.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (733, '0032', '0000-00-00', '1994-09-30', 'num', 5164.57, 40.80, 0.000, '', 104.84, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (734, '0032', '0000-00-00', '1994-09-30', 'num', 25822.84, 61.46, 0.000, '', 209.68, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (735, '0032', '0000-00-00', '1994-09-30', 'num', 51645.69, 92.45, 0.000, '', 419.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (736, '0032', '0000-00-00', '1994-09-30', 'num', 103291.40, 122.92, 0.000, '', 629.04, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (737, '0032', '0000-00-00', '1994-09-30', 'num', 258228.50, 153.90, 0.000, '', 838.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (738, '0032', '0000-00-00', '1994-09-30', 'num', 387342.70, 184.38, 0.000, '', 1048.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (739, '0032', '0000-00-00', '1994-09-30', 'num', 516456.90, 245.83, 0.000, '', 1258.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (740, '0032', '0000-00-00', '1994-09-30', 'num', 1549371.00, 307.29, 0.000, '', 1677.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (741, '0032', '0000-00-00', '1994-09-30', 'num', 2582285.00, 430.21, 0.000, '', 2096.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (742, '0032', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.167, 'C', 0.00, 0.812, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (743, '0032', '0000-00-00', '1994-09-30', 'ind', 0.00, 45.96, 0.000, '', 419.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (744, '0032', '0000-00-00', '1994-09-30', 'index', 0.00, 153.90, 0.000, '', 1258.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (745, '0032', '1994-10-01', '1995-03-31', 'num', 5164.57, 43.90, 0.000, '', 104.84, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (746, '0032', '1994-10-01', '1995-03-31', 'num', 25822.84, 54.23, 0.000, '', 211.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (747, '0032', '1994-10-01', '1995-03-31', 'num', 51645.69, 100.71, 0.000, '', 423.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (748, '0032', '1994-10-01', '1995-03-31', 'num', 103291.40, 167.85, 0.000, '', 635.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (749, '0032', '1994-10-01', '1995-03-31', 'num', 258228.50, 237.57, 0.000, '', 846.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (750, '0032', '1994-10-01', '1995-03-31', 'num', 387342.70, 304.71, 0.000, '', 1058.74, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (751, '0032', '1994-10-01', '1995-03-31', 'num', 516456.90, 389.92, 0.000, '', 1270.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (752, '0032', '1994-10-01', '1995-03-31', 'num', 1549371.00, 472.56, 0.000, '', 1693.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (753, '0032', '1994-10-01', '1995-03-31', 'num', 2582285.00, 846.99, 0.000, '', 2117.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (754, '0032', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.247, 'C', 0.00, 0.816, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (755, '0032', '1994-10-01', '1995-03-31', 'ind', 0.00, 54.23, 0.000, '', 635.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (756, '0032', '1994-10-01', '1995-03-31', 'index', 0.00, 99.16, 0.000, '', 1264.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (757, '0032', '1995-04-01', '2004-06-01', 'num', 5164.57, 49.06, 0.000, '', 104.84, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (758, '0032', '1995-04-01', '2004-06-01', 'num', 25822.84, 54.23, 0.000, '', 211.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (759, '0032', '1995-04-01', '2004-06-01', 'num', 51645.69, 105.87, 0.000, '', 423.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (760, '0032', '1995-04-01', '2004-06-01', 'num', 103291.40, 211.75, 0.000, '', 635.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (761, '0032', '1995-04-01', '2004-06-01', 'num', 258228.50, 317.62, 0.000, '', 846.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (762, '0032', '1995-04-01', '2004-06-01', 'num', 387342.70, 423.49, 0.000, '', 1058.74, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (763, '0032', '1995-04-01', '2004-06-01', 'num', 516456.90, 529.37, 0.000, '', 1270.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (764, '0032', '1995-04-01', '2004-06-01', 'num', 1549371.00, 635.24, 0.000, '', 1693.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (765, '0032', '1995-04-01', '2004-06-01', 'num', 2582285.00, 846.99, 0.000, '', 2117.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (766, '0032', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.328, 'C', 0.00, 0.820, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (767, '0032', '1995-04-01', '2004-06-01', 'ind', 0.00, 54.23, 0.000, '', 635.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (768, '0032', '1995-04-01', '2004-06-01', 'index', 0.00, 105.87, 0.000, '', 1270.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (769, '0033', '0000-00-00', '1994-09-30', 'num', 5164.57, 33.05, 0.000, '', 56.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (770, '0033', '0000-00-00', '1994-09-30', 'num', 25822.84, 49.58, 0.000, '', 112.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (771, '0033', '0000-00-00', '1994-09-30', 'num', 51645.69, 74.37, 0.000, '', 225.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (772, '0033', '0000-00-00', '1994-09-30', 'num', 103291.40, 99.16, 0.000, '', 337.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (773, '0033', '0000-00-00', '1994-09-30', 'num', 258228.50, 123.95, 0.000, '', 450.35, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (774, '0033', '0000-00-00', '1994-09-30', 'num', 387342.70, 148.74, 0.000, '', 562.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (775, '0033', '0000-00-00', '1994-09-30', 'num', 516456.90, 198.32, 0.000, '', 675.53, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (776, '0033', '0000-00-00', '1994-09-30', 'num', 1549371.00, 247.90, 0.000, '', 900.70, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (777, '0033', '0000-00-00', '1994-09-30', 'num', 2582285.00, 347.06, 0.000, '', 1125.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (778, '0033', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.134, 'C', 0.00, 0.436, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (779, '0033', '0000-00-00', '1994-09-30', 'ind', 0.00, 37.18, 0.000, '', 225.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (780, '0033', '0000-00-00', '1994-09-30', 'index', 0.00, 123.95, 0.000, '', 675.53, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (781, '0033', '1994-10-01', '1995-03-31', 'num', 5164.57, 38.73, 0.000, '', 56.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (782, '0033', '1994-10-01', '1995-03-31', 'num', 25822.84, 28.41, 0.000, '', 113.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (783, '0033', '1994-10-01', '1995-03-31', 'num', 51645.69, 56.81, 0.000, '', 227.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (784, '0033', '1994-10-01', '1995-03-31', 'num', 103291.40, 108.46, 0.000, '', 340.86, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (785, '0033', '1994-10-01', '1995-03-31', 'num', 258228.50, 147.19, 0.000, '', 454.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (786, '0033', '1994-10-01', '1995-03-31', 'num', 387342.70, 188.51, 0.000, '', 568.10, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (787, '0033', '1994-10-01', '1995-03-31', 'num', 516456.90, 242.73, 0.000, '', 681.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (788, '0033', '1994-10-01', '1995-03-31', 'num', 1549371.00, 294.38, 0.000, '', 908.96, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (789, '0033', '1994-10-01', '1995-03-31', 'num', 2582285.00, 413.17, 0.000, '', 1136.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (790, '0033', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.155, 'C', 0.00, 0.438, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (791, '0033', '1994-10-01', '1995-03-31', 'ind', 0.00, 28.41, 0.000, '', 340.86, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (792, '0033', '1994-10-01', '1995-03-31', 'index', 0.00, 56.81, 0.000, '', 678.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (793, '0033', '1995-04-01', '2004-06-01', 'num', 5164.57, 41.32, 0.000, '', 56.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (794, '0033', '1995-04-01', '2004-06-01', 'num', 25822.84, 28.41, 0.000, '', 113.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (795, '0033', '1995-04-01', '2004-06-01', 'num', 51645.69, 56.81, 0.000, '', 227.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (796, '0033', '1995-04-01', '2004-06-01', 'num', 103291.40, 113.62, 0.000, '', 340.86, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (797, '0033', '1995-04-01', '2004-06-01', 'num', 258228.50, 170.43, 0.000, '', 454.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (798, '0033', '1995-04-01', '2004-06-01', 'num', 387342.70, 227.24, 0.000, '', 568.10, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (799, '0033', '1995-04-01', '2004-06-01', 'num', 516456.90, 284.05, 0.000, '', 681.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (800, '0033', '1995-04-01', '2004-06-01', 'num', 1549371.00, 340.86, 0.000, '', 908.96, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (801, '0033', '1995-04-01', '2004-06-01', 'num', 2582285.00, 454.48, 0.000, '', 1136.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (802, '0033', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.176, 'C', 0.00, 0.440, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (803, '0033', '1995-04-01', '2004-06-01', 'ind', 0.00, 28.41, 0.000, '', 340.86, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (804, '0033', '1995-04-01', '2004-06-01', 'index', 0.00, 56.81, 0.000, '', 681.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (805, '0034', '0000-00-00', '1994-09-30', 'num', 5164.57, 69.21, 0.000, '', 190.06, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (806, '0034', '0000-00-00', '1994-09-30', 'num', 25822.84, 103.81, 0.000, '', 380.11, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (807, '0034', '0000-00-00', '1994-09-30', 'num', 51645.69, 155.97, 0.000, '', 760.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (808, '0034', '0000-00-00', '1994-09-30', 'num', 103291.40, 207.62, 0.000, '', 1140.34, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (809, '0034', '0000-00-00', '1994-09-30', 'num', 258228.50, 259.78, 0.000, '', 1520.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (810, '0034', '0000-00-00', '1994-09-30', 'num', 387342.70, 311.42, 0.000, '', 1900.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (811, '0034', '0000-00-00', '1994-09-30', 'num', 516456.90, 415.23, 0.000, '', 2280.67, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (812, '0034', '0000-00-00', '1994-09-30', 'num', 1549371.00, 519.04, 0.000, '', 3036.77, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (813, '0034', '0000-00-00', '1994-09-30', 'num', 2582285.00, 540.73, 0.000, '', 3801.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (814, '0034', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.209, 'C', 0.00, 1.472, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (815, '0034', '0000-00-00', '1994-09-30', 'ind', 0.00, 77.98, 0.000, '', 760.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (816, '0034', '0000-00-00', '1994-09-30', 'index', 0.00, 259.78, 0.000, '', 2280.67, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (817, '0034', '1994-10-01', '1995-03-31', 'num', 5164.57, 77.47, 0.000, '', 190.06, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (818, '0034', '1994-10-01', '1995-03-31', 'num', 25822.84, 95.54, 0.000, '', 382.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (819, '0034', '1994-10-01', '1995-03-31', 'num', 51645.69, 139.44, 0.000, '', 764.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (820, '0034', '1994-10-01', '1995-03-31', 'num', 103291.40, 296.96, 0.000, '', 1146.53, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (821, '0034', '1994-10-01', '1995-03-31', 'num', 258228.50, 418.33, 0.000, '', 1528.71, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (822, '0034', '1994-10-01', '1995-03-31', 'num', 387342.70, 539.70, 0.000, '', 1910.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (823, '0034', '1994-10-01', '1995-03-31', 'num', 516456.90, 686.89, 0.000, '', 2293.07, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (824, '0034', '1994-10-01', '1995-03-31', 'num', 1549371.00, 834.08, 0.000, '', 3057.42, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (825, '0034', '1994-10-01', '1995-03-31', 'num', 2582285.00, 1528.71, 0.000, '', 3821.78, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (826, '0034', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.436, 'C', 0.00, 1.476, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (827, '0034', '1994-10-01', '1995-03-31', 'ind', 0.00, 95.54, 0.000, '', 1146.53, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (828, '0034', '1994-10-01', '1995-03-31', 'index', 0.00, 173.53, 0.000, '', 2286.87, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (829, '0034', '1995-04-01', '2004-06-01', 'num', 5164.57, 85.22, 0.000, '', 190.06, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (830, '0034', '1995-04-01', '2004-06-01', 'num', 25822.84, 95.54, 0.000, '', 382.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (831, '0034', '1995-04-01', '2004-06-01', 'num', 51645.69, 139.44, 0.000, '', 764.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (832, '0034', '1995-04-01', '2004-06-01', 'num', 103291.40, 382.18, 0.000, '', 1146.53, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (833, '0034', '1995-04-01', '2004-06-01', 'num', 258228.50, 573.27, 0.000, '', 1528.71, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (834, '0034', '1995-04-01', '2004-06-01', 'num', 387342.70, 764.36, 0.000, '', 1910.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (835, '0034', '1995-04-01', '2004-06-01', 'num', 516456.90, 955.45, 0.000, '', 2293.07, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (836, '0034', '1995-04-01', '2004-06-01', 'num', 1549371.00, 1146.53, 0.000, '', 3057.42, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (837, '0034', '1995-04-01', '2004-06-01', 'num', 2582285.00, 1528.71, 0.000, '', 3821.78, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (838, '0034', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.592, 'C', 0.00, 1.480, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (839, '0034', '1995-04-01', '2004-06-01', 'ind', 0.00, 95.54, 0.000, '', 1146.53, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (840, '0034', '1995-04-01', '2004-06-01', 'index', 0.00, 191.09, 0.000, '', 2293.07, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (841, '0035', '0000-00-00', '1994-09-30', 'num', 5164.57, 24.79, 0.000, '', 47.51, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (842, '0035', '0000-00-00', '1994-09-30', 'num', 25822.84, 37.18, 0.000, '', 95.03, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (843, '0035', '0000-00-00', '1994-09-30', 'num', 51645.69, 55.78, 0.000, '', 190.06, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (844, '0035', '0000-00-00', '1994-09-30', 'num', 103291.40, 74.37, 0.000, '', 285.08, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (845, '0035', '0000-00-00', '1994-09-30', 'num', 258228.50, 92.96, 0.000, '', 380.11, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (846, '0035', '0000-00-00', '1994-09-30', 'num', 387342.70, 111.55, 0.000, '', 475.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (847, '0035', '0000-00-00', '1994-09-30', 'num', 516456.90, 148.74, 0.000, '', 570.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (848, '0035', '0000-00-00', '1994-09-30', 'num', 1549371.00, 185.92, 0.000, '', 760.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (849, '0035', '0000-00-00', '1994-09-30', 'num', 2582285.00, 260.29, 0.000, '', 950.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (850, '0035', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.101, 'C', 0.00, 0.368, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (851, '0035', '0000-00-00', '1994-09-30', 'ind', 0.00, 27.89, 0.000, '', 190.06, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (852, '0035', '0000-00-00', '1994-09-30', 'index', 0.00, 92.96, 0.000, '', 570.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (853, '0035', '1994-10-01', '1995-03-31', 'num', 5164.57, 28.41, 0.000, '', 47.51, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (854, '0035', '1994-10-01', '1995-03-31', 'num', 25822.84, 25.82, 0.000, '', 95.54, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (855, '0035', '1994-10-01', '1995-03-31', 'num', 51645.69, 49.06, 0.000, '', 191.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (856, '0035', '1994-10-01', '1995-03-31', 'num', 103291.40, 85.22, 0.000, '', 286.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (857, '0035', '1994-10-01', '1995-03-31', 'num', 258228.50, 118.79, 0.000, '', 382.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (858, '0035', '1994-10-01', '1995-03-31', 'num', 387342.70, 152.35, 0.000, '', 477.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (859, '0035', '1994-10-01', '1995-03-31', 'num', 516456.90, 196.25, 0.000, '', 573.27, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (860, '0035', '1994-10-01', '1995-03-31', 'num', 1549371.00, 237.57, 0.000, '', 764.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (861, '0035', '1994-10-01', '1995-03-31', 'num', 2582285.00, 382.18, 0.000, '', 955.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (862, '0035', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.124, 'C', 0.00, 0.369, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (863, '0035', '1994-10-01', '1995-03-31', 'ind', 0.00, 25.82, 0.000, '', 286.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (864, '0035', '1994-10-01', '1995-03-31', 'index', 0.00, 49.06, 0.000, '', 571.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (865, '0035', '1995-04-01', '2004-06-01', 'num', 5164.57, 30.99, 0.000, '', 47.51, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (866, '0035', '1995-04-01', '2004-06-01', 'num', 25822.84, 25.82, 0.000, '', 95.54, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (867, '0035', '1995-04-01', '2004-06-01', 'num', 51645.69, 49.06, 0.000, '', 191.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (868, '0035', '1995-04-01', '2004-06-01', 'num', 103291.40, 95.54, 0.000, '', 286.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (869, '0035', '1995-04-01', '2004-06-01', 'num', 258228.50, 144.61, 0.000, '', 382.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (870, '0035', '1995-04-01', '2004-06-01', 'num', 387342.70, 191.09, 0.000, '', 477.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (871, '0035', '1995-04-01', '2004-06-01', 'num', 516456.90, 240.15, 0.000, '', 573.27, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (872, '0035', '1995-04-01', '2004-06-01', 'num', 1549371.00, 286.63, 0.000, '', 764.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (873, '0035', '1995-04-01', '2004-06-01', 'num', 2582285.00, 382.18, 0.000, '', 955.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (874, '0035', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.148, 'C', 0.00, 0.370, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (875, '0035', '1995-04-01', '2004-06-01', 'ind', 0.00, 25.82, 0.000, '', 286.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (876, '0035', '1995-04-01', '2004-06-01', 'index', 0.00, 49.06, 0.000, '', 573.27, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (877, '0036', '0000-00-00', '1994-09-30', 'num', 5164.57, 53.20, 0.000, '', 185.92, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (878, '0036', '0000-00-00', '1994-09-30', 'num', 25822.84, 80.05, 0.000, '', 371.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (879, '0036', '0000-00-00', '1994-09-30', 'num', 51645.69, 120.33, 0.000, '', 743.70, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (880, '0036', '0000-00-00', '1994-09-30', 'num', 103291.40, 160.10, 0.000, '', 1115.55, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (881, '0036', '0000-00-00', '1994-09-30', 'num', 258228.50, 200.39, 0.000, '', 1487.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (882, '0036', '0000-00-00', '1994-09-30', 'num', 387342.70, 240.15, 0.000, '', 1859.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (883, '0036', '0000-00-00', '1994-09-30', 'num', 516456.90, 320.20, 0.000, '', 2231.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (884, '0036', '0000-00-00', '1994-09-30', 'num', 1549371.00, 400.25, 0.000, '', 2974.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (885, '0036', '0000-00-00', '1994-09-30', 'num', 2582285.00, 560.36, 0.000, '', 3718.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (886, '0036', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.217, 'C', 0.00, 1.440, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (887, '0036', '0000-00-00', '1994-09-30', 'ind', 0.00, 59.91, 0.000, '', 743.70, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (888, '0036', '0000-00-00', '1994-09-30', 'index', 0.00, 200.39, 0.000, '', 2231.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (889, '0036', '1994-10-01', '1995-03-31', 'num', 5164.57, 59.39, 0.000, '', 185.92, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (890, '0036', '1994-10-01', '1995-03-31', 'num', 25822.84, 87.80, 0.000, '', 371.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (891, '0036', '1994-10-01', '1995-03-31', 'num', 51645.69, 154.94, 0.000, '', 743.70, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (892, '0036', '1994-10-01', '1995-03-31', 'num', 103291.40, 265.98, 0.000, '', 1115.55, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (893, '0036', '1994-10-01', '1995-03-31', 'num', 258228.50, 379.60, 0.000, '', 1487.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (894, '0036', '1994-10-01', '1995-03-31', 'num', 387342.70, 493.22, 0.000, '', 1859.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (895, '0036', '1994-10-01', '1995-03-31', 'num', 516456.90, 624.91, 0.000, '', 2231.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (896, '0036', '1994-10-01', '1995-03-31', 'num', 1549371.00, 759.19, 0.000, '', 2974.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (897, '0036', '1994-10-01', '1995-03-31', 'num', 2582285.00, 1487.40, 0.000, '', 3718.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (898, '0036', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.396, 'C', 0.00, 1.440, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (899, '0036', '1994-10-01', '1995-03-31', 'ind', 0.00, 87.80, 0.000, '', 1115.55, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (900, '0036', '1994-10-01', '1995-03-31', 'index', 0.00, 153.39, 0.000, '', 2231.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (901, '0036', '1995-04-01', '2004-06-01', 'num', 5164.57, 64.56, 0.000, '', 185.92, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (902, '0036', '1995-04-01', '2004-06-01', 'num', 25822.84, 92.96, 0.000, '', 371.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (903, '0036', '1995-04-01', '2004-06-01', 'num', 51645.69, 185.92, 0.000, '', 743.70, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (904, '0036', '1995-04-01', '2004-06-01', 'num', 103291.40, 371.85, 0.000, '', 1115.55, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (905, '0036', '1995-04-01', '2004-06-01', 'num', 258228.50, 557.77, 0.000, '', 1487.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (906, '0036', '1995-04-01', '2004-06-01', 'num', 387342.70, 743.70, 0.000, '', 1859.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (907, '0036', '1995-04-01', '2004-06-01', 'num', 516456.90, 929.62, 0.000, '', 2231.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (908, '0036', '1995-04-01', '2004-06-01', 'num', 1549371.00, 1115.55, 0.000, '', 2974.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (909, '0036', '1995-04-01', '2004-06-01', 'num', 2582285.00, 1487.40, 0.000, '', 3718.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (910, '0036', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.576, 'C', 0.00, 1.740, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (911, '0036', '1995-04-01', '2004-06-01', 'ind', 0.00, 92.96, 0.000, '', 1115.55, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (912, '0036', '1995-04-01', '2004-06-01', 'index', 0.00, 185.92, 0.000, '', 2231.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (913, '0037', '0000-00-00', '1994-09-30', 'num', 5164.57, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (914, '0037', '0000-00-00', '1994-09-30', 'num', 25822.84, 77.47, 0.000, '', 206.58, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (915, '0037', '0000-00-00', '1994-09-30', 'num', 51645.69, 116.20, 0.000, '', 413.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (916, '0037', '0000-00-00', '1994-09-30', 'num', 103291.40, 154.94, 0.000, '', 619.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (917, '0037', '0000-00-00', '1994-09-30', 'num', 258228.50, 193.67, 0.000, '', 826.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (918, '0037', '0000-00-00', '1994-09-30', 'num', 387342.70, 232.41, 0.000, '', 1032.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (919, '0037', '0000-00-00', '1994-09-30', 'num', 516456.90, 309.87, 0.000, '', 1239.50, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (920, '0037', '0000-00-00', '1994-09-30', 'num', 1549371.00, 387.34, 0.000, '', 1652.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (921, '0037', '0000-00-00', '1994-09-30', 'num', 2582285.00, 542.28, 0.000, '', 2065.83, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (922, '0037', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.210, 'C', 0.00, 0.800, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (923, '0037', '0000-00-00', '1994-09-30', 'ind', 0.00, 58.36, 0.000, '', 413.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (924, '0037', '0000-00-00', '1994-09-30', 'index', 0.00, 193.67, 0.000, '', 1239.50, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (925, '0037', '1994-10-01', '1995-03-31', 'num', 5164.57, 56.81, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (926, '0037', '1994-10-01', '1995-03-31', 'num', 25822.84, 51.65, 0.000, '', 206.58, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (927, '0037', '1994-10-01', '1995-03-31', 'num', 5164.57, 103.29, 0.000, '', 413.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (928, '0037', '1994-10-01', '1995-03-31', 'num', 103291.40, 180.76, 0.000, '', 619.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (929, '0037', '1994-10-01', '1995-03-31', 'num', 258228.50, 253.06, 0.000, '', 826.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (930, '0037', '1994-10-01', '1995-03-31', 'num', 387342.70, 322.79, 0.000, '', 1032.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (931, '0037', '1994-10-01', '1995-03-31', 'num', 516456.90, 413.17, 0.000, '', 1239.50, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (932, '0037', '1994-10-01', '1995-03-31', 'num', 1549371.00, 503.55, 0.000, '', 1652.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (933, '0037', '1994-10-01', '1995-03-31', 'num', 2582285.00, 826.33, 0.000, '', 2065.83, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (934, '0037', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.265, 'C', 0.00, 0.800, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (935, '0037', '1994-10-01', '1995-03-31', 'ind', 0.00, 51.65, 0.000, '', 619.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (936, '0037', '1994-10-01', '1995-03-31', 'index', 0.00, 103.29, 0.000, '', 1239.50, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (937, '0037', '1995-04-01', '2004-06-01', 'num', 5164.57, 61.97, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (938, '0037', '1995-04-01', '2004-06-01', 'num', 25822.84, 51.65, 0.000, '', 206.58, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (939, '0037', '1995-04-01', '2004-06-01', 'num', 51645.69, 103.29, 0.000, '', 413.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (940, '0037', '1995-04-01', '2004-06-01', 'num', 103291.40, 206.58, 0.000, '', 619.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (941, '0037', '1995-04-01', '2004-06-01', 'num', 258228.50, 309.87, 0.000, '', 826.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (942, '0037', '1995-04-01', '2004-06-01', 'num', 387342.70, 413.17, 0.000, '', 1032.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (943, '0037', '1995-04-01', '2004-06-01', 'num', 516456.90, 516.46, 0.000, '', 1239.50, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (944, '0037', '1995-04-01', '2004-06-01', 'num', 1549371.00, 619.75, 0.000, '', 1652.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (945, '0037', '1995-04-01', '2004-06-01', 'num', 2582285.00, 826.33, 0.000, '', 2065.83, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (946, '0037', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.320, 'C', 0.00, 0.800, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (947, '0037', '1995-04-01', '2004-06-01', 'ind', 0.00, 51.65, 0.000, '', 619.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (948, '0037', '1995-04-01', '2004-06-01', 'index', 0.00, 103.29, 0.000, '', 1239.50, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (949, '0038', '0000-00-00', '1994-09-30', 'num', 5164.57, 193.67, 0.000, '', 451.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (950, '0038', '0000-00-00', '1994-09-30', 'num', 25822.84, 290.77, 0.000, '', 903.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (951, '0038', '0000-00-00', '1994-09-30', 'num', 51645.69, 436.41, 0.000, '', 1807.60, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (952, '0038', '0000-00-00', '1994-09-30', 'num', 103291.40, 581.53, 0.000, '', 2711.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (953, '0038', '0000-00-00', '1994-09-30', 'num', 258228.50, 727.17, 0.000, '', 3615.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (954, '0038', '0000-00-00', '1994-09-30', 'num', 387342.70, 872.30, 0.000, '', 4519.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (955, '0038', '0000-00-00', '1994-09-30', 'num', 516456.90, 1163.06, 0.000, '', 5422.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (956, '0038', '0000-00-00', '1994-09-30', 'num', 1549371.00, 1453.83, 0.000, '', 7230.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (957, '0038', '0000-00-00', '1994-09-30', 'num', 2582285.00, 2035.36, 0.000, '', 9038.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (958, '0038', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.788, 'C', 0.00, 3.500, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (959, '0038', '0000-00-00', '1994-09-30', 'ind', 0.00, 217.94, 0.000, '', 1807.60, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (960, '0038', '0000-00-00', '1994-09-30', 'index', 0.00, 727.17, 0.000, '', 5422.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (961, '0038', '1994-10-01', '1995-03-31', 'num', 5164.57, 214.33, 0.000, '', 451.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (962, '0038', '1994-10-01', '1995-03-31', 'num', 25822.84, 227.24, 0.000, '', 903.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (963, '0038', '1994-10-01', '1995-03-31', 'num', 51645.69, 444.15, 0.000, '', 1807.60, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (964, '0038', '1994-10-01', '1995-03-31', 'num', 103291.40, 743.70, 0.000, '', 2711.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (965, '0038', '1994-10-01', '1995-03-31', 'num', 258228.50, 1043.24, 0.000, '', 3615.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (966, '0038', '1994-10-01', '1995-03-31', 'num', 387342.70, 1340.21, 0.000, '', 4519.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (967, '0038', '1994-10-01', '1995-03-31', 'num', 516456.90, 1712.05, 0.000, '', 5422.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (968, '0038', '1994-10-01', '1995-03-31', 'num', 1549371.00, 2083.90, 0.000, '', 7230.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (969, '0038', '1994-10-01', '1995-03-31', 'num', 2582285.00, 3615.20, 0.000, '', 9038.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (970, '0038', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 1.094, 'C', 0.00, 3.500, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (971, '0038', '1994-10-01', '1995-03-31', 'ind', 0.00, 227.24, 0.000, '', 2711.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (972, '0038', '1994-10-01', '1995-03-31', 'index', 0.00, 444.15, 0.000, '', 5422.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (973, '0038', '1995-04-01', '2004-06-01', 'num', 5164.57, 232.41, 0.000, '', 451.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (974, '0038', '1995-04-01', '2004-06-01', 'num', 25822.84, 227.24, 0.000, '', 903.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (975, '0038', '1995-04-01', '2004-06-01', 'num', 51645.69, 451.90, 0.000, '', 1807.60, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (976, '0038', '1995-04-01', '2004-06-01', 'num', 103291.40, 903.80, 0.000, '', 2711.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (977, '0038', '1995-04-01', '2004-06-01', 'num', 258228.50, 1355.70, 0.000, '', 3615.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (978, '0038', '1995-04-01', '2004-06-01', 'num', 387342.70, 1807.60, 0.000, '', 4519.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (979, '0038', '1995-04-01', '2004-06-01', 'num', 516456.90, 2259.50, 0.000, '', 5422.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (980, '0038', '1995-04-01', '2004-06-01', 'num', 1549371.00, 2711.40, 0.000, '', 7230.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (981, '0038', '1995-04-01', '2004-06-01', 'num', 2582285.00, 3615.20, 0.000, '', 9038.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (982, '0038', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 1.400, 'C', 0.00, 3.500, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (983, '0038', '1995-04-01', '2004-06-01', 'ind', 0.00, 227.24, 0.000, '', 2711.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (984, '0038', '1995-04-01', '2004-06-01', 'index', 0.00, 451.90, 0.000, '', 5422.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (985, '0039', '0000-00-00', '1994-09-30', 'num', 5164.57, 68.17, 0.000, '', 234.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (986, '0039', '0000-00-00', '1994-09-30', 'num', 25822.84, 102.26, 0.000, '', 469.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (987, '0039', '0000-00-00', '1994-09-30', 'num', 51645.69, 153.39, 0.000, '', 939.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (988, '0039', '0000-00-00', '1994-09-30', 'num', 103291.40, 204.52, 0.000, '', 1409.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (989, '0039', '0000-00-00', '1994-09-30', 'num', 258228.50, 255.65, 0.000, '', 1879.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (990, '0039', '0000-00-00', '1994-09-30', 'num', 387342.70, 306.78, 0.000, '', 2349.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (991, '0039', '0000-00-00', '1994-09-30', 'num', 516456.90, 409.03, 0.000, '', 2819.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (992, '0039', '0000-00-00', '1994-09-30', 'num', 1549371.00, 511.29, 0.000, '', 3759.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (993, '0039', '0000-00-00', '1994-09-30', 'num', 2582285.00, 715.81, 0.000, '', 4699.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (994, '0039', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.277, 'C', 0.00, 1.820, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (995, '0039', '0000-00-00', '1994-09-30', 'ind', 0.00, 76.95, 0.000, '', 939.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (996, '0039', '0000-00-00', '1994-09-30', 'index', 0.00, 255.65, 0.000, '', 2819.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (997, '0039', '1994-10-01', '1995-03-31', 'num', 5164.57, 77.47, 0.000, '', 234.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (998, '0039', '1994-10-01', '1995-03-31', 'num', 25822.84, 111.04, 0.000, '', 469.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (999, '0039', '1994-10-01', '1995-03-31', 'num', 51645.69, 196.25, 0.000, '', 939.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1000, '0039', '1994-10-01', '1995-03-31', 'num', 103291.40, 338.28, 0.000, '', 1409.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1001, '0039', '1994-10-01', '1995-03-31', 'num', 258228.50, 480.30, 0.000, '', 1879.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1002, '0039', '1994-10-01', '1995-03-31', 'num', 387342.70, 624.91, 0.000, '', 2349.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1003, '0039', '1994-10-01', '1995-03-31', 'num', 516456.90, 792.76, 0.000, '', 2819.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1004, '0039', '1994-10-01', '1995-03-31', 'num', 1549371.00, 960.61, 0.000, '', 3759.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1005, '0039', '1994-10-01', '1995-03-31', 'num', 2582285.00, 1297.86, 0.000, '', 4699.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1006, '0039', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.502, 'C', 0.00, 1.820, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1007, '0039', '1994-10-01', '1995-03-31', 'ind', 0.00, 111.04, 0.000, '', 1409.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1008, '0039', '1994-10-01', '1995-03-31', 'index', 0.00, 194.19, 0.000, '', 2819.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1009, '0039', '1995-04-01', '2004-06-01', 'num', 5164.57, 82.63, 0.000, '', 234.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1010, '0039', '1995-04-01', '2004-06-01', 'num', 25822.84, 118.79, 0.000, '', 469.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1011, '0039', '1995-04-01', '2004-06-01', 'num', 51645.69, 234.99, 0.000, '', 939.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1012, '0039', '1995-04-01', '2004-06-01', 'num', 103291.40, 469.98, 0.000, '', 1409.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1013, '0039', '1995-04-01', '2004-06-01', 'num', 258228.50, 704.96, 0.000, '', 1879.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1014, '0039', '1995-04-01', '2004-06-01', 'num', 387342.70, 939.95, 0.000, '', 2349.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1015, '0039', '1995-04-01', '2004-06-01', 'num', 516456.90, 1174.94, 0.000, '', 2819.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1016, '0039', '1995-04-01', '2004-06-01', 'num', 1549371.00, 1409.93, 0.000, '', 3759.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1017, '0039', '1995-04-01', '2004-06-01', 'num', 2582285.00, 1879.90, 0.000, '', 4699.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1018, '0039', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.728, 'C', 0.00, 1.820, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1019, '0039', '1995-04-01', '2004-06-01', 'ind', 0.00, 118.79, 0.000, '', 1409.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1020, '0039', '1995-04-01', '2004-06-01', 'index', 0.00, 234.99, 0.000, '', 2819.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1021, '0040', '0000-00-00', '1994-09-30', 'num', 5164.57, 54.23, 0.000, '', 185.92, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1022, '0040', '0000-00-00', '1994-09-30', 'num', 25822.84, 81.60, 0.000, '', 371.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1023, '0040', '0000-00-00', '1994-09-30', 'num', 51645.69, 122.92, 0.000, '', 743.70, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1024, '0040', '0000-00-00', '1994-09-30', 'num', 103291.40, 163.20, 0.000, '', 1115.55, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1025, '0040', '0000-00-00', '1994-09-30', 'num', 258228.50, 204.00, 0.000, '', 1487.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1026, '0040', '0000-00-00', '1994-09-30', 'num', 387342.70, 244.80, 0.000, '', 1859.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1027, '0040', '0000-00-00', '1994-09-30', 'num', 516456.90, 326.40, 0.000, '', 2231.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1028, '0040', '0000-00-00', '1994-09-30', 'num', 1549371.00, 408.00, 0.000, '', 2974.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1029, '0040', '0000-00-00', '1994-09-30', 'num', 2582285.00, 571.20, 0.000, '', 3718.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1030, '0040', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.221, 'C', 0.00, 1.440, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1031, '0040', '0000-00-00', '1994-09-30', 'ind', 0.00, 61.46, 0.000, '', 743.70, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1032, '0040', '0000-00-00', '1994-09-30', 'index', 0.00, 204.00, 0.000, '', 2231.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1033, '0040', '1994-10-01', '1995-03-31', 'num', 5164.57, 61.97, 0.000, '', 185.92, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1034, '0040', '1994-10-01', '1995-03-31', 'num', 25822.84, 87.80, 0.000, '', 371.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1035, '0040', '1994-10-01', '1995-03-31', 'num', 51645.69, 154.94, 0.000, '', 743.70, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1036, '0040', '1994-10-01', '1995-03-31', 'num', 103291.40, 268.56, 0.000, '', 1115.55, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1037, '0040', '1994-10-01', '1995-03-31', 'num', 258228.50, 382.18, 0.000, '', 1487.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1038, '0040', '1994-10-01', '1995-03-31', 'num', 387342.70, 495.80, 0.000, '', 1859.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1039, '0040', '1994-10-01', '1995-03-31', 'num', 516456.90, 630.08, 0.000, '', 2231.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1040, '0040', '1994-10-01', '1995-03-31', 'num', 1549371.00, 761.77, 0.000, '', 2974.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1041, '0040', '1994-10-01', '1995-03-31', 'num', 2582285.00, 1029.30, 0.000, '', 3718.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1042, '0040', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.398, 'C', 0.00, 1.440, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1043, '0040', '1994-10-01', '1995-03-31', 'ind', 0.00, 87.80, 0.000, '', 1115.55, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1044, '0040', '1994-10-01', '1995-03-31', 'index', 0.00, 154.42, 0.000, '', 2231.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1045, '0040', '1995-04-01', '2004-06-01', 'num', 5164.57, 67.14, 0.000, '', 185.92, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1046, '0040', '1995-04-01', '2004-06-01', 'num', 25822.84, 92.96, 0.000, '', 371.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1047, '0040', '1995-04-01', '2004-06-01', 'num', 51645.69, 185.92, 0.000, '', 743.70, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1048, '0040', '1995-04-01', '2004-06-01', 'num', 103291.40, 371.85, 0.000, '', 1115.55, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1049, '0040', '1995-04-01', '2004-06-01', 'num', 258228.50, 557.77, 0.000, '', 1487.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1050, '0040', '1995-04-01', '2004-06-01', 'num', 387342.70, 743.70, 0.000, '', 1859.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1051, '0040', '1995-04-01', '2004-06-01', 'num', 516456.90, 929.62, 0.000, '', 2231.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1052, '0040', '1995-04-01', '2004-06-01', 'num', 1549371.00, 1115.55, 0.000, '', 2974.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1053, '0040', '1995-04-01', '2004-06-01', 'num', 2582285.00, 1487.40, 0.000, '', 3718.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1054, '0040', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.576, 'C', 0.00, 1.440, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1055, '0040', '1995-04-01', '2004-06-01', 'ind', 0.00, 92.96, 0.000, '', 1115.55, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1056, '0040', '1995-04-01', '2004-06-01', 'index', 0.00, 185.92, 0.000, '', 2231.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1057, '0041', '0000-00-00', '1994-09-30', 'num', 258.23, 51.13, 0.000, '', 108.97, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1058, '0041', '0000-00-00', '1994-09-30', 'num', 516.46, 63.52, 0.000, '', 135.83, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1059, '0041', '0000-00-00', '1994-09-30', 'num', 1549.37, 95.54, 0.000, '', 204.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1060, '0041', '0000-00-00', '1994-09-30', 'num', 2582.28, 111.55, 0.000, '', 238.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1061, '0041', '0000-00-00', '1994-09-30', 'num', 5164.57, 127.05, 0.000, '', 271.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1062, '0041', '0000-00-00', '1994-09-30', 'num', 25822.84, 190.57, 0.000, '', 543.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1063, '0041', '0000-00-00', '1994-09-30', 'num', 51645.69, 286.12, 0.000, '', 1086.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1064, '0041', '0000-00-00', '1994-09-30', 'num', 103291.40, 381.15, 0.000, '', 1629.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1065, '0041', '0000-00-00', '1994-09-30', 'num', 258228.50, 476.69, 0.000, '', 2173.25, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1066, '0041', '0000-00-00', '1994-09-30', 'num', 387342.70, 571.72, 0.000, '', 2716.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1067, '0041', '0000-00-00', '1994-09-30', 'num', 516456.90, 762.29, 0.000, '', 3259.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1068, '0041', '0000-00-00', '1994-09-30', 'num', 1549371.00, 952.86, 0.000, '', 4346.50, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1069, '0041', '0000-00-00', '1994-09-30', 'num', 2582285.00, 1334.01, 0.000, '', 5433.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1070, '0041', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.517, 'C', 0.00, 2.104, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1071, '0041', '0000-00-00', '1994-09-30', 'ind', 0.00, 143.06, 0.000, '', 1629.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1072, '0041', '0000-00-00', '1994-09-30', 'index', 0.00, 476.69, 0.000, '', 3259.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1073, '0041', '1994-10-01', '1995-03-31', 'num', 258.23, 51.65, 0.000, '', 111.04, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1074, '0041', '1994-10-01', '1995-03-31', 'num', 516.46, 63.52, 0.000, '', 135.83, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1075, '0041', '1994-10-01', '1995-03-31', 'num', 1549.37, 95.54, 0.000, '', 204.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1076, '0041', '1994-10-01', '1995-03-31', 'num', 2582.28, 113.62, 0.000, '', 240.15, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1077, '0041', '1994-10-01', '1995-03-31', 'num', 5164.57, 129.11, 0.000, '', 273.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1078, '0041', '1994-10-01', '1995-03-31', 'num', 25822.84, 191.09, 0.000, '', 544.86, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1079, '0041', '1994-10-01', '1995-03-31', 'num', 51645.69, 286.63, 0.000, '', 1089.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1080, '0041', '1994-10-01', '1995-03-31', 'num', 103291.40, 464.81, 0.000, '', 1634.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1081, '0041', '1994-10-01', '1995-03-31', 'num', 258228.50, 648.15, 0.000, '', 2179.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1082, '0041', '1994-10-01', '1995-03-31', 'num', 387342.70, 831.50, 0.000, '', 2724.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1083, '0041', '1994-10-01', '1995-03-31', 'num', 516456.90, 1063.90, 0.000, '', 3269.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1084, '0041', '1994-10-01', '1995-03-31', 'num', 1549371.00, 1293.72, 0.000, '', 4358.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1085, '0041', '1994-10-01', '1995-03-31', 'num', 2582285.00, 1758.54, 0.000, '', 5448.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1086, '0041', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.680, 'C', 0.00, 2.107, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1087, '0041', '1994-10-01', '1995-03-31', 'ind', 0.00, 191.09, 0.000, '', 1634.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1088, '0041', '1994-10-01', '1995-03-31', 'index', 0.00, 286.63, 0.000, '', 3264.52, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1089, '0041', '1995-04-01', '2004-06-01', 'num', 258.23, 51.65, 0.000, '', 111.04, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1090, '0041', '1995-04-01', '2004-06-01', 'num', 516.46, 63.52, 0.000, '', 135.83, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1091, '0041', '1995-04-01', '2004-06-01', 'num', 1549.37, 95.54, 0.000, '', 204.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1092, '0041', '1995-04-01', '2004-06-01', 'num', 2582.28, 113.62, 0.000, '', 240.15, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1093, '0041', '1995-04-01', '2004-06-01', 'num', 5164.57, 129.11, 0.000, '', 273.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1094, '0041', '1995-04-01', '2004-06-01', 'num', 25822.84, 191.09, 0.000, '', 544.86, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1095, '0041', '1995-04-01', '2004-06-01', 'num', 51645.69, 286.63, 0.000, '', 1089.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1096, '0041', '1995-04-01', '2004-06-01', 'num', 103291.40, 544.86, 0.000, '', 1634.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1097, '0041', '1995-04-01', '2004-06-01', 'num', 258228.50, 818.58, 0.000, '', 2179.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1098, '0041', '1995-04-01', '2004-06-01', 'num', 387342.70, 1110.38, 0.000, '', 2724.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1099, '0041', '1995-04-01', '2004-06-01', 'num', 516456.90, 1363.45, 0.000, '', 3269.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1100, '0041', '1995-04-01', '2004-06-01', 'num', 1549371.00, 1634.59, 0.000, '', 4358.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1101, '0041', '1995-04-01', '2004-06-01', 'num', 2582285.00, 2179.45, 0.000, '', 5448.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1102, '0041', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.844, 'C', 0.00, 2.110, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1103, '0041', '1995-04-01', '2004-06-01', 'ind', 0.00, 191.09, 0.000, '', 1634.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1104, '0041', '1995-04-01', '2004-06-01', 'index', 0.00, 286.63, 0.000, '', 3269.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1105, '0042', '0000-00-00', '1994-09-30', 'num', 258.23, 25.82, 0.000, '', 54.74, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1106, '0042', '0000-00-00', '1994-09-30', 'num', 516.46, 32.02, 0.000, '', 68.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1107, '0042', '0000-00-00', '1994-09-30', 'num', 1549.37, 48.03, 0.000, '', 102.26, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1108, '0042', '0000-00-00', '1994-09-30', 'num', 2582.28, 56.29, 0.000, '', 119.30, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1109, '0042', '0000-00-00', '1994-09-30', 'num', 5164.57, 64.04, 0.000, '', 136.34, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1110, '0042', '0000-00-00', '1994-09-30', 'num', 25822.84, 96.06, 0.000, '', 272.69, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1111, '0042', '0000-00-00', '1994-09-30', 'num', 51645.69, 144.09, 0.000, '', 545.38, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1112, '0042', '0000-00-00', '1994-09-30', 'num', 103291.40, 192.12, 0.000, '', 818.07, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1113, '0042', '0000-00-00', '1994-09-30', 'num', 258228.50, 240.15, 0.000, '', 1090.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1114, '0042', '0000-00-00', '1994-09-30', 'num', 387342.70, 288.18, 0.000, '', 1363.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1115, '0042', '0000-00-00', '1994-09-30', 'num', 516456.90, 384.24, 0.000, '', 1636.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1116, '0042', '0000-00-00', '1994-09-30', 'num', 1549371.00, 480.30, 0.000, '', 2181.51, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1117, '0042', '0000-00-00', '1994-09-30', 'num', 2582285.00, 672.43, 0.000, '', 2726.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1118, '0042', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.260, 'C', 0.00, 1.056, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1119, '0042', '0000-00-00', '1994-09-30', 'ind', 0.00, 72.30, 0.000, '', 818.07, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1120, '0042', '0000-00-00', '1994-09-30', 'index', 0.00, 240.15, 0.000, '', 1636.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1121, '0042', '1994-10-01', '1995-03-31', 'num', 258.23, 25.82, 0.000, '', 56.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1122, '0042', '1994-10-01', '1995-03-31', 'num', 516.46, 32.02, 0.000, '', 68.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1123, '0042', '1994-10-01', '1995-03-31', 'num', 1549.37, 48.03, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1124, '0042', '1994-10-01', '1995-03-31', 'num', 2582.28, 56.81, 0.000, '', 121.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1125, '0042', '1994-10-01', '1995-03-31', 'num', 5164.57, 64.56, 0.000, '', 136.86, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1126, '0042', '1994-10-01', '1995-03-31', 'num', 25822.84, 98.13, 0.000, '', 273.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1127, '0042', '1994-10-01', '1995-03-31', 'num', 51645.69, 147.19, 0.000, '', 547.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1128, '0042', '1994-10-01', '1995-03-31', 'num', 103291.40, 234.99, 0.000, '', 821.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1129, '0042', '1994-10-01', '1995-03-31', 'num', 258228.50, 325.37, 0.000, '', 1094.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1130, '0042', '1994-10-01', '1995-03-31', 'num', 387342.70, 418.33, 0.000, '', 1368.61, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1131, '0042', '1994-10-01', '1995-03-31', 'num', 516456.90, 534.53, 0.000, '', 1642.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1132, '0042', '1994-10-01', '1995-03-31', 'num', 1549371.00, 650.74, 0.000, '', 2189.78, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1133, '0042', '1994-10-01', '1995-03-31', 'num', 2582285.00, 885.72, 0.000, '', 2737.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1134, '0042', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.342, 'C', 0.00, 1.058, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1135, '0042', '1994-10-01', '1995-03-31', 'ind', 0.00, 98.13, 0.000, '', 821.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1136, '0042', '1994-10-01', '1995-03-31', 'index', 0.00, 145.64, 0.000, '', 1639.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1137, '0042', '1995-04-01', '2004-06-01', 'num', 258.23, 25.82, 0.000, '', 56.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1138, '0042', '1995-04-01', '2004-06-01', 'num', 516.46, 32.02, 0.000, '', 68.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1139, '0042', '1995-04-01', '2004-06-01', 'num', 1549.37, 48.03, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1140, '0042', '1995-04-01', '2004-06-01', 'num', 2582.28, 56.81, 0.000, '', 121.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1141, '0042', '1995-04-01', '2004-06-01', 'num', 5164.57, 64.56, 0.000, '', 136.86, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1142, '0042', '1995-04-01', '2004-06-01', 'num', 25822.84, 98.13, 0.000, '', 273.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1143, '0042', '1995-04-01', '2004-06-01', 'num', 51645.69, 147.19, 0.000, '', 547.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1144, '0042', '1995-04-01', '2004-06-01', 'num', 103291.40, 273.72, 0.000, '', 821.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1145, '0042', '1995-04-01', '2004-06-01', 'num', 258228.50, 410.58, 0.000, '', 1094.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1146, '0042', '1995-04-01', '2004-06-01', 'num', 387342.70, 547.44, 0.000, '', 1368.61, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1147, '0042', '1995-04-01', '2004-06-01', 'num', 516456.90, 684.31, 0.000, '', 1642.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1148, '0042', '1995-04-01', '2004-06-01', 'num', 1549371.00, 821.17, 0.000, '', 2189.78, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1149, '0042', '1995-04-01', '2004-06-01', 'num', 2582285.00, 1094.89, 0.000, '', 2737.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1150, '0042', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.424, 'C', 0.00, 1.060, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1151, '0042', '1995-04-01', '2004-06-01', 'ind', 0.00, 98.13, 0.000, '', 821.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1152, '0042', '1995-04-01', '2004-06-01', 'index', 0.00, 147.19, 0.000, '', 1642.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1153, '0045', '0000-00-00', '1994-09-30', 'num', 258.23, 77.98, 0.000, '', 216.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1154, '0045', '0000-00-00', '1994-09-30', 'num', 516.46, 97.09, 0.000, '', 271.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1155, '0045', '0000-00-00', '1994-09-30', 'num', 1549.37, 145.64, 0.000, '', 406.97, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1156, '0045', '0000-00-00', '1994-09-30', 'num', 2582.28, 169.91, 0.000, '', 474.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1157, '0045', '0000-00-00', '1994-09-30', 'num', 5164.57, 194.19, 0.000, '', 542.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1158, '0045', '0000-00-00', '1994-09-30', 'num', 25822.84, 291.28, 0.000, '', 1084.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1159, '0045', '0000-00-00', '1994-09-30', 'num', 51645.69, 436.92, 0.000, '', 2169.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1160, '0045', '0000-00-00', '1994-09-30', 'num', 103291.40, 582.56, 0.000, '', 3253.68, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1161, '0045', '0000-00-00', '1994-09-30', 'num', 258228.50, 728.20, 0.000, '', 4338.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1162, '0045', '0000-00-00', '1994-09-30', 'num', 387342.70, 873.85, 0.000, '', 5422.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1163, '0045', '0000-00-00', '1994-09-30', 'num', 516456.90, 1165.13, 0.000, '', 6507.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1164, '0045', '0000-00-00', '1994-09-30', 'num', 1549371.00, 1456.41, 0.000, '', 8676.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1165, '0045', '0000-00-00', '1994-09-30', 'num', 2582285.00, 2038.97, 0.000, '', 10845.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1166, '0045', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.790, 'C', 0.00, 4.200, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1167, '0045', '0000-00-00', '1994-09-30', 'ind', 0.00, 218.46, 0.000, '', 3253.68, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1168, '0045', '0000-00-00', '1994-09-30', 'index', 0.00, 728.20, 0.000, '', 6507.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1169, '0045', '1994-10-01', '1995-03-31', 'num', 258.23, 80.05, 0.000, '', 216.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1170, '0045', '1994-10-01', '1995-03-31', 'num', 516.46, 97.09, 0.000, '', 271.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1171, '0045', '1994-10-01', '1995-03-31', 'num', 1549.37, 147.19, 0.000, '', 408.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1172, '0045', '1994-10-01', '1995-03-31', 'num', 2582.28, 170.43, 0.000, '', 475.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1173, '0045', '1994-10-01', '1995-03-31', 'num', 5164.57, 196.25, 0.000, '', 542.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1174, '0045', '1994-10-01', '1995-03-31', 'num', 25822.84, 291.80, 0.000, '', 1084.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1175, '0045', '1994-10-01', '1995-03-31', 'num', 51645.69, 438.99, 0.000, '', 2169.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1176, '0045', '1994-10-01', '1995-03-31', 'num', 103291.40, 834.08, 0.000, '', 3253.68, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1177, '0045', '1994-10-01', '1995-03-31', 'num', 258228.50, 1177.52, 0.000, '', 4338.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1178, '0045', '1994-10-01', '1995-03-31', 'num', 387342.70, 1523.55, 0.000, '', 5422.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1179, '0045', '1994-10-01', '1995-03-31', 'num', 516456.90, 1939.30, 0.000, '', 6507.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1180, '0045', '1994-10-01', '1995-03-31', 'num', 1549371.00, 2355.04, 0.000, '', 8676.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1181, '0045', '1994-10-01', '1995-03-31', 'num', 2582285.00, 3189.12, 0.000, '', 10845.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1182, '0045', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 1.235, 'C', 0.00, 4.200, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1183, '0045', '1994-10-01', '1995-03-31', 'ind', 0.00, 291.80, 0.000, '', 3253.68, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1184, '0045', '1994-10-01', '1995-03-31', 'index', 0.00, 437.96, 0.000, '', 6507.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1185, '0045', '1995-04-01', '2004-06-01', 'num', 258.23, 80.05, 0.000, '', 216.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1186, '0045', '1995-04-01', '2004-06-01', 'num', 516.46, 97.09, 0.000, '', 271.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1187, '0045', '1995-04-01', '2004-06-01', 'num', 1549.37, 147.19, 0.000, '', 408.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1188, '0045', '1995-04-01', '2004-06-01', 'num', 2582.28, 170.43, 0.000, '', 475.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1189, '0045', '1995-04-01', '2004-06-01', 'num', 5164.57, 196.25, 0.000, '', 542.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1190, '0045', '1995-04-01', '2004-06-01', 'num', 25822.84, 291.80, 0.000, '', 1084.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1191, '0045', '1995-04-01', '2004-06-01', 'num', 51645.69, 438.99, 0.000, '', 2169.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1192, '0045', '1995-04-01', '2004-06-01', 'num', 103291.40, 1084.56, 0.000, '', 3253.68, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1193, '0045', '1995-04-01', '2004-06-01', 'num', 258228.50, 1626.84, 0.000, '', 4338.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1194, '0045', '1995-04-01', '2004-06-01', 'num', 387342.70, 2169.12, 0.000, '', 5422.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1195, '0045', '1995-04-01', '2004-06-01', 'num', 516456.90, 2711.40, 0.000, '', 6507.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1196, '0045', '1995-04-01', '2004-06-01', 'num', 1549371.00, 3253.68, 0.000, '', 8676.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1197, '0045', '1995-04-01', '2004-06-01', 'num', 2582285.00, 4338.24, 0.000, '', 10845.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1198, '0045', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 1.680, 'C', 0.00, 4.200, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1199, '0045', '1995-04-01', '2004-06-01', 'ind', 0.00, 291.80, 0.000, '', 3253.68, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1200, '0045', '1995-04-01', '2004-06-01', 'index', 0.00, 438.99, 0.000, '', 6507.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1201, '0046', '0000-00-00', '1994-09-30', 'num', 258.23, 39.25, 0.000, '', 108.97, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1202, '0046', '0000-00-00', '1994-09-30', 'num', 516.46, 48.55, 0.000, '', 135.83, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1203, '0046', '0000-00-00', '1994-09-30', 'num', 1549.37, 72.82, 0.000, '', 204.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1204, '0046', '0000-00-00', '1994-09-30', 'num', 2582.28, 85.22, 0.000, '', 238.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1205, '0046', '0000-00-00', '1994-09-30', 'num', 5164.57, 97.09, 0.000, '', 271.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1206, '0046', '0000-00-00', '1994-09-30', 'num', 25822.84, 145.64, 0.000, '', 543.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1207, '0046', '0000-00-00', '1994-09-30', 'num', 51645.69, 218.46, 0.000, '', 1086.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1208, '0046', '0000-00-00', '1994-09-30', 'num', 103291.40, 291.28, 0.000, '', 1629.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1209, '0046', '0000-00-00', '1994-09-30', 'num', 258228.50, 364.10, 0.000, '', 2173.25, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1210, '0046', '0000-00-00', '1994-09-30', 'num', 387342.70, 436.92, 0.000, '', 2716.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1211, '0046', '0000-00-00', '1994-09-30', 'num', 516456.90, 582.56, 0.000, '', 3259.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1212, '0046', '0000-00-00', '1994-09-30', 'num', 1549371.00, 728.20, 0.000, '', 4346.50, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1213, '0046', '0000-00-00', '1994-09-30', 'num', 2582285.00, 1019.49, 0.000, '', 5433.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1214, '0046', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.395, 'C', 0.00, 2.104, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1215, '0046', '0000-00-00', '1994-09-30', 'ind', 0.00, 109.49, 0.000, '', 1629.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1216, '0046', '0000-00-00', '1994-09-30', 'index', 0.00, 364.10, 0.000, '', 3259.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1217, '0046', '1994-10-01', '1995-03-31', 'num', 258.23, 41.32, 0.000, '', 111.04, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1218, '0046', '1994-10-01', '1995-03-31', 'num', 516.46, 48.55, 0.000, '', 135.83, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1219, '0046', '1994-10-01', '1995-03-31', 'num', 1549.37, 74.89, 0.000, '', 204.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1220, '0046', '1994-10-01', '1995-03-31', 'num', 2582.28, 85.22, 0.000, '', 240.15, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1221, '0046', '1994-10-01', '1995-03-31', 'num', 5164.57, 98.13, 0.000, '', 273.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1222, '0046', '1994-10-01', '1995-03-31', 'num', 25822.84, 147.19, 0.000, '', 544.86, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1223, '0046', '1994-10-01', '1995-03-31', 'num', 51645.69, 222.08, 0.000, '', 1089.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1224, '0046', '1994-10-01', '1995-03-31', 'num', 103291.40, 464.81, 0.000, '', 1634.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1225, '0046', '1994-10-01', '1995-03-31', 'num', 258228.50, 648.15, 0.000, '', 2179.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1226, '0046', '1994-10-01', '1995-03-31', 'num', 387342.70, 831.50, 0.000, '', 2724.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1227, '0046', '1994-10-01', '1995-03-31', 'num', 516456.90, 1063.90, 0.000, '', 3269.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1228, '0046', '1994-10-01', '1995-03-31', 'num', 1549371.00, 1293.72, 0.000, '', 4358.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1229, '0046', '1994-10-01', '1995-03-31', 'num', 2582285.00, 1758.54, 0.000, '', 5448.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1230, '0046', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.619, 'C', 0.00, 2.107, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1231, '0046', '1994-10-01', '1995-03-31', 'ind', 0.00, 147.19, 0.000, '', 1634.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1232, '0046', '1994-10-01', '1995-03-31', 'index', 0.00, 220.53, 0.000, '', 3264.52, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1233, '0046', '1995-04-01', '2004-06-01', 'num', 258.23, 41.32, 0.000, '', 111.04, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1234, '0046', '1995-04-01', '2004-06-01', 'num', 516.46, 48.55, 0.000, '', 135.83, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1235, '0046', '1995-04-01', '2004-06-01', 'num', 1549.37, 74.89, 0.000, '', 204.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1236, '0046', '1995-04-01', '2004-06-01', 'num', 2582.28, 85.22, 0.000, '', 240.15, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1237, '0046', '1995-04-01', '2004-06-01', 'num', 5164.57, 98.13, 0.000, '', 273.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1238, '0046', '1995-04-01', '2004-06-01', 'num', 25822.84, 147.19, 0.000, '', 544.86, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1239, '0046', '1995-04-01', '2004-06-01', 'num', 51645.69, 222.08, 0.000, '', 1089.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1240, '0046', '1995-04-01', '2004-06-01', 'num', 103291.40, 544.86, 0.000, '', 1634.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1241, '0046', '1995-04-01', '2004-06-01', 'num', 258228.50, 818.58, 0.000, '', 2179.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1242, '0046', '1995-04-01', '2004-06-01', 'num', 387342.70, 1089.72, 0.000, '', 2724.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1243, '0046', '1995-04-01', '2004-06-01', 'num', 516456.90, 1363.45, 0.000, '', 3269.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1244, '0046', '1995-04-01', '2004-06-01', 'num', 1549371.00, 1634.59, 0.000, '', 4358.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1245, '0046', '1995-04-01', '2004-06-01', 'num', 2582285.00, 2179.45, 0.000, '', 5448.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1246, '0046', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.844, 'C', 0.00, 2.110, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1247, '0046', '1995-04-01', '2004-06-01', 'ind', 0.00, 147.19, 0.000, '', 1634.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1248, '0046', '1995-04-01', '2004-06-01', 'index', 0.00, 222.08, 0.000, '', 3269.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1249, '0050', '0000-00-00', '1994-09-30', 'num', 258.23, 8.26, 0.000, '', 47.51, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1250, '0050', '0000-00-00', '1994-09-30', 'num', 516.46, 9.81, 0.000, '', 59.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1251, '0050', '0000-00-00', '1994-09-30', 'num', 1549.37, 14.98, 0.000, '', 89.35, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1252, '0050', '0000-00-00', '1994-09-30', 'num', 2582.28, 17.56, 0.000, '', 104.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1253, '0050', '0000-00-00', '1994-09-30', 'num', 5164.57, 19.63, 0.000, '', 118.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1254, '0050', '0000-00-00', '1994-09-30', 'num', 25822.84, 29.44, 0.000, '', 237.57, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1255, '0050', '0000-00-00', '1994-09-30', 'num', 51645.69, 44.42, 0.000, '', 475.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1256, '0050', '0000-00-00', '1994-09-30', 'num', 103291.40, 58.88, 0.000, '', 712.71, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1257, '0050', '0000-00-00', '1994-09-30', 'num', 258228.50, 73.85, 0.000, '', 950.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1258, '0050', '0000-00-00', '1994-09-30', 'num', 387342.70, 88.31, 0.000, '', 1187.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1259, '0050', '0000-00-00', '1994-09-30', 'num', 516456.90, 117.75, 0.000, '', 1425.42, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1260, '0050', '0000-00-00', '1994-09-30', 'num', 1549371.00, 147.19, 0.000, '', 1900.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1261, '0050', '0000-00-00', '1994-09-30', 'num', 2582285.00, 206.07, 0.000, '', 2375.70, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1262, '0050', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.080, 'C', 0.00, 0.920, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1263, '0050', '0000-00-00', '1994-09-30', 'ind', 0.00, 29.44, 0.000, '', 712.71, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1264, '0050', '0000-00-00', '1994-09-30', 'index', 0.00, 73.85, 0.000, '', 1425.42, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1265, '0050', '1994-10-01', '1995-03-31', 'num', 258.23, 10.33, 0.000, '', 49.06, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1266, '0050', '1994-10-01', '1995-03-31', 'num', 516.46, 12.91, 0.000, '', 59.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1267, '0050', '1994-10-01', '1995-03-31', 'num', 1549.37, 18.08, 0.000, '', 90.38, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1268, '0050', '1994-10-01', '1995-03-31', 'num', 2582.28, 20.66, 0.000, '', 105.87, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1269, '0050', '1994-10-01', '1995-03-31', 'num', 5164.57, 23.24, 0.000, '', 118.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1270, '0050', '1994-10-01', '1995-03-31', 'num', 25822.84, 36.15, 0.000, '', 237.57, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1271, '0050', '1994-10-01', '1995-03-31', 'num', 51645.69, 54.23, 0.000, '', 475.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1272, '0050', '1994-10-01', '1995-03-31', 'num', 103291.40, 149.77, 0.000, '', 712.71, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1273, '0050', '1994-10-01', '1995-03-31', 'num', 258228.50, 216.91, 0.000, '', 950.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1274, '0050', '1994-10-01', '1995-03-31', 'num', 387342.70, 284.05, 0.000, '', 1187.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1275, '0050', '1994-10-01', '1995-03-31', 'num', 516456.90, 356.36, 0.000, '', 1425.42, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1276, '0050', '1994-10-01', '1995-03-31', 'num', 1549371.00, 431.24, 0.000, '', 1900.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1277, '0050', '1994-10-01', '1995-03-31', 'num', 2582285.00, 562.94, 0.000, '', 2375.70, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1278, '0050', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.224, 'C', 0.00, 0.920, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1279, '0050', '1994-10-01', '1995-03-31', 'ind', 0.00, 36.15, 0.000, '', 475.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1280, '0050', '1994-10-01', '1995-03-31', 'index', 0.00, 52.16, 0.000, '', 1425.42, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1281, '0050', '1995-04-01', '2004-06-01', 'num', 258.23, 10.33, 0.000, '', 49.06, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1282, '0050', '1995-04-01', '2004-06-01', 'num', 516.46, 12.91, 0.000, '', 59.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1283, '0050', '1995-04-01', '2004-06-01', 'num', 1549.37, 20.66, 0.000, '', 90.38, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1284, '0050', '1995-04-01', '2004-06-01', 'num', 2582.28, 23.24, 0.000, '', 105.87, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1285, '0050', '1995-04-01', '2004-06-01', 'num', 5164.57, 25.82, 0.000, '', 118.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1286, '0050', '1995-04-01', '2004-06-01', 'num', 25822.84, 38.73, 0.000, '', 237.57, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1287, '0050', '1995-04-01', '2004-06-01', 'num', 51645.69, 59.39, 0.000, '', 475.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1288, '0050', '1995-04-01', '2004-06-01', 'num', 103291.40, 237.57, 0.000, '', 712.71, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1289, '0050', '1995-04-01', '2004-06-01', 'num', 258228.50, 356.36, 0.000, '', 950.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1290, '0050', '1995-04-01', '2004-06-01', 'num', 387342.70, 475.14, 0.000, '', 1187.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1291, '0050', '1995-04-01', '2004-06-01', 'num', 516456.90, 593.93, 0.000, '', 1425.42, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1292, '0050', '1995-04-01', '2004-06-01', 'num', 1549371.00, 712.71, 0.000, '', 1900.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1293, '0050', '1995-04-01', '2004-06-01', 'num', 2582285.00, 950.28, 0.000, '', 2375.70, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1294, '0050', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.368, 'C', 0.00, 0.920, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1295, '0050', '1995-04-01', '2004-06-01', 'ind', 0.00, 38.73, 0.000, '', 475.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1296, '0050', '1995-04-01', '2004-06-01', 'index', 0.00, 59.39, 0.000, '', 1425.42, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1297, '0051', '0000-00-00', '1994-09-30', 'num', 516456.90, 25.82, 0.500, 'A', 0.00, 5.000, 'A');
INSERT INTO `INT_tariffe_onorari` VALUES (1298, '0051', '1994-10-01', '1995-03-31', 'num', 258.23, 10.33, 0.000, '', 10.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1299, '0051', '1994-10-01', '1995-03-31', 'num', 516.46, 10.33, 0.000, '', 10.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1300, '0051', '1994-10-01', '1995-03-31', 'num', 1549.37, 18.08, 0.000, '', 18.08, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1301, '0051', '1994-10-01', '1995-03-31', 'num', 2582.28, 20.66, 0.000, '', 20.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1302, '0051', '1994-10-01', '1995-03-31', 'num', 5164.57, 20.66, 0.000, '', 20.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1303, '0051', '1994-10-01', '1995-03-31', 'num', 25822.84, 30.99, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1304, '0051', '1994-10-01', '1995-03-31', 'num', 51645.69, 49.06, 0.000, '', 49.06, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1305, '0051', '1994-10-01', '1995-03-31', 'num', 103291.40, 85.22, 0.000, '', 85.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1306, '0051', '1994-10-01', '1995-03-31', 'num', 258228.50, 121.37, 0.000, '', 121.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1307, '0051', '1994-10-01', '1995-03-31', 'num', 387342.70, 157.52, 0.000, '', 157.52, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1308, '0051', '1994-10-01', '1995-03-31', 'num', 516456.90, 201.42, 0.000, '', 201.42, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1309, '0051', '1994-10-01', '1995-03-31', 'num', 1549371.00, 242.73, 0.000, '', 242.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1310, '0051', '1994-10-01', '1995-03-31', 'num', 2582285.00, 327.95, 0.000, '', 327.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1311, '0051', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.127, 'C', 0.00, 0.127, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1312, '0051', '1994-10-01', '1995-03-31', 'ind', 0.00, 30.99, 0.000, '', 85.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1313, '0051', '1994-10-01', '1995-03-31', 'index', 0.00, 49.06, 0.000, '', 201.42, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1314, '0051', '1995-04-01', '2004-06-01', 'num', 258.23, 10.33, 0.000, '', 10.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1315, '0051', '1995-04-01', '2004-06-01', 'num', 516.46, 12.91, 0.000, '', 12.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1316, '0051', '1995-04-01', '2004-06-01', 'num', 1549.37, 18.08, 0.000, '', 18.08, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1317, '0051', '1995-04-01', '2004-06-01', 'num', 2582.28, 20.66, 0.000, '', 20.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1318, '0051', '1995-04-01', '2004-06-01', 'num', 5164.57, 23.24, 0.000, '', 23.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1319, '0051', '1995-04-01', '2004-06-01', 'num', 25822.84, 36.15, 0.000, '', 36.15, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1320, '0051', '1995-04-01', '2004-06-01', 'num', 51645.69, 54.23, 0.000, '', 54.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1321, '0051', '1995-04-01', '2004-06-01', 'num', 103291.40, 116.20, 0.000, '', 116.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1322, '0051', '1995-04-01', '2004-06-01', 'num', 258228.50, 175.60, 0.000, '', 175.60, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1323, '0051', '1995-04-01', '2004-06-01', 'num', 387342.70, 232.41, 0.000, '', 232.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1324, '0051', '1995-04-01', '2004-06-01', 'num', 516456.90, 291.80, 0.000, '', 291.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1325, '0051', '1995-04-01', '2004-06-01', 'num', 1549371.00, 348.61, 0.000, '', 348.61, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1326, '0051', '1995-04-01', '2004-06-01', 'num', 2582285.00, 464.81, 0.000, '', 464.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1327, '0051', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.180, 'C', 0.00, 0.180, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1328, '0051', '1995-04-01', '2004-06-01', 'ind', 0.00, 36.15, 0.000, '', 116.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1329, '0051', '1995-04-01', '2004-06-01', 'index', 0.00, 54.23, 0.000, '', 291.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1330, '0052', '0000-00-00', '1994-09-30', 'num', 258.23, 14.46, 0.000, '', 46.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1331, '0052', '0000-00-00', '1994-09-30', 'num', 516.46, 18.08, 0.000, '', 57.84, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1332, '0052', '0000-00-00', '1994-09-30', 'num', 1549.37, 27.37, 0.000, '', 86.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1333, '0052', '0000-00-00', '1994-09-30', 'num', 2582.28, 32.02, 0.000, '', 101.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1334, '0052', '0000-00-00', '1994-09-30', 'num', 5164.57, 36.15, 0.000, '', 115.69, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1335, '0052', '0000-00-00', '1994-09-30', 'num', 25822.84, 54.23, 0.000, '', 231.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1336, '0052', '0000-00-00', '1994-09-30', 'num', 51645.69, 81.60, 0.000, '', 462.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1337, '0052', '0000-00-00', '1994-09-30', 'num', 103291.40, 108.46, 0.000, '', 694.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1338, '0052', '0000-00-00', '1994-09-30', 'num', 258228.50, 135.83, 0.000, '', 925.49, 0.000, '');

INSERT INTO `INT_tariffe_onorari` VALUES (1339, '0052', '0000-00-00', '1994-09-30', 'num', 387342.70, 162.68, 0.000, '', 1156.86, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1340, '0052', '0000-00-00', '1994-09-30', 'num', 516456.90, 216.91, 0.000, '', 1388.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1341, '0052', '0000-00-00', '1994-09-30', 'num', 1549371.00, 271.14, 0.000, '', 1850.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1342, '0052', '0000-00-00', '1994-09-30', 'num', 2582285.00, 379.60, 0.000, '', 2313.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1343, '0052', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.147, 'C', 0.00, 0.896, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1344, '0052', '0000-00-00', '1994-09-30', 'ind', 0.00, 0.00, 0.000, '', 0.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1345, '0052', '0000-00-00', '1994-09-30', 'index', 0.00, 135.83, 0.000, '', 1388.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1346, '0052', '1994-10-01', '1995-03-31', 'num', 258.23, 18.08, 0.000, '', 18.08, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1347, '0052', '1994-10-01', '1995-03-31', 'num', 516.46, 20.66, 0.000, '', 20.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1348, '0052', '1994-10-01', '1995-03-31', 'num', 1549.37, 30.99, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1349, '0052', '1994-10-01', '1995-03-31', 'num', 2582.28, 36.15, 0.000, '', 36.15, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1350, '0052', '1994-10-01', '1995-03-31', 'num', 5164.57, 41.32, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1351, '0052', '1994-10-01', '1995-03-31', 'num', 25822.84, 61.97, 0.000, '', 61.97, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1352, '0052', '1994-10-01', '1995-03-31', 'num', 51645.69, 90.38, 0.000, '', 90.38, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1353, '0052', '1994-10-01', '1995-03-31', 'num', 103291.40, 170.43, 0.000, '', 170.43, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1354, '0052', '1994-10-01', '1995-03-31', 'num', 258228.50, 242.73, 0.000, '', 242.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1355, '0052', '1994-10-01', '1995-03-31', 'num', 387342.70, 312.46, 0.000, '', 312.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1356, '0052', '1994-10-01', '1995-03-31', 'num', 516456.90, 397.67, 0.000, '', 397.67, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1357, '0052', '1994-10-01', '1995-03-31', 'num', 1549371.00, 482.89, 0.000, '', 482.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1358, '0052', '1994-10-01', '1995-03-31', 'num', 2582285.00, 653.32, 0.000, '', 653.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1359, '0052', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.253, 'C', 0.00, 0.253, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1360, '0052', '1994-10-01', '1995-03-31', 'ind', 0.00, 61.97, 0.000, '', 170.43, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1361, '0052', '1994-10-01', '1995-03-31', 'index', 0.00, 90.38, 0.000, '', 397.67, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1362, '0052', '1995-04-01', '2004-06-01', 'num', 258.23, 20.66, 0.000, '', 20.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1363, '0052', '1995-04-01', '2004-06-01', 'num', 516.46, 23.24, 0.000, '', 23.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1364, '0052', '1995-04-01', '2004-06-01', 'num', 1549.37, 33.57, 0.000, '', 33.57, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1365, '0052', '1995-04-01', '2004-06-01', 'num', 2582.28, 38.73, 0.000, '', 38.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1366, '0052', '1995-04-01', '2004-06-01', 'num', 5164.57, 43.90, 0.000, '', 43.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1367, '0052', '1995-04-01', '2004-06-01', 'num', 25822.84, 67.14, 0.000, '', 67.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1368, '0052', '1995-04-01', '2004-06-01', 'num', 51645.69, 100.71, 0.000, '', 100.71, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1369, '0052', '1995-04-01', '2004-06-01', 'num', 103291.40, 232.41, 0.000, '', 232.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1370, '0052', '1995-04-01', '2004-06-01', 'num', 258228.50, 351.19, 0.000, '', 351.19, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1371, '0052', '1995-04-01', '2004-06-01', 'num', 387342.70, 462.23, 0.000, '', 462.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1372, '0052', '1995-04-01', '2004-06-01', 'num', 516456.90, 578.43, 0.000, '', 578.43, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1373, '0052', '1995-04-01', '2004-06-01', 'num', 1549371.00, 694.63, 0.000, '', 694.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1374, '0052', '1995-04-01', '2004-06-01', 'num', 2582285.00, 924.46, 0.000, '', 924.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1375, '0052', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.350, 'C', 0.00, 0.350, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1376, '0052', '1995-04-01', '2004-06-01', 'ind', 0.00, 67.14, 0.000, '', 232.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1377, '0052', '1995-04-01', '2004-06-01', 'index', 0.00, 100.71, 0.000, '', 578.43, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1378, '0054', '0000-00-00', '1994-09-30', 'num', 258.23, 14.46, 0.000, '', 46.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1379, '0054', '0000-00-00', '1994-09-30', 'num', 516.46, 18.08, 0.000, '', 57.84, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1380, '0054', '0000-00-00', '1994-09-30', 'num', 1549.37, 27.37, 0.000, '', 86.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1381, '0054', '0000-00-00', '1994-09-30', 'num', 2582.28, 32.02, 0.000, '', 101.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1382, '0054', '0000-00-00', '1994-09-30', 'num', 5164.57, 36.15, 0.000, '', 115.69, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1383, '0054', '0000-00-00', '1994-09-30', 'num', 25822.84, 54.23, 0.000, '', 231.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1384, '0054', '0000-00-00', '1994-09-30', 'num', 51645.69, 81.60, 0.000, '', 462.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1385, '0054', '0000-00-00', '1994-09-30', 'num', 103291.40, 108.46, 0.000, '', 694.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1386, '0054', '0000-00-00', '1994-09-30', 'num', 258228.50, 135.83, 0.000, '', 925.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1387, '0054', '0000-00-00', '1994-09-30', 'num', 387342.70, 162.68, 0.000, '', 1156.86, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1388, '0054', '0000-00-00', '1994-09-30', 'num', 516456.90, 216.91, 0.000, '', 1388.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1389, '0054', '0000-00-00', '1994-09-30', 'num', 1549371.00, 271.14, 0.000, '', 1850.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1390, '0054', '0000-00-00', '1994-09-30', 'num', 2582285.00, 379.60, 0.000, '', 2313.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1391, '0054', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.147, 'C', 0.00, 0.896, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1392, '0054', '0000-00-00', '1994-09-30', 'ind', 0.00, 54.23, 0.000, '', 694.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1393, '0054', '0000-00-00', '1994-09-30', 'index', 0.00, 81.60, 0.000, '', 1388.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1394, '0054', '1994-10-01', '1995-03-31', 'num', 258.23, 18.08, 0.000, '', 46.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1395, '0054', '1994-10-01', '1995-03-31', 'num', 516.46, 20.66, 0.000, '', 57.84, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1396, '0054', '1994-10-01', '1995-03-31', 'num', 1549.37, 33.57, 0.000, '', 87.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1397, '0054', '1994-10-01', '1995-03-31', 'num', 2582.28, 38.73, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1398, '0054', '1994-10-01', '1995-03-31', 'num', 5164.57, 41.32, 0.000, '', 116.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1399, '0054', '1994-10-01', '1995-03-31', 'num', 25822.84, 61.97, 0.000, '', 232.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1400, '0054', '1994-10-01', '1995-03-31', 'num', 51645.69, 95.54, 0.000, '', 464.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1401, '0054', '1994-10-01', '1995-03-31', 'num', 103291.40, 170.43, 0.000, '', 697.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1402, '0054', '1994-10-01', '1995-03-31', 'num', 258228.50, 242.73, 0.000, '', 929.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1403, '0054', '1994-10-01', '1995-03-31', 'num', 387342.70, 315.04, 0.000, '', 1162.03, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1404, '0054', '1994-10-01', '1995-03-31', 'num', 516456.90, 400.25, 0.000, '', 1394.43, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1405, '0054', '1994-10-01', '1995-03-31', 'num', 1549371.00, 485.47, 0.000, '', 1859.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1406, '0054', '1994-10-01', '1995-03-31', 'num', 2582285.00, 655.90, 0.000, '', 2324.06, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1407, '0054', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.253, 'C', 0.00, 0.898, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1408, '0054', '1994-10-01', '1995-03-31', 'ind', 0.00, 61.97, 0.000, '', 697.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1409, '0054', '1994-10-01', '1995-03-31', 'index', 0.00, 94.00, 0.000, '', 1391.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1410, '0054', '1995-04-01', '2004-06-01', 'num', 258.23, 20.66, 0.000, '', 46.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1411, '0054', '1995-04-01', '2004-06-01', 'num', 516.46, 23.24, 0.000, '', 57.84, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1412, '0054', '1995-04-01', '2004-06-01', 'num', 1549.37, 36.15, 0.000, '', 87.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1413, '0054', '1995-04-01', '2004-06-01', 'num', 2582.28, 41.32, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1414, '0054', '1995-04-01', '2004-06-01', 'num', 5164.57, 46.48, 0.000, '', 116.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1415, '0054', '1995-04-01', '2004-06-01', 'num', 25822.84, 69.72, 0.000, '', 232.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1416, '0054', '1995-04-01', '2004-06-01', 'num', 51645.69, 105.87, 0.000, '', 464.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1417, '0054', '1995-04-01', '2004-06-01', 'num', 103291.40, 232.41, 0.000, '', 697.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1418, '0054', '1995-04-01', '2004-06-01', 'num', 258228.50, 348.61, 0.000, '', 929.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1419, '0054', '1995-04-01', '2004-06-01', 'num', 387342.70, 464.81, 0.000, '', 1162.03, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1420, '0054', '1995-04-01', '2004-06-01', 'num', 516456.90, 581.01, 0.000, '', 1394.43, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1421, '0054', '1995-04-01', '2004-06-01', 'num', 1549371.00, 697.22, 0.000, '', 1859.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1422, '0054', '1995-04-01', '2004-06-01', 'num', 2582285.00, 929.62, 0.000, '', 2324.06, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1423, '0054', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.360, 'C', 0.00, 0.900, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1424, '0054', '1995-04-01', '2004-06-01', 'ind', 0.00, 69.72, 0.000, '', 697.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1425, '0054', '1995-04-01', '2004-06-01', 'index', 0.00, 105.87, 0.000, '', 1394.43, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1426, '0055', '1994-10-01', '1995-03-31', 'num', 258.23, 30.99, 0.000, '', 56.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1427, '0055', '1994-10-01', '1995-03-31', 'num', 516.46, 36.15, 0.000, '', 69.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1428, '0055', '1994-10-01', '1995-03-31', 'num', 1549.37, 54.23, 0.000, '', 105.87, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1429, '0055', '1994-10-01', '1995-03-31', 'num', 2582.28, 64.56, 0.000, '', 123.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1430, '0055', '1994-10-01', '1995-03-31', 'num', 5164.57, 72.30, 0.000, '', 139.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1431, '0055', '1994-10-01', '1995-03-31', 'num', 25822.84, 108.46, 0.000, '', 278.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1432, '0055', '1994-10-01', '1995-03-31', 'num', 51645.69, 162.68, 0.000, '', 609.42, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1433, '0055', '1994-10-01', '1995-03-31', 'num', 103291.40, 278.89, 0.000, '', 836.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1434, '0055', '1994-10-01', '1995-03-31', 'num', 258228.50, 418.33, 0.000, '', 1115.55, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1435, '0055', '1994-10-01', '1995-03-31', 'num', 387342.70, 557.77, 0.000, '', 1394.43, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1436, '0055', '1994-10-01', '1995-03-31', 'num', 516456.90, 697.22, 0.000, '', 1673.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1437, '0055', '1994-10-01', '1995-03-31', 'num', 1549371.00, 836.66, 0.000, '', 2231.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1438, '0055', '1994-10-01', '1995-03-31', 'num', 2582285.00, 1084.56, 0.000, '', 2788.87, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1439, '0055', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.363, 'C', 0.00, 1.080, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1440, '0055', '1994-10-01', '1995-03-31', 'ind', 0.00, 108.46, 0.000, '', 836.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1441, '0055', '1994-10-01', '1995-03-31', 'index', 0.00, 162.68, 0.000, '', 1673.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1442, '0055', '1995-04-01', '2004-06-01', 'num', 258.23, 30.99, 0.000, '', 56.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1443, '0055', '1995-04-01', '2004-06-01', 'num', 516.46, 36.15, 0.000, '', 69.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1444, '0055', '1995-04-01', '2004-06-01', 'num', 1549.37, 54.23, 0.000, '', 105.87, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1445, '0055', '1995-04-01', '2004-06-01', 'num', 2582.28, 64.56, 0.000, '', 123.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1446, '0055', '1995-04-01', '2004-06-01', 'num', 5164.57, 72.30, 0.000, '', 139.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1447, '0055', '1995-04-01', '2004-06-01', 'num', 25822.84, 108.46, 0.000, '', 278.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1448, '0055', '1995-04-01', '2004-06-01', 'num', 51645.69, 162.68, 0.000, '', 609.42, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1449, '0055', '1995-04-01', '2004-06-01', 'num', 103291.40, 278.89, 0.000, '', 836.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1450, '0055', '1995-04-01', '2004-06-01', 'num', 258228.50, 418.33, 0.000, '', 1115.55, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1451, '0055', '1995-04-01', '2004-06-01', 'num', 387342.70, 557.77, 0.000, '', 1394.43, 0.000, '');

INSERT INTO `INT_tariffe_onorari` VALUES (1452, '0055', '1995-04-01', '2004-06-01', 'num', 516456.90, 697.22, 0.000, '', 1673.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1453, '0055', '1995-04-01', '2004-06-01', 'num', 1549371.00, 836.66, 0.000, '', 2231.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1454, '0055', '1995-04-01', '2004-06-01', 'num', 2582285.00, 1115.55, 0.000, '', 2788.87, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1455, '0055', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.432, 'C', 0.00, 1.080, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1456, '0055', '1995-04-01', '2004-06-01', 'ind', 0.00, 108.46, 0.000, '', 836.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1457, '0055', '1995-04-01', '2004-06-01', 'index', 0.00, 162.68, 0.000, '', 1673.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1458, '0203', '0000-00-00', '1994-09-30', 'num', 1549.37, 52.68, 0.000, '', 174.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1459, '0203', '0000-00-00', '1994-09-30', 'num', 2582.28, 61.46, 0.000, '', 200.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1460, '0203', '1994-10-01', '1995-03-31', 'num', 1549.37, 61.97, 0.000, '', 174.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1461, '0203', '1994-10-01', '1995-03-31', 'num', 2582.28, 77.47, 0.000, '', 201.42, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1462, '0203', '1995-04-01', '2004-06-01', 'num', 1549.37, 67.14, 0.000, '', 174.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1463, '0203', '1995-04-01', '2004-06-01', 'num', 2582.28, 90.38, 0.000, '', 201.42, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1464, '0492', '0000-00-00', '1994-09-30', 'num', 258.23, 9.30, 0.000, '', 30.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1465, '0492', '0000-00-00', '1994-09-30', 'num', 516.46, 11.88, 0.000, '', 38.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1466, '0492', '0000-00-00', '1994-09-30', 'num', 1549.37, 18.08, 0.000, '', 57.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1467, '0492', '0000-00-00', '1994-09-30', 'num', 2582.28, 21.17, 0.000, '', 67.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1468, '0492', '0000-00-00', '1994-09-30', 'num', 5164.57, 23.76, 0.000, '', 76.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1469, '0492', '0000-00-00', '1994-09-30', 'num', 25822.84, 36.15, 0.000, '', 153.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1470, '0492', '0000-00-00', '1994-09-30', 'num', 51645.69, 54.23, 0.000, '', 306.78, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1471, '0492', '0000-00-00', '1994-09-30', 'num', 103291.40, 72.30, 0.000, '', 460.68, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1472, '0492', '0000-00-00', '1994-09-30', 'num', 258228.50, 90.38, 0.000, '', 614.07, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1473, '0492', '0000-00-00', '1994-09-30', 'num', 387342.70, 108.46, 0.000, '', 767.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1474, '0492', '0000-00-00', '1994-09-30', 'num', 516456.90, 144.61, 0.000, '', 921.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1475, '0492', '0000-00-00', '1994-09-30', 'num', 1549371.00, 180.76, 0.000, '', 1228.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1476, '0492', '0000-00-00', '1994-09-30', 'num', 2582285.00, 253.06, 0.000, '', 1535.43, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1477, '0492', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.098, 'C', 0.00, 0.595, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1478, '0492', '0000-00-00', '1994-09-30', 'ind', 0.00, 36.15, 0.000, '', 460.68, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1479, '0492', '0000-00-00', '1994-09-30', 'index', 0.00, 54.23, 0.000, '', 921.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1480, '0492', '1994-10-01', '1995-03-31', 'num', 258.23, 10.85, 0.000, '', 30.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1481, '0492', '1994-10-01', '1995-03-31', 'num', 516.46, 12.91, 0.000, '', 38.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1482, '0492', '1994-10-01', '1995-03-31', 'num', 1549.37, 20.14, 0.000, '', 57.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1483, '0492', '1994-10-01', '1995-03-31', 'num', 2582.28, 23.24, 0.000, '', 67.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1484, '0492', '1994-10-01', '1995-03-31', 'num', 5164.57, 26.34, 0.000, '', 76.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1485, '0492', '1994-10-01', '1995-03-31', 'num', 25822.84, 39.77, 0.000, '', 153.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1486, '0492', '1994-10-01', '1995-03-31', 'num', 51645.69, 59.91, 0.000, '', 307.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1487, '0492', '1994-10-01', '1995-03-31', 'num', 103291.40, 113.10, 0.000, '', 461.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1488, '0492', '1994-10-01', '1995-03-31', 'num', 258228.50, 160.62, 0.000, '', 615.10, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1489, '0492', '1994-10-01', '1995-03-31', 'num', 387342.70, 208.13, 0.000, '', 769.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1490, '0492', '1994-10-01', '1995-03-31', 'num', 516456.90, 264.94, 0.000, '', 922.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1491, '0492', '1994-10-01', '1995-03-31', 'num', 1549371.00, 321.24, 0.000, '', 1230.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1492, '0492', '1994-10-01', '1995-03-31', 'num', 2582285.00, 434.34, 0.000, '', 1538.01, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1493, '0492', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.168, 'C', 0.00, 0.596, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1494, '0492', '1994-10-01', '1995-03-31', 'ind', 0.00, 39.77, 0.000, '', 461.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1495, '0492', '1994-10-01', '1995-03-31', 'index', 0.00, 59.91, 0.000, '', 922.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1496, '0492', '1995-04-01', '2004-06-01', 'num', 258.23, 11.88, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1497, '0492', '1995-04-01', '2004-06-01', 'num', 516.46, 14.46, 0.000, '', 38.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1498, '0492', '1995-04-01', '2004-06-01', 'num', 1549.37, 22.21, 0.000, '', 57.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1499, '0492', '1995-04-01', '2004-06-01', 'num', 2582.28, 25.82, 0.000, '', 67.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1500, '0492', '1995-04-01', '2004-06-01', 'num', 5164.57, 28.92, 0.000, '', 77.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1501, '0492', '1995-04-01', '2004-06-01', 'num', 25822.84, 43.90, 0.000, '', 153.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1502, '0492', '1995-04-01', '2004-06-01', 'num', 51645.69, 66.11, 0.000, '', 307.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1503, '0492', '1995-04-01', '2004-06-01', 'num', 103291.40, 153.90, 0.000, '', 462.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1504, '0492', '1995-04-01', '2004-06-01', 'num', 258228.50, 232.92, 0.000, '', 616.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1505, '0492', '1995-04-01', '2004-06-01', 'num', 387342.70, 307.81, 0.000, '', 770.04, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1506, '0492', '1995-04-01', '2004-06-01', 'num', 516456.90, 385.28, 0.000, '', 924.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1507, '0492', '1995-04-01', '2004-06-01', 'num', 1549371.00, 462.23, 0.000, '', 1232.27, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1508, '0492', '1995-04-01', '2004-06-01', 'num', 2582285.00, 616.13, 0.000, '', 1540.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1509, '0492', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.239, 'C', 0.00, 0.597, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1510, '0492', '1995-04-01', '2004-06-01', 'ind', 0.00, 43.90, 0.000, '', 462.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1511, '0492', '1995-04-01', '2004-06-01', 'index', 0.00, 66.11, 0.000, '', 924.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1512, '0493', '0000-00-00', '1994-09-30', 'num', 258.23, 18.59, 0.000, '', 60.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1513, '0493', '0000-00-00', '1994-09-30', 'num', 516.46, 23.76, 0.000, '', 76.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1514, '0493', '0000-00-00', '1994-09-30', 'num', 1549.37, 36.15, 0.000, '', 114.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1515, '0493', '0000-00-00', '1994-09-30', 'num', 2582.28, 42.35, 0.000, '', 134.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1516, '0493', '0000-00-00', '1994-09-30', 'num', 5164.57, 47.51, 0.000, '', 153.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1517, '0493', '0000-00-00', '1994-09-30', 'num', 25822.84, 72.30, 0.000, '', 306.78, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1518, '0493', '0000-00-00', '1994-09-30', 'num', 51645.69, 108.46, 0.000, '', 613.55, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1519, '0493', '0000-00-00', '1994-09-30', 'num', 103291.40, 144.61, 0.000, '', 921.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1520, '0493', '0000-00-00', '1994-09-30', 'num', 258228.50, 180.76, 0.000, '', 1228.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1521, '0493', '0000-00-00', '1994-09-30', 'num', 387342.70, 216.91, 0.000, '', 1534.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1522, '0493', '0000-00-00', '1994-09-30', 'num', 516456.90, 289.22, 0.000, '', 1842.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1523, '0493', '0000-00-00', '1994-09-30', 'num', 1549371.00, 361.52, 0.000, '', 2456.27, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1524, '0493', '0000-00-00', '1994-09-30', 'num', 2582285.00, 506.13, 0.000, '', 3070.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1525, '0493', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.196, 'C', 0.00, 1.189, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1526, '0493', '0000-00-00', '1994-09-30', 'ind', 0.00, 72.30, 0.000, '', 921.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1527, '0493', '0000-00-00', '1994-09-30', 'index', 0.00, 108.46, 0.000, '', 1839.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1528, '0493', '1994-10-01', '1995-03-31', 'num', 258.23, 21.69, 0.000, '', 60.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1529, '0493', '1994-10-01', '1995-03-31', 'num', 516.46, 25.82, 0.000, '', 76.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1530, '0493', '1994-10-01', '1995-03-31', 'num', 1549.37, 40.28, 0.000, '', 114.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1531, '0493', '1994-10-01', '1995-03-31', 'num', 2582.28, 46.48, 0.000, '', 135.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1532, '0493', '1994-10-01', '1995-03-31', 'num', 5164.57, 52.68, 0.000, '', 153.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1533, '0493', '1994-10-01', '1995-03-31', 'num', 25822.84, 79.53, 0.000, '', 306.78, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1534, '0493', '1994-10-01', '1995-03-31', 'num', 51645.69, 119.82, 0.000, '', 614.58, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1535, '0493', '1994-10-01', '1995-03-31', 'num', 103291.40, 226.21, 0.000, '', 922.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1536, '0493', '1994-10-01', '1995-03-31', 'num', 258228.50, 321.24, 0.000, '', 1230.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1537, '0493', '1994-10-01', '1995-03-31', 'num', 387342.70, 416.26, 0.000, '', 1538.01, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1538, '0493', '1994-10-01', '1995-03-31', 'num', 516456.90, 529.88, 0.000, '', 1845.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1539, '0493', '1994-10-01', '1995-03-31', 'num', 1549371.00, 642.47, 0.000, '', 2460.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1540, '0493', '1994-10-01', '1995-03-31', 'num', 2582285.00, 868.68, 0.000, '', 3076.02, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1541, '0493', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.336, 'C', 0.00, 1.192, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1542, '0493', '1994-10-01', '1995-03-31', 'ind', 0.00, 79.53, 0.000, '', 922.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1543, '0493', '1994-10-01', '1995-03-31', 'index', 0.00, 119.82, 0.000, '', 1845.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1544, '0493', '1995-04-01', '2004-06-01', 'num', 258.23, 23.76, 0.000, '', 61.97, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1545, '0493', '1995-04-01', '2004-06-01', 'num', 516.46, 28.92, 0.000, '', 76.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1546, '0493', '1995-04-01', '2004-06-01', 'num', 1549.37, 44.42, 0.000, '', 114.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1547, '0493', '1995-04-01', '2004-06-01', 'num', 2582.28, 51.65, 0.000, '', 135.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1548, '0493', '1995-04-01', '2004-06-01', 'num', 5164.57, 57.84, 0.000, '', 154.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1549, '0493', '1995-04-01', '2004-06-01', 'num', 25822.84, 87.80, 0.000, '', 307.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1550, '0493', '1995-04-01', '2004-06-01', 'num', 51645.69, 132.21, 0.000, '', 615.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1551, '0493', '1995-04-01', '2004-06-01', 'num', 103291.40, 307.81, 0.000, '', 924.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1552, '0493', '1995-04-01', '2004-06-01', 'num', 258228.50, 465.84, 0.000, '', 1232.27, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1553, '0493', '1995-04-01', '2004-06-01', 'num', 387342.70, 615.62, 0.000, '', 1540.07, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1554, '0493', '1995-04-01', '2004-06-01', 'num', 516456.90, 770.55, 0.000, '', 1848.92, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1555, '0493', '1995-04-01', '2004-06-01', 'num', 1549371.00, 924.46, 0.000, '', 2464.53, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1556, '0493', '1995-04-01', '2004-06-01', 'num', 2582285.00, 1232.27, 0.000, '', 3081.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1557, '0493', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.478, 'C', 0.00, 1.194, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1558, '0493', '1995-04-01', '2004-06-01', 'ind', 0.00, 87.80, 0.000, '', 924.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1559, '0493', '1995-04-01', '2004-06-01', 'index', 0.00, 132.21, 0.000, '', 1848.92, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1560, '049A', '0000-00-00', '1994-09-30', 'num', 258.23, 9.30, 0.000, '', 55.78, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1561, '049A', '0000-00-00', '1994-09-30', 'num', 516.46, 11.36, 0.000, '', 69.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1562, '049A', '0000-00-00', '1994-09-30', 'num', 1549.37, 17.04, 0.000, '', 103.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1563, '049A', '0000-00-00', '1994-09-30', 'num', 2582.28, 20.14, 0.000, '', 121.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1564, '049A', '0000-00-00', '1994-09-30', 'num', 5164.57, 22.72, 0.000, '', 138.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1565, '049A', '0000-00-00', '1994-09-30', 'num', 25822.84, 34.09, 0.000, '', 276.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1566, '049A', '0000-00-00', '1994-09-30', 'num', 51645.69, 51.13, 0.000, '', 553.64, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1567, '049A', '0000-00-00', '1994-09-30', 'num', 103291.40, 68.17, 0.000, '', 830.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1568, '049A', '0000-00-00', '1994-09-30', 'num', 258228.50, 85.22, 0.000, '', 1107.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1569, '049A', '0000-00-00', '1994-09-30', 'num', 387342.70, 102.26, 0.000, '', 1384.10, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1570, '049A', '0000-00-00', '1994-09-30', 'num', 516456.90, 136.34, 0.000, '', 1660.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1571, '049A', '0000-00-00', '1994-09-30', 'num', 1549371.00, 170.43, 0.000, '', 2214.57, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1572, '049A', '0000-00-00', '1994-09-30', 'num', 2582285.00, 238.60, 0.000, '', 2768.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1573, '049A', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.092, 'C', 0.00, 1.072, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1574, '049A', '0000-00-00', '1994-09-30', 'ind', 0.00, 34.09, 0.000, '', 830.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1575, '049A', '0000-00-00', '1994-09-30', 'index', 0.00, 85.22, 0.000, '', 1660.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1576, '049A', '1994-10-01', '1995-03-31', 'num', 258.23, 12.91, 0.000, '', 56.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1577, '049A', '1994-10-01', '1995-03-31', 'num', 516.46, 15.49, 0.000, '', 69.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1578, '049A', '1994-10-01', '1995-03-31', 'num', 1549.37, 20.66, 0.000, '', 105.87, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1579, '049A', '1994-10-01', '1995-03-31', 'num', 2582.28, 25.82, 0.000, '', 121.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1580, '049A', '1994-10-01', '1995-03-31', 'num', 5164.57, 28.41, 0.000, '', 139.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1581, '049A', '1994-10-01', '1995-03-31', 'num', 25822.84, 41.32, 0.000, '', 278.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1582, '049A', '1994-10-01', '1995-03-31', 'num', 51645.69, 56.81, 0.000, '', 557.77, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1583, '049A', '1994-10-01', '1995-03-31', 'num', 103291.40, 175.60, 0.000, '', 836.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1584, '049A', '1994-10-01', '1995-03-31', 'num', 258228.50, 253.06, 0.000, '', 1115.55, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1585, '049A', '1994-10-01', '1995-03-31', 'num', 387342.70, 330.53, 0.000, '', 1394.43, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1586, '049A', '1994-10-01', '1995-03-31', 'num', 516456.90, 418.33, 0.000, '', 1673.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1587, '049A', '1994-10-01', '1995-03-31', 'num', 1549371.00, 503.55, 0.000, '', 2231.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1588, '049A', '1994-10-01', '1995-03-31', 'num', 2582285.00, 679.14, 0.000, '', 2788.87, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1589, '049A', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.262, 'C', 0.00, 1.076, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1590, '049A', '1994-10-01', '1995-03-31', 'ind', 0.00, 41.32, 0.000, '', 836.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1591, '049A', '1994-10-01', '1995-03-31', 'index', 0.00, 60.43, 0.000, '', 1667.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1592, '049A', '1995-04-01', '2004-06-01', 'num', 258.23, 12.91, 0.000, '', 56.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1593, '049A', '1995-04-01', '2004-06-01', 'num', 516.46, 15.49, 0.000, '', 69.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1594, '049A', '1995-04-01', '2004-06-01', 'num', 1549.37, 23.24, 0.000, '', 105.87, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1595, '049A', '1995-04-01', '2004-06-01', 'num', 2582.28, 28.41, 0.000, '', 121.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1596, '049A', '1995-04-01', '2004-06-01', 'num', 5164.57, 30.99, 0.000, '', 139.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1597, '049A', '1995-04-01', '2004-06-01', 'num', 25822.84, 46.48, 0.000, '', 278.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1598, '049A', '1995-04-01', '2004-06-01', 'num', 51645.69, 69.72, 0.000, '', 557.77, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1599, '049A', '1995-04-01', '2004-06-01', 'num', 103291.40, 278.89, 0.000, '', 836.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1600, '049A', '1995-04-01', '2004-06-01', 'num', 258228.50, 418.33, 0.000, '', 1115.55, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1601, '049A', '1995-04-01', '2004-06-01', 'num', 387342.70, 557.77, 0.000, '', 1394.43, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1602, '049A', '1995-04-01', '2004-06-01', 'num', 516456.90, 697.22, 0.000, '', 1673.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1603, '049A', '1995-04-01', '2004-06-01', 'num', 1549371.00, 836.66, 0.000, '', 2231.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1604, '049A', '1995-04-01', '2004-06-01', 'num', 2582285.00, 1115.55, 0.000, '', 2788.87, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1605, '049A', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.432, 'C', 0.00, 1.080, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1606, '049A', '1995-04-01', '2004-06-01', 'ind', 0.00, 46.48, 0.000, '', 836.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1607, '049A', '1995-04-01', '2004-06-01', 'index', 0.00, 69.72, 0.000, '', 1673.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1608, '049B', '0000-00-00', '1994-09-30', 'num', 258.23, 28.92, 0.000, '', 92.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1609, '049B', '0000-00-00', '1994-09-30', 'num', 516.46, 36.15, 0.000, '', 115.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1610, '049B', '0000-00-00', '1994-09-30', 'num', 1549.37, 54.23, 0.000, '', 173.01, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1611, '049B', '0000-00-00', '1994-09-30', 'num', 2582.28, 63.52, 0.000, '', 201.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1612, '049B', '0000-00-00', '1994-09-30', 'num', 5164.57, 72.30, 0.000, '', 230.34, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1613, '049B', '0000-00-00', '1994-09-30', 'num', 25822.84, 108.46, 0.000, '', 460.68, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1614, '049B', '0000-00-00', '1994-09-30', 'num', 51645.69, 162.68, 0.000, '', 921.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1615, '049B', '0000-00-00', '1994-09-30', 'num', 103291.40, 216.91, 0.000, '', 1382.04, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1616, '049B', '0000-00-00', '1994-09-30', 'num', 258228.50, 271.14, 0.000, '', 1842.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1617, '049B', '0000-00-00', '1994-09-30', 'num', 387342.70, 325.37, 0.000, '', 2303.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1618, '049B', '0000-00-00', '1994-09-30', 'num', 516456.90, 433.82, 0.000, '', 2764.08, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1619, '049B', '0000-00-00', '1994-09-30', 'num', 1549371.00, 542.28, 0.000, '', 3685.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1620, '049B', '0000-00-00', '1994-09-30', 'num', 2582285.00, 759.19, 0.000, '', 4606.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1621, '049B', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.294, 'C', 0.00, 1.784, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1622, '049B', '0000-00-00', '1994-09-30', 'ind', 0.00, 108.46, 0.000, '', 1382.04, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1623, '049B', '0000-00-00', '1994-09-30', 'index', 0.00, 271.14, 0.000, '', 2764.08, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1624, '049B', '1994-10-01', '1995-03-31', 'num', 258.23, 33.57, 0.000, '', 92.96, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1625, '049B', '1994-10-01', '1995-03-31', 'num', 516.46, 41.32, 0.000, '', 115.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1626, '049B', '1994-10-01', '1995-03-31', 'num', 1549.37, 61.97, 0.000, '', 173.01, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1627, '049B', '1994-10-01', '1995-03-31', 'num', 2582.28, 72.30, 0.000, '', 204.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1628, '049B', '1994-10-01', '1995-03-31', 'num', 5164.57, 80.05, 0.000, '', 232.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1629, '049B', '1994-10-01', '1995-03-31', 'num', 25822.84, 121.37, 0.000, '', 462.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1630, '049B', '1994-10-01', '1995-03-31', 'num', 51645.69, 180.76, 0.000, '', 924.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1631, '049B', '1994-10-01', '1995-03-31', 'num', 103291.40, 340.86, 0.000, '', 1386.69, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1632, '049B', '1994-10-01', '1995-03-31', 'num', 258228.50, 482.89, 0.000, '', 1848.92, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1633, '049B', '1994-10-01', '1995-03-31', 'num', 387342.70, 624.91, 0.000, '', 2311.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1634, '049B', '1994-10-01', '1995-03-31', 'num', 516456.90, 795.34, 0.000, '', 2773.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1635, '049B', '1994-10-01', '1995-03-31', 'num', 1549371.00, 965.77, 0.000, '', 3697.83, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1636, '049B', '1994-10-01', '1995-03-31', 'num', 2582285.00, 1304.05, 0.000, '', 4622.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1637, '049B', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.505, 'C', 0.00, 1.787, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1638, '049B', '1994-10-01', '1995-03-31', 'ind', 0.00, 121.37, 0.000, '', 924.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1639, '049B', '1994-10-01', '1995-03-31', 'index', 0.00, 180.76, 0.000, '', 2768.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1640, '049B', '1995-04-01', '2004-06-01', 'num', 258.23, 36.15, 0.000, '', 92.96, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1641, '049B', '1995-04-01', '2004-06-01', 'num', 516.46, 43.90, 0.000, '', 115.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1642, '049B', '1995-04-01', '2004-06-01', 'num', 1549.37, 67.14, 0.000, '', 173.01, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1643, '049B', '1995-04-01', '2004-06-01', 'num', 2582.28, 77.47, 0.000, '', 204.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1644, '049B', '1995-04-01', '2004-06-01', 'num', 5164.57, 87.80, 0.000, '', 232.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1645, '049B', '1995-04-01', '2004-06-01', 'num', 25822.84, 131.70, 0.000, '', 462.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1646, '049B', '1995-04-01', '2004-06-01', 'num', 51645.69, 198.84, 0.000, '', 924.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1647, '049B', '1995-04-01', '2004-06-01', 'num', 103291.40, 462.23, 0.000, '', 1386.69, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1648, '049B', '1995-04-01', '2004-06-01', 'num', 258228.50, 694.63, 0.000, '', 1848.92, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1649, '049B', '1995-04-01', '2004-06-01', 'num', 387342.70, 924.46, 0.000, '', 2311.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1650, '049B', '1995-04-01', '2004-06-01', 'num', 516456.90, 1156.86, 0.000, '', 2773.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1651, '049B', '1995-04-01', '2004-06-01', 'num', 1549371.00, 1386.69, 0.000, '', 3697.83, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1652, '049B', '1995-04-01', '2004-06-01', 'num', 2582285.00, 1848.92, 0.000, '', 4622.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1653, '049B', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.716, 'C', 0.00, 1.790, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1654, '049B', '1995-04-01', '2004-06-01', 'ind', 0.00, 131.70, 0.000, '', 1386.69, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1655, '049B', '1995-04-01', '2004-06-01', 'index', 0.00, 198.84, 0.000, '', 2773.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1656, '049C', '0000-00-00', '1994-09-30', 'num', 258.23, 36.15, 0.000, '', 115.69, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1657, '049C', '0000-00-00', '1994-09-30', 'num', 516.46, 44.93, 0.000, '', 144.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1658, '049C', '0000-00-00', '1994-09-30', 'num', 1549.37, 67.66, 0.000, '', 216.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1659, '049C', '0000-00-00', '1994-09-30', 'num', 2582.28, 79.02, 0.000, '', 252.55, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1660, '049C', '0000-00-00', '1994-09-30', 'num', 5164.57, 89.86, 0.000, '', 288.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1661, '049C', '0000-00-00', '1994-09-30', 'num', 25822.84, 134.80, 0.000, '', 576.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1662, '049C', '0000-00-00', '1994-09-30', 'num', 51645.69, 202.45, 0.000, '', 1152.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1663, '049C', '0000-00-00', '1994-09-30', 'num', 103291.40, 269.59, 0.000, '', 1729.10, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1664, '049C', '0000-00-00', '1994-09-30', 'num', 258228.50, 337.25, 0.000, '', 2305.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1665, '049C', '0000-00-00', '1994-09-30', 'num', 387342.70, 404.39, 0.000, '', 2881.83, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1666, '049C', '0000-00-00', '1994-09-30', 'num', 516456.90, 539.18, 0.000, '', 3458.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1667, '049C', '0000-00-00', '1994-09-30', 'num', 1549371.00, 673.98, 0.000, '', 4610.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1668, '049C', '0000-00-00', '1994-09-30', 'num', 2582285.00, 943.57, 0.000, '', 5763.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1669, '049C', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.365, 'C', 0.00, 2.232, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1670, '049C', '0000-00-00', '1994-09-30', 'ind', 0.00, 0.00, 0.000, '', 0.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1671, '049C', '0000-00-00', '1994-09-30', 'index', 0.00, 337.25, 0.000, '', 3458.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1672, '049C', '1994-10-01', '1995-03-31', 'num', 258.23, 41.32, 0.000, '', 116.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1673, '049C', '1994-10-01', '1995-03-31', 'num', 516.46, 51.65, 0.000, '', 144.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1674, '049C', '1994-10-01', '1995-03-31', 'num', 1549.37, 77.47, 0.000, '', 216.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1675, '049C', '1994-10-01', '1995-03-31', 'num', 2582.28, 90.38, 0.000, '', 253.06, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1676, '049C', '1994-10-01', '1995-03-31', 'num', 5164.57, 100.71, 0.000, '', 289.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1677, '049C', '1994-10-01', '1995-03-31', 'num', 25822.84, 149.77, 0.000, '', 578.43, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1678, '049C', '1994-10-01', '1995-03-31', 'num', 51645.69, 224.66, 0.000, '', 1156.86, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1679, '049C', '1994-10-01', '1995-03-31', 'num', 103291.40, 426.08, 0.000, '', 1735.30, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1680, '049C', '1994-10-01', '1995-03-31', 'num', 258228.50, 604.25, 0.000, '', 2313.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1681, '049C', '1994-10-01', '1995-03-31', 'num', 387342.70, 782.43, 0.000, '', 2892.16, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1682, '049C', '1994-10-01', '1995-03-31', 'num', 516456.90, 994.18, 0.000, '', 3470.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1683, '049C', '1994-10-01', '1995-03-31', 'num', 1549371.00, 1205.93, 0.000, '', 4627.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1684, '049C', '1994-10-01', '1995-03-31', 'num', 2582285.00, 1629.42, 0.000, '', 5784.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1685, '049C', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.631, 'C', 0.00, 2.236, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1686, '049C', '1994-10-01', '1995-03-31', 'ind', 0.00, 149.77, 0.000, '', 1156.86, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1687, '049C', '1994-10-01', '1995-03-31', 'index', 0.00, 224.14, 0.000, '', 3464.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1688, '049C', '1995-04-01', '2004-06-01', 'num', 258.23, 43.90, 0.000, '', 116.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1689, '049C', '1995-04-01', '2004-06-01', 'num', 516.46, 54.23, 0.000, '', 144.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1690, '049C', '1995-04-01', '2004-06-01', 'num', 1549.37, 82.63, 0.000, '', 216.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1691, '049C', '1995-04-01', '2004-06-01', 'num', 2582.28, 95.54, 0.000, '', 253.06, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1692, '049C', '1995-04-01', '2004-06-01', 'num', 5164.57, 108.46, 0.000, '', 289.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1693, '049C', '1995-04-01', '2004-06-01', 'num', 25822.84, 162.68, 0.000, '', 578.43, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1694, '049C', '1995-04-01', '2004-06-01', 'num', 51645.69, 245.32, 0.000, '', 1156.86, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1695, '049C', '1995-04-01', '2004-06-01', 'num', 103291.40, 578.43, 0.000, '', 1735.30, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1696, '049C', '1995-04-01', '2004-06-01', 'num', 258228.50, 867.65, 0.000, '', 2313.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1697, '049C', '1995-04-01', '2004-06-01', 'num', 387342.70, 1156.86, 0.000, '', 2892.16, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1698, '049C', '1995-04-01', '2004-06-01', 'num', 516456.90, 1446.08, 0.000, '', 3470.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1699, '049C', '1995-04-01', '2004-06-01', 'num', 1549371.00, 1859.24, 0.000, '', 4627.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1700, '049C', '1995-04-01', '2004-06-01', 'num', 2582285.00, 2313.73, 0.000, '', 5784.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1701, '049C', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.896, 'C', 0.00, 2.240, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1702, '049C', '1995-04-01', '2004-06-01', 'ind', 0.00, 162.68, 0.000, '', 1156.86, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1703, '049C', '1995-04-01', '2004-06-01', 'index', 0.00, 245.32, 0.000, '', 3470.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1704, '1112', '0000-00-00', '1994-09-30', 'num', 5164.57, 75.92, 0.000, '', 252.03, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1705, '1112', '0000-00-00', '1994-09-30', 'num', 25822.84, 114.14, 0.000, '', 504.06, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1706, '1112', '0000-00-00', '1994-09-30', 'num', 51645.69, 68.17, 0.000, '', 1008.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1707, '1112', '0000-00-00', '1994-09-30', 'num', 103291.40, 228.27, 0.000, '', 1512.19, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1708, '1112', '0000-00-00', '1994-09-30', 'num', 258228.50, 285.60, 0.000, '', 2016.25, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1709, '1112', '0000-00-00', '1994-09-30', 'num', 387342.70, 342.41, 0.000, '', 2520.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1710, '1112', '0000-00-00', '1994-09-30', 'num', 516456.90, 456.55, 0.000, '', 3024.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1711, '1112', '0000-00-00', '1994-09-30', 'num', 1549371.00, 570.68, 0.000, '', 4032.50, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1712, '1112', '0000-00-00', '1994-09-30', 'num', 2582285.00, 798.96, 0.000, '', 5040.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1713, '1112', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.309, 'C', 0.00, 1.952, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1714, '1112', '0000-00-00', '1994-09-30', 'ind', 0.00, 86.25, 0.000, '', 1008.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1715, '1112', '0000-00-00', '1994-09-30', 'index', 0.00, 285.60, 0.000, '', 3024.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1716, '1112', '1994-10-01', '1995-03-31', 'num', 5164.57, 84.70, 0.000, '', 252.03, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1717, '1112', '1994-10-01', '1995-03-31', 'num', 25822.84, 121.88, 0.000, '', 505.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1718, '1112', '1994-10-01', '1995-03-31', 'num', 51645.69, 212.26, 0.000, '', 1010.19, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1719, '1112', '1994-10-01', '1995-03-31', 'num', 103291.40, 367.20, 0.000, '', 1515.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1720, '1112', '1994-10-01', '1995-03-31', 'num', 258228.50, 522.65, 0.000, '', 2020.38, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1721, '1112', '1994-10-01', '1995-03-31', 'num', 387342.70, 677.59, 0.000, '', 2525.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1722, '1112', '1994-10-01', '1995-03-31', 'num', 516456.90, 860.93, 0.000, '', 3030.57, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1723, '1112', '1994-10-01', '1995-03-31', 'num', 1549371.00, 1044.79, 0.000, '', 4040.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1724, '1112', '1994-10-01', '1995-03-31', 'num', 2582285.00, 1411.99, 0.000, '', 4586.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1725, '1112', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.547, 'C', 0.00, 1.956, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1726, '1112', '1994-10-01', '1995-03-31', 'ind', 0.00, 121.88, 0.000, '', 1515.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1727, '1112', '1994-10-01', '1995-03-31', 'index', 0.00, 212.26, 0.000, '', 3030.57, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1728, '1112', '1995-04-01', '2004-06-01', 'num', 5164.57, 92.96, 0.000, '', 252.03, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1729, '1112', '1995-04-01', '2004-06-01', 'num', 25822.84, 129.11, 0.000, '', 506.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1730, '1112', '1995-04-01', '2004-06-01', 'num', 51645.69, 253.06, 0.000, '', 1012.26, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1731, '1112', '1995-04-01', '2004-06-01', 'num', 103291.40, 506.13, 0.000, '', 1518.38, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1732, '1112', '1995-04-01', '2004-06-01', 'num', 258228.50, 759.19, 0.000, '', 2024.51, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1733, '1112', '1995-04-01', '2004-06-01', 'num', 387342.70, 1012.26, 0.000, '', 2530.64, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1734, '1112', '1995-04-01', '2004-06-01', 'num', 516456.90, 1265.32, 0.000, '', 3036.77, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1735, '1112', '1995-04-01', '2004-06-01', 'num', 1549371.00, 1518.38, 0.000, '', 4049.02, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1736, '1112', '1995-04-01', '2004-06-01', 'num', 2582285.00, 2024.51, 0.000, '', 5061.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1737, '1112', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.784, 'C', 0.00, 1.960, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1738, '1112', '1995-04-01', '2004-06-01', 'ind', 0.00, 129.11, 0.000, '', 1518.38, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1739, '1112', '1995-04-01', '2004-06-01', 'index', 0.00, 253.06, 0.000, '', 3036.77, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1740, '175', '0000-00-00', '1994-09-30', 'num', 516456.90, 51.65, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1741, '175', '0000-00-00', '1994-09-30', 'ind', 0.00, 51.65, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1742, '175', '0000-00-00', '1994-09-30', 'index', 0.00, 51.65, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1743, '175', '1994-10-01', '1995-03-31', 'num', 516456.90, 51.65, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1744, '175', '1994-10-01', '1995-03-31', 'ind', 0.00, 51.65, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1745, '175', '1994-10-01', '1995-03-31', 'index', 0.00, 51.65, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1746, '175', '1995-04-01', '2004-06-01', 'num', 516456.90, 51.65, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1747, '175', '1995-04-01', '2004-06-01', 'ind', 0.00, 51.65, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1748, '175', '1995-04-01', '2004-06-01', 'index', 0.00, 51.65, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1749, '176', '0000-00-00', '1994-09-30', 'num', 516456.90, 103.29, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1750, '176', '0000-00-00', '1994-09-30', 'ind', 0.00, 103.29, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1751, '176', '0000-00-00', '1994-09-30', 'index', 0.00, 103.29, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1752, '176', '1994-10-01', '1995-03-31', 'num', 516456.90, 103.29, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1753, '176', '1994-10-01', '1995-03-31', 'ind', 0.00, 103.29, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1754, '176', '1994-10-01', '1995-03-31', 'index', 0.00, 103.29, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1755, '176', '1995-04-01', '2004-06-01', 'num', 516456.90, 103.29, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1756, '176', '1995-04-01', '2004-06-01', 'ind', 0.00, 103.29, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1757, '176', '1995-04-01', '2004-06-01', 'index', 0.00, 103.29, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1758, '2122', '0000-00-00', '1994-09-30', 'num', 5164.57, 75.92, 0.000, '', 314.01, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1759, '2122', '0000-00-00', '1994-09-30', 'num', 25822.84, 428.14, 0.000, '', 628.01, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1760, '2122', '0000-00-00', '1994-09-30', 'num', 51645.69, 171.46, 0.000, '', 1256.02, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1761, '2122', '0000-00-00', '1994-09-30', 'num', 103291.40, 228.27, 0.000, '', 1884.03, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1762, '2122', '0000-00-00', '1994-09-30', 'num', 258228.50, 285.60, 0.000, '', 2512.05, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1763, '2122', '0000-00-00', '1994-09-30', 'num', 387342.70, 342.41, 0.000, '', 3140.06, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1764, '2122', '0000-00-00', '1994-09-30', 'num', 516456.90, 456.55, 0.000, '', 3768.07, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1765, '2122', '0000-00-00', '1994-09-30', 'num', 1549371.00, 4338.75, 0.000, '', 5024.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1766, '2122', '0000-00-00', '1994-09-30', 'num', 2582285.00, 798.96, 0.000, '', 6280.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1767, '2122', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.310, 'C', 0.00, 2.432, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1768, '2122', '0000-00-00', '1994-09-30', 'ind', 0.00, 86.25, 0.000, '', 1256.02, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1769, '2122', '0000-00-00', '1994-09-30', 'index', 0.00, 285.60, 0.000, '', 3768.07, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1770, '2122', '1994-10-01', '1995-03-31', 'num', 5164.57, 84.70, 0.000, '', 314.01, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1771, '2122', '1994-10-01', '1995-03-31', 'num', 25822.84, 137.38, 0.000, '', 629.04, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1772, '2122', '1994-10-01', '1995-03-31', 'num', 51645.69, 243.25, 0.000, '', 1258.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1773, '2122', '1994-10-01', '1995-03-31', 'num', 103291.40, 429.18, 0.000, '', 1887.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1774, '2122', '1994-10-01', '1995-03-31', 'num', 258228.50, 615.62, 0.000, '', 2516.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1775, '2122', '1994-10-01', '1995-03-31', 'num', 387342.70, 801.02, 0.000, '', 3145.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1776, '2122', '1994-10-01', '1995-03-31', 'num', 516456.90, 1016.39, 0.000, '', 3774.27, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1777, '2122', '1994-10-01', '1995-03-31', 'num', 1549371.00, 1230.72, 0.000, '', 5032.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1778, '2122', '1994-10-01', '1995-03-31', 'num', 2582285.00, 1659.89, 0.000, '', 6290.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1779, '2122', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.641, 'C', 0.00, 2.436, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1780, '2122', '1994-10-01', '1995-03-31', 'ind', 0.00, 137.38, 0.000, '', 1887.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1781, '2122', '1994-10-01', '1995-03-31', 'index', 0.00, 243.25, 0.000, '', 3774.27, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1782, '2122', '1995-04-01', '2004-06-01', 'num', 5164.57, 92.96, 0.000, '', 314.01, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1783, '2122', '1995-04-01', '2004-06-01', 'num', 25822.84, 160.10, 0.000, '', 630.08, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1784, '2122', '1995-04-01', '2004-06-01', 'num', 51645.69, 315.04, 0.000, '', 1260.15, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1785, '2122', '1995-04-01', '2004-06-01', 'num', 103291.40, 630.08, 0.000, '', 1890.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1786, '2122', '1995-04-01', '2004-06-01', 'num', 258228.50, 945.12, 0.000, '', 2520.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1787, '2122', '1995-04-01', '2004-06-01', 'num', 387342.70, 1260.15, 0.000, '', 3150.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1788, '2122', '1995-04-01', '2004-06-01', 'num', 516456.90, 1588.10, 0.000, '', 3780.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1789, '2122', '1995-04-01', '2004-06-01', 'num', 1549371.00, 1890.23, 0.000, '', 5040.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1790, '2122', '1995-04-01', '2004-06-01', 'num', 2582285.00, 2520.31, 0.000, '', 6300.77, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1791, '2122', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.976, 'C', 0.00, 2.440, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1792, '2122', '1995-04-01', '2004-06-01', 'ind', 0.00, 160.10, 0.000, '', 1890.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1793, '2122', '1995-04-01', '2004-06-01', 'index', 0.00, 315.04, 0.000, '', 3780.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1794, '3132', '0000-00-00', '1994-09-30', 'num', 5164.57, 121.88, 0.000, '', 314.01, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1795, '3132', '0000-00-00', '1994-09-30', 'num', 25822.84, 183.34, 0.000, '', 628.01, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1796, '3132', '0000-00-00', '1994-09-30', 'num', 51645.69, 275.27, 0.000, '', 1256.02, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1797, '3132', '0000-00-00', '1994-09-30', 'num', 103291.40, 366.68, 0.000, '', 1884.03, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1798, '3132', '0000-00-00', '1994-09-30', 'num', 258228.50, 458.61, 0.000, '', 2512.05, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1799, '3132', '0000-00-00', '1994-09-30', 'num', 387342.70, 550.03, 0.000, '', 3140.06, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1800, '3132', '0000-00-00', '1994-09-30', 'num', 516456.90, 733.37, 0.000, '', 3768.07, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1801, '3132', '0000-00-00', '1994-09-30', 'num', 1549371.00, 916.71, 0.000, '', 5024.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1802, '3132', '0000-00-00', '1994-09-30', 'num', 2582285.00, 1283.40, 0.000, '', 6280.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1803, '3132', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.497, 'C', 0.00, 2.432, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1804, '3132', '0000-00-00', '1994-09-30', 'ind', 0.00, 137.38, 0.000, '', 1256.02, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1805, '3132', '0000-00-00', '1994-09-30', 'index', 0.00, 275.27, 0.000, '', 3768.07, 0.000, '');

INSERT INTO `INT_tariffe_onorari` VALUES (1806, '3132', '1994-10-01', '1995-03-31', 'num', 5164.57, 134.28, 0.000, '', 314.01, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1807, '3132', '1994-10-01', '1995-03-31', 'num', 25822.84, 160.10, 0.000, '', 629.04, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1808, '3132', '1994-10-01', '1995-03-31', 'num', 51645.69, 295.41, 0.000, '', 1258.09, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1809, '3132', '1994-10-01', '1995-03-31', 'num', 103291.40, 498.38, 0.000, '', 1887.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1810, '3132', '1994-10-01', '1995-03-31', 'num', 258228.50, 701.86, 0.000, '', 2516.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1811, '3132', '1994-10-01', '1995-03-31', 'num', 387342.70, 905.35, 0.000, '', 3145.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1812, '3132', '1994-10-01', '1995-03-31', 'num', 516456.90, 1154.28, 0.000, '', 3774.27, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1813, '3132', '1994-10-01', '1995-03-31', 'num', 1549371.00, 1403.73, 0.000, '', 5032.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1814, '3132', '1994-10-01', '1995-03-31', 'num', 2582285.00, 1902.11, 0.000, '', 6290.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1815, '3132', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.736, 'C', 0.00, 2.436, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1816, '3132', '1994-10-01', '1995-03-31', 'ind', 0.00, 160.10, 0.000, '', 1887.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1817, '3132', '1994-10-01', '1995-03-31', 'index', 0.00, 295.41, 0.000, '', 3774.27, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1818, '3132', '1995-04-01', '2004-06-01', 'num', 5164.57, 147.19, 0.000, '', 314.01, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1819, '3132', '1995-04-01', '2004-06-01', 'num', 25822.84, 160.10, 0.000, '', 630.08, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1820, '3132', '1995-04-01', '2004-06-01', 'num', 51645.69, 315.04, 0.000, '', 1260.15, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1821, '3132', '1995-04-01', '2004-06-01', 'num', 103291.40, 578.43, 0.000, '', 1890.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1822, '3132', '1995-04-01', '2004-06-01', 'num', 258228.50, 945.12, 0.000, '', 2520.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1823, '3132', '1995-04-01', '2004-06-01', 'num', 387342.70, 1260.15, 0.000, '', 3150.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1824, '3132', '1995-04-01', '2004-06-01', 'num', 516456.90, 1575.19, 0.000, '', 3780.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1825, '3132', '1995-04-01', '2004-06-01', 'num', 1549371.00, 3145.22, 0.000, '', 5040.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1826, '3132', '1995-04-01', '2004-06-01', 'num', 2582285.00, 2520.31, 0.000, '', 6300.77, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1827, '3132', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.976, 'C', 0.00, 2.440, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1828, '3132', '1995-04-01', '2004-06-01', 'ind', 0.00, 160.10, 0.000, '', 1890.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1829, '3132', '1995-04-01', '2004-06-01', 'index', 0.00, 315.04, 0.000, '', 3780.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1830, '3939', '0000-00-00', '1994-09-30', 'num', 516456.90, 5.16, 0.000, '', 7.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1831, '3939', '0000-00-00', '1994-09-30', 'ind', 0.00, 5.16, 0.000, '', 7.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1832, '3939', '0000-00-00', '1994-09-30', 'index', 0.00, 5.16, 0.000, '', 7.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1833, '3939', '1994-10-01', '1995-03-31', 'num', 516456.90, 7.75, 0.000, '', 25.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1834, '3939', '1994-10-01', '1995-03-31', 'ind', 0.00, 7.75, 0.000, '', 25.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1835, '3939', '1994-10-01', '1995-03-31', 'index', 0.00, 7.75, 0.000, '', 25.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1836, '3939', '1995-04-01', '2004-06-01', 'num', 516456.90, 7.75, 0.000, '', 25.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1837, '3939', '1995-04-01', '2004-06-01', 'ind', 0.00, 7.75, 0.000, '', 25.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1838, '3939', '1995-04-01', '2004-06-01', 'index', 0.00, 7.75, 0.000, '', 25.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1839, '4142', '0000-00-00', '1994-09-30', 'num', 258.23, 76.95, 0.000, '', 163.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1840, '4142', '0000-00-00', '1994-09-30', 'num', 516.46, 95.54, 0.000, '', 204.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1841, '4142', '0000-00-00', '1994-09-30', 'num', 1549.37, 143.58, 0.000, '', 306.26, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1842, '4142', '0000-00-00', '1994-09-30', 'num', 2582.28, 167.85, 0.000, '', 357.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1843, '4142', '0000-00-00', '1994-09-30', 'num', 5164.57, 200.39, 0.000, '', 408.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1844, '4142', '0000-00-00', '1994-09-30', 'num', 25822.84, 286.63, 0.000, '', 816.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1845, '4142', '0000-00-00', '1994-09-30', 'num', 51645.69, 378.56, 0.000, '', 1632.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1846, '4142', '0000-00-00', '1994-09-30', 'num', 103291.40, 573.27, 0.000, '', 2448.01, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1847, '4142', '0000-00-00', '1994-09-30', 'num', 258228.50, 716.84, 0.000, '', 3264.01, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1848, '4142', '0000-00-00', '1994-09-30', 'num', 387342.70, 859.90, 0.000, '', 4080.01, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1849, '4142', '0000-00-00', '1994-09-30', 'num', 516456.90, 1146.53, 0.000, '', 4896.01, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1850, '4142', '0000-00-00', '1994-09-30', 'num', 1549371.00, 1433.17, 0.000, '', 6528.02, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1851, '4142', '0000-00-00', '1994-09-30', 'num', 2582285.00, 2006.44, 0.000, '', 8160.02, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1852, '4142', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.777, 'C', 0.00, 3.160, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1853, '4142', '0000-00-00', '1994-09-30', 'ind', 0.00, 215.36, 0.000, '', 2448.01, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1854, '4142', '0000-00-00', '1994-09-30', 'index', 0.00, 716.84, 0.000, '', 4896.01, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1855, '4142', '1994-10-01', '1995-03-31', 'num', 258.23, 77.47, 0.000, '', 165.78, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1856, '4142', '1994-10-01', '1995-03-31', 'num', 516.46, 95.54, 0.000, '', 204.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1857, '4142', '1994-10-01', '1995-03-31', 'num', 1549.37, 144.09, 0.000, '', 306.78, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1858, '4142', '1994-10-01', '1995-03-31', 'num', 2582.28, 169.40, 0.000, '', 359.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1859, '4142', '1994-10-01', '1995-03-31', 'num', 5164.57, 192.64, 0.000, '', 409.55, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1860, '4142', '1994-10-01', '1995-03-31', 'num', 25822.84, 288.18, 0.000, '', 817.55, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1861, '4142', '1994-10-01', '1995-03-31', 'num', 51645.69, 432.27, 0.000, '', 1634.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1862, '4142', '1994-10-01', '1995-03-31', 'num', 103291.40, 696.18, 0.000, '', 2452.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1863, '4142', '1994-10-01', '1995-03-31', 'num', 258228.50, 973.00, 0.000, '', 3269.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1864, '4142', '1994-10-01', '1995-03-31', 'num', 387342.70, 1248.79, 0.000, '', 4086.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1865, '4142', '1994-10-01', '1995-03-31', 'num', 516456.90, 1596.88, 0.000, '', 4903.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1866, '4142', '1994-10-01', '1995-03-31', 'num', 1549371.00, 1944.46, 0.000, '', 6538.34, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1867, '4142', '1994-10-01', '1995-03-31', 'num', 2582285.00, 2640.64, 0.000, '', 8172.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1868, '4142', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 1.022, 'C', 0.00, 3.165, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1869, '4142', '1994-10-01', '1995-03-31', 'ind', 0.00, 288.18, 0.000, '', 2452.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1870, '4142', '1994-10-01', '1995-03-31', 'index', 0.00, 432.27, 0.000, '', 4903.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1871, '4142', '1995-01-01', '2004-06-01', 'num', 258.23, 77.47, 0.000, '', 167.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1872, '4142', '1995-01-01', '2004-06-01', 'num', 516.46, 95.54, 0.000, '', 204.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1873, '4142', '1995-01-01', '2004-06-01', 'num', 1549.37, 144.61, 0.000, '', 307.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1874, '4142', '1995-01-01', '2004-06-01', 'num', 2582.28, 170.43, 0.000, '', 361.52, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1875, '4142', '1995-01-01', '2004-06-01', 'num', 5164.57, 193.67, 0.000, '', 410.58, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1876, '4142', '1995-01-01', '2004-06-01', 'num', 25822.84, 289.22, 0.000, '', 818.58, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1877, '4142', '1995-01-01', '2004-06-01', 'num', 51645.69, 433.82, 0.000, '', 1637.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1878, '4142', '1995-01-01', '2004-06-01', 'num', 103291.40, 818.58, 0.000, '', 2455.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1879, '4142', '1995-01-01', '2004-06-01', 'num', 258228.50, 1229.17, 0.000, '', 3274.34, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1880, '4142', '1995-01-01', '2004-06-01', 'num', 387342.70, 1637.17, 0.000, '', 4092.92, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1881, '4142', '1995-01-01', '2004-06-01', 'num', 516456.90, 2047.75, 0.000, '', 4911.50, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1882, '4142', '1995-01-01', '2004-06-01', 'num', 1549371.00, 2455.75, 0.000, '', 6548.67, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1883, '4142', '1995-01-01', '2004-06-01', 'num', 2582285.00, 3274.34, 0.000, '', 8185.84, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1884, '4142', '1995-01-01', '2004-06-01', 'oltre', 0.00, 0.00, 1.268, 'C', 0.00, 3.170, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1885, '4142', '1995-01-01', '2004-06-01', 'ind', 0.00, 289.22, 0.000, '', 2455.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1886, '4142', '1995-01-01', '2004-06-01', 'index', 0.00, 433.82, 0.000, '', 4911.50, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1887, '4546', '0000-00-00', '1994-09-30', 'num', 258.23, 117.24, 0.000, '', 325.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1888, '4546', '0000-00-00', '1994-09-30', 'num', 516.46, 145.64, 0.000, '', 406.97, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1889, '4546', '0000-00-00', '1994-09-30', 'num', 1549.37, 218.46, 0.000, '', 610.97, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1890, '4546', '0000-00-00', '1994-09-30', 'num', 2582.28, 255.13, 0.000, '', 712.71, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1891, '4546', '0000-00-00', '1994-09-30', 'num', 5164.57, 291.28, 0.000, '', 813.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1892, '4546', '0000-00-00', '1994-09-30', 'num', 25822.84, 436.92, 0.000, '', 1627.87, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1893, '4546', '0000-00-00', '1994-09-30', 'num', 51645.69, 655.38, 0.000, '', 3255.74, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1894, '4546', '0000-00-00', '1994-09-30', 'num', 103291.40, 873.85, 0.000, '', 4883.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1895, '4546', '0000-00-00', '1994-09-30', 'num', 258228.50, 1092.31, 0.000, '', 6511.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1896, '4546', '0000-00-00', '1994-09-30', 'num', 387342.70, 1310.77, 0.000, '', 8139.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1897, '4546', '0000-00-00', '1994-09-30', 'num', 516456.90, 1747.69, 0.000, '', 9767.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1898, '4546', '0000-00-00', '1994-09-30', 'num', 1549371.00, 2184.61, 0.000, '', 13022.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1899, '4546', '0000-00-00', '1994-09-30', 'num', 2582285.00, 3058.46, 0.000, '', 16278.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1900, '4546', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 1.185, 'C', 0.00, 6.304, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1901, '4546', '0000-00-00', '1994-09-30', 'ind', 0.00, 218.46, 0.000, '', 4883.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1902, '4546', '0000-00-00', '1994-09-30', 'index', 0.00, 1092.31, 0.000, '', 9767.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1903, '4546', '1994-10-01', '1995-03-31', 'num', 258.23, 119.30, 0.000, '', 326.92, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1904, '4546', '1994-10-01', '1995-03-31', 'num', 516.46, 145.64, 0.000, '', 406.97, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1905, '4546', '1994-10-01', '1995-03-31', 'num', 1549.37, 220.53, 0.000, '', 611.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1906, '4546', '1994-10-01', '1995-03-31', 'num', 2582.28, 255.65, 0.000, '', 714.26, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1907, '4546', '1994-10-01', '1995-03-31', 'num', 5164.57, 292.83, 0.000, '', 814.97, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1908, '4546', '1994-10-01', '1995-03-31', 'num', 25822.84, 438.47, 0.000, '', 1628.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1909, '4546', '1994-10-01', '1995-03-31', 'num', 51645.69, 658.48, 0.000, '', 3257.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1910, '4546', '1994-10-01', '1995-03-31', 'num', 103291.40, 1251.89, 0.000, '', 4886.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1911, '4546', '1994-10-01', '1995-03-31', 'num', 258228.50, 1768.86, 0.000, '', 6514.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1912, '4546', '1994-10-01', '1995-03-31', 'num', 387342.70, 2284.81, 0.000, '', 8143.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1913, '4546', '1994-10-01', '1995-03-31', 'num', 516456.90, 2911.27, 0.000, '', 9771.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1914, '4546', '1994-10-01', '1995-03-31', 'num', 1549371.00, 3536.70, 0.000, '', 13029.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1915, '4546', '1994-10-01', '1995-03-31', 'num', 2582285.00, 4788.07, 0.000, '', 16286.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1916, '4546', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 1.854, 'C', 0.00, 6.307, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1917, '4546', '1994-10-01', '1995-03-31', 'ind', 0.00, 438.47, 0.000, '', 4886.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1918, '4546', '1994-10-01', '1995-03-31', 'index', 0.00, 658.48, 0.000, '', 9771.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1919, '4546', '1995-04-01', '2004-06-01', 'num', 258.23, 121.37, 0.000, '', 327.95, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1920, '4546', '1995-04-01', '2004-06-01', 'num', 516.46, 145.64, 0.000, '', 406.97, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1921, '4546', '1995-04-01', '2004-06-01', 'num', 1549.37, 222.08, 0.000, '', 612.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1922, '4546', '1995-04-01', '2004-06-01', 'num', 2582.28, 255.65, 0.000, '', 715.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1923, '4546', '1995-04-01', '2004-06-01', 'num', 5164.57, 294.38, 0.000, '', 816.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1924, '4546', '1995-04-01', '2004-06-01', 'num', 25822.84, 438.99, 0.000, '', 1629.42, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1925, '4546', '1995-04-01', '2004-06-01', 'num', 51645.69, 661.06, 0.000, '', 3258.84, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1926, '4546', '1995-04-01', '2004-06-01', 'num', 103291.40, 1626.84, 0.000, '', 4888.26, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1927, '4546', '1995-04-01', '2004-06-01', 'num', 258228.50, 2445.42, 0.000, '', 6517.69, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1928, '4546', '1995-04-01', '2004-06-01', 'num', 387342.70, 3258.84, 0.000, '', 8147.11, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1929, '4546', '1995-04-01', '2004-06-01', 'num', 516456.90, 4074.84, 0.000, '', 9776.53, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1930, '4546', '1995-04-01', '2004-06-01', 'num', 1549371.00, 4888.26, 0.000, '', 13035.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1931, '4546', '1995-04-01', '2004-06-01', 'num', 2582285.00, 6517.69, 0.000, '', 16294.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1932, '4546', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 2.524, 'C', 0.00, 6.310, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (1933, '4546', '1995-04-01', '2004-06-01', 'ind', 0.00, 438.99, 0.000, '', 4888.26, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1934, '4546', '1995-04-01', '2004-06-01', 'index', 0.00, 661.06, 0.000, '', 9776.53, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1935, 'PA11', '0000-00-00', '1994-09-30', 'num', 516456.90, 6.71, 0.000, '', 12.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1936, 'PA11', '0000-00-00', '1994-09-30', 'ind', 0.00, 6.71, 0.000, '', 12.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1937, 'PA11', '0000-00-00', '1994-09-30', 'index', 0.00, 6.71, 0.000, '', 12.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1938, 'PA11', '1994-10-01', '1995-03-31', 'num', 516456.90, 8.26, 0.000, '', 14.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1939, 'PA11', '1994-10-01', '1995-03-31', 'ind', 0.00, 8.26, 0.000, '', 14.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1940, 'PA11', '1994-10-01', '1995-03-31', 'index', 0.00, 8.26, 0.000, '', 14.98, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1941, 'PA11', '1995-04-01', '2004-06-01', 'num', 516456.90, 9.81, 0.000, '', 16.53, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1942, 'PA11', '1995-04-01', '2004-06-01', 'ind', 0.00, 9.81, 0.000, '', 16.53, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1943, 'PA11', '1995-04-01', '2004-06-01', 'index', 0.00, 9.81, 0.000, '', 16.53, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1944, 'PA12', '0000-00-00', '1994-09-30', 'num', 516456.90, 19.63, 0.000, '', 38.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1945, 'PA12', '0000-00-00', '1994-09-30', 'ind', 0.00, 19.63, 0.000, '', 38.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1946, 'PA12', '0000-00-00', '1994-09-30', 'index', 0.00, 19.63, 0.000, '', 38.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1947, 'PA12', '1994-10-01', '1995-03-31', 'num', 516456.90, 26.34, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1948, 'PA12', '1994-10-01', '1995-03-31', 'ind', 0.00, 26.34, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1949, 'PA12', '1994-10-01', '1995-03-31', 'index', 0.00, 26.34, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1950, 'PA12', '1995-04-01', '2004-06-01', 'num', 516456.90, 32.54, 0.000, '', 64.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1951, 'PA12', '1995-04-01', '2004-06-01', 'ind', 0.00, 32.54, 0.000, '', 64.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1952, 'PA12', '1995-04-01', '2004-06-01', 'index', 0.00, 32.54, 0.000, '', 64.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1953, 'PA13', '0000-00-00', '1994-09-30', 'num', 516456.90, 25.82, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1954, 'PA13', '0000-00-00', '1994-09-30', 'ind', 0.00, 25.82, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1955, 'PA13', '0000-00-00', '1994-09-30', 'index', 0.00, 25.82, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1956, 'PA13', '1994-10-01', '1995-03-31', 'num', 516456.90, 45.45, 0.000, '', 90.38, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1957, 'PA13', '1994-10-01', '1995-03-31', 'ind', 0.00, 45.45, 0.000, '', 90.38, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1958, 'PA13', '1994-10-01', '1995-03-31', 'index', 0.00, 45.45, 0.000, '', 90.38, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1959, 'PA13', '1995-04-01', '2004-06-01', 'num', 516456.90, 64.56, 0.000, '', 129.11, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1960, 'PA13', '1995-04-01', '2004-06-01', 'ind', 0.00, 64.56, 0.000, '', 129.11, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1961, 'PA13', '1995-04-01', '2004-06-01', 'index', 0.00, 64.56, 0.000, '', 129.11, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1962, 'PA20', '0000-00-00', '1994-09-30', 'num', 516456.90, 25.82, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1963, 'PA20', '0000-00-00', '1994-09-30', 'ind', 0.00, 25.82, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1964, 'PA20', '0000-00-00', '1994-09-30', 'index', 0.00, 25.82, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1965, 'PA20', '1994-10-01', '1995-03-31', 'num', 516456.90, 22.72, 0.000, '', 58.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1966, 'PA20', '1994-10-01', '1995-03-31', 'ind', 0.00, 22.72, 0.000, '', 58.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1967, 'PA20', '1994-10-01', '1995-03-31', 'index', 0.00, 22.72, 0.000, '', 58.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1968, 'PA20', '1995-04-01', '2004-06-01', 'num', 516456.90, 25.82, 0.000, '', 64.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1969, 'PA20', '1995-04-01', '2004-06-01', 'ind', 0.00, 25.82, 0.000, '', 64.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1970, 'PA20', '1995-04-01', '2004-06-01', 'index', 0.00, 25.82, 0.000, '', 64.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1971, 'PA30', '0000-00-00', '1994-09-30', 'num', 516456.90, 12.91, 0.000, '', 19.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1972, 'PA30', '0000-00-00', '1994-09-30', 'ind', 0.00, 12.91, 0.000, '', 19.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1973, 'PA30', '0000-00-00', '1994-09-30', 'index', 0.00, 12.91, 0.000, '', 19.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1974, 'PA30', '1994-10-01', '1995-03-31', 'num', 516456.90, 14.98, 0.000, '', 22.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1975, 'PA30', '1994-10-01', '1995-03-31', 'ind', 0.00, 14.98, 0.000, '', 22.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1976, 'PA30', '1994-10-01', '1995-03-31', 'index', 0.00, 14.98, 0.000, '', 22.72, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1977, 'PA30', '1995-04-01', '2004-06-01', 'num', 516456.90, 16.53, 0.000, '', 25.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1978, 'PA30', '1995-04-01', '2004-06-01', 'ind', 0.00, 16.53, 0.000, '', 25.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1979, 'PA30', '1995-04-01', '2004-06-01', 'index', 0.00, 16.53, 0.000, '', 25.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1980, 'PA40', '0000-00-00', '1994-09-30', 'num', 516456.90, 25.82, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1981, 'PA40', '1994-10-01', '1995-03-31', 'num', 516456.90, 29.44, 0.000, '', 58.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1982, 'PA40', '1994-10-01', '1995-03-31', 'ind', 0.00, 29.44, 0.000, '', 58.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1983, 'PA40', '1994-10-01', '1995-03-31', 'index', 0.00, 29.44, 0.000, '', 58.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1984, 'PA40', '1995-04-01', '2004-06-01', 'num', 516456.90, 32.54, 0.000, '', 64.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1985, 'PA40', '1995-04-01', '2004-06-01', 'ind', 0.00, 32.54, 0.000, '', 64.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1986, 'PA40', '1995-04-01', '2004-06-01', 'index', 0.00, 32.54, 0.000, '', 64.56, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1987, 'PA50', '0000-00-00', '1994-09-30', 'num', 516456.90, 193.67, 0.000, '', 645.57, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1988, 'PA50', '0000-00-00', '1994-09-30', 'ind', 0.00, 193.67, 0.000, '', 645.57, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1989, 'PA50', '0000-00-00', '1994-09-30', 'index', 0.00, 193.67, 0.000, '', 645.57, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1990, 'PA50', '1994-10-01', '1995-03-31', 'num', 516456.90, 213.30, 0.000, '', 710.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1991, 'PA50', '1994-10-01', '1995-03-31', 'ind', 0.00, 213.30, 0.000, '', 710.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1992, 'PA50', '1994-10-01', '1995-03-31', 'index', 0.00, 213.30, 0.000, '', 710.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1993, 'PA50', '1995-04-01', '2004-06-01', 'num', 516456.90, 232.41, 0.000, '', 774.69, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1994, 'PA60', '0000-00-00', '1994-09-30', 'num', 516456.90, 64.56, 0.000, '', 322.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1995, 'PA60', '0000-00-00', '1994-09-30', 'ind', 0.00, 64.56, 0.000, '', 322.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1996, 'PA60', '0000-00-00', '1994-09-30', 'index', 0.00, 64.56, 0.000, '', 322.79, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1997, 'PA60', '1994-10-01', '1995-03-31', 'num', 516456.90, 71.27, 0.000, '', 355.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1998, 'PA60', '1994-10-01', '1995-03-31', 'ind', 0.00, 71.27, 0.000, '', 355.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (1999, 'PA60', '1994-10-01', '1995-03-31', 'index', 0.00, 71.27, 0.000, '', 355.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2000, 'PA60', '1995-04-01', '2004-06-01', 'num', 516456.90, 77.47, 0.000, '', 387.34, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2001, 'PA60', '1995-04-01', '2004-06-01', 'ind', 0.00, 77.47, 0.000, '', 387.34, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2002, 'PA60', '1995-04-01', '2004-06-01', 'index', 0.00, 77.47, 0.000, '', 387.34, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2003, 'PM11', '0000-00-00', '1994-09-30', 'num', 516456.90, 12.91, 0.000, '', 25.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2004, 'PM11', '0000-00-00', '1994-09-30', 'ind', 0.00, 12.91, 0.000, '', 25.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2005, 'PM11', '0000-00-00', '1994-09-30', 'index', 0.00, 12.91, 0.000, '', 25.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2006, 'PM11', '1994-10-01', '1995-03-31', 'num', 516456.90, 16.53, 0.000, '', 29.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2007, 'PM11', '1994-10-01', '1995-03-31', 'ind', 0.00, 16.53, 0.000, '', 29.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2008, 'PM11', '1994-10-01', '1995-03-31', 'index', 0.00, 16.53, 0.000, '', 29.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2009, 'PM11', '1995-04-01', '2004-06-01', 'num', 516456.90, 19.63, 0.000, '', 32.54, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2010, 'PM11', '1995-04-01', '2004-06-01', 'ind', 0.00, 19.63, 0.000, '', 32.54, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2011, 'PM11', '1995-04-01', '2004-06-01', 'index', 0.00, 19.63, 0.000, '', 32.54, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2012, 'PM12', '0000-00-00', '1994-09-30', 'num', 516456.90, 38.73, 0.000, '', 77.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2013, 'PM12', '0000-00-00', '1994-09-30', 'ind', 0.00, 38.73, 0.000, '', 77.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2014, 'PM12', '0000-00-00', '1994-09-30', 'index', 0.00, 38.73, 0.000, '', 77.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2015, 'PM12', '1994-10-01', '1995-03-31', 'num', 516456.90, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2016, 'PM12', '1994-10-01', '1995-03-31', 'ind', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2017, 'PM12', '1994-10-01', '1995-03-31', 'index', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2018, 'PM12', '1995-04-01', '2004-06-01', 'num', 516456.90, 64.56, 0.000, '', 129.11, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2019, 'PM12', '1995-04-01', '2004-06-01', 'ind', 0.00, 64.56, 0.000, '', 129.11, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2020, 'PM12', '1995-04-01', '2004-06-01', 'index', 0.00, 64.56, 0.000, '', 129.11, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2021, 'PM13', '0000-00-00', '1994-09-30', 'num', 516456.90, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2022, 'PM13', '0000-00-00', '1994-09-30', 'ind', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2023, 'PM13', '0000-00-00', '1994-09-30', 'index', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2024, 'PM13', '1994-10-01', '1995-03-31', 'num', 516456.90, 90.38, 0.000, '', 180.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2025, 'PM13', '1994-10-01', '1995-03-31', 'ind', 0.00, 90.38, 0.000, '', 180.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2026, 'PM13', '1994-10-01', '1995-03-31', 'index', 0.00, 90.38, 0.000, '', 180.76, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2027, 'PM13', '1995-04-01', '2004-06-01', 'num', 516456.90, 129.11, 0.000, '', 258.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2028, 'PM13', '1995-04-01', '2004-06-01', 'ind', 0.00, 129.11, 0.000, '', 258.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2029, 'PM13', '1995-04-01', '2004-06-01', 'index', 0.00, 129.11, 0.000, '', 258.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2030, 'PM20', '0000-00-00', '1994-09-30', 'num', 516456.90, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2031, 'PM20', '0000-00-00', '1994-09-30', 'ind', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2032, 'PM20', '0000-00-00', '1994-09-30', 'index', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2033, 'PM20', '1994-10-01', '1995-03-31', 'num', 516456.90, 45.45, 0.000, '', 116.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2034, 'PM20', '1994-10-01', '1995-03-31', 'ind', 0.00, 45.45, 0.000, '', 116.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2035, 'PM20', '1994-10-01', '1995-03-31', 'index', 0.00, 45.45, 0.000, '', 116.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2036, 'PM20', '1995-04-01', '2004-06-01', 'num', 516456.90, 51.65, 0.000, '', 129.11, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2037, 'PM20', '1995-04-01', '2004-06-01', 'ind', 0.00, 51.65, 0.000, '', 129.11, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2038, 'PM20', '1995-04-01', '2004-06-01', 'index', 0.00, 51.65, 0.000, '', 129.11, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2039, 'PM30', '0000-00-00', '1994-09-30', 'num', 516456.90, 25.82, 0.000, '', 38.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2040, 'PM30', '0000-00-00', '1994-09-30', 'ind', 0.00, 25.82, 0.000, '', 38.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2041, 'PM30', '0000-00-00', '1994-09-30', 'index', 0.00, 25.82, 0.000, '', 38.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2042, 'PM30', '1994-10-01', '1995-03-31', 'num', 516456.90, 29.44, 0.000, '', 45.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2043, 'PM30', '1994-10-01', '1995-03-31', 'ind', 0.00, 29.44, 0.000, '', 45.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2044, 'PM30', '1994-10-01', '1995-03-31', 'index', 0.00, 29.44, 0.000, '', 45.45, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2045, 'PM30', '1995-04-01', '2004-06-01', 'num', 516456.90, 32.54, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2046, 'PM30', '1995-04-01', '2004-06-01', 'ind', 0.00, 32.54, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2047, 'PM30', '1995-04-01', '2004-06-01', 'index', 0.00, 32.54, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2048, 'PM40', '0000-00-00', '1994-09-30', 'num', 516456.90, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2049, 'PM40', '0000-00-00', '1994-09-30', 'ind', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2050, 'PM40', '0000-00-00', '1994-09-30', 'index', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2051, 'PM40', '1994-10-01', '1995-03-31', 'num', 516456.90, 58.36, 0.000, '', 116.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2052, 'PM40', '1994-10-01', '1995-03-31', 'ind', 0.00, 58.36, 0.000, '', 116.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2053, 'PM40', '1994-10-01', '1995-03-31', 'index', 0.00, 58.36, 0.000, '', 116.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2054, 'PM40', '1995-04-01', '2004-06-01', 'num', 516456.90, 64.56, 0.000, '', 129.11, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2055, 'PM40', '1995-04-01', '2004-06-01', 'ind', 0.00, 64.56, 0.000, '', 129.11, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2056, 'PM40', '1995-04-01', '2004-06-01', 'index', 0.00, 64.56, 0.000, '', 129.11, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2057, 'PM50', '0000-00-00', '1994-09-30', 'num', 516456.90, 387.34, 0.000, '', 1291.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2058, 'PM50', '0000-00-00', '1994-09-30', 'ind', 0.00, 387.34, 0.000, '', 1291.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2059, 'PM50', '0000-00-00', '1994-09-30', 'index', 0.00, 387.34, 0.000, '', 1291.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2060, 'PM50', '1994-10-01', '1995-03-31', 'num', 516456.90, 426.08, 0.000, '', 1420.26, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2061, 'PM50', '1994-10-01', '1995-03-31', 'ind', 0.00, 426.08, 0.000, '', 1420.26, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2062, 'PM50', '1994-10-01', '1995-03-31', 'index', 0.00, 426.08, 0.000, '', 1420.26, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2063, 'PM50', '1995-04-01', '2004-06-01', 'num', 516456.90, 464.81, 0.000, '', 1549.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2064, 'PM50', '1995-04-01', '2004-06-01', 'ind', 0.00, 464.81, 0.000, '', 1549.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2065, 'PM50', '1995-04-01', '2004-06-01', 'index', 0.00, 464.81, 0.000, '', 1549.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2066, 'PM60', '0000-00-00', '1994-09-30', 'num', 516456.90, 129.11, 0.000, '', 645.57, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2067, 'PM60', '0000-00-00', '1994-09-30', 'ind', 0.00, 129.11, 0.000, '', 645.57, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2068, 'PM60', '0000-00-00', '1994-09-30', 'index', 0.00, 129.11, 0.000, '', 645.57, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2069, 'PM60', '1994-10-01', '1995-03-31', 'num', 516456.90, 142.03, 0.000, '', 710.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2070, 'PM60', '1994-10-01', '1995-03-31', 'ind', 0.00, 142.03, 0.000, '', 710.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2071, 'PM60', '1994-10-01', '1995-03-31', 'index', 0.00, 142.03, 0.000, '', 710.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2072, 'PM60', '1995-04-01', '2004-06-01', 'num', 516456.90, 154.94, 0.000, '', 774.69, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2073, 'PM60', '1995-04-01', '2004-06-01', 'ind', 0.00, 154.94, 0.000, '', 774.69, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2074, 'PM60', '1995-04-01', '2004-06-01', 'index', 0.00, 154.94, 0.000, '', 774.69, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2075, 'PP11', '0000-00-00', '1994-09-30', 'num', 516456.90, 3873.43, 0.000, '', 7746.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2076, 'PP11', '0000-00-00', '1994-09-30', 'ind', 0.00, 3873.43, 0.000, '', 7746.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2077, 'PP11', '0000-00-00', '1994-09-30', 'index', 0.00, 3873.43, 0.000, '', 7746.85, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2078, 'PP11', '1994-10-01', '1995-03-31', 'num', 516456.90, 5.16, 0.000, '', 8.78, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2079, 'PP11', '1994-10-01', '1995-03-31', 'ind', 0.00, 5.16, 0.000, '', 8.78, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2080, 'PP11', '1994-10-01', '1995-03-31', 'index', 0.00, 5.16, 0.000, '', 8.78, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2081, 'PP11', '1995-04-01', '2004-06-01', 'num', 516456.90, 6.20, 0.000, '', 9.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2082, 'PP11', '1995-04-01', '2004-06-01', 'ind', 0.00, 6.20, 0.000, '', 9.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2083, 'PP11', '1995-04-01', '2004-06-01', 'index', 0.00, 6.20, 0.000, '', 9.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2084, 'PP12', '0000-00-00', '1994-09-30', 'num', 516456.90, 11.88, 0.000, '', 23.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2085, 'PP12', '0000-00-00', '1994-09-30', 'ind', 0.00, 11.88, 0.000, '', 23.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2086, 'PP12', '0000-00-00', '1994-09-30', 'index', 0.00, 11.88, 0.000, '', 23.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2087, 'PP12', '1994-10-01', '1995-03-31', 'num', 516456.90, 16.01, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2088, 'PP12', '1994-10-01', '1995-03-31', 'ind', 0.00, 16.01, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2089, 'PP12', '1994-10-01', '1995-03-31', 'index', 0.00, 16.01, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2090, 'PP12', '1995-04-01', '2004-06-01', 'num', 516456.90, 19.63, 0.000, '', 38.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2091, 'PP12', '1995-04-01', '2004-06-01', 'ind', 0.00, 19.63, 0.000, '', 38.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2092, 'PP12', '1995-04-01', '2004-06-01', 'index', 0.00, 19.63, 0.000, '', 38.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2093, 'PP13', '0000-00-00', '1994-09-30', 'num', 516456.90, 15.49, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2094, 'PP13', '0000-00-00', '1994-09-30', 'ind', 0.00, 15.49, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2095, 'PP13', '0000-00-00', '1994-09-30', 'index', 0.00, 15.49, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2096, 'PP13', '1994-10-01', '1995-03-31', 'num', 516456.90, 27.37, 0.000, '', 54.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2097, 'PP13', '1994-10-01', '1995-03-31', 'ind', 0.00, 27.37, 0.000, '', 54.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2098, 'PP13', '1994-10-01', '1995-03-31', 'index', 0.00, 27.37, 0.000, '', 54.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2099, 'PP13', '1995-04-01', '2004-06-01', 'num', 516456.90, 38.73, 0.000, '', 77.47, 0.000, '');

INSERT INTO `INT_tariffe_onorari` VALUES (2100, 'PP13', '1995-04-01', '2004-06-01', 'ind', 0.00, 38.73, 0.000, '', 77.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2101, 'PP13', '1995-04-01', '2004-06-01', 'index', 0.00, 38.73, 0.000, '', 77.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2102, 'PP14', '0000-00-00', '1994-09-30', 'num', 516456.90, 15.49, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2103, 'PP14', '0000-00-00', '1994-09-30', 'ind', 0.00, 15.49, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2104, 'PP14', '0000-00-00', '1994-09-30', 'index', 0.00, 15.49, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2105, 'PP20', '0000-00-00', '1994-09-30', 'num', 516456.90, 15.49, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2106, 'PP20', '0000-00-00', '1994-09-30', 'ind', 0.00, 15.49, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2107, 'PP20', '0000-00-00', '1994-09-30', 'index', 0.00, 15.49, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2108, 'PP20', '1994-10-01', '1995-03-31', 'num', 516456.90, 13.94, 0.000, '', 35.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2109, 'PP20', '1994-10-01', '1995-03-31', 'ind', 0.00, 13.94, 0.000, '', 35.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2110, 'PP20', '1994-10-01', '1995-03-31', 'index', 0.00, 13.94, 0.000, '', 35.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2111, 'PP20', '1995-04-01', '2004-06-01', 'num', 516456.90, 15.49, 0.000, '', 38.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2112, 'PP20', '1995-04-01', '2004-06-01', 'ind', 0.00, 15.49, 0.000, '', 38.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2113, 'PP20', '1995-04-01', '2004-06-01', 'index', 0.00, 15.49, 0.000, '', 38.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2114, 'PP30', '0000-00-00', '1994-09-30', 'num', 516456.90, 7.75, 0.000, '', 11.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2115, 'PP30', '0000-00-00', '1994-09-30', 'ind', 0.00, 7.75, 0.000, '', 11.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2116, 'PP30', '0000-00-00', '1994-09-30', 'index', 0.00, 7.75, 0.000, '', 11.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2117, 'PP30', '1994-10-01', '1995-03-31', 'num', 516456.90, 8.78, 0.000, '', 13.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2118, 'PP30', '1994-10-01', '1995-03-31', 'ind', 0.00, 8.78, 0.000, '', 13.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2119, 'PP30', '1994-10-01', '1995-03-31', 'index', 0.00, 8.78, 0.000, '', 13.94, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2120, 'PP40', '0000-00-00', '1994-09-30', 'num', 516456.90, 15.49, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2121, 'PP40', '0000-00-00', '1994-09-30', 'ind', 0.00, 15.49, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2122, 'PP40', '0000-00-00', '1994-09-30', 'index', 0.00, 15.49, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2123, 'PP40', '1994-10-01', '1995-03-31', 'num', 516456.90, 17.56, 0.000, '', 35.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2124, 'PP40', '1994-10-01', '1995-03-31', 'ind', 0.00, 17.56, 0.000, '', 35.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2125, 'PP40', '1994-10-01', '1995-03-31', 'index', 0.00, 17.56, 0.000, '', 35.12, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2126, 'PP40', '1995-04-01', '2004-06-01', 'num', 516456.90, 19.63, 0.000, '', 38.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2127, 'PP40', '1995-04-01', '2004-06-01', 'ind', 0.00, 19.63, 0.000, '', 38.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2128, 'PP40', '1995-04-01', '2004-06-01', 'index', 0.00, 19.63, 0.000, '', 38.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2129, 'PP50', '0000-00-00', '1994-09-30', 'num', 516456.90, 116.20, 0.000, '', 387.34, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2130, 'PP50', '0000-00-00', '1994-09-30', 'ind', 0.00, 116.20, 0.000, '', 387.34, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2131, 'PP50', '0000-00-00', '1994-09-30', 'index', 0.00, 116.20, 0.000, '', 387.34, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2132, 'PP50', '1994-10-01', '1995-03-31', 'num', 516456.90, 128.08, 0.000, '', 426.08, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2133, 'PP50', '1994-10-01', '1995-03-31', 'ind', 0.00, 128.08, 0.000, '', 426.08, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2134, 'PP50', '1994-10-01', '1995-03-31', 'index', 0.00, 128.08, 0.000, '', 426.08, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2135, 'PP50', '1995-04-01', '2004-06-01', 'num', 516456.90, 139.44, 0.000, '', 464.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2136, 'PP50', '1995-04-01', '2004-06-01', 'ind', 0.00, 139.44, 0.000, '', 464.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2137, 'PP60', '0000-00-00', '1994-09-30', 'num', 516456.90, 38.73, 0.000, '', 193.67, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2138, 'PP60', '0000-00-00', '1994-09-30', 'ind', 0.00, 38.73, 0.000, '', 193.67, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2139, 'PP60', '0000-00-00', '1994-09-30', 'index', 0.00, 38.73, 0.000, '', 193.67, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2140, 'PP60', '1994-10-01', '1995-03-31', 'num', 516456.90, 42.87, 0.000, '', 213.30, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2141, 'PP60', '1994-10-01', '1995-03-31', 'ind', 0.00, 42.87, 0.000, '', 213.30, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2142, 'PP60', '1994-10-01', '1995-03-31', 'index', 0.00, 42.87, 0.000, '', 213.30, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2143, 'PP60', '1995-04-01', '2004-06-01', 'num', 516456.90, 46.48, 0.000, '', 232.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2144, 'PP60', '1995-04-01', '2004-06-01', 'ind', 0.00, 46.48, 0.000, '', 232.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2145, 'PP60', '1995-04-01', '2004-06-01', 'index', 0.00, 46.48, 0.000, '', 232.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2146, 'PREC', '0000-00-00', '2004-06-01', 'num', 258.23, 10.33, 0.000, '', 10.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2147, 'PREC', '0000-00-00', '2004-06-01', 'num', 516.46, 12.91, 0.000, '', 12.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2148, 'PREC', '0000-00-00', '2004-06-01', 'num', 1549.37, 18.08, 0.000, '', 18.08, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2149, 'PREC', '0000-00-00', '2004-06-01', 'num', 2582.28, 20.66, 0.000, '', 20.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2150, 'PREC', '0000-00-00', '2004-06-01', 'num', 5164.57, 23.24, 0.000, '', 23.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2151, 'PREC', '0000-00-00', '2004-06-01', 'num', 25822.84, 36.15, 0.000, '', 36.15, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2152, 'PREC', '0000-00-00', '2004-06-01', 'num', 51645.69, 54.23, 0.000, '', 54.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2153, 'PREC', '0000-00-00', '2004-06-01', 'num', 103291.40, 116.20, 0.000, '', 116.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2154, 'PREC', '0000-00-00', '2004-06-01', 'num', 258228.50, 175.60, 0.000, '', 175.60, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2155, 'PREC', '0000-00-00', '2004-06-01', 'num', 387342.70, 232.41, 0.000, '', 232.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2156, 'PREC', '0000-00-00', '2004-06-01', 'num', 516456.90, 291.80, 0.000, '', 291.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2157, 'PREC', '0000-00-00', '2004-06-01', 'num', 1549371.00, 348.61, 0.000, '', 348.61, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2158, 'PREC', '0000-00-00', '2004-06-01', 'num', 2582285.00, 464.81, 0.000, '', 464.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2159, 'PREC', '0000-00-00', '2004-06-01', 'oltre', 0.00, 0.00, 0.000, '', 0.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2160, 'PREC', '0000-00-00', '2004-06-01', 'ind', 0.00, 36.15, 0.000, '', 36.15, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2161, 'PREC', '0000-00-00', '2004-06-01', 'index', 0.00, 36.15, 0.000, '', 36.15, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2162, 'PS11', '0000-00-00', '1994-09-30', 'num', 516456.90, 10.33, 0.000, '', 20.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2163, 'PS11', '0000-00-00', '1994-09-30', 'ind', 0.00, 10.33, 0.000, '', 20.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2164, 'PS11', '0000-00-00', '1994-09-30', 'index', 0.00, 10.33, 0.000, '', 20.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2165, 'PS11', '1994-10-01', '1995-03-31', 'num', 516456.90, 12.91, 0.000, '', 23.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2166, 'PS11', '1994-10-01', '1995-03-31', 'ind', 0.00, 12.91, 0.000, '', 23.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2167, 'PS11', '1994-10-01', '1995-03-31', 'index', 0.00, 12.91, 0.000, '', 23.24, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2168, 'PS11', '1995-04-01', '2004-06-01', 'num', 516456.90, 15.49, 0.000, '', 25.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2169, 'PS11', '1995-04-01', '2004-06-01', 'ind', 0.00, 15.49, 0.000, '', 25.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2170, 'PS11', '1995-04-01', '2004-06-01', 'index', 0.00, 15.49, 0.000, '', 25.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2171, 'PS12', '0000-00-00', '1994-09-30', 'num', 516456.90, 30.99, 0.000, '', 61.97, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2172, 'PS12', '0000-00-00', '1994-09-30', 'ind', 0.00, 30.99, 0.000, '', 61.97, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2173, 'PS12', '0000-00-00', '1994-09-30', 'index', 0.00, 30.99, 0.000, '', 61.97, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2174, 'PS12', '1994-10-01', '1995-03-31', 'num', 516456.90, 41.32, 0.000, '', 82.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2175, 'PS12', '1994-10-01', '1995-03-31', 'ind', 0.00, 41.32, 0.000, '', 82.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2176, 'PS12', '1994-10-01', '1995-03-31', 'index', 0.00, 41.32, 0.000, '', 82.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2177, 'PS12', '1995-04-01', '2004-06-01', 'num', 516456.90, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2178, 'PS12', '1995-04-01', '2004-06-01', 'ind', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2179, 'PS12', '1995-04-01', '2004-06-01', 'index', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2180, 'PS13', '0000-00-00', '1994-09-30', 'num', 516456.90, 41.32, 0.000, '', 82.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2181, 'PS13', '0000-00-00', '1994-09-30', 'ind', 0.00, 41.32, 0.000, '', 82.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2182, 'PS13', '0000-00-00', '1994-09-30', 'index', 0.00, 41.32, 0.000, '', 82.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2183, 'PS13', '1994-10-01', '1995-03-31', 'num', 516456.90, 72.30, 0.000, '', 144.61, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2184, 'PS13', '1994-10-01', '1995-03-31', 'ind', 0.00, 72.30, 0.000, '', 144.61, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2185, 'PS13', '1994-10-01', '1995-03-31', 'index', 0.00, 72.30, 0.000, '', 144.61, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2186, 'PS13', '1995-04-01', '2004-06-01', 'num', 516456.90, 103.29, 0.000, '', 206.58, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2187, 'PS13', '1995-04-01', '2004-06-01', 'ind', 0.00, 103.29, 0.000, '', 206.58, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2188, 'PS13', '1995-04-01', '2004-06-01', 'index', 0.00, 103.29, 0.000, '', 206.58, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2189, 'PS20', '0000-00-00', '1994-09-30', 'num', 516456.90, 41.32, 0.000, '', 82.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2190, 'PS20', '0000-00-00', '1994-09-30', 'ind', 0.00, 41.32, 0.000, '', 82.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2191, 'PS20', '0000-00-00', '1994-09-30', 'index', 0.00, 41.32, 0.000, '', 82.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2192, 'PS20', '1994-10-01', '1995-03-31', 'num', 516456.90, 36.15, 0.000, '', 92.96, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2193, 'PS20', '1994-10-01', '1995-03-31', 'ind', 0.00, 36.15, 0.000, '', 92.96, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2194, 'PS20', '1994-10-01', '1995-03-31', 'index', 0.00, 36.15, 0.000, '', 92.96, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2195, 'PS20', '1995-04-01', '2004-06-01', 'num', 516456.90, 41.32, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2196, 'PS20', '1995-04-01', '2004-06-01', 'ind', 0.00, 41.32, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2197, 'PS20', '1995-04-01', '2004-06-01', 'index', 0.00, 41.32, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2198, 'PS30', '0000-00-00', '1994-09-30', 'num', 516456.90, 20.66, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2199, 'PS30', '0000-00-00', '1994-09-30', 'ind', 0.00, 20.66, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2200, 'PS30', '0000-00-00', '1994-09-30', 'index', 0.00, 20.66, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2201, 'PS30', '1994-10-01', '1995-03-31', 'num', 516456.90, 23.24, 0.000, '', 36.15, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2202, 'PS30', '1994-10-01', '1995-03-31', 'ind', 0.00, 23.24, 0.000, '', 36.15, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2203, 'PS30', '1994-10-01', '1995-03-31', 'index', 0.00, 23.24, 0.000, '', 36.15, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2204, 'PS30', '1995-04-01', '2004-06-01', 'num', 516456.90, 25.82, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2205, 'PS30', '1995-04-01', '2004-06-01', 'ind', 0.00, 25.82, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2206, 'PS30', '1995-04-01', '2004-06-01', 'index', 0.00, 25.82, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2207, 'PS40', '0000-00-00', '1994-09-30', 'num', 516456.90, 41.32, 0.000, '', 82.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2208, 'PS40', '0000-00-00', '1994-09-30', 'ind', 0.00, 41.32, 0.000, '', 82.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2209, 'PS40', '0000-00-00', '1994-09-30', 'index', 0.00, 41.32, 0.000, '', 82.63, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2210, 'PS40', '1994-10-01', '1995-03-31', 'num', 516456.90, 46.48, 0.000, '', 92.96, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2211, 'PS40', '1994-10-01', '1995-03-31', 'ind', 0.00, 46.48, 0.000, '', 92.96, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2212, 'PS40', '1994-10-01', '1995-03-31', 'index', 0.00, 46.48, 0.000, '', 92.96, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2213, 'PS40', '1995-04-01', '2004-06-01', 'num', 516456.90, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2214, 'PS40', '1995-04-01', '2004-06-01', 'ind', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2215, 'PS40', '1995-04-01', '2004-06-01', 'index', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2216, 'PS50', '0000-00-00', '1994-09-30', 'num', 516456.90, 309.87, 0.000, '', 1032.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2217, 'PS50', '0000-00-00', '1994-09-30', 'ind', 0.00, 309.87, 0.000, '', 1032.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2218, 'PS50', '0000-00-00', '1994-09-30', 'index', 0.00, 309.87, 0.000, '', 1032.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2219, 'PS50', '1994-10-01', '1995-03-31', 'num', 516456.90, 340.86, 0.000, '', 1136.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2220, 'PS50', '1994-10-01', '1995-03-31', 'ind', 0.00, 340.86, 0.000, '', 1136.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2221, 'PS50', '1994-10-01', '1995-03-31', 'index', 0.00, 340.86, 0.000, '', 1136.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2222, 'PS50', '1995-04-01', '2004-06-01', 'num', 516456.90, 371.85, 0.000, '', 1239.50, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2223, 'PS50', '1995-04-01', '2004-06-01', 'ind', 0.00, 371.85, 0.000, '', 1239.50, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2224, 'PS50', '1995-04-01', '2004-06-01', 'index', 0.00, 371.85, 0.000, '', 1239.50, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2225, 'PS60', '0000-00-00', '1994-09-30', 'num', 516456.90, 103.29, 0.000, '', 516.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2226, 'PS60', '0000-00-00', '1994-09-30', 'ind', 0.00, 103.29, 0.000, '', 516.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2227, 'PS60', '0000-00-00', '1994-09-30', 'index', 0.00, 103.29, 0.000, '', 516.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2228, 'PS60', '1994-10-01', '1995-03-31', 'num', 516456.90, 113.62, 0.000, '', 568.10, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2229, 'PS60', '1994-10-01', '1995-03-31', 'ind', 0.00, 113.62, 0.000, '', 568.10, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2230, 'PS60', '1994-10-01', '1995-03-31', 'index', 0.00, 113.62, 0.000, '', 568.10, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2231, 'PS60', '1995-04-01', '2004-06-01', 'num', 516456.90, 123.95, 0.000, '', 619.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2232, 'PS60', '1995-04-01', '2004-06-01', 'ind', 0.00, 123.95, 0.000, '', 619.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2233, 'PS60', '1995-04-01', '2004-06-01', 'index', 0.00, 123.95, 0.000, '', 619.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2234, 'PT11', '0000-00-00', '1994-09-30', 'num', 516456.90, 5.16, 0.000, '', 10.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2235, 'PT11', '0000-00-00', '1994-09-30', 'ind', 0.00, 5.16, 0.000, '', 10.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2236, 'PT11', '0000-00-00', '1994-09-30', 'index', 0.00, 5.16, 0.000, '', 10.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2237, 'PT11', '1994-10-01', '1995-03-31', 'num', 516456.90, 6.71, 0.000, '', 11.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2238, 'PT11', '1994-10-01', '1995-03-31', 'ind', 0.00, 6.71, 0.000, '', 11.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2239, 'PT11', '1994-10-01', '1995-03-31', 'index', 0.00, 6.71, 0.000, '', 11.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2240, 'PT11', '1995-04-01', '2004-06-01', 'num', 516456.90, 7.75, 0.000, '', 12.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2241, 'PT11', '1995-04-01', '2004-06-01', 'ind', 0.00, 7.75, 0.000, '', 12.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2242, 'PT11', '1995-04-01', '2004-06-01', 'index', 0.00, 7.75, 0.000, '', 12.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2243, 'PT12', '0000-00-00', '1994-09-30', 'num', 516456.90, 15.49, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2244, 'PT12', '0000-00-00', '1994-09-30', 'ind', 0.00, 15.49, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2245, 'PT12', '0000-00-00', '1994-09-30', 'index', 0.00, 15.49, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2246, 'PT12', '1994-10-01', '1995-03-31', 'num', 516456.90, 20.66, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2247, 'PT12', '1994-10-01', '1995-03-31', 'ind', 0.00, 20.66, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2248, 'PT12', '1994-10-01', '1995-03-31', 'index', 0.00, 20.66, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2249, 'PT12', '1995-04-01', '2004-06-01', 'num', 516456.90, 25.82, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2250, 'PT12', '1995-04-01', '2004-06-01', 'ind', 0.00, 25.82, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2251, 'PT12', '1995-04-01', '2004-06-01', 'index', 0.00, 25.82, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2252, 'PT13', '0000-00-00', '1994-09-30', 'num', 516456.90, 20.66, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2253, 'PT13', '0000-00-00', '1994-09-30', 'ind', 0.00, 20.66, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2254, 'PT13', '0000-00-00', '1994-09-30', 'index', 0.00, 20.66, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2255, 'PT13', '1994-10-01', '1995-03-31', 'num', 516456.90, 36.15, 0.000, '', 72.30, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2256, 'PT13', '1994-10-01', '1995-03-31', 'ind', 0.00, 36.15, 0.000, '', 72.30, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2257, 'PT13', '1994-10-01', '1995-03-31', 'index', 0.00, 36.15, 0.000, '', 72.30, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2258, 'PT13', '1995-04-01', '2004-06-01', 'num', 516456.90, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2259, 'PT13', '1995-04-01', '2004-06-01', 'ind', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2260, 'PT13', '1995-04-01', '2004-06-01', 'index', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2261, 'PT20', '0000-00-00', '1994-09-30', 'num', 516456.90, 20.66, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2262, 'PT20', '0000-00-00', '1994-09-30', 'ind', 0.00, 20.66, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2263, 'PT20', '0000-00-00', '1994-09-30', 'index', 0.00, 20.66, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2264, 'PT20', '1994-10-01', '1995-03-31', 'num', 516456.90, 18.08, 0.000, '', 46.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2265, 'PT20', '1994-10-01', '1995-03-31', 'ind', 0.00, 18.08, 0.000, '', 46.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2266, 'PT20', '1994-10-01', '1995-03-31', 'index', 0.00, 18.08, 0.000, '', 46.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2267, 'PT20', '1995-04-01', '2004-06-01', 'num', 516456.90, 20.66, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2268, 'PT20', '1995-04-01', '2004-06-01', 'ind', 0.00, 20.66, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2269, 'PT20', '1995-04-01', '2004-06-01', 'index', 0.00, 20.66, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2270, 'PT30', '0000-00-00', '1994-09-30', 'num', 516456.90, 10.33, 0.000, '', 15.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2271, 'PT30', '0000-00-00', '1994-09-30', 'ind', 0.00, 10.33, 0.000, '', 15.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2272, 'PT30', '0000-00-00', '1994-09-30', 'index', 0.00, 10.33, 0.000, '', 15.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2273, 'PT30', '1994-10-01', '1995-03-31', 'num', 516456.90, 11.88, 0.000, '', 18.08, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2274, 'PT30', '1994-10-01', '1995-03-31', 'ind', 0.00, 11.88, 0.000, '', 18.08, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2275, 'PT30', '1994-10-01', '1995-03-31', 'index', 0.00, 11.88, 0.000, '', 18.08, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2276, 'PT30', '1995-04-01', '2004-06-01', 'num', 516456.90, 12.91, 0.000, '', 20.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2277, 'PT30', '1995-04-01', '2004-06-01', 'ind', 0.00, 12.91, 0.000, '', 20.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2278, 'PT30', '1995-04-01', '2004-06-01', 'index', 0.00, 12.91, 0.000, '', 20.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2279, 'PT40', '0000-00-00', '1994-09-30', 'num', 516456.90, 20.66, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2280, 'PT40', '0000-00-00', '1994-09-30', 'ind', 0.00, 20.66, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2281, 'PT40', '0000-00-00', '1994-09-30', 'index', 0.00, 20.66, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2282, 'PT40', '1994-10-01', '1995-03-31', 'num', 516456.90, 23.24, 0.000, '', 46.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2283, 'PT40', '1994-10-01', '1995-03-31', 'ind', 0.00, 23.24, 0.000, '', 46.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2284, 'PT40', '1994-10-01', '1995-03-31', 'index', 0.00, 23.24, 0.000, '', 46.48, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2285, 'PT40', '1995-04-01', '2004-06-01', 'num', 516456.90, 25.82, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2286, 'PT40', '1995-04-01', '2004-06-01', 'ind', 0.00, 25.82, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2287, 'PT40', '1995-04-01', '2004-06-01', 'index', 0.00, 25.82, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2288, 'PT50', '0000-00-00', '1994-09-30', 'num', 516456.90, 154.94, 0.000, '', 516.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2289, 'PT50', '0000-00-00', '1994-09-30', 'ind', 0.00, 154.94, 0.000, '', 516.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2290, 'PT50', '0000-00-00', '1994-09-30', 'index', 0.00, 154.94, 0.000, '', 516.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2291, 'PT50', '1994-10-01', '1995-03-31', 'num', 516456.90, 170.43, 0.000, '', 568.10, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2292, 'PT50', '1994-10-01', '1995-03-31', 'ind', 0.00, 170.43, 0.000, '', 568.10, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2293, 'PT50', '1994-10-01', '1995-03-31', 'index', 0.00, 170.43, 0.000, '', 568.10, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2294, 'PT50', '1995-04-01', '2004-06-01', 'num', 516456.90, 185.92, 0.000, '', 619.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2295, 'PT50', '1995-04-01', '2004-06-01', 'ind', 0.00, 185.92, 0.000, '', 619.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2296, 'PT50', '1995-04-01', '2004-06-01', 'index', 0.00, 185.92, 0.000, '', 619.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2297, 'PT60', '0000-00-00', '1994-09-30', 'num', 516456.90, 51.65, 0.000, '', 258.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2298, 'PT60', '0000-00-00', '1994-09-30', 'ind', 0.00, 51.65, 0.000, '', 258.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2299, 'PT60', '0000-00-00', '1994-09-30', 'index', 0.00, 51.65, 0.000, '', 258.23, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2300, 'PT60', '1994-10-01', '1995-03-31', 'num', 516456.90, 56.81, 0.000, '', 284.05, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2301, 'PT60', '1994-10-01', '1995-03-31', 'ind', 0.00, 56.81, 0.000, '', 284.05, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2302, 'PT60', '1994-10-01', '1995-03-31', 'index', 0.00, 56.81, 0.000, '', 284.05, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2303, 'PT60', '1995-04-01', '2004-06-01', 'num', 516456.90, 61.97, 0.000, '', 309.87, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2304, 'PT60', '1995-04-01', '2004-06-01', 'ind', 0.00, 61.97, 0.000, '', 309.87, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2305, 'PT60', '1995-04-01', '2004-06-01', 'index', 0.00, 61.97, 0.000, '', 309.87, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2306, 'S003', '0000-00-00', '1994-09-30', 'num', 516456.90, 23.24, 0.000, '', 433.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2307, 'S003', '0000-00-00', '1994-09-30', 'ind', 0.00, 23.24, 0.000, '', 433.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2308, 'S003', '0000-00-00', '1994-09-30', 'index', 0.00, 23.24, 0.000, '', 433.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2309, 'S003', '1994-10-01', '1995-03-31', 'num', 516456.90, 25.82, 0.000, '', 294.38, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2310, 'S003', '1994-10-01', '1995-03-31', 'ind', 0.00, 25.82, 0.000, '', 294.38, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2311, 'S003', '1994-10-01', '1995-03-31', 'index', 0.00, 25.82, 0.000, '', 294.38, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2312, 'S003', '1995-04-01', '2004-06-01', 'num', 516456.90, 28.41, 0.000, '', 516.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2313, 'S003', '1995-04-01', '2004-06-01', 'ind', 0.00, 28.41, 0.000, '', 516.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2314, 'S003', '1995-04-01', '2004-06-01', 'index', 0.00, 28.41, 0.000, '', 516.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2315, 'S004', '0000-00-00', '1994-09-30', 'num', 516456.90, 25.82, 0.500, 'A', 0.00, 5.000, 'A');
INSERT INTO `INT_tariffe_onorari` VALUES (2316, 'S004', '0000-00-00', '1994-09-30', 'ind', 0.00, 25.82, 0.000, '', 5164.57, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2317, 'S004', '0000-00-00', '1994-09-30', 'index', 0.00, 258.23, 0.000, '', 25822.84, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2318, 'S004', '1994-10-01', '1995-03-31', 'num', 516456.90, 51.65, 0.500, 'A', 0.00, 5.000, 'A');
INSERT INTO `INT_tariffe_onorari` VALUES (2319, 'S004', '1994-10-01', '1995-03-31', 'ind', 0.00, 51.65, 0.000, '', 5164.57, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2320, 'S004', '1994-10-01', '1995-03-31', 'index', 0.00, 258.23, 0.000, '', 25822.84, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2321, 'S004', '1995-04-01', '2004-06-01', 'num', 516456.90, 51.65, 0.500, 'A', 0.00, 5.000, 'A');
INSERT INTO `INT_tariffe_onorari` VALUES (2322, 'S004', '1995-04-01', '2004-06-01', 'ind', 0.00, 51.65, 0.000, '', 5164.57, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2323, 'S004', '1995-04-01', '2004-06-01', 'index', 0.00, 258.23, 0.000, '', 25822.84, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2324, 'S006', '0000-00-00', '1994-09-30', 'num', 774.69, 25.82, 3.000, 'A', 0.00, 5.000, 'A');
INSERT INTO `INT_tariffe_onorari` VALUES (2325, 'S006', '0000-00-00', '1994-09-30', 'num', 2582.28, 0.00, 1.500, 'A', 0.00, 2.000, 'A');
INSERT INTO `INT_tariffe_onorari` VALUES (2326, 'S006', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.500, 'A', 0.00, 1.000, 'A');
INSERT INTO `INT_tariffe_onorari` VALUES (2327, 'S006', '0000-00-00', '1994-09-30', 'ind', 0.00, 51.65, 0.000, '', 1032.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2328, 'S006', '0000-00-00', '1994-09-30', 'index', 0.00, 258.23, 0.000, '', 5164.57, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2329, 'S006', '1994-10-01', '1995-03-31', 'num', 774.69, 38.73, 3.000, 'A', 0.00, 5.000, 'A');
INSERT INTO `INT_tariffe_onorari` VALUES (2330, 'S006', '1994-10-01', '1995-03-31', 'num', 2582.28, 0.00, 1.500, 'A', 0.00, 2.000, 'A');
INSERT INTO `INT_tariffe_onorari` VALUES (2331, 'S006', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.500, 'A', 0.00, 1.000, 'A');
INSERT INTO `INT_tariffe_onorari` VALUES (2332, 'S006', '1994-10-01', '1995-03-31', 'ind', 0.00, 51.65, 0.000, '', 1032.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2333, 'S006', '1994-10-01', '1995-03-31', 'index', 0.00, 258.23, 0.000, '', 5164.57, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2334, 'S006', '1995-04-01', '2004-06-01', 'num', 774.69, 51.65, 3.000, 'A', 0.00, 5.000, 'A');
INSERT INTO `INT_tariffe_onorari` VALUES (2335, 'S006', '1995-04-01', '2004-06-01', 'num', 2582.28, 0.00, 1.500, 'A', 0.00, 2.000, 'A');
INSERT INTO `INT_tariffe_onorari` VALUES (2336, 'S006', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.500, 'A', 0.00, 1.000, 'A');
INSERT INTO `INT_tariffe_onorari` VALUES (2337, 'S006', '1995-04-01', '2004-06-01', 'ind', 0.00, 51.65, 0.000, '', 1032.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2338, 'S006', '1995-04-01', '2004-06-01', 'index', 0.00, 258.23, 0.000, '', 5164.57, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2339, 'S01A', '1994-10-01', '1995-03-31', 'num', 516456.90, 9.30, 0.000, '', 68.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2340, 'S01A', '1994-10-01', '1995-03-31', 'ind', 0.00, 9.30, 0.000, '', 68.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2341, 'S01A', '1994-10-01', '1995-03-31', 'index', 0.00, 9.30, 0.000, '', 68.17, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2342, 'S01A', '1995-04-01', '2004-06-01', 'num', 516456.90, 10.33, 0.000, '', 74.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2343, 'S01A', '1995-04-01', '2004-06-01', 'ind', 0.00, 10.33, 0.000, '', 74.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2344, 'S01A', '1995-04-01', '2004-06-01', 'index', 0.00, 10.33, 0.000, '', 74.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2345, 'S02A', '0000-00-00', '1994-09-30', 'num', 516456.90, 5.16, 0.000, '', 5.16, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2346, 'S02A', '0000-00-00', '1994-09-30', 'ind', 0.00, 5.16, 0.000, '', 5.16, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2347, 'S02A', '0000-00-00', '1994-09-30', 'index', 0.00, 5.16, 0.000, '', 5.16, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2348, 'S02A', '1994-10-01', '1995-03-31', 'num', 516456.90, 7.75, 0.000, '', 7.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2349, 'S02A', '1994-10-01', '1995-03-31', 'ind', 0.00, 7.75, 0.000, '', 7.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2350, 'S02A', '1994-10-01', '1995-03-31', 'index', 0.00, 7.75, 0.000, '', 7.75, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2351, 'S02A', '1995-04-01', '2004-06-01', 'num', 516456.90, 10.33, 0.000, '', 10.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2352, 'S02A', '1995-04-01', '2004-06-01', 'ind', 0.00, 10.33, 0.000, '', 10.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2353, 'S02A', '1995-04-01', '2004-06-01', 'index', 0.00, 10.33, 0.000, '', 10.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2354, 'S02B', '1900-01-01', '1949-12-31', 'num', 516456.90, 5.16, 0.000, '', 12.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2355, 'S02B', '1950-01-01', '1994-09-30', 'num', 516456.90, 2.58, 0.000, '', 10.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2356, 'S02B', '1950-01-01', '1994-09-30', 'ind', 0.00, 2.58, 0.000, '', 10.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2357, 'S02B', '1950-01-01', '1994-09-30', 'index', 0.00, 2.58, 0.000, '', 10.33, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2358, 'S02B', '1994-10-01', '1995-03-31', 'num', 516456.90, 4.13, 0.000, '', 11.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2359, 'S02B', '1994-10-01', '1995-03-31', 'ind', 0.00, 4.13, 0.000, '', 11.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2360, 'S02B', '1994-10-01', '1995-03-31', 'index', 0.00, 4.13, 0.000, '', 11.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2361, 'S02B', '1995-04-01', '2004-06-01', 'num', 516456.90, 5.16, 0.000, '', 12.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2362, 'S02B', '1995-04-01', '2004-06-01', 'ind', 0.00, 5.16, 0.000, '', 12.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2363, 'S02B', '1995-04-01', '2004-06-01', 'index', 0.00, 5.16, 0.000, '', 12.91, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2364, 'S02C', '0000-00-00', '1994-09-30', 'num', 258.23, 14.98, 0.000, '', 89.35, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2365, 'S02C', '0000-00-00', '1994-09-30', 'num', 1549.37, 29.44, 0.000, '', 178.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2366, 'S02C', '0000-00-00', '1994-09-30', 'num', 5164.57, 88.83, 0.000, '', 267.52, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2367, 'S02C', '0000-00-00', '1994-09-30', 'num', 25822.84, 117.75, 0.000, '', 553.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2368, 'S02C', '0000-00-00', '1994-09-30', 'num', 51645.69, 351.19, 0.000, '', 900.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2369, 'S02C', '0000-00-00', '1994-09-30', 'num', 103291.40, 438.99, 0.000, '', 1125.36, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2370, 'S02C', '0000-00-00', '1994-09-30', 'num', 258228.50, 526.79, 0.000, '', 1350.53, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2371, 'S02C', '0000-00-00', '1994-09-30', 'num', 387342.70, 614.58, 0.000, '', 1575.71, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2372, 'S02C', '0000-00-00', '1994-09-30', 'num', 516456.90, 702.38, 0.000, '', 1800.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2373, 'S02C', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 1.360, 'C', 0.00, 3.486, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (2374, 'S02C', '0000-00-00', '1994-09-30', 'ind', 0.00, 117.75, 0.000, '', 553.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2375, 'S02C', '0000-00-00', '1994-09-30', 'index', 0.00, 526.79, 0.000, '', 1350.53, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2376, 'S02C', '1994-10-01', '1995-03-31', 'num', 258.23, 16.53, 0.000, '', 89.86, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2377, 'S02C', '1994-10-01', '1995-03-31', 'num', 1549.37, 33.05, 0.000, '', 178.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2378, 'S02C', '1994-10-01', '1995-03-31', 'num', 5164.57, 98.64, 0.000, '', 267.52, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2379, 'S02C', '1994-10-01', '1995-03-31', 'num', 25822.84, 130.15, 0.000, '', 553.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2380, 'S02C', '1994-10-01', '1995-03-31', 'num', 51645.69, 387.34, 0.000, '', 900.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2381, 'S02C', '1994-10-01', '1995-03-31', 'num', 103291.40, 484.44, 0.000, '', 1125.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2382, 'S02C', '1994-10-01', '1995-03-31', 'num', 258228.50, 544.86, 0.000, '', 1352.08, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2383, 'S02C', '1994-10-01', '1995-03-31', 'num', 387342.70, 645.57, 0.000, '', 1576.74, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2384, 'S02C', '1994-10-01', '1995-03-31', 'num', 516456.90, 746.28, 0.000, '', 1801.40, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2385, 'S02C', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 1.445, 'C', 0.00, 3.488, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (2386, 'S02C', '1994-10-01', '1995-03-31', 'ind', 0.00, 130.15, 0.000, '', 553.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2387, 'S02C', '1994-10-01', '1995-03-31', 'index', 0.00, 544.86, 0.000, '', 1352.08, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2388, 'S02C', '1995-04-01', '2004-06-01', 'num', 258.23, 18.08, 0.000, '', 90.38, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2389, 'S02C', '1995-04-01', '2004-06-01', 'num', 1549.37, 36.15, 0.000, '', 178.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2390, 'S02C', '1995-04-01', '2004-06-01', 'num', 5164.57, 108.46, 0.000, '', 267.52, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2391, 'S02C', '1995-04-01', '2004-06-01', 'num', 25822.84, 142.03, 0.000, '', 553.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2392, 'S02C', '1995-04-01', '2004-06-01', 'num', 51645.69, 423.49, 0.000, '', 900.18, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2393, 'S02C', '1995-04-01', '2004-06-01', 'num', 103291.40, 529.37, 0.000, '', 1125.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2394, 'S02C', '1995-04-01', '2004-06-01', 'num', 258228.50, 562.94, 0.000, '', 1350.53, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2395, 'S02C', '1995-04-01', '2004-06-01', 'num', 387342.70, 676.56, 0.000, '', 1577.78, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2396, 'S02C', '1995-04-01', '2004-06-01', 'num', 516456.90, 790.18, 0.000, '', 1802.43, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2397, 'S02C', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 1.530, 'C', 0.00, 3.490, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (2398, 'S02C', '1995-04-01', '2004-06-01', 'ind', 0.00, 142.03, 0.000, '', 553.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2399, 'S02C', '1995-04-01', '2004-06-01', 'index', 0.00, 562.94, 0.000, '', 1350.53, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2400, 'S02D', '0000-00-00', '1994-09-30', 'num', 516456.90, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2401, 'S02D', '0000-00-00', '1994-09-30', 'ind', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2402, 'S02D', '0000-00-00', '1994-09-30', 'index', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2403, 'S02D', '1994-10-01', '1995-03-31', 'num', 516456.90, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2404, 'S02D', '1994-10-01', '1995-03-31', 'ind', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2405, 'S02D', '1994-10-01', '1995-03-31', 'index', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2406, 'S02D', '1995-04-01', '2004-06-01', 'num', 516456.90, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2407, 'S02D', '1995-04-01', '2004-06-01', 'ind', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2408, 'S02D', '1995-04-01', '2004-06-01', 'index', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2409, 'S02E', '0000-00-00', '1994-09-30', 'num', 258.23, 5.16, 0.000, '', 36.67, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2410, 'S02E', '0000-00-00', '1994-09-30', 'num', 1549.37, 9.81, 0.000, '', 72.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2411, 'S02E', '0000-00-00', '1994-09-30', 'num', 5164.57, 24.27, 0.000, '', 108.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2412, 'S02E', '0000-00-00', '1994-09-30', 'num', 25822.84, 27.89, 0.000, '', 243.25, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2413, 'S02E', '0000-00-00', '1994-09-30', 'num', 51645.69, 44.93, 0.000, '', 364.10, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2414, 'S02E', '0000-00-00', '1994-09-30', 'num', 103291.40, 56.29, 0.000, '', 455.51, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2415, 'S02E', '0000-00-00', '1994-09-30', 'num', 258228.50, 67.66, 0.000, '', 546.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2416, 'S02E', '0000-00-00', '1994-09-30', 'num', 387342.70, 79.02, 0.000, '', 637.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2417, 'S02E', '0000-00-00', '1994-09-30', 'num', 516456.90, 89.86, 0.000, '', 728.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2418, 'S02E', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.174, 'C', 0.00, 1.410, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (2419, 'S02E', '0000-00-00', '1994-09-30', 'ind', 0.00, 27.89, 0.000, '', 243.25, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2420, 'S02E', '0000-00-00', '1994-09-30', 'index', 0.00, 67.66, 0.000, '', 546.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2421, 'S02E', '1994-10-01', '1995-03-31', 'num', 258.23, 6.71, 0.000, '', 37.70, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2422, 'S02E', '1994-10-01', '1995-03-31', 'num', 1549.37, 11.36, 0.000, '', 72.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2423, 'S02E', '1994-10-01', '1995-03-31', 'num', 5164.57, 31.50, 0.000, '', 108.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2424, 'S02E', '1994-10-01', '1995-03-31', 'num', 25822.84, 41.32, 0.000, '', 243.25, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2425, 'S02E', '1994-10-01', '1995-03-31', 'num', 51645.69, 84.18, 0.000, '', 364.10, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2426, 'S02E', '1994-10-01', '1995-03-31', 'num', 103291.40, 105.87, 0.000, '', 456.55, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2427, 'S02E', '1994-10-01', '1995-03-31', 'num', 258228.50, 148.74, 0.000, '', 546.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2428, 'S02E', '1994-10-01', '1995-03-31', 'num', 387342.70, 176.63, 0.000, '', 637.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2429, 'S02E', '1994-10-01', '1995-03-31', 'num', 516456.90, 205.03, 0.000, '', 728.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2430, 'S02E', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.397, 'C', 0.00, 1.410, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (2431, 'S02E', '1994-10-01', '1995-03-31', 'ind', 0.00, 41.32, 0.000, '', 243.25, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2432, 'S02E', '1994-10-01', '1995-03-31', 'index', 0.00, 148.74, 0.000, '', 546.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2433, 'S02E', '1995-04-01', '2004-06-01', 'num', 258.23, 7.75, 0.000, '', 38.73, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2434, 'S02E', '1995-04-01', '2004-06-01', 'num', 1549.37, 12.91, 0.000, '', 72.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2435, 'S02E', '1995-04-01', '2004-06-01', 'num', 5164.57, 38.73, 0.000, '', 108.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2436, 'S02E', '1995-04-01', '2004-06-01', 'num', 25822.84, 54.23, 0.000, '', 243.25, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2437, 'S02E', '1995-04-01', '2004-06-01', 'num', 51645.69, 123.95, 0.000, '', 364.10, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2438, 'S02E', '1995-04-01', '2004-06-01', 'num', 103291.40, 154.94, 0.000, '', 457.06, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2439, 'S02E', '1995-04-01', '2004-06-01', 'num', 258228.50, 229.82, 0.000, '', 547.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2440, 'S02E', '1995-04-01', '2004-06-01', 'num', 387342.70, 273.72, 0.000, '', 637.82, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2441, 'S02E', '1995-04-01', '2004-06-01', 'num', 516456.90, 320.20, 0.000, '', 728.20, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2442, 'S02E', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.620, 'C', 0.00, 1.410, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (2443, 'S02E', '1995-04-01', '2004-06-01', 'ind', 0.00, 54.23, 0.000, '', 243.25, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2444, 'S02E', '1995-04-01', '2004-06-01', 'index', 0.00, 229.82, 0.000, '', 547.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2445, 'S02F', '0000-00-00', '1994-09-30', 'num', 5164.57, 0.00, 3.000, 'I', 0.00, 6.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2446, 'S02F', '0000-00-00', '1994-09-30', 'num', 25822.84, 0.00, 1.750, 'I', 0.00, 5.250, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2447, 'S02F', '0000-00-00', '1994-09-30', 'num', 51645.69, 0.00, 1.500, 'I', 0.00, 4.500, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2448, 'S02F', '0000-00-00', '1994-09-30', 'num', 258228.50, 0.00, 1.250, 'I', 0.00, 3.750, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2449, 'S02F', '0000-00-00', '1994-09-30', 'num', 516456.90, 0.00, 1.000, 'I', 0.00, 3.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2450, 'S02F', '0000-00-00', '1994-09-30', 'num', 1032914.00, 0.00, 0.750, 'I', 0.00, 3.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2451, 'S02F', '0000-00-00', '1994-09-30', 'num', 2582285.00, 0.00, 0.500, 'I', 0.00, 2.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2452, 'S02F', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.250, 'I', 0.00, 1.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2453, 'S02F', '0000-00-00', '1994-09-30', 'ind', 0.00, 0.00, 1.750, 'I', 0.00, 3.750, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2454, 'S02F', '0000-00-00', '1994-09-30', 'index', 0.00, 0.00, 1.500, 'I', 0.00, 3.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2455, 'S02F', '1994-10-01', '1995-03-31', 'num', 5164.57, 0.00, 3.000, 'I', 0.00, 6.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2456, 'S02F', '1994-10-01', '1995-03-31', 'num', 25822.84, 0.00, 1.750, 'I', 0.00, 5.250, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2457, 'S02F', '1994-10-01', '1995-03-31', 'num', 51645.69, 0.00, 1.500, 'I', 0.00, 4.500, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2458, 'S02F', '1994-10-01', '1995-03-31', 'num', 258228.50, 0.00, 1.250, 'I', 0.00, 3.750, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2459, 'S02F', '1994-10-01', '1995-03-31', 'num', 516456.90, 0.00, 1.000, 'I', 0.00, 3.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2460, 'S02F', '1994-10-01', '1995-03-31', 'num', 1032914.00, 0.00, 0.750, 'I', 0.00, 3.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2461, 'S02F', '1994-10-01', '1995-03-31', 'num', 2582285.00, 0.00, 0.500, 'I', 0.00, 2.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2462, 'S02F', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.250, 'I', 0.00, 1.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2463, 'S02F', '1994-10-01', '1995-03-31', 'ind', 0.00, 0.00, 1.750, 'I', 0.00, 3.750, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2464, 'S02F', '1994-10-01', '1995-03-31', 'index', 0.00, 0.00, 1.500, 'I', 0.00, 3.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2465, 'S02F', '1995-04-01', '2004-06-01', 'num', 5164.57, 0.00, 3.000, 'I', 0.00, 6.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2466, 'S02F', '1995-04-01', '2004-06-01', 'num', 25822.84, 0.00, 1.750, 'I', 0.00, 5.250, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2467, 'S02F', '1995-04-01', '2004-06-01', 'num', 51645.69, 0.00, 1.500, 'I', 0.00, 4.500, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2468, 'S02F', '1995-04-01', '2004-06-01', 'num', 258228.50, 0.00, 1.250, 'I', 0.00, 3.750, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2469, 'S02F', '1995-04-01', '2004-06-01', 'num', 516456.90, 0.00, 1.000, 'I', 0.00, 3.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2470, 'S02F', '1995-04-01', '2004-06-01', 'num', 1032914.00, 0.00, 0.750, 'I', 0.00, 3.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2471, 'S02F', '1995-04-01', '2004-06-01', 'num', 2582285.00, 0.00, 0.500, 'I', 0.00, 2.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2472, 'S02F', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.250, 'I', 0.00, 1.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2473, 'S02F', '1995-04-01', '2004-06-01', 'ind', 0.00, 0.00, 1.750, 'I', 0.00, 3.750, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2474, 'S02F', '1995-04-01', '2004-06-01', 'index', 0.00, 0.00, 1.500, 'I', 0.00, 3.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2475, 'S02G', '1900-01-01', '1949-12-31', 'num', 516456.90, 25.82, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2476, 'S02G', '1995-04-01', '2004-06-01', 'num', 516456.90, 25.82, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2477, 'S02G', '1995-04-01', '2004-06-01', 'ind', 0.00, 25.82, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2478, 'S02G', '1995-04-01', '2004-06-01', 'index', 0.00, 25.82, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2479, 'S02G', '1995-04-01', '2004-06-01', 'num', 516456.90, 25.82, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2480, 'S08A', '1994-10-01', '1995-03-31', 'num', 25822.84, 516.46, 0.000, '', 1549.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2481, 'S08A', '1994-10-01', '1995-03-31', 'num', 51645.69, 1807.60, 0.000, '', 4131.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2482, 'S08A', '1994-10-01', '1995-03-31', 'num', 103291.40, 3873.43, 0.000, '', 8263.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2483, 'S08A', '1994-10-01', '1995-03-31', 'num', 258228.50, 8005.08, 0.000, '', 16526.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2484, 'S08A', '1994-10-01', '1995-03-31', 'num', 516456.90, 15751.94, 0.000, '', 37184.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2485, 'S08A', '1994-10-01', '1995-03-31', 'num', 2582285.00, 28663.36, 0.000, '', 73336.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2486, 'S08A', '1994-10-01', '1995-03-31', 'num', 258228.50, 28663.36, 1.000, 'O', 73336.88, 1.000, 'O');
INSERT INTO `INT_tariffe_onorari` VALUES (2487, 'S08A', '1994-10-01', '1995-03-31', 'oltre', 0.00, 28663.36, 0.500, 'O', 73336.88, 0.500, 'O');
INSERT INTO `INT_tariffe_onorari` VALUES (2488, 'S08A', '1994-10-01', '1995-03-31', 'ind', 0.00, 1032.91, 0.000, '', 8263.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2489, 'S08A', '1994-10-01', '1995-03-31', 'index', 0.00, 3873.43, 0.000, '', 37184.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2490, 'S08A', '1995-04-01', '2004-06-01', 'num', 25822.84, 516.46, 0.000, '', 1549.37, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2491, 'S08A', '1995-04-01', '2004-06-01', 'num', 51645.69, 1807.60, 0.000, '', 4131.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2492, 'S08A', '1995-04-01', '2004-06-01', 'num', 103291.40, 3873.43, 0.000, '', 8263.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2493, 'S08A', '1995-04-01', '2004-06-01', 'num', 258228.50, 8005.08, 0.000, '', 16526.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2494, 'S08A', '1995-04-01', '2004-06-01', 'num', 516456.90, 15751.94, 0.000, '', 37184.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2495, 'S08A', '1995-04-01', '2004-06-01', 'num', 2582285.00, 28663.36, 0.000, '', 73336.88, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2496, 'S08A', '1995-04-01', '2004-06-01', 'num', 258228.50, 28663.36, 1.000, 'O', 73336.88, 1.000, 'O');
INSERT INTO `INT_tariffe_onorari` VALUES (2497, 'S08A', '1995-04-01', '2004-06-01', 'oltre', 0.00, 28663.36, 0.500, 'O', 73336.88, 0.500, 'O');
INSERT INTO `INT_tariffe_onorari` VALUES (2498, 'S08A', '1995-04-01', '2004-06-01', 'ind', 0.00, 1032.91, 0.000, '', 8263.31, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2499, 'S08A', '1995-04-01', '2004-06-01', 'index', 0.00, 3873.43, 0.000, '', 37184.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2500, 'S09A', '1994-10-01', '1995-03-31', 'num', 25822.84, 1549.37, 0.000, '', 4131.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2501, 'S09A', '1994-10-01', '1995-03-31', 'num', 51645.69, 4648.11, 0.000, '', 10329.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2502, 'S09A', '1994-10-01', '1995-03-31', 'num', 103291.40, 9812.68, 0.000, '', 21691.19, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2503, 'S09A', '1994-10-01', '1995-03-31', 'num', 258228.50, 20141.82, 0.000, '', 42349.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2504, 'S09A', '1994-10-01', '1995-03-31', 'num', 516456.90, 38217.81, 0.000, '', 88830.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2505, 'S09A', '1994-10-01', '1995-03-31', 'num', 2582285.00, 71787.51, 0.000, '', 181792.83, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2506, 'S09A', '1994-10-01', '1995-03-31', 'num', 258228.50, 71787.51, 1.000, 'O', 181792.83, 1.000, 'O');
INSERT INTO `INT_tariffe_onorari` VALUES (2507, 'S09A', '1994-10-01', '1995-03-31', 'oltre', 0.00, 71787.51, 0.500, 'O', 181792.83, 0.500, 'O');
INSERT INTO `INT_tariffe_onorari` VALUES (2508, 'S09A', '1994-10-01', '1995-03-31', 'ind', 0.00, 2582.28, 0.000, '', 20658.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2509, 'S09A', '1994-10-01', '1995-03-31', 'index', 0.00, 4648.11, 0.000, '', 88830.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2510, 'S09A', '1995-04-01', '2004-06-01', 'num', 25822.84, 1549.37, 0.000, '', 4131.66, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2511, 'S09A', '1995-04-01', '2004-06-01', 'num', 51645.69, 4648.11, 0.000, '', 10329.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2512, 'S09A', '1995-04-01', '2004-06-01', 'num', 103291.40, 9812.68, 0.000, '', 21691.19, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2513, 'S09A', '1995-04-01', '2004-06-01', 'num', 258228.50, 20141.82, 0.000, '', 42349.46, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2514, 'S09A', '1995-04-01', '2004-06-01', 'num', 516456.90, 38217.81, 0.000, '', 88830.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2515, 'S09A', '1995-04-01', '2004-06-01', 'num', 2582285.00, 71787.51, 0.000, '', 181792.83, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2516, 'S09A', '1995-04-01', '2004-06-01', 'num', 258228.50, 71787.51, 1.000, 'O', 181792.83, 1.000, 'O');
INSERT INTO `INT_tariffe_onorari` VALUES (2517, 'S09A', '1995-04-01', '2004-06-01', 'oltre', 0.00, 71787.51, 0.500, 'O', 181792.83, 0.500, 'O');
INSERT INTO `INT_tariffe_onorari` VALUES (2518, 'S09A', '1995-04-01', '2004-06-01', 'ind', 0.00, 2582.28, 0.000, '', 20658.28, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2519, 'S09A', '1995-04-01', '2004-06-01', 'index', 0.00, 9812.68, 0.000, '', 88830.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2520, 'S1BA', '0000-00-00', '1994-09-30', 'num', 258.23, 9.81, 0.000, '', 49.06, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2521, 'S1BA', '0000-00-00', '1994-09-30', 'num', 1549.37, 19.63, 0.000, '', 97.61, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2522, 'S1BA', '0000-00-00', '1994-09-30', 'num', 5164.57, 41.32, 0.000, '', 135.83, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2523, 'S1BA', '0000-00-00', '1994-09-30', 'num', 25822.84, 50.61, 0.000, '', 236.54, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2524, 'S1BA', '0000-00-00', '1994-09-30', 'num', 51645.69, 100.71, 0.000, '', 338.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2525, 'S1BA', '0000-00-00', '1994-09-30', 'num', 103291.40, 126.02, 0.000, '', 423.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2526, 'S1BA', '0000-00-00', '1994-09-30', 'num', 258228.50, 151.32, 0.000, '', 508.19, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2527, 'S1BA', '0000-00-00', '1994-09-30', 'num', 387342.70, 176.63, 0.000, '', 592.89, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2528, 'S1BA', '0000-00-00', '1994-09-30', 'num', 516456.90, 201.42, 0.000, '', 677.59, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2529, 'S1BA', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.390, 'C', 0.00, 1.312, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (2530, 'S1BA', '0000-00-00', '1994-09-30', 'ind', 0.00, 50.61, 0.000, '', 236.54, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2531, 'S1BA', '0000-00-00', '1994-09-30', 'index', 0.00, 151.32, 0.000, '', 508.19, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2532, 'S1BA', '1994-10-01', '1995-03-31', 'num', 258.23, 11.36, 0.000, '', 49.06, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2533, 'S1BA', '1994-10-01', '1995-03-31', 'num', 1549.37, 22.72, 0.000, '', 97.61, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2534, 'S1BA', '1994-10-01', '1995-03-31', 'num', 5164.57, 46.48, 0.000, '', 135.83, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2535, 'S1BA', '1994-10-01', '1995-03-31', 'num', 25822.84, 60.43, 0.000, '', 236.54, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2536, 'S1BA', '1994-10-01', '1995-03-31', 'num', 51645.69, 110.01, 0.000, '', 338.80, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2537, 'S1BA', '1994-10-01', '1995-03-31', 'num', 103291.40, 137.89, 0.000, '', 423.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2538, 'S1BA', '1994-10-01', '1995-03-31', 'num', 258228.50, 181.79, 0.000, '', 508.71, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2539, 'S1BA', '1994-10-01', '1995-03-31', 'num', 387342.70, 216.40, 0.000, '', 593.41, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2540, 'S1BA', '1994-10-01', '1995-03-31', 'num', 516456.90, 249.45, 0.000, '', 678.62, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2541, 'S1BA', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.483, 'C', 0.00, 1.314, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (2542, 'S1BA', '1994-10-01', '1995-03-31', 'ind', 0.00, 60.43, 0.000, '', 236.54, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2543, 'S1BA', '1994-10-01', '1995-03-31', 'index', 0.00, 181.79, 0.000, '', 508.71, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2544, 'S1BA', '1995-04-01', '2004-06-01', 'num', 258.23, 12.91, 0.000, '', 49.06, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2545, 'S1BA', '1995-04-01', '2004-06-01', 'num', 1549.37, 25.82, 0.000, '', 97.61, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2546, 'S1BA', '1995-04-01', '2004-06-01', 'num', 5164.57, 51.65, 0.000, '', 135.83, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2547, 'S1BA', '1995-04-01', '2004-06-01', 'num', 25822.84, 69.72, 0.000, '', 236.54, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2548, 'S1BA', '1995-04-01', '2004-06-01', 'num', 51645.69, 118.79, 0.000, '', 296.96, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2549, 'S1BA', '1995-04-01', '2004-06-01', 'num', 103291.40, 149.77, 0.000, '', 423.49, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2550, 'S1BA', '1995-04-01', '2004-06-01', 'num', 258228.50, 211.75, 0.000, '', 508.71, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2551, 'S1BA', '1995-04-01', '2004-06-01', 'num', 387342.70, 255.65, 0.000, '', 593.93, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2552, 'S1BA', '1995-04-01', '2004-06-01', 'num', 516456.90, 296.96, 0.000, '', 679.14, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2553, 'S1BA', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.575, 'C', 0.00, 1.315, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (2554, 'S1BA', '1995-04-01', '2004-06-01', 'ind', 0.00, 69.72, 0.000, '', 236.54, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2555, 'S1BA', '1995-04-01', '2004-06-01', 'index', 0.00, 211.75, 0.000, '', 508.71, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2556, 'S1BB', '0000-00-00', '1994-09-30', 'num', 258.23, 9.81, 0.000, '', 97.61, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2557, 'S1BB', '0000-00-00', '1994-09-30', 'num', 1549.37, 19.63, 0.000, '', 195.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2558, 'S1BB', '0000-00-00', '1994-09-30', 'num', 5164.57, 75.40, 0.000, '', 290.77, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2559, 'S1BB', '0000-00-00', '1994-09-30', 'num', 25822.84, 107.94, 0.000, '', 607.35, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2560, 'S1BB', '0000-00-00', '1994-09-30', 'num', 51645.69, 172.50, 0.000, '', 976.10, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2561, 'S1BB', '0000-00-00', '1994-09-30', 'num', 103291.40, 215.88, 0.000, '', 1220.39, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2562, 'S1BB', '0000-00-00', '1994-09-30', 'num', 258228.50, 258.74, 0.000, '', 1464.16, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2563, 'S1BB', '0000-00-00', '1994-09-30', 'num', 387342.70, 302.13, 0.000, '', 1708.44, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2564, 'S1BB', '0000-00-00', '1994-09-30', 'num', 516456.90, 344.99, 0.000, '', 1952.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2565, 'S1BB', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.668, 'C', 0.00, 3.780, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (2566, 'S1BB', '0000-00-00', '1994-09-30', 'ind', 0.00, 107.94, 0.000, '', 607.35, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2567, 'S1BB', '0000-00-00', '1994-09-30', 'index', 0.00, 258.74, 0.000, '', 1464.16, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2568, 'S1BB', '1994-10-01', '1995-03-31', 'num', 258.23, 11.36, 0.000, '', 97.61, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2569, 'S1BB', '1994-10-01', '1995-03-31', 'num', 1549.37, 22.72, 0.000, '', 195.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2570, 'S1BB', '1994-10-01', '1995-03-31', 'num', 5164.57, 86.76, 0.000, '', 290.77, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2571, 'S1BB', '1994-10-01', '1995-03-31', 'num', 25822.84, 127.56, 0.000, '', 607.35, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2572, 'S1BB', '1994-10-01', '1995-03-31', 'num', 51645.69, 238.60, 0.000, '', 976.10, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2573, 'S1BB', '1994-10-01', '1995-03-31', 'num', 103291.40, 299.03, 0.000, '', 1220.90, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2574, 'S1BB', '1994-10-01', '1995-03-31', 'num', 258228.50, 435.37, 0.000, '', 1464.16, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2575, 'S1BB', '1994-10-01', '1995-03-31', 'num', 387342.70, 518.01, 0.000, '', 1708.96, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2576, 'S1BB', '1994-10-01', '1995-03-31', 'num', 516456.90, 600.12, 0.000, '', 1952.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2577, 'S1BB', '1994-10-01', '1995-03-31', 'oltre', 0.00, 0.00, 1.162, 'C', 0.00, 3.780, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (2578, 'S1BB', '1994-10-01', '1995-03-31', 'ind', 0.00, 127.56, 0.000, '', 607.35, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2579, 'S1BB', '1994-10-01', '1995-03-31', 'index', 0.00, 435.37, 0.000, '', 1464.16, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2580, 'S1BB', '1995-04-01', '2004-06-01', 'num', 258.23, 12.91, 0.000, '', 98.13, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2581, 'S1BB', '1995-04-01', '2004-06-01', 'num', 1549.37, 25.82, 0.000, '', 195.22, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2582, 'S1BB', '1995-04-01', '2004-06-01', 'num', 5164.57, 98.13, 0.000, '', 290.77, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2583, 'S1BB', '1995-04-01', '2004-06-01', 'num', 25822.84, 147.19, 0.000, '', 607.35, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2584, 'S1BB', '1995-04-01', '2004-06-01', 'num', 51645.69, 304.71, 0.000, '', 976.10, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2585, 'S1BB', '1995-04-01', '2004-06-01', 'num', 103291.40, 382.18, 0.000, '', 1221.42, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2586, 'S1BB', '1995-04-01', '2004-06-01', 'num', 258228.50, 612.00, 0.000, '', 1464.16, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2587, 'S1BB', '1995-04-01', '2004-06-01', 'num', 387342.70, 733.37, 0.000, '', 1709.47, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2588, 'S1BB', '1995-04-01', '2004-06-01', 'num', 516456.90, 854.74, 0.000, '', 1952.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2589, 'S1BB', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 1.655, 'C', 0.00, 3.780, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (2590, 'S1BB', '1995-04-01', '2004-06-01', 'ind', 0.00, 147.19, 0.000, '', 607.35, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2591, 'S1BB', '1995-04-01', '2004-06-01', 'index', 0.00, 612.00, 0.000, '', 1464.16, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2592, 'S2DA', '0000-00-00', '1994-09-30', 'num', 516456.90, 15.49, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2593, 'S2DA', '0000-00-00', '1994-09-30', 'ind', 0.00, 15.49, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2594, 'S2DA', '0000-00-00', '1994-09-30', 'index', 0.00, 15.49, 0.000, '', 30.99, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2595, 'S2DA', '1994-10-01', '1995-03-31', 'num', 516456.90, 20.66, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2596, 'S2DA', '1994-10-01', '1995-03-31', 'ind', 0.00, 20.66, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2597, 'S2DA', '1994-10-01', '1995-03-31', 'index', 0.00, 20.66, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2598, 'S2DA', '1995-04-01', '2004-06-01', 'num', 516456.90, 25.82, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2599, 'S2DA', '1995-04-01', '2004-06-01', 'ind', 0.00, 25.82, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2600, 'S2DA', '1995-04-01', '2004-06-01', 'index', 0.00, 25.82, 0.000, '', 51.65, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2601, 'S2DB', '0000-00-00', '1994-09-30', 'num', 516456.90, 20.66, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2602, 'S2DB', '0000-00-00', '1994-09-30', 'ind', 0.00, 20.66, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2603, 'S2DB', '0000-00-00', '1994-09-30', 'index', 0.00, 20.66, 0.000, '', 41.32, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2604, 'S2DB', '1994-10-01', '1995-03-31', 'num', 516456.90, 36.15, 0.000, '', 72.30, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2605, 'S2DB', '1994-10-01', '1995-03-31', 'ind', 0.00, 36.15, 0.000, '', 72.30, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2606, 'S2DB', '1994-10-01', '1995-03-31', 'index', 0.00, 36.15, 0.000, '', 72.30, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2607, 'S2DB', '1995-04-01', '2004-06-01', 'num', 516456.90, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2608, 'S2DB', '1995-04-01', '2004-06-01', 'ind', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2609, 'S2DB', '1995-04-01', '2004-06-01', 'index', 0.00, 51.65, 0.000, '', 103.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2610, 'S2FB', '0000-00-00', '1994-09-30', 'num', 5164.57, 0.00, 1.500, 'I', 0.00, 3.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2611, 'S2FB', '0000-00-00', '1994-09-30', 'num', 25822.84, 0.00, 0.875, 'I', 0.00, 2.625, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2612, 'S2FB', '0000-00-00', '1994-09-30', 'num', 51645.69, 0.00, 0.750, 'I', 0.00, 2.250, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2613, 'S2FB', '0000-00-00', '1994-09-30', 'num', 258228.50, 0.00, 0.625, 'I', 0.00, 1.875, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2614, 'S2FB', '0000-00-00', '1994-09-30', 'num', 516456.90, 0.00, 0.500, 'I', 0.00, 1.500, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2615, 'S2FB', '0000-00-00', '1994-09-30', 'num', 1032914.00, 0.00, 0.375, 'I', 0.00, 1.500, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2616, 'S2FB', '0000-00-00', '1994-09-30', 'num', 2582285.00, 0.00, 0.250, 'I', 0.00, 1.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2617, 'S2FB', '0000-00-00', '1994-09-30', 'oltre', 0.00, 0.00, 0.125, 'I', 0.00, 0.500, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2618, 'S2FB', '0000-00-00', '1994-09-30', 'ind', 0.00, 0.00, 0.875, 'I', 0.00, 1.875, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2619, 'S2FB', '0000-00-00', '1994-09-30', 'index', 0.00, 0.00, 0.750, 'I', 0.00, 1.500, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2620, 'S2FB', '1995-04-01', '2004-06-01', 'num', 5164.57, 0.00, 1.500, 'I', 0.00, 3.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2621, 'S2FB', '1995-04-01', '2004-06-01', 'num', 25822.84, 0.00, 0.875, 'I', 0.00, 2.625, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2622, 'S2FB', '1995-04-01', '2004-06-01', 'num', 51645.69, 0.00, 0.750, 'I', 0.00, 2.250, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2623, 'S2FB', '1995-04-01', '2004-06-01', 'num', 258228.50, 0.00, 0.625, 'I', 0.00, 1.875, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2624, 'S2FB', '1995-04-01', '2004-06-01', 'num', 516456.90, 0.00, 0.500, 'I', 0.00, 1.500, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2625, 'S2FB', '1995-04-01', '2004-06-01', 'num', 1032914.00, 0.00, 0.375, 'I', 0.00, 1.500, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2626, 'S2FB', '1995-04-01', '2004-06-01', 'num', 2582285.00, 0.00, 0.250, 'I', 0.00, 1.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2627, 'S2FB', '1995-04-01', '2004-06-01', 'oltre', 0.00, 0.00, 0.125, 'I', 0.00, 0.500, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2628, 'S2FB', '1995-04-01', '2004-06-01', 'ind', 0.00, 0.00, 0.875, 'I', 0.00, 1.875, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2629, 'S2FB', '1995-04-01', '2004-06-01', 'index', 0.00, 0.00, 0.750, 'I', 0.00, 1.500, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2630, 'S2FB', '1995-04-01', '1995-03-31', 'num', 5164.57, 0.00, 1.500, 'I', 0.00, 3.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2631, 'S2FB', '1995-04-01', '1995-03-31', 'num', 25822.84, 0.00, 0.875, 'I', 0.00, 2.625, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2632, 'S2FB', '1995-04-01', '1995-03-31', 'num', 51645.69, 0.00, 0.750, 'I', 0.00, 2.250, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2633, 'S2FB', '1995-04-01', '1995-03-31', 'num', 258228.50, 0.00, 0.625, 'I', 0.00, 1.875, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2634, 'S2FB', '1995-04-01', '1995-03-31', 'num', 516456.90, 0.00, 0.500, 'I', 0.00, 1.500, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2635, 'S2FB', '1995-04-01', '1995-03-31', 'num', 1032914.00, 0.00, 0.375, 'I', 0.00, 1.500, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2636, 'S2FB', '1995-04-01', '1995-03-31', 'num', 2582285.00, 0.00, 0.250, 'I', 0.00, 1.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2637, 'S2FB', '1995-04-01', '1995-03-31', 'oltre', 0.00, 0.00, 0.125, 'I', 0.00, 0.500, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2638, 'S2FB', '1995-04-01', '1995-03-31', 'ind', 0.00, 0.00, 0.875, 'I', 0.00, 1.875, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2639, 'S2FB', '1995-04-01', '1995-03-31', 'index', 0.00, 0.00, 0.750, 'I', 0.00, 1.500, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (2640, '0013', '2004-06-02', '0000-00-00', 'num', 5200.00, 30.00, 0.000, '', 50.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2641, '0013', '2004-06-02', '0000-00-00', 'num', 25900.00, 35.00, 0.000, '', 105.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2642, '0013', '2004-06-02', '0000-00-00', 'num', 51700.00, 55.00, 0.000, '', 215.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2643, '0013', '2004-06-02', '0000-00-00', 'num', 103300.00, 110.00, 0.000, '', 325.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2644, '0013', '2004-06-02', '0000-00-00', 'num', 258300.00, 165.00, 0.000, '', 430.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2645, '0013', '2004-06-02', '0000-00-00', 'num', 516500.00, 220.00, 0.000, '', 650.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2646, '0013', '2004-06-02', '0000-00-00', 'num', 1549400.00, 330.00, 0.000, '', 865.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2647, '0013', '2004-06-02', '0000-00-00', 'num', 2582300.00, 435.00, 0.000, '', 1080.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2648, '0013', '2004-06-02', '0000-00-00', 'num', 5164600.00, 545.00, 0.000, '', 1300.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2649, '0013', '2004-06-02', '0000-00-00', 'ind', 0.00, 55.00, 0.000, '', 325.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2650, '0013', '2004-06-02', '0000-00-00', 'index', 0.00, 55.00, 0.000, '', 650.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2651, '0023', '2004-06-02', '0000-00-00', 'num', 5200.00, 30.00, 0.000, '', 65.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2652, '0023', '2004-06-02', '0000-00-00', 'num', 25900.00, 35.00, 0.000, '', 135.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2653, '0023', '2004-06-02', '0000-00-00', 'num', 51700.00, 70.00, 0.000, '', 270.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2654, '0023', '2004-06-02', '0000-00-00', 'num', 103300.00, 140.00, 0.000, '', 405.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2655, '0023', '2004-06-02', '0000-00-00', 'num', 258300.00, 205.00, 0.000, '', 540.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2656, '0023', '2004-06-02', '0000-00-00', 'num', 516500.00, 275.00, 0.000, '', 810.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2657, '0023', '2004-06-02', '0000-00-00', 'num', 1549400.00, 410.00, 0.000, '', 1080.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2658, '0023', '2004-06-02', '0000-00-00', 'num', 2582300.00, 545.00, 0.000, '', 1355.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2659, '0023', '2004-06-02', '0000-00-00', 'num', 5164600.00, 680.00, 0.000, '', 1625.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2660, '0023', '2004-06-02', '0000-00-00', 'ind', 0.00, 70.00, 0.000, '', 405.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2661, '0023', '2004-06-02', '0000-00-00', 'index', 0.00, 70.00, 0.000, '', 810.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2662, '0033', '2004-06-02', '0000-00-00', 'num', 5200.00, 55.00, 0.000, '', 70.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2663, '0033', '2004-06-02', '0000-00-00', 'num', 25900.00, 60.00, 0.000, '', 140.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2664, '0033', '2004-06-02', '0000-00-00', 'num', 51700.00, 75.00, 0.000, '', 280.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2665, '0033', '2004-06-02', '0000-00-00', 'num', 103300.00, 145.00, 0.000, '', 420.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2666, '0033', '2004-06-02', '0000-00-00', 'num', 258300.00, 215.00, 0.000, '', 560.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2667, '0033', '2004-06-02', '0000-00-00', 'num', 516500.00, 285.00, 0.000, '', 840.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2668, '0033', '2004-06-02', '0000-00-00', 'num', 1549400.00, 425.00, 0.000, '', 1125.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2669, '0033', '2004-06-02', '0000-00-00', 'num', 2582300.00, 565.00, 0.000, '', 1405.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2670, '0033', '2004-06-02', '0000-00-00', 'num', 5164600.00, 705.00, 0.000, '', 1685.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2671, '0033', '2004-06-02', '0000-00-00', 'ind', 0.00, 75.00, 0.000, '', 420.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2672, '0033', '2004-06-02', '0000-00-00', 'index', 0.00, 75.00, 0.000, '', 840.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2673, '1112', '2004-06-02', '0000-00-00', 'num', 5200.00, 80.00, 0.000, '', 205.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2674, '1112', '2004-06-02', '0000-00-00', 'num', 25900.00, 105.00, 0.000, '', 415.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2675, '1112', '2004-06-02', '0000-00-00', 'num', 51700.00, 210.00, 0.000, '', 835.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2676, '1112', '2004-06-02', '0000-00-00', 'num', 103300.00, 420.00, 0.000, '', 1255.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2677, '1112', '2004-06-02', '0000-00-00', 'num', 258300.00, 630.00, 0.000, '', 1675.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2678, '1112', '2004-06-02', '0000-00-00', 'num', 516500.00, 840.00, 0.000, '', 2515.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2679, '1112', '2004-06-02', '0000-00-00', 'num', 1549400.00, 1260.00, 0.000, '', 3355.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2680, '1112', '2004-06-02', '0000-00-00', 'num', 2582300.00, 1680.00, 0.000, '', 4195.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2681, '1112', '2004-06-02', '0000-00-00', 'num', 5164600.00, 2100.00, 0.000, '', 5035.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2682, '1112', '2004-06-02', '0000-00-00', 'ind', 0.00, 210.00, 0.000, '', 1255.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2683, '1112', '2004-06-02', '0000-00-00', 'index', 0.00, 210.00, 0.000, '', 2515.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2684, '2122', '2004-06-02', '0000-00-00', 'num', 5200.00, 80.00, 0.000, '', 260.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2685, '2122', '2004-06-02', '0000-00-00', 'num', 25900.00, 135.00, 0.000, '', 520.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2686, '2122', '2004-06-02', '0000-00-00', 'num', 51700.00, 265.00, 0.000, '', 1045.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2687, '2122', '2004-06-02', '0000-00-00', 'num', 103300.00, 525.00, 0.000, '', 1565.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2688, '2122', '2004-06-02', '0000-00-00', 'num', 258300.00, 785.00, 0.000, '', 2090.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2689, '2122', '2004-06-02', '0000-00-00', 'num', 516500.00, 1050.00, 0.000, '', 3135.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2690, '2122', '2004-06-02', '0000-00-00', 'num', 1549400.00, 1570.00, 0.000, '', 4180.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2691, '2122', '2004-06-02', '0000-00-00', 'num', 2582300.00, 2095.00, 0.000, '', 5225.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2692, '2122', '2004-06-02', '0000-00-00', 'num', 5164600.00, 2615.00, 0.000, '', 6275.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2693, '2122', '2004-06-02', '0000-00-00', 'ind', 0.00, 265.00, 0.000, '', 1565.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2694, '2122', '2004-06-02', '0000-00-00', 'index', 0.00, 265.00, 0.000, '', 3135.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2695, '4142', '2004-06-02', '0000-00-00', 'num', 5200.00, 125.00, 0.000, '', 260.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2696, '4142', '2004-06-02', '0000-00-00', 'num', 25900.00, 135.00, 0.000, '', 520.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2697, '4142', '2004-06-02', '0000-00-00', 'num', 51700.00, 265.00, 0.000, '', 1045.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2698, '4142', '2004-06-02', '0000-00-00', 'num', 103300.00, 525.00, 0.000, '', 1565.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2699, '4142', '2004-06-02', '0000-00-00', 'num', 258300.00, 785.00, 0.000, '', 2090.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2700, '4142', '2004-06-02', '0000-00-00', 'num', 516500.00, 1050.00, 0.000, '', 3135.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2701, '4142', '2004-06-02', '0000-00-00', 'num', 1549400.00, 1570.00, 0.000, '', 4180.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2702, '4142', '2004-06-02', '0000-00-00', 'num', 2582300.00, 2095.00, 0.000, '', 5225.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2703, '4142', '2004-06-02', '0000-00-00', 'num', 5164600.00, 2615.00, 0.000, '', 6275.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2704, '4142', '2004-06-02', '0000-00-00', 'ind', 0.00, 265.00, 0.000, '', 1565.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2705, '4142', '2004-06-02', '0000-00-00', 'index', 0.00, 265.00, 0.000, '', 3135.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2706, '4141', '2004-06-02', '0000-00-00', 'num', 600.00, 65.00, 0.000, '', 165.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2707, '4141', '2004-06-02', '0000-00-00', 'num', 1600.00, 120.00, 0.000, '', 250.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2708, '4141', '2004-06-02', '0000-00-00', 'num', 2600.00, 140.00, 0.000, '', 295.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2709, '4141', '2004-06-02', '0000-00-00', 'num', 5200.00, 160.00, 0.000, '', 335.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2710, '4141', '2004-06-02', '0000-00-00', 'num', 25900.00, 240.00, 0.000, '', 675.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2711, '4141', '2004-06-02', '0000-00-00', 'num', 51700.00, 360.00, 0.000, '', 1355.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2712, '4141', '2004-06-02', '0000-00-00', 'num', 103300.00, 680.00, 0.000, '', 2035.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2713, '4141', '2004-06-02', '0000-00-00', 'num', 258300.00, 1020.00, 0.000, '', 2715.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2714, '4141', '2004-06-02', '0000-00-00', 'num', 516500.00, 1360.00, 0.000, '', 4070.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2715, '4141', '2004-06-02', '0000-00-00', 'num', 1549400.00, 2040.00, 0.000, '', 5430.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2716, '4141', '2004-06-02', '0000-00-00', 'num', 2582300.00, 2720.00, 0.000, '', 6790.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2717, '4141', '2004-06-02', '0000-00-00', 'num', 5164600.00, 3400.00, 0.000, '', 8145.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2718, '4141', '2004-06-02', '0000-00-00', 'ind', 0.00, 360.00, 0.000, '', 2035.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2719, '4141', '2004-06-02', '0000-00-00', 'index', 0.00, 360.00, 0.000, '', 4070.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2720, '0014', '2004-06-02', '0000-00-00', 'num', 5200.00, 70.00, 0.000, '', 165.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2721, '0014', '2004-06-02', '0000-00-00', 'num', 25900.00, 85.00, 0.000, '', 330.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2722, '0014', '2004-06-02', '0000-00-00', 'num', 51700.00, 170.00, 0.000, '', 665.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2723, '0014', '2004-06-02', '0000-00-00', 'num', 103300.00, 335.00, 0.000, '', 995.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2724, '0014', '2004-06-02', '0000-00-00', 'num', 258300.00, 500.00, 0.000, '', 1230.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2725, '0014', '2004-06-02', '0000-00-00', 'num', 516500.00, 670.00, 0.000, '', 1995.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2726, '0014', '2004-06-02', '0000-00-00', 'num', 1549400.00, 1000.00, 0.000, '', 2665.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2727, '0014', '2004-06-02', '0000-00-00', 'num', 2582300.00, 1335.00, 0.000, '', 3330.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2728, '0014', '2004-06-02', '0000-00-00', 'num', 5164600.00, 1670.00, 0.000, '', 3995.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2729, '0014', '2004-06-02', '0000-00-00', 'ind', 0.00, 170.00, 0.000, '', 995.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2730, '0014', '2004-06-02', '0000-00-00', 'index', 0.00, 170.00, 0.000, '', 1995.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2731, '0024', '2004-06-02', '0000-00-00', 'num', 5200.00, 105.00, 0.000, '', 355.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2732, '0024', '2004-06-02', '0000-00-00', 'num', 25900.00, 180.00, 0.000, '', 710.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2733, '0024', '2004-06-02', '0000-00-00', 'num', 51700.00, 360.00, 0.000, '', 1420.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2734, '0024', '2004-06-02', '0000-00-00', 'num', 103300.00, 715.00, 0.000, '', 2130.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2735, '0024', '2004-06-02', '0000-00-00', 'num', 258300.00, 1070.00, 0.000, '', 2840.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2736, '0024', '2004-06-02', '0000-00-00', 'num', 516500.00, 1425.00, 0.000, '', 4260.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2737, '0024', '2004-06-02', '0000-00-00', 'num', 1549400.00, 2135.00, 0.000, '', 5680.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2738, '0024', '2004-06-02', '0000-00-00', 'num', 2582300.00, 2845.00, 0.000, '', 7100.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2739, '0024', '2004-06-02', '0000-00-00', 'num', 5164600.00, 3555.00, 0.000, '', 8520.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2740, '0024', '2004-06-02', '0000-00-00', 'ind', 0.00, 360.00, 0.000, '', 2130.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2741, '0024', '2004-06-02', '0000-00-00', 'index', 0.00, 360.00, 0.000, '', 4260.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2742, '0034', '2004-06-02', '0000-00-00', 'num', 5200.00, 110.00, 0.000, '', 235.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2743, '0034', '2004-06-02', '0000-00-00', 'num', 25900.00, 120.00, 0.000, '', 475.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2744, '0034', '2004-06-02', '0000-00-00', 'num', 51700.00, 240.00, 0.000, '', 950.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2745, '0034', '2004-06-02', '0000-00-00', 'num', 103300.00, 480.00, 0.000, '', 1425.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2746, '0034', '2004-06-02', '0000-00-00', 'num', 258300.00, 715.00, 0.000, '', 1900.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2747, '0034', '2004-06-02', '0000-00-00', 'num', 516500.00, 955.00, 0.000, '', 2850.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2748, '0034', '2004-06-02', '0000-00-00', 'num', 1549400.00, 1430.00, 0.000, '', 3800.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2749, '0034', '2004-06-02', '0000-00-00', 'num', 2582300.00, 1905.00, 0.000, '', 4750.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2750, '0034', '2004-06-02', '0000-00-00', 'num', 5164600.00, 2380.00, 0.000, '', 5700.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2751, '0034', '2004-06-02', '0000-00-00', 'ind', 0.00, 240.00, 0.000, '', 1425.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2752, '0034', '2004-06-02', '0000-00-00', 'index', 0.00, 240.00, 0.000, '', 1425.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2753, '0041', '2004-06-02', '0000-00-00', 'num', 600.00, 65.00, 0.000, '', 165.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2754, '0041', '2004-06-02', '0000-00-00', 'num', 1600.00, 120.00, 0.000, '', 250.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2755, '0041', '2004-06-02', '0000-00-00', 'num', 2600.00, 140.00, 0.000, '', 295.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2756, '0041', '2004-06-02', '0000-00-00', 'num', 5200.00, 160.00, 0.000, '', 335.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2757, '0041', '2004-06-02', '0000-00-00', 'num', 25900.00, 240.00, 0.000, '', 675.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2758, '0041', '2004-06-02', '0000-00-00', 'num', 51700.00, 360.00, 0.000, '', 1355.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2759, '0041', '2004-06-02', '0000-00-00', 'num', 103300.00, 680.00, 0.000, '', 2035.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2760, '0041', '2004-06-02', '0000-00-00', 'num', 258300.00, 1020.00, 0.000, '', 2715.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2761, '0041', '2004-06-02', '0000-00-00', 'num', 516500.00, 1360.00, 0.000, '', 4070.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2762, '0041', '2004-06-02', '0000-00-00', 'num', 1549400.00, 2040.00, 0.000, '', 5430.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2763, '0041', '2004-06-02', '0000-00-00', 'num', 2582300.00, 2720.00, 0.000, '', 6790.00, 0.000, '');

INSERT INTO `INT_tariffe_onorari` VALUES (2764, '0041', '2004-06-02', '0000-00-00', 'num', 5164600.00, 3400.00, 0.000, '', 8145.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2765, '0041', '2004-06-02', '0000-00-00', 'ind', 0.00, 360.00, 0.000, '', 2035.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2766, '0041', '2004-06-02', '0000-00-00', 'index', 0.00, 360.00, 0.000, '', 4070.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2767, '0014', '2004-06-02', '0000-00-00', 'num', 1600.00, 45.00, 0.000, '', 115.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2768, '0014', '2004-06-02', '0000-00-00', 'num', 2600.00, 60.00, 0.000, '', 130.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2769, '0014', '2004-06-02', '0000-00-00', 'num', 600.00, 0.00, 0.000, '', 0.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2770, '0018', '2004-06-02', '0000-00-00', 'num', 5200.00, 205.00, 0.000, '', 405.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2771, '0018', '2004-06-02', '0000-00-00', 'num', 25900.00, 210.00, 0.000, '', 810.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2772, '0018', '2004-06-02', '0000-00-00', 'num', 51700.00, 410.00, 0.000, '', 1625.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2773, '0018', '2004-06-02', '0000-00-00', 'num', 103300.00, 815.00, 0.000, '', 2440.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2774, '0018', '2004-06-02', '0000-00-00', 'num', 258300.00, 1225.00, 0.000, '', 3250.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2775, '0018', '2004-06-02', '0000-00-00', 'num', 516500.00, 1630.00, 0.000, '', 4880.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2776, '0018', '2004-06-02', '0000-00-00', 'num', 1549400.00, 2445.00, 0.000, '', 6505.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2777, '0018', '2004-06-02', '0000-00-00', 'num', 2582300.00, 3255.00, 0.000, '', 8130.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2778, '0018', '2004-06-02', '0000-00-00', 'num', 5164600.00, 4070.00, 0.000, '', 9760.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2779, '0018', '2004-06-02', '0000-00-00', 'ind', 0.00, 410.00, 0.000, '', 2440.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2780, '0018', '2004-06-02', '0000-00-00', 'index', 0.00, 410.00, 0.000, '', 4880.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2781, '0038', '2004-06-02', '0000-00-00', 'num', 5200.00, 295.00, 0.000, '', 560.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2782, '0038', '2004-06-02', '0000-00-00', 'num', 25900.00, 300.00, 0.000, '', 1125.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2783, '0038', '2004-06-02', '0000-00-00', 'num', 51700.00, 565.00, 0.000, '', 2255.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2784, '0038', '2004-06-02', '0000-00-00', 'num', 103300.00, 1130.00, 0.000, '', 3385.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2785, '0038', '2004-06-02', '0000-00-00', 'num', 258300.00, 1695.00, 0.000, '', 4515.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2786, '0038', '2004-06-02', '0000-00-00', 'num', 516500.00, 2260.00, 0.000, '', 6775.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2787, '0038', '2004-06-02', '0000-00-00', 'num', 1549400.00, 3390.00, 0.000, '', 9035.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2788, '0038', '2004-06-02', '0000-00-00', 'num', 2582300.00, 4520.00, 0.000, '', 11295.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2789, '0038', '2004-06-02', '0000-00-00', 'num', 5164600.00, 5650.00, 0.000, '', 13555.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2790, '0038', '2004-06-02', '0000-00-00', 'ind', 0.00, 565.00, 0.000, '', 3385.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2791, '0038', '2004-06-02', '0000-00-00', 'index', 0.00, 565.00, 0.000, '', 6775.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2792, '0017', '2004-06-02', '0000-00-00', 'num', 5200.00, 55.00, 0.000, '', 95.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2793, '0017', '2004-06-02', '0000-00-00', 'num', 25900.00, 60.00, 0.000, '', 190.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2794, '0017', '2004-06-02', '0000-00-00', 'num', 51700.00, 100.00, 0.000, '', 385.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2795, '0017', '2004-06-02', '0000-00-00', 'num', 103300.00, 195.00, 0.000, '', 580.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2796, '0017', '2004-06-02', '0000-00-00', 'num', 258300.00, 295.00, 0.000, '', 770.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2797, '0017', '2004-06-02', '0000-00-00', 'num', 516500.00, 390.00, 0.000, '', 1160.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2798, '0017', '2004-06-02', '0000-00-00', 'num', 1549400.00, 585.00, 0.000, '', 1545.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2799, '0017', '2004-06-02', '0000-00-00', 'num', 2582300.00, 775.00, 0.000, '', 1935.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2800, '0017', '2004-06-02', '0000-00-00', 'num', 5164600.00, 970.00, 0.000, '', 2320.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2801, '0017', '2004-06-02', '0000-00-00', 'ind', 0.00, 100.00, 0.000, '', 580.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2802, '0017', '2004-06-02', '0000-00-00', 'index', 0.00, 100.00, 0.000, '', 1160.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2803, '0037', '2004-06-02', '0000-00-00', 'num', 5200.00, 80.00, 0.000, '', 125.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2804, '0037', '2004-06-02', '0000-00-00', 'num', 25900.00, 85.00, 0.000, '', 255.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2805, '0037', '2004-06-02', '0000-00-00', 'num', 51700.00, 130.00, 0.000, '', 515.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2806, '0037', '2004-06-02', '0000-00-00', 'num', 103300.00, 260.00, 0.000, '', 770.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2807, '0037', '2004-06-02', '0000-00-00', 'num', 258300.00, 390.00, 0.000, '', 1030.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2808, '0037', '2004-06-02', '0000-00-00', 'num', 516500.00, 520.00, 0.000, '', 1545.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2809, '0037', '2004-06-02', '0000-00-00', 'num', 1549400.00, 775.00, 0.000, '', 2065.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2810, '0037', '2004-06-02', '0000-00-00', 'num', 2582300.00, 1035.00, 0.000, '', 2580.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2811, '0037', '2004-06-02', '0000-00-00', 'num', 5164600.00, 295.00, 0.000, '', 3095.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2812, '0037', '2004-06-02', '0000-00-00', 'ind', 0.00, 130.00, 0.000, '', 770.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2813, '0037', '2004-06-02', '0000-00-00', 'index', 0.00, 130.00, 0.000, '', 1545.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2814, '4141', '2004-06-02', '0000-00-00', 'num', 600.00, 65.00, 0.000, '', 165.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2815, '4141', '2004-06-02', '0000-00-00', 'num', 1600.00, 120.00, 0.000, '', 250.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2816, '4141', '2004-06-02', '0000-00-00', 'num', 2600.00, 140.00, 0.000, '', 295.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2817, '4141', '2004-06-02', '0000-00-00', 'num', 5200.00, 160.00, 0.000, '', 335.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2818, '4141', '2004-06-02', '0000-00-00', 'num', 25900.00, 240.00, 0.000, '', 675.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2819, '4141', '2004-06-02', '0000-00-00', 'num', 51700.00, 360.00, 0.000, '', 1355.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2820, '4141', '2004-06-02', '0000-00-00', 'num', 103300.00, 680.00, 0.000, '', 2035.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2821, '4141', '2004-06-02', '0000-00-00', 'num', 258300.00, 1020.00, 0.000, '', 2715.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2822, '4141', '2004-06-02', '0000-00-00', 'num', 516500.00, 1360.00, 0.000, '', 4070.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2823, '4141', '2004-06-02', '0000-00-00', 'num', 1549400.00, 2040.00, 0.000, '', 5430.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2824, '4141', '2004-06-02', '0000-00-00', 'num', 2582300.00, 2720.00, 0.000, '', 6790.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2825, '4141', '2004-06-02', '0000-00-00', 'num', 5164600.00, 3400.00, 0.000, '', 8145.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2826, '4141', '2004-06-02', '0000-00-00', 'ind', 0.00, 360.00, 0.000, '', 2035.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2827, '4141', '2004-06-02', '0000-00-00', 'index', 0.00, 360.00, 0.000, '', 4070.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2828, '0024', '2004-06-02', '0000-00-00', 'num', 5200.00, 105.00, 0.000, '', 355.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2829, '0024', '2004-06-02', '0000-00-00', 'num', 25900.00, 180.00, 0.000, '', 710.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2830, '0024', '2004-06-02', '0000-00-00', 'num', 51700.00, 360.00, 0.000, '', 1420.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2831, '0024', '2004-06-02', '0000-00-00', 'num', 103300.00, 715.00, 0.000, '', 2130.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2832, '0024', '2004-06-02', '0000-00-00', 'num', 258300.00, 1070.00, 0.000, '', 2840.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2833, '0024', '2004-06-02', '0000-00-00', 'num', 516500.00, 1425.00, 0.000, '', 4260.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2834, '0024', '2004-06-02', '0000-00-00', 'num', 1549400.00, 2135.00, 0.000, '', 5680.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2835, '0024', '2004-06-02', '0000-00-00', 'num', 2582300.00, 2845.00, 0.000, '', 7100.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2836, '0024', '2004-06-02', '0000-00-00', 'num', 5164600.00, 3555.00, 0.000, '', 8520.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2837, '0024', '2004-06-02', '0000-00-00', 'ind', 0.00, 360.00, 0.000, '', 2130.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2838, '0024', '2004-06-02', '0000-00-00', 'index', 0.00, 360.00, 0.000, '', 4260.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2839, '0019', '2004-06-02', '0000-00-00', 'num', 5200.00, 210.00, 0.000, '', 560.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2840, '0019', '2004-06-02', '0000-00-00', 'num', 25900.00, 285.00, 0.000, '', 1125.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2841, '0019', '2004-06-02', '0000-00-00', 'num', 51700.00, 565.00, 0.000, '', 2255.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2842, '0019', '2004-06-02', '0000-00-00', 'num', 103300.00, 1130.00, 0.000, '', 3385.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2843, '0019', '2004-06-02', '0000-00-00', 'num', 258300.00, 1695.00, 0.000, '', 4515.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2844, '0019', '2004-06-02', '0000-00-00', 'num', 516500.00, 2260.00, 0.000, '', 6775.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2845, '0019', '2004-06-02', '0000-00-00', 'num', 1549400.00, 3390.00, 0.000, '', 9035.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2846, '0019', '2004-06-02', '0000-00-00', 'num', 2582300.00, 4520.00, 0.000, '', 11295.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2847, '0019', '2004-06-02', '0000-00-00', 'num', 5164600.00, 5650.00, 0.000, '', 13555.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2848, '0019', '2004-06-02', '0000-00-00', 'ind', 0.00, 565.00, 0.000, '', 3385.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2849, '0019', '2004-06-02', '0000-00-00', 'index', 0.00, 565.00, 0.000, '', 6775.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2850, '0030', '2004-06-02', '0000-00-00', 'num', 5200.00, 70.00, 0.000, '', 290.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2851, '0030', '2004-06-02', '0000-00-00', 'num', 25900.00, 150.00, 0.000, '', 585.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2852, '0030', '2004-06-02', '0000-00-00', 'num', 51700.00, 295.00, 0.000, '', 1170.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2853, '0030', '2004-06-02', '0000-00-00', 'num', 103300.00, 590.00, 0.000, '', 1760.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2854, '0030', '2004-06-02', '0000-00-00', 'num', 258300.00, 885.00, 0.000, '', 2345.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2855, '0030', '2004-06-02', '0000-00-00', 'num', 516500.00, 1175.00, 0.000, '', 3520.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2856, '0030', '2004-06-02', '0000-00-00', 'num', 1549400.00, 1765.00, 0.000, '', 4695.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2857, '0030', '2004-06-02', '0000-00-00', 'num', 2582300.00, 2350.00, 0.000, '', 5870.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2858, '0030', '2004-06-02', '0000-00-00', 'num', 5164600.00, 2940.00, 0.000, '', 7045.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2859, '0030', '2004-06-02', '0000-00-00', 'ind', 0.00, 295.00, 0.000, '', 1760.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2860, '0030', '2004-06-02', '0000-00-00', 'index', 0.00, 295.00, 0.000, '', 3520.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2861, '0039', '2004-06-02', '0000-00-00', 'num', 5200.00, 105.00, 0.000, '', 290.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2862, '0039', '2004-06-02', '0000-00-00', 'num', 25900.00, 150.00, 0.000, '', 585.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2863, '0039', '2004-06-02', '0000-00-00', 'num', 51700.00, 295.00, 0.000, '', 1170.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2864, '0039', '2004-06-02', '0000-00-00', 'num', 103300.00, 590.00, 0.000, '', 1760.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2865, '0039', '2004-06-02', '0000-00-00', 'num', 258300.00, 885.00, 0.000, '', 2345.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2866, '0039', '2004-06-02', '0000-00-00', 'num', 516500.00, 1175.00, 0.000, '', 3520.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2867, '0039', '2004-06-02', '0000-00-00', 'num', 1549400.00, 1765.00, 0.000, '', 4695.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2868, '0039', '2004-06-02', '0000-00-00', 'num', 2582300.00, 2350.00, 0.000, '', 5870.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2869, '0039', '2004-06-02', '0000-00-00', 'num', 5164600.00, 2940.00, 0.000, '', 7045.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2870, '0039', '2004-06-02', '0000-00-00', 'ind', 0.00, 295.00, 0.000, '', 1760.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2871, '0039', '2004-06-02', '0000-00-00', 'index', 0.00, 295.00, 0.000, '', 3520.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2872, '4141', '2004-06-02', '0000-00-00', 'num', 600.00, 65.00, 0.000, '', 165.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2873, '4141', '2004-06-02', '0000-00-00', 'num', 1600.00, 120.00, 0.000, '', 250.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2874, '4141', '2004-06-02', '0000-00-00', 'num', 2600.00, 140.00, 0.000, '', 295.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2875, '4141', '2004-06-02', '0000-00-00', 'num', 5200.00, 160.00, 0.000, '', 335.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2876, '4141', '2004-06-02', '0000-00-00', 'num', 25900.00, 240.00, 0.000, '', 675.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2877, '4141', '2004-06-02', '0000-00-00', 'num', 51700.00, 360.00, 0.000, '', 1355.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2878, '4141', '2004-06-02', '0000-00-00', 'num', 103300.00, 680.00, 0.000, '', 2035.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2879, '4141', '2004-06-02', '0000-00-00', 'num', 258300.00, 1020.00, 0.000, '', 2715.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2880, '4141', '2004-06-02', '0000-00-00', 'num', 516500.00, 1360.00, 0.000, '', 4070.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2881, '4141', '2004-06-02', '0000-00-00', 'num', 1549400.00, 2040.00, 0.000, '', 5430.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2882, '4141', '2004-06-02', '0000-00-00', 'num', 2582300.00, 2720.00, 0.000, '', 6790.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2883, '4141', '2004-06-02', '0000-00-00', 'num', 5164600.00, 3400.00, 0.000, '', 8145.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2884, '4141', '2004-06-02', '0000-00-00', 'ind', 0.00, 360.00, 0.000, '', 2035.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2885, '4141', '2004-06-02', '0000-00-00', 'index', 0.00, 360.00, 0.000, '', 4070.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2886, '0029', '2004-06-02', '0000-00-00', 'num', 5200.00, 210.00, 0.000, '', 560.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2887, '0029', '2004-06-02', '0000-00-00', 'num', 25900.00, 285.00, 0.000, '', 1125.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2888, '0029', '2004-06-02', '0000-00-00', 'num', 51700.00, 565.00, 0.000, '', 2255.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2889, '0029', '2004-06-02', '0000-00-00', 'num', 103300.00, 1130.00, 0.000, '', 3385.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2890, '0029', '2004-06-02', '0000-00-00', 'num', 258300.00, 1695.00, 0.000, '', 4515.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2891, '0029', '2004-06-02', '0000-00-00', 'num', 516500.00, 2260.00, 0.000, '', 6775.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2892, '0029', '2004-06-02', '0000-00-00', 'num', 1549400.00, 3390.00, 0.000, '', 9035.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2893, '0029', '2004-06-02', '0000-00-00', 'num', 2582300.00, 4520.00, 0.000, '', 11295.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2894, '0029', '2004-06-02', '0000-00-00', 'num', 5164600.00, 5650.00, 0.000, '', 13555.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2895, '0029', '2004-06-02', '0000-00-00', 'ind', 0.00, 565.00, 0.000, '', 3385.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2896, '0029', '2004-06-02', '0000-00-00', 'index', 0.00, 565.00, 0.000, '', 6775.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2897, '4141', '2004-06-02', '0000-00-00', 'num', 600.00, 65.00, 0.000, '', 165.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2898, '4141', '2004-06-02', '0000-00-00', 'num', 1600.00, 120.00, 0.000, '', 250.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2899, '4141', '2004-06-02', '0000-00-00', 'num', 2600.00, 140.00, 0.000, '', 295.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2900, '4141', '2004-06-02', '0000-00-00', 'num', 5200.00, 160.00, 0.000, '', 335.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2901, '4141', '2004-06-02', '0000-00-00', 'num', 25900.00, 240.00, 0.000, '', 675.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2902, '4141', '2004-06-02', '0000-00-00', 'num', 51700.00, 360.00, 0.000, '', 1355.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2903, '4141', '2004-06-02', '0000-00-00', 'num', 103300.00, 680.00, 0.000, '', 2035.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2904, '4141', '2004-06-02', '0000-00-00', 'num', 258300.00, 1020.00, 0.000, '', 2715.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2905, '4141', '2004-06-02', '0000-00-00', 'num', 516500.00, 1360.00, 0.000, '', 4070.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2906, '4141', '2004-06-02', '0000-00-00', 'num', 1549400.00, 2040.00, 0.000, '', 5430.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2907, '4141', '2004-06-02', '0000-00-00', 'num', 2582300.00, 2720.00, 0.000, '', 6790.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2908, '4141', '2004-06-02', '0000-00-00', 'num', 5164600.00, 3400.00, 0.000, '', 8145.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2909, '4141', '2004-06-02', '0000-00-00', 'ind', 0.00, 360.00, 0.000, '', 2035.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2910, '4141', '2004-06-02', '0000-00-00', 'index', 0.00, 360.00, 0.000, '', 4070.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2911, '0012', '2004-06-02', '0000-00-00', 'num', 5200.00, 40.00, 0.000, '', 105.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2912, '0012', '2004-06-02', '0000-00-00', 'num', 25900.00, 55.00, 0.000, '', 210.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2913, '0012', '2004-06-02', '0000-00-00', 'num', 51700.00, 110.00, 0.000, '', 420.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2914, '0012', '2004-06-02', '0000-00-00', 'num', 103300.00, 215.00, 0.000, '', 630.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2915, '0012', '2004-06-02', '0000-00-00', 'num', 258300.00, 320.00, 0.000, '', 840.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2916, '0012', '2004-06-02', '0000-00-00', 'num', 516500.00, 425.00, 0.000, '', 1260.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2917, '0012', '2004-06-02', '0000-00-00', 'num', 1549400.00, 635.00, 0.000, '', 1680.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2918, '0012', '2004-06-02', '0000-00-00', 'num', 2582300.00, 845.00, 0.000, '', 2100.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2919, '0012', '2004-06-02', '0000-00-00', 'num', 5164600.00, 1055.00, 0.000, '', 2525.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2920, '0012', '2004-06-02', '0000-00-00', 'ind', 0.00, 110.00, 0.000, '', 630.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2921, '0012', '2004-06-02', '0000-00-00', 'index', 0.00, 110.00, 0.000, '', 1260.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2922, '0015', '2004-06-02', '0000-00-00', 'num', 5200.00, 25.00, 0.000, '', 40.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2923, '0015', '2004-06-02', '0000-00-00', 'num', 25900.00, 30.00, 0.000, '', 80.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2924, '0015', '2004-06-02', '0000-00-00', 'num', 51700.00, 40.00, 0.000, '', 165.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2925, '0015', '2004-06-02', '0000-00-00', 'num', 103300.00, 85.00, 0.000, '', 245.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2926, '0015', '2004-06-02', '0000-00-00', 'num', 258300.00, 125.00, 0.000, '', 330.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2927, '0015', '2004-06-02', '0000-00-00', 'num', 516500.00, 170.00, 0.000, '', 495.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2928, '0015', '2004-06-02', '0000-00-00', 'num', 1549400.00, 250.00, 0.000, '', 660.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2929, '0015', '2004-06-02', '0000-00-00', 'num', 2582300.00, 335.00, 0.000, '', 825.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2930, '0015', '2004-06-02', '0000-00-00', 'num', 5164600.00, 415.00, 0.000, '', 990.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2931, '0015', '2004-06-02', '0000-00-00', 'ind', 0.00, 45.00, 0.000, '', 245.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2932, '0015', '2004-06-02', '0000-00-00', 'index', 0.00, 45.00, 0.000, '', 495.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2933, '0035', '2004-06-02', '0000-00-00', 'num', 5200.00, 40.00, 0.000, '', 55.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2934, '0035', '2004-06-02', '0000-00-00', 'num', 25900.00, 45.00, 0.000, '', 115.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2935, '0035', '2004-06-02', '0000-00-00', 'num', 51700.00, 60.00, 0.000, '', 235.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2936, '0035', '2004-06-02', '0000-00-00', 'num', 103300.00, 120.00, 0.000, '', 355.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2937, '0035', '2004-06-02', '0000-00-00', 'num', 258300.00, 180.00, 0.000, '', 475.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2938, '0035', '2004-06-02', '0000-00-00', 'num', 516500.00, 240.00, 0.000, '', 710.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2939, '0035', '2004-06-02', '0000-00-00', 'num', 1549400.00, 360.00, 0.000, '', 950.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2940, '0035', '2004-06-02', '0000-00-00', 'num', 2582300.00, 480.00, 0.000, '', 1185.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2941, '0035', '2004-06-02', '0000-00-00', 'num', 5164600.00, 595.00, 0.000, '', 1425.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2942, '0035', '2004-06-02', '0000-00-00', 'ind', 0.00, 60.00, 0.000, '', 355.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2943, '0035', '2004-06-02', '0000-00-00', 'index', 0.00, 60.00, 0.000, '', 710.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2944, '0020', '2004-06-02', '0000-00-00', 'num', 5200.00, 55.00, 0.000, '', 165.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2945, '0020', '2004-06-02', '0000-00-00', 'num', 25900.00, 85.00, 0.000, '', 330.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2946, '0020', '2004-06-02', '0000-00-00', 'num', 51700.00, 170.00, 0.000, '', 665.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2947, '0020', '2004-06-02', '0000-00-00', 'num', 103300.00, 335.00, 0.000, '', 995.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2948, '0020', '2004-06-02', '0000-00-00', 'num', 258300.00, 500.00, 0.000, '', 1330.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2949, '0020', '2004-06-02', '0000-00-00', 'num', 516500.00, 670.00, 0.000, '', 1995.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2950, '0020', '2004-06-02', '0000-00-00', 'num', 1549400.00, 1000.00, 0.000, '', 2665.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2951, '0020', '2004-06-02', '0000-00-00', 'num', 2582300.00, 1335.00, 0.000, '', 3330.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2952, '0020', '2004-06-02', '0000-00-00', 'num', 5164600.00, 1670.00, 0.000, '', 3995.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2953, '0020', '2004-06-02', '0000-00-00', 'ind', 0.00, 170.00, 0.000, '', 995.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2954, '0020', '2004-06-02', '0000-00-00', 'index', 0.00, 170.00, 0.000, '', 1995.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2955, '0036', '2004-06-02', '0000-00-00', 'num', 5200.00, 55.00, 0.000, '', 165.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2956, '0036', '2004-06-02', '0000-00-00', 'num', 25900.00, 85.00, 0.000, '', 330.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2957, '0036', '2004-06-02', '0000-00-00', 'num', 51700.00, 170.00, 0.000, '', 665.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2958, '0036', '2004-06-02', '0000-00-00', 'num', 103300.00, 335.00, 0.000, '', 995.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2959, '0036', '2004-06-02', '0000-00-00', 'num', 258300.00, 500.00, 0.000, '', 1330.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2960, '0036', '2004-06-02', '0000-00-00', 'num', 516500.00, 670.00, 0.000, '', 1995.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2961, '0036', '2004-06-02', '0000-00-00', 'num', 1549400.00, 1000.00, 0.000, '', 2665.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2962, '0036', '2004-06-02', '0000-00-00', 'num', 2582300.00, 1335.00, 0.000, '', 3330.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2963, '0036', '2004-06-02', '0000-00-00', 'num', 5164600.00, 1670.00, 0.000, '', 3995.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2964, '0036', '2004-06-02', '0000-00-00', 'ind', 0.00, 170.00, 0.000, '', 995.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2965, '0036', '2004-06-02', '0000-00-00', 'index', 0.00, 170.00, 0.000, '', 1995.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2966, '0016', '2004-06-02', '0000-00-00', 'num', 5200.00, 44.00, 0.000, '', 165.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2967, '0016', '2004-06-02', '0000-00-00', 'num', 25900.00, 85.00, 0.000, '', 330.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2968, '0016', '2004-06-02', '0000-00-00', 'num', 51700.00, 170.00, 0.000, '', 665.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2969, '0016', '2004-06-02', '0000-00-00', 'num', 103300.00, 335.00, 0.000, '', 995.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2970, '0016', '2004-06-02', '0000-00-00', 'num', 258300.00, 500.00, 0.000, '', 1330.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2971, '0016', '2004-06-02', '0000-00-00', 'num', 516500.00, 670.00, 0.000, '', 1995.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2972, '0016', '2004-06-02', '0000-00-00', 'num', 1549400.00, 1000.00, 0.000, '', 2665.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2973, '0016', '2004-06-02', '0000-00-00', 'num', 2582300.00, 1335.00, 0.000, '', 3330.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2974, '0016', '2004-06-02', '0000-00-00', 'num', 5164600.00, 1670.00, 0.000, '', 3995.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2975, '0016', '2004-06-02', '0000-00-00', 'ind', 0.00, 170.00, 0.000, '', 995.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2976, '0016', '2004-06-02', '0000-00-00', 'index', 0.00, 170.00, 0.000, '', 1995.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2977, '0036', '2004-06-02', '0000-00-00', 'num', 5200.00, 85.00, 0.000, '', 230.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2978, '0036', '2004-06-02', '0000-00-00', 'num', 25900.00, 120.00, 0.000, '', 460.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2979, '0036', '2004-06-02', '0000-00-00', 'num', 51700.00, 235.00, 0.000, '', 925.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2980, '0036', '2004-06-02', '0000-00-00', 'num', 103300.00, 465.00, 0.000, '', 1390.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2981, '0036', '2004-06-02', '0000-00-00', 'num', 258300.00, 700.00, 0.000, '', 1855.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2982, '0036', '2004-06-02', '0000-00-00', 'num', 516500.00, 930.00, 0.000, '', 2785.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2983, '0036', '2004-06-02', '0000-00-00', 'num', 1549400.00, 1395.00, 0.000, '', 3715.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2984, '0036', '2004-06-02', '0000-00-00', 'num', 2582300.00, 1860.00, 0.000, '', 4645.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2985, '0036', '2004-06-02', '0000-00-00', 'num', 5164600.00, 2325.00, 0.000, '', 5575.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2986, '0036', '2004-06-02', '0000-00-00', 'ind', 0.00, 235.00, 0.000, '', 1390.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2987, '0036', '2004-06-02', '0000-00-00', 'index', 0.00, 235.00, 0.000, '', 2785.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2988, '0019', '2004-06-02', '0000-00-00', 'num', 5200.00, 70.00, 0.000, '', 210.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2989, '0019', '2004-06-02', '0000-00-00', 'num', 25900.00, 110.00, 0.000, '', 425.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2990, '0019', '2004-06-02', '0000-00-00', 'num', 51700.00, 215.00, 0.000, '', 855.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2991, '0019', '2004-06-02', '0000-00-00', 'num', 103300.00, 430.00, 0.000, '', 1285.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2992, '0019', '2004-06-02', '0000-00-00', 'num', 258300.00, 645.00, 0.000, '', 1710.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2993, '0019', '2004-06-02', '0000-00-00', 'num', 516500.00, 860.00, 0.000, '', 2570.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2994, '0019', '2004-06-02', '0000-00-00', 'num', 1549400.00, 1290.00, 0.000, '', 3425.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2995, '0019', '2004-06-02', '0000-00-00', 'num', 2582300.00, 1715.00, 0.000, '', 4285.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2996, '0019', '2004-06-02', '0000-00-00', 'num', 5164600.00, 2145.00, 0.000, '', 5140.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2997, '0019', '2004-06-02', '0000-00-00', 'ind', 0.00, 215.00, 0.000, '', 1390.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2998, '0019', '2004-06-02', '0000-00-00', 'index', 0.00, 215.00, 0.000, '', 2785.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (2999, '0039', '2004-06-02', '0000-00-00', 'num', 5200.00, 105.00, 0.000, '', 290.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3000, '0039', '2004-06-02', '0000-00-00', 'num', 25900.00, 150.00, 0.000, '', 585.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3001, '0039', '2004-06-02', '0000-00-00', 'num', 51700.00, 295.00, 0.000, '', 1170.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3002, '0039', '2004-06-02', '0000-00-00', 'num', 103300.00, 590.00, 0.000, '', 1760.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3003, '0039', '2004-06-02', '0000-00-00', 'num', 258300.00, 885.00, 0.000, '', 2345.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3004, '0039', '2004-06-02', '0000-00-00', 'num', 516500.00, 1175.00, 0.000, '', 3520.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3005, '0039', '2004-06-02', '0000-00-00', 'num', 1549400.00, 1765.00, 0.000, '', 4695.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3006, '0039', '2004-06-02', '0000-00-00', 'num', 2582300.00, 2350.00, 0.000, '', 5870.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3007, '0039', '2004-06-02', '0000-00-00', 'num', 5164600.00, 2940.00, 0.000, '', 7045.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3008, '0039', '2004-06-02', '0000-00-00', 'ind', 0.00, 295.00, 0.000, '', 1760.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3009, '0039', '2004-06-02', '0000-00-00', 'index', 0.00, 295.00, 0.000, '', 3520.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3010, '049C', '2004-06-02', '0000-00-00', 'num', 600.00, 55.00, 0.000, '', 180.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3011, '049C', '2004-06-02', '0000-00-00', 'num', 1600.00, 105.00, 0.000, '', 270.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3012, '049C', '2004-06-02', '0000-00-00', 'num', 2600.00, 120.00, 0.000, '', 315.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3013, '049C', '2004-06-02', '0000-00-00', 'num', 5200.00, 140.00, 0.000, '', 360.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3014, '049C', '2004-06-02', '0000-00-00', 'num', 25900.00, 205.00, 0.000, '', 720.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3015, '049C', '2004-06-02', '0000-00-00', 'num', 51700.00, 310.00, 0.000, '', 1440.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3016, '049C', '2004-06-02', '0000-00-00', 'num', 103300.00, 725.00, 0.000, '', 2160.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3017, '049C', '2004-06-02', '0000-00-00', 'num', 258300.00, 1085.00, 0.000, '', 2880.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3018, '049C', '2004-06-02', '0000-00-00', 'num', 516500.00, 1445.00, 0.000, '', 4320.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3019, '049C', '2004-06-02', '0000-00-00', 'num', 1549400.00, 2165.00, 0.000, '', 5760.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3020, '049C', '2004-06-02', '0000-00-00', 'num', 2582300.00, 2885.00, 0.000, '', 7200.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3021, '049C', '2004-06-02', '0000-00-00', 'num', 5164600.00, 3605.00, 0.000, '', 8645.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3022, '049C', '2004-06-02', '0000-00-00', 'ind', 0.00, 310.00, 0.000, '', 2160.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3023, '049C', '2004-06-02', '0000-00-00', 'index', 0.00, 310.00, 0.000, '', 4320.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3024, '049B', '2004-06-02', '0000-00-00', 'num', 600.00, 45.00, 0.000, '', 140.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3025, '049B', '2004-06-02', '0000-00-00', 'num', 1600.00, 85.00, 0.000, '', 215.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3026, '049B', '2004-06-02', '0000-00-00', 'num', 2600.00, 100.00, 0.000, '', 250.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3027, '049B', '2004-06-02', '0000-00-00', 'num', 5200.00, 110.00, 0.000, '', 285.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3028, '049B', '2004-06-02', '0000-00-00', 'num', 25900.00, 165.00, 0.000, '', 575.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3029, '049B', '2004-06-02', '0000-00-00', 'num', 51700.00, 250.00, 0.000, '', 1150.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3030, '049B', '2004-06-02', '0000-00-00', 'num', 103300.00, 580.00, 0.000, '', 1725.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3031, '049B', '2004-06-02', '0000-00-00', 'num', 258300.00, 865.00, 0.000, '', 2300.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3032, '049B', '2004-06-02', '0000-00-00', 'num', 516500.00, 1155.00, 0.000, '', 3455.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3033, '049B', '2004-06-02', '0000-00-00', 'num', 1549400.00, 1730.00, 0.000, '', 4605.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3034, '049B', '2004-06-02', '0000-00-00', 'num', 2582300.00, 2305.00, 0.000, '', 5755.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3035, '049B', '2004-06-02', '0000-00-00', 'num', 5164600.00, 2880.00, 0.000, '', 6910.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3036, '049B', '2004-06-02', '0000-00-00', 'ind', 0.00, 250.00, 0.000, '', 1725.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3037, '049B', '2004-06-02', '0000-00-00', 'index', 0.00, 250.00, 0.000, '', 3455.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3038, '0050', '2004-06-02', '0000-00-00', 'num', 600.00, 15.00, 0.000, '', 70.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3039, '0050', '2004-06-02', '0000-00-00', 'num', 1600.00, 25.00, 0.000, '', 110.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3040, '0050', '2004-06-02', '0000-00-00', 'num', 2600.00, 30.00, 0.000, '', 125.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3041, '0050', '2004-06-02', '0000-00-00', 'num', 5200.00, 35.00, 0.000, '', 145.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3042, '0050', '2004-06-02', '0000-00-00', 'num', 25900.00, 50.00, 0.000, '', 295.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3043, '0050', '2004-06-02', '0000-00-00', 'num', 51700.00, 75.00, 0.000, '', 590.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3044, '0050', '2004-06-02', '0000-00-00', 'num', 103300.00, 300.00, 0.000, '', 890.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3045, '0050', '2004-06-02', '0000-00-00', 'num', 258300.00, 450.00, 0.000, '', 1185.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3046, '0050', '2004-06-02', '0000-00-00', 'num', 516500.00, 595.00, 0.000, '', 1780.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3047, '0050', '2004-06-02', '0000-00-00', 'num', 1549400.00, 895.00, 0.000, '', 2375.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3048, '0050', '2004-06-02', '0000-00-00', 'num', 2582300.00, 1190.00, 0.000, '', 2965.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3049, '0050', '2004-06-02', '0000-00-00', 'num', 5164600.00, 1485.00, 0.000, '', 3560.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3050, '0050', '2004-06-02', '0000-00-00', 'ind', 0.00, 75.00, 0.000, '', 890.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3051, '0050', '2004-06-02', '0000-00-00', 'index', 0.00, 75.00, 0.000, '', 1780.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3052, '0054', '2004-06-02', '0000-00-00', 'num', 600.00, 25.00, 0.000, '', 70.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3053, '0054', '2004-06-02', '0000-00-00', 'num', 1600.00, 45.00, 0.000, '', 105.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3054, '0054', '2004-06-02', '0000-00-00', 'num', 2600.00, 55.00, 0.000, '', 125.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3055, '0054', '2004-06-02', '0000-00-00', 'num', 5200.00, 60.00, 0.000, '', 140.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3056, '0054', '2004-06-02', '0000-00-00', 'num', 25900.00, 90.00, 0.000, '', 285.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3057, '0054', '2004-06-02', '0000-00-00', 'num', 51700.00, 135.00, 0.000, '', 575.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3058, '0054', '2004-06-02', '0000-00-00', 'num', 103300.00, 290.00, 0.000, '', 865.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3059, '0054', '2004-06-02', '0000-00-00', 'num', 258300.00, 435.00, 0.000, '', 1155.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3060, '0054', '2004-06-02', '0000-00-00', 'num', 516500.00, 580.00, 0.000, '', 1735.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3061, '0054', '2004-06-02', '0000-00-00', 'num', 1549400.00, 870.00, 0.000, '', 2310.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3062, '0054', '2004-06-02', '0000-00-00', 'num', 2582300.00, 1160.00, 0.000, '', 2890.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3063, '0054', '2004-06-02', '0000-00-00', 'num', 5164600.00, 1450.00, 0.000, '', 3470.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3064, '0054', '2004-06-02', '0000-00-00', 'ind', 0.00, 135.00, 0.000, '', 865.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3065, '0054', '2004-06-02', '0000-00-00', 'index', 0.00, 135.00, 0.000, '', 1735.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3066, 'PREC', '2004-06-02', '0000-00-00', 'num', 600.00, 13.00, 0.000, '', 13.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3067, 'PREC', '2004-06-02', '0000-00-00', 'num', 1600.00, 23.00, 0.000, '', 23.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3068, 'PREC', '2004-06-02', '0000-00-00', 'num', 2600.00, 28.00, 0.000, '', 28.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3069, 'PREC', '2004-06-02', '0000-00-00', 'num', 5200.00, 30.00, 0.000, '', 30.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3070, 'PREC', '2004-06-02', '0000-00-00', 'num', 25900.00, 45.00, 0.000, '', 45.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3071, 'PREC', '2004-06-02', '0000-00-00', 'num', 51700.00, 68.00, 0.000, '', 68.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3072, 'PREC', '2004-06-02', '0000-00-00', 'num', 103300.00, 145.00, 0.000, '', 145.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3073, 'PREC', '2004-06-02', '0000-00-00', 'num', 258300.00, 218.00, 0.000, '', 218.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3074, 'PREC', '2004-06-02', '0000-00-00', 'num', 516500.00, 290.00, 0.000, '', 290.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3075, 'PREC', '2004-06-02', '0000-00-00', 'num', 1549400.00, 435.00, 0.000, '', 435.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3076, 'PREC', '2004-06-02', '0000-00-00', 'num', 2582300.00, 580.00, 0.000, '', 580.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3077, 'PREC', '2004-06-02', '0000-00-00', 'num', 5164600.00, 720.00, 0.000, '', 720.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3078, 'PREC', '2004-06-02', '0000-00-00', 'ind', 0.00, 0.00, 0.000, '', 0.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3079, 'PREC', '2004-06-02', '0000-00-00', 'index', 0.00, 0.00, 0.000, '', 0.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3080, '0013', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.106, 'C', 0.00, 0.252, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3081, '0023', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.132, 'C', 810.00, 0.315, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3082, '0033', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.137, 'C', 0.00, 0.326, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3083, '1112', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.407, 'C', 0.00, 0.975, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3084, '2122', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.506, 'C', 0.00, 1.215, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3085, '4142', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.506, 'C', 0.00, 1.215, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3086, '4141', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.658, 'C', 0.00, 1.577, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3087, '0014', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.323, 'C', 0.00, 0.774, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3088, '0024', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.688, 'C', 0.00, 1.650, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3089, '0034', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.461, 'C', 0.00, 1.104, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3090, '0041', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.658, 'C', 0.00, 1.577, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3091, '0018', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.788, 'C', 0.00, 1.890, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3092, '0038', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 1.094, 'C', 0.00, 2.625, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3093, '0017', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.188, 'C', 0.00, 0.449, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3094, '0037', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.251, 'C', 0.00, 0.599, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3095, '0022', '2004-06-02', '0000-00-00', 'num', 5200.00, 40.00, 0.000, '', 130.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3096, '0022', '2004-06-02', '0000-00-00', 'num', 25900.00, 70.00, 0.000, '', 260.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3097, '0022', '2004-06-02', '0000-00-00', 'num', 51700.00, 135.00, 0.000, '', 520.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3098, '0022', '2004-06-02', '0000-00-00', 'num', 103300.00, 265.00, 0.000, '', 785.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3099, '0022', '2004-06-02', '0000-00-00', 'num', 258300.00, 395.00, 0.000, '', 1045.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3100, '0022', '2004-06-02', '0000-00-00', 'num', 516500.00, 525.00, 0.000, '', 1570.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3101, '0022', '2004-06-02', '0000-00-00', 'num', 1549400.00, 790.00, 0.000, '', 2095.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3102, '0022', '2004-06-02', '0000-00-00', 'num', 2582300.00, 1050.00, 0.000, '', 2620.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3103, '0022', '2004-06-02', '0000-00-00', 'num', 5164600.00, 1315.00, 0.000, '', 3145.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3104, '0022', '2004-06-02', '0000-00-00', 'ind', 0.00, 135.00, 0.000, '', 785.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3105, '0022', '2004-06-02', '0000-00-00', 'index', 0.00, 135.00, 0.000, '', 1570.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3106, '0022', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.255, 'C', 0.00, 0.609, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3107, '0032', '2004-06-02', '0000-00-00', 'num', 5200.00, 65.00, 0.000, '', 130.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3108, '0032', '2004-06-02', '0000-00-00', 'num', 25900.00, 70.00, 0.000, '', 260.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3109, '0032', '2004-06-02', '0000-00-00', 'num', 51700.00, 135.00, 0.000, '', 520.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3110, '0032', '2004-06-02', '0000-00-00', 'num', 103300.00, 265.00, 0.000, '', 785.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3111, '0032', '2004-06-02', '0000-00-00', 'num', 258300.00, 395.00, 0.000, '', 1045.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3112, '0032', '2004-06-02', '0000-00-00', 'num', 516500.00, 525.00, 0.000, '', 1570.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3113, '0032', '2004-06-02', '0000-00-00', 'num', 1549400.00, 790.00, 0.000, '', 2095.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3114, '0032', '2004-06-02', '0000-00-00', 'num', 2582300.00, 1050.00, 0.000, '', 2620.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3115, '0032', '2004-06-02', '0000-00-00', 'num', 5164600.00, 1315.00, 0.000, '', 3145.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3116, '0032', '2004-06-02', '0000-00-00', 'ind', 0.00, 135.00, 0.000, '', 785.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3117, '0032', '2004-06-02', '0000-00-00', 'index', 0.00, 135.00, 0.000, '', 1570.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3118, '0032', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.255, 'C', 0.00, 0.609, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3119, '0020', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.323, 'C', 0.00, 0.774, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3120, '0016', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.323, 'C', 0.00, 0.774, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3121, '0036', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.450, 'C', 0.00, 1.079, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3122, 'PREC', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.000, 'C', 0.00, 0.000, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3123, '0054', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.281, 'C', 0.00, 0.672, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3124, 'S004', '2004-06-02', '0000-00-00', 'num', 600.00, 45.00, 0.000, '', 140.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3125, 'S004', '2004-06-02', '0000-00-00', 'num', 1600.00, 85.00, 0.000, '', 215.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3126, 'S004', '2004-06-02', '0000-00-00', 'num', 2600.00, 100.00, 0.000, '', 250.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3127, 'S004', '2004-06-02', '0000-00-00', 'num', 5200.00, 110.00, 0.000, '', 285.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3128, 'S004', '2004-06-02', '0000-00-00', 'num', 25900.00, 165.00, 0.000, '', 575.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3129, 'S004', '2004-06-02', '0000-00-00', 'num', 51700.00, 250.00, 0.000, '', 1150.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3130, 'S004', '2004-06-02', '0000-00-00', 'num', 103300.00, 580.00, 0.000, '', 1725.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3131, 'S004', '2004-06-02', '0000-00-00', 'num', 258300.00, 865.00, 0.000, '', 2300.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3132, 'S004', '2004-06-02', '0000-00-00', 'num', 516500.00, 1155.00, 0.000, '', 3455.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3133, 'S004', '2004-06-02', '0000-00-00', 'num', 1549400.00, 1730.00, 0.000, '', 4605.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3134, 'S004', '2004-06-02', '0000-00-00', 'num', 2582300.00, 2305.00, 0.000, '', 5755.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3135, 'S004', '2004-06-02', '0000-00-00', 'num', 5164600.00, 2880.00, 0.000, '', 6910.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3136, 'S004', '2004-06-02', '0000-00-00', 'ind', 0.00, 250.00, 0.000, '', 1725.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3137, 'S004', '2004-06-02', '0000-00-00', 'index', 0.00, 250.00, 0.000, '', 3455.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3138, 'S004', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.000, 'C', 0.00, 0.001, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3139, '0050', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.000, 'C', 0.00, 0.000, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3140, '049C', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.000, 'C', 0.00, 0.001, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3141, '049B', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.000, 'C', 0.00, 0.001, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3142, '049A', '2004-06-02', '0000-00-00', 'num', 600.00, 45.00, 0.000, '', 140.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3143, '049A', '2004-06-02', '0000-00-00', 'num', 1600.00, 85.00, 0.000, '', 215.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3144, '049A', '2004-06-02', '0000-00-00', 'num', 2600.00, 100.00, 0.000, '', 250.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3145, '049A', '2004-06-02', '0000-00-00', 'num', 5200.00, 110.00, 0.000, '', 285.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3146, '049A', '2004-06-02', '0000-00-00', 'num', 25900.00, 165.00, 0.000, '', 575.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3147, '049A', '2004-06-02', '0000-00-00', 'num', 51700.00, 250.00, 0.000, '', 1150.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3148, '049A', '2004-06-02', '0000-00-00', 'num', 103300.00, 580.00, 0.000, '', 1725.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3149, '049A', '2004-06-02', '0000-00-00', 'num', 258300.00, 865.00, 0.000, '', 2300.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3150, '049A', '2004-06-02', '0000-00-00', 'num', 516500.00, 1155.00, 0.000, '', 3455.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3151, '049A', '2004-06-02', '0000-00-00', 'num', 1549400.00, 1730.00, 0.000, '', 4605.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3152, '049A', '2004-06-02', '0000-00-00', 'num', 2582300.00, 2305.00, 0.000, '', 5755.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3153, '049A', '2004-06-02', '0000-00-00', 'num', 5164600.00, 2880.00, 0.000, '', 6910.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3154, '049A', '2004-06-02', '0000-00-00', 'ind', 0.00, 250.00, 0.000, '', 1725.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3155, '049A', '2004-06-02', '0000-00-00', 'index', 0.00, 250.00, 0.000, '', 3455.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3156, '049A', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.000, 'C', 0.00, 0.001, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3157, 'S003', '2004-06-02', '0000-00-00', 'num', 5164600.00, 40.00, 0.000, '', 770.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3158, 'S003', '2004-06-02', '0000-00-00', 'ind', 0.00, 40.00, 0.000, '', 770.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3159, 'S003', '2004-06-02', '0000-00-00', 'index', 0.00, 40.00, 0.000, '', 770.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3160, 'S02F', '2004-06-02', '0000-00-00', 'num', 5200.00, 0.00, 3.000, 'I', 0.00, 6.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (3161, 'S02F', '2004-06-02', '0000-00-00', 'num', 25900.00, 0.00, 1.750, 'I', 0.00, 5.250, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (3162, 'S02F', '2004-06-02', '0000-00-00', 'num', 51700.00, 0.00, 1.500, 'I', 0.00, 4.500, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (3163, 'S02F', '2004-06-02', '0000-00-00', 'num', 258300.00, 0.00, 1.250, 'I', 0.00, 3.750, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (3164, 'S02F', '2004-06-02', '0000-00-00', 'num', 516500.00, 0.00, 1.000, 'I', 0.00, 3.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (3165, 'S02F', '2004-06-02', '0000-00-00', 'num', 1549400.00, 0.00, 0.750, 'I', 0.00, 3.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (3166, 'S02F', '2004-06-02', '0000-00-00', 'num', 2582300.00, 0.00, 0.500, 'I', 0.00, 2.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (3167, 'S02F', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.250, 'I', 0.00, 1.000, 'I');
INSERT INTO `INT_tariffe_onorari` VALUES (3168, 'S02E', '2004-06-02', '0000-00-00', 'num', 600.00, 10.00, 0.000, '', 50.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3169, 'S02E', '2004-06-02', '0000-00-00', 'num', 1600.00, 25.00, 0.000, '', 90.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3170, 'S02E', '2004-06-02', '0000-00-00', 'num', 5200.00, 50.00, 0.000, '', 135.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3171, 'S02E', '2004-06-02', '0000-00-00', 'num', 25900.00, 70.00, 0.000, '', 300.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3172, 'S02E', '2004-06-02', '0000-00-00', 'num', 51700.00, 155.00, 0.000, '', 455.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3173, 'S02E', '2004-06-02', '0000-00-00', 'num', 103300.00, 195.00, 0.000, '', 565.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3174, 'S02E', '2004-06-02', '0000-00-00', 'num', 258300.00, 285.00, 0.000, '', 680.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3175, 'S02E', '2004-06-02', '0000-00-00', 'num', 516500.00, 345.00, 0.000, '', 910.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3176, 'S02E', '2004-06-02', '0000-00-00', 'num', 1549400.00, 460.00, 0.000, '', 1020.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3177, 'S02E', '2004-06-02', '0000-00-00', 'num', 2582300.00, 515.00, 0.000, '', 1135.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3178, 'S02E', '2004-06-02', '0000-00-00', 'num', 5164600.00, 570.00, 0.000, '', 1250.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3179, 'S02E', '2004-06-02', '0000-00-00', 'ind', 0.00, 155.00, 0.000, '', 565.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3180, 'S02E', '2004-06-02', '0000-00-00', 'index', 0.00, 155.00, 0.000, '', 1250.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3181, 'S02E', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.000, 'C', 0.00, 0.000, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3182, 'S02D', '2004-06-02', '0000-00-00', 'num', 5164600.00, 35.00, 0.000, '', 60.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3183, 'S02D', '2004-06-02', '0000-00-00', 'ind', 0.00, 35.00, 0.000, '', 60.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3184, 'S02D', '2004-06-02', '0000-00-00', 'index', 0.00, 35.00, 0.000, '', 60.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3185, 'S02D', '2004-06-02', '0000-00-00', 'oltre', 0.00, 35.00, 0.000, '', 60.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3186, 'S02B', '2004-06-02', '0000-00-00', 'num', 5164600.00, 10.00, 0.000, '', 15.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3187, 'S02B', '2004-06-02', '0000-00-00', 'ind', 0.00, 10.00, 0.000, '', 15.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3188, 'S02B', '2004-06-02', '0000-00-00', 'index', 0.00, 10.00, 0.000, '', 15.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3189, 'S02B', '2004-06-02', '0000-00-00', 'oltre', 0.00, 10.00, 0.000, '', 15.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3190, 'S02C', '2004-06-02', '0000-00-00', 'num', 600.00, 25.00, 0.000, '', 130.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3191, 'S02C', '2004-06-02', '0000-00-00', 'num', 1600.00, 70.00, 0.000, '', 220.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3192, 'S02C', '2004-06-02', '0000-00-00', 'num', 5200.00, 140.00, 0.000, '', 330.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3193, 'S02C', '2004-06-02', '0000-00-00', 'num', 25900.00, 180.00, 0.000, '', 690.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3194, 'S02C', '2004-06-02', '0000-00-00', 'num', 51700.00, 530.00, 0.000, '', 1125.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3195, 'S02C', '2004-06-02', '0000-00-00', 'num', 103300.00, 665.00, 0.000, '', 1405.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3196, 'S02C', '2004-06-02', '0000-00-00', 'num', 258300.00, 705.00, 0.000, '', 1685.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3197, 'S02C', '2004-06-02', '0000-00-00', 'num', 516500.00, 845.00, 0.000, '', 2250.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3198, 'S02C', '2004-06-02', '0000-00-00', 'num', 1549400.00, 1130.00, 0.000, '', 2530.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3199, 'S02C', '2004-06-02', '0000-00-00', 'num', 2582300.00, 1270.00, 0.000, '', 2810.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3200, 'S02C', '2004-06-02', '0000-00-00', 'num', 5164600.00, 1410.00, 0.000, '', 3090.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3201, 'S02C', '2004-06-02', '0000-00-00', 'ind', 0.00, 530.00, 0.000, '', 1405.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3202, 'S02C', '2004-06-02', '0000-00-00', 'index', 0.00, 530.00, 0.000, '', 3090.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3203, 'S02C', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.000, 'C', 0.00, 0.000, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3204, 'S01A', '2004-06-02', '0000-00-00', 'num', 5164600.00, 15.00, 0.000, '', 150.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3205, 'S01A', '2004-06-02', '0000-00-00', 'ind', 0.00, 15.00, 0.000, '', 150.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3206, 'S01A', '2004-06-02', '0000-00-00', 'index', 0.00, 15.00, 0.000, '', 150.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3207, 'S01A', '2004-06-02', '0000-00-00', 'oltre', 0.00, 15.00, 0.000, '', 150.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3208, 'S1BA', '2004-06-02', '0000-00-00', 'num', 600.00, 20.00, 0.000, '', 75.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3209, 'S1BA', '2004-06-02', '0000-00-00', 'num', 1600.00, 50.00, 0.000, '', 120.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3210, 'S1BA', '2004-06-02', '0000-00-00', 'num', 5200.00, 65.00, 0.000, '', 165.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3211, 'S1BA', '2004-06-02', '0000-00-00', 'num', 25900.00, 90.00, 0.000, '', 295.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3212, 'S1BA', '2004-06-02', '0000-00-00', 'num', 51700.00, 150.00, 0.000, '', 420.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3213, 'S1BA', '2004-06-02', '0000-00-00', 'num', 103300.00, 190.00, 0.000, '', 525.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3214, 'S1BA', '2004-06-02', '0000-00-00', 'num', 258300.00, 265.00, 0.000, '', 635.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3215, 'S1BA', '2004-06-02', '0000-00-00', 'num', 516500.00, 320.00, 0.000, '', 845.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3216, 'S1BA', '2004-06-02', '0000-00-00', 'num', 1549400.00, 425.00, 0.000, '', 950.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3217, 'S1BA', '2004-06-02', '0000-00-00', 'num', 2582300.00, 480.00, 0.000, '', 1055.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3218, 'S1BA', '2004-06-02', '0000-00-00', 'num', 5164600.00, 530.00, 0.000, '', 1160.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3219, 'S1BA', '2004-06-02', '0000-00-00', 'ind', 0.00, 150.00, 0.000, '', 525.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3220, 'S1BA', '2004-06-02', '0000-00-00', 'index', 0.00, 150.00, 0.000, '', 1160.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3221, 'S1BA', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.103, 'C', 0.00, 0.225, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3222, 'S1BB', '2004-06-02', '0000-00-00', 'num', 600.00, 20.00, 0.000, '', 135.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3223, 'S1BB', '2004-06-02', '0000-00-00', 'num', 1600.00, 50.00, 0.000, '', 240.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3224, 'S1BB', '2004-06-02', '0000-00-00', 'num', 5200.00, 125.00, 0.000, '', 360.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3225, 'S1BB', '2004-06-02', '0000-00-00', 'num', 25900.00, 185.00, 0.000, '', 755.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3226, 'S1BB', '2004-06-02', '0000-00-00', 'num', 51700.00, 385.00, 0.000, '', 1220.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3227, 'S1BB', '2004-06-02', '0000-00-00', 'num', 103300.00, 480.00, 0.000, '', 1525.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3228, 'S1BB', '2004-06-02', '0000-00-00', 'num', 258300.00, 765.00, 0.000, '', 1830.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3229, 'S1BB', '2004-06-02', '0000-00-00', 'num', 516500.00, 920.00, 0.000, '', 2440.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3230, 'S1BB', '2004-06-02', '0000-00-00', 'num', 1549400.00, 1225.00, 0.000, '', 2745.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3231, 'S1BB', '2004-06-02', '0000-00-00', 'num', 2582300.00, 1375.00, 0.000, '', 3050.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3232, 'S1BB', '2004-06-02', '0000-00-00', 'num', 5164600.00, 1530.00, 0.000, '', 3355.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3233, 'S1BB', '2004-06-02', '0000-00-00', 'ind', 0.00, 385.00, 0.000, '', 1525.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3234, 'S1BB', '2004-06-02', '0000-00-00', 'index', 0.00, 385.00, 0.000, '', 3355.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3235, 'S1BB', '2004-06-02', '0000-00-00', 'oltre', 0.00, 0.00, 0.296, 'C', 0.00, 0.650, 'C');
INSERT INTO `INT_tariffe_onorari` VALUES (3236, '3939', '2004-06-02', '0000-00-00', 'num', 516456.90, 10.00, 0.000, '', 30.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3237, '3939', '2004-06-02', '0000-00-00', 'ind', 0.00, 10.00, 0.000, '', 30.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3238, '3939', '2004-06-02', '0000-00-00', 'index', 0.00, 10.00, 0.000, '', 30.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3239, '0004', '2004-06-02', '0000-00-00', 'num', 600.00, 0.00, 0.000, '', 0.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3240, '0004', '2004-06-02', '0000-00-00', 'num', 1600.00, 20.00, 0.000, '', 35.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3241, '0004', '2004-06-02', '0000-00-00', 'num', 2600.00, 25.00, 0.000, '', 40.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3242, '0005', '2004-06-02', '0000-00-00', 'num', 600.00, 0.00, 0.000, '', 0.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3243, '0005', '2004-06-02', '0000-00-00', 'num', 1600.00, 45.00, 0.000, '', 115.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3244, '0005', '2004-06-02', '0000-00-00', 'num', 2600.00, 60.00, 0.000, '', 130.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3250, '0203', '2004-06-02', '0000-00-00', 'num', 2600.00, 75.00, 0.000, '', 165.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3249, '0203', '2004-06-02', '0000-00-00', 'num', 1600.00, 55.00, 0.000, '', 145.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3248, '0203', '2004-06-02', '0000-00-00', 'num', 600.00, 0.00, 0.000, '', 0.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3251, '0008', '2004-06-02', '0000-00-00', 'num', 600.00, 0.00, 0.000, '', 0.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3252, '0008', '2004-06-02', '0000-00-00', 'num', 1600.00, 30.00, 0.000, '', 60.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3253, '0008', '2004-06-02', '0000-00-00', 'num', 2600.00, 50.00, 0.000, '', 80.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3254, '0003', '2004-06-02', '0000-00-00', 'num', 600.00, 0.00, 0.000, '', 0.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3255, '0003', '2004-06-02', '0000-00-00', 'num', 1600.00, 30.00, 0.000, '', 70.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3256, '0003', '2004-06-02', '0000-00-00', 'num', 2600.00, 40.00, 0.000, '', 80.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3257, '0006', '2004-06-02', '0000-00-00', 'num', 600.00, 0.00, 0.000, '', 0.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3258, '0006', '2004-06-02', '0000-00-00', 'num', 1600.00, 20.00, 0.000, '', 25.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3259, '0006', '2004-06-02', '0000-00-00', 'num', 2600.00, 25.00, 0.000, '', 30.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3260, '0010', '2004-06-02', '0000-00-00', 'num', 600.00, 0.00, 0.000, '', 0.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3261, '0010', '2004-06-02', '0000-00-00', 'num', 1600.00, 40.00, 0.000, '', 115.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3262, '0010', '2004-06-02', '0000-00-00', 'num', 2600.00, 60.00, 0.000, '', 130.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3263, '0007', '2004-06-02', '0000-00-00', 'num', 600.00, 0.00, 0.000, '', 0.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3264, '0007', '2004-06-02', '0000-00-00', 'num', 1600.00, 35.00, 0.000, '', 115.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3265, '0007', '2004-06-02', '0000-00-00', 'num', 2600.00, 60.00, 0.000, '', 130.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3266, '0009', '2004-06-02', '0000-00-00', 'num', 600.00, 0.00, 0.000, '', 0.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3267, '0009', '2004-06-02', '0000-00-00', 'num', 1600.00, 45.00, 0.000, '', 145.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3268, '0009', '2004-06-02', '0000-00-00', 'num', 2600.00, 75.00, 0.000, '', 170.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3269, '0001', '2004-06-02', '0000-00-00', 'num', 600.00, 55.00, 0.000, '', 190.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3270, '008N', '1950-01-01', '1994-09-30', 'num', 1549.37, 97.09, 0.000, '', 226.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3271, '008N', '1950-01-01', '1994-09-30', 'num', 2582.28, 112.07, 0.000, '', 260.29, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3272, '008N', '1994-10-01', '1995-03-31', 'num', 1549.37, 108.46, 0.000, '', 226.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3273, '008N', '1994-10-01', '1995-03-31', 'num', 2582.28, 118.79, 0.000, '', 260.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3274, '008N', '1995-04-01', '2004-06-01', 'num', 1549.37, 108.46, 0.000, '', 226.21, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3275, '008N', '1995-04-01', '2004-06-01', 'num', 2582.28, 118.79, 0.000, '', 260.81, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3276, '008N', '2004-06-02', '0000-00-00', 'num', 600.00, 0.00, 0.000, '', 0.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3277, '008N', '2004-06-02', '0000-00-00', 'num', 1600.00, 150.00, 0.000, '', 280.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3278, '008N', '2004-06-02', '0000-00-00', 'num', 2600.00, 155.00, 0.000, '', 325.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3279, 'S02A', '2004-06-02', '0000-00-00', 'num', 516456.90, 13.00, 0.000, '', 13.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3280, 'S02A', '2004-06-02', '0000-00-00', 'ind', 0.00, 13.00, 0.000, '', 13.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3281, 'S02A', '2004-06-02', '0000-00-00', 'index', 0.00, 13.00, 0.000, '', 13.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3282, 'S02D1', '2004-06-02', '0000-00-00', 'num', 5164600.00, 65.00, 0.000, '', 125.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3283, 'S02D1', '2004-06-02', '0000-00-00', 'ind', 0.00, 65.00, 0.000, '', 125.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3284, 'S02D1', '2004-06-02', '0000-00-00', 'index', 0.00, 65.00, 0.000, '', 125.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3285, 'S02D1', '2004-06-02', '0000-00-00', 'oltre', 0.00, 65.00, 0.000, '', 125.00, 0.000, '');

-- --------------------------------------------------------     tariffario penale 

INSERT INTO `INT_tariffe_onorari` VALUES (3286, 'P11A', '2004-06-02', '0000-00-00', 'ind', 0.00, 24.00, 0.000, '', 40.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3287, 'P11B', '2004-06-02', '0000-00-00', 'ind', 0.00, 12.00, 0.000, '', 20.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3288, 'P11C', '2004-06-02', '0000-00-00', 'ind', 0.00, 19.00, 0.000, '', 32.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3289, 'P11D', '2004-06-02', '0000-00-00', 'ind', 0.00, 8.00, 0.000, '', 12.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3290, 'P11E', '2004-06-02', '0000-00-00', 'ind', 0.00, 10.00, 0.000, '', 16.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3291, 'P11F', '2004-06-02', '0000-00-00', 'ind', 0.00, 6.00, 0.000, '', 10.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3292, 'P11G', '2004-06-02', '0000-00-00', 'ind', 0.00, 8.00, 0.000, '', 16.00, 0.000, '');

INSERT INTO `INT_tariffe_onorari` VALUES (3293, 'P12A', '2004-06-02', '0000-00-00', 'ind', 0.00, 81.00, 0.000, '', 161.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3294, 'P12B', '2004-06-02', '0000-00-00', 'ind', 0.00, 40.00, 0.000, '', 81.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3295, 'P12C', '2004-06-02', '0000-00-00', 'ind', 0.00, 65.00, 0.000, '', 129.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3296, 'P12D', '2004-06-02', '0000-00-00', 'ind', 0.00, 24.00, 0.000, '', 48.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3297, 'P12E', '2004-06-02', '0000-00-00', 'ind', 0.00, 32.00, 0.000, '', 65.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3298, 'P12F', '2004-06-02', '0000-00-00', 'ind', 0.00, 19.00, 0.000, '', 39.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3299, 'P12G', '2004-06-02', '0000-00-00', 'ind', 0.00, 24.00, 0.000, '', 65.00, 0.000, '');

INSERT INTO `INT_tariffe_onorari` VALUES (3300, 'P13A', '2004-06-02', '0000-00-00', 'ind', 0.00, 161.00, 0.000, '', 323.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3301, 'P13B', '2004-06-02', '0000-00-00', 'ind', 0.00, 81.00, 0.000, '', 161.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3302, 'P13C', '2004-06-02', '0000-00-00', 'ind', 0.00, 129.00, 0.000, '', 258.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3303, 'P13D', '2004-06-02', '0000-00-00', 'ind', 0.00, 48.00, 0.000, '', 97.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3304, 'P13E', '2004-06-02', '0000-00-00', 'ind', 0.00, 65.00, 0.000, '', 129.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3305, 'P13F', '2004-06-02', '0000-00-00', 'ind', 0.00, 39.00, 0.000, '', 77.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3306, 'P13G', '2004-06-02', '0000-00-00', 'ind', 0.00, 48.00, 0.000, '', 129.00, 0.000, '');

INSERT INTO `INT_tariffe_onorari` VALUES (3307, 'P20A', '2004-06-02', '0000-00-00', 'ind', 0.00, 75.00, 0.000, '', 150.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3308, 'P20B', '2004-06-02', '0000-00-00', 'ind', 0.00, 40.00, 0.000, '', 75.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3309, 'P20C', '2004-06-02', '0000-00-00', 'ind', 0.00, 60.00, 0.000, '', 120.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3310, 'P20D', '2004-06-02', '0000-00-00', 'ind', 0.00, 25.00, 0.000, '', 45.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3311, 'P20E', '2004-06-02', '0000-00-00', 'ind', 0.00, 30.00, 0.000, '', 60.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3312, 'P20F', '2004-06-02', '0000-00-00', 'ind', 0.00, 20.00, 0.000, '', 35.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3313, 'P20G', '2004-06-02', '0000-00-00', 'ind', 0.00, 25.00, 0.000, '', 60.00, 0.000, '');


INSERT INTO `INT_tariffe_onorari` VALUES (3314, 'P30A', '2004-06-02', '0000-00-00', 'ind', 0.00, 190.00, 0.000, '', 935.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3315, 'P30B', '2004-06-02', '0000-00-00', 'ind', 0.00, 95.00, 0.000, '', 465.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3316, 'P30C', '2004-06-02', '0000-00-00', 'ind', 0.00, 150.00, 0.000, '', 750.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3317, 'P30D', '2004-06-02', '0000-00-00', 'ind', 0.00, 60.00, 0.000, '', 280.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3318, 'P30E', '2004-06-02', '0000-00-00', 'ind', 0.00, 75.00, 0.000, '', 375.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3319, 'P30F', '2004-06-02', '0000-00-00', 'ind', 0.00, 50.00, 0.000, '', 250.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3320, 'P30G', '2004-06-02', '0000-00-00', 'ind', 0.00, 60.00, 0.000, '', 375.00, 0.000, '');

INSERT INTO `INT_tariffe_onorari` VALUES (3321, 'P40A', '2004-06-02', '0000-00-00', 'ind', 0.00, 40.00, 0.000, '', 65.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3322, 'P40B', '2004-06-02', '0000-00-00', 'ind', 0.00, 20.00, 0.000, '', 32.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3323, 'P40C', '2004-06-02', '0000-00-00', 'ind', 0.00, 35.00, 0.000, '', 52.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3324, 'P40D', '2004-06-02', '0000-00-00', 'ind', 0.00, 13.00, 0.000, '', 19.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3325, 'P40E', '2004-06-02', '0000-00-00', 'ind', 0.00, 16.00, 0.000, '', 26.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3326, 'P40F', '2004-06-02', '0000-00-00', 'ind', 0.00, 10.00, 0.000, '', 16.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3327, 'P40G', '2004-06-02', '0000-00-00', 'ind', 0.00, 13.00, 0.000, '', 26.00, 0.000, '');

INSERT INTO `INT_tariffe_onorari` VALUES (3328, 'P50A', '2004-06-02', '0000-00-00', 'ind', 0.00, 90.00, 0.000, '', 150.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3329, 'P50B', '2004-06-02', '0000-00-00', 'ind', 0.00, 45.00, 0.000, '', 75.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3330, 'P50C', '2004-06-02', '0000-00-00', 'ind', 0.00, 70.00, 0.000, '', 120.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3331, 'P50D', '2004-06-02', '0000-00-00', 'ind', 0.00, 30.00, 0.000, '', 45.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3332, 'P50E', '2004-06-02', '0000-00-00', 'ind', 0.00, 35.00, 0.000, '', 60.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3333, 'P50F', '2004-06-02', '0000-00-00', 'ind', 0.00, 20.00, 0.000, '', 35.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3334, 'P50G', '2004-06-02', '0000-00-00', 'ind', 0.00, 30.00, 0.000, '', 60.00, 0.000, '');

INSERT INTO `INT_tariffe_onorari` VALUES (3335, 'P61A', '2004-06-02', '0000-00-00', 'ind', 0.00, 125.00, 0.000, '', 225.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3336, 'P61B', '2004-06-02', '0000-00-00', 'ind', 0.00, 65.00, 0.000, '', 110.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3337, 'P61C', '2004-06-02', '0000-00-00', 'ind', 0.00, 100.00, 0.000, '', 180.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3338, 'P61D', '2004-06-02', '0000-00-00', 'ind', 0.00, 40.00, 0.000, '', 65.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3339, 'P61E', '2004-06-02', '0000-00-00', 'ind', 0.00, 50.00, 0.000, '', 90.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3340, 'P61F', '2004-06-02', '0000-00-00', 'ind', 0.00, 30.00, 0.000, '', 60.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3341, 'P61G', '2004-06-02', '0000-00-00', 'ind', 0.00, 40.00, 0.000, '', 90.00, 0.000, '');

INSERT INTO `INT_tariffe_onorari` VALUES (3342, 'P62A', '2004-06-02', '0000-00-00', 'ind', 0.00, 250.00, 0.000, '', 935.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3343, 'P62B', '2004-06-02', '0000-00-00', 'ind', 0.00, 125.00, 0.000, '', 465.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3344, 'P62C', '2004-06-02', '0000-00-00', 'ind', 0.00, 200.00, 0.000, '', 750.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3345, 'P62D', '2004-06-02', '0000-00-00', 'ind', 0.00, 75.00, 0.000, '', 280.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3346, 'P62E', '2004-06-02', '0000-00-00', 'ind', 0.00, 100.00, 0.000, '', 375.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3347, 'P62F', '2004-06-02', '0000-00-00', 'ind', 0.00, 50.00, 0.000, '', 250.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3348, 'P62G', '2004-06-02', '0000-00-00', 'ind', 0.00, 75.00, 0.000, '', 375.00, 0.000, '');

INSERT INTO `INT_tariffe_onorari` VALUES (3349, 'P63A', '2004-06-02', '0000-00-00', 'ind', 0.00, 375.00, 0.000, '', 1125.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3350, 'P63B', '2004-06-02', '0000-00-00', 'ind', 0.00, 190.00, 0.000, '', 560.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3351, 'P63C', '2004-06-02', '0000-00-00', 'ind', 0.00, 300.00, 0.000, '', 900.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3352, 'P63D', '2004-06-02', '0000-00-00', 'ind', 0.00, 115.00, 0.000, '', 335.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3353, 'P63E', '2004-06-02', '0000-00-00', 'ind', 0.00, 150.00, 0.000, '', 450.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3354, 'P63F', '2004-06-02', '0000-00-00', 'ind', 0.00, 60.00, 0.000, '', 300.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3355, 'P63G', '2004-06-02', '0000-00-00', 'ind', 0.00, 115.00, 0.000, '', 450.00, 0.000, '');

INSERT INTO `INT_tariffe_onorari` VALUES (3356, 'P713A', '2004-06-02', '0000-00-00', 'ind', 0.00, 190.00, 0.000, '', 860.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3357, 'P713B', '2004-06-02', '0000-00-00', 'ind', 0.00, 95.00, 0.000, '', 430.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3358, 'P713C', '2004-06-02', '0000-00-00', 'ind', 0.00, 150.00, 0.000, '', 690.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3359, 'P713D', '2004-06-02', '0000-00-00', 'ind', 0.00, 60.00, 0.000, '', 255.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3360, 'P713E', '2004-06-02', '0000-00-00', 'ind', 0.00, 75.00, 0.000, '', 345.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3361, 'P713F', '2004-06-02', '0000-00-00', 'ind', 0.00, 50.00, 0.000, '', 230.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3362, 'P713G', '2004-06-02', '0000-00-00', 'ind', 0.00, 60.00, 0.000, '', 345.00, 0.000, '');

INSERT INTO `INT_tariffe_onorari` VALUES (3363, 'P74A', '2004-06-02', '0000-00-00', 'ind', 0.00, 75.00, 0.000, '', 185.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3364, 'P74B', '2004-06-02', '0000-00-00', 'ind', 0.00, 40.00, 0.000, '', 90.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3365, 'P74C', '2004-06-02', '0000-00-00', 'ind', 0.00, 60.00, 0.000, '', 150.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3366, 'P74D', '2004-06-02', '0000-00-00', 'ind', 0.00, 25.00, 0.000, '', 55.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3367, 'P74E', '2004-06-02', '0000-00-00', 'ind', 0.00, 30.00, 0.000, '', 75.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3368, 'P74F', '2004-06-02', '0000-00-00', 'ind', 0.00, 20.00, 0.000, '', 50.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3369, 'P74G', '2004-06-02', '0000-00-00', 'ind', 0.00, 25.00, 0.000, '', 75.00, 0.000, '');

INSERT INTO `INT_tariffe_onorari` VALUES (3370, 'P75A', '2004-06-02', '0000-00-00', 'ind', 0.00, 300.00, 0.000, '', 1500.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3371, 'P75B', '2004-06-02', '0000-00-00', 'ind', 0.00, 150.00, 0.000, '', 750.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3372, 'P75C', '2004-06-02', '0000-00-00', 'ind', 0.00, 240.00, 0.000, '', 1200.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3373, 'P75D', '2004-06-02', '0000-00-00', 'ind', 0.00, 90.00, 0.000, '', 450.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3374, 'P75E', '2004-06-02', '0000-00-00', 'ind', 0.00, 120.00, 0.000, '', 600.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3375, 'P75F', '2004-06-02', '0000-00-00', 'ind', 0.00, 0.00, 0.000, '', 0.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3376, 'P75G', '2004-06-02', '0000-00-00', 'ind', 0.00, 0.00, 0.000, '', 0.00, 0.000, '');

INSERT INTO `INT_tariffe_onorari` VALUES (3377, 'P767A', '2004-06-02', '0000-00-00', 'ind', 0.00, 225.00, 0.000, '', 1125.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3378, 'P767B', '2004-06-02', '0000-00-00', 'ind', 0.00, 115.00, 0.000, '', 560.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3379, 'P767C', '2004-06-02', '0000-00-00', 'ind', 0.00, 180.00, 0.000, '', 900.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3380, 'P767D', '2004-06-02', '0000-00-00', 'ind', 0.00, 70.00, 0.000, '', 335.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3381, 'P767E', '2004-06-02', '0000-00-00', 'ind', 0.00, 909.00, 0.000, '', 450.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3382, 'P767F', '2004-06-02', '0000-00-00', 'ind', 0.00, 60.00, 0.000, '', 300.00, 0.000, '');
INSERT INTO `INT_tariffe_onorari` VALUES (3383, 'P767G', '2004-06-02', '0000-00-00', 'ind', 0.00, 90.00, 0.000, '', 450.00, 0.000, '');


-- --------------------------------------------------------

-- 
-- Struttura della tabella `INT_valute`
-- 

DROP TABLE IF EXISTS `INT_valute`;
CREATE TABLE IF NOT EXISTS `INT_valute` (
  `id` int(11) NOT NULL auto_increment,
  `va_nome` varchar(50) NOT NULL default '',
  `va_cod` varchar(10) NOT NULL default '',
  `va_val` decimal(10,5) NOT NULL default '0.00000',
  `va_sep_decimali` varchar(5) NOT NULL default '',
  `va_sep_migliaia` varchar(5) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `va_cod` (`va_cod`)
) TYPE=MyISAM;


INSERT INTO `INT_valute` VALUES (1, 'Afganistan - Afghani', 'AFA', 57.24590, '', '');
INSERT INTO `INT_valute` VALUES (2, 'Albania - Lek', 'ALL', 128.73670, '', '');
INSERT INTO `INT_valute` VALUES (3, 'Algeria - Dinaro', 'DZD', 95.76530, '', '');
INSERT INTO `INT_valute` VALUES (4, 'Antille Olandesi - Guilder', 'ANG', 2.36970, '', '');
INSERT INTO `INT_valute` VALUES (5, 'Arabia Saudita - Riyal', 'SAR', 4.99240, '', '');
INSERT INTO `INT_valute` VALUES (6, 'Argentina - Peso', 'ARS', 3.90070, '', '');
INSERT INTO `INT_valute` VALUES (7, 'Aruba - Fiorino', 'AWG', 2.38300, '', '');
INSERT INTO `INT_valute` VALUES (8, 'Australia - Dollaro', 'AUD', 1.71540, '', '');
INSERT INTO `INT_valute` VALUES (9, 'Bahrain - Dinaro', 'BHD', 0.50190, '', '');
INSERT INTO `INT_valute` VALUES (10, 'Bangladesh - Taka', 'BDT', 79.61170, '', '');
INSERT INTO `INT_valute` VALUES (11, 'Barbados - Dollaro', 'BBD', 2.64930, '', '');
INSERT INTO `INT_valute` VALUES (12, 'Belize - Dollaro', 'BZD', 2.62270, '', '');
INSERT INTO `INT_valute` VALUES (13, 'Bermuda - Dollaro', 'BMD', 1.31800, '', '');
INSERT INTO `INT_valute` VALUES (14, 'Bhutan - Ngultrum', 'BTN', 59.52240, '', '');
INSERT INTO `INT_valute` VALUES (15, 'Bolivia - Boliviano', 'BOB', 10.65970, '', '');
INSERT INTO `INT_valute` VALUES (16, 'Botswana - Pula', 'BWP', 5.80090, '', '');
INSERT INTO `INT_valute` VALUES (17, 'Brasile - Real', 'BRL', 3.64640, '', '');
INSERT INTO `INT_valute` VALUES (18, 'Brunei - Dollaro', 'BND', 2.18200, '', '');
INSERT INTO `INT_valute` VALUES (19, 'Cambogia - Riel', 'KHR', 5122.84230, '', '');
INSERT INTO `INT_valute` VALUES (20, 'Canada - Dollaro', 'CAD', 1.57800, '', '');
INSERT INTO `INT_valute` VALUES (21, 'Cape Verde - Escudo', 'CVE', 111.09700, '', '');
INSERT INTO `INT_valute` VALUES (22, 'Cayman Islands - Dollaro', 'KYD', 1.09170, '', '');
INSERT INTO `INT_valute` VALUES (23, 'CFA - Franco', 'XOF', 655.02620, '', '');
INSERT INTO `INT_valute` VALUES (24, 'CFP - Franco', 'XPF', 117.15440, '', '');
INSERT INTO `INT_valute` VALUES (25, 'Cile - Peso', 'CLP', 783.93600, '', '');
INSERT INTO `INT_valute` VALUES (26, 'Colombia - Peso', 'COP', 3298.96140, '', '');
INSERT INTO `INT_valute` VALUES (27, 'Comore - Franco', 'KMF', 494.04540, '', '');
INSERT INTO `INT_valute` VALUES (28, 'Costa Rica - Colon', 'CRC', 605.46200, '', '');
INSERT INTO `INT_valute` VALUES (29, 'Croazia - Kuna', 'HRK', 7.53500, '', '');
INSERT INTO `INT_valute` VALUES (30, 'Ciprio - Sterlina', 'CYP', 0.57900, '', '');
INSERT INTO `INT_valute` VALUES (31, 'Cuba -  Peso', 'CUP', 1.33130, '', '');
INSERT INTO `INT_valute` VALUES (32, 'Danimarca - Corona', 'DKK', 7.43010, '', '');
INSERT INTO `INT_valute` VALUES (33, 'Dominica - Peso', 'DOP', 37.27640, '', '');
INSERT INTO `INT_valute` VALUES (34, 'Egitto - Pound', 'EGP', 8.30070, '', '');
INSERT INTO `INT_valute` VALUES (35, 'El Salvador Colon', 'SVC', 11.64490, '', '');
INSERT INTO `INT_valute` VALUES (36, 'Emirati Arabi Uniti - Dirham', 'AED', 4.88890, '', '');
INSERT INTO `INT_valute` VALUES (37, 'Estonia - Kroon', 'EEK', 15.57890, '', '');
INSERT INTO `INT_valute` VALUES (38, 'Etiopia - Birr', 'ETB', 11.51480, '', '');
INSERT INTO `INT_valute` VALUES (39, 'Fiji - Dollaro', 'FJD', 2.17360, '', '');
INSERT INTO `INT_valute` VALUES (40, 'Gambia - Dalasi', 'GMD', 38.60770, '', '');
INSERT INTO `INT_valute` VALUES (41, 'Ghana - Cedi', 'GHC', 11875.19630, '', '');
INSERT INTO `INT_valute` VALUES (42, 'Gibilterra - Sterlina', 'GIP', 0.70450, '', '');
INSERT INTO `INT_valute` VALUES (43, 'Gibuti - Franco', 'DJF', 234.30880, '', '');
INSERT INTO `INT_valute` VALUES (44, 'Guatemala - Quetzal', 'GTQ', 10.27100, '', '');
INSERT INTO `INT_valute` VALUES (45, 'Guinea - Franco', 'GNF', 3635.78030, '', '');
INSERT INTO `INT_valute` VALUES (46, 'Guyana - Dollaro', 'GYD', 238.30270, '', '');
INSERT INTO `INT_valute` VALUES (47, 'Giamaica - Dollaro', 'JMD', 81.66190, '', '');
INSERT INTO `INT_valute` VALUES (48, 'Giappone - Yen', 'JPY', 136.61800, '', '');


INSERT INTO `INT_valute` VALUES (49, 'Giordania - Dinaro', 'JOD', 0.94260, '', '');
INSERT INTO `INT_valute` VALUES (50, 'Haiti - Gourde', 'HTG', 47.92680, '', '');
INSERT INTO `INT_valute` VALUES (51, 'Hong Kong - Dollaro', 'HKD', 10.34980, '', '');
INSERT INTO `INT_valute` VALUES (52, 'Honduras - Lempira', 'HNL', 24.70890, '', '');
INSERT INTO `INT_valute` VALUES (53, 'Islanda - Krona', 'ISK', 86.42800, '', '');
INSERT INTO `INT_valute` VALUES (54, 'India - Rupia', 'INR', 59.32270, '', '');
INSERT INTO `INT_valute` VALUES (55, 'Indonesia - Rupia', 'IDR', 12008.32620, '', '');
INSERT INTO `INT_valute` VALUES (56, 'Inghilterra - Sterlina', 'GBP', 0.69650, '', '');
INSERT INTO `INT_valute` VALUES (57, 'Israele - Shekel', 'ILS', 5.80110, '', '');
INSERT INTO `INT_valute` VALUES (58, 'Kenya - Scellino', 'KES', 108.03500, '', '');
INSERT INTO `INT_valute` VALUES (59, 'Kuwait - Dinaro', 'KWD', 0.39220, '', '');
INSERT INTO `INT_valute` VALUES (60, 'Laos - Kip', 'LAK', 10440.05470, '', '');
INSERT INTO `INT_valute` VALUES (61, 'Latvia - Lats', 'LVL', 0.68740, '', '');
INSERT INTO `INT_valute` VALUES (62, 'Libano - Pound', 'LBP', 2014.92260, '', '');
INSERT INTO `INT_valute` VALUES (63, 'Lesotho - Loti', 'LSL', 7.78810, '', '');
INSERT INTO `INT_valute` VALUES (64, 'Lituania - Litas', 'LTL', 3.45250, '', '');
INSERT INTO `INT_valute` VALUES (65, 'Malawi - Kwacha', 'MWK', 141.78340, '', '');
INSERT INTO `INT_valute` VALUES (66, 'Malesia - Ringgit', 'MYR', 5.05830, '', '');
INSERT INTO `INT_valute` VALUES (67, 'Maldive - Rufiyan', 'MVR', 16.90750, '', '');
INSERT INTO `INT_valute` VALUES (68, 'Malta - Pound', 'MTL', 0.43160, '', '');
INSERT INTO `INT_valute` VALUES (69, 'Mauritania - Ouguiya', 'MRO', 337.21830, '', '');
INSERT INTO `INT_valute` VALUES (70, 'Mauritius - Rupee', 'MUR', 37.59590, '', '');
INSERT INTO `INT_valute` VALUES (71, 'Messico - Peso', 'MXN', 14.95450, '', '');
INSERT INTO `INT_valute` VALUES (72, 'Mongolia - Tugrik', 'MNT', 1616.19820, '', '');
INSERT INTO `INT_valute` VALUES (73, 'Marocca - Dirham', 'MAD', 11.16160, '', '');
INSERT INTO `INT_valute` VALUES (74, 'Mozambico - Metical', 'MZM', 25765.32810, '', '');
INSERT INTO `INT_valute` VALUES (75, 'Myanmar  - Kyat', 'MMK', 8.54690, '', '');
INSERT INTO `INT_valute` VALUES (76, 'Nepal - Rupia', 'NPR', 95.85360, '', '');
INSERT INTO `INT_valute` VALUES (77, 'Nuova Zelanda - Dollaro', 'NZD', 1.85680, '', '');
INSERT INTO `INT_valute` VALUES (78, 'Nicaragua - Cordoba', 'NIO', 21.51380, '', '');
INSERT INTO `INT_valute` VALUES (79, 'Nigeria - Naira', 'NGN', 176.73010, '', '');
INSERT INTO `INT_valute` VALUES (80, 'Norvegia - Corona', 'NOK', 8.10220, '', '');
INSERT INTO `INT_valute` VALUES (81, 'Oman - Rial', 'OMR', 0.51250, '', '');
INSERT INTO `INT_valute` VALUES (82, 'Pakistan - Rupia', 'PKR', 79.39870, '', '');
INSERT INTO `INT_valute` VALUES (83, 'Papua Nuova Guinea - Kina', 'PGK', 4.02810, '', '');
INSERT INTO `INT_valute` VALUES (84, 'Per� - Sol', 'PEN', 4.39790, '', '');
INSERT INTO `INT_valute` VALUES (85, 'Filippine - Peso', 'PHP', 74.72590, '', '');
INSERT INTO `INT_valute` VALUES (86, 'Polonia - Zloty', 'PLN', 4.20960, '', '');
INSERT INTO `INT_valute` VALUES (87, 'Qatari - Rial', 'QAR', 4.84460, '', '');
INSERT INTO `INT_valute` VALUES (88, 'Renmimbi - Yuan', 'CNY', 11.01850, '', '');
INSERT INTO `INT_valute` VALUES (89, 'Rep. ceca - Koruna', 'CZK', 30.98730, '', '');
INSERT INTO `INT_valute` VALUES (90, 'Romania  - Leu', 'ROL', 38380.04690, '', '');
INSERT INTO `INT_valute` VALUES (91, 'Russia - Rublo', 'RUB', 37.46010, '', '');
INSERT INTO `INT_valute` VALUES (92, 'Salomon Islands - Dollaro', 'SBD', 9.47540, '', '');
INSERT INTO `INT_valute` VALUES (93, 'Samoa Occid. - Tala', 'WST', 0.50190, '', '');
INSERT INTO `INT_valute` VALUES (94, 'Sao Tome &amp; Principe - Dobra', 'STD', 12016.31450, '', '');
INSERT INTO `INT_valute` VALUES (95, 'Serbia - Dinar', 'CSD', 77.88810, '', '');
INSERT INTO `INT_valute` VALUES (96, 'Seychelles - Rupia', 'SCR', 6.91940, '', '');
INSERT INTO `INT_valute` VALUES (97, 'Sierra Leone - Leone', 'SLL', 3135.21170, '', '');
INSERT INTO `INT_valute` VALUES (98, 'Singapore - Dollaro', 'SGD', 2.17880, '', '');
INSERT INTO `INT_valute` VALUES (99, 'Slovacchia - Corona', 'SKK', 39.26000, '', '');
INSERT INTO `INT_valute` VALUES (100, 'Sud Africa - Rand', 'ZAR', 7.70490, '', '');
INSERT INTO `INT_valute` VALUES (101, 'Sud Corea - Won', 'KRW', 1395.60190, '', '');
INSERT INTO `INT_valute` VALUES (102, 'Sri Lanka - Rupia', 'LKR', 139.52020, '', '');
INSERT INTO `INT_valute` VALUES (103, 'St. Helena - Pound', 'SHP', 0.70450, '', '');
INSERT INTO `INT_valute` VALUES (104, 'Sudan - Dinaro', 'SDD', 339.86760, '', '');
INSERT INTO `INT_valute` VALUES (105, 'Surinam - Guilder', 'SRG', 3348.21950, '', '');
INSERT INTO `INT_valute` VALUES (106, 'Swaziland - Lilangeni', 'SZL', 7.71220, '', '');
INSERT INTO `INT_valute` VALUES (107, 'Svezia - Corona', 'SEK', 8.92100, '', '');
INSERT INTO `INT_valute` VALUES (108, 'Svizzera - Franco', 'CHF', 1.51100, '', '');
INSERT INTO `INT_valute` VALUES (109, 'Siria - Pound', 'SYP', 69.02790, '', '');
INSERT INTO `INT_valute` VALUES (110, 'Taiwan - Nuovo Dollaro', 'TWD', 42.64150, '', '');
INSERT INTO `INT_valute` VALUES (111, 'Tanzania - Scellino', 'TZS', 1408.51540, '', '');
INSERT INTO `INT_valute` VALUES (112, 'Thai - Baht', 'THB', 52.54640, '', '');
INSERT INTO `INT_valute` VALUES (113, 'Tonga - Pa''anga', 'TOP', 2.55180, '', '');
INSERT INTO `INT_valute` VALUES (114, 'Trinidad - Dollaro', 'TTD', 8.18750, '', '');
INSERT INTO `INT_valute` VALUES (115, 'Tunisia - Dinaro', 'TND', 1.61260, '', '');
INSERT INTO `INT_valute` VALUES (116, 'Turchia - Lira', 'TRL', 999999.99999, '', '');
INSERT INTO `INT_valute` VALUES (117, 'Ukraina - Hryvnia', 'UAH', 7.07590, '', '');
INSERT INTO `INT_valute` VALUES (118, 'Ungheria - Forint', 'HUF', 245.45180, '', '');
INSERT INTO `INT_valute` VALUES (119, 'USA - Dollaro', 'USD', 1.33130, '', '');
INSERT INTO `INT_valute` VALUES (120, 'Vanuatu - Vatu', 'VUV', 141.81010, '', '');
INSERT INTO `INT_valute` VALUES (121, 'Venezuela - Bolivar', 'VEB', 2549.70580, '', '');
INSERT INTO `INT_valute` VALUES (122, 'Vietnam - Dong', 'VND', 20986.61330, '', '');
INSERT INTO `INT_valute` VALUES (123, 'Zambia - Kwacha', 'ZMK', 6223.82760, '', '');
INSERT INTO `INT_valute` VALUES (124, 'Zimbabwe - Dollaro', 'ZWD', 7668.28810, '', '');
        


-- --------------------------------------------------------

-- 
-- Struttura della tabella `calendar`
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
  `recurrent` int(2) NOT NULL default '0',
  `dayofweek` int(2) NOT NULL default '0',
  `dayend` date NOT NULL default '0000-00-00',
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
  `cal_luogo` varchar(255) NOT NULL default '',
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
) TYPE=MyISAM ;

### data of table `calendar` ###

insert into `calendar` values ('1', '', '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '');



-- --------------------------------------------------------

-- 
-- Struttura della tabella `contact`
-- 

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
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
) TYPE=MyISAM ;

/*INSERT INTO `contact` VALUES (1, '', '', 0, '', '', '', '', '', '', '', '', 0, 0, 0, 'D=6666', '', '', 0.00, '', '', '', '0000-00-00', '', '', 0, '')*/;
/*insert into `contact` values ('1', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', 'U5=6', '', '', '0.00', '', '', '', '0000-00-00', '', '', '0', '', '', '', '', '', '', '')*/;
insert into `contact` values ('1', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '2', '0', 'U5=6', '', '', '0.00', '', '', '', '0000-00-00', '', '', '107', '', '', '', '', '', '', '');
-- --------------------------------------------------------

-- 
-- Struttura della tabella `cron`
-- 

DROP TABLE IF EXISTS `cron`;
CREATE TABLE IF NOT EXISTS `cron` (
  `id` varchar(150) NOT NULL default '',
  `timing` varchar(255) NOT NULL default '',
  `type` tinyint(1) NOT NULL default '0',
  `function` varchar(255) NOT NULL default '',
  `param` text NOT NULL,
  `descr` text NOT NULL,
  `locked` tinyint(1) NOT NULL default '0'
) TYPE=MyISAM;

-- --------------------------------------------------------

-- 
-- Struttura della tabella `document`
-- 

DROP TABLE IF EXISTS `document`;
CREATE TABLE IF NOT EXISTS `document` (
  `id` int(10) NOT NULL auto_increment,
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
) TYPE=MyISAM ;

-- --------------------------------------------------------

-- 
-- Struttura della tabella `error_log`
-- 

DROP TABLE IF EXISTS `error_log`;
CREATE TABLE IF NOT EXISTS `error_log` (
  `id` int(10) NOT NULL auto_increment,
  `date_log` datetime NOT NULL default '0000-00-00 00:00:00',
  `error_number` int(4) NOT NULL default '0',
  `error_desc` text NOT NULL,
  `error_file` varchar(255) NOT NULL default '',
  `error_line_num` int(6) NOT NULL default '0',
  `debug` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `date_log` (`date_log`),
  KEY `error_file` (`error_file`),
  KEY `error_number` (`error_number`),
  KEY `error_number_2` (`error_number`)
) TYPE=MyISAM ;

-- --------------------------------------------------------



-- 
-- Struttura della tabella `group_user`
-- 

DROP TABLE IF EXISTS `group_user`;
CREATE TABLE IF NOT EXISTS `group_user` (
  `userid` int(10) NOT NULL default '0',
  `groupid` int(10) NOT NULL default '0'
) TYPE=MyISAM;

-- --------------------------------------------------------

-- 
-- Struttura della tabella `gruppi`
-- 

DROP TABLE IF EXISTS `gruppi`;
CREATE TABLE IF NOT EXISTS `gruppi` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `descr` text NOT NULL,
  `on_orar` decimal(10,2) NOT NULL default '0.00',
  `tipo` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

-- --------------------------------------------------------



-- 
-- Struttura della tabella `pratiche`
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

insert into `pratiche` values ('1', '', '', '', '0', '', '0', '0', '', '', '', '', '55', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0.00', '0.00', '0000-00-00', '', '1', '0', '', '', '', '0.00', '0.00', '0', '1', '', 'D=6666', '', '0', '0', '0', '', '0000-00-00');

-- --------------------------------------------------------

-- 
-- Struttura della tabella `prestazioni`
-- 

### structure of table `prestazioni` ###

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
  `sp_studio` decimal(10,2) NOT NULL default '0.00',
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
) TYPE=MyISAM;

### data of table `prestazioni` ###

insert into `prestazioni` values ('1', '0000-00-00', '', '0', '', '', '', '55', '', '0', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '', '', '', '', '', 'D=6666', '263294');
-- --------------------------------------------------------

-- 
-- Struttura della tabella `system_lock`
-- 

DROP TABLE IF EXISTS `system_lock`;
CREATE TABLE IF NOT EXISTS `system_lock` (
  `id` int(10) NOT NULL auto_increment,
  `lock_date` date NOT NULL default '0000-00-00',
  `lock_time` time NOT NULL default '00:00:00',
  `min_notify` int(10) NOT NULL default '0',
  `hash_unlock` varchar(15) NOT NULL default '',
  `descr` text NOT NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM ;

-- --------------------------------------------------------

-- 
-- Struttura della tabella `table_link`
-- 

DROP TABLE IF EXISTS `table_link`;
CREATE TABLE IF NOT EXISTS `table_link` (
  `module_1` varchar(100) NOT NULL default '',
  `obj_1` int(10) NOT NULL default '0',
  `module_2` varchar(100) NOT NULL default '',
  `obj_2` int(10) NOT NULL default '0'
) TYPE=MyISAM;

-- --------------------------------------------------------


-- 
-- Struttura della tabella `users`
-- 

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
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
) TYPE=MyISAM PACK_KEYS=0 ;
