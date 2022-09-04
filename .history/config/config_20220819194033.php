<?php

// Database params
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'b');
define('DB_PASS', 'b');
define('DB_NAME', 'mvc');

// APPROOT
define('APPROOT', dirname(dirname(__FILE__)));
echo "Approot: ", dirname(dirname(__FILE__));
// URLROOT (Dynamic Links)
define('URLROOT', '');
echo "URLROOT: "
// SITENAME
define('SITENAME', 'Bader Binsunbil');

//include_once ''
//const BR = "<br />";
/* function pre_r(array $array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
} */

//define('DB', $this->db->connect());
