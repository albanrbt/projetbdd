<?php
session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />


</head>
<body>

<?php include "php/mainheader.php";?>

<div class="tab">
<table>
<?php include "php/tab_preview.php"; tab_preview();?>
</table>
</div>


</body>
</html>