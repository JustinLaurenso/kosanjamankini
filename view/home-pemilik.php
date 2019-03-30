<!DOCTYPE html>
<html>
<head>
	<title>Kosan Jaman Kini</title>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../assets/css/home-pemilik.css">
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
				<div class="col-lg-5 col-md-5 logo">
					<a href="home-pemilik.php">
						<img src="../assets/img/kokilogo2.png" alt="" width="180" id="logo_img">
					</a>
				</div>
				<div class="col-lg-7 col-md-7 navigation" id="master">
				 <div class="navbar">
                        <ul class="nav">
                           <li class="active">
                               <a href="home-pemilik.php">Home </b></a>
                           </li>
                           <li>
                           	<a href="bukakos.php">Buka Kos</a>
                           </li>
                            <li>
                               <a href="filter.php">Filter</a>
                            </li>
                            <li><a href="about.php">About Us</a></li>
                            <li class="dropdown">
                               <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.htm">Profile <b class="caret"></b></a>
                               <ul class="dropdown-menu">
                                   <li><a href="profile-pemilik-kos.php">My Account</a></li>
                                   <li><a href="login.php">Logout</a></li>
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
			<div class="row row1">
				<div class="col-lg-8 col-md-8">
					<div id="demo" class="carousel slide" data-ride="carousel">
					  <ul class="carousel-indicators">
					    <li data-target="#demo" data-slide-to="0" class="active"></li>
					    <li data-target="#demo" data-slide-to="1"></li>
					    <li data-target="#demo" data-slide-to="2"></li>
					  </ul>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="../assets/img/001.00-copy-1.jpg" alt="Los Angeles" width="100%" height="350">
					    </div>
					    <div class="carousel-item">
					      <img src="../assets/img/001.00-copy-1.jpg" alt="Chicago" width="100%" height="350">
					    </div>
					    <div class="carousel-item">
					      <img src="../assets/img/001.00-copy-1.jpg" alt="New York" width="100%" height="350">
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#demo" data-slide="prev">
					    <span class="carousel-control-prev-icon"></span>
					  </a>
					  <a class="carousel-control-next" href="#demo" data-slide="next">
					    <span class="carousel-control-next-icon"></span>
					  </a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<h3>Selamat Datang di KoKI</h3>
					<h3>Kosan Jaman Kini</h3>
					<p class="lorem1">KoKI ini akan mempermudah kalian untuk mencari kost atau mempromosikan kost yang kalian punya.</p>
				</div>
			</div>

			<div class="row row2">
					<i class="fas fa-map-marker-alt"></i>
					<input type="text" class="form-control col-lg-10" placeholder="Ketik Lokasi atau Nama Kos">
					<button class="col-lg-2 col-md-2 btn" style="background-color: #db450b; color: #fff; border-radius: 0px;"><i class="fas fa-search"></i></button>
			</div>

			<div class="row row7">
			  <div class="col-lg-12">
					<h3>KOST TERBARU</h3>
			  </div>
			</div>

			<div class="row row3">
				<div class="col-lg-4 col-md-4">
					<div class="bungkus-img">
						<div class="img">
							<img src="../assets/img/hipwee-kosan3-750x422.jpg" alt="" width="100%">
							<div class="harga">
								Rp 1.200.000 / Bulan
							</div>
						</div>
						<div class="caption">
							<div class="row row4">
								<div class="col-lg-6 col-md-6">
									<p> <img src="../assets/img/1452632149_inspiration-39_icon-icons.com_51111.png" alt="" width="20"> Khusus Pria</p>
								</div>
								<div class="col-lg-6 col-md-6">
										<div class="bungkus-ruang">
												<div class="ruang">
													Ada Kosong
												</div>
										</div>
								</div>
							</div>
							<div class="row row5">
								<div class="col-lg-12 col-md-12">
									<b>Kost Mamank Alex</b>
								</div>
								<div class="col-lg-12 col-md-12">
									<p class="address">
										Jalan Imam Bonjol Gg. Tanjung Sari No. 1
									</p>
								</div>
							</div>
						</div>

						<div class="fasilitas">
							<div class="row row6">
								<div class="col-lg-1">
									<img src="../assets/img/wifi.png" alt="" width="20">
								</div>
								<div class="col-lg-1">
									<img src="../assets/img/air-conditioner.png" alt="" width="20">
								</div>
								<div class="col-lg-1">
									<img src="../assets/img/television.png" alt="" width="20">
								</div>
								<div class="col-lg-1">
									<img src="../assets/img/bathtub.png" alt="" width="20">
								</div>
								<div class="col-lg-1">
								  <img src="../assets/img/bed.png" alt="" width="20">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4">
					<div class="bungkus-img">
						<div class="img">
							<img src="../assets/img/hipwee-kamar2-750x422.jpg" alt="" width="100%">
							<div class="harga">
								Rp 1.200.000 / Bulan
							</div>
						</div>
						<div class="caption">
							<div class="row row4">
								<div class="col-lg-6 col-md-6">
									<p> <img src="../assets/img/1452632149_inspiration-39_icon-icons.com_51111.png" alt="" width="20"> Khusus Pria</p>
								</div>
								<div class="col-lg-6 col-md-6">
										<div class="bungkus-ruang">
												<div class="ruang">
													Ada Kosong
												</div>
										</div>
								</div>
							</div>
							<div class="row row5">
								<div class="col-lg-12 col-md-12">
									<b>Kost Kemayu</b>
								</div>
								<div class="col-lg-12 col-md-12">
									<p class="address">
										Jalan Imam Bonjol Gg. Tanjung Sari No. 2
									</p>
								</div>
							</div>
						</div>

						<div class="fasilitas">
							<div class="row row6">
								<div class="col-lg-1">
									<img src="../assets/img/wifi.png" alt="" width="20">
								</div>
								<div class="col-lg-1">
									<img src="../assets/img/air-conditioner.png" alt="" width="20">
								</div>
								<div class="col-lg-1">
									<img src="../assets/img/television.png" alt="" width="20">
								</div>
								<div class="col-lg-1">
									<img src="../assets/img/bathtub.png" alt="" width="20">
								</div>
								<div class="col-lg-1">
								  <img src="../assets/img/24-hours.png" alt="" width="20">
								</div>
								<div class="col-lg-1">
									<img src="../assets/img/bed.png" alt="" width="20">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4">
					<div class="bungkus-img">
						<div class="img">
							<img src="../assets/img/Comfy-College-Dorm-Room-Ideas-750x422.jpg" alt="" width="100%">
							<div class="harga">
								Rp 1.200.000 / Bulan
							</div>
						</div>
						<div class="caption">
							<div class="row row4">
								<div class="col-lg-6 col-md-6">
									<p><img src="../assets/img/woman.png" alt="" width="20"> Khusus Wanita</p>
								</div>
								<div class="col-lg-6 col-md-6">
										<div class="bungkus-ruang">
												<div class="ruang">
													Penuh
												</div>
										</div>
								</div>
							</div>
							<div class="row row5">
								<div class="col-lg-12 col-md-12">
									<b>Kost Kak Ria</b>
								</div>
								<div class="col-lg-12 col-md-12">
									<p class="address">
										Jalan Imam Bonjol Gg. Tanjung Sari No. 3
									</p>
								</div>
							</div>
						</div>

							<div class="fasilitas">
								<div class="row row6">
									<div class="col-lg-1">
									  <img src="../assets/img/wifi.png" alt="" width="20">
									</div>
									<div class="col-lg-1">
									  <img src="../assets/img/air-conditioner.png" alt="" width="20">
									</div>
									<div class="col-lg-1">
									  <img src="../assets/img/television.png" alt="" width="20">
									</div>
									<div class="col-lg-1">
									  <img src="../assets/img/bathtub.png" alt="" width="20">
									</div>
									<div class="col-lg-1">
										<img src="../assets/img/bed.png" alt="" width="20">
									</div>
								</div>
							</div>
					</div>
				</div>
	</div>

	<div class="row row3">
		<div class="col-lg-4 col-md-4">
			<div class="bungkus-img">
				<div class="img">
					<img src="../assets/img/hipwee-kosan3-750x422.jpg" alt="" width="100%">
					<div class="harga">
						Rp 1.200.000 / Bulan
					</div>
				</div>
				<div class="caption">
					<div class="row row4">
						<div class="col-lg-6 col-md-6">
							<p> <img src="../assets/img/1452632149_inspiration-39_icon-icons.com_51111.png" alt="" width="20"> Khusus Pria</p>
						</div>
						<div class="col-lg-6 col-md-6">
								<div class="bungkus-ruang">
										<div class="ruang">
											Ada Kosong
										</div>
								</div>
						</div>
					</div>
					<div class="row row5">
						<div class="col-lg-12 col-md-12">
							<b>Kost Mamank Alex</b>
						</div>
						<div class="col-lg-12 col-md-12">
							<p class="address">
								Jalan Imam Bonjol Gg. Tanjung Sari No. 1
							</p>
						</div>
					</div>
				</div>

				<div class="fasilitas">
					<div class="row row6">
						<div class="col-lg-1">
							<img src="../assets/img/wifi.png" alt="" width="20">
						</div>
						<div class="col-lg-1">
							<img src="../assets/img/air-conditioner.png" alt="" width="20">
						</div>
						<div class="col-lg-1">
							<img src="../assets/img/television.png" alt="" width="20">
						</div>
						<div class="col-lg-1">
							<img src="../assets/img/bathtub.png" alt="" width="20">
						</div>
						<div class="col-lg-1">
							<img src="../assets/img/24-hours.png" alt="" width="20">
						</div>
						<div class="col-lg-1">
							<img src="../assets/img/bed.png" alt="" width="20">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4">
			<div class="bungkus-img">
				<div class="img">
					<img src="../assets/img/hipwee-kamar2-750x422.jpg" alt="" width="100%">
					<div class="harga">
						Rp 1.200.000 / Bulan
					</div>
				</div>
				<div class="caption">
					<div class="row row4">
						<div class="col-lg-6 col-md-6">
							<p> <img src="../assets/img/1452632149_inspiration-39_icon-icons.com_51111.png" alt="" width="20"> Khusus Pria</p>
						</div>
						<div class="col-lg-6 col-md-6">
								<div class="bungkus-ruang">
										<div class="ruang">
											Ada Kosong
										</div>
								</div>
						</div>
					</div>
					<div class="row row5">
						<div class="col-lg-12 col-md-12">
							<b>Kost Kemayu</b>
						</div>
						<div class="col-lg-12 col-md-12">
							<p class="address">
								Jalan Imam Bonjol Gg. Tanjung Sari No. 2
							</p>
						</div>
					</div>
				</div>

				<div class="fasilitas">
					<div class="row row6">
						<div class="col-lg-1">
							<img src="../assets/img/wifi.png" alt="" width="20">
						</div>
						<div class="col-lg-1">
							<img src="../assets/img/air-conditioner.png" alt="" width="20">
						</div>
						<div class="col-lg-1">
							<img src="../assets/img/television.png" alt="" width="20">
						</div>
						<div class="col-lg-1">
							<img src="../assets/img/bathtub.png" alt="" width="20">
						</div>
						<div class="col-lg-1">
							<img src="../assets/img/bed.png" alt="" width="20">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4">
			<div class="bungkus-img">
				<div class="img">
					<img src="../assets/img/Comfy-College-Dorm-Room-Ideas-750x422.jpg" alt="" width="100%">
					<div class="harga">
						Rp 1.200.000 / Bulan
					</div>
				</div>
				<div class="caption">
					<div class="row row4">
						<div class="col-lg-6 col-md-6">
							<p><img src="../assets/img/woman.png" alt="" width="20"> Khusus Wanita</p>
						</div>
						<div class="col-lg-6 col-md-6">
								<div class="bungkus-ruang">
										<div class="ruang">
											Penuh
										</div>
								</div>
						</div>
					</div>
					<div class="row row5">
						<div class="col-lg-12 col-md-12">
							<b>Kost Kak Ria</b>
						</div>
						<div class="col-lg-12 col-md-12">
							<p class="address">
								Jalan Imam Bonjol Gg. Tanjung Sari No. 3
							</p>
						</div>
					</div>
				</div>

					<div class="fasilitas">
						<div class="row row6">
							<div class="col-lg-1">
								<img src="../assets/img/wifi.png" alt="" width="20">
							</div>
							<div class="col-lg-1">
								<img src="../assets/img/air-conditioner.png" alt="" width="20">
							</div>
							<div class="col-lg-1">
								<img src="../assets/img/television.png" alt="" width="20">
							</div>
							<div class="col-lg-1">
								<img src="../assets/img/bathtub.png" alt="" width="20">
							</div>
							<div class="col-lg-1">
								<img src="../assets/img/24-hours.png" alt="" width="20">
							</div>
							<div class="col-lg-1">
								<img src="../assets/img/bed.png" alt="" width="20">
							</div>
						</div>
					</div>
			</div>
		</div>
