<?php

// Use an autoloader

/* function autoloader($class){
    require "libs/$class.php";
} */
// Require libraries from folder libraries
require 'libs/Core.php';
require 'libs/Controller.php';
require 'libs/View.php';
require 'libs/Model.php';
require 'libs/Session.php';
require 'libs/Database.php';
require 'libs/PHPMailer'
require_once 'config/config.php';

require_once 'helpers/session_helper.php';

require 'lips/PHPMailer/Exception.php';
require 'lips/PHPMailer/PHPMailer.php';
require 'lips/PHPMailer/SMTP.php';


$app = new Core();