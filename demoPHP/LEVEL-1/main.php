<?php 

session_start();

if(!isset($_SESSION['uid'])){
    header('Location: index.php');

}

?>

<html><body><center><h1> Welcome!!!!!! Nothing Here</h1><a href="logout.php"><button >LOGOUT</button></a></center></body></html>