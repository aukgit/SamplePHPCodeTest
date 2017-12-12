-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 09:00 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `newsdata`
--

CREATE TABLE `newsdata` (
  `ID` int(11) NOT NULL,
  `headline` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsdata`
--

INSERT INTO `newsdata` (`ID`, `headline`, `body`, `priority`) VALUES
(1, 'Headline 1', 'Sample BODY', 1),
(2, 'Headline Breaking 2', 'Sample Breaking 2', 2),
(3, 'Sample Breaking 3', 'Sample breaking 3', 3),
(4, 'Sample General 1', 'Sample General 1', 5),
(5, 'Sample General 2', 'Sample General 2', 6),
(6, 'Sample General 4', 'Sample General 4', 10),
(7, 'Sample General News 10', 'Sample General News 10', 11),
(8, 'Headline from form1', 'Headline from form1', 6),
(9, 'Headline from form1', 'Headline from form1', 6),
(10, '', '', 0),
(11, '', '', 0),
(12, '', '', 0),
(13, '', '', 0),
(14, '', '', 0),
(15, 'New Headline from form1', 'New Headline from form1', 7),
(16, 'New Headline from form1', 'New Headline from form1', 7),
(17, 'New Headline from form1', 'New Headline from form1', 7),
(18, '', 'wwdwd', 0),
(19, '', 'dwwdwd', 0),
(20, '', 'dwwdwd', 0),
(21, '', 'effe', 0),
(22, '', 'effe', 0),
(23, '', 'effe', 0),
(24, '', 'effe', 0),
(25, '', 'effe', 0),
(26, '', 'effe', 0),
(27, '', 'dwwdwddwdwdwwddwdwdw wdwd  wd wd', 0),
(28, '', 'dwwdwddwdwdwwddwdwdw wdwd  wd wd', 0),
(29, 'fefe', 'wddwdwdwdw dw dw d ww d dwdw w wd dw d w dwdwdw', 0),
(30, 'dwqdwqdqwdqwdqw', 'dqdwqdwqdwqdwqqwd qwdq wd qwd qdw qdw qdw qdwqdw', 7),
(31, 'wfffwwf', 'Heepwkdlwd nwdkjdf feeww fwefwhkw dhwdkj ', 6),
(32, 'wfffwwf', 'Heepwkdlwd nwdkjdf feeww fwefwhkw dhwdkj ', 6);

-- --------------------------------------------------------

--
-- Table structure for table `reporter`
--

CREATE TABLE `reporter` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reporter`
--

INSERT INTO `reporter` (`ID`, `username`, `password`) VALUES
(1, 'alim1', 'alim1'),
(2, 'alim2', 'alim2'),
(5, 'reporter1', 'reporter1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newsdata`
--
ALTER TABLE `newsdata`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reporter`
--
ALTER TABLE `reporter`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newsdata`
--
ALTER TABLE `newsdata`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `reporter`
--
ALTER TABLE `reporter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
