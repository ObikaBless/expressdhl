-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 03:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracking`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `shipmentID` varchar(50) DEFAULT NULL,
  `shipperName` varchar(50) DEFAULT NULL,
  `recieverName` varchar(50) DEFAULT NULL,
  `recieveraddress` varchar(50) DEFAULT NULL,
  `departuretime` varchar(50) DEFAULT NULL,
  `Emailaddress` varchar(50) DEFAULT NULL,
  `senderaddress` varchar(50) DEFAULT NULL,
  `shipmenttype` varchar(50) DEFAULT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `courier` varchar(50) DEFAULT NULL,
  `pakages` varchar(50) DEFAULT NULL,
  `mode` varchar(50) DEFAULT NULL,
  `product` varchar(50) DEFAULT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `destination` varchar(50) DEFAULT NULL,
  `paymentmode` varchar(50) DEFAULT NULL,
  `shipperphone` varchar(50) DEFAULT NULL,
  `shipperemail` varchar(50) DEFAULT NULL,
  `carrier` varchar(50) DEFAULT NULL,
  `origin` varchar(50) DEFAULT NULL,
  `pickupdate` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `pickuptime` varchar(50) DEFAULT NULL,
  `CarrierReferenceNum` varchar(100) DEFAULT NULL,
  `dateofreg` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`shipmentID`, `shipperName`, `recieverName`, `recieveraddress`, `departuretime`, `Emailaddress`, `senderaddress`, `shipmenttype`, `weight`, `courier`, `pakages`, `mode`, `product`, `quantity`, `destination`, `paymentmode`, `shipperphone`, `shipperemail`, `carrier`, `origin`, `pickupdate`, `status`, `phone`, `pickuptime`, `CarrierReferenceNum`, `dateofreg`) VALUES
('simonaid', 'simon', 'njim', 'njim located', NULL, 'njim@gmail.com', 'simon address', 'air frieght', '13kg', 'dhns', 'food for home', 'DHL', 'food for home', '2bags', 'united state', '', '123232', 'email', 'select one', 'south', '2023-03-25', 'on hold', '1234', NULL, '32dwdwdwedw', '2023-03-13 07:54:55'),
('simonMode', 'simon', 'njim', 'njim located', '12Am', 'njim@gmail.com', 'simon address', 'international shipping', '13kg', 'dhns', 'food for home', 'UPS', 'food for home', '2bags', 'united state', 'Cash app', '123232', 'simon@gmail.com', 'select one', 'south', '2023-03-25', 'moving', '849472384798234792', '1243PM', 'MK-2343453', '2023-03-13 07:54:55'),
('acscacsac', '', '', '', '', '', '', '--select --type', '', '', '', 'select one', '', '', '', '', '', '', 'select one', '', '', '', '', '', 'select one', '2023-03-13 07:54:55'),
('Authoddml', '', '', '', '', '', '', '--select --type', '', '', '', 'Sea Transport', '', '', '', '', '', '', 'select one', '', '', '', '', '', '7237ghgsd', '2023-03-13 07:54:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD UNIQUE KEY `shipmentID` (`shipmentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
