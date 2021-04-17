<?php
session_start();
require "pages/db-config.php";
$title = $_POST['title'];
$disc = $_POST['description'];
$year = $_POST['year'];
$genre = $_POST['genre'];
$cast = $_POST['cast'];
$type = $_POST['type'];
$poster = $_POST['poster'];
$rate = $_POST['rate'];
$usern=$_SESSION['login'];

$con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);

if(mysqli_connect_errno()){
    die("DB ERROR: " . mysqli_connect_error());
}


        $query = "INSERT INTO movie VALUES('$title','$disc','$year','$genre','$cast','$type','$poster',1)";
        $res = mysqli_query($con, $query);
        $query1 = "INSERT INTO review VALUES('$title','$usern ','$rate ','')";//check if you want to change it ,, so the admin don't need to add comment
        $res1 = mysqli_query($con, $query1);
    
    if(mysqli_num_rows($res)){
    //$_SESSION['login']=$usern;
    mysqli_close($con);
    header("<Location:AdminHome.php?message=you were successfully added!");
    }
    else{
        mysqli_close($con);
     header("Location:add.php?error=somthing went wrong ");
    }
    mysqli_close($con);
    header('location:AdminHome.php');


?>