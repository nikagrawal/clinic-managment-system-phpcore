-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 07:33 AM
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
-- Database: `cms_db`
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
(46, 'nikhil', 'skajkjs@gmail.com', 'ded', 'image46.jpg'),
(44, 'dsmaklm', 'kjjskj@gamil.com', 'sakasxna', 'image1.jpg');

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
  `Status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_table`
--

INSERT INTO `appointment_table` (`appointment_id`, `patient_id`, `doctor_id`, `appointment_date`, `appointment_time`, `Status_id`) VALUES
(45, 0, 0, '03/03/2021', '15:41', 1),
(46, 13, 24, '03/03/2021', '17:43', 1),
(47, 13, 24, '03/01/2021', '22:18', 2),
(48, 13, 24, '03/03/2021', '08:09', 1);

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
  `Sodium` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_report`
--

INSERT INTO `blood_report` (`Blood_Report_id`, `lab_master_id`, `Hemoglobin`, `RBC_of_blood`, `WBC_of_blood`, `mcv_of_blood`, `mch_of_blood`, `Protein`, `Calcium`, `Cholesterol`, `Sodium`) VALUES
(30, 1, 545, 454, 54, 54, 54, 5, 54, 4, 78);

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
(5, 25, 13, '03/08/2021', 1);

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
(1, 'nikhil', '400'),
(2, 'niki', '400');

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
(15, 'reception'),
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
(7, 'dengu');

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
(24, 'sarv', 'image24.jpg', 'nikhilagrawal768@gmail.com', '545', 15, '2 year', '500', 'mbbs', 'select', '08200644803'),
(25, 'nikhik', 'image25.jpg', 'nikhilagrawal768@gmail.com', 'edfs', 16, '2 year', '500', 'mbbs', 'Male', '08200644803');

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
(60, 13, 24, 7, 7, 820, '03/02/2021', 8, 1);

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
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `Medicine_id` int(11) NOT NULL,
  `Medicine_name` varchar(100) NOT NULL,
  `Manufacture_company` varchar(40) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Manufacture_date` varchar(30) NOT NULL,
  `Exprie_date` varchar(20) NOT NULL,
  `Medicine_charge` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`Medicine_id`, `Medicine_name`, `Manufacture_company`, `Quantity`, `Manufacture_date`, `Exprie_date`, `Medicine_charge`) VALUES
(26, 'comiphlem', 'uro_pharma', 20, '03/10/2021', '03/30/2021', 400);

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
  `Phone_no` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `patient_Father_name`, `patient_age`, `patient_Weight`, `gender`, `patient_Address`, `Blood_id`, `Phone_no`) VALUES
(13, 'nikhil', 'anandprakash', 20, 81, 'Male', ',dnandnmadm', '9', '08200644803'),
(14, 'sarvan', 'babu singh', 25, 60, 'Male', '23wjajjandkandka', '12', '8200644803');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_bill_details`
--

CREATE TABLE `pharmacy_bill_details` (
  `pharmacy_bill_details_id` int(11) NOT NULL,
  `pharmacy_bill_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `medicine_id` int(10) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `Prescription_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `Date` varchar(30) NOT NULL,
  `Discription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`Prescription_id`, `doctor_id`, `patient_id`, `Date`, `Discription`) VALUES
(1, 24, 13, '03/30/2021', 'd..fmklsnd');

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
(7, 'vikram', 200);

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
  `mobile_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'fd'),
(2, 'doctor');

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
  `serum_potassium` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sugar_report`
--

INSERT INTO `sugar_report` (`sugar_report_id`, `lab_master_id`, `Hemoglobin_sugar`, `tlc`, `dlc`, `mcv_sugar`, `blood_urea`, `blood_sugar`, `serum_sodium`, `serum_potassium`) VALUES
(17, 1, 78, 54, 54, 54, 54, 4, 54, 54);

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `Token_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `token_no` int(11) NOT NULL,
  `Status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`Token_id`, `patient_id`, `doctor_id`, `date`, `token_no`, `Status_id`) VALUES
(2, 13, 24, '03/02/2021', 0, 2),
(3, 13, 24, '03/02/2021', 0, 1),
(4, 13, 24, '03/17/2021', 0, 1);

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
  `RBC_urine` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urine_report`
--

INSERT INTO `urine_report` (`urine_report_id`, `lab_master_id`, `urine_color`, `sugar_urine`, `quantity`, `pus_cells`, `Epithelial_cells`, `Crystals`, `RBC_urine`) VALUES
(20, 1, 'white', 48, 454, 454, 45, '544', 45);

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
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`Medicine_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `pharmacy_bill_details`
--
ALTER TABLE `pharmacy_bill_details`
  ADD PRIMARY KEY (`pharmacy_bill_details_id`);

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
  ADD PRIMARY KEY (`Token_id`);

--
-- Indexes for table `urine_report`
--
ALTER TABLE `urine_report`
  ADD PRIMARY KEY (`urine_report_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `appointment_table`
--
ALTER TABLE `appointment_table`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `blood_group`
--
ALTER TABLE `blood_group`
  MODIFY `Blood_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `blood_report`
--
ALTER TABLE `blood_report`
  MODIFY `Blood_Report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `daycare`
--
ALTER TABLE `daycare`
  MODIFY `Daycare_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `daycare_cost`
--
ALTER TABLE `daycare_cost`
  MODIFY `Daycare_Cost_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `designation_table`
--
ALTER TABLE `designation_table`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `Disease_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `lab_details`
--
ALTER TABLE `lab_details`
  MODIFY `lab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `lab_master`
--
ALTER TABLE `lab_master`
  MODIFY `lab_master_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `Medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pharmacy_bill_details`
--
ALTER TABLE `pharmacy_bill_details`
  MODIFY `pharmacy_bill_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `Prescription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report_details`
--
ALTER TABLE `report_details`
  MODIFY `report_name_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `report_time`
--
ALTER TABLE `report_time`
  MODIFY `report_time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staff_table`
--
ALTER TABLE `staff_table`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `Status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sugar_report`
--
ALTER TABLE `sugar_report`
  MODIFY `sugar_report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `Token_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `urine_report`
--
ALTER TABLE `urine_report`
  MODIFY `urine_report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
