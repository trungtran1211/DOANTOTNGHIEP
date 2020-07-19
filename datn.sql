-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 10:15 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datn`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2020_01_13_043341_vp_user', 1),
('2020_01_14_042907_vp_categories', 2),
('2020_05_12_072005_vp_DetailBill', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vp_bill`
--

CREATE TABLE IF NOT EXISTS `vp_bill` (
  `bil_id` int(10) unsigned NOT NULL,
  `bil_iduser` int(10) NOT NULL,
  `bil_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bil_phone` int(11) NOT NULL,
  `bil_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bil_total` int(20) NOT NULL,
  `bil_payments` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bil_ngaydat` date DEFAULT NULL,
  `bil_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vp_bill`
--

INSERT INTO `vp_bill` (`bil_id`, `bil_iduser`, `bil_name`, `bil_phone`, `bil_address`, `bil_total`, `bil_payments`, `bil_ngaydat`, `bil_status`, `created_at`, `updated_at`) VALUES
(23, 10000, 'Trần thanh trung', 335234285, '85 Tô hiệu Hóa minh Liên Chiểu Dà Nẵng', 1607242, 'Thanh toán khi nhận hàng', '2020-06-14', '1', '2020-06-13 22:34:22', '2020-06-13 22:34:22'),
(24, 9999, 'Nguyễn Văn A', 335234285, '80 tô hiệu', 900000, 'Thanh toán khi nhận hàng', '2020-06-14', '1', '2020-06-13 22:38:03', '2020-06-13 22:38:03'),
(25, 9999, 'Nguyen  Van Tu', 335234285, '80 tô hiệu', 450000, 'Thanh toán khi nhận hàng', '2020-06-14', '1', '2020-06-14 01:03:30', '2020-06-14 01:03:30'),
(30, 10000, 'Trần thanh trung', 335234285, '85 Tô hiệu Hóa minh Liên Chiểu Dà Nẵng', 450000, 'Thanh toán khi nhận hàng', '2020-06-15', '1', '2020-06-14 20:02:10', '2020-06-14 20:02:10'),
(31, 10000, 'Trần thanh trung', 335234285, '85 Tô hiệu Hóa minh Liên Chiểu Dà Nẵng', 450000, 'Thanh toán khi nhận hàng', '2020-06-15', '1', '2020-06-14 20:20:31', '2020-06-14 20:20:31'),
(32, 10000, 'Trần thanh trung', 335234285, '85 Tô hiệu Hóa minh Liên Chiểu Dà Nẵng', 450000, 'Thanh toán khi nhận hàng', '2020-06-15', '1', '2020-06-14 20:28:17', '2020-06-14 20:28:17'),
(33, 10000, 'Trần thanh trung', 335234285, '85 Tô hiệu Hóa minh Liên Chiểu Dà Nẵng', 450000, 'Thanh toán khi nhận hàng', '2020-06-15', '1', '2020-06-14 20:30:27', '2020-06-14 20:30:27'),
(34, 10000, 'Trần thanh trung', 335234285, '85 Tô hiệu Hóa minh Liên Chiểu Dà Nẵng', 450000, 'Thanh toán khi nhận hàng', '2020-06-15', '1', '2020-06-14 20:30:46', '2020-06-14 20:30:46'),
(35, 10000, 'Trần thanh trung', 335234285, '85 Tô hiệu Hóa minh Liên Chiểu Dà Nẵng', 450000, 'Thanh toán khi nhận hàng', '2020-06-15', '1', '2020-06-14 20:31:54', '2020-06-14 20:31:54'),
(36, 10000, 'Trần thanh trung', 335234285, '85 Tô hiệu Hóa minh Liên Chiểu Dà Nẵng', 450000, 'Thanh toán khi nhận hàng', '2020-06-15', '1', '2020-06-14 20:32:15', '2020-06-14 20:32:15'),
(37, 10000, 'Trần thanh trung', 335234285, '85 Tô hiệu Hóa minh Liên Chiểu Dà Nẵng', 450000, 'Thanh toán khi nhận hàng', '2020-06-15', '1', '2020-06-14 20:33:02', '2020-06-14 20:33:02'),
(38, 10000, 'Trần thanh trung', 335234285, '85 Tô hiệu Hóa minh Liên Chiểu Dà Nẵng', 450000, 'Thanh toán khi nhận hàng', '2020-06-15', '1', '2020-06-14 20:34:02', '2020-06-14 20:34:02'),
(39, 10000, 'Trần thanh trung', 335234285, '85 Tô hiệu Hóa minh Liên Chiểu Dà Nẵng', 450000, 'Thanh toán khi nhận hàng', '2020-06-15', '1', '2020-06-14 20:34:35', '2020-06-14 20:34:35'),
(40, 10000, 'Trần thanh trung', 335234285, '85 Tô hiệu Hóa minh Liên Chiểu Dà Nẵng', 450000, 'Thanh toán khi nhận hàng', '2020-06-15', '1', '2020-06-14 20:35:21', '2020-06-14 20:35:21'),
(41, 10000, 'Trần thanh trung', 335234285, '85 Tô hiệu Hóa minh Liên Chiểu Dà Nẵng', 450000, 'Thanh toán khi nhận hàng', '2020-06-15', '1', '2020-06-14 20:35:37', '2020-06-14 20:35:37'),
(42, 10000, 'Trần thanh trung', 335234285, '85 Tô hiệu Hóa minh Liên Chiểu Dà Nẵng', 450000, 'Thanh toán khi nhận hàng', '2020-06-15', '1', '2020-06-14 20:38:49', '2020-06-14 20:38:49'),
(43, 10000, 'Trần thanh trung', 335234285, '85 Tô hiệu Hóa minh Liên Chiểu Dà Nẵng', 900000, 'Thanh toán khi nhận hàng', '2020-06-15', '1', '2020-06-14 20:42:01', '2020-06-14 20:42:01'),
(44, 10000, 'Trần thanh trung', 335234285, '85 Tô hiệu Hóa minh Liên Chiểu Dà Nẵng', 900000, 'Thanh toán khi nhận hàng', '2020-06-15', '1', '2020-06-14 20:42:54', '2020-06-14 20:42:54'),
(45, 10000, 'Trần thanh trung', 335234285, '85 Tô hiệu Hóa minh Liên Chiểu Dà Nẵng', 1556242, 'Thanh toán khi nhận hàng', '2020-06-15', '1', '2020-06-14 20:43:56', '2020-06-14 20:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `vp_categories`
--

CREATE TABLE IF NOT EXISTS `vp_categories` (
  `cate_id` int(10) unsigned NOT NULL,
  `cate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vp_categories`
--

INSERT INTO `vp_categories` (`cate_id`, `cate_name`, `cate_slug`, `created_at`, `updated_at`, `img`) VALUES
(1, 'GUCCI', 'gucci', NULL, NULL, '4.png'),
(2, 'ADIDAS', 'adidas', NULL, NULL, '5.png'),
(3, 'CONVERSE', 'converse', '2020-01-13 23:15:01', '2020-01-13 23:15:01', '6.png'),
(4, 'VANS', 'vans', '2020-01-13 23:15:22', '2020-01-13 23:15:22', '7.png'),
(5, 'BALENCIAGA', 'balenciaga', '2020-01-13 23:26:51', '2020-01-13 23:26:51', '8.png'),
(6, 'NIKE', 'nike', '2020-01-13 23:27:07', '2020-01-13 23:27:07', '9.png'),
(7, 'FILA', 'fila', '2020-01-20 21:23:08', '2020-01-20 21:23:08', '10.png'),
(8, 'PUMA', 'puma', '2020-03-04 02:10:10', '2020-03-04 02:10:10', '11.svg');

-- --------------------------------------------------------

--
-- Table structure for table `vp_comment`
--

CREATE TABLE IF NOT EXISTS `vp_comment` (
  `com_id` int(20) NOT NULL,
  `com_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `com_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `com_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `com_product` int(10) unsigned NOT NULL,
  `com_status` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vp_comment`
--

INSERT INTO `vp_comment` (`com_id`, `com_email`, `com_name`, `com_content`, `com_product`, `com_status`, `updated_at`, `created_at`) VALUES
(4, 'thanhtrungtran8888@gmail.com', 'ứdfgsdfg', 'dfg', 34, NULL, '2020-05-12 03:56:54', '2020-05-12 03:56:54'),
(5, 'thanhtrungtran@gmail.com', 'Nguyen  Van Tu', 'giày dỏm', 33, NULL, '2020-06-01 04:31:49', '2020-06-01 04:31:49'),
(6, 'thanhtrungtran8888@gmail.com', 'Nguyen  Van Tu', 'asdfghjk', 33, NULL, '2020-07-17 21:19:48', '2020-07-17 21:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `vp_detailbill`
--

CREATE TABLE IF NOT EXISTS `vp_detailbill` (
  `det_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `det_quantity` int(20) NOT NULL,
  `det_total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vp_detailbill`
--

INSERT INTO `vp_detailbill` (`det_id`, `bill_id`, `product_id`, `det_quantity`, `det_total`, `created_at`, `updated_at`) VALUES
(12, 23, 39, 1, 257242, '2020-06-13 22:34:22', '2020-06-13 22:34:22'),
(13, 23, 27, 1, 450000, '2020-06-13 22:34:22', '2020-06-13 22:34:22'),
(14, 23, 33, 2, 900000, '2020-06-13 22:34:22', '2020-06-13 22:34:22'),
(15, 24, 27, 1, 450000, '2020-06-13 22:38:03', '2020-06-13 22:38:03'),
(16, 24, 30, 1, 450000, '2020-06-13 22:38:03', '2020-06-13 22:38:03'),
(17, 25, 27, 1, 450000, '2020-06-14 01:03:30', '2020-06-14 01:03:30'),
(18, 30, 33, 1, 450000, '2020-06-14 20:02:10', '2020-06-14 20:02:10'),
(19, 31, 33, 1, 450000, '2020-06-14 20:20:31', '2020-06-14 20:20:31'),
(20, 32, 33, 1, 450000, '2020-06-14 20:28:17', '2020-06-14 20:28:17'),
(21, 33, 33, 1, 450000, '2020-06-14 20:30:27', '2020-06-14 20:30:27'),
(22, 34, 33, 1, 450000, '2020-06-14 20:30:46', '2020-06-14 20:30:46'),
(23, 35, 33, 1, 450000, '2020-06-14 20:31:54', '2020-06-14 20:31:54'),
(24, 36, 33, 1, 450000, '2020-06-14 20:32:15', '2020-06-14 20:32:15'),
(25, 37, 33, 1, 450000, '2020-06-14 20:33:02', '2020-06-14 20:33:02'),
(26, 40, 33, 1, 450000, '2020-06-14 20:35:21', '2020-06-14 20:35:21'),
(27, 41, 33, 1, 450000, '2020-06-14 20:35:37', '2020-06-14 20:35:37'),
(28, 42, 33, 1, 450000, '2020-06-14 20:38:49', '2020-06-14 20:38:49'),
(29, 43, 33, 2, 900000, '2020-06-14 20:42:01', '2020-06-14 20:42:01'),
(30, 44, 33, 2, 900000, '2020-06-14 20:42:54', '2020-06-14 20:42:54'),
(31, 45, 33, 2, 900000, '2020-06-14 20:43:56', '2020-06-14 20:43:56'),
(32, 45, 29, 1, 399000, '2020-06-14 20:43:57', '2020-06-14 20:43:57'),
(33, 45, 39, 1, 257242, '2020-06-14 20:43:57', '2020-06-14 20:43:57'),
(34, 47, 33, 1, 450000, '2020-06-14 20:45:30', '2020-06-14 20:45:30'),
(35, 47, 31, 1, 449000, '2020-06-14 20:45:30', '2020-06-14 20:45:30'),
(36, 47, 39, 1, 257242, '2020-06-14 20:45:30', '2020-06-14 20:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `vp_productitem`
--

CREATE TABLE IF NOT EXISTS `vp_productitem` (
  `id` int(11) NOT NULL,
  `Ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vp_products`
--

CREATE TABLE IF NOT EXISTS `vp_products` (
  `prod_id` int(10) unsigned NOT NULL,
  `prod_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_warranty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_accessories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_promotion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prod_status` int(4) NOT NULL,
  `prod_description` text COLLATE utf8mb4_unicode_ci,
  `prod_featured` int(4) NOT NULL,
  `prod_cate` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `soluongcon` int(11) DEFAULT NULL,
  `soluongban` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vp_products`
--

INSERT INTO `vp_products` (`prod_id`, `prod_name`, `prod_slug`, `prod_price`, `prod_img`, `prod_warranty`, `prod_accessories`, `prod_condition`, `prod_promotion`, `prod_status`, `prod_description`, `prod_featured`, `prod_cate`, `created_at`, `updated_at`, `soluongcon`, `soluongban`) VALUES
(25, 'GIÀY GUCCI RHYTON LEATHER LOGO COLOR', 'giay-gucci-rhyton-leather-logo-color', '2400000', 'Giay-Gucci-Ryhton-Leather-REP-300x300.jpg', '💯 Bảo Hành 12 Tháng', '.', 'Mới 100%', NULL, 1, '<p><strong>Gi&agrave;y Gucci Rhyton Logo Leather Sneaker</strong>&nbsp;sử dụng mặt đế được cấu tạo đặc biệt, mang lại cảm gi&aacute;c thoải m&aacute;i cho người mang cũng như chống trơn trượt l&agrave; một trong những ưu điểm m&agrave; d&ograve;ng gi&agrave;y Gucci cho đến hiện tại vẫn đạt được.</p>', 1, 1, NULL, '2020-03-08 21:41:38', 20, NULL),
(26, 'GIÀY GUCCI SNEAKER RẮN ĐÍNH ĐÁ', 'giay-gucci-sneaker-ran-dinh-da', '999000', 'Giay-Gucci-Ran-Dinh-Da-Replica-1.1-300x300.jpg', '💯 Bảo Hành 12 Tháng', '.', 'Mới 100%', 'Khuyến mãi một đôi tất', 1, '<p>GI&Agrave;Y GUCCI SNEAKER RẮN Đ&Iacute;NH Đ&Aacute; M&Agrave;U TRẮNG TH&Ecirc;U HOA VĂN. HỌA TIẾT RẮN&nbsp;ĐANG L&Agrave; HỌA TIẾT ĐƯỢC SẮM NHIỀU NHẤT BỞI SỰ ĐƠN GIẢN M&Agrave; TINH TẾ, PHONG&nbsp;C&Aacute;CH. GUCCI THỰC SỰ Đ&Atilde; TRỞ TH&Agrave;NH XU HƯỚNG M&Agrave; BẠN KH&Ocirc;NG THỂ L&Agrave;M LƠ ĐƯỢC.</p>', 0, 1, NULL, '2020-03-08 21:40:51', 20, NULL),
(27, 'GIÀY GUCCI SNEAKER RHYTON HÌNH DÂU', 'giay-gucci-sneaker-rhyton-hinh-dau', '450000', 'Giay-gucci-rhyton-DAU-300x300.jpg', '💯 Bảo Hành 12 Tháng', '.', 'Mới 100%', 'Khuyến mãi một đôi tất', 1, '<p><strong>Gi&agrave;y Gucci Sneaker Rhyton H&igrave;nh D&acirc;u&nbsp;</strong>sử dụng mặt đế được cấu tạo đặc biệt, mang lại cảm gi&aacute;c thoải m&aacute;i cho người mang cũng như chống trơn trượt l&agrave; một trong những ưu điểm m&agrave; d&ograve;ng gi&agrave;y Gucci cho đến hiện tại vẫn đạt được.</p>\r\n\r\n<p>Phần b&ecirc;n trong&nbsp;<a href="https://shopgiaythethaogiare.com/san-pham/giay-gucci-sneaker-rhyton-hinh-dau/">Gi&agrave;y Gucci Sneaker Rhyton H&igrave;nh D&acirc;u</a><a href="https://shopgiaythethaogiare.com/san-pham/giay-gucci-sneaker-con-ong/">&nbsp;</a>sử dụng chất liệu vải tho&aacute;ng kh&iacute; kh&ocirc;ng g&acirc;y ứa nước qu&aacute; l&acirc;u, phần ngo&agrave;i được sử dụng chất liệu chống thấm nước. Tổng thể thiết kế đạt đến độ ho&agrave;n mỹ về chất lượng cũng như đạt được t&iacute;nh thẫm mỹ cao.</p>', 1, 1, NULL, '2020-06-14 01:03:30', 15, 1),
(28, 'GIÀY GUCCI SNEAKER RHYTON GOLD', 'giay-gucci-sneaker-rhyton-gold', '450000', 'Giay-gucci-rhyton-gold-300x300.jpg', '💯 Bảo Hành 12 Tháng', '.', 'Mới 100%', NULL, 1, '<p>&quot;Mới 100%&quot;</p>', 0, 1, NULL, '2020-03-08 22:15:14', 20, NULL),
(29, 'GIÀY SNEAKERS GUCCI RYHTON KEM', 'giay-sneakers-gucci-ryhton-kem', '399000', 'Giay-gucci-rhyton-kem-tron-300x300.jpg', '💯 Bảo Hành 12 Tháng', '.', 'Mới 100%', NULL, 1, '<p>&quot;Mới 100%&quot;</p>', 0, 1, NULL, '2020-06-14 20:43:57', 19, 1),
(30, 'GIÀY GUCCI SNEAKER RHYTON LOGO 7 MÀU', 'giay-gucci-sneaker-rhyton-logo-7-mau', '450000', 'Giay-gucci-rhyton-KIM-TUYEN-300x300.jpg', '💯 Bảo Hành 12 Tháng', '.', 'Mới 100%', NULL, 1, '<p>&quot;Mới 100%&quot;</p>', 0, 1, NULL, '2020-06-13 22:38:03', 19, 1),
(31, 'GIÀY GUCCI SNEAKER RHYTON NY', 'giay-gucci-sneaker-rhyton-ny', '449000', 'Giay-Gucci-Rhyton-NY-300x300.jpg', '💯 Bảo Hành 12 Tháng', '.', 'Mới 100%', NULL, 1, '<p><strong>Gi&agrave;y Gucci Sneaker Rhyton NY&nbsp;</strong>sử dụng mặt đế được cấu tạo đặc biệt, mang lại cảm gi&aacute;c thoải m&aacute;i cho người mang cũng như chống trơn trượt l&agrave; một trong những ưu điểm m&agrave; d&ograve;ng gi&agrave;y Gucci cho đến hiện tại vẫn đạt được.</p>\r\n\r\n<p>Phần b&ecirc;n trong&nbsp;<strong>Gi&agrave;y Gucci Sneaker Rhyton NY</strong>&nbsp;sử dụng chất liệu vải tho&aacute;ng kh&iacute; kh&ocirc;ng g&acirc;y ứa nước qu&aacute; l&acirc;u, phần ngo&agrave;i được sử dụng chất liệu chống thấm nước. Tổng thể thiết kế đạt đến độ ho&agrave;n mỹ về chất lượng cũng như đạt được t&iacute;nh thẫm mỹ cao.</p>', 0, 1, NULL, '2020-06-14 20:45:30', 19, 1),
(32, 'GIÀY GUCCI SNEAKER RHYTON HÌNH RẮN', 'giay-gucci-sneaker-rhyton-hinh-ran', '450000', 'Giay-gucci-rhyton-Ran-300x300.jpg', '💯 Bảo Hành 12 Tháng', '.', 'Mới 100%', NULL, 1, '<p><strong>Gi&agrave;y Gucci Sneaker Rhyton H&igrave;nh Rắn&nbsp;</strong>sử dụng mặt đế được cấu tạo đặc biệt, mang lại cảm gi&aacute;c thoải m&aacute;i cho người mang cũng như chống trơn trượt l&agrave; một trong những ưu điểm m&agrave; d&ograve;ng gi&agrave;y Gucci cho đến hiện tại vẫn đạt được.</p>\r\n\r\n<p>Phần b&ecirc;n trong&nbsp;<a href="https://shopgiaythethaogiare.com/san-pham/giay-gucci-sneaker-rhyton-hinh-ran/">Gi&agrave;y Gucci Sneaker Rhyton H&igrave;nh Rắn</a><a href="https://shopgiaythethaogiare.com/san-pham/giay-gucci-sneaker-con-ong/">&nbsp;</a>sử dụng chất liệu vải tho&aacute;ng kh&iacute; kh&ocirc;ng g&acirc;y ứa nước qu&aacute; l&acirc;u, phần ngo&agrave;i được sử dụng chất liệu chống thấm nước. Tổng thể thiết kế đạt đến độ ho&agrave;n mỹ về chất lượng cũng như đạt được t&iacute;nh thẫm mỹ cao.</p>', 0, 1, NULL, '2020-03-08 22:30:39', 20, NULL),
(33, 'GIÀY SNEAKERS GUCCI RHYTON TRÁI TIM', 'giay-sneakers-gucci-rhyton-trai-tim', '450000', 'Giay-gucci-rhyton-TIM-300x300.jpg', '💯 Bảo Hành 12 Tháng', '.', 'Mới 100%', 'Khuyến mãi một đôi tất', 1, '<p><a href="https://shopgiaythethaogiare.com/san-pham/giay-gucci-sneaker-rhyton-logo-7-mau/"><strong>Gi&agrave;y Sneakers Gucci Rhyton Tr&aacute;i Tim</strong>&nbsp;</a>l&agrave; một trong những bộ sưu tập được ưu &aacute;i của Gucci khi mang lại c&aacute;i nh&igrave;n mới mẻ cho người d&ugrave;ng trong những c&aacute;ch phối nổi tiếng của thương hiệu Gucci. G&oacute;t gi&agrave;y sử dụng loại vải tốt, c&oacute; lớp đệm v&ocirc; c&ugrave;ng thoải m&aacute;i.</p>\r\n\r\n<p><strong>Gi&agrave;y Sneakers Gucci Rhyton Tr&aacute;i Tim&nbsp;</strong>sử dụng mặt đế được cấu tạo đặc biệt, mang lại cảm gi&aacute;c thoải m&aacute;i cho người mang cũng như chống trơn trượt l&agrave; một trong những ưu điểm m&agrave; d&ograve;ng gi&agrave;y Gucci cho đến hiện tại vẫn đạt được.</p>\r\n\r\n<p>Phần b&ecirc;n trong&nbsp;<strong>Gi&agrave;y Sneakers Gucci Rhyton Tr&aacute;i Tim</strong><a href="https://shopgiaythethaogiare.com/san-pham/giay-gucci-sneaker-con-ong/">&nbsp;</a>sử dụng chất liệu vải tho&aacute;ng kh&iacute; kh&ocirc;ng g&acirc;y ứa nước qu&aacute; l&acirc;u, phần ngo&agrave;i được sử dụng chất liệu chống thấm nước. Tổng thể thiết kế đạt đến độ ho&agrave;n mỹ về chất lượng cũng như đạt được t&iacute;nh thẫm mỹ cao.</p>', 1, 1, NULL, '2020-06-14 20:45:30', -3, 1),
(34, 'GUCCI RHYTON MOUTH PRINT SNEAKERS', 'gucci-rhyton-mouth-print-sneakers', '1399000', 'Gucci-Rhyton-Hinh-Moi-Rep-300x300.jpg', '💯 Bảo Hành 12 Tháng', '.', 'Mới 100%', 'Khuyến mãi một đôi tất', 1, '<p><strong><a href="http://anchuongshoes.com/gucci-rhyton-mouth-print-sneakers">Gucci Rhyton Mouth Print Sneakers</a>&nbsp;</strong>l&agrave; một trong những bộ sưu tập được ưu &aacute;i của Gucci khi mang lại c&aacute;i nh&igrave;n mới mẻ cho người d&ugrave;ng trong những c&aacute;ch phối nổi tiếng của thương hiệu Gucci. G&oacute;t gi&agrave;y sử dụng loại vải tốt, c&oacute; lớp đệm v&ocirc; c&ugrave;ng thoải m&aacute;i. Th&ecirc;m v&agrave;o đ&oacute; với những vệt bẩn xen kẽ l&agrave;m t&ocirc;n l&ecirc;n vẻ chất của đ&ocirc;i&nbsp;<a href="http://anchuongshoes.com/gucci-rhyton-mouth-print-sneakers"><strong>Gucci Rhyton Mouth Print&nbsp;</strong></a><strong>Sneakers.</strong></p>\r\n\r\n<p><strong><a href="http://anchuongshoes.com/gucci-rhyton-mouth-print-sneakers">Gucci Rhyton Mouth Print Sneakers</a>&nbsp;</strong>sử dụng mặt đế được cấu tạo đặc biệt, mang lại cảm gi&aacute;c thoải m&aacute;i cho người mang cũng như chống trơn trượt l&agrave; một trong những ưu điểm m&agrave; d&ograve;ng gi&agrave;y Gucci cho đến hiện tại vẫn đạt được.</p>', 0, 1, NULL, NULL, 20, NULL),
(39, 'Giay-Adidas-AlphaBoost-Allblack', 'giay-adidas-alphaboost-allblack', '257242', 'Giay-Adidas-AlphaBoost-Allblack.jpg', '💯 Bảo Hành 12 Tháng', '.', 'Mới 100%', 'Khuyến mãi một đôi tất', 1, '<p>dfghjkl</p>', 2, 1, NULL, '2020-06-14 20:45:30', 10, 1),
(40, 'đá', 'da', '257242', '20.PNG', '💯 Bảo Hành 12 Tháng', '.sdfdfs', 'Mới 100%', 'Khuyến mãi một đôi tất', 1, NULL, 2, 1, NULL, NULL, 20, NULL),
(41, 'đá', 'da', '257242', '20.PNG', '💯 Bảo Hành 12 Tháng', '.sdfdfs', 'Mới 100%', 'Khuyến mãi một đôi tất', 1, NULL, 2, 1, NULL, NULL, 20, NULL),
(42, 'đá', 'da', '257242', '20.PNG', '💯 Bảo Hành 12 Tháng', '.sdfdfs', 'Mới 100%', 'Khuyến mãi một đôi tất', 1, NULL, 2, 1, NULL, NULL, 20, NULL),
(43, 'Tỳ hưu', 'ty-huu', '3000000', '3.PNG', '💯 Bảo Hành 12 Tháng', '.', 'Mới 100%', 'Khuyến mãi một đôi tất', 1, '<p>dfghm,jhgjgh</p>', 2, 1, NULL, NULL, 20, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vp_size`
--

CREATE TABLE IF NOT EXISTS `vp_size` (
  `id` int(20) NOT NULL,
  `numsize` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vp_size`
--

INSERT INTO `vp_size` (`id`, `numsize`) VALUES
(1, 37),
(2, 38),
(3, 39),
(4, 40),
(5, 41),
(6, 42),
(7, 43),
(8, 44);

-- --------------------------------------------------------

--
-- Table structure for table `vp_sizeproduct`
--

CREATE TABLE IF NOT EXISTS `vp_sizeproduct` (
  `sizpr_id` int(20) NOT NULL,
  `size_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `sizpr_number` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vp_sizeproduct`
--

INSERT INTO `vp_sizeproduct` (`sizpr_id`, `size_id`, `product_id`, `sizpr_number`) VALUES
(1, 37, 42, 37),
(2, 38, 42, 38),
(3, 39, 42, 39),
(4, 40, 42, 40),
(5, 41, 42, 41),
(6, 42, 42, 42),
(7, 43, 42, 43),
(8, 44, 42, 44),
(9, 37, 43, 66),
(10, 38, 43, 65),
(11, 39, 43, 44),
(12, 40, 43, 34),
(13, 41, 43, 23),
(14, 42, 43, 87),
(15, 43, 43, 76),
(16, 44, 43, 65);

-- --------------------------------------------------------

--
-- Table structure for table `vp_slide`
--

CREATE TABLE IF NOT EXISTS `vp_slide` (
  `sli_id` int(11) NOT NULL,
  `sli_title` text COLLATE utf8_unicode_ci NOT NULL,
  `sli_content` text COLLATE utf8_unicode_ci NOT NULL,
  `sli_img` text COLLATE utf8_unicode_ci NOT NULL,
  `sli_status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vp_slide`
--

INSERT INTO `vp_slide` (`sli_id`, `sli_title`, `sli_content`, `sli_img`, `sli_status`) VALUES
(7, 'sdfgh', 'sdfghj', 'ms_banner_img2.jpg', 0),
(8, 'fghyujikl', 'dfghjkl', 'slideshow_2.jpg', 0),
(9, 'hjkdfghj', 'sdfghjk', 'slider_2.jpg', 1),
(10, 'ádfghjkl', 'ẻtyuio', 'slider_2.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vp_users`
--

CREATE TABLE IF NOT EXISTS `vp_users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=10001 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vp_users`
--

INSERT INTO `vp_users` (`id`, `name`, `email`, `phone`, `address`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Nguyen  Van Tu', 'tran1@gmail.com', 335234285, 'Thôn đại mỹ đại hưng đại lộc quảng nam', '$2y$10$YP0kWU59dT6OXWT98YAi9.iUIFggQN5mEf0MyOFdIGsIQvhDZy6WG', 1, 'NZKkk7hULyI45Sxgo9SDgJUEE99ZTR04CmMeAHSnCn2S8iJLb73TuyumIYQ5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Nguyễn Văn A', 'trung@gmail.com', 335234285, 'Thôn đại mỹ đại hưng đại lộc quảng nam', '$2y$10$4HmjjCrnMi/EWYQHme1L5ODvnBaMfs.bxcvaNHxqTHkFHAkT/2r.u', 2, 'fKRiDMVF91V4nOuCgHjevHwkm2Xbr58LJyLH2HpJt9nGutbQcgDhQu738UhF', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10000, 'Trần thanh trung', 'thanhtrungtran8888@gmail.com', 335234285, '85 Tô hiệu Hóa minh Liên Chiểu Dà Nẵng', '$2y$10$EP3UCWJz14UDYTMWemqHWeJgSy.zq.JKUh5KRWGAbtMts8d3JxEGq', 2, 'oSSUfIsWKZYOG6GPXAcDtrpIoyOKu63jIMljGYzBOX2hjGr03Zo7FkcZMMWN', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vp_bill`
--
ALTER TABLE `vp_bill`
  ADD PRIMARY KEY (`bil_id`);

--
-- Indexes for table `vp_categories`
--
ALTER TABLE `vp_categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `vp_comment`
--
ALTER TABLE `vp_comment`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `vp_detailbill`
--
ALTER TABLE `vp_detailbill`
  ADD PRIMARY KEY (`det_id`);

--
-- Indexes for table `vp_productitem`
--
ALTER TABLE `vp_productitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vp_products`
--
ALTER TABLE `vp_products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `vp_size`
--
ALTER TABLE `vp_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vp_sizeproduct`
--
ALTER TABLE `vp_sizeproduct`
  ADD PRIMARY KEY (`sizpr_id`);

--
-- Indexes for table `vp_slide`
--
ALTER TABLE `vp_slide`
  ADD PRIMARY KEY (`sli_id`);

--
-- Indexes for table `vp_users`
--
ALTER TABLE `vp_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vp_bill`
--
ALTER TABLE `vp_bill`
  MODIFY `bil_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `vp_categories`
--
ALTER TABLE `vp_categories`
  MODIFY `cate_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `vp_comment`
--
ALTER TABLE `vp_comment`
  MODIFY `com_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `vp_detailbill`
--
ALTER TABLE `vp_detailbill`
  MODIFY `det_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `vp_productitem`
--
ALTER TABLE `vp_productitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vp_products`
--
ALTER TABLE `vp_products`
  MODIFY `prod_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `vp_size`
--
ALTER TABLE `vp_size`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `vp_sizeproduct`
--
ALTER TABLE `vp_sizeproduct`
  MODIFY `sizpr_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `vp_slide`
--
ALTER TABLE `vp_slide`
  MODIFY `sli_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `vp_users`
--
ALTER TABLE `vp_users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10001;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
