<?php
	$con = mysqli_connect("localhost","root","","blood_patron");
	if (!$con){
	  die('Could not connect: ' . mysqli_error());
	}
?>