<?php


include("connection.php");

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email_address'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirm_password'];
$Age = $_POST['Age'];
$Genre = $_POST['genre'];
$Connu = $_POST['Connu'];
$Situation = $_POST['situation'];

$sql1 = "Select * from users ";
$result = mysqli_query($con, $sql1);
while ($rows = mysqli_fetch_array($result)) {
    if ($email == $rows['Email']) {
        echo '<script>alert("The Email is already take");';
        die("window.history.go(-1);</script>");
    }
}

if ($password !== $confirmpassword) {
    echo '<script>alert("Password and Confirm Password are not the same!");';
    die("window.history.go(-1);</script>");
}

$sql = "INSERT INTO users(Role,Email,MotDePasse,Nom,Prenom)
        VALUES
        ('1','$email','".md5($password)."','$nom','$prenom')";


if (!mysqli_query($con, $sql)) {
    die("Error : " . mysqli_error($con));
}

$sql2 = "Select Id_User from users WHERE Email = '$email'";
$result= mysqli_query($con, $sql2);
$rows = mysqli_fetch_array($result);
$Id=$rows['Id_User'];


$sql = "INSERT INTO client(Id_Client,Age,Genre,Moyen_connu,Situation)
        VALUES
        ('$Id','$Age','$Genre','$Connu','$Situation')";

if (!mysqli_query($con, $sql)) {
    die("Error : " . mysqli_error($con));
}



echo '<script>alert("register"); window.location.href = "ClientManager.php";</script>';
mysqli_close($con);


