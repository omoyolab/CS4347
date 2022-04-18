<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Register</title>
<link rel="stylesheet" type="text/css"  href ="../css/style.css">
<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
</head>
<body>
        <div align="center">
            <h1>Matching App: Update Account/h1>
        </div>
		
	<div>
        <h2>Profile Preferences</h2>
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
                
                <tr>
                    <td colspan="2" align="center">
                        <button type="submit">Next</button>
                        <button type="button" id="cancelBtn" >Cancel</button>
                    </td>
                </tr>
            </table>
        </form>

        <h2>Account Information</h2>
        <form action="configs/insert2.php" method="post">
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
                        <button type="submit">Make Changes</button>
                        <button type="button" id="cancelBtn" >Cancel</button>
                    </td>
                </tr>
            </table>
        </form>
                    
    </div>
	
</body>
</html>