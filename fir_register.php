<?php
$conn=new mysqli("localhost","root","","crime");
$firid=0;
$crmid=0;
$sqlpr = "SELECT FIRid from fir";
$result = $conn->query($sqlpr);
if ($result->num_rows == 0)
{
$firid=2000;	
}
else
{
	$last="SELECT FIRid FROM fir ORDER BY FIRid DESC LIMIT 1";
	$lresult = $conn->query($last);
	while($row = $lresult->fetch_assoc())
	{
		$firid=$row['FIRid'];
		$firid=1+$firid;
	}
	
}
$sqlpr = "SELECT crid from criminal";
$result = $conn->query($sqlpr);
if ($result->num_rows == 0)
{
$crmid=1100;	
}
else
{
	$last="SELECT crid FROM criminal ORDER BY crid DESC LIMIT 1";
	$lresult = $conn->query($last);
	while($row = $lresult->fetch_assoc())
	{
		$crmid=$row['crid'];
		$crmid=1+$crmid;
	}
	
}
$details=$_REQUEST['details'];
$cID=$_GET["cID"];
$police=$_POST['policestation'];
$case=$_POST['case'];
$date=$_REQUEST["date"];
$section=$_REQUEST["section"];
$address=$_REQUEST["address"];
$time=$_REQUEST["time"];
$stat="initial";
$cname=$_REQUEST["cname"];
$cdetails=$_REQUEST['cdetails'];
$caddress=$_REQUEST["caddress"];
$fn=$_FILES['propic']['name'];;
$fs=$_FILES['propic']['size'];;
$ftemp=$_FILES['propic']['tmp_name'];;
$type=$_REQUEST['type'];
if($conn)
{
	$q="insert into fir values('$firid','$cID','$details','$address','$police','$case','$section','$date','$time','$stat')";
	$v="insert into criminal values('$crmid','$cname','$cdetails','$caddress','$firid','$fn','$fs','$type')";
	$x="UPDATE complaint SET fir = '1' WHERE cmpid ='$cID'";
	$r=mysqli_query($conn,$q);
	$s=mysqli_query($conn,$v);
	$y=mysqli_query($conn,$x);
	if($r)
	{
		if($y and $s)
		{
		header("location:police_dashboard.php");
		}
	}
	else
	{
		echo "<script>alert('Connection wrong')</script>";
	
}
}
$conn->close();
?>