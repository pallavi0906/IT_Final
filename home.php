<!DOCTYPE html>
<html>
<title>Home</title>
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
      <a href="appoinment.php" class="w3-button w3-block">Appointment</a>
    </div>
    <div class="w3-col s3">
      <a href="services.html" class="w3-button w3-block">services</a>
    </div>
    <div class="w3-col s3">
      <a href="logout.php" class="w3-button w3-block">Logout</a>
    </div>
  </div>
</div>

 
  
  <!-- Grid -->
  <div class="w3-row-padding" id="plans">
    <div class="w3-center w3-padding-64">
      <h3>Offers and Announcements</h3>
      
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Welcome to the website which books an appointment for you by using your fingertip. </li>
       
      </ul>
    </div>
<div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Surprise! We have opened a new branch of our salon in area. Please pay a visit to see the hospitality. Thank you. </li>
       
      </ul>
    </div>
<div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Now you can book an appointment with the desired cosmetologist too. Please go on the appointment page and have a look.</li>
       
      </ul>
    </div>

    
  </div>
  <br>
  <br>
  <fieldset>
  <legend> Feedback </legend>
  <center><form method="post">
User:<input name="user" type="text">
Feedback: <input name="feed" type="text">
 <input type="submit" value="send" name="submit" ><br/>
</form>
</center>
</fieldset>
 <?php

if(isset($_POST["submit"])){
 if(!empty($_POST['user']) && !empty($_POST['feed'])){ 
$user = $_POST['user'];
 $feed = $_POST['feed'];

 $conn = new mysqli('localhost', 'root', '123456') or die(mysqli_error());
 //Select DB From database
 $db = mysqli_select_db($conn, 'ams') or die("databse error");
 //Selecting database
 
 $sql = "INSERT INTO fed(user,feed) VALUES('$user','$feed')";
 $result = mysqli_query($conn, $sql);
 if($result)
 {
 echo "sent";
 }	

else{
	echo "error";
}
 
 }
}
?>
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

