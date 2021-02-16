<html>
<head>
	<title>Donor and Requester form</title>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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

h2{
		font-size: 40px;
		color: #000066;
		text-align: center;
		
		
	}

h3{

	text-align: left;
	color: white;
}

h4{
	text-align: left;
	color: white;
	font-size: 25px;
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
		width: 700px;
		padding: 20px;
		margin: 7% auto;
		border-radius: 5px;
		background-color: rgba(0,0,0,0.2);
		box-shadow: 0 0 17px #333;
		border: 1px solid black;
	}

	.row{
		padding-top: 30px;

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



.select-wrapper{
		float: left;
		background-color: black; 
		align-items: center;
		display: inline-block;
		border: 1px solid #d8d8d8;            
		background: url("/examples/images/dropdown.png") no-repeat right center;
		cursor: pointer;
		border: 1px solid white;
		border-radius: 2px black;
	}
	.select-wrapper, .select-wrapper select{
		width: 300px; 
		border: 1px solid black;
		height: 26px;
		line-height: 26px;
	}
	.select-wrapper:hover{
		border: 1px solid black;
		background: url("/examples/images/dropdown-hover.png") no-repeat right center;
		border:2px solid black;		
	}
	.select-wrapper .holder{
		display: inline-block;
		margin: 0 35px 0 5px;
		white-space: nowrap;            
		overflow: hidden;
		cursor: pointer;
		position: relative;
		z-index: -1;
	}
	.select-wrapper select{
		margin: 0;
		background-color:white;
		border-color: 1px solid black;
		position: absolute;
		z-index: 2;            
		cursor: pointer;
		outline: none;
		opacity: 0;
	}

</style>

<script>
    $(document).ready(function(){
        $(".custom-select").each(function(){
            $(this).wrap("<span class='select-wrapper'></span>");
            $(this).after("<span class='holder'></span>");
        });
        $(".custom-select").change(function(){
            var selectedOption = $(this).find(":selected").text();
            $(this).next(".holder").text(selectedOption);
        }).trigger('change');
    })
</script>


</head>

<body>

<?php
session_start();
if(isset($_POST["submit"]))
{
	
	$type = 		$_POST["type"];
	$blood_group =   $_POST["blood_group"];
	$date =			 $_POST["date"];
	$address = 		 $_POST["address"];
	$bags = 		 $_POST["bags"];
	$status = 		 "pending";

    // Database connection

    $con = mysqli_connect("localhost", "root", "","blood_bank");
    if($con == false)
	{
    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
			else
			{		
					$email = $_SESSION['email'];
					$extract = "SELECT * FROM sign_up WHERE email ='$email'";
					$result = mysqli_query($con,$extract);
					$row = mysqli_fetch_array($result);
					$signup_id = $row["signup_id"];
			}

	$sql = mysqli_query($con,"INSERT into donor_requester values(NULL,'". $signup_id ."','". $type ."','". $blood_group ."','". $date ."','". $address ."','". $bags ."','". $status ."')");

	if($sql =  true)
{
	echo "<h2> Your request has been successfuly sent.";
	
}
	else{
		echo "Failed";
	}

}

?>

<div class="slider">	
	</div>

<ul><h4>
  <li><a href="home.php">Home</a></li>
  <li><a href="register.php">Registration</a></li>
  <li><a href="DonerAndRequest.php">Donor and Requester form</a></li>
	</h4></ul>

<form action=" " method="post">
	<br><h2>&nbsp;&nbsp;&nbsp;Donor Requester form</h2><br>

	<p><h2>&nbsp;&nbsp;&nbsp;&nbsp;Please fill the form for requesting or donating blood</h2></p>

<div class="container">
	<div class="row">

		<div class="col-sm-12">
		<h4><p>Type</p>
			<center>
				<select name="type" class="custom-select">
            <option>Donor</option>
            <option>Requester</option>
        	</select>
            <br>
            </center>

			<br><p>Blood Group Type</p>
			<center>
			<select name="blood_group" class="custom-select">
            <option>A+</option>
            <option>B+</option>
            <option>O+</option>
            <option>AB+</option>
            <option>A-</option>
            <option>B-</option>
            <option>O-</option>
            <option>AB-</option>
            </center>
       </h4>

        </select><br>

			<br><h3><label for="date"><b>Date</b></label>
			<input class="form-control" id="date" name="date" placeholder="Date Required"><br>

			<label for="address"><b>Address</b></label>
			<input class="form-control" id="address" name="address" placeholder="Address Required"><br>

			<label for="bags"><b>Nuber of bags</b></label>
			<input class="form-control" id="bags" name="bags" placeholder="Nuber of bags Required"></h3><br>

			<input class="btn btn-primary" type="submit" id="register" name="submit" value="Register"><br>
		</div>
	</div>
</div>

</body>
</html>