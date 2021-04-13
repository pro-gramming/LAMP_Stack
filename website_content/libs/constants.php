<?php
/*
 * @author Shahrukh Khan
 * @website http://www.theDockerguy.in
 * @facebook https://www.facebook.com/TheDockerguy7
 * @twitter https://twitter.com/theDockerguy7
 * @googleplus https://plus.google.com/+theDockerguyIn
 */

// dont add a trailing / at the end
define('HTTP_SERVER', 'http://localhost');
// add slash / at the end
define('SITE_DIR', '/usr/local/apache2/htdocs/simple-website/');

// database prefix if you use
define('DB_PREFIX', 'mp_');

define('DB_DRIVER', 'mysql');
define('DB_HOST', 'mariadb');
define('DB_HOST_USERNAME', 'root');
define('DB_HOST_PASSWORD', '1234');
define('DB_DATABASE', 'simple-website');

define('SITE_NAME', 'Simple Website');

// define database tables
define('TABLE_PAGES', DB_PREFIX.'pages');
define('TABLE_TAGLINE', DB_PREFIX.'tagline');
?>