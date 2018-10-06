SELECT
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
