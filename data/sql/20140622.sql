/*
 Navicat Premium Data Transfer

 Source Server         : v3
 Source Server Type    : MySQL
 Source Server Version : 50536
 Source Host           : ns5.mng.cc
 Source Database       : v3_db

 Target Server Type    : MySQL
 Target Server Version : 50536
 File Encoding         : utf-8

 Date: 06/22/2014 22:46:26 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `m_authorization_roles`
-- ----------------------------
DROP TABLE IF EXISTS `m_authorization_roles`;
CREATE TABLE `m_authorization_roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `authorization_id` int(11) unsigned NOT NULL DEFAULT '0',
  `role_id` int(11) unsigned NOT NULL DEFAULT '0',
  `added_by` int(11) unsigned NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `m_authorizations`
-- ----------------------------
DROP TABLE IF EXISTS `m_authorizations`;
CREATE TABLE `m_authorizations` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `added_by` int(11) unsigned NOT NULL DEFAULT '0',
  `module_auth` varchar(50) NOT NULL DEFAULT 'default',
  `action_auth` varchar(50) NOT NULL DEFAULT 'index',
  `method_auth` varchar(20) NOT NULL DEFAULT 'GET',
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `slug` varchar(255) NOT NULL,
  `is_external` tinyint(1) NOT NULL DEFAULT '0',
  `external_url` varchar(255) DEFAULT NULL,
  `module` varchar(255) DEFAULT 'content',
  `url_slug` varchar(50) NOT NULL DEFAULT 'index',
  `target` varchar(255) DEFAULT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'mn',
  `hits` int(11) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL,
  `date_last_updated` datetime DEFAULT NULL,
  `last_updated_user_id` int(11) NOT NULL DEFAULT '0',
  `is_adult` tinyint(1) NOT NULL DEFAULT '0',
  `icon` varchar(20) DEFAULT '',
  `added_by` int(11) NOT NULL,
  `per_page` int(11) DEFAULT '1',
  `view_type` varchar(50) NOT NULL DEFAULT 'list',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `m_categories`
-- ----------------------------
BEGIN;
INSERT INTO `m_categories` VALUES ('70', '68', null, '0', '0', '0', 'active', '0', '0.00', 'Байгалийн салбар', 'natural', '0', '', '1', 'index', '', 'mn', '0', '2014-06-22 10:01:30', null, '0', '0', '', '1', '1', 'list'), ('68', '0', null, '0', '0', '0', 'active', '0', '6.00', 'Бүтээл', 'product', '0', '', '1', 'index', '', 'mn', '0', '2014-06-22 12:21:29', null, '0', '0', '', '1', '1', 'list'), ('69', '68', null, '0', '0', '0', 'active', '0', '0.00', 'Анагаахын салбар', 'medical', '0', '', '1', 'index', '', 'mn', '0', '2014-06-21 18:09:48', null, '0', '0', '', '4', '1', 'list'), ('67', '63', null, '0', '0', '0', 'active', '0', '0.00', 'Хичээл', 'lesson', '1', 'http://khiceel.pms.mn/', '1', 'index', '_blank', 'mn', '0', '2014-06-22 12:39:56', null, '0', '0', '', '1', '1', 'list'), ('65', '63', null, '0', '0', '0', 'active', '0', '0.00', 'Хүүхэд', 'child', '1', 'http://khuukhed.pms.mn/', '1', 'index', '_blank', 'mn', '0', '2014-06-22 12:40:34', null, '0', '0', '', '1', '1', 'list'), ('66', '63', null, '0', '0', '0', 'active', '0', '0.00', 'Төрийн үйлчилгээ', 'govservice', '1', 'http://www.tur.pms.mn/', '1', 'index', '_blank', 'mn', '0', '2014-06-22 12:39:27', null, '0', '0', '', '1', '1', 'list'), ('64', '63', null, '0', '0', '0', 'active', '0', '0.00', 'Уламжлал', 'derivative', '1', 'http://www.ulamjlal.pms.mn/', '1', 'index', '_blank', 'mn', '0', '2014-06-22 12:35:50', null, '0', '0', '', '1', '1', 'list'), ('63', '0', null, '0', '0', '0', 'active', '0', '2.00', 'Мэдлэг', 'knowladge', '0', '', '1', 'index', '', 'mn', '0', '2014-06-22 12:18:38', null, '0', '0', '', '1', '1', 'list'), ('62', '0', null, '0', '0', '0', 'active', '0', '1.00', 'Бидний тухай', 'about', '0', '', '1', 'index', '', 'mn', '0', '2014-06-22 14:23:23', null, '0', '0', '', '3', '1', 'blank'), ('61', '0', null, '0', '0', '0', 'active', '0', '0.00', 'Нүүр', 'home', '0', '', '1', 'index', '', 'mn', '0', '2014-06-22 12:28:58', null, '0', '0', '', '1', '2', 'grid'), ('71', '68', null, '0', '0', '0', 'active', '0', '0.00', 'Нийгмийн салбар', 'community', '0', '', '1', 'index', '', 'mn', '0', '2014-06-21 18:14:11', null, '0', '0', '', '4', '1', 'list'), ('72', '68', null, '0', '0', '0', 'active', '0', '0.00', 'Текникийн салбар', 'technology', '0', '', '1', 'index', '', 'mn', '0', '2014-06-21 18:15:20', null, '0', '0', '', '4', '1', 'list'), ('73', '68', null, '0', '0', '0', 'active', '0', '0.00', 'ХАА-н салбар', 'land', '0', '', '1', 'index', '', 'mn', '0', '2014-06-21 18:17:12', null, '0', '0', '', '4', '1', 'list'), ('74', '0', null, '0', '0', '0', 'active', '0', '0.00', 'Хүмүүс', 'people', '0', '', '1', 'index', '', 'mn', '0', '2014-06-21 18:18:01', null, '0', '0', '', '4', '1', 'list'), ('75', '74', null, '0', '0', '0', 'active', '0', '0.00', 'Эрдэмтэд', 'scientist ', '0', '', '1', 'index', '', 'mn', '0', '2014-06-21 18:19:06', null, '0', '0', '', '4', '1', 'list'), ('76', '74', null, '0', '0', '0', 'active', '0', '0.00', 'Улсын баатарууд', 'hero', '0', '', '1', 'index', '', 'mn', '0', '2014-06-21 18:19:52', null, '0', '0', '', '4', '1', 'list'), ('77', '0', null, '0', '0', '0', 'active', '0', '4.00', 'Хамтрагчид', 'partner', '0', '', '1', 'index', '', 'mn', '0', '2014-06-22 12:19:31', null, '0', '0', '', '1', '1', 'list'), ('78', '0', null, '0', '0', '0', 'active', '0', '5.00', 'Мэдээлэл', 'info', '0', '', '1', 'index', '', 'mn', '0', '2014-06-22 12:19:52', null, '0', '0', '', '1', '1', 'list'), ('79', '0', null, '0', '0', '0', 'active', '0', '8.00', 'Холбоо барих', 'contact', '0', '', '1', 'index', '', 'mn', '0', '2014-06-22 14:20:26', null, '0', '0', '', '3', '1', 'blank');
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Table structure for `m_content_categories`
-- ----------------------------
DROP TABLE IF EXISTS `m_content_categories`;
CREATE TABLE `m_content_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content_id` int(11) unsigned DEFAULT '0',
  `category_id` int(11) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- ----------------------------
--  Records of `m_content_categories`
-- ----------------------------
BEGIN;
INSERT INTO `m_content_categories` VALUES ('50', '21', '53'), ('62', '18', '61'), ('52', '17', '61'), ('61', '18', '70'), ('59', '16', '61'), ('58', '16', '70'), ('49', '20', '59'), ('64', '23', '62'), ('60', '19', '61'), ('47', '22', '60'), ('48', '22', '47');
COMMIT;

-- ----------------------------
--  Table structure for `m_content_photo`
-- ----------------------------
DROP TABLE IF EXISTS `m_content_photo`;
CREATE TABLE `m_content_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `m_content_photo`
-- ----------------------------
BEGIN;
INSERT INTO `m_content_photo` VALUES ('12', '22', '225'), ('13', '21', '288'), ('14', '16', '296'), ('15', '19', '297'), ('16', '18', '298'), ('18', '23', '301');
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
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `m_contents`
-- ----------------------------
BEGIN;
INSERT INTO `m_contents` VALUES ('16', '0', '0', '0', '0', '1', '', 'active', 'article', '//www.minicms.me/media/photos/52d7586da82e1.jpg', 'Сайн байна уу', 'Эхний мэдээ, сайн байна уу?', '<p><img src=\"http://www.pms.me/media/images/thumbnail/53a66d58ad5771403415896.jpg\" style=\"line-height: 1.6em;\" /></p>\r\n\r\n<p>а быөлоар ыбөа рыбө йыбө ыбө ыбө ыйбө ужэ мёи ихнр э нахт өтөат&nbsp;ужбөчрөл.</p>\r\n', '0', '2014-06-22 07:46:01', '2014-01-16 07:46:01', '0', '0', '0', '', '1389844589', '0'), ('23', '0', '0', '0', '0', '0', null, 'active', 'article', null, 'Бидний тухай', 'Жижиг дунд бизнес эрхлэгчид хамтран ажиллаж бие биенээ дэмжин хөгжиж, орлого ашиг, бүтээмжийн өсөлтийг хангах, үйлчлүүлэгч, иргэн бүрт хөнгөлөлт, хуримтлал, чанартай бараа бүтээгдэхүүн, үйлчилгээний өргөн сонголтыг бэлэглэхийн төлөө эрдэмтэн мэргэд, бизнес эрхлэгчдийн төлөөллийн санаачилж нэвтрүүлж байгаа цогц систем, санал, төсөл бөгөөд эрдэмтэн мэргэд, судлаачдын судалгаа шинжилгээний үндсэн дээр бий болсон оюуны өмч, патент, ололт амжилтыг үйлдвэрлэлд нэвтрүүлэх ажиллагаа юм. ', '<div>&nbsp;</div>\r\n\r\n<div>\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"color: rgb(93, 93, 93); font-family: Tahoma; font-size: 11px; line-height: normal;\" width=\"100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td valign=\"top\">\r\n			<div id=\"contentShort\">\r\n			<div class=\"contentTitle\" style=\"font-weight: bold; color: rgb(12, 62, 115); font-size: 13px; font-family: tahoma; margin-bottom: 6px; margin-top: 0px; padding-top: 0px; clear: both; cursor: pointer;\">ДМС гэж юу вэ</div>\r\n			&nbsp;\r\n\r\n			<div style=\"text-align: justify;\">Жижиг дунд бизнес эрхлэгчид хамтран ажиллаж бие биенээ дэмжин хөгжиж, орлого ашиг, бүтээмжийн өсөлтийг хангах, үйлчлүүлэгч, иргэн бүрт хөнгөлөлт, хуримтлал, чанартай бараа бүтээгдэхүүн, үйлчилгээний өргөн сонголтыг бэлэглэхийн төлөө эрдэмтэн мэргэд, бизнес эрхлэгчдийн төлөөллийн санаачилж нэвтрүүлж байгаа цогц систем, санал, төсөл бөгөөд эрдэмтэн мэргэд, судлаачдын судалгаа шинжилгээний үндсэн дээр бий болсон оюуны өмч, патент, ололт амжилтыг үйлдвэрлэлд нэвтрүүлэх ажиллагаа юм.&nbsp;<br />\r\n			<span style=\"font-weight: bold; color: rgb(255, 0, 255);\">Энэ цогц асуудлыг тавих болсон үндэс</span><br />\r\n			<br />\r\n			<img alt=\"\" src=\"http://www.pms.me/media/images/53a6e7387cef81403447096.jpg\" style=\"width: 250px; height: 142px; margin-left: 5px; margin-right: 5px; float: left;\" />Хамгийн багын дүрмээр дээрх модон хувингийн бүх савх мод бүтэн байхад дүүрэн сүү ордог хэрэв нэг савх нь хугархай байвал түүнээс дээш сүү ордоггүйтэй адил бизнесийн үйл ажиллагааны бүхий л тал жигд сайн байж амжилт бүтээл өндөр байх нь ойлгомжтой.&nbsp;<br />\r\n			<span style=\"font-weight: bold;\">Жишээ нь:</span><br />\r\n			Маркетингийг хичнээн сайн хийгээд ажиллагсад муу бол үйлчлүүлэгчийг гомдоогоод дахин ирэхгүй, техник технологи муу бол хийгдэж байгаа арга барилаас үүдээд үйлчлүүлэгч дахин ирэхгүй.<br />\r\n			Техник технологи, сайн ажиллагсадтай байгаад маркетингийг хийж чадахгүй бол үйлчлүүлэгчдэд танигдаж олон үйлчлүүлэгчидтэй болж чадахгүй<br />\r\n			<br />\r\n			Тэгвэл бизнесийн үйл ажиллагааны нэгэн хэсэг болсон маркетингийг сайн төлөвлөж зохион байгуулах, менежментийн баялгуудыг нэмэгдүүлэн оновчтой ашиглах асуудлыг цогцоор нь харилцан уялдаа холбоотойгоор шийдвэрлэх арга замыг олж зөв сайн хэрэгжүүлж чадвал бизнесийн үйл ажиллагаа амжилттай болох болно. Энэ асуудлыг цогцоор нь шийдвэрлэхийн тулд төрөл бүрийн мэргэжил мэдлэгтэй эрдэмтэн мэргэд мэргэжилтнүүдийн багийг бүрдүүлэн жижиг дунд шатны бизнес эрхлэгчдэд консалтинг зөвлөлгөө өгөн туслан ажилласнаар тэдгээрийг хүчирхэгжүүлэх, чадавхжуулах, нийгэмд оруулах томоохон хувь нэмэр болно гэсэн бодлогын үүднээс зохион байгуулалтад орон&nbsp; хэрэгжүүлэхээр санаа нэгдэн ажиллаж байна.</div>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n', '0', '2014-06-22 14:29:08', '2014-06-02 14:29:08', '0', '0', '0', null, null, '0'), ('17', '0', '0', '0', '0', '1', '', 'active', 'article', '//www.v3.demo.az.mn/media/photos/52e5698d41a09.jpg', 'Ijj', ' Hi', '<p><strong>Yu bn datfhhhjjjjhhh</strong></p>\r\n\r\n<p><strong>t</strong>gggh</p>\r\n', '0', '2014-06-21 18:28:19', '2014-02-04 18:28:19', '0', '0', '0', '', '1390766477', '0'), ('18', '0', '0', '0', '0', '1', '', 'active', 'article', '', '4 хокагээг амьлуулав.', 'Шинобигийн ертөнцийн хориотой жүцү болох Едо Тенсей буюу Дахин Амьлуулах үхэл амьдралын заагийг удирдах энэ жүзү нь Нууц навчит тосгоны хоёрдугаар хокагэ үүсгэсэн юм.', '<p>Шинобигийн ертөнцийн хориотой жүцү болох &lt;em&gt;&quot;Едо Тенсей буюу Дахин Амьлуулах&quot;&lt;/em&gt; үхэл амьдралын заагийг удирдах энэ жүзү нь Нууц навчит тосгоны хоёрдугаар хокагэ үүсгэсэн юм.</p>\r\n', '1', '2014-06-22 08:32:44', '2014-05-29 08:32:44', '0', '0', '0', '', '1391012234', '0'), ('19', '0', '0', '0', '0', '0', null, 'active', 'article', null, 'garchig', ' aaaaa', '<p>aaaaaaaaaa</p>\r\n', '1', '2014-06-22 08:26:54', '2014-05-26 08:26:54', '0', '0', '0', null, null, '1'), ('20', '0', '0', '0', '0', '0', null, 'active', 'article', null, 'garchig', ' 12312', '<p>123123</p>\r\n', '1', '2014-06-18 05:40:04', '2014-06-01 05:40:04', '0', '0', '0', null, null, '1'), ('21', '0', '0', '0', '0', '0', null, 'active', 'article', null, 'garchig', ' 12312', '<p>123123</p>\r\n', '1', '2014-06-20 14:03:25', '2014-06-01 14:03:25', '0', '0', '0', null, null, '1'), ('22', '0', '0', '0', '0', '0', null, 'pending', 'article', null, '1adada', ' asdasdas', '', '1', '2014-06-18 05:39:22', '2014-06-03 05:39:22', '0', '0', '0', null, null, '1');
COMMIT;

-- ----------------------------
--  Table structure for `m_currencies`
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
--  Records of `m_currencies`
-- ----------------------------
BEGIN;
INSERT INTO `m_currencies` VALUES ('1', 'Tugrik', '', '', '₮', 'MNT', '1800'), ('2', 'Dollar', '', '', '$', 'USD', '1');
COMMIT;

-- ----------------------------
--  Table structure for `m_discount_code`
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
--  Table structure for `m_discount_code_log`
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
--  Table structure for `m_invoice_log`
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
--  Table structure for `m_invoice_products`
-- ----------------------------
DROP TABLE IF EXISTS `m_invoice_products`;
CREATE TABLE `m_invoice_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoices_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Table structure for `m_invoices`
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
--  Table structure for `m_measures`
-- ----------------------------
DROP TABLE IF EXISTS `m_measures`;
CREATE TABLE `m_measures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_short` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name_long` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `m_measures`
-- ----------------------------
BEGIN;
INSERT INTO `m_measures` VALUES ('1', '', '');
COMMIT;

-- ----------------------------
--  Table structure for `m_modules`
-- ----------------------------
DROP TABLE IF EXISTS `m_modules`;
CREATE TABLE `m_modules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `st` varchar(20) DEFAULT 'inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `m_modules`
-- ----------------------------
BEGIN;
INSERT INTO `m_modules` VALUES ('1', 'Category', 'active'), ('3', 'Content', 'active'), ('4', 'User', 'active');
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
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- ----------------------------
--  Records of `m_object_categories`
-- ----------------------------
BEGIN;
INSERT INTO `m_object_categories` VALUES ('1', '31', '1'), ('2', '33', '1'), ('3', '37', '1'), ('4', '33', '2'), ('5', '33', '3'), ('6', '36', '3'), ('7', '33', '4'), ('8', '36', '4'), ('9', '33', '5'), ('10', '36', '5'), ('11', '38', '6'), ('12', '32', '7'), ('13', '33', '7'), ('14', '32', '8'), ('15', '33', '8'), ('17', '33', '9'), ('18', '32', '10'), ('19', '33', '10'), ('20', '32', '11'), ('21', '33', '11'), ('22', '32', '12'), ('23', '33', '12'), ('24', '32', '13'), ('25', '33', '13'), ('26', '32', '14'), ('27', '33', '14'), ('28', '32', '15'), ('29', '33', '15'), ('30', '32', '16'), ('31', '33', '16'), ('32', '32', '17'), ('33', '33', '17');
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
  `module_name` varchar(255) NOT NULL DEFAULT 'object',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `m_objects`
-- ----------------------------
BEGIN;
INSERT INTO `m_objects` VALUES ('9', '1', '0', '0', '0', '0', 'real_estate_9', 'active', '1', '0', '//www.v3.demo.az.mn/media/photos/52e94bf7271f6.jpg', '4512 Brookmill Rd, Downey, CA', '1600', 'mkb', '2500.00', '0.00', '123456.00', 'USD', ' Head on city views in this renovated, furnished Pied a Terre. 2 units combined that allow for excellent separation of Bedrooms for privacy: master suite plus large 2nd bedroom; open living space with sliding doors to balcony overlooking the City Views.', '<p>A full service building that is close to shops, restaurants on the Sunset Strip. The unit is offered furnished and is also offered for sale.</p>', '0', '0', '2024-01-30 02:44:07', '2014-01-13 02:15:00', '2024-01-30 02:44:07', 'real_estate'), ('10', '1', '0', '0', '0', '0', 'real_estate_10', 'active', '1', '0', '//www.v3.demo.az.mn/media/photos/52e94d6d8bdcc.jpg', 'Ulaanbaatar, Mongolia', '1600', 'mkb', '2500.00', '0.00', '123456.00', 'USD', ' Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€ Ñ…Ð¾Ñ‚ Ñ…Ò¯Ð¹Ñ‚Ð½Ñ‹ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ð¸Ñ… ÑƒÑ‚Ð°Ð°Ñ‚Ð°Ð¹ Ð±Ð°Ð¹Ð´Ð³Ñ‹Ð³ Ñ‚Ð° Ð±Ð¸Ð´ Ð¼ÑÐ´Ð½Ñ. 2009.11.26 Ð¾Ð½Ð´ MCS - Ð³Ñ€ÑƒÐ¿Ð¿Ñ‹Ð½ Ñ…Ð°Ñ€ÑŒÑÐ° SKYRESORT - ', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', '0', '0', '2024-01-30 02:50:21', '2014-01-13 02:15:00', '2024-01-30 02:50:21', 'real_estate'), ('11', '1', '0', '0', '0', '0', 'real_estate_11', 'active', '1', '0', '//www.v3.demo.az.mn/media/photos/52e94dff90aba.jpg', 'Ulaanbaatar, Mongolia', '1600', 'mkb', '2500.00', '0.00', '123456.00', 'MNT', 'Egchiinde ochij honongoo margashinha shalgaltand beldher ochwoo ydaj bhad egchiih hotos jhn zaitai lager.d shunujinguu beldej2 untalgui honosiin tgd uwul ch bsn blhor uglu haw haranhui tgd ert garahgu bl blku gd 6ongorogod garla 7.s mikro ywdag gd tgd gartal bi zamaa ', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', '0', '0', '2024-01-30 02:52:47', '2014-01-21 01:50:00', '2024-01-30 02:52:47', 'real_estate'), ('12', '1', '0', '0', '0', '0', 'real_estate_12', 'active', '1', '0', '//www.v3.demo.az.mn/media/photos/52e94eaf52c2f.jpg', 'zukov', '1600', 'mkb', '2500.00', '0.00', '123456.00', 'MNT', ' oldoggui bhan ywad l bla ywad l bla svvlde aigad tuurchlu gj bdod egchrvge yrih gsn negj bdaggu gants l msj.ni negjtei tgd bi tuurchlu zalga gsn msj biched egch zalgatal bi ch uilan dugarad bi zamaa olohgui bn tu...', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', '0', '0', '2024-01-30 02:55:43', '2014-01-21 01:50:00', '2024-01-30 02:55:43', 'real_estate'), ('13', '1', '0', '0', '0', '0', 'real_estate_13', 'active', '1', '0', '//www.v3.demo.az.mn/media/photos/52e94f5ad73e6.jpg', 'ÐžÑ€Ñ‡Ð»Ð¾Ð½ Ñ…Ð¾Ñ€Ð¾Ð¾Ð»Ð¾Ð»', '1600', 'mkb', '2500.00', '0.00', '123456.00', 'MNT', 'Ð¥ÑƒÐ´Ð°Ð»Ð´Ð°Ð³Ñ‡ Ò¯ÑÐ´ÑÑÐ½ Ð½ÑŒ\r\nÐ—ÑƒÐ½Ñ‹ Ð°Ð¼Ñ€Ð°Ð»Ñ‚Ð°Ð°Ñ€Ð°Ð° Ð³ÑÑ€ Ð±Ò¯Ð»ÑÑÑ€ÑÑ Ð±ÑÑÐ¶Ð¸Ð½ ÑÐ²Ð»Ð°Ð°. Ð”ÑÐ»Ð³Ò¯Ò¯Ñ€ Ñ…ÑÑÑÑÐ´ ÑÐ²Ð¶ Ð±Ñ‚Ð°Ð» Ð¼Ð°Ð½Ð°Ð¹ Ñ…Ò¯Ò¯\r\n-ÑÐ½Ð¸Ð¹Ð³ Ñ…Ð°Ñ€Ð°Ð° ÑÐ½Ñ Ð»Ð°Ð³ Ð¼Ð°Ð½Ð¸ÐºÐµÐ½ Ð±Ð½ Ð³ÑÑÐ´ Ð¼Ð°Ð½Ð¸ÐºÐµÐ½ Ð³ÑÐ¶ Ð½ÑÑ€Ð»ÑÑÑÐ½ Ñ…Ò¯Ð½ÑÑ Ò¯ÑÐ´ÑÑÐ´ Ð°Ð²Ð´Ñ‹Ð½. ÐÓ©Ð³Ó©Ó©Ñ… Ð½ÑŒ Ñ†Ð¾Ñ‡Ð¾Ð¾Ð´ ÑÑ€Ð³ÑÑÐ´ Ñ…Ð°Ñ€ÑÐ°Ð½ Ñ‡Ð¸Ð½ÑŒ Ð¼Ð°Ð½Ð°Ð¹ Ñ…Ò¯Ò¯ Ð°Ð¹Ð³Ð°Ð°Ð´ Ñ…Ð°ÑˆÑ…Ð¸Ñ€Ñ‡ Ð·ÑƒÐ³Ñ‚Ð°Ð°Ð³Ð°Ð°Ð´ Ñ…Ð°Ñ…Ð°.\r\n', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', '0', '0', '2024-01-30 02:58:34', '2014-01-14 13:25:00', '2024-01-30 02:58:34', 'real_estate'), ('14', '1', '0', '0', '0', '0', 'real_estate_14', 'active', '1', '0', '//www.v3.demo.az.mn/media/photos/52e94fdf56d9e.jpg', 'Ð”Ð¾Ñ€Ð½Ñ‹Ð½ Ó©Ñ€Ð³Ó©Ó©', '1600', 'mkb', '2500.00', '0.00', '123456.00', 'MNT', 'Ð¥Ò¯Ò¯:-ÑÑÐ¶ Ð°Ð¼ Ñ†Ð°Ð½Ð³Ð°Ð°Ð´ Ð±Ð°Ð¹Ð½Ð°.\r\nÐ­ÑÐ¶:-Ñ‚Ð°Ñ€Ð°Ð³ ÑƒÑƒ\r\nÐ¥Ò¯Ò¯:-ÑÑÐ¶ Ó©Ð»ÑÓ©Ó©Ð´ Ð±Ð°Ð¹Ð½Ð°.\r\nÑÑÐ¶:-Ñ‚Ð°Ñ€Ð°Ð³ Ð¸Ð´', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', '0', '0', '2024-01-30 03:00:47', '2014-01-14 13:25:00', '2024-01-30 03:00:47', 'real_estate'), ('15', '1', '0', '0', '0', '0', 'real_estate_15', 'inactive', '0', '0', '//www.v3.demo.az.mn/media/photos/52e950b554f9c.jpg', 'ÐÐ­Ð’Ð¢Ð Ð­Ð¥ Ð¡Ð˜Ð¡Ð¢Ð•Ðœ / ACCESS CONTROL', '1800', 'mkb', '3000.00', '0.00', '180000.00', 'MNT', ' zaluuchuudaa shine onii mend hvrgey onoo saikhan ugtaarai', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', '0', '0', '2024-01-30 03:04:21', '2013-12-30 03:45:00', '2024-01-30 03:04:21', 'real_estate'), ('16', '1', '0', '0', '0', '0', 'real_estate_16', 'active', '1', '1', '//www.v3.demo.az.mn/media/photos/52e95164d9498.jpg', 'IT SHOP', '1800', 'mkb', '3000.00', '0.00', '180000.00', 'MNT', ' ÑˆÐ¸Ð½Ñ Ð¼ÑÐ´ÑÑÑˆÐ¸Ð½Ñ Ð¼ÑÐ´ÑÑÑˆÐ¸Ð½Ñ Ð¼ÑÐ´ÑÑÑˆÐ¸Ð½Ñ Ð¼ÑÐ´ÑÑÑˆÐ¸Ð½Ñ Ð¼ÑÐ´ÑÑÑˆÐ¸Ð½Ñ Ð¼ÑÐ´ÑÑÑˆÐ¸Ð½Ñ Ð¼ÑÐ´ÑÑ', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', '0', '0', '2024-01-30 03:07:16', '2013-12-04 03:50:00', '2024-01-30 03:07:16', 'real_estate'), ('17', '1', '0', '0', '0', '0', 'real_estate_17', 'active', '1', '1', '//www.v3.demo.az.mn/media/photos/52e951d2b160e.jpg', 'WALE GSM Ð´Ð¾Ñ…Ð¸Ð¾Ð»Ð»Ñ‹Ð½ ÐºÐ¾Ð¼', '1800', 'mkb', '3000.00', '0.00', '180000.00', 'MNT', ' Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€  Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€  Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€  Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€  Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€  Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€  Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€ ', '<p>Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð· Ð½ÑÑÐ³Ð´ÑÐ¶ Ð£Ð»Ð°Ð°Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€Ñ‡ÑƒÑƒÐ´ Ð±Ð¸Ð´ Ð°Ð»Ð±Ð°Ð½ Ñ‘ÑÐ¾Ð¾Ñ€ Ð¾Ð»Ð¾Ð½ Ð½Ð¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¼ÑÑ€Ð³ÑÐ¶Ð»Ð¸Ð¹Ð½ Ñ†Ð°Ð½Ñ‹Ð½ Ð±Ð°Ð°Ð·Ñ‚Ð°Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½Ð¾Ð¾Ñ€ Ó©Ð²Ð»Ð¸Ð¹Ð½ ÑƒÐ»Ð¸Ñ€Ð°Ð»Ð´ Ñ‡Ó©Ð»Ó©Ó©Ñ‚ Ñ†Ð°Ð³Ð°Ð° Ð·Ó©Ð² Ð±Ð¾Ð»Ð¾Ð²ÑÐ¾Ð½, ÑÐ¿Ð¾Ñ€Ñ‚Ð»Ð¾Ð³ Ó©Ð½Ð³Ó©Ñ€Ò¯Ò¯Ð»ÑÑ… Ð±Ð¾Ð»Ð¾Ð¼Ð¶Ñ‚Ð¾Ð¹ Ð±Ð¾Ð»ÑÐ¾Ð½ Ð±Ð¸Ð»ÑÑ. Ð’Ð°Ð³Ð½ÐµÑ€ Ð°Ð·Ð¸ Ð°Ð²Ñ‚Ð¾Ð¼Ð¾Ñ‚Ð¸Ð², Ð¤Ð¾Ñ€Ð´ Ð±Ñ€ÑÐ½Ð´ ÑÐ½Ñ ÑƒÐ´Ð°Ð°Ð´ Ó©Ð²Ð»Ð¸Ð¹Ð½ Skyresort - Ñ‚Ð°Ð¹ Ñ…Ð°Ð¼Ñ‚Ñ€Ð°Ð½ Ð°Ð¶Ð¸Ð»Ð»Ð°Ð¶ Ð±Ð°Ð¹Ð½Ð°.&nbsp;</p>', '0', '0', '2024-01-30 03:09:06', '2013-12-10 14:30:00', '2024-01-30 03:09:06', 'real_estate'), ('8', '1', '0', '0', '0', '0', 'real_estate_8', 'active', '1', '0', '//www.v3.demo.az.mn/media/photos/52e94a6486e2d.jpg', '4512 Brookmill Rd, Downey, CA', '1400', 'mkb', '2000.00', '0.00', '545455.00', 'USD', ' Parking placEnjoy this 2 bdrm/2.5 bath light infused space with high ceilings, huge windows and wood burning fireplace. Each bedroom has its own private bathroom. Beautiful natural materials w/ concrete, slate and hardwood floors throughout. Wonderful open kitchen designed for entertaining. Well designed floor-plan with a beautiful roof-top terrace.e ', '', '0', '0', '2024-01-30 02:37:24', '2014-01-28 01:05:00', '2024-01-30 02:37:24', 'real_estate');
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
) ENGINE=MyISAM AUTO_INCREMENT=227 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `m_option_values`
-- ----------------------------
BEGIN;
INSERT INTO `m_option_values` VALUES ('3', 'object_2', '1', '107.5', '1'), ('4', 'object_2', '2', '49.86', '1'), ('5', 'object_2', '0', '3', '1'), ('6', 'object_2', '0', '8', '1'), ('7', 'object_2', '10', '12', '1'), ('8', 'object_2', '11', '3', '1'), ('9', 'object_2', '12', '4', '1'), ('10', 'object_2', '13', '2', '1'), ('11', 'object_2', '14', '2014', '1'), ('12', 'object_2', '0', '15', '1'), ('13', 'object_2', '0', '19', '1'), ('14', 'object_2', '20', '5', '1'), ('15', 'object_2', '0', '21', '1'), ('16', 'object_2', '24', 'Ð¥ÑƒÑ€Ð´ ÐšÐ¾Ñ€Ð¿', '1'), ('17', 'object_3', '1', '107.52', '1'), ('18', 'object_3', '2', '49.87', '1'), ('19', 'object_3', '0', '3', '1'), ('20', 'object_3', '0', '9', '1'), ('21', 'object_3', '10', '11', '1'), ('22', 'object_3', '11', '2', '1'), ('23', 'object_3', '12', '2', '1'), ('24', 'object_3', '13', '1', '1'), ('25', 'object_3', '14', '2013', '1'), ('26', 'object_3', '0', '17', '1'), ('27', 'object_3', '0', '19', '1'), ('28', 'object_3', '20', '2', '1'), ('29', 'object_3', '0', '22', '1'), ('30', 'object_3', '24', 'Ð¥ÑƒÑ€Ð´ ÐšÐ¾Ñ€Ð¿', '1'), ('31', 'object_4', '1', '107.52', '1'), ('32', 'object_4', '2', '49.87', '1'), ('33', 'object_4', '0', '3', '1'), ('34', 'object_4', '0', '9', '1'), ('35', 'object_4', '10', '11', '1'), ('36', 'object_4', '11', '2', '1'), ('37', 'object_4', '12', '2', '1'), ('38', 'object_4', '13', '1', '1'), ('39', 'object_4', '14', '2013', '1'), ('40', 'object_4', '0', '17', '1'), ('41', 'object_4', '0', '19', '1'), ('42', 'object_4', '20', '2', '1'), ('43', 'object_4', '0', '22', '1'), ('44', 'object_4', '24', 'Ð¥ÑƒÑ€Ð´ ÐšÐ¾Ñ€Ð¿', '1'), ('45', 'object_5', '1', '107.52', '1'), ('46', 'object_5', '2', '49.87', '1'), ('47', 'object_5', '0', '3', '1'), ('48', 'object_5', '0', '9', '1'), ('49', 'object_5', '10', '11', '1'), ('50', 'object_5', '11', '2', '1'), ('51', 'object_5', '12', '2', '1'), ('52', 'object_5', '13', '1', '1'), ('53', 'object_5', '14', '2013', '1'), ('54', 'object_5', '0', '17', '1'), ('55', 'object_5', '0', '19', '1'), ('56', 'object_5', '20', '2', '1'), ('57', 'object_5', '0', '22', '1'), ('58', 'object_5', '24', 'Ð¥ÑƒÑ€Ð´ ÐšÐ¾Ñ€Ð¿', '1'), ('114', 'real_estate_9', '24', 'Ð¶Ð¸Ð³Ò¯Ò¯Ñ€', '1'), ('113', 'real_estate_9', '0', '21', '1'), ('112', 'real_estate_9', '20', '2', '1'), ('111', 'real_estate_9', '0', '18', '1'), ('110', 'real_estate_9', '0', '15', '1'), ('109', 'real_estate_9', '14', '2012', '1'), ('108', 'real_estate_9', '13', '1', '1'), ('107', 'real_estate_9', '12', '4', '1'), ('106', 'real_estate_9', '11', '2', '1'), ('105', 'real_estate_9', '10', '3', '1'), ('104', 'real_estate_9', '0', '8', '1'), ('101', 'real_estate_9', '1', '47Â° 54.742', '1'), ('102', 'real_estate_9', '2', '106Â° 57.040', '1'), ('103', 'real_estate_9', '0', '3', '1'), ('123', 'real_estate_10', '14', '2014', '1'), ('122', 'real_estate_10', '13', '4', '1'), ('121', 'real_estate_10', '12', '4', '1'), ('120', 'real_estate_10', '11', '4', '1'), ('119', 'real_estate_10', '10', '4', '1'), ('118', 'real_estate_10', '0', '8', '1'), ('117', 'real_estate_10', '0', '3', '1'), ('116', 'real_estate_10', '2', '106.9328249', '1'), ('115', 'real_estate_10', '1', '47.9192672', '1'), ('87', 'real_estate_8', '1', '47.8612826', '1'), ('88', 'real_estate_8', '2', '106.8785784', '1'), ('89', 'real_estate_8', '0', '3', '1'), ('90', 'real_estate_8', '0', '8', '1'), ('91', 'real_estate_8', '10', '2', '1'), ('92', 'real_estate_8', '11', '2', '1'), ('93', 'real_estate_8', '12', '2', '1'), ('94', 'real_estate_8', '13', '2', '1'), ('95', 'real_estate_8', '14', '2008', '1'), ('96', 'real_estate_8', '0', '17', '1'), ('97', 'real_estate_8', '0', '18', '1'), ('98', 'real_estate_8', '20', '5', '1'), ('99', 'real_estate_8', '0', '21', '1'), ('100', 'real_estate_8', '24', 'Ð¥ÑƒÑ€Ð´ Ð³Ñ€ÑƒÐ¿Ð¿', '1'), ('124', 'real_estate_10', '0', '15', '1'), ('125', 'real_estate_10', '0', '18', '1'), ('126', 'real_estate_10', '20', '6', '1'), ('127', 'real_estate_10', '0', '21', '1'), ('128', 'real_estate_10', '24', 'Ð¼Ñ‚Ð¼Ñ‚', '1'), ('129', 'real_estate_11', '1', '47Â° 54.749', '1'), ('130', 'real_estate_11', '2', '106Â° 57.040', '1'), ('131', 'real_estate_11', '0', '3', '1'), ('132', 'real_estate_11', '0', '8', '1'), ('133', 'real_estate_11', '10', '1', '1'), ('134', 'real_estate_11', '11', '1', '1'), ('135', 'real_estate_11', '12', '1', '1'), ('136', 'real_estate_11', '13', '1', '1'), ('137', 'real_estate_11', '14', '2014', '1'), ('138', 'real_estate_11', '0', '15', '1'), ('139', 'real_estate_11', '0', '18', '1'), ('140', 'real_estate_11', '20', '1', '1'), ('141', 'real_estate_11', '0', '21', '1'), ('142', 'real_estate_11', '24', 'MBM', '1'), ('143', 'real_estate_12', '1', '47Â° 54.458', '1'), ('144', 'real_estate_12', '2', '106Â° 57.040', '1'), ('145', 'real_estate_12', '0', '3', '1'), ('146', 'real_estate_12', '0', '8', '1'), ('147', 'real_estate_12', '10', '5', '1'), ('148', 'real_estate_12', '11', '4', '1'), ('149', 'real_estate_12', '12', '1', '1'), ('150', 'real_estate_12', '13', '1', '1'), ('151', 'real_estate_12', '14', '2013', '1'), ('152', 'real_estate_12', '0', '15', '1'), ('153', 'real_estate_12', '0', '18', '1'), ('154', 'real_estate_12', '20', '1', '1'), ('155', 'real_estate_12', '0', '21', '1'), ('156', 'real_estate_12', '24', 'Ð¼Ð¾Ð½Ð³Ð¾Ð» ÑˆÑƒÑƒÐ´Ð°Ð½', '1'), ('157', 'real_estate_13', '1', '47Â° 54.742', '1'), ('158', 'real_estate_13', '2', '106.87857', '1'), ('159', 'real_estate_13', '0', '3', '1'), ('160', 'real_estate_13', '0', '8', '1'), ('161', 'real_estate_13', '10', '9', '1'), ('162', 'real_estate_13', '11', '5', '1'), ('163', 'real_estate_13', '12', '2', '1'), ('164', 'real_estate_13', '13', '1', '1'), ('165', 'real_estate_13', '14', '2012', '1'), ('166', 'real_estate_13', '0', '15', '1'), ('167', 'real_estate_13', '0', '18', '1'), ('168', 'real_estate_13', '20', '3', '1'), ('169', 'real_estate_13', '0', '21', '1'), ('170', 'real_estate_13', '24', 'Ð¥Ð¾Ñ Ð±Ð°Ñ€', '1'), ('171', 'real_estate_14', '1', '47Â° 54.100', '1'), ('172', 'real_estate_14', '2', '106Â° 56.555', '1'), ('173', 'real_estate_14', '0', '3', '1'), ('174', 'real_estate_14', '0', '8', '1'), ('175', 'real_estate_14', '10', '16', '1'), ('176', 'real_estate_14', '11', '9', '1'), ('177', 'real_estate_14', '12', '5', '1'), ('178', 'real_estate_14', '13', '2', '1'), ('179', 'real_estate_14', '14', '2011', '1'), ('180', 'real_estate_14', '0', '15', '1'), ('181', 'real_estate_14', '0', '18', '1'), ('182', 'real_estate_14', '20', '5', '1'), ('183', 'real_estate_14', '0', '21', '1'), ('184', 'real_estate_14', '24', 'Ó¨Ð½Ð´Ó©Ñ€ Ð±ÑƒÑÐ½Ñ‚', '1'), ('185', 'real_estate_15', '1', ' 47Â° 55.852', '1'), ('186', 'real_estate_15', '2', '106Â° 52.440\'', '1'), ('187', 'real_estate_15', '0', '3', '1'), ('188', 'real_estate_15', '0', '8', '1'), ('189', 'real_estate_15', '10', '16', '1'), ('190', 'real_estate_15', '11', '5', '1'), ('191', 'real_estate_15', '12', '2', '1'), ('192', 'real_estate_15', '13', '2', '1'), ('193', 'real_estate_15', '14', '2003', '1'), ('194', 'real_estate_15', '0', '17', '1'), ('195', 'real_estate_15', '0', '18', '1'), ('196', 'real_estate_15', '20', '2', '1'), ('197', 'real_estate_15', '0', '21', '1'), ('198', 'real_estate_15', '24', 'Ð»Ð°Ð½Ñ Ð±Ð°Ñ€', '1'), ('199', 'real_estate_16', '1', '47.8612154', '1'), ('200', 'real_estate_16', '2', '106Â° 57.555', '1'), ('201', 'real_estate_16', '0', '3', '1'), ('202', 'real_estate_16', '0', '8', '1'), ('203', 'real_estate_16', '10', '5', '1'), ('204', 'real_estate_16', '11', '4', '1'), ('205', 'real_estate_16', '12', '4', '1'), ('206', 'real_estate_16', '13', '4', '1'), ('207', 'real_estate_16', '14', '2014', '1'), ('208', 'real_estate_16', '0', '16', '1'), ('209', 'real_estate_16', '0', '18', '1'), ('210', 'real_estate_16', '20', '2', '1'), ('211', 'real_estate_16', '0', '21', '1'), ('212', 'real_estate_16', '24', 'suzuki', '1'), ('213', 'real_estate_17', '1', '46.8612154', '1'), ('214', 'real_estate_17', '2', '106.8785784', '1'), ('215', 'real_estate_17', '0', '3', '1'), ('216', 'real_estate_17', '0', '8', '1'), ('217', 'real_estate_17', '10', '7', '1'), ('218', 'real_estate_17', '11', '7', '1'), ('219', 'real_estate_17', '12', '7', '1'), ('220', 'real_estate_17', '13', '4', '1'), ('221', 'real_estate_17', '14', '2014', '1'), ('222', 'real_estate_17', '0', '15', '1'), ('223', 'real_estate_17', '0', '18', '1'), ('224', 'real_estate_17', '20', '5', '1'), ('225', 'real_estate_17', '0', '21', '1'), ('226', 'real_estate_17', '24', 'Ð¼Ð¾Ð½Ð³Ð¾Ð» Ñ…ÑƒÑƒÑˆÑƒÑƒÑ€', '1');
COMMIT;

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
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `m_options`
-- ----------------------------
BEGIN;
INSERT INTO `m_options` VALUES ('1', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'location', 'latitude', 'urgurug', '2014-01-05 13:17:40'), ('2', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'location', 'longitude', 'urgurug', '2014-01-05 13:19:34'), ('3', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'building_type', 'ÐžÑ€Ð¾Ð½ ÑÑƒÑƒÑ†', 'ÐÐ¸Ð¹Ñ‚Ð¸Ð¹Ð½ Ð¾Ñ€Ð¾Ð½ ÑÑƒÑƒÑ†', '2014-01-23 22:43:56'), ('4', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'building_type', 'Ð¥Ð°ÑˆÐ°Ð° Ð±Ð°Ð¹ÑˆÐ¸Ð½', 'Ð¥Ð°ÑˆÐ°Ð° Ð±Ð°Ð¹ÑˆÐ¸Ð½', '2014-01-23 22:44:29'), ('5', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'building_type', 'ÐžÑ„Ñ„Ð¸Ñ', 'ÐžÑ„Ñ„Ð¸Ñ, Ð°Ð»Ð±Ð°Ð½ Ñ‚Ð°ÑÐ°Ð»Ð³Ð°Ð°', '2014-01-23 22:44:54'), ('6', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'building_type', 'Ð—ÑƒÑÐ»Ð°Ð½Ð³Ð¸Ð¹Ð½ Ð±Ð°Ð¹ÑˆÐ¸Ð½', 'Ð—ÑƒÑÐ»Ð°Ð½Ð³Ð¸Ð¹Ð½ Ð±Ð°Ð¹ÑˆÐ¸Ð½, Ñ…Ð°ÑƒÑ', '2014-01-23 22:45:54'), ('7', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'building_type', 'Ð¥ÑƒÐ´Ð°Ð»Ð´Ð°Ð° Ò¯Ð¹Ð»Ñ‡Ð¸Ð»Ð³ÑÑ', 'Ð¥ÑƒÐ´Ð°Ð»Ð´Ð°Ð° Ò¯Ð¹Ð»Ñ‡Ð¸Ð»Ð³ÑÑÐ½Ð¸Ð¹ Ð·Ð¾Ñ€Ð¸ÑƒÐ»Ð°Ð»Ñ‚Ñ‚Ð°Ð¹ Ð¾Ð±ÑŠÐµÐºÑ‚', '2014-01-23 22:48:24'), ('8', 'real_estate', 'real_estate', '1', 'active', '0', 'radio', 'is_new', 'Ð¨Ð¸Ð½Ñ', 'Ð¨Ð¸Ð½Ñ Ð±Ð°Ð¹Ñ€ ÑÑÑÑ…', '2014-01-23 22:50:55'), ('9', 'real_estate', 'real_estate', '1', 'active', '0', 'radio', 'is_new', 'Ð¥ÑƒÑƒÑ‡Ð¸Ð½', 'Ð‘Ð°Ð¹Ñ€Ð½Ñ‹ Ñ…ÑƒÑƒÑ‡Ð¸Ð½ ÑÑÑÑ…', '2014-01-23 22:51:14'), ('10', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'bld_info', 'Ð‘Ð°Ñ€Ð¸Ð»Ð³Ñ‹Ð½ Ð´Ð°Ð²Ñ…Ð°Ñ€', 'Ð¢ÑƒÑ…Ð°Ð¹Ð½ Ð±Ð°Ñ€Ð¸Ð»Ð³Ñ‹Ð½ Ð½Ð¸Ð¹Ñ‚ Ð´Ð°Ð²Ñ…Ð°Ñ€', '2014-01-23 23:18:06'), ('11', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'bld_info', 'Ð‘Ð°Ð¹Ñ€Ð»Ð°Ñ… Ð´Ð°Ð²Ñ…Ð°Ñ€', 'Ð¢ÑƒÑ…Ð°Ð¹Ð½ Ð¾Ð±ÑŠÐµÐºÑ‚Ð¸Ð¹Ð½ Ð±Ð°Ð¹Ñ€Ð»Ð°Ñ… Ð´Ð°Ð²Ñ…Ð°Ñ€', '2014-01-23 23:18:53'), ('12', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'bld_info', 'Ó¨Ñ€Ó©Ó©Ð½Ð¸Ð¹ Ñ‚Ð¾Ð¾', 'ÐžÐ±ÑŠÐµÐºÑ‚Ð¸Ð¹Ð½ Ð½Ð¸Ð¹Ñ‚ Ó©Ñ€Ó©Ó©', '2014-01-23 23:20:10'), ('13', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'bld_info', '00-Ð¸Ð¹Ð½ Ó©Ñ€Ó©Ó©', 'Ð½Ð¸Ð¹Ñ‚ 00 Ó©Ñ€Ó©Ó©Ð½Ð¸Ð¹ Ñ‚Ð¾Ð¾', '2014-01-23 23:20:28'), ('14', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'bld_info', 'ÐÑˆÐ¸Ð³Ð»Ð°Ð»Ñ‚Ð°Ð½Ð´ Ð¾Ñ€ÑÐ¾Ð½', 'ÐÑˆÐ¸Ð³Ð»Ð°Ð»Ñ‚Ð°Ð½Ð´ Ð¾Ñ€ÑÐ¾Ð½ Ð¾Ð³Ð½Ð¾Ð¾', '2014-01-23 23:20:54'), ('15', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'repair_condition', 'Ð—Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹Ð³ÑÑÐ³Ò¯Ð¹', 'Ð—Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹ÑÑÐ½ ÑÑÑÑ…', '2014-01-23 23:22:05'), ('16', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'repair_condition', 'Ð—Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹ÑÑÐ½', 'Ð—Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹ÑÑÐ½ ÑÑÑÑ…', '2014-01-23 23:22:20'), ('17', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'repair_condition', 'Ð¡ÑƒÐ¿ÐµÑ€ Ð·Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹ÑÑÐ½', 'Ð—Ð°ÑÐ²Ð°Ñ€ Ñ…Ð¸Ð¹ÑÑÐ½ ÑÑÑÑ…', '2014-01-23 23:22:37'), ('18', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'has_furniture', 'Ð¢Ð°Ð²Ð¸Ð»Ð³Ð°Ñ‚Ð°Ð¹', 'Ð¢Ð°Ð²Ð¸Ð»Ð³Ð°Ñ‚Ð°Ð¹ ÑÑÑÑ…', '2014-01-23 23:23:47'), ('19', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'has_furniture', 'Ð¢Ð°Ð²Ð¸Ð»Ð³Ð°Ð³Ò¯Ð¹', 'Ð¢Ð°Ð²Ð¸Ð»Ð³Ð°Ñ‚Ð°Ð¹ ÑÑÑÑ…', '2014-01-23 23:24:03'), ('20', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'bld_window', 'Ð¦Ð¾Ð½Ñ…Ð½Ñ‹ Ñ‚Ð¾Ð¾', 'Ð¦Ð¾Ð½Ñ…Ð½Ñ‹ Ñ‚Ð¾Ð¾', '2014-01-23 23:25:02'), ('21', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'window_type', 'Ð’Ð°ÐºÑƒÐ¼ Ñ†Ð¾Ð½Ñ…', 'Ð’Ð°ÐºÑƒÐ¼ Ñ†Ð¾Ð½Ñ…', '2014-01-23 23:25:36'), ('22', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'window_type', 'Ð­Ð½Ð³Ð¸Ð¹Ð½ Ñ†Ð¾Ð½Ñ…', 'Ð¦Ð¾Ð½Ñ…Ð½Ñ‹ Ñ‚Ó©Ñ€Ó©Ð»', '2014-01-23 23:25:55'), ('23', 'real_estate', 'real_estate', '1', 'active', '0', 'select', 'window_type', 'Ð‘ÑƒÑÐ°Ð´ Ñ‚Ó©Ñ€Ó©Ð»', 'Ð¦Ð¾Ð½Ñ…Ð½Ñ‹ Ñ‚Ó©Ñ€Ó©Ð»', '2014-01-23 23:26:08'), ('24', 'real_estate', 'real_estate', '1', 'active', '0', 'input', 'bld_builder', 'Ð‘Ð°Ñ€ÑŒÑÐ°Ð½ ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸', 'Ð‘Ð°Ñ€Ð¸Ð»Ð³Ñ‹Ð½ Ð³Ò¯Ð¹Ñ†ÑÑ‚Ð³ÑÐ³Ñ‡', '2014-01-23 23:26:52'), ('25', 'gazar', 'gazar', '1', 'active', '0', 'select', 'gazar_type', 'Ð‘Ð°Ñ€Ð¸Ð»Ð³Ñ‹Ð½ Ð³Ð°Ð·Ð°Ñ€', 'Ð“Ð°Ð·Ñ€Ñ‹Ð½ Ñ‚Ó©Ñ€Ó©Ð»', '2014-01-24 10:27:08'), ('26', 'gazar', 'gazar', '1', 'active', '0', 'select', 'gazar_type', 'Ð¢Ð°Ñ€Ð¸Ð°, ÐÐ¾Ð³Ð¾Ð¾Ð½Ñ‹ Ñ‚Ð°Ð»Ð±Ð°Ð¹', 'Ð¢Ð°Ñ€Ð¸Ð°, Ð½Ð¾Ð³Ð¾Ð¾Ð½Ñ‹ Ñ‚Ð°Ñ€Ð¸Ð°Ð»Ð°Ñ… Ð³Ð°Ð·Ð°Ñ€', '2014-01-24 10:28:03'), ('27', 'gazar', 'gazar', '1', 'active', '0', 'input', 'gazar_location', 'Ð£Ñ€Ñ‚Ñ€Ð°Ð³', 'Ð‘Ð°Ð¹Ñ€ÑˆÐ¸Ð» Ñ…', '2014-01-24 10:29:06'), ('28', 'gazar', 'gazar', '1', 'active', '0', 'input', 'gazar_location', 'Ó¨Ñ€Ð³Ó©Ñ€Ó©Ð³', 'Ð‘Ð°Ð¹Ñ€ÑˆÐ¸Ð» Ñƒ', '2014-01-24 10:29:28'), ('29', 'gazar', 'gazar', '1', 'active', '0', 'select', 'gazar_gerchilgee_type', 'Ó¨Ð¼Ñ‡Ð¸Ð»ÑÓ©Ð½', 'Ð­Ð·ÑÐ¼ÑˆÐ»Ð¸Ð¹Ð½ Ñ‚Ó©Ñ€Ó©Ð»', '2014-01-24 10:30:21'), ('30', 'gazar', 'gazar', '1', 'active', '0', 'select', 'gazar_gerchilgee_type', 'Ð“Ð°Ð·Ð°Ñ€ ÑÐ·ÑÐ¼ÑˆÐ¸Ñ… Ð³ÑÑ€Ñ‡Ð¸Ð»Ð³ÑÑÑ‚ÑÐ¹', 'Ð­Ð·ÑÐ¼ÑˆÐ»Ð¸Ð¹Ð½ Ñ‚Ó©Ñ€Ó©Ð»', '2014-01-24 10:30:49');
COMMIT;

-- ----------------------------
--  Table structure for `m_order`
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
--  Table structure for `m_payment_gateways`
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
--  Table structure for `m_photos`
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
) ENGINE=MyISAM AUTO_INCREMENT=302 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `m_photos`
-- ----------------------------
BEGIN;
INSERT INTO `m_photos` VALUES ('280', '53a43568021531403270504.jpg', '64016', 'default', null, '0', 'default', 'media/images/53a43568021531403270504.jpg', '2', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-20 13:21:44', null), ('286', '53a43cc15597e1403272385.jpg', '131012', 'default', null, '0', 'photo', 'media/images/53a43cc15597e1403272385.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-20 13:53:05', null), ('291', '53a48b82290471403292546.jpg', '60877', 'default', null, '0', 'user', 'media/images/53a48b82290471403292546.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-20 19:29:06', null), ('288', '53a43eda0e8911403272922.jpg', '104707', 'default', null, '0', 'content', 'media/images/53a43eda0e8911403272922.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-20 14:02:02', null), ('289', '53a48787efb041403291527.jpg', '193785', 'default', null, '0', 'content', 'media/images/53a48787efb041403291527.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-20 19:12:08', null), ('290', '53a487901c40b1403291536.jpg', '320126', 'default', null, '0', 'content', 'media/images/53a487901c40b1403291536.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-20 19:12:16', null), ('292', '53a5aa16aa8ce1403365910.jpg', '60877', 'default', null, '0', 'photo', 'media/images/53a5aa16aa8ce1403365910.jpg', '3', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-21 15:51:50', null), ('293', '53a5aaae5a75e1403366062.jpg', '72714', 'default', null, '0', 'user', 'media/images/53a5aaae5a75e1403366062.jpg', '3', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-21 15:54:22', null), ('294', '53a5aaee998571403366126.png', '67003', 'default', null, '0', 'user', 'media/images/53a5aaee998571403366126.png', '2', 'active', '0', 'image/png', '0', '0', '0', '2014-06-21 15:55:26', null), ('295', '53a5b14ad0fa21403367754.jpg', '23104', 'default', null, '0', 'user', 'media/images/53a5b14ad0fa21403367754.jpg', '4', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-21 18:22:35', null), ('296', '53a66d58ad5771403415896.jpg', '780831', 'default', null, '0', 'content', 'media/images/53a66d58ad5771403415896.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-22 07:44:57', null), ('297', '53a676d0de5481403418320.jpg', '777835', 'default', null, '0', 'content', 'media/images/53a676d0de5481403418320.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-22 08:25:21', null), ('298', '53a678879a3cd1403418759.jpg', '129257', 'default', null, '0', 'content', 'media/images/53a678879a3cd1403418759.jpg', '1', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-22 08:32:39', null), ('301', '53a6e7387cef81403447096.jpg', '131012', 'default', null, '0', 'content', 'media/images/53a6e7387cef81403447096.jpg', '3', 'active', '0', 'image/jpeg', '0', '0', '0', '2014-06-22 14:24:56', null);
COMMIT;

-- ----------------------------
--  Table structure for `m_product_categories`
-- ----------------------------
DROP TABLE IF EXISTS `m_product_categories`;
CREATE TABLE `m_product_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `m_product_categories`
-- ----------------------------
BEGIN;
INSERT INTO `m_product_categories` VALUES ('29', '8', '47'), ('32', '1', '47'), ('34', '3', '53'), ('35', '6', '53'), ('36', '7', '53'), ('37', '10', '53'), ('38', '4', '54'), ('39', '4', '58'), ('47', '12', '55'), ('48', '12', '30'), ('51', '2', '53');
COMMIT;

-- ----------------------------
--  Table structure for `m_product_options`
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
--  Table structure for `m_product_photo`
-- ----------------------------
DROP TABLE IF EXISTS `m_product_photo`;
CREATE TABLE `m_product_photo` (
  `product_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `m_product_photo`
-- ----------------------------
BEGIN;
INSERT INTO `m_product_photo` VALUES ('5', '//www.all-starshop.me\\media\\photos\\53786f28f2481.jpg', '7'), ('9', '//www.all-starshop.me\\media\\photos\\537893c907606.jpg', '8'), ('9', '//www.all-starshop.me\\media\\photos\\537893c919950.jpg', '9'), ('9', '//www.all-starshop.me\\media\\photos\\537893c922f98.jpg', '10'), ('10', '//www.all-starshop.me\\media\\photos\\5378ca587abc1.jpg', '11'), ('8', '//www.all-starshop.me\\media\\photos\\5378ca773b83f.jpg', '12'), ('7', '//www.all-starshop.me\\media\\photos\\5378ca8a9949d.jpg', '13'), ('6', '//www.all-starshop.me\\media\\photos\\5378caa1991ed.jpg', '14'), ('1', '//www.all-starshop.me\\media\\photos\\5378cf69a2109.jpg', '15'), ('1', '//www.all-starshop.me\\media\\photos\\5378cf69b4f12.jpg', '16'), ('2', '//www.all-starshop.me\\media\\photos\\5378cfa64ff23.jpg', '17'), ('3', '//www.all-starshop.me\\media\\photos\\5378cfeddc752.jpg', '18'), ('4', '//www.all-starshop.me\\media\\photos\\537afdf3be27e.jpg', '19'), ('4', '//www.all-starshop.me\\media\\photos\\537afdf733dd0.jpg', '20'), ('12', '//www.all-starshop.me\\media\\photos\\537b7fd8cc823.jpg', '22'), ('12', '//www.all-starshop.me\\media\\photos\\5380926b5e7f7.jpg', '23'), ('12', '//www.all-starshop.me\\media\\photos\\5380926bbc1d5.jpg', '24'), ('12', '//www.all-starshop.me\\media\\photos\\5380926be8b2b.jpg', '25');
COMMIT;

-- ----------------------------
--  Table structure for `m_products`
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
--  Records of `m_products`
-- ----------------------------
BEGIN;
INSERT INTO `m_products` VALUES ('1', '1', 'MN', 'active', '1', '1', '0', 'no', '10000.00', '2000.00', '1', '0', '1', '0', '1', '1', '1', 'neon', '1 ', '1 ', '1', '11', '2014-04-15 15:35:34', '2014-04-17 12:31:29', '0000-00-00 00:00:00'), ('2', '1', 'MN', 'active', '0', '0', '0', 'no', '2450000.00', '210000.00', '1', '0', 'aaaaaaaaaaaa', '0', '100', 'qqqqqqqqqqqqqqqqqq', '1', '2k4', ' aaaaaaaaaaaaa   ', '<p><span style=\"color: #808000;\">aaaaaaaaaaaaaaaaaaaaaaa</span></p>\r\n<p>bbbb<span style=\"color: #333399;\">bbbbbb cccccccccccc sdddddddddddd gggggg</span>gggg йцыжбэөөжауцуфцэжэ цужохлрхоаөббйабхароаө баохааужэнглшшэжуфужэжнглшгнэуцф фцэнжэж<span style=\"color: #993366;\">шнгэжуцуфэжэнэж</span> фцуэнжгэхжауөцб ццжуэжннэжэуцуфжуэолгоэж жэжншгшэжэужцэжншгш ццужэнгэжэуцужэнг<span style=\"color: #ff6600;\">ш йыбөараөаөы ыйыббөбөб ыбөбөыөцйжцф ыйөуөуыөу</span>ыөуыөыуцуцуц</p>\r\n<p>sfffffffffff d<span style=\"color: #008000;\">fffffffffffff, dfghdgsvafseuf</span>bwlukgfweiufgweil&nbsp;</p>\r\n<p>sdfdghd<strong>rghsgsgsgesgsegsegesgesgs</strong>egseg</p>\r\n<h1>sdgrtyjtrgefwetykutrewertjk</h1>\r\n<p>dg<em>aertruyreweqrtyui</em></p>\r\n<p>dgg<span style=\"color: #333399;\">htfhtfhsh</span>serhgsr</p>', '0', '0', '2014-05-11 13:55:28', '2014-05-11 13:44:00', '0000-00-00 00:00:00'), ('3', '1', 'MN', 'active', '1', '1', '0', 'no', '180000.00', '160000.00', '1', '0', 'aaaaaaaaaaaa', '0', '0', 'qqqqqqqqqqqqqqqqqq', '1', 'Nike', ' aaaaaaaaaaaaa ', ' aaaaaaaaaaaaaaaaaaaaaaa ', '0', '0', '2014-05-11 13:56:47', '2014-05-11 13:44:00', '0000-00-00 00:00:00'), ('4', '1', 'MN', 'active', '0', '1', '0', 'no', '300000.00', '280000.00', '1', '0', 'aaaaaaaaaa', '0', '10', '1', '1', 'Adizero rose 5', ' aaaaaaaaaaaaa ', ' aaaaaaaaaaaaaaaaaaaaaaa ', '0', '0', '2014-05-11 13:57:53', '2014-05-11 13:57:00', '0000-00-00 00:00:00'), ('5', '1', 'MN', 'inactive', '1', '1', '0', 'yes', '100000.00', '1000000000.00', '1', '0', '56757', '0', '10', '10', '1', 'Nike', '      ', '      ', '0', '0', '2014-05-13 00:43:48', '2014-05-16 19:05:00', '0000-00-00 00:00:00'), ('6', '1', 'MN', 'active', '0', '1', '0', 'yes', '160000.00', '150000.00', '1', '0', '1312', '0', '10', '2', '1', 'soccer shoes', ' 123123  ', ' 12321  ', '0', '0', '2014-05-16 17:40:41', '2014-05-16 17:40:00', '0000-00-00 00:00:00'), ('7', '1', 'MN', 'active', '0', '1', '0', 'yes', '340000.00', '320000.00', '1', '0', '1312', '0', '12312', '123', '1', 'pamgar nike', ' 1231  ', ' 12312  ', '0', '0', '2014-05-16 17:45:23', '2014-05-16 17:44:00', '0000-00-00 00:00:00'), ('8', '1', 'MN', 'inactive', '0', '1', '0', 'yes', '13123.00', '1000.00', '1', '0', '1321', '0', '32131', '1231', '1', 'ewrfwer', ' 1231 ', ' 1231 ', '0', '0', '2014-05-16 19:00:36', '2014-05-16 17:46:00', '0000-00-00 00:00:00'), ('9', '1', 'MN', 'inactive', '0', '1', '0', 'yes', '123.00', '123.00', '1', '0', '1231', '0', '123', '123', '1', '123', ' 123 ', ' 123 ', '0', '0', '2014-05-16 19:02:04', '2014-05-16 19:01:00', '0000-00-00 00:00:00'), ('10', '1', 'MN', 'active', '0', '1', '0', 'yes', '1500000.00', '1100000.00', '1', '0', '56757', '0', '657567', '5757', '1', 'солонгон nike', ' 5675  ', ' 567567  ', '0', '0', '2014-05-16 19:05:53', '2014-05-16 19:05:00', '0000-00-00 00:00:00'), ('12', '1', 'MN', 'inactive', '0', '0', '0', 'no', '0.00', '0.00', '2', '0', '', '0', '0', '', '1', '', ' ', '', '0', '0', '2014-05-21 00:14:44', '2014-04-28 05:05:00', '0000-00-00 00:00:00');
COMMIT;

-- ----------------------------
--  Table structure for `m_roles`
-- ----------------------------
DROP TABLE IF EXISTS `m_roles`;
CREATE TABLE `m_roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `m_roles`
-- ----------------------------
BEGIN;
INSERT INTO `m_roles` VALUES ('1', 'admin', 'site admin', '2014-02-03 01:08:44'), ('2', 'manager', 'site manager', '2014-02-03 01:08:58'), ('3', 'agent', 'real estate agent', '2014-02-03 01:09:13'), ('4', 'operator', 'site operator', '2014-02-03 01:09:26');
COMMIT;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Table structure for `m_user_roles`
-- ----------------------------
DROP TABLE IF EXISTS `m_user_roles`;
CREATE TABLE `m_user_roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `role_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `m_user_roles`
-- ----------------------------
BEGIN;
INSERT INTO `m_user_roles` VALUES ('1', '1', '1'), ('2', '1', '2'), ('3', '1', '3');
COMMIT;

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
  `photo_id` int(11) unsigned NOT NULL DEFAULT '0',
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `m_users`
-- ----------------------------
BEGIN;
INSERT INTO `m_users` VALUES ('1', '0', '0', '0', '0', 'd', 'active', 'guest', 'admin@az.mn', 'admin', 'c0e024d9200b5705bc4804722636378a', '', '0', 'Админ', 'Админы аав', 'Админы утас', 'male', '2014-02-03', 'Админы төрсөн хот', 'Админы амтдардаг хот', 'Админы амьдардаг хаяг', 'Админы төлбөр хийх хаяг', 'Админий хүлээн авах хаяг', 'www.adminiiwebsite.com', '0', 'asdf', 'adsfasdf', 'Asia/Ulaanbaatar', 'mn', 'default', '2014-06-22 10:02:40', '2014-02-03 04:58:45'), ('2', '0', '0', '0', '0', null, 'inactive', 'guest', 'a.saruulbat@gmail.com', 'saruulbat', '439f844be933c495d8c7556230270954', null, '294', 'Saruulbat', 'Amarsaikhan', '95824492', 'male', '1993-01-11', 'Улаанбаатар', 'Улаанбаатар', 'Монгол Улс, Улаанбаатар хот', '', '', '', '0', null, null, 'Asia/Ulaanbaatar', 'mn', 'default', '2014-06-21 15:55:27', null), ('3', '0', '0', '0', '0', null, 'inactive', 'guest', 'jeorj@jeorj.com', 'jeorj', '3f13836012890ca852745b67cb839e08', null, '293', 'jeorj', 'jeorj', '99999999', 'male', '1995-11-23', 'ub', 'ub', 'bzd', '2324234', '23243242', 'jeorj.com', '0', null, null, 'Asia/Ulaanbaatar', 'mn', 'default', '2014-06-21 15:54:22', null), ('4', '0', '0', '0', '0', null, 'inactive', 'guest', 'ulmbrsos@gmail.com', 'ulmaa', '2970b67ebb9af947da918fe637807809', null, '295', 'Ulambayar', 'Chuluunbaatar', '99949230', 'male', '1990-09-19', 'TOV', 'UB', '', '', '', '', '0', null, null, 'Asia/Ulaanbaatar', 'mn', 'default', '2014-06-21 18:22:35', null);
COMMIT;

-- ----------------------------
--  Table structure for `m_webs`
-- ----------------------------
DROP TABLE IF EXISTS `m_webs`;
CREATE TABLE `m_webs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `domain` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `template` varchar(10) NOT NULL DEFAULT 'flatlab',
  `st` varchar(20) NOT NULL DEFAULT 'active',
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `m_webs`
-- ----------------------------
BEGIN;
INSERT INTO `m_webs` VALUES ('1', 'a.b', 'дэлгүүр', 'prime', 'active', '2014-06-22 12:06:04'), ('3', 'time-shop', 'time shop', 'prime', 'active', '2014-06-22 11:23:44'), ('4', 'shops', 'дэлгүүр', 'prime', 'active', '2014-06-22 12:26:21');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
