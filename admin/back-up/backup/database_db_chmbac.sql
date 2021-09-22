# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 28. November 2018 13:43 CET
# Hostname: localhost
# Database: `db_chmbac`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------


#
# Delete any existing table `course`
#

DROP TABLE IF EXISTS `course`;


#
# Table structure of table `course`
#

CREATE TABLE `course` (
  `COURSE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COURSE_NAME` varchar(30) NOT NULL,
  `COURSE_DESC` varchar(255) NOT NULL,
  `DEPT_ID` int(11) NOT NULL,
  `SETSEMESTER` varchar(90) NOT NULL,
  PRIMARY KEY (`COURSE_ID`),
  KEY `DEPT_ID` (`DEPT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1 ;

#
# Data contents of table course (9 records)
#
 
INSERT INTO `course` VALUES (21, 'BSBA Financial Management', 'Bachelor of Science in Busines Administration ', 34, '') ; 
INSERT INTO `course` VALUES (24, 'AB Philosophy', 'Bachelor of ARTS (AB)', 34, '') ; 
INSERT INTO `course` VALUES (29, 'AB English', 'Bachelor of ARTS (AB)', 34, '') ; 
INSERT INTO `course` VALUES (30, 'BSED English', 'Bachelor of Secondary Education (BSED)', 35, '') ; 
INSERT INTO `course` VALUES (34, 'BSED Math', 'Batchelor of Secondary Education (BSED)', 35, '') ; 
INSERT INTO `course` VALUES (40, 'BSED Filipino', 'Batchelor of Secondary Education (BSED)', 35, '') ; 
INSERT INTO `course` VALUES (44, 'BEED General', 'Batchelor of Elementary Education (BEED)', 35, '') ; 
INSERT INTO `course` VALUES (52, 'BSIT', 'Bachelor of Science in Information Technology', 33, '') ; 
INSERT INTO `course` VALUES (56, 'BSACT', 'Bachelor of Accounting Technology', 34, '') ;
#
# End of data contents of table course
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 28. November 2018 13:43 CET
# Hostname: localhost
# Database: `db_chmbac`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `department`
# --------------------------------------------------------


#
# Delete any existing table `department`
#

DROP TABLE IF EXISTS `department`;


#
# Table structure of table `department`
#

CREATE TABLE `department` (
  `DEPT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DEPARTMENT_NAME` varchar(30) NOT NULL,
  `DEPARTMENT_DESC` varchar(50) NOT NULL,
  PRIMARY KEY (`DEPT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 ;

#
# Data contents of table department (4 records)
#
 
INSERT INTO `department` VALUES (33, 'IT', 'Information Technology Department') ; 
INSERT INTO `department` VALUES (34, 'BITE', 'Business and IT Education') ; 
INSERT INTO `department` VALUES (35, 'TEA', 'Teacher Education Department') ; 
INSERT INTO `department` VALUES (36, 'arts', 'Arts Department') ;
#
# End of data contents of table department
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 28. November 2018 13:43 CET
# Hostname: localhost
# Database: `db_chmbac`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `department`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------


#
# Delete any existing table `grades`
#

DROP TABLE IF EXISTS `grades`;


#
# Table structure of table `grades`
#

CREATE TABLE `grades` (
  `GRADE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDNO` int(11) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `FIRST` int(11) NOT NULL,
  `SECOND` int(11) NOT NULL,
  `THIRD` int(11) NOT NULL,
  `FOURTH` int(11) NOT NULL,
  `AVE` float NOT NULL,
  `REMARKS` text NOT NULL,
  `COMMENT` text NOT NULL,
  `SEMS` varchar(90) NOT NULL,
  PRIMARY KEY (`GRADE_ID`),
  KEY `IDNO` (`IDNO`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 ;

#
# Data contents of table grades (16 records)
#
 
INSERT INTO `grades` VALUES (1, 100000075, 1, 0, 0, 0, 0, '90', 'Passed', '', 'First') ; 
INSERT INTO `grades` VALUES (2, 100000075, 2, 0, 0, 0, 0, '0', '', '', 'First') ; 
INSERT INTO `grades` VALUES (3, 100000075, 3, 0, 0, 0, 0, '0', '', '', 'First') ; 
INSERT INTO `grades` VALUES (4, 100000075, 4, 0, 0, 0, 0, '0', '', '', 'First') ; 
INSERT INTO `grades` VALUES (5, 100000075, 5, 0, 0, 0, 0, '0', '', '', 'First') ; 
INSERT INTO `grades` VALUES (6, 100000075, 6, 0, 0, 0, 0, '0', '', '', 'First') ; 
INSERT INTO `grades` VALUES (7, 100000075, 7, 0, 0, 0, 0, '0', '', '', 'First') ; 
INSERT INTO `grades` VALUES (8, 100000075, 8, 0, 0, 0, 0, '0', '', '', 'Second') ; 
INSERT INTO `grades` VALUES (9, 100000075, 9, 0, 0, 0, 0, '0', '', '', 'Second') ; 
INSERT INTO `grades` VALUES (10, 100000075, 10, 0, 0, 0, 0, '0', '', '', 'Second') ; 
INSERT INTO `grades` VALUES (11, 100000075, 11, 0, 0, 0, 0, '0', '', '', 'Second') ; 
INSERT INTO `grades` VALUES (12, 100000075, 12, 0, 0, 0, 0, '0', '', '', 'Second') ; 
INSERT INTO `grades` VALUES (13, 100000075, 13, 0, 0, 0, 0, '0', '', '', 'Second') ; 
INSERT INTO `grades` VALUES (14, 100000075, 14, 0, 0, 0, 0, '0', '', '', 'Second') ; 
INSERT INTO `grades` VALUES (15, 100000075, 15, 0, 0, 0, 0, '0', '', '', 'Second') ; 
INSERT INTO `grades` VALUES (16, 100000075, 16, 0, 0, 0, 0, '0', '', '', 'First') ;
#
# End of data contents of table grades
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 28. November 2018 13:43 CET
# Hostname: localhost
# Database: `db_chmbac`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `department`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentsubjects`
# --------------------------------------------------------


#
# Delete any existing table `studentsubjects`
#

DROP TABLE IF EXISTS `studentsubjects`;


#
# Table structure of table `studentsubjects`
#

CREATE TABLE `studentsubjects` (
  `STUDSUBJ_ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDNO` int(11) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `LEVEL` varchar(90) NOT NULL,
  `SEMESTER` varchar(30) NOT NULL,
  `SY` text NOT NULL,
  `ATTEMP` int(11) NOT NULL,
  `AVERAGE` double NOT NULL,
  `OUTCOME` text NOT NULL,
  PRIMARY KEY (`STUDSUBJ_ID`),
  KEY `IDNO` (`IDNO`),
  KEY `SUBJ_ID` (`SUBJ_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 ;

#
# Data contents of table studentsubjects (16 records)
#
 
INSERT INTO `studentsubjects` VALUES (1, 100000075, 1, 'First Year', 'First', '2000-2001', 1, '90', 'Passed') ; 
INSERT INTO `studentsubjects` VALUES (2, 100000075, 2, 'First Year', 'First', '2000-2001', 1, '0', '') ; 
INSERT INTO `studentsubjects` VALUES (3, 100000075, 3, 'First Year', 'First', '2000-2001', 1, '0', '') ; 
INSERT INTO `studentsubjects` VALUES (4, 100000075, 4, 'First Year', 'First', '2000-2001', 1, '0', '') ; 
INSERT INTO `studentsubjects` VALUES (5, 100000075, 5, 'First Year', 'First', '2000-2001', 1, '0', '') ; 
INSERT INTO `studentsubjects` VALUES (6, 100000075, 6, 'First Year', 'First', '2000-2001', 1, '0', '') ; 
INSERT INTO `studentsubjects` VALUES (7, 100000075, 7, 'First Year', 'First', '2000-2001', 1, '0', '') ; 
INSERT INTO `studentsubjects` VALUES (8, 100000075, 8, 'First Year', 'Second', '2000-2001', 1, '0', '') ; 
INSERT INTO `studentsubjects` VALUES (9, 100000075, 9, 'First Year', 'Second', '2000-2001', 1, '0', '') ; 
INSERT INTO `studentsubjects` VALUES (10, 100000075, 10, 'First Year', 'Second', '2000-2001', 1, '0', '') ; 
INSERT INTO `studentsubjects` VALUES (11, 100000075, 11, 'First Year', 'Second', '2000-2001', 1, '0', '') ; 
INSERT INTO `studentsubjects` VALUES (12, 100000075, 12, 'First Year', 'Second', '2000-2001', 1, '0', '') ; 
INSERT INTO `studentsubjects` VALUES (13, 100000075, 13, 'First Year', 'Second', '2000-2001', 1, '0', '') ; 
INSERT INTO `studentsubjects` VALUES (14, 100000075, 14, 'First Year', 'Second', '2000-2001', 1, '0', '') ; 
INSERT INTO `studentsubjects` VALUES (15, 100000075, 15, 'First Year', 'Second', '2000-2001', 1, '0', '') ; 
INSERT INTO `studentsubjects` VALUES (16, 100000075, 16, 'Second Year', 'First', '2000-2001', 1, '0', '') ;
#
# End of data contents of table studentsubjects
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 28. November 2018 13:43 CET
# Hostname: localhost
# Database: `db_chmbac`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `department`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentsubjects`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `subject`
# --------------------------------------------------------


#
# Delete any existing table `subject`
#

DROP TABLE IF EXISTS `subject`;


#
# Table structure of table `subject`
#

CREATE TABLE `subject` (
  `SUBJ_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SUBJ_CODE` varchar(30) NOT NULL,
  `SUBJ_DESCRIPTION` varchar(255) NOT NULL,
  `UNIT` varchar(30) NOT NULL,
  `PRE_REQUISITE` varchar(30) NOT NULL DEFAULT 'None',
  `COURSE_ID` int(11) NOT NULL,
  `YEARLEVEL` varchar(90) NOT NULL,
  `AY` varchar(30) NOT NULL,
  `SEMESTER` varchar(20) NOT NULL,
  `PreTaken` tinyint(1) NOT NULL,
  PRIMARY KEY (`SUBJ_ID`),
  KEY `COURSE_ID` (`COURSE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 ;

#
# Data contents of table subject (16 records)
#
 
INSERT INTO `subject` VALUES (1, 'IT 101', 'IT Fundamentals', '3', 'NONE', 52, 'First Year', '2000-2001', 'First', 0) ; 
INSERT INTO `subject` VALUES (2, 'IT 102', 'Integrated Aplication Software and Productivity Tools', '3(2/1)', 'NONE', 52, 'First Year', '2000-2001', 'First', 0) ; 
INSERT INTO `subject` VALUES (3, 'IT 103', 'Programming I', '3', 'NONE', 52, 'First Year', '2000-2001', 'First', 0) ; 
INSERT INTO `subject` VALUES (4, 'Math 101', 'College Algebra', '3', 'NONE', 52, 'First Year', '2000-2001', 'First', 0) ; 
INSERT INTO `subject` VALUES (5, 'Stat 102', 'Probability Statistics', '3', 'NONE', 52, 'First Year', '2000-2001', 'First', 0) ; 
INSERT INTO `subject` VALUES (6, 'PE 101', 'Physical Fitness', '3', 'NONE', 52, 'First Year', '2000-2001', 'First', 0) ; 
INSERT INTO `subject` VALUES (7, 'NSTP 1', 'ROTC / CWTS / LTS 1', '3', 'NONE', 52, 'First Year', '2000-2001', 'First', 0) ; 
INSERT INTO `subject` VALUES (8, 'IT 104', 'Programming 2', '3', 'IT 103,IT 101', 52, 'First Year', '2000-2001', 'Second', 0) ; 
INSERT INTO `subject` VALUES (9, 'IT 201', 'Logic Design', '3', 'IT 101', 52, 'First Year', '2000-2001', 'Second', 0) ; 
INSERT INTO `subject` VALUES (10, 'Math 102', 'Plane Trigonometry', '3', 'NONE', 52, 'First Year', '2000-2001', 'Second', 0) ; 
INSERT INTO `subject` VALUES (11, 'Eng 102', 'Speech Communication with Debate', '3', 'NONE', 52, 'First Year', '2000-2001', 'Second', 0) ; 
INSERT INTO `subject` VALUES (12, 'NatSci 101', 'Biological Science', '3', 'NONE', 52, 'First Year', '2000-2001', 'Second', 0) ; 
INSERT INTO `subject` VALUES (13, 'SocSci 101', 'Philippine History', '3', 'NONE', 52, 'First Year', '2000-2001', 'Second', 0) ; 
INSERT INTO `subject` VALUES (14, 'PE 102', 'Rhythmic Activities, Folk and Social Dancing', '2', 'NONE', 52, 'First Year', '2000-2001', 'Second', 0) ; 
INSERT INTO `subject` VALUES (15, 'NSTP 2', 'ROTC / CWTS / LTS 2', '3', 'NONE', 52, 'First Year', '2000-2001', 'Second', 0) ; 
INSERT INTO `subject` VALUES (16, 'IT 105', 'Computer Organization', '3', 'IT  201', 52, 'Second Year', '2000-2001', 'First', 0) ;
#
# End of data contents of table subject
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 28. November 2018 13:43 CET
# Hostname: localhost
# Database: `db_chmbac`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `department`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentsubjects`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `subject`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblauto`
# --------------------------------------------------------


#
# Delete any existing table `tblauto`
#

DROP TABLE IF EXISTS `tblauto`;


#
# Table structure of table `tblauto`
#

CREATE TABLE `tblauto` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `autocode` varchar(255) DEFAULT NULL,
  `autoname` varchar(255) DEFAULT NULL,
  `appendchar` varchar(255) DEFAULT NULL,
  `autostart` int(11) DEFAULT '0',
  `autoend` int(11) DEFAULT '0',
  `incrementvalue` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `autocode` (`autocode`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ;

#
# Data contents of table tblauto (4 records)
#
 
INSERT INTO `tblauto` VALUES (1, 'Asset', 'Asset', 'ASitem', 0, 3, 1) ; 
INSERT INTO `tblauto` VALUES (2, 'Trans', 'Transaction', 'TrAnS', 1, 5, 1) ; 
INSERT INTO `tblauto` VALUES (3, 'SIDNO', 'IDNO', '2015', 1000000, 76, 1) ; 
INSERT INTO `tblauto` VALUES (4, 'EMPLOYEE', 'EMPID', '020010', 0, 2, 1) ;
#
# End of data contents of table tblauto
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 28. November 2018 13:43 CET
# Hostname: localhost
# Database: `db_chmbac`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `department`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentsubjects`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `subject`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblauto`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tbllevel`
# --------------------------------------------------------


#
# Delete any existing table `tbllevel`
#

DROP TABLE IF EXISTS `tbllevel`;


#
# Table structure of table `tbllevel`
#

CREATE TABLE `tbllevel` (
  `LEVELID` int(11) NOT NULL AUTO_INCREMENT,
  `YEARLEVEL` varchar(30) NOT NULL,
  `SECTION` varchar(90) NOT NULL,
  PRIMARY KEY (`LEVELID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ;

#
# Data contents of table tbllevel (4 records)
#
 
INSERT INTO `tbllevel` VALUES (3, 'First Year', '') ; 
INSERT INTO `tbllevel` VALUES (4, 'Second Year', '') ; 
INSERT INTO `tbllevel` VALUES (5, 'Third Year', '') ; 
INSERT INTO `tbllevel` VALUES (6, 'Fourth Year', '') ;
#
# End of data contents of table tbllevel
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 28. November 2018 13:43 CET
# Hostname: localhost
# Database: `db_chmbac`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `department`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentsubjects`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `subject`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblauto`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tbllevel`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tbllogs`
# --------------------------------------------------------


#
# Delete any existing table `tbllogs`
#

DROP TABLE IF EXISTS `tbllogs`;


#
# Table structure of table `tbllogs`
#

CREATE TABLE `tbllogs` (
  `LOGID` int(11) NOT NULL AUTO_INCREMENT,
  `USERID` int(11) NOT NULL,
  `LOGDATETIME` datetime NOT NULL,
  `LOGROLE` varchar(55) NOT NULL,
  `LOGMODE` varchar(55) NOT NULL,
  PRIMARY KEY (`LOGID`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1 ;

#
# Data contents of table tbllogs (61 records)
#
 
INSERT INTO `tbllogs` VALUES (1, 1, '2016-09-22 21:46:01', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (2, 100000022, '2016-09-22 21:46:29', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (3, 100000015, '2016-09-23 05:00:38', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (4, 100000015, '2016-09-23 05:00:45', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (5, 100000025, '2016-09-23 05:02:31', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (6, 100000025, '2016-09-23 05:02:55', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (7, 100000025, '2016-09-23 05:03:53', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (8, 100000025, '2016-09-23 05:11:40', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (9, 100000025, '2016-09-24 09:32:59', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (10, 1, '2016-09-24 09:46:06', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (11, 1, '2016-09-24 09:53:17', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (12, 1, '2016-09-24 09:54:45', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (13, 100000027, '2016-09-24 15:30:32', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (14, 100000015, '2016-09-27 09:34:11', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (15, 1, '2016-09-27 10:59:58', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (16, 100000015, '2016-09-27 11:00:42', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (17, 100000029, '2016-09-27 17:34:11', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (18, 100000015, '0000-00-00 00:00:00', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (19, 100000015, '2016-09-27 17:37:13', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (20, 100000029, '2016-09-27 18:27:40', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (21, 100000015, '2016-09-27 18:27:56', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (22, 100000015, '2016-09-27 18:29:20', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (23, 100000030, '2016-09-27 22:49:02', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (24, 100000015, '2016-09-27 22:50:10', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (25, 100000015, '2016-09-28 01:47:07', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (26, 100000033, '2016-09-28 04:43:26', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (27, 1, '2016-10-01 04:07:48', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (28, 100000056, '2016-10-01 09:22:17', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (29, 100000056, '2016-10-01 09:22:51', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (30, 100000056, '2016-10-01 09:23:30', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (31, 100000056, '2016-10-01 12:52:40', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (32, 100000057, '2016-10-01 15:28:47', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (33, 100000058, '2016-10-01 15:44:01', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (34, 100000057, '2016-10-01 15:44:11', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (35, 100000057, '2016-10-01 16:38:34', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (36, 100000061, '2016-10-01 16:50:27', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (37, 100000061, '2016-10-01 18:08:05', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (38, 1, '2016-10-02 01:12:39', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (39, 100000067, '2016-10-02 01:58:35', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (40, 100000068, '2016-10-02 02:16:08', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (41, 100000069, '2016-10-02 02:20:24', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (42, 100000071, '2016-10-02 09:16:51', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (43, 1, '2018-11-27 07:03:09', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (44, 1, '2018-11-27 10:39:57', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (45, 1, '2018-11-27 10:42:19', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (46, 1, '2018-11-27 10:44:25', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (47, 1, '2018-11-27 10:49:41', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (48, 1, '2018-11-27 11:03:31', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (49, 1, '2018-11-27 12:50:29', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (50, 1, '2018-11-28 04:51:58', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (51, 1, '2018-11-28 09:07:51', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (52, 1, '2018-11-28 09:07:58', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (53, 100000075, '2018-11-28 12:12:45', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (54, 100000075, '2018-11-28 12:13:37', 'Student', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (55, 100000075, '2018-11-28 13:33:31', 'Student', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (56, 1, '2018-11-28 13:35:41', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (57, 1, '2018-11-28 13:36:59', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (58, 1, '2018-11-28 13:37:02', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (59, 1, '2018-11-28 13:37:54', 'Administrator', 'Logged in') ; 
INSERT INTO `tbllogs` VALUES (60, 1, '2018-11-28 13:37:56', 'Administrator', 'Logged out') ; 
INSERT INTO `tbllogs` VALUES (61, 1, '2018-11-28 13:38:10', 'Administrator', 'Logged in') ;
#
# End of data contents of table tbllogs
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 28. November 2018 13:43 CET
# Hostname: localhost
# Database: `db_chmbac`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `department`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentsubjects`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `subject`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblauto`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tbllevel`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tbllogs`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblsection`
# --------------------------------------------------------


#
# Delete any existing table `tblsection`
#

DROP TABLE IF EXISTS `tblsection`;


#
# Table structure of table `tblsection`
#

CREATE TABLE `tblsection` (
  `SECTIONID` int(11) NOT NULL AUTO_INCREMENT,
  `SECTION` varchar(90) NOT NULL,
  PRIMARY KEY (`SECTIONID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;

#
# Data contents of table tblsection (0 records)
#

#
# End of data contents of table tblsection
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 28. November 2018 13:43 CET
# Hostname: localhost
# Database: `db_chmbac`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `department`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentsubjects`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `subject`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblauto`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tbllevel`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tbllogs`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblsection`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblsemester`
# --------------------------------------------------------


#
# Delete any existing table `tblsemester`
#

DROP TABLE IF EXISTS `tblsemester`;


#
# Table structure of table `tblsemester`
#

CREATE TABLE `tblsemester` (
  `SEMID` int(11) NOT NULL AUTO_INCREMENT,
  `SEMESTER` varchar(90) NOT NULL,
  `SETSEM` tinyint(1) NOT NULL,
  PRIMARY KEY (`SEMID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ;

#
# Data contents of table tblsemester (3 records)
#
 
INSERT INTO `tblsemester` VALUES (1, 'First', 0) ; 
INSERT INTO `tblsemester` VALUES (2, 'Second', 0) ; 
INSERT INTO `tblsemester` VALUES (3, 'Summer', 1) ;
#
# End of data contents of table tblsemester
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 28. November 2018 13:43 CET
# Hostname: localhost
# Database: `db_chmbac`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `department`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentsubjects`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `subject`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblauto`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tbllevel`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tbllogs`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblsection`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblsemester`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblstuddetails`
# --------------------------------------------------------


#
# Delete any existing table `tblstuddetails`
#

DROP TABLE IF EXISTS `tblstuddetails`;


#
# Table structure of table `tblstuddetails`
#

CREATE TABLE `tblstuddetails` (
  `DETAIL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `GUARDIAN` varchar(255) NOT NULL,
  `GUARDIAN_ADDRESS` varchar(255) NOT NULL,
  `GCONTACT` varchar(40) NOT NULL,
  `IDNO` int(30) NOT NULL,
  PRIMARY KEY (`DETAIL_ID`),
  KEY `IDNO` (`IDNO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ;

#
# Data contents of table tblstuddetails (1 records)
#
 
INSERT INTO `tblstuddetails` VALUES (1, 'Bless Paredes', '', '09306587988', 100000075) ;
#
# End of data contents of table tblstuddetails
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 28. November 2018 13:43 CET
# Hostname: localhost
# Database: `db_chmbac`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `department`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentsubjects`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `subject`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblauto`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tbllevel`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tbllogs`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblsection`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblsemester`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblstuddetails`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblstudent`
# --------------------------------------------------------


#
# Delete any existing table `tblstudent`
#

DROP TABLE IF EXISTS `tblstudent`;


#
# Table structure of table `tblstudent`
#

CREATE TABLE `tblstudent` (
  `S_ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDNO` int(20) NOT NULL,
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
  PRIMARY KEY (`S_ID`),
  UNIQUE KEY `IDNO` (`IDNO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ;

#
# Data contents of table tblstudent (1 records)
#
 
INSERT INTO `tblstudent` VALUES (1, 100000075, 'Annie', 'Paredes', 'L', 'Female', '1990-11-12', 'Binalbagan City', 'Single', 0, '09206589888', 'Catholic', '09206589888', 'Binalbagan City', '100000075', '90d3914f1162deea3630076521688cc5d46544a6', 0, 52, 'student_image/customerCLIP.jpg') ;
#
# End of data contents of table tblstudent
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 28. November 2018 13:43 CET
# Hostname: localhost
# Database: `db_chmbac`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `department`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentsubjects`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `subject`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblauto`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tbllevel`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tbllogs`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblsection`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblsemester`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblstuddetails`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblstudent`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblsy`
# --------------------------------------------------------


#
# Delete any existing table `tblsy`
#

DROP TABLE IF EXISTS `tblsy`;


#
# Table structure of table `tblsy`
#

CREATE TABLE `tblsy` (
  `AYID` int(11) NOT NULL AUTO_INCREMENT,
  `SY` varchar(30) NOT NULL,
  PRIMARY KEY (`AYID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ;

#
# Data contents of table tblsy (1 records)
#
 
INSERT INTO `tblsy` VALUES (1, '2000-2001') ;
#
# End of data contents of table tblsy
# --------------------------------------------------------

# WordPress : buffernow.com MySQL database backup
#
# Generated: Wednesday 28. November 2018 13:43 CET
# Hostname: localhost
# Database: `db_chmbac`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `course`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `department`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `grades`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `studentsubjects`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `subject`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblauto`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tbllevel`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tbllogs`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblsection`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblsemester`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblstuddetails`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblstudent`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `tblsy`
# --------------------------------------------------------
# --------------------------------------------------------
# Table: `useraccounts`
# --------------------------------------------------------


#
# Delete any existing table `useraccounts`
#

DROP TABLE IF EXISTS `useraccounts`;


#
# Table structure of table `useraccounts`
#

CREATE TABLE `useraccounts` (
  `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ACCOUNT_NAME` varchar(255) NOT NULL,
  `ACCOUNT_USERNAME` varchar(255) NOT NULL,
  `ACCOUNT_PASSWORD` text NOT NULL,
  `ACCOUNT_TYPE` varchar(30) NOT NULL,
  `EMPID` int(11) NOT NULL,
  `USERIMAGE` varchar(255) NOT NULL,
  PRIMARY KEY (`ACCOUNT_ID`),
  UNIQUE KEY `ACCOUNT_USERNAME` (`ACCOUNT_USERNAME`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ;

#
# Data contents of table useraccounts (1 records)
#
 
INSERT INTO `useraccounts` VALUES (1, 'Janno Palacios', 'janobe', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 1234, 'photos/LoginRed.jpg') ;
#
# End of data contents of table useraccounts
# --------------------------------------------------------

