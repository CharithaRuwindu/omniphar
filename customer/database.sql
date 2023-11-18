-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 07:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omniphar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin ID` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin ID`, `Email`, `Password`, `first_name`, `last_name`, `address`, `contact`) VALUES
('1', 'ovitigala20@gmail.com', 'hiro', '', '', '', ''),
('2', 'ucsc@gmail.com', 'ucsc@123', 'Computing', 'Colombo', 'Reid Avenue, Colombo', '0451234567');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `email`, `first_name`, `last_name`, `password`, `address`, `contact`) VALUES
(1, 'dew@gmail.com', 'dew', 'savindrani', 'dew1', 'elapatha, ratnapura', '0774444444'),
(2, 'charitha@gmail.com', 'charitha', 'ruwindu', 'charitha1', 'weralupa,ratnapura', '0714171927'),
(3, 'ucsc@gmail.com', 'ucsc', 'colombo', 'ucsc@123', 'Reid ave, Colombo', '0776655443'),
(4, 'ovitigala20@gmail.com', 'hiro', 'ovitigala', 'hiro', 'reid ave, colombo', '0712222222'),
(5, 'chrisp@gmail.com', 'chris', 'perera', 'chris@123', 'No 15, Main road, Negambo', '0772323145'),
(9, 'jayantha@gmail.com', 'Jayanta', 'Nishan', 'jaya@123', 'No 23, Galle Road, Negambo', '0452212546'),
(10, 'pathum@gmail.com', 'pathum', 'perera', '1234', 'colombo', '0716666666'),
(11, 'nimashi@gmail.com', 'nimashi', 'perera', '1234', 'colombo5', '0762678954');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_completion`
--

CREATE TABLE `delivery_completion` (
  `ID` int(10) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery_completion`
--

