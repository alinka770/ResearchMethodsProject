<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$db ="research";
// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$txtName = $_POST["name1"];
$txtAge = $_POST["age1"];
$txtCompl = $_POST["compl1"];
$txtRes = $_POST["option1"];
$txtRecom = $_POST["recomm"];

if($txtRecom == "")
	$sql = "INSERT INTO `results` (`Name`, `Age`, `Complaint`, `Recommendation`) VALUES ( '$txtName', '$txtAge', '$txtCompl', '$txtRes')";
else
	$sql = "INSERT INTO `results` (`Name`, `Age`, `Complaint`, `Recommendation`, `RecommendationFromSystem`) VALUES ( '$txtName', '$txtAge', '$txtCompl', '$txtRes', '$txtRecom')";
$rs = mysqli_query($con, $sql);

if($rs)
{
	header ('Location: index.php');  // перенаправление на нужную страницу
   exit();
}

?>