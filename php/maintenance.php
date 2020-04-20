
<?php include("connection.php");
$sql = " SHOW TABLE FROM projet_bdd [LIKE 'admin']";
$result = mysqli_query($con, $sql);
echo "$result";

?>