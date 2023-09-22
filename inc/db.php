<?php 


    $servername ="localhost";
    $username ="root";
    $password ="";
    $dbname ="crud_php_mysql2";


    // creat connection  
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn)
    {
        die("Connection Faiild : " . mysqli_connect_error());
    }

