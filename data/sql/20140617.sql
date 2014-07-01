-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2014 at 09:52 AM
-- Server version: 5.5.36-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `v3_db`
--
CREATE DATABASE IF NOT EXISTS `v3_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `v3_db`;

-- --------------------------------------------------------

--
-- Table structure for table `m_categories`
--

CREATE TABLE IF NOT EXISTS `m_categories` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=61 ;

--
-- Dumping data for table `m_categories`
--

INSERT INTO `m_categories` (`id`, `parent_id`, `code`, `depth`, `lft`, `rgt`, `st`, `user_id`, `pos`, `name`, `is_external`, `external_url`, `module`, `action`, `target`, `lang`, `hits`, `date_created`, `date_last_updated`, `last_updated_user_id`, `is_adult`, `icon`, `added_by`) VALUES
(30, 0, '', 0, 7, 8, 'active', 1, 54.00, 'Jordan', 0, '', 'content', 'index', '', 'mn', 0, '2014-01-01 11:35:29', '2014-05-20 23:24:21', 0, 1, 'fa-star-o', 0),
(59, 54, '', 1, 6, 7, 'active', 1, 54.00, 'sub adidas', 0, '', 'content', 'index', '', 'mn', 0, '2014-05-20 17:41:49', '2014-05-20 17:41:49', 0, 0, '', 0),
(60, 59, '', 2, 2, 3, 'active', 1, 54.00, 'sub adizero', 0, '', 'content', 'index', '', 'mn', 0, '2014-05-20 17:42:38', '2014-05-20 17:42:38', 0, 0, '', 0),
(46, 0, '', 0, 7, 8, 'active', 1, 55.00, 'Reebok', 0, '0', 'content', 'index', '', 'mn', 0, '2014-04-22 01:08:16', '2014-05-26 18:32:48', 0, 0, 'fa-star-o', 0),
(43, 42, '', 1, 8, 9, 'inactive', 1, 10.00, 'Бидний тухай', 1, 'http://www.all-starshop.me/admin/category/new', 'content', 'index', '', 'mn', 0, '2014-04-22 00:41:10', '2014-04-22 00:46:35', 0, 1, '', 0),
(47, 0, '', 0, 7, 8, 'active', 1, 49.00, 'Эрэгтэй', 0, '', 'content', 'index', '', 'mn', 0, '2014-04-23 22:10:18', '2014-05-20 00:22:36', 0, 0, 'fa-male', 0),
(56, 0, '', 0, 7, 8, 'active', 1, 51.00, 'Хүүхэд', 0, '', 'content', 'index', '', 'mn', 0, '2014-05-20 00:02:20', '2014-05-20 00:23:19', 0, 0, 'fa-female', 0),
(54, 0, '', 0, 7, 8, 'active', 1, 43.00, 'Adidas', 0, '', 'content', 'index', '', 'mn', 0, '2014-05-19 23:58:43', '2014-05-19 23:58:43', 0, 0, 'fa-star-o', 0),
(55, 0, '', 0, 7, 8, 'active', 1, 50.00, 'Эмэгтэй', 0, '', 'content', 'index', '', 'mn', 0, '2014-05-19 23:59:30', '2014-05-20 00:22:54', 0, 0, 'fa-female', 0),
(58, 54, '', 1, 4, 5, 'active', 1, 54.00, 'Adizero', 0, '', 'content', 'index', '', 'mn', 0, '2014-05-20 12:10:21', '2014-05-20 12:11:10', 0, 0, 'fa-star-o', 0),
(57, 0, '', 0, 7, 8, 'active', 1, 53.00, 'Бусад', 0, '', 'content', 'index', '', 'mn', 0, '2014-05-20 11:28:08', '2014-05-20 11:28:52', 0, 0, 'fa-star-o', 0),
(53, 0, '', 0, 7, 8, 'active', 1, 47.00, 'Nike', 0, '', 'content', 'index', '', 'mn', 0, '2014-05-17 15:50:17', '2014-05-20 00:00:30', 0, 0, 'fa-star-o', 0);

-- --------------------------------------------------------

--
-- Table structure for table `m_comments`
--

CREATE TABLE IF NOT EXISTS `m_comments` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `m_contents`
--

CREATE TABLE IF NOT EXISTS `m_contents` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=19 ;

--
-- Dumping data for table `m_contents`
--

INSERT INTO `m_contents` (`id`, `parent_id`, `lft`, `rgt`, `depth`, `user_id`, `code`, `st`, `content_type`, `photo`, `title`, `content_brief`, `content_body`, `use_comment`, `date_created`, `date_publish`, `total_updated`, `views`, `hits`, `session_id`, `session_time`, `is_adult`) VALUES
(16, 0, 0, 0, 0, 1, '', 'active', 'article', '//www.minicms.me/media/photos/52d7586da82e1.jpg', 'Ð‘Ò¯Ñ‚ÑÑÐ³Ð´ÑÑ…Ò¯Ò¯Ð½', ' Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´  Ñ‚Ð¾Ð²Ñ‡ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´ ', '<p>Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð”ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;Ð´ÑÐ»Ð³ÑÑ€ÑÐ½Ð³Ò¯Ð¹ Ð¼ÑÐ´ÑÑÐ»ÑÐ» Ð½ÑŒ ÑÐ½Ð´&nbsp;</p>', 0, '2014-01-02 11:56:29', '2014-01-16 10:55:00', 0, 0, 0, '', '1389844589', 0),
(17, 0, 0, 0, 0, 1, '', 'active', 'article', '//www.v3.demo.az.mn/media/photos/52e5698d41a09.jpg', 'Ijj', ' Hi', '<p><strong>Yu bn datfhhhjjjjhhh</strong></p>\r\n<p><strong>t</strong>gggh</p>', 0, '2014-01-27 04:01:17', '2014-02-04 20:55:00', 0, 0, 0, '', '1390766477', 0),
(18, 0, 0, 0, 0, 1, '', 'active', 'article', '', 'Turshiltiin tuultai', ' mb', '<p>Turshiltaa gej...</p>', 1, '2014-01-30 00:17:14', '0000-00-00 00:00:00', 0, 0, 0, '', '1391012234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `m_content_categories`
--

CREATE TABLE IF NOT EXISTS `m_content_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content_id` int(11) unsigned DEFAULT '0',
  `category_id` int(11) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED AUTO_INCREMENT=28 ;

--
-- Dumping data for table `m_content_categories`
--

INSERT INTO `m_content_categories` (`id`, `content_id`, `category_id`) VALUES
(22, 16, 33),
(23, 16, 37),
(25, 17, 37),
(26, 17, 36),
(27, 18, 29);

-- --------------------------------------------------------

--
-- Table structure for table `m_currencies`
--

CREATE TABLE IF NOT EXISTS `m_currencies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prefix` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `suffix` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `symbol` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `currency_code` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `one_usd` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_currencies`
--

INSERT INTO `m_currencies` (`id`, `name`, `prefix`, `suffix`, `symbol`, `currency_code`, `one_usd`) VALUES
(1, 'Tugrik', '', '', '₮', 'MNT', '1800'),
(2, 'Dollar', '', '', '$', 'USD', '1');

-- --------------------------------------------------------

--
-- Table structure for table `m_discount_code`
--

CREATE TABLE IF NOT EXISTS `m_discount_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discount_amount` float(11,2) NOT NULL,
  `discount_percent` float(11,2) NOT NULL,
  `created_at` datetime NOT NULL,
  `expire_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `m_discount_code_log`
--

CREATE TABLE IF NOT EXISTS `m_discount_code_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `discount_code_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `used_amount` float(11,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `m_invoices`
--

CREATE TABLE IF NOT EXISTS `m_invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `price_total` float(11,2) NOT NULL,
  `st` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'PAID , UNPAID',
  `payment_gateway_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `m_invoices_products`
--

CREATE TABLE IF NOT EXISTS `m_invoices_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoices_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `m_invoice_log`
--

CREATE TABLE IF NOT EXISTS `m_invoice_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `amount` float(11,2) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `m_measures`
--

CREATE TABLE IF NOT EXISTS `m_measures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_short` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name_long` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `m_measures`
--

