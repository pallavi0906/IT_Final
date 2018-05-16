<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Account</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

<div class="login">
<a href="index.php"><h2 class="active"> sign in </h2></a>
 <a href="reg.php"><h2 class="nonactive"> sign up </h2></a> 

  <form  method="post">

Username:<input type="text" name="user" class="text" required oninvalid="this.setCustomValidity('Username must only contain characters.')"></p>
<label>Password:</label><input type="password" name="pass" class="text" required><br/>
<input type="submit" value="sign in" name="submit" class="signin" ><br/>


</form>
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
 $query = mysqli_query($conn, "SELECT * FROM reg WHERE user='".$user."' AND pass='".$pass."'");
 $numrows = mysqli_num_rows($query);
 if($numrows !=0)
 {
 while($row = mysqli_fetch_assoc($query))
 {
 $dbusername=$row['user'];
 $dbpassword=$row['pass'];
 }
 if($user == $dbusername && $pass == $dbpassword)
 {
 session_start();
 $_SESSION['sess_user']=$user;
 //Redirect Browser
 header("Location:home.php");
 }
 
 else
 {
 echo "Invalid Username or Password!";
 } 
 }
 else
 {
 echo "SORRY";
} }
 else
 {
 echo "try again";
 }
  if(!empty($_POST['user'])){ 
$user = $_POST['user'];
 $admin="admin";
 
 if($user == $admin && $pass == $admin)
 {

 //Redirect Browser
 header("Location:adhist.php");
  }}
}
?>
</div>
  
  

    <script  src="js/index.js"></script>




</body>

</html>




