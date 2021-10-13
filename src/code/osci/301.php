<?
session_start();
$_SESSION["input"] = $_POST["input"];

header( "HTTP/1.1 301 Moved Permanently" ); 
header( "Location: ./OSCi301.php" ); 
exit;
?>