<?php
	$ErrorMsgs = array(); 
	$DBConnect = new mysqli("localhost","root","root", "efrei");
	if  (!$DBConnect)
		$ErrorMsgs[] = "The database server is not available.";
	else
		echo "<p>Connection is valid</p>";

?>