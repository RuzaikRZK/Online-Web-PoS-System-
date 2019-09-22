/*
Navicat MySQL Data Transfer

Source Server         : RZK Technology
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : pos_system

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-10-20 04:43:39
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `add_discount`
-- ----------------------------
DROP TABLE IF EXISTS `add_discount`;
CREATE TABLE `add_discount` (
  `discount_id` int(100) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(50) DEFAULT NULL,
  `discount` double(50,0) DEFAULT NULL,
  PRIMARY KEY (`discount_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of add_discount
-- ----------------------------

-- ----------------------------
-- Table structure for `add_employee`
-- ----------------------------
DROP TABLE IF EXISTS `add_employee`;
CREATE TABLE `add_employee` (
  `employee_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `national_id` varchar(50) DEFAULT NULL,
  `age` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact_number` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of add_employee
-- ----------------------------
INSERT INTO `add_employee` VALUES ('1', 'ruzai', '963200790V', '12', 'ruzaikmohomad@gmailcom', '0773875393');
INSERT INTO `add_employee` VALUES ('2', 'Ruzaik', '9221354', '3233', 'fdf@fdf', '017');
INSERT INTO `add_employee` VALUES ('3', 'fdfd', '9530fd', '3233', 'fd@fdd', '564');
INSERT INTO `add_employee` VALUES ('4', 'ruzaik', '96', '12', 'rruzaikmohomad@gmail.com', '077345434');

-- ----------------------------
-- Table structure for `add_new_category`
-- ----------------------------
DROP TABLE IF EXISTS `add_new_category`;
CREATE TABLE `add_new_category` (
  `category_id` int(100) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of add_new_category
-- ----------------------------
INSERT INTO `add_new_category` VALUES ('1', 'soap');
INSERT INTO `add_new_category` VALUES ('2', 'Toothpaste');
INSERT INTO `add_new_category` VALUES ('3', 'Noodless');

-- ----------------------------
-- Table structure for `add_new_customer`
-- ----------------------------
DROP TABLE IF EXISTS `add_new_customer`;
CREATE TABLE `add_new_customer` (
  `customer_id` int(100) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `adress_1` varchar(50) DEFAULT NULL,
  `adress_2` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `nic` varchar(15) DEFAULT NULL,
  `country` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of add_new_customer
-- ----------------------------
INSERT INTO `add_new_customer` VALUES ('5', 'ruzaik', 'mohomad', 'ruzaikmohomad@gmail.com', '07756784', 'kurur', 'matale', '', 'northwester', 'kurunagals', 'srilanka');
INSERT INTO `add_new_customer` VALUES ('6', 'ruzaik', 'mohomad', 'ruzaikmohomad@gmail.com', '07756784', 'kurur', 'matale', '', 'northwester', 'kurunagals', 'srilanka');
INSERT INTO `add_new_customer` VALUES ('7', 'ruzaik', 'mohomad', 'ruzaikmohomad@gmail.com', '07756784', 'kurur', 'matale', '', 'northwester', 'kurunagals', 'srilanka');
INSERT INTO `add_new_customer` VALUES ('8', '13', 'fsdf', 'rushdi008@gmail.com', '0774475726', 'fsf', 'dsfsd', 'fsdf', 'dfsdf', '963200790V', 'srilanka');
INSERT INTO `add_new_customer` VALUES ('9', 'dissan', 'nayake', 'fd@fdd', '2456', 'fdkfd', 'fdf', 'jkuru', 'fdf', '54', 'srilanka');
INSERT INTO `add_new_customer` VALUES ('10', 'Gimhana', 'Dissanayake', 'Gimhana@123', '0711125', 'No 33', 'Uyandana', 'Kurunegala', 'wayaba', '0171', 'kfdfd');

-- ----------------------------
-- Table structure for `add_new_item`
-- ----------------------------
DROP TABLE IF EXISTS `add_new_item`;
CREATE TABLE `add_new_item` (
  `item_id` int(100) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(50) DEFAULT NULL,
  `category` varchar(10) DEFAULT NULL,
  `cost_price` double(20,0) DEFAULT NULL,
  `selling_price` double(20,0) DEFAULT NULL,
  `quantity` int(20) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3222 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of add_new_item
-- ----------------------------
INSERT INTO `add_new_item` VALUES ('3216', 'babay soap', 'soap', '13', '15', '10');
INSERT INTO `add_new_item` VALUES ('3217', 'Sunlight', 'soap', '12', '15', '50');
INSERT INTO `add_new_item` VALUES ('3220', 'Lux', 'Select Cat', '12', '15', '10');
INSERT INTO `add_new_item` VALUES ('3221', 'sunlight', 'soap', '50', '55', '12');

-- ----------------------------
-- Table structure for `add_new_supplier`
-- ----------------------------
DROP TABLE IF EXISTS `add_new_supplier`;
CREATE TABLE `add_new_supplier` (
  `supplier_id` int(100) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of add_new_supplier
-- ----------------------------
INSERT INTO `add_new_supplier` VALUES ('1', 'rzk', 'ruzaikmohomad@gmail.com', '0773875393');
INSERT INTO `add_new_supplier` VALUES ('2', '', '', '');
INSERT INTO `add_new_supplier` VALUES ('3', '', 'fds', '');
INSERT INTO `add_new_supplier` VALUES ('4', '', '', '');
INSERT INTO `add_new_supplier` VALUES ('5', 'asd', '2132', '077');
INSERT INTO `add_new_supplier` VALUES ('6', 'asd', '2132', '077');
INSERT INTO `add_new_supplier` VALUES ('7', '', '', '');
INSERT INTO `add_new_supplier` VALUES ('8', '', 'mohomadruzaik@gmail.com', '');
INSERT INTO `add_new_supplier` VALUES ('9', 'ruzaik', 'ruzaikmohomad@gmail.com', '0773875393');
INSERT INTO `add_new_supplier` VALUES ('10', 'ram', 'fd@fdf', '015456');

-- ----------------------------
-- Table structure for `delete_customer`
-- ----------------------------
DROP TABLE IF EXISTS `delete_customer`;
CREATE TABLE `delete_customer` (
  `del_cus_id` int(100) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `nic` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`del_cus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of delete_customer
-- ----------------------------

-- ----------------------------
-- Table structure for `login`
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `activation_code` int(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('2', 'ruzaik', 'ae5515e371a599b8d82b244212209283', 'rushdi008@gmail.com', '111');
INSERT INTO `login` VALUES ('3', 'rushdi', '3ef4fa59985a75266d1ac2ea6a573eac', 'mohomadruzaik@gmail.com', '914');
INSERT INTO `login` VALUES ('19', 'rzk', '3ef4fa59985a75266d1ac2ea6a573eac', 'ruzaikmohomad@gmail.com', null);

-- ----------------------------
-- Table structure for `offer`
-- ----------------------------
DROP TABLE IF EXISTS `offer`;
CREATE TABLE `offer` (
  `offer_id` int(100) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) DEFAULT NULL,
  `discount_percentage` double(50,0) DEFAULT NULL,
  `amount_description` double(50,0) DEFAULT NULL,
  PRIMARY KEY (`offer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of offer
-- ----------------------------

-- ----------------------------
-- Table structure for `receiving_log`
-- ----------------------------
DROP TABLE IF EXISTS `receiving_log`;
CREATE TABLE `receiving_log` (
  `receiving_log_id` int(100) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(50) DEFAULT NULL,
  `price` double(50,0) DEFAULT NULL,
  `grn_number` varchar(50) DEFAULT NULL,
  `discount` double(50,0) DEFAULT NULL,
  `cash` double(50,0) DEFAULT NULL,
  `quantity` int(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `net_paid_amount` double(50,0) DEFAULT NULL,
  PRIMARY KEY (`receiving_log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of receiving_log
-- ----------------------------

-- ----------------------------
-- Table structure for `sales_log`
-- ----------------------------
DROP TABLE IF EXISTS `sales_log`;
CREATE TABLE `sales_log` (
  `sales_log_id` int(50) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(50) DEFAULT NULL,
  `price` double(50,0) DEFAULT NULL,
  `discount` double(50,0) DEFAULT NULL,
  `cash` double(50,0) DEFAULT NULL,
  `invoice_number` varchar(50) DEFAULT NULL,
  `quantity` int(50) DEFAULT NULL,
  `selling_date` varchar(20) DEFAULT NULL,
  `net_amount` double(50,0) DEFAULT NULL,
  PRIMARY KEY (`sales_log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sales_log
-- ----------------------------
INSERT INTO `sales_log` VALUES ('1', 'sunsilk', '12', '25', '20', 'IN00V', '3', '11/17/2017', '26');
INSERT INTO `sales_log` VALUES ('2', 'shampoo', '12', '12', '30', 'INV002', '3', '11/17/2017', '21');
INSERT INTO `sales_log` VALUES ('3', 'Cocacola', '200', '2', '500', 'INV003', '1', '11/17/2017', '200');
INSERT INTO `sales_log` VALUES ('4', 'sugar', '90', '2', '500', 'INV009', '2', '11/17/2017', '200');
INSERT INTO `sales_log` VALUES ('5', 'sugar', '9', '2', '200', 'INVO10', '3', '11/18/2017', '200');
INSERT INTO `sales_log` VALUES ('6', 'sunsil', '10', null, '100', 'INV002', '4', '11/17/2017', '234');
INSERT INTO `sales_log` VALUES ('7', 'signal', '23', null, '100', 'INV012', '2', '11/17/2017', '200');
INSERT INTO `sales_log` VALUES ('8', 'signal', '12', '34', '12', 'INVOO10', '12', '2017-02-18', '12');
INSERT INTO `sales_log` VALUES ('9', 'signal', '30', '14', '50', 'INVOO1', '10', '2017-09-17', '123');
