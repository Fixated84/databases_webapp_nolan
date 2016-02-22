-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2016 at 05:48 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wca`
--

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `idCategory` int(11) NOT NULL,
  `Category` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`idCategory`, `Category`) VALUES
(7, 'Cab Chassis'),
(9, 'Convertible'),
(3, 'Coupe'),
(5, 'Hatch'),
(8, 'Light Truck'),
(6, 'People Mover'),
(1, 'Sedan'),
(2, 'SUV'),
(10, 'Van'),
(4, 'Wagon');

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE `Customers` (
  `idCustomers` int(11) NOT NULL,
  `Fullname` varchar(45) DEFAULT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `Phone` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Customers`
--

INSERT INTO `Customers` (`idCustomers`, `Fullname`, `Address`, `Phone`, `Email`) VALUES
(1, 'Tom Brady', '123 Fake ST', '123456789', 'tombrady@nepatriots.com'),
(2, 'Arron Rodgers', '321 Fake ST', '987654321', 'arronrodgers@gbpackers.com'),
(3, 'Drew Brees', '231 Fake ST', '543219876', 'drewbrees@nosaints.com'),
(4, 'Cam Newton', '132 Fake ST', '321987654', 'camnewton@cpanthers.com'),
(5, 'Ben Roethlisberger', '312 Fake ST', '123459876', 'benroethlisberger@pbsteelers.com');

-- --------------------------------------------------------

--
-- Table structure for table `Manufacturer`
--

