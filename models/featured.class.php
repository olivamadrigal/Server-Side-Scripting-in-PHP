<?php 

# Model: Featured
# CS174_hw3
# Created on 10/26/13.
# Copyright (c) 2013 Pedro A. Flores Prieto, Samira C. Oliva Madrigal

require_once('./config/config.php');
require_once('baseModel.class.php');//base model class
$dbName = qDATABASE;


class featured extends baseModel
{

//--------------------------------------------------
// sleeps for 10 minutes; used for displaying
// a featured poem every 10 minutes
function timer()
{  
    $seconds=2;
    //$seconds=600;//10 minutes
    sleep($seconds);
}//_timer
 	
//--------------------------------------------------
//Executes a query
function insertQuery($query)
{
        global $db_connect_insert;
        
	if(mysqli_query($db_connect_insert,$query))
        {
            echo "The query was processed successfully\n";
        }
        else
        {
           echo "Error with query: " . mysqli_error($db_connect_insert);
           echo "\n\n";
	}
} 

//--------------------------------------------------
// executes a query (essentially retrives and returns
// a random record)
function executeQuery($query)
{

	

}

//--------------------------------------------------
//Insert a record into database from FORM user input data
function insertRecord( $timeStamp, $title, $content, $author, $star)
{       
	//timeStamp is either passed into function or 
	//calculated in here:
	// set the default timezone to use. Available since PHP 5.1
	/*date_default_timezone_set('America/Los_Angeles');
	$ts = time();
	$format = "Y-m-d H:i:s";
	$resTime = date($format, $ts);
	*/  

   	$query = "INSERT INTO $tableName (timeStamp, title, content, authorName, startAverage)
	VALUES($timeStamp, $title, $content, $author, $star)"; 
 	insertQuery($query);  	
}

//--------------------------------------------------
// Get 10 most recent records
function getTenMostRecentRecords()
{
	

}

//--------------------------------------------------
// Get records with 10 highest user ratings
function getTenHighestRatedPoems()
{



}

//--------------------------------------------------
function printRecords($content)
{                              
        print $content['title'];
        print $content['content'];
        print $content['authorName'];


}

//--------------------------------------------------
// select a random poem to feature on home page
function getFeaturedPoem()
{ 
   global $db_connect;
   global $tableName;
   //$rows = mysqli_result(mysqli_query('SELECT COUNT(*) FROM $tableName'), 0);
   $q = "SELECT COUNT(*) FROM $tableName";
   $rows = mysqli_query($db_connect, $q);

   if ($rows) //if table is not empty
   {	
	global $tableName;
   	$query = 'SELECT * FROM poems ORDER BY RAND() LIMIT 1';
        $result = mysqli_query($db_connect, $query);
        //$item = mysqli_fetch_array($result);	
	$item = mysqli_fetch_assoc($result);
        //featured::printRecords($item);		
        return $item; 
	}
}



//--------------------------------------------------
function countRecord()
{
   // get featured poem from database
        include_once '/config/config.php';
        $query = "SELECT COUNT(*) FROM poems";
        $result = mysqli_query($db_connect, $query);
        $rows = mysqli_fetch_row($result);
        $poemLines = $rows[0];

	return $poemLines;
}


}//_end_Class


?>





