<!DOCTYPE html>

<html lang="">


<head>
	<style>
.hide {
  display: none;
  margin: 5px;
}
    
.btn:hover + .hide {
  display: block;
  
}
</style>
<title>recommender system</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
      <div class="fl_right"> 
        <!-- ################################################################################################ -->
        <ul class="nospace">
          <li><a href="pages/Login.php" title="Login">Login <i class="fas fa-sign-in-alt"></i></a></li>
          <li><a href="pages/Registration.php" title="Sign Up">Sign Up <i class="fas fa-edit"></i></a></li>
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
   <form style="position: absolute; left: 40%; top: 200px">
  <p >Type  <input style="display: inline;" type=radio name="ChooseT"> Movie <input style="display: inline;" type="radio" name="ChooseT"> TV Series</p> 

  <p  >Title <input type="text" size="25"></p>
  <p>Crew</p>
  <input style="color: black" value="Click here to add a member" type="button" onclick="addInput()"/>
  <span id="responce"></span>
  <p>Description</p>
<textarea rows="4" cols="50" style=" color: black"></textarea>
<p>Genre <br> <input style="display: inline;" type=checkbox name="ChooseG"> Action <input style="display: inline;" type="checkbox" name="ChooseG"> Anime<input style="display: inline;" type=checkbox name="ChooseG"> Comedies <input style="display: inline;" type="checkbox" name="ChooseG"> Children & Family <input style="display: inline;" type="checkbox" name="ChooseG"> Horror</p>
<p>Appartion year</p>
<select id="year" name="year" style="color: black">
    <option value="0">year</option>
    <option value="1957">1957</option>
    <option value="1958">1958</option>
    <option value="1959">1959</option>
    <option value="1960">1960</option>
    <option value="1961">1961</option>
    <option value="1962">1962</option>
    <option value="1963">1963</option>
    <option value="1964">1964</option>
    <option value="1965">1965</option>
    <option value="1966">1966</option>
    <option value="1967">1967</option>
    <option value="1968">1968</option>
    <option value="1969">1969</option>
    <option value="1970">1970</option>
    <option value="1971">1971</option>
    <option value="1972">1972</option>
    <option value="1973">1973</option>
    <option value="1974">1974</option>
    <option value="1975">1975</option>
    <option value="1976">1976</option>
    <option value="1977">1977</option>
    <option value="1978">1978</option>
    <option value="1979">1979</option>
    <option value="1980">1980</option>
    <option value="1981">1981</option>
    <option value="1982">1982</option>
    <option value="1983">1983</option>
    <option value="1984">1984</option>
    <option value="1985">1985</option>
    <option value="1986">1986</option>
    <option value="1987">1987</option>
    <option value="1988">1988</option>
    <option value="1989">1989</option>
    <option value="1990">1990</option>
    <option value="1991">1991</option>
    <option value="1992">1992</option>
    <option value="1993">1993</option>
    <option value="1994">1994</option>
    <option value="1995">1995</option>
    <option value="1996">1996</option>
    <option value="1997">1997</option>
    <option value="1998">1998</option>
    <option value="1999">1999</option>
    <option value="2000">2000</option>
    <option value="2001">2001</option>
    <option value="2002">2002</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
</select>
<br>
<input style="color: black; left: 60%" type="submit" name="submit">


<script>
var countBox =1;
var boxName = 0;
function addInput()
{
     var boxName="textBox"+countBox; 
document.getElementById('responce').innerHTML+='<br><input style="color: black;" type="text" id="'+boxName+'"   />';
     countBox += 1;
     document.getElementById('pageintro').innerHTML+='<br><br><br>';
}
</script>

</form>
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
          <figcaption><strong>A.alwallan</strong> <em>member</em></figcaption>
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
        
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail: </strong><a href="mailto:CCISDEAN@KSU.EDU.SA">CCISDEAN@KSU.EDU.SA</a> 
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
