-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Nov 27, 2013 at 03:49 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `mindzoku`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_cart`
-- 

CREATE TABLE `tbl_cart` (
  `ct_id` int(10) unsigned NOT NULL auto_increment,
  `pd_id` int(10) unsigned NOT NULL default '0',
  `ct_qty` mediumint(8) unsigned NOT NULL default '1',
  `ct_session_id` char(32) collate utf8_unicode_ci NOT NULL default '',
  `ct_date` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`ct_id`),
  KEY `pd_id` (`pd_id`),
  KEY `ct_session_id` (`ct_session_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=121 ;

-- 
-- Dumping data for table `tbl_cart`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_category`
-- 

CREATE TABLE `tbl_category` (
  `cat_id` int(10) unsigned NOT NULL auto_increment,
  `cat_name` varchar(50) collate utf8_unicode_ci NOT NULL default '',
  `cat_description` varchar(200) collate utf8_unicode_ci NOT NULL default '',
  PRIMARY KEY  (`cat_id`),
  KEY `cat_name` (`cat_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=39 ;

-- 
-- Dumping data for table `tbl_category`
-- 

INSERT INTO `tbl_category` VALUES (1, 'เสื้อผ้า', 'เสื้อ กางเกง หมวก กระโปรง และอื่นๆ');
INSERT INTO `tbl_category` VALUES (2, 'กระเป๋า', 'กระเป๋าเป้ กระเป๋าถือ กระเป๋าสะพาย');
INSERT INTO `tbl_category` VALUES (3, 'กระเป๋าเป้', 'เป้สวย ตัดเย็บเนียบ คุณภาพดี');
INSERT INTO `tbl_category` VALUES (4, 'นาฬิกา', 'นาฬิกาแฟชั่น นาฬิกาข้อมูลสวยๆ');
INSERT INTO `tbl_category` VALUES (5, 'Triwa', 'นาฬิกาข้อมูลสำหรับบุรุษ และสตรี ยี่ห้อ Triwa');
INSERT INTO `tbl_category` VALUES (28, 'backpack', 'des-backpack');
INSERT INTO `tbl_category` VALUES (29, 'bp', 'pb');
INSERT INTO `tbl_category` VALUES (30, 'test1', 'des-test1');
INSERT INTO `tbl_category` VALUES (31, 'test1', 'des-test1');
INSERT INTO `tbl_category` VALUES (32, 'test12', 'des-test2');
INSERT INTO `tbl_category` VALUES (33, 'test12', 'des-test2');
INSERT INTO `tbl_category` VALUES (34, 'testnut', 'nuttest');
INSERT INTO `tbl_category` VALUES (35, 'testnut', 't');
INSERT INTO `tbl_category` VALUES (36, 'testnut', 't');
INSERT INTO `tbl_category` VALUES (37, 'cat', 'cat');
INSERT INTO `tbl_category` VALUES (38, 'cat', 'cat');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_currency`
-- 

CREATE TABLE `tbl_currency` (
  `cy_id` int(10) unsigned NOT NULL auto_increment,
  `cy_code` varchar(3) collate utf8_unicode_ci NOT NULL default '',
  `cy_symbol` varchar(8) collate utf8_unicode_ci NOT NULL default '',
  PRIMARY KEY  (`cy_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `tbl_currency`
-- 