INSERT INTO `m_measures` (`id`, `name_short`, `name_long`) VALUES
(1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `m_modules`
--

CREATE TABLE IF NOT EXISTS `m_modules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `st` varchar(20) DEFAULT 'inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `m_modules`
--

INSERT INTO `m_modules` (`id`, `name`, `st`) VALUES
(1, 'Category', 'active'),
(3, 'Content', 'active'),
(4, 'User', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `m_objects`
--

CREATE TABLE IF NOT EXISTS `m_objects` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=18 ;

--
-- Dumping data for table `m_objects`
--

INSERT INTO `m_objects` (`id`, `user_id`, `lft`, `rgt`, `depth`, `parent_id`, `code`, `st`, `is_featured`, `is_sale`, `photo`, `name`, `measure_value`, `measure_name`, `price_per_measure`, `price_sale`, `price_total`, `currency_code`, `content_brief`, `content_body`, `views`, `hits`, `date_created`, `date_publish`, `date_expire`, `module_name`) VALUES
(9, 1, 0, 0, 0, 0, 'real_estate_9', 'active', 1, 0, '//www.v3.demo.az.mn/media/photos/52e94bf7271f6.jpg', '4512 Brookmill Rd, Downey, CA', 1600, 'mkb', 2500.00, 0.00, 123456.00, 'USD', ' Head on city views in this renovated, furnished Pied a Terre. 2 units combined that allow for excellent separation of Bedrooms for privacy: master suite plus large 2nd bedroom; open living space with sliding doors to balcony overlooking the City Views.', '<p>A full service building that is close to shops, restaurants on the Sunset Strip. The unit is offered furnished and is also offered for sale.</p>', 0, 0, '2024-01-30 02:44:07', '2014-01-13 02:15:00', '2024-01-30 02:44:07', 'real_estate'),
(10, 1, 0, 0, 0, 0, 'real_estate_10', 'active', 1, 0, '//www.v3.demo.az.mn/media/photos/52e94d6d8bdcc.jpg', 'Ulaanbaatar, Mongolia', 1600, 'mkb', 2500.00, 0.00, 123456.00, 'USD', ' Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€ Ñ…Ð¾Ñ‚ Ñ…Ò¯Ð¹Ñ‚Ð½Ñ‹ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ð¸Ñ… ÑƒÑ‚Ð°Ð°Ñ‚Ð°Ð¹ Ð±Ð°Ð¹Ð´Ð³Ñ‹Ð³ Ñ‚Ð° Ð±Ð¸Ð´ Ð¼ÑÐ´Ð½Ñ. 2009.11.26 Ð¾Ð½Ð´ MCS - Ð³Ñ€ÑƒÐ¿Ð¿Ñ‹Ð½ Ñ…Ð°Ñ€ÑŒÑÐ° SKYRESORT - ', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', 0, 0, '2024-01-30 02:50:21', '2014-01-13 02:15:00', '2024-01-30 02:50:21', 'real_estate'),
(11, 1, 0, 0, 0, 0, 'real_estate_11', 'active', 1, 0, '//www.v3.demo.az.mn/media/photos/52e94dff90aba.jpg', 'Ulaanbaatar, Mongolia', 1600, 'mkb', 2500.00, 0.00, 123456.00, 'MNT', 'Egchiinde ochij honongoo margashinha shalgaltand beldher ochwoo ydaj bhad egchiih hotos jhn zaitai lager.d shunujinguu beldej2 untalgui honosiin tgd uwul ch bsn blhor uglu haw haranhui tgd ert garahgu bl blku gd 6ongorogod garla 7.s mikro ywdag gd tgd gartal bi zamaa ', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', 0, 0, '2024-01-30 02:52:47', '2014-01-21 01:50:00', '2024-01-30 02:52:47', 'real_estate'),
(12, 1, 0, 0, 0, 0, 'real_estate_12', 'active', 1, 0, '//www.v3.demo.az.mn/media/photos/52e94eaf52c2f.jpg', 'zukov', 1600, 'mkb', 2500.00, 0.00, 123456.00, 'MNT', ' oldoggui bhan ywad l bla ywad l bla svvlde aigad tuurchlu gj bdod egchrvge yrih gsn negj bdaggu gants l msj.ni negjtei tgd bi tuurchlu zalga gsn msj biched egch zalgatal bi ch uilan dugarad bi zamaa olohgui bn tu...', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', 0, 0, '2024-01-30 02:55:43', '2014-01-21 01:50:00', '2024-01-30 02:55:43', 'real_estate'),
(13, 1, 0, 0, 0, 0, 'real_estate_13', 'active', 1, 0, '//www.v3.demo.az.mn/media/photos/52e94f5ad73e6.jpg', 'ÐžÑ€Ñ‡Ð»Ð¾Ð½ Ñ…Ð¾Ñ€Ð¾Ð¾Ð»Ð¾Ð»', 1600, 'mkb', 2500.00, 0.00, 123456.00, 'MNT', 'Ð¥ÑƒÐ´Ð°Ð»Ð´Ð°Ð³Ñ‡ Ò¯ÑÐ´ÑÑÐ½ Ð½ÑŒ\r\nÐ—ÑƒÐ½Ñ‹ Ð°Ð¼Ñ€Ð°Ð»Ñ‚Ð°Ð°Ñ€Ð°Ð° Ð³ÑÑ€ Ð±Ò¯Ð»ÑÑÑ€ÑÑ Ð±ÑÑÐ¶Ð¸Ð½ ÑÐ²Ð»Ð°Ð°. Ð”ÑÐ»Ð³Ò¯Ò¯Ñ€ Ñ…ÑÑÑÑÐ´ ÑÐ²Ð¶ Ð±Ñ‚Ð°Ð» Ð¼Ð°Ð½Ð°Ð¹ Ñ…Ò¯Ò¯\r\n-ÑÐ½Ð¸Ð¹Ð³ Ñ…Ð°Ñ€Ð°Ð° ÑÐ½Ñ Ð»Ð°Ð³ Ð¼Ð°Ð½Ð¸ÐºÐµÐ½ Ð±Ð½ Ð³ÑÑÐ´ Ð¼Ð°Ð½Ð¸ÐºÐµÐ½ Ð³ÑÐ¶ Ð½ÑÑ€Ð»ÑÑÑÐ½ Ñ…Ò¯Ð½ÑÑ Ò¯ÑÐ´ÑÑÐ´ Ð°Ð²Ð´Ñ‹Ð½. ÐÓ©Ð³Ó©Ó©Ñ… Ð½ÑŒ Ñ†Ð¾Ñ‡Ð¾Ð¾Ð´ ÑÑ€Ð³ÑÑÐ´ Ñ…Ð°Ñ€ÑÐ°Ð½ Ñ‡Ð¸Ð½ÑŒ Ð¼Ð°Ð½Ð°Ð¹ Ñ…Ò¯Ò¯ Ð°Ð¹Ð³Ð°Ð°Ð´ Ñ…Ð°ÑˆÑ…Ð¸Ñ€Ñ‡ Ð·ÑƒÐ³Ñ‚Ð°Ð°Ð³Ð°Ð°Ð´ Ñ…Ð°Ñ…Ð°.\r\n', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', 0, 0, '2024-01-30 02:58:34', '2014-01-14 13:25:00', '2024-01-30 02:58:34', 'real_estate'),
(14, 1, 0, 0, 0, 0, 'real_estate_14', 'active', 1, 0, '//www.v3.demo.az.mn/media/photos/52e94fdf56d9e.jpg', 'Ð”Ð¾Ñ€Ð½Ñ‹Ð½ Ó©Ñ€Ð³Ó©Ó©', 1600, 'mkb', 2500.00, 0.00, 123456.00, 'MNT', 'Ð¥Ò¯Ò¯:-ÑÑÐ¶ Ð°Ð¼ Ñ†Ð°Ð½Ð³Ð°Ð°Ð´ Ð±Ð°Ð¹Ð½Ð°.\r\nÐ­ÑÐ¶:-Ñ‚Ð°Ñ€Ð°Ð³ ÑƒÑƒ\r\nÐ¥Ò¯Ò¯:-ÑÑÐ¶ Ó©Ð»ÑÓ©Ó©Ð´ Ð±Ð°Ð¹Ð½Ð°.\r\nÑÑÐ¶:-Ñ‚Ð°Ñ€Ð°Ð³ Ð¸Ð´', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', 0, 0, '2024-01-30 03:00:47', '2014-01-14 13:25:00', '2024-01-30 03:00:47', 'real_estate'),
(15, 1, 0, 0, 0, 0, 'real_estate_15', 'inactive', 0, 0, '//www.v3.demo.az.mn/media/photos/52e950b554f9c.jpg', 'ÐÐ­Ð’Ð¢Ð Ð­Ð¥ Ð¡Ð˜Ð¡Ð¢Ð•Ðœ / ACCESS CONTROL', 1800, 'mkb', 3000.00, 0.00, 180000.00, 'MNT', ' zaluuchuudaa shine onii mend hvrgey onoo saikhan ugtaarai', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', 0, 0, '2024-01-30 03:04:21', '2013-12-30 03:45:00', '2024-01-30 03:04:21', 'real_estate'),
(16, 1, 0, 0, 0, 0, 'real_estate_16', 'active', 1, 1, '//www.v3.demo.az.mn/media/photos/52e95164d9498.jpg', 'IT SHOP', 1800, 'mkb', 3000.00, 0.00, 180000.00, 'MNT', ' ÑˆÐ¸Ð½Ñ Ð¼ÑÐ´ÑÑÑˆÐ¸Ð½Ñ Ð¼ÑÐ´ÑÑÑˆÐ¸Ð½Ñ Ð¼ÑÐ´ÑÑÑˆÐ¸Ð½Ñ Ð¼ÑÐ´ÑÑÑˆÐ¸Ð½Ñ Ð¼ÑÐ´ÑÑÑˆÐ¸Ð½Ñ Ð¼ÑÐ´ÑÑÑˆÐ¸Ð½Ñ Ð¼ÑÐ´ÑÑ', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', 0, 0, '2024-01-30 03:07:16', '2013-12-04 03:50:00', '2024-01-30 03:07:16', 'real_estate'),
(17, 1, 0, 0, 0, 0, 'real_estate_17', 'active', 1, 1, '//www.v3.demo.az.mn/media/photos/52e951d2b160e.jpg', 'WALE GSM Ð´Ð¾Ñ…Ð¸Ð¾Ð»Ð»Ñ‹Ð½ ÐºÐ¾Ð¼', 1800, 'mkb', 3000.00, 0.00, 180000.00, 'MNT', ' Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€  Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€  Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€  Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€  Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€  Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€  Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€ ', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', 0, 0, '2024-01-30 03:09:06', '2013-12-10 14:30:00', '2024-01-30 03:09:06', 'real_estate'),
(8, 1, 0, 0, 0, 0, 'real_estate_8', 'active', 1, 0, '//www.v3.demo.az.mn/media/photos/52e94a6486e2d.jpg', '4512 Brookmill Rd, Downey, CA', 1400, 'mkb', 2000.00, 0.00, 545455.00, 'USD', ' Parking placEnjoy this 2 bdrm/2.5 bath light infused space with high ceilings, huge windows and wood burning fireplace. Each bedroom has its own private bathroom. Beautiful natural materials w/ concrete, slate and hardwood floors throughout. Wonderful open kitchen designed for entertaining. Well designed floor-plan with a beautiful roof-top terrace.e ', '', 0, 0, '2024-01-30 02:37:24', '2014-01-28 01:05:00', '2024-01-30 02:37:24', 'real_estate');

-- --------------------------------------------------------

--
-- Table structure for table `m_object_categories`
--

CREATE TABLE IF NOT EXISTS `m_object_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `object_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED AUTO_INCREMENT=34 ;

--
-- Dumping data for table `m_object_categories`
--

INSERT INTO `m_object_categories` (`id`, `category_id`, `object_id`) VALUES
(1, 31, 1),
(2, 33, 1),
(3, 37, 1),
(4, 33, 2),
(5, 33, 3),
(6, 36, 3),
(7, 33, 4),
(8, 36, 4),
(9, 33, 5),
(10, 36, 5),
(11, 38, 6),
(12, 32, 7),
(13, 33, 7),
(14, 32, 8),
(15, 33, 8),
(17, 33, 9),
(18, 32, 10),
(19, 33, 10),
(20, 32, 11),
(21, 33, 11),
(22, 32, 12),
(23, 33, 12),
(24, 32, 13),
(25, 33, 13),
(26, 32, 14),
(27, 33, 14),
(28, 32, 15),
(29, 33, 15),
(30, 32, 16),
(31, 33, 16),
(32, 32, 17),
(33, 33, 17);

-- --------------------------------------------------------

--
-- Table structure for table `m_options`
--

CREATE TABLE IF NOT EXISTS `m_options` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=31 ;

--
-- Dumping data for table `m_options`
--

INSERT INTO `m_options` (`id`, `code`, `module`, `user_id`, `st`, `is_active`, `form_tag`, `group_name`, `title`, `descr`, `date_created`) VALUES
(1, 'real_estate', 'real_estate', 1, 'active', 0, 'input', 'location', 'latitude', 'urgurug', '2014-01-05 13:17:40'),
(2, 'real_estate', 'real_estate', 1, 'active', 0, 'input', 'location', 'longitude', 'urgurug', '2014-01-05 13:19:34'),
(3, 'real_estate', 'real_estate', 1, 'active', 0, 'select', 'building_type', 'ÐžÑ€Ð¾Ð½ ÑÑƒÑƒÑ†', 'ÐÐ¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¾Ñ€Ð¾Ð½ ÑÑƒÑƒÑ†', '2014-01-23 22:43:56'),
(4, 'real_estate', 'real_estate', 1, 'active', 0, 'select', 'building_type', 'Ð¥Ð°ÑˆÐ°Ð° Ð±Ð°Ð¹ÑˆÐ¸Ð½', 'Ð¥Ð°ÑˆÐ°Ð° Ð±Ð°Ð¹ÑˆÐ¸Ð½', '2014-01-23 22:44:29'),
(5, 'real_estate', 'real_estate', 1, 'active', 0, 'select', 'building_type', 'ÐžÑ„Ñ„Ð¸Ñ', 'ÐžÑ„Ñ„Ð¸Ñ, Ð°Ð»Ð±Ð°Ð½ Ñ‚Ð°ÑÐ°Ð»Ð³Ð°Ð°', '2014-01-23 22:44:54'),
(6, 'real_estate', 'real_estate', 1, 'active', 0, 'select', 'building_type', 'Ð—ÑƒÑÐ»Ð°Ð½Ð³Ð¸Ð¹Ð½ Ð±Ð°Ð¹ÑˆÐ¸Ð½', 'Ð—ÑƒÑÐ»Ð°Ð½Ð³Ð¸Ð¹Ð½ Ð±Ð°Ð¹ÑˆÐ¸Ð½, Ñ…Ð°ÑƒÑ', '2014-01-23 22:45:54'),
(7, 'real_estate', 'real_estate', 1, 'active', 0, 'select', 'building_type', 'Ð¥ÑƒÐ´Ð°Ð»Ð´Ð°Ð° Ò¯Ð¹Ð»Ñ‡Ð¸Ð»Ð³ÑÑ', 'Ð¥ÑƒÐ´Ð°Ð»Ð´Ð°Ð° Ò¯Ð¹Ð»Ñ‡Ð¸Ð»Ð³ÑÑÐ½Ð¸Ð¹ Ð·Ð¾Ñ€Ð¸ÑƒÐ»Ð°Ð»Ñ‚Ñ‚Ð°Ð¹ Ð¾Ð±ÑŠÐµÐºÑ‚', '2014-01-23 22:48:24'),
(8, 'real_estate', 'real_estate', 1, 'active', 0, 'radio', 'is_new', 'Ð¨Ð¸Ð½Ñ', 'Ð¨Ð¸Ð½Ñ Ð±Ð°Ð¹Ñ€ ÑÑÑÑ…', '2014-01-23 22:50:55'),
(9, 'real_estate', 'real_estate', 1, 'active', 0, 'radio', 'is_new', 'Ð¥ÑƒÑƒÑ‡Ð¸Ð½', 'Ð‘Ð°Ð¹Ñ€Ð½Ñ‹ Ñ…ÑƒÑƒÑ‡Ð¸Ð½ ÑÑÑÑ…', '2014-01-23 22:51:14'),
(10, 'real_estate', 'real_estate', 1, 'active', 0, 'input', 'bld_info', 'Ð‘Ð°Ñ€Ð¸Ð»Ð³Ñ‹Ð½ Ð´Ð°Ð²Ñ…Ð°Ñ€', 'Ð¢ÑƒÑ…Ð°Ð¹Ð½ Ð±Ð°Ñ€Ð¸Ð»Ð³Ñ‹Ð½ Ð½Ð¸Ð¹Ñ‚ Ð´Ð°Ð²Ñ…Ð°Ñ€', '2014-01-23 23:18:06'),
(11, 'real_estate', 'real_estate', 1, 'active', 0, 'input', 'bld_info', 'Ð‘Ð°Ð¹Ñ€Ð»Ð°Ñ… Ð´Ð°Ð²Ñ…Ð°Ñ€', 'Ð¢ÑƒÑ…Ð°Ð¹Ð½ Ð¾Ð±ÑŠÐµÐºÑ‚Ð¸Ð¹Ð½ Ð±Ð°Ð¹Ñ€Ð»Ð°Ñ… Ð´Ð°Ð²Ñ…Ð°Ñ€', '2014-01-23 23:18:53'),
(12, 'real_estate', 'real_estate', 1, 'active', 0, 'input', 'bld_info', 'Ó¨Ñ€Ó©Ó©Ð½Ð¸Ð¹ Ñ‚Ð¾Ð¾', 'ÐžÐ±ÑŠÐµÐºÑ‚Ð¸Ð¹Ð½ Ð½Ð¸Ð¹Ñ‚ Ó©Ñ€Ó©Ó©', '2014-01-23 23:20:10'),
(13, 'real_estate', 'real_estate', 1, 'active', 0, 'input', 'bld_info', '00-Ð¸Ð¹Ð½ Ó©Ñ€Ó©Ó©', 'Ð½Ð¸Ð¹Ñ‚ 00 Ó©Ñ€Ó©Ó©Ð½Ð¸Ð¹ Ñ‚Ð¾Ð¾', '2014-01-23 23:20:28'),
(14, 'real_estate', 'real_estate', 1, 'active', 0, 'input', 'bld_info', 'ÐÑˆÐ¸Ð³Ð»Ð°Ð»Ñ‚Ð°Ð½Ð´ Ð¾Ñ€ÑÐ¾Ð½', 'ÐÑˆÐ¸Ð³Ð»Ð°Ð»Ñ‚Ð°Ð½Ð´ Ð¾Ñ€ÑÐ¾Ð½ Ð¾Ð³Ð½Ð¾Ð¾', '2014-01-23 23:20:54'),
(15, 'real_estate', 'real_estate', 1, 'active', 0, 'select', 'repair_condition', 'Ð—Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹Ð³ÑÑÐ³Ò¯Ð¹', 'Ð—Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹ÑÑÐ½ ÑÑÑÑ…', '2014-01-23 23:22:05'),
(16, 'real_estate', 'real_estate', 1, 'active', 0, 'select', 'repair_condition', 'Ð—Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹ÑÑÐ½', 'Ð—Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹ÑÑÐ½ ÑÑÑÑ…', '2014-01-23 23:22:20'),
(17, 'real_estate', 'real_estate', 1, 'active', 0, 'select', 'repair_condition', 'Ð¡ÑƒÐ¿ÐµÑ€ Ð·Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹ÑÑÐ½', 'Ð—Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹ÑÑÐ½ ÑÑÑÑ…', '2014-01-23 23:22:37'),
(18, 'real_estate', 'real_estate', 1, 'active', 0, 'select', 'has_furniture', 'Ð¢Ð°Ð²Ð¸Ð»Ð³Ð°Ñ‚Ð°Ð¹', 'Ð¢Ð°Ð²Ð¸Ð»Ð³Ð°Ñ‚Ð°Ð¹ ÑÑÑÑ…', '2014-01-23 23:23:47'),
(19, 'real_estate', 'real_estate', 1, 'active', 0, 'select', 'has_furniture', 'Ð¢Ð°Ð²Ð¸Ð»Ð³Ð°Ð³Ò¯Ð¹', 'Ð¢Ð°Ð²Ð¸Ð»Ð³Ð°Ñ‚Ð°Ð¹ ÑÑÑÑ…', '2014-01-23 23:24:03'),
(20, 'real_estate', 'real_estate', 1, 'active', 0, 'input', 'bld_window', 'Ð¦Ð¾Ð½Ñ…Ð½Ñ‹ Ñ‚Ð¾Ð¾', 'Ð¦Ð¾Ð½Ñ…Ð½Ñ‹ Ñ‚Ð¾Ð¾', '2014-01-23 23:25:02'),
(21, 'real_estate', 'real_estate', 1, 'active', 0, 'select', 'window_type', 'Ð’Ð°ÐºÑƒÐ¼ Ñ†Ð¾Ð½Ñ…', 'Ð’Ð°ÐºÑƒÐ¼ Ñ†Ð¾Ð½Ñ…', '2014-01-23 23:25:36'),
(22, 'real_estate', 'real_estate', 1, 'active', 0, 'select', 'window_type', 'Ð­Ð½Ð³Ð¸Ð¹Ð½ Ñ†Ð¾Ð½Ñ…', 'Ð¦Ð¾Ð½Ñ…Ð½Ñ‹ Ñ‚Ó©Ñ€Ó©Ð»', '2014-01-23 23:25:55'),
(23, 'real_estate', 'real_estate', 1, 'active', 0, 'select', 'window_type', 'Ð‘ÑƒÑÐ°Ð´ Ñ‚Ó©Ñ€Ó©Ð»', 'Ð¦Ð¾Ð½Ñ…Ð½Ñ‹ Ñ‚Ó©Ñ€Ó©Ð»', '2014-01-23 23:26:08'),
(24, 'real_estate', 'real_estate', 1, 'active', 0, 'input', 'bld_builder', 'Ð‘Ð°Ñ€ÑŒÑÐ°Ð½ ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸', 'Ð‘Ð°Ñ€Ð¸Ð»Ð³Ñ‹Ð½ Ð³Ò¯Ð¹Ñ†ÑÑ‚Ð³ÑÐ³Ñ‡', '2014-01-23 23:26:52'),
(25, 'gazar', 'gazar', 1, 'active', 0, 'select', 'gazar_type', 'Ð‘Ð°Ñ€Ð¸Ð»Ð³Ñ‹Ð½ Ð³Ð°Ð·Ð°Ñ€', 'Ð“Ð°Ð·Ñ€Ñ‹Ð½ Ñ‚Ó©Ñ€Ó©Ð»', '2014-01-24 10:27:08'),
(26, 'gazar', 'gazar', 1, 'active', 0, 'select', 'gazar_type', 'Ð¢Ð°Ñ€Ð¸Ð°, ÐÐ¾Ð³Ð¾Ð¾Ð½Ñ‹ Ñ‚Ð°Ð»Ð±Ð°Ð¹', 'Ð¢Ð°Ñ€Ð¸Ð°, Ð½Ð¾Ð³Ð¾Ð¾Ð½Ñ‹ Ñ‚Ð°Ñ€Ð¸Ð°Ð»Ð°Ñ… Ð³Ð°Ð·Ð°Ñ€', '2014-01-24 10:28:03'),
(27, 'gazar', 'gazar', 1, 'active', 0, 'input', 'gazar_location', 'Ð£Ñ€Ñ‚Ñ€Ð°Ð³', 'Ð‘Ð°Ð¹Ñ€ÑˆÐ¸Ð» Ñ…', '2014-01-24 10:29:06'),
(28, 'gazar', 'gazar', 1, 'active', 0, 'input', 'gazar_location', 'Ó¨Ñ€Ð³Ó©Ñ€Ó©Ð³', 'Ð‘Ð°Ð¹Ñ€ÑˆÐ¸Ð» Ñƒ', '2014-01-24 10:29:28'),
(29, 'gazar', 'gazar', 1, 'active', 0, 'select', 'gazar_gerchilgee_type', 'Ó¨Ð¼Ñ‡Ð¸Ð»ÑÓ©Ð½', 'Ð­Ð·ÑÐ¼ÑˆÐ»Ð¸Ð¹Ð½ Ñ‚Ó©Ñ€Ó©Ð»', '2014-01-24 10:30:21'),
(30, 'gazar', 'gazar', 1, 'active', 0, 'select', 'gazar_gerchilgee_type', 'Ð“Ð°Ð·Ð°Ñ€ ÑÐ·ÑÐ¼ÑˆÐ¸Ñ… Ð³ÑÑ€Ñ‡Ð¸Ð»Ð³ÑÑÑ‚ÑÐ¹', 'Ð­Ð·ÑÐ¼ÑˆÐ»Ð¸Ð¹Ð½ Ñ‚Ó©Ñ€Ó©Ð»', '2014-01-24 10:30:49');

-- --------------------------------------------------------

--
-- Table structure for table `m_option_values`
--

CREATE TABLE IF NOT EXISTS `m_option_values` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL DEFAULT 'default',
  `option_id` int(11) NOT NULL DEFAULT '0',
  `option_value` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=227 ;

--
-- Dumping data for table `m_option_values`
--

INSERT INTO `m_option_values` (`id`, `code`, `option_id`, `option_value`, `is_active`) VALUES
(3, 'object_2', 1, '107.5', 1),
(4, 'object_2', 2, '49.86', 1),
(5, 'object_2', 0, '3', 1),
(6, 'object_2', 0, '8', 1),
(7, 'object_2', 10, '12', 1),
(8, 'object_2', 11, '3', 1),
(9, 'object_2', 12, '4', 1),
(10, 'object_2', 13, '2', 1),
(11, 'object_2', 14, '2014', 1),
(12, 'object_2', 0, '15', 1),
(13, 'object_2', 0, '19', 1),
(14, 'object_2', 20, '5', 1),
(15, 'object_2', 0, '21', 1),
(16, 'object_2', 24, 'Ð¥ÑƒÑ€Ð´ ÐšÐ¾Ñ€Ð¿', 1),
(17, 'object_3', 1, '107.52', 1),
(18, 'object_3', 2, '49.87', 1),
(19, 'object_3', 0, '3', 1),
(20, 'object_3', 0, '9', 1),
(21, 'object_3', 10, '11', 1),
(22, 'object_3', 11, '2', 1),
(23, 'object_3', 12, '2', 1),
(24, 'object_3', 13, '1', 1),
(25, 'object_3', 14, '2013', 1),
(26, 'object_3', 0, '17', 1),
(27, 'object_3', 0, '19', 1),
(28, 'object_3', 20, '2', 1),
(29, 'object_3', 0, '22', 1),
(30, 'object_3', 24, 'Ð¥ÑƒÑ€Ð´ ÐšÐ¾Ñ€Ð¿', 1),
(31, 'object_4', 1, '107.52', 1),
(32, 'object_4', 2, '49.87', 1),
(33, 'object_4', 0, '3', 1),
(34, 'object_4', 0, '9', 1),
(35, 'object_4', 10, '11', 1),
(36, 'object_4', 11, '2', 1),
(37, 'object_4', 12, '2', 1),
(38, 'object_4', 13, '1', 1),
(39, 'object_4', 14, '2013', 1),
(40, 'object_4', 0, '17', 1),
(41, 'object_4', 0, '19', 1),
(42, 'object_4', 20, '2', 1),
(43, 'object_4', 0, '22', 1),
(44, 'object_4', 24, 'Ð¥ÑƒÑ€Ð´ ÐšÐ¾Ñ€Ð¿', 1),
(45, 'object_5', 1, '107.52', 1),
(46, 'object_5', 2, '49.87', 1),
(47, 'object_5', 0, '3', 1),
(48, 'object_5', 0, '9', 1),
(49, 'object_5', 10, '11', 1),
(50, 'object_5', 11, '2', 1),
(51, 'object_5', 12, '2', 1),
(52, 'object_5', 13, '1', 1),
(53, 'object_5', 14, '2013', 1),
(54, 'object_5', 0, '17', 1),
(55, 'object_5', 0, '19', 1),
(56, 'object_5', 20, '2', 1),
(57, 'object_5', 0, '22', 1),
(58, 'object_5', 24, 'Ð¥ÑƒÑ€Ð´ ÐšÐ¾Ñ€Ð¿', 1),
(114, 'real_estate_9', 24, 'Ð¶Ð¸Ð³Ò¯Ò¯Ñ€', 1),
(113, 'real_estate_9', 0, '21', 1),
(112, 'real_estate_9', 20, '2', 1),
(111, 'real_estate_9', 0, '18', 1),
(110, 'real_estate_9', 0, '15', 1),
(109, 'real_estate_9', 14, '2012', 1),
(108, 'real_estate_9', 13, '1', 1),
(107, 'real_estate_9', 12, '4', 1),
(106, 'real_estate_9', 11, '2', 1),
(105, 'real_estate_9', 10, '3', 1),
(104, 'real_estate_9', 0, '8', 1),
(101, 'real_estate_9', 1, '47Â° 54.742', 1),
(102, 'real_estate_9', 2, '106Â° 57.040', 1),
(103, 'real_estate_9', 0, '3', 1),
(123, 'real_estate_10', 14, '2014', 1),
(122, 'real_estate_10', 13, '4', 1),
(121, 'real_estate_10', 12, '4', 1),
(120, 'real_estate_10', 11, '4', 1),
(119, 'real_estate_10', 10, '4', 1),
(118, 'real_estate_10', 0, '8', 1),
(117, 'real_estate_10', 0, '3', 1),
(116, 'real_estate_10', 2, '106.9328249', 1),
(115, 'real_estate_10', 1, '47.9192672', 1),
(87, 'real_estate_8', 1, '47.8612826', 1),
(88, 'real_estate_8', 2, '106.8785784', 1),
(89, 'real_estate_8', 0, '3', 1),
(90, 'real_estate_8', 0, '8', 1),
(91, 'real_estate_8', 10, '2', 1),
(92, 'real_estate_8', 11, '2', 1),
(93, 'real_estate_8', 12, '2', 1),
(94, 'real_estate_8', 13, '2', 1),
(95, 'real_estate_8', 14, '2008', 1),
(96, 'real_estate_8', 0, '17', 1),
(97, 'real_estate_8', 0, '18', 1),
(98, 'real_estate_8', 20, '5', 1),
(99, 'real_estate_8', 0, '21', 1),
(100, 'real_estate_8', 24, 'Ð¥ÑƒÑ€Ð´ Ð³Ñ€ÑƒÐ¿Ð¿', 1),
(124, 'real_estate_10', 0, '15', 1),
(125, 'real_estate_10', 0, '18', 1),
(126, 'real_estate_10', 20, '6', 1),
(127, 'real_estate_10', 0, '21', 1),
(128, 'real_estate_10', 24, 'Ð¼Ñ‚Ð¼Ñ‚', 1),
(129, 'real_estate_11', 1, '47Â° 54.749', 1),
(130, 'real_estate_11', 2, '106Â° 57.040', 1),
(131, 'real_estate_11', 0, '3', 1),
(132, 'real_estate_11', 0, '8', 1),
(133, 'real_estate_11', 10, '1', 1),
(134, 'real_estate_11', 11, '1', 1),
(135, 'real_estate_11', 12, '1', 1),
(136, 'real_estate_11', 13, '1', 1),
(137, 'real_estate_11', 14, '2014', 1),
(138, 'real_estate_11', 0, '15', 1),
(139, 'real_estate_11', 0, '18', 1),
(140, 'real_estate_11', 20, '1', 1),
(141, 'real_estate_11', 0, '21', 1),
(142, 'real_estate_11', 24, 'MBM', 1),
(143, 'real_estate_12', 1, '47Â° 54.458', 1),
(144, 'real_estate_12', 2, '106Â° 57.040', 1),
(145, 'real_estate_12', 0, '3', 1),
(146, 'real_estate_12', 0, '8', 1),
(147, 'real_estate_12', 10, '5', 1),
(148, 'real_estate_12', 11, '4', 1),
(149, 'real_estate_12', 12, '1', 1),
(150, 'real_estate_12', 13, '1', 1),
(151, 'real_estate_12', 14, '2013', 1),
(152, 'real_estate_12', 0, '15', 1),
(153, 'real_estate_12', 0, '18', 1),
(154, 'real_estate_12', 20, '1', 1),
(155, 'real_estate_12', 0, '21', 1),
(156, 'real_estate_12', 24, 'Ð¼Ð¾Ð½Ð³Ð¾Ð» ÑˆÑƒÑƒÐ´Ð°Ð½', 1),
(157, 'real_estate_13', 1, '47Â° 54.742', 1),
(158, 'real_estate_13', 2, '106.87857', 1),
(159, 'real_estate_13', 0, '3', 1),
(160, 'real_estate_13', 0, '8', 1),
(161, 'real_estate_13', 10, '9', 1),
(162, 'real_estate_13', 11, '5', 1),
(163, 'real_estate_13', 12, '2', 1),
(164, 'real_estate_13', 13, '1', 1),
(165, 'real_estate_13', 14, '2012', 1),
(166, 'real_estate_13', 0, '15', 1),
(167, 'real_estate_13', 0, '18', 1),
(168, 'real_estate_13', 20, '3', 1),
(169, 'real_estate_13', 0, '21', 1),
(170, 'real_estate_13', 24, 'Ð¥Ð¾Ñ Ð±Ð°Ñ€', 1),
(171, 'real_estate_14', 1, '47Â° 54.100', 1),
(172, 'real_estate_14', 2, '106Â° 56.555', 1),
(173, 'real_estate_14', 0, '3', 1),
(174, 'real_estate_14', 0, '8', 1),
(175, 'real_estate_14', 10, '16', 1),
(176, 'real_estate_14', 11, '9', 1),
(177, 'real_estate_14', 12, '5', 1),
(178, 'real_estate_14', 13, '2', 1),
(179, 'real_estate_14', 14, '2011', 1),
(180, 'real_estate_14', 0, '15', 1),
(181, 'real_estate_14', 0, '18', 1),
(182, 'real_estate_14', 20, '5', 1),
(183, 'real_estate_14', 0, '21', 1),
(184, 'real_estate_14', 24, 'Ó¨Ð½Ð´Ó©Ñ€ Ð±ÑƒÑÐ½Ñ‚', 1),
(185, 'real_estate_15', 1, ' 47Â° 55.852', 1),
(186, 'real_estate_15', 2, '106Â° 52.440''', 1),
(187, 'real_estate_15', 0, '3', 1),
(188, 'real_estate_15', 0, '8', 1),
(189, 'real_estate_15', 10, '16', 1),
(190, 'real_estate_15', 11, '5', 1),
(191, 'real_estate_15', 12, '2', 1),
(192, 'real_estate_15', 13, '2', 1),
(193, 'real_estate_15', 14, '2003', 1),
(194, 'real_estate_15', 0, '17', 1),
(195, 'real_estate_15', 0, '18', 1),
(196, 'real_estate_15', 20, '2', 1),
(197, 'real_estate_15', 0, '21', 1),
(198, 'real_estate_15', 24, 'Ð»Ð°Ð½Ñ Ð±Ð°Ñ€', 1),
(199, 'real_estate_16', 1, '47.8612154', 1),
(200, 'real_estate_16', 2, '106Â° 57.555', 1),
(201, 'real_estate_16', 0, '3', 1),
(202, 'real_estate_16', 0, '8', 1),
(203, 'real_estate_16', 10, '5', 1),
(204, 'real_estate_16', 11, '4', 1),
(205, 'real_estate_16', 12, '4', 1),
(206, 'real_estate_16', 13, '4', 1),
(207, 'real_estate_16', 14, '2014', 1),
(208, 'real_estate_16', 0, '16', 1),
(209, 'real_estate_16', 0, '18', 1),
(210, 'real_estate_16', 20, '2', 1),
(211, 'real_estate_16', 0, '21', 1),
(212, 'real_estate_16', 24, 'suzuki', 1),
(213, 'real_estate_17', 1, '46.8612154', 1),
(214, 'real_estate_17', 2, '106.8785784', 1),
(215, 'real_estate_17', 0, '3', 1),
(216, 'real_estate_17', 0, '8', 1),
(217, 'real_estate_17', 10, '7', 1),
(218, 'real_estate_17', 11, '7', 1),
(219, 'real_estate_17', 12, '7', 1),
(220, 'real_estate_17', 13, '4', 1),
(221, 'real_estate_17', 14, '2014', 1),
(222, 'real_estate_17', 0, '15', 1),
(223, 'real_estate_17', 0, '18', 1),
(224, 'real_estate_17', 20, '5', 1),
(225, 'real_estate_17', 0, '21', 1),
(226, 'real_estate_17', 24, 'Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_order`
--

CREATE TABLE IF NOT EXISTS `m_order` (
  `id` int(11) NOT NULL DEFAULT '0',
  `user_id` bigint(20) NOT NULL,
  `product_id` int(11) NOT NULL DEFAULT '0',
  `product_option_id` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `session_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_payment_gateways`
--

CREATE TABLE IF NOT EXISTS `m_payment_gateways` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secret_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secret_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_back` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `m_photos`
--

CREATE TABLE IF NOT EXISTS `m_photos` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=117 ;

--
-- Dumping data for table `m_photos`
--

INSERT INTO `m_photos` (`id`, `user_id`, `st`, `code`, `type`, `path`, `domain`, `height`, `width`, `mimetype`, `filesize`, `views`, `hits`, `downloads`, `date_created`, `date_expire`) VALUES
(22, 1, 'active', 'real_estate_9', 'slider', '//www.v3.demo.az.mn/media/photos/52e94b08cbca8.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 166217, 0, 0, 0, '2024-01-30 02:40:08', '2024-01-30 02:40:08'),
(23, 1, 'active', 'real_estate_9', 'slider', '//www.v3.demo.az.mn/media/photos/52e94b0c9076a.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 126196, 0, 0, 0, '2024-01-30 02:40:12', '2024-01-30 02:40:12'),
(33, 1, 'active', 'real_estate_10', 'slider', '//www.v3.demo.az.mn/media/photos/52e94ce7129d6.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 126196, 0, 0, 0, '2024-01-30 02:48:07', '2024-01-30 02:48:07'),
(24, 1, 'active', 'real_estate_9', 'slider', '//www.v3.demo.az.mn/media/photos/52e94b1318974.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 132104, 0, 0, 0, '2024-01-30 02:40:19', '2024-01-30 02:40:19'),
(42, 1, 'active', 'real_estate_11', 'slider', '//www.v3.demo.az.mn/media/photos/52e94dcc063e2.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 166217, 0, 0, 0, '2024-01-30 02:51:56', '2024-01-30 02:51:56'),
(25, 1, 'active', 'real_estate_9', 'slider', '//www.v3.demo.az.mn/media/photos/52e94b1402c8e.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 343250, 0, 0, 0, '2024-01-30 02:40:19', '2024-01-30 02:40:19'),
(26, 1, 'active', 'real_estate_9', 'slider', '//www.v3.demo.az.mn/media/photos/52e94b16c51b2.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 124500, 0, 0, 0, '2024-01-30 02:40:22', '2024-01-30 02:40:22'),
(27, 1, 'active', 'real_estate_9', 'slider', '//www.v3.demo.az.mn/media/photos/52e94b1b786dc.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 95077, 0, 0, 0, '2024-01-30 02:40:27', '2024-01-30 02:40:27'),
(28, 1, 'active', 'real_estate_9', 'slider', '//www.v3.demo.az.mn/media/photos/52e94b1e6a083.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 206122, 0, 0, 0, '2024-01-30 02:40:30', '2024-01-30 02:40:30'),
(29, 1, 'active', 'real_estate_9', 'slider', '//www.v3.demo.az.mn/media/photos/52e94b21e5185.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 164381, 0, 0, 0, '2024-01-30 02:40:33', '2024-01-30 02:40:33'),
(30, 1, 'active', 'real_estate_9', 'slider', '//www.v3.demo.az.mn/media/photos/52e94b25dadc7.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 243169, 0, 0, 0, '2024-01-30 02:40:37', '2024-01-30 02:40:37'),
(32, 1, 'active', 'real_estate_10', 'slider', '//www.v3.demo.az.mn/media/photos/52e94ce417394.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 166217, 0, 0, 0, '2024-01-30 02:48:04', '2024-01-30 02:48:04'),
(31, 1, 'active', 'real_estate_9', 'slider', '//www.v3.demo.az.mn/media/photos/52e94b2884823.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 190186, 0, 0, 0, '2024-01-30 02:40:40', '2024-01-30 02:40:40'),
(12, 1, 'active', 'real_estate_8', 'slider', '//www.v3.demo.az.mn/media/photos/52e948223854d.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 166217, 0, 0, 0, '2024-01-30 02:27:46', '2024-01-30 02:27:46'),
(13, 1, 'active', 'real_estate_8', 'slider', '//www.v3.demo.az.mn/media/photos/52e9482861be7.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 126196, 0, 0, 0, '2024-01-30 02:27:52', '2024-01-30 02:27:52'),
(14, 1, 'active', 'real_estate_8', 'slider', '//www.v3.demo.az.mn/media/photos/52e9482db9cb1.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 132104, 0, 0, 0, '2024-01-30 02:27:57', '2024-01-30 02:27:57'),
(15, 1, 'active', 'real_estate_8', 'slider', '//www.v3.demo.az.mn/media/photos/52e9483379983.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 95077, 0, 0, 0, '2024-01-30 02:28:03', '2024-01-30 02:28:03'),
(16, 1, 'active', 'real_estate_8', 'slider', '//www.v3.demo.az.mn/media/photos/52e948359dc69.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 124500, 0, 0, 0, '2024-01-30 02:28:05', '2024-01-30 02:28:05'),
(17, 1, 'active', 'real_estate_8', 'slider', '//www.v3.demo.az.mn/media/photos/52e9483773b09.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 343250, 0, 0, 0, '2024-01-30 02:28:07', '2024-01-30 02:28:07'),
(18, 1, 'active', 'real_estate_8', 'slider', '//www.v3.demo.az.mn/media/photos/52e9484413f4a.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 206122, 0, 0, 0, '2024-01-30 02:28:20', '2024-01-30 02:28:20'),
(19, 1, 'active', 'real_estate_8', 'slider', '//www.v3.demo.az.mn/media/photos/52e94847d197b.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 164381, 0, 0, 0, '2024-01-30 02:28:23', '2024-01-30 02:28:23'),
(20, 1, 'active', 'real_estate_8', 'slider', '//www.v3.demo.az.mn/media/photos/52e9484a6de96.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 243169, 0, 0, 0, '2024-01-30 02:28:26', '2024-01-30 02:28:26'),
(21, 1, 'active', 'real_estate_8', 'slider', '//www.v3.demo.az.mn/media/photos/52e9484e2fa0c.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 190186, 0, 0, 0, '2024-01-30 02:28:30', '2024-01-30 02:28:30'),
(34, 1, 'active', 'real_estate_10', 'slider', '//www.v3.demo.az.mn/media/photos/52e94cea8cbe4.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 132104, 0, 0, 0, '2024-01-30 02:48:10', '2024-01-30 02:48:10'),
(35, 1, 'active', 'real_estate_10', 'slider', '//www.v3.demo.az.mn/media/photos/52e94ced9fd89.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 343250, 0, 0, 0, '2024-01-30 02:48:13', '2024-01-30 02:48:13'),
(36, 1, 'active', 'real_estate_10', 'slider', '//www.v3.demo.az.mn/media/photos/52e94cedcdb56.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 95077, 0, 0, 0, '2024-01-30 02:48:13', '2024-01-30 02:48:13'),
(37, 1, 'active', 'real_estate_10', 'slider', '//www.v3.demo.az.mn/media/photos/52e94cf2ded1e.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 206122, 0, 0, 0, '2024-01-30 02:48:18', '2024-01-30 02:48:18'),
(38, 1, 'active', 'real_estate_10', 'slider', '//www.v3.demo.az.mn/media/photos/52e94cf4dbcaa.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 124500, 0, 0, 0, '2024-01-30 02:48:20', '2024-01-30 02:48:20'),
(39, 1, 'active', 'real_estate_10', 'slider', '//www.v3.demo.az.mn/media/photos/52e94cf985279.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 243169, 0, 0, 0, '2024-01-30 02:48:25', '2024-01-30 02:48:25'),
(40, 1, 'active', 'real_estate_10', 'slider', '//www.v3.demo.az.mn/media/photos/52e94cfe005a1.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 190186, 0, 0, 0, '2024-01-30 02:48:29', '2024-01-30 02:48:29'),
(41, 1, 'active', 'real_estate_10', 'slider', '//www.v3.demo.az.mn/media/photos/52e94cff5e176.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 164381, 0, 0, 0, '2024-01-30 02:48:31', '2024-01-30 02:48:31'),
(43, 1, 'active', 'real_estate_11', 'slider', '//www.v3.demo.az.mn/media/photos/52e94dcdd81a5.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 126196, 0, 0, 0, '2024-01-30 02:51:57', '2024-01-30 02:51:57'),
(44, 1, 'active', 'real_estate_11', 'slider', '//www.v3.demo.az.mn/media/photos/52e94dd006595.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 343250, 0, 0, 0, '2024-01-30 02:52:00', '2024-01-30 02:52:00'),
(45, 1, 'active', 'real_estate_11', 'slider', '//www.v3.demo.az.mn/media/photos/52e94dd151e29.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 132104, 0, 0, 0, '2024-01-30 02:52:01', '2024-01-30 02:52:01'),
(46, 1, 'active', 'real_estate_11', 'slider', '//www.v3.demo.az.mn/media/photos/52e94dd27a7e1.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 95077, 0, 0, 0, '2024-01-30 02:52:02', '2024-01-30 02:52:02'),
(47, 1, 'active', 'real_estate_11', 'slider', '//www.v3.demo.az.mn/media/photos/52e94dd552340.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 124500, 0, 0, 0, '2024-01-30 02:52:05', '2024-01-30 02:52:05'),
(48, 1, 'active', 'real_estate_11', 'slider', '//www.v3.demo.az.mn/media/photos/52e94dd60e18f.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 206122, 0, 0, 0, '2024-01-30 02:52:06', '2024-01-30 02:52:06'),
(49, 1, 'active', 'real_estate_11', 'slider', '//www.v3.demo.az.mn/media/photos/52e94ddaee22b.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 243169, 0, 0, 0, '2024-01-30 02:52:10', '2024-01-30 02:52:10'),
(50, 1, 'active', 'real_estate_11', 'slider', '//www.v3.demo.az.mn/media/photos/52e94dddc9238.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 164381, 0, 0, 0, '2024-01-30 02:52:13', '2024-01-30 02:52:13'),
(51, 1, 'active', 'real_estate_11', 'slider', '//www.v3.demo.az.mn/media/photos/52e94dde24650.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 190186, 0, 0, 0, '2024-01-30 02:52:14', '2024-01-30 02:52:14'),
(52, 1, 'active', 'real_estate_12', 'slider', '//www.v3.demo.az.mn/media/photos/52e94e44531b0.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 166217, 0, 0, 0, '2024-01-30 02:53:56', '2024-01-30 02:53:56'),
(53, 1, 'active', 'real_estate_12', 'slider', '//www.v3.demo.az.mn/media/photos/52e94e48054d1.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 126196, 0, 0, 0, '2024-01-30 02:54:00', '2024-01-30 02:54:00'),
(54, 1, 'active', 'real_estate_12', 'slider', '//www.v3.demo.az.mn/media/photos/52e94e499c59e.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 343250, 0, 0, 0, '2024-01-30 02:54:01', '2024-01-30 02:54:01'),
(55, 1, 'active', 'real_estate_12', 'slider', '//www.v3.demo.az.mn/media/photos/52e94e4ac6e2d.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 132104, 0, 0, 0, '2024-01-30 02:54:02', '2024-01-30 02:54:02'),
(56, 1, 'active', 'real_estate_12', 'slider', '//www.v3.demo.az.mn/media/photos/52e94e4d016e8.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 124500, 0, 0, 0, '2024-01-30 02:54:04', '2024-01-30 02:54:04'),
(57, 1, 'active', 'real_estate_12', 'slider', '//www.v3.demo.az.mn/media/photos/52e94e4d2c87a.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 95077, 0, 0, 0, '2024-01-30 02:54:05', '2024-01-30 02:54:05'),
(58, 1, 'active', 'real_estate_12', 'slider', '//www.v3.demo.az.mn/media/photos/52e94e53b55d1.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 206122, 0, 0, 0, '2024-01-30 02:54:11', '2024-01-30 02:54:11'),
(59, 1, 'active', 'real_estate_12', 'slider', '//www.v3.demo.az.mn/media/photos/52e94e554a7e7.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 243169, 0, 0, 0, '2024-01-30 02:54:13', '2024-01-30 02:54:13'),
(60, 1, 'active', 'real_estate_12', 'slider', '//www.v3.demo.az.mn/media/photos/52e94e58b2f24.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 164381, 0, 0, 0, '2024-01-30 02:54:16', '2024-01-30 02:54:16'),
(61, 1, 'active', 'real_estate_12', 'slider', '//www.v3.demo.az.mn/media/photos/52e94e5c2e72d.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 190186, 0, 0, 0, '2024-01-30 02:54:20', '2024-01-30 02:54:20'),
(62, 1, 'active', 'real_estate_13', 'slider', '//www.v3.demo.az.mn/media/photos/52e94ec747fbf.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 166217, 0, 0, 0, '2024-01-30 02:56:07', '2024-01-30 02:56:07'),
(63, 1, 'active', 'real_estate_13', 'slider', '//www.v3.demo.az.mn/media/photos/52e94eca62eeb.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 126196, 0, 0, 0, '2024-01-30 02:56:10', '2024-01-30 02:56:10'),
(64, 1, 'active', 'real_estate_13', 'slider', '//www.v3.demo.az.mn/media/photos/52e94ecd0f905.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 343250, 0, 0, 0, '2024-01-30 02:56:13', '2024-01-30 02:56:13'),
(65, 1, 'active', 'real_estate_13', 'slider', '//www.v3.demo.az.mn/media/photos/52e94ecdc4a09.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 132104, 0, 0, 0, '2024-01-30 02:56:13', '2024-01-30 02:56:13'),
(66, 1, 'active', 'real_estate_13', 'slider', '//www.v3.demo.az.mn/media/photos/52e94ecfadc2c.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 124500, 0, 0, 0, '2024-01-30 02:56:15', '2024-01-30 02:56:15'),
(67, 1, 'active', 'real_estate_13', 'slider', '//www.v3.demo.az.mn/media/photos/52e94ed318f55.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 95077, 0, 0, 0, '2024-01-30 02:56:19', '2024-01-30 02:56:19'),
(68, 1, 'active', 'real_estate_13', 'slider', '//www.v3.demo.az.mn/media/photos/52e94ed82563a.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 243169, 0, 0, 0, '2024-01-30 02:56:24', '2024-01-30 02:56:24'),
(69, 1, 'active', 'real_estate_13', 'slider', '//www.v3.demo.az.mn/media/photos/52e94eda9f777.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 164381, 0, 0, 0, '2024-01-30 02:56:26', '2024-01-30 02:56:26'),
(70, 1, 'active', 'real_estate_13', 'slider', '//www.v3.demo.az.mn/media/photos/52e94edd42150.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 190186, 0, 0, 0, '2024-01-30 02:56:29', '2024-01-30 02:56:29'),
(71, 1, 'active', 'real_estate_13', 'slider', '//www.v3.demo.az.mn/media/photos/52e94ee0914e0.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 206122, 0, 0, 0, '2024-01-30 02:56:32', '2024-01-30 02:56:32'),
(72, 1, 'active', 'real_estate_14', 'slider', '//www.v3.demo.az.mn/media/photos/52e94f6f91da7.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 166217, 0, 0, 0, '2024-01-30 02:58:55', '2024-01-30 02:58:55'),
(73, 1, 'active', 'real_estate_14', 'slider', '//www.v3.demo.az.mn/media/photos/52e94f7545395.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 126196, 0, 0, 0, '2024-01-30 02:59:01', '2024-01-30 02:59:01'),
(74, 1, 'active', 'real_estate_14', 'slider', '//www.v3.demo.az.mn/media/photos/52e94f78d1879.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 132104, 0, 0, 0, '2024-01-30 02:59:04', '2024-01-30 02:59:04'),
(75, 1, 'active', 'real_estate_14', 'slider', '//www.v3.demo.az.mn/media/photos/52e94f7ad6884.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 95077, 0, 0, 0, '2024-01-30 02:59:06', '2024-01-30 02:59:06'),
(76, 1, 'active', 'real_estate_14', 'slider', '//www.v3.demo.az.mn/media/photos/52e94f7f13a3f.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 124500, 0, 0, 0, '2024-01-30 02:59:11', '2024-01-30 02:59:11'),
(77, 1, 'active', 'real_estate_14', 'slider', '//www.v3.demo.az.mn/media/photos/52e94f80492e5.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 343250, 0, 0, 0, '2024-01-30 02:59:12', '2024-01-30 02:59:12'),
(78, 1, 'active', 'real_estate_14', 'slider', '//www.v3.demo.az.mn/media/photos/52e94f8743879.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 206122, 0, 0, 0, '2024-01-30 02:59:19', '2024-01-30 02:59:19'),
(79, 1, 'active', 'real_estate_14', 'slider', '//www.v3.demo.az.mn/media/photos/52e94f87932ed.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 243169, 0, 0, 0, '2024-01-30 02:59:19', '2024-01-30 02:59:19'),
(80, 1, 'active', 'real_estate_14', 'slider', '//www.v3.demo.az.mn/media/photos/52e94f8c414e4.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 164381, 0, 0, 0, '2024-01-30 02:59:24', '2024-01-30 02:59:24'),
(81, 1, 'active', 'real_estate_14', 'slider', '//www.v3.demo.az.mn/media/photos/52e94f8ce7b2c.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 190186, 0, 0, 0, '2024-01-30 02:59:24', '2024-01-30 02:59:24'),
(82, 1, 'active', 'real_estate_15', 'slider', '//www.v3.demo.az.mn/media/photos/52e95026b4099.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 166217, 0, 0, 0, '2024-01-30 03:01:58', '2024-01-30 03:01:58'),
(83, 1, 'active', 'real_estate_15', 'slider', '//www.v3.demo.az.mn/media/photos/52e9502b2021d.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 126196, 0, 0, 0, '2024-01-30 03:02:03', '2024-01-30 03:02:03'),
(84, 1, 'active', 'real_estate_15', 'slider', '//www.v3.demo.az.mn/media/photos/52e9502de78ae.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 132104, 0, 0, 0, '2024-01-30 03:02:05', '2024-01-30 03:02:05'),
(85, 1, 'active', 'real_estate_15', 'slider', '//www.v3.demo.az.mn/media/photos/52e9503015e7d.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 95077, 0, 0, 0, '2024-01-30 03:02:08', '2024-01-30 03:02:08'),
(86, 1, 'active', 'real_estate_15', 'slider', '//www.v3.demo.az.mn/media/photos/52e9503310aeb.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 343250, 0, 0, 0, '2024-01-30 03:02:11', '2024-01-30 03:02:11'),
(87, 1, 'active', 'real_estate_15', 'slider', '//www.v3.demo.az.mn/media/photos/52e9503410fea.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 124500, 0, 0, 0, '2024-01-30 03:02:12', '2024-01-30 03:02:12'),
(88, 1, 'active', 'real_estate_15', 'slider', '//www.v3.demo.az.mn/media/photos/52e950399a3cb.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 206122, 0, 0, 0, '2024-01-30 03:02:17', '2024-01-30 03:02:17'),
(89, 1, 'active', 'real_estate_15', 'slider', '//www.v3.demo.az.mn/media/photos/52e9503c69eb4.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 164381, 0, 0, 0, '2024-01-30 03:02:20', '2024-01-30 03:02:20'),
(90, 1, 'active', 'real_estate_15', 'slider', '//www.v3.demo.az.mn/media/photos/52e9503cc930d.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 243169, 0, 0, 0, '2024-01-30 03:02:20', '2024-01-30 03:02:20'),
(91, 1, 'active', 'real_estate_15', 'slider', '//www.v3.demo.az.mn/media/photos/52e9503f5455b.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 190186, 0, 0, 0, '2024-01-30 03:02:23', '2024-01-30 03:02:23'),
(92, 1, 'active', 'real_estate_16', 'slider', '//www.v3.demo.az.mn/media/photos/52e950e30b04e.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 166217, 0, 0, 0, '2024-01-30 03:05:07', '2024-01-30 03:05:07'),
(93, 1, 'active', 'real_estate_16', 'slider', '//www.v3.demo.az.mn/media/photos/52e950e5a7bbf.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 126196, 0, 0, 0, '2024-01-30 03:05:09', '2024-01-30 03:05:09'),
(94, 1, 'active', 'real_estate_16', 'slider', '//www.v3.demo.az.mn/media/photos/52e950ea72b4b.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 343250, 0, 0, 0, '2024-01-30 03:05:14', '2024-01-30 03:05:14'),
(95, 1, 'active', 'real_estate_16', 'slider', '//www.v3.demo.az.mn/media/photos/52e950eb14321.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 132104, 0, 0, 0, '2024-01-30 03:05:14', '2024-01-30 03:05:14'),
(96, 1, 'active', 'real_estate_16', 'slider', '//www.v3.demo.az.mn/media/photos/52e950ec0ca9e.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 95077, 0, 0, 0, '2024-01-30 03:05:16', '2024-01-30 03:05:16'),
(97, 1, 'active', 'real_estate_16', 'slider', '//www.v3.demo.az.mn/media/photos/52e950eff1a1d.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 124500, 0, 0, 0, '2024-01-30 03:05:19', '2024-01-30 03:05:19'),
(98, 1, 'active', 'real_estate_16', 'slider', '//www.v3.demo.az.mn/media/photos/52e950f5219fc.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 243169, 0, 0, 0, '2024-01-30 03:05:25', '2024-01-30 03:05:25'),
(99, 1, 'active', 'real_estate_16', 'slider', '//www.v3.demo.az.mn/media/photos/52e950f71532a.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 206122, 0, 0, 0, '2024-01-30 03:05:27', '2024-01-30 03:05:27'),
(100, 1, 'active', 'real_estate_16', 'slider', '//www.v3.demo.az.mn/media/photos/52e950f9865cd.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 164381, 0, 0, 0, '2024-01-30 03:05:29', '2024-01-30 03:05:29'),
(101, 1, 'active', 'real_estate_16', 'slider', '//www.v3.demo.az.mn/media/photos/52e950fa98cd1.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 190186, 0, 0, 0, '2024-01-30 03:05:30', '2024-01-30 03:05:30'),
(102, 1, 'active', 'real_estate_17', 'slider', '//www.v3.demo.az.mn/media/photos/52e95178f332e.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 166217, 0, 0, 0, '2024-01-30 03:07:36', '2024-01-30 03:07:36'),
(103, 1, 'active', 'real_estate_17', 'slider', '//www.v3.demo.az.mn/media/photos/52e9517cbd95e.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 126196, 0, 0, 0, '2024-01-30 03:07:40', '2024-01-30 03:07:40'),
(104, 1, 'active', 'real_estate_17', 'slider', '//www.v3.demo.az.mn/media/photos/52e9517e60d65.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 343250, 0, 0, 0, '2024-01-30 03:07:42', '2024-01-30 03:07:42'),
(105, 1, 'active', 'real_estate_17', 'slider', '//www.v3.demo.az.mn/media/photos/52e9517fc6f0e.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 132104, 0, 0, 0, '2024-01-30 03:07:43', '2024-01-30 03:07:43'),
(106, 1, 'active', 'real_estate_17', 'slider', '//www.v3.demo.az.mn/media/photos/52e95181ea4ab.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 124500, 0, 0, 0, '2024-01-30 03:07:45', '2024-01-30 03:07:45'),
(107, 1, 'active', 'real_estate_17', 'slider', '//www.v3.demo.az.mn/media/photos/52e95182f3d13.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 95077, 0, 0, 0, '2024-01-30 03:07:46', '2024-01-30 03:07:46'),
(108, 1, 'active', 'real_estate_17', 'slider', '//www.v3.demo.az.mn/media/photos/52e95187e64af.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 206122, 0, 0, 0, '2024-01-30 03:07:51', '2024-01-30 03:07:51'),
(109, 1, 'active', 'real_estate_17', 'slider', '//www.v3.demo.az.mn/media/photos/52e9518a763fa.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 243169, 0, 0, 0, '2024-01-30 03:07:54', '2024-01-30 03:07:54'),
(110, 1, 'active', 'real_estate_17', 'slider', '//www.v3.demo.az.mn/media/photos/52e9518dd895c.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 164381, 0, 0, 0, '2024-01-30 03:07:57', '2024-01-30 03:07:57'),
(111, 1, 'active', 'real_estate_17', 'slider', '//www.v3.demo.az.mn/media/photos/52e9518f24040.jpg', 'www.v3.demo.az.mn', 487, 649, 'image/jpeg', 190186, 0, 0, 0, '2024-01-30 03:07:59', '2024-01-30 03:07:59'),
(112, 1, 'active', 'delete_real_estate_tobr93s7indjk891lu4ancddn6', 'slider', '//www.all-starshop.me\\media\\photos\\5380913d9bda6.jpg', 'www.all-starshop.me', 471, 570, 'image/jpeg', 72658, 0, 0, 0, '2024-05-24 20:31:57', '2024-05-24 20:31:57'),
(113, 1, 'active', 'delete_real_estate_tobr93s7indjk891lu4ancddn6', 'slider', '//www.all-starshop.me\\media\\photos\\5380913fa9b45.jpg', 'www.all-starshop.me', 487, 649, 'image/jpeg', 385160, 0, 0, 0, '2024-05-24 20:31:59', '2024-05-24 20:31:59'),
(114, 1, 'active', 'delete_real_estate_tobr93s7indjk891lu4ancddn6', 'slider', '//www.all-starshop.me\\media\\photos\\53809141183aa.jpg', 'www.all-starshop.me', 487, 649, 'image/jpeg', 86165, 0, 0, 0, '2024-05-24 20:32:01', '2024-05-24 20:32:01'),
(115, 1, 'active', 'delete_real_estate_tobr93s7indjk891lu4ancddn6', 'slider', '//www.all-starshop.me\\media\\photos\\5380914289824.jpg', 'www.all-starshop.me', 487, 649, 'image/jpeg', 121092, 0, 0, 0, '2024-05-24 20:32:02', '2024-05-24 20:32:02'),
(116, 1, 'active', 'delete_real_estate_tobr93s7indjk891lu4ancddn6', 'slider', '//www.all-starshop.me\\media\\photos\\53809143ea708.jpg', 'www.all-starshop.me', 487, 649, 'image/jpeg', 141456, 0, 0, 0, '2024-05-24 20:32:03', '2024-05-24 20:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `m_products`
--

CREATE TABLE IF NOT EXISTS `m_products` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `m_products`
--

INSERT INTO `m_products` (`id`, `user_id`, `lang`, `st`, `is_featured`, `is_highlighted`, `is_sticky`, `use_comment`, `price`, `price_sale`, `currency_id`, `is_digital`, `filepath`, `downloaded`, `quantity`, `measure_value`, `measure_id`, `name`, `descr`, `content`, `views`, `hits`, `created_at`, `expire_at`, `session_time`) VALUES
(1, 1, 'MN', 'active', 1, 1, 0, 'no', 10000.00, 2000.00, 1, 0, '1', 0, 1, '1', 1, 'neon', '1 ', '1 ', 1, 11, '2014-04-15 15:35:34', '2014-04-17 12:31:29', '0000-00-00 00:00:00'),
(2, 1, 'MN', 'active', 0, 0, 0, 'no', 2450000.00, 210000.00, 1, 0, 'aaaaaaaaaaaa', 0, 100, 'qqqqqqqqqqqqqqqqqq', 1, '2k4', ' aaaaaaaaaaaaa   ', '<p><span style="color: #808000;">aaaaaaaaaaaaaaaaaaaaaaa</span></p>\r\n<p>bbbb<span style="color: #333399;">bbbbbb cccccccccccc sdddddddddddd gggggg</span>gggg йцыжбэөөжауцуфцэжэ цужохлрхоаөббйабхароаө баохааужэнглшшэжуфужэжнглшгнэуцф фцэнжэж<span style="color: #993366;">шнгэжуцуфэжэнэж</span> фцуэнжгэхжауөцб ццжуэжннэжэуцуфжуэолгоэж жэжншгшэжэужцэжншгш ццужэнгэжэуцужэнг<span style="color: #ff6600;">ш йыбөараөаөы ыйыббөбөб ыбөбөыөцйжцф ыйөуөуыөу</span>ыөуыөыуцуцуц</p>\r\n<p>sfffffffffff d<span style="color: #008000;">fffffffffffff, dfghdgsvafseuf</span>bwlukgfweiufgweil&nbsp;</p>\r\n<p>sdfdghd<strong>rghsgsgsgesgsegsegesgesgs</strong>egseg</p>\r\n<h1>sdgrtyjtrgefwetykutrewertjk</h1>\r\n<p>dg<em>aertruyreweqrtyui</em></p>\r\n<p>dgg<span style="color: #333399;">htfhtfhsh</span>serhgsr</p>', 0, 0, '2014-05-11 13:55:28', '2014-05-11 13:44:00', '0000-00-00 00:00:00'),
(3, 1, 'MN', 'active', 1, 1, 0, 'no', 180000.00, 160000.00, 1, 0, 'aaaaaaaaaaaa', 0, 0, 'qqqqqqqqqqqqqqqqqq', 1, 'Nike', ' aaaaaaaaaaaaa ', ' aaaaaaaaaaaaaaaaaaaaaaa ', 0, 0, '2014-05-11 13:56:47', '2014-05-11 13:44:00', '0000-00-00 00:00:00'),
(4, 1, 'MN', 'active', 0, 1, 0, 'no', 300000.00, 280000.00, 1, 0, 'aaaaaaaaaa', 0, 10, '1', 1, 'Adizero rose 5', ' aaaaaaaaaaaaa ', ' aaaaaaaaaaaaaaaaaaaaaaa ', 0, 0, '2014-05-11 13:57:53', '2014-05-11 13:57:00', '0000-00-00 00:00:00'),
(5, 1, 'MN', 'inactive', 1, 1, 0, 'yes', 100000.00, 1000000000.00, 1, 0, '56757', 0, 10, '10', 1, 'Nike', '      ', '      ', 0, 0, '2014-05-13 00:43:48', '2014-05-16 19:05:00', '0000-00-00 00:00:00'),
(6, 1, 'MN', 'active', 0, 1, 0, 'yes', 160000.00, 150000.00, 1, 0, '1312', 0, 10, '2', 1, 'soccer shoes', ' 123123  ', ' 12321  ', 0, 0, '2014-05-16 17:40:41', '2014-05-16 17:40:00', '0000-00-00 00:00:00'),
(7, 1, 'MN', 'active', 0, 1, 0, 'yes', 340000.00, 320000.00, 1, 0, '1312', 0, 12312, '123', 1, 'pamgar nike', ' 1231  ', ' 12312  ', 0, 0, '2014-05-16 17:45:23', '2014-05-16 17:44:00', '0000-00-00 00:00:00'),
(8, 1, 'MN', 'inactive', 0, 1, 0, 'yes', 13123.00, 1000.00, 1, 0, '1321', 0, 32131, '1231', 1, 'ewrfwer', ' 1231 ', ' 1231 ', 0, 0, '2014-05-16 19:00:36', '2014-05-16 17:46:00', '0000-00-00 00:00:00'),
(9, 1, 'MN', 'inactive', 0, 1, 0, 'yes', 123.00, 123.00, 1, 0, '1231', 0, 123, '123', 1, '123', ' 123 ', ' 123 ', 0, 0, '2014-05-16 19:02:04', '2014-05-16 19:01:00', '0000-00-00 00:00:00'),
(10, 1, 'MN', 'active', 0, 1, 0, 'yes', 1500000.00, 1100000.00, 1, 0, '56757', 0, 657567, '5757', 1, 'солонгон nike', ' 5675  ', ' 567567  ', 0, 0, '2014-05-16 19:05:53', '2014-05-16 19:05:00', '0000-00-00 00:00:00'),
(12, 1, 'MN', 'inactive', 0, 0, 0, 'no', 0.00, 0.00, 2, 0, '', 0, 0, '', 1, '', ' ', '', 0, 0, '2014-05-21 00:14:44', '2014-04-28 05:05:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `m_product_categories`
--

CREATE TABLE IF NOT EXISTS `m_product_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=52 ;

--
-- Dumping data for table `m_product_categories`
--

INSERT INTO `m_product_categories` (`id`, `product_id`, `category_id`) VALUES
(29, 8, 47),
(32, 1, 47),
(34, 3, 53),
(35, 6, 53),
(36, 7, 53),
(37, 10, 53),
(38, 4, 54),
(39, 4, 58),
(47, 12, 55),
(48, 12, 30),
(51, 2, 53);

-- --------------------------------------------------------

--
-- Table structure for table `m_product_options`
--

CREATE TABLE IF NOT EXISTS `m_product_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `group` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option_value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(11,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `m_product_photo`
--

CREATE TABLE IF NOT EXISTS `m_product_photo` (
  `product_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `m_product_photo`
--

INSERT INTO `m_product_photo` (`product_id`, `photo`, `id`) VALUES
(5, '//www.all-starshop.me\\media\\photos\\53786f28f2481.jpg', 7),
(9, '//www.all-starshop.me\\media\\photos\\537893c907606.jpg', 8),
(9, '//www.all-starshop.me\\media\\photos\\537893c919950.jpg', 9),
(9, '//www.all-starshop.me\\media\\photos\\537893c922f98.jpg', 10),
(10, '//www.all-starshop.me\\media\\photos\\5378ca587abc1.jpg', 11),
(8, '//www.all-starshop.me\\media\\photos\\5378ca773b83f.jpg', 12),
(7, '//www.all-starshop.me\\media\\photos\\5378ca8a9949d.jpg', 13),
(6, '//www.all-starshop.me\\media\\photos\\5378caa1991ed.jpg', 14),
(1, '//www.all-starshop.me\\media\\photos\\5378cf69a2109.jpg', 15),
(1, '//www.all-starshop.me\\media\\photos\\5378cf69b4f12.jpg', 16),
(2, '//www.all-starshop.me\\media\\photos\\5378cfa64ff23.jpg', 17),
(3, '//www.all-starshop.me\\media\\photos\\5378cfeddc752.jpg', 18),
(4, '//www.all-starshop.me\\media\\photos\\537afdf3be27e.jpg', 19),
(4, '//www.all-starshop.me\\media\\photos\\537afdf733dd0.jpg', 20),
(12, '//www.all-starshop.me\\media\\photos\\537b7fd8cc823.jpg', 22),
(12, '//www.all-starshop.me\\media\\photos\\5380926b5e7f7.jpg', 23),
(12, '//www.all-starshop.me\\media\\photos\\5380926bbc1d5.jpg', 24),
(12, '//www.all-starshop.me\\media\\photos\\5380926be8b2b.jpg', 25);

-- --------------------------------------------------------

--
-- Table structure for table `m_roles`
--

CREATE TABLE IF NOT EXISTS `m_roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `m_roles`
--

INSERT INTO `m_roles` (`id`, `name`, `comment`, `date_created`) VALUES
(1, 'admin', 'site admin', '2014-02-03 01:08:44'),
(2, 'manager', 'site manager', '2014-02-03 01:08:58'),
(3, 'agent', 'real estate agent', '2014-02-03 01:09:13'),
(4, 'operator', 'site operator', '2014-02-03 01:09:26');

-- --------------------------------------------------------

--
-- Table structure for table `m_search`
--

CREATE TABLE IF NOT EXISTS `m_search` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descr` text COLLATE utf8_unicode_ci,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `title_descr_ft` (`descr`,`title`,`tags`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `m_settings`
--

CREATE TABLE IF NOT EXISTS `m_settings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text NOT NULL,
  `setting_type` varchar(255) NOT NULL DEFAULT 'default',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=2 ;

--
-- Dumping data for table `m_settings`
--

INSERT INTO `m_settings` (`id`, `setting_name`, `setting_value`, `setting_type`) VALUES
(1, 'PAGE_TITLE', 'miniCMS v3 development', 'main');

-- --------------------------------------------------------

--
-- Table structure for table `m_tags`
--

CREATE TABLE IF NOT EXISTS `m_tags` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `m_tag_values`
--

CREATE TABLE IF NOT EXISTS `m_tag_values` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL DEFAULT 'default',
  `tag_id` int(11) unsigned NOT NULL DEFAULT '0',
  `hits` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `m_users`
--

CREATE TABLE IF NOT EXISTS `m_users` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=2 ;

--
-- Dumping data for table `m_users`
--

INSERT INTO `m_users` (`id`, `parent_id`, `depth`, `lft`, `rgt`, `code`, `st`, `role`, `email`, `username`, `password`, `password_tmp`, `firstname`, `lastname`, `phone`, `gender`, `birthday`, `city_birth`, `city_living`, `address_living`, `address_billing`, `address_shipping`, `website`, `profile_hits`, `token`, `secret_key`, `default_timezone`, `default_lang`, `default_layout`, `date_created`, `date_password_reset`) VALUES
(1, 0, 0, 0, 0, 'd', 'active', 'guest', 'admin@az.mn', 'admin', 'c0e024d9200b5705bc4804722636378a', '', 'dd', 'dfs', '976-xxxxxxxx', 'unknown', '2014-02-03', 'unknown', 'Ulaanbaatar', 'Mongolia', 'unknown', 'unknown', 'none', 0, 'asdf', 'adsfasdf', 'Asia/Ulaanbaatar', 'mn', 'default', '2014-02-03 04:58:12', '2014-02-03 04:58:45');

-- --------------------------------------------------------

--
-- Table structure for table `m_user_roles`
--

CREATE TABLE IF NOT EXISTS `m_user_roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `role_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `m_user_roles`
--

INSERT INTO `m_user_roles` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
