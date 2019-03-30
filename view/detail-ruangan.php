<!DOCTYPE html>
<html>
<head>
	<title>Detail Ruangan 	</title>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../assets/css/detail-ruangan.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<!-- 	  <script>
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
   </script> -->
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
                            <li><a href="about.php">About Us</a></li>
                            <li class="dropdown active">
                               <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.htm">Profile <b class="caret"></b></a>
                               <ul class="dropdown-menu">
                                   <li><a href="profile.php">My Account</a></li>
                                   <li><a href="index.php">Logout</a></li>
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
						<h4>Ruangan 1 : </h4>
				</div>
				<div class="col-md-9"></div>
			</div>
			<div class="row row4">
				<div class="bungkus-img">
					<img src="../assets/img/man.png" alt="" width="100%">
				</div>
			</div>
			<div class="row row5">
				<div class="col-md-6 colsub1">
					<div class="row">
						<div class="col-md-3">Nama</div>
						<div class="col-md-1"> <b>:</b> </div>
						<div class="col-md-8">Andi</div>

					</div>
					<div class="row">
						<div class="col-md-3">Tempat Kos</div>
						<div class="col-md-1"> <b>:</b> </div>
						<div class="col-md-8">Kos Mamank Alex</div>
					</div>
					<div class="row">
						<div class="col-md-3">Pembayaran</div>
						<div class="col-md-1"> <b>:</b> </div>
						<div class="col-md-8">Cash</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-5">Tagihan Kos Bulan Lalu</div>
						<div class="col-md-1"> <b>:</b> </div>
						<div class="col-md-4"> Rp 1.200.000,00 </div>
						<div class="col-md-2">
							<div class="lunas">Lunas</div>
						</div>
					</div>
				
					<div class="row" style="margin-top: 30px;">
						<div class="col-md-5">Tagihan Listrik Bulan Lalu</div>
						<div class="col-md-1"> <b>:</b> </div>
						<div class="col-md-4"> Rp 500.000 </div>
						<div class="col-md-2">
							<div class="lunas">Lunas</div>
						</div>
					</div>

					<div class="row" style="margin-top: 30px;">
						<div class="col-md-5">Tagihan Kos Bulan Ini</div>
						<div class="col-md-1"> <b>:</b> </div>
						<div class="col-md-4"> Rp 1.200.000,00 </div>
						<div class="col-md-2">
							<div class="belum-lunas">Belum Bayar</div>
						</div>
					</div>

					<div class="row" style="margin-top: 30px;">
						<div class="col-md-5">Tagihan Listrik Bulan Ini</div>
						<div class="col-md-1"> <b>:</b> </div>
						<div class="col-md-4"> Rp 500.000,00 </div>
						<div class="col-md-2">
							<div class="belum-lunas">Belum Bayar</div>
						</div>
					</div>

					<div class="row" style="margin-top: 30px;">
						<div class="col-md-2"></div>
						<div class="col-md-10">
							<button class="btn hubungi">Hubungi</button>
						</div>
						<div class="col-md-2"></div>
					</div>

				</div>
			</div>
		</div>

		<div class="container mt-5">
			<div class="row row6">
				<div class="col-md-12">
					<div class="col-md-3">
						<h4>History Pengguna : </h4>
					</div>
					<div class="col-md-9"></div>
				</div>
			</div>
			<div class="row row7">
				<button class="btn btn-success" id="detail-history">
					Detail History
				</button>
			</div>

			<div class="toggle">
				<div class="row row8">
					<h6>History Pembayaran : </h6>
				</div>
				<div class="row row9">
					<div class="col-md-2">
						<div class="image">
							<img src="../assets/img/Comfy-College-Dorm-Room-Ideas-750x422.jpg" alt="" width="100%" height="100%">
						</div>
					</div>
					<div class="col-md-5 batas">
						<div class="row">
							<div class="col-md-4">Nama Kos</div>
							<div class="col-md-1">:</div>
							<div class="col-md-7">Kost Mamanx Alex</div>
						</div>
						<div class="row">
							<div class="col-md-4">Tanggal Pembayaran</div>
							<div class="col-md-1">:</div>
							<div class="col-md-7"> 9 Oktober 2018</div>
						</div>
						<div class="row">
							<div class="col-md-4"> Pembayaran</div>
							<div class="col-md-1">:</div>
							<div class="col-md-7"> Cash</div>
						</div>
						<div class="row">
							<div class="col-md-4">Alamat Kos</div>
							<div class="col-md-1">:</div>
							<div class="col-md-7">Jln. Imam Bonjol Gg. Tanjung Sari No. 2</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="row">
							<div class="col-md-4">Jlh Kamar</div>
							<div class="col-md-1">:</div>
							<div class="col-md-7">2</div>
						</div>
						<div class="row">
							<div class="col-md-4">Harga</div>
							<div class="col-md-1">:</div>
							<div class="col-md-7">Rp 1.200.000</div>
						</div>
						<div class="row">
							<div class="col-md-4">Total Harga</div>
							<div class="col-md-1">:</div>
							<div class="col-md-7">Rp 2.400.000</div>
						</div>
					</div>
				</div>

				<div class="row row11">
					<div class="col-md-2">
						<div class="image">
							<img src="../assets/img/Comfy-College-Dorm-Room-Ideas-750x422.jpg" alt="" width="100%" height="100%">
						</div>
					</div>
					<div class="col-md-5 batas">
						<div class="row">
							<div class="col-md-4">Nama Kos</div>
							<div class="col-md-1">:</div>
							<div class="col-md-7">Kost Mamanx Alex</div>
						</div>
						<div class="row">
							<div class="col-md-4">Tanggal Pembayaran</div>
							<div class="col-md-1">:</div>
							<div class="col-md-7"> 1 Januari 2019</div>
						</div>
						<div class="row">
							<div class="col-md-4"> Pembayaran</div>
							<div class="col-md-1">:</div>
							<div class="col-md-7"> Cash</div>
						</div>
						<div class="row">
							<div class="col-md-4">Alamat Kos</div>
							<div class="col-md-1">:</div>
							<div class="col-md-7">Jln. Imam Bonjol Gg. Tanjung Sari No. 2</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="row">
							<div class="col-md-4">Jlh Kamar</div>
							<div class="col-md-1">:</div>
							<div class="col-md-7">2</div>
						</div>
						<div class="row">
							<div class="col-md-4">Harga</div>
							<div class="col-md-1">:</div>
							<div class="col-md-7">Rp 1.200.000</div>
						</div>
						<div class="row">
							<div class="col-md-4">Total Harga</div>
							<div class="col-md-1">:</div>
							<div class="col-md-7">Rp 2.400.000</div>
						</div>
					</div>
				</div>

				<div class="row mt-4">
					<h6>History Catering : </h6>
				</div>
				<div class="row row10">
					<div class="col-md-2">
						<div class="image">
							<img src="../assets/img/dinner2.jpg" alt="" width="100%" height="100%">
						</div>
					</div>
					<div class="col-md-5 batas" >
						<div class="row">
							<div class="col-md-4">Nama Makanan</div>
							<div class="col-md-1">:</div>
							<div class="col-md-7">Nasi Uduk</div>
						</div>
						<div class="row">
							<div class="col-md-4">Tanggal Pemesanan</div>
							<div class="col-md-1">:</div>
							<div class="col-md-7">10 Oktober 2018</div>
						</div>
						<div class="row">
							<div class="col-md-4">Jumlah Makanan</div>
							<div class="col-md-1">:</div>
							<div class="col-md-7">1</div>
						</div>
						<div class="row">
							<div class="col-md-4">Harga Makanan</div>
							<div class="col-md-1">:</div>
							<div class="col-md-7">Rp 15.000</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="row">
							<div class="col-md-4">Total Harga</div>
							<div class="col-md-1">:</div>
							<div class="col-md-7">Rp 15.000</div>
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

<script src="../assets/js/detail-ruangan.js"></script>