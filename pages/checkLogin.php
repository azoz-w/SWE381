<?php
session_start();
require 'db-config.php';

$usernm = "";
$pws = "";
$email = "";
if(isset($_POST["Username"])&&isset($_POST["pws"])){
    $usernm = $_POST["Username"];
    $pws = $_POST["pws"];
} else {
    
header('location:login.php? error=please fill the blanks');

}
   $con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);
    if(mysqli_connect_errno()) {
        die("error connect to database" . mysqli_connect_error());
    }

   
    $query = "SELECT * FROM user WHERE usern = '$usernm' AND pass = '$pws'";
    $res = mysqli_query($con, $query);
    


    if(mysqli_num_rows($res) > 0) {
        
       
        $check = "SELECT * FROM user WHERE usern = '$usernm' AND pass = '$pws' AND roll = 1";
        $res1 = mysqli_query($con, $check);
        
        if(mysqli_num_rows($res1)>0) {
        $_SESSION['Admin']=$usernm;
        mysqli_close($con);
        header('location:http://localhost/Recommender-System/AdminHome.php');
        }
        else {
            $_SESSION['login']=$usernm;
        mysqli_close($con);
        header('location:http://localhost/Recommender-System/UserHome.php');
            
        }
    
        
    }

    else {
        mysqli_close($con);
        header('location:login.php? error=Wrong username or password');
    }