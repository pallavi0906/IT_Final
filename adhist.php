

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
   <center> <div class="w3-col s3">
      <a href="logout.php" class="w3-button w3-block">Logout</a>
    </div>
  </div></center>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-panel">
    <h1><b>Home</b></h1>

  </div>
  <fieldset>
  <legend> Search by username</legend>
  <form action="" method="post">
<p>
Username:<input type="text" name="user" class="text" align="center"></p> 

<center><input type="submit" value="history" name="submit"><br/></center>

</fieldset>
<br>
<br>

</form>
<fieldset>
<legend> User Service</legend>
<h2 align="center">History</h2>
 <table border="1" align="center">
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
</fieldset>
<br>
<br>

<form method="post">
				 <center><input type="submit" value="delete todays data" name="delete"><br/></center>
				 
				 </form>
				 <?php
if(isset($_POST["delete"]))
{
	 
		 $conn= mysqli_connect('localhost','root','123456','ams');
		 $query = mysqli_query($conn, "TRUNCATE TABLE day");
		if ($query)
		{

echo"succesfull";
}}
 ?>
 <br><br>
 <fieldset>
 <legend> Today's Schedule </legend>
 <br>
 <form method="post">
				<center> <input type="submit" value="Today's appoinment" name="appo" ><br/></center>
				 
				 </form>
				 <table border="1" align="center" >
           <tr>
				<th>User</th>
               <th>Service</th>
               <th>Cosmetologist</th>
			   <th>Time</th>
           </tr>
				 <?php
if(isset($_POST["appo"]))
{
	 
		 $conn= mysqli_connect('localhost','root','123456','ams');
		 $query = "Select * from day";
		if ($query)
		{$result = $conn->query($query);
 //Result Message
 if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		 ?>
		                   <tr>
						   <td><?php echo $row['user']; ?></td> 
						   <td><?php echo $row['ser']; ?></td> 
		                   <td><?php echo $row['cos']; ?></td>
						   <td><?php echo $row['time']; ?></td>
					   </tr>
		                 <?php
				     }
				 } else {
				     echo "0 results";
}}}



 ?>
 <br/>
 



</body>

</html>

