-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 06:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointmenttable`
--

CREATE TABLE `appointmenttable` (
  `id` int(20) NOT NULL,
  `patient` text NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `doctor` varchar(50) NOT NULL,
  `fees` int(20) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(30) NOT NULL,
  `userstatus` int(10) NOT NULL,
  `docstatus` int(10) NOT NULL,
  `prescribestatus` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointmenttable`
--

INSERT INTO `appointmenttable` (`id`, `patient`, `gender`, `email`, `contact`, `doctor`, `fees`, `date`, `time`, `userstatus`, `docstatus`, `prescribestatus`) VALUES
(4, 'Syed Burhaan', 'Male', 'burhaan@gmail.com', 9858324456, 'Dr_Raza_yusuf', 2000, '2021-06-18', '10:00:00', 1, 0, 0),
(5, 'Aqib Fayaz', 'Male', 'fayaz@gmail.com', 7006897644, 'Dr_Raza_yusuf', 2000, '2021-06-17', '08:00:00', 1, 0, 0),
(6, 'Zarkah Bilal', 'Female', 'bilal@gmail.com', 9906789128, 'Dr_Raza_yusuf', 2000, '2021-06-19', '12:00:00', 1, 0, 0),
(7, 'Mohammad Saqib', 'Male', 'saqib@gmail.com', 193324632, 'Dr_Uzair_Reyaz', 3000, '2021-06-23', '08:00:00', 1, 0, 0),
(8, 'Mohammad Saqib', 'Male', 'saqib@gmail.com', 193324632, 'Dr_Numaan_Raina', 1000, '2021-06-18', '10:00:00', 1, 1, 1),
(9, 'Mohammad Saqib', 'Male', 'saqib@gmail.com', 193324632, 'Dr_Tafazul_Majeed', 2500, '2021-06-19', '12:00:00', 0, 1, 0),
(10, 'Mohammad Saqib', 'Male', 'saqib@gmail.com', 193324632, 'Dr_Tahira_Majeed', 5000, '2021-06-21', '12:00:00', 1, 1, 0),
(11, 'Mohammad Saqib', 'Male', 'saqib@gmail.com', 193324632, 'Dr_Abdul_Lateef', 2500, '2021-06-26', '14:00:00', 0, 1, 0),
(12, 'Owais Gulzar', 'Male', 'gulzar@gmail.com', 8803456912, 'Dr_Abdul_Lateef', 2500, '2021-06-28', '10:00:00', 1, 1, 1),
(13, 'Syed Ajmal', 'Male', 'ajmal@gmail.com', 1020304050, 'Dr_Shujada', 1700, '2021-06-18', '08:00:00', 1, 1, 1),
(14, 'Syed Ajmal', 'Male', 'ajmal@gmail.com', 1020304050, 'Dr_Tahira_Majeed', 5000, '2021-06-20', '12:00:00', 1, 1, 0),
(15, 'Saqib Khan', 'Male', 'khan@gmail.com', 6005378291, 'Dr_Uzair_Reyaz', 3000, '2021-06-19', '12:00:00', 1, 0, 0),
(16, 'Saqib Khan', 'Male', 'khan@gmail.com', 6005378291, 'Dr_Uzair_Reyaz', 3000, '2021-06-18', '10:00:00', 1, 1, 1),
(17, 'Amir Gani', 'Male', 'gani@gmail.com', 8803908602, 'Dr_Shujada', 1700, '2021-06-25', '14:00:00', 1, 1, 1),
(18, 'Amir Gani', 'Male', 'gani@gmail.com', 8803908602, 'Dr_Numaan_Raina', 1000, '2021-06-28', '10:00:00', 1, 1, 0),
(19, 'Amir Gani', 'Male', 'gani@gmail.com', 8803908602, 'Dr_Javaid_Magray', 500, '2021-06-20', '08:00:00', 1, 1, 0),
(20, 'Mohammad Saqib', 'Male', 'saqib@gmail.com', 193324632, 'Dr_Numaan_Raina', 1000, '2021-06-24', '08:00:00', 1, 1, 1),
(21, 'Mohammad Saqib', 'Male', 'saqib@gmail.com', 193324632, 'Dr_Javaid_Magray', 500, '2021-06-27', '16:00:00', 1, 1, 0),
(22, 'Aqib Fayaz', 'male', 'fayaz@gmail.com', 7006897644, 'Dr_Uzair_Reyaz', 3000, '2021-06-26', '12:00:00', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacttable`
--

CREATE TABLE `contacttable` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacttable`
--

INSERT INTO `contacttable` (`id`, `name`, `email`, `contact`, `message`) VALUES
(1, 'Owais', 'owais@gmail.com', 2147483647, 'Good Beginner Project'),
(5, 'Irfan', 'irfan@gmail.com', 3498126789, 'Good Going !');

-- --------------------------------------------------------

--
-- Table structure for table `doctortable`
--

CREATE TABLE `doctortable` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(40) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact` bigint(20) NOT NULL,
  `special` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `fees` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctortable`
--

INSERT INTO `doctortable` (`id`, `name`, `password`, `address`, `contact`, `special`, `email`, `fees`) VALUES
(3, 'Dr_Raza_Yusuf', 'yusufraza', 'IUST Road Awantipora opposite J&K bank', 6005782345, 'General', 'yusuf@gmail.com', 2000),
(5, 'Dr_Yasir_Reshi', 'reshiyasir', 'Near DPS School Pantha Chowk,Srinagar', 9419054912, 'Neurologist', 'reshi@gmail.com', 3000),
(6, 'Dr_Tafazul_Majeed', 'majeedtafazul', 'Near bus stand Kadlabal Pampore ,pulwama', 9103098976, 'Pediatrician', 'majeed@gmail.com', 800),
(7, 'Dr_Javaid_Magray', 'magrayjavaid', 'opposite police Station Pampore,pulwama', 9797758771, 'Nephrologist', 'magray@gmail.com', 500),
(9, 'Dr_Tahira_Majeed', 'majeedtahira', 'Oppposite Govt. Hospital Rainawari,Srinagar', 4591246789, 'Dermatologist', 'tahira@gmail.com', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `labpatienttable`
--

CREATE TABLE `labpatienttable` (
  `id` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` text NOT NULL,
  `phone` bigint(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labpatienttable`
--

INSERT INTO `labpatienttable` (`id`, `email`, `username`, `phone`, `password`, `gender`) VALUES
(3, 'wani@gmail.com', 'Owais Wani', 7006543876, 'waniowais', 'Male'),
(4, 'mehraj@gmail.com', 'mudasir mehraj', 8715234911, 'mehrajmudasir', 'Male'),
(5, 'reyaz@gmail.com', 'Fahad Reyaz', 9878325511, 'reyazfahad', 'Male'),
(6, 'bilal@gmail.com', 'Khan Bilal', 8787120993, 'bilalkhan', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `patienttable`
--

CREATE TABLE `patienttable` (
  `id` int(10) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` bigint(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` text NOT NULL,
  `age` int(20) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patienttable`
--

INSERT INTO `patienttable` (`id`, `username`, `email`, `phone`, `password`, `gender`, `age`, `address`) VALUES
(22, 'Syed Burhaan', 'burhaan@gmail.com', 9858324456, 'burhaansyed', 'male', 26, 'Goripora Awantipora ,Pulwama'),
(23, 'Aqib Fayaz', 'fayaz@gmail.com', 7006897644, 'fayazaqib', 'male', 22, 'Bagh-i-Nishat Letpora ,pulwama'),
(24, 'Zarkah Bilal', 'bilal@gmail.com', 9906789128, 'bilalzarkah', 'Female', 0, ''),
(25, 'Faisal RafiQ', 'rafiq@gmail.com', 8803456912, 'gulzarowais', 'male', 22, 'kadlabal pampore, pulwama'),
(26, 'Mohammad Saqib', 'saqib@gmail.com', 193324632, 'saqibmohammad', 'male', 22, 'New Colony Barsoo, pulwama'),
(27, 'Syed Ajmal', 'ajmal@gmail.com', 1020304050, 'ajmal@kasab', 'Male', 0, ''),
(28, 'Saqib Khan', 'khan@gmail.com', 6005378291, 'khansaqib', 'Male', 0, ''),
(29, 'Amir Gani', 'gani@gmail.com', 8803908602, 'ganiamir', 'Male', 0, ''),
(30, 'John Cena', 'cena@gmail.com', 8712388484, 'cenajohn', 'Male', 0, ''),
(33, 'Muntaha Gul', 'jan@gmail.com', 871543213445, 'janmuntaha', 'female', 22, 'Hajibal pampore Pulwama');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptiontable`
--

CREATE TABLE `prescriptiontable` (
  `id` int(40) NOT NULL,
  `appointmentid` int(20) NOT NULL,
  `patient` text NOT NULL,
  `time` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `doctor` varchar(40) NOT NULL,
  `contact` bigint(30) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `allergy` varchar(200) DEFAULT NULL,
  `prescription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescriptiontable`
--

INSERT INTO `prescriptiontable` (`id`, `appointmentid`, `patient`, `time`, `date`, `doctor`, `contact`, `disease`, `allergy`, `prescription`) VALUES
(1, 0, 'Mohammad Saqib', '12:00:00', '2021-06-19', 'Dr_Tafazul_Majeed', 193324632, 'Common Flu', 'viral infection', ' 1 Anti-Cold tablet thrice a day(after 4hr break).\r\n2 tablespoons of cough syrup 4times a day\r\nDrink hot water only.'),
(6, 0, 'Mohammad Saqib', '12:00:00', '2021-06-19', 'Dr_Tafazul_Majeed', 193324632, 'Fever', 'None', 'Paracetomol tablets twice after meals.'),
(7, 0, 'Mohammad Saqib', '14:00:00', '2021-06-26', 'Dr_Abdul_Lateef', 193324632, 'Stomach Ache', 'none', 'Eno chilled'),
(11, 0, 'Mohammad Saqib', '14:00:00', '2021-06-26', 'Dr_Abdul_Lateef', 193324632, 'headache', 'none', '2 neuromol tablets a day.\r\nWear warm clothes and stay inside.'),
(13, 0, 'Saqib Khan', '12:00:00', '2021-06-19', 'Dr_Uzair_Reyaz', 6005378291, 'hepatitis', '', 'boiled water only'),
(14, 0, 'Saqib Khan', '12:00:00', '2021-06-19', 'Dr_Uzair_Reyaz', 6005378291, 'cough', 'none', 'One Cough Syrup bottle\n\r\nTwo tablets per day \n\r\nthanks.'),
(15, 0, 'Saqib Khan', '12:00:00', '2021-06-19', 'Dr_Uzair_Reyaz', 6005378291, 'cough 2', 'none2', 'cough syrup 2\n\r\nthanks 2'),
(16, 0, 'Syed Ajmal', '08:00:00', '2021-06-18', 'Dr_Shujada', 1020304050, 'new one', '', 'i dont know'),
(17, 0, 'Amir Gani', '14:00:00', '2021-06-25', 'Dr_Shujada', 8803908602, 'knee injury', '', 'plaster for 3 weeks \n\r\none pain killer every 6 hr\r\n\r\nthanks'),
(33, 8, 'Mohammad Saqib', '10:00:00', '2021-06-18', 'Dr_Numaan_Raina', 193324632, 'part 3', '', 'remove it now'),
(34, 20, 'Mohammad Saqib', '08:00:00', '2021-06-24', 'Dr_Numaan_Raina', 193324632, 'finger injury', '', 'apply plaster for  1 week');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointmenttable`
--
ALTER TABLE `appointmenttable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacttable`
--
ALTER TABLE `contacttable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctortable`
--
ALTER TABLE `doctortable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labpatienttable`
--
ALTER TABLE `labpatienttable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patienttable`
--
ALTER TABLE `patienttable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescriptiontable`
--
ALTER TABLE `prescriptiontable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointmenttable`
--
ALTER TABLE `appointmenttable`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contacttable`
--
ALTER TABLE `contacttable`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctortable`
--
ALTER TABLE `doctortable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `labpatienttable`
--
ALTER TABLE `labpatienttable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patienttable`
--
ALTER TABLE `patienttable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `prescriptiontable`
--
ALTER TABLE `prescriptiontable`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
