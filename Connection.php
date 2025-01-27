<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db_name = "ems_project";

    $con = mysqli_connect($host,$user,$password,$db_name);

    if (mysqli_connect_error()) {
        die("Failed To Connect My Sql Database.".mysqli_connect_error());
    }

?>