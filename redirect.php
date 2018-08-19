<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/psl-config.php';
sec_session_start();
?>
<!DOCTYPE html>
<html>
<body>

	<?php
			$status=$_SESSION['role'];
			echo "$role";
			if ($status == "donor") 
			{
				header('Location: donor.php')
			}
			elseif ($status == "receiver") 
			{
				header('Location: receiver.php')
			}
			else
			{
				header('Location: login.php')
			}
	?>

</body>
</html>