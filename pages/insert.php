<?php
include_once 'db.php';
if($_SERVER['REQUEST_METHOD']=="POST")
{    
	
     $zodiac = $_POST['zodiac'];
     $interest1 = $_POST['interest1'];
     $interest2 = $_POST['interest2'];
     $interest3 = $_POST['interest3'];
    
	 	 $sql = "INSERT INTO `match` (zodiac,interest_1,interest_2,interest_3)
     VALUES ('$zodiac','$interest1','$interest2','$interest3')";
	
	if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
	mysqli_close($conn);
   
header("Location: signup2.php"); 
	
   
}
 
?>