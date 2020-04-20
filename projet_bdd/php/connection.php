<?php
$con=mysqli_connect("localhost","root","","proje_bdd");
//check connection
if(mysqli_connect_errno())
{
    echo"Failed to Connect to MySQL:".mysqli_connect_error();
}
?>