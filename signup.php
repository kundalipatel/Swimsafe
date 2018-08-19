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
<?php
include("head.php")
?>
<script type="text/JavaScript" src="js/sha512.js"></script>
<script type="text/JavaScript" src="js/forms.js"></script>
<!-- <style type="text/css">
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
</style> -->

<!--<![endif]-->
<style type="text/css">
  button
  {
    align-self: center;
  }
</style>
<main>  
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


  <!-- <body class="bg-dark"> -->

  <script type="text/JavaScript" src="js/sha512.js"></script>
  <script type="text/JavaScript" src="js/forms.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                       
                    </a>
                </div>

                <?php
      if (isset($_GET['error'])) {
      echo '<p class="error">Error Logging In!</p>';
      }
      ?>
      

                <div class="login-form">
                  
                  <a href="index.php"><img class="mx-auto d-block" style="width: 15%; height: 15%; " src="images/lgg.png" alt="Card image cap"></a>
                    <form class="validate-form" method="post" action="includes/register.inc.php">
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
               <label for="Form-email3">Name</label>
               <input  id="teamname" class="form-control" type="text" name="teamname" placeholder="Enter your name">
             </div>
              
              <div class="form-group">
               <label for="Form-email3">Select your gender </label>
       
                                   <div class="row form-group">
                           <!--  <div class="col col-md-3"><label class=" form-control-label">Inline Radios</label></div> -->
                            <div class="col col-md-9">
                              <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label ">
                                  <input type="radio" id="male" name="gender" value="Male" class="form-check-input" checked="checked">Male    
                                </label> &nbsp;&nbsp;&nbsp;&nbsp;
                                <label for="inline-radio2" class="form-check-label ">
                                  <input type="radio" id="female" name="gender" value="Female" class="form-check-input">Female
                                </label>
                               </div>
                              </div>
                            </div>
                          </div>
            
              <div class="form-group">
                <label for="Form-pass3">Age</label>
                <input type="text" id="Age" class="form-control"  name="Age" required="required" placeholder="Enter your age">
                </div>

          <div class="form-group">
                <label for="Form-pass3">Phone No.</label>
                <input type="text" id="mobile" class="form-control"  name="mobile" required="required" placeholder="enter your mobile no:">
                </div>
                <div class="form-group">
                <label for="Form-pass3">City</label>
                <input type="text" id="city" class="form-control"  name="city" required="required" placeholder="Enter your city">
                </div>
                <!--<div class="form-group">
                <label for="Form-pass3">Blood Group</label>
                <input type="text" id="bloodgroup" class="form-control" placeholder=""> 
                </div>-->
                  <div><label for="select" id="bloodgroup" class=" form-control-label">Select Blood Group</label></div>
                            <div>
                                 <!-- <select data-placeholder="Select your blood group" class="standardSelect" tabindex="1">-->
                                   <select  data-placeholder= "Select your blood group"  id="select" class="form-control" name="bloodgroup" required="required">
                                    <option value=""></option>
                                    <option value="1">A+ve</option>
                                    <option value="2">A-ve</option>
                                    <option value="3">B+ve</option>
                                    <option value="4">B-ve</option>
                                    <option value="5">O+ve</option>
                                    <option value="6">O-ve</option>
                                    <option value="7">AB+ve</option>
                                    <option value="8">AB-ve</option>
                                </select>
                            </div>
                  <div class="form-group"><br>
               <label for="Form-email3">Select your role</label>
       
                                   <div class="row form-group">
                           <!--  <div class="col col-md-3"><label class=" form-control-label">Inline Radios</label></div> -->
                            <div class="col col-md-9">
                              <div class="role">
                                <label for="inline-radio1" class="form-check-label ">

                                  <input type="radio" id="donor" name="role" value="donor" class="form-check-input" checked="checked">Donor    
                                </label> &nbsp;&nbsp;&nbsp;&nbsp;
                                <label for="inline-radio2" class="form-check-label ">
                                  <input type="radio" id="receiver" name="role" value="receiver" class="form-check-input">Receiver
                                </label>
                               </div>
                              </div>
                            </div>
                          </div>
                  <div class="form-group" placeholder="Enter your email-id">
                            <label for="Form-email3">Email-id</label>
                            <input type="email" id="email" class="form-control" placeholder="Email" type="text" name="email" required="required">
                        </div>

                 <div class="form-group" >
                            <label for="Form-email3">Password</label>
                            <input type="password" id="password" class="form-control" placeholder="Enter password" name="password" required="required">
              </div>
                <div class="form-group" >
                <label for="Form-pass3">Confirm password</label>
                <input type="password" class="form-control" name="confirmpwd" id="confirmpwd" required="required" placeholder="Confirm password">        
              </div>

             <!--Grid row-->
              <div class="row d-flex align-items-center mb-4">
              </div>

                <!--Grid column-->
                <div class="col-md-1 col-md-5 d-flex align-items-start">
                  <div class="text-center">
                    <button type="submit" style="width: 100%" class="btn btn-grey btn-primary z-depth-1a btn btn-success btn-flat m-b-30 m-t-30"
                    onclick="return regformhash(this.form,
                    this.form.teamname,
                    this.form.gender,
                    this.form.age,
                    this.form.mobile,
                    this.form.city,
                     this.form.bloodgroup,
                    this.form.email,
                    this.form.password,
                    this.form.confirmpwd                               
                 
                     );">Signup</button>
                  </div>
                </div>
            </div>

                    </form>
                    <!--<?php
            //if (login_check($mysqli) == true) {
            //echo '<p class="blue-text">Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['teamname']) . '.  <a class="btn btn-secondary btn-grey waves-effect purple-gradient waves-light ">Continue</a>
          //</p>';
          
          //echo '<p class="blue-text">Do you want to change user? &nbsp<a class="btn btn-default purple-gradient blue-text btn-grey waves-effect waves-light" href="includes/logout.php">&nbsp Logout &nbsp </a>.</p>';
           //else {
          //echo '<p class="blue-text">Currently logged ' . $logged . '.</p>';
          //echo '<p class="blue-text">If you don\'t have a login, please <a class="btn purple-gradient btn-default blue-text btn-grey waves-effect waves-light" href="register.php">Register</a>.</p>';
          //}
          ?>-->
          
          <!--<?php
            // if (isset($_POST['submit'])) {
            // $email=$_POST['email'];
            // $password=$_POST['password'];
            // $result=mysqli_query($con,"SELECT * FROM members WHERE email='$email' AND password='$password'")or die (mysqli_error());
            //  if(!$result){
            //  header('location:dashboard.php');
            //  }else{
            //  $data=mysqli_fetch_assoc($result);
            //    session_start();
            //    $_SESSION['email']=$data['email'];
            //    header('location:dashboard.php');
            // }
            //}
          ?>-->
                </div>
            </div>
        </div>
    </div>

     <!--<script>
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
        </script>-->




    <!-- <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
 -->

</body>
</html>