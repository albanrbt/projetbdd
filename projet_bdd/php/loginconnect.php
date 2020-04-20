<?php
session_start();
include "connection.php";
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['pass']);
$sql = "Select * from users where Email = '" . $email . "'
and MotDePasse = '" . md5($password) . "'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) <= 0) {
    //sql checking for the admin user
    $sql = "Select * from users where Email = '" . $email . "'and MotDePasse = '" . $password . "'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) <= 0) {
        echo "<script>alert('Wrong username / password !Please Try Again!');";
        die("window.history.go(-1);</script>");
    }
}
if ($row = mysqli_fetch_array($result)) {
    $_SESSION['name_user'] = $row['Nom'];
    $_SESSION['role'] = $row['Role'];
    $_SESSION['Id_user'] = $row['Id_User'];
}
if ($_SESSION['role'] === "1") {
    echo "<script>alert('Welcome " . $_SESSION['name_user'] . "');";
    echo "window.location.href='../Mainpage.php';</script>";
} else if ($_SESSION['role'] === "0") {
    echo "<script>alert('Welcome back! admin');";
    echo "window.location.href='../Mainpage.php';</script>";
}
else if ($_SESSION['role'] === "2") {
    echo "<script>alert('Welcome back ".$_SESSION['name_user']."');";
    echo "window.location.href='../Mainpage.php';</script>";
}

