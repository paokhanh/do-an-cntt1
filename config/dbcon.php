<?php
    $host="localhost";
    $username= "root";
    $password="";
    $database="do_an";

    $conn=mysqli_connect($host, $username, $password, $database);
    mysqli_set_charset($conn,'utf8');
    //check database
    if(!$conn)
    {
        die("Connection Faild ". mysqli_connect_errno());
        echo "Something Wrong";
    }
?>