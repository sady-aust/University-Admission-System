-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2018 at 07:24 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universityadmissionsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` int(11) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `UserName` varchar(300) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `Name`, `UserName`, `Password`, `Email`) VALUES
(1, 'Md. Toufiqul Islam', 'toufiq97', '123', 'toufiq.austcse@gmail.com'),
(2, 'Susmoy Chakraborty', 'susmoy114', 'bd123', 'susmoy@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `generalinformation`
--

CREATE TABLE `generalinformation` (
  `ApplicantId` int(11) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `PhoneNo` varchar(30) NOT NULL,
  `DateOfBirth` varchar(100) NOT NULL,
  `FathersName` varchar(300) NOT NULL,
  `MothersName` varchar(300) NOT NULL,
  `Email` varchar(300) DEFAULT NULL,
  `IsTribal` varchar(20) NOT NULL,
  `TribalDistrict` varchar(20) DEFAULT NULL,
  `MediumOfQuestionPaper` varchar(100) DEFAULT NULL,
  `ApplicationFormStatus` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generalinformation`
--

INSERT INTO `generalinformation` (`ApplicantId`, `Name`, `Gender`, `PhoneNo`, `DateOfBirth`, `FathersName`, `MothersName`, `Email`, `IsTribal`, `TribalDistrict`, `MediumOfQuestionPaper`, `ApplicationFormStatus`) VALUES
(1020, 'Md. Abdul Karim', 'Male', '125689', '7/16/1998', 'Mr. Harun Ur Rashid', ' Jahan Ara Begam', 'sadydic@gmailcom', '', 'None', 'Bangla', 'DONE');

-- --------------------------------------------------------

--
-- Table structure for table `guardianinformation`
--

