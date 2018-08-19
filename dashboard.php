<?php
include('conn.php');
session_start();
	if (!isset($_SESSION['user_id'])){
		header('location:login.php');
	}
?>
<?php
	$user_id=$_SESSION['user_id'];
	$result=mysqli_query($con,"SELECT * FROM user_info WHERE user_id='$user_id'");
	$data=mysqli_fetch_assoc($result);
	$dname=$data['user_dname'];
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