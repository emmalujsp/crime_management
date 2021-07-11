<?php
$conn=new mysqli("localhost","root","","crime");
$fid=$_REQUEST['Fid'];
$details=$_REQUEST['details'];
$police=$_POST['policestation'];
$case=$_POST['case'];
$sts=$_POST['status'];
$date=$_REQUEST["date"];
$section=$_REQUEST["section"];
$address=$_REQUEST["address"];
$case=$_POST['case'];
$time=$_REQUEST["time"];
if($conn)
{ 
	$q="UPDATE fir SET fir='$details',address='$address',casetype='$case',section='$section',date='$date',time='$time',status='$sts' WHERE FIRid='$fid'";
	$r=mysqli_query($conn,$q);
		if($r)
		{
		header("location:admindashboard.php");
		}
	else
	{
		echo "<script>alert('Connection wrong')</script>";
	
}
}
$conn->close();
?>