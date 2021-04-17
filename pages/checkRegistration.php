<?php
session_start();
include 'db-config.php';
$usern = $_POST["Username"];
$pass = $_POST["psw"];
$email = $_POST["email"];
$n=0;

$con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);

if(mysqli_connect_errno()){
    die("DB ERROR: " . mysqli_connect_error());
}

    $checkQ= "select usern from user where usern ='". $usern ."'";
    $resultQ = mysqli_query($con,$checkQ);
    if(mysqli_num_rows($resultQ)>0){
        header("location:http://localhost/Recommender-System/pages/Registration.php? error=UserName Already Exists!");
    }
    $query = "INSERT INTO user VALUES('$usern','$pass','$email','$n')";
    $res = mysqli_query($con, $query);

    //$query = "INSERT INTO user VALUES('" $usern "','" $pass "','" $email "','" $n ")";

    if($res== 1){
    //$_SESSION['login']=$usern;
    header("Location:Login.php?message=you were successfully registered! sign in with your new account");
    }
    else{
     header("Location:http://localhost/Recommender-System/pages/Registration.php?error= UserName Already Exists! ");
    }




 
mysqli_close($con);


?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */