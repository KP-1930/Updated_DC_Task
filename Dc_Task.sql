-- phpMyAdmin SQL Dump
-- version 5.1.0-rc1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 05, 2021 at 05:47 PM
-- Server version: 5.7.33-0ubuntu0.18.04.1
-- PHP Version: 7.3.27-4+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Dc_Task`
--

-- --------------------------------------------------------

--
-- Table structure for table `carcategory`
--

CREATE TABLE `carcategory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `regno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carmodel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carcategory`
--

INSERT INTO `carcategory` (`id`, `regno`, `carmodel`, `price`, `created_at`, `updated_at`) VALUES
(6, 'CK0004', 'Kia Seltos,Hyundai Creta', 500.00, '2021-02-28 22:16:07', '2021-02-28 22:16:07'),
(8, 'CK0007', 'Kia Seltos,Hyundai Creta', 780.00, '2021-02-28 22:18:08', '2021-02-28 22:18:08'),
(14, 'CK0009', 'Mahindra Thar,Hyundai i10', 410.00, '2021-02-28 22:31:34', '2021-02-28 22:31:34'),
(16, 'CK0010', 'Mahindra Thar,Kia Seltos,Hyundai i20', 550.00, '2021-02-28 22:33:13', '2021-02-28 22:33:13'),
(18, 'CK77777', 'Maruti Swift,Hyundai i20', 700.00, '2021-03-01 02:29:42', '2021-03-01 02:29:42'),
(20, 'CK11112121211', 'Kia Seltos,Hyundai Creta', 200.00, '2021-03-01 03:17:07', '2021-03-02 06:34:04'),
(21, 'CK2212210', 'Mahindra Thar,Hyundai i20', 854.00, '2021-03-01 03:18:44', '2021-03-01 03:18:44'),
(24, 'CK54445454545', 'Kia Seltos,Hyundai i10', 678.00, '2021-03-01 03:52:48', '2021-03-01 03:52:48'),
(27, 'CK786', 'Kia Seltos,Hyundai i20,Hyundai i10', 560.00, '2021-03-02 06:31:22', '2021-03-02 06:31:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `type`, `name`, `p_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Asia', 0, NULL, NULL),
(2, 1, 'Europe', 0, NULL, NULL),
(3, 2, 'India', 1, NULL, NULL),
(4, 2, 'sri-lanka', 1, NULL, NULL),
(5, 2, 'Australia', 2, NULL, NULL),
(6, 2, 'Germany', 2, NULL, NULL),
(7, 3, 'Gujarat', 3, NULL, NULL),
(8, 3, 'Rajsthan', 3, NULL, NULL),
(9, 3, 'Colombo', 4, NULL, NULL),
(10, 4, 'Ahmedabad', 7, NULL, NULL),
(11, 4, 'rajkot', 7, NULL, NULL),
(12, 4, 'jaipur', 8, NULL, NULL),
(13, 4, ' Kotte', 9, NULL, NULL),
(14, 5, 'meghaninagar', 10, NULL, NULL),
(15, 5, 'gota', 10, NULL, NULL),
(16, 5, 'Arya Nagar, Rajkot', 11, NULL, NULL),
(17, 5, 'Diwanpara, Rajkot', 11, NULL, NULL),
(18, 6, 'pin-380016', 14, NULL, NULL),
(19, 6, 'pin-380081', 15, NULL, NULL),
(20, 6, 'pin-360001', 16, NULL, NULL),
(37, 1, 'africa', 0, '2021-01-17 22:41:10', '2021-01-17 22:41:10'),
(38, 2, 'Egypt', 37, '2021-01-17 22:42:54', '2021-01-17 22:42:54'),
(40, 1, 'The Americas', 0, '2021-01-17 23:15:19', '2021-01-17 23:15:19'),
(42, 1, 'The North America', 0, '2021-01-17 23:23:25', '2021-01-17 23:23:25'),
(43, 1, 'south pacific ocean', 0, '2021-01-17 23:26:27', '2021-01-17 23:26:27'),
(44, 2, 'canada', 42, '2021-01-17 23:30:50', '2021-01-17 23:30:50'),
(54, 1, 'antarctica', 0, '2021-01-18 01:13:08', '2021-01-18 01:13:08'),
(59, 2, 'newzealand', 54, '2021-01-19 03:44:50', '2021-01-19 03:44:50'),
(60, 2, 'nepal', 1, '2021-01-19 03:47:01', '2021-01-19 03:47:01'),
(61, 3, 'kathmandu', 60, '2021-01-19 06:12:35', '2021-01-19 06:12:35'),
(64, 2, 'pakistan', 1, '2021-01-19 06:33:58', '2021-01-19 06:33:58'),
(65, 2, 'bhutan', 1, '2021-01-19 06:49:11', '2021-01-19 06:49:11'),
(68, 2, 'china', 1, '2021-01-19 06:53:08', '2021-01-19 06:53:08'),
(69, 3, 'Himachal-Prades', 3, '2021-01-20 00:09:34', '2021-01-20 00:09:34'),
(70, 3, 'Gandhinagar', 7, '2021-01-20 01:18:39', '2021-01-20 01:18:39');

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
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2021_02_16_082008_create_permission_tables', 2),
(9, '2021_02_24_071848_create_carcategory_table', 3),
(10, '2021_03_01_060813_create_posts_table', 4),
(11, '2021_03_01_114637_create_notifications_table', 5),
(12, '2021_03_03_051413_add_deleted_at_to_users_table', 6),
(13, '2021_03_04_045031_create_jobs_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('064a090a-35dc-4904-b064-5b0d52953b38', 'App\\Notifications\\TaskCompleted', 'App\\Models\\User', 1, '{\"data\":\"This is My second Notification\"}', '2021-03-01 23:33:19', '2021-03-01 23:33:04', '2021-03-01 23:33:19'),
('26644660-214b-4bfb-95a5-7eaa7b490c82', 'App\\Notifications\\TaskCompleted', 'App\\Models\\User', 1, '{\"data\":\"This is My First Notification\"}', '2021-03-01 23:11:46', '2021-03-01 23:11:39', '2021-03-01 23:11:46'),
('5cfe8bd6-288f-456b-a050-dcedeb8c2869', 'App\\Notifications\\TaskCompleted', 'App\\Models\\User', 1, '{\"data\":\"This is My First Notification\"}', '2021-03-01 22:36:21', '2021-03-01 22:36:07', '2021-03-01 22:36:21'),
('6d6fd88d-d877-453f-bf3e-f515bb2c2599', 'App\\Notifications\\TaskCompleted', 'App\\Models\\User', 1, '{\"data\":\"This is My First Notification\",\"datatwo\":\"This is My second Notification\"}', '2021-03-01 23:33:19', '2021-03-01 23:31:17', '2021-03-01 23:33:19'),
('7fb32d0e-c68d-4102-9adc-cc384b5eec21', 'App\\Notifications\\TaskCompleted', 'App\\Models\\User', 1, '{\"data\":\"This is My First Notification\"}', '2021-03-01 22:24:47', '2021-03-01 21:57:40', '2021-03-01 22:24:47'),
('8967f498-d060-43bb-8806-c0407ae4ef2e', 'App\\Notifications\\TaskCompleted', 'App\\Models\\User', 1, '{\"data\":\"This is My First Notification\",\"datatwo\":\"This is My second Notification\"}', '2021-03-01 23:33:19', '2021-03-01 23:31:02', '2021-03-01 23:33:19'),
('94d6a460-07a4-4429-ba51-1039fec1964e', 'App\\Notifications\\TaskCompleted', 'App\\Models\\User', 1, '{\"data\":\"This is My First Notification\"}', '2021-03-01 22:24:47', '2021-03-01 21:57:48', '2021-03-01 22:24:47'),
('9a4f2cb6-93fd-4041-894e-e5be5628c4b1', 'App\\Notifications\\TaskCompleted', 'App\\Models\\User', 1, '{\"data\":\"This is My First Notification\"}', '2021-03-01 22:36:21', '2021-03-01 22:34:19', '2021-03-01 22:36:21'),
('a3b1d3ef-523c-4578-bd8a-d3559d361164', 'App\\Notifications\\TaskCompleted', 'App\\Models\\User', 1, '{\"data\":\"This is My First Notification\"}', '2021-03-01 22:27:57', '2021-03-01 22:27:42', '2021-03-01 22:27:57'),
('baa3a292-3836-459f-9fee-f14ee6a02a1e', 'App\\Notifications\\TaskCompleted', 'App\\Models\\User', 1, '{\"data\":\"This is My First Notification\"}', '2021-03-01 22:32:24', '2021-03-01 22:31:58', '2021-03-01 22:32:24');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'editUser', 'web', '2021-02-16 02:54:50', '2021-02-16 02:54:50'),
(2, 'deleteUser', 'web', '2021-02-16 02:55:04', '2021-02-16 02:55:04'),
(3, 'addUser', 'web', '2021-02-16 02:55:12', '2021-02-16 02:55:12'),
(4, 'viewUser', 'web', '2021-02-16 03:25:06', '2021-02-16 03:25:06');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `likes` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `likes`, `created_at`, `updated_at`) VALUES
(1, 'first first first  title', 'its first postsssss', 5, '2021-03-01 01:48:02', '2021-03-01 01:58:41');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2021-02-16 02:53:50', '2021-02-16 02:53:50'),
(2, 'User', 'web', '2021-02-16 02:54:08', '2021-02-16 02:54:08'),
(3, 'Vendor', 'web', '2021-02-16 02:54:22', '2021-02-16 02:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(3, 2),
(4, 2),
(4, 3);

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
  `role_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bhavinbhai', 'ahirkp1997@gmail.com', NULL, '$2y$10$l0bRbfMwXr03icCDANd4OeSY8F8q5Q/Z0hvA7ybc0/w0w4AGLvFe6', 1, NULL, '2021-02-15 04:58:54', '2021-02-15 04:58:54', NULL),
(2, 'kalpesh', 'kp@gmail.com', NULL, '$2y$10$D17vgIAX6tlK4kQ0eipQMe0pQsJFSOuzGtm3S6WN1RDcO9LKSsrO6', 2, NULL, '2021-02-16 00:11:30', '2021-02-16 00:11:30', NULL),
(8, 'kevin', 'kevin@123.com', NULL, '$2y$10$YIVqBvVjS6JtMrUUYVHFfe90LtEBfHFHjYnj3D40Eme/NgAzYnOum', 3, NULL, '2021-03-03 00:26:47', '2021-03-03 00:27:38', '2021-03-03 00:27:38'),
(10, 'sunil', 'sunil@123.com', NULL, '$2y$10$sDZ79fH7mvAVG9kBl8zbt.UllOOmtRBP4WlwojRnAdei/gIfJHO4y', 2, NULL, '2021-03-03 03:24:31', '2021-03-03 03:24:31', NULL),
(43, 'piterson', 'kevin.shah@drcsystems.in', NULL, '$2y$10$DYuKClYDv1FJ9txHvTMdLeQhpHxIWmZNXuo64O.bDYdW1L7/VrBXu', 2, NULL, '2021-03-05 00:59:51', '2021-03-05 00:59:51', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carcategory`
--
ALTER TABLE `carcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `carcategory`
--
ALTER TABLE `carcategory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
