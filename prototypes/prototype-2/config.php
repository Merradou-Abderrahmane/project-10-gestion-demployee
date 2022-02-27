<?php
$conn = mysqli_connect('localhost', 'test', 'test123', 'demo');

// check connection
if (!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>