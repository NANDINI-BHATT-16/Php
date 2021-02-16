<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
<style>	

body{
		margin: 0;
		padding: 0;
		background: url(bc1.jpg);
		font-family: sans-serif;
		background-repeat: no-repeat;
		background-size: cover;
	}

.slider{
	width: 1250px;
	height: 405px;
	background-repeat: no-repeat;
	margin: auto;
	animation:slider 10s infinite;
	background: url(s2.jpg);
	border: 1px solid  black;
}

.container{
		width: 700px;
		padding: 20px;
		margin: 7% auto;
		border-radius: 5px;
		background-color: rgba(0,0,0,0.2);
		align-items: center;
		box-shadow: 0 0 17px #333;
		border: 1px solid black;
	}

	.row{
		text-align: center;
		padding-top: 30px;

	}

	h3,h4{
		font-size: 40px;
		color: #000066;
		text-shadow: 0.px 2px #e6eeff;
		
	}

	input,button{	
		width: 300px;
		height: 40px;
		border: none;
		outline: none;
		padding-right: 40px;
		box-sizing: border-box;
		margin-bottom: 20px; 
	}

	button:hover, input:hover{
		box-shadow: 2px 2px 5px black;
		
	}
	input:hover{
		background-color: #ddd;
	}


@keyframes slider{
	
	25%{
		background: url(s2.jpg);
	}
	50%{
		background: url(b2.jpg);
	}
	75%{
		background: url(s3.jpg);
	}
	100%{
		background: url(s5.jpg);
	}

	
}

ul {
  list-style-type: none;
  margin: 0;
  overflow: hidden;
  background-color: #ff6666;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

</style>
	
</head>

<body>
<?php

$conn = mysqli_connect("localhost", "root", "","blood_bank");
if($conn == false)
	{
    die("ERROR: Could not connect. " . mysqli_connect_error());
	}

if(isset($_POST["create"]))
{
	
	$first_name = 	$_POST["first_name"];
	$last_name = 	$_POST["last_name"];
	$email = 		$_POST["email"];
	$password = 	$_POST["password"];
	$phone_number = $_POST["phone_number"];
	$age = 			$_POST["age"];

	// Database connection
	$sql = mysqli_query($conn,"INSERT into sign_up (signup_id,first_name, last_name, email, password, phone_number,age) values (NULL,'".$first_name."','".$last_name."','". $email ."','".$password."','".$phone_number."','".$age."')");

	if($sql == true)
{	
	header("location:login.php");
	echo "Registration succesful";
}
else{
	echo "Failed";
	}

}

?>

 <div class="slider">	
	</div>


<form action=" " method="post">
	<center>
	<br><h3>&nbsp;&nbsp;&nbsp;Registration form</h3>
	<p><h4>&nbsp;&nbsp;&nbsp;Please fill the registration form</h4></p>

	</center>

<div class="container">
	<h5><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Already a user?&nbsp;&nbsp;&nbsp Click on login and login. &nbsp;&nbsp;&nbsp;<a href="login.php"><font color="#000066"><u>Login</u></font></a>
	<h5>

	<div class="row">
		<div class="col-sm-12">
			<br><label for="first_name">
				<b><font color="white">First name</b></label>
				<input class="form-control" id="fname" name="first_name" placeholder="First Name"required><br>

				<label for="last_name"><b>Last name</b></label>
				<input class="form-control" id="lname" name="last_name" placeholder="Last Name" required><br>

				<label for="email"><b>Email Address</b></label>
				<input class="form-control" id="email" name="email" placeholder="Email  id" required><br>

				<label for="password"><b>Password</b></label>
				<input class="form-control" id="password" type="password" name="password" placeholder="Password" required><br>

				<label for="phone_number"><b>Phone number</b></label>
				<input class="form-control" id="phnumber" name="phone_number" placeholder="Phone number" required><br>

				<label for="age"><b>Age</b></label>
				<input class="form-control" id="age" name="age" placeholder="Age" required><br>
				</font>
				
				<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign up"><br>
		</div>
	</div>
</div>

</body>
</html>