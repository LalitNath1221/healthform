# Steps to execute 
<h1>1. create database "db_health" and table "users"</h1>
<h2>--CREATE DATABASE--</h2>
<pre>CREATE DATABASE db_health;</pre>
<pre>USE db_health;</pre>

<h2>--CREATE TABLE--</h2>
<pre>
CREATE TABLE users ( 
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    weight FLOAT NOT NULL,
    email VARCHAR(50) NOT NULL,
    helth-report VARCHAR(225)
);
</pre>