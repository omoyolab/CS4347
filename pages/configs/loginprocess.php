
<?php
	include_once "db.php";
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	 $email = stripcslashes($email);  
     $password = stripcslashes($password);  
     $email= mysqli_real_escape_string($conn,$email);  
     $password = mysqli_real_escape_string($conn,$password);  
	 
	 
	  $result= mysqli_query ($conn,"SELECT * FROM user WHERE email = '$email' and password = '$password'")
				or die("Failed to Query database" .mysqli_connect_error());
	  $row = mysqli_fetch_array($result);
	  
	  if($row['email'] == $email && $row['password']){
		  echo "login successful!!  Welcome " .$row['name'];
		  header("Location: home.php"); 
	  }else {
		  echo "login Failed!!";
		   header("Location: login.php"); 
	  }

?>