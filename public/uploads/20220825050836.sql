-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 07:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `name`, `discount`, `status`) VALUES
(1, '2021-02-28 04:12:11', '2021-02-28 04:12:11', 'Men\'s Shirt', '0%', 'active'),
(2, '2021-02-28 04:12:22', '2021-02-28 04:12:22', 'Men\'s Shoes', '0%', 'active'),
(3, '2021-02-28 04:12:40', '2021-02-28 04:12:40', 'Women Dress', '0%', 'active'),
(4, '2021-02-28 04:12:52', '2021-02-28 04:12:52', 'Women Shoes', '0%', 'active'),
(5, '2021-02-28 04:13:02', '2021-02-28 04:13:02', 'Kid\'s Dress', '0%', 'active'),
(6, '2021-02-28 04:13:25', '2021-02-28 04:13:25', 'Kid\'s toy', '0%', 'active'),
(7, '2021-02-28 04:13:44', '2021-02-28 04:13:44', 'Accessories', '0%', 'active'),
(8, '2021-02-28 04:13:52', '2021-02-28 04:13:52', 'Essentials', '0%', 'active'),
(9, '2021-02-28 04:14:24', '2021-02-28 04:14:24', 'Mobile', '0%', 'active'),
(10, '2021-02-28 04:17:09', '2021-02-28 04:17:09', 'Men\'s Dress', '0%', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `name`, `code`, `type`, `value`, `description`, `created_at`, `updated_at`) VALUES
(1, 'february offer', '21FEB', 'disccount', '-25%', 'February offer', '2021-02-28 08:45:56', '2021-02-28 08:45:56');

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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(33, '2014_10_12_000000_create_users_table', 1),
(34, '2014_10_12_100000_create_password_resets_table', 1),
(35, '2019_08_19_000000_create_failed_jobs_table', 1),
(36, '2021_02_22_162343_create_categories_table', 1),
(37, '2021_02_22_163006_create_products_table', 1),
(38, '2021_02_25_102146_create_orders_table', 1),
(39, '2021_02_26_215443_create_coupons_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','processing','completed','decline') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `grand_total` double(8,2) NOT NULL,
  `item_count` int(11) NOT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT 0,
  `payment_method` enum('cash_on_delivery','paypal','card') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cash_on_delivery',
  `shipping_fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `user_id`, `status`, `grand_total`, `item_count`, `is_paid`, `payment_method`, `shipping_fullname`, `shipping_address`, `shipping_city`, `shipping_state`, `shipping_zipcode`, `shipping_phone`, `notes`, `billing_fullname`, `billing_address`, `billing_city`, `billing_state`, `billing_zipcode`, `billing_phone`, `created_at`, `updated_at`) VALUES
(3, 'EDokan-6224efc7c63dd', 8, 'completed', 555.00, 1, 0, 'cash_on_delivery', 'Lionel Espinoza', 'Sunt perferendis qui', 'Est ut temporibus de', 'Temporibus est volu', '36668', '+1 (956) 866-5501', NULL, 'Lionel Espinoza', 'Sunt perferendis qui', 'Est ut temporibus de', 'Temporibus est volu', '36668', '+1 (956) 866-5501', '2022-03-06 11:30:47', '2022-08-15 13:01:35'),
(4, 'EDokan-62e8f1c3aca4a', 9, 'pending', 555.00, 1, 0, 'cash_on_delivery', 'rubel', 'ashulia', 'ddhak', 'dhaka', '23', '01767474729', NULL, 'rubel', 'ashulia', 'ddhak', 'dhaka', '23', '01767474729', '2022-08-02 03:43:31', '2022-08-02 03:43:31'),
(5, 'RedStore-62fcdc869707c', 9, 'pending', 1110.00, 1, 0, 'cash_on_delivery', 'rubel', 'ashulia', 'ddhak', 'dhaka', '23', '01767474729', NULL, 'rubel', 'ashulia', 'ddhak', 'dhaka', '23', '01767474729', '2022-08-17 06:18:14', '2022-08-17 06:18:14'),
(6, 'RedStore-6303b24c1bcc1', 9, 'pending', 575.00, 1, 0, 'cash_on_delivery', 'rubel', 'ashulia', 'ddhak', 'dhaka', '54', '01767474729', NULL, 'rubel', 'ashulia', 'ddhak', 'dhaka', '54', '01767474729', '2022-08-22 10:43:56', '2022-08-22 10:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 10000.00, 1, NULL, NULL),
(2, 1, 1, 10000.00, 1, NULL, NULL),
(3, 1, 2, 10000.00, 1, NULL, NULL),
(4, 2, 1, 10000.00, 1, NULL, NULL),
(5, 3, 1, 10000.00, 1, NULL, NULL),
(6, 4, 1, 10000.00, 1, NULL, NULL),
(7, 5, 1, 10000.00, 1, NULL, NULL),
(8, 6, 3, 500.00, 2, NULL, NULL),
(9, 6, 1, 10000.00, 1, NULL, NULL),
(10, 7, 1, 10000.00, 1, NULL, NULL),
(11, 8, 3, 500.00, 1, NULL, NULL),
(12, 1, 12, 500.00, 5, NULL, NULL),
(13, 1, 32, 555.00, 1, NULL, NULL),
(14, 1, 30, 555.00, 4, NULL, NULL),
(15, 2, 31, 555.00, 2, NULL, NULL),
(16, 2, 30, 555.00, 1, NULL, NULL),
(17, 2, 29, 555.00, 4, NULL, NULL),
(18, 3, 30, 555.00, 1, NULL, NULL),
(19, 4, 30, 555.00, 1, NULL, NULL),
(20, 5, 34, 555.00, 2, NULL, NULL),
(21, 6, 30, 575.00, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `for_whom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `nview` int(11) NOT NULL,
  `nbuy` int(11) NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `category_id`, `name`, `price`, `description`, `for_whom`, `stock`, `nview`, `nbuy`, `product_image`) VALUES
