<?php
include_once 'db_connect.php';
include_once 'functions.php';
 
sec_session_start(); // Our custom secure way of starting a PHP session.
 
if (isset($_GET['email'], $_GET['p'])) {
    $email = $_GET['email'];
    $password = $_GET['p']; // The hashed password.
 
    if (login($email, $password, $mysqli) == true) {
                $stmt = $mysqli->prepare("SELECT round FROM round WHERE id ='0'");
                $stmt->execute();
                $stmt->bind_result($round);
                 $stmt->fetch();
                 if ($round == "1") {
                     # code...
                    header('Location: ../index.php');
                 }
                 else if ($round == "2") {
                     # code...
                    header('Location: ../round2/redirect.php');
                 }
                 else if ($round == "3") {
                     # code...
                    header('Location: ../round3/redirect.php');
                 }
        
    } else {
        // Login failed 
       // header('Location: ../index.php?error=1');
    }
} else {
    // The correct GET variables were not sent to this page. 
    echo 'Invalid Request';
}

?>