<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'cms-social';
$appname = "CMS SOCIAL"; 

$conn = new mysqli($host, $user, $pass, $dbname);

if($conn->connect_error){
	die("Erro interno " . $conn->connect_error);
} else {
	echo " ";
}
?>