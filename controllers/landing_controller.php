<?php

# Controllers: landing controller
# CS174_hw3
# Created on 10/26/13.
# Copyright (c) 2013 Pedro A. Flores Prieto, Samira C. Oliva Madrigal

include_once('./models/featured.class.php');
include_once('baseController.php');

$modelPtr = new featured; //MODEL featured class ptr

class landing extends baseController
{

   //------------------------------------
    function printHeader()
    {
	parent::printHeader();
    }

    //------------------------------------
    function printFooter()
    {   
        parent::printFooter();
    }

   //------------------------------------
   function drawView($view)
   {    
     require_once("./views/$view.php");
     global $modelPtr;
     $viewPtr = new landingView;
     $bVPtr = new BaseView; //BaseView obj ptr 
     $count = 0;
   
     while(true)
     { 
         $record = $modelPtr->getFeaturedPoem();  
     	 $bVPtr->printHeader(); 	
         $viewPtr->execute($record); //landingview will display poem
         $bVPtr->printFooter();
	 $modelPtr->timer();
 	 # record in dataBase every time a featured is selected	 
     }//_end_while

   }//_end_drawView

	
   //------------------------------------
    function controller($view)
    {
       $this->drawView($view);
    }



}//_end_Class








?>
