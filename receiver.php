<!doctype html>
<?php
error_reporting(0);
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
$status=$_SESSION['role'];
if (login_check($mysqli) == true) {
if ($status != "receiver") {
# code...
header('Location: login.php');
}
}
else {
# code...
header('Location: login.php');
}
?>
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blood Patron</title>
    <meta name="description" content="Blood Patron">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/lgg.png" alt="Logo"></a>
            
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <!--<li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>-->
                    <h3 class="menu-title">Hey! 
                        <?php
                    $k=$_SESSION['teamname'];
                    echo $k;
                    ?>
                    </h3><!-- /.menu-title -->
                 
                    </li>-->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Where can I donate? </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i> My account</a>
                    </li>

                     <li class="menu-item-has-children dropdown">
                        <a href="logout.php" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i> Logout</a>
                    </li>

            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                           <!-- <span class="count bg-danger"></span>-->
                          </button>
                            </div>

                        <div class="dropdown for-message">
                          <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <!--<span class="count bg-primary"></span>-->
                          </button>
                         
                        </div>
                    </div>
                </div>

                <div class="col-sm-5" style="position: relative;left: 17em;">
                    <div class="btn btn-dropdown"><i class="fa fa-user-circle-o" style="font-size:40px"></i>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!--<img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">-->
                        </a>
                                <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications</i></a><!-- <span class="count"></span></a>-->

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
     
<body>

                <div class="row">
                        <div class="col-xl-3 col-xl-6">
                    <div class="card" style="height:400px; width:500px;">
                      
                      <div class="card-body card-block ">
                        <div class="form-group">

                         <form method="POST" action="receiver.php">
                            <div><label for="select" class="form-control-label">Select Blood Group</label></div>
                            <div>
                              <select name="blood" id="selectblood" class="form-control">
                              <option value="0">Select Blood Type</option> 
                                <option value="1">A+ve</option>
                                <option value="2">A-ve</option>
                                <option value="3">B+ve</option>
                                <option value="4">B-ve</option>
                                <option value="5">AB+ve</option>
                                <option value="6">AB-ve</option>
                                <option value="7">O+ve</option>
                                <option value="8">O-ve</option>
                              </select>
                            </div>

                          <br>
                       
                          <center>   <button type="submit" class="btn btn-primary btn-sm" style="width: 100%">
                             <a href="search.php"></a>
                          <i class=""> </i>&nbsp; Search
                        </button></center></form>
                        <div class="view overlay rgba-white-slight wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                            <h4 style="padding-top: 2%; color: #E3468C;"><strong></strong></h4>
                            <?php
                            if (isset($_POST['blood'])) {
                                # code...
                                $blood=$_POST['blood'];
                            }
                            // echo $blood;
                            $sql = "SELECT teamname,mobile FROM members where bloodgroup='$blood'";

                            mysqli_select_db($mysqli,'secure_login');
                            $retval = mysqli_query($mysqli,$sql);
                            
                            if(! $retval)
                            {
                            die('Could not get data :'.mysqli_error());
                            }
                        
                            ?>
                            <style type="text/css">
                            .table-dark{
                            background-color: #82B6AD;
                            }
                            </style>
                            <div style="padding-top: 2%;">
                                <table class=" table table-striped" border="1" style="width: 100%;" align="center">
                                    <tr>
                                        <td class="table-dark">
                                            No.
                                        </td>
                                        <td class="table-dark">
                                            Name
                                        </td>
                                        <td class="table-dark">
                                            mobile no
                                        </td>
                                        <td class="table-dark">
                                            email
                                        </td>
                                        <td class="table-dark">
                                            City
                                        </td>
                                    </tr>
                                    <?php $i=1;
                                    while($row =mysqli_fetch_array($retval , MYSQLI_BOTH))
                                    {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $i; ?>
                                        </td>
                                        <td>
                                            <?php echo "" .$row["teamname"]; ?>
                                        </td>
                                        
                                        <td>
                                            <?php echo "" .$row["mobile"]; ?>
                                        </td>
                                        
                                        <td>
                                            <?php echo "" .$row["email"]; ?>
                                        </td>
                                        <td>
                                            <?php echo "" .$row["city"]; ?>
                                        </td>
                                        </form>
                                    </tr>
                                    <?php $i++;} ?>
                                </table>
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
              
  
 
    
<div class="row">
         <div class="col-xl-3 col-xl-6">
                <div class="card" style="width: 63em;">
                    <div class="card-header">
                        <h4>World</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap" class="vmap" style="height: 265px;"></div>
                    </div>
                </div> 
        
            </div>
</div>

        <!-- /#right-panel -->

    <!--   <div class="breadcrumbs">
            
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


            <div class="col-lg-3 col-md-6">
                <div class="social-box facebook">
                    <i class="fa fa-facebook"></i>
                    <ul>
                        <li>
                            <strong><span class="count">40</span> k</strong>
                            <span>friends</span>
                        </li>
                        <li>
                            <strong><span class="count">450</span></strong>
                            <span>feeds</span>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="col-lg-3 col-md-6">
                <div class="social-box twitter">
                    <i class="fa fa-twitter"></i>
                    <ul>
                        <li>
                            <strong><span class="count">30</span> k</strong>
                            <span>friends</span>
                        </li>
                        <li>
                            <strong><span class="count">450</span></strong>
                            <span>tweets</span>
                        </li>
                    </ul>
                </div>
                
            </div>


            <div class="col-lg-3 col-md-6">
                <div class="social-box linkedin">
                    <i class="fa fa-linkedin"></i>
                    <ul>
                        <li>
                            <strong><span class="count">40</span> +</strong>
                            <span>contacts</span>
                        </li>
                        <li>
                            <strong><span class="count">250</span></strong>
                            <span>feeds</span>
                        </li>
                    </ul>
                </div>
        
            </div>


            <div class="col-lg-3 col-md-6">
                <div class="social-box google-plus">

                    <i class="fa fa-google-plus"></i>
                    <ul>
                        <li>
                            <strong><span class="count">94</span> k</strong>
                            <span>followers</span>
                        </li>
                        <li>
                            <strong><span class="count">92</span></strong>
                            <span>circles</span>
                        </li>
                    </ul>
                </div>
                
            </div>-->
              
             <!-- <div class="col-xl-6">
                <p>Blood donors needed</p>
                <img  style="width:950px; height:900px;" alt="" src="images/11.jpg">
                        </div>
           <div class="col-xl-6 col-xl-6">
                <section class="card">
                    <div class="twt-feed blue-bg">
                        <div class="corner-ribon black-ribon">
                            <i class="fa fa-twitter"></i>-->
                        <!-- </div>
                        <div class="media">
                            <a href="#">
                                <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
                            </a>
                            <div class="media-body">
                                <h2 class="text-white display-6">Jim Doe</h2>
                                <p class="text-light">Project Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="weather-category twt-category" >
                        <ul >
                            <li class="active" style="width: 30em;">
                                <h5>Donated blood 5 times </h5>
                            </li>
                            </ul>
                    </div> -->
            
          <!--   <div class="col-xl-3 col-xl-6">
                <div class="card" style="width: 30em;">
                    <div class="card-header">
                        <h4>World</h4>
                    </div>
                    <div class="Vector-map-js">
                        <div id="vmap" class="vmap" style="height: 265px;"></div>
                    </div>
                </div> -->
                <!-- /# card -->
            <!-- </div>


        </div> .content
    </div> --> <!-- /#right-panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
</body>
</html>
