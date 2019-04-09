<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"href="assets/css/index.css">
</head>
<body>
	<header>
		<div>
			<img src="../../assets/img/kokilogo3.png" id="image">
		</div>
	</header>
	<section>
		<div class="container">
			<div class="row">
				<div class="form col-lg-5">
				<p>Login</p>
				<form action="function/index_get.php" method="POST">
					<div class="input-group mb-3">
      						<div class="input-group-prepend">
        						<span class="input-group-text"><i class="fa fa-user"></i></span>
      						</div>
      					<input type="text" class="form-control" placeholder="Username...." id="nama" name="nama">
  					</div>	
  					<div class="input-group mb-3">
      						<div class="input-group-prepend">
        						<span class="input-group-text"><i class="fa fa-lock"></i></span>
      						</div>
      					<input type="password" class="form-control" placeholder="Password...." id="pass" name="pass">
  					</div>
					<input class="col-lg-3" type="submit" name="login" id="login" value="Login">
				</form>
			</div>
			</div>
		</div>
	</section>
	<footer>
		Copyright © 2019 Koki Inc. All rights reserved.
	</footer>
</body>
</html>