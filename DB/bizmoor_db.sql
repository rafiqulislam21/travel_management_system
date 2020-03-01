-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 07:11 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bizmoor_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `userType`, `email`, `email_verified_at`, `password`, `gender`, `phone`, `address`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shohel shama', 'user', 'shohel@gmail.com', NULL, '$2y$10$cVQ3WisM.wwlfIDUZH1K7ekoW7WTb8j7tdCDhBPBEVmnYHayqi1t.', 'male', '932874982374', 'Bashundhara, Dhaka', '1', NULL, '2019-11-05 23:35:04', '2019-11-06 05:53:48'),
(2, 'Rajib', 'user', 'rajib123@gmail.com', NULL, '$2y$10$fsGWmXcE4NZt.Ok5IoUV2eumkFp5emzHxlnbLcnOX6Tlu/mn6a/GC', 'male', '128938929', 'Bashundhara, Dhaka', '1', NULL, '2019-11-05 23:37:16', '2019-11-05 23:54:23'),
(3, 'shoshama 3', 'employee', 'shohel3@gmail.com', NULL, '$2y$10$MUl.C4NJ02tfeau.59kpDeAFcToAbOT1g3VNGJ1R./NSiaF7gESYy', 'male', '01928655892', 'Bashundhara, Dhaka', '1', NULL, '2019-11-06 05:40:37', '2019-11-05 23:40:57');

-- --------------------------------------------------------

--
-- Table structure for table `_contact`
--

CREATE TABLE `_contact` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `messageTime` datetime NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_contact`
--

INSERT INTO `_contact` (`id`, `name`, `email`, `phone`, `message`, `messageTime`, `status`) VALUES
(1, 'Mr. B', 'bi@gmail.com', '12345678901', 'message', '2019-10-10 04:07:00', 1),
(2, 'bijoy', 'b@gmail.com', '12345678904', 'test message.', '2019-10-28 13:24:01', 1),
(4, 'Rafiqul islam', 'rafiq19@gmail.com', '01928374564', 'Urgent booking needed.', '2019-11-05 17:19:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `_enquery`
--

CREATE TABLE `_enquery` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `package_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `children` varchar(255) NOT NULL,
  `adult` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `post_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_enquery`
--