(1, '2021-02-28 07:49:51', '2021-02-28 07:49:51', 2, 'Men\'s Shoes', '480.00', 'Very good product.', 'man', 5, 0, 0, '20210228010251.1.PNG'),
(30, '2021-02-28 07:50:09', '2021-02-28 07:50:09', 2, 'Men\'s Shoes', '575.00', 'Very good product.', 'man', 77, 0, 0, '20210228010209.2.PNG'),
(31, '2021-02-28 07:50:25', '2021-02-28 07:50:25', 2, 'Men\'s Shoes', '690.00', 'Very good product.', 'man', 88, 0, 0, '20210228010225.3.PNG'),
(32, '2021-02-28 07:50:42', '2021-02-28 07:50:42', 2, 'Men\'s Shoes', '890.00', 'Very good product.', 'man', 9, 0, 0, '20210228010242.4.PNG'),
(33, '2021-02-28 08:13:03', '2021-02-28 08:13:03', 3, 'Women\'s dress', '555.00', 'Very Good Product.', 'women', 99, 0, 0, '20210228020202.2.PNG'),
(34, '2021-02-28 08:13:20', '2021-02-28 08:13:20', 3, 'Women\'s dress', '555.00', 'Very Good Product.', 'women', 55, 0, 0, '20210228020220.4.PNG'),
(35, '2021-02-28 08:13:38', '2022-08-06 13:32:01', 1, 'Women\'s dress', '490.00', 'Very Good Product.', 'women', 5, 0, 0, '20210228020238.Capture.PNG'),
(36, '2021-02-28 08:15:15', '2021-02-28 08:15:15', 5, 'Kid\'s Dress', '555.00', 'Very Good Product.', 'kid', 55, 0, 0, '20210228020215.1.jpg'),
(37, '2021-02-28 08:15:30', '2021-02-28 08:15:30', 5, 'Kid\'s Dress', '555.00', 'Very Good Product.', 'kid', 55, 0, 0, '20210228020230.2.jpg'),
(38, '2021-02-28 08:15:48', '2021-02-28 08:15:48', 5, 'Kid\'s Dress', '555.00', 'Very Good Product.', 'kid', 55, 0, 0, '20210228020248.3.jpg'),
(39, '2021-02-28 08:16:08', '2021-02-28 08:16:08', 5, 'Kid\'s Dress', '555.00', 'Very Good Product.', 'kid', 4, 0, 0, '20210228020208.5.jpg'),
(40, '2021-02-28 08:16:53', '2021-02-28 08:16:53', 5, 'Kid\'s Dress', '555.00', 'Very Good Product.', 'kid', 4, 0, 0, '20210228020253.7.jpg'),
(41, '2021-02-28 08:20:49', '2022-08-06 12:32:21', 1, 'Tea', '555.00', 'Very Good Product.', 'man', 560, 0, 0, '20210228020249.download (1).jpg'),
(42, '2021-02-28 08:21:07', '2022-08-06 13:32:27', 1, 'Tea', '780.00', 'best quality .', 'accessories', 44, 0, 0, '20210228020207.download (2).jpg'),
(43, '2021-02-28 08:21:27', '2021-02-28 08:21:27', 7, 'Tea', '55.00', 'Very Good Product.', 'accessories', 55, 0, 0, '20210228020227.download (3).jpg'),
(45, '2021-02-28 08:22:07', '2021-02-28 08:22:07', 7, 'Tea', '555.00', 'Very Good Product.', 'accessories', 55, 0, 0, '20210228020207.download.jpg'),
(47, '2021-02-28 08:23:50', '2021-02-28 08:23:50', 3, 'Women\'s dress', '555.00', 'Very Good Product.', 'women', 5, 0, 0, '20210228020250.4.PNG'),
(48, '2022-08-06 12:37:49', '2022-08-06 13:25:09', 2, 'Shoes', '700.00', 'very good product. best quality .', 'man', 30, 0, 0, '20220806060849.shoe-1a.jpg'),
(49, '2022-08-06 13:34:43', '2022-08-06 13:34:43', 7, 'Headphone', '680.00', 'best Quality. for more info visit www', 'accessories', 34, 0, 0, '20220806070843.headphone1a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Md Rubel  ', 'rubelrana327@gmail.com', NULL, '$2y$10$HETlDX/KXw3kQuQ.vbHt6eQWvCLol9ERkvFDhl3Tigu.W3hvf0V5u', 'admin', NULL, '2021-02-28 08:44:38', '2021-02-28 08:44:38'),
(7, 'Md. Tarek Aziz', 'azizt9973@gmail.com', NULL, '$2y$10$wg4Wx4ZLD56eP8s7gvsSKupkM5iPi82.kb9ZIVCpioeZ4Y7y8.9QO', 'admin', '5rIp8SBxcqUXkpK6NUaDYGSbsQJh0QhZwSoatdjl7fwHn7nBtAkUtwSSa704', '2021-09-16 01:04:00', '2021-09-16 01:04:00'),
(8, 'Garth Cannon', 'cunez@mailinator.com', NULL, '$2y$10$ImyfwOKqEGNYBgi6ctRI9e.xjg17UzArZKG1J/ZhMvFb/SVGb/r0e', 'customer', NULL, '2022-03-06 11:30:07', '2022-03-06 11:30:07'),
(9, 'rubel', 'rubel327rana@gmail.com', NULL, '$2y$10$O8FpoyXIrq0EzLkR8pqr0uYbAabda6mkkjK9SouWMCKFNeGsYSe6O', 'customer', 'BrcqJFgNcGOErWyOuPhvA1AxMQfffpvnkT0I9vtRBZ0M9cbPbxhxTpVuIcwW', '2022-08-01 04:53:20', '2022-08-01 04:53:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
