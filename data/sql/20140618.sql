/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : v3_db

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2014-06-18 16:18:09
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `m_categories`
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
  `icon` varchar(20) DEFAULT '',
  `added_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of m_categories
-- ----------------------------
INSERT INTO `m_categories` VALUES ('30', '0', '', '0', '7', '8', 'active', '1', '54.00', 'Jordan', '0', '', 'content', 'index', '', 'mn', '0', '2014-01-01 11:35:29', '2014-05-20 23:24:21', '0', '1', 'fa-star-o', '0');
INSERT INTO `m_categories` VALUES ('59', '54', '', '1', '6', '7', 'active', '1', '54.00', 'sub adidas', '0', '', 'content', 'index', '', 'mn', '0', '2014-05-20 17:41:49', '2014-05-20 17:41:49', '0', '0', '', '0');
INSERT INTO `m_categories` VALUES ('60', '59', '', '2', '2', '3', 'active', '1', '54.00', 'sub adizero', '0', '', 'content', 'index', '', 'mn', '0', '2014-05-20 17:42:38', '2014-05-20 17:42:38', '0', '0', '', '0');
INSERT INTO `m_categories` VALUES ('46', '0', '', '0', '7', '8', 'active', '1', '55.00', 'Reebok', '0', '0', 'content', 'index', '', 'mn', '0', '2014-04-22 01:08:16', '2014-05-26 18:32:48', '0', '0', 'fa-star-o', '0');
INSERT INTO `m_categories` VALUES ('43', '42', '', '1', '8', '9', 'inactive', '1', '10.00', 'Бидний тухай', '1', 'http://www.all-starshop.me/admin/category/new', 'content', 'index', '', 'mn', '0', '2014-04-22 00:41:10', '2014-04-22 00:46:35', '0', '1', '', '0');
INSERT INTO `m_categories` VALUES ('47', '0', '', '0', '7', '8', 'active', '1', '49.00', 'Эрэгтэй', '0', '', 'content', 'index', '', 'mn', '0', '2014-04-23 22:10:18', '2014-05-20 00:22:36', '0', '0', 'fa-male', '0');
INSERT INTO `m_categories` VALUES ('56', '0', '', '0', '7', '8', 'active', '1', '51.00', 'Хүүхэд', '0', '', 'content', 'index', '', 'mn', '0', '2014-05-20 00:02:20', '2014-05-20 00:23:19', '0', '0', 'fa-female', '0');
INSERT INTO `m_categories` VALUES ('54', '0', '', '0', '7', '8', 'active', '1', '43.00', 'Adidas', '0', '', 'content', 'index', '', 'mn', '0', '2014-05-19 23:58:43', '2014-05-19 23:58:43', '0', '0', 'fa-star-o', '0');
INSERT INTO `m_categories` VALUES ('55', '0', '', '0', '7', '8', 'active', '1', '50.00', 'Эмэгтэй', '0', '', 'content', 'index', '', 'mn', '0', '2014-05-19 23:59:30', '2014-05-20 00:22:54', '0', '0', 'fa-female', '0');
INSERT INTO `m_categories` VALUES ('58', '54', '', '1', '4', '5', 'active', '1', '54.00', 'Adizero', '0', '', 'content', 'index', '', 'mn', '0', '2014-05-20 12:10:21', '2014-05-20 12:11:10', '0', '0', 'fa-star-o', '0');
INSERT INTO `m_categories` VALUES ('57', '0', '', '0', '7', '8', 'active', '1', '53.00', 'Бусад', '0', '', 'content', 'index', '', 'mn', '0', '2014-05-20 11:28:08', '2014-05-20 11:28:52', '0', '0', 'fa-star-o', '0');
INSERT INTO `m_categories` VALUES ('53', '0', '', '0', '7', '8', 'active', '1', '47.00', 'Nike', '0', '', 'content', 'index', '', 'mn', '0', '2014-05-17 15:50:17', '2014-05-20 00:00:30', '0', '0', 'fa-star-o', '0');

-- ----------------------------
-- Table structure for `m_comments`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of m_comments
-- ----------------------------

-- ----------------------------
-- Table structure for `m_content_categories`
-- ----------------------------
DROP TABLE IF EXISTS `m_content_categories`;
CREATE TABLE `m_content_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content_id` int(11) unsigned DEFAULT '0',
  `category_id` int(11) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- ----------------------------
-- Records of m_content_categories
-- ----------------------------
INSERT INTO `m_content_categories` VALUES ('44', '21', '59');
INSERT INTO `m_content_categories` VALUES ('25', '17', '37');
INSERT INTO `m_content_categories` VALUES ('26', '17', '36');
INSERT INTO `m_content_categories` VALUES ('27', '18', '29');
INSERT INTO `m_content_categories` VALUES ('28', '16', '60');
INSERT INTO `m_content_categories` VALUES ('29', '16', '46');
INSERT INTO `m_content_categories` VALUES ('49', '20', '59');
INSERT INTO `m_content_categories` VALUES ('34', '19', '56');
INSERT INTO `m_content_categories` VALUES ('35', '19', '54');
INSERT INTO `m_content_categories` VALUES ('47', '22', '60');
INSERT INTO `m_content_categories` VALUES ('48', '22', '47');

-- ----------------------------
-- Table structure for `m_content_photo`
-- ----------------------------
DROP TABLE IF EXISTS `m_content_photo`;
CREATE TABLE `m_content_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of m_content_photo
-- ----------------------------
INSERT INTO `m_content_photo` VALUES ('9', '21', '221');
INSERT INTO `m_content_photo` VALUES ('10', '21', '222');
INSERT INTO `m_content_photo` VALUES ('11', '21', '224');
INSERT INTO `m_content_photo` VALUES ('12', '22', '225');

-- ----------------------------
-- Table structure for `m_contents`
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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of m_contents
-- ----------------------------
INSERT INTO `m_contents` VALUES ('16', '0', '0', '0', '0', '1', '', 'active', 'article', '//www.minicms.me/media/photos/52d7586da82e1.jpg', 'Ð‘Ò¯Ñ‚ÑÑÐ³Ð´ÑÑ…Ò¯Ò¯Ð½', ' Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´ ', '<p>&ETH;&rdquo;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&rdquo;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&rdquo;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&rdquo;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&rdquo;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&rdquo;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&rdquo;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&rdquo;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&rdquo;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ETH;&rdquo;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&rdquo;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&rdquo;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;&ETH;&acute;&Ntilde;&ETH;&raquo;&ETH;&sup3;&Ntilde;&Ntilde;&euro;&Ntilde;&ETH;&frac12;&ETH;&sup3;&Ograve;&macr;&ETH;&sup1; &ETH;&frac14;&Ntilde;&ETH;&acute;&Ntilde;&Ntilde;&ETH;&raquo;&Ntilde;&ETH;&raquo; &ETH;&frac12;&Ntilde;&OElig; &Ntilde;&ETH;&frac12;&ETH;&acute;&nbsp;</p>\r\n', '0', '2014-06-14 13:12:11', '2014-01-16 13:12:11', '0', '0', '0', '', '1389844589', '0');
INSERT INTO `m_contents` VALUES ('17', '0', '0', '0', '0', '1', '', 'active', 'article', '//www.v3.demo.az.mn/media/photos/52e5698d41a09.jpg', 'Ijj', ' Hi', '<p><strong>Yu bn datfhhhjjjjhhh</strong></p>\r\n<p><strong>t</strong>gggh</p>', '0', '2014-01-27 04:01:17', '2014-02-04 20:55:00', '0', '0', '0', '', '1390766477', '0');
INSERT INTO `m_contents` VALUES ('18', '0', '0', '0', '0', '1', '', 'active', 'article', '', 'Turshiltiin tuultai', ' mb', '<p>Turshiltaa gej...</p>', '1', '2014-01-30 00:17:14', '0000-00-00 00:00:00', '0', '0', '0', '', '1391012234', '0');
INSERT INTO `m_contents` VALUES ('19', '0', '0', '0', '0', '0', null, 'active', 'article', null, 'garchig', ' aaaaa', '<p>aaaaaaaaaa</p>\r\n', '1', '2014-06-18 04:41:17', '2014-05-26 04:41:17', '0', '0', '0', null, null, '1');
INSERT INTO `m_contents` VALUES ('20', '0', '0', '0', '0', '0', null, 'active', 'article', null, 'garchig', ' 12312', '<p>123123</p>\r\n', '1', '2014-06-18 05:40:04', '2014-06-01 05:40:04', '0', '0', '0', null, null, '1');
INSERT INTO `m_contents` VALUES ('21', '0', '0', '0', '0', '0', null, 'active', 'article', null, 'garchig', ' 12312', '<p>123123</p>\r\n', '1', '2014-06-18 05:36:57', '2014-06-01 05:36:57', '0', '0', '0', null, null, '1');
INSERT INTO `m_contents` VALUES ('22', '0', '0', '0', '0', '0', null, 'pending', 'article', null, '1adada', ' asdasdas', '', '1', '2014-06-18 05:39:22', '2014-06-03 05:39:22', '0', '0', '0', null, null, '1');

-- ----------------------------
-- Table structure for `m_currencies`
-- ----------------------------
DROP TABLE IF EXISTS `m_currencies`;
CREATE TABLE `m_currencies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prefix` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `suffix` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `symbol` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `currency_code` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `one_usd` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of m_currencies
-- ----------------------------
INSERT INTO `m_currencies` VALUES ('1', 'Tugrik', '', '', '₮', 'MNT', '1800');
INSERT INTO `m_currencies` VALUES ('2', 'Dollar', '', '', '$', 'USD', '1');

