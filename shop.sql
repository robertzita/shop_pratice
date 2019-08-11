drop database if exists shop;
create database shop character set utf8 collate utf8_general_ci;
# c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < c:\xampp\htdocs\shop.sql
use shop;

create table category (
category_id int not null primary key auto_increment,
name varchar (100) not null
)engine=innodb;


create table product (
product_id int not null primary key auto_increment,
name varchar (100) not null,
description varchar (255) not null,
price decimal (7,2) not null,
category int
)engine=innodb;



insert into category (category_id,name) values (null,'Phones'),(null,'Laptops'),(null,'Monitors');


insert into product (product_id,name,description,price,category) values 
(null,'Iphone 6','Description iphone 6',1300.5,1),
(null,'Iphone 7','Description iphone 7',2300.5,1),
(null,'Iphone X','Description iphone X',5300,1),
(null,'Macbook Air','Description macbook_air',6300,2),
(null,'Macbook Pro','Description macbook_pro',9300,2),
(null,'DELL 24v536','Description dell_24v536',1505.6,3),
(null,'ACER 27v536','Description acer_27v536',1905.6,3);

alter table product add foreign key (category) references category (category_id);