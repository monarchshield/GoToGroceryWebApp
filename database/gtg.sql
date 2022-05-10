-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4000
-- Generation Time: May 10, 2022 at 04:47 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gtg`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `ID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `ProductID` int(6) DEFAULT NULL,
  `OrderID` int(6) DEFAULT NULL,
  `MemberID` int(10) DEFAULT NULL,
  `ActionTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `MemberID` int(10) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `JoinDate` date NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `PhoneNum` int(10) NOT NULL,
  `Active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`MemberID`, `FirstName`, `LastName`, `JoinDate`, `Email`, `Address`, `PhoneNum`, `Active`) VALUES
(0, 'FirstName', 'LastName', '0000-00-00', 'Email', 'Address', 0, 1),
(1, 'Edith', 'Tifft', '2022-04-07', 'hayden_gleason@hotmail.com', '94 Kopkes Road', 412312310, 1),
(4, 'Finn', 'Gurkin', '2022-05-05', 'abby.hane@gmail.com', '53 Testers street', 412312313, 1),
(5, 'Jerald', 'Presley', '2022-04-07', 'imogen.howell@hotmail.com', '7 Nandewar Street', 412312314, 0),
(6, 'Lora', 'Presley', '2022-04-08', 'jessica_james64@hotmail.com', '67 Testers street', 412312315, 0),
(7, 'Jerrold', 'Sharman', '2022-03-05', 'ava60@yahoo.com', '22 Hargrave Road', 412312316, 1),
(8, 'Erma', 'Keen', '2022-05-05', 'ali54@gmail.com', '49 Martens Place', 412312317, 1),
(9, 'Lamar', 'Newman', '2022-04-07', 'jonathan.howe87@hotmail.com', '74 Hillsdale Road', 412312318, 1),
(11, 'Dewey', 'Tracy', '2022-03-05', 'max_greenfelder41@hotmail.com', '70 Barker Street', 412312320, 1),
(12, 'Margery', 'Thorpe', '2022-05-05', 'lillian_thomson53@gmail.com', '95 Kopkes Road', 412312321, 1),
(13, 'Edna', 'Swift', '2022-04-07', 'mikayla.west@hotmail.com', '87 Goebels Road', 412312322, 1),
(14, 'Leonard', 'Attaway', '2022-04-08', 'isabella_hartmann@hotmail.com', '82 Seaview Court', 412312323, 1),
(15, 'Major', 'Austin', '2022-03-05', 'christian_smith@hotmail.com', '84 Mackie Street', 412312324, 1),
(16, 'Darrel', 'Frost', '2022-05-05', 'lucy_erdman@hotmail.com', '8 Nandewar Street', 412312325, 1),
(17, 'Elaine', 'Elder', '2022-04-07', 'mikayla62@hotmail.com', '72 Chatsworth Drive', 412312326, 1),
(18, 'Ophelia', 'Tyson', '2022-04-08', 'sebastian.thomas34@hotmail.com', '23 Hargrave Road', 412312327, 1),
(19, 'Rosalind', 'Anthonyson', '2022-03-05', 'olivia57@gmail.com', '50 Martens Place', 412312328, 1),
(20, 'Dianne', 'Breckenridge', '2022-05-05', 'grace.grady@hotmail.com', '75 Hillsdale Road', 412312329, 1),
(21, 'Mariah', 'Alexander', '2022-04-07', 'caleb21@gmail.com', '88 Halsey Road', 412312330, 1),
(22, 'Scot', 'Giffard', '2022-04-08', 'finn36@hotmail.com', '71 Barker Street', 412312331, 1),
(23, 'Shirley', 'Attwater', '2022-03-05', 'chloe.cassin96@hotmail.com', '96 Kopkes Road', 412312332, 1),
(24, 'Christine', 'Kynaston', '2022-05-05', 'abbey.casper@hotmail.com', '88 Goebels Road', 412312333, 1),
(25, 'Bryce', 'Gabrielson', '2022-04-07', 'benjamin_paterson90@yahoo.com', '83 Seaview Court', 412312334, 1),
(26, 'Hale', 'Cason', '2022-04-08', 'zachary94@yahoo.com', '85 Mackie Street', 412312335, 1),
(27, 'Hazel', 'Parks', '2022-03-05', 'ethan_cruickshank@hotmail.com', '9 Nandewar Street', 412312336, 1),
(28, 'Geoffrey', 'Tobias', '2022-05-05', 'leo.oreilly84@hotmail.com', '73 Chatsworth Drive', 412312337, 1),
(29, 'Constance', 'Jekyll', '2022-04-07', 'zara30@hotmail.com', '24 Hargrave Road', 412312338, 1),
(30, 'Russell', 'Fleming', '2022-04-08', 'georgia.turner1@hotmail.com', '51 Martens Place', 412312339, 1),
(31, 'Jennifer', 'Lawrence', '2018-07-22', 'JLawrence@gmail.com', '32 Canoe Avenue ', 412364874, 1),
(32, 'Jennifer', 'Lawrence', '2018-07-22', 'JLawrence@gmail.com', '32 Canoe Avenue ', 412364874, 1),
(33, 'Jennifer', 'Lawrence', '2018-07-22', 'JLawrence@gmail.com', '32 Canoe Avenue ', 412364874, 1),
(34, 'Jennifer', 'Lawrence', '2018-07-22', 'JLawrence@gmail.com', '32 Canoe Avenue ', 412364874, 1),
(35, 'Jennifer', 'Lawrence', '2018-07-22', 'JLawrence@gmail.com', '32 Canoe Avenue ', 412364874, 1),
(36, 'Jennifer', 'Lawrence', '2018-07-22', 'JLawrence@gmail.com', '32 Canoe Avenue ', 412364874, 1),
(37, 'Jennifer', 'Lawrence', '2018-07-22', 'JLawrence@gmail.com', '32 Canoe Avenue ', 412364874, 1),
(38, 'Peter', 'Pettigrew', '2018-07-22', 'P.P@gmail.com', '45 Lickey street', 423212839, 1),
(39, 'Peter', 'Pettigrew', '2018-07-22', 'P.P@gmail.com', '45 Lickey street', 423212839, 1),
(40, 'Peter', 'Pettigrew', '2018-07-22', 'P.P@gmail.com', '45 Lickey street', 423212839, 1),
(41, 'Peter', 'Pettigrew', '2018-07-22', 'P.P@gmail.com', '45 Lickey street', 423212839, 1),
(42, 'Peter', 'Pettigrew', '2018-07-22', 'P.P@gmail.com', '45 Lickey street', 423212839, 1),
(43, 'Peter', 'Pettigrew', '2018-07-22', 'P.P@gmail.com', '45 Lickey street', 423212839, 1),
(44, 'Peter', 'Pettigrew', '2018-07-22', 'P.P@gmail.com', '45 Lickey street', 423212839, 1),
(45, 'Penny', 'Pickles', '2018-07-22', 'P.Moron@gmail.com', '15 Nickle street', 41231231, 1),
(46, 'Penny', 'Pickle', '2018-07-22', 'tiffany@co.com', '8 diamonds road', 2147483647, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `OrderID` int(6) NOT NULL,
  `ProductID` int(6) NOT NULL,
  `Quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(6) NOT NULL,
  `MemberID` int(10) NOT NULL,
  `OrderTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `OrderStatus` enum('PAID','PENDING','FAIL') NOT NULL DEFAULT 'PENDING',
  `Info` varchar(300) DEFAULT NULL,
  `Active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(6) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Unit` varchar(10) NOT NULL,
  `Price` int(10) NOT NULL,
  `Stock` int(10) NOT NULL,
  `ExpiryDate` date NOT NULL,
  `Active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `Category`, `Unit`, `Price`, `Stock`, `ExpiryDate`, `Active`) VALUES
(1, 'Beef', 'Meat', 'Kg', 15, 50, '2022-05-15', 1),
(2, 'Chicken', 'Meat', 'Kg', 25, 30, '2022-05-15', 0),
(3, 'Cheese', 'Vegetable', 'each', 10, 15, '2022-05-29', 1),
(4, 'WerkQueen', 'Fruit', 'Head', 5, 15, '2022-06-24', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ProductID` (`ProductID`),
  ADD KEY `OrderID` (`OrderID`),
  ADD KEY `MemberID` (`MemberID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`MemberID`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`OrderID`,`ProductID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `MemberID` (`MemberID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `MemberID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`),
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `history_ibfk_3` FOREIGN KEY (`MemberID`) REFERENCES `members` (`MemberID`);

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `orderitems_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `orderitems_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `members` (`MemberID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
