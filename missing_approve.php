<?php
$conn=new mysqli("localhost","root","","crime");
$fid=$_GET['cID'];

if($conn)
{ 
	$q="UPDATE missing SET approved='1' WHERE id='$fid'";
	$r=mysqli_query($conn,$q);
		if($r)
		{
			header("location:police_dashboard.php");
		}
	else
	{
		echo "<script>alert('Connection wrong')</script>";
	
}
}
$conn->close();
?>