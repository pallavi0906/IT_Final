

<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
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
    <h1><b>Home</b></h1>

  </div>
  
  <form action="" method="post">
<p>
Username:<input type="text" name="user" class="text"></p> 

<input type="submit" value="history" name="submit"><br/>


</form>
<h2 align="center"> History</h2>
 <table class="table table-hover" border="1" align="center">
           <tr>
               <th>Service</th>
               <th>Cosmetologist</th>
           </tr>
           
 

		             
		       
<?php
if(isset($_POST["submit"]))
{
	 if(!empty($_POST['user']) )
	 {
		 
			$user = $_POST['user'];
		 //DB Connection
		 $conn= mysqli_connect('localhost','root','123456','ams');
		 
		$sql = "Select ser,cos from appoinment where user='$user'";
		
 $result = $conn->query($sql);
 //Result Message
 if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		 ?>
		                   <tr>
						   <td><?php echo $row['ser']; ?></td> 
		                   <td><?php echo $row['cos']; ?></td>
					   </tr>
		                 <?php
				     }
				 } else {
				     echo "0 results";
}}}
				
				 ?>
</table>
<br>
<br>

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

