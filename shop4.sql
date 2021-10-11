-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 07:36 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop4`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `link`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Banner home quan ao', 'danh-muc-san-pham/quần-áo/18', 'Banner_home_quan_ao.png', 1, '2021-06-14 20:50:55', '2021-07-14 09:26:24'),
(2, 'Banner home mỹ phẩm', 'danh-muc-san-pham/mỹ-phẩm/8', 'Banner_home_mỹ_phẩm.png', 1, '2021-06-14 20:52:15', '2021-07-04 03:16:55'),
(3, 'Banner home điện thoại', 'danh-muc-san-pham/điện-thoại/17', 'Banner_home_điện_thoại.png', 1, '2021-06-14 20:56:34', '2021-07-04 03:18:43'),
(4, 'Banner home máy tính', 'danh-muc-san-pham/máy-tính/10', 'Banner_home_máy_tính.png', 1, '2021-07-04 03:19:55', '2021-07-04 03:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 'Nhãn hiệu 1', '2021-06-12 09:27:08', '2021-06-12 09:27:08', 1),
(2, 'Nhãn hiệu 2', '2021-06-12 09:27:21', '2021-06-12 09:27:21', 1),
(3, 'Nhãn hiệu 3', '2021-06-12 09:27:31', '2021-06-12 09:27:31', 0),
(4, 'Nhãn hiệu 4', '2021-06-12 22:19:31', '2021-06-12 22:19:31', 1),
(5, 'Nhãn hiệu 5', '2021-06-12 22:19:47', '2021-06-12 22:19:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `product_name`, `product_code`, `product_color`, `price`, `size`, `quantity`, `user_email`, `session_id`, `created_at`, `updated_at`) VALUES
(18, 11, 'Dien thoai 1', 'KL-DT-1', '', 622160, '', 1, 'admin@admin.com', 'd3hmLN1n1qIPYAPHTI6bOXIVxbAOr42JoRtFGqbF', NULL, NULL),
(19, 13, 'May tinh 1', 'KL-MT-1', '', 400000, '', 1, 'admin@admin.com', 'd3hmLN1n1qIPYAPHTI6bOXIVxbAOr42JoRtFGqbF', NULL, NULL),
(20, 16, 'Mỹ phẩm 1', 'KL-MP-1', '', 200000, '', 1, '', 'nhNCoXu4KHvYWFl52B8KBYUfuL4GcZGWX7vUhfRD', NULL, NULL),
(21, 17, 'Giày 1', 'KL-GI-1', '', 300000, '', 1, '', 'nhNCoXu4KHvYWFl52B8KBYUfuL4GcZGWX7vUhfRD', NULL, NULL),
(22, 12, 'Tivi 1', 'KL-TV-1', '', 810000, '', 1, '', 'nhNCoXu4KHvYWFl52B8KBYUfuL4GcZGWX7vUhfRD', NULL, NULL),
(24, 6, 'Treo tường 1', 'KL-TT-1', '', 450000, '', 1, '', 'nhNCoXu4KHvYWFl52B8KBYUfuL4GcZGWX7vUhfRD', NULL, NULL),
(25, 11, 'Dien thoai 1', 'KL-DT-1', '', 622160, '', 1, 'admin@admin.com', 'r2CDSePZ1VK97vACCVXwMudkZ44c4uOkTfr5KGk8', NULL, NULL),
(26, 13, 'May tinh 1', 'KL-MT-1', '', 400000, '', 1, 'admin@admin.com', 'r2CDSePZ1VK97vACCVXwMudkZ44c4uOkTfr5KGk8', NULL, NULL),
(27, 13, 'May tinh 1', 'KL-MT-1', '', 400000, '', 2, '', 'edG0TVnaVYUzcJf6GXbqG7QNVg719fDjQpLbgCEx', NULL, NULL),
(28, 11, 'Dien thoai 1', 'KL-DT-1', '', 622160, '', 1, '', '7faFIw7PO1kS2gGKVEoS1iihoq3pAygyFfaZFr9W', NULL, NULL),
(29, 15, 'Mỹ phẩm 2', 'KL-MP-2', '', 89000, '', 3, '', 'edG0TVnaVYUzcJf6GXbqG7QNVg719fDjQpLbgCEx', NULL, NULL),
(30, 8, 'Ghế 1', 'KL-GE-1', '', 7101000, '', 1, '', 'MoRRYm20GvgDwaGraUgM4MIc5oCZXKBqwwqzUSAX', NULL, NULL),
(31, 11, 'Dien thoai 1', 'KL-DT-1', '', 622160, '', 1, '', 'MoRRYm20GvgDwaGraUgM4MIc5oCZXKBqwwqzUSAX', NULL, NULL),
(32, 9, 'May chup hinh 1', 'KL-CH-2', '', 2000000, '', 1, '', 'MoRRYm20GvgDwaGraUgM4MIc5oCZXKBqwwqzUSAX', NULL, NULL),
(33, 8, 'Ghế 1', 'KL-GE-1', '', 7101000, '', 1, '', 'OSqHzLk652MikfgtWxabTyl2ZzysL5lyq6gNyG07', NULL, NULL),
(34, 16, 'Mỹ phẩm 1', 'KL-MP-1', '', 200000, '', 1, '', 'OSqHzLk652MikfgtWxabTyl2ZzysL5lyq6gNyG07', NULL, NULL),
(35, 10, 'Tivi 2', 'KL-TV-2', '', 30000000, '', 1, '', 'OSqHzLk652MikfgtWxabTyl2ZzysL5lyq6gNyG07', NULL, NULL),
(45, 8, 'Ghế 1', 'KL-GE-1', '', 7101000, '', 1, 'chau@gmail.com', 'BaI7bVnrlcluq1NoF4OMotztHAwC4Xte457FlTzj', NULL, NULL),
(46, 11, 'Dien thoai 1', 'KL-DT-1', '', 622160, '', 1, 'chau@gmail.com', 'BaI7bVnrlcluq1NoF4OMotztHAwC4Xte457FlTzj', NULL, NULL),
(47, 14, 'Giày 2', 'KL-GI-2', '', 45000, '', 1, 'chau@gmail.com', 'BaI7bVnrlcluq1NoF4OMotztHAwC4Xte457FlTzj', NULL, NULL),
(48, 16, 'Sản phẩm ngoài trời 3', 'KL-NT-3', '', 200000, '', 1, '', 'q9HJAZAPNBrAFQGUExWPZKpxr7WnmwLgDdPFaNZK', NULL, NULL),
(49, 8, 'Ghế 1', 'KL-GE-1', '', 7101000, '', 1, '', 'LTHJYzgaCSk8418LwmHNgY2REuq0wvSuhdguyzIe', NULL, NULL),
(50, 16, 'Mỹ phẩm 1', 'KL-MP-1', '', 200000, '', 1, '', 'LTHJYzgaCSk8418LwmHNgY2REuq0wvSuhdguyzIe', NULL, NULL),
(53, 11, 'Dien thoai 1', 'KL-DT-1', '', 622160, '', 1, 'chau@gmail.com', 'WHTkziwbo410HtJYKMje3T7I4GtoCfrKuCN3IGjQ', NULL, NULL),
(54, 13, 'May tinh 1', 'KL-MT-1', '', 400000, '', 1, 'chau@gmail.com', 'WHTkziwbo410HtJYKMje3T7I4GtoCfrKuCN3IGjQ', NULL, NULL),
(58, 15, 'Mỹ phẩm 2', 'KL-MP-2', '', 89000, '', 1, 'admin@admin.com', 'RxtOzONOS5wKCwQyRTytcL0YAjfyxxzShYWYaCdo', NULL, NULL),
(59, 17, 'Giày 1', 'KL-GI-1', '', 300000, '', 1, 'admin@admin.com', 'RxtOzONOS5wKCwQyRTytcL0YAjfyxxzShYWYaCdo', NULL, NULL),
(60, 18, 'Quần áo 1', 'KL-QA-4', '', 400000, '', 1, 'admin@admin.com', 'RxtOzONOS5wKCwQyRTytcL0YAjfyxxzShYWYaCdo', NULL, NULL),
(61, 17, 'Giày 1', 'KL-GI-1', '', 300000, '', 1, 'admin@admin.com', 'RlnnU6ju6fy2pkUr2HBJblMyyGpJJU2jWE6swZV5', NULL, NULL),
(62, 16, 'Mỹ phẩm 1', 'KL-MP-1', '', 200000, '', 1, 'admin@admin.com', 'RlnnU6ju6fy2pkUr2HBJblMyyGpJJU2jWE6swZV5', NULL, NULL),
(64, 7, 'Ghế 2', 'KL-GE-2', '', 2800000, '', 1, '', '1qjI1RAwkrC1IdsHxh0tQN0aAsqNpDini34YHWH7', NULL, NULL),
(65, 18, 'Quần áo 1', 'KL-QA-4', '', 400000, '', 1, '', '1qjI1RAwkrC1IdsHxh0tQN0aAsqNpDini34YHWH7', NULL, NULL),
(66, 17, 'Giày 1', 'KL-GI-1', '', 300000, '', 1, '', '1qjI1RAwkrC1IdsHxh0tQN0aAsqNpDini34YHWH7', NULL, NULL),
(67, 16, 'Mỹ phẩm 1', 'KL-MP-1', '', 200000, '', 1, '', '1qjI1RAwkrC1IdsHxh0tQN0aAsqNpDini34YHWH7', NULL, NULL),
(68, 16, 'Mỹ phẩm 1', 'KL-MP-1', '', 200000, '', 1, '', 'kLzTMqXyzwwODfUWJcZ4QXwwP1ZrpyJmItvH0qRu', NULL, NULL),
(73, 8, 'Ghế 1', 'KL-GE-1', '', 7101000, '', 1, '', 'LqEU5rlWYU4mb81IvUFkwtKLDCq6ilu3MvRpjshC', NULL, NULL),
(74, 13, 'May tinh 1', 'KL-MT-1', '', 400000, '', 1, '', 'LqEU5rlWYU4mb81IvUFkwtKLDCq6ilu3MvRpjshC', NULL, NULL),
(76, 17, 'Giày 1', 'KL-GI-1', '', 300000, '', 1, '', 'LqEU5rlWYU4mb81IvUFkwtKLDCq6ilu3MvRpjshC', NULL, NULL),
(77, 18, 'Quần áo 1', 'KL-QA-4', '', 400000, '', 1, '', 'LqEU5rlWYU4mb81IvUFkwtKLDCq6ilu3MvRpjshC', NULL, NULL),
(78, 6, 'Treo tường 1', 'KL-TT-1', '', 450000, '', 1, '', 'LqEU5rlWYU4mb81IvUFkwtKLDCq6ilu3MvRpjshC', NULL, NULL),
(79, 12, 'Tivi 1', 'KL-TV-1', '', 810000, '', 1, '', 'LqEU5rlWYU4mb81IvUFkwtKLDCq6ilu3MvRpjshC', NULL, NULL),
(80, 11, 'Dien thoai 1', 'KL-DT-1', '', 622160, '', 1, '', 'LqEU5rlWYU4mb81IvUFkwtKLDCq6ilu3MvRpjshC', NULL, NULL),
(81, 15, 'Mỹ phẩm 2', 'KL-MP-2', '', 89000, '', 1, '', 'LqEU5rlWYU4mb81IvUFkwtKLDCq6ilu3MvRpjshC', NULL, NULL),
(82, 4, 'Ghế 3', 'KL-GE-3', '', 10000, '', 1, '', 'LqEU5rlWYU4mb81IvUFkwtKLDCq6ilu3MvRpjshC', NULL, NULL),
(83, 17, 'Giày 1', 'KL-GI-1', '', 300000, '', 1, '', 'HblhMHLu3sNjZNB07NqhUoQr9jtTRX4iIXHjove2', NULL, NULL),
(84, 13, 'May tinh 1', 'KL-MT-1', '', 400000, '', 1, '', 'HblhMHLu3sNjZNB07NqhUoQr9jtTRX4iIXHjove2', NULL, NULL),
(85, 17, 'Giày 1', 'KL-GI-1', '', 300000, '', 1, '', 'Z8tFYvrIuKh3wmBzSFSygHoumTyYZJHwbjC0RMMx', NULL, NULL),
(86, 13, 'May tinh 1', 'KL-MT-1', '', 400000, '', 1, '', 'Z8tFYvrIuKh3wmBzSFSygHoumTyYZJHwbjC0RMMx', NULL, NULL),
(87, 13, 'May tinh 1', 'KL-MT-1', '', 400000, '', 1, '', 'GyAcEWXnrloYlNHuDkRtOzB7FO1dxyflZNI676To', NULL, NULL),
(88, 15, 'Mỹ phẩm 2', 'KL-MP-2', '', 89000, '', 1, '', 'NREQZcuODevtqYpuvCP4SW4FM8yoqGEcETzXuvfr', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `featured` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_tron` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `parent_id`, `featured`, `created_at`, `updated_at`, `is_active`, `image`, `image_tron`) VALUES
(1, 'Thời trang làm đẹp', 'Các sản phảm về thời trang làm đẹp', NULL, 1, '2021-06-12 09:02:27', '2021-07-03 09:09:44', 1, 'Thời_trang_-_làm_đẹp.png', 'Thời_trang_làm_đẹp.png'),
(2, 'Công nghệ', 'Các sản phẩm về công nghệ', NULL, 1, '2021-06-12 09:03:50', '2021-07-03 09:10:57', 1, 'Công_nghệ.png', 'Công_nghệ.png'),
(3, 'Thiết kế nội thất', 'Các sản phẩm nội thất', NULL, 0, '2021-06-12 09:05:02', '2021-07-03 09:11:28', 1, 'Thiết_kế_nội_thất.png', 'Thiết_kế_nội_thất.png'),
(4, 'Tủ', 'Hiện đại,tiện nghi,đẹp', 3, 1, '2021-06-12 09:06:26', '2021-07-05 22:34:38', 1, 'Tủ.png', NULL),
(5, 'Treo tường', 'Mẫu mã đa dạng', 3, 0, '2021-06-12 09:07:29', '2021-07-05 22:32:49', 1, 'Treo_tường.png', NULL),
(6, 'Giường', 'Nhiều mẫu mã mới hiện đại', 3, 0, '2021-06-12 09:09:44', '2021-07-01 03:28:54', 1, 'Nội_thất_bếp.jpg', NULL),
(7, 'Giày', NULL, 1, 1, '2021-06-14 22:23:22', '2021-07-09 04:10:10', 1, 'Giày.png', NULL),
(8, 'Mỹ Phẩm', NULL, 1, 1, '2021-06-14 22:23:45', '2021-07-09 04:10:26', 1, 'Mỹ_Phẩm.png', NULL),
(9, 'Túi xách', NULL, 1, 1, '2021-06-14 22:24:05', '2021-07-01 03:12:48', 1, NULL, NULL),
(10, 'Máy tính', NULL, 2, 1, '2021-06-14 22:24:54', '2021-07-09 04:09:54', 1, 'Máy_tính.png', NULL),
(11, 'Máy chup hinh', NULL, 2, 1, '2021-06-14 22:25:18', '2021-07-09 04:10:54', 1, 'Máy_chup_hinh.png', NULL),
(12, 'Ghế', NULL, 3, 1, '2021-06-14 22:25:52', '2021-07-05 22:30:34', 1, 'Ghế.png', NULL),
(13, 'Bàn', NULL, 3, 1, '2021-06-14 22:26:21', '2021-07-05 22:31:41', 1, 'Bàn.png', NULL),
(14, 'Laptop', NULL, 2, 1, '2021-06-14 22:26:42', '2021-07-01 03:26:38', 1, NULL, NULL),
(15, 'Đồng hồ', NULL, 1, 1, '2021-06-15 22:38:52', '2021-07-01 03:14:05', 1, NULL, NULL),
(16, 'Ti vi', NULL, 2, 1, '2021-06-26 03:17:17', '2021-07-01 03:16:13', 1, NULL, NULL),
(17, 'Điện thoại', NULL, 2, 1, '2021-06-26 03:17:39', '2021-07-09 04:11:42', 1, 'Điện_thoại.png', NULL),
(18, 'Quần áo', NULL, 1, 1, '2021-06-26 03:18:07', '2021-07-01 03:14:55', 1, NULL, NULL),
(19, 'Điện tử', NULL, NULL, 1, '2021-07-03 09:28:35', '2021-07-03 09:28:35', 1, NULL, 'Điện_tử.png'),
(20, 'Đồ biển', NULL, NULL, 1, '2021-07-03 09:31:35', '2021-07-03 09:31:35', 1, NULL, 'Đồ_biển.png'),
(21, 'Đồ dùng gia đình', NULL, NULL, 1, '2021-07-03 09:33:04', '2021-07-03 09:33:04', 1, NULL, 'Đồ_dùng_gia_đình.png'),
(22, 'dien tu 1', NULL, 19, 1, '2021-07-05 10:04:30', '2021-07-05 10:04:30', 1, NULL, NULL),
(23, 'dien tu 1.1', NULL, 22, 1, '2021-07-05 10:05:08', '2021-07-05 10:05:08', 1, NULL, NULL),
(24, 'dien tu 2', NULL, 19, 1, '2021-07-05 10:13:08', '2021-07-05 10:13:08', 1, NULL, NULL),
(25, 'dien tu 2.1', NULL, 24, 1, '2021-07-05 10:23:49', '2021-07-05 10:23:49', 1, NULL, NULL),
(26, 'tu 1', NULL, 4, 1, '2021-07-05 10:26:30', '2021-07-16 03:18:49', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_features`
--

CREATE TABLE `category_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_type` tinyint(4) NOT NULL COMMENT '1 => text, 2 => color',
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_features`
--

INSERT INTO `category_features` (`id`, `field_title`, `field_type`, `category_id`, `created_at`, `updated_at`) VALUES
(37, 'Blue', 2, 1, '2021-07-03 09:09:44', '2021-07-03 09:09:44'),
(38, 'Red', 2, 1, '2021-07-03 09:09:44', '2021-07-03 09:09:44'),
(39, 'Width', 1, 2, '2021-07-03 09:10:57', '2021-07-03 09:10:57'),
(40, 'Height', 1, 2, '2021-07-03 09:10:57', '2021-07-03 09:10:57'),
(41, 'Red', 2, 2, '2021-07-03 09:10:57', '2021-07-03 09:10:57'),
(42, 'Yellow', 2, 2, '2021-07-03 09:10:57', '2021-07-03 09:10:57'),
(43, 'Red', 2, 4, '2021-07-05 22:34:39', '2021-07-05 22:34:39'),
(44, 'Blue', 2, 4, '2021-07-05 22:34:39', '2021-07-05 22:34:39'),
(45, 'Black', 2, 4, '2021-07-05 22:34:39', '2021-07-05 22:34:39'),
(46, '60x80', 1, 4, '2021-07-05 22:34:39', '2021-07-05 22:34:39'),
(47, '90x100', 1, 4, '2021-07-05 22:34:39', '2021-07-05 22:34:39'),
(48, 'Size L', 1, 7, '2021-07-09 21:13:12', '2021-07-09 21:13:12'),
(49, 'Size M', 1, 7, '2021-07-09 21:13:13', '2021-07-09 21:13:13'),
(50, 'Size XL', 1, 7, '2021-07-09 21:13:13', '2021-07-09 21:13:13'),
(51, 'Yellow', 2, 7, '2021-07-09 21:13:13', '2021-07-09 21:13:13'),
(52, 'Red', 2, 7, '2021-07-09 21:13:13', '2021-07-09 21:13:13'),
(53, 'Blue', 2, 7, '2021-07-09 21:13:13', '2021-07-09 21:13:13'),
(54, 'Red', 2, 17, '2021-07-09 21:14:19', '2021-07-09 21:14:19'),
(55, 'Yellow', 2, 17, '2021-07-09 21:14:19', '2021-07-09 21:14:19'),
(56, 'Black', 2, 17, '2021-07-09 21:14:19', '2021-07-09 21:14:19'),
(57, 'Pink', 2, 17, '2021-07-09 21:14:19', '2021-07-09 21:14:19'),
(58, 'Yellow', 2, 12, '2021-07-09 21:16:17', '2021-07-09 21:16:17'),
(59, 'Black', 2, 12, '2021-07-09 21:16:17', '2021-07-09 21:16:17'),
(60, 'Brown', 2, 12, '2021-07-09 21:16:17', '2021-07-09 21:16:17'),
(61, 'Size 4x5m', 1, 12, '2021-07-09 21:16:17', '2021-07-09 21:16:17'),
(62, 'Size 5x10', 1, 12, '2021-07-09 21:16:17', '2021-07-09 21:16:17'),
(63, 'Size L', 1, 8, '2021-07-10 10:47:20', '2021-07-10 10:47:20'),
(64, 'Size M', 1, 8, '2021-07-10 10:47:20', '2021-07-10 10:47:20'),
(65, 'Size X', 1, 8, '2021-07-10 10:47:20', '2021-07-10 10:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `cat_news`
--

CREATE TABLE `cat_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cat_news`
--

INSERT INTO `cat_news` (`id`, `title`, `description`, `parent_id`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Danh mục tin tức 1', 'Đang cập nhật', NULL, NULL, 1, '2021-06-14 09:37:19', '2021-06-14 09:37:19'),
(2, 'Danh mục tin tức 2', 'Đang cập nhật', NULL, NULL, 1, '2021-06-14 09:37:42', '2021-06-14 09:37:42'),
(3, 'Danh mục tin tức 3', 'Đang cập nhật', NULL, NULL, 1, '2021-06-14 09:38:16', '2021-06-14 09:38:16'),
(4, 'Danh mục tin tức 4', 'Đang cập nhật', NULL, NULL, 1, '2021-06-14 09:38:30', '2021-06-14 09:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'TP HCM', NULL, NULL),
(2, 'Hà Nội', NULL, NULL),
(3, 'Hải Phòng', NULL, NULL),
(4, 'Đà Nẵng', NULL, NULL),
(5, 'An Giang', NULL, NULL),
(6, 'Bà Rịa - Vũng Tàu', NULL, NULL),
(7, 'Bắc Giang', NULL, NULL),
(8, 'Bắc Kạn', NULL, NULL),
(9, 'Bạc Liêu', NULL, NULL),
(10, 'Bắc Ninh', NULL, NULL),
(11, 'Bến Tre', NULL, NULL),
(12, 'Bình Định', NULL, NULL),
(13, 'Bình Dương', NULL, NULL),
(14, 'Bình Phước', NULL, NULL),
(15, 'Bình Thuận', NULL, NULL),
(16, 'Cà Mau', NULL, NULL),
(17, 'Cao Bằng', NULL, NULL),
(18, 'Cần Thơ', NULL, NULL),
(19, 'Đắk Lắk', NULL, NULL),
(20, 'Đắk Nông', NULL, NULL),
(21, 'Điện Biên', NULL, NULL),
(22, 'Đồng Nai', NULL, NULL),
(23, 'Đồng Tháp', NULL, NULL),
(24, 'Gia Lai', NULL, NULL),
(25, 'Hà Giang', NULL, NULL),
(26, 'Hà Nam', NULL, NULL),
(27, 'Hà Tĩnh', NULL, NULL),
(28, 'Hải Dương', NULL, NULL),
(29, 'Hậu Giang', NULL, NULL),
(30, 'Hòa Bình', NULL, NULL),
(31, 'Hưng Yên', NULL, NULL),
(32, 'Khánh Hòa', NULL, NULL),
(33, 'Kiên Giang', NULL, NULL),
(34, 'Kon Tum', NULL, NULL),
(35, 'Lai Châu', NULL, NULL),
(36, 'Lâm Đồng', NULL, NULL),
(37, 'Lạng Sơn', NULL, NULL),
(38, 'Lào Cai', NULL, NULL),
(39, 'Long An', NULL, NULL),
(40, 'Nam Định', NULL, NULL),
(41, 'Nghệ An', NULL, NULL),
(42, 'Ninh Bình', NULL, NULL),
(43, 'Ninh Thuận', NULL, NULL),
(44, 'Phú Thọ', NULL, NULL),
(45, 'Quảng Bình', NULL, NULL),
(46, 'Quảng Nam', NULL, NULL),
(47, 'Quảng Ngãi', NULL, NULL),
(48, 'Quảng Ninh', NULL, NULL),
(49, 'Quảng Trị', NULL, NULL),
(50, 'Sóc Trăng', NULL, NULL),
(51, 'Sơn La', NULL, NULL),
(52, 'Tây Ninh', NULL, NULL),
(53, 'Thái Bình', NULL, NULL),
(54, 'Thái Nguyên', NULL, NULL),
(55, 'Thanh Hóa', NULL, NULL),
(56, 'Thừa Thiên Huế', NULL, NULL),
(57, 'Tiền Giang', NULL, NULL),
(58, 'Trà Vinh', NULL, NULL),
(59, 'Tuyên Quang', NULL, NULL),
(60, 'Vĩnh Long', NULL, NULL),
(61, 'Vĩnh Phúc', NULL, NULL),
(62, 'Yên Bái', NULL, NULL),
(63, 'Phú Yên', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `mobile`, `email`, `message`, `created_at`, `updated_at`, `status`) VALUES
(1, 'cuong', '1234567890', 'cuong@gmail.com', 'test', '2021-06-27 02:47:33', '2021-06-27 02:59:48', 1),
(2, 'lam', '563563', 'dododo@gmail.com', 'tét', '2021-07-16 11:49:09', '2021-07-16 11:49:09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `amount_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_date` date DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_code`, `amount`, `amount_type`, `expiry_date`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'KL-10', 10, 'Phần trăm', '2021-07-16', 1, '2021-06-19 21:11:11', '2021-07-12 03:49:21');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_address`
--

CREATE TABLE `delivery_address` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_address`
--

INSERT INTO `delivery_address` (`id`, `user_id`, `user_email`, `name`, `address`, `city`, `state`, `mobile`, `postal_code`, `created_at`, `updated_at`) VALUES
(1, 3, 'chauthy@gmail.com', 'do khanh thy cuong', '11112121', 'Hà Nội', '112121', '8989898980', NULL, '2021-06-20 05:39:32', '2021-07-17 10:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_15_074346_create_categories_table', 1),
(5, '2021_04_15_074445_create_category_features_table', 1),
(6, '2021_04_15_074458_create_brands_table', 1),
(7, '2021_04_15_074509_create_products_table', 1),
(8, '2021_04_15_074520_create_product_gallery_table', 1),
(9, '2021_04_15_074532_create_product_features_table', 1),
(10, '2021_04_15_074547_create_shopping_cart_table', 1),
(11, '2021_04_15_074600_create_shipping_addresses_table', 1),
(12, '2021_04_15_074611_create_payment_methods_table', 1),
(13, '2021_04_15_074625_create_orders_table', 1),
(14, '2021_04_15_075024_create_order_details_table', 1),
(15, '2021_04_15_075358_add_is_super_admin_to_users_table', 1),
(16, '2021_04_15_081910_create_sliders_table', 1),
(17, '2021_04_15_082817_create_tags_table', 1),
(18, '2021_04_15_083020_create_product_tag_table', 1),
(19, '2021_04_15_154917_create_reviews_table', 1),
(20, '2021_04_15_180349_create_permission_tables', 1),
(21, '2021_04_15_181942_create_settings_table', 1),
(22, '2021_04_17_083013_add_column_to_users_table', 1),
(23, '2021_04_17_092235_add_column_image_to_users_table', 1),
(24, '2021_04_20_174144_add_column_is_active_to_categories_tables', 1),
(25, '2021_04_22_064327_add_column_is_active_to_brands_table', 1),
(26, '2021_04_22_174304_add_column_is_active_to_sliders_table', 1),
(27, '2021_04_22_174443_add_column_names_to_sliders_table', 1),
(28, '2021_04_23_160522_add_colunm_image_to_categories_table', 1),
(29, '2021_04_23_160615_add_colunm_is_active_to_settings_table', 1),
(30, '2021_04_23_170446_add_colunm_type_to_settings_table', 1),
(31, '2021_04_24_074228_add_column_is_active_to_products_table', 1),
(32, '2021_04_24_095459_add_column_image_to_products_table', 1),
(33, '2021_04_27_171122_create_coupon_table', 1),
(34, '2021_05_01_100133_add_column_namefour_to_sliders_table', 1),
(35, '2021_05_06_082553_add_column_new_to_products_table', 1),
(36, '2021_05_06_162729_add_column_additional_to_products_table', 1),
(37, '2021_05_07_075039_create_cart_table', 1),
(38, '2021_05_13_173237_add_column_info_address_to_users_table', 1),
(39, '2021_05_13_173711_add_column_mobile_to_users_table', 1),
(40, '2021_05_13_193054_create_city_table', 1),
(41, '2021_05_14_160953_create_delivery_address_table', 1),
(42, '2021_05_17_050030_add_column_extra_to_orders_table', 1),
(43, '2021_05_17_051803_create_orders_products_table', 1),
(44, '2021_05_17_100040_add_column_color_to_orders_products_table', 1),
(45, '2021_05_18_102058_add_column_ma_order_to_orders_table', 1),
(46, '2021_05_19_111035_add_column_rating_to_products_table', 1),
(47, '2021_05_19_124642_add_column_status_to_reviews_table', 1),
(48, '2021_05_25_103953_create_cat_news_controllers_table', 1),
(49, '2021_05_25_171301_create_news_table', 1),
(50, '2021_05_26_093117_create_taggable_table', 1),
(51, '2021_05_28_051539_create_contacts_table', 1),
(52, '2021_05_30_173850_add_column_noi_bat_to_products_table', 1),
(53, '2021_05_30_174008_add_column_product_id_to_orders_table', 1),
(54, '2021_06_03_123342_add_column_status_to_contacts_table', 1),
(55, '2021_06_03_174731_create_newsletters_table', 1),
(56, '2021_06_03_184827_add_column_status_to_newsletters_table', 1),
(57, '2021_06_12_092146_add_column_price_bigint_to_products_table', 2),
(58, '2021_06_14_172642_create_banners_table', 3),
(59, '2021_06_21_074625_create_orders_table', 4),
(60, '2021_06_21_102058_add_column_ma_order_to_orders_table', 5),
(61, '2021_06_25_174738_add_column_note_to_orders_table', 6),
(62, '2021_07_03_060447_add_column_ship_products_table', 7),
(63, '2021_07_03_155206_add_column_image_tron_to_categories_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cat_news_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `user_id`, `cat_news_id`, `title`, `description`, `content`, `image_path`, `image_name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Tin tức 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat.', '<div class=\"blog-post-content-inner\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat.</p>\r\n</div>\r\n<div class=\"single-post-content\">\r\n<p class=\"quate-speech\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n<p><img src=\"/shop3/public/storage/photos/1/news/blog-13.jpg\" alt=\"\" width=\"450\" height=\"277\" /></p>\r\n<p>&nbsp;</p>\r\n</div>', NULL, 'Tin_tức_1.jpg', 1, '2021-06-14 09:46:25', '2021-06-14 09:47:44'),
(2, 1, 2, 'Tin tức 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua', '<p>&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</p>', NULL, 'Tin_tức_2.jpg', 1, '2021-06-14 09:48:45', '2021-06-26 21:36:16'),
(3, 1, 3, 'Tin tức 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua.', '<p><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. &nbsp; &nbsp;&nbsp;</p>', NULL, 'Tin_tức_3.jpg', 1, '2021-06-14 09:49:57', '2021-06-26 21:36:33'),
(4, 1, 4, 'Tin tức 4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua.', '<p><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. &nbsp; &nbsp;&nbsp;</p>', NULL, 'Tin_tức_4.jpg', 1, '2021-06-14 09:50:30', '2021-06-26 21:36:46'),
(5, 1, 1, 'Giới thiệu', 'Đang cập nhật mô tả', '<p>nội dung đang cập nhật</p>\r\n<p><img src=\"/shop3/public/storage/photos/1/news/blog-13.jpg\" alt=\"\" width=\"450\" height=\"277\" /></p>', NULL, 'Giới_thiệu.jpg', 1, '2021-06-26 21:07:26', '2021-06-26 21:07:26');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`, `status`) VALUES
(1, 'chau@gmail.com', '2021-06-27 03:09:40', '2021-06-27 03:09:40', 0),
(2, 'cuong@gmail.com', '2021-06-27 03:10:22', '2021-06-27 03:10:22', 0),
(3, 'thy@gmail.com', '2021-06-27 03:14:51', '2021-06-27 03:14:51', 0),
(4, 'test@gmail.com', '2021-07-17 21:27:56', '2021-07-17 21:27:56', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `total_price` bigint(20) NOT NULL,
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_charges` double(8,2) DEFAULT NULL,
  `coupon_code` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_amount` double(8,2) DEFAULT NULL,
  `payment_method` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ma_order` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `total_price`, `user_email`, `name`, `address`, `city`, `state`, `mobile`, `postal_code`, `shipping_charges`, `coupon_code`, `coupon_amount`, `payment_method`, `created_at`, `updated_at`, `ma_order`, `product_id`, `note`) VALUES
(1, 3, 'Đang xử lý', 760000, 'chau@gmail.com', 'le minh chau', '111/22233333', 'TP HCM', '11111212', '89898', NULL, NULL, '', 0.00, 'Sau khi nhận hàng', '2021-09-02 22:02:58', '2021-09-02 22:02:58', 'KL-M0W326mbwvV', NULL, NULL),
(2, 3, 'Đang xử lý', 760000, 'chau@gmail.com', 'le minh chau', '111/22233333', 'TP HCM', '11111212', '89898', NULL, NULL, '', 0.00, 'Sau khi nhận hàng', '2021-09-02 22:03:05', '2021-09-02 22:03:05', 'KL-rmFYNh7u7ZO', NULL, NULL),
(3, 3, 'Đang xử lý', 280100, 'chau@gmail.com', 'le minh chau', '111/22233333', 'TP HCM', '11111212', '89898', NULL, NULL, '', 0.00, 'Sau khi nhận hàng', '2021-09-02 22:05:49', '2021-09-02 22:05:49', 'KL-P7fx3Zqf4I0', NULL, NULL),
(4, 3, 'Đang xử lý', 1210000, 'chau@gmail.com', 'le minh chau', '111/22233333', 'TP HCM', '11111212', '89898', NULL, NULL, '', 0.00, 'Sau khi nhận hàng', '2021-09-02 22:07:09', '2021-09-02 22:07:09', 'KL-lRbGnBT85q5', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE `orders_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` bigint(20) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_color` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_products`
--

INSERT INTO `orders_products` (`id`, `order_id`, `user_id`, `product_id`, `product_code`, `product_name`, `product_size`, `product_price`, `product_qty`, `created_at`, `updated_at`, `product_color`) VALUES
(1, 1, 3, 18, 'KL-QA-4', 'Quần áo 1', '', 400000, 1, '2021-09-02 22:02:58', '2021-09-02 22:02:58', ''),
(2, 1, 3, 17, 'KL-GI-1', 'Giày 1', '', 360000, 1, '2021-09-02 22:02:58', '2021-09-02 22:02:58', ''),
(3, 3, 3, 16, 'KL-MP-1', 'Mỹ phẩm 1', '', 200000, 1, '2021-09-02 22:05:49', '2021-09-02 22:05:49', ''),
(4, 3, 3, 15, 'KL-MP-2', 'Mỹ phẩm 2', '', 80100, 1, '2021-09-02 22:05:49', '2021-09-02 22:05:49', ''),
(5, 4, 3, 13, 'KL-MT-1', 'May tinh 1', '', 400000, 1, '2021-09-02 22:07:09', '2021-09-02 22:07:09', ''),
(6, 4, 3, 12, 'KL-TV-1', 'Tivi 1', '', 810000, 1, '2021-09-02 22:07:09', '2021-09-02 22:07:09', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Paypal', 'paypal', NULL, NULL),
(2, 'Pay on delivery', 'cash', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'create_product', 'web', '2021-06-12 03:13:43', '2021-06-12 03:13:43'),
(2, 'edit_product', 'web', '2021-06-12 03:13:43', '2021-06-12 03:13:43'),
(3, 'delete_product', 'web', '2021-06-12 03:13:43', '2021-06-12 03:13:43'),
(4, 'list_product', 'web', '2021-06-12 03:13:43', '2021-06-12 03:13:43'),
(5, 'create_slider', 'web', '2021-06-12 03:13:43', '2021-06-12 03:13:43'),
(6, 'edit_slider', 'web', '2021-06-12 03:13:43', '2021-06-12 03:13:43'),
(7, 'delete_slider', 'web', '2021-06-12 03:13:43', '2021-06-12 03:13:43'),
(8, 'list_slider', 'web', '2021-06-12 03:13:43', '2021-06-12 03:13:43'),
(9, 'create_category', 'web', '2021-06-12 03:13:43', '2021-06-12 03:13:43'),
(10, 'edit_category', 'web', '2021-06-12 03:13:43', '2021-06-12 03:13:43'),
(11, 'delete_category', 'web', '2021-06-12 03:13:43', '2021-06-12 03:13:43'),
(12, 'list_category', 'web', '2021-06-12 03:13:43', '2021-06-12 03:13:43');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `amount` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `discount_start_date` date DEFAULT NULL,
  `discount_end_date` date DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new` tinyint(4) NOT NULL DEFAULT '1',
  `additional` text COLLATE utf8mb4_unicode_ci,
  `noi_bat` tinyint(4) NOT NULL DEFAULT '1',
  `price` bigint(20) NOT NULL,
  `pro_total_rating` int(11) NOT NULL DEFAULT '1' COMMENT 'Tổng số đánh giá',
  `pro_total_number` int(11) NOT NULL DEFAULT '1' COMMENT 'Tổng số đánh giá',
  `ship` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `amount`, `discount`, `discount_start_date`, `discount_end_date`, `created_by`, `category_id`, `brand_id`, `product_code`, `featured`, `created_at`, `updated_at`, `is_active`, `image`, `new`, `additional`, `noi_bat`, `price`, `pro_total_rating`, `pro_total_number`, `ship`) VALUES
(1, 'Điện thoại 2', '<div id=\"des-details2\" class=\"tab-pane active\">\r\n<div class=\"product-anotherinfo-wrapper\">\r\n<ul>\r\n<li>Weight 400 g</li>\r\n<li>Dimensions10 x 10 x 15 cm</li>\r\n<li>Materials 60% cotton, 40% polyester</li>\r\n<li>Other Info American heirloom jean shorts pug seitan letterpress<img src=\"/shop3/public/storage/photos/1/product/7.jpg\" alt=\"\" width=\"800\" height=\"800\" /></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>', 20, 10, '2021-06-18', '2021-06-23', 1, 17, 2, 'KL-DT-2', 1, '2021-06-12 09:31:16', '2021-07-13 23:26:59', 1, 'Điện_thoại_2.jpg', 1, 'Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco\r\n\r\n    - 0.5 mm Dail\r\n    - Inspired vector icons\r\n    - Very modern style', 1, 2000000, 3, 8, 0),
(2, 'Sản phẩm văn phòng 1', '<div id=\"des-details1\" class=\"tab-pane active\">\r\n<div class=\"product-description-wrapper\">\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>\r\n<p>ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>\r\n</div>\r\n</div>', 59, 10, NULL, NULL, 1, 2, 1, 'KL-VH-1', 1, '2021-06-12 21:34:12', '2021-06-12 21:34:12', 1, 'Sản_phẩm_văn_phòng_1.jpg', 1, 'Weight 400 g\r\n    Dimensions10 x 10 x 15 cm\r\n    Materials 60% cotton, 40% polyester\r\n    Other Info American heirloom jean shorts pug seitan letterpress', 1, 600000, 1, 1, 0),
(3, 'Sản phẩm ngoài trời 1', '<div id=\"des-details2\" class=\"tab-pane active\">\r\n<div class=\"product-anotherinfo-wrapper\">\r\n<ul>\r\n<li>Weight 400 g</li>\r\n<li>Dimensions10 x 10 x 15 cm</li>\r\n<li>Materials 60% cotton, 40% polyester</li>\r\n<li>Other Info American heirloom jean shorts pug seitan letterpress</li>\r\n</ul>\r\n</div>\r\n</div>', 50, 20, NULL, NULL, 1, 3, 3, 'KL-NT-1', 1, '2021-06-12 21:36:48', '2021-06-12 21:36:48', 1, 'Sản_phẩm_ngoài_trời_1.jpg', 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n\r\nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 1, 30000000, 1, 1, 0),
(4, 'Ghế 3', '<div id=\"des-details1\" class=\"tab-pane active\">\r\n<div class=\"product-description-wrapper\">\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>\r\n<p>ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>\r\n</div>\r\n</div>', 80, 50, '2021-07-03', '2021-07-28', 1, 12, 1, 'KL-GE-3', 1, '2021-06-12 21:39:18', '2021-07-18 10:40:19', 1, 'Ghế_3.jpg', 1, 'Weight 400 g\r\n    Dimensions10 x 10 x 15 cm\r\n    Materials 60% cotton, 40% polyester\r\n    Other Info American heirloom jean shorts pug seitan letterpress', 1, 20000, 1, 1, 0),
(5, 'Đèn 1', '<div id=\"des-details2\" class=\"tab-pane active\">\r\n<div class=\"product-anotherinfo-wrapper\">\r\n<ul>\r\n<li>Weight 400 g</li>\r\n<li>Dimensions10 x 10 x 15 cm</li>\r\n<li>Materials 60% cotton, 40% polyester</li>\r\n<li>Other Info American heirloom jean shorts pug seitan letterpress</li>\r\n</ul>\r\n</div>\r\n</div>', 80, 0, NULL, NULL, 1, 5, 2, 'KL-DE-1', 1, '2021-06-12 21:42:46', '2021-07-02 04:57:02', 1, 'Đèn_1.jpg', 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n\r\nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 1, 5550000, 1, 1, 0),
(6, 'Treo tường 1', '<div id=\"des-details1\" class=\"tab-pane active\">\r\n<div class=\"product-description-wrapper\">\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>\r\n<p>ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>\r\n</div>\r\n</div>', 90, 25, NULL, NULL, 1, 5, 1, 'KL-TT-1', 1, '2021-06-12 21:44:56', '2021-07-02 04:54:06', 1, 'Treo_tường_1.jpg', 1, 'Weight 400 g\r\n    Dimensions10 x 10 x 15 cm\r\n    Materials 60% cotton, 40% polyester\r\n    Other Info American heirloom jean shorts pug seitan letterpress', 1, 600000, 1, 1, 0),
(7, 'Ghế 2', '<div id=\"des-details2\" class=\"tab-pane active\">\r\n<div class=\"product-anotherinfo-wrapper\">\r\n<ul>\r\n<li>Weight 400 g</li>\r\n<li>Dimensions10 x 10 x 15 cm</li>\r\n<li>Materials 60% cotton, 40% polyester</li>\r\n<li>Other Info American heirloom jean shorts pug seitan letterpress</li>\r\n</ul>\r\n</div>\r\n</div>', 67, 60, '2021-07-03', '2021-07-27', 1, 12, 1, 'KL-GE-2', 1, '2021-06-12 22:18:56', '2021-07-18 10:39:54', 1, 'Ghế_2.jpg', 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n\r\nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 1, 7000000, 1, 1, 0),
(8, 'Ghế 1', '<div id=\"des-details1\" class=\"tab-pane active\">\r\n<div class=\"product-description-wrapper\">\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>\r\n<p>ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>\r\n</div>\r\n</div>', 10, 10, '2021-07-02', '2021-10-31', 1, 12, 4, 'KL-GE-1', 1, '2021-06-12 22:21:56', '2021-09-02 10:26:47', 1, 'Ghế_1.jpg', 1, 'Weight 400 g\r\n    Dimensions10 x 10 x 15 cm\r\n    Materials 60% cotton, 40% polyester\r\n    Other Info American heirloom jean shorts pug seitan letterpress', 1, 7890000, 1, 1, 0),
(9, 'May chup hinh 1', '<div id=\"des-details2\" class=\"tab-pane active\">\r\n<div class=\"product-anotherinfo-wrapper\">\r\n<ul>\r\n<li>Weight 400 g</li>\r\n<li>Dimensions10 x 10 x 15 cm</li>\r\n<li>Materials 60% cotton, 40% polyester</li>\r\n<li>Other Info American heirloom jean shorts pug seitan letterpress</li>\r\n</ul>\r\n</div>\r\n</div>', 10, 0, NULL, NULL, 1, 11, 2, 'KL-CH-2', 1, '2021-06-12 22:24:17', '2021-07-02 04:09:05', 1, 'May_chup_hinh_1.jpg', 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n\r\nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 1, 2000000, 1, 1, 0),
(10, 'Tivi 2', '<div id=\"des-details1\" class=\"tab-pane active\">\r\n<div class=\"product-description-wrapper\">\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>\r\n<p>ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>\r\n</div>\r\n</div>', 90, 40, NULL, NULL, 1, 16, 5, 'KL-TV-2', 1, '2021-06-12 22:26:35', '2021-07-02 04:06:18', 1, 'Tivi_2.jpg', 1, 'Weight 400 g\r\n    Dimensions10 x 10 x 15 cm\r\n    Materials 60% cotton, 40% polyester\r\n    Other Info American heirloom jean shorts pug seitan letterpress', 1, 50000000, 1, 1, 0),
(11, 'Dien thoai 1', '<div id=\"des-details2\" class=\"tab-pane active\">\r\n<div class=\"product-anotherinfo-wrapper\">\r\n<ul>\r\n<li>Weight 400 g</li>\r\n<li>Dimensions10 x 10 x 15 cm</li>\r\n<li>Materials 60% cotton, 40% polyester</li>\r\n<li>Other Info American heirloom jean shorts pug seitan letterpress</li>\r\n</ul>\r\n<p><img src=\"/shop3/public/storage/photos/1/product/19.jpg\" alt=\"\" width=\"360\" height=\"360\" /></p>\r\n</div>\r\n</div>', 70, 30, '2021-07-03', '2021-07-30', 1, 17, 5, 'KL-DT-1', 1, '2021-06-12 22:30:17', '2021-07-18 10:38:07', 1, 'Dien_thoai_1.jpg', 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n\r\nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 1, 888800, 5, 11, 0),
(12, 'Tivi 1', '<p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>\r\n<div class=\"pro-details-list\">\r\n<ul>\r\n<li>- 0.5 mm Dail</li>\r\n<li>- Inspired vector icons</li>\r\n<li>- Very modern style</li>\r\n</ul>\r\n</div>', 90, 10, NULL, NULL, 1, 16, 1, 'KL-TV-1', 1, '2021-06-13 02:41:30', '2021-07-02 04:01:23', 1, 'Tivi_1.jpg', 1, 'Weight 400 g\r\n    Dimensions10 x 10 x 15 cm\r\n    Materials 60% cotton, 40% polyester\r\n    Other Info American heirloom jean shorts pug seitan letterpress', 1, 900000, 2, 3, 0),
(13, 'May tinh 1', '<div id=\"des-details2\" class=\"tab-pane active\">\r\n<div class=\"product-anotherinfo-wrapper\">\r\n<ul>\r\n<li>Weight 400 g</li>\r\n<li>Dimensions10 x 10 x 15 cm</li>\r\n<li>Materials 60% cotton, 40% polyester</li>\r\n<li>Other Info American heirloom jean shorts pug seitan letterpress</li>\r\n</ul>\r\n</div>\r\n</div>', 90, 0, NULL, NULL, 1, 10, 5, 'KL-MT-1', 1, '2021-06-13 02:44:07', '2021-07-13 03:57:27', 1, 'May_tinh_1.jpg', 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n\r\nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 1, 400000, 4, 8, 1),
(14, 'Giày 2', '<div id=\"des-details1\" class=\"tab-pane active\">\r\n<div class=\"product-description-wrapper\">\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>\r\n<p>ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>\r\n</div>\r\n</div>', 90, 0, NULL, NULL, 1, 7, 2, 'KL-GI-2', 1, '2021-06-13 02:47:01', '2021-07-03 07:53:01', 1, 'Giày_2.jpg', 1, 'Weight 400 g\r\n    Dimensions10 x 10 x 15 cm\r\n    Materials 60% cotton, 40% polyester\r\n    Other Info American heirloom jean shorts pug seitan letterpress', 1, 45000, 1, 1, 1),
(15, 'Mỹ phẩm 2', '<div id=\"des-details2\" class=\"tab-pane active\">\r\n<div class=\"product-anotherinfo-wrapper\">\r\n<ul>\r\n<li>Weight 400 g</li>\r\n<li>Dimensions10 x 10 x 15 cm</li>\r\n<li>Materials 60% cotton, 40% polyester</li>\r\n<li>Other Info American heirloom jean shorts pug seitan letterpress</li>\r\n</ul>\r\n</div>\r\n</div>', 90, 10, '2021-09-03', '2021-10-31', 1, 8, 3, 'KL-MP-2', 1, '2021-06-13 02:49:21', '2021-09-02 10:20:48', 1, 'Mỹ_phẩm_2.jpg', 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n\r\nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 1, 89000, 2, 5, 1),
(16, 'Mỹ phẩm 1', '<p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>\r\n<div class=\"pro-details-list\">\r\n<ul>\r\n<li>- 0.5 mm Dail</li>\r\n<li>- Inspired vector icons</li>\r\n<li>- Very modern style</li>\r\n</ul>\r\n</div>', 87, 90, NULL, NULL, 1, 8, 2, 'KL-MP-1', 1, '2021-06-13 04:11:23', '2021-07-01 04:28:46', 1, 'Mỹ_phẩm_1.jpg', 1, 'Weight 400 g\r\n    Dimensions10 x 10 x 15 cm\r\n    Materials 60% cotton, 40% polyester\r\n    Other Info American heirloom jean shorts pug seitan letterpress', 1, 2000000, 3, 9, 0),
(17, 'Giày 1', '<div id=\"des-details2\" class=\"tab-pane active\">\r\n<div class=\"product-anotherinfo-wrapper\">\r\n<ul>\r\n<li>Weight 400 g</li>\r\n<li>Dimensions10 x 10 x 15 cm</li>\r\n<li>Materials 60% cotton, 40% polyester</li>\r\n<li>Other Info American heirloom jean shorts pug seitan letterpress</li>\r\n</ul>\r\n</div>\r\n</div>', 79, 40, '2021-07-03', '2021-10-31', 1, 7, 5, 'KL-GI-1', 1, '2021-06-13 04:13:33', '2021-09-02 10:24:58', 1, 'Giày_1.jpg', 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt\r\n\r\nut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 1, 600000, 1, 1, 0),
(18, 'Quần áo 1', '<div id=\"des-details1\" class=\"tab-pane active\">\r\n<div class=\"product-description-wrapper\">\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>\r\n<p>ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>\r\n</div>\r\n</div>', 889, 80, '2021-07-03', '2021-07-06', 1, 18, 4, 'KL-QA-4', 1, '2021-06-13 04:15:24', '2021-07-02 23:19:16', 1, 'Quần_áo_1.jpg', 1, 'Weight 400 g\r\n    Dimensions10 x 10 x 15 cm\r\n    Materials 60% cotton, 40% polyester\r\n    Other Info American heirloom jean shorts pug seitan letterpress', 1, 2000000, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_features`
--

CREATE TABLE `product_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `field_id` bigint(20) UNSIGNED NOT NULL,
  `field_value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_features`
--

INSERT INTO `product_features` (`id`, `product_id`, `field_id`, `field_value`, `created_at`, `updated_at`) VALUES
(55, 14, 48, '50000', '2021-07-10 04:50:18', '2021-07-10 04:50:18'),
(56, 14, 52, '#ff0000', '2021-07-10 04:50:18', '2021-07-10 04:50:18'),
(60, 15, 63, '90000', '2021-09-02 10:20:49', '2021-09-02 10:20:49'),
(61, 15, 64, '80000', '2021-09-02 10:20:49', '2021-09-02 10:20:49'),
(62, 15, 65, '100000', '2021-09-02 10:20:49', '2021-09-02 10:20:49'),
(63, 17, 48, '500000', '2021-09-02 10:24:58', '2021-09-02 10:24:58'),
(64, 17, 49, '700000', '2021-09-02 10:24:58', '2021-09-02 10:24:58'),
(65, 17, 50, '650000', '2021-09-02 10:24:58', '2021-09-02 10:24:58'),
(66, 17, 51, '#ffff00', '2021-09-02 10:24:59', '2021-09-02 10:24:59'),
(67, 17, 52, '#ff0000', '2021-09-02 10:24:59', '2021-09-02 10:24:59'),
(68, 17, 53, '#0000ff', '2021-09-02 10:24:59', '2021-09-02 10:24:59'),
(69, 8, 58, '#ffff00', '2021-09-02 10:26:47', '2021-09-02 10:26:47'),
(70, 8, 59, '#000000', '2021-09-02 10:26:47', '2021-09-02 10:26:47'),
(71, 8, 60, '#804040', '2021-09-02 10:26:47', '2021-09-02 10:26:47'),
(72, 8, 61, '8000000', '2021-09-02 10:26:47', '2021-09-02 10:26:47'),
(73, 8, 62, '7000000', '2021-09-02 10:26:47', '2021-09-02 10:26:47');

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery`
--

CREATE TABLE `product_gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_gallery`
--

INSERT INTO `product_gallery` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(69, '16239951322b44928ae11fb9384c4cf38708677c48.jpg', 1, '2021-06-17 22:45:32', '2021-06-17 22:45:32'),
(70, '162399513219f3cd308f1455b3fa09a282e0d496f4.jpg', 1, '2021-06-17 22:45:33', '2021-06-17 22:45:33'),
(71, '16239953234c5bde74a8f110656874902f07378009.jpg', 2, '2021-06-17 22:48:43', '2021-06-17 22:48:43'),
(72, '16239953239fe8593a8a330607d76796b35c64c600.jpg', 2, '2021-06-17 22:48:44', '2021-06-17 22:48:44'),
(73, '16239953238f121ce07d74717e0b1f21d122e04521.jpg', 2, '2021-06-17 22:48:44', '2021-06-17 22:48:44'),
(74, '162399532381e74d678581a3bb7a720b019f4f1a93.jpg', 2, '2021-06-17 22:48:45', '2021-06-17 22:48:45'),
(75, '1624008899a02ffd91ece5e7efeb46db8f10a74059.jpg', 3, '2021-06-18 02:34:59', '2021-06-18 02:34:59'),
(76, '1624008899d93ed5b6db83be78efb0d05ae420158e.jpg', 3, '2021-06-18 02:35:00', '2021-06-18 02:35:00'),
(77, '16240088997ce3284b743aefde80ffd9aec500e085.jpg', 3, '2021-06-18 02:35:00', '2021-06-18 02:35:00'),
(78, '1624008899ca75910166da03ff9d4655a0338e6b09.jpg', 3, '2021-06-18 02:35:00', '2021-06-18 02:35:00'),
(79, '1624009055ede7e2b6d13a41ddf9f4bdef84fdc737.jpg', 4, '2021-06-18 02:37:35', '2021-06-18 02:37:35'),
(80, '162400905538913e1d6a7b94cb0f55994f679f5956.jpg', 4, '2021-06-18 02:37:35', '2021-06-18 02:37:35'),
(81, '16240090557eacb532570ff6858afd2723755ff790.jpg', 4, '2021-06-18 02:37:36', '2021-06-18 02:37:36'),
(82, '16240090551c9ac0159c94d8d0cbedc973445af2da.jpg', 4, '2021-06-18 02:37:36', '2021-06-18 02:37:36'),
(83, '16240091244ffce04d92a4d6cb21c1494cdfcd6dc1.jpg', 5, '2021-06-18 02:38:44', '2021-06-18 02:38:44'),
(84, '16240091246ecbdd6ec859d284dc13885a37ce8d81.jpg', 5, '2021-06-18 02:38:44', '2021-06-18 02:38:44'),
(85, '16240091242a79ea27c279e471f4d180b08d62b00a.jpg', 5, '2021-06-18 02:38:45', '2021-06-18 02:38:45'),
(86, '16240091242b24d495052a8ce66358eb576b8912c8.jpg', 5, '2021-06-18 02:38:45', '2021-06-18 02:38:45'),
(87, '16240091716da37dd3139aa4d9aa55b8d237ec5d4a.jpg', 6, '2021-06-18 02:39:31', '2021-06-18 02:39:31'),
(88, '16240091711543843a4723ed2ab08e18053ae6dc5b.jpg', 6, '2021-06-18 02:39:32', '2021-06-18 02:39:32'),
(89, '162400917182aa4b0af34c2313a562076992e50aa3.jpg', 6, '2021-06-18 02:39:32', '2021-06-18 02:39:32'),
(90, '1624009171ffeabd223de0d4eacb9a3e6e53e5448d.jpg', 6, '2021-06-18 02:39:33', '2021-06-18 02:39:33'),
(91, '1624016831903ce9225fca3e988c2af215d4e544d3.jpg', 7, '2021-06-18 04:47:11', '2021-06-18 04:47:11'),
(92, '1624016831f340f1b1f65b6df5b5e3f94d95b11daf.jpg', 7, '2021-06-18 04:47:12', '2021-06-18 04:47:12'),
(93, '16240168317a614fd06c325499f1680b9896beedeb.jpg', 7, '2021-06-18 04:47:13', '2021-06-18 04:47:13'),
(94, '1624016831c8fbbc86abe8bd6a5eb6a3b4d0411301.jpg', 7, '2021-06-18 04:47:13', '2021-06-18 04:47:13'),
(95, '16240168830d7de1aca9299fe63f3e0041f02638a3.jpg', 8, '2021-06-18 04:48:03', '2021-06-18 04:48:03'),
(96, '16240168832dace78f80bc92e6d7493423d729448e.jpg', 8, '2021-06-18 04:48:03', '2021-06-18 04:48:03'),
(97, '1624016883e2c0be24560d78c5e599c2a9c9d0bbd2.jpg', 8, '2021-06-18 04:48:04', '2021-06-18 04:48:04'),
(98, '162401688300ec53c4682d36f5c4359f4ae7bd7ba1.jpg', 8, '2021-06-18 04:48:04', '2021-06-18 04:48:04'),
(99, '162401693702a32ad2669e6fe298e607fe7cc0e1a0.jpg', 9, '2021-06-18 04:48:57', '2021-06-18 04:48:57'),
(100, '16240169370c74b7f78409a4022a2c4c5a5ca3ee19.jpg', 9, '2021-06-18 04:48:57', '2021-06-18 04:48:57'),
(101, '1624016937d86ea612dec96096c5e0fcc8dd42ab6d.jpg', 9, '2021-06-18 04:48:58', '2021-06-18 04:48:58'),
(102, '16240169371ff8a7b5dc7a7d1f0ed65aaa29c04b1e.jpg', 9, '2021-06-18 04:48:58', '2021-06-18 04:48:58'),
(103, '1624016977ede7e2b6d13a41ddf9f4bdef84fdc737.jpg', 10, '2021-06-18 04:49:37', '2021-06-18 04:49:37'),
(104, '16240169771a5b1e4daae265b790965a275b53ae50.jpg', 10, '2021-06-18 04:49:38', '2021-06-18 04:49:38'),
(105, '162401697746ba9f2a6976570b0353203ec4474217.jpg', 10, '2021-06-18 04:49:38', '2021-06-18 04:49:38'),
(106, '1624016977f73b76ce8949fe29bf2a537cfa420e8f.jpg', 10, '2021-06-18 04:49:38', '2021-06-18 04:49:38'),
(143, '16257645996ea2ef7311b482724a9b7b0bc0dd85c6.jpg', 18, '2021-07-08 10:16:39', '2021-07-08 10:16:39'),
(144, '16257645997f6ffaa6bb0b408017b62254211691b5.jpg', 18, '2021-07-08 10:16:40', '2021-07-08 10:16:40'),
(145, '16258063136766aa2750c19aad2fa1b32f36ed4aee.jpg', 16, '2021-07-08 21:51:53', '2021-07-08 21:51:53'),
(146, '1625806347b4288d9c0ec0a1841b3b3728321e7088.jpg', 16, '2021-07-08 21:52:27', '2021-07-08 21:52:27'),
(147, '16258063474ffce04d92a4d6cb21c1494cdfcd6dc1.jpg', 16, '2021-07-08 21:52:27', '2021-07-08 21:52:27'),
(148, '162580634726408ffa703a72e8ac0117e74ad46f33.jpg', 16, '2021-07-08 21:52:28', '2021-07-08 21:52:28'),
(149, '162580643751ef186e18dc00c2d31982567235c559.jpg', 17, '2021-07-08 21:53:57', '2021-07-08 21:53:57'),
(150, '1625806437c058f544c737782deacefa532d9add4c.jpg', 17, '2021-07-08 21:53:58', '2021-07-08 21:53:58'),
(151, '16258064371aa48fc4880bb0c9b8a3bf979d3b917e.jpg', 17, '2021-07-08 21:53:58', '2021-07-08 21:53:58'),
(152, '1625806461dc6a70712a252123c40d2adba6a11d84.jpg', 17, '2021-07-08 21:54:21', '2021-07-08 21:54:21'),
(153, '1625806534c86a7ee3d8ef0b551ed58e354a836f2b.jpg', 15, '2021-07-08 21:55:34', '2021-07-08 21:55:34'),
(154, '162580656932b30a250abd6331e03a2a1f16466346.jpg', 15, '2021-07-08 21:56:09', '2021-07-08 21:56:09'),
(155, '16258065697f1171a78ce0780a2142a6eb7bc4f3c8.jpg', 15, '2021-07-08 21:56:09', '2021-07-08 21:56:09'),
(156, '1625806569013d407166ec4fa56eb1e1f8cbe183b9.jpg', 15, '2021-07-08 21:56:09', '2021-07-08 21:56:09'),
(157, '1625806664d490d7b4576290fa60eb31b5fc917ad1.jpg', 14, '2021-07-08 21:57:44', '2021-07-08 21:57:44'),
(158, '1625806664559cb990c9dffd8675f6bc2186971dc2.jpg', 14, '2021-07-08 21:57:44', '2021-07-08 21:57:44'),
(159, '1625806664217eedd1ba8c592db97d0dbe54c7adfc.jpg', 14, '2021-07-08 21:57:45', '2021-07-08 21:57:45'),
(160, '1625806685e0c641195b27425bb056ac56f8953d24.jpg', 14, '2021-07-08 21:58:05', '2021-07-08 21:58:05'),
(161, '1625806723698d51a19d8a121ce581499d7b701668.jpg', 13, '2021-07-08 21:58:43', '2021-07-08 21:58:43'),
(162, '16258067498b6dd7db9af49e67306feb59a8bdc52c.jpg', 13, '2021-07-08 21:59:09', '2021-07-08 21:59:09'),
(163, '1625806749a8ecbabae151abacba7dbde04f761c37.jpg', 13, '2021-07-08 21:59:09', '2021-07-08 21:59:09'),
(164, '1625806749fe131d7f5a6b38b23cc967316c13dae2.jpg', 13, '2021-07-08 21:59:09', '2021-07-08 21:59:09'),
(165, '1625806788e995f98d56967d946471af29d7bf99f1.jpg', 12, '2021-07-08 21:59:49', '2021-07-08 21:59:49'),
(166, '1625806788d554f7bb7be44a7267068a7df88ddd20.jpg', 12, '2021-07-08 21:59:49', '2021-07-08 21:59:49'),
(167, '1625806788fc8001f834f6a5f0561080d134d53d29.jpg', 12, '2021-07-08 21:59:49', '2021-07-08 21:59:49'),
(168, '1625806809f9028faec74be6ec9b852b0a542e2f39.jpg', 12, '2021-07-08 22:00:09', '2021-07-08 22:00:09'),
(169, '16258068537f6ffaa6bb0b408017b62254211691b5.jpg', 11, '2021-07-08 22:00:53', '2021-07-08 22:00:53'),
(170, '16258068834c5bde74a8f110656874902f07378009.jpg', 11, '2021-07-08 22:01:23', '2021-07-08 22:01:23'),
(171, '1625806883fccb60fb512d13df5083790d64c4d5dd.jpg', 11, '2021-07-08 22:01:23', '2021-07-08 22:01:23'),
(172, '162580688394f6d7e04a4d452035300f18b984988c.jpg', 11, '2021-07-08 22:01:23', '2021-07-08 22:01:23');

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

CREATE TABLE `product_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tag_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rating` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_id`, `rating`, `comment`, `created_at`, `updated_at`, `status`) VALUES
(1, 16, 3, 3, 'sản phẩm bình thường', '2021-06-23 02:45:29', '2021-06-23 02:45:29', 0),
(2, 16, 2, 5, 'sản phẩm tuyệt vời', '2021-06-23 02:48:12', '2021-06-23 02:48:12', 0),
(3, 15, 2, 4, 'san pham tot', '2021-06-23 04:35:27', '2021-06-23 04:35:27', 0),
(4, 12, 2, 2, 'san pham tam duoc', '2021-06-23 05:09:20', '2021-06-23 05:09:20', 0),
(5, 13, 3, 3, 'tét', '2021-07-13 03:55:34', '2021-07-13 03:55:34', 0),
(6, 13, 3, 3, 'binh thuong', '2021-07-13 03:56:42', '2021-07-13 03:56:42', 0),
(7, 13, 3, 1, 'khong thich', '2021-07-13 03:57:27', '2021-07-13 03:57:27', 0),
(8, 11, 3, 2, 'tam duoc', '2021-07-13 21:56:28', '2021-07-13 21:56:28', 0),
(9, 11, 3, 4, 'san pham rat tot,bao hanh tot,gia re ma chat luong', '2021-07-13 22:56:40', '2021-07-13 22:56:40', 0),
(10, 11, 2, 3, 'san pham bih thuong', '2021-07-13 22:58:32', '2021-07-13 22:58:32', 0),
(11, 1, 2, 2, 'tam duoc', '2021-07-13 23:26:30', '2021-07-13 23:26:30', 0),
(12, 1, 2, 5, 'tuyet voi qua', '2021-07-13 23:26:59', '2021-07-13 23:26:59', 0),
(13, 11, 3, 1, 'khong tot lam', '2021-07-14 04:58:00', '2021-07-14 04:58:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `setting_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `setting_value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `setting_key`, `setting_value`, `created_at`, `updated_at`, `is_active`, `type`) VALUES
(1, 'Vận chuyển', '<div class=\"service-content\">\r\n                            <div class=\"service-icon\" style=\"font-size: 30px;\">\r\n                                <em class=\"fa fa-truck\"><span class=\"hidden\">Icon</span></em>\r\n                            </div>\r\n                            <div class=\"service-info\">\r\n                                <h4><a href=\"#\" title=\"Free Delivery\">Miễn phí giao hàng</a></h4>\r\n                                <p> Hóa đơn trên 200 ngàn</p>\r\n                            </div>\r\n                        </div>', '2021-06-18 09:15:04', '2021-07-05 12:03:23', 1, 'Textarea'),
(2, 'Đổi trả hàng', '<div class=\"service-content\">\r\n                            <div class=\"service-icon\" style=\"font-size: 30px;\">\r\n                                <em class=\"fa fa-refresh\"><span class=\"hidden\">Icon</span></em>\r\n                            </div>\r\n                            <div class=\"service-info\">\r\n                                <h4><a href=\"#\" title=\"Free return\">Đổi trả hàng</a></h4>\r\n                                <p>Trong 30 ngày</p>\r\n                            </div>\r\n                        </div>', '2021-06-18 09:17:25', '2021-07-05 12:03:56', 1, 'Textarea'),
(3, 'Bảo mật', '<div class=\"service-content\">\r\n                            <div class=\"service-icon\" style=\"font-size: 25px; position: relative; top: 4px;\">\r\n                                <em class=\"fa fa-cc-paypal\"><span class=\"hidden\">Icon</span></em>\r\n                            </div>\r\n                            <div class=\"service-info\">\r\n                                <h4><a href=\"#\" title=\"payment method\">Bảo mật </a></h4>\r\n                                <p>Thông tin khách hàng !</p>\r\n                            </div>\r\n                        </div>', '2021-06-18 09:20:37', '2021-07-05 12:04:52', 1, 'Textarea'),
(4, 'Hỗ trợ', '<div class=\"service-content\">\r\n                            <div class=\"service-icon\" style=\"font-size: 30px;\">\r\n                                <em class=\"fa fa-support\"><span class=\"hidden\">Icon</span></em>\r\n                            </div>\r\n                            <div class=\"service-info\">\r\n                                <h4><a href=\"#\" title=\"Support 24/7\">Hỗ trợ</a></h4>\r\n                                <p>Hỗ trợ 24/7</p>\r\n                            </div>\r\n                        </div>', '2021-07-05 11:51:38', '2021-07-05 11:51:38', 1, 'Textarea'),
(5, 'Chính sách', '<h4>Returns Policy</h4><p>You may return most new, unopened items within 30 days of delivery for a full refund. We\'ll also pay the return shipping costs if the return is a result of our error (you received an incorrect or defective item, etc.).</p><p>You should expect to receive your refund within four weeks of giving your package to the return shipper, however, in many cases you will receive a refund more quickly. This time period includes the transit time for us to receive your return from the shipper (5 to 10 business days), the time it takes us to process your return once we receive it (3 to 5 business days), and the time it takes your bank to process our refund request (5 to 10 business days).</p><p>If you need to return an item, simply login to your account, view the order using the \'Complete Orders\' link under the My Account menu and click the Return Item(s) button. We\'ll notify you via e-mail of your refund once we\'ve received and processed the returned item.</p><h4>Shipping</h4><p>We can ship to virtually any address in the world. Note that there are restrictions on some products, and some products cannot be shipped to international destinations.</p><p>When you place an order, we will estimate shipping and delivery dates for you based on the availability of your items and the shipping options you choose. Depending on the shipping provider you choose, shipping date estimates may appear on the shipping quotes page.</p><p>Please also note that the shipping rates for many items we sell are weight-based. The weight of any such item can be found on its detail page. To reflect the policies of the shipping companies we use, all weights will be rounded up to the next full pound.</p>', '2021-07-09 11:02:21', '2021-07-09 11:02:21', 1, 'Textarea');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_addresses`
--

CREATE TABLE `shipping_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_primary` tinyint(4) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `nametwo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namethree` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namefour` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `description`, `content`, `image_path`, `image_name`, `created_at`, `updated_at`, `is_active`, `nametwo`, `namethree`, `namefour`) VALUES
(1, 'Nơi mua sắm uy tín', 'Đang cập nhật', '<p>Đang cập nhật</p>\r\n<p><img src=\"/shop3/public/storage/photos/1/sliders/7.jpg\" alt=\"\" width=\"800\" height=\"800\" /></p>', NULL, 'Nơi_mua_sắm_uy_tín.png', '2021-06-13 21:39:41', '2021-07-04 03:44:54', 1, 'Cập nhật nhiều mẫu mới<br>Giá cả cạnh tranh', NULL, 'cua-hang'),
(2, 'Mừng sinh nhật', 'Đang cập nhật', '<p>Đang cập nhật</p>', NULL, 'Mừng_sinh_nhật.png', '2021-06-13 21:43:02', '2021-07-04 03:46:09', 1, 'Giảm giá nhiều mặt hàng <br >ưu đãi nhiều sản phẩm', NULL, 'cua-hang');

-- --------------------------------------------------------

--
-- Table structure for table `taggables`
--

CREATE TABLE `taggables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `taggable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taggable_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taggables`
--

INSERT INTO `taggables` (`id`, `tag_id`, `taggable_type`, `taggable_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'App\\Models\\News', 1, '2021-06-14 09:46:25', '2021-06-14 09:46:25'),
(2, 2, 'App\\Models\\News', 1, '2021-06-14 09:46:25', '2021-06-14 09:46:25'),
(3, 3, 'App\\Models\\News', 2, '2021-06-14 09:48:46', '2021-06-14 09:48:46'),
(4, 2, 'App\\Models\\News', 2, '2021-06-14 09:48:46', '2021-06-14 09:48:46'),
(5, 4, 'App\\Models\\News', 3, '2021-06-14 09:49:57', '2021-06-14 09:49:57'),
(6, 5, 'App\\Models\\News', 3, '2021-06-14 09:49:57', '2021-06-14 09:49:57'),
(7, 1, 'App\\Models\\News', 4, '2021-06-14 09:50:30', '2021-06-14 09:50:30'),
(8, 2, 'App\\Models\\News', 4, '2021-06-14 09:50:30', '2021-06-14 09:50:30'),
(9, 3, 'App\\Models\\News', 4, '2021-06-14 09:50:30', '2021-06-14 09:50:30'),
(10, 6, 'App\\Models\\News', 5, '2021-06-26 21:07:27', '2021-06-26 21:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'đèn', '2021-06-14 09:46:25', '2021-06-14 09:46:25'),
(2, 'ghe', '2021-06-14 09:46:25', '2021-06-14 09:46:25'),
(3, 'bàn', '2021-06-14 09:48:45', '2021-06-14 09:48:45'),
(4, 'đồng hồ', '2021-06-14 09:49:57', '2021-06-14 09:49:57'),
(5, 'giường', '2021-06-14 09:49:57', '2021-06-14 09:49:57'),
(6, 'gioi-thieu', '2021-06-26 21:07:26', '2021-06-26 21:07:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_super_admin` tinyint(4) NOT NULL DEFAULT '0',
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_super_admin`, `is_active`, `image`, `address`, `country`, `city`, `postal_code`, `state`, `mobile`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$wDY6X5.xxXCIBKGmnKwjgufClU8UMiL.kp4BWzYebLN0Y3ulMCsHW', NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'cuong', 'cuong@gmail.com', NULL, '$2y$10$Zv19bfMiSgrt5vmtCRBC0.lW2Yua.DyIWQ35eoHrDOUqvQ17gpI8q', NULL, '2021-06-17 09:09:04', '2021-06-20 23:07:18', 0, 1, NULL, '345', NULL, 'TP HCM', NULL, '3', '0909090'),
(3, 'le minh chau', 'chau@gmail.com', NULL, '$2y$10$6FhwA0E/rdRM/3BfULYBAu7v9Pll/CaBq2WVWQiPPrexnJ1KmAmV6', NULL, '2021-06-17 09:15:55', '2021-09-02 22:07:08', 0, 1, '1626542662_.png', '111/22233333', NULL, 'TP HCM', NULL, '11111212', '89898'),
(4, 'thy', 'thy@gmail.com', NULL, '$2y$10$Eny5.Uz/fLvRq80oIq4bCOUvpFtOGUCPcre208fn3rK4YnG91W.zS', NULL, '2021-07-04 05:22:39', '2021-07-04 05:22:39', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `category_features`
--
ALTER TABLE `category_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_features_category_id_foreign` (`category_id`);

--
-- Indexes for table `cat_news`
--
ALTER TABLE `cat_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_news_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_address`
--
ALTER TABLE `delivery_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_user_id_foreign` (`user_id`),
  ADD KEY `news_cat_news_id_foreign` (`cat_news_id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payment_methods_slug_unique` (`slug`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_created_by_foreign` (`created_by`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_features`
--
ALTER TABLE `product_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_features_product_id_foreign` (`product_id`),
  ADD KEY `product_features_field_id_foreign` (`field_id`);

--
-- Indexes for table `product_gallery`
--
ALTER TABLE `product_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_gallery_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_tag_product_id_foreign` (`product_id`),
  ADD KEY `product_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_setting_key_unique` (`setting_key`);

--
-- Indexes for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipping_addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shopping_cart_user_id_foreign` (`user_id`),
  ADD KEY `shopping_cart_product_id_foreign` (`product_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taggables`
--
ALTER TABLE `taggables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `taggables_tag_id_foreign` (`tag_id`),
  ADD KEY `taggables_taggable_type_taggable_id_index` (`taggable_type`,`taggable_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `category_features`
--
ALTER TABLE `category_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `cat_news`
--
ALTER TABLE `cat_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `delivery_address`
--
ALTER TABLE `delivery_address`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders_products`
--
ALTER TABLE `orders_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_features`
--
ALTER TABLE `product_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `product_gallery`
--
ALTER TABLE `product_gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `taggables`
--
ALTER TABLE `taggables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_features`
--
ALTER TABLE `category_features`
  ADD CONSTRAINT `category_features_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cat_news`
--
ALTER TABLE `cat_news`
  ADD CONSTRAINT `cat_news_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `cat_news` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_cat_news_id_foreign` FOREIGN KEY (`cat_news_id`) REFERENCES `cat_news` (`id`),
  ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `product_features`
--
ALTER TABLE `product_features`
  ADD CONSTRAINT `product_features_field_id_foreign` FOREIGN KEY (`field_id`) REFERENCES `category_features` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_features_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_gallery`
--
ALTER TABLE `product_gallery`
  ADD CONSTRAINT `product_gallery_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD CONSTRAINT `product_tag_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  ADD CONSTRAINT `shipping_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD CONSTRAINT `shopping_cart_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shopping_cart_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `taggables`
--
ALTER TABLE `taggables`
  ADD CONSTRAINT `taggables_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
