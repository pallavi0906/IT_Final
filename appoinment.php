

<!DOCTYPE html>
<html>
<title>Book an appointment</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-large w3-light-grey">
    <div class="w3-col s3">
      <a href="home.php" class="w3-button w3-block">Home</a>
    </div>
    <div class="w3-col s3">
      <a href="appoinment.php" class="w3-button w3-block">Appoinment</a>
    </div>
    <div class="w3-col s3">
      <a href="services.html" class="w3-button w3-block">services</a>
    </div>
    <div class="w3-col s3">
      <a href="logout.php" class="w3-button w3-block">Logout</a>
    </div>
  </div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-panel">
    <h1><b>Book an Appointment!</b></h1>

  </div>
  
  <form action="" method="post">
<p>
Username:<input type="text" name="user" class="text"></p>
<br>
Service: <select name="ser">
  <option value="Haircut(Male)">Haircut(Male)</option>
  <option value="Haircut(Female)">Haircut(Female)</option>
  <option value="Facial(Male)">Facial(Male)</option>
  <option value="Facial(Female)">Facial(Female)</option>
  <option value="Hair colouring(Male)">Hair colouring(Male)</option>
  <option value="Hair colouring(Female)">Hair colouring(Female)</option>
  <option value="Hair care(Male)">Hair care(Male)</option>
  <option value="Hair care(Female)">Hair care(Female)</option>
</select>
</p>
<br>
<label>Time:</label><select name="select">
	<option value="non"> Select</option>
       <option value="10:00-10:45">10:00-10:45</option>
  <option value="10:45-11:30">10:45-11:30</option>
  <option value="11:30-12:15">11:30-12:15</option>
  <option value="12:15-01:00">12:15-01:00</option>
  <option value="03:00-03:45">03:00-03:45</option>
  <option value="03:45-04:30">03:45-04:30</option>
  <option value="04:30-05:15">04:30-05:15</option>
  <option value="05:15-06:00">05:15-06:00</option>
  <option value="06:00-06:45">06:00-06:45</option>
  <option value="06:45-07:30">06:45-07:30</option>
  <option value="07:30-08:15">07:30-08:15</option>
  <option value="08:15-09:00">08:15-09:00</option>
    </select>
<br>
<br>	
	Cosmetoligist: <select name="cosm">
  <option value="Mr. ABC">Mr. ABC</option>
  <option value="Mr. QWE">Mr. QWE</option>
  <option value="Mr. XYZ">Mr. XYZ</option>
  <option value="Mr. POI">Mr. POI</option>
</select>
<br>
<br>

<input type="submit" value="register" name="submit"><br/>
<br>

</form>

<?php
if(isset($_POST["submit"]))
{
	 if(!empty($_POST['user']) )
	 {
		 $time = $_POST['select']; 
			$user = $_POST['user'];
			$cosm = $_POST['cosm'];
$ser = $_POST['ser'];
		 //DB Connection
		 $conn= mysqli_connect('localhost','root','123456','ams');
		 
		$query = mysqli_query($conn, "SELECT * FROM day WHERE time='".$time."'");

		$numrows = mysqli_num_rows($query);
		 if($numrows == 0)
		  {
				$sql = "INSERT INTO appoinment(user,ser,time,cos) VALUES('$user','$ser','$time','$cosm')";
				$s = "INSERT INTO day(user,ser,time,cos) VALUES('$user','$ser','$time','$cosm')";
			 $result = mysqli_query($conn, $sql);
			 $resu = mysqli_query($conn, $s);
			if($result && $resu){
			 echo "Registered";
			 }
			 else
			 {
			 echo "Error";
			 }
		 }
		 else
		 {
		 echo "select other time";
		 }
	 }

}
?>
<h3> Want to know the history of services obtained? Click on "History".</h3>
<center><h2><a href="hist.php">History</a></h2></center>

<!-- Footer -->

<footer class="w3-container w3-padding-32 w3-light-grey w3-center">


  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Made by <a href="meet.html" title="W3.CSS" target="_blank" class="w3-hover-text-green">Group:202</a></p>
</footer>



</body>
</html>