-- ----------------------------
-- Table structure for `m_discount_code`
-- ----------------------------
DROP TABLE IF EXISTS `m_discount_code`;
CREATE TABLE `m_discount_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discount_amount` float(11,2) NOT NULL,
  `discount_percent` float(11,2) NOT NULL,
  `created_at` datetime NOT NULL,
  `expire_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of m_discount_code
-- ----------------------------

-- ----------------------------
-- Table structure for `m_discount_code_log`
-- ----------------------------
DROP TABLE IF EXISTS `m_discount_code_log`;
CREATE TABLE `m_discount_code_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `discount_code_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `used_amount` float(11,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of m_discount_code_log
-- ----------------------------

-- ----------------------------
-- Table structure for `m_invoice_log`
-- ----------------------------
DROP TABLE IF EXISTS `m_invoice_log`;
CREATE TABLE `m_invoice_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `amount` float(11,2) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of m_invoice_log
-- ----------------------------

-- ----------------------------
-- Table structure for `m_invoices`
-- ----------------------------
DROP TABLE IF EXISTS `m_invoices`;
CREATE TABLE `m_invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `price_total` float(11,2) NOT NULL,
  `st` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'PAID , UNPAID',
  `payment_gateway_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of m_invoices
-- ----------------------------

-- ----------------------------
-- Table structure for `m_invoices_products`
-- ----------------------------
DROP TABLE IF EXISTS `m_invoices_products`;
CREATE TABLE `m_invoices_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoices_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of m_invoices_products
-- ----------------------------

-- ----------------------------
-- Table structure for `m_measures`
-- ----------------------------
DROP TABLE IF EXISTS `m_measures`;
CREATE TABLE `m_measures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_short` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name_long` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of m_measures
-- ----------------------------
INSERT INTO `m_measures` VALUES ('1', '', '');