CREATE TABLE `guardianinformation` (
  `GuardinInfoId` int(11) NOT NULL,
  `ApplicantId` int(11) NOT NULL,
  `GuardianName` varchar(300) NOT NULL,
  `Relation` varchar(100) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guardianinformation`
--

INSERT INTO `guardianinformation` (`GuardinInfoId`, `ApplicantId`, `GuardianName`, `Relation`, `Mobile`, `Email`) VALUES
(2, 1020, 'GuardianName', 'Relation', 'Mobile', 'Email');

-- --------------------------------------------------------

--
-- Table structure for table `hsc`
--

CREATE TABLE `hsc` (
  `InfoId` int(11) NOT NULL,
  `ApplicantId` int(11) NOT NULL,
  `ROLL` varchar(200) DEFAULT NULL,
  `RegNo` varchar(300) DEFAULT NULL,
  `Board` varchar(100) DEFAULT NULL,
  `GPA` varchar(10) DEFAULT NULL,
  `PassingYear` varchar(20) DEFAULT NULL,
  `Physics` varchar(20) DEFAULT NULL,
  `Chemistry` varchar(20) DEFAULT NULL,
  `Mathematics` varchar(20) DEFAULT NULL,
  `English` varchar(20) DEFAULT NULL,
  `Total` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hsc`
--

INSERT INTO `hsc` (`InfoId`, `ApplicantId`, `ROLL`, `RegNo`, `Board`, `GPA`, `PassingYear`, `Physics`, `Chemistry`, `Mathematics`, `English`, `Total`) VALUES
(3, 1020, '105678', '10108895', 'Dhaka', '5', '2018', '5', '5', '4.5', '5', '19.5');

-- --------------------------------------------------------

--
-- Table structure for table `parmanentaddress`
--

CREATE TABLE `parmanentaddress` (
  `ParmanentAddressId` int(11) NOT NULL,
  `ApplicantId` int(11) NOT NULL,
  `Division` varchar(100) DEFAULT NULL,
  `District` varchar(100) DEFAULT NULL,
  `Thana` varchar(100) DEFAULT NULL,
  `Address` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parmanentaddress`
--

INSERT INTO `parmanentaddress` (`ParmanentAddressId`, `ApplicantId`, `Division`, `District`, `Thana`, `Address`) VALUES
(2, 1020, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `presentaddress`
--

CREATE TABLE `presentaddress` (
  `PresentAddressId` int(11) NOT NULL,
  `ApplicantId` int(11) NOT NULL,
  `Division` varchar(100) DEFAULT NULL,
  `District` varchar(100) DEFAULT NULL,
  `Thana` varchar(100) DEFAULT NULL,
  `Address` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presentaddress`
--

INSERT INTO `presentaddress` (`PresentAddressId`, `ApplicantId`, `Division`, `District`, `Thana`, `Address`) VALUES
(2, 1020, 'Dhaka', 'Comilla', 'Khilgaon', 'ulon ');

-- --------------------------------------------------------

--
-- Table structure for table `ssc`
--

CREATE TABLE `ssc` (
  `InfoId` int(11) NOT NULL,
  `ApplicantId` int(11) NOT NULL,
  `ROLL` varchar(200) DEFAULT NULL,
  `RegNo` varchar(300) DEFAULT NULL,
  `Board` varchar(100) DEFAULT NULL,
  `GPA` varchar(10) DEFAULT NULL,
  `Institute` varchar(300) DEFAULT NULL,
  `PassingYear` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssc`
--

INSERT INTO `ssc` (`InfoId`, `ApplicantId`, `ROLL`, `RegNo`, `Board`, `GPA`, `Institute`, `PassingYear`) VALUES
(2, 1020, '104078', '10108895', '104078', '5', 'Ideal School & College', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `UploadId` int(11) NOT NULL,
  `AdminId` int(11) NOT NULL,
  `UploadDate` date DEFAULT NULL,
  `FileName` varchar(500) DEFAULT NULL,
  `Comment` varchar(500) DEFAULT NULL,
  `UploadSection` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`UploadId`, `AdminId`, `UploadDate`, `FileName`, `Comment`, `UploadSection`) VALUES
(1, 1, '2018-01-23', 'HSC2018.xlsx', 'HSC 2018 Information Uploaded', 'FILE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `generalinformation`
--
ALTER TABLE `generalinformation`
  ADD PRIMARY KEY (`ApplicantId`);

--
-- Indexes for table `guardianinformation`
--
ALTER TABLE `guardianinformation`
  ADD PRIMARY KEY (`GuardinInfoId`),
  ADD KEY `ApplicantId` (`ApplicantId`);

--
-- Indexes for table `hsc`
--
ALTER TABLE `hsc`
  ADD PRIMARY KEY (`InfoId`),
  ADD UNIQUE KEY `RegNo` (`RegNo`),
  ADD KEY `ApplicantId` (`ApplicantId`);

--
-- Indexes for table `parmanentaddress`
--
ALTER TABLE `parmanentaddress`
  ADD PRIMARY KEY (`ParmanentAddressId`),
  ADD KEY `ApplicantId` (`ApplicantId`);

--
-- Indexes for table `presentaddress`
--
ALTER TABLE `presentaddress`
  ADD PRIMARY KEY (`PresentAddressId`),
  ADD KEY `ApplicantId` (`ApplicantId`);

--
-- Indexes for table `ssc`
--
ALTER TABLE `ssc`
  ADD PRIMARY KEY (`InfoId`),
  ADD UNIQUE KEY `RegNo` (`RegNo`),
  ADD KEY `ApplicantId` (`ApplicantId`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`UploadId`),
  ADD KEY `AdminId` (`AdminId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `generalinformation`
--
ALTER TABLE `generalinformation`
  MODIFY `ApplicantId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1021;

--
-- AUTO_INCREMENT for table `guardianinformation`
--
ALTER TABLE `guardianinformation`
  MODIFY `GuardinInfoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hsc`
--
ALTER TABLE `hsc`
  MODIFY `InfoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parmanentaddress`
--
ALTER TABLE `parmanentaddress`
  MODIFY `ParmanentAddressId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `presentaddress`
--
ALTER TABLE `presentaddress`
  MODIFY `PresentAddressId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ssc`
--
ALTER TABLE `ssc`
  MODIFY `InfoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `UploadId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guardianinformation`
--
ALTER TABLE `guardianinformation`
  ADD CONSTRAINT `guardianinformation_ibfk_1` FOREIGN KEY (`ApplicantId`) REFERENCES `generalinformation` (`ApplicantId`);

--
-- Constraints for table `hsc`
--
ALTER TABLE `hsc`
  ADD CONSTRAINT `hsc_ibfk_1` FOREIGN KEY (`ApplicantId`) REFERENCES `generalinformation` (`ApplicantId`);

--
-- Constraints for table `parmanentaddress`
--
ALTER TABLE `parmanentaddress`
  ADD CONSTRAINT `parmanentaddress_ibfk_1` FOREIGN KEY (`ApplicantId`) REFERENCES `generalinformation` (`ApplicantId`);

--
-- Constraints for table `presentaddress`
--
ALTER TABLE `presentaddress`
  ADD CONSTRAINT `presentaddress_ibfk_1` FOREIGN KEY (`ApplicantId`) REFERENCES `generalinformation` (`ApplicantId`);

--
-- Constraints for table `ssc`
--
ALTER TABLE `ssc`
  ADD CONSTRAINT `ssc_ibfk_1` FOREIGN KEY (`ApplicantId`) REFERENCES `generalinformation` (`ApplicantId`);

--
-- Constraints for table `upload`
--
ALTER TABLE `upload`
  ADD CONSTRAINT `upload_ibfk_1` FOREIGN KEY (`AdminId`) REFERENCES `admin` (`AdminId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
