<?php
# Config:  Configuration File
# Model: Featured
# CS174_hw3
# Created on 10/26/13.
# Copyright (c) 2013 Pedro A. Flores Prieto, Samira C. Oliva Madrigal

    // dababase connection info
    $host_name = "localhost";
    $admin_name = "root";
    $admin_passwd = "rosso99";
    
    //base URL for the website
    define("BASEURL", 'http://localhost/CS173_Hw3');

    // site name to put on title bar
    define("SITENAME", "Looney Limericks");

    define("qDATABASE", "POEMS_DB");
    $tableName = "poems";
    $dbName = "POEMS_DB";
    
    $db_connect = mysqli_connect("$host_name", "$admin_name", "$admin_passwd", qDATABASE);
    $db_connect_insert = mysqli_connect($host_name, $admin_name, $admin_passwd, $dbName);

?>

