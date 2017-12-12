-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2017 at 07:02 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code_pencildb`
-- localhost/phpmyadmin
--

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `CodeID` varchar(50) NOT NULL,
  `AliesName` varchar(50) NOT NULL,
  `UserID` varchar(50) NOT NULL,
  `Description` varchar(400) NOT NULL,
  `CreatedDate` varchar(50) NOT NULL,
  `CreatedTime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`CodeID`, `AliesName`, `UserID`, `Description`, `CreatedDate`, `CreatedTime`) VALUES
('15152DD3', '', 'E0E064A5uu', '', '', ''),
('FDFD2D02', '', '', '', '', ''),
('90901BAB', '', 'guest', '', '', ''),
('B2B26CBC', '', 'guest', '', '', ''),
('9B9BE9DA', '', 'FFFF061Earnob', '', '', ''),
('22225439', '', 'FFFF061Earnob', '', '', ''),
('9090A6D0', '', 'guest', '', '', ''),
('9A9A29D4', '', 'guest', '', '', ''),
('C0C01333', '', 'guest', '', '', ''),
('414110C2', '', 'guest', '', '', ''),
('4444582A', '', 'guest', '', '', ''),
('E9E9F220', '', 'guest', '', '', ''),
('1B1B18E9', '', 'guest', '', '', ''),
('6161AF77', '', 'guest', '', '', ''),
('8A8ABC69', '', 'guest', '', '', ''),
('F8F82F5A', '', 'guest', '', '', ''),
('828285A1', '', 'guest', '', '', ''),
('6767008F', '', 'guest', '', '', ''),
('B5B53933', '', 'guest', '', '', ''),
('E1E17A9C', '', 'guest', '', '', ''),
('F0F06BBD', '', 'guest', '', '', ''),
('CECE0AD0', '', 'guest', '', '', ''),
('0707FA16', '', 'FFFF061Earnob', '', '', ''),
('A4A40498', '', 'FFFF061Earnob', '', '', ''),
('4848C8CD', '', 'FFFF061Earnob', '', '', ''),
('767654EB', '', 'FFFF061Earnob', '', '', ''),
('9696BD8A', '', 'guest', '', '', ''),
('FAFAA553', '', 'guest', '', '', ''),
('6D6D8A1F', '', 'guest', '', '', ''),
('60601529', '', 'guest', '', '', ''),
('9393BA76', '', 'guest', '', '', ''),
('171706E4', '', 'guest', '', '', ''),
('B1B1DA53', '', 'guest', '', '', ''),
('5454015A', '', 'guest', '', '', ''),
('BEBEE492', '', 'guest', '', '', ''),
('B3B3C165', '', 'guest', '', '', ''),
('6565ED2B', '', 'F2F25386arnob', '', '', ''),
('D2D2807F', '', 'F2F25386arnob', '', '', ''),
('2020AD45', '', '3939E699ad', '', '', ''),
('7373D8B5', '', '3939E699ad', '', '', ''),
('818187CD', '', '3939E699ad', '', '', ''),
('3B3BE61C', '', 'guest', '', '', ''),
('3D3D9AE9', '', 'F2F25386arnob', '', '', ''),
('0E0E60BB', '', 'guest', '', '', ''),
('8686BA76', '', 'guest', '', '', ''),
('5D5D5A5A', '', 'guest', '', '', ''),
('C4C4CFE1', '', 'guest', '', '', ''),
('1010DE55', '', 'guest', '', '', ''),
('2828FD53', '', '3939E699ad', '', '', ''),
('4E4EAE1D', '', 'guest', '', '', ''),
('AEAE5787', '', 'CACA5DFDarnobalmazee', '', '', ''),
('89893B5C', '', 'CACA5DFDarnobalmazee', '', '', ''),
('8C8CB5FD', '', 'CACA5DFDarnobalmazee', '', '', ''),
('4B4BA2CC', '', 'DBDB5968shuvo', '', '', ''),
('2525847A', '', 'DBDB5968shuvo', '', '', ''),
('3E3E181F', '', 'DBDB5968shuvo', '', '', ''),
('A5A57AC5', '', 'DBDB5968shuvo', '', '', ''),
('ECECEFFF', '', 'guest', '', '', ''),
('CCCCE6EF', '', 'guest', '', '', ''),
('A9A96FD4', '', 'guest', '', '', ''),
('AEAE86E5', '', 'guest', '', '', ''),
('D9D98326', '', 'guest', '', '', ''),
('D9D9F3EF', '', 'guest', '', '', ''),
('6D6D48D9', '', 'guest', '', '', ''),
('E2E208F9', '', 'guest', '', '', ''),
('E9E930DA', '', 'guest', '', '', ''),
('87870450', '', 'CACA5DFDarnobalmazee', '', '', ''),
('8888F909', '', 'CACA5DFDarnobalmazee', '', '', ''),
('F5F57247', '', 'DBDB5968shuvo', '', '21.11.17', '22:45:50'),
('A5A5A112', '', 'DBDB5968shuvo', '', '21.11.17', '22:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `codefile`
--

CREATE TABLE `codefile` (
  `CodeFileID` bigint(20) NOT NULL,
  `CodeID` varchar(50) NOT NULL,
  `CodeFileName` varchar(100) NOT NULL,
  `HTMLCode` text NOT NULL,
  `CSSCode` text NOT NULL,
  `JavascriptCode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codefile`
--

INSERT INTO `codefile` (`CodeFileID`, `CodeID`, `CodeFileName`, `HTMLCode`, `CSSCode`, `JavascriptCode`) VALUES
(0, '1C517A641C517A64B841', '', '', '', ''),
(0, '10BD425810BD42587502', '', '', '', ''),
(0, '75BE1B6175BE1B615DBB', 'asd', '&lt;p&gt;asdasd&lt;/p&gt;', '', ''),
(0, '12B88B6312B88B635178', 'asd', '&lt;p&gt;Arnob&lt;/p&gt;\n\n\n\n&lt;h2&gt;asdasd&lt;/h2\n\n&lt;lo&gt;\n\n	&lt;h2&gt; Hello &lt;/h2&gt;\n    &lt;p&gt; Is it good&lt;/p&gt;\n    \n&lt;/div&gt;    ', 'h2 {\n    background-color: lightblue;\n}\n', ''),
(0, 'D7062D02D7062D02B5C5', 'New one', '&lt;p&gt;Arnob&lt;/p&gt;\n\n\n\n&lt;h2&gt;asdasd&lt;/h2&gt;\n\n\n	&lt;h2&gt; Hello &lt;/h2&gt;\n&lt;p&gt; Is it good&lt;/p&gt;\n    &lt;button onclick=&quot;myFunction()&quot;&gt;Try it&lt;/button&gt;\n&lt;div id=&quot;demo&quot;&gt;\n\n	\n&lt;/div&gt;', 'h2{\n	 background-color: lightblue;\n}\n\np{\n	color : red;\n}\n\n', 'function myFunction() {\n    document.getElementById(&quot;demo&quot;).innerHTML = Boolean(10 &gt; 9);\n}'),
(0, '0FDA9CB40FDA9CB474B6', '', '&lt;p&gt;sArnob&lt;/p&gt;\n\n\n\n&lt;h2&gt;asdasd&lt;/h2&gt;\n\n\n	&lt;h2&gt; Hello &lt;/h2&gt;\n&lt;p&gt; Is it good&lt;/p&gt;\n    &lt;button onclick=&quot;myFunction()&quot;&gt;Try it&lt;/button&gt;\n&lt;div id=&quot;demo&quot;&gt;\n\n\n	\n    \n&lt;/div&gt;', 'h2{\n	 background-color: lightblue;\n}\n\np{\n	color : red;\n}\n\n', 'function myFunction() {\n    document.getElementById(&quot;demo&quot;).innerHTML = Boolean(10 &gt; 9);\n}'),
(0, '96D81EC096D81EC0FACF', '', '&lt;p&gt;Arnob&lt;/p&gt;\n\n\n\n&lt;h2&gt;asdasd&lt;/h2&gt;\n\n\n	&lt;h2&gt; Hello &lt;/h2&gt;\n&lt;p&gt; Is it good&lt;/p&gt;\n    &lt;button onclick=&quot;myFunction()&quot;&gt;Try it&lt;/button&gt;\n&lt;div id=&quot;demo&quot;&gt;\n\n\n	\n&lt;/div&gt;', 'h2{\n	 background-color: lightblue;\n}\n\np{\n	color : red;\n}\n\n', 'function myFunction() {\n    document.getElementById(&quot;demo&quot;).innerHTML = Boolean(10 &gt; 9);\n}'),
(0, 'D61EB97FD61EB97F1C4F', '', '&lt;p&gt;', '', ''),
(0, '8292CB118292CB117E0C', '', '', '', ''),
(0, 'E7219E6BE7219E6B7B94', '', '&lt;p&gt;asdasd&lt;/p&gt;\n', '', ''),
(0, '50E0D5C750E0D5C7D2AD', '', '&lt;p&gt;asd&lt;/p&gt;', '', ''),
(0, '0CDC2FF20CDC2FF2C677', '', '', '', ''),
(0, 'CFDF83DECFDF83DE838E', '', '', '', ''),
(0, '32991B0232991B02C7A3', '', '', '', ''),
(0, '9FE549AD9FE549AD551F', '', '        &lt;p&gt;asdasd&lt;/p&gt;    ', 'p{\n	color : red;\n}', ''),
(0, 'A9FA6718A9FA67189053', '', '', '', ''),
(0, '09A900DC09A900DC29CA', '', '', '', ''),
(0, '62C6A7AB62C6A7AB1EE1', '', '', '', ''),
(0, 'DAF3A838DAF3A838D3AC', '', '', '', ''),
(0, '80EC62CC80EC62CCBA12', '', '', '', ''),
(0, '1ADA937C1ADA937C4168', '', '', '', ''),
(0, '86C533FC86C533FC8E8D', '', '', '', ''),
(0, 'A003E14DA003E14DB3FA', '', '', '', ''),
(0, '03A84A3003A84A3098AC', '', '', '', ''),
(0, 'B820E0E5B820E0E5C773', '', '', '', ''),
(0, 'F26C02B4F26C02B444F7', '', '', '', ''),
(0, '3CA728633CA728632BF8', '', '', '', ''),
(0, 'A01A0D2AA01A0D2A7CCE', '', '', '', ''),
(0, '01E5335601E53356A8F2', '', '', '', ''),
(0, '1D3D94621D3D9462966C', '', 'asdasdasdsd', '', ''),
(0, 'E3C74D3CE3C74D3C0772', '', '            jgfyjhgjh', '        &lt;br /&gt;\n&lt;b&gt;Notice&lt;/b&gt;:  Undefined variable: viewCSS in &lt;b&gt;C:xampphtdocsworkingCode-pencilview\navGeteditorForEditor.php&lt;/b&gt; on line &lt;b&gt;17&lt;/b&gt;&lt;br /&gt;\n    ', '        &lt;br /&gt;\n&lt;b&gt;Notice&lt;/b&gt;:  Undefined variable: viewJS in &lt;b&gt;C:xampphtdocsworkingCode-pencilview\navGeteditorForEditor.php&lt;/b&gt; on line &lt;b&gt;21&lt;/b&gt;&lt;br /&gt;\n    '),
(0, '669BDAAD669BDAAD18FD', '', '            dhdfhggfnb', '            adaadasd', '          asdasasdasd  '),
(0, '0365F7280365F728B259', '', 'asdasdasdasd', 'adasdasd                                       ', '                                                            '),
(0, 'B618C07FB618C07F8B76', '', '        asdasdasdasd    as', '        adasdasd                                           ', '                                                                        '),
(0, '7FD594F97FD594F9B9C0', '', '                    asd  &lt;asd  ', '                        ', '                        '),
(0, 'DCAF44A0DCAF44A0775B', '', '            a', '            ', '            '),
(0, '737341C7', '', '                            asd  &lt;asd      ', 'asdasdasd', '                                    '),
(0, '54540375', '', '', '            asdasdasdasdsad             ', '                        '),
(0, 'EBEBBD6B', 'adasd', '                                adasasasd\n&lt;h1&gt;asdasd&lt;/h1&gt;        \n', '                                color {\n                      \n                      ]        ', '                 var heloo\n             '),
(0, 'C5C52811', '', '', '', ''),
(0, 'F0F0926B', '', '                                            adasasasd\n&lt;h1&gt;asdasd&lt;/h1&gt;        \n        \n', '                                            color {\n                      \n                      ]                ', '                             var heloo\n                     '),
(0, '0303EC27', '', '', '                    ', '                    '),
(0, '0C0C0AF2', '', '', '', ''),
(0, '7474A648', '', '&lt;p&gt;', '                    ', '                    '),
(0, '60605AAC', '', '', '', ''),
(0, '8E8E1F5F', '', '', '                                       ', '       '),
(0, '07070769', '', '&lt;p&gt;ads&lt;/p&gt;&lt;a', '                                       ', '       '),
(0, '18185DE5', '', '', '', ''),
(0, '7C7C503E', '', '                    drgh', '                    ', '                    '),
(0, 'D7D77426', '', '                    cvb cvbcvb', '                    ', '                    '),
(0, 'AAAA5300', '', '', '', ''),
(0, '92922538', '', '', '', ''),
(0, '4D4D5AA6', '', '', '', ''),
(0, 'FEFEA22C', '', 'ygyujh', '', ''),
(0, 'C6C6B5AB', '', '', '', ''),
(0, '6A6A2FA5', '', '', '', ''),
(0, 'E7E741A4', '', '', '', ''),
(0, '3232C9FC', '', '', '', ''),
(0, 'FEFE9EF6', '', '', '', ''),
(0, '41412B72', '', '', '', ''),
(0, '6C6CC784', '', '', '', ''),
(0, '6666F27D', '', '', '', ''),
(0, 'CDCDE067', '', 'asdasdas', '', ''),
(0, '9898F21E', '', '', '', ''),
(0, '9A9AC2AA', '', 'adasdasdsdasd', '', ''),
(0, '3D3D1600', '', 'adasdasdsdasd', '', ''),
(0, '9B9B752A', '', '', '', ''),
(0, '45450218', '', '', '', ''),
(0, '767645BC', '', '', '', ''),
(0, '080807F0', '', '', '', ''),
(0, 'CCCCB83A', '', '', '', ''),
(0, '71719A32', '', '', '', ''),
(0, '4747542A', '', '', '', ''),
(0, '39392C9F', '', '', '', ''),
(0, '8D8DEABB', '', '', '', ''),
(0, '6666A7C4', '', '', '', ''),
(0, '76767E2E', '', '', '', ''),
(0, '8282A8D3', '', '', '', ''),
(0, '15152DD3', '', '', '', ''),
(0, 'FDFD2D02', '', '', '', ''),
(0, '90901BAB', '', '', '', ''),
(0, 'B2B26CBC', '', '', '', ''),
(0, '9090A6D0', '', '', '', ''),
(0, '9A9A29D4', '', '', '', ''),
(0, 'C0C01333', '', '', '', ''),
(0, '414110C2', '', '', '', ''),
(0, '4444582A', '', '', '', ''),
(0, 'E9E9F220', '', '', '', ''),
(0, '1B1B18E9', '', '', '', ''),
(0, '6161AF77', '', '', '', ''),
(0, '8A8ABC69', '', '', '', ''),
(0, 'F8F82F5A', '', '', '', ''),
(0, '828285A1', '', '', '', ''),
(0, '6767008F', '', '', '', ''),
(0, 'B5B53933', '', '', '', ''),
(0, 'E1E17A9C', '', '', '', ''),
(0, 'F0F06BBD', '', '', '', ''),
(0, 'CECE0AD0', '', 'drhdthdfjdftdj', '', ''),
(0, '0707FA16', '', 'dxffcbcgngvmgvmgvm', '', ''),
(0, 'A4A40498', '', '', '', ''),
(0, '4848C8CD', '', '', '', ''),
(0, '767654EB', '', 'fdhftgh', '', ''),
(0, '9696BD8A', '', '', '', ''),
(0, 'FAFAA553', '', 'cvcbcgncggncgn', '', ''),
(0, '6D6D8A1F', '', 'xcvxcvxcvxvxxcv', 'xcv', ''),
(0, '60601529', '', 'cvbcvnvgnvn', '', ''),
(0, '9393BA76', '', '', '', ''),
(0, '171706E4', '', '', '', ''),
(0, 'B1B1DA53', '', '', '', ''),
(0, '5454015A', '', '', '', ''),
(0, 'BEBEE492', '', '', '', ''),
(0, 'B3B3C165', '', 'fvvdsv', '', ''),
(0, '6565ED2B', '', '', '', ''),
(0, 'D2D2807F', '', 'fsdsvdvsdsv', '', ''),
(0, '2020AD45', '', 'drffdbfbfbfbfbffgngfngn', '', ''),
(0, '7373D8B5', '', 'dgdgdfhfhfh', '', ''),
(0, '818187CD', '', '', '', ''),
(0, '3B3BE61C', '', '', '', ''),
(0, '3D3D9AE9', '', '', '', ''),
(0, '0E0E60BB', '', '', '', ''),
(0, '8686BA76', '', '                    ', '                    ', '                    '),
(0, '5D5D5A5A', '', '                    ', '                    ', '                    '),
(0, 'C4C4CFE1', '', '                    ', '                    ', '                    '),
(0, '1010DE55', '', '                    ', '                    ', '                    '),
(0, '2828FD53', '', 'drffdbfbfbfbfbffgngfngn', '', ''),
(0, '4E4EAE1D', '', '&lt;h1&gt;Arnob&lt;/h1&gt;\n&lt;div id=&quot;ar&quot;&gt;&lt;/div&gt; ', '\nh1{\n	color : red;\n}', 'var x = 5;\nvar y = 6;\nvar z = x + y;\ndocument.getElementById(&quot;ar&quot;).innerHTML =\n&quot;The value of z is: &quot; + z;'),
(0, 'AEAE5787', '', '&lt;h2&gt;JavaScript Variables&lt;/h2&gt;\n\n&lt;p&gt;In this example, x, y, and z are variables.&lt;/p&gt;\n\n&lt;p id=&quot;demo&quot;&gt;&lt;/p&gt;\n&lt;p&gt;adjkasn&lt;/p&gt;\n', 'h2{\n color : red \n}', 'var x = 5;\nvar y = 6;\nvar z = x + y;\ndocument.getElementById(&quot;demo&quot;).innerHTML =\n&quot;The value of z is: &quot; + z;'),
(0, '89893B5C', '', '', '', ''),
(0, '8C8CB5FD', '', '&lt;h2&gt;JavaScript Variables&lt;/h2&gt;\n\n&lt;p&gt;In this example, x, y, and z are variables.&lt;/p&gt;\n\n&lt;p id=&quot;demo&quot;&gt;&lt;/p&gt;\n', 'h2{\n color : red \n}', 'var x = 5;\nvar y = 6;\nvar z = x + y;\ndocument.getElementById(&quot;demo&quot;).innerHTML =\n&quot;The value of z is: &quot; + z;'),
(0, '4B4BA2CC', 'ugyhjvhj', 'drffdbfbfbfbfbffgngfngn\n', '', ''),
(0, '2525847A', 'jgvjhn', '\n', '', ''),
(0, '3E3E181F', 'awfdasfsd', 'drffdbfbfbfbfbffgngfngnsdf\n\n\n', '', ''),
(0, 'A5A57AC5', '', '', '', ''),
(0, 'ECECEFFF', '', '', '', ''),
(0, 'CCCCE6EF', '', '', '', ''),
(0, 'A9A96FD4', '', '', '', ''),
(0, 'AEAE86E5', '', '', '', ''),
(0, 'D9D98326', '', '', '', ''),
(0, 'D9D9F3EF', '', '', '', ''),
(0, '6D6D48D9', '', '', '', ''),
(0, 'E2E208F9', '', '', '', ''),
(0, 'E9E930DA', '', '&lt;h2&gt;JavaScript Variables&lt;/h2&gt;\n\n&lt;p&gt;In this example, x, y, and z are variables.&lt;/p&gt;\n\n&lt;p id=&quot;demo&quot;&gt;&lt;/p&gt;\n', 'h2{\n color : red \n}', 'var x = 5;\nvar y = 6;\nvar z = x + y;\ndocument.getElementById(&quot;demo&quot;).innerHTML =\n&quot;The value of z is: &quot; + z;'),
(0, '87870450', '', '', '', ''),
(0, '8888F909', '', '', '', ''),
(0, 'F5F57247', 'sdfsdf', 'drffdbfbfbfbfbffgngfngnsdf\n', '', ''),
(0, 'A5A5A112', 'thfhfgh', 'drffdbfbfbfbfbffgngfngnsdf\n', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `RoleID` smallint(6) NOT NULL,
  `RoleName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roleanduserrelationship`
--

CREATE TABLE `roleanduserrelationship` (
  `RoleAndUserRelationship` bigint(20) NOT NULL,
  `RoleID` smallint(6) NOT NULL,
  `UserID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `ThemeID` tinyint(4) NOT NULL,
  `ThemeName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ThemeID` tinyint(4) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `email`, `ThemeID`, `UserName`, `Password`) VALUES
('0', '', 0, 'aa', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37'),
('15', '', 0, 'asd', 'f10e2821bbbea527ea02200352313bc059445190'),
('84', '', 0, 'dd', '388ad1c312a488ee9e12998fe097f2258fa8d5ee'),
('0', '', 0, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
('0', '', 0, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
('3333', '', 0, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
('0', '', 0, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
('9292212', '', 0, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
('0', '', 0, 'll', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
('0', '', 0, 'tt', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
('E0E064A5uu', '', 0, 'uu', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
('FFFF061Earnob', '', 0, 'arnob', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441'),
('37378A52yy', '', 0, 'yy', '7c222fb2927d828af22f592134e8932480637c0d'),
('BDBD737Bar', '', 0, 'ar', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
('A4A4CC9Farnob', '', 0, 'arnob', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
('1B1B1D14arnob', 'arnobxtreme@gmail.com', 0, 'arnob', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
('F6F6A39Farnob', 'arnob@gmail.com', 0, 'arnob', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
('8C8C6733arnob', 'a@a.com', 0, 'arnob', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
('C1C1C759arnob', 'a@gmail.com', 0, 'arnob', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
('8C8C7ECBa2', 'ss@ss.com', 0, 'a2', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
('9B9B2CECarnob', 'a@g.com', 0, 'arnob', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
('06069CC6a2', 'b@g.com', 0, 'a2', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
('F2F25386arnob', 'e@g.com', 0, 'arnob', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a'),
('3939E699ad', 'y@g.com', 0, 'ad', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a'),
('CACA5DFDarnobalmazee', 'arnobalmazee@gmail.com', 0, 'arnobalmazee', '5173f50466c8500e9fab5cb0c81a34b7e089d105'),
('DBDB5968shuvo', 'shuvo@gmail.com', 0, 'shuvo', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
