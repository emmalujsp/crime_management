<?php
$place=$_REQUEST["place"];
$address=$_REQUEST["address"];
$user=$_REQUEST["username"];
$password=$_REQUEST["password"];
$hofficial=$_REQUEST["hofficial"];
$nop=$_REQUEST["nop"];
$mob=$_REQUEST["phone"];
$conn=mysqli_connect("localhost","root","","crime");
if($conn)
{
	$q="insert into police values('$user','$password','$place','$address','$hofficial','$mob','$nop')";
	$r=mysqli_query($conn,$q);
	if($r)
	{
		header("location:admindashboard.php");
	}
	else
	{
		echo "<script>alert('Email id already in use')</script>";
	}
}

?>