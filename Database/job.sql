-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2024 at 07:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_master`
--

CREATE TABLE `application_master` (
  `ApplicationId` int(11) NOT NULL,
  `JobSeekId` int(11) NOT NULL,
  `JobId` int(11) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `application_master`
--

INSERT INTO `application_master` (`ApplicationId`, `JobSeekId`, `JobId`, `Status`, `Description`) VALUES
(1, 2, 2, 'Confirm', 'You are selected'),
(2, 2, 3, 'Round 2', 'Selected for round 2\r\n'),
(3, 3, 3, 'Confirm', 'You are selected'),
(4, 3, 4, 'Confirm', 'You are selected'),
(5, 4, 5, 'Confirm', 'You are selected'),
(6, 4, 6, 'Apply', 'No Message'),
(7, 4, 1, 'Interview Call', 'You have been select for interview'),
(8, 5, 2, 'Apply', 'No Message'),
(9, 5, 6, 'Confirm', 'You are selected'),
(10, 5, 3, 'Confirm', 'You are selected'),
(11, 5, 5, 'Round 1', 'You have been selected');

-- --------------------------------------------------------

--
-- Table structure for table `employer_reg`
--

CREATE TABLE `employer_reg` (
  `EmployerId` int(11) NOT NULL,
  `CompanyName` varchar(20) NOT NULL,
  `ContactPerson` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Area_Work` varchar(40) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employer_reg`
--

INSERT INTO `employer_reg` (`EmployerId`, `CompanyName`, `ContactPerson`, `Address`, `City`, `Email`, `Mobile`, `Area_Work`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES
(1, 'TCS', 'Mr. Arjun Kumar', '123, Silicon Valley Street', 'Banglore', 'arjunkumar@gmail.com', 9876459218, 'Web Development', 'Confirm', 'arjun', 'aju', 'What is Your Pet Name?', 'aju'),
(2, 'Infosys', 'Mr. Kumar Melhotra', '456, Tech Park Road', 'Hyderbad', 'kumarmelhotra@gmail.com', 9823408713, 'Mobile App Development', 'Confirm', 'kumar', 'kumar', 'What is Your Pet Name?', 'kumar'),
(3, 'Wipro', 'Mr. Sidarth Desai', '789, Cyber City Avenue', 'Mumbai', 'sidarth@gmail.com', 9712309756, 'IT Consulting Services', 'Confirm', 'sidu', 'sidu', 'What is Your Pet Name?', 'sidu'),
(4, 'HCL Technologies', 'Mrs. Navya Ben', '555, Data Drive', 'Chennai', 'navya@gmail.com', 9539926845, 'Data Analytics', 'Pending', 'navya', 'navya', 'What is Your Pet Name?', 'kukku');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FeedbackId` int(11) NOT NULL,
  `JobSeekId` int(11) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `FeedbakDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedbackId`, `JobSeekId`, `Feedback`, `FeedbakDate`) VALUES
