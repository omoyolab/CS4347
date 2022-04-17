<?php
include_once 'db.php';
if($_SERVER['REQUEST_METHOD']=="POST")
{    
	 $getID = "SELECT * FROM `match` ORDER BY `match`.`match_id` DESC LIMIT 1" ;
	 $result = mysqli_query($conn, $getID) or die("Bad Query: $getID");
	 $row = mysqli_fetch_assoc($result);
	 $match_id = $row['match_id'];
	 
	 
	 
	 $image = NULL;
     $date = date("Y-m-d H:i:s");
     $name = $_POST['name'];
     $age = $_POST['age'];
     $sex = $_POST['sex'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $college = $_POST['college'];
     $major = $_POST['major'];
    


	  
	 $sql = "INSERT INTO user (name,email,password,college,major,sex,image, registered_date, match_id, age)
     VALUES ('$name','$email','$password', '$college', '$major','$sex','$image','$date','$match_id','$age' )";
	 
	 if (mysqli_query($conn, $sql)) {
        echo "New Account created Sucessfully !";
		echo "<a href='login.php'>Click here to sign in</a>";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
    

	mysqli_close($conn);
   
}
    
 
?>