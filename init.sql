CREATE DATABASE test;

use test;

create table users(
    user_id int(5) primary key,
    username varchar2(45) not null,
    passwrd varchar2(45) not null,
    phone number(10) not null,
    type_of_user varchar2(20),
    user_handle varchar2(40) not null,
    date TIMESTAMP
);