-- ----------------------------
-- Table structure for `m_modules`
-- ----------------------------
DROP TABLE IF EXISTS `m_modules`;
CREATE TABLE `m_modules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `st` varchar(20) DEFAULT 'inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of m_modules
-- ----------------------------
INSERT INTO `m_modules` VALUES ('1', 'Category', 'active');
INSERT INTO `m_modules` VALUES ('3', 'Content', 'active');
INSERT INTO `m_modules` VALUES ('4', 'User', 'active');

-- ----------------------------
-- Table structure for `m_object_categories`
-- ----------------------------
DROP TABLE IF EXISTS `m_object_categories`;
CREATE TABLE `m_object_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `object_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- ----------------------------
-- Records of m_object_categories
-- ----------------------------
INSERT INTO `m_object_categories` VALUES ('1', '31', '1');
INSERT INTO `m_object_categories` VALUES ('2', '33', '1');
INSERT INTO `m_object_categories` VALUES ('3', '37', '1');
INSERT INTO `m_object_categories` VALUES ('4', '33', '2');
INSERT INTO `m_object_categories` VALUES ('5', '33', '3');
INSERT INTO `m_object_categories` VALUES ('6', '36', '3');
INSERT INTO `m_object_categories` VALUES ('7', '33', '4');
INSERT INTO `m_object_categories` VALUES ('8', '36', '4');
INSERT INTO `m_object_categories` VALUES ('9', '33', '5');
INSERT INTO `m_object_categories` VALUES ('10', '36', '5');
INSERT INTO `m_object_categories` VALUES ('11', '38', '6');
INSERT INTO `m_object_categories` VALUES ('12', '32', '7');
INSERT INTO `m_object_categories` VALUES ('13', '33', '7');
INSERT INTO `m_object_categories` VALUES ('14', '32', '8');
INSERT INTO `m_object_categories` VALUES ('15', '33', '8');
INSERT INTO `m_object_categories` VALUES ('17', '33', '9');
INSERT INTO `m_object_categories` VALUES ('18', '32', '10');
INSERT INTO `m_object_categories` VALUES ('19', '33', '10');
INSERT INTO `m_object_categories` VALUES ('20', '32', '11');
INSERT INTO `m_object_categories` VALUES ('21', '33', '11');
INSERT INTO `m_object_categories` VALUES ('22', '32', '12');
INSERT INTO `m_object_categories` VALUES ('23', '33', '12');
INSERT INTO `m_object_categories` VALUES ('24', '32', '13');
INSERT INTO `m_object_categories` VALUES ('25', '33', '13');
INSERT INTO `m_object_categories` VALUES ('26', '32', '14');
INSERT INTO `m_object_categories` VALUES ('27', '33', '14');
INSERT INTO `m_object_categories` VALUES ('28', '32', '15');
INSERT INTO `m_object_categories` VALUES ('29', '33', '15');
INSERT INTO `m_object_categories` VALUES ('30', '32', '16');
INSERT INTO `m_object_categories` VALUES ('31', '33', '16');
INSERT INTO `m_object_categories` VALUES ('32', '32', '17');
INSERT INTO `m_object_categories` VALUES ('33', '33', '17');

-- ----------------------------
-- Table structure for `m_objects`
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
  `module_name` varchar(255) NOT NULL DEFAULT 'object',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of m_objects
-- ----------------------------
INSERT INTO `m_objects` VALUES ('9', '1', '0', '0', '0', '0', 'real_estate_9', 'active', '1', '0', '//www.v3.demo.az.mn/media/photos/52e94bf7271f6.jpg', '4512 Brookmill Rd, Downey, CA', '1600', 'mkb', '2500.00', '0.00', '123456.00', 'USD', ' Head on city views in this renovated, furnished Pied a Terre. 2 units combined that allow for excellent separation of Bedrooms for privacy: master suite plus large 2nd bedroom; open living space with sliding doors to balcony overlooking the City Views.', '<p>A full service building that is close to shops, restaurants on the Sunset Strip. The unit is offered furnished and is also offered for sale.</p>', '0', '0', '2024-01-30 02:44:07', '2014-01-13 02:15:00', '2024-01-30 02:44:07', 'real_estate');
INSERT INTO `m_objects` VALUES ('10', '1', '0', '0', '0', '0', 'real_estate_10', 'active', '1', '0', '//www.v3.demo.az.mn/media/photos/52e94d6d8bdcc.jpg', 'Ulaanbaatar, Mongolia', '1600', 'mkb', '2500.00', '0.00', '123456.00', 'USD', ' Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€ Ñ…Ð¾Ñ‚ Ñ…Ò¯Ð¹Ñ‚Ð½Ñ‹ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ð¸Ñ… ÑƒÑ‚Ð°Ð°Ñ‚Ð°Ð¹ Ð±Ð°Ð¹Ð´Ð³Ñ‹Ð³ Ñ‚Ð° Ð±Ð¸Ð´ Ð¼ÑÐ´Ð½Ñ. 2009.11.26 Ð¾Ð½Ð´ MCS - Ð³Ñ€ÑƒÐ¿Ð¿Ñ‹Ð½ Ñ…Ð°Ñ€ÑŒÑÐ° SKYRESORT - ', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', '0', '0', '2024-01-30 02:50:21', '2014-01-13 02:15:00', '2024-01-30 02:50:21', 'real_estate');
INSERT INTO `m_objects` VALUES ('11', '1', '0', '0', '0', '0', 'real_estate_11', 'active', '1', '0', '//www.v3.demo.az.mn/media/photos/52e94dff90aba.jpg', 'Ulaanbaatar, Mongolia', '1600', 'mkb', '2500.00', '0.00', '123456.00', 'MNT', 'Egchiinde ochij honongoo margashinha shalgaltand beldher ochwoo ydaj bhad egchiih hotos jhn zaitai lager.d shunujinguu beldej2 untalgui honosiin tgd uwul ch bsn blhor uglu haw haranhui tgd ert garahgu bl blku gd 6ongorogod garla 7.s mikro ywdag gd tgd gartal bi zamaa ', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', '0', '0', '2024-01-30 02:52:47', '2014-01-21 01:50:00', '2024-01-30 02:52:47', 'real_estate');
INSERT INTO `m_objects` VALUES ('12', '1', '0', '0', '0', '0', 'real_estate_12', 'active', '1', '0', '//www.v3.demo.az.mn/media/photos/52e94eaf52c2f.jpg', 'zukov', '1600', 'mkb', '2500.00', '0.00', '123456.00', 'MNT', ' oldoggui bhan ywad l bla ywad l bla svvlde aigad tuurchlu gj bdod egchrvge yrih gsn negj bdaggu gants l msj.ni negjtei tgd bi tuurchlu zalga gsn msj biched egch zalgatal bi ch uilan dugarad bi zamaa olohgui bn tu...', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', '0', '0', '2024-01-30 02:55:43', '2014-01-21 01:50:00', '2024-01-30 02:55:43', 'real_estate');
INSERT INTO `m_objects` VALUES ('13', '1', '0', '0', '0', '0', 'real_estate_13', 'active', '1', '0', '//www.v3.demo.az.mn/media/photos/52e94f5ad73e6.jpg', 'ÐžÑ€Ñ‡Ð»Ð¾Ð½ Ñ…Ð¾Ñ€Ð¾Ð¾Ð»Ð¾Ð»', '1600', 'mkb', '2500.00', '0.00', '123456.00', 'MNT', 'Ð¥ÑƒÐ´Ð°Ð»Ð´Ð°Ð³Ñ‡ Ò¯ÑÐ´ÑÑÐ½ Ð½ÑŒ\r\nÐ—ÑƒÐ½Ñ‹ Ð°Ð¼Ñ€Ð°Ð»Ñ‚Ð°Ð°Ñ€Ð°Ð° Ð³ÑÑ€ Ð±Ò¯Ð»ÑÑÑ€ÑÑ Ð±ÑÑÐ¶Ð¸Ð½ ÑÐ²Ð»Ð°Ð°. Ð”ÑÐ»Ð³Ò¯Ò¯Ñ€ Ñ…ÑÑÑÑÐ´ ÑÐ²Ð¶ Ð±Ñ‚Ð°Ð» Ð¼Ð°Ð½Ð°Ð¹ Ñ…Ò¯Ò¯\r\n-ÑÐ½Ð¸Ð¹Ð³ Ñ…Ð°Ñ€Ð°Ð° ÑÐ½Ñ Ð»Ð°Ð³ Ð¼Ð°Ð½Ð¸ÐºÐµÐ½ Ð±Ð½ Ð³ÑÑÐ´ Ð¼Ð°Ð½Ð¸ÐºÐµÐ½ Ð³ÑÐ¶ Ð½ÑÑ€Ð»ÑÑÑÐ½ Ñ…Ò¯Ð½ÑÑ Ò¯ÑÐ´ÑÑÐ´ Ð°Ð²Ð´Ñ‹Ð½. ÐÓ©Ð³Ó©Ó©Ñ… Ð½ÑŒ Ñ†Ð¾Ñ‡Ð¾Ð¾Ð´ ÑÑ€Ð³ÑÑÐ´ Ñ…Ð°Ñ€ÑÐ°Ð½ Ñ‡Ð¸Ð½ÑŒ Ð¼Ð°Ð½Ð°Ð¹ Ñ…Ò¯Ò¯ Ð°Ð¹Ð³Ð°Ð°Ð´ Ñ…Ð°ÑˆÑ…Ð¸Ñ€Ñ‡ Ð·ÑƒÐ³Ñ‚Ð°Ð°Ð³Ð°Ð°Ð´ Ñ…Ð°Ñ…Ð°.\r\n', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', '0', '0', '2024-01-30 02:58:34', '2014-01-14 13:25:00', '2024-01-30 02:58:34', 'real_estate');
INSERT INTO `m_objects` VALUES ('14', '1', '0', '0', '0', '0', 'real_estate_14', 'active', '1', '0', '//www.v3.demo.az.mn/media/photos/52e94fdf56d9e.jpg', 'Ð”Ð¾Ñ€Ð½Ñ‹Ð½ Ó©Ñ€Ð³Ó©Ó©', '1600', 'mkb', '2500.00', '0.00', '123456.00', 'MNT', 'Ð¥Ò¯Ò¯:-ÑÑÐ¶ Ð°Ð¼ Ñ†Ð°Ð½Ð³Ð°Ð°Ð´ Ð±Ð°Ð¹Ð½Ð°.\r\nÐ­ÑÐ¶:-Ñ‚Ð°Ñ€Ð°Ð³ ÑƒÑƒ\r\nÐ¥Ò¯Ò¯:-ÑÑÐ¶ Ó©Ð»ÑÓ©Ó©Ð´ Ð±Ð°Ð¹Ð½Ð°.\r\nÑÑÐ¶:-Ñ‚Ð°Ñ€Ð°Ð³ Ð¸Ð´', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', '0', '0', '2024-01-30 03:00:47', '2014-01-14 13:25:00', '2024-01-30 03:00:47', 'real_estate');
INSERT INTO `m_objects` VALUES ('15', '1', '0', '0', '0', '0', 'real_estate_15', 'inactive', '0', '0', '//www.v3.demo.az.mn/media/photos/52e950b554f9c.jpg', 'ÐÐ­Ð’Ð¢Ð Ð­Ð¥ Ð¡Ð˜Ð¡Ð¢Ð•Ðœ / ACCESS CONTROL', '1800', 'mkb', '3000.00', '0.00', '180000.00', 'MNT', ' zaluuchuudaa shine onii mend hvrgey onoo saikhan ugtaarai', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', '0', '0', '2024-01-30 03:04:21', '2013-12-30 03:45:00', '2024-01-30 03:04:21', 'real_estate');
INSERT INTO `m_objects` VALUES ('16', '1', '0', '0', '0', '0', 'real_estate_16', 'active', '1', '1', '//www.v3.demo.az.mn/media/photos/52e95164d9498.jpg', 'IT SHOP', '1800', 'mkb', '3000.00', '0.00', '180000.00', 'MNT', ' ÑˆÐ¸Ð½Ñ Ð¼ÑÐ´ÑÑÑˆÐ¸Ð½Ñ Ð¼ÑÐ´ÑÑÑˆÐ¸Ð½Ñ Ð¼ÑÐ´ÑÑÑˆÐ¸Ð½Ñ Ð¼ÑÐ´ÑÑÑˆÐ¸Ð½Ñ Ð¼ÑÐ´ÑÑÑˆÐ¸Ð½Ñ Ð¼ÑÐ´ÑÑÑˆÐ¸Ð½Ñ Ð¼ÑÐ´ÑÑ', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', '0', '0', '2024-01-30 03:07:16', '2013-12-04 03:50:00', '2024-01-30 03:07:16', 'real_estate');
INSERT INTO `m_objects` VALUES ('17', '1', '0', '0', '0', '0', 'real_estate_17', 'active', '1', '1', '//www.v3.demo.az.mn/media/photos/52e951d2b160e.jpg', 'WALE GSM Ð´Ð¾Ñ…Ð¸Ð¾Ð»Ð»Ñ‹Ð½ ÐºÐ¾Ð¼', '1800', 'mkb', '3000.00', '0.00', '180000.00', 'MNT', ' Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€  Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€  Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€  Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€  Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€  Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€  Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€ ', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', '0', '0', '2024-01-30 03:09:06', '2013-12-10 14:30:00', '2024-01-30 03:09:06', 'real_estate');
INSERT INTO `m_objects` VALUES ('8', '1', '0', '0', '0', '0', 'real_estate_8', 'active', '1', '0', '//www.v3.demo.az.mn/media/photos/52e94a6486e2d.jpg', '4512 Brookmill Rd, Downey, CA', '1400', 'mkb', '2000.00', '0.00', '545455.00', 'USD', ' Parking placEnjoy this 2 bdrm/2.5 bath light infused space with high ceilings, huge windows and wood burning fireplace. Each bedroom has its own private bathroom. Beautiful natural materials w/ concrete, slate and hardwood floors throughout. Wonderful open kitchen designed for entertaining. Well designed floor-plan with a beautiful roof-top terrace.e ', '', '0', '0', '2024-01-30 02:37:24', '2014-01-28 01:05:00', '2024-01-30 02:37:24', 'real_estate');

-- ----------------------------
-- Table structure for `m_option_values`
-- ----------------------------
DROP TABLE IF EXISTS `m_option_values`;
CREATE TABLE `m_option_values` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL DEFAULT 'default',
  `option_id` int(11) NOT NULL DEFAULT '0',
  `option_value` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=227 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of m_option_values
-- ----------------------------
INSERT INTO `m_option_values` VALUES ('3', 'object_2', '1', '107.5', '1');
INSERT INTO `m_option_values` VALUES ('4', 'object_2', '2', '49.86', '1');
INSERT INTO `m_option_values` VALUES ('5', 'object_2', '0', '3', '1');
INSERT INTO `m_option_values` VALUES ('6', 'object_2', '0', '8', '1');
INSERT INTO `m_option_values` VALUES ('7', 'object_2', '10', '12', '1');
INSERT INTO `m_option_values` VALUES ('8', 'object_2', '11', '3', '1');
INSERT INTO `m_option_values` VALUES ('9', 'object_2', '12', '4', '1');
INSERT INTO `m_option_values` VALUES ('10', 'object_2', '13', '2', '1');
INSERT INTO `m_option_values` VALUES ('11', 'object_2', '14', '2014', '1');
INSERT INTO `m_option_values` VALUES ('12', 'object_2', '0', '15', '1');
INSERT INTO `m_option_values` VALUES ('13', 'object_2', '0', '19', '1');
INSERT INTO `m_option_values` VALUES ('14', 'object_2', '20', '5', '1');
INSERT INTO `m_option_values` VALUES ('15', 'object_2', '0', '21', '1');
INSERT INTO `m_option_values` VALUES ('16', 'object_2', '24', 'Ð¥ÑƒÑ€Ð´ ÐšÐ¾Ñ€Ð¿', '1');
INSERT INTO `m_option_values` VALUES ('17', 'object_3', '1', '107.52', '1');
INSERT INTO `m_option_values` VALUES ('18', 'object_3', '2', '49.87', '1');
INSERT INTO `m_option_values` VALUES ('19', 'object_3', '0', '3', '1');
INSERT INTO `m_option_values` VALUES ('20', 'object_3', '0', '9', '1');
INSERT INTO `m_option_values` VALUES ('21', 'object_3', '10', '11', '1');
INSERT INTO `m_option_values` VALUES ('22', 'object_3', '11', '2', '1');
INSERT INTO `m_option_values` VALUES ('23', 'object_3', '12', '2', '1');
INSERT INTO `m_option_values` VALUES ('24', 'object_3', '13', '1', '1');
INSERT INTO `m_option_values` VALUES ('25', 'object_3', '14', '2013', '1');
INSERT INTO `m_option_values` VALUES ('26', 'object_3', '0', '17', '1');
INSERT INTO `m_option_values` VALUES ('27', 'object_3', '0', '19', '1');
INSERT INTO `m_option_values` VALUES ('28', 'object_3', '20', '2', '1');
INSERT INTO `m_option_values` VALUES ('29', 'object_3', '0', '22', '1');
INSERT INTO `m_option_values` VALUES ('30', 'object_3', '24', 'Ð¥ÑƒÑ€Ð´ ÐšÐ¾Ñ€Ð¿', '1');
INSERT INTO `m_option_values` VALUES ('31', 'object_4', '1', '107.52', '1');
INSERT INTO `m_option_values` VALUES ('32', 'object_4', '2', '49.87', '1');
INSERT INTO `m_option_values` VALUES ('33', 'object_4', '0', '3', '1');
INSERT INTO `m_option_values` VALUES ('34', 'object_4', '0', '9', '1');
INSERT INTO `m_option_values` VALUES ('35', 'object_4', '10', '11', '1');
INSERT INTO `m_option_values` VALUES ('36', 'object_4', '11', '2', '1');
INSERT INTO `m_option_values` VALUES ('37', 'object_4', '12', '2', '1');
INSERT INTO `m_option_values` VALUES ('38', 'object_4', '13', '1', '1');
INSERT INTO `m_option_values` VALUES ('39', 'object_4', '14', '2013', '1');
INSERT INTO `m_option_values` VALUES ('40', 'object_4', '0', '17', '1');
INSERT INTO `m_option_values` VALUES ('41', 'object_4', '0', '19', '1');
INSERT INTO `m_option_values` VALUES ('42', 'object_4', '20', '2', '1');
INSERT INTO `m_option_values` VALUES ('43', 'object_4', '0', '22', '1');
INSERT INTO `m_option_values` VALUES ('44', 'object_4', '24', 'Ð¥ÑƒÑ€Ð´ ÐšÐ¾Ñ€Ð¿', '1');
INSERT INTO `m_option_values` VALUES ('45', 'object_5', '1', '107.52', '1');
INSERT INTO `m_option_values` VALUES ('46', 'object_5', '2', '49.87', '1');
INSERT INTO `m_option_values` VALUES ('47', 'object_5', '0', '3', '1');
INSERT INTO `m_option_values` VALUES ('48', 'object_5', '0', '9', '1');
INSERT INTO `m_option_values` VALUES ('49', 'object_5', '10', '11', '1');
INSERT INTO `m_option_values` VALUES ('50', 'object_5', '11', '2', '1');
INSERT INTO `m_option_values` VALUES ('51', 'object_5', '12', '2', '1');
INSERT INTO `m_option_values` VALUES ('52', 'object_5', '13', '1', '1');
INSERT INTO `m_option_values` VALUES ('53', 'object_5', '14', '2013', '1');
INSERT INTO `m_option_values` VALUES ('54', 'object_5', '0', '17', '1');
INSERT INTO `m_option_values` VALUES ('55', 'object_5', '0', '19', '1');
INSERT INTO `m_option_values` VALUES ('56', 'object_5', '20', '2', '1');
INSERT INTO `m_option_values` VALUES ('57', 'object_5', '0', '22', '1');
INSERT INTO `m_option_values` VALUES ('58', 'object_5', '24', 'Ð¥ÑƒÑ€Ð´ ÐšÐ¾Ñ€Ð¿', '1');
INSERT INTO `m_option_values` VALUES ('114', 'real_estate_9', '24', 'Ð¶Ð¸Ð³Ò¯Ò¯Ñ€', '1');
INSERT INTO `m_option_values` VALUES ('113', 'real_estate_9', '0', '21', '1');
INSERT INTO `m_option_values` VALUES ('112', 'real_estate_9', '20', '2', '1');
INSERT INTO `m_option_values` VALUES ('111', 'real_estate_9', '0', '18', '1');
INSERT INTO `m_option_values` VALUES ('110', 'real_estate_9', '0', '15', '1');
INSERT INTO `m_option_values` VALUES ('109', 'real_estate_9', '14', '2012', '1');
INSERT INTO `m_option_values` VALUES ('108', 'real_estate_9', '13', '1', '1');
INSERT INTO `m_option_values` VALUES ('107', 'real_estate_9', '12', '4', '1');
INSERT INTO `m_option_values` VALUES ('106', 'real_estate_9', '11', '2', '1');
INSERT INTO `m_option_values` VALUES ('105', 'real_estate_9', '10', '3', '1');
INSERT INTO `m_option_values` VALUES ('104', 'real_estate_9', '0', '8', '1');
INSERT INTO `m_option_values` VALUES ('101', 'real_estate_9', '1', '47Â° 54.742', '1');
INSERT INTO `m_option_values` VALUES ('102', 'real_estate_9', '2', '106Â° 57.040', '1');
INSERT INTO `m_option_values` VALUES ('103', 'real_estate_9', '0', '3', '1');
INSERT INTO `m_option_values` VALUES ('123', 'real_estate_10', '14', '2014', '1');
INSERT INTO `m_option_values` VALUES ('122', 'real_estate_10', '13', '4', '1');
INSERT INTO `m_option_values` VALUES ('121', 'real_estate_10', '12', '4', '1');
INSERT INTO `m_option_values` VALUES ('120', 'real_estate_10', '11', '4', '1');
INSERT INTO `m_option_values` VALUES ('119', 'real_estate_10', '10', '4', '1');
INSERT INTO `m_option_values` VALUES ('118', 'real_estate_10', '0', '8', '1');
INSERT INTO `m_option_values` VALUES ('117', 'real_estate_10', '0', '3', '1');
INSERT INTO `m_option_values` VALUES ('116', 'real_estate_10', '2', '106.9328249', '1');
INSERT INTO `m_option_values` VALUES ('115', 'real_estate_10', '1', '47.9192672', '1');
INSERT INTO `m_option_values` VALUES ('87', 'real_estate_8', '1', '47.8612826', '1');
INSERT INTO `m_option_values` VALUES ('88', 'real_estate_8', '2', '106.8785784', '1');
INSERT INTO `m_option_values` VALUES ('89', 'real_estate_8', '0', '3', '1');
INSERT INTO `m_option_values` VALUES ('90', 'real_estate_8', '0', '8', '1');
INSERT INTO `m_option_values` VALUES ('91', 'real_estate_8', '10', '2', '1');
INSERT INTO `m_option_values` VALUES ('92', 'real_estate_8', '11', '2', '1');
INSERT INTO `m_option_values` VALUES ('93', 'real_estate_8', '12', '2', '1');
INSERT INTO `m_option_values` VALUES ('94', 'real_estate_8', '13', '2', '1');
INSERT INTO `m_option_values` VALUES ('95', 'real_estate_8', '14', '2008', '1');
INSERT INTO `m_option_values` VALUES ('96', 'real_estate_8', '0', '17', '1');
INSERT INTO `m_option_values` VALUES ('97', 'real_estate_8', '0', '18', '1');
INSERT INTO `m_option_values` VALUES ('98', 'real_estate_8', '20', '5', '1');
INSERT INTO `m_option_values` VALUES ('99', 'real_estate_8', '0', '21', '1');
INSERT INTO `m_option_values` VALUES ('100', 'real_estate_8', '24', 'Ð¥ÑƒÑ€Ð´ Ð³Ñ€ÑƒÐ¿Ð¿', '1');
INSERT INTO `m_option_values` VALUES ('124', 'real_estate_10', '0', '15', '1');
INSERT INTO `m_option_values` VALUES ('125', 'real_estate_10', '0', '18', '1');
INSERT INTO `m_option_values` VALUES ('126', 'real_estate_10', '20', '6', '1');
INSERT INTO `m_option_values` VALUES ('127', 'real_estate_10', '0', '21', '1');
INSERT INTO `m_option_values` VALUES ('128', 'real_estate_10', '24', 'Ð¼Ñ‚Ð¼Ñ‚', '1');
INSERT INTO `m_option_values` VALUES ('129', 'real_estate_11', '1', '47Â° 54.749', '1');
INSERT INTO `m_option_values` VALUES ('130', 'real_estate_11', '2', '106Â° 57.040', '1');
INSERT INTO `m_option_values` VALUES ('131', 'real_estate_11', '0', '3', '1');
INSERT INTO `m_option_values` VALUES ('132', 'real_estate_11', '0', '8', '1');
INSERT INTO `m_option_values` VALUES ('133', 'real_estate_11', '10', '1', '1');
INSERT INTO `m_option_values` VALUES ('134', 'real_estate_11', '11', '1', '1');
INSERT INTO `m_option_values` VALUES ('135', 'real_estate_11', '12', '1', '1');
INSERT INTO `m_option_values` VALUES ('136', 'real_estate_11', '13', '1', '1');
INSERT INTO `m_option_values` VALUES ('137', 'real_estate_11', '14', '2014', '1');
INSERT INTO `m_option_values` VALUES ('138', 'real_estate_11', '0', '15', '1');
INSERT INTO `m_option_values` VALUES ('139', 'real_estate_11', '0', '18', '1');
INSERT INTO `m_option_values` VALUES ('140', 'real_estate_11', '20', '1', '1');
INSERT INTO `m_option_values` VALUES ('141', 'real_estate_11', '0', '21', '1');
INSERT INTO `m_option_values` VALUES ('142', 'real_estate_11', '24', 'MBM', '1');
INSERT INTO `m_option_values` VALUES ('143', 'real_estate_12', '1', '47Â° 54.458', '1');
INSERT INTO `m_option_values` VALUES ('144', 'real_estate_12', '2', '106Â° 57.040', '1');
INSERT INTO `m_option_values` VALUES ('145', 'real_estate_12', '0', '3', '1');
INSERT INTO `m_option_values` VALUES ('146', 'real_estate_12', '0', '8', '1');
INSERT INTO `m_option_values` VALUES ('147', 'real_estate_12', '10', '5', '1');
INSERT INTO `m_option_values` VALUES ('148', 'real_estate_12', '11', '4', '1');
INSERT INTO `m_option_values` VALUES ('149', 'real_estate_12', '12', '1', '1');
INSERT INTO `m_option_values` VALUES ('150', 'real_estate_12', '13', '1', '1');
INSERT INTO `m_option_values` VALUES ('151', 'real_estate_12', '14', '2013', '1');
INSERT INTO `m_option_values` VALUES ('152', 'real_estate_12', '0', '15', '1');
INSERT INTO `m_option_values` VALUES ('153', 'real_estate_12', '0', '18', '1');
INSERT INTO `m_option_values` VALUES ('154', 'real_estate_12', '20', '1', '1');
INSERT INTO `m_option_values` VALUES ('155', 'real_estate_12', '0', '21', '1');
INSERT INTO `m_option_values` VALUES ('156', 'real_estate_12', '24', 'Ð¼Ð¾Ð½Ð³Ð¾Ð» ÑˆÑƒÑƒÐ´Ð°Ð½', '1');
INSERT INTO `m_option_values` VALUES ('157', 'real_estate_13', '1', '47Â° 54.742', '1');
INSERT INTO `m_option_values` VALUES ('158', 'real_estate_13', '2', '106.87857', '1');
INSERT INTO `m_option_values` VALUES ('159', 'real_estate_13', '0', '3', '1');
INSERT INTO `m_option_values` VALUES ('160', 'real_estate_13', '0', '8', '1');
INSERT INTO `m_option_values` VALUES ('161', 'real_estate_13', '10', '9', '1');
INSERT INTO `m_option_values` VALUES ('162', 'real_estate_13', '11', '5', '1');
INSERT INTO `m_option_values` VALUES ('163', 'real_estate_13', '12', '2', '1');
INSERT INTO `m_option_values` VALUES ('164', 'real_estate_13', '13', '1', '1');
INSERT INTO `m_option_values` VALUES ('165', 'real_estate_13', '14', '2012', '1');
INSERT INTO `m_option_values` VALUES ('166', 'real_estate_13', '0', '15', '1');
INSERT INTO `m_option_values` VALUES ('167', 'real_estate_13', '0', '18', '1');
INSERT INTO `m_option_values` VALUES ('168', 'real_estate_13', '20', '3', '1');
INSERT INTO `m_option_values` VALUES ('169', 'real_estate_13', '0', '21', '1');
INSERT INTO `m_option_values` VALUES ('170', 'real_estate_13', '24', 'Ð¥Ð¾Ñ Ð±Ð°Ñ€', '1');
INSERT INTO `m_option_values` VALUES ('171', 'real_estate_14', '1', '47Â° 54.100', '1');
INSERT INTO `m_option_values` VALUES ('172', 'real_estate_14', '2', '106Â° 56.555', '1');
INSERT INTO `m_option_values` VALUES ('173', 'real_estate_14', '0', '3', '1');
INSERT INTO `m_option_values` VALUES ('174', 'real_estate_14', '0', '8', '1');
INSERT INTO `m_option_values` VALUES ('175', 'real_estate_14', '10', '16', '1');
INSERT INTO `m_option_values` VALUES ('176', 'real_estate_14', '11', '9', '1');
INSERT INTO `m_option_values` VALUES ('177', 'real_estate_14', '12', '5', '1');
INSERT INTO `m_option_values` VALUES ('178', 'real_estate_14', '13', '2', '1');
INSERT INTO `m_option_values` VALUES ('179', 'real_estate_14', '14', '2011', '1');
INSERT INTO `m_option_values` VALUES ('180', 'real_estate_14', '0', '15', '1');
INSERT INTO `m_option_values` VALUES ('181', 'real_estate_14', '0', '18', '1');
INSERT INTO `m_option_values` VALUES ('182', 'real_estate_14', '20', '5', '1');
INSERT INTO `m_option_values` VALUES ('183', 'real_estate_14', '0', '21', '1');
INSERT INTO `m_option_values` VALUES ('184', 'real_estate_14', '24', 'Ó¨Ð½Ð´Ó©Ñ€ Ð±ÑƒÑÐ½Ñ‚', '1');
INSERT INTO `m_option_values` VALUES ('185', 'real_estate_15', '1', ' 47Â° 55.852', '1');
INSERT INTO `m_option_values` VALUES ('186', 'real_estate_15', '2', '106Â° 52.440\'', '1');
INSERT INTO `m_option_values` VALUES ('187', 'real_estate_15', '0', '3', '1');
INSERT INTO `m_option_values` VALUES ('188', 'real_estate_15', '0', '8', '1');
INSERT INTO `m_option_values` VALUES ('189', 'real_estate_15', '10', '16', '1');
INSERT INTO `m_option_values` VALUES ('190', 'real_estate_15', '11', '5', '1');
INSERT INTO `m_option_values` VALUES ('191', 'real_estate_15', '12', '2', '1');
INSERT INTO `m_option_values` VALUES ('192', 'real_estate_15', '13', '2', '1');
INSERT INTO `m_option_values` VALUES ('193', 'real_estate_15', '14', '2003', '1');
INSERT INTO `m_option_values` VALUES ('194', 'real_estate_15', '0', '17', '1');
INSERT INTO `m_option_values` VALUES ('195', 'real_estate_15', '0', '18', '1');
INSERT INTO `m_option_values` VALUES ('196', 'real_estate_15', '20', '2', '1');
INSERT INTO `m_option_values` VALUES ('197', 'real_estate_15', '0', '21', '1');
INSERT INTO `m_option_values` VALUES ('198', 'real_estate_15', '24', 'Ð»Ð°Ð½Ñ Ð±Ð°Ñ€', '1');
INSERT INTO `m_option_values` VALUES ('199', 'real_estate_16', '1', '47.8612154', '1');
INSERT INTO `m_option_values` VALUES ('200', 'real_estate_16', '2', '106Â° 57.555', '1');
INSERT INTO `m_option_values` VALUES ('201', 'real_estate_16', '0', '3', '1');
INSERT INTO `m_option_values` VALUES ('202', 'real_estate_16', '0', '8', '1');
INSERT INTO `m_option_values` VALUES ('203', 'real_estate_16', '10', '5', '1');
INSERT INTO `m_option_values` VALUES ('204', 'real_estate_16', '11', '4', '1');
INSERT INTO `m_option_values` VALUES ('205', 'real_estate_16', '12', '4', '1');
INSERT INTO `m_option_values` VALUES ('206', 'real_estate_16', '13', '4', '1');
INSERT INTO `m_option_values` VALUES ('207', 'real_estate_16', '14', '2014', '1');
INSERT INTO `m_option_values` VALUES ('208', 'real_estate_16', '0', '16', '1');
INSERT INTO `m_option_values` VALUES ('209', 'real_estate_16', '0', '18', '1');
INSERT INTO `m_option_values` VALUES ('210', 'real_estate_16', '20', '2', '1');
INSERT INTO `m_option_values` VALUES ('211', 'real_estate_16', '0', '21', '1');
INSERT INTO `m_option_values` VALUES ('212', 'real_estate_16', '24', 'suzuki', '1');
INSERT INTO `m_option_values` VALUES ('213', 'real_estate_17', '1', '46.8612154', '1');
INSERT INTO `m_option_values` VALUES ('214', 'real_estate_17', '2', '106.8785784', '1');
INSERT INTO `m_option_values` VALUES ('215', 'real_estate_17', '0', '3', '1');
INSERT INTO `m_option_values` VALUES ('216', 'real_estate_17', '0', '8', '1');
INSERT INTO `m_option_values` VALUES ('217', 'real_estate_17', '10', '7', '1');
INSERT INTO `m_option_values` VALUES ('218', 'real_estate_17', '11', '7', '1');
INSERT INTO `m_option_values` VALUES ('219', 'real_estate_17', '12', '7', '1');
INSERT INTO `m_option_values` VALUES ('220', 'real_estate_17', '13', '4', '1');
INSERT INTO `m_option_values` VALUES ('221', 'real_estate_17', '14', '2014', '1');
INSERT INTO `m_option_values` VALUES ('222', 'real_estate_17', '0', '15', '1');
INSERT INTO `m_option_values` VALUES ('223', 'real_estate_17', '0', '18', '1');
INSERT INTO `m_option_values` VALUES ('224', 'real_estate_17', '20', '5', '1');
INSERT INTO `m_option_values` VALUES ('225', 'real_estate_17', '0', '21', '1');
INSERT INTO `m_option_values` VALUES ('226', 'real_estate_17', '24', 'Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€', '1');

-- ----------------------------
-- Table structure for `m_options`
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
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of m_options
-- ----------------------------
INSERT INTO `m_options` VALUES ('1', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'location', 'latitude', 'urgurug', '2014-01-05 13:17:40');
INSERT INTO `m_options` VALUES ('2', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'location', 'longitude', 'urgurug', '2014-01-05 13:19:34');
INSERT INTO `m_options` VALUES ('3', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'building_type', 'ÐžÑ€Ð¾Ð½ ÑÑƒÑƒÑ†', 'ÐÐ¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¾Ñ€Ð¾Ð½ ÑÑƒÑƒÑ†', '2014-01-23 22:43:56');
INSERT INTO `m_options` VALUES ('4', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'building_type', 'Ð¥Ð°ÑˆÐ°Ð° Ð±Ð°Ð¹ÑˆÐ¸Ð½', 'Ð¥Ð°ÑˆÐ°Ð° Ð±Ð°Ð¹ÑˆÐ¸Ð½', '2014-01-23 22:44:29');
INSERT INTO `m_options` VALUES ('5', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'building_type', 'ÐžÑ„Ñ„Ð¸Ñ', 'ÐžÑ„Ñ„Ð¸Ñ, Ð°Ð»Ð±Ð°Ð½ Ñ‚Ð°ÑÐ°Ð»Ð³Ð°Ð°', '2014-01-23 22:44:54');
INSERT INTO `m_options` VALUES ('6', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'building_type', 'Ð—ÑƒÑÐ»Ð°Ð½Ð³Ð¸Ð¹Ð½ Ð±Ð°Ð¹ÑˆÐ¸Ð½', 'Ð—ÑƒÑÐ»Ð°Ð½Ð³Ð¸Ð¹Ð½ Ð±Ð°Ð¹ÑˆÐ¸Ð½, Ñ…Ð°ÑƒÑ', '2014-01-23 22:45:54');
INSERT INTO `m_options` VALUES ('7', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'building_type', 'Ð¥ÑƒÐ´Ð°Ð»Ð´Ð°Ð° Ò¯Ð¹Ð»Ñ‡Ð¸Ð»Ð³ÑÑ', 'Ð¥ÑƒÐ´Ð°Ð»Ð´Ð°Ð° Ò¯Ð¹Ð»Ñ‡Ð¸Ð»Ð³ÑÑÐ½Ð¸Ð¹ Ð·Ð¾Ñ€Ð¸ÑƒÐ»Ð°Ð»Ñ‚Ñ‚Ð°Ð¹ Ð¾Ð±ÑŠÐµÐºÑ‚', '2014-01-23 22:48:24');
INSERT INTO `m_options` VALUES ('8', 'real_estate', 'real_estate', '1', 'active', '0', 'radio', 'is_new', 'Ð¨Ð¸Ð½Ñ', 'Ð¨Ð¸Ð½Ñ Ð±Ð°Ð¹Ñ€ ÑÑÑÑ…', '2014-01-23 22:50:55');
INSERT INTO `m_options` VALUES ('9', 'real_estate', 'real_estate', '1', 'active', '0', 'radio', 'is_new', 'Ð¥ÑƒÑƒÑ‡Ð¸Ð½', 'Ð‘Ð°Ð¹Ñ€Ð½Ñ‹ Ñ…ÑƒÑƒÑ‡Ð¸Ð½ ÑÑÑÑ…', '2014-01-23 22:51:14');
INSERT INTO `m_options` VALUES ('10', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'bld_info', 'Ð‘Ð°Ñ€Ð¸Ð»Ð³Ñ‹Ð½ Ð´Ð°Ð²Ñ…Ð°Ñ€', 'Ð¢ÑƒÑ…Ð°Ð¹Ð½ Ð±Ð°Ñ€Ð¸Ð»Ð³Ñ‹Ð½ Ð½Ð¸Ð¹Ñ‚ Ð´Ð°Ð²Ñ…Ð°Ñ€', '2014-01-23 23:18:06');
INSERT INTO `m_options` VALUES ('11', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'bld_info', 'Ð‘Ð°Ð¹Ñ€Ð»Ð°Ñ… Ð´Ð°Ð²Ñ…Ð°Ñ€', 'Ð¢ÑƒÑ…Ð°Ð¹Ð½ Ð¾Ð±ÑŠÐµÐºÑ‚Ð¸Ð¹Ð½ Ð±Ð°Ð¹Ñ€Ð»Ð°Ñ… Ð´Ð°Ð²Ñ…Ð°Ñ€', '2014-01-23 23:18:53');
INSERT INTO `m_options` VALUES ('12', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'bld_info', 'Ó¨Ñ€Ó©Ó©Ð½Ð¸Ð¹ Ñ‚Ð¾Ð¾', 'ÐžÐ±ÑŠÐµÐºÑ‚Ð¸Ð¹Ð½ Ð½Ð¸Ð¹Ñ‚ Ó©Ñ€Ó©Ó©', '2014-01-23 23:20:10');
INSERT INTO `m_options` VALUES ('13', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'bld_info', '00-Ð¸Ð¹Ð½ Ó©Ñ€Ó©Ó©', 'Ð½Ð¸Ð¹Ñ‚ 00 Ó©Ñ€Ó©Ó©Ð½Ð¸Ð¹ Ñ‚Ð¾Ð¾', '2014-01-23 23:20:28');
INSERT INTO `m_options` VALUES ('14', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'bld_info', 'ÐÑˆÐ¸Ð³Ð»Ð°Ð»Ñ‚Ð°Ð½Ð´ Ð¾Ñ€ÑÐ¾Ð½', 'ÐÑˆÐ¸Ð³Ð»Ð°Ð»Ñ‚Ð°Ð½Ð´ Ð¾Ñ€ÑÐ¾Ð½ Ð¾Ð³Ð½Ð¾Ð¾', '2014-01-23 23:20:54');
INSERT INTO `m_options` VALUES ('15', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'repair_condition', 'Ð—Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹Ð³ÑÑÐ³Ò¯Ð¹', 'Ð—Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹ÑÑÐ½ ÑÑÑÑ…', '2014-01-23 23:22:05');
INSERT INTO `m_options` VALUES ('16', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'repair_condition', 'Ð—Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹ÑÑÐ½', 'Ð—Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹ÑÑÐ½ ÑÑÑÑ…', '2014-01-23 23:22:20');
INSERT INTO `m_options` VALUES ('17', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'repair_condition', 'Ð¡ÑƒÐ¿ÐµÑ€ Ð·Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹ÑÑÐ½', 'Ð—Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹ÑÑÐ½ ÑÑÑÑ…', '2014-01-23 23:22:37');
INSERT INTO `m_options` VALUES ('18', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'has_furniture', 'Ð¢Ð°Ð²Ð¸Ð»Ð³Ð°Ñ‚Ð°Ð¹', 'Ð¢Ð°Ð²Ð¸Ð»Ð³Ð°Ñ‚Ð°Ð¹ ÑÑÑÑ…', '2014-01-23 23:23:47');
INSERT INTO `m_options` VALUES ('19', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'has_furniture', 'Ð¢Ð°Ð²Ð¸Ð»Ð³Ð°Ð³Ò¯Ð¹', 'Ð¢Ð°Ð²Ð¸Ð»Ð³Ð°Ñ‚Ð°Ð¹ ÑÑÑÑ…', '2014-01-23 23:24:03');
INSERT INTO `m_options` VALUES ('20', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'bld_window', 'Ð¦Ð¾Ð½Ñ…Ð½Ñ‹ Ñ‚Ð¾Ð¾', 'Ð¦Ð¾Ð½Ñ…Ð½Ñ‹ Ñ‚Ð¾Ð¾', '2014-01-23 23:25:02');
INSERT INTO `m_options` VALUES ('21', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'window_type', 'Ð’Ð°ÐºÑƒÐ¼ Ñ†Ð¾Ð½Ñ…', 'Ð’Ð°ÐºÑƒÐ¼ Ñ†Ð¾Ð½Ñ…', '2014-01-23 23:25:36');
INSERT INTO `m_options` VALUES ('22', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'window_type', 'Ð­Ð½Ð³Ð¸Ð¹Ð½ Ñ†Ð¾Ð½Ñ…', 'Ð¦Ð¾Ð½Ñ…Ð½Ñ‹ Ñ‚Ó©Ñ€Ó©Ð»', '2014-01-23 23:25:55');
INSERT INTO `m_options` VALUES ('23', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'window_type', 'Ð‘ÑƒÑÐ°Ð´ Ñ‚Ó©Ñ€Ó©Ð»', 'Ð¦Ð¾Ð½Ñ…Ð½Ñ‹ Ñ‚Ó©Ñ€Ó©Ð»', '2014-01-23 23:26:08');
INSERT INTO `m_options` VALUES ('24', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'bld_builder', 'Ð‘Ð°Ñ€ÑŒÑÐ°Ð½ ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸', 'Ð‘Ð°Ñ€Ð¸Ð»Ð³Ñ‹Ð½ Ð³Ò¯Ð¹Ñ†ÑÑ‚Ð³ÑÐ³Ñ‡', '2014-01-23 23:26:52');
INSERT INTO `m_options` VALUES ('25', 'gazar', 'gazar', '1', 'active', '0', 'select', 'gazar_type', 'Ð‘Ð°Ñ€Ð¸Ð»Ð³Ñ‹Ð½ Ð³Ð°Ð·Ð°Ñ€', 'Ð“Ð°Ð·Ñ€Ñ‹Ð½ Ñ‚Ó©Ñ€Ó©Ð»', '2014-01-24 10:27:08');
INSERT INTO `m_options` VALUES ('26', 'gazar', 'gazar', '1', 'active', '0', 'select', 'gazar_type', 'Ð¢Ð°Ñ€Ð¸Ð°, ÐÐ¾Ð³Ð¾Ð¾Ð½Ñ‹ Ñ‚Ð°Ð»Ð±Ð°Ð¹', 'Ð¢Ð°Ñ€Ð¸Ð°, Ð½Ð¾Ð³Ð¾Ð¾Ð½Ñ‹ Ñ‚Ð°Ñ€Ð¸Ð°Ð»Ð°Ñ… Ð³Ð°Ð·Ð°Ñ€', '2014-01-24 10:28:03');
INSERT INTO `m_options` VALUES ('27', 'gazar', 'gazar', '1', 'active', '0', 'input', 'gazar_location', 'Ð£Ñ€Ñ‚Ñ€Ð°Ð³', 'Ð‘Ð°Ð¹Ñ€ÑˆÐ¸Ð» Ñ…', '2014-01-24 10:29:06');
INSERT INTO `m_options` VALUES ('28', 'gazar', 'gazar', '1', 'active', '0', 'input', 'gazar_location', 'Ó¨Ñ€Ð³Ó©Ñ€Ó©Ð³', 'Ð‘Ð°Ð¹Ñ€ÑˆÐ¸Ð» Ñƒ', '2014-01-24 10:29:28');
INSERT INTO `m_options` VALUES ('29', 'gazar', 'gazar', '1', 'active', '0', 'select', 'gazar_gerchilgee_type', 'Ó¨Ð¼Ñ‡Ð¸Ð»ÑÓ©Ð½', 'Ð­Ð·ÑÐ¼ÑˆÐ»Ð¸Ð¹Ð½ Ñ‚Ó©Ñ€Ó©Ð»', '2014-01-24 10:30:21');
INSERT INTO `m_options` VALUES ('30', 'gazar', 'gazar', '1', 'active', '0', 'select', 'gazar_gerchilgee_type', 'Ð“Ð°Ð·Ð°Ñ€ ÑÐ·ÑÐ¼ÑˆÐ¸Ñ… Ð³ÑÑ€Ñ‡Ð¸Ð»Ð³ÑÑÑ‚ÑÐ¹', 'Ð­Ð·ÑÐ¼ÑˆÐ»Ð¸Ð¹Ð½ Ñ‚Ó©Ñ€Ó©Ð»', '2014-01-24 10:30:49');

-- ----------------------------
-- Table structure for `m_order`
-- ----------------------------
DROP TABLE IF EXISTS `m_order`;
CREATE TABLE `m_order` (
  `id` int(11) NOT NULL DEFAULT '0',
  `user_id` bigint(20) NOT NULL,
  `product_id` int(11) NOT NULL DEFAULT '0',
  `product_option_id` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `session_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of m_order