(1, 2, 'This is a very good website', '2024-03-10'),
(2, 3, 'It is very user friendly', '2024-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_education`
--

CREATE TABLE `jobseeker_education` (
  `EduId` int(11) NOT NULL,
  `JobSeekId` int(11) NOT NULL,
  `Degree` varchar(20) NOT NULL,
  `University` varchar(100) NOT NULL,
  `PassingYear` mediumint(9) NOT NULL,
  `Percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jobseeker_education`
--

INSERT INTO `jobseeker_education` (`EduId`, `JobSeekId`, `Degree`, `University`, `PassingYear`, `Percentage`) VALUES
(1, 2, 'B.C.A', 'MG University', 2020, 81),
(2, 3, 'B.C.A', 'Kerala University', 2019, 90),
(3, 4, 'B.C.A', 'MG University', 2015, 80),
(4, 4, 'M.C.A', 'MG University', 2018, 83),
(5, 5, 'B.C.A', 'Kerala University', 2021, 89),
(6, 5, 'B.Sc.C.S', 'Kerala University', 2018, 87);

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_reg`
--

CREATE TABLE `jobseeker_reg` (
  `JobSeekId` int(11) NOT NULL,
  `JobSeekerName` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Supply` text NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `BirthDate` date NOT NULL,
  `Resume` varchar(200) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jobseeker_reg`
--

INSERT INTO `jobseeker_reg` (`JobSeekId`, `JobSeekerName`, `Address`, `City`, `Email`, `Mobile`, `Qualification`, `Supply`, `Gender`, `BirthDate`, `Resume`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES
(1, 'Aadithya', 'rosevilla', 'Varkala', 'aadithyabipin@gmail.com', 8281704632, 'M.C.A', '0', 'Male', '2002-05-21', 'scan0004.pdf', 'Confirm', 'aadii', 'aadii', 'Who is Your Favourite Person?', 'Manu'),
(2, 'Sidarth', 'ABC villa', 'Vytila', 'sidarth@gmail.com', 8787565654, 'M.C.A', '0', 'Male', '2001-12-05', 'scan0005.pdf', 'Confirm', 'sidu', 'sidu', 'Who is Your Favourite Person?', 'Hitman'),
(3, 'Sanjay', 'XYZ Villa', 'Palarivattom', 'sanjay@gmail.com', 8787565123, 'B.Sc.I.T', '2', 'Male', '2002-04-12', 'scan0006.pdf', 'Confirm', 'sanjay', 'san', 'What is Your Pet Name?', 'bhaii'),
(4, 'Aswanth', 'CDE Villa', 'Kaloor', 'aswanth@gmail.com', 5689876418, 'M.Sc.I.T', '1', 'Male', '2002-08-22', 'scan0004.pdf', 'Confirm', 'aswanth', 'rider', 'What is the Name of Your First School?', 'KV'),
(5, 'Steve', 'Lotus Villa', 'Vaduthala', 'aadithyabipin@gmail.com', 5689876901, 'M.Sc.I.T', '9', 'Male', '2002-05-01', 'scan0004.pdf', 'Confirm', 'stvy', 'steve', 'What is Your Pet Name?', 'steve'),
(6, 'Arya', 'Sunflower Villa', 'Cherthala', 'arya@gmail.com', 1234567890, 'B.C.A', '1', 'Female', '2001-11-18', 'scan0005.pdf', 'Confirm', 'aarii', 'aarii', 'What is Your Pet Name?', 'booboo'),
(7, 'Kallyani', 'RST villa', 'Aroor', 'kallani@gmail.com', 9087564312, 'B.C.A', '0', 'Female', '2002-08-06', 'scan0004.pdf', 'Confirm', 'kallu', 'kallu', 'What is Your Pet Name?', 'devu');

-- --------------------------------------------------------

--
-- Table structure for table `job_master`
--

CREATE TABLE `job_master` (
  `JobId` int(11) NOT NULL,
  `CompanyName` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `job_master`
--

INSERT INTO `job_master` (`JobId`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`, `Description`) VALUES
(1, 'TCS', 'Full Stack Developer', 4, 'B.Sc.C.S', ' Handles both client-side and server-side development tasks.'),
(2, 'TCS', 'Web Designer', 2, 'B.C.A', 'Focuses on aesthetics and user engagement while ensuring compatibility with various devices and browsers.'),
(3, 'Infosys', 'Android Developer', 3, 'M.C.A', 'Focuses on developing applications for Android devices using languages like Java or Kotlin.'),
(4, 'Infosys', 'UI/UX Designer', 4, 'B.Sc.I.T', 'Designs the user interface (UI) and user experience (UX) elements of mobile applications'),
(5, 'Wipro', 'Technology Architect:', 2, 'M.C.A', 'Designs and develops technical solutions based on client requirements, ensuring alignment with business goals and industry best practices.\r\n\r\n'),
(6, 'Wipro', 'IT Consultant', 3, 'B.C.A', 'Provides strategic guidance to clients regarding technology adoption, system integration, and IT infrastructure management.');

-- --------------------------------------------------------

--
-- Table structure for table `news_master`
--

CREATE TABLE `news_master` (
  `NewsId` int(11) NOT NULL,
  `News` varchar(200) NOT NULL,
  `NewsDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `news_master`
--

INSERT INTO `news_master` (`NewsId`, `News`, `NewsDate`) VALUES
(1, 'New Companies have been registered', '2024-03-10'),
(2, 'Register Quickly, the vacancies are filling', '2024-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `UserId` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`UserId`, `UserName`, `Password`) VALUES
(6, 'admins', 'admin'),
(10, 'xyz', 'xyz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_master`
--
ALTER TABLE `application_master`
  ADD PRIMARY KEY (`ApplicationId`);

--
-- Indexes for table `employer_reg`
--
ALTER TABLE `employer_reg`
  ADD PRIMARY KEY (`EmployerId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedbackId`);

--
-- Indexes for table `jobseeker_education`
--
ALTER TABLE `jobseeker_education`
  ADD PRIMARY KEY (`EduId`);

--
-- Indexes for table `jobseeker_reg`
--
ALTER TABLE `jobseeker_reg`
  ADD PRIMARY KEY (`JobSeekId`),
  ADD KEY `JobSeekId` (`JobSeekId`);

--
-- Indexes for table `job_master`
--
ALTER TABLE `job_master`
  ADD PRIMARY KEY (`JobId`);

--
-- Indexes for table `news_master`
--
ALTER TABLE `news_master`
  ADD PRIMARY KEY (`NewsId`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_master`
--
ALTER TABLE `application_master`
  MODIFY `ApplicationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employer_reg`
--
ALTER TABLE `employer_reg`
  MODIFY `EmployerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobseeker_education`
--
ALTER TABLE `jobseeker_education`
  MODIFY `EduId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobseeker_reg`
--
ALTER TABLE `jobseeker_reg`
  MODIFY `JobSeekId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `job_master`
--
ALTER TABLE `job_master`
  MODIFY `JobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news_master`
--
ALTER TABLE `news_master`
  MODIFY `NewsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
