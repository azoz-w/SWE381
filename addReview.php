<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location:pages/login.php?error= you have to login first");
}

require "pages/db-config.php";
$title = trim($_POST['title']);
$comment = $_POST['comment'];
$rate = $_POST['rate'];
$usern=trim($_POST['name']);
$check = (double)$rate;
if($check < 0 || $check > 5) {
    header("Location:reviewUser.php?error= rate must be between 0 and 5");
    die();
}

$con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);

if(mysqli_connect_errno()){
    die("DB ERROR: " . mysqli_connect_error());
}

        $query1 = "INSERT INTO review VALUES('$title','$usern ','$rate ',' $comment')";
        $res1 = mysqli_query($con, $query1);

    //if($res1){
    //$_SESSION['login']=$usern;
    mysqli_close($con);
    header("Location:UserHome.php?message=you were successfully added!");
    //}
    //else{
        //mysqli_close($con);
     //header("Location:reviewUser.php?error=somthing went wrong ");
    //}

    //header("Location:UserHome.php");


?>