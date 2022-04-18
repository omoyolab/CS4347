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
        <h1>Matching App: Delete Page</h1>
    </div>
		
	<div>
        <form action="home.php" method="post">
            <table class="form">
                <tr>
                    <h1>Warning!</h1>
                    <h3>Your account will be permanently deleted! No account can be recovered!</h3>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button type="submit">Delete</button>&nbsp;&nbsp;&nbsp;
                        <button type="button" id="cancelBtn" >Cancel</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>