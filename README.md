# Steps to execute 
1. create database "db_health" and table "users"
--CREATE DATABASE--
CREATE DATABASE db_health;
USE db_health;

--CREATE TABLE--

CREATE TABLE users ( 
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    weight FLOAT NOT NULL,
    email VARCHAR(50) NOT NULL,
    helth-report VARCHAR(225)
);