-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2017 at 07:32 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shop3f`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `create_at`, `update_at`) VALUES
(1, 'Mobile - Điện thoại', 'mobile-dien-thoai', '2017-10-11 14:11:33', '0000-00-00 00:00:00'),
(2, 'LAPTOP - Máy tính xách tay', 'laptop-may-tinh-xach-tay', '2017-10-11 14:13:46', '0000-00-00 00:00:00'),
(3, 'Asus - ZenFones', 'asus-zenfones', '2017-10-11 14:13:46', '0000-00-00 00:00:00'),
(4, 'Samsung', 'samsung', '2017-10-11 14:13:46', '0000-00-00 00:00:00'),
(5, 'DELL', 'dell', '2017-10-11 14:13:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `intro` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `full` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `author`, `intro`, `full`, `image`, `status`, `category_id`, `user_id`, `create_at`, `update_at`) VALUES
(1, 'iPhone SE đổi trả thiết kế thanh lịch, mạnh như iPhone 6s còn dưới 7 triệu đồng', 'iphone-se-doi-tra-thiet-ke-thanh-lich-manh-nhu-iphone-6s-con-duoi-7-trieu-dong', 'admin', '<p>Kh&ocirc;ng chỉ iPhone SE h&agrave;ng mới m&agrave; h&agrave;ng đổi trả cũng được giảm gi&aacute; mạnh mẽ. Trước đ&acirc;y mức gi&aacute; l&agrave; hơn 7 triệu b&acirc;y giờ chỉ c&ograve; </p>', '<p>iPhone SE là sản phẩm di động cao cấp mới nhất mà Apple vừa giới thiệu đến người dùng, SE mang trong mình kiểu dáng nhỏ gọn của iPhone 5S nhưng cấu hình lại mạnh mẽ như iPhone 6S/6S Plus, cùng với rất nhiều tính năng mới được bổ sung, hứa hẹn mang lại khả năng trải nghiệm vô cùng tuyệt vời dành cho người dùng. </p>\r\n<p>Đúng như tên gọi, iPhone SE có thiết kế bề ngoài giống với phiên bản iPhone 5S mà Apple đã từng ra mắt, vẫn là một thiết kế rất sang trọng với các đường cắt kim cương tinh tế dọc theo thân máy. Độ hoàn thiện của máy là rất tốt, các chi tiết được thể hiện rất sắc sảo, cuốn hút ngay mọi ánh nhìn xung quanh. Máy vẫn được làm rất nhỏ gọn khi độ dày chỉ 7.6mm, nặng 113 gram cho khả năng cầm nắm chắc tay, không hề trơn trượt. Điểm nổi bật lớn nhất chính là màu sắc của máy, ở phiên bản SE mới, Apple đã có thêm tùy chọn là màu vàng hồng Rose Gold, một màu sắc rất đặc biệt, thể hiện sự cá tính và rất thời trang. Dòng chữ SE được in ở mặt sau máy cùng màu vàng hồng độc đáo chính là chi tiết thể hiện sự khác biệt về bề ngoài của SE so với phiên bản iPhone 5S trước đó.\r\n>>>> Bài viết liên quan đến iPhone SE có thể bạn quan tâm : Tại sao iPhone SE không có màn hình 3D Touch như iPhone 6s</p>\r\n', '', 1, 1, 1, '2017-10-11 14:19:37', '0000-00-00 00:00:00'),
(2, 'Điểm tin HOT 23/11: Mẫu iPhone SE 2017 đẹp nao lòng, đoạn video 5 giây biến iPhone thành cục gạch', 'diem-tin-hot-2311-mau-iphone-se-2017-dep-nao-long-doan-video-5-giay-bien-iphone-thanh-cuc-gach', 'admin', '<p>Mới đ&acirc;y, 1 nh&agrave; thiết kể trẻ tuổi sinh năm 1998 tại Việt Nam đ&atilde; tạo ra 1 bản concept iPhone SE 2017 đẹp đến nao l&ograve;ng, sợ kiểu n&agrave;y th&igrave; iPhone 7 sẽ ế h&agrave;ng mất.</p>', '<p>Apple iPhone SE được trang bị cảm biến vấn tay được tích hợp cùng với nút home của máy, tính năng này cho phép bạn mở khóa máy nhanh mà không phải nhập mật khẩu thủ công, giúp cho thông tin của bạn ở trên máy được bảo mật và an toàn hơn. Ngoài ra, bạn còn có thể sử dụng cảm biến vân tay để mua các ứng dụng trong cửa hàng App Store hay thanh toán Apple Pay.</p>\r\n<p>Trong sự kiện ra mắt iPhone SE, Apple còn giới thiệu đến người dùng phiên bản chính thức 9.3 của hệ điều hành iOS. Ở phiên bản mới, toàn bộ hệ thống đã được cải thiện cùng sự tương thích phần cứng mạnh mẽ hơn, iPhone SE cho khả năng xử lý vô cùng mượt mà giúp máy trở thành chiếc điện thoại 4” mạnh mẽ, cùng khả năng trải nghiệm tuyệt vời dành cho người dùng, xứng đáng với tên gọi iPhone SE – Special Edition. </p>', '', 1, 1, 1, '2017-10-11 14:21:55', '0000-00-00 00:00:00'),
(3, 'Google phải khâm phục Samsung về khả năng tối ưu hóa Android 7.0', 'google-phai-kham-phuc-samsung-ve-kha-nang-toi-uu-hoa-android-70', 'admin', '<p>Google đ&atilde; tham gia v&agrave;o cuộc dua smartphone với Google Pixel được ra mắt v&agrave </p>', '<p>Google đ&atilde; tham gia v&agrave;o cuộc dua smartphone với Google Pixel được ra mắt v&agrave v&agrave;i th&aacute;ng trước. Mới đ&acirc;y, một Youtuber đ&atilde; c&oacute; cuộc thử nghiệm tốc độ giữa Google Pixel XL v&agrave; Galaxy S7.  ... </p>', '', 1, 2, 1, '2017-10-11 14:23:28', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `oder`
--

CREATE TABLE IF NOT EXISTS `oder` (
  `id` int(11) NOT NULL,
  `total` float NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oder`
