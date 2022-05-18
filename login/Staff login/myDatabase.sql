--
-- Database: 'myDatabase'
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `ItemID` int(11) NOT NULL,
  `itemName` varchar(100) NOT NULL,
  `qtorder`  int(11) NOT NULL,
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

INSERT INTO `inventory` (`ItemID`, `itemName`, `qtorder`, `qtreceived`, `unitPrice`, `location`, `dateOrder`, `dateArrived`, 
`companyName`, `companyAddress`,`senderName`, `truckPlateNo`) VALUES

('35466','Pilot Black Pen','1000','1000','3.80','Shelf 1-101','2021-01-01','2021-01-04','JAYAMART STATIONERY (M) SDN BHD',
 '3, Jalan Pandan Indah 4/34,Pandan Indah,55100 Cheras, Kuala Lumpur.','Ahmad Jaafar','PFQ 5217'),
 
('56222','Pilot Blue Pen','1000','1000','3.80','Shelf 1-102','2021-01-01','2021-01-04','JAYAMART STATIONERY (M) SDN BHD',
'3, Jalan Pandan Indah 4/34,Pandan Indah,55100 Cheras, Kuala Lumpur.','Ahmad Jaafar','PFQ 5217'),

('49622','Pilot Red Pen','1000','1000','3.80','Shelf 1-103','2021-01-01','2021-01-04','JAYAMART STATIONERY (M) SDN BHD',
'3, Jalan Pandan Indah 4/34,Pandan Indah,55100 Cheras, Kuala Lumpur.','Ahmad Jaafar','PFQ 5217'),

('13435','Artline Black Marker Pen','500','500','2.35','Shelf 2-201','2021-01-01','2021-01-07','LIK SOON SDN BHD',
'46&44 , Jalan Bunga Tanjung 10, Taman Seraya,56100 Kuala Lumpur, Malaysia.','Muhammad Hilmi','BGG 5536'),

('25656','Artline Blue Marker Pen','500','500','2.35','Shelf 2-202','2021-01-01','2021-01-07','LIK SOON SDN BHD',
'46&44 , Jalan Bunga Tanjung 10, Taman Seraya,56100 Kuala Lumpur, Malaysia.','Muhammad Hilmi','BGG 5536'),

('58266','Artline Red Marker Pen','500','500','2.35','Shelf 2-203','2021-01-01','2021-01-07','LIK SOON SDN BHD',
'46&44 , Jalan Bunga Tanjung 10, Taman Seraya,56100 Kuala Lumpur, Malaysia.','Muhammad Hilmi','BGG 5536'),

('22647','Double A A4 Paper 80gsm','700','700','14.60','Shelf 3-301','2021-01-01','2021-01-04','JAYAMART STATIONERY (M) SDN BHD',
'3, Jalan Pandan Indah 4/34,Pandan Indah,55100 Cheras, Kuala Lumpur.','Ahmad Jaafar','PFQ 5217');

-- --------------------------------------------------------
--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `name` varchar(50) NOT NULL,
  `id` varchar(6) NOT NULL,
  `phone`  varchar(11) NOT NULL,
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

('Ahmad Jauhari bin Abdul Rahman', 'L12300', '01124523142', 'No.12, Lorong 4, Kampung Chendor Baru, 26080 Kuantan, Pahang', 
'ajauhari21@gmail.com', '092314533', '092314522', 'Staff, FSK1000, 03232/IJA-BCS1234-02, 09546/IJA-BCL6342-05'),

('Siti Nur Aminah binti Ali', 'L11230', '0132768921', 'Lot 19, Jalan Parit Buntar, 34300 Bagan Serai, Perak', 
'snaminah97@gmail.com', '096435728', '096435725', 'Staff, FSK1000, Unit Pentadbiran FSKKP, KAKITANGAN SOKONGAN (GRED 40 KE BAWAH)'),
	
('Mohd Kasim bin Hisyamuddin', 'L11345', '0199782411', 'No.6, Lorong Makmur 2, Kampung Petaling, 21060 Kuala Terengganu, Terengganu', 
'kasim876@gmail.com', '097234517', '097234511', 'Staff, HEP1000'),
	
('Khairul Amin bin Mazuki', 'L19943', '01135214522', 'Lot 3103, Jalan Masjid Batu 19 Kampung Gombak, 45050 Gombak, Selangor', 
'khairula3@gmail.com', '092367611', '092367614', 'Staff, FSK1000, 17182/IJA-BCN3033-01, 18191/IJA-BCN1043-05, 18191/IJA-BCN1043-06'),

('Hisyam bin Abdullah', 'L11845', '01115622218', 'Lot 13, Jalan Kampung Cherating Lama, 26080 Balok, Pahang', 
'hisyam87@gmail.com', '096783548', '096783555', 'Staff, FSTI1000, 11121/IJA-BSB3613-01, 19202/IJA-BSB1412-02'),

