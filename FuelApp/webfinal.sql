-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 07:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(10) NOT NULL,
  `RegistrationNo` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Town` varchar(255) NOT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `Mobile` int(11) DEFAULT NULL,
  `Petrol` varchar(20) DEFAULT NULL,
  `Diesel` varchar(20) DEFAULT NULL,
  `Lastupdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `RegistrationNo`, `Name`, `Town`, `Location`, `Mobile`, `Petrol`, `Diesel`, `Lastupdate`) VALUES
(14, 'RT234', 'H.R.C.D Herath', 'Veyangoda', 'Near Flyover', 721131313, 'YES', 'NO', '2022-09-09 04:28:36'),
(15, 'RT1345', 'P.M.S Perera', 'Veyangoda', 'Near Railway Station', 121232221, 'NO', 'YES', '2022-09-09 05:41:31'),
(16, 'RT4623', 'M.T Perera', 'Gampaha', 'Near Foodcity', 133312231, 'YES', 'NO', '2022-09-09 04:46:29'),
(17, 'RT213', 'S.M Silva', 'Gampaha', 'Near Police Station', 331213222, 'YES', 'YES', '2022-09-09 04:47:56'),
(18, 'RT221', 'S.M.S Fernando', 'Gampaha', 'Near Hospital', 333173837, 'YES', 'NO', '2022-09-09 04:49:41'),
(19, 'RT3421', 'N.W Darmapala', 'Nittambuwa', 'Near Foodcity', 335668953, 'NO', 'NO', '2022-09-09 04:51:08'),
(20, 'RT4212', 'A.T.M Mudalige', 'Nittambuwa', 'Near HNB Bank', 333889779, 'NO', 'YES', '2022-09-09 04:52:51'),
(21, 'RT11234', 'P.L Somapala', 'Badulla', 'Near Hospital', 575456565, 'YES', 'NO', '2022-09-09 05:10:46'),
(22, 'RT575', 'M.A Perera', 'Badulla', 'Near Hospital', 574659133, 'YES', 'YES', '2022-09-09 05:35:47'),
(23, 'RT2224', 'H.M Samarakoon', 'Colombo', 'Near Dematagoda Railway Station', 112255555, 'YES', 'NO', '2022-09-09 05:51:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