</div>

<div class="row8 row">
	<div class="col-lg-10"></div>
	<div class="col-lg-2">
		<div class="selengkapnya">
			Lihat Selengkapnya >
		</div>
	</div>
</div>

</div>

<div class="container-fluid">
	<div class="row row9">
	  <div class="col-lg-6">
			<div class="pemilik-kos">
				<h3>Gabung sebagai Pemilik Kos</h3>
			</div>
	  </div>
		<div class="col-lg-6">
			<div class="pengguna-kos">
				<h3>Gabung sebagai Pengguna Kos</h3>
			</div>
		</div>
	</div>
</div>

	<div class="container">
		<div class="row row10">
			<div class="col-lg-12">
				<h3>KOTA-KOTA</h3>
			</div>
		</div>

		<div class="row row11">
			<div class="col-lg-4">
				<div class="img-kota">
					<img src="../assets/img/pontianak.jpg" alt="" width="100%">
				</div>
				<div class="nama-kota">
					<label>PONTIANAK</label>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="img-kota">
					<img src="../assets/img/bandung.jpg" alt="" width="100%">
				</div>
				<div class="nama-kota">
					<label>BANDUNG</label>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="img-kota">
					<img src="../assets/img/jakarta.jpg" alt="" width="100%" height="225">
				</div>
				<div class="nama-kota">
					<label>JAKARTA</label>
				</div>
			</div>
		</div>

		<div class="row row11">
			<div class="col-lg-4">
				<div class="img-kota">
					<img src="../assets/img/makassar.jpg" alt="" width="100%" height="225">
				</div>
				<div class="nama-kota">
					<label>MAKASSAR</label>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="img-kota">
					<img src="../assets/img/malang.jpg" alt="" width="100%" height="225">
				</div>
				<div class="nama-kota">
					<label>MALANG</label>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="img-kota">
					<img src="../assets/img/bali.jpg" alt="" width="100%" height="225">
				</div>
				<div class="nama-kota">
					<label>BALI</label>
				</div>
			</div>
		</div>

		<div class="row8 row" style="margin-right: 15px;">
	<div class="col-lg-9"></div>
	<div class="col-lg-3">
		<div class="selengkapnya">
			Lihat Selengkapnya >
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
