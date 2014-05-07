/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : jcd

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2014-04-20 13:54:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `news_reply`
-- ----------------------------
DROP TABLE IF EXISTS `news_reply`;
CREATE TABLE `news_reply` (
  `id` int(10) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `PicUrl` varchar(255) DEFAULT NULL,
  `Url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news_reply
-- ----------------------------
INSERT INTO `news_reply` VALUES ('1', '多图文1标题', '', 'http://discuz.comli.com/weixin/weather/icon/cartoon.jpg', 'http://m.cnblogs.com/?u=txw1958');
INSERT INTO `news_reply` VALUES ('2', '多图文1标题', '', 'http://discuz.comli.com/weixin/weather/icon/cartoon.jpg', 'http://m.cnblogs.com/?u=txw1958');
INSERT INTO `news_reply` VALUES ('6', '相关法律法规', 'P2P借贷的相关法律法规', 'http://www.jinchidai.com/themes/soonmes/images/logo.png', 'http://m.jinchidai.com/html/flfg.html');

-- ----------------------------
-- Table structure for `tb_msite`
-- ----------------------------
DROP TABLE IF EXISTS `tb_msite`;
CREATE TABLE `tb_msite` (
  `id` int(11) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `bigimg` varchar(255) DEFAULT NULL,
  `htmlcontent` varchar(255) DEFAULT NULL,
  `txtcontent` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_msite
-- ----------------------------

-- ----------------------------
-- Table structure for `wx_reply`
-- ----------------------------
DROP TABLE IF EXISTS `wx_reply`;
CREATE TABLE `wx_reply` (
  `id` varchar(11) NOT NULL,
  `content` varchar(399) DEFAULT NULL,
  `newsids` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_reply
-- ----------------------------
INSERT INTO `wx_reply` VALUES ('1', '金池e贷(www.jinchidai.com)是天津金池投资管理有限公司旗下全资独立品牌，成立于2012年9月。\r\n金池e贷作为天津本地首家专业级的网络借贷平台，本着诚信、尽责、专业的原则，主要为天津本地的个人消费贷款、小微型企业的融资提供专业化、快速、安全的服务，为创造本地就业、有效盘活民间闲置资金、解决小微型企业融资难等问题提供帮助。\r\n金池e贷拥有一支精通专业知识、互联网技术和政策法规的专业队伍，能为出借双方提供专业的经济信息服务咨询，能有效规避风险、规范运营，为天津本地的经济发展做出积极贡献', NULL),
INSERT INTO `wx_reply` VALUES ('2', NULL, '6');
INSERT INTO `wx_reply` VALUES ('5', null, '1,2');