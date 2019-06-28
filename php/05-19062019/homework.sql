-- CREATE DATABASE aptech_php_18_thiennv;
-- CREATE TABLE aptech_php_18_thiennv.users(
-- 	Id int,
--     Name varchar(50),
--     Email varchar(255),
--     Phone varchar(12)
-- );
-- INSERT INTO aptech_php_18_thiennv.users (Id, Name, Email, Phone)
-- VALUE (1,'Thien','vietthien211@gmail.com','0989080124');

-- SELECT * FROM aptech_php_18_thiennv.users;

-- DROP DATABASE aptech_php_18_thiennv;

-- CREATE DATABASE aptech_php_18_thiennv;
-- CREATE TABLE aptech_php_18_thiennv.users(
-- 	id int,
--     last_name varchar(255),
--     first_name varchar(255),
--     email varchar(255) unique,
--     created_at datetime,
--     modified_at datetime,
--     deleted_at datetime
-- );

-- ALTER TABLE aptech_php_18_thiennv.users ADD dob date;
-- ALTER TABLE aptech_php_18_thiennv.users DROP COLUMN dob;
-- DROP DATABASE aptech_php_18_thiennv;

-- CREATE DATABASE aptech_php_18_thiennv;
-- CREATE TABLE aptech_php_18_thiennv.apUser(
-- 	uId int,
--     uLastName varchar(255),
--     uFristName varchar(255),
--     uEmail varchar(255) unique,
--     uRole int,
--     uState int,
--     uCreatedDate datetime,
--     uModifiedDate datetime
-- );

-- INSERT INTO aptech_php_18_thiennv.apUser(uId,uLastName,uFristName,uEmail,uRole,uState,uCreatedDate)
-- VALUES 
-- 	(1, 'Nam', 'Nguyen', 'namnh.website@gmail.com', 1, 1, NOW()),
--     (2, 'John', 'Cenna', 'cenna.john@hotmail.com', 2, 1, NOW()),
--     (3, 'Henry', 'Tran', 'tranhe@resolutioninc.com', 2, 1, NOW()),
--     (4, 'Christiaan', 'Hunter', 'ch.pageworth@pageworth.com', 1, 1, NOW()),
--     (5, 'Vicky', 'Nguyen', 'vicky06@gmail.com', 2, 1, NOW());

-- SELECT * FROM aptech_php_18_thiennv.apUser;
-- SELECT uLastName FROM aptech_php_18_thiennv.apUser;
-- SELECT DISTINCT uRole FROM aptech_php_18_thiennv.apUser;
-- SELECT * FROM aptech_php_18_thiennv.apUser LIMIT 3;
-- SELECT * FROM aptech_php_18_thiennv.apUser WHERE uRole = 1 and uState = 1;

-- UPDATE aptech_php_18_thiennv.apUser SET uState = -1 WHERE uId = 4;
-- DELETE FROM aptech_php_18_thiennv.apUser WHERE uId = 5;

-- ALTER TABLE aptech_php_18_thiennv.apUser ADD PRIMARY KEY (uId);
-- ALTER TABLE aptech_php_18_thiennv.apUser MODIFY COLUMN uId int NOT NULL AUTO_INCREMENT;
-- INSERT INTO aptech_php_18_thiennv.apUser (uLastName,uFristName,uEmail,uRole,uState,uCreatedDate)
-- VALUES ('Anna', 'Christopher', 'annateacher@yahoo.com', 2, 1, NOW());

-- CREATE TABLE aptech_php_18_thiennv.apRole (
-- 	rId int not null auto_increment primary key,
--     rTitle varchar(255) not null unique,
--     rState int default 1
-- );

-- INSERT INTO aptech_php_18_thiennv.apRole(rTitle)
-- VALUES ('Administrator'), ('Copywriter');

-- SELECT * FROM aptech_php_18_thiennv.apRole;

CREATE TABLE aptech_php_18_thiennv.posts
(
id INT PRIMARY KEY AUTO_INCREMENT,
title varchar(255)
);

INSERT INTO aptech_php_18_thiennv.posts(title)
VALUES ('Bai viet 1'), ('Bai viet 2'), ('Bai viet 3'), ('Bai viet 4'), ('Bai viet 5');

SELECT * FROM aptech_php_18_thiennv.posts;

CREATE TABLE aptech_php_18_thiennv.categories
(
id int primary key auto_increment,
name varchar(255)
);

INSERT INTO aptech_php_18_thiennv.categories(name)
VALUES ('PHP_16'), ('PHP_17'), ('PHP_18');

SELECT * FROM aptech_php_18_thiennv.categories;

CREATE TABLE aptech_php_18_thiennv.category_post
(
id int primary key auto_increment,
post_id int,
category_id int,
unique(category_id, post_id),
foreign key (post_id) references posts(id),
foreign key (category_id) references categories(id)
);

SELECT * FROM aptech_php_18_thiennv.category_post;

INSERT INTO aptech_php_18_thiennv.category_post (post_id,category_id)
VALUES (1,1), (1,2),(2,1),(1,3),(2,2);

SELECT aptech_php_18_thiennv.posts.title, aptech_php_18_thiennv.categories.name FROM aptech_php_18_thiennv.posts INNER JOIN aptech_php_18_thiennv.category_post ON aptech_php_18_thiennv.posts.id = aptech_php_18_thiennv.category_post.post_id
INNER JOIN aptech_php_18_thiennv.categories ON aptech_php_18_thiennv.category_post.category_id = aptech_php_18_thiennv.categories.id
WHERE aptech_php_18_thiennv.category_post.post_id = 2;

