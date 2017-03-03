CREATE DATABASE `category` DEFAULT CHARSET utf8;

USE `category`;

CREATE TABLE `category` (
	`id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`pid` INT(11) NOT NULL COMMENT '父id',
	`category` VARCHAR(255) NOT NULL COMMENT '分类名称',
	`orderid` INT(11) NOT NULL DEFAULT '0' COMMENT '排序id',
	PRIMARY KEY (`id`)
)ENGINE=INNODB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ------------------------------
-- -------插入数据-------------
-- ------------------------------
INSERT INTO `category` VALUES ('1', '0', '中国', '0');
INSERT INTO `category` VALUES ('2', '1', '河北', '0');
INSERT INTO `category` VALUES ('3', '1', '山西', '0');
INSERT INTO `category` VALUES ('4', '2', '石家庄', '0');
INSERT INTO `category` VALUES ('5', '2', '邯郸', '0');
INSERT INTO `category` VALUES ('6', '3', '太原', '0');
INSERT INTO `category` VALUES ('7', '3', '大同', '0');
INSERT INTO `category` VALUES ('8', '4', '桥东', '0');
INSERT INTO `category` VALUES ('9', '4', '桥西', '0');
INSERT INTO `category` VALUES ('10', '5', '邯山', '0');
INSERT INTO `category` VALUES ('11', '5', '丛台', '0');
INSERT INTO `category` VALUES ('12', '6', '小店', '0');
INSERT INTO `category` VALUES ('13', '6', '迎泽', '0');
INSERT INTO `category` VALUES ('14', '7', '南郊', '0');
INSERT INTO `category` VALUES ('15', '7', '新荣', '0');