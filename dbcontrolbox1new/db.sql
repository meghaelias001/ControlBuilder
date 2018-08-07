-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2018 at 10:51 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `filename` text,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `filename`, `created_date`) VALUES
(1, 'user-files/User-25-04-2017-19-43-32-2584.csv', '2017-04-25 17:43:32'),
(2, 'user-files/User-25-04-2017-21-52-49-4826.csv', '2017-04-25 19:52:49'),
(3, 'user-files/User-25-04-2017-22-02-48-2310.csv', '2017-04-25 20:02:48'),
(4, 'user-files/User-25-04-2017-22-04-25-9662.csv', '2017-04-25 20:04:25'),
(5, 'user-files/User-25-04-2017-22-19-38-3166.csv', '2017-04-25 20:19:38'),
(6, 'user-files/User-25-04-2017-22-20-52-7314.csv', '2017-04-25 20:20:52'),
(7, 'user-files/User-26-04-2017-17-00-04-8753.csv', '2017-04-26 15:00:05'),
(8, 'user-files/User-01-05-2017-11-53-52-5692.csv', '2017-05-01 09:53:53'),
(9, 'user-files/User-02-05-2017-10-36-56-7211.csv', '2017-05-02 08:36:56'),
(10, 'user-files/User-02-05-2017-10-39-38-3824.csv', '2017-05-02 08:39:38'),
(11, 'user-files/User-02-05-2017-10-43-07-1152.csv', '2017-05-02 08:43:08'),
(12, 'user-files/User-02-05-2017-10-48-54-4120.csv', '2017-05-02 08:48:54'),
(13, 'user-files/User-13-11-2017-20-34-03-5246.csv', '2017-11-13 19:34:03'),
(14, 'user-files/User-17-11-2017-23-35-31-2925.csv', '2017-11-17 22:35:31'),
(15, 'user-files/User-18-11-2017-01-40-19-1264.csv', '2017-11-18 00:40:19'),
(16, 'user-files/User-18-11-2017-01-47-07-8837.csv', '2017-11-18 00:47:07'),
(17, 'user-files/User-18-11-2017-02-00-37-4722.csv', '2017-11-18 01:00:37'),
(18, 'user-files/User-20-11-2017-09-26-22-8684.csv', '2017-11-20 08:26:22'),
(19, 'user-files/User-20-11-2017-09-56-33-3955.csv', '2017-11-20 08:56:33'),
(20, 'user-files/User-20-11-2017-10-00-22-3875.csv', '2017-11-20 09:00:22'),
(21, 'user-files/User-03-12-2017-16-52-52-7991.csv', '2017-12-03 15:52:52'),
(22, 'user-files/User-07-12-2017-20-49-55-6698.csv', '2017-12-07 19:49:56'),
(23, 'user-files/User-10-12-2017-15-56-43-4787.csv', '2017-12-10 14:56:43'),
(24, 'user-files/User-11-12-2017-06-26-24-3874.csv', '2017-12-11 05:26:24'),
(25, 'user-files/User-11-12-2017-06-34-48-2815.csv', '2017-12-11 05:34:48'),
(26, 'user-files/User-11-12-2017-07-49-05-4872.csv', '2017-12-11 06:49:05'),
(27, 'user-files/User-11-12-2017-07-50-48-6304.csv', '2017-12-11 06:50:48'),
(28, 'user-files/User-11-12-2017-07-50-50-5312.csv', '2017-12-11 06:50:50'),
(29, 'user-files/User-11-12-2017-07-53-58-4775.csv', '2017-12-11 06:53:58'),
(30, 'user-files/User-11-12-2017-08-04-20-6133.csv', '2017-12-11 07:04:20'),
(31, 'user-files/User-11-12-2017-08-12-35-4410.csv', '2017-12-11 07:12:35'),
(32, 'user-files/User-11-12-2017-08-25-52-7483.csv', '2017-12-11 07:25:52'),
(33, 'user-files/User-11-12-2017-09-07-31-8781.csv', '2017-12-11 08:07:31'),
(34, 'user-files/User-11-12-2017-09-11-07-5374.csv', '2017-12-11 08:11:07'),
(35, 'user-files/User-11-12-2017-09-15-48-5364.csv', '2017-12-11 08:15:48'),
(36, 'user-files/User-11-12-2017-09-15-53-6305.csv', '2017-12-11 08:15:53'),
(37, 'user-files/User-11-12-2017-09-16-01-5884.csv', '2017-12-11 08:16:01'),
(38, 'user-files/User-11-12-2017-09-17-29-9631.csv', '2017-12-11 08:17:29'),
(39, 'user-files/User-11-12-2017-09-17-38-4211.csv', '2017-12-11 08:17:38'),
(40, 'user-files/User-11-12-2017-09-17-44-7249.csv', '2017-12-11 08:17:44'),
(41, 'user-files/User-11-12-2017-09-17-49-8062.csv', '2017-12-11 08:17:49'),
(42, 'user-files/User-11-12-2017-09-17-54-9942.csv', '2017-12-11 08:17:54'),
(43, 'user-files/User-11-12-2017-09-18-00-9413.csv', '2017-12-11 08:18:00'),
(44, 'user-files/User-11-12-2017-09-43-14-3974.csv', '2017-12-11 08:43:15'),
(45, 'user-files/User-11-12-2017-09-53-47-5645.csv', '2017-12-11 08:53:47'),
(46, 'user-files/User-11-12-2017-10-12-08-6953.csv', '2017-12-11 09:12:08'),
(47, 'user-files/User-11-12-2017-10-12-14-3633.csv', '2017-12-11 09:12:14'),
(48, 'user-files/User-11-12-2017-10-12-24-6135.csv', '2017-12-11 09:12:24'),
(49, 'user-files/User-11-12-2017-10-46-43-4167.csv', '2017-12-11 09:46:43'),
(50, 'user-files/User-11-12-2017-10-58-03-6857.csv', '2017-12-11 09:58:03'),
(51, 'user-files/User-11-12-2017-11-22-27-8129.csv', '2017-12-11 10:22:27'),
(52, 'user-files/User-11-12-2017-12-08-51-1301.csv', '2017-12-11 11:08:51'),
(53, 'user-files/User-11-12-2017-12-08-57-9077.csv', '2017-12-11 11:08:57'),
(54, 'user-files/User-11-12-2017-12-27-57-2814.csv', '2017-12-11 11:27:57'),
(55, 'user-files/User-11-12-2017-12-28-03-5454.csv', '2017-12-11 11:28:03'),
(56, 'user-files/User-11-12-2017-12-58-28-8539.csv', '2017-12-11 11:58:28'),
(57, 'user-files/User-11-12-2017-13-08-56-2096.csv', '2017-12-11 12:08:56'),
(58, 'user-files/User-14-12-2017-14-40-34-9825.csv', '2017-12-14 13:40:34'),
(59, 'user-files/User-15-01-2018-09-37-46-3645.csv', '2018-01-15 08:37:46'),
(60, 'user-files/User-15-01-2018-10-35-57-5859.csv', '2018-01-15 09:35:57'),
(61, 'user-files/User-15-01-2018-10-42-13-6472.csv', '2018-01-15 09:42:13'),
(62, 'user-files/User-15-01-2018-10-53-12-8563.csv', '2018-01-15 09:53:12'),
(63, 'user-files/User-15-01-2018-11-05-05-5640.csv', '2018-01-15 10:05:05'),
(64, 'user-files/User-15-01-2018-11-06-45-9169.csv', '2018-01-15 10:06:45'),
(65, 'user-files/User-15-01-2018-11-19-17-4839.csv', '2018-01-15 10:19:17'),
(66, 'user-files/User-15-01-2018-11-22-53-6429.csv', '2018-01-15 10:22:53'),
(67, 'user-files/User-15-01-2018-11-49-58-1659.csv', '2018-01-15 10:49:58'),
(68, 'user-files/User-16-01-2018-13-02-38-4505.csv', '2018-01-16 12:02:38'),
(69, 'user-files/User-18-01-2018-23-46-27-9511.csv', '2018-01-18 22:46:27'),
(70, 'user-files/User-23-01-2018-16-42-29-8171.csv', '2018-01-23 15:42:29'),
(71, 'user-files/User-25-01-2018-16-38-30-6444.csv', '2018-01-25 15:38:31'),
(72, 'user-files/User-22-02-2018-10-20-10-9331.csv', '2018-02-22 09:20:10'),
(73, 'user-files/User-22-02-2018-10-22-48-1342.csv', '2018-02-22 09:22:48'),
(74, 'user-files/User-22-02-2018-11-08-38-3189.csv', '2018-02-22 10:08:38'),
(75, 'user-files/User-22-02-2018-12-15-52-5377.csv', '2018-02-22 11:15:52'),
(76, 'user-files/User-22-02-2018-12-24-09-8442.csv', '2018-02-22 11:24:09'),
(77, 'user-files/User-22-02-2018-12-54-36-4713.csv', '2018-02-22 11:54:36'),
(78, 'user-files/User-22-02-2018-12-55-06-2057.csv', '2018-02-22 11:55:06'),
(79, 'user-files/User-22-02-2018-22-51-36-5709.csv', '2018-02-22 21:51:36'),
(80, 'user-files/User-22-02-2018-22-56-02-3927.csv', '2018-02-22 21:56:02'),
(81, 'user-files/User-22-02-2018-22-57-15-5018.csv', '2018-02-22 21:57:15'),
(82, 'user-files/User-22-02-2018-23-14-00-1738.csv', '2018-02-22 22:14:00'),
(83, 'user-files/User-23-02-2018-11-15-18-4311.csv', '2018-02-23 10:15:18'),
(84, 'user-files/User-24-02-2018-16-51-59-4687.csv', '2018-02-24 15:51:59'),
(85, 'user-files/User-26-02-2018-11-17-59-1945.csv', '2018-02-26 10:17:59'),
(86, 'user-files/User-04-03-2018-13-25-29-4929.csv', '2018-03-04 12:25:29'),
(87, 'user-files/User-04-03-2018-14-08-12-3179.csv', '2018-03-04 13:08:13'),
(88, 'user-files/User-04-03-2018-17-34-45-9177.csv', '2018-03-04 16:34:45'),
(89, 'user-files/User-11-03-2018-13-43-08-7642.csv', '2018-03-11 12:43:08'),
(90, 'user-files/User-15-03-2018-22-25-56-7899.csv', '2018-03-15 21:25:56'),
(91, 'user-files/User-15-03-2018-22-34-14-4142.csv', '2018-03-15 21:34:14'),
(92, 'user-files/User-16-03-2018-22-11-19-9645.csv', '2018-03-16 21:11:19'),
(93, 'user-files/User-22-03-2018-23-51-40-5007.csv', '2018-03-22 22:51:41'),
(94, 'user-files/User-23-03-2018-00-02-08-1491.csv', '2018-03-22 23:02:08'),
(95, 'user-files/User-23-03-2018-18-51-35-1396.csv', '2018-03-23 17:51:35'),
(96, 'user-files/User-23-03-2018-18-52-13-5543.csv', '2018-03-23 17:52:13'),
(97, 'user-files/User-23-03-2018-18-58-02-9180.csv', '2018-03-23 17:58:02'),
(98, 'user-files/User-23-03-2018-18-58-21-7195.csv', '2018-03-23 17:58:21'),
(99, 'user-files/User-23-03-2018-19-01-29-7257.csv', '2018-03-23 18:01:29'),
(100, 'user-files/User-02-04-2018-16-11-24-1521.csv', '2018-04-02 14:11:25'),
(101, 'user-files/User-02-04-2018-16-13-39-2243.csv', '2018-04-02 14:13:40'),
(102, 'user-files/User-03-04-2018-21-33-57-6557.csv', '2018-04-03 19:33:57'),
(103, 'user-files/User-03-04-2018-21-42-40-4914.csv', '2018-04-03 19:42:40'),
(104, 'user-files/User-03-04-2018-21-44-17-8404.csv', '2018-04-03 19:44:17'),
(105, 'user-files/User-03-04-2018-21-44-20-2747.csv', '2018-04-03 19:44:20'),
(106, 'user-files/User-03-04-2018-21-44-33-6476.csv', '2018-04-03 19:44:33'),
(107, 'user-files/User-03-04-2018-21-44-35-3301.csv', '2018-04-03 19:44:35'),
(108, 'user-files/User-03-04-2018-21-44-38-6302.csv', '2018-04-03 19:44:38'),
(109, 'user-files/User-03-04-2018-21-45-21-9207.csv', '2018-04-03 19:45:21'),
(110, 'user-files/User-03-04-2018-21-45-23-4112.csv', '2018-04-03 19:45:23'),
(111, 'user-files/User-03-04-2018-21-45-29-2096.csv', '2018-04-03 19:45:29'),
(112, 'user-files/User-03-04-2018-21-45-54-8226.csv', '2018-04-03 19:45:54'),
(113, 'user-files/User-03-04-2018-21-46-13-7987.csv', '2018-04-03 19:46:13'),
(114, 'user-files/User-03-04-2018-21-48-19-4509.csv', '2018-04-03 19:48:19'),
(115, 'user-files/User-03-04-2018-21-48-24-3250.csv', '2018-04-03 19:48:24'),
(116, 'user-files/User-03-04-2018-21-49-04-3154.csv', '2018-04-03 19:49:04'),
(117, 'user-files/User-03-04-2018-21-49-05-6688.csv', '2018-04-03 19:49:05'),
(118, 'user-files/User-03-04-2018-21-50-19-5555.csv', '2018-04-03 19:50:19'),
(119, 'user-files/User-03-04-2018-21-50-21-3296.csv', '2018-04-03 19:50:21'),
(120, 'user-files/User-03-04-2018-21-50-23-6045.csv', '2018-04-03 19:50:23'),
(121, 'user-files/User-03-04-2018-22-01-40-1801.csv', '2018-04-03 20:01:40'),
(122, 'user-files/User-03-04-2018-22-01-44-3155.csv', '2018-04-03 20:01:44'),
(123, 'user-files/User-03-04-2018-22-02-14-1321.csv', '2018-04-03 20:02:14'),
(124, 'user-files/User-03-04-2018-22-06-45-5165.csv', '2018-04-03 20:06:45'),
(125, 'user-files/User-03-04-2018-22-07-57-2442.csv', '2018-04-03 20:07:57'),
(126, 'user-files/User-03-04-2018-22-08-15-7046.csv', '2018-04-03 20:08:15'),
(127, 'user-files/User-03-04-2018-22-09-41-6500.csv', '2018-04-03 20:09:41'),
(128, 'user-files/User-03-04-2018-22-09-54-7503.csv', '2018-04-03 20:09:54'),
(129, 'user-files/User-03-04-2018-22-10-23-7196.csv', '2018-04-03 20:10:23'),
(130, 'user-files/User-03-04-2018-23-58-19-5800.csv', '2018-04-03 21:58:19'),
(131, 'user-files/User-04-04-2018-11-50-42-9287.csv', '2018-04-04 09:50:42');

