<html>
<head>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=/plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
<style>
.navbar-nav{
padding-left:20px;
}
.nav-item:hover{
font-size:17px;
font-weight:bold;
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
<div class="container" style="margin-top:30px;">
  <div class="row">
    <div class="col-sm-2" style="background-color:#dfe6e9; height:500px;">
      <ul class="nav nav-pills flex-column">
	  <br>
				<li class="nav-item">
				<center>
			<a class="navbar-brand" href="#">
			<img src="photos/logo.png" width="100" height="50" class="d-inline-block align-top" alt="" loading="lazy">
			</a>
			</center>
		</li>
		<br>
		<li>
		<?php 
						if(isset($_SESSION['name']))
						{
							$us=$_SESSION['name'];
							if($us=='Admin')
							{
								echo "<a href='user_dashboard.php' class='nav-link'></span>".$us."</a></li>";
							}
							else
							{
								echo "<a href='user_dashboard.php' class='nav-link'><b>".'Hello  '.$us."</b></a></li>";
							}
						}
						else
						{
						}
					?>
						
		</li>
        <li class="nav-item">
          <a class="nav-link " href="new_complaint.php">New Complaint</a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="user_complaint.php">Complaints</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user_fir.php">FIR</a>
        </li>
				<li class="nav-item">
          <a class="nav-link" href="user_addmissingperson.php">Missing Case</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Notification</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-10">
 <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">MISSING CASE</h3>
              </div>
              <div class="card-body">
			  <form class="form-horizontal" action="missing_register.php" method="post" enctype="multipart/form-data" onsubmit="display()">
                <div class="form-group">
				<label class="control-label col-sm-4">Name: </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name" size="50%" placeholder="Missing Person Name" required>
				</div>
			</div>
			
			     <div class="form-group">
				<label class="control-label col-sm-4">Identification: </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="idt" size="50%" placeholder="Missing Person Identification Mark" required>
				</div>
			</div>
			
			     <div class="form-group">
				<label class="control-label col-sm-4">Last Seen : </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="lst" size="50%" placeholder="Last seen details and place" required>
				</div>
			</div>
			
						     <div class="form-group">
				<label class="control-label col-sm-4">Contact Number: </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="num" size="50%" placeholder="Contact Number" required>
				</div>
			</div>
			
						     <div class="form-group">
				<label class="control-label col-sm-4">Missing Date: </label>
				<div class="col-sm-10">
					<input type="date" class="form-control" name="date" size="50%" placeholder="Missing Date" required>
				</div>
			</div>
			
						     <div class="form-group">
				<label class="control-label col-sm-4">Missing Time : </label>
				<div class="col-sm-10">
					<input type="time" class="form-control" name="time" size="50%" placeholder="Missing Time" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Photo : </label>
				<div class="col-sm-10">
					<input type="file" class="form-control" size="50%" placeholder=" Profile Picture" name="propic" required>
				</div>
			</div>
			<center>
				<input type="submit" class="btn btn-danger">
			</center>
		</form>
                </div>
                
    </div>
  </div>
</div>
</body>
</html>