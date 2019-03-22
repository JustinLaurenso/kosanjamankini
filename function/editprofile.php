<?php 
	session_start();
	include "../koneksi/koneksi.php";

	if(isset($_POST['change'])) {
	$user = $_SESSION['username'];
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$date = $_POST['date'];
	$email = $_POST['email'];
	$region = $_POST['region'];
	$region1 = $_POST['region1'];
		$sql = "update tbuser set name='$name',gender='$gender',birth='$date',email='$email',region='$region, $region1' where username='$user'";
		$sql1 = "update tbregister set name='$name',email='$email' where username='$user'";
		$query = mysqli_query($conn,$sql) or die("error $sql");
		$query1 = mysqli_query($conn,$sql1) or die("error $sql1");

	}
 ?>