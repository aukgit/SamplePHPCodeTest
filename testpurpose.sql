/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : testpurpose

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2014-08-30 07:00:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `person`
-- ----------------------------
DROP TABLE IF EXISTS `person`;
CREATE TABLE `person` (
  `PersonID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `DateOfBirth` date NOT NULL,
  PRIMARY KEY (`PersonID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of person
-- ----------------------------
INSERT INTO `person` VALUES ('1', 'FName', 'LName', '2014-08-21');
INSERT INTO `person` VALUES ('2', 'qdw', 'qwd', '0000-00-00');
INSERT INTO `person` VALUES ('3', 'qwd', 'wqd', '2014-08-14');
INSERT INTO `person` VALUES ('4', 'adwq', 'qwdqwd', '2014-08-20');
INSERT INTO `person` VALUES ('5', 'Fname 3', 'Lname 3', '2014-08-13');
