<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body >


<div id="main">
<h1 style="color:black;">Attendance Mangment System</h1>

<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
Select your authentication method :
<div> <input id="option-one" name="radio" value="one" checked="checked" type="radio"> <label for="option-one"> <span></span> Admin </label> </div> <div> <input id="option-two" name="radio" value="two" type="radio"> <label for="option-two"> <span></span> Lecturer </label> </div>

<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
<div id="footer">
<IMG SRC="./BarcodeScanner99.png" ALT="some text" WIDTH=400 HEIGHT=400 >
</div>




</body>
</html>