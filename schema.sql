CREATE DATABASE social_app;

USE social_app;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT
);

INSERT INTO categories (name, description) VALUES ('Category 1', 'Description for category 1');
INSERT INTO categories (name, description) VALUES ('Category 2', 'Description for category 2');
INSERT INTO categories (name, description) VALUES ('Category 3', 'Description for category 3');
