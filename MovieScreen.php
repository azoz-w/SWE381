<?php

/** @noinspection PhpElementIsNotAvailableInCurrentPhpVersionInspection */
session_start();

?>
<!DOCTYPE html>

<html lang="">


<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .sec {
            position: relative;
            right: 5px;
            top: -22px;
        }

        .counter.counter-lg {
            top: -24px !important;
        }

        .hide {
            display: none;
            margin: 5px;
        }

        .btn:hover+.hide {
            display: block;

        }

        div {
            padding: 5px;

        }

        /*.wrapper {*/

        /*    !*background-color:#aaaaaa;*!*/
        /*    margin-bottom: 100px;*/
        /*    margin-right: 150px;*/
        /*    margin-left: 80px;*/
        /*    text-align: center;*/
        /*    font-size: larger;*/
        /*}*/

        .wrapper .title {
            font: 36px Arial, sans-serif;
            font-weight: normal;
            line-height: 110%;

            margin: 0px;
            padding-bottom: 3px;
            padding-left: 5px;
            text-align: left;
        }

        .rating_wrapper {
            float: right;
            position: relative;
            margin-left: 5px;
            width: 185px;
            z-index: 1;
        }

        .rating_wrapper .rating {
            position: relative;
            float: left;
            font-size: 11px;
            /* height: -30px; */
            line-height: 13px;
            /* padding: 2px 0 0 34px; */
            width: 250px;
        }

        .desc {
            text-align: left;

        }

        .subtext {
            font-size: large;
            color: rgb(255, 255, 255);
        }



        IMG.poster {
            display: block;
            margin-left: auto;
            margin-right: auto
        }

        a:hover {
            color: rgb(18, 174, 189);
        }

        .user-review {
            margin-left: 50px;
            margin-top: 8px;
            margin-bottom: 8px;

        }

        .user-review {
            text-align: left;
        }

        .user-review #review {
            width: 500px;
        }

        #comments li {

            margin: 0 0 10px 0;
            padding: 15px;
        }

        /*.modal {*/
        /*    display: none;*/
        /*    !* Hidden by default *!*/
        /*    position: fixed;*/
        /*    !* Stay in place *!*/
        /*    z-index: 1;*/
        /*    !* Sit on top *!*/
        /*    padding-top: 100px;*/
        /*    !* Location of the box *!*/
        /*    left: 0;*/
        /*    top: 0;*/
        /*    width: 100%;*/
        /*    !* Full width *!*/
        /*    height: 100%;*/
        /*    !* Full height *!*/
        /*    overflow: auto;*/
        /*    !* Enable scroll if needed *!*/
        /*    background-color: rgb(100, 100, 100);*/
        /*    !* Fallback color *!*/
        /*    background-color: rgba(71, 71, 71, 0.4);*/
        /*    !* Black w/ opacity *!*/
        /*}*/

        /*.modal-content {*/
        /*    background-color: #fefefe;*/
        /*    margin: auto;*/
        /*    padding: 20px;*/

        /*    width: 10%;*/
        /*}*/

        /*!* The Close Button *!*/
        /*.close {*/
        /*    color: #aaaaaa;*/
        /*    float: right;*/
        /*    font-size: 28px;*/
        /*    font-weight: bold;*/
        /*}*/

        /*.close:hover,*/
        /*.close:focus {*/
        /*    color: #000;*/
        /*    text-decoration: none;*/
        /*    cursor: pointer;*/
        /*}*/
    </style>
    <title id="title"><?php echo $_POST['title'] ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<?php require "pages/db-config.php";?>
