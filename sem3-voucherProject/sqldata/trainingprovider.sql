/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : shekam_elearning

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2018-11-25 00:02:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for trainingprovider
-- ----------------------------
DROP TABLE IF EXISTS `trainingprovider`;
CREATE TABLE `trainingprovider` (
  `TrainerProviderID` varchar(255) NOT NULL DEFAULT '',
  `Location` varchar(255) DEFAULT NULL,
  `TrainerProvidername` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`TrainerProviderID`),
  CONSTRAINT `trainingprovider_ibfk_1` FOREIGN KEY (`TrainerProviderID`) REFERENCES `tbluser` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of trainingprovider
-- ----------------------------
