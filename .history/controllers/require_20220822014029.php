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
require 'libs/PHPMailer/Exception.php';
require ''
require 'lips/PHPMailer/PHPMailer.php';
require 'lips/PHPMailer/SMTP.php';
require_once 'config/config.php';

require_once 'helpers/session_helper.php';





$app = new Core();