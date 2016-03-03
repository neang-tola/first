/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50617
Source Host           : 127.0.0.1:3366
Source Database       : content_mgr_db

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-03-03 21:54:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tbl_backend_user`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_backend_user`;
CREATE TABLE `tbl_backend_user` (
  `user_id` smallint(2) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `gender` char(8) DEFAULT NULL,
  `user_pwd` varchar(100) DEFAULT NULL,
  `user_status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_backend_user
-- ----------------------------
INSERT INTO `tbl_backend_user` VALUES ('1', 'admin', 'male', '$2y$10$kf34dMNo.Wz2hqPTxTGIIOBOzM7fiV2sBV2s1aMRZoXVZhBzjHCn6', 'admin');
INSERT INTO `tbl_backend_user` VALUES ('2', 'Tola', 'male', '$2y$10$kf34dMNo.Wz2hqPTxTGIIOBOzM7fiV2sBV2s1aMRZoXVZhBzjHCn6', 'admin');
INSERT INTO `tbl_backend_user` VALUES ('3', 'User', 'female', '$2y$10$kf34dMNo.Wz2hqPTxTGIIOBOzM7fiV2sBV2s1aMRZoXVZhBzjHCn6', 'user');

-- ----------------------------
-- Table structure for `tbl_category`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE `tbl_category` (
  `cat_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `lang_id` smallint(3) DEFAULT NULL,
  `cat_title` varchar(100) DEFAULT NULL,
  `cat_front` smallint(1) DEFAULT NULL,
  `cat_active` smallint(1) DEFAULT NULL,
  `cat_sequense` smallint(3) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_category
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_content`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_content`;
CREATE TABLE `tbl_content` (
  `con_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `cnt_id` smallint(2) DEFAULT NULL,
  `cat_id` smallint(2) DEFAULT NULL,
  `lang_id` smallint(2) DEFAULT NULL,
  `con_title` varchar(100) DEFAULT NULL,
  `con_remark` varchar(500) DEFAULT NULL,
  `con_des` text,
  `con_front` smallint(1) DEFAULT '0',
  `meta_key` varchar(500) DEFAULT NULL,
  `meta_des` varchar(750) DEFAULT NULL,
  `con_sequense` smallint(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_content
-- ----------------------------
INSERT INTO `tbl_content` VALUES ('1', '1', null, '1', 'Home', null, 'Nulla quis lorem neque, mattis venenatis lectus. \r\n							In interdum ullamcorper dolor eu mattis.', '0', 'Young Shopping Mall, Cambodia, Khmer, Supper markert, Phnom Penh Shopping Mall', 'Musashi Advertising Provice services Mobile Truck Advertising, Indoor IDP Advertising, Graphic Design, Web Design, TV Commercials and Documentaries, Event Management: Press Conference, Post Production, Products Launching, Products Trade Show, Concerts, Grand Opening etc.', null, '2016-03-03 08:47:19', '2016-03-03 08:47:19');
INSERT INTO `tbl_content` VALUES ('2', '5', null, '1', 'Contact Us', '<iframe width=\"730\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=&amp;daddr=Young+Shopping+Mall%4011.593891366058939,104.93033409118652&amp;hl=en&amp;geocode=FaPosAAdHhxBBg&amp;sll=11.593891,104.930334&amp;sspn=0.006401,0.010568&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=11.593891,104.930334&amp;spn=0.006401,0.010568&amp;output=embed\"></iframe>', 'Contact Us page', '0', 'Advertising, Cambodia, Khmer, Video Sport', 'Musashi Advertising Provice services Mobile Truck Advertising, Indoor IDP Advertising, Graphic Design, Web Design, TV Commercials and Documentaries, Event Management: Press Conference, Post Production, Products Launching, Products Trade Show, Concerts, Grand Opening etc.', null, '2016-03-03 08:58:33', '2016-03-03 08:58:33');

-- ----------------------------
-- Table structure for `tbl_content_type`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_content_type`;
CREATE TABLE `tbl_content_type` (
  `cnt_id` smallint(2) NOT NULL AUTO_INCREMENT,
  `cnt_title` varchar(50) DEFAULT NULL,
  `cnt_des` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`cnt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_content_type
-- ----------------------------
INSERT INTO `tbl_content_type` VALUES ('1', 'Home', null, '2016-03-03 08:38:38', '2016-03-03 08:38:38');
INSERT INTO `tbl_content_type` VALUES ('2', 'Category', null, '2016-03-03 08:38:50', '2016-03-03 08:38:38');
INSERT INTO `tbl_content_type` VALUES ('3', 'Category Detail', null, '2016-03-03 08:38:51', '2016-03-03 08:38:38');
INSERT INTO `tbl_content_type` VALUES ('4', 'Gallery', null, '2016-03-03 08:38:52', '2016-03-03 08:38:38');
INSERT INTO `tbl_content_type` VALUES ('5', 'Contact', null, '2016-03-03 08:38:53', '2016-03-03 08:38:38');
INSERT INTO `tbl_content_type` VALUES ('6', 'Artical', null, '2016-03-03 08:38:54', '2016-03-03 08:38:38');

-- ----------------------------
-- Table structure for `tbl_gallery`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_gallery`;
CREATE TABLE `tbl_gallery` (
  `gal_id` smallint(10) NOT NULL AUTO_INCREMENT,
  `lang_id` smallint(2) DEFAULT NULL,
  `gal_title` varchar(450) DEFAULT NULL,
  `gal_des` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`gal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_gallery
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_image`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_image`;
CREATE TABLE `tbl_image` (
  `img_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `conditional_id` smallint(5) DEFAULT NULL,
  `img_name` varchar(150) DEFAULT NULL,
  `img_content` varchar(150) DEFAULT NULL,
  `conditional_type` smallint(2) DEFAULT NULL,
  `img_sequense` smallint(2) DEFAULT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_image
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_language`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_language`;
CREATE TABLE `tbl_language` (
  `lang_id` smallint(2) NOT NULL AUTO_INCREMENT,
  `lang_title` varchar(50) DEFAULT NULL,
  `lang_flag` varchar(50) DEFAULT NULL,
  `lang_sequense` smallint(3) DEFAULT NULL,
  `lang_status` smallint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`lang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_language
-- ----------------------------
INSERT INTO `tbl_language` VALUES ('1', 'English', 'en-flag.png', '1', '1', '2014-08-11 10:28:34', '2014-10-02 11:05:43');
INSERT INTO `tbl_language` VALUES ('2', 'Khmer', 'km-flag.png', '2', '1', '2014-08-11 10:28:34', '2014-10-02 16:23:35');
INSERT INTO `tbl_language` VALUES ('3', 'Japanese', 'jp-flag.png', '3', '0', '2014-08-11 10:28:34', '2014-08-11 10:28:38');
INSERT INTO `tbl_language` VALUES ('4', 'Chinese', 'zh-flag.png', '4', '0', '2014-08-11 10:28:38', '2014-08-11 10:28:38');
INSERT INTO `tbl_language` VALUES ('5', 'Korean', 'kr-flag.png', '5', '0', '2014-08-11 10:28:38', '2014-08-11 10:28:38');
INSERT INTO `tbl_language` VALUES ('6', 'Vietnamese', 'vn-flag.png', '6', '0', '2014-08-11 10:54:25', '2015-01-30 13:48:02');
INSERT INTO `tbl_language` VALUES ('7', 'French', 'fr-flag.png', '7', '0', '2015-05-19 08:00:16', '2015-05-19 09:00:25');

-- ----------------------------
-- Table structure for `tbl_menu`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_menu`;
CREATE TABLE `tbl_menu` (
  `m_id` smallint(3) NOT NULL AUTO_INCREMENT,
  `m_parent` smallint(3) DEFAULT NULL,
  `lang_id` smallint(2) DEFAULT NULL,
  `m_title` varchar(100) DEFAULT NULL,
  `m_post` tinyint(1) DEFAULT NULL,
  `m_sequense` smallint(3) DEFAULT NULL,
  `m_link` varchar(50) DEFAULT NULL,
  `m_status` tinyint(1) DEFAULT NULL,
  `cnt_id` smallint(2) DEFAULT NULL,
  `con_id` smallint(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_menu
-- ----------------------------
INSERT INTO `tbl_menu` VALUES ('1', '0', '1', 'Home', '1', '1', 'home', '1', null, '1', '2016-03-03 08:58:58', '2016-03-03 08:58:58');
INSERT INTO `tbl_menu` VALUES ('2', '0', '1', 'Contact Us', '1', '2', 'contact', '1', null, '2', '2016-03-03 08:59:38', '2016-03-03 08:59:38');
