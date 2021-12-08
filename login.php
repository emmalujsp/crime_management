#sandra maria joseph

<html>
<head>
<title>Login</title>
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
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.bt {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.bt:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 10%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
body {
  background-image: url("photos/bg.jpg");
  background-attachment: fixed;
  background-position: center;
  background-size: cover;
  color: white;
}
</style>
</head>
<body>
<?php
SESSION_START();
$conn=mysqli_connect("localhost","root","","crime");
if(isset($_REQUEST['sub']))
{
	$ema=$_REQUEST["email"];
	$psw=$_REQUEST["password"];
	$a = $_REQUEST['auth'];
	if($a=='user')
	{
		$q="select * from user where username='$ema' and password='$psw'";
		$r=mysqli_query($conn,$q);
		if($d=mysqli_fetch_assoc($r))
		{
			$na=$d['u_name'];
			$_SESSION['name']=$na;
			$_SESSION['user']=$ema;
			header("location:homepage.php");
		}
		else
		{
			echo "<script>alert('Wrong email or password')</script>";
		}
	}
	if($a=='admin')
	{
			if($ema=='admin@123' && $psw=='12345')
			{
				$e="Admin";
				$_SESSION['name']=$e;
				header("location:homepage.php");
			}
			else
			{
				echo "<script>alert('Wrong email or password')</script>";
			}
	}
		if($a=='police')
	{
		$q="select * from police where username='$ema' and password='$psw'";
		$r=mysqli_query($conn,$q);
		if($d=mysqli_fetch_assoc($r))
		{
			$na=$d['place'];
			$_SESSION['place']=$na;
			$_SESSION['user']=$ema;
			header("location:homepage.php");
		}
		else
		{
			echo "<script>alert('Wrong email or password')</script>";
		}
	}
}
?>
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
				<li class="nav-item active"><a href="signup.html" class="nav-link"><span class='far fa-user-circle'></span>&nbspSignup</a></li>
			</ul>
  </div>
</nav>
<form>
  <div class="imgcontainer">
    <img src="photos/avatar.png" alt="Avatar" class="avatar">
  </div>
	
  <div class="container">
	<label class="radio-inline"><input type="radio" name="auth" checked value="user">User</label>&nbsp&nbsp&nbsp
	<label class="radio-inline"><input type="radio" name="auth"  value="police">Police</label>&nbsp&nbsp&nbsp
	<label class="radio-inline"><input type="radio" name="auth"  value="admin">Admin</label><br>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
	<input type="submit" name="sub" class="bt" value="Login">
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" >
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</body>
</html>
