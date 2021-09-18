-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 03:56 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_studentmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `COURSE_ID` int(11) NOT NULL,
  `COURSE_NAME` varchar(30) NOT NULL,
  `COURSE_DESC` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL,
  `SETSEMESTER` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`COURSE_ID`, `COURSE_NAME`, `COURSE_DESC`, `DEPT_ID`, `SETSEMESTER`) VALUES
(21, 'Maths (1)', 'Theory', 33, ''),
(24, 'Maths (R)', 'Revision', 33, ''),
(29, 'Chemistry (1)', 'Theory', 33, ''),
(52, 'Chemistry (R)', 'Revison', 33, ''),
(53, 'Physics (1)', 'Theory', 33, ''),
(54, 'Physics (R)', 'Revision', 33, ''),
(56, 'Biology (1)', 'Theory', 34, ''),
(57, 'Biology (R)', 'Revision', 34, ''),
(58, 'Commerce (A)', 'Accounting', 35, ''),
(59, 'Commerce (E)', 'Economic', 35, ''),
(60, 'Commerce (BS)', 'Business Studies', 35, ''),
(61, 'Commerce (IT)', 'IT', 35, ''),
(62, 'Commerce (S)', 'Statistics', 35, ''),
(63, 'Technology (FT)', 'Food Technology', 37, ''),
(64, 'Technology (AT)', 'Agro Technology', 37, ''),
(65, 'Technology (CT)', 'Civil Technology', 37, ''),
(66, 'Technology (MT)', 'Mechanical Technology', 37, ''),
(67, 'Technology (BRT)', 'Bio Resource Technology', 37, ''),
(68, 'Technology (SFT)', 'Science For Technology', 37, ''),
(69, 'Technology (EEI)', 'Electrical, Electronic and Information Technology', 37, ''),
(70, 'Art (B)', 'Buddhism', 36, ''),
(71, 'Art (H)', 'Hinduism', 36, ''),
(72, 'Art (C)', 'Christianity', 36, ''),
(73, 'Art (BC)', 'Buddhist Civilization', 36, ''),
(74, 'Art (CC)', 'Christian Civilization', 36, ''),
(75, 'Art (IS)', 'Islam Civilization', 36, ''),
(76, 'Art (HC)', 'Hindu Civilization', 36, ''),
(77, 'Art (E)', 'Economic', 36, ''),
(78, 'Art (Dancing (I) )', 'Dancing (indigenous)', 36, ''),
(79, 'Art (Dancing (B) )', 'Dancing (bharatha)', 36, ''),
(80, 'Art (OM)', 'Oriental Music', 36, ''),
(81, 'Art (CM)', 'Carnatic Music', 36, ''),
(82, 'Art (WM)', 'Western Music', 36, ''),
(83, 'Art (SM)', 'Scientific Method', 36, ''),
(84, 'Art (AS)', 'Agricultural Science', 36, ''),
(85, 'Art (German)', 'German', 36, ''),
(86, 'Art (Pali)', 'Pali', 36, ''),
(87, 'Art (Art)', 'Art', 36, ''),
(88, 'Art (LSM)', 'Logic & Scientific Method', 36, ''),
(89, 'Art (Sinhala)', 'Sinhala', 36, ''),
(90, 'Art (Tamil)', 'Tamil', 36, ''),
(91, 'Art (Sanskrit)', 'Sanskrit', 36, ''),
(92, 'Art (Drama & Theater)', 'Drama & Theater', 36, ''),
(93, 'Art (Optical Science)', 'Optical Science', 36, ''),
(94, 'Art (French)', 'French', 36, ''),
(95, 'Art (English)', 'English', 36, ''),
(96, 'Art (Home Economic)', 'Home Economic', 36, ''),
(97, 'Art (History of India)', 'History of India', 36, ''),
(98, 'Art (History of Europe)', 'History of Europe', 36, ''),
(99, 'Art (History of Sri Lanka)', 'History of Sri Lanka', 36, ''),
(100, 'Art (History of Modern Word)', 'History of Modern World', 36, ''),
(101, 'Art (Arabic)', 'Arabic', 36, ''),
(102, 'Art (Malay)', 'Malay', 36, ''),
(103, 'Art (Chinese)', 'Chinese', 36, ''),
(104, 'Art (IT)', 'Information Technology', 36, ''),
(105, 'Art (Russian)', 'Russian', 36, ''),
(106, 'Art (Japanese)', 'Japanese', 36, ''),
(107, 'Art (Geography)', 'Geography', 36, ''),
(108, 'Art (Hindi)', 'Hindi', 36, '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DEPT_ID` int(11) NOT NULL,
  `DEPARTMENT_NAME` varchar(30) NOT NULL,
  `DEPARTMENT_DESC` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DEPT_ID`, `DEPARTMENT_NAME`, `DEPARTMENT_DESC`) VALUES
(33, 'Mathematics', ''),
(34, 'Biology', ''),
(35, 'Commerce', ''),
(36, 'Art', ''),
(37, 'Technology', '');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `GRADE_ID` int(11) NOT NULL,
  `IDNO` varchar(90) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `FIRST` int(11) NOT NULL,
  `SECOND` int(11) NOT NULL,
  `THIRD` int(11) NOT NULL,
  `FOURTH` int(11) NOT NULL,
  `AVE` float NOT NULL,
  `REMARKS` text NOT NULL,
  `COMMENT` text NOT NULL,
  `SEMS` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`GRADE_ID`, `IDNO`, `SUBJ_ID`, `FIRST`, `SECOND`, `THIRD`, `FOURTH`, `AVE`, `REMARKS`, `COMMENT`, `SEMS`) VALUES
(1, '2018-SC-0001', 1, 0, 0, 0, 0, 80, 'Passed', '', 'First'),
(2, '2018-SC-0001', 2, 0, 0, 0, 0, 67, 'Failed', '', 'First'),
(3, '2018-SC-0001', 3, 0, 0, 0, 0, 0, '', '', 'First'),
(4, '2018-SC-0001', 4, 0, 0, 0, 0, 0, '', '', 'First'),
(5, '2018-SC-0001', 5, 0, 0, 0, 0, 0, '', '', 'First'),
(6, '2018-SC-0001', 6, 0, 0, 0, 0, 0, '', '', 'First'),
(7, '2018-SC-0001', 7, 0, 0, 0, 0, 0, '', '', 'First'),
(8, '2018-SC-0001', 8, 0, 0, 0, 0, 0, '', '', 'Second'),
(9, '2018-SC-0001', 9, 0, 0, 0, 0, 0, '', '', 'Second'),
(10, '2018-SC-0001', 10, 0, 0, 0, 0, 0, '', '', 'Second'),
(11, '2018-SC-0001', 11, 0, 0, 0, 0, 0, '', '', 'Second'),
(12, '2018-SC-0001', 12, 0, 0, 0, 0, 0, '', '', 'Second'),
(13, '2018-SC-0001', 13, 0, 0, 0, 0, 0, '', '', 'Second'),
(14, '2018-SC-0001', 14, 0, 0, 0, 0, 0, '', '', 'Second'),
(15, '2018-SC-0001', 15, 0, 0, 0, 0, 0, '', '', 'Second'),
(16, '2018-SC-0001', 16, 0, 0, 0, 0, 0, '', '', 'First'),
(17, '15-SC-0836', 1, 0, 0, 0, 0, 90, 'Passed', '', 'First'),
(18, '15-SC-0836', 2, 0, 0, 0, 0, 0, '', '', 'First'),
(19, '15-SC-0836', 3, 0, 0, 0, 0, 0, '', '', 'First'),
(20, '15-SC-0836', 4, 0, 0, 0, 0, 0, '', '', 'First'),
(21, '15-SC-0836', 5, 0, 0, 0, 0, 0, '', '', 'First'),
(22, '15-SC-0836', 6, 0, 0, 0, 0, 0, '', '', 'First'),
(23, '15-SC-0836', 7, 0, 0, 0, 0, 0, '', '', 'First'),
(24, '15-SC-0836', 8, 0, 0, 0, 0, 0, '', '', 'Second'),
(25, '15-SC-0836', 9, 0, 0, 0, 0, 0, '', '', 'Second'),
(26, '15-SC-0836', 10, 0, 0, 0, 0, 0, '', '', 'Second'),
(27, '15-SC-0836', 11, 0, 0, 0, 0, 0, '', '', 'Second'),
(28, '15-SC-0836', 12, 0, 0, 0, 0, 0, '', '', 'Second'),
(29, '15-SC-0836', 13, 0, 0, 0, 0, 0, '', '', 'Second'),
(30, '15-SC-0836', 14, 0, 0, 0, 0, 0, '', '', 'Second'),
(31, '15-SC-0836', 15, 0, 0, 0, 0, 0, '', '', 'Second'),
(32, '15-SC-0836', 16, 0, 0, 0, 0, 0, '', '', 'First');

-- --------------------------------------------------------

--
-- Table structure for table `studentsubjects`
--

CREATE TABLE `studentsubjects` (
  `STUDSUBJ_ID` int(11) NOT NULL,
  `IDNO` varchar(90) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `LEVEL` varchar(90) NOT NULL,
  `SECTIONID` int(11) NOT NULL,
  `SEMESTER` varchar(30) NOT NULL,
  `SY` text NOT NULL,
  `ATTEMP` int(11) NOT NULL,
  `AVERAGE` double NOT NULL,
  `OUTCOME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentsubjects`
--

INSERT INTO `studentsubjects` (`STUDSUBJ_ID`, `IDNO`, `SUBJ_ID`, `LEVEL`, `SECTIONID`, `SEMESTER`, `SY`, `ATTEMP`, `AVERAGE`, `OUTCOME`) VALUES
(1, '2018-SC-0001', 1, 'First Year', 1, 'First', '2000-2001', 1, 0, ''),
(2, '2018-SC-0001', 2, 'First Year', 0, 'First', '2000-2001', 1, 0, ''),
(3, '2018-SC-0001', 3, 'First Year', 0, 'First', '2000-2001', 1, 0, ''),
(4, '2018-SC-0001', 4, 'First Year', 0, 'First', '2000-2001', 1, 0, ''),
(5, '2018-SC-0001', 5, 'First Year', 0, 'First', '2000-2001', 1, 0, ''),
(6, '2018-SC-0001', 6, 'First Year', 0, 'First', '2000-2001', 1, 0, ''),
(7, '2018-SC-0001', 7, 'First Year', 0, 'First', '2000-2001', 1, 0, ''),
(8, '2018-SC-0001', 8, 'Fourth Year', 0, 'Second', '2000-2001', 1, 0, ''),
(9, '2018-SC-0001', 9, 'First Year', 0, 'Second', '2000-2001', 1, 0, ''),
(10, '2018-SC-0001', 10, 'First Year', 0, 'Second', '2000-2001', 1, 0, ''),
(11, '2018-SC-0001', 11, 'First Year', 0, 'Second', '2000-2001', 1, 0, ''),
(12, '2018-SC-0001', 12, 'First Year', 0, 'Second', '2000-2001', 1, 0, ''),
(13, '2018-SC-0001', 13, 'First Year', 0, 'Second', '2000-2001', 1, 0, ''),
(14, '2018-SC-0001', 14, 'First Year', 0, 'Second', '2000-2001', 1, 0, ''),
(15, '2018-SC-0001', 15, 'First Year', 0, 'Second', '2000-2001', 1, 0, ''),
(16, '2018-SC-0001', 16, 'Second Year', 0, 'First', '2000-2001', 1, 0, ''),
(17, '15-SC-0836', 1, 'First Year', 1, 'First', 'Select', 1, 90, 'Passed'),
(18, '15-SC-0836', 2, 'First Year', 0, 'First', 'Select', 1, 0, ''),
(19, '15-SC-0836', 3, 'First Year', 0, 'First', 'Select', 1, 0, ''),
(20, '15-SC-0836', 4, 'First Year', 0, 'First', 'Select', 1, 0, ''),
(21, '15-SC-0836', 5, 'First Year', 0, 'First', 'Select', 1, 0, ''),
(22, '15-SC-0836', 6, 'First Year', 0, 'First', 'Select', 1, 0, ''),
(23, '15-SC-0836', 7, 'First Year', 0, 'First', 'Select', 1, 0, ''),
(24, '15-SC-0836', 8, 'Third Year', 0, 'Second', 'Select', 1, 0, ''),
(25, '15-SC-0836', 9, 'First Year', 0, 'Second', 'Select', 1, 0, ''),
(26, '15-SC-0836', 10, 'First Year', 0, 'Second', 'Select', 1, 0, ''),
(27, '15-SC-0836', 11, 'First Year', 0, 'Second', 'Select', 1, 0, ''),
(28, '15-SC-0836', 12, 'First Year', 0, 'Second', 'Select', 1, 0, ''),
(29, '15-SC-0836', 13, 'First Year', 0, 'Second', 'Select', 1, 0, ''),
(30, '15-SC-0836', 14, 'First Year', 0, 'Second', 'Select', 1, 0, ''),
(31, '15-SC-0836', 15, 'First Year', 0, 'Second', 'Select', 1, 0, ''),
(32, '15-SC-0836', 16, 'Second Year', 0, 'First', 'Select', 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SUBJ_ID` int(11) NOT NULL,
  `SUBJ_CODE` varchar(30) NOT NULL,
  `SUBJ_DESCRIPTION` varchar(255) NOT NULL,
  `UNIT` int(2) NOT NULL,
  `PRE_REQUISITE` varchar(30) NOT NULL DEFAULT 'None',
  `COURSE_ID` int(11) NOT NULL,
  `YEARLEVEL` varchar(90) NOT NULL,
  `SECTIONID` int(11) NOT NULL,
  `AY` varchar(90) NOT NULL,
  `SEMESTER` varchar(20) NOT NULL,
  `PreTaken` tinyint(1) NOT NULL,
  `CURRICULUM` varchar(90) NOT NULL DEFAULT 'New Curriculum'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SUBJ_ID`, `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `YEARLEVEL`, `SECTIONID`, `AY`, `SEMESTER`, `PreTaken`, `CURRICULUM`) VALUES