CREATE TABLE `Manufacturer` (
  `idManufacturer` int(11) NOT NULL,
  `Manufacturer` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Manufacturer`
--

INSERT INTO `Manufacturer` (`idManufacturer`, `Manufacturer`) VALUES
(1, 'Audi'),
(9, 'BMW'),
(2, 'Ford'),
(3, 'Holden'),
(4, 'Honda'),
(10, 'Jeep'),
(5, 'Kia'),
(6, 'Mazda'),
(8, 'Mitsubishi'),
(7, 'Nissan');

-- --------------------------------------------------------

--
-- Table structure for table `Salespersons`
--

CREATE TABLE `Salespersons` (
  `idSalespersons` int(11) NOT NULL,
  `Fullname` varchar(45) DEFAULT NULL,
  `Phone` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Username` varchar(45) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Salespersons`
--

INSERT INTO `Salespersons` (`idSalespersons`, `Fullname`, `Phone`, `Email`, `Username`, `Password`) VALUES
(1, 'Nolan Ryan', '0421195886', 'nolanryan@bigpond.com', 'ryann', '5f4dcc3b5aa765d61d8327deb882cf99'),
(4, 'Alex Ryan', '2424242332', 'alex@bigpond.com', 'ryana', '5f4dcc3b5aa765d61d8327deb882cf99'),
(5, 'James Sales', '123455432', 'jamessales@internet.com', 'jamess', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `Shoppingcart`
--

CREATE TABLE `Shoppingcart` (
  `idShoppingcart` int(11) NOT NULL,
  `Stocknumber` int(11) NOT NULL,
  `idCustomers` int(11) NOT NULL,
  `idSalespersons` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Shoppingcart`
--

INSERT INTO `Shoppingcart` (`idShoppingcart`, `Stocknumber`, `idCustomers`, `idSalespersons`, `Date`) VALUES
(1, 1, 1, 4, '2016-02-22'),
(2, 3, 2, 4, '2016-02-22'),
(3, 11, 3, 1, '2016-02-22'),
(4, 8, 4, 1, '2016-02-22'),
(5, 5, 5, 1, '2016-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `Vehiclelist`
--

CREATE TABLE `Vehiclelist` (
  `Stocknumber` int(11) NOT NULL,
  `Manufacturer` varchar(24) DEFAULT NULL,
  `Model` varchar(24) DEFAULT NULL,
  `Category` varchar(24) DEFAULT NULL,
  `Year` year(4) DEFAULT NULL,
  `Price` varchar(10) DEFAULT NULL,
  `Kilometres` varchar(10) DEFAULT NULL,
  `Colour` varchar(24) DEFAULT NULL,
  `Registration` varchar(24) DEFAULT NULL,
  `Vin` varchar(24) DEFAULT NULL,
  `Cylinders` int(11) DEFAULT NULL,
  `Fuel` varchar(24) DEFAULT NULL,
  `Transmission` varchar(24) DEFAULT NULL,
  `special_price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Vehiclelist`
--

INSERT INTO `Vehiclelist` (`Stocknumber`, `Manufacturer`, `Model`, `Category`, `Year`, `Price`, `Kilometres`, `Colour`, `Registration`, `Vin`, `Cylinders`, `Fuel`, `Transmission`, `special_price`) VALUES
(1, 'Ford', 'Focus', 'Sedan', 2010, '15,000', '45,000', 'Black', '123456789', '987654321', 4, 'Petrol', 'Automatic', ''),
(3, 'Holden', 'Cruze', 'Sedan', 2012, '18,000', '20,000', 'Silver', '1237896554', '321456987', 4, 'Petrol', 'Manual', ''),
(4, 'Mazda', '3', 'Sedan', 2008, '15,000', '67,000', 'White', '123852753', '357951456', 6, 'Petrol', 'Automatic', '12,000'),
(5, 'Mitsubishi', 'Lancer', 'Wagon', 2010, '19,000', '81,000', 'Silver', '123753157', '359751456', 4, 'Petrol', 'Manual', ''),
(6, 'Ford', 'Falcon', 'Sedan', 2014, '25,000', '16,000', 'Red', '123852654', '112547562', 6, 'Petrol', 'Automatic', ''),
(7, 'Honda', 'Accord', 'Sedan', 2005, '12,000', '89,000', 'Silver', '741852357', '987159856', 6, 'Petrol', 'Automatic', ''),
(8, 'Holden', 'Commodore', 'Sedan', 2011, '18,000', '78,000', 'Black', '357452916', '375216985', 6, 'Petrol', 'Automatic', '16,000'),
(9, 'Mitsubishi', 'Magna', 'Sedan', 2001, '5,000', '100,000', 'Silver', '546385164', '159753212', 6, 'Petrol', 'Manual', ''),
(10, 'Nissan', 'Pulsar', 'Sedan', 2012, '20,000', '30,000', 'White', '475329846', '384125687', 4, 'Petrol', 'Automatic', ''),
(11, 'Mazda', '6', 'Sedan', 2014, '30,000', '10,000', 'Silver', '147249388', '125764134', 6, 'Petrol', 'Automatic', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`idCategory`),
  ADD UNIQUE KEY `Category_UNIQUE` (`Category`);

--
-- Indexes for table `Customers`
--
ALTER TABLE `Customers`
  ADD PRIMARY KEY (`idCustomers`),
  ADD UNIQUE KEY `Email_UNIQUE` (`Email`);

--
-- Indexes for table `Manufacturer`
--
ALTER TABLE `Manufacturer`
  ADD PRIMARY KEY (`idManufacturer`),
  ADD UNIQUE KEY `Manufacturer_UNIQUE` (`Manufacturer`);

--
-- Indexes for table `Salespersons`
--
ALTER TABLE `Salespersons`
  ADD PRIMARY KEY (`idSalespersons`),
  ADD UNIQUE KEY `Email_UNIQUE` (`Email`),
  ADD UNIQUE KEY `Username_UNIQUE` (`Username`);

--
-- Indexes for table `Shoppingcart`
--
ALTER TABLE `Shoppingcart`
  ADD PRIMARY KEY (`idShoppingcart`,`Stocknumber`,`idCustomers`,`idSalespersons`),
  ADD UNIQUE KEY `Stocknumber` (`Stocknumber`),
  ADD KEY `Stocknumber_idx` (`Stocknumber`),
  ADD KEY `idCustomers_idx` (`idCustomers`),
  ADD KEY `idSalespersons_idx` (`idSalespersons`);

--
-- Indexes for table `Vehiclelist`
--
ALTER TABLE `Vehiclelist`
  ADD PRIMARY KEY (`Stocknumber`),
  ADD UNIQUE KEY `Stocknumber_UNIQUE` (`Stocknumber`),
  ADD UNIQUE KEY `Vin_UNIQUE` (`Vin`),
  ADD KEY `Category_idx` (`Category`),
  ADD KEY `Manufacturer_idx` (`Manufacturer`),
  ADD KEY `special_price` (`special_price`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `Customers`
--
ALTER TABLE `Customers`
  MODIFY `idCustomers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Manufacturer`
--
ALTER TABLE `Manufacturer`
  MODIFY `idManufacturer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `Salespersons`
--
ALTER TABLE `Salespersons`
  MODIFY `idSalespersons` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Shoppingcart`
--
ALTER TABLE `Shoppingcart`
  MODIFY `idShoppingcart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `Vehiclelist`
--
ALTER TABLE `Vehiclelist`
  MODIFY `Stocknumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Shoppingcart`
--
ALTER TABLE `Shoppingcart`
  ADD CONSTRAINT `Stocknumber` FOREIGN KEY (`Stocknumber`) REFERENCES `Vehiclelist` (`Stocknumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idCustomers` FOREIGN KEY (`idCustomers`) REFERENCES `Customers` (`idCustomers`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idSalespersons` FOREIGN KEY (`idSalespersons`) REFERENCES `Salespersons` (`idSalespersons`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Vehiclelist`
--
ALTER TABLE `Vehiclelist`
  ADD CONSTRAINT `Category` FOREIGN KEY (`Category`) REFERENCES `Category` (`Category`),
  ADD CONSTRAINT `Manufacturer` FOREIGN KEY (`Manufacturer`) REFERENCES `Manufacturer` (`Manufacturer`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
