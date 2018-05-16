<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Register</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>


  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

<div class="login">
  <a href="index.php"><h2 class=" nonactive"> sign in </h2></a>
 <a href="reg.php"><h2 class="active"> sign up </h2></a> 
  
  <form  method="post">

Username:<input type="text" name="user" class="text" required oninvalid="this.setCustomValidity('Username must only contain characters.')"></p>
<label>Password:</label><input type="password" name="pass" class="text" required><br/>
<input type="submit" value="sign up" name="submit" class="signin"><br/>
<br />
</form>
</div>	
<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['user']) && !empty($_POST['pass'])){ 
$user = $_POST['user'];
 $pass = $_POST['pass'];

 //DB Connection
 $conn = new mysqli('localhost', 'root', '123456') or die(mysqli_error());
 //Select DB From database
 $db = mysqli_select_db($conn, 'ams') or die("databse error");
 //Selecting database
 $query = mysqli_query($conn, "SELECT * from reg WHERE user='".$user."'");
 $numrows = mysqli_num_rows($query);
 if($numrows == 0)
  {
 $sql = "INSERT INTO reg(user,pass) VALUES('$user','$pass')";
 $result = mysqli_query($conn, $sql);
 if($result)
 {
 echo "registered";
 }	
 else
 {
 echo "fail";
} }
else{
	echo "user already there";
}
 
 }
}
?>


</div>
  
  

    <script  src="js/index.js"></script>




</body>

</html>



