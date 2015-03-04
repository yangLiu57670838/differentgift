<?php



include 'Smarty/libs/Smarty.class.php';
require "includes/defs.php";

$userName = $_GET['userName'];
$password = $_GET['password'];

if (auth($userName, $password))
{
    session_start();
    $_SESSION['userName'] = $userName;
	
	$_SESSION['LAST_ACTIVITY'] = time();
	header("Location: index.php");
    exit;
}else{
$error2 = "password and username do not match.";
header("Location: register.php?error2=$error2");
exit;
}
?>