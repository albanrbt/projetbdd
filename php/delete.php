<?php

session_start();
include 'connection.php';

$ID= $_GET['Id'];


$Sql1 = "DELETE FROM client  WHERE Id_Client =".$ID;
$Sql2 = "DELETE FROM users  WHERE Id_User =".$ID;



if(mysqli_query($con, $Sql1)){
    if(mysqli_query($con, $Sql2)){
echo "<script> alert('enregistré')</script>";}}
else{echo "<script> alert('erreur')</script>";}

echo "<script>window.history.go(-1);</script>";