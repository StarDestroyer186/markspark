-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2024 at 07:47 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mordorintelligence`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '$2a$10$d9c9163673d4a34db8f48eVtXcqbl7GHYwjBXREsVOfJFEsIYCU0u');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_report_categories`
--

CREATE TABLE `tbl_report_categories` (
  `report_category_id` int(11) NOT NULL,
  `report_category_name` varchar(300) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_report_categories`
--

INSERT INTO `tbl_report_categories` (`report_category_id`, `report_category_name`, `status`, `created`, `modified`) VALUES
(1, 'Aerospace and Defense', 'Active', '2024-08-23 13:58:04', '2024-08-23 13:58:04'),
(2, 'Agriculture', 'Active', '2024-08-23 13:58:04', '2024-08-23 13:58:04'),
(3, 'Automotive and Transportation', 'Active', '2024-08-23 13:58:39', '2024-08-23 13:58:39'),
(5, 'Consumer Goods', 'Active', '2024-08-23 14:14:19', '2024-08-26 15:12:52'),
(8, 'Chemicals and Materials', 'Active', '2024-08-26 15:12:37', '2024-08-26 15:12:37'),
(9, 'Energy and Power', 'Active', '2024-08-26 15:13:11', '2024-08-26 15:13:11'),
(10, 'Food and Beverage', 'Active', '2024-08-26 15:13:31', '2024-08-26 15:13:31'),
(11, 'Healthcare and Pharmaceuticals', 'Active', '2024-08-26 15:13:45', '2024-08-26 15:13:45'),
(12, 'ICT', 'Active', '2024-08-26 15:13:58', '2024-08-26 15:13:58'),
(13, 'Machinery and Equipment', 'Active', '2024-08-26 15:14:15', '2024-08-26 15:14:15'),
(14, 'Medical Devices', 'Active', '2024-08-26 15:14:28', '2024-08-26 15:14:28'),
(15, 'Semiconductors and Electronics', 'Active', '2024-08-26 15:14:43', '2024-08-26 15:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_report_category_details`
--

CREATE TABLE `tbl_report_category_details` (
  `report_category_detail_id` int(11) NOT NULL,
  `report_category_list_id` int(11) NOT NULL,
  `report_category_detail_title` text NOT NULL,
  `report_category_detail_description` longtext NOT NULL,
  `report_category_detail_download` varchar(300) NOT NULL,
  `report_category_detail_image` varchar(300) NOT NULL,
  `report_category_detail_download_txt` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_report_category_details`
--

INSERT INTO `tbl_report_category_details` (`report_category_detail_id`, `report_category_list_id`, `report_category_detail_title`, `report_category_detail_description`, `report_category_detail_download`, `report_category_detail_image`, `report_category_detail_download_txt`, `status`, `created`, `modified`) VALUES
(1, 1, 'Military Aircraft Digital Glass Cockpit Systems Market Analysis', 'The military aircraft industry has been relatively less impacted by the COVID-19 pandemic than the commercial aircraft industry. However, the pandemic caused supply chain bottlenecks due to lockdowns and caused OEMs to impose production cuts, resulting in a drop in military aircraft deliveries in 2020. Nevertheless, the situation improved in 2022 for several military aircraft manufacturers worldwide as supply chain issues were mitigated.', 'Download PDF', '106756155.jpg', 'Understand The Key Trends Shaping This Market ', 'Active', '2024-08-24 11:52:20', '2024-08-24 12:07:55'),
(2, 2, 'Asia-Pacific Inflight Entertainment and Connectivity Market Analysis ', 'The Asia-Pacific Inflight Entertainment and Connectivity Market size is estimated at USD 216.58 million in 2024, and is expected to reach USD 382.03 million by 2029, growing at a CAGR of 12.02% during the forecast period (2024-2029).', 'Download sample', '11598808.jpg', 'Understand The Key Trends Shaping This Market', 'Active', '2024-08-24 11:52:20', '2024-08-27 09:56:56'),
(4, 4, 'Connected Vehicle And Parking Space Industry Market Analysis', 'The connected vehicles and packing space market is valued at USD 53.01 billion in the current year and is expected to grow to USD 145.55 billion by the next five years, registering a CAGR of 17.34% in terms of revenue during the forecast period.\r\nOver the long term, the development of connected vehicles is taking place. It is expected to be a huge technological advancement that will allow vehicles to communicate with their surroundings. It will further fuel the trend from car ownership to more mobility-related services. In urban areas, particularly, the decline in the number of vehicles is expected to reduce dramatically. According to the ADAC automobile association in Germany, the adoption of a private car to decline by close to 30% by 2040.', 'Download sample', '1724733080.jpg', 'Understand The Key Trends Shaping This Market', 'Active', '2024-08-24 12:48:45', '2024-08-27 10:01:20'),
(5, 3, 'Wheat Market Analysis', 'The Wheat Market size is estimated at USD 161.12 billion in 2023, and is expected to reach USD 208.69 billion by 2028, growing at a CAGR of 5.31% during the forecast period (2023-2028). ', 'Download sample', '1724657080.jpg', '\r\n Understand The Key Trends Shaping This Market', 'Active', '2024-08-26 12:54:40', '2024-08-27 09:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_report_category_list`
--

CREATE TABLE `tbl_report_category_list` (
  `report_category_list_id` int(11) NOT NULL,
  `report_category_id` int(11) NOT NULL,
  `report_category_list_name` varchar(300) NOT NULL,
  `report_category_list_download` varchar(300) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_report_category_list`
--

INSERT INTO `tbl_report_category_list` (`report_category_list_id`, `report_category_id`, `report_category_list_name`, `report_category_list_download`, `status`, `created`, `modified`) VALUES
(1, 1, 'Military Aircraft Digital Glass Cockpit Systems Industry', 'Download PDF', 'Active', '2024-08-24 09:19:27', '2024-08-24 09:19:27'),
(2, 1, 'Asia-Pacific Inflight Entertainment and Connectivity Industry', 'Download PDF', 'Active', '2024-08-24 09:19:27', '2024-08-24 09:19:27'),
(3, 2, 'Wheat Value Chain Analysis', 'Download PDF', 'Active', '2024-08-27 09:52:26', '2024-08-27 09:52:26'),
(4, 3, 'Connected Vehicle And Parking Space Industry', 'Download PDF', 'Active', '2024-08-27 09:53:36', '2024-08-27 09:53:36'),
(7, 2, 'South America Quinoa Seed Market', 'Download PDF', 'Active', '2024-08-27 09:52:56', '2024-08-27 09:52:56'),
(8, 3, 'South America Electric Bus Battery Pack Market', 'Download PDF', 'Active', '2024-08-27 09:53:57', '2024-08-27 09:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sample_report_info`
--

CREATE TABLE `tbl_sample_report_info` (
  `sample_report_info_id` int(11) NOT NULL,
  `full_name` varchar(300) NOT NULL,
  `bussiness_emailid` varchar(300) NOT NULL,
  `contact_no` varchar(300) NOT NULL,
  `job_title` varchar(300) NOT NULL,
  `company_name` varchar(300) NOT NULL,
  `special_requirement` varchar(300) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sample_report_info`
--

INSERT INTO `tbl_sample_report_info` (`sample_report_info_id`, `full_name`, `bussiness_emailid`, `contact_no`, `job_title`, `company_name`, `special_requirement`, `created`, `modified`) VALUES
(1, 'Anup P. Chaudhari', 'anup@gmail.com', '7498927501', 'Sample Report Job Title here', 'Sample Report Company Name here', 'sample Report Special Requirement here', '2024-08-26 10:08:57', '2024-08-26 10:08:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_report_categories`
--
ALTER TABLE `tbl_report_categories`
  ADD PRIMARY KEY (`report_category_id`);

--
-- Indexes for table `tbl_report_category_details`
--
ALTER TABLE `tbl_report_category_details`
  ADD PRIMARY KEY (`report_category_detail_id`);

--
-- Indexes for table `tbl_report_category_list`
--
ALTER TABLE `tbl_report_category_list`
  ADD PRIMARY KEY (`report_category_list_id`);

--
-- Indexes for table `tbl_sample_report_info`
--
ALTER TABLE `tbl_sample_report_info`
  ADD PRIMARY KEY (`sample_report_info_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_report_categories`
--
ALTER TABLE `tbl_report_categories`
  MODIFY `report_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_report_category_details`
--
ALTER TABLE `tbl_report_category_details`
  MODIFY `report_category_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_report_category_list`
--
ALTER TABLE `tbl_report_category_list`
  MODIFY `report_category_list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_sample_report_info`
--
ALTER TABLE `tbl_sample_report_info`
  MODIFY `sample_report_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
