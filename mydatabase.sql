-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 07:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_Username` varchar(100) NOT NULL,
  `Admin_Password` varchar(100) NOT NULL,
  `Admin_Name` varchar(100) NOT NULL,
  `Admin_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_Username`, `Admin_Password`, `Admin_Name`, `Admin_ID`) VALUES
('nabila', '123', 'nabila', 'A1000');

-- --------------------------------------------------------

--
-- Table structure for table `auditreport`
--

CREATE TABLE `auditreport` (
  `Audit_id` varchar(8) NOT NULL,
  `report_id` varchar(8) NOT NULL,
  `Audit_name` varchar(70) NOT NULL,
  `Audit_date` date NOT NULL,
  `Audit_result` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingID` int(6) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `id` varchar(6) NOT NULL,
  `ItemQuantity` int(60) NOT NULL,
  `DateBooking` date NOT NULL,
  `BookingTime` time NOT NULL,
  `PickUpDate` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingID`, `ItemID`, `id`, `ItemQuantity`, `DateBooking`, `BookingTime`, `PickUpDate`) VALUES
(13435, 49622, 'L11845', 1, '2021-05-28', '12:00:00', '00:20:21'),
(22647, 56222, 'L14511', 1, '2021-06-02', '09:30:00', '00:20:21'),
(23445, 22647, 'L12300', 1, '2021-06-02', '09:00:00', '00:20:21'),
(25656, 13435, 'L11044', 1, '2021-06-03', '09:00:00', '00:20:21'),
(35466, 13435, 'L11230', 2, '2021-06-03', '10:00:00', '00:20:21'),
(49622, 35656, 'L19943', 2, '2021-06-01', '10:00:00', '00:20:21'),
(56222, 58266, 'L11345', 2, '2021-06-02', '11:00:00', '00:20:21'),
(58266, 13435, 'L15672', 1, '2021-06-10', '09:10:00', '00:20:21');

-- --------------------------------------------------------

--
-- Table structure for table `generatereport`
--

CREATE TABLE `generatereport` (
  `report_id` varchar(8) NOT NULL,
  `admin_id` varchar(8) NOT NULL,
  `reportdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `ItemID` int(11) NOT NULL,
  `itemName` varchar(100) NOT NULL,
  `qtorder` int(11) NOT NULL,
  `qtreceived` int(11) NOT NULL,
  `unitPrice` double NOT NULL,
  `location` varchar(50) NOT NULL,
  `dateOrder` date NOT NULL,
  `dateArrived` date NOT NULL,
  `companyName` varchar(100) NOT NULL,
  `companyAddress` varchar(200) NOT NULL,
  `senderName` varchar(100) NOT NULL,
  `truckPlateNo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`ItemID`, `itemName`, `qtorder`, `qtreceived`, `unitPrice`, `location`, `dateOrder`, `dateArrived`, `companyName`, `companyAddress`, `senderName`, `truckPlateNo`) VALUES
(13435, 'Artline Black Marker Pen', 500, 500, 2.35, 'Shelf 2-201', '2021-01-01', '2021-01-07', 'LIK SOON SDN BHD', '46&44 , Jalan Bunga Tanjung 10, Taman Seraya,56100 Kuala Lumpur, Malaysia.', 'Muhammad Hilmi', 'BGG 5536'),
(22647, 'Double A A4 Paper 80gsm', 700, 700, 14.6, 'Shelf 3-301', '2021-01-01', '2021-01-04', 'JAYAMART STATIONERY (M) SDN BHD', '3, Jalan Pandan Indah 4/34,Pandan Indah,55100 Cheras, Kuala Lumpur.', 'Ahmad Jaafar', 'PFQ 5217'),
(25656, 'Artline Blue Marker Pen', 500, 500, 2.35, 'Shelf 2-202', '2021-01-01', '2021-01-07', 'LIK SOON SDN BHD', '46&44 , Jalan Bunga Tanjung 10, Taman Seraya,56100 Kuala Lumpur, Malaysia.', 'Muhammad Hilmi', 'BGG 5536'),
(35466, 'Pilot Black Pen', 1000, 1000, 3.8, 'Shelf 1-101', '2021-01-01', '2021-01-04', 'JAYAMART STATIONERY (M) SDN BHD', '3, Jalan Pandan Indah 4/34,Pandan Indah,55100 Cheras, Kuala Lumpur.', 'Ahmad Jaafar', 'PFQ 5217'),
(49622, 'Pilot Red Pen', 1000, 1000, 3.8, 'Shelf 1-103', '2021-01-01', '2021-01-04', 'JAYAMART STATIONERY (M) SDN BHD', '3, Jalan Pandan Indah 4/34,Pandan Indah,55100 Cheras, Kuala Lumpur.', 'Ahmad Jaafar', 'PFQ 5217'),
(56222, 'Pilot Blue Pen', 1000, 1000, 3.8, 'Shelf 1-102', '2021-01-01', '2021-01-04', 'JAYAMART STATIONERY (M) SDN BHD', '3, Jalan Pandan Indah 4/34,Pandan Indah,55100 Cheras, Kuala Lumpur.', 'Ahmad Jaafar', 'PFQ 5217'),
(58266, 'Artline Red Marker Pen', 500, 500, 2.35, 'Shelf 2-203', '2021-01-01', '2021-01-07', 'LIK SOON SDN BHD', '46&44 , Jalan Bunga Tanjung 10, Taman Seraya,56100 Kuala Lumpur, Malaysia.', 'Muhammad Hilmi', 'BGG 5536');

-- --------------------------------------------------------

--
-- Table structure for table `itemorderlist`
--

CREATE TABLE `itemorderlist` (
  `ListID` varchar(50) NOT NULL,
  `id` varchar(100) NOT NULL,
  `OrderStatus` varchar(100) NOT NULL,
  `Comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itemorderlist`
--

INSERT INTO `itemorderlist` (`ListID`, `id`, `OrderStatus`, `Comment`) VALUES
('OD1', 'L12300', 'Completed', 'All items in good condition'),
('OD2', 'L11230', 'Completed', 'All items in good condition'),
('OD3', 'L11345', 'Completed', 'All items in good condition'),
('OD4', 'L19943', 'Completed', 'All items in good condition'),
('OD5', 'L11845', 'Completed', 'All items in good condition');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `name` varchar(50) NOT NULL,
  `id` varchar(6) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `officeTel` varchar(9) NOT NULL,
  `officeFax` varchar(9) NOT NULL,
  `groupsList` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`name`, `id`, `phone`, `address`, `email`, `officeTel`, `officeFax`, `groupsList`) VALUES
('Hanis Suraya binti Khairuddin', 'L11044', '0124562390', 'No.7 Lorong 2, Kampung Cherok Paloh, 25150 Kuantan, Pahang', 'surayahanis6@gmail.com', '096528956', '096528955', 'Staff, FSK1000, 03232/IJA-BCS1234-04, 09546/IJA-BCL6342-02'),
('Siti Nur Aminah binti Ali', 'L11230', '0132768921', 'Lot 19, Jalan Parit Buntar, 34300 Bagan Serai, Perak', 'snaminah97@gmail.com', '096435728', '096435725', 'Staff, FSK1000, Unit Pentadbiran FSKKP, KAKITANGAN SOKONGAN (GRED 40 KE BAWAH)'),
('Mohd Kasim bin Hisyamuddin', 'L11345', '0199782411', 'No.6, Lorong Makmur 2, Kampung Petaling, 21060 Kuala Terengganu, Terengganu', 'kasim876@gmail.com', '097234517', '097234511', 'Staff, HEP1000'),
('Hisyam bin Abdullah', 'L11845', '01115622218', 'Lot 13, Jalan Kampung Cherating Lama, 26080 Balok, Pahang', 'hisyam87@gmail.com', '096783548', '096783555', 'Staff, FSTI1000, 11121/IJA-BSB3613-01, 19202/IJA-BSB1412-02'),
('Ahmad Jauhari bin Abdul Rahman', 'L12300', '01124523142', 'No.12, Lorong 4, Kampung Chendor Baru, 26080 Kuantan, Pahang', 'ajauhari21@gmail.com', '092314533', '092314522', 'Staff, FSK1000, 03232/IJA-BCS1234-02, 09546/IJA-BCL6342-05'),
('Muhammad Hanif bin Hanifah', 'L14511', '0194563782', 'No.4, Lorong Panglima 2, Kampung Pasir Putih, 81700 Pasir Gudang, Johor', 'mhanif45@gmail.com', '097634527', '097634577', 'Staff, 10111/IJA-UHE3012-01LB, 10111/IJA-UHM1012-01LB, 10111/IJA-UHM2012-E41LB'),
('Jaafar bin Jamaluddin', 'L15622', '0126781232', 'Lot 56 Jalan Batu Rakit, Tanjung Batu Rakit, 21020 Kuala Nerus, Terengganu', 'jaafar74@gmail.com', '095674829', '095674822', 'Staff, FSK1000, Program SE FSKKP, 09102/IJA-BCS2173-C21LBS, 09102/IJA-BCS2173-C22LBS, \r\n09102/IJA-BCS2173-C11LBG'),
('Nuraisyah binti Halim', 'L15672', '0124526711', 'Lot 301, Kampung Petaling Baru, 35500 Bidor, Perak', 'nuraisyah02@gmail.com', '095623482', '095623499', 'Staff, PPS1000, 10112/IJA-UHL2322-A11LB, 10112/IJA-UHL2322-C11LBG, 10112/IJA-UHL2322-C11LBN'),
('Sanisah binti Adnan', 'L16733', '0124561771', 'No.18, Jalan Jaya Baru, Taman Desaria, 46150 Petaling Jaya, Selangor', 'sanisahadnan95@gmail.com', '095367283', '095367281', 'Staff, Academic Staff, Pengurusan FKKSA, 06071/IJA-BKC1711-K19LB, 06072/IJA-BKC3423-K04LB'),
('Khairul Amin bin Mazuki', 'L19943', '01135214522', 'Lot 3103, Jalan Masjid Batu 19 Kampung Gombak, 45050 Gombak, Selangor', 'khairula3@gmail.com', '092367611', '092367614', 'Staff, FSK1000, 17182/IJA-BCN3033-01, 18191/IJA-BCN1043-05, 18191/IJA-BCN1043-06'),
('Nur Nabila binti Hashim', 'A1000', '01132451233', 'Lot 6, Jalan Bukit Bading 2, 24050 Hulu Terengganu, Terengganu', 'nabila2@gmail.com', '091165611', '091165614', 'Staff, FSK1000, KAKITANGAN PENGURUSAN FAKULTI');
-- --------------------------------------------------------

--
-- Table structure for table `stafflogin`
--

CREATE TABLE `stafflogin` (
  `Staff_Username` varchar(50) NOT NULL,
  `Staff_Password` int(11) NOT NULL,
  `Staff_Name` varchar(100) NOT NULL,
  `Staff_ID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stafflogin`
--

INSERT INTO `stafflogin` (`Staff_Username`, `Staff_Password`, `Staff_Name`, `Staff_ID`) VALUES
('hanis', 123, 'hanis', 'L11044');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auditreport`
--
ALTER TABLE `auditreport`
  ADD PRIMARY KEY (`Audit_id`,`report_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingID`,`ItemID`,`id`);

--
-- Indexes for table `generatereport`
--
ALTER TABLE `generatereport`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `itemorderlist`
--
ALTER TABLE `itemorderlist`
  ADD PRIMARY KEY (`ListID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
