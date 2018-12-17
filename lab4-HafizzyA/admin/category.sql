/*
Navicat MySQL Data Transfer

Source Server         : local3306
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : shekam_virtual

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2018-03-31 10:18:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `UserType` char(1) NOT NULL DEFAULT '',
  `Description` varchar(255) NOT NULL DEFAULT '',
  `Interface` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`UserType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('A', 'Admin', 'admin.php');
INSERT INTO `category` VALUES ('P', 'Training provider', 'provider.php');
INSERT INTO `category` VALUES ('S', 'Student', 'student.php');
INSERT INTO `category` VALUES ('T', 'Trainer', 'trainer.php');
INSERT INTO `category` VALUES ('U', 'Users', 'users.php');
INSERT INTO `category` VALUES ('W', 'Staff', 'staff.php');
