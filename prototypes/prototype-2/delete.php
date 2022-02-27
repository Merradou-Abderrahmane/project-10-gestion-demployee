<?php
require_once 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sqlDeleteQuery = "DELETE FROM employees_db WHERE id = '$id' ";

    mysqli_query($conn, $sqlDeleteQuery);
    header('Location: index.php');
}
?>