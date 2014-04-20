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
  `content` varchar(255) DEFAULT NULL,
  `newsids` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_reply
-- ----------------------------
INSERT INTO `wx_reply` VALUES ('1', 'lgh', null);
INSERT INTO `wx_reply` VALUES ('2', 'llgh', null);
INSERT INTO `wx_reply` VALUES ('3', '刘各欢', null);
INSERT INTO `wx_reply` VALUES ('4', 'sh', null);
INSERT INTO `wx_reply` VALUES ('5', null, '1,2');
