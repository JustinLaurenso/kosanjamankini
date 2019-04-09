<?php
	session_start();
	include "../../../koneksi/koneksi.php";
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "select * from tbadmin where username='$username' and password='$password'";
	$query = mysqli_query($con, $sql);
	$num_rows = mysqli_num_rows($query);
	if($num_rows > 0) {
	    $_SESSION['username'] = $username;
	    $_SESSION['password'] = $password;
	    header("location:../home.php");
	}
	else{
		echo '<script language="javascript">
                window.alert("LOGIN GAGAL! Silakan coba lagi");
                window.location.href="../index.php";
              </script>';
	}
	
?>