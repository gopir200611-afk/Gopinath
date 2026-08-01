CREATE DATABASE sk_gopi_vfx;

USE  sk_gopi_vfx;

CREATE TABLE orders(

id INT AUTO_INCREMENT PRIMARY KEY,

name VARCHAR(100),

email VARCHAR(100),

phone VARCHAR(20),

service VARCHAR(100),

details TEXT,

file VARCHAR(255),

status VARCHAR(30) DEFAULT 'Pending',

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

<link rel="icon" href="favicon.ico" type="image/x-icon">