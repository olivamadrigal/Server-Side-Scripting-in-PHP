#######################################################################
#   readme.txt							      #
#   Pedro A. Flores Prieto & Samira C. Oliva Madrigal	      	      #
#   CS174 Hw3							      #
#######################################################################
//--------------------------------------------------------------------------
GETTING STARTED:

1. Inside config/config.php administrator username and password are system
   dependent, please change them.

2. to create the database and base limricks, run from the command line:

   $php config/create.php

3. Ensure that the base data (baseData.txt or baseData.sql) file 
   is moved into the data directory of for your mysql in your system. 
   For us, this was under:
   /usr/local/mysql/data/

   Also, the file baseData.sql must contain a minimum number of records,
   otherwise, an error will be generated:

   http://docs.oracle.com/cd/E19957-01/mysql-refman-6.0/error-handling.html#error_er_warn_too_few_records
 
   
   The file in this homework contains six different records each of which 
   reapted multiple times (241 records in total) so to produce a successful
   load from the text file to the database for this particular assignment.



   
//--------------------------------------------------------------------------
SUPPORTED PLATFOMRS:

1. This was only tested on OS X Version 10.8.5 and viewed on Firefox
   version 24.0


//--------------------------------------------------------------------------
ERRORS, BUGS:

1. The mySQL version used was 5.6.13. Some of the syntax for mysqli may be
   specific to the mySQL version and thus may not render properly depending 
   on the version being used. 

        -- time format, notice, in the config/create.php, the manner in which
	   the DATETIME column value is formatted, this may output erros 
	   depending on the time version of mysql you are running (syntax 
	   differences). If you come across such errors messages, please review
	   the manual for the mysql version your are running on your system.



  






