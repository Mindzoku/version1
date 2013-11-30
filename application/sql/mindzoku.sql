-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2013 at 04:58 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mindzoku`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `ct_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pd_id` int(10) unsigned NOT NULL DEFAULT '0',
  `ct_qty` mediumint(8) unsigned NOT NULL DEFAULT '1',
  `ct_user_id` int(11) NOT NULL,
  `ct_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ct_id`),
  KEY `pd_id` (`pd_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=127 ;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`ct_id`, `pd_id`, `ct_qty`, `ct_user_id`, `ct_date`) VALUES
(121, 2, 11, 2, '0000-00-00 00:00:00'),
(122, 2, 3, 3, '0000-00-00 00:00:00'),
(123, 3, 3, 2, '0000-00-00 00:00:00'),
(126, 4, 1, 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `cat_description` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`cat_id`),
  KEY `cat_name` (`cat_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=41 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `cat_description`) VALUES
(1, 'shirt', 'เสื้อ กางเกง หมวก กระโปรง และอื่นๆ'),
(2, 'bag', 'กระเป๋าเป้ กระเป๋าถือ กระเป๋าสะพาย'),
(3, 'shoulderbag', 'เป้สวย ตัดเย็บเนียบ คุณภาพดี'),
(4, 'watch', 'นาฬิกาแฟชั่น นาฬิกาข้อมูลสวยๆ'),
(5, 'Triwa', 'นาฬิกาข้อมูลสำหรับบุรุษ และสตรี ยี่ห้อ Triwa'),
(28, 'backpack', 'des-backpack'),
(29, 'bp', 'pb'),
(40, 'test2', ''),
(39, 'test', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_currency`
--

CREATE TABLE `tbl_currency` (
  `cy_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cy_code` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `cy_symbol` varchar(8) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`cy_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_currency`
--

INSERT INTO `tbl_currency` (`cy_id`, `cy_code`, `cy_symbol`) VALUES
(1, 'EUR', '&#8364;'),
(2, 'GBP', '&pound;'),
(4, 'USD', '$'),
(5, 'THB', '฿');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `od_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `od_date` datetime DEFAULT NULL,
  `od_last_update` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `od_status` enum('New','Paid','Shipped','Completed','Cancelled') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'New',
  `od_memo` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `od_shipping_first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `od_shipping_last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `od_shipping_address1` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `od_shipping_address2` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `od_shipping_phone` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `od_shipping_city` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `od_shipping_state` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `od_shipping_postal_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `od_shipping_cost` decimal(5,2) DEFAULT '0.00',
  `od_payment_first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `od_payment_last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `od_payment_address1` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `od_payment_address2` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `od_payment_phone` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `od_payment_city` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `od_payment_state` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `od_payment_postal_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`od_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

CREATE TABLE `tbl_order_item` (
  `od_id` int(10) unsigned NOT NULL DEFAULT '0',
  `pd_id` int(10) unsigned NOT NULL DEFAULT '0',
  `od_qty` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`od_id`,`pd_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pd_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` int(10) unsigned NOT NULL DEFAULT '0',
  `pd_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `pd_description` text COLLATE utf8_unicode_ci NOT NULL,
  `pd_price` decimal(9,2) NOT NULL DEFAULT '0.00',
  `pd_qty` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pd_image1` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pd_image2` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pd_image3` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pd_image4` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pd_thumbnail` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pd_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pd_last_update` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`pd_id`),
  KEY `cat_id` (`cat_id`),
  KEY `pd_name` (`pd_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pd_id`, `cat_id`, `pd_name`, `pd_description`, `pd_price`, `pd_qty`, `pd_image1`, `pd_image2`, `pd_image3`, `pd_image4`, `pd_thumbnail`, `pd_date`, `pd_last_update`) VALUES
(1, 1, 'mzk1', 'มีช่องเก็บหลากหลาย ', 1200.00, 1, 'c00a8e35a291b3320e5122581f697772.jpg', NULL, NULL, NULL, 'c1047877b2b453b675b1ae09246d63a1.jpg', '2013-02-24 04:17:29', '0000-00-00 00:00:00'),
(2, 2, 'mzk2', 'เนื้อผ้าร่ม กันน้ำ สีไม่ซีดไม่จาง ช่องใส่แยกซ้ายขวา', 1450.00, 5, '75fc8d8ef5b210ae30db6806415b4da5.jpg', NULL, NULL, NULL, '71abbc3a42da9ee70af825620a348f58.jpg', '2013-02-24 04:18:46', '0000-00-00 00:00:00'),
(3, 5, 'Triwa Brasco', 'นาฬิการะบบ Quatz ผลิตจากสแตนเลสอย่างดี หน้าปัด Saphine กันรอยขีดข่วน กันน้ำลึก 100 เมตร สามารถจับเวลาด้วย Chonometer เรืองแสงในที่มืด ', 45000.00, 5, '1297e47140b3b320372f8cd5323d0778.jpg', NULL, NULL, NULL, '5188fc24204ce00d6c1908a436c669de.jpg', '2013-02-24 04:35:46', '0000-00-00 00:00:00'),
(4, 3, 'mzk3', 'เป้ลายคอนโซเมท', 4250.00, 3, '4adfbc5eb9ede90766ec99b2a90809f7.jpg', NULL, NULL, NULL, '2194b274268bbb0bd9fcd3d41948fdef.jpg', '2013-02-24 04:51:14', '0000-00-00 00:00:00'),
(5, 1, 'mzk4', 'เป้ลายฟ้าตัดน้ำเงินอ่อน', 2340.00, 0, '5e9a2dab468efc51e439bacbc27579d3.jpg', NULL, NULL, NULL, 'd1574c7a5027c238c6dab277a9090ee4.jpg', '2013-02-24 04:52:36', '0000-00-00 00:00:00'),
(6, 3, 'mzk5', 'เป้สีอ่อนแต่เนื้อผ้าดีเยี่ยม', 2300.00, 5, 'acffe86b1444a3e423a22a7b04ae500a.jpg', NULL, NULL, NULL, '4e215986d1f4f2e8ff629444e0931c9d.jpg', '2013-02-24 04:54:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shop_config`
--

CREATE TABLE `tbl_shop_config` (
  `sc_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `sc_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `sc_phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `sc_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `sc_shipping_cost` decimal(5,2) NOT NULL DEFAULT '0.00',
  `sc_currency` int(10) unsigned NOT NULL DEFAULT '1',
  `sc_order_email` enum('y','n') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'n'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_shop_config`
--

INSERT INTO `tbl_shop_config` (`sc_name`, `sc_address`, `sc_phone`, `sc_email`, `sc_shipping_cost`, `sc_currency`, `sc_order_email`) VALUES
('jeerawuth shop', '99/623 หมู่ 4 ต. กระแชง อ. &', '080-0000000', 'jeerawuth@me.com', 200.00, 5, 'y');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `phone`) VALUES
(1, '\0\0', 'administrator', '59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4', '9462e8eee0', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1385739076, 1, 'Admin', 'istrator', '0'),
(2, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'nut pha', '99d5294f7672aeb6ce4426b4592dce818caf1118', NULL, 'n@n.com', NULL, NULL, NULL, NULL, 1385661782, 1385738792, 1, 'nut', 'pha', '0855555555'),
(3, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'krit wong', 'ab99e7f8a76124ab50c125e95a0d0c3c4d93d261', NULL, 'k@k.com', NULL, NULL, NULL, NULL, 1385706763, 1385706770, 1, 'krit', 'wong', '0111111111');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 3, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
