-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 18, 2023 at 04:49 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eurosiae_euro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '61bd60c60d9fb60cc8fc7767669d40a1');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(255) NOT NULL,
  `theDate` varchar(255) DEFAULT NULL,
  `theLocation` varchar(255) DEFAULT NULL,
  `theStatus` varchar(255) DEFAULT NULL,
  `trackingNumber` varchar(255) DEFAULT NULL,
  `theRemark` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `theDate`, `theLocation`, `theStatus`, `trackingNumber`, `theRemark`) VALUES
(38, '2022-09-01', 'United States of America', 'On Hold', '537670694AEL', 'un pago de $ 450 ... debe completar el pago para que su entrega pueda completarse'),
(39, '2022-09-15', 'turkey', 'On Hold', '537139474AEL', 'La tarifa de envÃ­o es de $ 500. Tienes que hacer el pago lo antes posible. NB: el pago debe hacerse a travÃ©s de internet mastercard'),
(35, '2022-08-20', 'Turkey ', 'In Transit', '537670694AEL', 'La tarifa de envÃ­o es de $ 500. Tienes que hacer el pago lo antes posible.\r\n\r\nNB: el pago debe hacerse a travÃ©s de internet mastercard'),
(36, '2022-08-26', 'United States of America', 'In Transit', '537670694AEL', 'se ha hecho el pago de $200, se le ha hecho. $ 300 restantes'),
(37, '2022-08-29', 'turkey ', 'In Transit', '112254658AEL', 'La tarifa de envÃ­o es de $ 500. Tienes que hacer el pago lo antes posible. NB: el pago debe hacerse a travÃ©s de internet mastercard'),
(40, '2022-10-19', 'Cebu', 'Pre-transit', '396427895AEL', 'our company will ensure that your parcel is delivered successfully '),
(41, '2022-12-07', 'Germany', 'In Transit', '817640191EAE', 'Awaiting Advance payment of 50% to the sender.'),
(42, '2022-12-05', 'Yemen ', 'Pre-transit', '765173542AEL', 'Half the payment has been paid ');

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `id` int(255) NOT NULL,
  `trackingNumber` varchar(255) DEFAULT NULL,
  `shipperName` varchar(255) DEFAULT NULL,
  `shipperEmail` varchar(255) DEFAULT NULL,
  `shipperPhone` varchar(255) DEFAULT NULL,
  `shipperAddress` mediumtext,
  `receiverName` varchar(255) DEFAULT NULL,
  `receiverEmail` varchar(255) DEFAULT NULL,
  `receiverPhone` varchar(255) DEFAULT NULL,
  `receiverAddress` mediumtext,
  `progress` varchar(10) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `package` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `shipmentType` varchar(255) DEFAULT NULL,
  `description` longtext,
  `weight` varchar(255) DEFAULT NULL,
  `length` varchar(255) DEFAULT NULL,
  `width` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `quantity` varchar(10) DEFAULT NULL,
  `paymentMode` varchar(255) DEFAULT NULL,
  `departureDate` varchar(255) DEFAULT NULL,
  `deliveryDate` varchar(255) DEFAULT NULL,
  `pickupDate` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`id`, `trackingNumber`, `shipperName`, `shipperEmail`, `shipperPhone`, `shipperAddress`, `receiverName`, `receiverEmail`, `receiverPhone`, `receiverAddress`, `progress`, `origin`, `destination`, `package`, `status`, `shipmentType`, `description`, `weight`, `length`, `width`, `height`, `ref`, `quantity`, `paymentMode`, `departureDate`, `deliveryDate`, `pickupDate`) VALUES
(17, '537139474AEL', 'Alejandra Palacio', 'a.raapacio@gmail.com', ' +1 (337) 918-8', ' Incirlik Air Base, turkey', 'JesÃºs Santiago Gonzalez', 'chagjjk3@gmail.com', '+1 (317) 960', 'Florida', '10', 'Turkey', 'United States of America', '1', 'Shipment confirmed', 'Parcel', 'equipajes y barra de oro', '25Kg', '25cm', '25cm', '25cm', 'AEL/202209/29533', '1', 'Bank', '2022-09-15', '2022-09-18', '2022-09-18'),
(15, '537670694AEL', 'Alejandra Palacio ', 'a.ramonlacio@gmail.com', '+1 (337) 918-5', 'Incirlik Air Base, turkey ', 'Jorge Santos Garcia ', '', '+1 (323) 247', 'fornia.zc.90011', '90', 'Turkey', 'United States of America', '1', 'On Hold', 'Parcel', 'luggages and gold bar', '25Kg', '25cm', '25cm', '25cm', 'AEL/202208/98643', '1', 'Bank', '2022-08-21', '2022-08-23', '2022-08-23'),
(16, '112254658AEL', 'Alejandra Palacio', 'a.ramonjo@gmail.com', '+1 (337) 918', 'Incirlik Air Base, turkey', 'Evaristo Montalvo', '', '+1 (717) 50', '611 Troy Schenectady Rd, Latham, NY', '35', 'Turkey', 'United States of America', '1', 'Picked by carrier', 'Parcel', 'luggages and gold bar', '25Kg', '25cm', '25cm', '25cm', 'AEL/202208/62691', '1', 'Bank', '2022-08-29', '2022-08-31', '2022-08-31'),
(18, '396427895AEL', 'onetimeess.com', 'support@onetimeess.com', '09568451343', 'Cebu Philippines', 'john praise', 'prajjjjken80@gmail.com', '0934221', '4t', '10', 'Phillipines', 'Phillipines', '1', 'Shipment confirmed', 'Parcel', '', '25Kg', '25cm', '25cm', '25cm', 'AEL/202210/96650', '1', 'Bank', '2022-10-19', '2022-10-24', '2022-10-20'),
(19, '817640191EAE', 'Mercedes Truck', 'juanalvare991@gmail.com', '356356345', '24 Lakeland st. Trrs Germany', 'Paul Kalaata', 'jsussamaama@gmail.com', '453564564', ' st. Arizonal, 37626 USA. ', '1', 'Germany', 'United States of America', '1', 'Shipment confirmed', 'Cargo', 'This Truck is to be delivered after an advance payment of at least 50% of the cost of the cost of the item has been paid to the sender. As instructed.', '25Kg', '25cm', '25cm', '25cm', 'EAE/202212/96078', '1', 'Bank', '2022-12-07', '2022-12-11', '2022-12-11'),
(20, '765173542AEL', 'Wang Lee ', '', '', 'Downtown Marib Yemen', '??', '', '1563090091909', '????????????????4?????', '10', 'Yemen', 'China', '1', 'Picked by carrier', 'Parcel', '', '25Kg', '25cm', '25cm', '25cm', 'AEL/202212/61611', '1', 'Bank', '2022-12-05', '2022-12-07', '2022-12-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
