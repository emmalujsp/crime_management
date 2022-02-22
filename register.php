<<<<<<< HEAD
#editlinenew_sandra edit
Namitha Antony
=======
#editlinenew
>>>>>>> parent of 29e43d5... Namitha
<?php
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$uname=$_REQUEST["uname"];
$password=$_REQUEST["psw"];
$id=$_REQUEST["id"];
$address=$_REQUEST["address"];
$mob=$_REQUEST["mobile"];
$conn=mysqli_connect("localhost","root","","crime");
if($conn)
{
	$q="insert into user values('$name','$uname','$password','$email','$id','$address','$mob')";
	$r=mysqli_query($conn,$q);
	if($r)
	{
		header("location:homepage.php");
	}
	else
	{
		echo "<script>alert('Email id already in use')</script>";
	}
}

?>
