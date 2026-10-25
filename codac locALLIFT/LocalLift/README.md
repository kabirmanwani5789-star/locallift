# LocalLift

**Tagline:** Fueling the Future of Local Commerce  
**Project type:** Hyperlocal Business Discovery, Digital Marketing & Customer Engagement Platform

LocalLift is a PHP/MySQL web application concept for helping customers discover local businesses and helping shop owners present business information. The included project currently contains the public-facing homepage and an admin area, plus the database schema for business listings, owners, customers, offers, reviews, inquiries, and related data.

## Technology stack

- PHP
- MySQL / MariaDB
- HTML, CSS, JavaScript
- Bootstrap (where included by the existing pages)
- XAMPP for local development

## Folder structure

```text
LocalLift/
├── admin/              # Admin login and dashboard pages
├── assets/css/         # Stylesheets
├── assets/images/      # Project logo and images
├── config/             # Site constants and database connection
├── database/           # MySQL schema/data export
├── includes/           # Shared header, navbar and footer
└── index.php           # Main homepage
```

## Run locally with XAMPP

1. Install and start **Apache** and **MySQL** in XAMPP.
2. Copy the `LocalLift` folder into `xampp/htdocs/`.
3. Open phpMyAdmin at `http://localhost/phpmyadmin`.
4. Create a database named `locallift` (collation `utf8mb4_general_ci` is suitable).
5. Import `LocalLift/database/locallift.sql` into that database.
6. Check `LocalLift/config/database.php`. The included defaults are for a typical local XAMPP setup (`localhost`, user `root`, blank password). Update them if your local setup differs.
7. Visit `http://localhost/LocalLift/`.

## Admin login setup

For public-repository safety, the original admin seed row has been removed from the SQL export. The current project login code compares the password as plain text, so **do not use this authentication code on a public or production website**. For a local-only demo, create an admin row with a unique demo email and password in phpMyAdmin, then use those same values on the admin login page. Never use a real or reused password.

The admin table columns are `full_name`, `email`, `password`, and `created_at`; check the table definition in the SQL file before inserting a row.

## Current scope and limitations

- This package preserves the supplied source files and adds project documentation and a database export.
- PHP syntax was checked with `php -l`; all supplied PHP files passed syntax checks.
- A full runtime test against a live MySQL server has not been performed here.
- Before production use, review authentication, SQL injection protection, authorization checks, upload validation, error handling, and the missing/unfinished customer and shop-owner workflows.

## Suggested GitHub repository description

`LocalLift — a PHP and MySQL hyperlocal business discovery and customer engagement platform.`
