<!DOCTYPE html>

<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>recommender system</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <style>
        table.chart {
            border-collapse: collapse; 
        }
        .full-width {
                width:
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
    </style>
    <script type="text/javascript">
        function showMore(tableID){
            var table = document.getElementById(tableID);

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var cell1 = row.insertCell(0);
			var element1 = document.createElement("img");
			element1.setAttribute("src", "fghdfgh");
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
          <li><a href="index.html"><i class="fas fa-home"></i></a></li>
          <li><a href="#" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
          <li><a href="#" title="Sign Up"><i class="fas fa-edit"></i></a></li>
          <li id="searchform">
            <div>
              <form action="#" method="post">
                <fieldset>
                  <legend>Quick Search:</legend>
                  <input type="text" placeholder="Enter search term&hellip;">
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
        <h1><a href="index.html">recommender system</a></h1>
      </div>
      <nav id="mainav" class="fl_right"> 
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a class="drop" href="#">Categrios</a>
            <ul>
              <li><a href="pages/gallery.html">Action</a></li>
              <li><a href="pages/full-width.html">Anime</a></li>
              <li><a href="pages/sidebar-left.html">Comdedies</a></li>
              <li><a href="pages/sidebar-right.html">Children & Family</a></li>
              <li><a href="pages/font-icons.html">Horror</a></li>
            </ul>
          </li>
        
          <li><a href="#">Tv show</a></li>
          <li><a href="#">recommend a list</a></li>
        </ul>
      </nav>
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
</div>
  <!-- ################################################################################################ -->
  <div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <div id="gallery">
        <figure>
          <header class="heading">Gallery Title Goes Here</header>
          <ul class="nospace clear">
             
            <li class="one_quarter first"><img src="back.jpg" alt=""><form><input style="font-weight: bold;background-color: grey;color:#FBAB45; width: 100%; border: 0px" type="submit" value="read more"></form> </li>
            <li class="one_quarter"><img src="back.jpg" alt=""><form><input style="font-weight: bold;background-color: grey;color:#FBAB45; width: 100%; border: 0px" type="submit" value="read more"></form></li>
            <li class="one_quarter"><img src="back.jpg" alt=""><form><input style="font-weight: bold;background-color: grey;color:#FBAB45; width: 100%; border: 0px" type="submit" value="read more"></form></li>
            <li class="one_quarter"><img src="back.jpg" alt=""><form><input style="font-weight: bold;background-color: grey;color:#FBAB45; width: 100%; border: 0px" type="submit" value="read more"></form></li>
            <li class="one_quarter first"><img src="back.jpg" alt=""><form><input style="font-weight: bold;background-color: grey;color:#FBAB45; width: 100%; border: 0px" type="submit" value="read more"></form></li>
            <li class="one_quarter"><img src="back.jpg" alt=""><form><input style="font-weight: bold;background-color: grey;color:#FBAB45; width: 100%; border: 0px" type="submit" value="read more"></form></li>
            <li class="one_quarter"><img src="back.jpg" alt=""><form><input style="font-weight: bold;background-color: grey;color:#FBAB45; width: 100%; border: 0px" type="submit" value="read more"></form></li>
            <li class="one_quarter"><img src="back.jpg" alt=""><form><input style="font-weight: bold;background-color: grey;color:#FBAB45; width: 100%; border: 0px" type="submit" value="read more"></form></a></li>
            <li class="one_quarter first"><img src="back.jpg" alt=""><form><input style="font-weight: bold;background-color: grey;color:#FBAB45; width: 100%; border: 0px" type="submit" value="read more"></form></li>
            <li class="one_quarter"><img src="back.jpg" alt=""><form><input style="font-weight: bold;background-color: grey;color:#FBAB45; width: 100%; border: 0px" type="submit" value="read more"></form></li>
            <li class="one_quarter"><img src="back.jpg" alt=""><form><input style="font-weight: bold;background-color: grey;color:#FBAB45; width: 100%; border: 0px" type="submit" value="read more"></form></li>
            <li class="one_quarter"><img src="back.jpg" alt=""><form><input style="font-weight: bold;background-color: grey;color:#FBAB45; width: 100%; border: 0px" type="submit" value="read more"></form></li>
              
          </ul>
          <figcaption>Gallery Description Goes Here</figcaption>
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
          <figcaption><strong>A.almobark</strong> <em>member</em></figcaption>
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
</body>
</html>