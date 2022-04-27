-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2020 at 10:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `sex` char(3) NOT NULL,
  `date` text DEFAULT NULL,
  `admin_roll` varchar(50) NOT NULL,
  `active` text NOT NULL,
  `approve` text NOT NULL,
  `unapprove` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fname`, `lname`, `email`, `password`, `sex`, `date`, `admin_roll`, `active`, `approve`, `unapprove`) VALUES
(1, 'promise', 'ukachukwu', 'ukachukwupromise@gmail.com', '123456789', 'M', '2020-08-10 21:03:19', 'admin', '', '', ''),
(3, 'kelvin', 'khaja', 'kelvinkhaja@gmail.com', '123456789', 'M', '2020-08-10 21:09:51', 'subadmin', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `book_id` int(11) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `bloodgroup` varchar(50) DEFAULT NULL,
  `booking_status` varchar(50) DEFAULT NULL,
  `date` text DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`book_id`, `doctor_id`, `fname`, `lname`, `contact`, `email`, `patient_id`, `bloodgroup`, `booking_status`, `date`, `time`) VALUES
(33, 1118, 'james', 'ukachukwu', '8065015510', 'jamemike@gmail.com', 10015, 'AB+', 'video', 'September\' 25 2020', '12:28:07'),
(40, 1236, 'marc', 'lead', '55555676787898', 'marc@gmail.com', 12385, 'AB+', 'audio', 'September\' 26 2020', '01:36:33'),
(42, 123, 'wuu', 'llu', '80650155104', 'wuu@gmail.com', 700, 'AB+', 'video', 'September\' 28 2020', '05:14:28');

-- --------------------------------------------------------

--
-- Table structure for table `category_menu_bar`
--

CREATE TABLE `category_menu_bar` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_menu_bar`
--

INSERT INTO `category_menu_bar` (`cat_id`, `cat_title`) VALUES
(1, 'Home'),
(2, 'About Us'),
(3, 'Terms'),
(4, 'Career'),
(5, 'Contact'),
(6, 'FAQ');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `contact`, `comment`, `date`) VALUES
(3, 'joe', 'joe@gmail.com', '090657934', 'You are the best dude i mean it you are the best', 'august,7 2020'),
(4, 'mathew', 'mathew@gmail.com', '29956865787', 'naija dentist is real what it', '');

-- --------------------------------------------------------

--
-- Table structure for table `creer_table`
--

