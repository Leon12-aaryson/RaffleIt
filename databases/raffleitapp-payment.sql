-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2023 at 05:20 AM
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
-- Database: `raffleitapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `created_at`) VALUES
('cus_OggABlJGpp0x9o', 'Oluk', 'Aaron Leonard', 'aaronoluk4deleonardo@gmail.com', '2023-09-23 02:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message_name` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message_name`, `email`, `message`) VALUES
(1, 'Oluk Aaron Leonard', 'info@dimensionalpictures.com', 'this is a test message');

-- --------------------------------------------------------

--
-- Table structure for table `organisation`
--

CREATE TABLE `organisation` (
  `id` int(10) NOT NULL,
  `owner` varchar(40) NOT NULL,
  `orgname` varchar(40) NOT NULL,
  `description` varchar(255) NOT NULL,
  `logo` blob NOT NULL,
  `address` varchar(20) NOT NULL,
  `orgemail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organisation`
--

INSERT INTO `organisation` (`id`, `owner`, `orgname`, `description`, `logo`, `address`, `orgemail`) VALUES
(1, 'aaronoluk4deleonardo@gmail.com', 'Org leon', 'sample', 0x64617368626f6172642f7374617469632f75706c6f6164732f576861747341707020496d61676520323032322d30342d323320617420312e33352e353320504d202833292e6a706567, 'Mukono ', 'awrwat@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payee_email` varchar(40) NOT NULL,
  `payment_id` varchar(50) NOT NULL,
  `payment_amount` decimal(10,2) DEFAULT NULL,
  `reason` varchar(20) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `ticket_number` int(10) NOT NULL,
  `payment_method` varchar(40) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `payee_email`, `payment_id`, `payment_amount`, `reason`, `ticket_id`, `ticket_number`, `payment_method`, `currency`, `payment_status`, `payment_date`) VALUES
(1, 1, 'danakin@gmail.com', 'ch_3NzgSMEFkSOsWovi1Vnu04on', 26.00, 'just testing', 1, 3, 'card_1NzgSLEFkSOsWoviisREGLsF', 'usd', 'paid', '2023-10-10 13:58:42'),
(2, 1, 'danakin@gmail.com', 'ch_3NzgayEFkSOsWovi0qvAnfgs', 26.00, 'just testing', 1, 3, 'card_1NzgaxEFkSOsWovicHMjut57', 'usd', 'paid', '2023-10-10 14:07:36'),
(3, 1, 'danakin@gmail.com', 'ch_3NzgbwEFkSOsWovi054iQXEu', 26.00, 'just testing', 1, 3, 'card_1NzgbuEFkSOsWoviWQB1hUNl', 'usd', 'paid', '2023-10-10 14:08:36'),
(4, 1, 'danakin@gmail.com', 'ch_3NzgdxEFkSOsWovi00MMBWpX', 26.00, 'just testing', 1, 3, 'card_1NzgdvEFkSOsWovisUGT9SDk', 'usd', 'paid', '2023-10-10 14:10:41'),
(5, 1, 'danakin@gmail.com', 'ch_3Nzgj9EFkSOsWovi0xdiJX95', 26.00, 'just testing', 1, 3, 'card_1Nzgj7EFkSOsWoviHklrD1Sx', 'usd', 'paid', '2023-10-10 14:16:03'),
(6, 1, 'danakin@gmail.com', 'ch_3O0yKiDbArZGnKh31VK62u3s', 100.00, 'Card ticket', 1, 150, 'card_1O0yKgDbArZGnKh3Ppvw3qVI', 'usd', 'paid', '2023-10-14 03:16:06');

-- --------------------------------------------------------

--
-- Table structure for table `payments1`
--

CREATE TABLE `payments1` (
  `id` int(11) NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `currency` varchar(3) DEFAULT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_failed`
--

CREATE TABLE `payment_failed` (
  `id` int(11) NOT NULL,
  `txn_id` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `cus_email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_success`
--

CREATE TABLE `payment_success` (
  `id` int(11) NOT NULL,
  `txn_id` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `cus_email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `raffles`
--

CREATE TABLE `raffles` (
  `id` int(10) NOT NULL,
  `creator` varchar(255) NOT NULL,
  `hostname` varchar(20) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `picture` blob DEFAULT NULL,
  `ticket3` decimal(8,2) NOT NULL,
  `ticket2` decimal(8,2) NOT NULL,
  `ticket1` decimal(8,2) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `raffles`
--

INSERT INTO `raffles` (`id`, `creator`, `hostname`, `reason`, `picture`, `ticket3`, `ticket2`, `ticket1`, `startdate`, `enddate`) VALUES
(1, 'aaronoluk4deleonardo@gmail.com', 'menq', 'just testing', 0x64617368626f6172642f7374617469632f75706c6f6164732f666f736375312e6a7067, 10.00, 5.00, 2.00, '2023-09-22', '2023-09-29'),
(2, '', 'ed', 'sample 2', 0x64617368626f6172642f7374617469632f75706c6f6164732f706173732e504e47, 10.00, 5.00, 2.00, '2023-09-26', '2023-09-28'),
(3, '', 'Leon', 'This is the second t', 0x64617368626f6172642f7374617469632f75706c6f6164732f70686f746f5f323032332d30392d30345f31332d30302d34322e6a7067, 10.00, 5.00, 2.00, '2023-09-23', '2023-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(1, 'Oluk Aaron Leonard', 'aaronoluk4deleonardo@gmail.com', '$2y$10$FjHYkTiM5oDKyTmDw.uPWe9bxoVCq8paz/OUuDkGHGVXxspmcmloa', 0, 'verified'),
(2, 'john doe', 'admin@gmail.com', '$2y$10$gMOJuLqTCh7YM1S8o0/qour/wFk6p5fjuj/XIKxvu4aY3pRvEwixa', 0, 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `winners`
--

CREATE TABLE `winners` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `mail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `winners`
--

INSERT INTO `winners` (`id`, `name`, `mail`) VALUES
(1, 'leon', ''),
(2, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisation`
--
ALTER TABLE `organisation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UC_Person` (`payment_id`);

--
-- Indexes for table `payments1`
--
ALTER TABLE `payments1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_failed`
--
ALTER TABLE `payment_failed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_success`
--
ALTER TABLE `payment_success`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raffles`
--
ALTER TABLE `raffles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winners`
--
ALTER TABLE `winners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organisation`
--
ALTER TABLE `organisation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payments1`
--
ALTER TABLE `payments1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_failed`
--
ALTER TABLE `payment_failed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_success`
--
ALTER TABLE `payment_success`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `raffles`
--
ALTER TABLE `raffles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `winners`
--
ALTER TABLE `winners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
