<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if (login_check($mysqli) == true) {
$logged = 'in';
} else {
$logged = 'out';
}
$stmt = $mysqli->prepare("SELECT round FROM round WHERE id ='0'");
$stmt->execute();
$stmt->bind_result($round);
$stmt->fetch();
?>

<!doctype html>
<html class="no-js" lang=""> <!--<![endif]-->
<head><script type="text/JavaScript" src="js/sha512.js"></script>
<script type="text/JavaScript" src="js/forms.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login- Blood Patron</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">
                       
                    </a>
                </div>
                <?php
      if (isset($_GET['error'])) {
      echo '<p class="error">Error Logging In!</p>';
      }
      ?>
                <div class="login-form">
                	
                	<a href="index.php"><img class="mx-auto d-block" style="width: 15%; height: 15%; " src="images/lgg.png" alt="Card image cap"></a>
                    <form action="includes/process_login.php" class="validate-form" method="post" name="login_form">
                        <!-- <div class="form-group">
                            <label>Blood Group</label>
                            <div class="dropdown">
     <select name="select" id="select" class="form-control">
                                <option value="0">Please select</option>
                                <option value="1">Admin</option>
                                <option value="2">Donor</option>
                                <option value="3">Receiver</option>
     </select>
                    </div>
                        </div> -->
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email"  name="email" required>
                        </div>
                        <div class="form-group">
                            <label >Password</label>
                            <input type="password" class="form-control" placeholder="Password" type="password" name="password" required>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="forgot.php">Forgotten Password?</a>
                            </label>

                        </div>
                        <button type="submit" name="submit" value="Login" class="btn btn-success btn-flat m-b-30 m-t-30" onclick="formhash(this.form, this.form.password)">Log in</button>
                        <div class="social-login-content">
                            <div class="social-button">
                                
                                
                            </div>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="signup.html"> Sign Up Here</a></p>
                        </div>
                    </form>
					
					<!-- <?php
						// if (isset($_POST['submit'])) {
						// $user_email=$_POST['user-email'];
						// $password=$_POST['password'];
						// $result=mysqli_query($con,"SELECT * FROM user_info WHERE user_email='$user_email' AND user_password='$password'")or die (mysqli_error());
						//  if(!$result){
						// 	header('location:dashboard.php');
						//  }else{
						// 	$data=mysqli_fetch_assoc($result);
						// 		session_start();
						// 		$_SESSION['user_id']=$data['user_id'];
						// 		header('location:dashboard.php');
						//  }
						// }
					?> -->
                </div>
            </div>
        </div>
        <?php
            if (login_check($mysqli) == true) {
            echo '<p class="blue-text">Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['teamname']) . '.  <a class="btn btn-secondary btn-grey waves-effect purple-gradient waves-light ">Continue</a>
          </p>';
          
          echo '<p class="blue-text">Do you want to change user? &nbsp<a class="btn btn-default purple-gradient blue-text btn-grey waves-effect waves-light" href="includes/logout.php">&nbsp Logout &nbsp </a>.</p>';
          } else {
          echo '<p class="blue-text">Currently logged ' . $logged . '.</p>';
          echo '<p class="blue-text">If you don\'t have a login, please <a class="btn purple-gradient btn-default blue-text btn-grey waves-effect waves-light" href="register.php">Register</a>.</p>';
          }
          ?>
    </div>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>