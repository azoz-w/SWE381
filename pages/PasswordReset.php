<!DOCTYPE html>
<?php 
 session_start();
 if(!isset($_SESSION['login']))
  header('location:http://localhost/Recommender-System/pages/Login.php ?error=you have to login first');?>
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
    <title>ResetPassword</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ###########################ss##################################################################### -->
<!-- ################################################################################################ -->
<div class="bgded overlay" style="background-image:url('back.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <div class="fl_left"> 
        <!-- ################################################################################################ -->
        <ul class="nospace">
          <li><i class="fas fa-phone rgtspace-5"></i> 011-4676987</li>
          <li><i class="far fa-envelope rgtspace-5"></i><a style="color:#fbab45" href="mailto:CCISDEAN@KSU.EDU.SA">CCISDEAN@KSU.EDU.SA</li>
        </ul>
        <!-- ################################################################################################ -->
      </div>
      <div class="fl_right" > 
        <ul>
      <li> <a href="#" style="color:#fbab45">hi! <?php echo $_SESSION['login']; ?></a></li>
            <li><a href="http://localhost/Recommender-System/signout.php" title="Login" style="color:#fbab45"> Sign Out<i class="fas fa-sign-in-alt"></i></a></li>
        </ul>
        <!-- ################################################################################################ -->
        
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
        <h1><a href="index.html">recommender system</a></h1>
      </div>
      <nav id="mainav" class="fl_right"> 
        <ul class="clear">
          <li class="active"><a href="http://localhost/Recommender-System/UserHome.php">Home</a></li>
          
          
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
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<div class="container">
    <form action="checkOldPassword.php"method="POST">
  <div class="container">
    <h1>Reset Password</h1>
    <p>Please fill in this form to reset your password.</p>
    <hr>
   
    
    
  <?php
if (isset($_GET['passmessage'])) {
        echo "<div class='alert alert-success' role='alert' style='text-align:center;'>" . $_GET['passmessage'] ."</div>";
    }
    if (isset($_GET['errorpassmessage'])) {
        echo "<div class='alert alert-danger' role='alert' style='text-align:center;'>" . $_GET['errorpassmessage'] ."</div>";
    }
?>
    <label for="pws"><b>Current Password</b></label>
    <input type="password" placeholder="Enter Your Current Password" name="CurrentPassword"  required>


    <label for="pws"><b>New Password</b></label>
    <input type="password" placeholder="Enter Your New Password" name="NewPassword" id="pws" required>

    <hr>
  

    <button type="submit" class="registerbtn">Reset Password</button>
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


<!--################################################################################################ -->
<!--################################################################################################ -->
<!--################################################################################################ -->
    <div id="ctdetails" class="clear">
      <ul class="nospace clear">
        
        <li class="one_quarter">
          <div class="block clear"><a style="color:#fbab45" href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail: </strong><a style="color:#fbab45" href="mailto:CCISDEAN@KSU.EDU.SA">CCISDEAN@KSU.EDU.SA</a> 
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
