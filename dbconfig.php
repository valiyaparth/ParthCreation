<?php

    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "ParthCreation";

    $conn =  mysqli_connect($servername, $username, $password, $dbname);

    if($conn){
      echo "Connection ok";
    }
    else{
        echo "Failed";
    }

?>