
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
    <form action="configs/insert.php" method="post">
					<table class="form">
                        <tr>
							<td>Zodiac:</td>
							<td><input type="text" id="zodiac" name="zodiac" size="20" ></td>
						</tr>
						<tr>
							<td>Interest 1:</td>
							<td><input type="text" id="intrest1" name="interest1" size="20" ></td>
						</tr>
                        <tr>
							<td>Interest 2:</td>
							<td><input type="text" id="intrest2" name="interest2" size="20" ></td>
						</tr>
                        <tr>
							<td>Interest 3:</td>
							<td><input type="text" id="intrest3" name="interest3" size="20" ></td>
						</tr>
                     
						<tr><td>&nbsp;</td></tr>
						<tr>
							<td colspan="2" align="center">
								<button type="submit">Next</button>&nbsp;&nbsp;&nbsp;
								<button type="button" id="cancelBtn" >Cancel</button>
							</td>
						</tr>
					</table>
				</form>
		</div>

</body>

</html>