-- ----------------------------

-- ----------------------------
-- Table structure for `m_payment_gateways`
-- ----------------------------
DROP TABLE IF EXISTS `m_payment_gateways`;
CREATE TABLE `m_payment_gateways` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secret_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secret_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_back` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of m_payment_gateways
-- ----------------------------

-- ----------------------------
-- Table structure for `m_photos`
-- ----------------------------
DROP TABLE IF EXISTS `m_photos`;
CREATE TABLE `m_photos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `filesize` int(11) unsigned NOT NULL DEFAULT '0',
  `code` varchar(255) DEFAULT 'default',
  `domain` varchar(255) DEFAULT NULL,
  `height` int(8) unsigned DEFAULT '0',
  `type` varchar(255) DEFAULT 'default',
  `path` varchar(255) NOT NULL,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `st` varchar(255) NOT NULL DEFAULT 'inactive',
  `width` int(8) unsigned DEFAULT '0',
  `mimetype` varchar(255) NOT NULL DEFAULT 'unknown',
  `views` int(11) NOT NULL DEFAULT '0',
  `hits` int(11) unsigned NOT NULL DEFAULT '0',
  `downloads` int(11) unsigned NOT NULL DEFAULT '0',
  `date_created` datetime DEFAULT NULL,
  `date_expire` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=256 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of m_photos
