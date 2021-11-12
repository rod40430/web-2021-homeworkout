<?php
    $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
    $userid = $_SESSION['id'];
    $sql = "select * from user where u_email = '$userid'";

    
?>