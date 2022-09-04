<?php

// Database params
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'b');
define('DB_PASS', 'b');
define('DB_NAME', 'mvc');

// APPROOT
define('APPROOT', dirname(dirname(__FILE__)));
echo "ApprUUUUUoot: ", APPROOT;
// URLROOT (Dynamic Links)
define('URLROOT', '');
// SITENAME
define('SITENAME', 'Bader Binsunbil');

include_once APPROOT . 'views/includes/shortcut.php'
//const BR = "<br />";
/* function pre_r(array $array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
} */

//define('DB', $this->db->connect());
