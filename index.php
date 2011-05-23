<?php
//Include the system core and classes
	require_once("system/server/index.php");
	
//Build the top of the page
	$template->title = "Home";
	$template->top();
	
//Page content
	echo "<h1>Page Content!</h1>";
	
//Build the bottom of the page
	$template->bottom();
?>