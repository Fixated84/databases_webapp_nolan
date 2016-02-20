-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2016 at 07:05 PM
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
(2, 'Nolan Ryan', '123 Fake ST', '0421195886', 'nolanryan@bigpond.com'),
(10, 'Alex Ryan', '123 Fake STreet', '242424424424', 'alex@alex.alexk');

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
(4, 'Alex Ryan', '242424', 'alex@bigpond.com', 'ryana', '5f4dcc3b5aa765d61d8327deb882cf99');

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
(1, 1000, 2, 1, '2015-02-07'),
(2, 123456, 10, 4, '2016-02-19');

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
(1000, 'Audi', 'A4', 'Sedan', 2016, '25,000', '0', 'Black', '123456', '123456', 6, 'Petrol', 'Auto', ''),
(123456, 'Audi', 'Cool', 'Sedan', 1998, '123455', '1234', 'Black', '12345', '12334', 6, 'Petrol', 'Auto', ''),
(123457, 'Mitsubishi', 'Lanser', 'Sedan', 2000, '10000', '10000', 'Black', '112212', '21212122', 4, 'Petrol', 'Automatic', ''),
(123467, 'Nissan', 'Z', 'Sedan', 2015, '50,000', '', 'Silver', '123456789', '123456789', 6, 'Petrol', 'Automatic', '40,000'),
(123498, 'Holden', 'Commdore', 'Sedan', 2010, '20000', '2000', 'Silver', '12234', '1234', 6, 'Petrol', 'Automatic', ''),
(123512, 'Audi', 'A4', 'Sedan', 2016, '50,000', '1', 'Silver', '12345', '12345', 6, 'Diesel', 'Automatic', '');

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
  MODIFY `idCustomers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `Manufacturer`
--
ALTER TABLE `Manufacturer`
  MODIFY `idManufacturer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `Salespersons`
--
ALTER TABLE `Salespersons`
  MODIFY `idSalespersons` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Shoppingcart`
--
ALTER TABLE `Shoppingcart`
  MODIFY `idShoppingcart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Vehiclelist`
--
ALTER TABLE `Vehiclelist`
  MODIFY `Stocknumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123513;
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
