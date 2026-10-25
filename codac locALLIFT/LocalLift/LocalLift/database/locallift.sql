-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2026 at 03:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locallift`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` int(11) NOT NULL,
  `user_type` varchar(30) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `activity` text DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

-- Admin seed credentials removed for safe public sharing. Create your own admin account locally.


-- --------------------------------------------------------

--
-- Table structure for table `bookmarks`
--

CREATE TABLE `bookmarks` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `business_hours`
--

CREATE TABLE `business_hours` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `day_name` varchar(20) NOT NULL,
  `opening_time` time DEFAULT NULL,
  `closing_time` time DEFAULT NULL,
  `is_closed` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_icon` varchar(255) DEFAULT NULL,
  `category_image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_icon`, `category_image`, `description`, `status`, `created_at`) VALUES
(1, 'Medical', NULL, NULL, NULL, 'Active', '2026-06-28 21:52:05'),
(2, 'Restaurant', NULL, NULL, NULL, 'Active', '2026-06-28 21:52:05'),
(3, 'Hotel', NULL, NULL, NULL, 'Active', '2026-06-28 21:52:05'),
(4, 'Gym', NULL, NULL, NULL, 'Active', '2026-06-28 21:52:05'),
(5, 'Salon', NULL, NULL, NULL, 'Active', '2026-06-28 21:52:05'),
(6, 'Electronics', NULL, NULL, NULL, 'Active', '2026-06-28 21:52:05'),
(7, 'Education', NULL, NULL, NULL, 'Active', '2026-06-28 21:52:05'),
(8, 'Fashion', NULL, NULL, NULL, 'Active', '2026-06-28 21:52:05'),
(9, 'Automobile', NULL, NULL, NULL, 'Active', '2026-06-28 21:52:05'),
(10, 'Grocery', NULL, NULL, NULL, 'Active', '2026-06-28 21:52:05'),
(11, 'Bakery', NULL, NULL, NULL, 'Active', '2026-06-29 19:43:39'),
(12, 'Pharmacy', NULL, NULL, NULL, 'Active', '2026-06-29 19:43:39'),
(13, 'Hospital', NULL, NULL, NULL, 'Active', '2026-06-29 19:43:39'),
(14, 'Clinic', NULL, NULL, NULL, 'Active', '2026-06-29 19:43:39'),
(15, 'Furniture', NULL, NULL, NULL, 'Active', '2026-06-29 19:43:39'),
(16, 'Hardware', NULL, NULL, NULL, 'Active', '2026-06-29 19:43:39'),
(17, 'Computer', NULL, NULL, NULL, 'Active', '2026-06-29 19:43:39'),
(18, 'Mobile Shop', NULL, NULL, NULL, 'Active', '2026-06-29 19:43:39'),
(19, 'Coaching', NULL, NULL, NULL, 'Active', '2026-06-29 19:43:39'),
(20, 'Other', NULL, NULL, NULL, 'Active', '2026-06-29 19:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `profile_photo` varchar(255) DEFAULT 'default.png',
  `city` varchar(100) DEFAULT NULL,
  `status` enum('Active','Blocked') DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_inquiries`
--

CREATE TABLE `customer_inquiries` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` enum('Pending','Replied','Closed') DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_type` enum('Admin','ShopOwner','Customer') DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text DEFAULT NULL,
  `offer_image` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` enum('Active','Expired') DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `review` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(100) DEFAULT NULL,
  `site_email` varchar(100) DEFAULT NULL,
  `site_mobile` varchar(20) DEFAULT NULL,
  `site_address` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_email`, `site_mobile`, `site_address`, `logo`, `favicon`) VALUES
(1, 'LocalLift', 'info@locallift.com', '+91 9999999999', 'Gaurella Pendra Marwahi, Chhattisgarh', 'logo.png', 'favicon.ico'),
(2, 'LocalLift', 'info@locallift.com', '+91 9999999999', 'Gaurella Pendra Marwahi, Chhattisgarh', 'logo.png', 'favicon.ico');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `shop_name` varchar(150) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `shop_logo` varchar(255) DEFAULT 'default-logo.png',
  `shop_banner` varchar(255) DEFAULT 'default-banner.jpg',
  `gallery_image` varchar(255) DEFAULT NULL,
  `google_map` varchar(500) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `whatsapp` varchar(20) DEFAULT NULL,
  `alternate_mobile` varchar(15) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT 'Chhattisgarh',
  `pincode` varchar(10) DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL,
  `google_map_link` text DEFAULT NULL,
  `opening_time` time DEFAULT NULL,
  `closing_time` time DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT 0,
  `is_verified` tinyint(1) DEFAULT 0,
  `status` enum('Pending','Approved','Rejected') DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `owner_id`, `category_id`, `shop_name`, `owner_name`, `shop_logo`, `shop_banner`, `gallery_image`, `google_map`, `description`, `email`, `mobile`, `whatsapp`, `alternate_mobile`, `website`, `address`, `area`, `city`, `state`, `pincode`, `latitude`, `longitude`, `google_map_link`, `opening_time`, `closing_time`, `is_featured`, `is_verified`, `status`, `created_at`) VALUES
