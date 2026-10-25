CREATE DATABASE IF NOT EXISTS inventory_management CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE inventory_management;
CREATE TABLE IF NOT EXISTS products (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(150) NOT NULL,
 sku VARCHAR(60) NOT NULL UNIQUE,
 category VARCHAR(100) DEFAULT '',
 supplier VARCHAR(150) DEFAULT '',
 quantity INT NOT NULL DEFAULT 0,
 price DECIMAL(10,2) NOT NULL DEFAULT 0,
 reorder_level INT NOT NULL DEFAULT 5,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT IGNORE INTO products (name,sku,category,supplier,quantity,price,reorder_level) VALUES
('Wireless Mouse','ACC-001','Accessories','Tech Supply Co.',18,499.00,5),
('USB-C Cable','ACC-002','Accessories','Cable House',4,199.00,8),
('Notebook A4','STA-001','Stationery','Office Mart',32,65.00,10);
