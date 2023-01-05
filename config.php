<?php
    $con    = mysqli_connect("localhost", "root", "", "immobilier");
    if(mysqli_connect_errno()) {
        die("Connection failed: ". mysqli_connect_error());

    }
?>