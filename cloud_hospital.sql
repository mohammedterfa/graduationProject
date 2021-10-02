-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 02, 2021 at 02:43 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloud_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `phone` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`, `email`, `created_time`, `phone`) VALUES
(1, 'mdterfa', '123', 'mohammed Terfa', 'mohammeterfa@gmail.com', '2020-12-13 14:34:56', 928398949),
(2, 'mrjo', '123', 'mojahid mohammed ', 'jojo@gmail.com', '2021-07-24 08:18:07', 912356879);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

DROP TABLE IF EXISTS `hospital`;
CREATE TABLE IF NOT EXISTS `hospital` (
  `hospitalname` varchar(100) NOT NULL,
  `hospitalid` int(10) NOT NULL,
  `state` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`hospitalid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospitalname`, `hospitalid`, `state`, `address`, `phone`, `username`, `password`) VALUES
('مستشفى الصالحة التخصصي', 4, 'كسلا', 'ولاية البحر الاحمر - كسلا جنوب محطة دقسو', '928765787', 'salha', '123'),
('مستشفى الأمل', 44343, 'كسلا', 'فقاابباالبلالبيلا', '3452352', 'alamal', '123'),
('تعاعاه', 3535, 'الجزيرة', 'هعاعها', '98789', 'kj', '123'),
('مستشفى ابوبكر التعليمي', 56, 'مصر', 'القاهره شارع محمد نجيب', '928398949', 'abk', '123');

-- --------------------------------------------------------

--
-- Table structure for table `hospitaltransformation`
--

DROP TABLE IF EXISTS `hospitaltransformation`;
CREATE TABLE IF NOT EXISTS `hospitaltransformation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patientid` int(11) NOT NULL,
  `fromhospitalid` int(11) NOT NULL,
  `tohospitalid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospitaltransformation`
--

INSERT INTO `hospitaltransformation` (`id`, `patientid`, `fromhospitalid`, `tohospitalid`, `date`) VALUES
(1, 456, 56, 44343, '2021-09-30 17:15:14'),
(2, 23423, 56, 44343, '2021-09-30 17:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `id` int(11) NOT NULL,
  `gender` varchar(5) CHARACTER SET utf8 NOT NULL,
  `nationality` varchar(10) CHARACTER SET utf8 NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `birthdate` date NOT NULL,
  `bloodtype` varchar(5) CHARACTER SET utf8 NOT NULL,
  `disease` varchar(100) CHARACTER SET utf8 NOT NULL,
  `medicine` varchar(100) CHARACTER SET utf8 NOT NULL,
  `allergy` varchar(100) CHARACTER SET utf8 NOT NULL,
  `labtest` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `anotherphone` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`name`, `id`, `gender`, `nationality`, `address`, `birthdate`, `bloodtype`, `disease`, `medicine`, `allergy`, `labtest`, `phone`, `anotherphone`) VALUES
('vrvrvrvrv', 2323, 'ذكر', 'اردني', 'f3f3f3f', '2021-09-30', '-A', 'f3f3f', '3ffd', 'fef4g', 'NeedlemanWunsch.pdf', '43434', '34343'),
('fefefef', 23423, 'أنثى', 'سعودي', 'fefefe', '2021-09-14', '-B', 'fefef', 'fefef', 'fefef', 'الاشعارات.jpg', '343543', '453534'),
('قلقلقل', 42, 'ذكر', 'إماراتي', 'بثبثبثبثبثبثب', '2021-10-05', '+O', 'بثبث', 'بثبثب', 'بثبثب', 'الاسعار الجديدة.pdf', '23244', '23232'),
('ؤلقيليير', 23285656, 'ذكر', 'اردني', 'ؤسؤسؤؤؤثرؤر', '2021-10-06', '-AB', 'ؤصؤصؤصؤ', 'ؤصؤصؤص', 'قثلفقلقف', '1lect123Cloud Computing Notes.pdf', '242424', '424242'),
('محمد مبارك الامين ترفه', 456, 'ذكر', 'مصري', 'جنب شارع عبيد ختم', '2021-10-06', '-B', 'fefef', 'fefef', 'الكبسولات', 'ampp_sw_presentation (1).pdf', '3452352', '34343'),
('mojahid mohammed ', 4, 'ذكر', 'سوداني', 'الخرطوم', '1998-12-02', '+AB', 'suka', 'bfdiw209', 'vgg545', 'nasma business card back.pdf', '928398949', '928457657'),
('محمد فيصل محمد سليمان', 6, 'ذكر', 'سوداني', 'مدني سنار ج', '2021-10-09', '+O', 'suka', 'bfdiw209', 'fef4g', 'nasma business card front.pdf', '912356879', '928398949'),
('طه عباس الفصل احمد', 7, 'ذكر', 'اردني', 'جنب شارع عبيد ختم', '2021-10-09', '-A', 'suka', 'bfdiw209', 'fef4g', 'nasma business card.pdf', '912356879', '928398949'),
('محمد مبارك الامين ترفه', 9, 'ذكر', 'مصري', 'جنب شارع عبيد ختم', '2021-10-09', '+AB', 'suka', 'bfdiw209', 'fef4g', 'استيكر.pdf', '928398949', '928398949'),
('محمد مبارك الامين ترفه', 545, 'ذكر', 'سوداني', 'egrrhhthththt', '2021-10-08', '+AB', 'grgrgrgr', 'grgrgrg', 'grgrgrgr', '1633018668.pdf', '928398949', '928398949'),
('محمد مبارك الامين ترفه', 675, 'ذكر', 'سوداني', 'hgtrhtfhffgnfgbfbf', '2021-10-08', '+AB', 'veveve', 'vevevevevevev', 'brbtbgtntbgfbf', '1633018980.pdf', '249928398949', '249928398949'),
('محمد مبارك الامين ترفه', 3553435, 'ذكر', 'اردني', 'wfefeegegegegeefe', '2021-10-09', '+AB', 'fefegegvddee', 'edvdvrbrbdvdb', 'ddfbrdbrdbdfdfc', '1633019017.pdf', '249928398949', '249928398949');

-- --------------------------------------------------------

--
-- Table structure for table `reception`
--

DROP TABLE IF EXISTS `reception`;
CREATE TABLE IF NOT EXISTS `reception` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patientid` int(11) NOT NULL,
  `fromhospitalid` int(11) NOT NULL,
  `tohospitalid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reception`
--

INSERT INTO `reception` (`id`, `patientid`, `fromhospitalid`, `tohospitalid`, `date`) VALUES
(1, 23423, 56, 44343, '2021-10-02 10:25:25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
