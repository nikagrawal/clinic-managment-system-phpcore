-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 04:06 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newcms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` int(11) NOT NULL,
  `Admin_Name` varchar(20) NOT NULL,
  `Admin_Email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image_name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Admin_Name`, `Admin_Email`, `password`, `image_name`) VALUES
(46, 'Admin', 'admin@gmail.com', '123', 'image46.jpg'),
(48, 'nik', 'nik@gmail.com', '12345', 'image47.jpg'),
(49, '', '', '', ''),
(50, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_table`
--

CREATE TABLE `appointment_table` (
  `appointment_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `appointment_date` varchar(50) NOT NULL,
  `appointment_time` varchar(20) NOT NULL,
  `Status_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_table`
--

INSERT INTO `appointment_table` (`appointment_id`, `patient_id`, `doctor_id`, `appointment_date`, `appointment_time`, `Status_id`) VALUES
(118, 18, 26, '05/11/2021', '11:54', 'checked'),
(120, 18, 27, '11', '', 'pending'),
(121, 0, 0, '11', '23:05', 'pending'),
(122, 16, 26, '05/11/2021', '23:05', 'checked'),
(123, 16, 26, '', '', 'cancel'),
(126, 18, 26, '05/12/2021', '11:50', 'checked'),
(127, 16, 26, '05/12/2021', '12:04', '3'),
(130, 15, 26, '05/13/2021', '02:33', 'pending'),
(131, 15, 26, '05/13/2021', '02:33', 'pending'),
(133, 23, 26, '05/13/2021', '02:33', 'checked'),
(134, 17, 26, '05/13/2021', '05:55', 'pending'),
(135, 22, 26, '05/14/2021', '06:26', 'checked'),
(136, 15, 27, '05/16/2021', '06:56', 'pending'),
(137, 18, 26, '05/16/2021', '05:59', 'checked'),
(138, 15, 26, '05/20/2021', '05:55', 'checked'),
(139, 19, 26, '05/20/2021', '05:55', 'cancel'),
(140, 23, 26, '05/20/2021', '05:55', 'checked'),
(141, 24, 29, '05/25/2021', '05:05', 'pending'),
(142, 28, 27, '05/25/2021', '21:35', 'pending'),
(143, 18, 26, '05/25/2021', '21:35', 'pending'),
(144, 15, 27, '05/24/2021', '21:35', 'pending'),
(145, 19, 27, '05/26/2021', '21:35', 'pending'),
(146, 21, 29, '05/26/2021', '21:35', 'pending'),
(147, 23, 27, '05/23/2021', '21:35', 'pending'),
(148, 22, 27, '05/23/2021', '21:35', 'pending'),
(149, 20, 29, '05/23/2021', '21:35', 'pending'),
(150, 17, 26, '05/22/2021', '01:39', 'pending'),
(151, 26, 26, '05/22/2021', '01:39', 'pending'),
(152, 29, 27, '05/29/2021', '05:59', 'checked'),
(153, 15, 26, '06/01/2021', '05:45', 'pending'),
(154, 17, 27, '06/01/2021', '05:45', 'pending'),
(155, 15, 29, '05/13/2021', '16:05', 'pending'),
(156, 15, 29, '05/13/2021', '16:05', 'pending'),
(157, 17, 32, '06/05/2021', '16:05', 'checked'),
(158, 28, 32, '06/15/2021', '04:55', 'checked'),
(159, 27, 32, '6', '', 'pending'),
(160, 18, 32, '06/06/2021', '02:21', 'checked'),
(161, 15, 32, '06/07/2021', '04:59', 'pending'),
(162, 0, 0, '06/07/2021', '04:59', 'pending'),
(163, 15, 32, '06/07/2021', '04:59', 'pending'),
(164, 31, 27, '06/08/2021', '06:56', 'pending'),
(165, 17, 32, '06/08/2021', '06:56', 'pending'),
(166, 19, 27, '06/08/2021', '06:56', 'pending'),
(167, 21, 29, '06/08/2021', '06:56', 'pending'),
(168, 27, 0, '06/08/2021', '13:29', 'pending'),
(169, 0, 0, '06/08/2021', '03:29', 'pending'),
(170, 27, 27, '06/08/2021', '03:29', 'pending'),
(171, 29, 32, '06/08/2021', '03:29', 'checked'),
(172, 19, 32, '06/08/2021', '03:29', 'pending'),
(173, 29, 32, '06/06/2021', '03:29', 'pending'),
(174, 31, 32, '06/06/2021', '03:29', 'pending'),
(175, 22, 32, '06/06/2021', '03:29', 'pending'),
(176, 28, 27, '06/06/2021', '', 'pending'),
(177, 0, 0, '06/06/2021', '03:02', 'pending'),
(178, 16, 27, '06/06/2021', '03:02', 'pending'),
(179, 0, 0, '', '', 'pending'),
(180, 0, 0, '', '', 'pending'),
(181, 0, 0, '', '', 'pending'),
(182, 15, 32, '06/09/2021', '09:09', '3'),
(183, 17, 32, '06/09/2021', '05:06', 'checked'),
(184, 15, 32, '06/08/2021', '22:35', 'pending'),
(185, 16, 32, '06/10/2021', '04:35', 'checked'),
(186, 18, 32, '11', '', 'pending'),
(187, 0, 0, '06/11/2021', '04:05', 'pending'),
(188, 18, 32, '06/11/2021', '04:05', 'checked'),
(189, 16, 27, '06/11/2021', '05:55', 'checked'),
(190, 17, 29, '06/11/2021', '05:55', 'checked'),
(191, 19, 32, '06/11/2021', '05:55', 'checked'),
(192, 17, 27, '06/11/2021', '05:55', 'checked'),
(193, 0, 0, '06/11/2021', '05:55', 'pending'),
(194, 16, 32, '06/11/2021', '04:54', 'pending'),
(195, 0, 0, '06/11/2021', '04:54', 'pending'),
(196, 17, 27, '06/12/2021', '04:54', 'pending'),
(197, 15, 27, '06/12/2021', '04:54', 'pending'),
(198, 16, 32, '06/12/2021', '04:54', 'checked'),
(199, 21, 29, '06/12/2021', '05:06', 'pending'),
(200, 20, 29, '06/12/2021', '05:06', 'pending'),
(201, 18, 32, '06/12/2021', '01:02', 'pending'),
(202, 19, 32, '06/12/2021', '01:02', 'pending'),
(203, 28, 32, '06/12/2021', '01:02', 'pending'),
(204, 22, 27, '06/12/2021', '05:46', 'pending'),
(205, 29, 27, '06/12/2021', '05:46', 'pending'),
(206, 0, 0, '', '', 'pending'),
(207, 0, 0, '', '', 'pending'),
(208, 0, 0, '', '', 'pending'),
(209, 0, 0, '', '', 'pending'),
(210, 21, 29, '06/12/2021', '04:56', 'pending'),
(211, 30, 32, '06/14/2021', '04:05', 'checked'),
(212, 18, 32, '06/14/2021', '06:06', 'checked'),
(213, 16, 27, '06/14/2021', '06:06', 'checked'),
(214, 19, 27, '06/14/2021', '06:06', 'pending'),
(215, 21, 29, '06/14/2021', '06:06', 'pending'),
(216, 20, 29, '06/14/2021', '06:06', 'pending'),
(217, 18, 32, '06/15/2021', '11:05', 'checked'),
(218, 29, 32, '06/15/2021', '04:05', 'pending'),
(219, 19, 32, '06/15/2021', '04:05', 'pending'),
(220, 16, 27, '06/15/2021', '04:05', 'pending'),
(221, 31, 27, '06/15/2021', '04:05', 'pending'),
(222, 33, 32, '06/16/2021', '05:05', 'pending'),
(223, 32, 32, '06/16/2021', '05:05', 'pending'),
(224, 27, 32, '06/17/2021', '11:05', 'checked'),
(225, 17, 27, '06/17/2021', '11:05', 'checked'),
(226, 20, 29, '06/17/2021', '11:05', 'checked'),
(227, 28, 32, '06/17/2021', '11:56', 'checked'),
(228, 18, 27, '06/17/2021', '11:56', 'checked'),
(229, 21, 29, '06/17/2021', '11:56', 'checked'),
(230, 22, 32, '06/18/2021', '05:59', 'pending'),
(231, 0, 0, '06/17/2021', '05:59', 'pending'),
(232, 16, 29, '06/17/2021', '05:59', 'pending'),
(233, 19, 32, '06/17/2021', '05:59', 'checked'),
(234, 16, 29, '', '', 'pending'),
(235, 0, 0, '', '', 'pending'),
(236, 18, 27, '06/19/2021', '04:05', 'checked'),
(237, 16, 32, '06/21/2021', '10:04', 'pending'),
(238, 17, 32, '06/21/2021', '04:08', 'pending'),
(239, 17, 32, '06/22/2021', '12:25', 'checked'),
(240, 18, 32, '06/22/2021', '12:30', 'pending'),
(241, 19, 27, '06/22/2021', '12:30', 'pending'),
(242, 20, 32, '06/22/2021', '12:33', 'pending'),
(243, 31, 32, '06/22/2021', '12:33', 'pending'),
(244, 16, 27, '06/22/2021', '13:02', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `blood_group`
--

CREATE TABLE `blood_group` (
  `Blood_id` int(11) NOT NULL,
  `Blood_name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_group`
--

INSERT INTO `blood_group` (`Blood_id`, `Blood_name`) VALUES
(12, 'A+'),
(13, 'A-'),
(14, 'B+'),
(15, 'B-'),
(16, 'O+'),
(17, 'O-'),
(18, 'AB+'),
(19, 'AB-');

-- --------------------------------------------------------

--
-- Table structure for table `blood_report`
--

CREATE TABLE `blood_report` (
  `Blood_Report_id` int(11) NOT NULL,
  `lab_master_id` int(11) NOT NULL,
  `Hemoglobin` float NOT NULL,
  `RBC_of_blood` float NOT NULL,
  `WBC_of_blood` float NOT NULL,
  `mcv_of_blood` float NOT NULL,
  `mch_of_blood` float NOT NULL,
  `Protein` float NOT NULL,
  `Calcium` float NOT NULL,
  `Cholesterol` float NOT NULL,
  `Sodium` float NOT NULL,
  `patient_id` varchar(30) NOT NULL,
  `doctor_id` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_report`
--

INSERT INTO `blood_report` (`Blood_Report_id`, `lab_master_id`, `Hemoglobin`, `RBC_of_blood`, `WBC_of_blood`, `mcv_of_blood`, `mch_of_blood`, `Protein`, `Calcium`, `Cholesterol`, `Sodium`, `patient_id`, `doctor_id`) VALUES
(30, 1, 545, 454, 54, 54, 54, 5, 54, 4, 78, '', ''),
(31, 1, 545, 4, 45, 544, 4, 4, 4, 55, 45, '', ''),
(32, 1, 545, 454, 45, 54, 54, 4, 4, 4, 78, '', ''),
(33, 1, 545, 454, 45, 54, 54, 4, 4, 4, 78, '', ''),
(34, 1, 545, 4, 445, 454, 4, 4, 4, 4, 554, '', ''),
(35, 1, 14, 6.5, 4009, 77, 29, 8, 8.6, 100, 136, '', ''),
(36, 1, 14, 4.5, 4000, 75, 27, 8, 9.6, 101, 139, '', ''),
(37, 1, 15, 4.5, 4003, 77, 29, 6, 9.6, 105, 139, '', ''),
(38, 1, 15, 5.5, 4000, 76, 27, 6, 9.6, 101, 136, '16', ''),
(39, 1, 15, 5.5, 4000, 76, 27, 6, 9.6, 101, 136, '19', ''),
(40, 1, 14, 4.5, 4003, 76, 27, 7, 9.6, 101, 137, '18', ''),
(41, 1, 15, 4.5, 4002, 77, 28, 7, 9.6, 101, 136, '17', '32'),
(42, 1, 15, 4.5, 4001, 76, 28, 7, 9.6, 101, 136, '18', '27'),
(43, 1, 15, 5.5, 4004, 76, 29, 6, 9.6, 101, 139, '18', '27'),
(44, 1, 15, 5.5, 4003, 76, 31, 7, 9.6, 101, 136, '17', '32'),
(45, 0, 15, 5.5, 4003, 76, 31, 7, 9.6, 101, 136, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daycare`
--

CREATE TABLE `daycare` (
  `Daycare_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `Daycare_Cost_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daycare`
--

INSERT INTO `daycare` (`Daycare_id`, `doctor_id`, `patient_id`, `date`, `Daycare_Cost_id`) VALUES
(5, 25, 13, '03/08/2021', 1),
(7, 26, 15, '03/02/2021', 3),
(8, 29, 16, '06/16/2021', 12),
(9, 32, 15, '06/19/2021', 12);

-- --------------------------------------------------------

--
-- Table structure for table `daycare_cost`
--

CREATE TABLE `daycare_cost` (
  `Daycare_Cost_id` int(11) NOT NULL,
  `Daycare_Cost_name` varchar(30) NOT NULL,
  `Daycare_Cost_amount` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daycare_cost`
--

INSERT INTO `daycare_cost` (`Daycare_Cost_id`, `Daycare_Cost_name`, `Daycare_Cost_amount`) VALUES
(12, 'Glucose ', '200'),
(13, 'epidural steroid', '200'),
(14, 'Pain Killer', '200');

-- --------------------------------------------------------

--
-- Table structure for table `designation_table`
--

CREATE TABLE `designation_table` (
  `designation_id` int(11) NOT NULL,
  `designation_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation_table`
--

INSERT INTO `designation_table` (`designation_id`, `designation_name`) VALUES
(18, 'Staff'),
(16, 'Doctor'),
(17, 'Reception');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `Disease_id` int(11) NOT NULL,
  `Disease_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`Disease_id`, `Disease_name`) VALUES
(7, 'Dengu'),
(8, 'Appendcitis'),
(9, 'Chikungunya'),
(10, 'Cholera'),
(11, 'Cold urticaria'),
(12, 'Diabetes'),
(13, 'Kidney stone'),
(14, 'Urine Tract Infection'),
(15, 'Lose Motion');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(30) NOT NULL,
  `image_name` varchar(30) NOT NULL,
  `doctor_email` varchar(60) NOT NULL,
  `doctor_password` varchar(30) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `Experience` varchar(30) NOT NULL,
  `doctor_fees` varchar(30) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `Phone_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `doctor_name`, `image_name`, `doctor_email`, `doctor_password`, `designation_id`, `Experience`, `doctor_fees`, `degree`, `gender`, `Phone_no`) VALUES
(27, 'Dr.Piyush Agrawal', 'image27.jpg', 'piyushagrawal@gmail.com', '12345', 16, '3 year', '600', 'M.B.B.S', 'Male', '95300 68784'),
(29, 'Dr.Yogita  Agrawal', 'image29.jpg', 'yogita12agrawal@gmail.com', '12345', 16, '2 year', '450', 'Physiotherapy', 'Female', '75972 95058'),
(32, 'Dr.Vivek singh', 'image30.jpg', 'viveksingh@gmail.com', '12345', 16, '3 Year', '500', 'M.B.B.S', 'Male', '6351288261');

-- --------------------------------------------------------

--
-- Table structure for table `lab_details`
--

CREATE TABLE `lab_details` (
  `lab_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `disease_id` int(11) NOT NULL,
  `report_name_id` int(11) NOT NULL,
  `report_charge` int(11) NOT NULL,
  `Report_date` varchar(20) NOT NULL,
  `report_time_id` int(11) NOT NULL,
  `Status_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_details`
--

INSERT INTO `lab_details` (`lab_id`, `patient_id`, `doctor_id`, `disease_id`, `report_name_id`, `report_charge`, `Report_date`, `report_time_id`, `Status_id`) VALUES
(60, 13, 24, 7, 7, 820, '03/02/2021', 8, 1),
(61, 17, 27, 7, 8, 200, '03/01/2021', 8, 3),
(62, 13, 26, 7, 8, 8200, '03/01/2021', 8, 4),
(63, 13, 29, 7, 8, 0, '03/02/2021', 8, 3),
(64, 15, 26, 7, 8, 500, '03/01/2021', 8, 3),
(65, 15, 26, 7, 8, 500, '03/01/2021', 8, 4),
(66, 16, 27, 0, 0, 8200, '03/02/2021', 8, 3),
(67, 15, 26, 7, 8, 8200, '05/08/2021', 8, 4),
(68, 16, 27, 7, 8, 8200, '05/08/2021', 8, 3),
(69, 18, 29, 7, 8, 8200, '05/08/2021', 8, 3),
(70, 15, 26, 7, 8, 0, '05/08/2021', 8, 3),
(71, 13, 26, 7, 11, 200, '05/12/2021', 8, 3),
(72, 16, 26, 7, 11, 500, '03/01/2021', 8, 3),
(73, 16, 27, 7, 9, 500, '03/02/2021', 8, 3),
(74, 17, 27, 9, 11, 500, '06/16/2021', 8, 3),
(75, 19, 32, 12, 11, 200, '06/16/2021', 8, 3),
(76, 16, 27, 8, 11, 500, '06/19/2021', 8, 3),
(77, 15, 32, 9, 9, 500, '06/19/2021', 8, 3),
(78, 18, 27, 8, 11, 200, '06/19/2021', 8, 3),
(79, 18, 27, 7, 11, 200, '06/19/2021', 8, 3),
(80, 17, 32, 9, 11, 200, '06/22/2021', 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `lab_master`
--

CREATE TABLE `lab_master` (
  `lab_master_id` int(11) NOT NULL,
  `lab_name` varchar(30) NOT NULL,
  `lab_address` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab_master`
--

INSERT INTO `lab_master` (`lab_master_id`, `lab_name`, `lab_address`) VALUES
(1, 'deep laboratory', '23- nana varachha surat.');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(30) NOT NULL,
  `patient_Father_name` varchar(30) NOT NULL,
  `patient_age` int(11) NOT NULL,
  `patient_Weight` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `patient_Address` varchar(50) NOT NULL,
  `Blood_id` varchar(20) NOT NULL,
  `Phone_no` varchar(30) NOT NULL,
  `email_id` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `patient_Father_name`, `patient_age`, `patient_Weight`, `gender`, `patient_Address`, `Blood_id`, `Phone_no`, `email_id`, `password`) VALUES
(13, 'nikhil', 'anandprakash', 20, 81, 'Male', ',dnandnmadm', '9', '08200644803', '', ''),
(15, 'NIKHL Agrawal', 'Anand prakash', 20, 75, 'Male', '230 swaminaryan surat.', '15', '8200644803', 'nikhlagrawal768@gmail.com', '12345'),
(16, 'Vikram Rajput', 'sanjay singh', 23, 65, 'Male', '45 b, ak', '13', '95300 68784', 'vikramrajput@gmail.com', '12345'),
(17, 'dhruv dani', 'bhvesh dani', 21, 60, 'Male', 'sdas;d,a;l,', '13', '785855555', 'dhruvdani@gmail.com', '12345'),
(18, 'Mehul solanki', 'mukesh bhai solnaki', 20, 70, 'Male', '45 rangav dhut society surat.', '15', '8200644803', 'mehulsolanki@gmmail.com', '12345'),
(19, 'karan Doshi', 'jayesh doshi', 25, 60, 'Male', '45 swami narayan nagar surat.<br><br>', '16', '6582458575', 'karandoshi52@gmail.com', '12345'),
(20, 'pragiya jain', 'sanjay jain', 20, 60, 'Female', '34 c akshaar tawn surat.', '16', '80004 30874', 'klgjldj22@gmail.com', '12345'),
(21, 'shalini Goswami', 'hiren Goswami', 21, 59, 'Female', '45 jalwant taun ship surat', '16', '95300 68784', 'salini@gmail.com', '12345'),
(22, 'Sharan singh', 'Babu singh', 23, 78, 'Male', 'labuba society surat.', '13', '8200644803', 'sharvansingh@gmail.com', '12345'),
(23, 'uttam suthar ', 'mohan suthar', 22, 78, 'Male', 'sai recidency surat.', '18', '99748 46443', 'suthauttam@gmail.com', '12345'),
(24, 'harshik raval', 'mukesh raval', 20, 70, 'Male', 'Snagar appartment surat.', '14', '95300 68784', 'harshiikraval@gmail.com', '12345'),
(26, 'piyush', 'anand', 21, 75, 'Male', 'abhinandan society surat.', '14', '8200644803', 'getnlogo@gmail.com', '12345'),
(27, 'mayank', 'mayank', 30, 75, 'Male', 'kailash nagar surat.', '19', '0820064403', 'mayankjain2191@gmail.com', '12345'),
(28, 'Abhaye  nishad', 'Dhirja sankar', 21, 86, 'Male', 'abdius mb<br>', '14', '6351288261', 'abhaiyanishad888@gamil.com', '12345'),
(29, 'suraj singh', 'kk singh', 21, 65, 'Male', 'jj society.', '13', '7515456554', 'surajrathod@gmail.com', '12345'),
(30, 'nikhil agr', 'anand agrawal', 22, 75, 'Male', '230 sqwmaintyay surta.', '14', '6351288261', 'nikhilagrawal768@gmail.com', '12345'),
(31, 'Divyesh Donga', 'Pravin Donga', 24, 70, 'Male', '248,swaminarayna nagar-2 .surat', '14', '7852145455', 'divyeshdonga@gmail.com', '12345'),
(32, 'Ram Kishor', 'Vikram Kishor', 30, 80, 'Male', '330 , aKshar town ship', '14', '842545555566', 'ram34@gmail.com', '12345'),
(33, 'Nikung Agrawal', 'Jayesh joshi', 27, 75, 'Male', 'Raj Residency surat.', '13', '7545245825', 'nik234agrawal@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `Prescription_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `Date` varchar(30) NOT NULL,
  `Discription` varchar(200) NOT NULL,
  `appointment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`Prescription_id`, `doctor_id`, `patient_id`, `Date`, `Discription`, `appointment_id`) VALUES
(5, 18, 26, '11/05/21', 'dfdfdf', 118),
(6, 16, 26, '11/05/21', 'hello world<br>', 122),
(7, 18, 26, '12/05/21', ',nksjfkskjkjfkjsf', 126),
(8, 23, 26, '13/05/21', 'd,nfknsdkfnksdnf', 133),
(9, 22, 26, '14/05/21', 'edfan efns', 135),
(10, 18, 26, '16/05/21', 'dfsfsdf', 137),
(11, 18, 26, '16/05/21', 'dfsfsdff,;dskgfljsdgldjg', 137),
(12, 18, 26, '16/05/21', 'dfdfdf<br>fmsjfshjf', 118),
(13, 18, 26, '16/05/21', 'dfdfdf<br>fdjshfisu', 118),
(14, 18, 26, '16/05/21', '<ol><li> dfdfdf]</li><li>ekj</li><li>fdel</li><li>eld</li><li>;fme;w</li><li>;fe;kd</li></ol>', 118),
(15, 18, 26, '16/05/21', '<ol><li> dfdfdf</li><li>lgfm</li><li>dfsmlf</li><li>flkslmf</li></ol>', 118),
(16, 18, 26, '16/05/21', '<ul><li> dfdfdf</li><li>mfdlsm</li><li>fmlswm</li><li>rklewr</li><li>fns;</li></ul>', 118),
(17, 18, 26, '16/05/21', '<ul><li> dfsfsdf</li><li>rjsdfh</li><li>flksak</li><li>lfsl</li><li>hgls</li></ul>', 137),
(18, 18, 26, '16/05/21', '<ul><li> dfsfsdf</li><li>;ewkj</li><li>flwjfl</li></ul>d<br>', 137),
(19, 18, 26, '16/05/21', '<ol><li> dfsfsdf</li><li>4</li><li>delwq</li><li>mqad;</li><li>qd;m;d</li><li>d;mq;d</li></ol>', 137),
(20, 15, 26, '20/05/21', 'fhkshk', 138),
(21, 23, 26, '20/05/21', '<ol><li>wefhwgrgfeh</li></ol>', 140),
(22, 18, 26, '20/05/21', '<ol><li> dfdfdf</li><li>fdnsflk</li></ol>', 118),
(23, 18, 26, '20/05/21', '<ol><li> dfdfdf</li><li>gfdlkf</li></ol>', 118),
(24, 18, 26, '20/05/21', '<ol><li> dfdfdf</li><li>njrkj</li></ol>', 118),
(25, 18, 26, '20/05/21', '<ol><li> dfdfdf</li><li>njrkj</li></ol>', 118),
(26, 18, 26, '20/05/21', '<ul><li> dfdfdf</li><li>glflg</li><li>rslkl</li></ul>', 118),
(27, 18, 26, '20/05/21', '<ul><li> dfdfdf</li><li>glflg</li><li>rslkl</li></ul>', 118),
(28, 18, 26, '20/05/21', '<ul><li> dfdfdf</li><li>glflg</li><li>rslkl</li></ul>', 118),
(29, 18, 26, '20/05/21', '<ol><li>g</li><li>;sd;f</li><li>gfdfdfdf</li></ol>', 118),
(30, 23, 26, '28/05/21', 'd,nfknsdkfnksdnf', 133),
(31, 23, 26, '28/05/21', 'd,nfknsdkfnksdnf', 133),
(32, 23, 26, '28/05/21', 'd,nfknsdkfnksdnf', 133),
(33, 23, 26, '28/05/21', 'd,nfknsdkfnksdnf', 133),
(34, 23, 26, '28/05/21', 'd,nfknsdkfnksdnf', 133),
(35, 23, 26, '28/05/21', 'd,nfknsdkfnksdnf', 133),
(36, 23, 26, '28/05/21', 'd,nfknsdkfnksdnf', 133),
(37, 23, 26, '28/05/21', 'd,nfknsdkfnksdnf', 133),
(38, 23, 26, '28/05/21', 'd,nfknsdkfnksdnf', 133),
(39, 29, 27, '29/05/21', '<ol><li>dleldsljdljlkf</li></ol>', 152),
(40, 17, 32, '05/06/21', '<ol><li>jhugyuubh</li></ol>', 157),
(41, 18, 32, '06/06/21', 'fll;gldkgkd;gdl;<br>', 160),
(42, 17, 32, '09/06/21', 'djkaojdelaki', 183),
(43, 17, 32, '09/06/21', 'djkaojdelaki', 183),
(44, 17, 32, '09/06/21', 'djkaojdelaki', 183),
(45, 17, 32, '10/06/21', '<ol><li>jhugyuubh</li></ol>', 157),
(46, 16, 32, '10/06/21', 'dsla;ldslaks', 185),
(47, 16, 32, '10/06/21', 'dsla;ldslaks', 185),
(48, 16, 32, '10/06/21', 'dsla;ldslaks', 185),
(49, 16, 32, '10/06/21', 'dsla;ldslaks', 185),
(50, 16, 32, '10/06/21', 'dsla;ldslaks', 185),
(51, 16, 32, '10/06/21', 'dsla;ldslaks', 185),
(52, 16, 32, '10/06/21', 'dsla;ldslaks', 185),
(53, 16, 32, '10/06/21', 'dsla;ldslaks', 185),
(54, 16, 32, '10/06/21', 'dsla;ldslaks', 185),
(55, 16, 32, '10/06/21', 'dsla;ldslaks', 185),
(56, 16, 32, '10/06/21', 'dsla;ldslaks', 185),
(57, 16, 32, '10/06/21', 'dsla;ldslaks', 185),
(58, 18, 32, '10/06/21', 'fll;gldkgkd;gdl;<br>', 160),
(59, 16, 32, '10/06/21', 'dsla;ldslaks', 185),
(60, 16, 32, '10/06/21', 'dsla;ldslaks', 185),
(61, 16, 32, '10/06/21', 'dsla;ldslaks', 185),
(62, 16, 32, '10/06/21', 'dsla;ldslaks', 185),
(63, 29, 32, '11/06/21', 'kjhkhkhkh<br>\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocs\new CMScmsdoctorpriscription_view.php</b> on line <b>107</b><br>', 171),
(64, 29, 32, '11/06/21', 'kjhkhkhkh<br>\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocs\new CMScmsdoctorpriscription_view.php</b> on line <b>107</b><br>', 171),
(65, 17, 32, '11/06/21', 'djkaojdelaki', 183),
(66, 18, 32, '11/06/21', 'fll;gldkgkd;gdl;<br>', 160),
(67, 18, 32, '11/06/21', 'fll;gldkgkd;gdl;<br>', 160),
(68, 18, 32, '11/06/21', 'fll;gldkgkd;gdl;<br>', 160),
(69, 18, 32, '11/06/21', 'fll;gldkgkd;gdl;<br>', 160),
(70, 17, 32, '11/06/21', '<ol><li>jhugyuubh</li></ol>', 157),
(71, 18, 32, '11/06/21', ',mdnfsndjnd', 188),
(72, 16, 27, '11/06/21', '<ol><li>fever </li><li>blood sugar high<br></li></ol>', 189),
(73, 17, 29, '11/06/21', '<ul><li>fever&nbsp;</li><li>yellow eyei</li><li>body pain</li></ul>', 190),
(74, 19, 32, '11/06/21', '<ul><li>low sugar</li><li>high blood preser</li></ul>', 191),
(75, 17, 27, '11/06/21', '<ul><li>high sugar</li><li>blood test</li><li>urine test<br></li></ul>', 192),
(76, 19, 32, '11/06/21', '<ul><li>low sugar</li><li>high blood preser</li></ul>', 191),
(77, 16, 32, '12/06/21', 'iuhuyyyy', 198),
(78, 30, 32, '14/06/21', '<ul><li>high sugar</li><li>blood sugar high</li></ul>', 211),
(79, 18, 32, '14/06/21', '<ul><li>stomach pain</li><li>lose motion</li></ul>', 212),
(80, 16, 27, '14/06/21', '<ul><li>head ache</li><li>allergy</li><li><br></li></ul>', 213),
(81, 29, 27, '14/06/21', '', 152),
(82, 16, 27, '14/06/21', '', 213),
(83, 16, 27, '14/06/21', '', 213),
(84, 16, 27, '14/06/21', '', 213),
(85, 28, 32, '15/06/21', '<ul><li>maleria</li><li>blood test</li><li>urine test</li></ul>', 158),
(86, 18, 32, '15/06/21', '<ul><li>lungs discarge</li></ul>', 217),
(87, 27, 32, '17/06/21', '<ul><li>taifiead</li><li>cold</li><li>fever</li><li>yellow eye</li></ul>', 224),
(88, 28, 32, '17/06/21', '<ul><li>maleria</li><li>cuff</li><li><br></li></ul>', 227),
(89, 17, 27, '17/06/21', '<ul><li>mind strss</li><li>vomiting</li></ul>', 225),
(90, 18, 27, '17/06/21', '<ul><li>blood test</li><li>urine test</li></ul>', 228),
(91, 20, 29, '17/06/21', '<ul><li>bliding&nbsp;</li><li>pain</li></ul>', 226),
(92, 21, 29, '17/06/21', '<ul><li>pragnecy test</li></ul>', 229),
(93, 19, 32, '17/06/21', '<ul><li>maleria</li><li>dangu</li></ul>', 233),
(94, 18, 27, '19/06/21', '<ul><li>blood report<br></li></ul>', 236),
(95, 17, 32, '22/06/21', '<ul><li>stomach pain</li><li>lose Motion&nbsp;</li></ul>', 239);

-- --------------------------------------------------------

--
-- Table structure for table `report_details`
--

CREATE TABLE `report_details` (
  `report_name_id` int(11) NOT NULL,
  `report_name` varchar(30) NOT NULL,
  `report_charge` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_details`
--

INSERT INTO `report_details` (`report_name_id`, `report_name`, `report_charge`) VALUES
(9, 'Sugar report', 400),
(10, 'Urine', 300),
(11, 'Blood Report', 600);

-- --------------------------------------------------------

--
-- Table structure for table `report_time`
--

CREATE TABLE `report_time` (
  `report_time_id` int(11) NOT NULL,
  `report_times` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_time`
--

INSERT INTO `report_time` (`report_time_id`, `report_times`) VALUES
(8, '18:48');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `session_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `startdate` varchar(30) NOT NULL,
  `enddate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`session_id`, `name`, `type`, `startdate`, `enddate`) VALUES
(11, 'nnikhil', 'doctor', '04/16/2021', '04/05/2021'),
(12, '', 'ADMIN', '', '14/04/21-0707-0404-5151'),
(13, '', 'ADMIN', '14/04/21-0707-0404-4343', '14/04/21-0707-0404-5252'),
(14, 'nikhil', 'ADMIN', '14/04/21-0707-0404-3838', '14/04/21-0707-0404-4343'),
(15, 'nikhil', 'ADMIN', '14/04/21-0808-0404-5252', '14/04/21-0808-0404-0909'),
(16, 'nikhil', 'ADMIN', '14/04/21-0808-0404-2121', '14/04/21- 08:24:03 AM'),
(17, 'nikhil', 'ADMIN', '14/04/21- 08:24:10 AM', '14/04/21- 08:24:16 AM'),
(18, 'pragya jain', 'ADMIN', '14/04/21- 02:49:01 PM', '14/04/21- 02:50:28 PM'),
(19, '', 'Staff', '', '14/04/21- 03:00:47 PM'),
(20, 'pragya jain', 'Staff', '14/04/21- 03:01:05 PM', '14/04/21- 03:03:46 PM'),
(21, '', 'Staff', '14/04/21- 03:03:55 PM', '14/04/21- 03:05:07 PM'),
(22, 'pragya jain', 'Staff', '14/04/21- 03:05:21 PM', '14/04/21- 03:08:30 PM'),
(23, 'pragya jain', 'Staff', '14/04/21- 03:08:40 PM', '14/04/21- 03:10:13 PM'),
(24, 'nikhil', 'ADMIN', '15/04/21- 02:38:02 PM', '15/04/21- 02:38:15 PM'),
(25, 'nikhil', 'ADMIN', '15/04/21- 02:40:59 PM', '15/04/21- 02:41:16 PM'),
(26, 'pragya jain', 'Staff', '20/04/21- 06:51:25 AM', '20/04/21- 06:52:05 AM'),
(27, 'nikhil', 'ADMIN', '22/04/21- 07:50:38 AM', '22/04/21- 07:53:40 AM'),
(28, 'pragya jain', 'Staff', '22/04/21- 08:02:47 AM', '22/04/21- 08:05:34 AM'),
(29, 'nikhil', 'ADMIN', '22/04/21- 08:14:42 AM', '22/04/21- 08:16:22 AM'),
(30, 'pragya jain', 'Staff', '22/04/21- 08:17:28 AM', '22/04/21- 08:19:45 AM'),
(31, 'nikhil', 'ADMIN', '22/04/21- 08:20:04 AM', '22/04/21- 08:47:59 AM'),
(32, 'nikhil', 'ADMIN', '22/04/21- 08:48:23 AM', '22/04/21- 08:48:28 AM'),
(33, 'nikhil', 'ADMIN', '22/04/21- 09:25:14 AM', '22/04/21- 09:25:23 AM'),
(34, 'nikhil', 'ADMIN', '22/04/21- 09:25:30 AM', '22/04/21- 09:26:00 AM'),
(35, 'nikhil', 'ADMIN', '22/04/21- 09:26:33 AM', '22/04/21- 09:26:40 AM'),
(36, '', 'ADMIN', '23/04/21- 02:15:21 PM', '23/04/21- 02:19:29 PM'),
(37, 'pragya jain', 'Staff', '24/04/21- 02:11:58 PM', '24/04/21- 02:12:43 PM'),
(38, 'pragya jain', 'Staff', '24/04/21- 02:13:57 PM', '24/04/21- 02:14:02 PM'),
(39, 'pragya jain', 'Staff', '24/04/21- 02:14:41 PM', '24/04/21- 02:15:57 PM'),
(40, 'pragya jain', 'Staff', '24/04/21- 02:16:12 PM', '24/04/21- 02:17:45 PM'),
(41, 'pragya jain', 'Staff', '26/04/21- 02:41:08 PM', '26/04/21- 02:41:11 PM'),
(42, 'nikhil', 'Staff', '29/04/21- 09:54:18 AM', '29/04/21- 09:54:26 AM'),
(43, 'nikhil', 'Staff', '29/04/21- 09:55:00 AM', '29/04/21- 09:55:04 AM'),
(44, 'nikhil', 'ADMIN', '29/04/21- 01:55:14 PM', '29/04/21- 01:56:17 PM'),
(45, '', 'Staff', '', '29/04/21- 01:56:43 PM'),
(46, 'nikhil', 'ADMIN', '05/05/21- 08:37:54 AM', '05/05/21- 08:41:47 AM'),
(47, 'nikhil', 'ADMIN', '05/05/21- 03:49:32 PM', '06/05/21- 08:37:59 AM'),
(48, '5', 'Staff', '06/05/21- 08:38:21 AM', '06/05/21- 08:39:25 AM'),
(49, '5', 'Staff', '06/05/21- 08:41:27 AM', '06/05/21- 08:44:57 AM'),
(50, '2', 'Staff', '06/05/21- 08:45:02 AM', '06/05/21- 08:45:14 AM'),
(51, '5', 'Staff', '06/05/21- 08:45:23 AM', '06/05/21- 08:53:26 AM'),
(52, '2', 'Staff', '06/05/21- 08:54:48 AM', '06/05/21- 09:07:29 AM'),
(53, '5', 'Staff', '06/05/21- 11:07:30 AM', '06/05/21- 11:09:27 AM'),
(54, '5', 'Staff', '06/05/21- 11:09:32 AM', '06/05/21- 11:09:38 AM'),
(55, '2', 'Staff', '06/05/21- 11:09:44 AM', '06/05/21- 11:12:47 AM'),
(56, 'Dr.Vivek singh', 'Staff', '07/05/21- 07:06:25 AM', '07/05/21- 07:07:36 AM'),
(57, 'Dr.Vivek singh', 'Staff', '07/05/21- 07:09:17 AM', '07/05/21- 07:11:59 AM'),
(58, 'Dr.Vivek singh', 'Staff', '07/05/21- 07:28:57 AM', '07/05/21- 07:30:18 AM'),
(59, 'Dr.Vivek singh', 'Staff', '07/05/21- 07:30:27 AM', '07/05/21- 07:34:45 AM'),
(60, 'Dr.Vivek singh', 'Staff', '07/05/21- 07:35:17 AM', '07/05/21- 07:38:22 AM'),
(61, 'Dr.Vivek singh', 'Staff', '07/05/21- 07:41:28 AM', '07/05/21- 07:43:47 AM'),
(62, 'Dr.Vivek singh', 'Staff', '07/05/21- 07:44:20 AM', '07/05/21- 07:44:52 AM'),
(63, 'Dr.Vivek singh', 'Staff', '07/05/21- 07:45:00 AM', '07/05/21- 07:45:05 AM'),
(64, 'Dr.Vivek singh', 'Staff', '07/05/21- 07:45:12 AM', '07/05/21- 07:48:56 AM'),
(65, 'Dr.Yogita  Agrawal', 'Staff', '07/05/21- 07:49:04 AM', '07/05/21- 08:05:37 AM'),
(66, '26', 'Staff', '07/05/21- 08:06:01 AM', '07/05/21- 08:06:11 AM'),
(67, '8', 'Staff', '07/05/21- 05:06:43 PM', '07/05/21- 05:16:32 PM'),
(68, '2', 'Staff', '07/05/21- 05:16:50 PM', '07/05/21- 05:29:25 PM'),
(69, '8', 'Staff', '07/05/21- 05:30:11 PM', '07/05/21- 05:30:27 PM'),
(70, '5', 'Staff', '08/05/21- 07:27:36 AM', '08/05/21- 07:27:52 AM'),
(71, '26', 'Staff', '09/05/21- 10:34:20 AM', '09/05/21- 12:47:27 PM'),
(72, '8', 'Staff', '09/05/21- 12:47:44 PM', '09/05/21- 12:47:50 PM'),
(73, '5', 'Doctor', '09/05/21- 12:47:58 PM', '09/05/21- 12:52:39 PM'),
(74, '5', 'Doctor', '09/05/21- 12:53:54 PM', '09/05/21- 12:54:43 PM'),
(75, '26', 'Staff', '09/05/21- 12:54:52 PM', '09/05/21- 12:55:34 PM'),
(76, '2', 'Staff', '09/05/21- 12:58:50 PM', '09/05/21- 01:01:11 PM'),
(77, '5', 'Doctor', '09/05/21- 01:01:23 PM', '09/05/21- 01:23:20 PM'),
(78, '29', 'Doctor', '09/05/21- 01:23:37 PM', '09/05/21- 01:23:59 PM'),
(79, '26', 'Doctor', '09/05/21- 01:24:06 PM', '09/05/21- 01:24:17 PM'),
(80, '', 'Staff', '', '09/05/21- 01:24:29 PM'),
(81, '5', 'Staff', '09/05/21- 01:24:44 PM', '09/05/21- 01:24:49 PM'),
(82, '26', 'Doctor', '10/05/21- 11:11:46 AM', '10/05/21- 01:13:51 PM'),
(83, 'nikhil', 'ADMIN', '11/05/21- 05:48:36 AM', '11/05/21- 05:49:31 AM'),
(84, '26', 'Doctor', '11/05/21- 05:50:02 AM', '11/05/21- 05:56:53 AM'),
(85, '5', 'Staff', '11/05/21- 05:56:58 AM', '11/05/21- 05:57:06 AM'),
(86, '8', 'Staff', '11/05/21- 05:57:47 AM', '11/05/21- 05:58:00 AM'),
(87, '9', 'Staff', '11/05/21- 05:58:17 AM', '11/05/21- 05:58:25 AM'),
(88, '2', 'Doctor', '11/05/21- 06:20:23 AM', '11/05/21- 06:37:40 AM'),
(89, '26', 'Doctor', '11/05/21- 06:38:13 AM', '11/05/21- 06:39:05 AM'),
(90, '26', 'Doctor', '11/05/21- 06:39:13 AM', '11/05/21- 06:53:23 AM'),
(91, '2', 'Staff', '11/05/21- 06:53:47 AM', '11/05/21- 06:54:22 AM'),
(92, '26', 'Doctor', '11/05/21- 06:54:35 AM', '11/05/21- 06:57:30 AM'),
(93, '2', 'Staff', '11/05/21- 08:08:59 AM', '11/05/21- 08:15:08 AM'),
(94, '5', 'Staff', '11/05/21- 08:22:15 AM', '11/05/21- 08:22:26 AM'),
(95, '27', 'Doctor', '12/05/21- 07:30:42 AM', '12/05/21- 07:57:33 AM'),
(96, '26', 'Doctor', '12/05/21- 07:57:52 AM', '12/05/21- 08:25:38 AM'),
(97, '2', 'Staff', '13/05/21- 07:49:47 AM', '13/05/21- 07:50:01 AM'),
(98, '2', 'Staff', '15/05/21- 01:37:41 PM', '15/05/21- 01:48:35 PM'),
(99, '5', 'Staff', '16/05/21- 07:52:45 AM', '16/05/21- 08:14:37 AM'),
(100, '2', 'Staff', '17/05/21- 11:19:06 AM', '17/05/21- 11:19:23 AM'),
(101, '2', 'Staff', '19/05/21- 02:33:20 PM', '19/05/21- 02:34:17 PM'),
(102, '5', 'Staff', '19/05/21- 02:34:30 PM', '19/05/21- 02:38:39 PM'),
(103, '9', 'Staff', '21/05/21- 08:35:44 PM', '21/05/21- 08:36:10 PM'),
(104, '5', 'Staff', '21/05/21- 08:36:19 PM', '21/05/21- 08:36:33 PM'),
(105, '9', 'Staff', '21/05/21- 08:36:52 PM', '21/05/21- 08:37:00 PM'),
(106, 'nikhil', 'ADMIN', '21/05/21- 08:05:03 PM', '21/05/21- 08:37:08 PM'),
(107, '9', 'Staff', '28/05/21- 07:41:17 PM', '28/05/21- 07:42:03 PM'),
(108, 'nikhil', 'ADMIN', '29/05/21- 09:59:02 AM', '29/05/21- 01:58:05 PM'),
(109, '27', 'Doctor', '29/05/21- 10:26:09 AM', '29/05/21- 01:59:24 PM'),
(110, 'nikhil', 'ADMIN', '05/06/21- 09:33:23 AM', '05/06/21- 09:44:17 AM'),
(111, '5', 'Staff', '05/06/21- 09:48:37 AM', '05/06/21- 09:49:09 AM'),
(112, '32', 'Doctor', '05/06/21- 09:49:26 AM', '05/06/21- 09:49:35 AM'),
(113, '32', 'Staff', '05/06/21- 09:49:41 AM', '05/06/21- 09:51:29 AM'),
(114, '5', 'Doctor', '05/06/21- 09:51:36 AM', '05/06/21- 09:55:12 AM'),
(115, 'nikhil', 'ADMIN', '06/06/21- 07:01:43 AM', '06/06/21- 07:49:51 AM'),
(116, '9', 'Staff', '06/06/21- 08:51:54 AM', '06/06/21- 08:52:10 AM'),
(117, '32', 'Doctor', '06/06/21- 07:19:08 AM', '06/06/21- 05:14:37 PM'),
(118, 'Admin', 'ADMIN', '07/06/21- 10:27:16 AM', '07/06/21- 11:03:00 AM'),
(119, '2', 'Staff', '08/06/21- 09:28:01 AM', '08/06/21- 09:44:09 AM'),
(120, '9', 'Staff', '08/06/21- 02:25:26 PM', '08/06/21- 02:25:34 PM'),
(121, '9', 'Staff', '08/06/21- 02:25:55 PM', '08/06/21- 02:26:01 PM'),
(122, 'nikhil agr', 'patient', '08/06/21- 09:44:34 AM', '08/06/21- 02:26:16 PM'),
(123, '9', 'Staff', '08/06/21- 02:26:33 PM', '08/06/21- 02:26:40 PM'),
(124, 'Admin', 'ADMIN', '09/06/21- 08:26:41 AM', '09/06/21- 09:42:43 AM'),
(125, '2', 'Staff', '09/06/21- 09:42:58 AM', '09/06/21- 09:52:40 AM'),
(126, '10', 'Staff', '09/06/21- 09:52:56 AM', '09/06/21- 09:53:18 AM'),
(127, '5', 'Staff', '09/06/21- 09:53:23 AM', '09/06/21- 09:54:42 AM'),
(128, '10', 'Staff', '09/06/21- 09:54:55 AM', '09/06/21- 09:54:58 AM'),
(129, '5', 'Staff', '09/06/21- 09:55:10 AM', '09/06/21- 10:14:14 AM'),
(130, '32', 'Doctor', '09/06/21- 10:14:29 AM', '09/06/21- 10:16:14 AM'),
(131, '32', 'Doctor', '09/06/21- 10:16:21 AM', '09/06/21- 10:21:28 AM'),
(132, 'Admin', 'ADMIN', '09/06/21- 09:49:44 AM', '09/06/21- 10:56:15 AM'),
(133, '32', 'Doctor', '09/06/21- 10:50:58 AM', '09/06/21- 11:08:03 AM'),
(134, 'Admin', 'ADMIN', '10/06/21- 01:31:31 PM', '10/06/21- 01:32:28 PM'),
(135, '32', 'Doctor', '10/06/21- 02:02:12 PM', '10/06/21- 02:04:32 PM'),
(136, '2', 'Staff', '10/06/21- 02:00:45 PM', '10/06/21- 02:30:14 PM'),
(137, '28', 'Doctor', '10/06/21- 02:06:08 PM', '11/06/21- 07:39:14 PM'),
(138, '27', 'Doctor', '11/06/21- 07:38:33 PM', '11/06/21- 07:39:28 PM'),
(139, 'Admin', 'ADMIN', '11/06/21- 07:38:03 PM', '11/06/21- 07:40:04 PM'),
(140, 'nikhil agr', 'patient', '12/06/21- 09:44:11 AM', '12/06/21- 09:44:43 AM'),
(141, '9', 'Staff', '12/06/21- 09:46:20 AM', '12/06/21- 10:37:56 AM'),
(142, '9', 'Staff', '12/06/21- 10:38:57 AM', '12/06/21- 10:39:06 AM'),
(143, '2', 'Staff', '12/06/21- 10:39:37 AM', '12/06/21- 11:03:53 AM'),
(144, '2', 'Staff', '12/06/21- 11:11:40 AM', '12/06/21- 11:15:43 AM'),
(145, '5', 'Staff', '12/06/21- 11:15:48 AM', '12/06/21- 01:54:32 PM'),
(146, 'nikhil agr', 'patient', '12/06/21- 01:59:05 PM', '12/06/21- 01:59:40 PM'),
(147, '32', 'Doctor', '14/06/21- 02:53:54 PM', '14/06/21- 02:56:23 PM'),
(148, '2', 'Staff', '15/06/21- 09:52:10 AM', '15/06/21- 10:09:30 AM'),
(149, '29', 'Doctor', '15/06/21- 03:15:08 PM', '15/06/21- 03:16:54 PM'),
(150, '27', 'Doctor', '15/06/21- 03:17:32 PM', '15/06/21- 03:33:17 PM'),
(151, '32', 'Doctor', '16/06/21- 08:28:45 AM', '16/06/21- 09:30:07 AM'),
(152, '32', 'Doctor', '16/06/21- 11:27:17 AM', '16/06/21- 12:26:44 PM'),
(153, '32', 'Doctor', '17/06/21- 12:39:00 PM', '17/06/21- 12:42:00 PM'),
(154, '32', 'Doctor', '17/06/21- 01:44:45 PM', '17/06/21- 01:45:53 PM'),
(155, '29', 'Doctor', '17/06/21- 01:47:09 PM', '17/06/21- 03:12:53 PM'),
(156, '5', 'Staff', '17/06/21- 03:18:51 PM', '17/06/21- 08:09:31 PM'),
(157, '2', 'Staff', '18/06/21- 12:43:34 PM', '18/06/21- 12:46:35 PM'),
(158, '5', 'Staff', '18/06/21- 12:46:49 PM', '18/06/21- 01:44:07 PM'),
(159, '2', 'Staff', '18/06/21- 01:44:14 PM', '18/06/21- 03:59:19 PM'),
(160, '32', 'Doctor', '18/06/21- 03:25:56 PM', '18/06/21- 04:00:28 PM'),
(161, '32', 'Doctor', '18/06/21- 04:16:33 PM', '19/06/21- 07:44:29 AM'),
(162, 'Admin', 'ADMIN', '19/06/21- 09:07:41 AM', '19/06/21- 09:15:23 AM'),
(163, '5', 'Staff', '19/06/21- 12:58:50 PM', '19/06/21- 01:31:30 PM'),
(164, '32', 'Doctor', '19/06/21- 02:46:11 PM', '19/06/21- 03:40:35 PM'),
(165, '2', 'Staff', '19/06/21- 02:44:55 PM', '19/06/21- 03:41:08 PM'),
(166, '5', 'Staff', '19/06/21- 03:41:17 PM', '19/06/21- 03:45:51 PM'),
(167, '27', 'Doctor', '19/06/21- 03:40:43 PM', '19/06/21- 03:51:44 PM'),
(168, '32', 'Doctor', '21/06/21- 03:11:32 PM', '22/06/21- 09:05:08 AM'),
(169, 'Admin', 'ADMIN', '21/06/21- 03:04:49 PM', '22/06/21- 09:24:29 AM'),
(170, '2', 'Staff', '21/06/21- 03:24:39 PM', '22/06/21- 09:41:26 AM'),
(171, '32', 'Doctor', '22/06/21- 11:46:42 AM', '22/06/21- 11:47:12 AM');

-- --------------------------------------------------------

--
-- Table structure for table `staff_table`
--

CREATE TABLE `staff_table` (
  `staff_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `staff_name` varchar(60) NOT NULL,
  `age` varchar(60) NOT NULL,
  `email_id` varchar(60) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `mobile_no` varchar(13) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_table`
--

INSERT INTO `staff_table` (`staff_id`, `designation_id`, `staff_name`, `age`, `email_id`, `gender`, `mobile_no`, `password`) VALUES
(2, 15, 'pragya jain', '21', 'pragyajin@gmail.com', 'Female', '8200644803', '123'),
(5, 17, 'nikhil', '21', 'nikhilagrawal768@gmail.com', 'Male', '8200644803', '123'),
(8, 18, 'Karan doshi', '25', 'karandoshi52@gmail.com', 'Male', '8244644803', '123'),
(9, 17, 'pragya jain', '21', 'pragiyajin@gmail.com', 'Female', '8200644803', '123'),
(10, 18, 'Dr.Jayesh Patel ', '30', 'jayeshpatel@gmail.com', 'Male', '7585486465', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `Status_id` int(11) NOT NULL,
  `Status_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Status_id`, `Status_name`) VALUES
(3, 'Available '),
(4, 'Not Available ');

-- --------------------------------------------------------

--
-- Table structure for table `sugar_report`
--

CREATE TABLE `sugar_report` (
  `sugar_report_id` int(11) NOT NULL,
  `lab_master_id` int(11) NOT NULL,
  `Hemoglobin_sugar` float NOT NULL,
  `tlc` float NOT NULL,
  `dlc` float NOT NULL,
  `mcv_sugar` float NOT NULL,
  `blood_urea` float NOT NULL,
  `blood_sugar` float NOT NULL,
  `serum_sodium` float NOT NULL,
  `serum_potassium` float NOT NULL,
  `patient_id` varchar(30) NOT NULL,
  `doctor_id` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sugar_report`
--

INSERT INTO `sugar_report` (`sugar_report_id`, `lab_master_id`, `Hemoglobin_sugar`, `tlc`, `dlc`, `mcv_sugar`, `blood_urea`, `blood_sugar`, `serum_sodium`, `serum_potassium`, `patient_id`, `doctor_id`) VALUES
(17, 1, 78, 54, 54, 54, 54, 4, 54, 54, '', ''),
(18, 1, 7, 54, 54, 54, 54, 4, 54, 54, '', ''),
(19, 1, 78, 54, 54, 54, 54, 4, 54, 54, '15', ''),
(20, 1, 455, 554, 55, 45, 4, 54, 554, 545, '17', '32'),
(22, 1, 7, 54, 54, 45, 45, 101, 105.5, 54, '15', '32'),
(23, 1, 18, 6.5, 77, 31, 7, 9.6, 2, 101, '17', '32');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `token_id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `token_no` int(11) NOT NULL,
  `Status_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`token_id`, `appointment_id`, `patient_id`, `doctor_id`, `date`, `token_no`, `Status_id`) VALUES
(71, 117, 18, 26, '11-05-21', 1, '1'),
(72, 118, 18, 26, '11-05-21', 2, 'checked'),
(73, 119, 19, 26, '11-05-21', 3, 'pending'),
(74, 120, 18, 27, '11-05-21', 1, 'pending'),
(75, 122, 16, 26, '11-05-21', 4, 'checked'),
(76, 123, 16, 26, '11-05-21', 5, 'pending'),
(77, 124, 17, 26, '11-05-21', 6, 'pending'),
(78, 125, 18, 26, '11-05-21', 7, 'pending'),
(79, 126, 18, 26, '12-05-21', 1, 'checked'),
(80, 128, 16, 26, '13-05-21', 1, 'pending'),
(81, 129, 16, 26, '13-05-21', 2, 'pending'),
(82, 130, 15, 26, '13-05-21', 3, 'pending'),
(83, 131, 15, 26, '13-05-21', 4, 'pending'),
(84, 132, 17, 26, '13-05-21', 5, 'pending'),
(85, 133, 23, 26, '13-05-21', 6, 'checked'),
(86, 134, 17, 26, '13-05-21', 7, 'pending'),
(87, 135, 22, 26, '14-05-21', 1, 'checked'),
(88, 136, 15, 27, '15-05-21', 1, 'pending'),
(89, 137, 18, 26, '16-05-21', 1, 'checked'),
(90, 138, 15, 26, '20-05-21', 1, 'checked'),
(91, 139, 19, 26, '20-05-21', 2, 'pending'),
(92, 140, 23, 26, '20-05-21', 3, 'checked'),
(93, 141, 24, 29, '25-05-21', 1, 'pending'),
(94, 142, 28, 27, '26-05-21', 1, 'pending'),
(95, 143, 18, 26, '26-05-21', 1, 'pending'),
(96, 144, 15, 27, '26-05-21', 2, 'pending'),
(97, 145, 19, 27, '26-05-21', 3, 'pending'),
(98, 146, 21, 29, '26-05-21', 1, 'pending'),
(99, 147, 23, 27, '26-05-21', 4, 'pending'),
(100, 148, 22, 27, '26-05-21', 5, 'pending'),
(101, 149, 20, 29, '26-05-21', 2, 'pending'),
(102, 150, 17, 26, '26-05-21', 2, 'pending'),
(103, 151, 26, 26, '26-05-21', 3, 'pending'),
(104, 152, 29, 27, '29-05-21', 1, 'checked'),
(105, 153, 15, 26, '31-05-21', 1, 'pending'),
(106, 154, 17, 27, '31-05-21', 1, 'pending'),
(107, 155, 15, 29, '05-06-21', 1, 'pending'),
(108, 156, 15, 29, '05-06-21', 2, 'pending'),
(109, 157, 17, 32, '05-06-21', 1, 'checked'),
(110, 158, 28, 32, '05-06-21', 2, 'checked'),
(111, 159, 27, 32, '06-06-21', 1, 'pending'),
(112, 160, 18, 32, '06-06-21', 2, 'checked'),
(113, 161, 15, 32, '07-06-21', 1, 'pending'),
(114, 163, 15, 32, '07-06-21', 2, 'pending'),
(115, 164, 31, 27, '08-06-21', 1, 'pending'),
(116, 165, 17, 32, '08-06-21', 1, 'pending'),
(117, 166, 19, 27, '08-06-21', 2, 'pending'),
(118, 167, 21, 29, '08-06-21', 1, 'pending'),
(119, 170, 27, 27, '08-06-21', 3, 'pending'),
(120, 171, 29, 32, '08-06-21', 2, 'pending'),
(121, 172, 19, 32, '08-06-21', 3, 'pending'),
(122, 173, 29, 32, '08-06-21', 4, 'pending'),
(123, 174, 31, 32, '08-06-21', 5, 'pending'),
(124, 175, 22, 32, '08-06-21', 6, 'pending'),
(125, 176, 28, 27, '08-06-21', 4, 'pending'),
(126, 178, 16, 27, '08-06-21', 5, 'pending'),
(127, 183, 17, 32, '09-06-21', 1, 'checked'),
(128, 184, 15, 32, '10-06-21', 1, 'pending'),
(129, 185, 16, 32, '10-06-21', 2, 'checked'),
(130, 186, 18, 32, '11-06-21', 1, 'pending'),
(131, 188, 18, 32, '11-06-21', 2, 'checked'),
(132, 189, 16, 27, '11-06-21', 1, 'checked'),
(133, 190, 17, 29, '11-06-21', 1, 'checked'),
(134, 191, 19, 32, '11-06-21', 3, 'checked'),
(135, 192, 17, 27, '11-06-21', 2, 'checked'),
(136, 194, 16, 32, '11-06-21', 4, 'pending'),
(137, 196, 17, 27, '11-06-21', 3, 'pending'),
(138, 197, 15, 27, '11-06-21', 4, 'pending'),
(139, 198, 16, 32, '11-06-21', 5, 'checked'),
(140, 199, 21, 29, '12-06-21', 1, 'pending'),
(141, 200, 20, 29, '12-06-21', 2, 'pending'),
(142, 201, 18, 32, '12-06-21', 1, 'pending'),
(143, 202, 19, 32, '12-06-21', 2, 'pending'),
(144, 203, 28, 32, '12-06-21', 3, 'pending'),
(145, 204, 22, 27, '12-06-21', 1, 'pending'),
(146, 205, 29, 27, '12-06-21', 2, 'pending'),
(147, 210, 21, 29, '12-06-21', 3, 'pending'),
(148, 211, 30, 32, '14-06-21', 1, 'checked'),
(149, 212, 18, 32, '14-06-21', 2, 'checked'),
(150, 213, 16, 27, '14-06-21', 1, 'checked'),
(151, 214, 19, 27, '14-06-21', 2, 'pending'),
(152, 215, 21, 29, '14-06-21', 1, 'pending'),
(153, 216, 20, 29, '14-06-21', 2, 'pending'),
(154, 217, 18, 32, '15-06-21', 1, 'checked'),
(155, 218, 29, 32, '15-06-21', 2, 'pending'),
(156, 219, 19, 32, '15-06-21', 3, 'pending'),
(157, 220, 16, 27, '15-06-21', 1, 'pending'),
(158, 221, 31, 27, '15-06-21', 2, 'pending'),
(159, 222, 33, 32, '16-06-21', 1, 'pending'),
(160, 223, 32, 32, '16-06-21', 2, 'pending'),
(161, 224, 27, 32, '17-06-21', 1, 'checked'),
(162, 225, 17, 27, '17-06-21', 1, 'checked'),
(163, 226, 20, 29, '17-06-21', 1, 'checked'),
(164, 227, 28, 32, '17-06-21', 2, 'checked'),
(165, 228, 18, 27, '17-06-21', 2, 'checked'),
(166, 229, 21, 29, '17-06-21', 2, 'checked'),
(167, 230, 22, 32, '17-06-21', 3, 'pending'),
(168, 232, 16, 29, '17-06-21', 3, 'pending'),
(169, 233, 19, 32, '17-06-21', 4, 'checked'),
(170, 234, 16, 29, '18-06-21', 1, 'pending'),
(171, 236, 18, 27, '19-06-21', 1, 'checked'),
(172, 237, 16, 32, '21-06-21', 1, 'pending'),
(173, 238, 17, 32, '21-06-21', 2, 'pending'),
(174, 239, 17, 32, '22-06-21', 1, 'checked'),
(175, 240, 18, 32, '22-06-21', 2, 'pending'),
(176, 241, 19, 27, '22-06-21', 1, 'pending'),
(177, 242, 20, 32, '22-06-21', 3, 'pending'),
(178, 243, 31, 32, '22-06-21', 4, 'pending'),
(179, 244, 16, 27, '22-06-21', 2, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `urine_report`
--

CREATE TABLE `urine_report` (
  `urine_report_id` int(11) NOT NULL,
  `lab_master_id` int(11) NOT NULL,
  `urine_color` varchar(30) NOT NULL,
  `sugar_urine` float NOT NULL,
  `quantity` float NOT NULL,
  `pus_cells` float NOT NULL,
  `Epithelial_cells` float NOT NULL,
  `Crystals` varchar(30) NOT NULL,
  `RBC_urine` float NOT NULL,
  `patient_id` varchar(30) NOT NULL,
  `doctor_id` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urine_report`
--

INSERT INTO `urine_report` (`urine_report_id`, `lab_master_id`, `urine_color`, `sugar_urine`, `quantity`, `pus_cells`, `Epithelial_cells`, `Crystals`, `RBC_urine`, `patient_id`, `doctor_id`) VALUES
(20, 1, 'white', 48, 454, 454, 45, '544', 45, '', ''),
(21, 1, '5', 56, 45, 545, 45, '5', 455, '', ''),
(22, 1, '5', 56, 45, 545, 45, '5', 455, '', ''),
(23, 1, '5', 56, 45, 545, 45, '5', 455, '', ''),
(24, 1, '5', 56, 45, 545, 45, '5', 455, '', ''),
(25, 1, '5', 56, 45, 545, 45, '5', 455, '', ''),
(26, 1, '5', 56, 45, 545, 45, '5', 455, '', ''),
(27, 0, '5', 56, 45, 545, 45, '5', 455, '', ''),
(28, 1, '5', 56, 45, 545, 45, '5', 455, '', ''),
(29, 1, '5', 56, 45, 545, 45, '5', 455, '', ''),
(30, 1, '5', 56, 45, 545, 45, '5', 455, '', ''),
(31, 1, '5', 56, 45, 545, 45, '5', 455, '', ''),
(32, 1, '5', 56, 45, 545, 45, '5', 455, '', ''),
(33, 1, 'white', 48, 454, 454, 45, '544', 45, '16', '');

-- --------------------------------------------------------

--
-- Table structure for table `vaccinereg`
--

CREATE TABLE `vaccinereg` (
  `vaccinereg_id` int(11) NOT NULL,
  `aadharcard` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL,
  `vname` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccinereg`
--

INSERT INTO `vaccinereg` (`vaccinereg_id`, `aadharcard`, `name`, `gender`, `date`, `vname`, `price`) VALUES
(1, '465454454554', 'mayank jain', 'Male', '19/5/1991', '', ''),
(2, '546464646446', 'DFJISUFIUS', 'Male', '05/03/2021', 'COVIDSHIELD', '200'),
(3, '546464646446', 'DFJISUFIUS', 'Male', '05/03/2021', 'COVIDSHIELD', '200'),
(4, '122356655665', 'kk sharma ', 'Male', '06/28/1990', 'COVAXIN', '250'),
(5, '465454454554', 'niraj rawal', 'Male', '11/01/1999', 'COVAXIN', '150'),
(6, '465454454554', 'niraj rawal', 'Male', '19/5/1991', 'COVAXIN', '150'),
(7, '465454454554', 'niraj rawal', 'Male', '19/5/1991', 'COVIDSHIELD', '900');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `appointment_table`
--
ALTER TABLE `appointment_table`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `blood_group`
--
ALTER TABLE `blood_group`
  ADD PRIMARY KEY (`Blood_id`);

--
-- Indexes for table `blood_report`
--
ALTER TABLE `blood_report`
  ADD PRIMARY KEY (`Blood_Report_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daycare`
--
ALTER TABLE `daycare`
  ADD PRIMARY KEY (`Daycare_id`);

--
-- Indexes for table `daycare_cost`
--
ALTER TABLE `daycare_cost`
  ADD PRIMARY KEY (`Daycare_Cost_id`);

--
-- Indexes for table `designation_table`
--
ALTER TABLE `designation_table`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`Disease_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `lab_details`
--
ALTER TABLE `lab_details`
  ADD PRIMARY KEY (`lab_id`);

--
-- Indexes for table `lab_master`
--
ALTER TABLE `lab_master`
  ADD PRIMARY KEY (`lab_master_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`Prescription_id`);

--
-- Indexes for table `report_details`
--
ALTER TABLE `report_details`
  ADD PRIMARY KEY (`report_name_id`);

--
-- Indexes for table `report_time`
--
ALTER TABLE `report_time`
  ADD PRIMARY KEY (`report_time_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `staff_table`
--
ALTER TABLE `staff_table`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`Status_id`);

--
-- Indexes for table `sugar_report`
--
ALTER TABLE `sugar_report`
  ADD PRIMARY KEY (`sugar_report_id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`token_id`);

--
-- Indexes for table `urine_report`
--
ALTER TABLE `urine_report`
  ADD PRIMARY KEY (`urine_report_id`);

--
-- Indexes for table `vaccinereg`
--
ALTER TABLE `vaccinereg`
  ADD PRIMARY KEY (`vaccinereg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `appointment_table`
--
ALTER TABLE `appointment_table`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

--
-- AUTO_INCREMENT for table `blood_group`
--
ALTER TABLE `blood_group`
  MODIFY `Blood_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `blood_report`
--
ALTER TABLE `blood_report`
  MODIFY `Blood_Report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daycare`
--
ALTER TABLE `daycare`
  MODIFY `Daycare_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `daycare_cost`
--
ALTER TABLE `daycare_cost`
  MODIFY `Daycare_Cost_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `designation_table`
--
ALTER TABLE `designation_table`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `Disease_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `lab_details`
--
ALTER TABLE `lab_details`
  MODIFY `lab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `lab_master`
--
ALTER TABLE `lab_master`
  MODIFY `lab_master_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `Prescription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `report_details`
--
ALTER TABLE `report_details`
  MODIFY `report_name_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `report_time`
--
ALTER TABLE `report_time`
  MODIFY `report_time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `staff_table`
--
ALTER TABLE `staff_table`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `Status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sugar_report`
--
ALTER TABLE `sugar_report`
  MODIFY `sugar_report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `token_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `urine_report`
--
ALTER TABLE `urine_report`
  MODIFY `urine_report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `vaccinereg`
--
ALTER TABLE `vaccinereg`
  MODIFY `vaccinereg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
