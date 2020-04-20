<?php

session_start();
echo "<script>alert('You logged out! Thank you " . $_SESSION['name_user'] . "!')</script>";
session_destroy();
echo "<script>window.location.href='../Mainpage.php'</script>";
?>