(1, 'IT 101', 'IT Fundamentals', 3, 'NONE', 52, 'First Year', 1, '2000-2001', 'First', 0, 'New Curriculum'),
(2, 'IT 102', 'Integrated Aplication Software and Productivity Tools', 3, 'NONE', 52, 'First Year', 1, '2000-2001', 'First', 0, 'New Curriculum'),
(3, 'IT 103', 'Programming I', 3, 'NONE', 52, 'First Year', 1, '2000-2001', 'First', 0, 'New Curriculum'),
(4, 'Math 101', 'College Algebra', 3, 'NONE', 52, 'First Year', 1, '2000-2001', 'First', 0, 'New Curriculum'),
(5, 'Stat 102', 'Probability Statistics', 3, 'NONE', 52, 'First Year', 1, '2000-2001', 'First', 0, 'New Curriculum'),
(6, 'PE 101', 'Physical Fitness', 3, 'NONE', 52, 'First Year', 1, '2000-2001', 'First', 0, 'New Curriculum'),
(7, 'NSTP 1', 'ROTC / CWTS / LTS 1', 3, 'NONE', 52, 'First Year', 1, '2000-2001', 'First', 0, 'New Curriculum'),
(8, 'IT 104', 'Programming 2', 3, 'IT 103', 52, 'First Year', 1, '2000-2001', 'Second', 0, 'New Curriculum'),
(9, 'IT 201', 'Logic Design', 3, 'IT 101', 52, 'First Year', 1, '2000-2001', 'Second', 0, 'New Curriculum'),
(10, 'Math 102', 'Plane Trigonometry', 3, 'NONE', 52, 'First Year', 1, '2000-2001', 'Second', 0, 'New Curriculum'),
(11, 'Eng 102', 'Speech Communication with Debate', 3, 'NONE', 52, 'First Year', 1, '2000-2001', 'Second', 0, 'New Curriculum'),
(12, 'NatSci 101', 'Biological Science', 3, 'NONE', 52, 'First Year', 1, '2000-2001', 'Second', 0, 'New Curriculum'),
(13, 'SocSci 101', 'Philippine History', 3, 'NONE', 52, 'First Year', 1, '2000-2001', 'Second', 0, 'New Curriculum'),
(14, 'PE 102', 'Rhythmic Activities, Folk and Social Dancing', 2, 'NONE', 52, 'First Year', 1, '2000-2001', 'Second', 0, 'New Curriculum'),
(15, 'NSTP 2', 'ROTC / CWTS / LTS 2', 3, 'NONE', 52, 'First Year', 1, '2000-2001', 'Second', 0, 'New Curriculum'),
(16, 'IT 105', 'Computer Organization', 3, 'IT  201', 52, 'Second Year', 1, '2000-2001', 'First', 0, 'New Curriculum');

