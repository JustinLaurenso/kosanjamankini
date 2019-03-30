<?php 
	include "../koneksi/koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Pengguna Kos</title>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../assets/css/profile.css">
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
                               <a href="home.php">Home </b></a>
                           </li>
                           <li>
                           	<a href="bukakos.php">Buka Kos</a>
                           </li>
                            <li>
                               <a href="filter.php">Filter</a>
                            </li>
                            <li><a href="about.php">About Us</a></li>
                            <li class="dropdown active">
                               <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.htm">Profile <b class="caret"></b></a>
                               <ul class="dropdown-menu">
                                   <li><a href="profile.php">My Account</a></li>
                                   <li><a href="../function/logout.php">Logout</a></li>
                               </ul>
                            </li>
                        </ul>
                 </div>
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="container-fluid">
			<div class="row row1">
				<div class="col-lg-6 col-md-6 section1">
					<div class="row">
						<div class="col-lg-3 col-md-3 sectionhead">Profile</div>
						<div class="col-lg-9 col-md-9"></div>
					</div>
					<div class="row rowsub1">
						<div class="col-lg-3 col-md-3 sectionphoto"><img src="../assets/img/userphoto.png" width="100px"></div>
						<div class="col-lg-5 col-md-5">
							<div class="row sectioninfo">
								<div class="col-lg-12 col-md-12 info">
									<?php 
										session_start();
										$user = $_SESSION['username'];
										$sql = "select * from tbuser where username='$user'";
										$query = mysqli_query($conn,$sql);
										while ($re = mysqli_fetch_array($query)) {
											$name = $re['name'];
										}
										echo $name;
									 ?>
								</div>
								<div class="col-lg-12 col-md-12 info">
									<?php 
										$user = $_SESSION['username'];
										$sql = "select * from tbuser where username='$user'";
										$query = mysqli_query($conn,$sql);
										while ($re = mysqli_fetch_array($query)) {
											$gender = $re['gender'];
											$date = $re['birth'];

										if($gender == "" || $gender == null){
											echo "";
										}
										else{
											echo $gender;
										}
									 ?>
								</div>
								<div class="col-lg-12 col-md-12 info">
									<?php 
										if ($date == "" || $date == null) {
											echo "";
										}
										else{
											$date = date("d-m-Y");
											echo $date;
										}
									 ?>
								</div>
							<?php } ?>
							</div>
						</div>
						<div class="col-lg-4 col-md-4"><a href="edit-profile.php"><button>Edit Profile</button></a></div>
					</div>
					<div class="row rowsub2">
					<div class="col-lg-3 col-md-3">
						<div class="col-lg-12 col-md-12 infohead">Id</div>
						<div class="col-lg-12 col-md-12 infohead">E-mail</div>
						<div class="col-lg-12 col-md-12 infohead">Region</div>
					</div>
					<div class="col-lg-9 col-md-9">
						<div class="row">
							<div class="col-lg-12 col-md-12 info">
								<?php echo $_SESSION['username']; ?>
							</div>
							<div class="col-lg-12 col-md-12 info">
								<?php 
									$user = $_SESSION['username'];
									$sql = "select email,region from tbuser where username='$user'";
									$query = mysqli_query($conn,$sql);
									while ($re = mysqli_fetch_array($query)) {
										$email = $re['email'];
										$region = $re['region'];
									
								 ?>
								 <?php echo $email; ?>
								
							</div>
							<?php 

							 ?>
							<div class="col-lg-12 col-md-12 info">
								<?php 
									if ($region == '' || $region == null) {
										echo "";
									}
									else{
										echo "$region";
									}
								 ?>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
				</div>




				<div class="col-lg-6 col-md-6 section2">
					<div class="row">
						<div class="col-lg-3 col-md-3 sectionhead">Kos saat ini</div>
						<div class="col-lg-9 col-md-9"></div>
					</div>
					<div class="row rowsub1">
						<div class="col-lg-3 col-md-3 sectionphoto"><img src="../assets/img/Comfy-College-Dorm-Room-Ideas-750x422.jpg" width="100%"></div>
						<div class="col-lg-9 col-md-9">
							<div class="row sectioninfo">
								<div class="col-lg-12 col-md-12 info"><b>Kost Mamank Alex</b></div>
								<div class="col-lg-8 col-md-8 info">Jalan Imam Bonjol Gg. Tanjung Sari No. 2</div>
								<div class="col-lg-4 col-md-4 info">
									<a href="review.php"><button class="butsearch">Detail Kos</button></a>
									<a href="catering.php"><button class="button_catering">Catering Tersedia</button></a>
								</div>
							</div>
						</div>		
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-3 sectionhead secheadsub">Status</div>
						<div class="col-lg-9 col-md-9"></div>
					</div>
					<div class="row rowsub3 ">
						<div class="col-lg-12 col-md-12 status">User / Pencari Kos</div>
							
					</div>

				</div>
			</div>
		</div>
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