<!DOCTYPE html>
<html>
<head>
	<title>Daftar Ruangan 	</title>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../assets/css/daftar-ruangan.css">
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
		<div class="container">
			<div class="row row3">
				<div class="col-md-3">
					<h4>Daftar Ruangan : </h4>
				</div>
				<div class="col-md-9"></div>
			</div>
			<div class="row row4">
				<div class="col-lg">
					<div class="ruangan">
						<p>Ruangan 1</p>
					</div>
					<a href="detail-ruangan.html">
						<div class="ruangan box1">
							<p>DETAIL</p>
						</div>
					</a>
					<div class="nama-user">
						<p>
							<b>Andi</b>
						</p>
					</div>
				</div>
				<div class="col-lg">
					<div class="ruangan">
						<p>Ruangan 2</p>
					</div>
					<a href="detail-ruangan.html">
						<div class="ruangan box1">
							<p>DETAIL</p>
						</div>
					</a>
					<div class="nama-user">
						<p>
							<b>Mike</b>
						</p>
					</div>
				</div>
				<div class="col-lg">
					<div class="ruangan">
						<p>Ruangan 3</p>
					</div>
					<a href="detail-ruangan.html">
						<div class="ruangan box1">
							<p>DETAIL</p>
						</div>
					</a>
					<div class="nama-user">
						<p>
							<b>Budi</b>
						</p>
					</div>
				</div>
				<div class="col-lg">
					<div class="ruangan">
						<p>Ruangan 4</p>
					</div>
					<a href="detail-ruangan.html">
						<div class="ruangan box1">
							<p>DETAIL</p>
						</div>
					</a>
					<div class="nama-user">
						<p>
							<b>Justin</b>
						</p>
					</div>
				</div>
				<div class="col-lg">
					<div class="ruangan">
						<p>Ruangan 5</p>
					</div>
					<a href="detail-ruangan.html">
						<div class="ruangan box1">
							<p>DETAIL</p>
						</div>
					</a>
					<div class="nama-user">
						<p>
							<b>Rahmad</b>
						</p>
					</div>
				</div>

			</div>

				<div class="row row4">
				<div class="col-lg">
					<div class="ruangan">
						<p>Ruangan 6</p>
					</div>
					<a href="detail-ruangan.html">
						<div class="ruangan box1">
							<p>DETAIL</p>
						</div>
					</a>
					<div class="nama-user">
						<p>
							<b>Irene</b>
						</p>
					</div>
				</div>
				<div class="col-lg">
					<div class="ruangan kosong">
						<p>Kosong</p>
					</div>
					
					
				</div>
				<div class="col-lg">
					<div class="ruangan kosong">
						<p>Kosong</p>
					</div>
					
				
				</div>
				<div class="col-lg">
					<div class="ruangan kosong">
						<p>Kosong</p>
					</div>
					
					
				</div>
				<div class="col-lg">
					<div class="ruangan kosong">
						<p>Kosong</p>
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