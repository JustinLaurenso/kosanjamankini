<?php 
	include "../koneksi/koneksi.php";

	$username = $_POST['username'];
	$name = $_POST['name'];
	$email = $_POST['e-mail'];
	$password = $_POST['password'];
	$regis = $_POST['daftar'];
	$encrypt = password_hash($password, PASSWORD_DEFAULT);

	if(isset($_POST['daftar'])){
	$sql = "select * from tbregister where username='$username'";
	$query = mysqli_query($conn,$sql);
	$sql1 = "select * from tbuser where username='$username'";
	$query1 = mysqli_query($conn,$sql1);
	$num = mysqli_num_rows($query);
	$nums = mysqli_num_rows($query1);
	if($num == 0 && $num == 0){
		$sql = "insert into tbregister (username,name,email,password) values ('$username','$name','$email','$encrypt')";
		$query = mysqli_query($conn,$sql);
		$sql2 = "insert into tbuser (name,username,email) values ('$name','$username','$email')";
		$query2 = mysqli_query($conn,$sql2);
	}
	else{
			 echo '<script language="javascript">
                    window.alert("Username sudah dipakai");
                    window.location.href="index.php";
                  </script>';
	}
	// $sql = "insert into tbregister (username,name,email,password) values ('$username','$name','$email','$encrypt')";
	// $query = mysqli_query($conn,$sql);
	// header("location:../view/register.php");
	}
 ?>