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
          <a class="nav-link" href="#">Notification</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-10">
	<div class="content-wrapper" style="margin-left:0px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>REPORT</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="photos/logo.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">ADMIN</h3>

                <p class="text-muted text-center">CRIMINAL SURVEILLANCE</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Total Cases</b> <a class="float-right"><?php
							$conn=new mysqli("localhost","root","","crime");
							$sqlc = "SELECT COUNT(*) FROM complaint";
							foreach($conn->query("SELECT COUNT(*) FROM complaint") as $rowc) 
							{
								echo $rowc['COUNT(*)'];
							}
							?></a>
                  </li>
                  <li class="list-group-item">
                    <b>FIR FILED</b> <a class="float-right"><?php
							$conn=new mysqli("localhost","root","","crime");
							$sqlc = "SELECT COUNT(*) FROM fir ";
							foreach($conn->query("$sqlc") as $rowc) 
							{
								echo $rowc['COUNT(*)'];
							}
							?></a>
                  </li>
                  <li class="list-group-item">
                    <b>REMAINING</b> <a class="float-right"><?php
							$conn=new mysqli("localhost","root","","crime");
							$sqlc = "SELECT COUNT(*) FROM complaint";
							foreach($conn->query("SELECT COUNT(*) FROM complaint WHERE fir='0'") as $rowc) 
							{
								echo $rowc['COUNT(*)'];
							}
							?></a>
                  </li>
				  <li class="list-group-item">
                    <b>MISSING CASE</b> <a class="float-right"><?php
							$conn=new mysqli("localhost","root","","crime");
							$sqlc = "SELECT COUNT(*) FROM missing WHERE approved='1'";
							foreach($conn->query("$sqlc") as $rowc) 
							{
								echo $rowc['COUNT(*)'];
							}
							?></a>
                  </li>
				   <li class="list-group-item">
                    <b>WANTED CRIMINAL</b> <a class="float-right"><?php
							$conn=new mysqli("localhost","root","","crime");
							$sqlc = "SELECT COUNT(*) FROM Criminal WHERE type='Wanted'";
							foreach($conn->query("$sqlc") as $rowc) 
							{
								echo $rowc['COUNT(*)'];
							}
							?></a>
                  </li>
                </ul>

             
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> No of Stations</strong>

                <p class="text-muted">
                <?php
							$conn=new mysqli("localhost","root","","crime");
							$sqlc = "SELECT COUNT(*) FROM police";
							foreach($conn->query("$sqlc") as $rowc) 
							{
								echo $rowc['COUNT(*)'];
							}
							?>
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i>Total Police</strong>

                <p class="text-muted"><?php
							$conn=new mysqli("localhost","root","","crime");
							$sqlc = "SELECT SUM(nop) FROM police";
							foreach($conn->query("$sqlc") as $rowc) 
							{
								echo $rowc['SUM(nop)'];
							}
							?></p>

                <hr>
				

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Police</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">FIR</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
 <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Most occuring Case</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php
							$conn=new mysqli("localhost","root","","crime");
							$sqlc = "select casetype,count(FIRid) from fir group by casetype order by count(FIRid) DESC LIMIT 1";
							foreach($conn->query("$sqlc") as $rowc) 
							{
								echo $rowc['casetype'];
							}
							?></p>
                                            </div>
                            </div>
							<div class="row">
                                            <div class="col-md-6">
                                                <label>Most Cases Reporting area</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php
							$conn=new mysqli("localhost","root","","crime");
							$sqlc = "select police,count(cmpid) from complaint group by police order by count(cmpid) DESC LIMIT 1";
							foreach($conn->query("$sqlc") as $rowc) 
							{
								echo $rowc['police'];
							}
							?></p>
                                            </div>
                            </div>

							<div class="row">
                                            <div class="col-md-6">
                                                <label>Total Criminals</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php
							$conn=new mysqli("localhost","root","","crime");
							$sqlc = "SELECT COUNT(*) FROM criminal";
							foreach($conn->query("$sqlc") as $rowc) 
							{
								echo $rowc['COUNT(*)'];
							}
							?></p>
                                            </div>
                            </div>
							<div class="row">
                                            <div class="col-md-6">
                                                <label>Pending Missing Case</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php
							$conn=new mysqli("localhost","root","","crime");
							$sqlc = "SELECT COUNT(*) FROM missing where approved='0'";
							foreach($conn->query("$sqlc") as $rowc) 
							{
								echo $rowc['COUNT(*)'];
							}
							?></p>
                                            </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
		   <div class="card">
              <div class="card-header">
                <h3 class="card-title">Police View</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Police Station</th>
					<th>Number of Cases</th>
					<th>FIR FILED</th>
					<th>REMAINING</th>
                  </tr>
                  </thead>
                 				<tbody>
			<?php
				$conn=new mysqli("localhost","root","","crime"); 
								$sql = mysqli_query($conn, "SELECT * FROM police");
								$row = mysqli_num_rows($sql);
								echo"<center>";
								while ($row = mysqli_fetch_array($sql))
								{
									
									
									echo "<tr>";
									echo "<td>".$row['place']."</td>";
									$conn=new mysqli("localhost","root","","crime");
								$p=$row['place'];
							$sqlc = "SELECT COUNT(*) FROM complaint WHERE police='$p'";
							foreach($conn->query("SELECT COUNT(*) FROM complaint WHERE police='$p'") as $rowc) 
							{
								echo "<td>".$rowc['COUNT(*)']."</td>";
							}
							$conn=new mysqli("localhost","root","","crime");
								$p=$row['place'];
							foreach($conn->query("SELECT COUNT(*) FROM fir WHERE police='$p'") as $rowc) 
							{
								echo "<td>".$rowc['COUNT(*)']."</td>";
							}

							foreach($conn->query("SELECT COUNT(*) FROM complaint WHERE police='$p' AND fir='0'") as $rowc) 
							{
								echo "<td>".$rowc['COUNT(*)']."</td>";
							}

										
										  echo "</tr>";
								
														}
									echo "</center>";
	
			?>
			</tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
		   <div class="card">
              <div class="card-header">
                <h3 class="card-title">FIR View</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			  <div class="col-lg-12">
                                    <form method="post" name="bwdatesreport" > 
                                    
    <div class="form-group"> <label for="exampleInputEmail1">From Date</label><input type="date" id="fromdate" name="fromdate" value="" class="form-control" required="true"> </div>
    <div class="form-group"> <label for="exampleInputEmail1">To Date</label><input type="date" id="todate" name="todate" value="" class="form-control" required="true"> </div>
   
     <p style="padding-left: 450px"><button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button></p> </form>
                                </div>
                                
                            </div>
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
														echo "<tr>";
											echo "<td colspan='5'>".$row['FIRid']."</td>";
											echo '<h4 class="card-footer">Total cases: '; 
							$sqlc = "SELECT count(*) FROM fir ";
							foreach($conn->query("$sqlc") as $rowc) 
							{
								echo $rowc['count(*)'];
							}
							echo "</h4>";
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
											 echo "<tr>";
											echo "<td colspan='5'>".$row['FIRid']."</td>";
											echo '<h4 class="card-footer">Total cases in this Time: '; 
							$fdate=$_POST['fromdate'];
			$tdate=$_POST['todate'];
							$sqlc = "SELECT count(*) FROM fir where date(date) between '$fdate' and '$tdate'";
							foreach($conn->query("$sqlc") as $rowc) 
							{
								echo $rowc['count(*)'];
							}
							echo "</h4>";
											echo "</tr>";
											
									echo "</center>";
			 }
			
			?>
			</tbody>
			</table>
              </div>
              <!-- /.card-body -->
            </div>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    </div>

  </div>
</div>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>