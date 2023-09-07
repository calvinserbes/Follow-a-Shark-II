DROP DATABASE IF EXISTS FAS;

CREATE DATABASE FAS;
USE FAS;

DROP USER IF EXISTS calvin@'127.0.0.1';
CREATE USER calvin@'127.0.0.1' IDENTIFIED BY 'mdp';

GRANT ALL PRIVILEGES ON FAS.*to calvin@'127.0.0.1';


CREATE TABLE `product` (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  description MEDIUMTEXT,
  image TEXT,
  price FLOAT
);

-- QUIZ

CREATE TABLE 
