-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2019 at 10:54 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyberlandv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `joborder`
--

CREATE TABLE `joborder` (
  `jobOrderID` int(11) NOT NULL,
  `jobOrderNo` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `manufacturerID` int(11) NOT NULL,
  `manufacturerName` varchar(50) NOT NULL,
  `manufacturerContact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`manufacturerID`, `manufacturerName`, `manufacturerContact`) VALUES
(1, 'SmallCo.', 'www.SmallCo.fake'),
(2, 'MediumCo.', 'www.MediumCo.fake'),
(3, 'BigCo.', 'www.BigCo.fake'),
(4, 'GoodCo.', 'www.GoodCo.fake'),
(5, 'LoremCo.', 'www.LoremCo.fake');

-- --------------------------------------------------------

--
-- Table structure for table `orderlineitems`
--

CREATE TABLE `orderlineitems` (
  `quantity` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderlineitems`
--

INSERT INTO `orderlineitems` (`quantity`, `productID`, `orderID`) VALUES
(1, 6, 1),
(2, 3, 1),
(2, 3, 1),
(1, 1, 1),
(1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `date` date NOT NULL,
  `billingAddress` varchar(100) DEFAULT NULL,
  `totalCost` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `date`, `billingAddress`, `totalCost`, `userID`) VALUES
(1, '2019-05-03', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `cost` int(11) NOT NULL,
  `manufacturerID` int(11) NOT NULL,
  `productTypeID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `name`, `info`, `cost`, `manufacturerID`, `productTypeID`) VALUES
(1, 'monitorasd', 'this is a monitor. lorem ipsum lorem ipsumlorem ipsumfdahtryhfdhr', 80, 3, 'Monitor'),
(2, 'monitorzxc', 'this is a monitor. lorem ipsum lorem ipsumlorem ipsumgdaredhfdher', 90, 4, 'Monitor'),
(3, 'monitoreqweqwe', 'this is a monitor. lorem ipsum lorem ipsumlorem ipsumfafafafaf', 70, 5, 'Monitor'),
(4, 'monitorrtyytrtyr', 'this is a monitor. lorem ipsum lorem ipsumlorem ipsumhyhtrjhfgsjhtr', 40, 2, 'Monitor'),
(5, 'speakerfwdfwer', 'this is a speaker. lorem ipsum lorem ipsumlorem ipsum. this is a speaker. lorem ipsum lorem ipsumlorem ipsum', 110, 1, 'Speakers'),
(6, 'speakerseqweqw', 'this is a speaker. lorem ipsum lorem ipsumlorem ipsum. this is a speaker. lorem ipsum lorem ipsumlorem ipsum', 990, 3, 'Speakers'),
(7, 'speakerrewrewr', 'this is a speaker. lorem ipsum lorem ipsumlorem ipsum. this is a speaker. lorem ipsum lorem ipsumlorem ipsum', 740, 5, 'Speakers'),
(8, 'speaker123123', 'this is a speaker. lorem ipsum lorem ipsumlorem ipsum. this is a speaker. lorem ipsum lorem ipsumlorem ipsum', 33, 2, 'Speakers'),
(9, 'monitorqwe', 'this is a monitor. lorem ipsum lorem ipsumlorem ipsum this is a monitor. lorem ipsum lorem ipsumlorem ipsum', 50, 3, 'Monitor'),
(10, 'phoneqeweeew', 'this is a phone. lorem ipsum lorem ipsumlorem ipsum. this is a phone. lorem ipsum lorem ipsumlorem ipsum', 999, 3, 'Phone'),
(15, 'LoremIpsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc sed id semper risus in hendrerit gravida. Pulvinar mattis nunc sed blandit libero volutpat sed cras. Amet mauris commodo quis imperdiet massa tincidunt nunc. Sagittis vitae et leo duis ut. Leo vel orci porta non pulvinar neque laoreet suspendisse interdum. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis. Accumsan tortor posuere ac ut consequat semper viverra nam. Leo in vitae turpis massa sed. Id diam vel quam elementum pulvinar etiam non quam lacus. Odio eu feugiat pretium nibh. Et netus et malesuada fames ac. Sodales ut etiam sit amet nisl. Odio ut enim blandit volutpat maecenas volutpat.', 236, 3, 'Monitor'),
(16, 'LoremIpsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc sed id semper risus in hendrerit gravida. Pulvinar mattis nunc sed blandit libero volutpat sed cras. Amet mauris commodo quis imperdiet massa tincidunt nunc. Sagittis vitae et leo duis ut. Leo vel orci porta non pulvinar neque laoreet suspendisse interdum. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis. Accumsan tortor posuere ac ut consequat semper viverra nam. Leo in vitae turpis massa sed. Id diam vel quam elementum pulvinar etiam non quam lacus. Odio eu feugiat pretium nibh. Et netus et malesuada fames ac. Sodales ut etiam sit amet nisl. Odio ut enim blandit volutpat maecenas volutpat.', 128, 4, 'Monitor'),
(17, 'LoremIpsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc sed id semper risus in hendrerit gravida. Pulvinar mattis nunc sed blandit libero volutpat sed cras. Amet mauris commodo quis imperdiet massa tincidunt nunc. Sagittis vitae et leo duis ut. Leo vel orci porta non pulvinar neque laoreet suspendisse interdum. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis. Accumsan tortor posuere ac ut consequat semper viverra nam. Leo in vitae turpis massa sed. Id diam vel quam elementum pulvinar etiam non quam lacus. Odio eu feugiat pretium nibh. Et netus et malesuada fames ac. Sodales ut etiam sit amet nisl. Odio ut enim blandit volutpat maecenas volutpat.', 116, 5, 'Monitor'),
(18, 'ksadbfkbaskfbkasf', 'Augue lacus viverra vitae congue eu consequat ac. Accumsan sit amet nulla facilisi morbi tempus iaculis urna. Sapien eget mi proin sed. Mattis enim ut tellus elementum sagittis vitae et leo. Hac habitasse platea dictumst vestibulum. Nibh tellus molestie nunc non blandit massa enim nec. Pulvinar sapien et ligula ullamcorper malesuada. Commodo odio aenean sed adipiscing diam donec adipiscing. Mi proin sed libero enim sed. Laoreet non curabitur gravida arcu ac tortor dignissim convallis. At in tellus integer feugiat scelerisque varius morbi enim. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Habitasse platea dictumst quisque sagittis purus sit.', 222, 2, 'Monitor'),
(19, 'sAFsetrwETwetE', 'Augue lacus viverra vitae congue eu consequat ac. Accumsan sit amet nulla facilisi morbi tempus iaculis urna. Sapien eget mi proin sed. Mattis enim ut tellus elementum sagittis vitae et leo. Hac habitasse platea dictumst vestibulum. Nibh tellus molestie nunc non blandit massa enim nec. Pulvinar sapien et ligula ullamcorper malesuada. Commodo odio aenean sed adipiscing diam donec adipiscing. Mi proin sed libero enim sed. Laoreet non curabitur gravida arcu ac tortor dignissim convallis. At in tellus integer feugiat scelerisque varius morbi enim. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Habitasse platea dictumst quisque sagittis purus sit.', 111, 1, 'Monitor');

-- --------------------------------------------------------

--
-- Table structure for table `productreview`
--

CREATE TABLE `productreview` (
  `rating` int(11) NOT NULL,
  `comment` varchar(400) NOT NULL,
  `date` date NOT NULL,
  `productID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `productTypeID` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`productTypeID`, `description`) VALUES
('Headphones', 'Used to listen to audio.'),
('Keyboard', 'Used to enter things into compuer'),
('Monitor', 'Used to see thngs on computers.'),
('Phone', 'Used for a varity of things, mainly communication.'),
('Speakers', 'Listen to audio.');

-- --------------------------------------------------------

--
-- Table structure for table `timesheet`
--

CREATE TABLE `timesheet` (
  `timesheetID` int(11) NOT NULL,
  `empID` int(11) NOT NULL,
  `jobSheet` int(11) NOT NULL,
  `weekEnding` date NOT NULL,
  `monday` int(11) NOT NULL,
  `tuesday` int(11) NOT NULL,
  `wednesday` int(11) NOT NULL,
  `thursday` int(11) NOT NULL,
  `friday` int(11) NOT NULL,
  `saturday` int(11) NOT NULL,
  `sunday` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `userID` int(11) NOT NULL,
  `userPassword` varchar(50) NOT NULL,
  `userType` int(11) NOT NULL DEFAULT '0',
  `userAddress` varchar(100) DEFAULT NULL,
  `userName` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `profilePic` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`userID`, `userPassword`, `userType`, `userAddress`, `userName`, `email`, `profilePic`) VALUES
(1, 'qwe', 0, NULL, 'qwe', 'qwe@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `date` date NOT NULL,
  `productID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `joborder`
--
ALTER TABLE `joborder`
  ADD PRIMARY KEY (`jobOrderID`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`manufacturerID`);

--
-- Indexes for table `orderlineitems`
--
ALTER TABLE `orderlineitems`
  ADD KEY `productID` (`productID`),
  ADD KEY `orderID` (`orderID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `manufacturerID` (`manufacturerID`),
  ADD KEY `productTypeID` (`productTypeID`);

--
-- Indexes for table `productreview`
--
ALTER TABLE `productreview`
  ADD KEY `productID` (`productID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`productTypeID`);

--
-- Indexes for table `timesheet`
--
ALTER TABLE `timesheet`
  ADD PRIMARY KEY (`timesheetID`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD KEY `productID` (`productID`),
  ADD KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `joborder`
--
ALTER TABLE `joborder`
  MODIFY `jobOrderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `manufacturerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderlineitems`
--
ALTER TABLE `orderlineitems`
  ADD CONSTRAINT `orderlineitems_ibfk_3` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderlineitems_ibfk_4` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `useraccount` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`manufacturerID`) REFERENCES `manufacturer` (`manufacturerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_4` FOREIGN KEY (`productTypeID`) REFERENCES `producttype` (`productTypeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `productreview`
--
ALTER TABLE `productreview`
  ADD CONSTRAINT `productreview_ibfk_3` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productreview_ibfk_4` FOREIGN KEY (`userID`) REFERENCES `useraccount` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_3` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlist_ibfk_4` FOREIGN KEY (`userID`) REFERENCES `useraccount` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
