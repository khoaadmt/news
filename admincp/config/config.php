<?php

    $mysqli = new mysqli("localhost","root","","newsdb");

    // Check connection
    if ($mysqli -> connect_errno) {
    echo "Kết nối MySQLi thất bại " . $mysqli -> connect_error;
    exit();
    }
?>