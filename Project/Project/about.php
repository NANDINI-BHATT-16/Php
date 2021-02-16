<!DOCTYPE html>
<html>
<head>
	<title>About us</title>
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
</style>

</head>

<body>

<div class="slider">  
  </div>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="register.php">Registration</a></li>
  <li><a href="donor_and_request_form.php">Donor and Requester form</a></li>
  <li><a href="about.php">About</a></li>
</ul>


</body>
</html>