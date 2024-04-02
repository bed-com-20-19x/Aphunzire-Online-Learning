--phpMyAdmin SQL Dump
--version 4.8.0.1
--https://www.phpmyadmin.net/
--
--Host: 127.0.0.1
--Generation Time: April 01, 2024 at 01:32 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--

Database: `dbAphunzirelearning`
--
-------------------------------------------------------------------------------

--

--Table structure for table `tblautonumbers`
-- 
CREATE TABLE `tblautonumbers` (
    `AUTOID` int(11) NOT NULL,
    `AUTOSTART` varchar(30) NOT NULL,
    `AUTOEND` int(11) NOT NULL,
    `AUTOINC` int(11) NOT NULL,
    `AUTOKEY` varchar(30) NOT NULL
)ENGINE=innoDB DEFAULT CHARSET=latin1;

--
--DUMPING data for table `tblautonumbers`
--

INSERT INTO `tblautonumbers` (`AUTOID`, `AUTOSTART`, `AUTOEND`, `AUTOINC`, `AUTOKEY`) VALUES
(1, '02983', 8, 1, 'userid'),
(10, '000', 3, 1, 'ExerciseID'),
(12, '000', 34, 1, 'BLOGID'),
(13, '0', 5, 1, 'STUDNETID');

--------------------------------------------------------------------------------------------------------

--
-- Table structure for table `tblexercise`
--

CREATE TABLE `tblexercise`(
    `ExerciseID` int(11) NOT NULL,
    `LessonID` int(11) NOT NULL,
    `Question` text NOT NULL,
    `ChoiceA` text NOT NULL,
    `ChoiceB` text NOT NULL,
    `ChoiceC` text NOT NULL,
    `ChoiceD` text NOT NULL,
    `Answer` varchar(90) NOT NULL,
    `ExerciseDate` date NOT NULL
)ENGINE= InnoDB DEFAULT CHARSET=latin1;

--
--Dumping data for table `tblexercise`
--