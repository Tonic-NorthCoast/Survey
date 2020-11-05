-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 05, 2020 at 08:15 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifestylesurvey_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `surveydetails`
--

DROP TABLE IF EXISTS `surveydetails`;
CREATE TABLE IF NOT EXISTS `surveydetails` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phoneNo` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `foodType` varchar(100) NOT NULL,
  `eatOut` varchar(100) NOT NULL,
  `movies` varchar(100) NOT NULL,
  `TV` varchar(100) NOT NULL,
  `radio` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surveydetails`
--

INSERT INTO `surveydetails` (`id`, `firstname`, `lastname`, `phoneNo`, `age`, `gender`, `date`, `foodType`, `eatOut`, `movies`, `TV`, `radio`) VALUES
(1, 'Tonic', 'Mokolo', '0826230029', '25', 'male', '2020-11-04', 'Pizza,Pasta,ChickenStirFry', '4', '2', '1', '3'),
(2, 'James', 'Spear', '0123456987', '30', 'male', '2020-11-04', 'Pizza,papWors,Other', '1', '3', '2', '4'),
(3, 'Jackson ', 'Marks', '0789012232', '76', 'male', '2020-11-04', 'Pasta,BeefStirFry', '1', '4', '2', '5'),
(4, 'Rowdy', 'Rebels', '0826213133', '55', 'male', '2020-11-04', 'BeefStirFry,Other', '5', '3', '3', '2'),
(5, 'pop', 'smoke', '0112347448', '20', 'male', '2020-11-04', 'Pasta,Other', '1', '5', '5', '1'),
(6, 'jennet', 'jackson', '0818907787', '45', 'male', '2020-11-04', 'Pizza', '1', '1', '1', '1'),
(7, 'Emily', 'Jacobs', '0768909871', '30', 'female', '0202-11-04', 'Pasta,papWors,ChickenStirFry', '1', '3', '4', '2'),
(8, 'Lerato', 'Mvelasi', '0765345299', '29', 'female', '2020-11-04', 'Pizza,papWors,Other', '3', '2', '3', '4'),
(9, 'Sphesihle', 'Sonto', '0112365767', '35', 'female', '2020-11-20', 'Pizza,papWors', '2', '5', '5', '3'),
(10, 'Nicole', 'Ramaoka', '0823336637', '40', 'female', '2020-11-12', 'Pizza,ChickenStirFry,BeefStirFry,Other', '5', '1', '2', '1'),
(12, 'Derick', 'Burtman', '0764408760', '15', 'male', '2020-11-05', 'papWors,ChickenStirFry,BeefStirFry', '1', '2', '1', '1'),
(13, 'Trevor', 'Johnson', '0871211121', '18', 'male', '2020-11-06', 'Pasta,papWors,Other', '3', '3', '3', '3'),
(14, 'analine', 'jacobs', '9082312145', '23', 'female', '2020-11-10', 'Pizza,papWors', '3', '3', '4', '5'),
(15, 'Tonic', 'Mokolo', '0826230029', '25', 'male', '2020-11-09', 'ChickenStirFry,BeefStirFry,Other', '3', '3', '5', '5'),
(16, 'John', 'Connor', '0789665442', '4', 'male', '2020-11-05', 'papWors,BeefStirFry,Other', '1', '1', '5', '5'),
(17, 'Burning', 'Spear', '0764408760', '45', 'male', '2020-11-06', 'Pizza,papWors,ChickenStirFry', '5', '5', '5', '5'),
(18, 'Tonic', 'Mokolo', '0826241241', '29', 'male', '2020-11-05', 'Pizza,Pasta,Other', '2', '2', '2', '2'),
(19, 'Bob', 'Mabena', '0871212412', '18', 'male', '2020-11-05', 'ChickenStirFry,BeefStirFry', '1', '1', '2', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