('Hanis Suraya binti Khairuddin', 'L11044', '0124562390', 'No.7 Lorong 2, Kampung Cherok Paloh, 25150 Kuantan, Pahang', 
'surayahanis6@gmail.com', '096528956', '096528955', 'Staff, FSK1000, 03232/IJA-BCS1234-04, 09546/IJA-BCL6342-02'),

('Nuraisyah binti Halim', 'L15672', '0124526711', 'Lot 301, Kampung Petaling Baru, 35500 Bidor, Perak', 
'nuraisyah02@gmail.com', '095623482', '095623499', 'Staff, PPS1000, 10112/IJA-UHL2322-A11LB, 10112/IJA-UHL2322-C11LBG, 10112/IJA-UHL2322-C11LBN'),

('Muhammad Hanif bin Hanifah', 'L14511', '0194563782', 'No.4, Lorong Panglima 2, Kampung Pasir Putih, 81700 Pasir Gudang, Johor', 
'mhanif45@gmail.com', '097634527', '097634577', 'Staff, 10111/IJA-UHE3012-01LB, 10111/IJA-UHM1012-01LB, 10111/IJA-UHM2012-E41LB'),

('Jaafar bin Jamaluddin', 'L15622', '0126781232', 'Lot 56 Jalan Batu Rakit, Tanjung Batu Rakit, 21020 Kuala Nerus, Terengganu', 
'jaafar74@gmail.com', '095674829', '095674822', 'Staff, FSK1000, Program SE FSKKP, 09102/IJA-BCS2173-C21LBS, 09102/IJA-BCS2173-C22LBS, 
09102/IJA-BCS2173-C11LBG'),

('Sanisah binti Adnan', 'L16733', '0124561771', 'No.18, Jalan Jaya Baru, Taman Desaria, 46150 Petaling Jaya, Selangor', 
'sanisahadnan95@gmail.com', '095367283', '095367281', 'Staff, Academic Staff, Pengurusan FKKSA, 06071/IJA-BKC1711-K19LB, 06072/IJA-BKC3423-K04LB');

-- --------------------------------------------------------
--
-- Table structure for table `ItemOrderList`
--
CREATE TABLE `ItemOrderList` (
  `ListID` varchar(50) NOT NULL,
  `StaffID` varchar(100) NOT NULL,
  `OrderStatus` varchar(100) NOT NULL,
  `Comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ItemOrderList`
--
INSERT INTO `ItemOrderList` (`ListId`, `StaffID`, `OrderStatus`, `Comment`) VALUES
('OD1','L12300','Completed','All items in good condition'),
('OD2','L11230','Completed','All items in good condition'),
('OD3','L11345','Completed','All items in good condition'),
('OD4','L19943','Completed','All items in good condition'),
('OD5','L11845','Completed','All items in good condition');

-- --------------------------------------------------------
-- Table structure for table `GenerateReport`
--
CREATE TABLE `GenerateReport` (
  `report_id` varchar(8) NOT NULL,
  `admin_id` varchar(8) NOT NULL,
  `reportdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- --------------------------------------------------------
-- Table structure for table `auditRreport`
--
CREATE TABLE `auditReport` (
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
INSERT INTO `booking` (`bookingID`, `id`, `ItemID`, `ItemQuantity`,`DateBooking`,`BookingTime`,`PickUpDate`) VALUES
('23445','L12300', '22647', '1', '2021-06-02', '090000','2021-06-04'),
('35466','L11230', '13435', '2', '2021-06-03', '100000','2021-06-07'),
('56222','L11345', '58266', '2', '2021-06-02', '110000','2021-06-07'),
('49622','L19943', '35656', '2', '2021-06-01', '100000','2021-06-04'),
('13435','L11845', '49622', '1', '2021-05-28', '120000','2021-06-03'),
('25656','L11044', '13435', '1', '2021-06-03', '090000','2021-06-07'),
('58266','L15672', '13435','1', '2021-06-10', '091000','2021-06-14'),
('22647','L14511', '56222', '1', '2021-06-02', '093000','2021-06-04');

-- --------------------------------------------------------
--
--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`itemId`);
  
 --
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);
 
 --
-- Indexes for table `ItemOrderList`
--
ALTER TABLE `ItemOrderList`
  ADD PRIMARY KEY (`ListID`);

--
-- Indexes for table `auditReport`
--
ALTER TABLE `auditReport`
  ADD PRIMARY KEY (`Audit_id`);
  
  --
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingID`,`ItemID`,`id`);
-- Indexes for table `GenerateReport`
--
  ALTER TABLE `GenerateReport`
  ADD PRIMARY KEY (`report_id`);