<?php  
$conn = mysqli_connect('localhost', 'b', 'b');  
    if (! $conn) {  
die("Connection failed" . mysqli_connect_error());  
}  
    else {  
mysqli_select_db($conn, 'mvc');  
}  
?>  