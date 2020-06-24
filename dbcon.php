<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

//create connection
$conn = mysqli_connect($servername,$username,$password);

//check connection
if(!$conn)
{
	die("connection failed:". mysqli_connect_error());
}
//echo "connected successfully";

$db = mysqli_select_db($conn,$dbname);


if($db)
{
	//echo "Database Selected";
}
else
{
	echo "Database Not Selected!";
}
?>