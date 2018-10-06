create table orders
(
  id         int auto_increment,
  quantity   int not null,
  user_id    int null,
  product_id int null,
  constraint orders_id_uindex
  unique (id)
);

alter table orders
  add primary key (id);

create table products
(
  id           int auto_increment,
  price        float        null,
  product_name varchar(255) null,
  category_id  int          not null,
  constraint products_user_id_uindex
  unique (id)
);

alter table products
  add primary key (id);

create table users
(
  id       int auto_increment,
  `e-mail` varchar(255) not null,
  name     varchar(255) not null,
  balance  decimal      null,
  constraint `users_e-mail_uindex`
  unique (`e-mail`),
  constraint users_id_uindex
  unique (id)
);

alter table users
  add primary key (id);



*****************************************************************************

ELECT
  us.name, SUM(price*quantity) as Sum
FROM products as ps
JOIN orders as o ON o.product_id=ps.id
RIGHT JOIN users as us ON us.id=o.user_id
GROUP BY user_id;


SELECT
  SUM(price*quantity) as Sum
FROM products as ps
JOIN orders as o ON o.product_id=ps.id
JOIN users as us ON us.id=o.user_id
GROUP BY user_id;

UPDATE users as us
INNER JOIN (Select us.id, us.name, SUM(price*quantity) as sum
            From users as us
            JOIN orders as o ON o.user_id=us.id
            JOIN products as ps ON ps.id=o.user_id
            GROUP BY us.id, us.name) as t1
SET us.balance = (0.1*t1.sum)
WHERE us.id=t1.id;


Select us.id, us.name, o.product_id
From users as us
JOIN orders as o ON o.user_id=us.id




Select * from users
