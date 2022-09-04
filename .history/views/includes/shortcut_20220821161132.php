<?php
function pre_r(array $array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
const BR = "<br />";

function for_r($array){
    for($i = 0; $i < count($array); $i++) {
        echo "$array[$i] " ;
    }
    echo BR;
}
function redirect_to( $location = NULL ) {
    if ($location != NULL) {
        header("Location: {$location}");
        exit;
    }
}
// Redirect to another page with a message
// https://stackoverflow.com/questions/11988061/redirect-to-another-page-with-a-

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function if_isset($variable){
    if(isset($variable)) return $variable;
    else return '';
}
echo "shortcur.php included";