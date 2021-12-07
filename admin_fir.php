this is a trail for checking if working
<html>
<head>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
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
#ip3 
{
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
	               <div class="card">
        <div class="card-header">
          <h2 class="card-title">FIR Detail</h2>

        </div>
		<?php
							$conn=new mysqli("localhost","root","","crime");
								$fid=$_GET['fID'];
							$sql = "SELECT * FROM fir WHERE FIRid='$fid'";
							$result=$conn->query($sql);
							$row=$result->fetch_assoc();
							if ($result=$conn->query($sql) === FALSE) {
								echo "Error: ";
							}
							?>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">FIR ID</span>
                      <span class="info-box-number text-center text-muted mb-0"><?php echo $row['FIRid'];?></span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">COMPLAINT ID</span>
                      <span class="info-box-number text-center text-muted mb-0"><?php echo $row['cmpid'];?></span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Status</span>
                      <span class="info-box-number text-center text-muted mb-0"><?php echo $row['status'];?></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h4>Description</h4>
                    <div class="post">
                      <div class="user-block">
                        
                      </div>
                      <!-- /.user-block -->
                      <p>
                       <?php echo $row['fir'];?>
                      </p>

                      
                    </div>

                    <div class="post clearfix">
                      <div class="user-block">
                        
                        <h4>Section</h4>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        <?php echo $row['section'];?>
                      </p>
                      
                    </div>
					<div class="post">
					<div class="user-block">
                        
                        <h4>Criminal Details</h4>
                      </div>
					  <?php
							$conn=new mysqli("localhost","root","","crime");
								$fid=$_GET['fID'];
							$sqlc = "SELECT * FROM criminal WHERE firid='$fid'";
							$resultc=$conn->query($sqlc);
							$rowc=$resultc->fetch_assoc();
							if ($resultc=$conn->query($sqlc) === FALSE) {
								echo "Error: ";
							}
							?>
                      <div class="user-block">
						 <?php
					  $f=$rowc['fname'];
									echo "<img class='img-circle img-bordered-sm' src='upload/$f' height='100px' width='200px'>"; ?>
                        <span class="username">
                          <?php echo $rowc['name'];?>
                        </span>
                        <span class="description"><?php echo $rowc['address'];?></span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                       <?php echo $rowc['details'];?>
                      </p>

                      
                    </div>

                  
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 class="text-primary"><i class="fas fa-paint-brush"></i> DETAILS</h3>
              <div class="text-muted">
                <p class="text-sm">Address
                  <b class="d-block">  <?php echo $row['address'];?></b>
                </p>
                <p class="text-sm">Police station
                  <b class="d-block"><?php echo $row['police'];?></b>
                </p>
              </div>

              <h5 class="mt-5 text-muted">Case Details</h5>
             <div class="text-muted">
			 <p class="text-sm">Case
                  <b class="d-block">  <?php echo $row['casetype'];?></b>
                </p>
                <p class="text-sm">Date
                  <b class="d-block">  <?php echo $row['date'];?></b>
                </p>
                <p class="text-sm">time
                  <b class="d-block"><?php echo $row['time'];?></b>
                </p>
              </div>

              <div class="text-center mt-5 mb-3">
                <button onclick="window.print()"  class="btn btn-primary"><i class="fas fa-print"></i> Print</button>
				<?php
			$fid=$_GET['fID'];
			echo "<a class='btn btn-warning' href='admin_firedit.php?fID=$fid' role='button'>Edit</a>";
			?>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>

			


  </div>
</div>
</body>
</html>
