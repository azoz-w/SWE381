<?php
session_start();
include 'db-config.php';
$cpass = trim($_POST["CurrentPassword"]) ;
$npass = $_POST["NewPassword"];
$userna= trim($_SESSION['login']);

$con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);

if(mysqli_connect_errno()){
    die("DB ERROR: " . mysqli_connect_error());
}

$query = "SELECT * FROM user WHERE usern = '$userna'";
    $res = mysqli_query($con, $query);
     while($row = mysqli_fetch_array($res)){
         if($cpass !== $row['pass']){
              mysqli_close($con);
              header('location:PasswordReset.php? errorpassmessage= incorrect password');
         }
         else{
             $query2 = "UPDATE user SET pass='$npass' WHERE usern = '$userna'";
    $res2 = mysqli_query($con, $query2);
     mysqli_close($con);
     header("location:http://localhost/Recommender-System/UserHome.php? passmessage= You are good to go!");
         }
     }


    ?>