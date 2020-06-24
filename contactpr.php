<?php 

require 'dbcon.php';

if (!isset($_POST['btn_sb'])) {
	# code...
	header("location:index.php");
	exit();
}

$uname=$_POST['uname'];

$email=$_POST['email'];

$subject=$_POST['subject'];

$message=$_POST['message'];

$isactive=1;

$qry="INSERT INTO contact(uname,email,subject,message,isactive) VALUES('".$uname."','".$email."','".$subject."','".$message."',$isactive)";

$rs=mysqli_query($conn,$qry);

if ($rs) {
	# code...
	echo "<script>
	alert('Your message has been sent. Thank you!');
	window.location.href='index.php';
	</script>";

}

?>