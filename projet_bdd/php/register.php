<?php
session_start()?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="../CSS/register.css" rel="stylesheet">


</head>
<body>
<?php include 'header.php'?>
<div class="container-fluid">
    <section class="row">
        <div class="col-sm-6 col-md-4 col-lg-offset-4 ">
            <h1>Register Here</h1>
        </div>
    </section>
    <form method="POST" action="register_conn.php">
        <table>
            <tr>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-offset-4">
                        <label> Informations personnelles: </label><br>
                        <input type="text" name="nom" required="required" placeholder="Enter nom"><br>
                        <input type="text" name="prenom" required="required" placeholder="Enter prenom"><br>
                        <input type="number" name="Age"  placeholder="Enter age"><br>
                        <select name="genre" required="required" >
                            <option>Genre</option>
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                            <option value="Autre">Autre</option>
                        </select><br>
                        <input type="text" name="Connu" required="required" placeholder="Moyen de connaissance"><br>
                        <input type="text" name="situation" required="required" placeholder="Situation"><br>


                        <label>Email adress: </label><br>
                        <input type="email" name="email_address" required="required" placeholder="Enter Email"><br>

                    </div>
                </div>
                <div class="row">
                    <section class="col-sm-6 col-md-4 col-lg-offset-4">
                        <label>Password</label><br>
                        <input type="password" name="password" required="required" placeholder="Enter Password"><br><br>
                        <label> Confirm password</label><br>
                        <input type="password" name="confirm_password" required="required" placeholder="Confirm Password"><br><br>
                    </section>
                </div>
                <div class="row" id="button">
                    <div class="col-sm-6 col-md-4 col-lg-offset-4">
                        <input type="submit" value="Submit">
                        <input type="button" value="Back" onclick="document.location.href='login.php';">
                    </div>
                </div>
            </tr>
        </table>
    </form>

</div>
</body>

</html>

