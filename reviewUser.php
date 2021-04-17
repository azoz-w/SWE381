<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("location:pages/login.php?err=You need to login first!");
}
?>
<html lang="">

<head>


  <title id="title">add review</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

  <style>
      @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
    .button {
      border-radius: 4px;
      background-color: #f4511e;
      border: none;
      color: #FFFFFF;
      text-align: center;
      font-size: 28px;
      padding: 20px;
      width: 200px;
      transition: all 0.5s;
      cursor: pointer;
      margin: 5px;
    }

    .button span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
    }

    .button span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;
    }

    ::placeholder {
      /* Chrome, Firefox, Opera, Safari 10.1+ */
      color: grey;
      opacity: 0.7;
      /* Firefox */
    }

    .button:hover span {
      padding-right: 25px;
    }

    .button:hover span:after {
      opacity: 1;
      right: 0;
    }

    .checkbox {
      display: inline-block;
      float: left;
      width: 25%;
      font-size: 16px;
      line-height: 36px;
      text-align: left;
    }

    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }

    input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }

    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }

    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

      .col-25,
      .col-75,
      input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }

    input[type=checkbox] {
      display: inline-block;
    }

    /** {*/
    /*  margin: 0;*/
    /*  padding: 0;*/
    /*}*/
      @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
      fieldset, label { margin: 0; padding: 0; }
    .rating {
        border: none;
        float: left;
    }

    .rating > input { display: none; }
    .rating > label:before {
        margin: 5px;
        font-size: 1.25em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    .rating > .half:before {
        content: "\f089";
        position: absolute;
    }

    .rating > label {
        color: #ddd;
        float: right;
    }

    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating > input:checked ~ label, /* show gold star when clicked */
    .rating:not(:checked) > label:hover, /* hover current star */
    .rating:not(:checked) > label:hover ~ label { color: #bf9500;  } /* hover previous stars in list */

    .rating > input:checked + label:hover, /* hover current star when changing rating */
    .rating > input:checked ~ label:hover,
    .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
    .rating > input:checked ~ label:hover ~ label { color: #bf9500;  }
  </style>
</head>

<body id="top">
  <!-- ################################################################################################ -->

  <div class="bgded overlay" style="background-image:url('back.jpg');">
    <!-- ################################################################################################ -->
    <div class="wrapper row0">
      <div id="topbar" class="hoc clear">
        <div class="fl_left">
          <!-- ################################################################################################ -->
          <!-- ################################################################################################ -->
        </div>
        <div class="fl_left">
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li><i class="fas fa-phone rgtspace-5"></i> 011-4676987</li>
            <li><i class="far fa-envelope rgtspace-5"></i><a href="mailto:CCISDEAN@KSU.EDU.SA">CCISDEAN@KSU.EDU.SA</li>
          </ul>
          <!-- ################################################################################################ -->
        </div>
        <div class="fl_right">
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li> <a href="#"> hi <?php echo $_SESSION['login']; ?></a> </li>
            <li><a href="http://localhost/Recommender-System/pages/PasswordReset.php" title="Reset"> Reset password<i class="fa-user-lock fa-fw fas"></i></a></li>
            <li><a href="http://localhost/Recommender-System/signout.php" title="Login"> SignOut<i class="fas fa-sign-in-alt"></i></a></li>

          </ul>
        </div>
      </div>

    </div>

    <div class="wrapper row1">
      <header id="header" class="hoc clear">
        <div id="logo" class="fl_left">
          <h1><a href="#">recommender system</a></h1>
        </div>
        <nav id="mainav" class="fl_right">
          <ul class="clear">
            <li class="active"><a href="UserHome.php">Home</a></li>
            <li class="active"><a href="recommendMovies.php">Want a recommendation?</a></li>

            <li class="active"><a href="add.php">Add Movie</a></li>
          </ul>
        </nav>
      </header>
    </div>

    <div class="wrapper row3">
      <main class="hoc container clear">

        <body>
          <div class=" hoc container clear" style="align-content:center">

            <form style=" align-content:center" action="addReview.php" method="POST">
            <h1 style="text-align:center">RATE <?php echo $_POST['title']; ?> </h1>
              <div class="container">
                <div class="row">
                  <div class="col-25">
                    <label for="fname">RATE</label>
                  </div>
                  <div class="col-75">
                    <div class="rate">
                        <fieldset class="rating">
                            <input type="radio" id="star5" name="rate" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rate" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rate" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rate" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rate" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rate" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rate" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rate" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rate" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rate" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="subject">Comment</label>
                  </div>
                  <div class="col-75">
                    <textarea name="comment" placeholder="Write your opinion.." style="height:150px"></textarea>
                  </div>
                </div>

                <div class="row" >
                  <button class="button" style="position: relative; left: 40%; margin-top: 20px;"><span>Submit </span></button>
                </div>
                <input type="hidden" name="title" value=" <?php echo $_POST['title'] ?> ">
                <input type="hidden" name="name" value="<?php echo $_SESSION['login'] ?>">
            </form>
          </div>
        </body>
        <div class="clear"></div>
      </main>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->


<!--    <div class="wrapper row2">-->
<!--      <div class="hoc container clear">-->
<!--        <div class="sectiontitle">-->
<!--          <p class="heading underline font-x2">Group members</p>-->
<!--        </div>-->
<!--        <ul class="nospace group team">-->
<!--          <li class="one_quarter first">-->
<!--            <figure><a class="btn" href="#"><img src="person.png" alt=""></a>-->
<!--              <figcaption><strong>A.alanazi</strong> <em>member</em></figcaption>-->
<!--            </figure>-->
<!--          </li>-->
<!--          <li class="one_quarter">-->
<!--            <figure><a class="btn" href="#"><img src="person.png" alt=""></a>-->
<!--              <figcaption><strong>O.alkanhal</strong> <em>member</em></figcaption>-->
<!--            </figure>-->
<!--          </li>-->
<!--          <li class="one_quarter">-->
<!--            <figure><a class="btn" href="#"><img src="person.png" alt=""></a>-->
<!--              <figcaption><strong>A.almubarak</strong> <em>member</em></figcaption>-->
<!--            </figure>-->
<!--          </li>-->
<!--          <li class="one_quarter">-->
<!--            <figure><a class="btn" href="#"><img src="person.png" alt=""></a>-->
<!--              <figcaption><strong>A.alwallan</strong> <em>member</em></figcaption>-->
<!--            </figure>-->
<!--          </li>-->
<!--        </ul>-->
<!--      </div>-->
<!--    </div>-->

    <!--################################################################################################ -->
    <!--################################################################################################ -->
    <!--################################################################################################ -->
    <div id="ctdetails" class="clear">
      <ul class="nospace clear">

        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a
                mail:
              </strong><a href="mailto:CCISDEAN@KSU.EDU.SA">CCISDEAN@KSU.EDU.SA</a>
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
      <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">King saud University -
          Software
          Engineering Department</a></p>
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