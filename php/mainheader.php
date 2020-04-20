<?php

    echo "
  <link href=\"../projetbdd/CSS/header.css\" rel=\"stylesheet\">
 
<div class=\"header\" id=\"myHeader\">
    <nav>
        <a href='Mainpage.php'> <img src=\"../projetbdd/img/logo.png\" id=\"logo\"></a>
        
        <ul class=\"nav\">";
        if (isset($_SESSION['role'])){
            $role=$_SESSION['role'];
            if($role==1){
                echo "<li> <a href=\" Mainpage.php\">  Séances </button></a> 
                        <li> <a href=\"php/logout.php\">  Deconnexion </button></a>";
            }
            elseif ($role == 2){
                echo"<li> <a href=\"#\">  Calendrier </button></a> 
                        <li > <a href = \"php/ClientManager.php\" > Mes clients </button ></a >
                        <li > <a href = \"php/logout.php\" > Deconnexion </button ></a > ";
            }
        }else {
            echo " <li> <a href=\"Mainpage.php\">  Séances </button></a>
            <li> <a href=\"php/login.php\">  Login </button></a>";}
           echo" </li>
        </ul>
    </nav>
</div>";