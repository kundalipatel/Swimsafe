<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if (login_check($mysqli) == true) {
$logged = 'in';
} else {
$logged = 'out';
}

?>
<script type="text/JavaScript" src="js/sha512.js"></script>
<script type="text/JavaScript" src="js/forms.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!doctype html>
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login- Blood Patron</title>
    <meta name="description" content="Blood Patron">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
.form-gradient .font-small {
font-size: 0.8rem; }
.form-gradient .header {
border-top-left-radius: .3rem;
border-top-right-radius: .3rem; }
.form-gradient input[type=text]:focus:not([readonly]) {
border-bottom: 1px solid #fd9267;
-webkit-box-shadow: 0 1px 0 0 #fd9267;
box-shadow: 0 1px 0 0 #fd9267; }
.form-gradient input[type=text]:focus:not([readonly]) + label {
color: #4f4f4f; }
.form-gradient input[type=password]:focus:not([readonly]) {
border-bottom: 1px solid #fd9267;
-webkit-box-shadow: 0 1px 0 0 #fd9267;
box-shadow: 0 1px 0 0 #fd9267; }
.form-gradient input[type=password]:focus:not([readonly]) + label {
color: #4f4f4f; }
</style>

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
                    <form action="includes/process_login.php" method="post" name="login_form">
                     


                        <div class="form-group">
                            <label for="Form-email3">Email address</label>
                            <input type="email" id="email" class="form-control" placeholder="Email" type="text" name="email" required>
                        </div>
                        <div class="form-group">
                         <label for="Form-email3">Password</label>
                            <input type="password" class="form-control" placeholder="Password" type="password" name="password" required>
                        </div>
                       <!--  <div class="role">
                               <input type="radio" name="role" value="d" onclick="reset_msg();" />  Donor
                              <input type="radio" name="role" value="r" onclick="reset_msg();" /> Receiver
                              <div id="msg"></div>
                        </div> -->

                        <div class="checkbox">
                            
                            <label class="pull-right">
                                <a href="forgot.php"></a>
                            </label>

                        </div>
                        <!-- <button type="submit" name="submit" value="Login" class="btn btn-success btn-flat m-b-30 m-t-30">Log in</button> -->
                        <button type="button" class="btn btn-grey btn-primary z-depth-1a btn btn-success btn-flat m-b-30 m-t-30" onclick="formhash(this.form, this.form.password) " >Log in</button>
                        <div class="social-login-content">
                            <div class="social-button">
                                </div>
                        <!--onclick="formhash(this.form, this.form.password)-->
                        <div class="register-link m-t-15 text-center" onclick="return send();">
                            <p>Don't have account ? <a href="signup.php" /> Sign Up Here</p>
                        </div>
                    </form>
                 <!--  <?php
           // if (login_check($mysqli) == true)
             {
               // echo '<p class="blue-text">Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['teamname']) . '<a class="btn btn-secondary btn-grey waves-effect purple-gradient waves-light ">Continue</a>
          //</p>';
          
          //echo 
          //'<p class="blue-text">Do you want to change user? &nbsp<a class="btn btn-default purple-gradient blue-text btn-grey waves-effect waves-light" href="includes/logout.php">&nbsp Logout &nbsp </a>.</p>';
          } 
         // else 
          {
          //echo 
          //'<p class="blue-text">Currently logged ' . $logged . '.</p>';
          
          //echo
         //  '<p class="blue-text">If you don\'t have a login, please <a class="btn purple-gradient btn-default blue-text btn-grey waves-effect waves-light" href="register.php">Register</a></p>';
          }
          ?>-->
					
					<!--<?php
						// if (isset($_POST['submit'])) {
						// $email=$_POST['email'];
						// $password=$_POST['password'];
						// $result=mysqli_query($con,"SELECT * FROM members WHERE email='$email' AND password='$password'")or die (mysqli_error());
						//  if(!$result){
						// 	header('location:dashboard.php');
						//  }else{
						// 	$data=mysqli_fetch_assoc($result);
						// 		session_start();
						// 		$_SESSION['email']=$data['email'];
						// 		header('location:dashboard.php');
						// }
						//}
					?>-->
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
            function send() {
                var roles = document.getElementsByName("role");
                if (roles[0].checked == true) {
                    alert("You are Donor");
                } else if (genders[1].checked == true) {
                    alert("Your are Receiver");
                } else {
                    // no checked
                    var msg = '<span style="color:red;">You must select your role!</span><br /><br />';
                    document.getElementById('msg').innerHTML = msg;
                    return false;
                }
                return true;
            }

            function reset_msg() {
                document.getElementById('msg').innerHTML = '';
            }
        </script>
</body>
</html>