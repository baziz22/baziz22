<?php

// Database params
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'b');
define('DB_PASS', '');
define('DB_NAME', 'mvc');

// APPROOT
define('APPROOT', dirname(dirname(__FILE__)));

// URLROOT (Dynamic Links)
define('URLROOT', '/m');

// SITENAME
define('SITENAME', 'Bader Binsunbil');

const BR = "<br />";
function pre_r(array $array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

//define('DB', $this->db->connect());
