<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- It allow the web publisher how the page could be handle by cashes -->
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="6; url=edit.html"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
    <link rel="stylesheet" href="<?php URLROOT; ?>public/css/style.css">
    <link rel="stylesheet" href="<?php URLROOT; ?>public/css/style_glass.css">
    <link rel="stylesheet" href="<?php URLROOT; ?>public/css/api.css">
    <link rel="stylesheet" href="<?php URLROOT; ?>public/css/lobby.css">
    <link rel="stylesheet" href="<?php URLROOT; ?>public/css/login.css">
    <!-- <link rel="stylesheet" href="<?php URLROOT; ?>public/css/style_login.css"> -->
    <link rel="stylesheet" href="<?php URLROOT; ?>public/css/section.css">
    <link rel="stylesheet" href="<?php URLROOT; ?>public/css/type_text.css">
    <link rel="stylesheet" href="<?php URLROOT; ?>public/css/about_website.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="<?php URLROOT; ?>public/css/footer.css">
    <link rel="stylesheet" href="<?php URLROOT; ?>public/css/solar_system.css">
    <link rel="stylesheet" href="<?php URLROOT; ?>public/css/slides.css">
    <link rel="stylesheet" href="<?php URLROOT; ?>public/css/slider.css">
    <link rel="stylesheet" href="<?php URLROOT; ?>public/css/my-project.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/kute.js@2.1.2/dist/kute.min.js"></script>
    <script src="<?php URLROOT; ?>public/js/script.js"></script>
    <script src="<?php URLROOT; ?>public/js/solar_system.js"></script>
    <script src="<?php URLROOT; ?>public/js/slider.js" defer></script>

    <?php
    if (isset($this->js)) {
        foreach ($this->js as $js) {
            echo '<script src="' . URLROOT . 'views/' . $js . '"></script>';
        }
    }
    ?>
    <title><?php echo SITENAME; ?></title>

<body>