<body id="top">
    <!-- ################################################################################################ -->

    <div class="bgded overlay">
        <!-- ################################################################################################ -->
        <div class="wrapper row0">
            <div id="topbar" class="hoc clear">
                <div class="fl_left">
                    <ul class="nospace">
                        <li><i class="fas fa-phone rgtspace-5"></i> 011-4676987</li>
                        <li><i class="far fa-envelope rgtspace-5"></i><a href="mailto:CCISDEAN@KSU.EDU.SA">CCISDEAN@KSU.EDU.SA</li>
                    </ul>
                    <!-- ################################################################################################ -->
                    <!-- ################################################################################################ -->
                </div>
                <div class="fl_right">
                    <ul class="nospace">
                        <?php if (!isset($_SESSION['login']) && !isset($_SESSION['Admin'])) { ?>

                            <li><a href="http://localhost/Recommender-System/pages/Login.php" title="Login"> Login<i class="fas fa-sign-in-alt"></i></a></li>
                            <li><a href="http://localhost/Recommender-System/pages/Registration.php" title="Sign Up"> Sign Up<i class="fas fa-edit"></i></a></li>
                            <?php } else {
                            if (isset($_SESSION['login'])) { ?>
                                <li> <a href="">hi! <?php echo $_SESSION['login']; ?></a></li>
                                <li><a href="http://localhost/Recommender-System/pages/PasswordReset.php" title="Reset"> Reset password<i class="fa-user-lock fa-fw fas"></i></a></li>
                                <li><a href="http://localhost/Recommender-System/signout.php" title="Login"> Sign Out<i class="fas fa-sign-in-alt"></i></a></li>

                            <?php } else {
                            ?>

                                <li> <a href=""> hi admin</a> </li>
                                <li><a href="http://localhost/Recommender-System/signout.php" title="Login"> SignOut<i class="fas fa-sign-in-alt"></i></a></li>

                        <?php }
                        }
                        ?>



                    </ul>

                </div>


                <!-- ################################################################################################ -->

                <!-- ################################################################################################ -->


            </div>
        </div>
    </div>

    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
            <div id="logo" class="fl_left">
                <h1>RECOMMENDER SYSTEM</h1>
            </div>
            <nav id="mainav" class="fl_right">
                <ul class="clear">

                    <?php if (isset($_SESSION['Admin'])) { ?>
                        <li class="active"><a href="AdminHome.php">Home</a></li>
                        <?php 
                        $con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
                        $query3 = 'SELECT * FROM movie WHERE isvalidated = 0'; //You don't need a ; like you do in SQL
                        $result3 = mysqli_query($con, $query3);
                        $num = mysqli_num_rows($result3); ?>
                        <li class="active"><a href="allvalid.php">Validate Movies<span class="sec counter counter-lg" style="color:red;"><?php echo $num; ?></span></a></li>
                        <li class="active"><a href="adminAdd.php">Add movie</a></li>
                    <?php }
                    if (isset($_SESSION['login'])) { ?>
                        <li class="active"><a href="UserHome.php">Home</a></li>
                        <li class="active"><a href="recommendMovies.php">Want a recommendation?</a></li>
                        <li class="active"><a href="add.php">Add Movie</a></li>
                    <?php }
                    if (!isset($_SESSION['login']) && !isset($_SESSION['Admin'])) { ?>
                        <li class="active"><a href="allMovies.php">Home</a></li>

                    <?php } ?>


                </ul>
            </nav>
        </header>
    </div>



    <!-- main body -->
    <div class="wrapper row3">
        <main class="hoc container clear">
            <?php
            $title = trim($_POST['title']);

            $con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
            $query = "SELECT AVG(rate) as rateAV FROM review where title ='" . $title . "' ";
            $result = mysqli_query($con, $query);
            ?>


            <!-- ################################################################################################ -->
            <!--                    <div>-->
            <!--                        <div class=" hoc container clear" style="align-content:center">-->
            <div class="container-fluid">
                <div class="row">
                    <!-- left panel -->
                    <div class="col-lg-3">
                        
                            <div class="panel-body" style=" width:375px;">
                                <!--                                        <a href="#">-->
                                <img src=<?php echo $_POST['poster']; ?> alt="poster" class="img-responsive" style="width: 350px; height: 550px;">
                                <!--                                        </a>-->
                                <h2></h2>
                            </div>
                        
                    </div>

                    <!--                            <div class="col-sm-offset-1 col-sm-4 col-md-4"  style="background-color: grey">-->
                    <div class="col-lg-8   col-lg-offset-1">
                        <div class="wrapper">
                            <div class="title" style="background-color:  #555353">
                                <h1 style="display: inline-block; color: white" id="title"><?php echo $_POST['title']; ?>
                                </h1>
                                <div class="rating_wrapper">
                                    <div class="rating" style="font-size: 30px;">
                                        <form action="reviewUser.php" method="post" style="display: inline">
                                            <input type="hidden" name="title" value=" <?php echo $_POST['title'] ?> ">
                                            <?php if (!isset($_SESSION['Admin'])) { ?>
                                                <a href="javascript:void(0)" class="rate-1">Rate</a>

                                        </form><span style="color:  #b4b4b4;">|</span> <?php } ?>
                                    <span style="color: white">
                                        <?php
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo number_format($row['rateAV'], 1, '.', '');
                                        }
                                        ?>
                                    </span>
                                    <span style="font-size: 0.75em; color: #b4b4b4">/5</span>
                                    </div>
                                </div>
                                <div class="subtext" style="color: silver">
                                    <span id="age"></span>
                                    <span class="gost"></span>
                                    <span id="length"></span>
                                    <span class="gost"></span>
                                    <?php
                                    $var = (string)$_POST['genre'];
                                    $vars = explode(' | ', (string)$var);
                                    $count = count($vars);
                                    $i = 0;
                                    foreach ($vars as $att) {
                                        if ($i < $count - 1)
                                            echo  $att . ", ";
                                        else
                                            echo $att;
                                        $i++;
                                    }

                                    ?>
                                    <!--                                            <a href="#"></a>-->


                                </div>

                            </div>


                            <div class="desc" style="background-color: silver">
                                <h2>Description</h2>
                                <?php
                                $description = $_POST['disc'];

                                echo '<p><span id="desc">' . $description . '</span></p>';

                                ?>
                            </div>

                            <div class="casts" style="background-color: silver">
                                <h2 style="text-align: left">Cast</h2>

                                <p><?php echo $_POST['cast']; ?></p>
                            </div>



                            <div class="reviews" style="background-color: silver">
                                <h2 style="text-align:left">User reviews</h2>
                                <?php


                                $query = "SELECT * FROM review WHERE title= '$title'"; //You don't need a ; like you do in SQL
                                $resul = mysqli_query($con, $query);
                                echo '<ul>';
                                while ($row = mysqli_fetch_array($resul)) {
                                    echo    '
          <li style=" color: black;
    background-color: #FBFBFB; margin: 0 0 10px 0; padding:15px;">
            <article>
              <header>
                <figure class="avatar"><img style="width: auto;
    max-width: 100%;
    height: auto;
    margin: 0;
    padding: 0;
    border: none;
    line-height: normal;

    vertical-align: middle;" src="avatar.jpeg" alt=""></figure>

                <address>
                By <a href="#">' . $row['usern'] . '</a>
                </address>
                <p>' . $row['rate'] . '/5</p>
              </header>
              
                <p>' . $row['comment'] . '</p>
             
            </article>
          </li>' ?>
                                <?php
                                } ?>





                                <!-- comment      echo    '<p class="user-review">
                                                '.$row['rate'].'/5
                                                 | by <span id="username">'.$row['usern'].'</span>

                                                    <p id="review-text">'. $row['comment'].'</p>
                                                </p>'; }
                                             mysqli_close($con);*/    -->


                            </div>
                            <div style="background-color: silver">
                                <?php if (!isset($_SESSION['Admin'])) { ?>
                                    <!--                                        <h2 style="text-align: left">Want to add review ? Click </h2>-->

                                    <form action="reviewUser.php" method="post">
                                        <input type="hidden" name="title" value=" <?php echo $_POST['title'] ?> ">
                                        <!--                                            <input style="font-weight:bold;background-color: grey;color:#FBAB45; width: 187.14px; border: 0px" type="submit" name="rev" value="here">-->
                                        <h2 style="text-align: left">Want to add review ? <a href="javascript:void(0)" class="rate-1">Click</a> </h2>
                                    </form>
                                <?php } ?>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="clear"></div>
        </main>
    </div>



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
    <script>
        $(document).on("click", ".rate-1", function() {
            var form = $(this).closest("form");
            console.log(form);
            form.submit();
        });
    </script>
</body>

</html>