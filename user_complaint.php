<html>
<head>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
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
#ip3 
{
    border-radius: 10px;
    border: 2px solid blue;
	background: rgba(0, 0, 0, 0.9);
	
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
 <div class="card">
	             <div class="card-header">
                <h3 class="card-title">COMPLAINTS</h3>
              </div>
			               <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Name</th>
                      <th>Police</th>
					  <th>FIR Status</th>
                      <th>View</th>
                    </tr>
                  </thead>
				   <tbody>
				   <?php
			$conn=new mysqli("localhost","root","","crime"); 
								$us=$_SESSION['user'];
								$sql = mysqli_query($conn, "SELECT * FROM complaint Where username='$us'");
								$row = mysqli_num_rows($sql);
								while ($row = mysqli_fetch_array($sql))
								{
									echo "<tr>";
									echo "<td>".$row['cmpid']."</td>";
									echo "<td>".$row['name']."</td>";
									echo "<td>".$row['police']."</td>";
									echo "<td>";
									if($row['fir']==1)
									{
										echo "FIR FILED";
									}
									else
									{
										echo "FIR NOT FILED";
									}
									echo "</td>";
									echo "<td><a class='btn btn-primary' href='user_complaint_view.php?cID=$row[cmpid]' role='button'>View</a></td>";
									echo "</tr>";
									echo "<tr>";
								}
								?>
								</tbody>
								</table>
								</div>
								</div>
			
    </div>
</div>
</body>
</html>