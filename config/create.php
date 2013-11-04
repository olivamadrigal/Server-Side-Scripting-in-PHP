<?php

# Config: Creation File
# CS174_hw3
# Created on 10/26/13.
# Copyright (c) 2013 Pedro A. Flores Prieto, Samira C. Oliva Madrigal

require_once("config.php");

$dbName = 'POEMS_DB';
$tableName = "poems";
$INPUT_FILE = "baseData.txt"; //baseData.sql"; 

	// CREATE NEW DATABASE
       $db_connect = mysqli_connect("$host_name", "$admin_name", "$admin_passwd");

	// CONNECT TO A DATABASE & Check connection
      if (mysqli_connect_errno())
        echo "Failed to connect to MySQL: " . mysqli_connect_error();


	// CREATE DATABASE
    $create_poems_db = "CREATE DATABASE $dbName";
    if (mysqli_query($db_connect, $create_poems_db)){
        echo "--------------SUCCESS---------------->\n";
        echo "Database poems_db created successfully";
    }
    else{
	echo "\n---------ERROR MESSAGE---------------->\n";
        echo "Error creating poems database: " . mysqli_error($db_connect);
    }
    $db_connect = mysqli_connect("$host_name", "$admin_name", "$admin_passwd", $dbName);

    // CREATE TABLES
    /*
     # timeStamp: date the poem was created/uploaded
     # title: poem title
     # content: poem content
     */

    $table = "CREATE TABLE poems
    (   
	id MEDIUMINT NOT NULL AUTO_INCREMENT,
        title VARCHAR(100) NOT NULL, 
        content VARCHAR(500) NOT NULL,
        authorName VARCHAR(100) NOT NULL,
        starAverage INT,
        timeStamp DATETIME NOT NULL,
        PRIMARY KEY (id)
    )";
    if (mysqli_query($db_connect, $table))
    {    
         echo "--------------SUCCESS---------------->\n";
         echo "Table was created successfully";
	
     }    
   else
   {    
	echo "\n---------ERROR MESSAGE---------------->\n";
        echo "Error creating table in the database\n\n". mysqli_error($db_connect);    
        echo "\n\n";
    }

// DATETIME example: YYYY-MM-DD HH:MM:SS, such as 2008-10-23 10:37:22
// INSERT INITIAL LIMERICKS



//BASE DATA: LIMRICKS INSERT

#### SINGLE INSERTS [TESTING] ####
$content2 = <<< LIM1
Chebychev said it and I\'ll say it again\n
There\'s always a prime between n and 2n factorial\!\n 
LIM1;

// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('America/Los_Angeles');
$ts = time();
$format = "Y-m-d H:i:s"; 
$resTime = date($format, $ts);


$content1 = <<< LIM1
circle@
If inside a circle a line\n 
Hits the center and goes spine to spine\n 
And the line\'s length is \"d\" \n
the circumference will be \n
d times 3.14159\n@anynymous@5@2013-11-02 15:56:54#
LIM1;

$query = "INSERT INTO $tableName(title, content, authorName, starAverage, timeStamp) 
          VALUES(\"Chebychev\", '$content1' , \"anonymous\", 5, '$resTime')";          

// STR_TO_DATE( '17/07/2013 18:33:55', '%d/%m/%Y %H:%i:%s'))"; 

$db_connect = mysqli_connect($host_name,$admin_name,$admin_passwd,$dbName);

if(mysqli_query($db_connect, $query))
{
   echo "--------------SUCCESS---------------->\n";
   echo "Insertion was created successfully\n\n";
} 
else
{  
   echo "---------ERROR MESSAGE---------------->\n";
   echo "Error creating insert in the database\n";
   echo  mysqli_error($db_connect);
   echo "\n\n";
}


#### INPUT_FILE TESTING #####
$spIn = "LOAD DATA INFILE '$INPUT_FILE' INTO TABLE poems 
                                FIELDS TERMINATED BY '@'
				LINES TERMINATED BY '#' 
				(title, content, authorName, starAverage,timeStamp)";

if(mysqli_query($db_connect, $spIn))
{
        echo "--------------SUCCESS---------------->\n";
	echo "Success file data entry.\n";
}
else
{
	echo "---------ERROR MESSAGE---------------->\n";
	echo mysqli_error($db_connect);
	echo "\n\n";

}

?>
