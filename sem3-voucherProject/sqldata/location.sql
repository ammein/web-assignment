/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : shekam_elearning

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2018-11-24 19:30:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for location
-- ----------------------------
DROP TABLE IF EXISTS `location`;
CREATE TABLE `location` (
  `locationid` int(11) NOT NULL,
  `locationname` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `poskode` varchar(8) DEFAULT NULL,
  `stateid` int(11) DEFAULT NULL,
  `countryid` int(11) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  PRIMARY KEY (`locationid`),
  KEY `countryid` (`countryid`) USING BTREE,
  CONSTRAINT `location_ibfk_1` FOREIGN KEY (`countryid`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of location
-- ----------------------------
INSERT INTO `location` VALUES ('0', 'UIA ITD LAB', null, null, null, null, null, null);
INSERT INTO `location` VALUES ('1', 'IWORLD', 'Megan Avenu 1', 'Jln Yap Kwan Seng', '50450', '10', '132', '20');
INSERT INTO `location` VALUES ('2', 'KTMB', 'JLN SULTAN IBRAHIM', 'KUALA LUMPUR', '54500', '10', '132', '20');
INSERT INTO `location` VALUES ('3', 'LAB 1 TECHNO RADA', 'Unit 3, First Floor, Block E', 'Bangunan Dato Paduka Lim Seng Kok Spg 624, Kg. Madewa, Jalan Tutong\r\n', 'BF1120', '101', '32', '12');
INSERT INTO `location` VALUES ('4', 'LAB 2 TECHNO RADA', 'Unit 3, First Floor, Block E', 'Bangunan Dato Paduka Lim Seng Kok Spg 624, Kg. Madewa, Jalan Tutong\r\n', 'BF1120', '101', '32', '6');
INSERT INTO `location` VALUES ('5', 'Info Trek', 'PJ', 'Bangunan Dato Paduka Lim Seng Kok Spg 624, Kg. Madewa, Jalan Tutong\r\n', 'BF1120', '101', '32', '6');
