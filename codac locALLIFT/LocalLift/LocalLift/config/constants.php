<?php
/*
|--------------------------------------------------------------------------
| LocalLift Configuration File
|--------------------------------------------------------------------------
| Author : Kabir Team
| Project : LocalLift
| Version : 1.0
|--------------------------------------------------------------------------
*/

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/* ==============================
   Website Information
================================= */

define('SITE_NAME', 'LocalLift');
define('SITE_TAGLINE', 'Fueling the Future of Local Commerce');
define('SITE_VERSION', '1.0');

/* ==============================
   Base URL
================================= */

define('BASE_URL', 'http://localhost/LocalLift/');

/* ==============================
   Timezone
================================= */

date_default_timezone_set('Asia/Kolkata');

/* ==============================
   Default Image
================================= */

define('DEFAULT_SHOP_IMAGE', BASE_URL . 'assets/images/default-shop.png');

/* ==============================
   User Roles
================================= */

define('ROLE_ADMIN', 'admin');
define('ROLE_SHOP_OWNER', 'shop_owner');
define('ROLE_CUSTOMER', 'customer');

/* ==============================
   Security
================================= */

define('PASSWORD_COST', 12);

/* ==============================
   Pagination
================================= */

define('ITEMS_PER_PAGE', 10);