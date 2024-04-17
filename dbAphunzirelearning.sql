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
INSERT INTO `tblexercise` (`ExerciseID` , `LessonID`, `Question`, `ChoiceA`, `ChoiceB`, `ChoiceC`, `ChoiceD`, `Answer`, `ExercisesDate`)
 VALUES (20240001, 6, 'What is the title of the video', 'My Father', 'My Mother' 'My Brother', 'My Sister', 'My Sister', '0000-00'),
 (202400002, 6, 'Who is the name of the character in the story?', 'Ben', 'Holly', 'Gaston', 'Wise old elf', 'Gaston', '0000-00');

 ----------------------------------------------------------------------------------------------------------------------------------------------------------
 --------
 --Dumping data for table `tbllesson`
 --
 CREATE TABLE `tabllesson`(
    `LessonID` text(11) NOT NULL,
    `LessonCharacter` varchar(90) NOT NULL,
    `LessonTitle` varchar(90) NOT NULL,
    `FileLocation` text NOT NULL,
    `Category` varchar(90) NOT NULL,
 )ENGINE = InnoDB DEFAULT CHARSET = latin1;

 ---
 --  --Dumping data for table `tbllesson`
--
INSERT INTO `tbllesson` (`LessonID`, `LessonChapter`, `LessonTitle`, `FileLocation`, `Category`) 
VALUES (6, 'Video', 'video', 'files/deploy Laravel To Shared Hosting The Easy Way - Youtube.MP4', 'Video'),
(7, 'test', 'test', 'files/s.pdf', 'Docs');

-------------------------------------------------------------------------------------------------------------------------
-----
-- Table structure for table `tbscore`
---
CREATE TABLE `tbscore` (
    `ScoreID` int(11) NOT NULL,
    `LessonID` int(11) NOT NULL,
    `ExerciseID` int(11) NOT NULL,
    `StudentID` int(11) NOT NULL,
    `NoItems` int(11) NOT NULL DEFAULT '1',
    `Score` int(11) NOT NULL,
    `Submitted` tinyint(1) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
-------
-- --Dumping data for table `tblscore`
----
INSERT INTO `tbscore`(`ScoreID`, `LessonID`, `ExerciseID`, `StudentID`, `NoItems`, `Score`, `Submitted`)
VALUES (9, 6, 20240001, 1, 1, 1, 1),
       (10, 6, 20240002, 1, 1, 1, 1);

------------------------------------------------------------------------------------------------------------------

----
-- Table structure for table `tblstudent`
----
CREATE TABLE `tblstudent` (
    `StudentID` int(11) NOT NULL,
    `Fname` varchar(90) NOT NULL,
    `Lname` varchar(90) NOT NULL,
    `Address` varchar(90) NOT NULL,
    `MobileNo` varchar(90) NOT NULL,
    `STUDUSERNAME` varchar(90) NOT NULL,
    `STUDPASS` varchar(90) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

---
---Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`StudentID`, `Fname`, `Lname`, `Address`, `MobileNo`, `STUDUSERNAME`, `STUDPASS`)
VALUES (1, 'a', 'a', 'a', '21', 'a' '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8'),
       (2, 'sd', 'sad', 'sad', '231', 'a', 'a0f1490a20d0211c997b44bc357e1972deab8ae3';)
-------------------------------------------------------------------------------------------------------------------------

---
--Table structure for table `tblstudentquestion`
---
CREATE TABLE `tblstudentquestion` (
    `SQID` int(11) NOT NULL,
    `ExerciseID` int(11) NOT NULL,
    `LessonID` int(11) NOT NULL,
    `StudentID` int(11) NOT NULL,
    `Question` varchar(90) NOT NULL,
    `CA` varchar(90) NOT NULL,
    `CB` varchar(90) NOT NULL,
    `CC` varchar(90) NOT NULL,
    `CD` varchar(90) NOT NULL,
    `QA` varchar(90) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

---
--- Dumping data for table `tblstudentquestion`
---

INSERT INTO `tblstudentquestion` (`SQID`, `ExerciseID`,
 `LessonID`, `StudentID`, `Question`, `CA`, `CB`,
 `CC`, `CD`, `QA`)
 VALUES (1, 20240002, 0, 1, 'who is the name of the character in the story', 'Ben', 'Holly', 'Gaston', 'wise old elf', 'Gaston'),
         (2, 20240002, 0, 2, 'who is the name of the character in the story', 'Ben', 'Holly', 'Gaston', 'wise old elf', 'Gaston');
-------------------------------------------------------------------------------------------------------------------------------------

---
--- Table structure for table `tblusers`
----

CREATE TABLE `tblusers` (
    `USERID` int(11) NOT NULL,
    `NAME` varchar(90) NOT NULL,
    `UEMAIL` varchar(90) NOT NULL,
    `PASS` varchar(90) NOT NULL,
    `TYPE` varchar(90) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

----
----Dumping data for table `tblusers`
---

INSERT INTO `tblusers` (`USERID`, `NAME`, `UEMAIL`, `PASS`, `TYPE`)
VALUES(1, 'Chiccondi Matumula', 'Chiccondi', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator');

---
---Indexes for dumped tables
-- 

--- 
----Indexes for table `tblautonumbers`

--
ALTTER TABLE `tblautonumbers`
    ADD PRIMARY KEY (`AUTOID`);


--Indexes for table `tblexercise`
----
ALTTER TABLE `tblexercise`
    ADD PRIMARY KEY (`ExerciseID`);

---
---Indexes for table `tblesson`
---
ALTTER TABLE `tbllesson`
      ADD PRIMARY KEY (`LessonID`);


---Indexes for table `tblscore`
---
ALTTER TABLE `tblscore`
      ADD PRIMARY KEY (`ScoreID`);

---
---Indexes for table `tblstudent`
---
ALTTER TABLE `tblstudent`
      ADD PRIMARY KEY (`StudentID`) USING BTREE;

---
---Indexes for table `tblstudentquestion`
---
ALTTER TABLE `tblstudentquestion`
      ADD PRIMARY KEY (`SQID`);


---Indexes for table `tblusers`
---
ALTTER TABLE `tblusers`
      ADD PRIMARY KEY (`USERID`);


---AUTO_INCREMENT for dumped tables
--
--AUTO_INCREMENT for table `tblautonumbers`
---
ALTTER TABLE `tblautonumbers`
   MODIFY `AUTOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

---

--AUTO_INCREMENT for table `tblexercise`
---
ALTTER TABLE `tblautonumbers`
   MODIFY `ExerciseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20240003;

---
--AUTO_INCREMENT for table `tbllesson`
---
ALTTER TABLE `tbllesson`
   MODIFY `LesssonID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

----
--AUTO_INCREMENT for table `tblscore`
---
ALTTER TABLE `tblscore`
   MODIFY `ScoreID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

-----
--AUTO_INCREMENT for table `tblstudent`
---
ALTTER TABLE `tblstudent`
   MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

---
--AUTO_INCREMENT for table `tblstudentquestion`
---
ALTTER TABLE `tblstudentquestion`
   MODIFY `SQID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--AUTO_INCREMENT for table `tblusers`
---
ALTTER TABLE `tblusers`
   MODIFY `USERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

----
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;