CREATE TABLE `info` (
`id` int(10) NOT NULL AUTO_INCREMENT,  
`name` char(20) DEFAULT NULL,  
`birthday` datetime DEFAULT NULL,  
PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into info(name,birthday) values ('sam','1990-01-01');
insert into info(name,birthday) values ('lee','1980-01-01');
insert into info(name,birthday) values ('john','1985-01-01');

#1
select name,
case
	when birthday < '1981' then 'old'
	when birthday > '1988' then 'young'
	else 'person' end year
from info;