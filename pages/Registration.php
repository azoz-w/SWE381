<!DOCTYPE html>

<?php
session_start();
if(isset($_SESSION['Admin']) || isset($_SESSION['Login'])) {
header("Location:http://localhost/Recommender-System/allMovies.php");

}
?>
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Registration form</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay" style="background-image:url('back.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <div class="fl_left"> 
        <!-- ################################################################################################ -->
        <ul class="nospace">
          <li><i class="fas fa-phone rgtspace-5"></i> 011-4676987</li>
          <li><i class="far fa-envelope rgtspace-5"></i><a href="mailto:CCISDEAN@KSU.EDU.SA" style="color:#fbab45">CCISDEAN@KSU.EDU.SA</li>
        </ul>
        <!-- ################################################################################################ -->
      </div>
      <div class="fl_right"> 
        <!-- ################################################################################################ -->
        <ul class="nospace">
          
         
          
        </ul>
      </div>
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->

  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left"> 
        <h1><a href="#">recommender system</a></h1>
      </div>
      <nav id="mainav" class="fl_right"> 
        <ul class="clear">
          <li class="active"><a href="http://localhost/Recommender-System/allMovies.php">Home</a></li>
          
          
        </ul>
      </nav>
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
 
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: black;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */


/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<div class="container">
<form action="checkRegistration.php" method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <?php

              if (isset($_GET['error'])) {
                echo "<div class='alert alert-danger' role='alert' style='text-align:center;'>" . $_GET['error'] . " !</div>";
              }
              ?>
    <label for="Username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="Username" id="Username" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    
    <hr>
    <p>By creating an account you agree to our <a href="#" style="color:#fbab45">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a style="color:#fbab45" href="Login.php">Sign in</a>.</p>
  </div>
</form>
</div>
</body>
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!--<div class="wrapper row2">-->
<!--  <div class="hoc container clear"> -->
<!--    <div class="sectiontitle">-->
<!--      <p class="heading underline font-x2">Group members</p>-->
<!--    </div>-->
<!--    <ul class="nospace group team">-->
<!--      <li class="one_quarter first">-->
<!--        <figure><a class="btn" href="#"><img src="person.png" alt=""></a>-->
<!--          <figcaption><strong>A.alanazi</strong> <em>member</em></figcaption>-->
<!--        </figure>-->
<!--      </li>-->
<!--      <li class="one_quarter">-->
<!--        <figure><a class="btn" href="#"><img src="person.png" alt=""></a>-->
<!--          <figcaption><strong>O.alkanhal</strong> <em>member</em></figcaption>-->
<!--        </figure>-->
<!--      </li>-->
<!--      <li class="one_quarter">-->
<!--        <figure><a class="btn" href="#"><img src="person.png" alt=""></a>-->
<!--          <figcaption><strong>A.almobark</strong> <em>member</em></figcaption>-->
<!--        </figure>-->
<!--      </li>-->
<!--      <li class="one_quarter">-->
<!--        <figure><a class="btn" href="#"><img src="person.png" alt=""></a>-->
<!--          <figcaption><strong>A.alwallan</strong> <em>member</em></figcaption>-->
<!--        </figure>-->
<!--      </li>-->
<!--    </ul>-->
<!--  </div>-->
<!--</div>-->

<!--################################################################################################ -->
<!--################################################################################################ -->
<!--################################################################################################ -->
    <div id="ctdetails" class="clear">
      <ul class="nospace clear">
        
        <li class="one_quarter">
          <div class="block clear"><a href="#" style="color:#fbab45"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail: </strong><a style="color:#fbab45" href="mailto:CCISDEAN@KSU.EDU.SA">CCISDEAN@KSU.EDU.SA</a> 
  </span></div>
        </li>
      </ul>
    </div>
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">King saud University - Software Engineering Department</a></p>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
