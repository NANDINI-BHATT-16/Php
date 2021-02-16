<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

	body{
		margin: 0;
		padding: 0;
		background: url(bc2.jpg);
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

.container{
		width: 500px;
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

	h4{
		color: white;
		
	}

	h3{
		font-size: 40px;
		color: white;
		
	}

	h2{
		font-size: 40px;
		color: white;
		
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

	span{
		position: relative;
	}
</style>

	
</head>

<body>

<?php
session_start();

if(isset($_POST["login"]))
{

$email_id = $_POST["email_id"];
$password = $_POST["password"];


		  $conn = mysqli_connect("localhost", "root", "","blood_bank");
		  if($conn == false)
		  {
		    die("ERROR: Could not connect. " . mysqli_connect_error());
		  }
		  $qry = "SELECT * FROM sign_up where email='$email_id' and password='$password'";
		  
		  $result = mysqli_query($conn,$qry);
		    
		 	 
			
			//if ($email_id == 'email_id' && $password == 'password' ){
			   $count = mysqli_num_rows($result);
			   if($count>0)
			   {
				 	 $row1 = mysqli_fetch_array($result);
	                     $name = $row1['first_name']; 
	                     $email = $row1['email'];      
				 	 $_SESSION['name'] = $name;
				 	  $_SESSION['email'] = $email;
				   	 header("location:home.php");
				 	echo "Login Successful.";
			   }
			   else
			   {
			   	echo "<h2>Invalid user</h2>";
			   }
		  		
		  
}

?>

<div class="slider">	
	</div>

<br>
<form method="post">

	
<div class="container">
	<div class="row">

		<div class="col-sm-12">
		 	<p><h3>&nbsp;&nbsp;Enter E-Mail ID and Password to login<br><br></h3></p>

		 	<span>
		 	<i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i>
			<label for="email_id"><b><h4>Email Address</h4></b></label>
			<input class="form-control" id="email_id" name="email_id" placeholder="Email  id" required><br>

			<i class="fa fa-lock fa-lg" aria-hidden="true"></i>
			<label for="password"><b><h4>Password</h4></b></label>
			<input class="form-control" id="password" type="password" name="password" placeholder="Password" required>
			</span><br>

			<input class="btn btn-primary" type="submit" id="register" name="login" value="Login"><br>
		</div>
	</div>
</div><br>

</body>
</html>