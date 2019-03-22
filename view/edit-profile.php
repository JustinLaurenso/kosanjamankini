<?php
 	include "../function/editprofile.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../assets/css/editprofile.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	  <script>
   	jQuery(document).ready(function() {
		jQuery(window).scroll(function () {

		if (jQuery(window).scrollTop() > 280) {
		jQuery('#masthead').addClass('navbar-fixed');
		jQuery('#logo_img').addClass('tinggi_logo');
		jQuery('#master').addClass('navigation2');
		}
		if (jQuery(window).scrollTop() < 281) {
			jQuery('#masthead').removeClass('navbar-fixed');
			jQuery('#logo_img').removeClass('tinggi_logo');
			jQuery('#master').removeClass('navigation2');
		}
		});
	});
   </script>
</head>
<body>
	<header id="masthead" class="site-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-md-4 logo">
					<img src="../assets/img/kokilogo2.png" alt="" width="180" id="logo_img">
				</div>
				<div class="col-md-4 col-md-4">
					<div class="row row2" id="top">
					<i class="fas fa-map-marker-alt"></i>
					<input type="text" class="form-control col-md-10" placeholder="Ketik Lokasi atau Nama Kos">
					<button class="col-md-2 col-md-2 btn" style="background-color: #db450b; color: #fff;margin-top: 0px;"><i class="fas fa-search"></i></button>
			</div>
				</div>
				<div class="col-md-4 col-md-4 navigation" id="master">
						  <div class="navbar">
                        <ul class="nav">
                           <li>
                               <a href="home.html">Home </b></a>
                           </li>
                           <li>
                           	<a href="bukakos.html">Buka Kos</a>
                           </li>
                            <li>
                               <a href="filter.html">Filter</a>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li class="dropdown active">
                               <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.htm">Profile <b class="caret"></b></a>
                               <ul class="dropdown-menu">
                                   <li><a href="profile.html">My Account</a></li>
                                   <li><a href="index.html">Logout</a></li>
                               </ul>
                            </li>
                        </ul>
                 </div>
				</div>
			</div>
		</div>
	</header>
	<section>
		<form method="POST">
		<div class="container-fluid">
			<div class="row row1">
				<div class="col-lg-6 col-md-6 section1">
					<div class="row">
						<div class="col-lg-4 col-md-4 sectionhead">Edit Profile</div>
						<div class="col-lg-8 col-md-8"></div>
					</div>
					<div class="row rowsub1">
						<div class="col-lg-12 col-md-12 sectionphoto"><img src="../assets/img/userphoto.png" width="150px"></div>
						<div class="col-lg-12 col-md-12">
							<div class="row sectioninfo">
								<div class="col-lg-12 col-md-12 infohead">Name</div>
								<?php 
									include "../koneksi/koneksi.php";
									$user = $_SESSION['username'];
									$sql = "select * from tbregister where username='$user'";
									$query = mysqli_query($conn,$sql);
									while ($re = mysqli_fetch_array($query)) {
										$username = $re['username'];
										$name = $re['name'];
										$email = $re['email'];
									
								 ?>
								<div class="col-lg-12 col-md-12 info">
									<input type="text" name="name" id="" placeholder="Enter Your Name" value="<?php echo($name) ?>">
								</div>
								<div class="col-lg-12 col-md-12 infohead">Gender</div>
								<div class="col-lg-12 col-md-12 info">
									<select name="gender" id="gender">
										<option>--Gender--</option>
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
								<div class="col-lg-12 col-md-12 infohead">Birth</div>
								<div class="col-lg-12 col-md-12 info">
									<input type="date" name="date" id="" value="">
								</div>
							</div>
						</div>
						
					</div>
					<div class="row rowsub2">
					<div class="col-lg-3 col-md-3">
						<div class="col-lg-12 col-md-12 infohead head2">Id</div>
						<div class="col-lg-12 col-md-12 infohead head2">E-mail</div>
						<div class="col-lg-12 col-md-12 infohead head2">Region</div>
					</div>
					<div class="col-lg-9 col-md-9">
						<div class="row">
							<div class="col-lg-12 col-md-12 info">
								<input type="text" name="username" id="" value="<?php echo($username) ?>">
							</div>
							<div class="col-lg-12 col-md-12 info">	<input type="text" name="email" id="" value="<?php echo($email) ?>">
							</div>
							<div class="col-lg-12 col-md-12 info">
								<select name="region" id="region" class="form-control">
									<option value="-">-- Kota --</option>
									<option value="Pontianak">
										Pontianak
									</option>
									<option value="Ketapang">
										Ketapang
									</option>
									<option value="Surabaya">
										Surabaya
									</option>
									<option value="Palembang">
										Palembang
									</option>
								</select>
							</div>

							<div class="col-lg-12 col-md-12 info">
								<select name="region1" id="region" class="form-control">
									<option value="-">-- Provinsi --</option>
									<option value="Kalimantan Barat">
										Kalimantan Barat
									</option>
									<option value="Jawa Barat">
										Jawa Barat
									</option>
									<option value="Jawa Timur">
										Jawa Timur
									</option>
									<option value="Jawa Tengah">
										Jawa Tengah
									</option>
								</select>
							</div>
							<div class="col-lg-12 col-md-12">
							</div>
						</div>
					</div>
				</div>
				</div>
				<div class="col-lg-6 col-md-6 butsave">
					<button name="change">Save Changes</button>
				</div>
				<?php 	
					} 
				?>
				</div>
			</div>
		</form>

				
	</section>
	<footer>
		<div class="container-fluid">
			<div class="row row12">
				<p class="copyright">Copyright 2019 &copy;</p>
			</div>
		</div>
	</footer>
</body>
</html>
<script src="../assets/js/review.js"></script>