<?php

# Model:  baseModel.class.php controller "landing controller"
# CS174_hw3
# Created on 10/26/13.
# Copyright (c) 2013 Pedro A. Flores Prieto, Samira C. Oliva Madrigal
# Assignment: Only model may access database and provide data to
# controllers. Controllers request information from models.
    

    require_once('./config/config.php');

abstract class baseModel {

     abstract function insertRecord( $timeStamp, $title, $content, $author, $star);
     abstract function executeQuery($query);   

 }

?>