INSERT INTO `tbl_currency` VALUES (1, 'EUR', '&#8364;');
INSERT INTO `tbl_currency` VALUES (2, 'GBP', '&pound;');
INSERT INTO `tbl_currency` VALUES (4, 'USD', '$');
INSERT INTO `tbl_currency` VALUES (5, 'THB', '฿');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_order`
-- 

CREATE TABLE `tbl_order` (
  `od_id` int(10) unsigned NOT NULL auto_increment,
  `od_date` datetime default NULL,
  `od_last_update` datetime NOT NULL default '0000-00-00 00:00:00',
  `od_status` enum('New','Paid','Shipped','Completed','Cancelled') collate utf8_unicode_ci NOT NULL default 'New',
  `od_memo` varchar(255) collate utf8_unicode_ci NOT NULL default '',
  `od_shipping_first_name` varchar(50) collate utf8_unicode_ci NOT NULL default '',
  `od_shipping_last_name` varchar(50) collate utf8_unicode_ci NOT NULL default '',
  `od_shipping_address1` varchar(100) collate utf8_unicode_ci NOT NULL default '',
  `od_shipping_address2` varchar(100) collate utf8_unicode_ci NOT NULL default '',
  `od_shipping_phone` varchar(32) collate utf8_unicode_ci NOT NULL default '',
  `od_shipping_city` varchar(100) collate utf8_unicode_ci NOT NULL default '',
  `od_shipping_state` varchar(32) collate utf8_unicode_ci NOT NULL default '',
  `od_shipping_postal_code` varchar(10) collate utf8_unicode_ci NOT NULL default '',
  `od_shipping_cost` decimal(5,2) default '0.00',
  `od_payment_first_name` varchar(50) collate utf8_unicode_ci NOT NULL default '',
  `od_payment_last_name` varchar(50) collate utf8_unicode_ci NOT NULL default '',
  `od_payment_address1` varchar(100) collate utf8_unicode_ci NOT NULL default '',
  `od_payment_address2` varchar(100) collate utf8_unicode_ci NOT NULL default '',
  `od_payment_phone` varchar(32) collate utf8_unicode_ci NOT NULL default '',
  `od_payment_city` varchar(100) collate utf8_unicode_ci NOT NULL default '',
  `od_payment_state` varchar(32) collate utf8_unicode_ci NOT NULL default '',
  `od_payment_postal_code` varchar(10) collate utf8_unicode_ci NOT NULL default '',
  PRIMARY KEY  (`od_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

-- 
-- Dumping data for table `tbl_order`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_order_item`
-- 

CREATE TABLE `tbl_order_item` (
  `od_id` int(10) unsigned NOT NULL default '0',
  `pd_id` int(10) unsigned NOT NULL default '0',
  `od_qty` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`od_id`,`pd_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tbl_order_item`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_product`
-- 

