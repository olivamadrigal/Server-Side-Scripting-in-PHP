<?php

# Controllers: poem controller
# Model: Featured
# CS174_hw3
# Created on 10/26/13.
# Copyright (c) 2013 Pedro A. Flores Prieto, Samira C. Oliva Madrigal

require_once(BASEURL.'/models/featured.php');

$ptr = new featured; //MODEL featured class ptr

class poem extends BaseController
{

        function controller($sessionVar);
        function drawView($view);

}

function controller($sessionVar)
{
        global $ptr;
        //call model functions
        $
        drawView($sessionVar);
}

function drawView($viewName)
{
     require_once('./views/{$viewName}.php');
     global $ptr;
     $viewPtr = new BaseView;

     $viewPtr->printHeader();
     //use ptr to call MODEL FUNCTIONS
     $viewPtr->printFooter();
}

?>
