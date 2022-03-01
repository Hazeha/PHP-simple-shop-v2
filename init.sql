CREATE DATABASE db_bobshop;
USE db_bobshop;

CREATE TABLE products(
                         id int auto_increment,
                         name varchar(255) not null,
                         description varchar(255) not null,
                         img varchar(255),
                         price float NOT NULL,
                         PRIMARY KEY (id)
);

INSERT INTO Products (name, description, img, price) values
('1M Years of Sub', '10 Ref Included . 10 Gifts Included . 10 Megz Included . Mail Support', 'bob.jpg', 5.99),
('10M Days of Sub', '10 Ref Included . 10 Gifts Included . 10 Megz Included . Mail Support', 'bob2.jpg', 50.9),
('Coming Soon', '10 Ref Included . 10 Gifts Included . 10 Megz Included . Mail Support', 'bob5.jpg', 99.99)
