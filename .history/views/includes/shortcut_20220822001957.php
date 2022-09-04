<?php

const BR = "<br />";
function pre_r(array $array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
function for_r($array)
{
    for ($i = 0; $i < count($array); $i++) {
        echo "$array[$i] ";
    }
    echo BR;
}
function redirect_to($location = NULL)
{
    if ($location != NULL) {
        header("Location: {$location}");
        exit;
    }
}
// Redirect to another page with a message
// https://stackoverflow.com/questions/11988061/redirect-to-another-page-with-a-

// prevent against cross-site scripting or any other sort of injection of javascript, may be eval function or something like that.
function escape_injection($data){
    // htmlentities would be converted "less than and greater than signs of javascript tags" and render it as ASCII, ex-> &lt oan . It   rather that executed once you implement it.
    return htmlentities($data)
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function if_isset($variable)
{
    if (isset($variable)) return $variable;
    else return '';
}
//echo "shortcur.php included!";