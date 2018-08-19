<?php
	$con = mysqli_connect("helpinghand-mysqldbserver.mysql.database.azure.com","sec_user@helpinghand-mysqldbserver","12345","secure_login");
	if (!$con){
	  die('Could not connect: ' . mysqli_error());
	}
?>