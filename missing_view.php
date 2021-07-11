<html>
<head>
<title>Home Page</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
<br><br>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
          <div class="col-sm-12">
            <h1><font color="white">MISSING PERSON</font></h1>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
		  <?php
		  $conn=new mysqli("localhost","root","","crime"); 
								$sql = mysqli_query($conn, "SELECT * FROM missing Where approved='1'");
								$row = mysqli_num_rows($sql);
								while ($row = mysqli_fetch_array($sql))
								{
            echo '<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">';
            echo '  <div class="card bg-light d-flex flex-fill">';
             echo '     <div class="card-header text-muted border-bottom-0">';
               echo $row["id"];
               echo '   </div>';
               echo '   <div class="card-body pt-0">';
                echo '    <div class="row">';
                echo '      <div class="col-7">';
                 echo '       <h2 class="lead"><b>'.$row['name'].'</b></h2>';
                  echo '      <p class="text-muted text-sm">About:'.$row['identification'].' </p>';
                   echo '     <ul class="ml-4 mb-0 fa-ul text-muted">';
                   echo '       <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Last seen:'.$row['lastseen'].'</li>';
                   echo '       <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #:'.$row['phone'].'</li>';
				   echo '       <li class="small"><span class="fa-li"></span> Date  :'.$row['date'].'</li>';
				   echo '       <li class="small"><span class="fa-li"></span> Time  :'.$row['time'].'</li>';
                    echo '    </ul>';
                   echo '   </div>';
                   echo '    <div class="col-5 text-center">';
				   $f=$row['fname'];
									echo "<img src='upload/$f' class='img-circle img-fluid' >";
                  echo '    </div>';
                  echo '  </div>';
                echo '  </div>';
                echo '  <div class="card-footer">';
                 echo '   <div class="text-right">';
                  echo '    <a href="#" class="btn btn-sm bg-teal">';
                  echo '      <i class="fas fa-comments"></i>';
                   echo '   </a>';
                   echo '   <a href="#" class="btn btn-sm btn-primary">';
                    echo '    <i class="fas fa-user"></i> Inform';
                   echo '   </a>';
                 echo '   </div>';
                echo '  </div>';
             echo '   </div>';
          echo '    </div>';
								}
				?>
          
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
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