CREATE TABLE `tbl_product` (
  `pd_id` int(10) unsigned NOT NULL auto_increment,
  `cat_id` int(10) unsigned NOT NULL default '0',
  `pd_name` varchar(100) collate utf8_unicode_ci NOT NULL default '',
  `pd_description` text collate utf8_unicode_ci NOT NULL,
  `pd_price` decimal(9,2) NOT NULL default '0.00',
  `pd_qty` smallint(5) unsigned NOT NULL default '0',
  `pd_image1` varchar(200) collate utf8_unicode_ci default NULL,
  `pd_image2` varchar(200) collate utf8_unicode_ci default NULL,
  `pd_image3` varchar(200) collate utf8_unicode_ci default NULL,
  `pd_image4` varchar(200) collate utf8_unicode_ci default NULL,
  `pd_thumbnail` varchar(200) collate utf8_unicode_ci default NULL,
  `pd_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `pd_last_update` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`pd_id`),
  KEY `cat_id` (`cat_id`),
  KEY `pd_name` (`pd_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

-- 
-- Dumping data for table `tbl_product`
-- 

INSERT INTO `tbl_product` VALUES (1, 3, 'เป้ลายทหาร', 'มีช่องเก็บหลากหลาย ', 1200.00, 1, 'c00a8e35a291b3320e5122581f697772.jpg', NULL, NULL, NULL, 'c1047877b2b453b675b1ae09246d63a1.jpg', '2013-02-24 04:17:29', '0000-00-00 00:00:00');
INSERT INTO `tbl_product` VALUES (2, 3, 'เป้ลายทันสมัย', 'เนื้อผ้าร่ม กันน้ำ สีไม่ซีดไม่จาง ช่องใส่แยกซ้ายขวา', 1450.00, 5, '75fc8d8ef5b210ae30db6806415b4da5.jpg', NULL, NULL, NULL, '71abbc3a42da9ee70af825620a348f58.jpg', '2013-02-24 04:18:46', '0000-00-00 00:00:00');
INSERT INTO `tbl_product` VALUES (3, 5, 'Triwa Brasco', 'นาฬิการะบบ Quatz ผลิตจากสแตนเลสอย่างดี หน้าปัด Saphine กันรอยขีดข่วน กันน้ำลึก 100 เมตร สามารถจับเวลาด้วย Chonometer เรืองแสงในที่มืด ', 45000.00, 5, '1297e47140b3b320372f8cd5323d0778.jpg', NULL, NULL, NULL, '5188fc24204ce00d6c1908a436c669de.jpg', '2013-02-24 04:35:46', '0000-00-00 00:00:00');
INSERT INTO `tbl_product` VALUES (4, 3, 'เป้ลายดอกตัด', 'เป้ลายคอนโซเมท', 4250.00, 3, '4adfbc5eb9ede90766ec99b2a90809f7.jpg', NULL, NULL, NULL, '2194b274268bbb0bd9fcd3d41948fdef.jpg', '2013-02-24 04:51:14', '0000-00-00 00:00:00');
INSERT INTO `tbl_product` VALUES (5, 3, 'เป้ลายน้ำเงิน', 'เป้ลายฟ้าตัดน้ำเงินอ่อน', 2340.00, 0, '5e9a2dab468efc51e439bacbc27579d3.jpg', NULL, NULL, NULL, 'd1574c7a5027c238c6dab277a9090ee4.jpg', '2013-02-24 04:52:36', '0000-00-00 00:00:00');
INSERT INTO `tbl_product` VALUES (6, 3, 'เป้ลายน้ำตาลอ่อน', 'เป้สีอ่อนแต่เนื้อผ้าดีเยี่ยม', 2300.00, 5, 'acffe86b1444a3e423a22a7b04ae500a.jpg', NULL, NULL, NULL, '4e215986d1f4f2e8ff629444e0931c9d.jpg', '2013-02-24 04:54:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_shop_config`
-- 

CREATE TABLE `tbl_shop_config` (
  `sc_name` varchar(50) collate utf8_unicode_ci NOT NULL default '',
  `sc_address` varchar(100) collate utf8_unicode_ci NOT NULL default '',
  `sc_phone` varchar(30) collate utf8_unicode_ci NOT NULL default '',
  `sc_email` varchar(30) collate utf8_unicode_ci NOT NULL default '',
  `sc_shipping_cost` decimal(5,2) NOT NULL default '0.00',
  `sc_currency` int(10) unsigned NOT NULL default '1',
  `sc_order_email` enum('y','n') collate utf8_unicode_ci NOT NULL default 'n'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tbl_shop_config`
-- 

INSERT INTO `tbl_shop_config` VALUES ('jeerawuth shop', '99/623 หมู่ 4 ต. กระแชง อ. &', '080-0000000', 'jeerawuth@me.com', 200.00, 5, 'y');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_user`
-- 

CREATE TABLE `tbl_user` (
  `user_id` int(10) unsigned NOT NULL auto_increment,
  `user_name` varchar(20) collate utf8_unicode_ci NOT NULL default '',
  `user_password` varchar(32) collate utf8_unicode_ci NOT NULL default '',
  `user_regdate` datetime NOT NULL default '0000-00-00 00:00:00',
  `user_last_login` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`user_id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `tbl_user`
-- 

INSERT INTO `tbl_user` VALUES (1, 'admin', 'admin', '2005-02-20 17:35:44', '2013-02-24 04:22:40');
INSERT INTO `tbl_user` VALUES (2, 'webmaster', 'password', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
