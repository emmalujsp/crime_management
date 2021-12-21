-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 11:47 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `cmpid` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `details` varchar(150) NOT NULL,
  `address` varchar(40) NOT NULL,
  `doi` date NOT NULL,
  `gender` text NOT NULL,
  `criminal` varchar(100) NOT NULL,
  `identification` varchar(50) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `fsize` varchar(20) NOT NULL,
  `police` varchar(40) NOT NULL,
  `cmptime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fir` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`cmpid`, `username`, `name`, `details`, `address`, `doi`, `gender`, `criminal`, `identification`, `fname`, `fsize`, `police`, `cmptime`, `fir`) VALUES
(1000, 'emmalujsp', 'Emmalu', 'Domestic violence', 'kottayam kerala', '2021-04-04', 'Male', '', 'black tall', 'passportsize.jpg', '147302', 'Bengaluru East', '2021-05-09 13:50:40', 1),
(1001, 'emmalujsp', 'Shawn', 'rash driving', 'bangalore karnataka', '2021-04-06', 'Male', '', 'with spects', 'Screenshot (26).png', '132686', 'Bengaluru East', '2021-05-09 13:50:40', 1),
(1002, 'emmalujsp', 'Anwesha', 'pickpocketing', 'Hydrabad', '2021-04-07', 'Female', '', 'tall ', 'Screenshot (9).png', '577219', 'Bengaluru East', '2021-05-09 13:50:40', 1),
(1003, 'emmalujsp', 'Neethu', 'Cheating case', 'Sg palya', '2021-04-07', 'Male', '', 'beard ', 'Screenshot (17).png', '122522', 'Bengaluru East', '2021-05-09 13:50:40', 1),
(1004, 'emmalujsp', 'jacob', 'rash driving', 'Sg palya', '2021-04-05', 'Male', '', 'with spects', '12.png', '471948', 'Bengaluru East', '2021-05-09 13:50:40', 1),
(1005, 'emmalujsp', 'justin', 'rash driving', 'kottayam kerala', '2021-04-07', 'Male', '', 'black tall', '28.png', '580968', 'Bengaluru East', '2021-05-09 19:40:19', 1),
(1006, 'emmalujsp', 'Nora', 'pick pocketing', 'kottayam kerala', '2021-04-22', 'Female', '', 'Thin male', 'Screenshot (33).png', '770123', 'Bengaluru East', '2021-05-10 14:46:00', 1),
(1007, 'emmalujsp', 'George', 'Murder', 'Thrissur Kerala', '2021-05-09', 'Male', 'jacob is the criminal', 'Fare and tall', 'ip.gif', '19769', 'Bengaluru West', '2021-05-08 22:24:18', 0),
(1008, 'shawn12', 'Jithin', 'rash driving', 'Kannur Kerala', '2021-05-09', 'Male', 'Amaml is the criminal', 'Thin male', 'vpa.png', '25471', 'Bengaluru West', '2021-05-09 00:46:07', 0),
(1009, 'emmalujsp', 'Abin', 'Domestic violence', 'bangalore karnataka', '2021-05-10', 'Male', 'jacob is the criminal', 'Thin male', '1.png', '661821', 'Bengaluru East', '2021-05-10 20:06:23', 1),
(1010, 'shawn12', 'Thara', 'Cheating case', 'Alappuzha Kerala', '2021-05-10', 'Female', 'jacob chacko thomas  is the criminal', 'Fare and tall', 'prgrm1.JPG', '0', 'Bengaluru East', '2021-05-11 09:34:13', 1),
(1011, 'an12', 'Geo', 'pickpocketing', 'kottayam kerala', '2021-05-11', 'Male', 'Jose is the cirminal', 'Fare and tall', 'passportsize.jpg', '147302', 'Bengaluru West', '2021-05-11 04:39:25', 0),
(1012, 'emmalujsp', 'anwesha', 'rash driving', 'kottayam kerala', '2021-05-11', 'Female', 'Shawn ', 'tall ', 'passport.pdf', '718162', 'Bengaluru East', '2021-05-11 06:01:13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `criminal`
--

CREATE TABLE `criminal` (
  `crid` int(11) NOT NULL,
  `name` text NOT NULL,
  `details` varchar(150) NOT NULL,
  `address` varchar(50) NOT NULL,
  `firid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `fsize` varchar(10) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criminal`
--

INSERT INTO `criminal` (`crid`, `name`, `details`, `address`, `firid`, `fname`, `fsize`, `type`) VALUES
(1100, 'Amal', 'Amal james pg student studying in bangalore', 'kannur kerala', 2006, 'passportsize.jpg', '147302', ''),
(1101, 'Jose', 'vdisyvb uvswbhu9 ewvhava0 0idhnwq', 'kannur kerala', 2007, '6.png', '736909', ''),
(1102, 'Joji', 'abad criminal ', 'kannur kerala', 2008, 'pci.jpg', '15244', 'Wanted'),
(1103, 'Chacko', 'Criminal Details', 'kannur kerala', 2009, 'passportsize_cropped', '129143', 'Wanted');

-- --------------------------------------------------------

--
-- Table structure for table `fir`
--

CREATE TABLE `fir` (
  `FIRid` int(5) NOT NULL,
  `cmpid` int(5) NOT NULL,
  `fir` longtext NOT NULL,
  `address` varchar(40) NOT NULL,
  `police` varchar(20) NOT NULL,
  `casetype` varchar(15) NOT NULL,
  `section` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` text NOT NULL DEFAULT 'initial'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fir`
--

INSERT INTO `fir` (`FIRid`, `cmpid`, `fir`, `address`, `police`, `casetype`, `section`, `date`, `time`, `status`) VALUES
(2000, 1000, 'case code 145', '', '', '', '', '0000-00-00', '00:00:00', 'initial'),
(2001, 1001, 'case section 144', 'kottayam kerala', 'Bengaluru East', ' ARB-DC', 'section156 145 145', '2021-04-06', '00:40:00', 'initial'),
(2002, 1002, 'Section156  section 180 the pick pocketing case', 'bangalore karnataka', 'Bengaluru East', '  ARB-DC', 'section156 177 154', '2021-04-08', '16:57:00', 'ongoing(level 1)'),
(2003, 1003, 'rash driving', 'kottayam kerala', 'Bengaluru East', ' ARB-DC', 'section 526', '2021-04-05', '05:04:00', 'initial'),
(2004, 1004, 'The case details is given below this a new case very good case', 'kottayam kerala', 'Bengaluru East', ' ARB', 'section 144', '2021-04-07', '21:03:00', 'initial'),
(2005, 0, 'rash driving', 'kottayam kerala', 'Bengaluru East', 'ARB', 'section156 177 188', '2021-04-05', '05:04:00', 'initial'),
(2006, 1005, 'Rash driving through the road high speed driving 120 kmph by motorbike', 'bangalore karnataka', 'Bengaluru East', 'CCEC', 'section156 177 ', '2021-04-30', '16:12:00', 'ongoing(level 1)'),
(2007, 1006, 'biefvu uhfsiuv eihfiu hhw9 0wu98 f98fh', 'kottayam kerala', 'Bengaluru East', ' CS-OS', 'section156 177 ', '2021-05-01', '10:17:00', 'ongoing(level 1)'),
(2008, 1009, 'domestic vinwivon aosdijviowej wefjiof wsvjsew0 jwvejjev in iowrienv niwaievjn wifi0j', 'Sg palya', 'Bengaluru East', 'ARB-ICA', 'section156 145 145', '2021-05-03', '15:37:00', 'initial'),
(2009, 1010, 'Fir details', 'kottayam kerala', 'Bengaluru East', 'ARB-DC', 'section156 145 145', '2021-05-01', '04:04:00', 'initial');

-- --------------------------------------------------------

--
-- Table structure for table `missing`
--

CREATE TABLE `missing` (
  `id` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `identification` varchar(100) NOT NULL,
  `lastseen` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `fname` varchar(20) NOT NULL,
  `fsize` varchar(20) NOT NULL,
  `approved` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `missing`
--

INSERT INTO `missing` (`id`, `username`, `name`, `identification`, `lastseen`, `phone`, `date`, `time`, `fname`, `fsize`, `approved`) VALUES
(1200, 'emmalujsp', 'Milin', 'small girl', 'After school', 985698568, '2021-05-10', '00:00:00', 'passportsize_cropped', '129143', 1),
(1201, 'emmalujsp', 'chacko', 'small boy', 'After school', 25632563, '2021-05-10', '00:00:00', 'passportsize.jpg', '147302', 1),
(1202, 'emmalujsp', 'Jiji', 'Fat and small', 'from bus stand', 52325522, '2021-05-09', '16:18:00', 'compinent design.png', '28836', 1),
(1203, 'emmalujsp', 'Shawn', 'with spects', 'After school', 985698568, '2021-05-08', '05:04:00', 'passportsize.jpg', '147302', 1);

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `place` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `higherofficial` text NOT NULL,
  `phone` bigint(10) NOT NULL,
  `nop` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`username`, `password`, `place`, `address`, `higherofficial`, `phone`, `nop`) VALUES
('blreast', 'blreast12', 'Bengaluru East', '', '', 0, 0),
('blrwest', 'blrwest12', 'Bengaluru West', '', '', 0, 0),
('blrsouth', 'blrsouth12', 'Bengaluru south', '', '', 0, 0),
('mysore12', 'mysore12', 'Mysore road city', '', 'K v subramanyam', 9874563214, 15);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_name` text NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `ID_proof` varchar(30) NOT NULL,
  `u_add` varchar(50) NOT NULL,
  `u_phn` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_name`, `username`, `password`, `u_email`, `ID_proof`, `u_add`, `u_phn`) VALUES
('anwesha', 'an12', '123456', 'anwesha@gmail.com', '123458585', 'bangalore karnataka', 9544042676),
('Emmalu', 'emmalujsp', '123', 'emmalujsp@gmail.com', '124512', 'Pralady House eravimangalam', 2147483647),
('joseph', 'joseph12', '123456789', 'joseph@gmail.com', '12345', 'bangalore karnataka', 9495642651),
('Shawn', 'shawn12', 'shawn12', 'emmajsp@gmail.com', '12345', 'kottayam kerala', 9544042676);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`cmpid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
