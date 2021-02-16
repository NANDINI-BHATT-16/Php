

<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="ddtf"></script>


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

select{
  width: 60px;
  height: 40px;
  border-radius: 5px; 
  border: 1px solid black;
  background-color: pink;
}

option{
  background-color: white;
  width: 50px;

}

.table-responsive{
  width: 100%;
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
  
</ul>
<br><br>

<div class="container" width="400px">
  <hr><center><h2>Data</h3></center></h2>
  <div class='table-responsive'>
    <table class='table table-stripped' align='center'>
     

     <tr>
       <th><center><h3>First Name</h3></center></th>
       <th><center><h3>Last Name</h3></center></th>
       <th><center><h3>Type</h3></center></th>
       <th><center><h3>Blood Group</h3></center></th>
     </tr>
   

<?php

  $con = mysqli_connect("localhost", "root", "","blood_bank");
    $qry = "SELECT  s.first_name, s.last_name, d.type, d.blood_group FROM sign_up s, donor_requester d WHERE s.signup_id = d.signup_id";
    $result = mysqli_query($con,$qry);
    ?>
             <?php
               while ($row = mysqli_fetch_array($result))
               {
                  echo '<tr>';
                  echo'<td><h5><center>' .$row['first_name'].'</td></center></h5>';
                  echo'<td><h5><center>' .$row['last_name'].'</td></center></h5>';
                  echo '<td><h5><center>'. $row["type"].'</td></center></h5>';
                 echo '<td><h5><center>'.$row["blood_group"].'</td></center></h5>';
                  echo '</tr>';
               }
              
    ?>
    </table>
    
  </div>
  </div>
</div>

 
</body>
</html>