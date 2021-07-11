<?php
SESSION_START();

$conn=mysqli_connect("localhost","root","","crime");
$cmpid=0;
$sqlpr = "SELECT id from missing";
$result = $conn->query($sqlpr);
if ($result->num_rows == 0)
{
$cmpid=1200;	
}
else
{
	$last="SELECT id FROM missing ORDER BY id DESC LIMIT 1";
	$lresult = $conn->query($last);
	while($row = $lresult->fetch_assoc())
	{
		$cmpid=$row['id'];
		$cmpid=1+$cmpid;
	}
	
}
$us=$_SESSION['user'];
$name=$_REQUEST["name"];
$details=$_REQUEST["idt"];
$lst=$_REQUEST["lst"];
$date=$_REQUEST["date"];
$num=$_REQUEST["num"];
$time=$_REQUEST["time"];
$fn=$_FILES['propic']['name'];;
$fs=$_FILES['propic']['size'];;
$ftemp=$_FILES['propic']['tmp_name'];;
$ap=0;
move_uploaded_file($ftemp,"upload/".$fn);
if($conn)
{
	$q="insert into missing values('$cmpid','$us','$name','$details','$lst','$num','$date','$time','$fn','$fs','$ap')";
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