CREATE TABLE `creer_table` (
  `career_id` int(11) NOT NULL,
  `marketing` varchar(250) NOT NULL,
  `vacancy` int(11) NOT NULL,
  `location` varchar(250) NOT NULL,
  `education` varchar(250) NOT NULL,
  `experiency` varchar(250) NOT NULL,
  `salary` varchar(250) NOT NULL,
  `canditate` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creer_table`
--

INSERT INTO `creer_table` (`career_id`, `marketing`, `vacancy`, `location`, `education`, `experiency`, `salary`, `canditate`) VALUES
(1, 'marketing', 2, '\r\nBenin', '\r\nAny degree', '2 years', 'Best in the industry', 'male'),
(2, 'marketing', 2, 'oro', 'Any degree', '1 years', 'Best in the industry', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `faq_content` varchar(250) NOT NULL,
  `faq_text` varchar(500) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `faq_content`, `faq_text`, `date`) VALUES
(1, 'HOW TO CONTACT ADMINS', 'rem ipsum dolor sit amet consectetur adipisicing elit. Eius ratione nisi facilis, maiores necessitat rem ipsum dolor sit amet consectetur adipisicing elit. Eius ratione nisi facilis, maiores necessitat', 'September, 04 2020'),
(17, 'how to require for assistant', 'rem ipsum dolor sit amet consectetur adipisicing elit. Eius ratione nisi facilis, maiores necessitat\r\n  rem ipsum dolor sit amet consectetur adipisicing elit. Eius ratione nisi facilis, maiores necessitat.', 'September, 04 2020'),
(22, 'PAYMENT DETAILS', '	\r\nrem ipsum dolor sit amet consectetur adipisicing ...\r\n', 'September, 16 2020');

-- --------------------------------------------------------

--
-- Table structure for table `faq_message`
--

CREATE TABLE `faq_message` (
  `faq_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq_message`
--

INSERT INTO `faq_message` (`faq_id`, `name`, `message`, `date`) VALUES
(1, 'promise', 'Php is  agreate program to code on ', 'August, 28 2020'),
(38, 'maria', 'how can i login with the user form', 'September, 15 2020'),
(39, 'joshua', 'how can i send mail to with book naija dentist', 'September, 15 2020'),
(40, 'promiseukachukwu', 'how dow naija dentist work', 'September, 15 2020'),
(41, 'promise', 'hjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjg', 'September, 25 2020');

-- --------------------------------------------------------

--
-- Table structure for table `faq_on_off`
--

CREATE TABLE `faq_on_off` (
  `faq_on_off_id` int(11) NOT NULL,
  `faq_name` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq_on_off`
--

INSERT INTO `faq_on_off` (`faq_on_off_id`, `faq_name`) VALUES
(0, 'off');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `feedback` varchar(250) NOT NULL,
  `date_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `feedback`, `date_time`) VALUES
(3, 'Sean', 'I am  so happy for the threat and the advice i got from Dr promise?', 'September\' 09 20 03:05:43pm'),
(19, 'promiseukachukwu', 'Thise book My doc is the so far', 'September\' 09 20 03:20:18pm'),
(23, 'joshua', 'Thank\'s for naija dentist  i have a great, immediate attention', 'September\' 09 20 10:41:14pm'),
(37, 'mathew', 'I have a lovely moment with naijadentist', 'September\' 09 20 06:25:56pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(2500) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_roll` varchar(50) NOT NULL,
  `sex` char(3) DEFAULT NULL,
  `date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `patient_id`, `fname`, `lname`, `contact`, `email`, `address`, `password`, `user_roll`, `sex`, `date`) VALUES
(33, 10015, 'maria', 'mary', '29956865787', 'maria@gmail.com', '<p>JOHSAT Communication LTD 15a oremeji street inside computer village ikeja Lagos beside Polaris Bank itel plaz</p>', 'm1234567', 'substriber', 'F', 'September, 16 2020'),
(34, 10018, 'marc', 'ole', '80650155104', 'marc@gmail.com', '44 Amaognna Road', 'm1234567', 'subscriber', 'M', 'September, 16 2020'),
(45, 12385, 'ukachukwu', 'prromisee', '55555676787898', 'pronco7@outlook.com', '44 Amaogona Road Aba', '12345678', 'subscriber', 'M', 'October, 04 2020'),
(47, 15000, 'joy', 'jane', '29956865787', 'joy@gmail.com', '<p>No 7 joy Raod</p>', '123456789', '', 'F', 'October, 04 2020');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(11) NOT NULL,
  `vendor_id2` int(11) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `sex` char(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `location` text NOT NULL,
  `vendor_roll` varchar(50) NOT NULL,
  `created_at` text DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `vendor_id2`, `type`, `fname`, `lname`, `contact`, `sex`, `email`, `password`, `location`, `vendor_roll`, `created_at`, `updated_at`) VALUES
(27, 123, 'bones', 'marc', 'lore', '8065015510', 'M', 'marc@gmail.com', 'm1234567', 'esan west', 'vendor', 'September, 03 2020', '0000-00-00 00:00:00'),
(40, 10015, 'bones', 'ukachukwu', 'promise', '299568657810', 'M', 'pronco7@outlook.com', '12345679', 'ikpoba okha', 'vendor', 'September, 14 2020', '0000-00-00 00:00:00'),
(44, 1236, 'Cardiology', 'joshua', 'josh', '80650155104', 'M', 'joshua@gmail.com', 'j1234567', 'owan west', 'vendor', 'September, 15 2020', '0000-00-00 00:00:00'),
(45, 112, 'bones', 'linda', 'lee', '29956865787', 'F', 'linda@gmail.com', 'l1234567', 'irrua', 'vendor', 'September, 15 2020', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `category_menu_bar`
--
ALTER TABLE `category_menu_bar`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `creer_table`
--
ALTER TABLE `creer_table`
  ADD PRIMARY KEY (`career_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `faq_message`
--
ALTER TABLE `faq_message`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `faq_on_off`
--
ALTER TABLE `faq_on_off`
  ADD PRIMARY KEY (`faq_on_off_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `category_menu_bar`
--
ALTER TABLE `category_menu_bar`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `creer_table`
--
ALTER TABLE `creer_table`
  MODIFY `career_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `faq_message`
--
ALTER TABLE `faq_message`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `faq_on_off`
--
ALTER TABLE `faq_on_off`
  MODIFY `faq_on_off_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
