<!DOCTYPE html>
<html>
<head>
	<title>Profile Pemilik Kos</title>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../assets/css/profile-pemilik.css">
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
                               <a href="home.html">Home</a>
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
								<div class="col-lg-12 col-md-12 info">Agashi Zinedine</div>
								<div class="col-lg-12 col-md-12 info">Male</div>
								<div class="col-lg-12 col-md-12 info">19 January 2002</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4"><a href="editprofile.html"><button>Edit Profile</button></a></div>
					</div>
					<div class="row rowsub2">
					<div class="col-lg-3 col-md-3">
						<div class="col-lg-12 col-md-12 infohead">Id</div>
						<div class="col-lg-12 col-md-12 infohead">E-mail</div>
						<div class="col-lg-12 col-md-12 infohead">Region</div>
					</div>
					<div class="col-lg-9 col-md-9">
						<div class="row">
							<div class="col-lg-12 col-md-12 info">AgashiZ</div>
							<div class="col-lg-12 col-md-12 info">agashizine@gmail.com</div>
							<div class="col-lg-12 col-md-12 info">Pontianak, Indonesia</div>
						</div>
					</div>
				</div>
				</div>
				



				<div class="col-lg-6 col-md-6 section2">
					<div class="row">
						<div class="col-lg-5 col-md-3 sectionhead">Kos yang dimiliki</div>
						<div class="col-lg-7 col-md-9"></div>
					</div>
					<div class="row rowsub1">
						<div class="col-lg-3 col-md-3 sectionphoto"><img src="../assets/img/Comfy-College-Dorm-Room-Ideas-750x422.jpg" width="100%"></div>
						<div class="col-lg-9 col-md-9">
							<div class="row sectioninfo">
								<div class="col-lg-12 col-md-12 info"><b>Kost Mamank Alex</b></div>
								<div class="col-lg-8 col-md-8 info">Jalan Imam Bonjol Gg. Tanjung Sari No. 2</div>
								<div class="col-lg-4 col-md-4 info">
									<a href="review.html"><button class="butsearch">Detail Kos</button></a>
								</div>
							</div>
						</div>		
					</div>
					<div class="row rowsub4">
						<div class="col-lg-3 ruangan">Ruangan Kos :</div>
						<div class="col-lg-2"> 4 / 10 </div>
						<div class="col-lg-4"></div>
						<div class="col-lg-3">
							<a href="daftar-ruangan.html"><button class="button-cek">Check</button></a>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-3 sectionhead secheadsub">Status</div>
						<div class="col-lg-9 col-md-9"></div>
					</div>
					<div class="row rowsub3 ">
						<div class="col-lg-12 col-md-12 status">Pemilik Kos</div>
							
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