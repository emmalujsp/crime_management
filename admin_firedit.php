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

.jumbotron{
background-color:white;
 padding: 14px 20px;
width:100%;
box-shadow: 0 6px 6px rgba(0, 0, 0, 0.6); 
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
		  <div class="jumbotron">
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
		<form class="form-horizontal" action="fir_update.php?fID=$fid" method="post" enctype="multipart/form-data" onsubmit="display()">
		<input type="hidden" value="<?php echo $fid; ?>" name="Fid"> </input>
			<p>File FIR</p>
			<div class="form-group">
				<label class="control-label col-sm-2">DETAILS: </label>
				<div class="col-sm-10">
					<?php 
					echo '<textarea class="form-control" rows="5" id="comment" name="details" placeholder="FIR Details" required>';
					echo $row['fir'] ;
					echo '</textarea>';
					?>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Address: </label>
				<div class="col-sm-10">
				<?php echo '<input type="text" class="form-control" name="address" size="50%" placeholder="Address" required value="' . $row['address'] . '">';?>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Case status: </label>
				<div class="col-sm-10">
				<table cellpadding="10%">
				<tr>
				<td>
				<input type="radio" class="form-control" name="status"  value="initial">
				<label for=ptype-student>Initial</label>
				</td>
				<td>
				<input type="radio" class="form-control" name="status"  value="ongoing(level 1)">
				<label for=ptype-student>ongoing(level 1)</label>
				</td>
				<td>
				<input type="radio" class="form-control" name="status"  value="ongoing(level 2)">
				<label for=ptype-student>ongoing(level 2)</label>
				</td>
				<td>
				<input type="radio" class="form-control" name="status"  value="FIR closed">
				<label for=ptype-student>FIR closed</label>
				</td>
				</tr>
				</table>
				
				
				
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Police station: </label>
				<div class="col-sm-10">
							<select name="policestation" class="form-control" required>
							 <?php
								$conn=new mysqli("localhost","root","","crime"); 
								$sql = mysqli_query($conn, "SELECT place FROM police");
								$row = mysqli_num_rows($sql);
								while ($row = mysqli_fetch_array($sql))
								{
									echo "<option value='". $row['place'] ."'>" .$row['place'] ."</option>" ;
								}
							?>
							</select>
				</div>
			</div>
								  <?php
							$conn=new mysqli("localhost","root","","crime");
							$sql = "SELECT * FROM fir WHERE FIRid='$fid'";
							$result=$conn->query($sql);
							$row=$result->fetch_assoc();
							if ($result=$conn->query($sql) === FALSE) {
								echo "Error: ";
							}
							?>
				<div class="form-group">
				<label class="control-label col-sm-2">Case type: </label>
				<div class="col-sm-10">
							<select name="case" class="form-control" required>
							<?php echo "<option value=' ". $row['casetype'] . "' checked>". $row['casetype']."<option>";?>
								<option value="ARB">ARB ARBITRATION ACT CASE (WEF 15/10/03<option>
									<option value="ARB-DC" > ARB-DC Arbitration Case (Domestic Commercial)<option>
									<option value="ARB-ICA">ARB-ICA Arbitration Case(International Comm.Arbitration)<option>
									<option value="CA"> CA CIVIL APPEAL/COMPANY APPLICATION<option>
									 <option value="CA-CWP">CA-CWP Commercial Appeal (Writ)<option>
									 <option value="CA-MISC">CA-MISC Commercial Appeal (MISC)<option>
									 <option value="CACP">CACP CONTEMPT APPEALS<option>
									<option value="CAPP"> CAPP COMPANY APPEAL<option>
									<option value="CCEC"> CCEC CUSTOM CENTRAL EXCISE CASE<option>
									<option value="CCES"> CCES CCES<option>
									<option value="CEA"> CEA CENTRAL EXCEISE APPEAL (WEF 10-11-2003)<option>
									<option value="CEC"> CEC CENTRAL EXCISE CASE<option>
									<option value="CEGC"> CEGC CENTRAL EXCISE GOLD CASE<option>
									<option value="CESR"> CESR CENTRAL EXCISE AND SALT REFERENCE<option>
									<option value="CLAIM"> CLAIM CLAIMS<option>
									<option value="CM"> CM CIVIL MISC<option>
									<option value="CMA"> CMA COMPANY MISC. APPLICATION<option>
									<option value="CMM HMA"> CMM HMA CASES U/S 24<option>
									<option value="CO"> CO CIVIL ORIGINAL<option>
									<option value="CO-COM"> CO-COM Civil Original (Commercial) <option>
									<option value="COA"> COA Company Application <option>
									<option value="COCP"> COCP CIVIL ORIGINAL CONTEMPT PETITION <option>
									<option value="CP"> CP COMPANY PETITIONS <option>
									<option value="CP-MISC"> CP-MISC Commercial Petiton (Misc) <option>
									<option value="CR">CR CIVIL REVISION <option>
									<option value="CR-COM"> CR-COM Civil Revision (Commercial) <option>
									<option value="CRA"> CRA CRIMINAL APPEAL <option>
									<option value="CRA-AD"> CRA-AD CRIMINAL APPEAL ACQUITAL DB <option>
									<option value="CRA-AS"> CRA-AS CRIMINAL APPEAL ACQUITAL SB <option>
									<option value="CRA-D"> CRA-D CRIMINAL APPEAL DB <option>
									<option value="CRA-S"> CRA-S CRIMINAL APPEAL SB <option>
									<option value="CRACP"> CRACP CRIM APPEAL CONTEMP PETITION <option>
									<option value="CREF"> CREF CIVIL REFERENCE <option>
									<option value="CRM"> CRM CRIMINAL MISCELLANEOUS PETITION <option>
									<option value="CRM-A"> CRM-A AGAINST ACQUITALS <option>
									<option value="CRM-M"> CRM-M CRIMINAL MAIN <option>

									<option value="CRM-W"> CRM-W CRM IN CRWP <option>
									<option value="CROCP"> CROCP CRIMINAL ORIGINAL COMTEMPT PETITION <option>
									<option value="CRR"> CRR CRIMINAL REVISION <option>
									<option value="CRR(F)"> CRR(F) CRIMINAL REVISION (Family Court) <option>
									<option value="CRREF"> CRREF CRIMINAL REFERENCE <option>
									<option value="CRWP"> CRWP CRIMINAL WRIT PETITION <option>
									<option value="CS"> CS CIVIL SUIT <option>
									<option value="CS-OS"> CS-OS CIVIL SUIT ORIGINAL SIDE <option>
									<option value="CWP-COM"> CWP-COM CUSTOM APPEAL (WEF 17/7/2004) <option>
									<option value="DP"> DP DIVORCE PETITION <option>
									<option value="EA"> EA EXECUTION APPEAL <option>
									<option value="EDC"> EDC ESTATE DUTY CASE <option>
									<option value="EDREF"> EDREF ESTATE DUTY REFERENCE <option>
									<option value="EFA"> EFA EXECUTION FIRST APPEAL <option>
									<option value="EFA-COM"> EFA-COM Exection First Appeal (Commercial) <option>
									<option value="EP"> EP ELECTION PETITIONS <option>
									<option value="EP-COM"> EP-COM Execution Petition (Commercial) <option>
									<option value="ESA"> ESA EXECUTION SECOND APPEAL <option>
									<option value="FAO"> FAO FIRST APPEAL ORDER <option>
									<option value="FAO(FC)"> FAO FAO(FAMILY COURT) <option>
									<option value="FAO-C"> FAO-C FAO (CUS AND MTC) <option>
									<option value="FAO-CARB"> FAO-CARB First Appeal From Order (Commercial Arbitration) <option>
									<option value="FAO-COM"> FAO-COM Fisrt Appeal From Order (International Comm.Arbi.) <option>
									<option value="FAO-M"> FAO-M FIRST APPEAL ORDER-MATRIMONIAL <option>
									<option value="GCR"> GCR GOLD CONTROL REFERENCE <option>
									<option value="GSTR"> GSTR GENERAL SALES TAX REFERENCE <option>
									<option value="GTA"> GTA GIFT TAX APPEAL <option>
									<option value="GTC"> GTC CIFT TAX CASE <option>
									<option value="GTR"> GTR GIFT TAX REFERENCE <option>
									<option value="GVATR"> GVATR GENERAL VAT REFERENCES <option>
									<option value="INCOMP"> INCOMP INCOMPLETE OBJECTION CASE <option>
									<option value="INTTA"> INTTA INTEREST TAX APPEAL <option>
									<option value="IOIN"> IOIN Interim Order in <option>
									<option value="ITA"> ITA INCOME TAX APPEAL <option>
									<option value="ITC"> ITC INCOME TAX CASES <option>
									<option value="ITR"> ITR INCOME TAX REFERENCE <option>
									<option value="LPA"> LPA LATTER PATENT APPEALS <option>

									<option value="LR"> LR Liquidator Report <option>
									<option value="MATRF"> MATRF MATRIMINIAL REFERENCE<option>
									<option value="MRC"> MRC MURDER REFERENCE CASE <option>
									<option value="O&M"> O&M ORIGINAL & MISCELLANEOUS <option>
									<option value="OLR"> OLR Official Liquidator Report <option>
									<option value="PBT"> PBT PROBATE <option>
									<option value="PVR"> PVR PB VAT REVISION <option>
									<option value="RA"> RA REVIEW APPL <option>
									<option value="RA-CA"> RA-CA REVIEW IN COMPANY APPEAL <option>
									<option value="RA-CP"> RA-CP REVIEW IN COMPANY PETITION <option>
									<option value="RA-CR"> RA-CR REVIEW IN CR <option>
									<option value="RA-CW"> RA-CW REVIEW IN CWP <option>
									<option value="RA-LP"> RA-LP REVIEW IN LPA <option>
									<option value="RA-RF"> RA-RF REVIEW APPLICATION IN RFA <option>
									<option value="RA-RS"> RA-RS REVIEW IN RSA <option>
									<option value="RCRWP"> RCRWP REVIEW IN CRCWP <option>
									<option value="RFA"> RFA REGULAR FIRST APPEAL <option>
									<option value="RFA-COM"> RFA-COM Regular First Appeal (Commercial) <option>
									<option value="RP"> RP Recreimination Petition <option>
									<option value="RSA"> RSA REGULAR SECOND APPEAL <option>
									<option value="SA"> SA SERVICE APPEAL <option>
									<option value="SAO"> SAO SECOND APPEAL ORDER <option>
									<option value="SDR"> SDR STATE DUTY REFERENCE <option>
									<option value="STA"> STA Service Tax Appeal <option>
									<option value="STC"> STC SALES TAX CASES <option>
									<option value="STR"> STR SALE TAX REFERENCE <option>
									<option value="TA"> TA TRANSFER APPLICATION <option>
									<option value="TA-COM"> TA-COM Transfer Application (Commercial) <option>
									<option value="TC"> TC TAKENUP CASES <option>
									<option value="TCRM"> TCRM TRANSFER CRIMINAL PETITION <option>
									<option value="UVA"> UVA UT VAT APPEAL <option>
									<option value="UVR"> UVR UT VAT REVISION <option>
									<option value="VATAP"> VATAP VAT APPEAL <option>
									<option value="VATCASE"> VATCASE VALUE ADDED TAX CASE <option>
									<option value="VATREF"> VATREF VAT REFERENCE <option>
									<option value="WTA"> WTA WEALTH TAX APPEAL<option>
									<option value="WTC"> WTC WEALTH TAX CASES <option>
									<option value="XOBJ"> XOBJ  CROSS OBJECTION <option>
									<option value="XOBJC"> XOBJC CROSS OBJECTION IN CR <option>
									<option value="XOBJL"> XOBJL CROSS OBJECTION IN LPA <option>
									<option value="XOBJR"> XOBJR CROSS OBJECTION IN RFA <option>
									<option value="XOBJS"> XOBJS CROSS OBJECTION IN RSA <option>

							</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Section: </label>
				<div class="col-sm-10">
					<?php echo '<input type="text" class="form-control" name="section" size="50%" placeholder="Section" required value="' . $row['section'] . '">';?>
					
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">D-O-I: </label>
				<div class="col-sm-10">
				<?php echo '<input type="Date" class="form-control" size="50%" name="date" placeholder=" Date of Incident" required value="' . $row['date'] . '">';?>
				</div>
			</div>
					<div class="form-group">
				<label class="control-label col-sm-2">Time: </label>
				<div class="col-sm-10">
				<?php echo '<input type="time" class="form-control" size="50%" name="time" placeholder=" Time of Incident" required value="' . $row['time'] . '">';?>
					
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