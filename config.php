<?php
    require('vendor/autoload.php');
    // Define mysql server settings
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $dbName = "employees";
    $bucketUrl = "https://terraform-20201214143932231000000001.s3.amazonaws.com/";
    // Create a new mysqli connection. Remember to enable this in php.ini !!
    $conn = new mysqli($serverName, $username, $password, $dbName);