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
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
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
                <h3 class="card-title">Police Station Details</h3>
              </div>
			  <?php
							$conn=new mysqli("localhost","root","","crime");
								$pid=$_GET['pID'];
							$sql = "SELECT * FROM police WHERE username='$pid'";
							$result=$conn->query($sql);
							$row=$result->fetch_assoc();
							if ($result=$conn->query($sql) === FALSE) {
								echo "Error: ";
							}
							?>
              <!-- /.card-header -->
              <div class="card-body">
			  <div class="container emp-profile">
			  <div class="row">
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                       <?php echo $row['place'];?>
                                    </h5>
                                    <h6>
                                      <?php echo $row['address'];?>
                                    </h6>
                                    <p class="proile-rating">Phone : <span><?php echo $row['phone'];?></span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab"  role="tab">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
   
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
        
             <div class="text-muted">
			 <p class="text-sm">Username
                  <b class="d-block"> <?php echo $row['username'];?></b>
                </p>
                <p class="text-sm">Password
                  <b class="d-block"><?php echo $row['password'];?></b>
                </p>
                <p class="text-sm">No. of officers
                  <b class="d-block">   <?php echo $row['nop'];?></b>
                </p>
				  <p class="text-sm">Higher offcial
                  <b class="d-block">   <?php echo $row['higherofficial'];?></b>
                </p>
              </div>
                    </div>
                    <div class="col-md-8">
					
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total complaints</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php
							$conn=new mysqli("localhost","root","","crime");
								$pid=$_GET['pID'];
								$p=$row['place'];
							$sqlc = "SELECT COUNT(*) FROM complaint WHERE police='$p'";
							foreach($conn->query("SELECT COUNT(*) FROM complaint WHERE police='$p'") as $rowc) 
							{
								echo $rowc['COUNT(*)'];
							}
							?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total FIR FILED</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php
							$conn=new mysqli("localhost","root","","crime");
								$pid=$_GET['pID'];
								$p=$row['place'];
							$sqlc = "SELECT COUNT(*) FROM fir WHERE police='$p'";
							foreach($conn->query("$sqlc") as $rowc) 
							{
								echo $rowc['COUNT(*)'];
							}
							?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Finished FIR</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php
							$conn=new mysqli("localhost","root","","crime");
								$pid=$_GET['pID'];
								$p=$row['place'];
							$sqlc = "SELECT COUNT(*) FROM fir WHERE police='$p' AND status='finished'";
							foreach($conn->query("$sqlc") as $rowc) 
							{
								echo $rowc['COUNT(*)'];
							}
							?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Remaining Complaints</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php
							$conn=new mysqli("localhost","root","","crime");
								$pid=$_GET['pID'];
								$p=$row['place'];
							$sqlc = "SELECT COUNT(*) FROM complaint WHERE police='$p' AND fir='0'";
							foreach($conn->query("$sqlc") as $rowc) 
							{
								echo $rowc['COUNT(*)'];
							}
							?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Most Occured Cases</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php
							$conn=new mysqli("localhost","root","","crime");
								$pid=$_GET['pID'];
								$p=$row['place']; 
							$sqlc = "select casetype,count(FIRid) from fir group by casetype,police='$p' order by count(FIRid) DESC LIMIT 1";
							foreach($conn->query("$sqlc") as $rowc) 
							{
								echo $rowc['casetype'];
							}
							?></p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
			</div>
		</div>
		</div>
		</div>
		</div>

  </div>
</div>
</body>
</html>