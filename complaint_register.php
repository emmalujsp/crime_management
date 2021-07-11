<?php
SESSION_START();

$conn=mysqli_connect("localhost","root","","crime");
$cmpid=0;
$sqlpr = "SELECT cmpid from complaint";
$result = $conn->query($sqlpr);
if ($result->num_rows == 0)
{
$cmpid=1000;	
}
else
{
	$last="SELECT cmpid FROM complaint ORDER BY cmpid DESC LIMIT 1";
	$lresult = $conn->query($last);
	while($row = $lresult->fetch_assoc())
	{
		$cmpid=$row['cmpid'];
		$cmpid=1+$cmpid;
	}
	
}
$us=$_SESSION['user'];
$name=$_REQUEST["name"];
$details=$_REQUEST["details"];
$address=$_REQUEST["address"];
$date=$_REQUEST["date"];
$gen=$_REQUEST["gen"];
$criminal=$_REQUEST["criminal"];
$identity=$_REQUEST["idt"];
$police=$_POST['policestation'];
$fn=$_FILES['propic']['name'];;
$fs=$_FILES['propic']['size'];;
$ftemp=$_FILES['propic']['tmp_name'];;
$date = date('y-m-d h:i:s');
$fir=0;
move_uploaded_file($ftemp,"upload/".$fn);
if($conn)
{
	$q="insert into complaint values('$cmpid','$us','$name','$details','$address','$date','$gen','$criminal','$identity','$fn','$fs','$police','$date','$fir')";
	$r=mysqli_query($conn,$q);
	if($r)
	{
		header("location:user_dashboard.php");
	}
	else
	{
		echo "<script>alert('Connection wrong')</script>";
	
}
}
?>