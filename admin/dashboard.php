<?php
include('conn.php');
session_start();
	if (!isset($_SESSION['admin_id'])){
		header('location:index.php');
	}
?>
<?php
	$admin_id=$_SESSION['admin_id'];
	$result=mysqli_query($con,"SELECT * FROM admin_info WHERE admin_id='$admin_id'");
	$data=mysqli_fetch_assoc($result);
	$dname=$data['admin_dname'];
	echo 'Welcome ' . $dname ."!";
?>
<html lang="en">
<head>
	<title>Dashboard - Blood Patron</title>
</head>
<body>
	<br><a href="logout.php">logout</a>
</body>
</html>