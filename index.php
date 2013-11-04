<?php

# index.php
# CS174_hw3
# Created on 10/26/13.
# Copyright (c) 2013 Pedro A. Flores Prieto, Samira C. Oliva Madrigal


session_start();
include_once("./config/config.php");

$controllers_available= array('landing', 'upload', 'single_poem');
$controller = ""; // will contain the controller that will call the proper view

//Determine the Controller to decide what view to draw
if (isset($_GET['c']) && in_array($_GET['c'], $controllers_available))
{  
   $pivot = strtolower($_GET['c']);
   $_SESSION['view'] = $_GET['c']; 
   switch(strtolower($pivot)) {
        case "landing_controller":
            include_once("./controllers/landing_controller.php");
	    $ctrl = new landing; //obj
	    $ctrl->controller($_SESSION['view']);            
            break;
        
	case "upload":
	   include_once("./controllers/upload.php");
           $ctrl = new upload; //obj
           $ctrl->controller($_SESSION['view']);
	   break;

        case "single_poem":
	    include_once("./controllers/single_poem.php");
	    $ctrl = new singlePoem; //obj
            $ctrl->controller($_SESSION['view']);
            break;

        default:
            include_once("./controllers/landing_controller.php");
            $ctrl = new landing; //obj
            $ctrl->controller($_SESSION['view']);

    }//_end_switch

}//_end_if
else{	
      $_GET['c'] = "landing";
      $_SESSION['view'] = $_GET['c'];
      include_once("./controllers/landing_controller.php");
      $ctrl = new landing; //obj
      $ctrl->controller($_SESSION['view']);
}





?> 

