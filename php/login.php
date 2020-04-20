<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login page</title>
    <link href="../CSS/login.css" rel="stylesheet" >

</head>

<body>
<?php include "header.php";?>

<div class="container">
    <div class="login-box">
            <div id="avatar"> <img src="../img/login.png" class="avatar"></div>
        <h1>Login Here</h1>
        <form method="post" action="loginconnect.php">
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter email" required="required">
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password" required="required">
            <input type="submit" name="submit" value="login">
       <!-- <a href="#" onclick="document.location.href='register.php';" id="register">Register</a>-->

        </form>
    </div>
</div>


<style></style>
</body>


</html>