-- --------------------------------------------------------

--
-- Table structure for table `files_control`
--

CREATE TABLE `files_control` (
  `id` int(11) NOT NULL,
  `filename` text,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `files_control`
--

INSERT INTO `files_control` (`id`, `filename`, `created_date`) VALUES
(1, 'user-files/ControlGroupUser-16-01-2018-18-07-03-296655.csv', '2018-01-16 17:07:03'),
(2, 'user-files/ControlGroupUser-16-01-2018-18-07-53-689141.csv', '2018-01-16 17:07:53'),
(3, 'user-files/ControlGroupUser-16-01-2018-18-07-54-839901.csv', '2018-01-16 17:07:54'),
(4, 'user-files/ControlGroupUser-16-01-2018-18-07-54-946166.csv', '2018-01-16 17:07:54'),
(5, 'user-files/ControlGroupUser-16-01-2018-18-07-54-891043.csv', '2018-01-16 17:07:54'),
(6, 'user-files/ControlGroupUser-16-01-2018-18-07-55-997473.csv', '2018-01-16 17:07:55'),
(7, 'user-files/ControlGroupUser-16-01-2018-18-07-55-533767.csv', '2018-01-16 17:07:55'),
(8, 'user-files/ControlGroupUser-16-01-2018-18-07-55-811199.csv', '2018-01-16 17:07:55'),
(9, 'user-files/ControlGroupUser-16-01-2018-18-07-55-107388.csv', '2018-01-16 17:07:55'),
(10, 'user-files/ControlGroupUser-16-01-2018-18-07-55-793182.csv', '2018-01-16 17:07:55'),
(11, 'user-files/ControlGroupUser-16-01-2018-18-07-55-700485.csv', '2018-01-16 17:07:55'),
(12, 'user-files/ControlGroupUser-16-01-2018-18-07-55-274078.csv', '2018-01-16 17:07:55'),
(13, 'user-files/ControlGroupUser-16-01-2018-18-14-29-168307.csv', '2018-01-16 17:14:29'),
(14, 'user-files/ControlGroupUser-16-01-2018-18-14-41-881018.csv', '2018-01-16 17:14:41'),
(15, 'user-files/ControlGroupUser-16-01-2018-21-56-55-761569.csv', '2018-01-16 20:56:55'),
(16, 'user-files/ControlGroupUser-17-01-2018-16-26-18-902001.csv', '2018-01-17 15:26:18'),
(17, 'user-files/ControlGroupUser-22-02-2018-09-44-40-737124.csv', '2018-02-22 08:44:40'),
(18, 'user-files/ControlGroupUser-22-02-2018-10-09-01-290338.csv', '2018-02-22 09:09:01'),
(19, 'user-files/ControlGroupUser-22-02-2018-12-27-09-757669.csv', '2018-02-22 11:27:09'),
(20, 'user-files/ControlGroupUser-26-02-2018-13-35-39-714080.csv', '2018-02-26 12:35:39'),
(21, 'user-files/ControlGroupUser-26-02-2018-15-23-55-239498.csv', '2018-02-26 14:23:55'),
(22, 'user-files/ControlGroupUser-28-02-2018-00-28-57-898541.csv', '2018-02-27 23:28:58'),
(23, 'user-files/ControlGroupUser-01-03-2018-10-59-21-994479.csv', '2018-03-01 09:59:21'),
(24, 'user-files/ControlGroupUser-01-03-2018-11-44-58-996237.csv', '2018-03-01 10:44:58'),
(25, 'user-files/ControlGroupUser-04-03-2018-13-14-06-301379.csv', '2018-03-04 12:14:06'),
(26, 'user-files/ControlGroupUser-04-03-2018-19-13-38-916311.csv', '2018-03-04 18:13:38'),
(27, 'user-files/ControlGroupUser-04-03-2018-22-15-31-733169.csv', '2018-03-04 21:15:31'),
(28, 'user-files/ControlGroupUser-05-03-2018-18-17-08-459170.csv', '2018-03-05 17:17:08'),
(29, 'user-files/ControlGroupUser-05-03-2018-23-08-52-402398.csv', '2018-03-05 22:08:52'),
(30, 'user-files/ControlGroupUser-06-03-2018-22-22-18-297396.csv', '2018-03-06 21:22:18'),
(31, 'user-files/ControlGroupUser-08-03-2018-23-44-34-222717.csv', '2018-03-08 22:44:34'),
(32, 'user-files/ControlGroupUser-09-03-2018-11-25-16-980224.csv', '2018-03-09 10:25:16'),
(33, 'user-files/ControlGroupUser-22-03-2018-12-19-01-803948.csv', '2018-03-22 11:19:01'),
(34, 'user-files/ControlGroupUser-22-03-2018-12-19-25-922628.csv', '2018-03-22 11:19:25'),
(35, 'user-files/ControlGroupUser-22-03-2018-12-24-47-934082.csv', '2018-03-22 11:24:47'),
(36, 'user-files/ControlGroupUser-22-03-2018-12-35-48-382952.csv', '2018-03-22 11:35:48'),
(37, 'user-files/ControlGroupUser-22-03-2018-12-45-19-136584.csv', '2018-03-22 11:45:19'),
(38, 'user-files/ControlGroupUser-22-03-2018-14-53-43-545523.csv', '2018-03-22 13:53:43'),
(39, 'user-files/ControlGroupUser-22-03-2018-14-55-49-457165.csv', '2018-03-22 13:55:49'),
(40, 'user-files/ControlGroupUser-30-03-2018-11-49-10-351943.csv', '2018-03-30 09:49:10'),
(41, 'user-files/ControlGroupUser-04-04-2018-11-54-31-943365.csv', '2018-04-04 09:54:31'),
(42, 'user-files/ControlGroupUser-04-04-2018-11-56-54-987777.csv', '2018-04-04 09:56:54'),
(43, 'user-files/ControlGroupUser-05-04-2018-08-50-39-567852.csv', '2018-04-05 06:50:39'),
(44, 'user-files/ControlGroupUser-05-04-2018-09-37-04-512536.csv', '2018-04-05 07:37:04');

-- --------------------------------------------------------

--
-- Table structure for table `ip`
--

CREATE TABLE `ip` (
  `ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ip`
--

INSERT INTO `ip` (`ip`) VALUES
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1'),
('::1');

-- --------------------------------------------------------

--
-- Table structure for table `state_price`
--

CREATE TABLE `state_price` (
  `id` int(11) NOT NULL,
  `market_sd` varchar(20) NOT NULL,
  `market_return` varchar(20) NOT NULL,
  `free_return` varchar(20) NOT NULL,
  `horizon` int(11) DEFAULT NULL,
  `state_price_string` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state_price`
--

INSERT INTO `state_price` (`id`, `market_sd`, `market_return`, `free_return`, `horizon`, `state_price_string`) VALUES
(1, '0.18', '0.08', '0.02', 10, '0.080434982,0.050984567,0.040261888,0.034091182,0.029907638,0.026812971,0.024395360,0.022434471,0.020799793,0.019408202,0.018203791,0.017147321,0.016210297,0.015371432,0.014614452,0.013926659,0.013297977,0.012720291,0.012186976,0.011692563,0.011232490,0.010802915,0.010400579,0.010022690,0.009666846,0.009330962,0.009013224,0.008712037,0.008426001,0.008153873,0.007894551,0.007647049,0.007410487,0.007184071,0.006967088,0.006758891,0.006558893,0.006366561,0.006181409,0.006002992,0.005830902,0.005664764,0.005504234,0.005348994,0.005198749,0.005053228,0.004912177,0.004775362,0.004642564,0.004513578,0.004388216,0.004266297,0.004147656,0.004032134,0.003919585,0.003809870,0.003702856,0.003598422,0.003496449,0.003396826,0.003299447,0.003204214,0.003111029,0.003019802,0.002930445,0.002842874,0.002757010,0.002672774,0.002590091,0.002508890,0.002429098,0.002350647,0.002273470,0.002197500,0.002122670,0.002048916,0.001976172,0.001904371,0.001833445,0.001763327,0.001693945,0.001625223,0.001557084,0.001489441,0.001422204,0.001355272,0.001288530,0.001221850,0.001155082,0.001088046,0.001020525,0.000952248,0.000882863,0.000811898,0.000738693,0.000662257,0.000580988,0.000491943,0.000388481,0.000246243');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `user_type`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '9577aafce2257d15d2b2abc2783b99be', 'admin', '2017-04-03 16:41:11', '0000-00-00 00:00:00'),
(2, 'GIRI', 'giri', 'a95bc72cf82d4eaa0874de0175dc2091', 'admin', '2017-04-25 18:08:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_control`
--

CREATE TABLE `user_control` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_control`
--

INSERT INTO `user_control` (`id`, `name`, `username`, `password`, `user_type`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2017-04-03 14:41:11', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files_control`
--
ALTER TABLE `files_control`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_price`
--
ALTER TABLE `state_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_control`
--
ALTER TABLE `user_control`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `files_control`
--
ALTER TABLE `files_control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `state_price`
--
ALTER TABLE `state_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