--

INSERT INTO `oder` (`id`, `total`, `status`, `user_id`, `create_at`, `update_at`) VALUES
(1, 2500000, 1, 1, '2017-10-11 14:24:31', '0000-00-00 00:00:00'),
(2, 10000000, 1, 2, '2017-10-11 14:24:54', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `oder_detail`
--

CREATE TABLE IF NOT EXISTS `oder_detail` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `oder_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oder_detail`
--

INSERT INTO `oder_detail` (`id`, `product_id`, `oder_id`, `create_at`, `update_at`) VALUES
(1, 1, 1, '2017-10-11 14:34:42', '0000-00-00 00:00:00'),
(2, 2, 1, '2017-10-11 14:34:53', '0000-00-00 00:00:00'),
(3, 3, 1, '2017-10-11 14:35:01', '0000-00-00 00:00:00'),
(4, 4, 2, '2017-10-11 14:35:07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` text NOT NULL,
  `intro` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `review` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `status` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `image`, `intro`, `review`, `price`, `status`, `category_id`, `user_id`, `create_at`, `update_at`) VALUES
(1, 'Galaxy S7 EDGE', 'galaxy-s7-edge', 'product1.jpg', 'Exynos 8890, 5.1 inch (1440 x 2560 pixels), Android 6.0 (Marshmallow)', 'Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp OTG, Cáp, Cây lấy sim.\r\nsmartphone Samsung Galaxy S7 sở hữu nhiều sự thay đổi nổi bật ở cả thiết kế, cấu h&igrave;nh v&agrave; những t&iacute;nh năng đi k&egrave;m. Chiếc điện thoại n&agrave;y hứa hẹn sẽ tạo n&ecirc;n sự b&ugrave;ng nổ trong ph&acirc;n kh&uacute;c cao cấp v&agrave; mang lại những th&agrave;nh c&ocirc;ng tiếp theo cho h&atilde;ng điện thoại H&agrave;n Quốc. ', 6500000, 1, 1, 1, '2017-10-12 16:37:01', '0000-00-00 00:00:00'),
(2, 'OPPO F1S', 'oppo fs1', 'product2.jpg', 'Apple A10 mới, 2 cammera sau,Ram 3g, 5.5 inch (1920 x 1080 pixels)', 'Điện thoại OPPO mẫu mã mới, hứa hẹn mang đến nhiều bất ngờ cho người sử dụng', 5500000, 1, 1, 2, '2017-10-12 16:37:01', '0000-00-00 00:00:00'),
(3, 'Dell Insprion 3400', 'dell-inspiron-3400', 'product3.jpg', 'N3050/2GB/500GB/Win10 \r\nMax Speed hack', 'Tặng Balo Dell Xem hình', 15500000, 1, 5, 1, '2017-10-12 16:37:01', '0000-00-00 00:00:00'),
(4, 'asus Gimming 980 SFF Case Size Mini', 'asus new', 'product4.jpg', 'Core I3, I5 (Hàng Likenew, thùng hộp) Dell Optiplex 980', 'Core I3, I5 (Hàng Likenew, thùng hộp) Dell Optiplex 980 / Mẫu mới về . hãy nhanh tay lụm ngay nào', 13000000, 1, 5, 2, '2017-10-12 16:37:01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE IF NOT EXISTS `product_detail` (
  `id` int(11) NOT NULL,
  `cpu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `vga` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ram` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `screen` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `storage` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `extend_memmory` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cam1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cam2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `pin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `os` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `products_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`id`, `cpu`, `vga`, `ram`, `screen`, `storage`, `extend_memmory`, `cam1`, `cam2`, `pin`, `os`, `products_id`, `create_at`, `update_at`) VALUES
(1, 'Exynos 8890, 8 Nhân', 'gangtang', '4gb', '5in', '64gb', '61gb', '18mp', '8mp', '4100mah', 'android', 1, '2017-10-11 17:34:31', '0000-00-00 00:00:00'),
(2, 'GTX-X1992, 8 nhân', 'GTX-x1000', '16gb', NULL, '128gb', '110gb', '6mp', NULL, '5100mah', 'android', 2, '2017-10-11 17:36:24', '0000-00-00 00:00:00'),
(3, 'SnapDragon625', 'Focus', '16gb', '12.5 in', '520gb', '500gb', '12mp', NULL, '12000mah', 'SuperA', 3, '2017-10-11 17:38:27', '0000-00-00 00:00:00'),
(4, 'SnapDragon825', 'FocusX', '32gb', '12.5 in', '1T', '1T', '12mp', NULL, '12000mah', 'SuperA', 4, '2017-10-11 17:39:01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `remember_token`, `status`, `create_at`, `update_at`) VALUES
(1, 'Admin', 'admin_shop3f@gmail.com', 'shop3f', 'Ha Noi', NULL, 1, '2017-10-11 14:09:26', '2017-10-11 14:09:26'),
(2, 'HoangTuan', 'nguyenhoangtuan96@gmail.com', 'hoangtuan', 'Bao Thang _ Lao cai', NULL, 1, '2017-10-11 14:10:23', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oder`
--
ALTER TABLE `oder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oder_detail`
--
ALTER TABLE `oder_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `oder`
--
ALTER TABLE `oder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `oder_detail`
--
ALTER TABLE `oder_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
