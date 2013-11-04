<?php

# landing view    
# CS174_hw3
# Created on 10/26/13.
# Copyright (c) 2013 Pedro A. Flores Prieto, Samira C. Oliva Madrigal

include_once('baseView.php');
include_once('./config/config.php');

class landingView //extends baseView
{	
        
	function displayBody($record)
	{ 
    		$body1 = <<< TOP
    		<h1> Looney Limerick </h1>
    		<div>   
TOP;
		$ary = explode("\n", $record['content']);	
		$aSize = count($ary);
		$body2 = "</div>";
        	echo "$body1";
		?>
		<div class="links" align="right">
		<hr id="links" />
		<a href="randomPoems.php">[select random poem]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
		<br /><br />
		<a href="upload.php">[upload a poem]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <br /><br />
		<text>
		Top 10 rated &rarr;&nbsp;&nbsp;&nbsp;
		<ul class="list"> 
		<li></li>
		</ul>
		<br /><br /> 
		10 most recently submitted &rarr;&nbsp;&nbsp;&nbsp;
                <ul class="list">
                <li></li>
                </ul>
		</text>


		</div>

                 <div align="center"> 
	         <b>title</b> --  
	        <?php print $record['title']; ?>
		<br /><br /><br />
		<?php 
		   for($idx=1; $idx < $aSize; $idx++)
		   {	
			print $ary[$idx];
			?>
			<br /> <?php
		   }
		?>
	
		<br /><br />
	 	<b> author </b> -- 
		<?php print $record['authorName']; ?>
		<br/><br/>
               <?php print "\n~\n"; print $body2; ?>
		</div>	
       <?php
	 }

	//--------------------------------------------------
	function sideLists($topRated, $recentlySubmitted)
	{



	}	
	//--------------------------------------------------
	function execute($record)
        {
           $this->displayBody($record);
       
	 }//_end_class


        //--------------------------------------------------
       function timer()
	{
   	   $seconds=600;//10 minutes
   	   sleep($seconds); 
	}




}

?>
