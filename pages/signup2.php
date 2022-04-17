
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Register</title>
<link rel="stylesheet" type="text/css"  href ="style.css">

</head>
<body>
        <div align="center">
            <h1>Database Project User Signup form</h1>
        </div>
		
		<div>
    <form action="insert2.php" method="post">
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
						
                     
						<tr><td>&nbsp;</td></tr>
						<tr>
							<td colspan="2" align="center">
								<button type="submit">Submit</button>&nbsp;&nbsp;&nbsp;
								<button type="button" id="cancelBtn" >Cancel</button>
							</td>
						</tr>
					</table>
				</form>
		</div>
		
	
</body>

</html>