(2, 1, 10, 'Guru Kripa traders \r\n', 'Manish Manwani ', 'gktmain.jpg', 'gktcover.jpg', 'gktgallery.png', NULL, 'Guru Kripa Traders is a trusted neighborhood grocery store committed to providing high-quality groceries, daily essentials, and household products at affordable prices. We offer a wide range of products, including rice, flour, pulses, spices, edible oils, snacks, beverages, dairy items, personal care products, cleaning supplies, and more. Our goal is to deliver excellent customer service, genuine products, and a convenient shopping experience for every customer. We believe in quality, fair pricing, and building long-term relationships with our community.', 'manish@gmail.com', '9876543210', NULL, NULL, NULL, 'Near state bank of India \r\n[penda branch ]', 'Main Market near police station ', 'Pendra', 'Chhattisgarh', '495119', NULL, NULL, NULL, '09:30:00', '21:00:00', 1, 1, 'Approved', '2026-06-30 11:05:22'),
(3, 1, 4, 'Oxygen Gym - Fitness Center', 'Vikram Singh Thakur', 'o2logo.jpg', 'o2banner.jpg', 'o2gallery.jpg', 'https://maps.google.com/?q=Oxygen+Gym+Pendra+Road', 'Oxygen Gym is a modern fitness center offering weight loss, muscle building, strength training, cardio workouts, personal training, fitness assessment, body transformation programs, and expert trainer guidance in a clean and motivating environment.', 'tthakurvikram3@gmail.com', '7067567959', '7067567959', NULL, 'https://www.gpmbazaar.com/products/oxygen-gym-pendra-road', 'Pancham Colony, Near Semra', 'Semra', 'Pendra Road', 'Chhattisgarh', '495117', NULL, NULL, 'https://maps.google.com/?q=Oxygen+Gym+Pendra+Road', '06:00:00', '22:00:00', 1, 1, 'Approved', '2026-06-30 12:29:47');

-- --------------------------------------------------------

--
-- Table structure for table `shop_documents`
--

CREATE TABLE `shop_documents` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `aadhaar` varchar(255) DEFAULT NULL,
  `pan_card` varchar(255) DEFAULT NULL,
  `gst_number` varchar(50) DEFAULT NULL,
  `gst_certificate` varchar(255) DEFAULT NULL,
  `shop_license` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop_gallery`
--

CREATE TABLE `shop_gallery` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop_owners`
--

CREATE TABLE `shop_owners` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `profile_photo` varchar(255) DEFAULT 'default.png',
  `status` enum('Pending','Approved','Rejected') DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop_owners`
--

INSERT INTO `shop_owners` (`id`, `full_name`, `email`, `mobile`, `password`, `profile_photo`, `status`, `created_at`) VALUES
(1, 'Manish', 'manish@gmail.com', '9876543210', '123456', 'default.png', 'Approved', '2026-06-30 11:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `shop_videos`
--

CREATE TABLE `shop_videos` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `video_title` varchar(150) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_hours`
--
ALTER TABLE `business_hours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `customer_inquiries`
--
ALTER TABLE `customer_inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_shop_owner` (`owner_id`),
  ADD KEY `fk_shop_category` (`category_id`);

--
-- Indexes for table `shop_documents`
--
ALTER TABLE `shop_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `shop_gallery`
--
ALTER TABLE `shop_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `shop_owners`
--
ALTER TABLE `shop_owners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `shop_videos`
--
ALTER TABLE `shop_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bookmarks`
--
ALTER TABLE `bookmarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business_hours`
--
ALTER TABLE `business_hours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_inquiries`
--
ALTER TABLE `customer_inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shop_documents`
--
ALTER TABLE `shop_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop_gallery`
--
ALTER TABLE `shop_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop_owners`
--
ALTER TABLE `shop_owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shop_videos`
--
ALTER TABLE `shop_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `business_hours`
--
ALTER TABLE `business_hours`
  ADD CONSTRAINT `business_hours_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shops`
--
ALTER TABLE `shops`
  ADD CONSTRAINT `fk_shop_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_shop_owner` FOREIGN KEY (`owner_id`) REFERENCES `shop_owners` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shop_documents`
--
ALTER TABLE `shop_documents`
  ADD CONSTRAINT `shop_documents_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shop_gallery`
--
ALTER TABLE `shop_gallery`
  ADD CONSTRAINT `shop_gallery_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shop_videos`
--
ALTER TABLE `shop_videos`
  ADD CONSTRAINT `shop_videos_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
