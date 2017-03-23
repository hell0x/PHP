CREATE DATABASE php_manual;
USE php_manual;
CREATE TABLE `index`(
	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`title` varchar(256) NOT NULL,
	`link` varchar(256) NOT NULL
)ENGINE = MyISAM DEFAULT CHARSET = utf8;
insert into mysql.user(Host, User, Password) Values("%", "php_manual_user", "php_manual_pass");
flush privileges;
grant all privileges on php_manual.* to php_manual_user@"%" identified by "php_manual_pass";
flush privileges;