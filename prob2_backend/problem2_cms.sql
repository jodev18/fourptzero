-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2021 at 06:12 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `problem2_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `createdOn` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `user_id`, `content`, `createdOn`) VALUES
(1, 4, ' adasds', NULL),
(2, 4, 'aaegawrghwgeagaeg', NULL),
(3, 4, 'aasdsadadasdasd', NULL),
(4, 4, ' adasd', NULL),
(7, 11, ' dgaswzgasgasfg', NULL),
(8, 15, ' adadadadas', NULL),
(9, 15, ' adadadadasadasdasd', NULL),
(10, 15, ' adasdas', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `passkey` varchar(80) NOT NULL,
  `privlevel` int(1) NOT NULL,
  `createdOn` varchar(30) DEFAULT NULL,
  `updatedOn` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `passkey`, `privlevel`, `createdOn`, `updatedOn`) VALUES
(4, 'wonderpets', '$2y$10$KUXlXZ4p5nA8WMx9DNXX7ORNgtCgYH6QPNjB8lVkOph0neChemLES', 2, NULL, NULL),
(5, 'asdsad', '$2y$10$qPyaKjTP7pFXyZZgfYqDGuA7gjr1xaiMmdbpHZ3TmU8YxzpNgkbe.', 2, NULL, NULL),
(6, 'testtt', '$2y$10$kjXXsHtWF0BkT8UbyqkqI.7ucwrBp41G/nLMJKpBsa5rpnC8g2nja', 2, NULL, NULL),
(7, 'asdsadsaaaa', '$2y$10$oP6/sx8ADxHB55phmtla9uHN5LancDNSYDSHdmhlBkUG7W.7KI/RC', 2, NULL, NULL),
(8, 'asd', '$2y$10$PxgFgstYrzyWOebNyH1ei.QmcUH3yTH6ux4cBQm73o3NiXzXMmdjy', 2, NULL, NULL),
(9, 'w44t243wyq', '$2y$10$CxWl39kqCRjMIVjJ76MnY.L.45dVXiWNx4eqHE2ISGJJfigKxN2aq', 2, NULL, NULL),
(11, 'wonderpetsabc', '$2y$10$jIwhYWptKRPvLPdrU3WM8.AJeMRO0uU3cLhj4LM6GSTzuGhzRQ1lK', 2, NULL, NULL),
(14, 'superuser', '$2y$10$8RuhVBOZ71KaY6srO2ddVujMQ44rX1b1vER1L80/Bko1vnSbkEeVK', 1, NULL, NULL),
(15, 'normalguy', '$2y$10$lK2x6fM7DRo8pYOjg2kFqOxdyWQl/V0YuMEI70gjpeq8fD6Z/k9JK', 2, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