-- ----------------------------
INSERT INTO `m_photos` VALUES ('255', '53a133ed04e7a.jpg', '3445', 'default', null, '0', 'default', 'media/images/53a133ed04e7a.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:38:37', null);
INSERT INTO `m_photos` VALUES ('253', '53a132eb712e9.jpg', '59797', 'default', null, '0', 'default', 'media/images/53a132eb712e9.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:34:19', null);
INSERT INTO `m_photos` VALUES ('252', '53a132ea448fb.jpg', '75765', 'default', null, '0', 'default', 'media/images/53a132ea448fb.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:34:18', null);
INSERT INTO `m_photos` VALUES ('251', '53a132e917422.jpg', '90961', 'default', null, '0', 'default', 'media/images/53a132e917422.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:34:17', null);
INSERT INTO `m_photos` VALUES ('250', '53a132e7cd686.jpg', '276131', 'default', null, '0', 'default', 'media/images/53a132e7cd686.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:34:15', null);
INSERT INTO `m_photos` VALUES ('249', '53a132e65e9e7.png', '335270', 'default', null, '0', 'default', 'media/images/53a132e65e9e7.png', '1', 'active', '0', 'image/png', '0', '0', '0', '2014-06-18 06:34:14', null);
INSERT INTO `m_photos` VALUES ('248', '53a132e508c39.jpg', '8605', 'default', null, '0', 'default', 'media/images/53a132e508c39.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:34:13', null);
INSERT INTO `m_photos` VALUES ('247', '53a132e34e3b7.jpg', '159699', 'default', null, '0', 'default', 'media/images/53a132e34e3b7.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:34:11', null);
INSERT INTO `m_photos` VALUES ('246', '53a132e1a7054.jpg', '29249', 'default', null, '0', 'default', 'media/images/53a132e1a7054.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:34:09', null);
INSERT INTO `m_photos` VALUES ('245', '53a132dfa1fb5.jpg', '530725', 'default', null, '0', 'default', 'media/images/53a132dfa1fb5.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:34:08', null);
INSERT INTO `m_photos` VALUES ('244', '53a132de072da.jpg', '120710', 'default', null, '0', 'default', 'media/images/53a132de072da.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:34:06', null);
INSERT INTO `m_photos` VALUES ('243', '53a132dcb01d0.jpg', '11702', 'default', null, '0', 'default', 'media/images/53a132dcb01d0.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:34:04', null);
INSERT INTO `m_photos` VALUES ('242', '53a132db6b9fa.jpg', '5731', 'default', null, '0', 'default', 'media/images/53a132db6b9fa.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:34:03', null);
INSERT INTO `m_photos` VALUES ('241', '53a132da1d631.jpg', '7734', 'default', null, '0', 'default', 'media/images/53a132da1d631.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:34:02', null);
INSERT INTO `m_photos` VALUES ('240', '53a132d8cdeb0.jpg', '8535', 'default', null, '0', 'default', 'media/images/53a132d8cdeb0.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:34:00', null);
INSERT INTO `m_photos` VALUES ('239', '53a132d784092.jpg', '4264', 'default', null, '0', 'default', 'media/images/53a132d784092.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:33:59', null);
INSERT INTO `m_photos` VALUES ('238', '53a132d6396e5.jpg', '6708', 'default', null, '0', 'default', 'media/images/53a132d6396e5.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:33:58', null);
INSERT INTO `m_photos` VALUES ('237', '53a132d4e736f.jpg', '7432', 'default', null, '0', 'default', 'media/images/53a132d4e736f.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:33:56', null);
INSERT INTO `m_photos` VALUES ('236', '53a132d3a3e4a.jpg', '8013', 'default', null, '0', 'default', 'media/images/53a132d3a3e4a.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:33:55', null);
INSERT INTO `m_photos` VALUES ('235', '53a132d26365b.jpg', '6575', 'default', null, '0', 'default', 'media/images/53a132d26365b.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:33:54', null);
INSERT INTO `m_photos` VALUES ('234', '53a132d1303a8.jpg', '4714', 'default', null, '0', 'default', 'media/images/53a132d1303a8.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:33:53', null);
INSERT INTO `m_photos` VALUES ('233', '53a132cfe1d62.jpg', '5610', 'default', null, '0', 'default', 'media/images/53a132cfe1d62.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:33:51', null);
INSERT INTO `m_photos` VALUES ('232', '53a132ce9f0f5.jpg', '5900', 'default', null, '0', 'default', 'media/images/53a132ce9f0f5.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:33:50', null);
INSERT INTO `m_photos` VALUES ('231', '53a132cd67480.jpg', '6377', 'default', null, '0', 'default', 'media/images/53a132cd67480.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:33:49', null);
INSERT INTO `m_photos` VALUES ('230', '53a132cc19840.jpg', '8067', 'default', null, '0', 'default', 'media/images/53a132cc19840.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:33:48', null);
INSERT INTO `m_photos` VALUES ('229', '53a132ca95335.jpg', '106758', 'default', null, '0', 'default', 'media/images/53a132ca95335.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:33:46', null);
INSERT INTO `m_photos` VALUES ('228', '53a132c9385e0.jpg', '4555', 'default', null, '0', 'default', 'media/images/53a132c9385e0.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:33:45', null);
INSERT INTO `m_photos` VALUES ('254', '53a1337cb6aac.jpg', '6575', 'default', null, '0', 'default', 'media/images/53a1337cb6aac.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:36:44', null);
INSERT INTO `m_photos` VALUES ('226', '53a132c4ad0cf.jpg', '76809', 'default', null, '0', 'default', 'media/images/53a132c4ad0cf.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 06:33:40', null);
INSERT INTO `m_photos` VALUES ('224', '53a12574a878d.jpg', '11702', 'default', null, '0', 'default', 'media/images/53a12574a878d.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 05:36:52', null);
INSERT INTO `m_photos` VALUES ('225', '53a125f369850.jpg', '6575', 'default', null, '0', 'default', 'media/images/53a125f369850.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-18 05:38:59', null);

