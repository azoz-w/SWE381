<?php

session_start();
  if(!isset($_SESSION['Admin'])) {
      header('location:http://localhost/Recommender-System/pages/Login.php??error=you have to login first');
  }

 require "pages/db-config.php";
    $con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);
    $title= trim($_POST['title']);
  if(isset($_POST['Yes'])) {
    $query = "UPDATE movie SET isvalidated = 1 where title = '".$title."'";
    $result = mysqli_query($con,$query);
    if($result) {
      header("location:AdminHome.php");
    }
    header("Location:http://localhost/Recommender-System/allvalid.php");

  }
  else {
    $query = "DELETE FROM review where title ='".$title."'";
    $result = mysqli_query($con,$query);
    $query = "DELETE FROM movie where title ='".$title."'";
    $result = mysqli_query($con,$query);
    header("Location:http://localhost/Recommender-System/AdminHome.php");

  }


?>