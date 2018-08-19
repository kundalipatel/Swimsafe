<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
sec_session_start();
if (login_check($mysqli) == true) {
$logged = 'in';
} else {
$logged = 'out';
}
?>

<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign-Up</title>
    <meta name="description" content="Blood-Patron">
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

	<script type="text/JavaScript" src="js/sha512.js"></script>
	<script type="text/JavaScript" src="js/forms.js"></script>

	<main>
		 <?php
  if (!empty($error_msg)) {
  echo $error_msg;
  }
  ?>

  	 <div class="sufee-login d-flex align-content-center flex-wrap">
        	<div class="container">
            	<div class="login-content">
                	<div class="login-logo">
                   	 <a href="index.php">
                       
                    </a>
                </div>
                <div class="login-form">
                	<div style="background-color: #DCEDC8">
                	<img class="mx-auto d-block" style="width: 15%; height: 15%; " src="images/lgg.png" alt="Card image cap">
                	</div>
                 <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" name="registration_form">
                         <div class="form-group">
                            <label>Name</label>
                            <input id="teamname" name="teamname" type="text" class="form-control" placeholder="your Name">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" id="email"class="form-control" placeholder=" your Email">
                        </div>
                         <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="Date" id="dob" class="form-control" placeholder="Date of Birth">
                        </div>
                         <div class="form-group">
                            <label>Address</label>
                            <input type="text" id="address" class="form-control" placeholder="Address">
                        </div>
                         <div class="form-group">
                            <div class="form-check-inline form-check">
                           <label for="inline-radio1" class="form-check-label "> Gender: &nbsp;&nbsp;&nbsp; </label>
                                <label class="form-check-label ">
                                  <input type="radio" id="radio1" name="inline-radios" value="option1" class="form-check-input">Male 
                                </label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label  class="form-check-label ">
                                  <input type="radio" id="radio2" name="inline-radios" value="option2" class="form-check-input">Female
                                </label>
                              </div>
                              </div>
                         <div class="form-group">
                            <label>Mobile No</label>
                            <input type="text" class="form-control" placeholder="Mobile No">
                        </div>
                         <div class="form-group">
                            <label>Blood Group</label>
                            <div class="dropdown">
     <select name="select" id="select" class="form-control">
                                <option value="0">Please select</option>
                                <option value="1">AB+</option>
                                <option value="2">AB-</option>
                                <option value="3">A+</option>
                                 <option value="4">A-</option>
                                <option value="5">B+</option>
                                <option value="6">B-</option>
                                <option value="7">O+</option>
                                <option value="8">O-</option>                    
     </select>
                    </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                           

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        <div class="social-login-content">
                            <div class="social-button">
                                
                                
                            </div>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
