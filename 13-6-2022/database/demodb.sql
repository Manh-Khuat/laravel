drop database if exists `demodb`;
create database `demodb` default character set utf8 COLLATE utf8_unicode_ci;

use demodb;

create table category(
    id int(11) not null,
    name varchar(100) COLLATE utf8_unicode_520_nopad_ci not null,
    status tinyint(4) not null default 1,
    created_at date default null,
    primary key(id)
) ENGINE=InnoDB default CHARSET=utf8 COLLATE=utf8_unicode_520_nopad_ci;

insert into category values
(1, 'Áo', 1, null),
(2, 'Quần', 1, null);

alter table category
modify id int(11) not null AUTO_INCREMENT,AUTO_INCREMENT=3;

create table product(
    id int(11) not null,
    name varchar(150) COLLATE utf8_unicode_520_nopad_ci not null,
    image varchar(200) COLLATE utf8_unicode_520_nopad_ci not null,
    price int(11) not null,
    category_id int(11) not null ,
    primary key (id),
    FOREIGN KEY (category_id) REFERENCES category(id)
) ENGINE=InnoDB default CHARSET=utf8 COLLATE=utf8_unicode_520_nopad_ci;

insert into product values
(1, 'Áo sơ mi nam', '', 0,1);

alter table product
modify id int(11) not null AUTO_INCREMENT,AUTO_INCREMENT=3;
