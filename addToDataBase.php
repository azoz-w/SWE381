<?php
session_start();
require "pages/db-config.php";
$title = $_POST['title'];
$disc = $_POST['disc'];
$year = $_POST['year'];
$genre = $_POST['formGenre'];
$cast = $_POST['cast'];
$type = $_POST['type'];
$poster = $_POST['poster'];
$comment = $_POST['comment'];
$rate = $_POST['rate'];
if(isset($_SESSION['login'])) {
$usern = $_SESSION['login'];
$query = "INSERT INTO movie VALUES('$title','$disc','$year','$genreStr','$cast','$type','$poster',0)";
$query1 = "INSERT INTO review VALUES('$title','$usern ','$rate ',' $comment')";
}
else {
    $usern = $_SESSION['Admin'];
    $query = "INSERT INTO movie VALUES('$title','$disc','$year','$genreStr','$cast','$type','$poster',1)";
}

$con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);

if (mysqli_connect_errno()) {
    die("DB ERROR: " . mysqli_connect_error());
}
$N = count($genre);
$i = 0;
$genreStr = "";
foreach ($genre as $val) {
    if ($i < $N - 1)
        $genreStr .= '' . $val . "|";
    else
        $genreStr .= '' . $val;
    $i++;
}


$res = mysqli_query($con, $query);

$res1 = mysqli_query($con, $query1);

if (mysqli_num_rows($res)) {
    mysqli_close($con);
    header("Location:allMovies.php?message=you were successfully added!");
} else {
    mysqli_close($con);
    header("Location:add.php?error=somthing went wrong ");
}
mysqli_close($con);
header('location:allMovies.php');