-- ----------------------------
-- Table structure for `m_product_categories`
-- ----------------------------
DROP TABLE IF EXISTS `m_product_categories`;
CREATE TABLE `m_product_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of m_product_categories
-- ----------------------------
INSERT INTO `m_product_categories` VALUES ('29', '8', '47');
INSERT INTO `m_product_categories` VALUES ('32', '1', '47');
INSERT INTO `m_product_categories` VALUES ('34', '3', '53');
INSERT INTO `m_product_categories` VALUES ('35', '6', '53');
INSERT INTO `m_product_categories` VALUES ('36', '7', '53');
INSERT INTO `m_product_categories` VALUES ('37', '10', '53');
INSERT INTO `m_product_categories` VALUES ('38', '4', '54');
INSERT INTO `m_product_categories` VALUES ('39', '4', '58');
INSERT INTO `m_product_categories` VALUES ('47', '12', '55');
INSERT INTO `m_product_categories` VALUES ('48', '12', '30');
INSERT INTO `m_product_categories` VALUES ('51', '2', '53');

-- ----------------------------
-- Table structure for `m_product_options`
-- ----------------------------
DROP TABLE IF EXISTS `m_product_options`;
CREATE TABLE `m_product_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `group` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option_value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(11,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of m_product_options
-- ----------------------------

-- ----------------------------
-- Table structure for `m_product_photo`
-- ----------------------------
DROP TABLE IF EXISTS `m_product_photo`;
CREATE TABLE `m_product_photo` (
  `product_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of m_product_photo
-- ----------------------------
INSERT INTO `m_product_photo` VALUES ('5', '//www.all-starshop.me\\media\\photos\\53786f28f2481.jpg', '7');
INSERT INTO `m_product_photo` VALUES ('9', '//www.all-starshop.me\\media\\photos\\537893c907606.jpg', '8');
INSERT INTO `m_product_photo` VALUES ('9', '//www.all-starshop.me\\media\\photos\\537893c919950.jpg', '9');
INSERT INTO `m_product_photo` VALUES ('9', '//www.all-starshop.me\\media\\photos\\537893c922f98.jpg', '10');
INSERT INTO `m_product_photo` VALUES ('10', '//www.all-starshop.me\\media\\photos\\5378ca587abc1.jpg', '11');
INSERT INTO `m_product_photo` VALUES ('8', '//www.all-starshop.me\\media\\photos\\5378ca773b83f.jpg', '12');
INSERT INTO `m_product_photo` VALUES ('7', '//www.all-starshop.me\\media\\photos\\5378ca8a9949d.jpg', '13');
INSERT INTO `m_product_photo` VALUES ('6', '//www.all-starshop.me\\media\\photos\\5378caa1991ed.jpg', '14');
INSERT INTO `m_product_photo` VALUES ('1', '//www.all-starshop.me\\media\\photos\\5378cf69a2109.jpg', '15');
INSERT INTO `m_product_photo` VALUES ('1', '//www.all-starshop.me\\media\\photos\\5378cf69b4f12.jpg', '16');
INSERT INTO `m_product_photo` VALUES ('2', '//www.all-starshop.me\\media\\photos\\5378cfa64ff23.jpg', '17');
INSERT INTO `m_product_photo` VALUES ('3', '//www.all-starshop.me\\media\\photos\\5378cfeddc752.jpg', '18');
INSERT INTO `m_product_photo` VALUES ('4', '//www.all-starshop.me\\media\\photos\\537afdf3be27e.jpg', '19');
INSERT INTO `m_product_photo` VALUES ('4', '//www.all-starshop.me\\media\\photos\\537afdf733dd0.jpg', '20');
INSERT INTO `m_product_photo` VALUES ('12', '//www.all-starshop.me\\media\\photos\\537b7fd8cc823.jpg', '22');
INSERT INTO `m_product_photo` VALUES ('12', '//www.all-starshop.me\\media\\photos\\5380926b5e7f7.jpg', '23');
INSERT INTO `m_product_photo` VALUES ('12', '//www.all-starshop.me\\media\\photos\\5380926bbc1d5.jpg', '24');
INSERT INTO `m_product_photo` VALUES ('12', '//www.all-starshop.me\\media\\photos\\5380926be8b2b.jpg', '25');

-- ----------------------------
-- Table structure for `m_products`
-- ----------------------------
DROP TABLE IF EXISTS `m_products`;
CREATE TABLE `m_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `lang` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'mn',
  `st` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '/Inactive,Active,Pending/',
  `is_featured` tinyint(1) NOT NULL,
  `is_highlighted` tinyint(1) NOT NULL,
  `is_sticky` tinyint(1) NOT NULL,
  `use_comment` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'no,yes,only_members',
  `price` float(11,2) NOT NULL,
  `price_sale` float(11,2) NOT NULL,
  `currency_id` int(11) NOT NULL,
  `is_digital` tinyint(1) NOT NULL,
  `filepath` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `downloaded` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `measure_value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `measure_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descr` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `hits` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `expire_at` datetime NOT NULL,
  `session_time` datetime NOT NULL COMMENT 'time() ashiglana',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of m_products
-- ----------------------------
INSERT INTO `m_products` VALUES ('1', '1', 'MN', 'active', '1', '1', '0', 'no', '10000.00', '2000.00', '1', '0', '1', '0', '1', '1', '1', 'neon', '1 ', '1 ', '1', '11', '2014-04-15 15:35:34', '2014-04-17 12:31:29', '0000-00-00 00:00:00');
INSERT INTO `m_products` VALUES ('2', '1', 'MN', 'active', '0', '0', '0', 'no', '2450000.00', '210000.00', '1', '0', 'aaaaaaaaaaaa', '0', '100', 'qqqqqqqqqqqqqqqqqq', '1', '2k4', ' aaaaaaaaaaaaa   ', '<p><span style=\"color: #808000;\">aaaaaaaaaaaaaaaaaaaaaaa</span></p>\r\n<p>bbbb<span style=\"color: #333399;\">bbbbbb cccccccccccc sdddddddddddd gggggg</span>gggg йцыжбэөөжауцуфцэжэ цужохлрхоаөббйабхароаө баохааужэнглшшэжуфужэжнглшгнэуцф фцэнжэж<span style=\"color: #993366;\">шнгэжуцуфэжэнэж</span> фцуэнжгэхжауөцб ццжуэжннэжэуцуфжуэолгоэж жэжншгшэжэужцэжншгш ццужэнгэжэуцужэнг<span style=\"color: #ff6600;\">ш йыбөараөаөы ыйыббөбөб ыбөбөыөцйжцф ыйөуөуыөу</span>ыөуыөыуцуцуц</p>\r\n<p>sfffffffffff d<span style=\"color: #008000;\">fffffffffffff, dfghdgsvafseuf</span>bwlukgfweiufgweil&nbsp;</p>\r\n<p>sdfdghd<strong>rghsgsgsgesgsegsegesgesgs</strong>egseg</p>\r\n<h1>sdgrtyjtrgefwetykutrewertjk</h1>\r\n<p>dg<em>aertruyreweqrtyui</em></p>\r\n<p>dgg<span style=\"color: #333399;\">htfhtfhsh</span>serhgsr</p>', '0', '0', '2014-05-11 13:55:28', '2014-05-11 13:44:00', '0000-00-00 00:00:00');
INSERT INTO `m_products` VALUES ('3', '1', 'MN', 'active', '1', '1', '0', 'no', '180000.00', '160000.00', '1', '0', 'aaaaaaaaaaaa', '0', '0', 'qqqqqqqqqqqqqqqqqq', '1', 'Nike', ' aaaaaaaaaaaaa ', ' aaaaaaaaaaaaaaaaaaaaaaa ', '0', '0', '2014-05-11 13:56:47', '2014-05-11 13:44:00', '0000-00-00 00:00:00');
INSERT INTO `m_products` VALUES ('4', '1', 'MN', 'active', '0', '1', '0', 'no', '300000.00', '280000.00', '1', '0', 'aaaaaaaaaa', '0', '10', '1', '1', 'Adizero rose 5', ' aaaaaaaaaaaaa ', ' aaaaaaaaaaaaaaaaaaaaaaa ', '0', '0', '2014-05-11 13:57:53', '2014-05-11 13:57:00', '0000-00-00 00:00:00');
INSERT INTO `m_products` VALUES ('5', '1', 'MN', 'inactive', '1', '1', '0', 'yes', '100000.00', '1000000000.00', '1', '0', '56757', '0', '10', '10', '1', 'Nike', '      ', '      ', '0', '0', '2014-05-13 00:43:48', '2014-05-16 19:05:00', '0000-00-00 00:00:00');
INSERT INTO `m_products` VALUES ('6', '1', 'MN', 'active', '0', '1', '0', 'yes', '160000.00', '150000.00', '1', '0', '1312', '0', '10', '2', '1', 'soccer shoes', ' 123123  ', ' 12321  ', '0', '0', '2014-05-16 17:40:41', '2014-05-16 17:40:00', '0000-00-00 00:00:00');
INSERT INTO `m_products` VALUES ('7', '1', 'MN', 'active', '0', '1', '0', 'yes', '340000.00', '320000.00', '1', '0', '1312', '0', '12312', '123', '1', 'pamgar nike', ' 1231  ', ' 12312  ', '0', '0', '2014-05-16 17:45:23', '2014-05-16 17:44:00', '0000-00-00 00:00:00');
INSERT INTO `m_products` VALUES ('8', '1', 'MN', 'inactive', '0', '1', '0', 'yes', '13123.00', '1000.00', '1', '0', '1321', '0', '32131', '1231', '1', 'ewrfwer', ' 1231 ', ' 1231 ', '0', '0', '2014-05-16 19:00:36', '2014-05-16 17:46:00', '0000-00-00 00:00:00');
INSERT INTO `m_products` VALUES ('9', '1', 'MN', 'inactive', '0', '1', '0', 'yes', '123.00', '123.00', '1', '0', '1231', '0', '123', '123', '1', '123', ' 123 ', ' 123 ', '0', '0', '2014-05-16 19:02:04', '2014-05-16 19:01:00', '0000-00-00 00:00:00');
INSERT INTO `m_products` VALUES ('10', '1', 'MN', 'active', '0', '1', '0', 'yes', '1500000.00', '1100000.00', '1', '0', '56757', '0', '657567', '5757', '1', 'солонгон nike', ' 5675  ', ' 567567  ', '0', '0', '2014-05-16 19:05:53', '2014-05-16 19:05:00', '0000-00-00 00:00:00');
INSERT INTO `m_products` VALUES ('12', '1', 'MN', 'inactive', '0', '0', '0', 'no', '0.00', '0.00', '2', '0', '', '0', '0', '', '1', '', ' ', '', '0', '0', '2014-05-21 00:14:44', '2014-04-28 05:05:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `m_roles`
-- ----------------------------
DROP TABLE IF EXISTS `m_roles`;
CREATE TABLE `m_roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of m_roles
-- ----------------------------
INSERT INTO `m_roles` VALUES ('1', 'admin', 'site admin', '2014-02-03 01:08:44');
INSERT INTO `m_roles` VALUES ('2', 'manager', 'site manager', '2014-02-03 01:08:58');
INSERT INTO `m_roles` VALUES ('3', 'agent', 'real estate agent', '2014-02-03 01:09:13');
INSERT INTO `m_roles` VALUES ('4', 'operator', 'site operator', '2014-02-03 01:09:26');

-- ----------------------------
-- Table structure for `m_search`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of m_search
-- ----------------------------

-- ----------------------------
-- Table structure for `m_settings`
-- ----------------------------
DROP TABLE IF EXISTS `m_settings`;
CREATE TABLE `m_settings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text NOT NULL,
  `setting_type` varchar(255) NOT NULL DEFAULT 'default',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of m_settings
-- ----------------------------
INSERT INTO `m_settings` VALUES ('1', 'PAGE_TITLE', 'miniCMS v3 development', 'main');

-- ----------------------------
-- Table structure for `m_tag_values`
-- ----------------------------
DROP TABLE IF EXISTS `m_tag_values`;
CREATE TABLE `m_tag_values` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL DEFAULT 'default',
  `tag_id` int(11) unsigned NOT NULL DEFAULT '0',
  `hits` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of m_tag_values
-- ----------------------------

-- ----------------------------
-- Table structure for `m_tags`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of m_tags
-- ----------------------------

-- ----------------------------
-- Table structure for `m_user_roles`
-- ----------------------------
DROP TABLE IF EXISTS `m_user_roles`;
CREATE TABLE `m_user_roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `role_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of m_user_roles
-- ----------------------------
INSERT INTO `m_user_roles` VALUES ('1', '1', '1');
INSERT INTO `m_user_roles` VALUES ('2', '1', '2');
INSERT INTO `m_user_roles` VALUES ('3', '1', '3');

-- ----------------------------
-- Table structure for `m_users`
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of m_users
-- ----------------------------
INSERT INTO `m_users` VALUES ('1', '0', '0', '0', '0', 'd', 'active', 'guest', 'admin@az.mn', 'admin', 'c0e024d9200b5705bc4804722636378a', '', 'dd', 'dfs', '976-xxxxxxxx', 'unknown', '2014-02-03', 'unknown', 'Ulaanbaatar', 'Mongolia', 'unknown', 'unknown', 'none', '0', 'asdf', 'adsfasdf', 'Asia/Ulaanbaatar', 'mn', 'default', '2014-02-03 04:58:12', '2014-02-03 04:58:45');
