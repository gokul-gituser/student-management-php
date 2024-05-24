<?php

    $con = mysqli_connect("localhost","root","root","studentcrud",3309);

    if(!$con){
        die("Connection Failed". mysqli_connect_error());
    }
?>