INSERT INTO `_enquery` (`id`, `user_id`, `package_id`, `name`, `gender`, `phone`, `email`, `day`, `children`, `adult`, `message`, `post_date`) VALUES
(1, 1, 1, 'shohel shama', 'male', '1234567891', 'shohel@gmail.com', '10', '1', '2', 'we will go.', '2019-11-03 10:25:56'),
(2, 1, 1, 'shohel shama', 'male', '932874982374', 'shohel@gmail.com', '10', '1', '2', 'nice', '2019-11-03 12:13:50'),
(3, 1, 3, 'shohel shama', 'male', '1234567891', 'admin@gmail.com', '1', '4', '4', 'yaaaaaaaaa', '2019-11-03 13:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `_invoice`
--

CREATE TABLE `_invoice` (
  `id` int(50) NOT NULL,
  `invoice_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `package_id` int(255) NOT NULL,
  `code` int(255) NOT NULL,
  `total_amount` int(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `due_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_invoice`
--

INSERT INTO `_invoice` (`id`, `invoice_id`, `user_id`, `package_id`, `code`, `total_amount`, `created_date`, `due_date`) VALUES
(1, 6082, 1, 1, 36116, 50000, '2019-11-03 12:13:50', '2019-11-10 12:13:50'),
(2, 9058, 1, 3, 27964, 5000, '2019-11-03 13:26:36', '2019-11-10 13:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `_packages`
--

CREATE TABLE `_packages` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `catagory` varchar(255) NOT NULL,
  `subcatagory` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_packages`
--

INSERT INTO `_packages` (`id`, `name`, `image1`, `image2`, `image3`, `catagory`, `subcatagory`, `destination`, `price`, `details`, `status`) VALUES
(1, 'SINGAPORE, VIETNAM & MALAYSIA TOUR PACKAGE FROM BANGLADESH', '/img/The-Famous-Places-Of-Sylhet-To-Visit.jpg', '/img/singapore.jpg', '/img/singapore.jpg', 'world tour', 'Singapore', 'Singapore', '50000', 'Singapore, an island city-state off southern Malaysia, is a global financial center with a tropical climate and multicultural population. Its colonial core centers on the Padang, a cricket field since the 1830s and now flanked by grand buildings such as City Hall, with its 18 Corinthian columns. In Singapore\'s circa-1820 Chinatown stands the red-and-gold Buddha Tooth Relic Temple, said to house one of Buddha\'s teeth. here we go.', 1),
(2, 'BANGKOK, VIETNAM, CAMBODIA & MALAYSIA TOUR PACKAGE', '/img/bankok.jpg', '/img/bankok2.jpg', '/img/bankok3.jpg', 'world tour', 'Bangkok, Vietnam, Cambodia & Malaysia', 'Bangkok, Vietnam, Cambodia & Malaysia', '60000', 'Bangkok, Thailand’s capital, is a large city known for ornate shrines and vibrant street life. The boat-filled Chao Phraya River feeds its network of canals, flowing past the Rattanakosin royal district, home to opulent Grand Palace and its sacred Wat Phra Kaew Temple. Nearby is Wat Pho Temple with an enormous reclining Buddha and, on the opposite shore, Wat Arun Temple with its steep steps and Khmer-style spire.', 1),
(3, 'BANDARBON, SHYLLET & COX\'S BAZER TOUR PACKAGE FROM DHAKA', '/img/sylhet_civil.jpg', '/img/The-Famous-Places-Of-Sylhet-To-Visit.jpg', '/img/bisnakandi.jpg', 'Bangladesh tour', 'Bangladesh', 'Bangladesh', '5000', 'Bangladesh, to the east of India on the Bay of Bengal, is a South Asian country marked by lush greenery and many waterways. Its Padma (Ganges), Meghna and Jamuna rivers create fertile plains, and travel by boat is common. On the southern coast, the Sundarbans, an enormous mangrove forest shared with Eastern India, is home to the royal Bengal tiger.', 1),
(7, 'DELHI, JOYPUR & AGRA TOUR PACKAGE FROM BANGLADESH', '/img/delhi.jpg', '/img/Delhi-Agra-Jaipur-Tour-Package.jpg', '/img/Delhi-Agra-Jaipur-Tour-Package.jpg', 'World tour', 'India tour', 'India', '29,900', 'Day – 1. 14 June 2018 Arrival Delhi- On your arrival at Delhi Airport Pick up you will be meet our representative and get transfer to hotel Check In at Hotel and Overnight stay at hotel Delhi.\r\n\r\nDay – 2. 15 June 2018 Delhi to Agra- After Breakfast in the check out at hotel Delhi and proceed towards Agra. On arrival Agra Check In at Hotel after freshup Visit Taj Mahal and Agra Fort and Overnight stay at the Hotel Agra.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `_visa`
--

CREATE TABLE `_visa` (
  `id` int(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `visa_type` varchar(50) NOT NULL,
  `total_cost` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_visa`
--

INSERT INTO `_visa` (`id`, `country`, `visa_type`, `total_cost`) VALUES
(1, 'China 6 Month Double entry (Previously visited Chi', 'Tourist visa	', '5790'),
(2, 'DUBAI', 'Tourist visa	', '10900');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `_contact`
--
ALTER TABLE `_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_enquery`
--
ALTER TABLE `_enquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_invoice`
--
ALTER TABLE `_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_packages`
--
ALTER TABLE `_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_visa`
--
ALTER TABLE `_visa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `_contact`
--
ALTER TABLE `_contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `_enquery`
--
ALTER TABLE `_enquery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `_invoice`
--
ALTER TABLE `_invoice`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `_packages`
--
ALTER TABLE `_packages`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `_visa`
--
ALTER TABLE `_visa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
