<?php
	session_start();
	if(isset($_GET['logout']))
	{
		$_SESSION['name'] = NULL;
		header("location:login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<style>


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

h5{
		font-size: 35px;
		color: #cc0000;
		text-align: center;
		text-shadow: 1px 1px black;
		
	}


.gallery{
	margin: auto;
    padding: 30px;
	width:100%;
	display:inline-block;
}

.gallery img{
	 padding: 30px;
	width:45%;
	transition: 1s;
}
.gallery img:hover{
	filter: grayscale(100%);
	transform: scale(1.1);
	border: 2px solid black; 
	background-color: black;
}

.cont{
	text-align: center;

}

.btn{
	border: 1px solid #3498db;
	font-size: 25px;
	font-family: "monstserrat";
	cursor: pointer;
	margin: 10px;
	transition: 0.8s;
	position: relative;
	overflow: hidden;
}

.btn1{
	color:#fff;
}

.btn1:hover{
	color:#3498db;
}

.btn::before{
	content: "";
	position: absolute;
	left: 0;
	width: 100%;
	height: 0%;
	background: #3498db;
	z-index:-1;
	transition: 0.8s;
}

.btn1::before{
	height: 180%;
	bottom: 0;
	border-radius: 50% 50% 0 0;
}
.btn1:hover::before{
	height: 0%;
	
}

</style>

</head>

<body>


<div class="slider">	
	</div>

	
<?php 
		if(isset($_SESSION['name']))
			{
				echo "<h4> Welcome User </h4>
				<ul>
			  <li><a href='home.php'>Home</a></li>
			  <li><a href='register.php'>Registration</a></li>
			  <li><a href='DonerAndRequest.php'>Donor and Requester form</a></li>
			  </ul><br>";
			  
			}


?>



	<?php 

			echo "<form method='get'>
			<input type='submit' name='logout' value='Logout' ><br>";
	 ?>


<br><h3><center><br>Donate Blood and save Life.. Your blood can save someone's Life..</center></h3>
<h5><br>&nbsp;&nbsp;&nbsp;&nbsp;Welcome to the online blood bank donoation management sysment where&nbsp;&nbsp; you can donate  blood as well as request blood. <br>&nbsp;&nbsp;&nbsp;For requesting or donating blood fill the registration form.<br> &nbsp;&nbsp;&nbsp;&nbsp;Thank you and have a great day!<br></h5>
	<div class="gallery">
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://ahduni.edu.in/assets/thumbs/87259DSC02399.JPG" height="60%" width="33%">
		
		<img src="https://c4.wallpaperflare.com/wallpaper/743/1006/491/blood-donation-wallpaper-preview.jpg" height="60%" width="33%"><br>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://media.istockphoto.com/photos/donate-blood-group-doctor-picture-id1068482588?k=6&m=1068482588&s=612x612&w=0&h=FF3oEuvo_ISdr92tfd5HWSoOUSciL9RNRS1SXIOva1Y=" height="60%" width="33%">
		
		<img src="https://media.istockphoto.com/photos/donating-blood-for-transfusions-blood-donation-and-blood-donor-bank-picture-id1171248030?k=6&m=1171248030&s=612x612&w=0&h=SFphxYbD-eFdjPody6SrnsxjQP2p-5uHOFGHGriAau4=" height="60%" width="33%"><br>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://media.istockphoto.com/photos/general-practitioner-doing-blood-test-picture-id627356286?k=6&m=627356286&s=612x612&w=0&h=bW61ohIWB6Yqb8_TVw6DkIlp6HHPOLK86O0QI3_IDDE=" height="60%" width="33%">

		<img src="https://media.mehrnews.com/d/2018/12/01/4/2971635.jpg" height="60%" width="33%">
	</div>

	<div class="cont">
		<button class="btn btn1"><a href="result.php">Records</button>
	</div>
</body>
</html>