# StockWise — Inventory & Supply Chain Management

A lightweight PHP/MySQL inventory management demo for tracking products, stock quantity, suppliers, unit prices and reorder thresholds.

## Features
- Add, edit and delete products
- Search by product name, SKU or category
- Dashboard metrics: product count, total units, stock value and low-stock count
- Low-stock status based on a configurable reorder level
- Prepared SQL statements for product write/search operations
- Sample products loaded from the SQL seed file

## Technology
PHP 8+, MySQL/MariaDB, HTML, CSS, JavaScript-free responsive interface.

## Run locally with XAMPP
1. Copy the `InventoryManagement` folder to `C:\xampp\htdocs\`.
2. Start Apache and MySQL in XAMPP.
3. Open phpMyAdmin and import `database/inventory.sql` (it creates the `inventory_management` database).
4. Check `config.php`; default XAMPP credentials are `root` with an empty password.
5. Open `http://localhost/InventoryManagement/`.

## Notes
This is a learning/demo project, not a production-ready system. It does not include authentication, audit logging, CSRF protection or purchase-order workflows. Add these before real business use.
