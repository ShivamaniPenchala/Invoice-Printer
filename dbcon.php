<?php
 $serverName = "localhost";
 $userName = "root";
 $password = "";
 $dbName = "invoice";

 $conn = mysqli_connect($serverName,$userName,$password,$dbName);
    if(mysqli_connect_errno()) echo "db not connected";
?>