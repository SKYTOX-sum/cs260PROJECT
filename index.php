<!DOCTYPE html>
<html>
<head>
	<title>TPC</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	
<H1 class="heading">TPC</H1>
<div class="container">
    <div class="attribute">
        <h2>Student</h2>
        <form action="login-check.php" method="post">
            <label  class="head">ROLL NO:</label>
            <input type="text" id="rollno" name="rollno"><br><br>
            <label for="student-password" class="head">Password:</label>
            <input type="password" id="password" name="password"><br><br>
            <div class="button-container">
                <button type="submit" name="submit" class="login-button">Log In</button>
                <a href="signup.php" class="signup-button">Sign Up</a>
            </div>
        </form>
    </div>

    <div class="attribute">
        <h2>Alumnus</h2>
        <form action="logincheckalumin.php" method="post">
            <label  class="head">ROLL NO:</label>
            <input type="text" id="rollno" name="rollno"><br><br>
            <label for="alumnus-password" class="head">Password:</label>
            <input type="password" id="password" name="password"><br><br>
            <div class="button-container">
                <button type="submit" name="submit" class="login-button">Log In</button>
                <a href="aluminisignup.php" class="signup-button">Sign Up</a>
            </div>
        </form>
    </div>

    <div class="attribute">
        <h2>Company</h2>
        <form action="logincheckcompany.php" method="post">
            <label  class="head">Company Name:</label>
            <input type="text" id="companyname" name="companyname"><br><br>
            <label for="company-password" class="head">Password:</label>
            <input type="password" id="password" name="password"><br><br>
            <div class="button-container">
                <button type="submit" name="submit" class="login-button">Log In</button>
                <a href="companysignup.php" class="signup-button">Sign Up</a>
            </div>
        </form>
    </div>
    
</div>
</body>
</html>