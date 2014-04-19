/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : jcd

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2014-04-19 12:25:50
*/

SET FOREIGN_KEY_CHECKS=0;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_msite
-- ----------------------------

-- ----------------------------
-- Table structure for `wx_reply`
-- ----------------------------
DROP TABLE IF EXISTS `wx_reply`;
CREATE TABLE `wx_reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_reply
-- ----------------------------
INSERT INTO `wx_reply` VALUES ('1', 'lgh');
INSERT INTO `wx_reply` VALUES ('2', 'llgh');
INSERT INTO `wx_reply` VALUES ('3', '刘各欢');
INSERT INTO `wx_reply` VALUES ('4', 'sh');
