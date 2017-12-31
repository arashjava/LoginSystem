create database ProjectShare;
use ProjectShare;
create table Users
(user_id int(6) auto_increment primary key,
  user_name varchar(50),
  user_email varchar(30),
  user_location varchar(50),
  user_pass varchar(30),
  user_gender varchar(1),
  user_phone varchar(15));
