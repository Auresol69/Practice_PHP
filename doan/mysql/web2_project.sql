CREATE DATABASE if NOT EXISTS web2_project;
use web2_project;

create Table if not EXISTS user_account(
    id int AUTO_INCREMENT PRIMARY KEY,
    username varchar(50) not NULL UNIQUE,
    password varchar(255) not NULL,
    email varchar(100) UNIQUE,
    name varchar(50),
    phone_number varchar(15) UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

create Table if not exists product(
    id int AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50)
);