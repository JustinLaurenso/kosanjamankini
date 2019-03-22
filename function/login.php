<?php 
	session_start();

	require_once "../koneksi/koneksi.php";

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$userpass = $_POST['password'];

		$sql = "select username,name,password from tbregister where username='$username'";
		$query = mysqli_query($conn,$sql);

		while($re=mysqli_fetch_array($query)){
			$username = $re['username'];
			$name = $re['name'];
			$password = $re['password'];
		}

		if(mysqli_num_rows($query) > 0){
			if(password_verify($userpass, $password)){
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['name'] = $name;

				header('location:home.php');
				die();
			}
		else{
			 echo '<script language="javascript">
                    window.alert("LOGIN GAGAL! Silakan coba lagi");
                    window.location.href="./";
                  </script>';
		}
		}else{
			   echo '<script language="javascript">
                window.alert("LOGIN GAGAL! Silakan coba lagi");
                window.location.href="./";
             </script>';
		}
	}
 ?>