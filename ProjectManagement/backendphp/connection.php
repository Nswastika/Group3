<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="pm";

    $conn=new mysqli($servername,$username,$password,$dbname);
    $conn->mysqli_connect_error;

?>