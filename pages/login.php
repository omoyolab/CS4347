
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Register</title>
<link rel="stylesheet" type="text/css"  href ="style.css">

</head>
<body>
        <div align="center">
            <h1>Database Project User Sign in form</h1>
        </div>
		
		<div>
    <form action="home.php" method="post">
					<table class="form">
						<tr>
							<td>Email:</td>
							<td><input type="text" id="email" name="email" size="20"></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="password" id="password" name="password" size="20" ></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<button type="submit">Save</button>&nbsp;&nbsp;&nbsp;
								<button type="button" id="cancelBtn" >Cancel</button>
							</td>
						</tr>
					</table>
				</form>
		</div>

</body>

</html>