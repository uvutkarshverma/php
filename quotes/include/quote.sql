-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 10:10 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quote`
--

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(11) NOT NULL,
  `quote` longtext NOT NULL,
  `username` varchar(256) NOT NULL,
  `date time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `quote`, `username`, `date time`) VALUES
(13, 'I donâ€™t know where Iâ€™m going from here, but I promise it wonâ€™t be boring.', 'admin', '2021-12-25 02:29:29'),
(14, 'à¤…à¤—à¤° à¤ªà¥ˆà¤¸à¤¾ à¤•à¤®à¤¾à¤¨à¥‡ à¤•à¤¾ à¤‡à¤¤à¤¨à¤¾ à¤¹à¥€ à¤¶à¥Œà¤– à¤¹à¥ˆà¤‚ à¤¤à¥‹ à¤®à¥‡à¤¹à¤¨à¤¤ à¤•à¤°à¤¨à¥‡ à¤•à¥€ à¤†à¤¦à¤¤ à¤…à¤ªà¤¨à¥‡ à¤…à¤‚à¤¦à¤° à¤¡à¤¾à¤² à¤²à¥‹à¥¤', 'admin', '2021-12-25 02:33:39'),
(15, 'If you donâ€™t find a way to make money while you sleep, you will work hard until you die.', 'admin', '2021-12-25 02:34:50'),
(16, 'à¤®à¥ˆ à¤†à¤ªà¤•à¥‹ à¤¬à¤¤à¤¾à¤¨à¤¾ à¤šà¤¾à¤¹à¥à¤—à¤¾ à¤®à¥‡à¤°à¥‡ à¤¦à¥‹à¤¸à¥à¤¤ à¤•à¥€ à¤ªà¥ˆà¤¸à¤¾ à¤¬à¤¹à¥à¤¤ à¤®à¤¹à¤¤à¥à¤ªà¥‚à¤°à¥à¤£ à¤¹à¥‹à¤¤à¤¾ à¤¹à¥ˆ .', 'admin', '2021-12-25 02:39:58');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `date time`) VALUES
(11, 'admin', '$2y$10$bKlqmM4AZhQ7jWLg.zcZ6ei55QIoJkk8Fdd8El5qRdOBOrXRcRJWi', '2021-12-25 02:28:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
