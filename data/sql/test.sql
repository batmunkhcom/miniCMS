/*
 Navicat Premium Data Transfer

 Source Server         : minicsm.me
 Source Server Type    : MySQL
 Source Server Version : 50169
 Source Host           : minicms.me
 Source Database       : test

 Target Server Type    : MySQL
 Target Server Version : 50169
 File Encoding         : utf-8

 Date: 01/23/2014 23:40:16 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `m_categories`
-- ----------------------------
DROP TABLE IF EXISTS `m_categories`;
CREATE TABLE `m_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) unsigned DEFAULT '0',
  `code` varchar(255) DEFAULT NULL,
  `depth` int(11) DEFAULT '0',
  `lft` int(11) DEFAULT '0',
  `rgt` int(11) DEFAULT '0',
  `st` varchar(20) NOT NULL DEFAULT 'inactive',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `pos` float(11,2) NOT NULL DEFAULT '0.00',
  `name` varchar(255) DEFAULT NULL,
  `is_external` tinyint(1) NOT NULL DEFAULT '0',
  `external_url` varchar(255) DEFAULT NULL,
  `module` varchar(255) DEFAULT 'content',
  `action` varchar(255) DEFAULT 'index',
  `target` varchar(255) DEFAULT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'mn',
  `hits` int(11) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL,
  `date_last_updated` datetime DEFAULT NULL,
  `last_updated_user_id` int(11) NOT NULL DEFAULT '0',
  `is_adult` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `m_categories`
-- ----------------------------
BEGIN;
INSERT INTO `m_categories` VALUES ('29', '0', '', '0', '1', '2', 'active', '1', '1.00', 'ÐÒ¯Ò¯Ñ€ Ñ…ÑƒÑƒÐ´Ð°Ñ', '1', '/', 'content', 'index', '', 'mn', '0', '2014-01-01 11:35:16', '2014-01-01 11:35:16', '0', '0'), ('30', '0', '', '0', '3', '4', 'active', '1', '2.00', 'Ð‘Ð¸Ð´Ð½Ð¸Ð¹ Ñ‚ÑƒÑ…Ð°Ð¹', '0', '', 'content', 'index', '', 'mn', '0', '2014-01-01 11:35:29', '2014-01-01 11:35:29', '0', '0'), ('31', '0', '', '0', '5', '6', 'active', '1', '3.00', 'Ð¥Ð¾Ð»Ð±Ð¾Ð¾ Ð±Ð°Ñ€Ð¸Ñ…', '0', '', 'content', 'index', '', 'mn', '0', '2014-01-01 11:35:37', '2014-01-01 11:35:37', '0', '0'), ('32', '0', '', '0', '7', '8', 'active', '1', '4.00', 'Ò®Ð» Ñ…Ó©Ð´Ð»Ó©Ñ…', '0', '', 'content', 'index', '', 'mn', '0', '2014-01-01 11:35:45', '2014-01-01 11:35:45', '0', '0'), ('33', '32', '', '1', '1', '2', 'active', '1', '5.00', 'ÐžÑ€Ð¾Ð½ ÑÑƒÑƒÑ†', '0', '', 'content', 'index', '', 'mn', '0', '2014-01-01 11:36:10', '2014-01-01 11:36:10', '0', '0'), ('37', '32', '', '1', '5', '6', 'active', '1', '5.00', 'Ð—ÑƒÑÐ»Ð°Ð½Ð³Ð¸Ð¹Ð½ Ð±Ð°Ð¹ÑˆÐ¸Ð½', '0', '', 'content', 'index', '', 'mn', '0', '2014-01-01 11:55:47', '2014-01-01 11:55:47', '0', '0'), ('36', '32', '', '1', '3', '4', 'active', '1', '5.00', 'Ð¥Ð°ÑˆÐ°Ð° Ð±Ð°Ð¹ÑˆÐ¸Ð½', '0', '', 'content', 'index', '', 'mn', '0', '2014-01-01 11:51:46', '2014-01-01 11:51:46', '0', '0'), ('38', '32', '', '1', '7', '8', 'active', '1', '5.00', 'ÐÐ¼Ð¸Ð½Ð¸Ð¹ Ð¾Ñ€Ð¾Ð½ ÑÑƒÑƒÑ†', '0', '', 'content', 'index', '', 'mn', '0', '2014-01-01 12:02:50', '2014-01-01 12:02:50', '0', '0');
COMMIT;

-- ----------------------------
--  Table structure for `m_comments`
-- ----------------------------
DROP TABLE IF EXISTS `m_comments`;
CREATE TABLE `m_comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `lft` int(11) DEFAULT '0',
  `rgt` int(11) unsigned DEFAULT NULL,
  `depth` int(11) unsigned DEFAULT '0',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `m_content_categories`
-- ----------------------------
DROP TABLE IF EXISTS `m_content_categories`;
CREATE TABLE `m_content_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content_id` int(11) unsigned DEFAULT '0',
  `category_id` int(11) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `m_content_categories`
-- ----------------------------
BEGIN;
INSERT INTO `m_content_categories` VALUES ('22', '16', '33'), ('23', '16', '37');
COMMIT;

-- ----------------------------
--  Table structure for `m_contents`
-- ----------------------------
DROP TABLE IF EXISTS `m_contents`;
CREATE TABLE `m_contents` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) unsigned DEFAULT '0',
  `lft` int(11) unsigned DEFAULT '0',
  `rgt` int(11) unsigned DEFAULT '0',
  `depth` int(11) unsigned DEFAULT '0',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `code` varchar(255) DEFAULT NULL,
  `st` varchar(20) NOT NULL DEFAULT 'inactive',
  `content_type` varchar(20) NOT NULL DEFAULT 'article',
  `photo` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content_brief` text,
  `content_body` longtext,
  `use_comment` tinyint(1) NOT NULL DEFAULT '0',
  `date_created` datetime DEFAULT NULL,
  `date_publish` datetime DEFAULT NULL,
  `total_updated` int(11) unsigned NOT NULL DEFAULT '0',
  `views` int(11) unsigned NOT NULL DEFAULT '0',
  `hits` int(11) unsigned NOT NULL DEFAULT '0',
  `session_id` varchar(50) DEFAULT NULL,
  `session_time` varchar(50) DEFAULT NULL,
  `is_adult` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `m_contents`
-- ----------------------------
BEGIN;
INSERT INTO `m_contents` VALUES ('16', '0', '0', '0', '0', '1', '', 'active', 'article', '//www.minicms.me/media/photos/52d7586da82e1.jpg', 'Ð‘Ò¯Ñ‚ÑÑÐ³Ð´ÑÑ…Ò¯Ò¯Ð½', ' Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´ ', '<p>Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;</p>', '0', '2014-01-02 11:56:29', '2014-01-16 10:55:00', '0', '0', '0', '', '1389844589', '0');
COMMIT;

-- ----------------------------
--  Table structure for `m_object_categories`
-- ----------------------------
DROP TABLE IF EXISTS `m_object_categories`;
CREATE TABLE `m_object_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `object_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `m_object_categories`
-- ----------------------------
BEGIN;
INSERT INTO `m_object_categories` VALUES ('1', '31', '1'), ('2', '33', '1'), ('3', '37', '1');
COMMIT;

-- ----------------------------
--  Table structure for `m_objects`
-- ----------------------------
DROP TABLE IF EXISTS `m_objects`;
CREATE TABLE `m_objects` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `lft` int(11) unsigned DEFAULT '0',
  `rgt` int(11) unsigned DEFAULT '0',
  `depth` int(11) unsigned DEFAULT '0',
  `parent_id` int(11) unsigned DEFAULT '0',
  `code` varchar(255) DEFAULT NULL,
  `st` varchar(255) NOT NULL DEFAULT 'inactive',
  `is_featured` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_sale` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `photo` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `measure_value` int(11) DEFAULT '0',
  `measure_name` varchar(255) DEFAULT NULL,
  `price_per_measure` float(11,2) DEFAULT NULL,
  `price_sale` float(11,2) NOT NULL DEFAULT '0.00',
  `price_total` float(11,2) DEFAULT NULL,
  `currency_code` varchar(255) NOT NULL DEFAULT 'MNT',
  `content_brief` text,
  `content_body` longtext,
  `views` int(11) unsigned NOT NULL DEFAULT '0',
  `hits` int(11) unsigned NOT NULL DEFAULT '0',
  `date_created` datetime DEFAULT NULL,
  `date_publish` datetime DEFAULT NULL,
  `date_expire` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `m_objects`
-- ----------------------------
BEGIN;
INSERT INTO `m_objects` VALUES ('1', '1', '0', '0', '0', '0', '', 'active', '1', '1', '//www.minicms.me/media/photos/52dcdc167e2e0.jpg', 'obj name', '100', 'mkb', '2400000.00', '0.00', '108000000.00', '', 'tovch medeelel  tovch medeelel  tovch medeelel  tovch medeelel  tovch medeelel  tovch medeelel  tovch medeelel  tovch medeelel  tovch medeelel  tovch medeelel  tovch medeelel  ', '<p>more content&nbsp;more content&nbsp;more content&nbsp;more content more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;more content&nbsp;</p>', '0', '0', '2014-01-06 16:19:34', '2014-01-22 11:40:00', '2014-01-31 23:01:18');
COMMIT;

-- ----------------------------
--  Table structure for `m_option_values`
-- ----------------------------
DROP TABLE IF EXISTS `m_option_values`;
CREATE TABLE `m_option_values` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL DEFAULT 'default',
  `option_id` int(11) NOT NULL DEFAULT '0',
  `option_value` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `m_options`
-- ----------------------------
DROP TABLE IF EXISTS `m_options`;
CREATE TABLE `m_options` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL DEFAULT 'default',
  `module` varchar(255) NOT NULL DEFAULT 'default',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `st` varchar(255) NOT NULL DEFAULT 'inactive',
  `is_active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `form_tag` varchar(255) NOT NULL DEFAULT 'input',
  `group_name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `descr` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `m_options`
-- ----------------------------
BEGIN;
INSERT INTO `m_options` VALUES ('1', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'location', 'altitude', 'urgurug', '2014-01-05 13:17:40'), ('2', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'location', 'longitude', 'urgurug', '2014-01-05 13:19:34'), ('3', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'building_type', 'ÐžÑ€Ð¾Ð½ ÑÑƒÑƒÑ†', 'ÐÐ¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¾Ñ€Ð¾Ð½ ÑÑƒÑƒÑ†', '2014-01-23 22:43:56'), ('4', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'building_type', 'Ð¥Ð°ÑˆÐ°Ð° Ð±Ð°Ð¹ÑˆÐ¸Ð½', 'Ð¥Ð°ÑˆÐ°Ð° Ð±Ð°Ð¹ÑˆÐ¸Ð½', '2014-01-23 22:44:29'), ('5', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'building_type', 'ÐžÑ„Ñ„Ð¸Ñ', 'ÐžÑ„Ñ„Ð¸Ñ, Ð°Ð»Ð±Ð°Ð½ Ñ‚Ð°ÑÐ°Ð»Ð³Ð°Ð°', '2014-01-23 22:44:54'), ('6', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'building_type', 'Ð—ÑƒÑÐ»Ð°Ð½Ð³Ð¸Ð¹Ð½ Ð±Ð°Ð¹ÑˆÐ¸Ð½', 'Ð—ÑƒÑÐ»Ð°Ð½Ð³Ð¸Ð¹Ð½ Ð±Ð°Ð¹ÑˆÐ¸Ð½, Ñ…Ð°ÑƒÑ', '2014-01-23 22:45:54'), ('7', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'building_type', 'Ð¥ÑƒÐ´Ð°Ð»Ð´Ð°Ð° Ò¯Ð¹Ð»Ñ‡Ð¸Ð»Ð³ÑÑ', 'Ð¥ÑƒÐ´Ð°Ð»Ð´Ð°Ð° Ò¯Ð¹Ð»Ñ‡Ð¸Ð»Ð³ÑÑÐ½Ð¸Ð¹ Ð·Ð¾Ñ€Ð¸ÑƒÐ»Ð°Ð»Ñ‚Ñ‚Ð°Ð¹ Ð¾Ð±ÑŠÐµÐºÑ‚', '2014-01-23 22:48:24'), ('8', 'real_estate', 'real_estate', '1', 'active', '0', 'radio', 'is_new', 'Ð¨Ð¸Ð½Ñ', 'Ð¨Ð¸Ð½Ñ Ð±Ð°Ð¹Ñ€ ÑÑÑÑ…', '2014-01-23 22:50:55'), ('9', 'real_estate', 'real_estate', '1', 'active', '0', 'radio', 'is_new', 'Ð¥ÑƒÑƒÑ‡Ð¸Ð½', 'Ð‘Ð°Ð¹Ñ€Ð½Ñ‹ Ñ…ÑƒÑƒÑ‡Ð¸Ð½ ÑÑÑÑ…', '2014-01-23 22:51:14'), ('10', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'bld_info', 'Ð‘Ð°Ñ€Ð¸Ð»Ð³Ñ‹Ð½ Ð´Ð°Ð²Ñ…Ð°Ñ€', 'Ð¢ÑƒÑ…Ð°Ð¹Ð½ Ð±Ð°Ñ€Ð¸Ð»Ð³Ñ‹Ð½ Ð½Ð¸Ð¹Ñ‚ Ð´Ð°Ð²Ñ…Ð°Ñ€', '2014-01-23 23:18:06'), ('11', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'bld_info', 'Ð‘Ð°Ð¹Ñ€Ð»Ð°Ñ… Ð´Ð°Ð²Ñ…Ð°Ñ€', 'Ð¢ÑƒÑ…Ð°Ð¹Ð½ Ð¾Ð±ÑŠÐµÐºÑ‚Ð¸Ð¹Ð½ Ð±Ð°Ð¹Ñ€Ð»Ð°Ñ… Ð´Ð°Ð²Ñ…Ð°Ñ€', '2014-01-23 23:18:53'), ('12', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'bld_info', 'Ó¨Ñ€Ó©Ó©Ð½Ð¸Ð¹ Ñ‚Ð¾Ð¾', 'ÐžÐ±ÑŠÐµÐºÑ‚Ð¸Ð¹Ð½ Ð½Ð¸Ð¹Ñ‚ Ó©Ñ€Ó©Ó©', '2014-01-23 23:20:10'), ('13', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'bld_info', '00-Ð¸Ð¹Ð½ Ó©Ñ€Ó©Ó©', 'Ð½Ð¸Ð¹Ñ‚ 00 Ó©Ñ€Ó©Ó©Ð½Ð¸Ð¹ Ñ‚Ð¾Ð¾', '2014-01-23 23:20:28'), ('14', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'bld_info', 'ÐÑˆÐ¸Ð³Ð»Ð°Ð»Ñ‚Ð°Ð½Ð´ Ð¾Ñ€ÑÐ¾Ð½', 'ÐÑˆÐ¸Ð³Ð»Ð°Ð»Ñ‚Ð°Ð½Ð´ Ð¾Ñ€ÑÐ¾Ð½ Ð¾Ð³Ð½Ð¾Ð¾', '2014-01-23 23:20:54'), ('15', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'repair_condition', 'Ð—Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹Ð³ÑÑÐ³Ò¯Ð¹', 'Ð—Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹ÑÑÐ½ ÑÑÑÑ…', '2014-01-23 23:22:05'), ('16', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'repair_condition', 'Ð—Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹ÑÑÐ½', 'Ð—Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹ÑÑÐ½ ÑÑÑÑ…', '2014-01-23 23:22:20'), ('17', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'repair_condition', 'Ð¡ÑƒÐ¿ÐµÑ€ Ð·Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹ÑÑÐ½', 'Ð—Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹ÑÑÐ½ ÑÑÑÑ…', '2014-01-23 23:22:37'), ('18', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'has_furniture', 'Ð¢Ð°Ð²Ð¸Ð»Ð³Ð°Ñ‚Ð°Ð¹', 'Ð¢Ð°Ð²Ð¸Ð»Ð³Ð°Ñ‚Ð°Ð¹ ÑÑÑÑ…', '2014-01-23 23:23:47'), ('19', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'has_furniture', 'Ð¢Ð°Ð²Ð¸Ð»Ð³Ð°Ð³Ò¯Ð¹', 'Ð¢Ð°Ð²Ð¸Ð»Ð³Ð°Ñ‚Ð°Ð¹ ÑÑÑÑ…', '2014-01-23 23:24:03'), ('20', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'bld_window', 'Ð¦Ð¾Ð½Ñ…Ð½Ñ‹ Ñ‚Ð¾Ð¾', 'Ð¦Ð¾Ð½Ñ…Ð½Ñ‹ Ñ‚Ð¾Ð¾', '2014-01-23 23:25:02'), ('21', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'window_type', 'Ð’Ð°ÐºÑƒÐ¼ Ñ†Ð¾Ð½Ñ…', 'Ð’Ð°ÐºÑƒÐ¼ Ñ†Ð¾Ð½Ñ…', '2014-01-23 23:25:36'), ('22', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'window_type', 'Ð­Ð½Ð³Ð¸Ð¹Ð½ Ñ†Ð¾Ð½Ñ…', 'Ð¦Ð¾Ð½Ñ…Ð½Ñ‹ Ñ‚Ó©Ñ€Ó©Ð»', '2014-01-23 23:25:55'), ('23', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'window_type', 'Ð‘ÑƒÑÐ°Ð´ Ñ‚Ó©Ñ€Ó©Ð»', 'Ð¦Ð¾Ð½Ñ…Ð½Ñ‹ Ñ‚Ó©Ñ€Ó©Ð»', '2014-01-23 23:26:08'), ('24', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'bld_builder', 'Ð‘Ð°Ñ€ÑŒÑÐ°Ð½ ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸', 'Ð‘Ð°Ñ€Ð¸Ð»Ð³Ñ‹Ð½ Ð³Ò¯Ð¹Ñ†ÑÑ‚Ð³ÑÐ³Ñ‡', '2014-01-23 23:26:52');
COMMIT;

-- ----------------------------
--  Table structure for `m_photos`
-- ----------------------------
DROP TABLE IF EXISTS `m_photos`;
CREATE TABLE `m_photos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `st` varchar(255) NOT NULL DEFAULT 'inactive',
  `code` varchar(255) NOT NULL DEFAULT 'default',
  `type` varchar(255) NOT NULL DEFAULT 'default',
  `path` varchar(255) DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL,
  `height` int(8) unsigned NOT NULL DEFAULT '0',
  `width` int(8) unsigned NOT NULL DEFAULT '0',
  `mimetype` varchar(255) NOT NULL DEFAULT 'unknown',
  `filesize` int(11) unsigned NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  `hits` int(11) unsigned NOT NULL DEFAULT '0',
  `downloads` int(11) unsigned NOT NULL DEFAULT '0',
  `date_created` datetime DEFAULT NULL,
  `date_expire` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `m_search`
-- ----------------------------
DROP TABLE IF EXISTS `m_search`;
CREATE TABLE `m_search` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descr` text COLLATE utf8_unicode_ci,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `title_descr_ft` (`descr`,`title`,`tags`)
) ENGINE=MyISAM AUTO_INCREMENT=5415 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for `m_settings`
-- ----------------------------
DROP TABLE IF EXISTS `m_settings`;
CREATE TABLE `m_settings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text NOT NULL,
  `setting_type` varchar(255) NOT NULL DEFAULT 'default',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `m_settings`
-- ----------------------------
BEGIN;
INSERT INTO `m_settings` VALUES ('1', 'PAGE_TITLE', 'miniCMS v3 development', 'main');
COMMIT;

-- ----------------------------
--  Table structure for `m_tag_values`
-- ----------------------------
DROP TABLE IF EXISTS `m_tag_values`;
CREATE TABLE `m_tag_values` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL DEFAULT 'default',
  `tag_id` int(11) unsigned NOT NULL DEFAULT '0',
  `hits` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `m_tags`
-- ----------------------------
DROP TABLE IF EXISTS `m_tags`;
CREATE TABLE `m_tags` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `lft` int(11) unsigned DEFAULT '0',
  `rgt` int(11) unsigned DEFAULT '0',
  `parent_id` int(11) unsigned DEFAULT '0',
  `depth` int(11) unsigned DEFAULT '0',
  `tag_value` varchar(255) NOT NULL,
  `score` float(11,4) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `m_users`
-- ----------------------------
DROP TABLE IF EXISTS `m_users`;
CREATE TABLE `m_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `depth` int(11) NOT NULL DEFAULT '0',
  `lft` int(11) NOT NULL DEFAULT '0',
  `rgt` int(11) NOT NULL DEFAULT '0',
  `code` varchar(255) DEFAULT NULL,
  `st` varchar(20) NOT NULL DEFAULT 'inactive',
  `role` varchar(20) NOT NULL DEFAULT 'guest',
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `password_tmp` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `gender` varchar(20) NOT NULL DEFAULT 'unknown',
  `birthday` date DEFAULT NULL,
  `city_birth` varchar(50) DEFAULT NULL,
  `city_living` varchar(50) DEFAULT NULL,
  `address_living` varchar(255) DEFAULT NULL,
  `address_billing` varchar(255) DEFAULT NULL,
  `address_shipping` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `profile_hits` int(11) NOT NULL DEFAULT '0',
  `token` varchar(128) DEFAULT NULL,
  `secret_key` varchar(128) DEFAULT NULL,
  `default_timezone` varchar(50) NOT NULL DEFAULT 'Asia/Ulaanbaatar',
  `default_lang` varchar(2) NOT NULL DEFAULT 'mn',
  `default_layout` varchar(30) NOT NULL DEFAULT 'default',
  `date_created` datetime NOT NULL,
  `date_password_reset` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `m_users`
-- ----------------------------
BEGIN;
INSERT INTO `m_users` VALUES ('1', '0', '0', '0', '0', 'd', 'active', 'guest', 'admin@az.mn', 'batmunkh', 'sdfadsfdsf', 'asdfasfasdf', 'dd', 'dfs', null, 'unknown', null, null, null, null, null, null, null, '0', null, null, 'Asia/Ulaanbaatar', 'mn', 'default', '0000-00-00 00:00:00', null);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