-- --------------------------------------------------------

--
-- Table structure for table `tblannouncement`
--

CREATE TABLE `tblannouncement` (
  `ANNOUNCEMENTID` int(11) NOT NULL,
  `ANNOUNCEMENT_TEXT` text NOT NULL,
  `ANNOUNCEMENT_WHAT` text NOT NULL,
  `DATEPOSTED` datetime NOT NULL,
  `AUTHOR` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblannouncement`
--

INSERT INTO `tblannouncement` (`ANNOUNCEMENTID`, `ANNOUNCEMENT_TEXT`, `ANNOUNCEMENT_WHAT`, `DATEPOSTED`, `AUTHOR`) VALUES
(2019009, 'asd', '<p>asdasd</p>', '2019-11-28 11:43:45', 'Janobe');

-- --------------------------------------------------------

--
-- Table structure for table `tblauto`
--

CREATE TABLE `tblauto` (
  `ID` int(11) NOT NULL,
  `autocode` varchar(255) DEFAULT NULL,
  `autoname` varchar(255) DEFAULT NULL,
  `appendchar` varchar(255) DEFAULT NULL,
  `autostart` varchar(30) DEFAULT '0',
  `autoend` int(11) DEFAULT 0,
  `incrementvalue` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblauto`
--

INSERT INTO `tblauto` (`ID`, `autocode`, `autoname`, `appendchar`, `autostart`, `autoend`, `incrementvalue`) VALUES
(1, 'Asset', 'Asset', 'ASitem', '0', 3, 1),
(2, 'Trans', 'Transaction', 'TrAnS', '1', 5, 1),
(3, 'SIDNO', 'IDNO', '2015', 'SC-000', 6, 1),
(4, 'EMPLOYEE', 'EMPID', '020010', '0', 2, 1),
(5, 'BLOGID', 'Announcement', '1', '00', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblexpenses`
--

CREATE TABLE `tblexpenses` (
  `EXPENSEID` int(11) NOT NULL,
  `AMOUNT` double NOT NULL,
  `DESCRIPTION` varchar(90) NOT NULL,
  `COURSE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblexpenses`
--

INSERT INTO `tblexpenses` (`EXPENSEID`, `AMOUNT`, `DESCRIPTION`, `COURSE_ID`) VALUES
(6, 400, 'Monthly Fees', 21),
(7, 600, 'Chemistry Class', 29);

-- --------------------------------------------------------

--
-- Table structure for table `tblfees`
--

CREATE TABLE `tblfees` (
  `FEEID` int(11) NOT NULL,
  `EXPENSEID` int(11) NOT NULL,
  `IDNO` varchar(90) NOT NULL,
  `PAYMENT` double NOT NULL,
  `REMARKS` text NOT NULL,
  `USERNAME` varchar(90) NOT NULL,
  `TRANSDATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfees`
--

INSERT INTO `tblfees` (`FEEID`, `EXPENSEID`, `IDNO`, `PAYMENT`, `REMARKS`, `USERNAME`, `TRANSDATE`) VALUES
(2, 0, '', 0, '', '', '0000-00-00 00:00:00'),
(4, 5, '10', 400, '', 'admin', '2021-06-23 00:00:00'),
(5, 6, '10', 400, '', 'admin', '2021-06-23 00:00:00'),
(6, 7, '20', 600, '', 'admin', '2021-06-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblinstructorsubject`
--

CREATE TABLE `tblinstructorsubject` (
  `INST_ID` int(11) NOT NULL,
  `ACCOUNT_ID` int(11) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `SECTIONID` int(11) NOT NULL,
  `AY` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinstructorsubject`
--

INSERT INTO `tblinstructorsubject` (`INST_ID`, `ACCOUNT_ID`, `SUBJ_ID`, `SECTIONID`, `AY`) VALUES
(4, 13, 1, 1, '2000-2001'),
(5, 13, 2, 1, '2000-2001'),
(6, 13, 3, 1, '2000-2001');

-- --------------------------------------------------------

--
-- Table structure for table `tbllevel`
--

CREATE TABLE `tbllevel` (
  `LEVELID` int(11) NOT NULL,
  `YEARLEVEL` varchar(30) NOT NULL,
  `SECTION` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllevel`
--

INSERT INTO `tbllevel` (`LEVELID`, `YEARLEVEL`, `SECTION`) VALUES
(3, 'First Year', ''),
(4, 'Second Year', ''),
(5, 'Third Year', ''),
(6, 'Fourth Year', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `LOGID` int(11) NOT NULL,
  `USERID` int(11) NOT NULL,
  `LOGDATETIME` datetime NOT NULL,
  `LOGROLE` varchar(55) NOT NULL,
  `LOGMODE` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogs`
--

INSERT INTO `tbllogs` (`LOGID`, `USERID`, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) VALUES
(1, 1, '2016-09-22 21:46:01', 'Administrator', 'Logged in'),
(2, 100000022, '2016-09-22 21:46:29', 'Student', 'Logged out'),
(3, 100000015, '2016-09-23 05:00:38', 'Student', 'Logged in'),
(4, 100000015, '2016-09-23 05:00:45', 'Student', 'Logged out'),
(5, 100000025, '2016-09-23 05:02:31', 'Student', 'Logged in'),
(6, 100000025, '2016-09-23 05:02:55', 'Student', 'Logged out'),
(7, 100000025, '2016-09-23 05:03:53', 'Student', 'Logged in'),
(8, 100000025, '2016-09-23 05:11:40', 'Student', 'Logged out'),
(9, 100000025, '2016-09-24 09:32:59', 'Student', 'Logged out'),
(10, 1, '2016-09-24 09:46:06', 'Administrator', 'Logged in'),
(11, 1, '2016-09-24 09:53:17', 'Administrator', 'Logged out'),
(12, 1, '2016-09-24 09:54:45', 'Administrator', 'Logged in'),
(13, 100000027, '2016-09-24 15:30:32', 'Student', 'Logged out'),
(14, 100000015, '2016-09-27 09:34:11', 'Student', 'Logged in'),
(15, 1, '2016-09-27 10:59:58', 'Administrator', 'Logged in'),
(16, 100000015, '2016-09-27 11:00:42', 'Student', 'Logged out'),
(17, 100000029, '2016-09-27 17:34:11', 'Student', 'Logged out'),
(18, 100000015, '0000-00-00 00:00:00', 'Student', 'Logged in'),
(19, 100000015, '2016-09-27 17:37:13', 'Student', 'Logged out'),
(20, 100000029, '2016-09-27 18:27:40', 'Student', 'Logged out'),
(21, 100000015, '2016-09-27 18:27:56', 'Student', 'Logged in'),
(22, 100000015, '2016-09-27 18:29:20', 'Student', 'Logged out'),
(23, 100000030, '2016-09-27 22:49:02', 'Student', 'Logged out'),
(24, 100000015, '2016-09-27 22:50:10', 'Student', 'Logged in'),
(25, 100000015, '2016-09-28 01:47:07', 'Student', 'Logged out'),
(26, 100000033, '2016-09-28 04:43:26', 'Student', 'Logged out'),
(27, 1, '2016-10-01 04:07:48', 'Administrator', 'Logged in'),
(28, 100000056, '2016-10-01 09:22:17', 'Student', 'Logged out'),
(29, 100000056, '2016-10-01 09:22:51', 'Student', 'Logged in'),
(30, 100000056, '2016-10-01 09:23:30', 'Student', 'Logged out'),
(31, 100000056, '2016-10-01 12:52:40', 'Student', 'Logged out'),
(32, 100000057, '2016-10-01 15:28:47', 'Student', 'Logged out'),
(33, 100000058, '2016-10-01 15:44:01', 'Student', 'Logged out'),
(34, 100000057, '2016-10-01 15:44:11', 'Student', 'Logged in'),
(35, 100000057, '2016-10-01 16:38:34', 'Student', 'Logged out'),
(36, 100000061, '2016-10-01 16:50:27', 'Student', 'Logged out'),
(37, 100000061, '2016-10-01 18:08:05', 'Student', 'Logged out'),
(38, 1, '2016-10-02 01:12:39', 'Administrator', 'Logged in'),
(39, 100000067, '2016-10-02 01:58:35', 'Student', 'Logged out'),
(40, 100000068, '2016-10-02 02:16:08', 'Student', 'Logged out'),
(41, 100000069, '2016-10-02 02:20:24', 'Student', 'Logged out'),
(42, 100000071, '2016-10-02 09:16:51', 'Student', 'Logged out'),
(43, 1, '2018-11-27 07:03:09', 'Administrator', 'Logged in'),
(44, 1, '2018-11-27 10:39:57', 'Administrator', 'Logged out'),
(45, 1, '2018-11-27 10:42:19', 'Administrator', 'Logged in'),
(46, 1, '2018-11-27 10:44:25', 'Administrator', 'Logged in'),
(47, 1, '2018-11-27 10:49:41', 'Administrator', 'Logged out'),
(48, 1, '2018-11-27 11:03:31', 'Administrator', 'Logged in'),
(49, 1, '2018-11-27 12:50:29', 'Administrator', 'Logged in'),
(50, 1, '2018-11-28 04:51:58', 'Administrator', 'Logged in'),
(51, 1, '2018-11-28 20:16:18', 'Administrator', 'Logged in'),
(52, 100000074, '2018-11-28 20:16:53', 'Student', 'Logged in'),
(53, 1, '2018-11-28 21:06:53', 'Administrator', 'Logged out'),
(54, 1, '2018-11-28 21:07:26', 'Administrator', 'Logged in'),
(55, 100000074, '2018-11-28 23:08:35', 'Student', 'Logged out'),
(56, 100000074, '2018-11-28 23:10:44', 'Student', 'Logged in'),
(57, 100000074, '2018-11-28 23:24:34', 'Student', 'Logged out'),
(58, 1, '2018-11-29 09:57:42', 'Administrator', 'Logged in'),
(59, 100000074, '2018-11-29 09:58:12', 'Student', 'Logged in'),
(60, 1, '2018-11-30 12:11:25', 'Administrator', 'Logged in'),
(61, 1, '2018-11-30 13:32:17', 'Administrator', 'Logged in'),
(62, 1, '2018-11-30 14:25:42', 'Administrator', 'Logged in'),
(63, 1, '2018-11-30 20:43:10', 'Administrator', 'Logged in'),
(64, 1, '2018-12-01 03:20:44', 'Administrator', 'Logged out'),
(65, 1, '2018-12-01 03:21:10', 'Administrator', 'Logged in'),
(66, 1, '2018-12-01 03:21:21', 'Administrator', 'Logged out'),
(67, 1, '2018-12-01 03:29:17', 'Administrator', 'Logged in'),
(68, 1, '2018-12-01 03:34:33', 'Administrator', 'Logged out'),
(69, 11, '2018-12-01 04:47:26', 'Officer', 'Logged out'),
(70, 1, '2018-12-01 04:47:33', 'Administrator', 'Logged in'),
(71, 1, '2018-12-01 04:47:47', 'Administrator', 'Logged out'),
(72, 12, '2018-12-01 07:13:58', 'Officer', 'Logged out'),
(73, 1, '2018-12-01 07:14:10', 'Administrator', 'Logged in'),
(74, 1, '2018-12-01 07:14:35', 'Administrator', 'Logged out'),
(75, 1, '2018-12-01 07:14:45', 'Administrator', 'Logged in'),
(76, 1, '2018-12-02 21:28:41', 'Administrator', 'Logged out'),
(77, 12, '2018-12-02 21:41:34', 'Officer', 'Logged out'),
(78, 1, '2018-12-02 21:41:44', 'Administrator', 'Logged in'),
(79, 1, '2018-12-02 21:42:33', 'Administrator', 'Logged out'),
(80, 13, '2018-12-02 21:42:41', 'Instructor', 'Logged in'),
(81, 13, '2018-12-02 21:50:23', 'Instructor', 'Logged out'),
(82, 13, '2018-12-02 21:52:23', 'Instructor', 'Logged in'),
(83, 13, '2018-12-02 21:55:43', 'Instructor', 'Logged out'),
(84, 14, '2018-12-02 22:17:01', 'Officer', 'Logged out'),
(85, 1, '2018-12-02 22:17:09', 'Administrator', 'Logged in'),
(86, 1, '2018-12-02 23:50:40', 'Administrator', 'Logged out'),
(87, 1, '2018-12-03 00:02:22', 'Administrator', 'Logged in'),
(88, 1, '2018-12-03 00:03:28', 'Administrator', 'Logged out'),
(89, 15, '2018-12-03 00:03:36', 'Instructor', 'Logged in'),
(90, 15, '2018-12-03 00:05:17', 'Instructor', 'Logged out'),
(91, 15, '2018-12-03 00:05:31', 'Instructor', 'Logged in'),
(92, 15, '2018-12-03 00:07:13', 'Instructor', 'Logged out'),
(93, 15, '2018-12-03 00:07:36', 'Instructor', 'Logged in'),
(94, 15, '2018-12-03 00:09:45', 'Instructor', 'Logged out'),
(95, 15, '2018-12-03 00:10:10', 'Instructor', 'Logged in'),
(96, 15, '2018-12-03 00:12:13', 'Instructor', 'Logged out'),
(97, 15, '2018-12-03 00:12:24', 'Instructor', 'Logged in'),
(98, 15, '2018-12-03 00:16:41', 'Instructor', 'Logged out'),
(99, 1, '2018-12-03 00:16:56', 'Administrator', 'Logged in'),
(100, 1, '2018-12-03 00:20:39', 'Administrator', 'Logged out'),
(101, 15, '2018-12-03 00:20:51', 'Instructor', 'Logged in'),
(102, 15, '2018-12-03 00:21:41', 'Instructor', 'Logged out'),
(103, 15, '2018-12-03 00:21:48', 'Instructor', 'Logged in'),
(104, 15, '2018-12-03 00:22:05', 'Instructor', 'Logged out'),
(105, 1, '2018-12-03 00:22:12', 'Administrator', 'Logged in'),
(106, 1, '2018-12-03 00:37:47', 'Administrator', 'Logged out'),
(107, 1, '2018-12-03 01:42:38', 'Administrator', 'Logged in'),
(108, 1, '2018-12-03 02:22:22', 'Administrator', 'Logged in'),
(109, 1, '2018-12-03 02:45:42', 'Administrator', 'Logged out'),
(110, 15, '2018-12-03 02:47:25', 'Instructor', 'Logged in'),
(111, 15, '2018-12-03 02:47:45', 'Instructor', 'Logged out'),
(112, 1, '2018-12-03 02:48:19', 'Administrator', 'Logged in'),
(113, 1, '2018-12-03 02:48:55', 'Administrator', 'Logged out'),
(114, 16, '2018-12-03 02:50:26', 'Officer', 'Logged out'),
(115, 1, '2018-12-03 02:50:45', 'Administrator', 'Logged in'),
(116, 1, '2018-12-03 02:51:00', 'Administrator', 'Logged out'),
(117, 1, '2018-12-03 02:52:19', 'Administrator', 'Logged in'),
(118, 1, '2018-12-03 02:52:58', 'Administrator', 'Logged out'),
(119, 17, '2018-12-03 03:19:20', 'Officer', 'Logged out'),
(120, 17, '2018-12-03 03:25:40', 'Officer', 'Logged out'),
(121, 1, '2018-12-03 03:28:32', 'Administrator', 'Logged in'),
(122, 1, '2018-12-04 00:55:32', 'Administrator', 'Logged in'),
(123, 1, '2018-12-04 06:53:56', 'Administrator', 'Logged in'),
(124, 1, '2018-12-04 09:56:41', 'Administrator', 'Logged in'),
(125, 1, '2018-12-04 10:12:24', 'Administrator', 'Logged out'),
(126, 13, '2018-12-04 10:12:29', 'Instructor', 'Logged in'),
(127, 201806, '2019-11-25 09:25:32', 'Student', 'Logged out'),
(128, 1, '2019-11-25 09:26:02', 'Administrator', 'Logged in'),
(129, 1, '2019-11-25 09:54:21', 'Administrator', 'Logged out'),
(130, 1, '2019-11-25 10:02:31', 'Administrator', 'Logged in'),
(131, 1, '2019-11-25 10:02:34', 'Administrator', 'Logged out'),
(132, 1, '2019-11-28 04:59:35', 'Administrator', 'Logged out'),
(133, 1, '2019-11-28 05:00:19', 'Administrator', 'Logged out'),
(134, 1, '2019-11-28 05:04:12', '', 'Logged in'),
(135, 1, '2019-11-28 05:04:26', '', 'Logged out'),
(136, 1, '2019-11-28 05:04:35', '', 'Logged in'),
(137, 1, '2019-11-28 05:05:04', '', 'Logged out'),
(138, 1, '2019-11-28 05:05:11', 'Administrator', 'Logged in'),
(139, 1, '2019-11-28 08:50:28', 'Administrator', 'Logged out'),
(140, 1, '2019-11-28 08:50:34', 'Administrator', 'Logged in'),
(141, 1, '2019-11-28 09:09:56', 'Administrator', 'Logged in'),
(142, 1, '2019-11-28 11:05:06', 'Administrator', 'Logged out'),
(143, 1, '2019-11-28 11:26:23', 'Administrator', 'Logged in'),
(144, 1, '2019-11-28 11:26:25', 'Administrator', 'Logged out'),
(145, 1, '2019-11-28 11:32:49', 'Administrator', 'Logged in'),
(146, 1, '2019-11-28 11:33:03', 'Administrator', 'Logged out'),
(147, 1, '2019-11-28 11:33:52', 'Administrator', 'Logged in'),
(148, 18, '2019-11-28 11:38:54', 'Officer', 'Logged out'),
(149, 1, '2019-11-28 11:43:39', 'Administrator', 'Logged in'),
(150, 1, '2019-11-28 13:00:16', 'Administrator', 'Logged out'),
(151, 1, '2021-06-23 07:31:04', 'Administrator', 'Logged in'),
(152, 1, '2021-06-23 07:31:04', 'Administrator', 'Logged in'),
(153, 1, '2021-06-23 08:53:04', 'Administrator', 'Logged in'),
(154, 1, '2021-06-23 08:53:04', 'Administrator', 'Logged in'),
(155, 1, '2021-06-23 08:53:08', 'Administrator', 'Logged out'),
(156, 1, '2021-06-23 08:53:10', 'Administrator', 'Logged in'),
(157, 1, '2021-06-23 08:53:47', 'Administrator', 'Logged out'),
(158, 1, '2021-06-23 08:56:30', 'Administrator', 'Logged in'),
(159, 1, '2021-06-23 08:56:32', 'Administrator', 'Logged out'),
(160, 1, '2021-06-23 08:56:56', 'Administrator', 'Logged in'),
(161, 1, '2021-06-23 08:56:59', 'Administrator', 'Logged out'),
(162, 1, '2021-06-23 09:02:59', 'Administrator', 'Logged in'),
(163, 1, '2021-06-23 09:02:59', 'Administrator', 'Logged in'),
(164, 1, '2021-06-23 09:03:03', 'Administrator', 'Logged out'),
(165, 1, '2021-06-23 09:04:03', 'Administrator', 'Logged in'),
(166, 1, '2021-06-23 09:04:40', 'Administrator', 'Logged out'),
(167, 1, '2021-06-23 15:19:03', 'Administrator', 'Logged in'),
(168, 1, '2021-06-23 15:54:46', 'Administrator', 'Logged out'),
(169, 1, '2021-06-23 15:55:19', 'Administrator', 'Logged in'),
(170, 1, '2021-06-23 15:55:19', 'Administrator', 'Logged in'),
(171, 1, '2021-06-23 15:55:23', 'Administrator', 'Logged out');

-- --------------------------------------------------------

--
-- Table structure for table `tblsection`
--

CREATE TABLE `tblsection` (
  `SECTIONID` int(11) NOT NULL,
  `SECTION` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsection`
--

INSERT INTO `tblsection` (`SECTIONID`, `SECTION`) VALUES
(1, 'A'),
(2, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tblsemester`
--

CREATE TABLE `tblsemester` (
  `SEMID` int(11) NOT NULL,
  `SEMESTER` varchar(90) NOT NULL,
  `SETSEM` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsemester`
--

INSERT INTO `tblsemester` (`SEMID`, `SEMESTER`, `SETSEM`) VALUES
(1, 'First', 1),
(2, 'Second', 0),
(3, 'Summer', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblstuddetails`
--

CREATE TABLE `tblstuddetails` (
  `DETAIL_ID` int(11) NOT NULL,
  `GUARDIAN` varchar(255) NOT NULL,
  `GUARDIAN_ADDRESS` varchar(255) NOT NULL,
  `GCONTACT` varchar(40) NOT NULL,
  `IDNO` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstuddetails`
--

INSERT INTO `tblstuddetails` (`DETAIL_ID`, `GUARDIAN`, `GUARDIAN_ADDRESS`, `GCONTACT`, `IDNO`) VALUES
(1, 'Bless Paredes', '', '09306587988', '2018-SC-0001'),
(2, '', '', '', '15-SC-0836'),
(3, 'User 1', '', '071123456', '10'),
(4, 'User 2', '', '072123456', '20');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `S_ID` int(11) NOT NULL,
  `IDNO` varchar(90) NOT NULL,
  `FNAME` varchar(40) NOT NULL,
  `LNAME` varchar(40) NOT NULL,
  `MNAME` varchar(40) NOT NULL,
  `SEX` varchar(10) NOT NULL DEFAULT 'Male',
  `BDAY` date NOT NULL,
  `BPLACE` text NOT NULL,
  `STATUS` varchar(30) NOT NULL,
  `AGE` int(30) NOT NULL,
  `NATIONALITY` varchar(40) NOT NULL,
  `RELIGION` varchar(255) NOT NULL,
  `CONTACT_NO` varchar(40) NOT NULL,
  `HOME_ADD` text NOT NULL,
  `ACC_USERNAME` varchar(255) NOT NULL,
  `ACC_PASSWORD` text NOT NULL,
  `YEARLEVEL` int(11) NOT NULL,
  `COURSE_ID` int(11) NOT NULL,
  `STUDPHOTO` varchar(255) NOT NULL,
  `ACCOUNTTYPE` varchar(90) NOT NULL DEFAULT 'Student'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`S_ID`, `IDNO`, `FNAME`, `LNAME`, `MNAME`, `SEX`, `BDAY`, `BPLACE`, `STATUS`, `AGE`, `NATIONALITY`, `RELIGION`, `CONTACT_NO`, `HOME_ADD`, `ACC_USERNAME`, `ACC_PASSWORD`, `YEARLEVEL`, `COURSE_ID`, `STUDPHOTO`, `ACCOUNTTYPE`) VALUES
(3, '10', 'Dasith', 'Waragoda', 'c', 'Female', '1998-07-16', '', 'Single', 0, 'Sinhala', '', '071123456', '123/1,Test Address', '10', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', 0, 21, '', 'Officer'),
(4, '20', 'Dinithi', 'Ravindra', 'c', 'Female', '1997-01-02', '', 'Single', 0, 'Sinhala', '', '072123456', '123/1,Test Address', '20', '91032ad7bbcb6cf72875e8e8207dcfba80173f7c', 0, 29, '', 'Officer');

-- --------------------------------------------------------

--
-- Table structure for table `tblsy`
--

CREATE TABLE `tblsy` (
  `AYID` int(11) NOT NULL,
  `SY` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsy`
--

INSERT INTO `tblsy` (`AYID`, `SY`) VALUES
(1, '2000-2001');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `ACCOUNT_ID` int(11) NOT NULL,
  `ACCOUNT_NAME` varchar(255) NOT NULL,
  `ACCOUNT_USERNAME` varchar(255) NOT NULL,
  `ACCOUNT_PASSWORD` text NOT NULL,
  `ACCOUNT_TYPE` varchar(30) NOT NULL,
  `EMPID` varchar(90) NOT NULL,
  `POSITION` varchar(90) NOT NULL,
  `USERIMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`ACCOUNT_ID`, `ACCOUNT_NAME`, `ACCOUNT_USERNAME`, `ACCOUNT_PASSWORD`, `ACCOUNT_TYPE`, `EMPID`, `POSITION`, `USERIMAGE`) VALUES
(1, 'Janobe', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', '1234', '', 'photos/JANOBE.png'),
(13, 'janobe', 'i', '042dc4512fa3d391c5170cf3aa61e6a638f84342', 'Instructor', '', '', ''),
(15, 'Evelyn B. Lomboy', 'SNCA-0001', '5bce3b6bb2c3dabfc8d74b2ef25cd32876a4f214', 'Instructor', '', '', ''),
(19, 'asd asd', '2018-SC-0001', '0bd6f980e6605d114f65981d40c8259d66ec7c49', 'Officer', '2018-SC-0001', 'President', ''),
(20, 'Dasith Waragoda', '10', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', 'Officer', '10', 'President', ''),
(21, 'Dinithi Ravindra', '20', '91032ad7bbcb6cf72875e8e8207dcfba80173f7c', 'Officer', '20', 'President', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`COURSE_ID`),
  ADD KEY `DEPT_ID` (`DEPT_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DEPT_ID`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`GRADE_ID`),
  ADD KEY `IDNO` (`IDNO`);

--
-- Indexes for table `studentsubjects`
--
ALTER TABLE `studentsubjects`
  ADD PRIMARY KEY (`STUDSUBJ_ID`),
  ADD KEY `IDNO` (`IDNO`),
  ADD KEY `SUBJ_ID` (`SUBJ_ID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SUBJ_ID`),
  ADD KEY `COURSE_ID` (`COURSE_ID`);

--
-- Indexes for table `tblannouncement`
--
ALTER TABLE `tblannouncement`
  ADD PRIMARY KEY (`ANNOUNCEMENTID`);

--
-- Indexes for table `tblauto`
--
ALTER TABLE `tblauto`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `autocode` (`autocode`);

--
-- Indexes for table `tblexpenses`
--
ALTER TABLE `tblexpenses`
  ADD PRIMARY KEY (`EXPENSEID`);

--
-- Indexes for table `tblfees`
--
ALTER TABLE `tblfees`
  ADD PRIMARY KEY (`FEEID`);

--
-- Indexes for table `tblinstructorsubject`
--
ALTER TABLE `tblinstructorsubject`
  ADD PRIMARY KEY (`INST_ID`);

--
-- Indexes for table `tbllevel`
--
ALTER TABLE `tbllevel`
  ADD PRIMARY KEY (`LEVELID`);

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
  ADD PRIMARY KEY (`LOGID`);

--
-- Indexes for table `tblsection`
--
ALTER TABLE `tblsection`
  ADD PRIMARY KEY (`SECTIONID`);

--
-- Indexes for table `tblsemester`
--
ALTER TABLE `tblsemester`
  ADD PRIMARY KEY (`SEMID`);

--
-- Indexes for table `tblstuddetails`
--
ALTER TABLE `tblstuddetails`
  ADD PRIMARY KEY (`DETAIL_ID`),
  ADD KEY `IDNO` (`IDNO`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`S_ID`),
  ADD UNIQUE KEY `IDNO` (`IDNO`);

--
-- Indexes for table `tblsy`
--
ALTER TABLE `tblsy`
  ADD PRIMARY KEY (`AYID`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`ACCOUNT_ID`),
  ADD UNIQUE KEY `ACCOUNT_USERNAME` (`ACCOUNT_USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `COURSE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `DEPT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `GRADE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `studentsubjects`
--
ALTER TABLE `studentsubjects`
  MODIFY `STUDSUBJ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `SUBJ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblannouncement`
--
ALTER TABLE `tblannouncement`
  MODIFY `ANNOUNCEMENTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2019010;

--
-- AUTO_INCREMENT for table `tblauto`
--
ALTER TABLE `tblauto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblexpenses`
--
ALTER TABLE `tblexpenses`
  MODIFY `EXPENSEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblfees`
--
ALTER TABLE `tblfees`
  MODIFY `FEEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblinstructorsubject`
--
ALTER TABLE `tblinstructorsubject`
  MODIFY `INST_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbllevel`
--
ALTER TABLE `tbllevel`
  MODIFY `LEVELID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `LOGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `tblsection`
--
ALTER TABLE `tblsection`
  MODIFY `SECTIONID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblsemester`
--
ALTER TABLE `tblsemester`
  MODIFY `SEMID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblstuddetails`
--
ALTER TABLE `tblstuddetails`
  MODIFY `DETAIL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblsy`
--
ALTER TABLE `tblsy`
  MODIFY `AYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
