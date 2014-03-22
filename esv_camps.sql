-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 15. Jan 2014 um 14:49
-- Server Version: 5.6.11
-- PHP-Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `esv_camps`
--
CREATE DATABASE IF NOT EXISTS `esv_camps` DEFAULT CHARACTER SET latin1 COLLATE latin1_german1_ci;
USE `esv_camps`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `teilnehmer`
--

CREATE TABLE IF NOT EXISTS `teilnehmer` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `vorname` char(30) COLLATE latin1_german1_ci NOT NULL,
  `nachname` char(30) COLLATE latin1_german1_ci NOT NULL,
  `email` char(40) COLLATE latin1_german1_ci NOT NULL,
  `timestamp` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci AUTO_INCREMENT=12 ;

ALTER DATABASE esv_camps CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE teilnehmer CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;


ALTER TABLE `teilnehmer` ADD `nameVerein` VARCHAR(50) , `zeitraum1` BOOLEAN , `zeitraum2` BOOLEAN , `vornameEltern` VARCHAR(35) , `nachnameEltern` VARCHAR(45) , `strasse` VARCHAR(40) , `hausnummer` VARCHAR(8) , `plz` VARCHAR(5) , `ort` VARCHAR(40) , `mobiltelefon` VARCHAR(15) , `festnetz` VARCHAR(20)  AFTER `gebdatum`;
	
ALTER TABLE `teilnehmer` 
	ADD `bestaetigung` BOOLEAN NOT NULL 
AFTER `email`;
	
	
	'] = true) $zeitraum1 = 1;
	if ($_POST['zeitraum2'] = true) $zeitraum2 = 1;
	$vornameEltern = $_POST['vornameEltern'];
	$nachnameEltern = $_POST['nachnameEltern'];
	$strasse = $_POST['strasse'];
	$hausnummer = $_POST['hausnummer'];
	$plz = $_POST['postleitzahl'];
	$ort = $_POST['ort'];
	$mobiltelefon = $_POST['mobiltelefon'];
	$festnetz = $_POST['festnetz'];
	$email = $_POST['email'];
	if ($_POST['bestaetigung'] = true) $bestaetigung = 1;	
	




--
-- Daten für Tabelle `teilnehmer`
--

INSERT INTO `teilnehmer` (`id`, `vorname`, `nachname`, `email`, `timestamp`) VALUES
(1, 'max', 'mustermann', 'muster@muster.ru', '2014-01-15 10:53:58'),
(2, 'mimi', 'muster', 'muster@muster.ru', '2014-01-15 11:16:55'),
(3, 'mimi', 'muster', 'muster@muster.ru', '2014-01-15 11:22:50'),
(4, 'Micha', 'Meister', 'meister@meistermuster.ru', '2014-01-15 11:23:16'),
(5, 'ben', 'by', 'ben.by@bybybuettrich.de', '2014-01-15 12:09:12'),
(6, 'minnie', 'moocher', 'minnie.moocher@mustermustermoocher.de', '2014-01-15 12:33:22'),
(7, 'paulchen', 'panther', 'panther@paulchenbuettrich.de', '2014-01-15 12:40:47'),
(8, 'Theo', 'Tiger-TÃ¼ttÃ¼t', 'Tiger@tuettuetbuettrich.de', '2014-01-15 12:45:06'),
(9, 'Flavia', 'Flamingo', 'flavia@flamingobuettrich.de', '2014-01-15 12:47:43'),
(10, 'Ottilie', 'Otter', 'otter@otterbuettrich.de', '2014-01-15 12:59:57'),
(11, 'Benny', 'Biber', 'bennybiber@bibertestbiber.de', '2014-01-15 13:03:55');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