INSERT INTO `delivery_completion` (`ID`, `Date`, `Time`) VALUES
(1, '2022-12-02', '13:36:00.000000'),
(2, '2022-12-19', '10:27:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_person`
--

CREATE TABLE `delivery_person` (
  `ID` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `vehicle_type` text NOT NULL,
  `license_plate` varchar(10) NOT NULL,
  `Age` int(3) NOT NULL,
  `P_image` blob NOT NULL,
  `License_image_front` blob NOT NULL,
  `License_image_back` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery_person`
--

INSERT INTO `delivery_person` (`ID`, `Email`, `password`, `first_name`, `last_name`, `Address`, `Contact`, `NIC`, `vehicle_type`, `license_plate`, `Age`, `P_image`, `License_image_front`, `License_image_back`) VALUES
(1, 'charitha@gmail.com', 'charitha@123', 'Charitha', 'Ruwindu', 'Weralupa, Ratnapura', '0711231234', '983352219V', 'car', 'TX 2222', 12, 0x6261636b2e706e67, 0x6c6f676f2e706e67, 0x506861726d616379312e706e67),
(2, 'computingcmb@gmail.com', 'ucsc@123', 'UCSC', 'Colombo', 'Reid avenue, colombo', '0765533221', '992653321V', 'car', 'TS 7656', 45, 0x38343338302e706e67, 0x4465736b746f70202d2031202832292e706e67, 0x4465736b746f70202d2031202831292e706e67),
(3, 'ashok@gmail.com', 'ashok@123', 'Ashok', 'Mahanama', 'No 15, Nugegoda, Colombo', '0762218987', '976673351V', 'car', 'RS 8756', 27, 0x4f4d4e4970686172202832292e706e67, 0x4465736b746f70202d2031202832292e706e67, 0x777269737462616e64732e6a7067),
(4, 'nishanm1@gmail.com', 'nishan@m1', 'Nishan', 'Madushanka', 'Mutuwal Road, Colombo 15', '0775635456', '0717788967', 'car', 'AA 1243', 34, 0x6b696e64706e675f313731323238322e706e67, 0x6f726967696e616c2e6a7067, 0x4465736b746f70202d2031202832292e706e67),
(5, 'supunst@gmail.com', 'supun@123', 'Supun', 'Shantha', 'New Town, Ratnapura', '0772746356', '97678364V', 'car', 'YS 6587', 35, 0x6f726967696e616c2e6a7067, 0x4465736b746f70202d20322e706e67, 0x4f4d4e4970686172202831292e706e67),
(6, 'hiro@gmail.com', '123', 'Hiroshini', 'Ovitigala', 'Gampaha', '0776543452', '200069003091', 'Car', 'ADS4567', 225, 0x4465736b746f70202d2032202831292e706e67, 0x4465736b746f70202d2031202832292e706e67, 0x4465736b746f70202d2032202831292e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_person_requests`
--

CREATE TABLE `delivery_person_requests` (
  `id` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `vehicle` varchar(15) NOT NULL,
  `license_plate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery_person_requests`
--

INSERT INTO `delivery_person_requests` (`id`, `email`, `password`, `first_name`, `last_name`, `contact`, `address`, `NIC`, `vehicle`, `license_plate`) VALUES
('', 'charithar@gmail.com', '123', 'charitha', 'ruwindu', '1234', 'ratnapura', '1234', 'car', 'fdddfdf'),
('', 'charithar@gmail.com', '123', 'charitha', 'ruwindu', '1234', 'ratnapura', '1234', 'car', 'fdddfdf'),
('', 'charithar@gmail.com', '1234', 'charitha', 'charitha', '12345', 'ratnapura', '1234', 'Three wheeler', '1234'),
('', 'charithaq@gmail.com', '123', 'charitha', 'ruwindu', '123', 'ratnapura', '1234', 'Three wheeler', 'xxxx'),
('', 'charitha2@gmail.com', '12345', 'charitha', 'pushpakumara', '0772323234', 'weralupa ratnapura', '776654432V', 'motorcycle', 'tb 2234');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `med_Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `category` enum('Medicine','Medical devices','Personal care','Wellness','Other') NOT NULL,
  `price` float NOT NULL,
  `per` enum('Tablet/Capsule','Card','Box','Item') NOT NULL,
  `image` blob NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`med_Id`, `name`, `brand`, `category`, `price`, `per`, `image`, `description`) VALUES
(1, 'Aripiprazole - 5mg, 100 Tabs', 'Abilify', 'Medicine', 7659, 'Box', '', 'Abilify is an antipsychotic medication. It works b...'),
(2, 'ABIRATERONE ACETATE TABLETS USP 500MG 60 TABLETS', 'Zytiga', 'Medicine', 10.95, 'Tablet/Capsule', '', 'Abiraterone works by reducing androgen production...'),
(3, 'Acetaminophen/Paracetamol Tablets  500Mg 144S', 'Panadol', 'Medicine', 599.03, 'Box', '', 'Acetaminophen is a pain reliever and a fever reduc...'),
(4, 'Pioglitazone - 28 Tablets 15mg', 'Actos', 'Medicine', 1337.15, 'Card', '', 'Actos is an oral diabetes medicine that helps cont...'),
(7, 'pioglitazone 28 tablet 15mg', 'actos', 'Medicine', 5, 'Card', '', 'pain relieaver');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `customer_id` varchar(10) NOT NULL,
  `delivery_person_id` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `address`, `price`, `customer_id`, `delivery_person_id`, `status`) VALUES
(1, 'weralupa, ratnapura', '2000', '1', '1', 'delivered'),
(2, 'elapatha, rathnapura', '1000', '2', '1', 'delivered'),
(3, 'gampaha old road', '2340', '3', '2', 'dispatched'),
(4, 'senevirathna ave, colombo 15', '5412', '5', '4', 'dispatched');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `ID` varchar(11) NOT NULL,
  `First_name` varchar(30) NOT NULL,
  `Last_name` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact_no` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`ID`, `First_name`, `Last_name`, `Address`, `Contact_no`, `Email`, `Password`) VALUES
('', 'dewmini', 'savindrani', '1/3,ganemulla,gampaha\r\n', '0778765432', 'dew@gmail.com', 'dew'),
('', 'hiroshini', 'ovitigala', 'colomno', '0711231231', 'hiro20@gmail.com', 'hiro'),
('4', 'charitha', 'ruwindu', 'ratnapura', '0714171927', 'charitha@gmail.com', 'charitha123'),
('', 'cha', 'cha', 'cha', '123', 'charitharuwindu@gmail.com', '123'),
('', 'dfdf', 'dfdfd', 'dfdf', '0714171927', 'charita@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist_requests`
--

CREATE TABLE `pharmacist_requests` (
  `First_name` varchar(30) NOT NULL,
  `Last_name` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact_no` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharmacist_requests`
--

INSERT INTO `pharmacist_requests` (`First_name`, `Last_name`, `Address`, `Contact_no`, `Email`, `Password`) VALUES
('erer', 'ere', 'rer', '071417192', 'charitharuwdu@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `firstname`, `lastname`, `address`, `contact`, `role`) VALUES
('1', 'charitha@gmail.com', '123', 'charitha', 'ruwindu', '77/1, Newtown, Ratnapura', '0711112223', 'admin'),
('2', 'dew@gmail.com', '1234', 'dew', 'savindrani', '23/4 elapatha, ratnapura', '0778889990', 'customer'),
('3', 'hiro@gmail.com', '2222', 'hiro', 'ovitigala', '23/6 gampaha', '0456667778', 'delivery_person'),
('4', 'theek@gmail.com', '3333', 'theekshani', 'buddhima', '87/4 nelligala', '0763334446', 'pharmacist');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_completion`
--
ALTER TABLE `delivery_completion`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `delivery_person`
--
ALTER TABLE `delivery_person`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`med_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `delivery_person`
--
ALTER TABLE `delivery_person`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `med_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;