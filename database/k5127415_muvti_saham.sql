-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 08, 2018 at 03:27 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `k5127415_muvti_saham`
--

-- --------------------------------------------------------

--
-- Table structure for table `muvti_category`
--

DROP TABLE IF EXISTS `muvti_category`;
CREATE TABLE IF NOT EXISTS `muvti_category` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL,
  `is_deleted` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `muvti_category`
--

TRUNCATE TABLE `muvti_category`;
--
-- Dumping data for table `muvti_category`
--

INSERT INTO `muvti_category` (`id`, `name`, `date_created`, `date_updated`, `is_deleted`) VALUES
(1, 'ISSI', '2018-06-11 21:31:35', NULL, b'0'),
(2, 'JII', '2018-06-11 21:31:35', NULL, b'0'),
(3, 'LQ45', '2018-06-11 21:31:35', NULL, b'0'),
(4, 'Pefindo25', '2018-06-11 21:31:35', NULL, b'0'),
(5, 'Kompas100', '2018-06-11 21:31:35', NULL, b'0'),
(6, 'IDX30', '2018-06-11 21:31:35', NULL, b'0'),
(7, 'Bisnis-27', '2018-06-11 21:31:35', NULL, b'0'),
(8, 'Sri-Kehati', '2018-06-11 21:31:35', NULL, b'0'),
(9, 'Price', '2018-06-16 12:03:07', NULL, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `muvti_emiten`
--

DROP TABLE IF EXISTS `muvti_emiten`;
CREATE TABLE IF NOT EXISTS `muvti_emiten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` char(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sector_id` tinyint(4) DEFAULT NULL,
  `subsector_id` tinyint(4) DEFAULT NULL,
  `idx` varchar(200) DEFAULT NULL,
  `price` float DEFAULT '0',
  `currency` float NOT NULL DEFAULT '1',
  `margin` float DEFAULT '0',
  `liability` double DEFAULT '0',
  `equity` double DEFAULT '0',
  `dividen` float DEFAULT '0',
  `eps` double DEFAULT '0',
  `volume` double DEFAULT '0',
  `file` varchar(500) DEFAULT '',
  `status` varchar(10) NOT NULL DEFAULT 'Inactive',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL,
  `is_deleted` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `fk_subsector_id` (`subsector_id`),
  KEY `fk_sector_id2` (`sector_id`)
) ENGINE=InnoDB AUTO_INCREMENT=369 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `muvti_emiten`
--

TRUNCATE TABLE `muvti_emiten`;
--
-- Dumping data for table `muvti_emiten`
--

INSERT INTO `muvti_emiten` (`id`, `code`, `name`, `sector_id`, `subsector_id`, `idx`, `price`, `currency`, `margin`, `liability`, `equity`, `dividen`, `eps`, `volume`, `file`, `status`, `date_created`, `date_updated`, `is_deleted`) VALUES
(1, 'AALI', 'Astra', 7, 7, 'Kompas100, Bisnis-27, Sri-Kehati', 10775, 1, 1.16009, 6407818000000, 18562423000000, 322, 184.67999267578125, 1924690048, 'uploads/financial_report/FinancialStatement-2018-I-AALI.pdf', 'Inactive', '2018-06-23 05:50:16', NULL, b'0'),
(2, 'ABBA', 'Mahaka', NULL, NULL, NULL, 50, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:16', NULL, b'0'),
(3, 'ACES', 'Ace', 2, 12, 'Pefindo25, Kompas100', 1235, 1, 0, 950435971072, 3721676193886, 22.81, 12.25, 17150000128, 'uploads/financial_report/FinancialStatement-2018-I-ACES.pdf', 'Inactive', '2018-06-23 05:50:16', NULL, b'0'),
(4, 'ACST', 'Acset', 5, 5, 'Pefindo25', 2600, 1, 0, 4758700032000, 1449608000000, 58, 56, 700000000, 'uploads/financial_report/FinancialStatement-2018-I-ACST.pdf', 'Inactive', '2018-06-23 05:50:16', NULL, b'0'),
(5, 'ADES', 'Akasha', NULL, NULL, NULL, 940, 1, 3.7234, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:16', NULL, b'0'),
(6, 'ADHI', 'Adhi', 5, 5, 'LQ45, Kompas100, Sri-Kehati', 1575, 1, -1.5873, 21311162606580, 5932528001581, 28.95, 20.580047147578, 171804000256, 'uploads/financial_report/FinancialStatement-2018-I-ADHI.pdf', 'Inactive', '2018-06-23 05:50:16', NULL, b'0'),
(7, 'ADMG', 'Polychem', NULL, NULL, NULL, 286, 1, -0.699301, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:16', NULL, b'0'),
(8, 'ADRO', 'Adaro', 6, 6, 'JII, LQ45, Kompas100, IDX30, Bisnis-27', 1785, 13756, -2.2409, 2606712000, 3564643000, 0.00468981, 0.0099999997764826, 31985999872, 'uploads/financial_report/FinancialStatement-2018-I-ADRO.pdf', 'Inactive', '2018-06-23 05:50:16', NULL, b'0'),
(9, 'AGII', 'Aneka', NULL, NULL, NULL, 590, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:16', NULL, b'0'),
(10, 'AIMS', 'Akbar', NULL, NULL, NULL, 214, 1, -8.41121, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(11, 'AKPI', 'Argha', NULL, NULL, NULL, 760, 1, -4.60526, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(12, 'AKRA', 'AKR', 2, 2, 'JII, LQ45, Kompas100, Bisnis-27', 4200, 1, 1.66667, 8958978095000, 8498134256000, 100, 50, 4006330112, 'uploads/financial_report/FinancialStatement-2018-I-AKRA.pdf', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(13, 'AKSI', 'Majapahit', NULL, NULL, NULL, 322, 1, -3.10559, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(14, 'ALDO', 'Alkindo', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(15, 'ALKA', 'Alakasa', NULL, NULL, NULL, 322, 1, 1.24224, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(16, 'ALMI', 'Alumindo', NULL, NULL, NULL, 498, 1, -11.4458, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(17, 'AMFG', 'Asahimas', NULL, NULL, NULL, 4800, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(18, 'AMIN', 'Ateliers', NULL, NULL, NULL, 398, 1, -0.502513, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(19, 'ANJT', 'Austindo', NULL, NULL, NULL, 1105, 1, -1.80995, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(20, 'ANTM', 'Aneka', 6, 8, 'JII, LQ45, Kompas100, IDX30', 780, 1, -2.5641, 12496313541000, 18727739773000, 1.99, 10.220000267028809, 25145999360, 'uploads/financial_report/FinancialStatement-2018-I-ANTM.pdf', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(21, 'APII', 'Arita', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(22, 'APLI', 'Asiaplast', NULL, NULL, NULL, 94, 1, -6.38298, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(23, 'APLN', 'Agung', NULL, NULL, NULL, 156, 1, 3.84615, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(24, 'ARII', 'Atlas', NULL, NULL, NULL, 1225, 1, -0.408163, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(25, 'ARNA', 'Arwana', 1, 11, 'Pefindo25', 346, 1, -1.15607, 689668715733, 964961166637, 12, 5.369999885559082, 7341429760, 'uploads/financial_report/FinancialStatement-2018-I-ARNA.pdf', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(26, 'ARTA', 'Arthavest', NULL, NULL, NULL, 264, 1, -0.757576, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(27, 'ARTI', 'Ratu', NULL, NULL, NULL, 50, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(28, 'ASGR', 'Astra', NULL, NULL, NULL, 1380, 1, 1.08696, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(29, 'ASII', 'Astra', 4, 9, 'JII, LQ45, Kompas100, IDX30, Bisnis-27, Sri-Kehati', 6300, 1, 0, 143141000000000, 128973000000000, 130, 123, 40483598336, 'uploads/financial_report/FinancialStatement-2018-I-ASII.pdf', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(30, 'ASRI', 'Alam', 5, 10, 'Kompas100, Sri-Kehati', 306, 1, -0.653595, 12120309868000, 8764435069000, 0, 15.239999771118164, 19649400832, 'uploads/financial_report/FinancialStatement-2018-I-ASRI.pdf', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(31, 'ATIC', 'Anabatic', NULL, NULL, NULL, 745, 1, -0.671141, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(32, 'AUTO', 'Astra', 4, 9, NULL, 1405, 1, 3.91459, 4372409876480, 10916800233472, 33, 30, 4819729920, 'uploads/financial_report/FinancialStatement-2018-I-AUTO.pdf', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(33, 'BALI', 'Bali', NULL, NULL, NULL, 1640, 1, -0.304878, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(34, 'BAPA', 'Bekasi', NULL, NULL, NULL, 115, 1, 0.869565, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(35, 'BATA', 'Sepatu', NULL, NULL, NULL, 600, 1, -1.66667, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(36, 'BAYU', 'Bayu', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(37, 'BCIP', 'Bumi', 5, 5, 'Pefindo25', 81, 1, 0, 510204658524, 355483532849, 0, 1.2, 1429915525, 'uploads/financial_report/BCIP_LK_TW_I_2018.pdf', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(38, 'BELL', 'Trisula', NULL, NULL, NULL, 218, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(39, 'BEST', 'Bekasi', 5, 10, 'Kompas100', 230, 1, 0, 1888740237196, 3938930013679, 10, 9.6899995803833, 9.6470003128052, 'uploads/financial_report/FinancialStatement-2018-I-BEST.pdf', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(40, 'BIPP', 'Bhuwanatala', NULL, NULL, NULL, 77, 1, 2.5974, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:17', NULL, b'0'),
(41, 'BIRD', 'Blue', NULL, NULL, NULL, 2640, 1, -1.51515, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(42, 'BISI', 'BISI', 7, 29, 'Pefindo25', 1700, 1, 0, 351347000000, 2232546000000, 100, 11, 3000000000, 'uploads/financial_report/FinancialStatement-2018-I-BISI.pdf', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(43, 'BKDP', 'Bukit', NULL, NULL, NULL, 54, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(44, 'BKSL', 'Sentul', 5, 10, 'Kompas100', 100, 1, 0, 5162466405638, 9277997963746, 0, 2.259999990463257, 55258656768, 'uploads/financial_report/FinancialStatement-2018-I-BKSL.pdf', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(45, 'BLTZ', 'Graha', NULL, NULL, NULL, 4190, 1, -0.71599, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(46, 'BMTR', 'Global', 2, 14, 'LQ45, Kompas100, IDX30', 500, 1, -4, 14230651000000, 14341205000000, 0, 5.8490500450134, 14198599680, 'uploads/financial_report/FinancialStatement-2018-I-BMTR.pdf', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(47, 'BOGA', 'Bintang', NULL, NULL, NULL, 625, 1, -1.6, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(48, 'BOLT', 'Garuda', 4, 9, 'Pefindo25', 880, 1, -0.568182, 485383860768, 680869581482, 32, 11.199999809265137, 234375008, 'uploads/financial_report/FinancialStatement-2018-I-BOLT.pdf', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(49, 'BOSS', 'Borneo', NULL, NULL, NULL, 2070, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(50, 'BRAM', 'Indo', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(51, 'BRIS', 'Bank', NULL, NULL, NULL, 565, 1, -1.76991, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(52, 'BRMS', 'Bumi', 2, 14, 'Kompas100', 63, 13756, -1.5873, 306659332, 819602067, 0, -0.07999999821186066, 62322458624, 'uploads/financial_report/FinancialStatement-2018-I-BRMS.pdf', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(53, 'BRNA', 'Berlina', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(54, 'BRPT', 'Barito', 1, 19, 'JII, LQ45, Kompas100, IDX30, Bisnis-27', 1725, 13756, -3.18841, 1519272000, 2067727000, 0.001643, 0.0023, 13959785568, 'uploads/financial_report/FinancialStatement-2018-I-BRPT.pdf', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(55, 'BSDE', 'Bumi', 5, 10, 'JII, LQ45, Kompas100, IDX30, Bisnis-27, Sri-Kehati', 1430, 1, -1.04895, 18894800551936, 29690100187136, 0, 21.15999984741211, 19246700544, 'uploads/financial_report/FinancialStatement-2018-I-BSDE.pdf', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(56, 'BSSR', 'Baramulti', NULL, NULL, NULL, 2530, 1, -1.58103, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(57, 'BTEK', 'Bumi', NULL, NULL, NULL, 120, 1, 8.33333, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(58, 'BTON', 'Betonjaya', 1, 27, NULL, 242, 1, -8.26446, 34072000512, 163101999104, 0, 11.800000190734863, 720000000, 'uploads/financial_report/FinancialStatement-2018-I-BTON.pdf', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(59, 'BTPS', 'Bank', NULL, NULL, NULL, 1580, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(60, 'BUDI', 'Budi', NULL, NULL, NULL, 101, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(61, 'BUKK', 'Bukaka', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(62, 'BULL', 'Buana', NULL, NULL, NULL, 124, 1, 4.83871, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(63, 'BYAN', 'Bayan', NULL, NULL, NULL, 15650, 1, 6.54952, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(64, 'CAMP', 'Campina', NULL, NULL, NULL, 354, 1, 1.69492, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(65, 'CANI', 'Capitol', NULL, NULL, NULL, 180, 1, 2.22222, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:18', NULL, b'0'),
(66, 'CASS', 'Cardig', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(67, 'CEKA', 'Wilmar', NULL, NULL, NULL, 1225, 1, -2.04082, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(68, 'CENT', 'Centratama', NULL, NULL, NULL, 84, 1, 3.57143, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(69, 'CINT', 'Chitose', NULL, NULL, NULL, 312, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(70, 'CLEO', 'Sariguna', NULL, NULL, NULL, 238, 1, -4.20168, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(71, 'CLPI', 'Colorpak', NULL, NULL, NULL, 855, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(72, 'CMNP', 'Citra', NULL, NULL, NULL, 1365, 1, 2.5641, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(73, 'CMPP', 'AirAsia', NULL, NULL, NULL, 272, 1, 4.41176, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(74, 'CPIN', 'Charoen', 1, 21, 'Kompas100, Bisnis-27', 3660, 1, -2.18579, 9026880405504, 16698099892224, 56, 61, 16398000128, 'uploads/financial_report/FinancialStatement-2018-I-CPIN.pdf', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(75, 'CSAP', 'Catur', 2, 12, 'Pefindo25', 595, 1, 0, 3633968560000, 1548779164000, 4, 5, 4053052920, 'uploads/financial_report/FinancialStatement-2018-I-CSAP.pdf', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(76, 'CSIS', 'Cahayasakti', NULL, NULL, NULL, 980, 1, -18.3673, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(77, 'CTBN', 'Citra', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(78, 'CTRA', 'Ciputra', 5, 10, 'JII, Kompas100', 940, 1, -0.531915, 16717000474624, 15572600356864, 9.5, 7, 18535700480, 'uploads/financial_report/FinancialStatement-2018-I-CTRA.pdf', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(79, 'CTTH', 'Citatah', NULL, NULL, NULL, 131, 1, 2.29008, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(80, 'DART', 'Duta', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(81, 'DAYA', 'Duta', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(82, 'DEWA', 'Darma', NULL, NULL, NULL, 50, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(83, 'DGIK', 'Nusa', NULL, NULL, NULL, 50, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(84, 'DILD', 'Intiland', NULL, NULL, NULL, 314, 1, -0.636943, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(85, 'DKFT', 'Central', NULL, NULL, NULL, 348, 1, -0.574713, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(86, 'DMAS', 'Puradelta', 5, 10, 'Kompas100', 129, 1, 0.775194, 440169072894, 7004926671808, 6.5, 0.06, 48198111100, 'uploads/financial_report/FinancialStatement-2018-I-DMAS.pdf', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(87, 'DNET', 'Indoritel', NULL, NULL, NULL, 3150, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(88, 'DPNS', 'Duta', NULL, NULL, NULL, 364, 1, -1.64835, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(89, 'DPUM', 'Dua', NULL, NULL, NULL, 260, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(90, 'DSFI', 'Dharma', 7, 30, 'Pefindo25', 94, 1, 0, 232115554324, 163758244840, 0, 1.46, 1857135500, 'uploads/financial_report/FinancialStatement-2018-I-DSFI.pdf', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(91, 'DSSA', 'Dian', NULL, NULL, NULL, 24400, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(92, 'DUTI', 'Duta', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(93, 'DVLA', 'Darya-Varia', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(94, 'DYAN', 'Dyandra', NULL, NULL, NULL, 56, 1, 1.78571, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(95, 'ECII', 'Electronic', NULL, NULL, NULL, 1100, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(96, 'EKAD', 'Ekadharma', NULL, NULL, NULL, 665, 1, 1.50376, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(97, 'ELSA', 'Elnusa', 6, 31, 'Kompas100', 308, 1, 0.649351, 2035035000000, 3118389000000, 5.08, 9.71, 7297440945, 'uploads/financial_report/FinancialStatement-2018-I-ELSA.pdf', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(98, 'ELTY', 'Bakrieland', NULL, NULL, NULL, 50, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(99, 'EMDE', 'Megapolitan', NULL, NULL, NULL, 260, 1, 0.769231, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(100, 'EMTK', 'Elang', NULL, NULL, NULL, 8350, 1, -0.598802, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:19', NULL, b'0'),
(101, 'EPMT', 'Enseval', NULL, NULL, NULL, 1700, 1, -5.88235, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(102, 'ERAA', 'Erajaya', NULL, NULL, NULL, 2410, 1, -2.90456, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(103, 'EXCL', 'XL', 8, 13, 'JII, LQ45, Kompas100, Sri-Kehati', 2450, 1, 1.63265, 35571497959424, 21639500660736, 0, 1, 10688000000, 'uploads/financial_report/FinancialStatement-2018-I-EXCL.pdf', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(104, 'FAST', 'Fast', NULL, NULL, NULL, 1540, 1, 2.5974, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(105, 'FIRE', 'Alfa', NULL, NULL, NULL, 5150, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(106, 'FISH', 'FKS', NULL, NULL, NULL, 3150, 1, -14.2857, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(107, 'FMII', 'Fortune', NULL, NULL, NULL, 675, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(108, 'FORZ', 'Forza', NULL, NULL, NULL, 865, 1, -4.04624, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(109, 'FPNI', 'Lotte', NULL, NULL, NULL, 140, 1, 3.57143, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(110, 'FREN', 'Smartfren', NULL, NULL, NULL, 85, 1, 3.52941, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(111, 'GAMA', 'Gading', NULL, NULL, NULL, 50, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(112, 'GDST', 'Gunawan', NULL, NULL, NULL, 244, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(113, 'GDYR', 'Goodyear', NULL, NULL, NULL, 1855, 1, 2.96496, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(114, 'GEMA', 'Gema', NULL, NULL, NULL, 1300, 1, 0.769231, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(115, 'GEMS', 'Golden', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(116, 'GHON', 'Gihon', NULL, NULL, NULL, 940, 1, 4.25532, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(117, 'GIAA', 'Garuda', NULL, NULL, NULL, 230, 1, -0.869565, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(118, 'GJTL', 'Gajah', 4, 9, 'Kompas100', 625, 1, 1.6, 13375140000000, 5786754000000, 0, 14.86, 3484800000, 'uploads/financial_report/FinancialStatement-2018-I-GJTL.pdf', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(119, 'GMFI', 'Garuda', NULL, NULL, NULL, 260, 1, -0.769231, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(120, 'GMTD', 'Gowa', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(121, 'GPRA', 'Perdana', NULL, NULL, NULL, 81, 1, 1.23457, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(122, 'GTBO', 'Garda', NULL, NULL, NULL, 294, 1, -3.40136, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(123, 'GWSA', 'Greenwood', NULL, NULL, NULL, 130, 1, -4.61538, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(124, 'GZCO', 'Gozco', NULL, NULL, NULL, 57, 1, 3.50877, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(125, 'HADE', 'Himalaya', NULL, NULL, NULL, 50, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(126, 'HERO', 'Hero', NULL, NULL, NULL, 920, 1, 13.0435, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(127, 'HEXA', 'Hexindo', NULL, NULL, NULL, 3310, 1, 0.906344, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(128, 'HITS', 'Humpuss', NULL, NULL, NULL, 705, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(129, 'HOKI', 'Buyung', NULL, NULL, NULL, 725, 1, -2.06897, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(130, 'HOME', 'Hotel', NULL, NULL, NULL, 107, 1, -6.54206, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(131, 'HRTA', 'Hartadinata', NULL, NULL, NULL, 256, 1, 2.34375, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(132, 'HRUM', 'Harum', 6, 6, 'Kompas100', 2530, 1, 0, 813055016960, 5646760017920, 248.58, 67.54000091552734, 2703620096, 'uploads/financial_report/FinancialStatement-2018-I-HRUM.pdf', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(133, 'IATA', 'Indonesia', NULL, NULL, NULL, 50, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(134, 'IBST', 'Inti', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(135, 'ICBP', 'Indofood', 3, 3, 'JII, LQ45, Kompas100, IDX30, Bisnis-27', 8700, 1, -2.29885, 13795499966464, 21607800111104, 162, 104, 11661899776, 'uploads/financial_report/FinancialStatement-2018-I-ICBP.pdf', 'Inactive', '2018-06-23 05:50:20', NULL, b'0'),
(136, 'ICON', 'Island', NULL, NULL, NULL, 94, 1, 1.06383, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(137, 'IDPR', 'Indonesia', NULL, NULL, NULL, 675, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(138, 'IGAR', 'Champion', NULL, NULL, NULL, 400, 1, 0.5, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(139, 'IIKP', 'Inti', NULL, NULL, NULL, 282, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(140, 'IKBI', 'Sumi', NULL, NULL, NULL, 296, 1, 4.05405, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(141, 'IMPC', 'Impack', NULL, NULL, NULL, 960, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(142, 'INAF', 'Indofarma', NULL, NULL, 'Kompas100', 3250, 1, 1.84615, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(143, 'INAI', 'Indal', NULL, NULL, NULL, 550, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(144, 'INCI', 'Intanwijaya', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(145, 'INCO', 'Vale', 6, 8, 'JII, LQ45, Kompas100', 4060, 1, -2.95567, 4566130098176, 25183800786944, 0, 13.788999557495117, 936339008, 'uploads/financial_report/FinancialStatement-2018-I-INCO.pdf', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(146, 'INDF', 'Indofood', 3, 3, 'JII, LQ45, Kompas100, IDX30, Bisnis-27, Sri-Kehati', 6200, 1, -1.6129, 44226200993792, 48731500052480, 237, 135, 8780430336, 'uploads/financial_report/FinancialStatement-2018-I-INDF.pdf', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(147, 'INDR', 'Indo-Rama', 4, 28, NULL, 5500, 1, -18.6364, 7597130252288, 4133610061824, 0, 112.34700012207031, 654352000, 'uploads/financial_report/FinancialStatement-2018-I-INDR.pdf', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(148, 'INDS', 'Indospring', NULL, NULL, NULL, 2110, 1, -1.4218, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(149, 'INDX', 'Tanah', NULL, NULL, NULL, 98, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(150, 'INDY', 'Indika', 8, 15, 'JII, LQ45, Kompas100', 3520, 1, 1.98864, 35239200030720, 16248900419584, 105.605, 154.06700134277344, 5210370048, 'uploads/financial_report/FinancialStatement-2018-I-INDY.pdf', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(151, 'INPP', 'Indonesian', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(152, 'INRU', 'Toba', NULL, NULL, NULL, 835, 1, 1.79641, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(153, 'INTD', 'Inter', NULL, NULL, NULL, 358, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(154, 'INTP', 'Indocement', 1, 1, 'JII, LQ45, Kompas100, IDX30, Bisnis-27', 13800, 1, 0, 3784609890304, 24821700231168, 700, 71.87000274658203, 3681230080, 'uploads/financial_report/FinancialStatement-2018-I-INTP.pdf', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(155, 'IPCM', 'Jasa', NULL, NULL, NULL, 410, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(156, 'IPOL', 'Indopoly', NULL, NULL, NULL, 106, 1, -1.88679, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(157, 'ISAT', 'Indosat', 8, 13, 'Kompas100', 3280, 1, 0.914634, 35314081000000, 13847518000000, 73, -93.06, 5433933500, 'uploads/financial_report/FinancialStatement-2018-I-ISAT.pdf', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(158, 'ISSP', 'Steel', NULL, NULL, NULL, 90, 1, 3.33333, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(159, 'ITMA', 'Sumber', NULL, NULL, NULL, 645, 1, 1.55039, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(160, 'ITMG', 'Indo', 6, 6, 'JII, Kompas100', 24575, 13756, 5.39166, 499535000, 873086000, 0.130097, 0.05, 1129925000, 'uploads/financial_report/FinancialStatement-2018-I-ITMG.pdf', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(161, 'ITTG', 'Leo', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(162, 'JECC', 'Jembo', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(163, 'JGLE', 'Graha', NULL, NULL, NULL, 50, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(164, 'JIHD', 'Jakarta', NULL, NULL, NULL, 460, 1, -8.26087, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(165, 'JKON', 'Jaya', NULL, NULL, NULL, 530, 1, 0.943396, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(166, 'JKSW', 'Jakarta', NULL, NULL, NULL, 74, 1, -2.7027, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:21', NULL, b'0'),
(167, 'JMAS', 'Asuransi', NULL, NULL, NULL, 1050, 1, 4.7619, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(168, 'JPFA', 'Japfa', 1, 21, 'Kompas100, Sri-Kehati', 1645, 1, 0.911854, 11933600186368, 9083110293504, 50, 39, 11401100288, 'uploads/financial_report/FinancialStatement-2018-I-JPFA.pdf', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(169, 'JPRS', 'Jaya', NULL, NULL, NULL, 322, 1, 0.621118, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(170, 'JRPT', 'Jaya', NULL, NULL, NULL, 635, 1, -3.93701, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(171, 'JSPT', 'Jakarta', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(172, 'JTPE', 'Jasuindo', NULL, NULL, NULL, 302, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(173, 'KAEF', 'Kimia', 3, 17, 'Kompas100', 2220, 1, 2.7027, 3885857352236, 2541063584041, 17.66, 6.7, 5554000000, 'uploads/financial_report/FinancialStatement-2018-I-KAEF.pdf', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(174, 'KARW', 'ICTSI', NULL, NULL, NULL, 107, 1, 1.86916, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(175, 'KBLI', 'KMI', 4, 4, 'Pefindo25, Kompas100', 316, 1, -1.89873, 1244049965056, 1815789961216, 8, 9.579999923706055, 4007239936, 'uploads/financial_report/FinancialStatement-2018-I-KBLI.pdf', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(176, 'KBLM', 'Kabelindo', NULL, NULL, NULL, 240, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(177, 'KBLV', 'First', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(178, 'KDSI', 'Kedawung', NULL, NULL, NULL, 1055, 1, 0.473934, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(179, 'KIAS', 'Keramika', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(180, 'KICI', 'Kedaung', NULL, NULL, NULL, 193, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(181, 'KIJA', 'Kawasan', NULL, NULL, NULL, 212, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(182, 'KINO', 'Kino', NULL, NULL, NULL, 1700, 1, 1.17647, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(183, 'KIOS', 'Kioson', NULL, NULL, NULL, 2520, 1, -5.15873, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(184, 'KKGI', 'Resource', NULL, NULL, NULL, 328, 1, 2.43902, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(185, 'KLBF', 'Kalbe', 3, 17, 'JII, LQ45, Kompas100, IDX30, Sri-Kehati', 1250, 1, 0, 2798769930240, 14508000018432, 25, 12.569999694824219, 4687510016, 'uploads/financial_report/FinancialStatement-2018-I-KLBF.pdf', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(186, 'KMTR', 'Kirana', 1, 20, NULL, 350, 1, -1.14286, 2190880014336, 1598769987584, 25.45, 1.8899999856948853, 7682950144, 'uploads/financial_report/FinancialStatement-2018-I-KMTR.pdf', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(187, 'KOBX', 'Kobexindo', NULL, NULL, NULL, 214, 1, -3.73832, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(188, 'KOIN', 'Kokoh', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(189, 'KOPI', 'Mitra', NULL, NULL, NULL, 740, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(190, 'KPIG', 'MNC', NULL, NULL, NULL, 1400, 1, -3.21429, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(191, 'KRAS', 'Krakatau', 1, 27, 'Kompas100', 402, 13756, -0.497512, 2281012000, 1830609000, 0, 0.0003, 19346396900, 'uploads/financial_report/FinancialStatement-2018-I-KRAS.pdf', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(192, 'LAPD', 'Leyand', NULL, NULL, NULL, 50, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(193, 'LCKM', 'LCK', NULL, NULL, NULL, 376, 1, 1.59574, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(194, 'LINK', 'Link', 2, 18, 'Pefindo25, Kompas100', 4350, 1, 1.14943, 1252173000000, 4790498000000, 119.64, 90, 22301934884, 'uploads/financial_report/FinancialStatement-2018-I-LINK.pdf', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(195, 'LION', 'Lion', NULL, NULL, NULL, 605, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(196, 'LMPI', 'Langgeng', NULL, NULL, NULL, 160, 1, -2.5, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:22', NULL, b'0'),
(197, 'LMSH', 'Lionmesh', NULL, NULL, NULL, 675, 1, 2.96296, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(198, 'LPCK', 'Lippo', NULL, NULL, NULL, 1815, 1, 0.275482, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(199, 'LPIN', 'Multi', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(200, 'LPKR', 'Lippo', 5, 10, 'JII, LQ45, Kompas100, IDX30', 366, 1, 0.546448, 27712599097344, 29925199314944, 2.7, 5.829999923706055, 22771900416, 'uploads/financial_report/FinancialStatement-2018-I-LPKR.pdf', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(201, 'LPLI', 'Star', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(202, 'LPPF', 'Matahari', 2, 12, 'JII, LQ45, Pefindo25, Kompas100, IDX30', 8675, 1, -1.44092, 2839560060928, 2574719909888, 457.5, 85, 2917920000, 'uploads/financial_report/FinancialStatement-2018-I-LPPF.pdf', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(203, 'LRNA', 'Eka', NULL, NULL, NULL, 102, 1, 1.96078, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(204, 'LSIP', 'PP', 7, 7, 'Kompas100', 915, 1, -0.546448, 1916970000000, 8325432000000, 45, 17, 6819963965, 'uploads/financial_report/FinancialStatement-2018-I-LSIP.pdf', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(205, 'LTLS', 'Lautan', NULL, NULL, NULL, 675, 1, -1.48148, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(206, 'MAGP', 'Multi', NULL, NULL, NULL, 50, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(207, 'MAMI', 'Mas', 2, 22, 'Kompas100', 68, 1, 0, 275264671687, 636252018144, 0, 0.49, 4193240330, 'uploads/financial_report/FinancialStatement-2018-I-MAMI.pdf', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(208, 'MAPB', 'MAP', NULL, NULL, NULL, 1700, 1, 3.52941, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(209, 'MAPI', 'Mitra', 2, 12, 'Kompas100', 820, 1, 0, 6988283000000, 4400662000000, 0, 212, 1660000000, 'uploads/financial_report/FinancialStatement-2018-I-MAPI.pdf', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(210, 'MARI', 'Mahaka', NULL, NULL, NULL, 2300, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(211, 'MARK', 'Mark', NULL, NULL, NULL, 1505, 1, 0.332226, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(212, 'MASA', 'Multistrada', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(213, 'MBAP', 'Mitrabara', NULL, NULL, NULL, 3420, 1, 0.584795, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(214, 'MBSS', 'Mitrabahtera', NULL, NULL, NULL, 540, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(215, 'MBTO', 'Martina', NULL, NULL, NULL, 140, 1, -1.42857, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(216, 'MCAS', 'M', NULL, NULL, NULL, 2900, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(217, 'MDIA', 'Intermedia', NULL, NULL, NULL, 170, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(218, 'MDKA', 'Merdeka', NULL, NULL, NULL, 2910, 1, 0.343643, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(219, 'MDKI', 'Emdeki', NULL, NULL, NULL, 300, 1, 2, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(220, 'MDLN', 'Modernland', NULL, NULL, NULL, 280, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(221, 'MERK', 'Merck', NULL, NULL, NULL, 6200, 1, -2.01613, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(222, 'META', 'Nusantara', NULL, NULL, NULL, 208, 1, -0.961538, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(223, 'MFMI', 'Multifiling', NULL, NULL, NULL, 625, 1, 11.2, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(224, 'MICE', 'Multi', NULL, NULL, NULL, 346, 1, 1.7341, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(225, 'MIKA', 'Mitra', 2, 26, 'Pefindo25, Kompas100', 1915, 1, 0.261097, 688606019584, 4211440091136, 0, 11, 14550700032, 'uploads/financial_report/FinancialStatement-2018-I-MIKA.pdf', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(226, 'MINA', 'Sanurhasta', NULL, NULL, NULL, 420, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(227, 'MIRA', 'Mitra', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(228, 'MITI', 'Mitra', NULL, NULL, NULL, 83, 1, 1.20482, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(229, 'MKPI', 'Metropolitan', NULL, NULL, NULL, 23600, 1, 0.423729, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(230, 'MLIA', 'Mulia', NULL, NULL, NULL, 720, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(231, 'MLPL', 'Multipolar', 2, 14, 'Kompas100', 103, 1, -1.94175, 15674638000000, 5993423000000, 0, -38, 10064747323, 'uploads/financial_report/FinancialStatement-2018-I-MLPL.pdf', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(232, 'MLPT', 'Multipolar', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(233, 'MMLP', 'Mega', NULL, NULL, NULL, 520, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(234, 'MNCN', 'Media', 2, 14, 'LQ45, Kompas100', 910, 1, 0.549451, 5628470231040, 10025099591680, 15, 21.030000686645508, 14276100096, 'uploads/financial_report/FinancialStatement-2018-I-MNCN.pdf', 'Inactive', '2018-06-23 05:50:23', NULL, b'0'),
(235, 'MPMX', 'Mitra', NULL, NULL, NULL, 990, 1, -1.0101, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(236, 'MPPA', 'Matahari', NULL, NULL, NULL, 228, 1, -4.38596, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(237, 'MRAT', 'Mustika', NULL, NULL, NULL, 191, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(238, 'MTDL', 'Metrodata', NULL, NULL, NULL, 730, 1, 1.36986, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(239, 'MTLA', 'Metropolitan', NULL, NULL, NULL, 368, 1, 2.17391, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(240, 'MTRA', 'Mitra', NULL, NULL, NULL, 394, 1, -2.53807, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(241, 'MTSM', 'Metro', NULL, NULL, NULL, 140, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(242, 'MYOH', 'Samindo', NULL, NULL, NULL, 835, 1, 1.1976, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(243, 'MYOR', 'Mayora', 3, 3, 'Kompas100, Bisnis-27', 2950, 1, -0.338983, 7868959948800, 7828459749376, 27, 21, 22358700032, 'uploads/financial_report/FinancialStatement-2018-I-MYOR.pdf', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(244, 'NASA', 'Ayana', NULL, NULL, NULL, 406, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(245, 'NELY', 'Pelayaran', NULL, NULL, NULL, 110, 1, -1.81818, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(246, 'NIKL', 'Pelat', 1, 27, 'Kompas100', 4020, 13756, 0, 76637354, 41674498, 0, 0.00004, 2523350000, 'uploads/financial_report/FinancialStatement-2018-I-NIKL.pdf', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(247, 'NRCA', 'Nusa', 5, 5, 'Pefindo25', 364, 1, 2.74725, 1164712411299, 1244128994512, 40, 17, 2441914844, 'uploads/financial_report/FinancialStatement-2018-I-NRCA.pdf', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(248, 'OASA', 'Protech', NULL, NULL, NULL, 204, 1, 6.86275, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(249, 'OMRE', 'Indonesia', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(250, 'PALM', 'Provident', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(251, 'PANR', 'Panorama', NULL, NULL, NULL, 476, 1, 0.420168, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(252, 'PBID', 'Panca', NULL, NULL, NULL, 1075, 1, 2.32558, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(253, 'PBRX', 'Pan', NULL, NULL, 'Kompas100', 545, 1, 0.917431, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(254, 'PBSA', 'Paramita', NULL, NULL, NULL, 630, 1, 2.38095, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(255, 'PCAR', 'Prima', NULL, NULL, NULL, 2820, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(256, 'PDES', 'Destinasi', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(257, 'PGAS', 'Perusahaan', 8, 16, 'JII, LQ45, Kompas100, IDX30, Bisnis-27, Sri-Kehati', 1565, 1, 2.55591, 44162401435648, 44981700001792, 31.61, 49.64039993286133, 24241500160, 'uploads/financial_report/FinancialStatement-2018-I-PGAS.pdf', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(258, 'PGLI', 'Pembangunan', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(259, 'PICO', 'Pelangi', NULL, NULL, NULL, 250, 1, 4, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(260, 'PJAA', 'Pembangunan', 2, 22, 'Sri-Kehati', 0, 1, 0, 1941769945088, 2031709978624, 52, 25, 1600000000, 'uploads/financial_report/FinancialStatement-2018-I-PJAA.pdf', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(261, 'PNBS', 'Bank', 9, 24, NULL, 68, 1, 1.47059, 741179981824, 1593620037632, 0, 0.38999998569488525, 20114900992, 'uploads/financial_report/FinancialStatement-2018-I-PNBS.pdf', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(262, 'PNSE', 'Pudjiadi', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(263, 'PORT', 'Nusantara', NULL, NULL, NULL, 600, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(264, 'POWR', 'Cikarang', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(265, 'PPRE', 'PP', NULL, NULL, NULL, 400, 1, 0.5, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(266, 'PPRO', 'PP', 5, 10, 'Kompas100', 133, 1, -0.75188, 8177893961414, 4877201629719, 1.44, 1.62, 61761104914, 'uploads/financial_report/FinancialStatement-2018-I-PPRO.pdf', 'Inactive', '2018-06-23 05:50:24', NULL, b'0'),
(267, 'PRDA', 'Prodia', NULL, NULL, NULL, 2740, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(268, 'PRIM', 'Royal', NULL, NULL, NULL, 1260, 1, 12.3016, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(269, 'PSDN', 'Prasidha', NULL, NULL, NULL, 352, 1, -1.70455, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(270, 'PSKT', 'Red', NULL, NULL, NULL, 50, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(271, 'PSSI', 'Pelita', NULL, NULL, NULL, 146, 1, 5.47945, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(272, 'PTBA', 'Bukit', 6, 6, 'JII, LQ45, Kompas100, Bisnis-27', 3950, 1, -1.26582, 8490059825152, 15130300514304, 318.521, 138, 10540399616, 'uploads/financial_report/FinancialStatement-2018-I-PTBA.pdf', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(273, 'PTIS', 'Indo', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(274, 'PTPP', 'PP', NULL, NULL, 'JII, LQ45, Kompas100, IDX30', 2040, 1, 1.47059, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(275, 'PTRO', 'Petrosea', NULL, NULL, NULL, 1520, 1, -3.28947, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(276, 'PTSN', 'Sat', NULL, NULL, NULL, 202, 1, -10.8911, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(277, 'PTSP', 'Pioneerindo', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(278, 'PUDP', 'Pudjiadi', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(279, 'PWON', 'Pakuwon', 5, 10, 'LQ45, Kompas100, IDX30, Bisnis-27', 560, 1, 2.67857, 10440699543552, 13431300161536, 20, 12, 4649469952, 'uploads/financial_report/FinancialStatement-2018-I-PWON.pdf', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(280, 'PYFA', 'Pyridam', NULL, NULL, NULL, 171, 1, -6.43275, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(281, 'PZZA', 'Sarimelati', NULL, NULL, NULL, 1120, 1, 0.892857, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(282, 'RAJA', 'Rukun', NULL, NULL, NULL, 540, 1, -1.85185, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(283, 'RALS', 'Ramayana', 2, 12, 'Kompas100', 1330, 1, -1.8797, 1341728000000, 3509389000000, 40, 2.18, 6722818900, 'uploads/financial_report/FinancialStatement-2018-I-RALS.pdf', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(284, 'RANC', 'Supra', NULL, NULL, NULL, 338, 1, -6.50888, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(285, 'RBMS', 'Ristia', NULL, NULL, NULL, 100, 1, 4, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(286, 'RICY', 'Ricky', NULL, NULL, NULL, 164, 1, 0.609756, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(287, 'RIGS', 'Rig', NULL, NULL, NULL, 155, 1, -1.29032, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(288, 'RIMO', 'Rimo', NULL, NULL, NULL, 137, 1, 2.18978, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(289, 'RODA', 'Pikko', NULL, NULL, NULL, 340, 1, -6.47059, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(290, 'ROTI', 'Nippon', 3, 3, 'Pefindo25', 960, 1, 1.5625, 1729464563499, 2802863637711, 5.82, 4.7, 11248288888, 'uploads/financial_report/FinancialStatement-2018-I-ROTI.pdf', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(291, 'RUIS', 'Radiant', NULL, NULL, NULL, 240, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(292, 'SAME', 'Sarana', 2, 26, 'Pefindo25', 565, 1, 0.884956, 691838625477, 1063372554328, 1.7, 3.57, 5900000000, 'uploads/financial_report/FinancialStatement-2018-I-SAME.pdf', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(293, 'SCBD', 'Danayasa', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(294, 'SCCO', 'Supreme', NULL, NULL, NULL, 9800, 1, -2.04082, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(295, 'SCMA', 'Surya', 2, 18, 'JII, LQ45, Kompas100, Bisnis-27', 2000, 1, -1.5, 1043680002048, 4761640239104, 35, 24.56999969482422, 14621599744, 'uploads/financial_report/FinancialStatement-2018-I-SCMA.pdf', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(296, 'SDMU', 'Sidomulyo', NULL, NULL, NULL, 130, 1, -14.6154, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(297, 'SDPC', 'Millennium', NULL, NULL, NULL, 91, 1, -1.0989, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(298, 'SGRO', 'Sampoerna', NULL, NULL, NULL, 2350, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(299, 'SHID', 'Hotel', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:25', NULL, b'0'),
(300, 'SIAP', 'Sekawan', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(301, 'SIDO', 'Industri', 3, 17, 'Pefindo25', 800, 1, 0, 267091000000, 3064940000000, 29, 11.36, 14883360900, 'uploads/financial_report/FinancialStatement-2018-I-SIDO.pdf', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(302, 'SILO', 'Siloam', NULL, NULL, NULL, 4530, 1, -4.85651, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(303, 'SIMP', 'Salim', NULL, NULL, NULL, 478, 1, 0.41841, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(304, 'SIPD', 'Sierad', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(305, 'SKBM', 'Sekar', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(306, 'SKLT', 'Sekar', NULL, NULL, NULL, 1200, 1, 12.5, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(307, 'SKYB', 'Skybee', NULL, NULL, NULL, 244, 1, -26.2295, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(308, 'SMBR', 'Semen', 1, 1, 'Kompas100, Bisnis-27', 3320, 1, -0.903614, 1849339936768, 3385851594000, 3.6939, 1, 9900810240, 'uploads/financial_report/FinancialStatement-2018-I-SMBR.pdf', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(309, 'SMCB', 'Holcim', NULL, NULL, NULL, 520, 1, 0.961538, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(310, 'SMDM', 'Suryamas', NULL, NULL, NULL, 123, 1, 7.31707, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(311, 'SMDR', 'Samudera', NULL, NULL, NULL, 330, 1, -4.24242, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(312, 'SMGR', 'Semen', 1, 1, 'JII, LQ45, Kompas100, IDX30, Bisnis-27, Sri-Kehati', 6950, 1, 1.43885, 18827899305984, 29306538825000, 135.83, 69, 5931520000, 'uploads/financial_report/FinancialStatement-2018-I-SMGR.pdf', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(313, 'SMMT', 'Golden', NULL, NULL, NULL, 200, 1, -2, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(314, 'SMRA', 'Summarecon', 5, 10, 'JII, Kompas100', 830, 1, 0.60241, 13384171502000, 6546041376000, 5, 3, 14426781680, 'uploads/financial_report/FinancialStatement-2018-I-SMRA.pdf', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(315, 'SMRU', 'SMR', NULL, NULL, NULL, 436, 1, 1.37615, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(316, 'SMSM', 'Selamat', 4, 9, 'Pefindo25', 1375, 1, 2.18182, 680836000000, 1718029000000, 10, 21, 5758675440, 'uploads/financial_report/FinancialStatement-2018-I-SMSM.pdf', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(317, 'SOCI', 'Soechi', 8, 23, NULL, 164, 1, 14.0244, 3944160000, 4107409920, 0, 2.750999927520752, 7058999808, 'uploads/financial_report/FinancialStatement-2018-I-SOCI.pdf', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(318, 'SONA', 'Sona', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(319, 'SPMA', 'Suparma', NULL, NULL, NULL, 262, 1, 0.763359, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(320, 'SPTO', 'Surya', NULL, NULL, NULL, 1100, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(321, 'SRAJ', 'Sejahteraraya', NULL, NULL, NULL, 198, 1, -1.0101, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(322, 'SRSN', 'Indo', NULL, NULL, NULL, 51, 1, 1.96078, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(323, 'SRTG', 'Saratoga', NULL, NULL, NULL, 3830, 1, 1.56658, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(324, 'SSIA', 'Surya', 5, 5, 'Kompas100', 525, 1, 0.952381, 3361849999360, 3998627597165, 20, -1.8915499448776, 4649469952, 'uploads/financial_report/FinancialStatement-2018-I-SSIA.pdf', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(325, 'STAR', 'Star', NULL, NULL, NULL, 77, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(326, 'SUGI', 'Sugih', NULL, NULL, NULL, 50, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(327, 'TARA', 'Sitara', 5, 10, 'Kompas100', 800, 1, 0, 175950446013, 1044195308911, 0, 0.023507534314204, 10069645750, 'uploads/financial_report/FinancialStatement-2018-I-TARA.pdf', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(328, 'TBLA', 'Tunas', NULL, NULL, NULL, 855, 1, -2.33918, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(329, 'TBMS', 'Tembaga', NULL, NULL, NULL, 1080, 1, 3.7037, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(330, 'TCID', 'Mandom', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:26', NULL, b'0'),
(331, 'TDPM', 'Tridomain', NULL, NULL, NULL, 350, 1, -1.14286, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(332, 'TFCO', 'Tifico', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(333, 'TGKA', 'Tigaraksa', NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(334, 'TGRA', 'Terregra', NULL, NULL, NULL, 585, 1, 0.854701, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(335, 'TINS', 'Timah', 6, 8, 'Kompas100, Sri-Kehati', 800, 1, -1.875, 5365870100480, 6111539000000, 50, 7, 11401100288, 'uploads/financial_report/FinancialStatement-2018-I-TINS.pdf', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(336, 'TIRA', 'Tira', NULL, NULL, NULL, 129, 1, 10.0775, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(337, 'TLKM', 'Telekomunikasi', 8, 13, 'JII, LQ45, Kompas100, IDX30, Bisnis-27, Sri-Kehati', 3860, 1, 0.777202, 86459000000000, 98493000000000, 167.66, 57.88, 99062216600, 'uploads/financial_report/FinancialStatement-2018-I-TLKM.pdf', 'Inactive', '2018-06-23 05:50:27', NULL, b'0');
INSERT INTO `muvti_emiten` (`id`, `code`, `name`, `sector_id`, `subsector_id`, `idx`, `price`, `currency`, `margin`, `liability`, `equity`, `dividen`, `eps`, `volume`, `file`, `status`, `date_created`, `date_updated`, `is_deleted`) VALUES
(338, 'TMPO', 'Tempo', NULL, NULL, NULL, 222, 1, -4.5045, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(339, 'TOBA', 'Toba', NULL, NULL, NULL, 2060, 1, -1.94175, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(340, 'TOPS', 'Totalindo', NULL, NULL, NULL, 4740, 1, 2.53165, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(341, 'TOTL', 'Total', 5, 5, 'Pefindo25', 635, 1, 0.787402, 2158257198000, 1079251572000, 50, 21.49, 3410000000, 'uploads/financial_report/FinancialStatement-2018-I-TOTL.pdf', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(342, 'TOTO', 'Surya', NULL, NULL, NULL, 348, 1, -1.72414, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(343, 'TPIA', 'Chandra', 1, 19, 'JII, LQ45, Kompas100, Bisnis-27', 5250, 13576, 0, 1224773000, 1736622000, 0.00292, 0.0041, 17849999360, 'uploads/financial_report/FinancialStatement-2018-I-TPIA.pdf', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(344, 'TPMA', 'Trans', NULL, NULL, NULL, 180, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(345, 'TRIL', 'Triwira', NULL, NULL, NULL, 51, 1, -3.92157, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(346, 'TRIS', 'Trisula', NULL, NULL, NULL, 300, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(347, 'TRST', 'Trias', NULL, NULL, NULL, 400, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(348, 'TRUK', 'Guna', NULL, NULL, NULL, 810, 1, 16.6667, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(349, 'TSPC', 'Tempo', NULL, NULL, NULL, 1520, 1, -0.328947, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(350, 'TURI', 'Tunas', NULL, NULL, NULL, 1260, 1, -0.396825, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(351, 'ULTJ', 'Ultra', NULL, NULL, NULL, 1230, 1, -4.87805, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(352, 'UNIC', 'Unggul', NULL, NULL, NULL, 3300, 1, -2.72727, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(353, 'UNIT', 'Nusantara', NULL, NULL, NULL, 324, 1, -4.32099, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(354, 'UNTR', 'United', 2, 2, 'JII, LQ45, Kompas100, IDX30, Bisnis-27, Sri-Kehati', 33575, 1, 0.967982, 33665957000000, 48429641000000, 611, 678, 3730139904, 'uploads/financial_report/FinancialStatement-2018-I-UNTR.pdf', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(355, 'UNVR', 'Unilever', 2, 2, 'JII, LQ45, Kompas100, IDX30, Sri-Kehati', 45750, 1, -1.0929, 13229294000000, 7012519000000, 505, 241, 7630000000, 'uploads/financial_report/FinancialStatement-2018-I-UNVR.pdf', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(356, 'VIVA', 'Visi', NULL, NULL, NULL, 190, 1, -6.31579, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(357, 'VOKS', 'Voksel', NULL, NULL, NULL, 140, 1, -2.85714, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(358, 'WAPO', 'Wahana', NULL, NULL, NULL, 90, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(359, 'WEGE', 'Wijaya', NULL, NULL, NULL, 196, 1, 1.02041, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(360, 'WEHA', 'WEHA', 8, 23, 'Pefindo25', 140, 1, 3.57143, 141899528790, 146573562786, 2.73, 2.2, 886811914, 'uploads/financial_report/FinancialStatement-2018-I-WEHA.pdf', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(361, 'WICO', 'Wicaksana', NULL, NULL, NULL, 490, 1, -2.04082, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(362, 'WIKA', 'Wijaya', 5, 5, 'JII, LQ45, Kompas100, Sri-Kehati', 1295, 1, 0.772201, 35439801008128, 12804732394, 26.8201, 19.10000038147, 8963930112, 'uploads/financial_report/FinancialStatement-2018-I-WIKA.pdf', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(363, 'WINS', 'Wintermar', NULL, NULL, NULL, 294, 1, 0, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(364, 'WOOD', 'Integra', NULL, NULL, NULL, 496, 1, -3.83065, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:27', NULL, b'0'),
(365, 'WSBP', 'Waskita', 1, 1, 'JII, LQ45, Kompas100', 362, 1, 1.65746, 6752839925760, 7827535091910, 30.6025, 19.73, 26361200640, 'uploads/financial_report/FinancialStatement-2018-I-WSBP.pdf', 'Inactive', '2018-06-23 05:50:28', NULL, b'0'),
(366, 'WSKT', 'Waskita', 5, 5, 'JII, LQ45, Kompas100, IDX30, Sri-Kehati', 1780, 1, -0.280899, 86682195984384, 15520943026654, 57.194, 112.29, 13573799936, 'uploads/financial_report/FinancialStatement-2018-I-WSKT.pdf', 'Inactive', '2018-06-23 05:50:28', NULL, b'0'),
(367, 'WTON', 'Wijaya', 1, 1, 'Kompas100, Sri-Kehati', 366, 1, -5.46448, 4411709980672, 2632475574128, 12.13, 6.61, 8338089984, 'uploads/financial_report/FinancialStatement-2018-I-WTON.pdf', 'Inactive', '2018-06-23 05:50:28', NULL, b'0'),
(368, 'ZINC', 'Kapuas', NULL, NULL, NULL, 1650, 1, -1.21212, 0, 0, 0, 0, 0, '', 'Inactive', '2018-06-23 05:50:28', NULL, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `muvti_fundamental`
--

DROP TABLE IF EXISTS `muvti_fundamental`;
CREATE TABLE IF NOT EXISTS `muvti_fundamental` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` char(4) NOT NULL,
  `per` float NOT NULL DEFAULT '0',
  `pbv` float DEFAULT '0',
  `roe` float DEFAULT '0',
  `dy` float DEFAULT '0',
  `der` float DEFAULT '0',
  `status` varchar(10) NOT NULL DEFAULT 'Inactive',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL,
  `is_deleted` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`),
  KEY `fk_emiten_code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=512 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `muvti_fundamental`
--

TRUNCATE TABLE `muvti_fundamental`;
--
-- Dumping data for table `muvti_fundamental`
--

INSERT INTO `muvti_fundamental` (`id`, `code`, `per`, `pbv`, `roe`, `dy`, `der`, `status`, `date_created`, `date_updated`, `is_deleted`) VALUES
(1, 'AALI', 14.586, 1.11723, 1.9149, 2.9884, 0.345204, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(2, 'ABBA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(3, 'ACES', 25.2041, 5.69105, 5.64497, 1.84696, 0.255378, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(4, 'ACST', 11.6071, 1.25551, 2.70418, 2.23077, 3.28275, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(5, 'ADES', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(6, 'ADHI', 19.1326, 45.6115, 59.5991, 1.8381, 3.59226, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(7, 'ADMG', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(8, 'ADRO', 3.24404, 1.16437, 8.97313, 3.61418, 0.731269, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(9, 'AGII', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(10, 'AIMS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(11, 'AKPI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(12, 'AKRA', 21, 1.98003, 2.35718, 2.38095, 1.05423, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(13, 'AKSI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(14, 'ALDO', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(15, 'ALKA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(16, 'ALMI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(17, 'AMFG', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(18, 'AMIN', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(19, 'ANJT', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(20, 'ANTM', 19.0802, 1.04732, 1.37225, 0.255128, 0.667262, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(21, 'APII', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(22, 'APLI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(23, 'APLN', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(24, 'ARII', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(25, 'ARNA', 16.108, 2.63237, 4.0855, 3.46821, 0.714711, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(26, 'ARTA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(27, 'ARTI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(28, 'ASGR', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(29, 'ASII', 12.8049, 1.97752, 3.86087, 2.06349, 1.10985, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(30, 'ASRI', 5.01969, 0.686036, 3.41673, 0, 1.3829, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(31, 'ATIC', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(32, 'AUTO', 11.7083, 0.620303, 1.32449, 2.34875, 0.400521, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(33, 'BALI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(34, 'BAPA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(35, 'BATA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(36, 'BAYU', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(37, 'BCIP', 16.875, 0.325819, 0.482694, 0, 1.43524, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(38, 'BELL', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(39, 'BEST', 5.93395, 0.000000000563303, 0.00000000237322, 4.34783, 0.479506, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(40, 'BIPP', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(41, 'BIRD', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(42, 'BISI', 38.6364, 2.28439, 1.47813, 5.88235, 0.157375, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(43, 'BKDP', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(44, 'BKSL', 11.0619, 0.595588, 1.34603, 0, 0.55642, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(45, 'BLTZ', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(46, 'BMTR', 21.371, 0.495028, 0.579089, 0, 0.992291, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(47, 'BOGA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(48, 'BOLT', 19.6429, 0.302921, 0.385536, 3.63636, 0.712888, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(49, 'BOSS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(50, 'BRAM', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(51, 'BRIS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(52, 'BRMS', -0.0143119, 0.348249, -608.319, 0, 0.374156, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(53, 'BRNA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(54, 'BRPT', 13.6304, 0.846608, 1.55279, 1.31021, 0.734755, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(55, 'BSDE', 16.8951, 0.927002, 1.3717, 0, 0.636401, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(56, 'BSSR', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(57, 'BTEK', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(58, 'BTON', 5.12712, 1.06829, 5.20901, 0, 0.2089, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(59, 'BTPS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(60, 'BUDI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(61, 'BUKK', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(62, 'BULL', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(63, 'BYAN', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(64, 'CAMP', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(65, 'CANI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(66, 'CASS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(67, 'CEKA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(68, 'CENT', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(69, 'CINT', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(70, 'CLEO', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(71, 'CLPI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(72, 'CMNP', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(73, 'CMPP', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(74, 'CPIN', 15, 3.59422, 5.99037, 1.53005, 0.540593, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(75, 'CSAP', 29.75, 1.55708, 1.30847, 0.672269, 2.34634, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(76, 'CSIS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(77, 'CTBN', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(78, 'CTRA', 33.5714, 1.11886, 0.833194, 1.01064, 1.07349, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(79, 'CTTH', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(80, 'DART', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(81, 'DAYA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(82, 'DEWA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(83, 'DGIK', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(84, 'DILD', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(85, 'DKFT', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(86, 'DMAS', 537.5, 0.887598, 0.0412836, 5.03876, 0.0628371, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(87, 'DNET', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(88, 'DPNS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(89, 'DPUM', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(90, 'DSFI', 16.0959, 1.06603, 1.65574, 0, 1.41743, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(91, 'DSSA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(92, 'DUTI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(93, 'DVLA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(94, 'DYAN', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(95, 'ECII', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(96, 'EKAD', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(97, 'ELSA', 7.92997, 0.720761, 2.27227, 1.64935, 0.652592, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(98, 'ELTY', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(99, 'EMDE', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(100, 'EMTK', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(101, 'EPMT', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(102, 'ERAA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(103, 'EXCL', 612.5, 1.21008, 0.0493912, 0, 1.64382, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(104, 'FAST', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(105, 'FIRE', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(106, 'FISH', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(107, 'FMII', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(108, 'FORZ', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(109, 'FPNI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(110, 'FREN', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(111, 'GAMA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(112, 'GDST', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(113, 'GDYR', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(114, 'GEMA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(115, 'GEMS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(116, 'GHON', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(117, 'GIAA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(118, 'GJTL', 10.5148, 0.376377, 0.894873, 0, 2.31134, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(119, 'GMFI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(120, 'GMTD', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(121, 'GPRA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(122, 'GTBO', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(123, 'GWSA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(124, 'GZCO', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(125, 'HADE', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(126, 'HERO', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(127, 'HEXA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(128, 'HITS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(129, 'HOKI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(130, 'HOME', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(131, 'HRTA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(132, 'HRUM', 9.36482, 1.21134, 3.23376, 9.8253, 0.143986, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(133, 'IATA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(134, 'IBST', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(135, 'ICBP', 20.9135, 4.69546, 5.61296, 1.86207, 0.63845, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(136, 'ICON', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(137, 'IDPR', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(138, 'IGAR', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(139, 'IIKP', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(140, 'IKBI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(141, 'IMPC', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(142, 'INAF', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(143, 'INAI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(144, 'INCI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(145, 'INCO', 73.6094, 0.150952, 0.0512678, 0, 0.181312, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(146, 'INDF', 11.4815, 1.11711, 2.43243, 3.82258, 0.907549, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(147, 'INDR', 12.2389, 0.870652, 1.77846, 0, 1.83789, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(148, 'INDS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(149, 'INDX', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(150, 'INDY', 5.7118, 1.12872, 4.94031, 3.00014, 2.16871, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(151, 'INPP', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(152, 'INRU', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(153, 'INTD', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(154, 'INTP', 48.0033, 2.04664, 1.06588, 5.07246, 0.152472, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(155, 'IPCM', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(156, 'IPOL', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(157, 'ISAT', -8.81152, 1.28711, -3.65179, 2.22561, 2.55021, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(158, 'ISSP', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(159, 'ITMA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(160, 'ITMG', 8.93247, 2.31203, 6.47087, 7.28226, 0.572149, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(161, 'ITTG', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(162, 'JECC', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(163, 'JGLE', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(164, 'JIHD', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(165, 'JKON', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(166, 'JKSW', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(167, 'JMAS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(168, 'JPFA', 10.5449, 2.0648, 4.89527, 3.03951, 1.31382, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(169, 'JPRS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(170, 'JRPT', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(171, 'JSPT', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(172, 'JTPE', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(173, 'KAEF', 82.8358, 4.85225, 1.46442, 0.795496, 1.52922, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(174, 'KARW', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(175, 'KBLI', 8.24635, 0.697376, 2.1142, 2.53165, 0.685129, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(176, 'KBLM', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(177, 'KBLV', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(178, 'KDSI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(179, 'KIAS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(180, 'KICI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(181, 'KIJA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(182, 'KINO', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(183, 'KIOS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(184, 'KKGI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(185, 'KLBF', 24.8608, 0.403873, 0.406135, 2, 0.192912, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(186, 'KMTR', 46.2963, 1.68194, 0.908247, 7.27143, 1.37035, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(187, 'KOBX', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(188, 'KOIN', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(189, 'KOPI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(190, 'KPIG', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(191, 'KRAS', 24.353, 0.308843, 0.317049, 0, 1.24604, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(192, 'LAPD', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(193, 'LCKM', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(194, 'LINK', 12.0833, 20.2512, 41.8991, 2.75034, 0.261387, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(195, 'LION', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(196, 'LMPI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(197, 'LMSH', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(198, 'LPCK', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(199, 'LPIN', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(200, 'LPKR', 15.6947, 0.278512, 0.44364, 0.737705, 0.926062, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(201, 'LPLI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(202, 'LPPF', 25.5147, 9.83134, 9.63302, 5.27378, 1.10286, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(203, 'LRNA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(204, 'LSIP', 13.4559, 0.749543, 1.39259, 4.91803, 0.230255, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(205, 'LTLS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(206, 'MAGP', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(207, 'MAMI', 34.6939, 0.448156, 0.322936, 0, 0.432635, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(208, 'MAPB', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(209, 'MAPI', 0.966981, 0.309317, 7.99698, 0, 1.58801, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(210, 'MARI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(211, 'MARK', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(212, 'MASA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(213, 'MBAP', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(214, 'MBSS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(215, 'MBTO', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(216, 'MCAS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(217, 'MDIA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(218, 'MDKA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(219, 'MDKI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(220, 'MDLN', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(221, 'MERK', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(222, 'META', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(223, 'MFMI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(224, 'MICE', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(225, 'MIKA', 43.5227, 6.6164, 3.80055, 0, 0.163508, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(226, 'MINA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(227, 'MIRA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(228, 'MITI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(229, 'MKPI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(230, 'MLIA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(231, 'MLPL', -0.677632, 0.172968, -6.38133, 0, 2.61531, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(232, 'MLPT', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(233, 'MMLP', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(234, 'MNCN', 10.8179, 1.29587, 2.99475, 1.64835, 0.561438, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(235, 'MPMX', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(236, 'MPPA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(237, 'MRAT', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(238, 'MTDL', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(239, 'MTLA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(240, 'MTRA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(241, 'MTSM', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(242, 'MYOH', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(243, 'MYOR', 35.119, 8.42543, 5.99777, 0.915254, 1.00517, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(244, 'NASA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(245, 'NELY', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(246, 'NIKL', 1826.48, 17.6946, 0.242196, 0, 1.83895, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(247, 'NRCA', 5.35294, 0.714441, 3.33668, 10.989, 0.936167, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(248, 'OASA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(249, 'OMRE', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(250, 'PALM', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(251, 'PANR', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(252, 'PBID', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(253, 'PBRX', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(254, 'PBSA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(255, 'PCAR', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(256, 'PDES', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(257, 'PGAS', 7.88169, 0.843408, 2.67522, 2.01981, 0.981786, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(258, 'PGLI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(259, 'PICO', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(260, 'PJAA', 0, 0, 1.96878, 0, 0.955732, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(261, 'PNBS', 43.5897, 0.858306, 0.492264, 0, 0.465092, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(262, 'PNSE', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(263, 'PORT', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(264, 'POWR', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(265, 'PPRE', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(266, 'PPRO', 20.5247, 1.68421, 2.05144, 1.08271, 1.67676, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(267, 'PRDA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(268, 'PRIM', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(269, 'PSDN', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(270, 'PSKT', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(271, 'PSSI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(272, 'PTBA', 7.1558, 2.75173, 9.61366, 8.06382, 0.56113, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(273, 'PTIS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(274, 'PTPP', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(275, 'PTRO', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(276, 'PTSN', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(277, 'PTSP', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(278, 'PUDP', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(279, 'PWON', 11.6667, 0.193853, 0.4154, 3.57143, 0.777341, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(280, 'PYFA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(281, 'PZZA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(282, 'RAJA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(283, 'RALS', 152.523, 2.54784, 0.417615, 3.00752, 0.382325, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(284, 'RANC', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(285, 'RBMS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(286, 'RICY', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(287, 'RIGS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(288, 'RIMO', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(289, 'RODA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(290, 'ROTI', 51.0638, 3.85262, 1.88618, 0.60625, 0.617035, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(291, 'RUIS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(292, 'SAME', 39.5658, 3.13484, 1.98077, 0.300885, 0.650608, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(293, 'SCBD', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(294, 'SCCO', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(295, 'SCMA', 20.35, 6.14141, 7.54473, 1.75, 0.219185, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(296, 'SDMU', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(297, 'SDPC', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(298, 'SGRO', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(299, 'SHID', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(300, 'SIAP', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(301, 'SIDO', 17.6056, 3.8848, 5.51642, 3.625, 0.087144, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(302, 'SILO', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(303, 'SIMP', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(304, 'SIPD', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(305, 'SKBM', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(306, 'SKLT', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(307, 'SKYB', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(308, 'SMBR', 830, 9.70825, 0.292417, 0.111262, 0.546196, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(309, 'SMCB', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(310, 'SMDM', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(311, 'SMDR', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(312, 'SMGR', 25.1812, 1.40665, 1.39653, 1.95439, 0.642447, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(313, 'SMMT', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(314, 'SMRA', 69.1667, 1.82923, 0.661168, 0.60241, 2.04462, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(315, 'SMRU', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(316, 'SMSM', 16.369, 4.60887, 7.03901, 0.727273, 0.396289, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(317, 'SOCI', 14.9037, 281.851, 472.787, 0, 0.960255, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(318, 'SONA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(319, 'SPMA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(320, 'SPTO', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(321, 'SRAJ', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(322, 'SRSN', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(323, 'SRTG', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(324, 'SSIA', -69.3875, 0.610452, -0.219943, 3.80952, 0.840751, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(325, 'STAR', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(326, 'SUGI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(327, 'TARA', 8507.91, 7.71476, 0.0226694, 0, 0.168503, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(328, 'TBLA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(329, 'TBMS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(330, 'TCID', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(331, 'TDPM', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(332, 'TFCO', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(333, 'TGKA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(334, 'TGRA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(335, 'TINS', 28.5714, 1.4924, 1.30585, 6.25, 0.87799, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(336, 'TIRA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(337, 'TLKM', 16.6724, 3.88231, 5.82145, 4.34352, 0.877819, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(338, 'TMPO', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(339, 'TOBA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(340, 'TOPS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(341, 'TOTL', 7.38716, 2.00634, 6.78997, 7.87402, 1.99977, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(342, 'TOTO', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(343, 'TPIA', 23.58, 3.97485, 4.21422, 0.755084, 0.705262, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(344, 'TPMA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(345, 'TRIL', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(346, 'TRIS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(347, 'TRST', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(348, 'TRUK', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(349, 'TSPC', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(350, 'TURI', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(351, 'ULTJ', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(352, 'UNIC', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(353, 'UNIT', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(354, 'UNTR', 12.3802, 2.58601, 5.22208, 1.81981, 0.695152, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(355, 'UNVR', 47.4585, 49.7785, 26.2221, 1.10383, 1.88653, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(356, 'VIVA', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(357, 'VOKS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(358, 'WAPO', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(359, 'WEGE', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(360, 'WEHA', 15.9091, 0.84704, 1.33106, 1.95, 0.968111, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(361, 'WICO', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(362, 'WIKA', 16.9503, 906.562, 1337.09, 2.07105, 2767.71, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(363, 'WINS', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(364, 'WOOD', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(365, 'WSBP', 4.58692, 1.21913, 6.64458, 8.45373, 0.862703, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(366, 'WSKT', 3.96295, 1.55669, 9.82029, 3.21315, 5.58485, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(367, 'WTON', 13.8427, 1.15927, 2.09365, 3.31421, 1.67588, 'Inactive', '2018-07-08 14:58:04', NULL, b'0'),
(368, 'ZINC', 0, 0, 0, 0, 0, 'Inactive', '2018-07-08 14:58:04', NULL, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `muvti_menu`
--

DROP TABLE IF EXISTS `muvti_menu`;
CREATE TABLE IF NOT EXISTS `muvti_menu` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `menu_id` tinyint(4) NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL,
  `is_deleted` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `muvti_menu`
--

TRUNCATE TABLE `muvti_menu`;
-- --------------------------------------------------------

--
-- Table structure for table `muvti_post`
--

DROP TABLE IF EXISTS `muvti_post`;
CREATE TABLE IF NOT EXISTS `muvti_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` tinyint(4) NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `author` varchar(200) DEFAULT '',
  `youtube` varchar(500) DEFAULT '',
  `file` varchar(200) DEFAULT '',
  `image` varchar(500) DEFAULT '',
  `date` varchar(200) DEFAULT '',
  `status` varchar(10) NOT NULL DEFAULT 'Inactive',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL,
  `is_deleted` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `muvti_post`
--

TRUNCATE TABLE `muvti_post`;
-- --------------------------------------------------------

--
-- Table structure for table `muvti_role`
--

DROP TABLE IF EXISTS `muvti_role`;
CREATE TABLE IF NOT EXISTS `muvti_role` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL,
  `is_deleted` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `muvti_role`
--

TRUNCATE TABLE `muvti_role`;
--
-- Dumping data for table `muvti_role`
--

INSERT INTO `muvti_role` (`id`, `name`, `date_created`, `date_updated`, `is_deleted`) VALUES
(1, 'Super Admin', '2018-06-11 21:31:35', NULL, b'0'),
(2, 'Admin', '2018-06-11 21:31:35', NULL, b'0'),
(3, 'Guest', '2018-06-11 21:31:35', NULL, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `muvti_sector`
--

DROP TABLE IF EXISTS `muvti_sector`;
CREATE TABLE IF NOT EXISTS `muvti_sector` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL,
  `is_deleted` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `muvti_sector`
--

TRUNCATE TABLE `muvti_sector`;
--
-- Dumping data for table `muvti_sector`
--

INSERT INTO `muvti_sector` (`id`, `name`, `date_created`, `date_updated`, `is_deleted`) VALUES
(1, 'Basic Industry And Chemicals', '2018-06-21 18:43:43', NULL, b'0'),
(2, 'Trade, Services & Investment', '2018-06-22 15:06:25', NULL, b'0'),
(3, 'Consumer Goods Industry', '2018-06-23 14:36:50', NULL, b'0'),
(4, 'Miscellaneous Industry', '2018-06-23 14:49:01', NULL, b'0'),
(5, 'Property, Real Estate And Building Construction', '2018-06-23 16:14:06', NULL, b'0'),
(6, 'Mining', '2018-06-23 16:28:06', NULL, b'0'),
(7, 'Agriculture', '2018-06-23 16:36:24', NULL, b'0'),
(8, 'Infrastructure, Utilities And Transportation', '2018-06-24 23:35:36', NULL, b'0'),
(9, 'Finance', '2018-07-01 09:12:03', NULL, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `muvti_subsector`
--

DROP TABLE IF EXISTS `muvti_subsector`;
CREATE TABLE IF NOT EXISTS `muvti_subsector` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `sector_id` tinyint(4) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL,
  `is_deleted` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `fk_sector_id` (`sector_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `muvti_subsector`
--

TRUNCATE TABLE `muvti_subsector`;
--
-- Dumping data for table `muvti_subsector`
--

INSERT INTO `muvti_subsector` (`id`, `name`, `sector_id`, `date_created`, `date_updated`, `is_deleted`) VALUES
(1, 'Cement', 1, '2018-06-22 13:12:19', NULL, b'0'),
(2, 'Wholesale (Durable & Non-Durable Goods)', 2, '2018-06-22 15:06:49', NULL, b'0'),
(3, 'Food And Beverages', 3, '2018-06-23 14:37:03', NULL, b'0'),
(4, 'Cable', 4, '2018-06-23 14:49:32', NULL, b'0'),
(5, 'Building Construction', 5, '2018-06-23 16:14:18', NULL, b'0'),
(6, 'Coal Mining', 6, '2018-06-23 16:28:28', NULL, b'0'),
(7, 'Plantation', 7, '2018-06-23 16:36:41', NULL, b'0'),
(8, 'Metal And Mineral Mining', 6, '2018-06-23 18:49:54', NULL, b'0'),
(9, 'Automotive And Components', 4, '2018-06-23 18:56:09', NULL, b'0'),
(10, 'Property And Real Estate', 5, '2018-06-23 19:06:47', NULL, b'0'),
(11, 'Ceramics, Glass, Porcelain', 1, '2018-06-23 19:27:10', NULL, b'0'),
(12, 'Retail Trade', 2, '2018-06-23 19:39:59', NULL, b'0'),
(13, 'Telecommunication', 8, '2018-06-24 23:35:46', NULL, b'0'),
(14, 'Investment Company', 2, '2018-06-24 23:56:33', NULL, b'0'),
(15, 'Non Building Construction', 8, '2018-06-26 18:01:10', NULL, b'0'),
(16, 'Energy', 8, '2018-06-27 03:42:34', NULL, b'0'),
(17, 'Pharmaceuticals', 3, '2018-06-27 05:49:27', NULL, b'0'),
(18, 'Advertising, Printing And Media', 2, '2018-06-27 12:21:25', NULL, b'0'),
(19, 'Chemicals', 1, '2018-06-28 16:53:36', NULL, b'0'),
(20, 'Others - Basic Industry And Chemicals', 1, '2018-06-28 17:56:53', NULL, b'0'),
(21, 'Animal Feed', 1, '2018-06-29 01:42:40', NULL, b'0'),
(22, 'Tourism, Restaurant And Hotel', 2, '2018-06-30 13:55:09', NULL, b'0'),
(23, 'Transportation', 8, '2018-07-01 09:04:57', NULL, b'0'),
(24, 'Bank ', 9, '2018-07-01 09:12:18', NULL, b'0'),
(26, ' Healthcare', 2, '2018-07-01 11:59:02', NULL, b'0'),
(27, 'Metal And Allied Products', 1, '2018-07-01 15:04:24', NULL, b'0'),
(28, ' Textile, Garment', 4, '2018-07-02 18:11:44', NULL, b'0'),
(29, 'Crops', 7, '2018-07-07 10:22:20', NULL, b'0'),
(30, 'Fishery', 7, '2018-07-08 03:20:52', NULL, b'0'),
(31, 'Crude Petroleum & Natural Gas Production', 6, '2018-07-08 03:24:53', NULL, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `muvti_user`
--

DROP TABLE IF EXISTS `muvti_user`;
CREATE TABLE IF NOT EXISTS `muvti_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `role_id` tinyint(4) NOT NULL,
  `role_name` varchar(20) NOT NULL,
  `nik` varchar(100) DEFAULT '',
  `email` varchar(200) DEFAULT '',
  `city` varchar(100) DEFAULT '',
  `province` varchar(100) DEFAULT '',
  `mobile_number` varchar(100) DEFAULT '',
  `password_hash` varchar(200) DEFAULT '',
  `password_reset_token` varchar(200) DEFAULT '',
  `auth_key` varchar(200) DEFAULT '',
  `created_at` int(11) DEFAULT '0',
  `updated_at` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '0',
  `date_updated` datetime DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '0',
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `muvti_user`
--

TRUNCATE TABLE `muvti_user`;
--
-- Dumping data for table `muvti_user`
--

INSERT INTO `muvti_user` (`id`, `username`, `role_id`, `role_name`, `nik`, `email`, `city`, `province`, `mobile_number`, `password_hash`, `password_reset_token`, `auth_key`, `created_at`, `updated_at`, `status`, `date_updated`, `date_created`, `is_active`, `is_deleted`) VALUES
(1, 'Superadmin', 1, 'Super Admin', '', 'sekretariat@iaib-online.com', '', '', '', '$2y$13$PPMiTQ2tE/.dgnjuoEwtt.1ZCfeP2XOfcDLJ90ed1i2Gxuo5rd/Ty', '', '', 0, 0, 0, NULL, '2018-06-11 21:31:37', 0, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `muvti_emiten`
--
ALTER TABLE `muvti_emiten`
  ADD CONSTRAINT `fk_sector_id2` FOREIGN KEY (`sector_id`) REFERENCES `muvti_sector` (`id`),
  ADD CONSTRAINT `fk_subsector_id` FOREIGN KEY (`subsector_id`) REFERENCES `muvti_subsector` (`id`);

--
-- Constraints for table `muvti_fundamental`
--
ALTER TABLE `muvti_fundamental`
  ADD CONSTRAINT `fk_emiten_code` FOREIGN KEY (`code`) REFERENCES `muvti_emiten` (`code`);

--
-- Constraints for table `muvti_subsector`
--
ALTER TABLE `muvti_subsector`
  ADD CONSTRAINT `fk_sector_id` FOREIGN KEY (`sector_id`) REFERENCES `muvti_sector` (`id`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
