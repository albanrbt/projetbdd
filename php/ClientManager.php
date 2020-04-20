<?php
session_start();
include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="../CSS/calendar.css" rel="stylesheet">
    <link href="../CSS/ClientManager.css" rel="stylesheet">

</head>
<body>


<?php include "header.php";?>
<table>
<tr class=" clients">
    <td class="infos">nom</td>
    <td class="infos">prenom</td>
    <td class="infos">Mail</td>
    <td class="infos">Age</td>
    <td class="infos">Genre</td>
    <td class="infos">Moyen Connu</td>
    <td class="infos">Situation</td>
    <td class="infos"> </td>
</tr>
<?php

$sql = "Select * from infos_client";
$result = mysqli_query($con,$sql);
while($rows = mysqli_fetch_array($result)) {
    $Id = $rows['Id_client'];
    echo "<tr class=\"infos\"><td class='attribut'>".$rows['Nom'] ."</td>";
    echo "<td class='attributs'>".$rows['prenom'] ."</td>";
    echo "<td class='attribut'>".$rows['Email'] ."</td>";
    echo "<td class='attributs'>".$rows['Age'] ."</td>";
    echo "<td class='attribut'>".$rows['Genre'] ."</td>";
    echo "<td class='attributs'>".$rows['Moyen_connu'] ."</td>";
    echo "<td class='attribut'>".$rows['Situation'] ."</td>";
    echo "<td class='attribut'> <a href='delete.php?Id=$Id'> <button> Supprimer </button> </a> </td>";
    echo "<br>";
}


?>
</table>
<br>
<button onclick="window.location.href ='register.php';">ajouter un client</button>

</body>

</html>