<?php

# Controllers: base.class.php controller "landing controller"
# CS174_hw3
# Created on 10/26/13.
# Copyright (c) 2013 Pedro A. Flores Prieto, Samira C. Oliva Madrigal

require_once('./config/config.php');

abstract class baseController {

        abstract function controller($view);
	abstract function drawView($view);
        

}

?>

