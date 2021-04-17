<!DOCTYPE html>
<?php
  session_start();
    if(!isset($_SESSION['Admin'])) {
        header('location:http://localhost/Recommender-System/pages/Login.php??error=you have to login first');
    }
    
    ?>

<head>
<title>recommender system</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <style>
        .one_quarter input{
          width:187.14;
        }
        table.chart {
            border-collapse: collapse; 
        }
        
        table {
            display: table;
            border-collapse: separate;
            box-sizing: border-box;
            text-indent: initial;
            border-spacing: 2px;
            border-color: grey;
        }
        .chart thead {
            display: table-header-group;
            vertical-align: middle;
            border-color: inherit;
        }
        tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }
        .chart tr {
            border: none;
        }
        .chart th {
            color: #666666;
            font-size: 12px;
            padding-bottom: 3px;
            text-align: center;
            vertical-align: bottom;
            width: 62px;
            font-weight: bold;
            background-color: #D7D7D7;
        }
        
        tbody {
            vertical-align: middle;
            
        }
        .title{
            width:378px;
            height: 70px;
            text-align: center
        }

        table.chart thead tr{
            background-color: #f6f6f5;
            border: #fff 1px solid;
        }
        td {
            display: table-cell;
            vertical-align: inherit;
            color: grey;
            border: none;
        }
        .chart td {
            padding-right: 15px;   
        }
        table.chart td img {
            width: 45px;
            height: 67px;  
        }
        #showmore{
            border: none; color:#FBAB45;background: none;
        }
        #showmore:hover{
            color: red;
        }
        .container0 {
            position: relative;
            /* width: 50%; */
        }
        .sec {
      position: relative;
      right: 5px;
      top: -22px;
    }

    .counter.counter-lg {
      top: -24px !important;
    }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: 366px;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .container0:hover .image {
            opacity: 0.3;
        }

        .container0:hover .middle {
            opacity: 1;
        }

        .text {
            background-color: orange;
            color: white;
            font-size: 16px;
            padding: 16px 32px;
        }

        .text a {
            color: white;
        }
    </style>
    <script type="text/javascript">
        function showMore(tableID){
            var table = document.getElementById(tableID);

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var cell1 = row.insertCell(0);
			var element1 = document.createElement("img");
			element1.setAttribute("src", "google.png");
			cell1.appendChild(element1);

			var cell2 = row.insertCell(1);
            cell2.className='title';
            var element2 = document.createElement("a");
            element2.setAttribute("href","google.com");
			element2.innerHTML="google";
            cell2.appendChild(element2);
            
			var cell3 = row.insertCell(2);
			cell3.innerHTML="rating";


		}
        
        function add(tableID){
            for (var i=0; i<10;i++){
                showMore(tableID);
            }
        }
    </script>
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
          <li><i class="far fa-envelope rgtspace-5"></i><a href="mailto:CCISDEAN@KSU.EDU.SA">CCISDEAN@KSU.EDU.SA</li>
        </ul>
        <!-- ################################################################################################ -->
      </div>
      <div class="fl_right"> 
        <!-- ################################################################################################ -->
        <ul class="nospace">
          <li> <a href=""> hi admin</a>  </li>
          <li><a href="http://localhost/Recommender-System/signout.php" title="Login"> SignOut<i class="fas fa-sign-in-alt"></i></a></li>
          
          <li id="searchform">
            <div>
              <form action="adminSearch.php" method="get">
                <fieldset>
                  <legend>Quick Search:</legend>
                  <input type="text" placeholder="Enter search term&hellip;" name="term">
                  <button type="submit"><i class="fas fa-search"></i></button>
                </fieldset>
              </form>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left"> 
        <h1>recommender system</h1>
      </div>
      <nav id="mainav" class="fl_right"> 
        <ul class="clear">
        <?php require "pages/db-config.php";
            $con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
            $query3 = 'SELECT * FROM movie WHERE isvalidated = 0'; //You don't need a ; like you do in SQL
            $result3 = mysqli_query($con, $query3);
            $num = mysqli_num_rows($result3); ?>
            <li class="active"><a href="allvalid.php">Validate Movies<span class="sec counter counter-lg" style="color:red;"><?php echo $num; ?></span></a></li>
          <li class="active"><a href="Add.php">Add movie</a></li>
      </nav>
    </header>
  </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row3"> 
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <div id="gallery">
        <figure>
        <header class="heading underline font-x2">Movies</header>
              <ul class="nospace clear">
              <?php 
                $con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
                $query = 'SELECT * FROM movie WHERE isvalidated = 1'; //You don't need a ; like you do in SQL
                $result = mysqli_query($con,$query);
                $first =4;
                
                
                while($row = mysqli_fetch_array($result)){ 

                  if(($first % 4) == 0){ ?>
                      <li class="one_quarter first">
                          <div class="container0">
                              <img src="<?php echo $row['poster'] ?>" class="image">
                              <div class="middle">
                                  <a href="javascript:void(0)" class="see-more">
                                      <form action="MovieScreen.php" method="post">
                                          <input type="hidden" name="poster" value="<?php echo $row['poster'] ?> ">
                                          <input type="hidden" name="title" value=" <?php echo $row['title'] ?> ">
                                          <input type="hidden" name="cast" value=" <?php echo $row['cast'] ?> ">
                                          <input type="hidden" name="year" value=" <?php echo $row['year'] ?> ">
                                          <input type="hidden" name="genre" value=" <?php echo $row['genre'] ?> ">
                                          <input type="hidden" name="disc" value=" <?php echo $row['disc'] ?> ">
                                          <input type="hidden" name="type" value="' <?php echo $row['type'] ?> '">
                                          <!-- <input style="font-weight:bold;background-color: grey;color:#FBAB45; width: 187.14px; border: 0px" type="submit" value="see more"> -->
                                          <div class="text">See more</div>
                                  </a>
                                  </form>
                              </div>
                          </div>
                      </li>
                    <?php
                  }
                  else{ ?>
                      <li class="one_quarter">
                          <div class="container0">
                              <img src="<?php echo $row['poster'] ?>" class="image">
                              <div class="middle">
                                  <a href="javascript:void(0)" class="see-more">
                                      <form action="MovieScreen.php" method="post">
                                          <input type="hidden" name="poster" value="<?php echo $row['poster'] ?> ">
                                          <input type="hidden" name="title" value=" <?php echo $row['title'] ?> ">
                                          <input type="hidden" name="cast" value=" <?php echo  $row['cast'] ?> ">
                                          <input type="hidden" name="year" value=" <?php echo $row['year'] ?> ">
                                          <input type="hidden" name="genre" value=" <?php echo $row['genre'] ?> ">
                                          <input type="hidden" name="disc" value=" <?php echo $row['disc'] ?> ">
                                          <input type="hidden" name="type" value="' <?php echo $row['type'] ?> '">
                                          <!-- <input style="font-weight:bold;background-color: grey;color:#FBAB45; width: 187.14px; border: 0px" type="submit" value="see more"> -->
                                          <div class="text">See more</div>
                                  </a>
                                  </form>
                              </div>
                          </div>
                      </li>
                    <?php
                  }
                $first++;
                }
             mysqli_close($con);  ?>              
          </ul>
          
        </figure>
      </div>
    
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
      	
  </div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
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
          <figcaption><strong>A.alwaalan</strong> <em>member</em></figcaption>
        </figure>
      </li>
    </ul>
  </div>
</div>
<!--################################################################################################ -->
<!--################################################################################################ -->
<!--################################################################################################ -->
    <div id="ctdetails" class="clear">
      <ul class="nospace clear">
        <li class="one_quarter first">
          <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong>  011-4676987
	</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail: </strong><a href="mailto:CCISDEAN@KSU.EDU.SA">CCISDEAN@KSU.EDU.SA</a> 
	</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Sunday - Thursdat:</strong> 08.00am - 5.00pm</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Come visit us:</strong> Directions to <a href="https://goo.gl/maps/BugyDwu4hWgDVypL7" type="_blank">our location</a></span></div>
        </li>
      </ul>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).on("click", ".see-more", function() {
        var form = $(this).closest("form");
        console.log(form);
        form.submit();
    });
</script>
</body>
</html>