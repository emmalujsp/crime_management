<html>
<head>
<title>Home Page</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
.jumbotron{
background-image:url("photos/banner1.jpg");
height:400;
background-size:100% 100%;
color:white;
}
.navbar-nav{
padding-left:20px;
}
.nav-item:hover{
font-size:17px;
font-weight:bold;
}
.container
{
padding:100;
}
#menu-tile,#special-tile,#map-tile
{
height:250px;
width:100%;
postion:relative;
border:2px solid #3F0C1F;
overflow: hidden
}
#menu-tile:hover, #special-tile:hover, #map-tile:hover
{
box-shadow:0 1px 5px 1px red;
}
#menu-tile
{
background:url("photos/img1.jpg") no-repeat;
background-position:center;
}
#special-tile
{
background:url("photos/img2.jpg") no-repeat;
background-position:center;
}
#menu-tile span,#special-tile span,#map-tile span
{
position:absolute;
bottom:0;
left:0;
width:100%;
text-align:center;
font-size:1.6em;
text-transform:uppercase;
background-color:#000;
color:#fff;
opacity:.8;
}
.panel-footer
{
margin-top:30px;
padding-top:35px;
padding-bottom:30px;
background-color:#222;
border-top:0;
color:white; 
}
.panel-footer section
{
text-align:center;
}
.visible-xs
{
height:2px;border-width:0;color:gray;background-color:gray;
}
body {
  background-image: url("photos/bg.jpg");
  background-attachment: fixed;
  background-position: center;
  background-size: cover;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="photos/logo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    CRIME REPORTING CELL
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="homepage.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Menu</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Cases</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">FIR</a>
      </li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
				
					<?php 
						SESSION_START();
						if(isset($_SESSION['name']))
						{
							$us=$_SESSION['name'];
							if($us=='Admin')
							{
							echo "<li class='nav-item active'><a href='homepage.php' class='nav-link'><span class='glyphicon glyphicon-user'></span>".$us."</a></li>";
							echo "<li class='nav-item active'><a href='admindashboard.php' class='nav-link'><span class='glyphicon glyphicon-user'></span>".'Dashboard'."</a></li>";
							echo "<li class='nav-item active'><a href='logout.php' class='nav-link'><span class='glyphicon glyphicon-user'></span>".'Logout'."</a></li>";
							}
							else
							{
							echo "<li class='nav-item active'><a href='homepage.php' class='nav-link'><span class='glyphicon glyphicon-user'></span>".$us."</a></li>";
							echo "<li class='nav-item active'><a href='user_dashboard.php' class='nav-link'><span class='glyphicon glyphicon-user'></span>".'Dashboard'."</a></li>";
							echo "<li class='nav-item active'><a href='logout.php' class='nav-link'><span class='glyphicon glyphicon-user'></span>".'Logout'."</a></li>";
							}
						}
						else if(isset($_SESSION['place']))
						{
							$us=$_SESSION['place'];
							echo "<li class='nav-item active'><a href='homepage.php' class='nav-link'><span class='glyphicon glyphicon-user'></span>".$us."</a></li>";
							echo "<li class='nav-item active'><a href='police_dashboard.php' class='nav-link'><span class='glyphicon glyphicon-user'></span>".'Dashboard'."</a></li>";
							echo "<li class='nav-item active'><a href='logout.php' class='nav-link'><span class='glyphicon glyphicon-user'></span>".'Logout'."</a></li>";
						}
						else
						{
							echo "<li class='nav-item active'><a href='login.php' class='nav-link'><span class='glyphicon glyphicon-user'></span>"."Your account"."</a></li>";
							echo "<li class='nav-item active'><a href='signup.html' class='nav-link'><span class='far fa-user-circle'></span>"."&nbspSignup"."</a></li>";
						}
					?>
				
	</ul>
  </div>
</nav>
<div class="jumbotron">
	<div class="container text-center">
	<h1 class="display-4">CRIME REPORTING CELL</h1>
	<h3 class="display-5">CRIME SURVEILLANCE AND REPORTING PORTAL</h3>
	</div>
</div>
<div class="container">
	<div id="hometiles" class="row">
		<div class="col-md-4 col-sm-6 col-xs-12">
		<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="photos/tile1.jpeg" height="200px" alt="Card image cap">
  <div class="card-body" style="height: 15rem;" >
    <h5 class="card-title">MISSING</h5>
    <p class="card-text" >We always come forward to help people whose near and dear ones or any other relatives are missing and they are desperately looking for them.</p>
    
  </div>
    <div class="card-footer" >
  <a href="missing_view.php" class="btn btn-primary">Get List</a>
  </div>
</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
		<div class="card" style="width: 18rem;">
  <img class="card-img-top"  src="photos/tile2.jpg" height="200px" alt="Card image cap">
  <div class="card-body" style="height: 15rem;">
    <h5 class="card-title">FILE FIR</h5>
    <p class="card-text">An FIR is a written document that is filed by the police when you are a victim of a cognizable offence, i.e. an offence for which police can take action without prior court approval.</p>
   
  </div>
    <div class="card-footer" >
  <a href="#" class="btn btn-primary">FIR</a>
  </div>
</div>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
		<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="photos/tile3.jpg" height="200px" alt="Card image cap">
  <div class="card-body" style="height: 15rem;">
    <h5 class="card-title">WANTED</h5>
    <p class="card-text">Help us to find these people. Red Notices are issued for fugitives wanted either for prosecution or to serve a sentence..</p>
  </div>
  <div class="card-footer" >
  <a href="wanted_view.php" class="btn btn-primary">Get List</a>
  </div>
</div>
		</div>
	</div>
</div>
<footer class="panel-footer">
	<div class="container">
		<div class="row">
		 <section class="col-sm-4">
		  <span><font size="6px">Hours</font></span><br>
		  Sun-Thurs: 11:00am - 10:00pm<br>
		  Fri:11:30am -12:00pm<br>
		  Sat: 10:30am-12:00pm<br>
		  <hr class="visible-xs">
		 </section>
		 <section class="col-sm-4">
		  <span><font size="6px">Address</font></span><br>
		  11th cross road<br>
		  Koramangala<br>
		  Bengaluru<br>
		  <hr class="visible-xs">
		 </section>
		 <section class="col-sm-4">
		 <br><br>
		  <p>
		  Make a commitment to serve the needs of the ‘least of these’ and give voice to the voiceless
		  </p>
		  <hr class="visible-xs">
		 </section>
		</div>
	</div>
</footer>
</body>
</html>