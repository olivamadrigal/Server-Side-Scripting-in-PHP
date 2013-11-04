<?php

$ts = time();
$format = "Y-m-d H:i:s";

$res = date($format, $ts);
echo $res."####";
//$stamp = DateTime::createFromFormat($format, $ts);

//echo $stamp;

/*
$date = new DateTime();
$date->format($format);
$res = $date->setTimeStamp(time());
echo $res;
*/

//print from_unixtime(time); #=> 2013-01-11 12:03:28
//print unix_timestamp('2013-01-11 12:03:28'); #=> 1357873408


?>



