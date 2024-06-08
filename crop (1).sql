-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2024 at 11:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(23) NOT NULL,
  `email` varchar(34) NOT NULL,
  `password` varchar(23) NOT NULL,
  `contact` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `contact`) VALUES
(1, 'admin', 'admin@gmail.com', 'sr1216', '9657255121');

-- --------------------------------------------------------

--
-- Table structure for table `adminapproved`
--

CREATE TABLE `adminapproved` (
  `id` int(11) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminapproved`
--

INSERT INTO `adminapproved` (`id`, `status`) VALUES
(31, '1');

-- --------------------------------------------------------

--
-- Table structure for table `agrimaster`
--

CREATE TABLE `agrimaster` (
  `id` int(11) NOT NULL,
  `name` varchar(34) NOT NULL,
  `email` varchar(45) NOT NULL,
  `contact` varchar(23) NOT NULL,
  `password` varchar(23) NOT NULL,
  `experience` varchar(43) NOT NULL,
  `designation` varchar(67) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agrimaster`
--

INSERT INTO `agrimaster` (`id`, `name`, `email`, `contact`, `password`, `experience`, `designation`) VALUES
(2, 'agronomist', 'agro@gmail.com', '4563789322', 'agro123', '35', 'Agricultural Specialist');

-- --------------------------------------------------------

--
-- Table structure for table `approved_codes`
--

CREATE TABLE `approved_codes` (
  `id` int(11) NOT NULL,
  `admin_approved` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `crop` varchar(34) NOT NULL,
  `disease` varchar(45) NOT NULL,
  `location` varchar(34) NOT NULL,
  `description` varchar(67) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `crop`, `disease`, `location`, `description`) VALUES
(1, 'Wheat', 'Powdery milk', 'Nashik', 'Website is goof for us'),
(38, 'hgfd', 'uytre', 'hgfds', 'uytre'),
(39, 'onion', 'onion outer cover black', 'Ahmednagar', 'your medicine work on my crop'),
(40, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `id` int(11) NOT NULL,
  `age` int(34) NOT NULL,
  `name` varchar(23) NOT NULL,
  `crop` varchar(23) NOT NULL,
  `problems` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`id`, `age`, `name`, `crop`, `problems`) VALUES
(1, 23, 'Ruchita', 'wheat', 'yellowish leaf'),
(2, 34, 'ramlal', 'Rice', 'reddish rush on stem'),
(3, 35, 'Gunjan', 'onion', 'fungus infection occurs'),
(5, 45, 'Krushna', 'cotton', 'curl leaf'),
(7, 37, 'Rani', 'Wheat', 'Improper growth'),
(9, 32, 'shreya', 'jawar', 'leafs are yellowish and laid doem\r\n '),
(10, 25, 'Ankita', 'Onion', 'onion purple blotch');

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

CREATE TABLE `regi` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `age` int(23) NOT NULL,
  `password` varchar(23) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`id`, `name`, `contact`, `age`, `password`, `city`, `address`) VALUES
(84, 'Rekha', '3456789432', 23, '123', 'newasa', 'newasa, Ahmednagar'),
(85, 'Rekha', '3456789432', 23, '123', 'newasa', 'newasa, Ahmednagar'),
(87, 'Anuja', '6473828129', 21, '1234', 'Rahata', 'MG road Rahata'),
(89, 'Ruchita', '9404834058', 21, 'rucha123', 'newasa', 'Usthal khalsa newasa'),
(94, 'Shreya', '8698319955', 21, 'shru1216', 'Newasa B.K.', 'NEWASA B.K DIST:AHMEDNAGAR TAL'),
(95, '', '', 0, '', '', ''),
(96, '12shivani', '9404834058', 23, 'pass123', 'Bhalgoan', 'At  Usthal khalsa Post. Bhalgo');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `name` varchar(56) NOT NULL,
  `image` varchar(89) NOT NULL,
  `occurance` varchar(90) NOT NULL,
  `symptoms` varchar(89) NOT NULL,
  `control` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`, `image`, `occurance`, `symptoms`, `control`) VALUES
(30, 'Fusarium Head Blight', 'item_img/headscabwheat.jpg', 'The disease is characterized by two types  of symptoms:\r\n1)seeding blight\r\n2) head blight\r', 'Individual plants of cereal crops (e.g. wheat) produce multiple stems, and each stem prod', 'user resistant varieties, if available.\r\n\r\nchoose location that are exposed to the sun.\r\nS'),
(31, 'Powdery Wheat', 'item_img/powderywheat.jpg', 'Powdery mildew of wheat is specific only to wheat and will not infect barley and vice vers', 'Powdery mildew appears as fluffy, white powdery growths of fungal spores on the leaf surf', 'Thiophanate Methyl 70% WP,\r\nDifenconazole 25 % EC, Azoxystrobin 18.2 % + difenoconazole 11'),
(42, 'Onion Black Mold', 'item_img/Onion Black Mold.jpg', 'Black mold is most common when temperatures are higher than 30°C (86°f ) in the field or 2', 'Black mold of onion is caused by the fungus Aspergillus niger. This disease can occur in ', 'Treatment of onion bulbs with formulation of antagonistic yeast isolates AUN-AH14 and AUN-'),
(43, 'Cercospora gossypina', 'item_img/Cercospora Leaf spot.jpg', 'Dense planting . Cloudy weather coupled with intermittent rain followed by dry weather. Hi', 'Round or irregular greyish spots appear on leaves. The spots may have dark brown or black', 'Remove and destroy the infected plant residues.\r\nSpray Mancozeb @ 400g/ acre or Copper oxy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminapproved`
--
ALTER TABLE `adminapproved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agrimaster`
--
ALTER TABLE `agrimaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approved_codes`
--
ALTER TABLE `approved_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regi`
--
ALTER TABLE `regi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminapproved`
--
ALTER TABLE `adminapproved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `agrimaster`
--
ALTER TABLE `agrimaster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `approved_codes`
--
ALTER TABLE `approved_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `regi`
--
ALTER TABLE `regi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
