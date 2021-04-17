<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['login']) && !isset($_SESSION['Admin'])) {
  header("location:pages/login.php ");
}
?>
<html lang="">

<head>


  <title id="title">ADD MOVIE</title>
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
            <li><i class="far fa-envelope rgtspace-5"></i><a href="mailto:CCISDEAN@KSU.EDU.SA">CCISDEAN@KSU.EDU.SA</li>
          </ul>
          <!-- ################################################################################################ -->
        </div>
        <div class="fl_right">
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li> <a href=""> hi <?php if (isset($_SESSION['login'])) {
                                  echo $_SESSION['login'];
                                }
                                if (isset($_SESSION['Admin'])) {
                                  echo $_SESSION['Admin'];
                                } ?></a> </li>
                                <?php if (isset($_SESSION['login'])) { ?>
                                  <li><a href="http://localhost/Recommender-System/pages/PasswordReset.php" title="Reset"> Reset password<i class="fa-user-lock fa-fw fas"></i></a></li>
                                <?php } ?>
                                
            <li><a href="http://localhost/Recommender-System/signout.php" title="Login"> SignOut<i class="fas fa-sign-in-alt"></i></a></li>

            <li id="searchform">
              <div>
                <form action="adminSearch.php" method="get">
                  <fieldset>
                    <legend>Quick Search:</legend>
                      <button type="submit"><i class="fas fa-search"></i></button>
                  </fieldset>
                </form>
              </div>
            </li>
          </ul>
        </div>
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
        <h1 style="color: white">RECOMMENDER SYSTEM</h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="http://localhost/Recommender-System/allMovies.php">Home</a></li>


        </ul>
      </nav>
    </header>
  </div>


  <div class="wrapper row3">
    <main class="hoc container clear">

        <!-- ################################################################################################ -->
        <div>
            <div class=" hoc container clear" style="align-content:center">
                <h1 style="text-align: center"><strong> ADD MOVIE </strong> </h1>
                <form style=" align-content:center" action="addToDataBase.php" method="POST">


                    <div class="container">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Type<sup style="color:red">*</sup></label>
                            </div>
                            <div class="col-75">
                                <input required style="display: inline;" type="radio" name="type" value="0">Tv Show<input required style="display: inline;" type="radio" name="type" value="1"> Movie
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Title<sup style="color:red">*</sup></label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="title" placeholder="Title.." required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Poster's URL<sup style="color:red">*</sup></label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="#" name="poster" placeholder="URL.." required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="country">Appartion year<sup style="color:red">*</sup></label>
                            </div>
                            <div class="col-75">
                                <select required id="year" name="year">
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="subject">Genre <sup style="color:red">*</sup></label>
                            </div>
                            <div class="col-75">
                                <span><input type="checkbox" name="formGenre[]" value="Action">Action</span>
                                <span><input type="checkbox" name="formGenre[]" value="Drama">Drama</span>
                                <span><input type="checkbox" name="formGenre[]" value="Comedy">Comedy</span>
                                <span><input type="checkbox" name="formGenre[]" value="Fantasy">Fantasy</span>
                                <span><input type="checkbox" name="formGenre[]" value="Adventure">Adventure</span>
                                <span><input type="checkbox" name="formGenre[]" value="Family">Family</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="subject">Actors<sup style="color:red">*</sup></label>
                            </div>
                            <div class="col-75">
                                <textarea name="cast" placeholder="Actor..." style="height:150px" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="subject">Description<sup style="color:red">*</sup></label>
                            </div>
                            <div class="col-75">
                                <textarea name="disc" placeholder="Write something.." style="height:150px" required></textarea>
                            </div>
                        </div>
                        <?php if (isset($_SESSION['Admin'])) {  ?>
                        <?php } else { ?>
                            <div class="row">
                                <div class="col-25">
                                    <label for="subject">Comment</label>
                                </div>
                                <div class="col-75">
                                    <textarea name="comment" placeholder="Write your opinion.." style="height:150px"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="subject">Add rate</label>
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
                        <?php } ?>

                        <div class="row">
                            <button id="checkBtn"class="button" style="position: relative;left: 40%; margin-top: 20px; "><span>Submit </span></button>
                        </div>

                    </div>
                </form>
            </div>
            <div class="clear"></div>
    </main>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->


 <!-- <div class="wrapper row2">
    <div class="hoc container clear">
      <div class="sectiontitle">
        <p class="heading underline font-x2">Group members</p>
      </div>
      <ul class="nospace group team">
        <li class="one_quarter first">
          <figure><a class="btn" href="#"><img src="person.png" alt=""></a>
            <figcaption><strong>A.alanazi</strong> <em>member</em></figcaption>
          </figure>
        </li>
        <li class="one_quarter">
          <figure><a class="btn" href="#"><img src="person.png" alt=""></a>
            <figcaption><strong>O.alkanhal</strong> <em>member</em></figcaption>
          </figure>
        </li>
        <li class="one_quarter">
          <figure><a class="btn" href="#"><img src="person.png" alt=""></a>
            <figcaption><strong>A.almubarak</strong> <em>member</em></figcaption>
          </figure>
        </li>
        <li class="one_quarter">
          <figure><a class="btn" href="#"><img src="person.png" alt=""></a>
            <figcaption><strong>A.alwallan</strong> <em>member</em></figcaption>
          </figure>
        </li>
      </ul>
    </div>
  </div>-->

  <!--################################################################################################ -->
  <!--################################################################################################ -->
  <!--################################################################################################ -->
  <div id="ctdetails" class="clear" >
    <ul class="nospace clear">

      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a
              mail:
            </strong><a href="mailto:CCISDEAN@KSU.EDU.SA">CCISDEAN@KSU.EDU.SA</a>
          </span></div>
      </li>
    </ul>
  </div>


  <div class="wrapper row5" >
    <div id="copyright" class="hoc clear">
      <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">King Saud University -
          Software
          Engineering Department</a></p>
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="layout/scripts/jquery.min.js"></script>
  <script src="layout/scripts/jquery.backtotop.js"></script>
  <script src="layout/scripts/jquery.mobilemenu.js"></script>
  <!-- JAVASCRIPTS -->
  
  <script>
    $(document).ready(function() {
      $('#checkBtn').click(function() {
        checked = $("input[type=checkbox]:checked").length;

        if (!checked) {
          alert("You must check at least one genre.");
          return false;
        }
      });

    });
  </script>
</body>

</html>