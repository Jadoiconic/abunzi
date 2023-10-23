-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 23, 2023 at 01:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aims`
--

-- --------------------------------------------------------

--
-- Table structure for table `ibirego`
--

CREATE TABLE `ibirego` (
  `id` int(11) NOT NULL,
  `ownder` varchar(255) NOT NULL,
  `defender` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `updatedAt` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `intara` text NOT NULL,
  `akarere` text NOT NULL,
  `umurenge` text NOT NULL,
  `akagari` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ibirego`
--

INSERT INTO `ibirego` (`id`, `ownder`, `defender`, `title`, `uid`, `description`, `status`, `updatedAt`, `createdAt`, `intara`, `akarere`, `umurenge`, `akagari`) VALUES
(1, 'kamiri', 'rugira', 'umutekano', 1, '<p>dkjdskd</p>', 1, '2023-10-23 11:32:25', '2023-10-16 07:13:51', 'Amajyaruguru', 'Gakenke', 'Busing', 'Rehang'),
(2, 'mahoro', 'mugabe', 'Yes', 1, 'Hindura imitekerereze', 1, '2023-10-18 02:37:09', '2023-10-16 07:13:51', '', '', '', ''),
(3, 'Musezero', 'Makangwa', 'Tell me', 1, 'Tuza ibintu byose biraza kugenda neza                                                    ', 1, '2023-10-18 02:36:42', '2023-10-16 18:35:07', '', '', '', ''),
(5, 'Rugwiro', 'Marc', 'Amakimbirane mumuryango', 3, '             jsskhjfhsdk cjfks ksjskhfsns jdskjskiuh skfjsknsdcoijsnskuhsnvns shs,os nhiondhsfhos uhoisnos                                    ', 1, NULL, '2023-10-16 19:05:52', '', '', '', ''),
(10, 'sdfhaj', 'dsfads', 'fades', 1, '<p>hdkjahfkja djkahdjkfahd fdsafhjkahdf</p>', 1, NULL, '2023-10-22 23:32:22', '', '', '', ''),
(11, 'fgfd', 'svfs', 'dfgdg', 1, '<p>jfskjgdfk</p>\r\n<p><strong>fdgfdlkfd</strong></p>\r\n<p>&nbsp;</p>\r\n<p>fdgdf</p>', 1, NULL, '2023-10-22 23:33:00', '', '', '', ''),
(12, 'Mugiraneza', 'John', 'Amakimbirane mu muryango', 1, '<table style=\"border-collapse: collapse; width: 100%;\" border=\"1\"><colgroup><col style=\"width: 24.879227%;\"><col style=\"width: 24.879227%;\"><col style=\"width: 24.879227%;\"><col style=\"width: 24.879227%;\"></colgroup>\r\n<tbody>\r\n<tr>\r\n<td>col1</td>\r\n<td>col2</td>\r\n<td>col3</td>\r\n<td>col4</td>\r\n</tr>\r\n<tr>\r\n<td>sjdksj</td>\r\n<td>kdsjk</td>\r\n<td>fjdksk</td>\r\n<td>fjdks</td>\r\n</tr>\r\n</tbody>\r\n</table>                                                    ', 1, '2023-10-23 00:43:17', '2023-10-22 23:35:34', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `isAdmin`, `status`, `createdAt`, `updatedAt`) VALUES
(1, 'Man', 'Riho', 'admin@gmail.com', '$2y$10$bgr33RZG00.31d6sacbGyeKxjP4ZKax/qTBYge.VYnavlUVFg1Gj6', 1, 1, '2023-10-16 07:20:27', '2023-10-16 07:20:27'),
(3, 'Musocial', 'Thacien', 'thacien@gmail.com', '$2y$10$CNL0/QCqTvuYtrALIejL0ewlnYN6IS5gN3fUUAHbtIPExLSiz7Eba', 1, 1, '2023-10-16 13:55:27', '0000-00-00 00:00:00'),
(4, 'Terimbere', 'Fida', 'fida@gmail.com', '$2y$10$DS.t58Y/zx06nZHM92rmp.PPZ/lJjkr2cSyz7BNSJT.aG7aShnAmi', 0, 1, '2023-10-16 19:02:39', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ibirego`
--
ALTER TABLE `ibirego`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ibirego`
--
ALTER TABLE `ibirego`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ibirego`
--
ALTER TABLE `ibirego`
  ADD CONSTRAINT `ibirego_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
