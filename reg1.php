<!DOCTYPE html>

<html>
<head>
<title>Cure All</title>
<meta charset="utf-8">

<link href="layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="wrapper row1">
  <header id="header" class="clear"> 
    
     <div id="logo" class="fl_left">
      <h1><a href="index.html">Cure all</a></h1>
    </div>
    
  
  </header>
</div>

<div class="wrapper row2">
  <nav id="mainav" class="clear"> 
 
    <ul class="clear">
      <li class="button"><a href="index.html">Home</a></li>
              <li class ="button"><a href="Emed.php">E-Medicine</a></li>
<li class ="button"><a href="Doctors.php">Doctors</a></li>

<li class ="button"><a href="login.php"> LOGIN</a></li>
                
    </ul>
   
  </nav>
</div>


<div class="wrapper row3">
  <main class="container clear"> 





<h2 align="center"> Doctors Registration </h2>
<form action="" method="post" enctype="multipart/form-data">
<label>ID :</label><input type="text" name="id" required>
<label>Password :</label><input type="password" name="pass" required>
<label>Name :</label><input type="text" name="name" required>
<label>E-mail :</label><input type="email" name="email" required>
<label>Phone_1   :</label><input type="tel" name="phone_1" required>
<label>Phone_2   :</label><input type="tel" name="phone_2" required>

<label>Address:</label><input type="var" name="address" required>

<label>gender  :</label>
<input type="radio" name="gender"  required value="Male"/>Male

<input type="radio" name="gender"  required value="Female"/>Female

<label>Qualification:</label><select name="qualification">
        <option value="BMBS"> BMBS</option>
        <option value="BM">BM</option>
<option value="MBChB">MBChB</option>
<option value="BmedSci">BmedSci</option>
<option value="MCM">MCM</option>
<option value="MMSc">MMSc</option>
<option value="MMed">MMed</option>
<option value="MPhil">MPhil</option>
<option value="MS">MS</option>
<option value="MSc">MSc</option>
<option value="DCM">DCM</option>
<option value="DClinSurg">DClinSurg</option><br>

    </select>

<label>field:</label><input type="text" name="field" required>

<label>Certificate:</label><input type="file" name="cert" >

<input type="submit" value="Register" name="submit">
</form>
<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['id']))
{
$id = $_POST['id'];
 $pass= $_POST['pass'];
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone_1 = $_POST['phone_1'];
$phone_2 = $_POST['phone_2'];
 $address = $_POST['address'];
$gender = $_POST['gender'];
$qualification = $_POST['qualification'];
$field = $_POST['field'];
 $conn = new mysqli('localhost', '35', '35') or die (mysqli_error()); // DB Connection
 $db = mysqli_select_db($conn, 'cureall') or die("DB Error"); // Select DB from database
 //Selecting Database
 $query = mysqli_query($conn, "SELECT * FROM dor WHERE id='".$id."'");
 $numrows = mysqli_num_rows($query);
 if($numrows == 0)
 
 {
 //Insert to Mysqli Query
 $sql = "INSERT INTO doc_login(user,pass) VALUES('$id','$pass')";
 $result = mysqli_query($conn, $sql);
$picture=$_FILES['cert']['name'];
$dir = "C:/wamp64/www/lamp/Lamp final/Files/";
move_uploaded_file($_FILES['cert']['tmp_name'],$dir.$picture);
$sql = "INSERT INTO dor(id,pass,name,email,phone_1,phone_2,address,gender,qualification,field,file) VALUES('$id','$pass','$name','$email','$phone_1','$phone_2','$address','$gender','$qualification','$field','$picture')";
 $resul = mysqli_query($conn, $sql)or die("ERROR");
 if($result && $resul){
 echo "Sent Successfully";
 }
 else
 {
 echo "Failure!";
 }
 }
 else
 {
 echo "That Username already exists! Please try again.";
 }
 }
 else
 {
 ?>
 <!--Javascript Alert -->
<script>alert('Required all felds');</script>
 <?php
 }
}
?>

</div>
    


  

<div class="wrapper row4">
  <footer id="footer" class="clear"> 
  <div class="row">
	







    
  </footer>
</div>
</div>
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    
    <p class="fl_left">&copy; 2017 E-Medicine. All Rights Reserved done by LAMP Group number 23</p>
    
</div>
  </div>

</html>





<html>
<head>
<title>Home</title>
<style>
body{
	background-color: "#0000FF";
	text-align: center;
}
.displaybox{
	color: rgb(0,0,255);	
	margin: auto;
	width: 1000px;
	border: 2px solid #000000;
	padding: 10px;
	align: center;
	font: 1.5em normal verdana, helvetica, arial; 
}
</style>
<script>
var ajaxobject=new XMLHttpRequest();
	function vote() {
	  if(!ajaxobject)
	  {
	  	document.getElementById("showstudent").innerHTML="AJAX obejct could not be created";
	  	return;
	  }
	  	  ajaxobject.open("GET","1.php");
	  	  ajaxobject.send();
	  	  ajaxobject.onreadystatechange=getResponse; 	
	}
function getResponse(){
		if(ajaxobject.readyState == 4 && ajaxobject.status == 200)
		{
			document.getElementById('showstudent').innerHTML=ajaxobject.responseText;
		}
	}
function result()
		{	
		document.getElementById("shows").innerHTML=document.getElementById("list").elements['vote'].value;
		}
</script>

</head>

<body>
 <input type="button" value="click for vote"onclick="vote()"/>
	<div id="showstudent" class="displaybox">
		</div>
<input type="button" value="Result" onclick="result()">

	<div id="shows" class="displaybox" >
		</div>
<input type="button" value="submit" onclick="result()">
<div id="shows" class="re" >
		</div>

</body>
</html> 


1.php

<?php
$dbhost="localhost";
$dbuser="root";
$dbpassword="tiger";
$dbname="vote";
$dbh = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname) or die("Error connecting to 		database");
$query="select * from cr";
$result=mysqli_query($dbh,$query) or die("Querying error");
	echo '<form id="list">';
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{	
	echo '<input type="radio" name="vote" value="'.$row['name'].'" id="r1" >' .$row['name'].'</input> <br />';
}
	echo'</form>';
?>





form validation 


<form action="/action_page.php">
  Country code: <input type="var" name="country_code" pattern="[A-Za-z]{3}[0-9]{2}/[0-9]{2}/[0-9]{4}" title="Three letter country code">
  <input type="submit">
</form>
