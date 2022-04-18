<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Register</title>
<link rel="stylesheet" type="text/css"  href ="../css/style.css">
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/jquery.validate.min.js"></script>


</head>
<body>
        <div align="center">
            <h1>Matching App: User Signup form</h1>
        </div>
		
		<div>
    <form action="configs/insert2.php" method="post" id="signup2">
					<table class="form">
						<tr>
							<td>Name:</td>
							<td><input type="text" id="name" name="name" size="20"></td>
						</tr>
						<tr>
							<td>Age:</td>
							<td><input type="text" id="age" name="age" size="20" ></td>
						</tr>
                        <tr>
							<td>Sex:</td>
							<td><input type="text" id="sex" name="sex" size="20" ></td>
						</tr>
						<tr>
							<td>Email:</td>
							<td><input type="text" id="email" name="email" size="20" ></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="password" id="password" name="password" size="20" ></td>
						</tr>
						<tr>
							<td>College:</td>
							<td><input type="text" id="college" name="college" size="20" ></td>
						</tr>
						<tr>
							<td>Major:</td>
							<td><input type="text" id="major" name="major" size="20" ></td>
						</tr>
					
						<tr>
							<td colspan="2" align="center">
								<button type="submit">Submit</button>
								<button type="button" id="cancelBtn" >Cancel</button>
							</td>
						</tr>
					</table>
				</form>
		</div>
		
	
</body>

<script type="text/javascript">

	$(document).ready(function(){
		$("#signup2").validate({
			rules:{
				name: "required",
				age: "required",
				sex: required,
				email:{
					required:true,
					email: true
				},
				password: "required",
				college: "required",
				major: "required"
			
			},
			messages:{
				name: "Please enter you Name",
				age: "Please enter your Age",
				sex:  "Please enter your Sex",
				email:  "Please enter your Email",
				password:  "Please enter your Password",
				college:  "Please enter your College",
				major:  "Please enter your Major"
			}
		})
	})

</script>
</html>