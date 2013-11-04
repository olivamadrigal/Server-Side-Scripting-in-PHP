<?php

# Views: base view
# CS174_hw3
# Created on 10/26/13.
# Copyright (c) 2013 Pedro A. Flores Prieto, Samira C. Oliva Madrigal

    // this class defines the basic 
    require_once('./config/config.php');

class BaseView {

private $header = <<< HEADER
<!DOCTYPE html>
<html>
<head>
    <title>Looney Limericks</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="author" content="Copyrigth 2013 Pedro A. Flores Prieto, Samira C. Oliva Madrigal"/>
    <meta name="description" content="LooneyLimericks.com" />
    <meta http-equiv="keywords" content=""/>
    <meta name="robots" content="NOINDEX, NOFOLLOW"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="icon" type="image/png" href="/CS174_Hw3/css/logo.png"/>
    <link rel="stylesheet" type="text/css" href="http://localhost/CS174_Hw3/css/style.css" media="screen"/>
</head>       
<body>
<br>        
HEADER;

private $footer = <<< FOOTER
<br /><br /><br /><br />
<br /><br /><br /><br />
<br /><br /><br />
<div align="center">
<h6>&#169;&nbsp;2013&nbsp; Pedro A. Flores Prieto & Samira C. Oliva Madrigal</h6>
</div>
</body>
</html>
FOOTER;

function printHeader() 
{
    echo $this->header;
}

function printFooter() 
{
     echo $this->footer;
}

}

?>
