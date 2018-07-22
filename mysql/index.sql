INSERT INTO users(email,fullname,address,password)
VALUE 
('Ngung1@gmail.com','chung2','chung2',1234567),
('Ngunhoang21@gmail.com','chreung22','chunqwg22',12behwo567),
('Nguyenhoang21@gmail.com','chung22','chung22',1234567);

UPDATE users
SET address='flora anh dao'
WHERE id=1;

UPDATE users
SET 
    address='tan binh',
    password='hoaha'
WHERE id=3;

UPDATE users
SET 
    address='tan binh',
    password='hoaha'
WHERE id=3
OR id=6


-- and
-- or
-- not like/like '%keyword' vi du %yahoo.com.vn
-- not in(1,2,3)
-- between min and max -> between 5 and 7


DELETE FROM users
WHERE email LIKE '%yahoo%';

SELECT * -- tat ca cac cot
FROM users

WHERE id>=1
AND id <=7

SELECT fullname,email,password
FROM users

WHERE id>=1
AND id <=7

INSERT INTO users_backup(email,fullname,address,password)
VALUE 
('Ngung1@yahoo.com','chung2','chung2',1234567);


INSERT INTO users(id,email,fullname,address,password)
SELECT id,email,fullname,address,password
FROM users_backup
WHERE id=7;

