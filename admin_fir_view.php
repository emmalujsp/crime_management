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
    border: 2px solid #FB3E06;
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
							echo "<li class='nav-item active'><a href='add_dish.php' class='nav-link'><span class='glyphicon glyphicon-user'></span>".'Dashboard'."</a></li>";
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
								echo "<a href='admindashboard.php' class='nav-link'></span>".$us."</a></li>";
							}
							else
							{
								echo "<a href='user_dashboard.php' class='nav-link'><b>".'Hello  '.$us."</b></a></li>";
							}
						}
						else
						{
							$us=$_SESSION['place'];
							echo "<a href='police_dashboard.php' class='nav-link'><b>".'Hello  '.$us."</b></a></li>";
						}
					?>
						
		</li>
        <li class="nav-item">
          <a class="nav-link" href="admin_pastcomplaint.php">Complaint</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_fir_view.php">FIR</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="admin_police.php">Police station</a>
        </li>
		 <li class="nav-item">
				<li class="nav-item">
          <a class="nav-link" href="admin_search.php">FIR table</a>
        </li>
				      <li class="nav-item">
				<li class="nav-item">
          <a class="nav-link" href="admin_totalreport.php">Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Notification</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-10">
	<font color="white">
		<div class='container'>
			<div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" name="bwdatesreport" > 
                                    
    <div class="form-group"> <label for="exampleInputEmail1">From Date</label><input type="date" id="fromdate" name="fromdate" value="" class="form-control" required="true"> </div>
    <div class="form-group"> <label for="exampleInputEmail1">To Date</label><input type="date" id="todate" name="todate" value="" class="form-control" required="true"> </div>
   
     <p style="padding-left: 450px"><button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button></p> </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
			</div>
      <h2>FIR</h2>
			  <table class="table table-dark table-striped">
				<thead>
				  <tr>
					<th>FIR ID</th>
					<th>Police station</th>
					<th>Date</th>
					<th>Status</th>
					<th>view</th>
				  </tr>
				</thead>
				<tbody>
			<?php
			if(array_key_exists('submit', $_POST)) {
            button1();
			}
			else{
				$conn=new mysqli("localhost","root","","crime"); 
								$sql = mysqli_query($conn, "SELECT * FROM fir");
								$row = mysqli_num_rows($sql);
								echo"<center>";
								while ($row = mysqli_fetch_array($sql))
								{
									
									
									echo "<tr>";
											echo "<td>".$row['FIRid']."</td>";
											echo "<td>".$row['police']."</td>";
											echo "<td>".$row['date']."</td>";
											echo "<td>".$row['status']."</td>";
											echo "<td><a class='btn btn-primary' href='admin_fir.php?fID=$row[FIRid]' role='button'>View</a></td>";
										  echo "</tr>";
								
														}
									echo "</center>";
	
			}
			 function button1() 
			 {
			$fdate=$_POST['fromdate'];
			$tdate=$_POST['todate'];
			$conn=new mysqli("localhost","root","","crime"); 
								$sql = mysqli_query($conn, "SELECT * FROM fir where date(date) between '$fdate' and '$tdate'");
								$row = mysqli_num_rows($sql);
								echo"<center>";
								$flag=0;
								while ($row = mysqli_fetch_array($sql))
								{
									
									
									echo "<tr>";
											echo "<td>".$row['FIRid']."</td>";
											echo "<td>".$row['police']."</td>";
											echo "<td>".$row['date']."</td>";
											echo "<td>".$row['status']."</td>";
											echo "<td><a class='btn btn-primary' href='admin_fir.php?fID=$row[FIRid]' role='button'>View</a></td>";
										  echo "</tr>";
								$flag=$flag+1;
														}
											if ($flag==0)
											{
													echo "<tr>";
												echo "<td colspan='5'>";
												echo "<h2>No records Found</h2>";
												echo "</td>";
												echo "</tr>";
											}
									echo "</center>";
			 }
			?>
			</tbody>
			</table>
    </div>
	</font>
  </div>
</div>
</body>
</html>