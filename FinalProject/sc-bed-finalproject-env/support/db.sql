CREATE DATABASE IF NOT EXISTS kahuna;

USE kahuna;

CREATE TABLE IF NOT EXISTS Product(
    id                  INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    serial              VARCHAR(255) NOT NULL,
    name                VARCHAR(255) NOT NULL,
    warrantyLength      INT(11) NOT NULL
);