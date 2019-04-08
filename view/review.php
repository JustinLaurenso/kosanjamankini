<!DOCTYPE html>
<html>
<head>
	<title>Review</title>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="../assets/css/review.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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
					<button class="col-lg-2 col-md-2 btn" style="background-color: #db450b; color: #fff;"><i class="fas fa-search"></i></button>
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
	<?php 
		include "../koneksi/koneksi.php";
		$kodekos = $_GET['kode_kos'];
		$sql = "select * from tbkos where kode_kos='$kodekos' ";
		$query = mysqli_query($conn,$sql);
		$re = mysqli_fetch_array($query);
		$nama = $re['nama'];
		$harga = $re['harga'];
	?>
	<div class="container1">
		<div class="container">
			<div class="row row3">
				<div class="col-md-12">
					<h2><?php echo($nama) ?></h2>
				</div>
			</div>
			<div class="row row4">
				<div class="col-md-6">
				<label> Update terakhir : 1 Januari 2019</label>	
				</div>
				<div class="col-md-6">
					<div class="harga-kos">
						<label><?php echo "Rp. " .  number_format($harga,2,',','.') ?> / Bulan</label>
					</div>
				</div>
			</div>
			<div class="row row5">
				<div class="col-md-6">
					<div id="demo" class="carousel slide" data-ride="carousel">
					  <ul class="carousel-indicators">
					    <li data-target="#demo" data-slide-to="0" class="active"></li>
					    <li data-target="#demo" data-slide-to="1"></li>
					    <li data-target="#demo" data-slide-to="2"></li>
					  </ul>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="../assets/img/hipwee-kosan3-750x422.jpg" alt="Los Angeles" width="100%" height="350">
					    </div>
					    <div class="carousel-item">
					      <img src="../assets/img/Comfy-College-Dorm-Room-Ideas-750x422.jpg" alt="Chicago" width="100%" height="350">
					    </div>
					    <div class="carousel-item">
					      <img src="../assets/img/hipwee-kamar2-750x422.jpg" alt="New York" width="100%" height="350">
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
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">
							<p><b>Lokasi Kost</b></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">Provinsi</div>
						<div class="col-md-1">:</div>
						<div class="col-md-7">Kalimantan Barat</div>
					</div>
					<div class="row">
						<div class="col-md-4">Kota</div>
						<div class="col-md-1">:</div>
						<div class="col-md-7">Pontianak</div>
					</div>
					<div class="row">
						<div class="col-md-4">Kecamatan</div>
						<div class="col-md-1">:</div>
						<div class="col-md-7">Pontianak Tenggara</div>
					</div>
					<div class="row">
						<div class="col-md-4">Alamat</div>
						<div class="col-md-1">:</div>
						<div class="col-md-7">Jalan Tanjung Pura No. 2</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p><b>Tipe Kos</b></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">Jenis Kos</div>
						<div class="col-md-1">:</div>
						<div class="col-md-7">
							<img src="../assets/img/1452632149_inspiration-39_icon-icons.com_51111.png" alt="" width="30" style="border-radius: 50%">
							<label>Kos Pria</label>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">Jam Bertamu</div>
						<div class="col-md-1">:</div>
						<div class="col-md-7">Bebas</div>
					</div>
					<div class="row">
						<div class="col-md-4">Pelihara Binatang</div>
						<div class="col-md-1">:</div>
						<div class="col-md-7">Boleh</div>
					</div>

					<div class="row" style="margin-top: 20px !important;">
						<div class="col-md-12">
							<button class="hubungi">
								Hubungi
							</button>

							<button class="mt-4 pembayaran hubungi" data-toggle="modal" data-target="#pembayaran">
								Pembayaran
							</button>

							<div class="modal" id="pembayaran">
								<div class="modal-dialog">
									<div class="modal-content">
										
										<div class="modal-header">
											<h4 class="modal-title">Pembayaran</h4>
											<button type="button" class="close" data-dismiss="modal">&times;</button >
										</div>

										<div class="modal-body">
											<div id="bungkus-transfer" style="display: none;">
													<h5>Kredit : </h5>

											<div class="row row17 mt-3 transfer">
												<div class="col-md-3">
													<div class="bca">
														<img src="../assets/img/BCA-512.png" alt="" width="100%">
													</div>
												</div>
												<div class="col-md-9">
													BCA
												</div>
											</div>
											<div class="row row17 transfer">
												<div class="col-md-3" >
													<div class="bca">
														<img src="../assets/img/BNI-512.png" alt="" width="100%">
													</div>
												</div>
												<div class="col-md-9">
													BNI
												</div>
											</div>
											<div class="row row17 transfer">
												<div class="col-md-3" >
													<div class="bca">
														<img src="../assets/img/BRI-512.png" alt="" width="100%">
													</div>
												</div>
												<div class="col-md-9">
													BRI
												</div>
											</div>
											</div>

											<div class="detail-transfer">
												<h5>Detail Pembayaran</h5>
												
												<div class="row mt-4">
													<div class="col-md-3">Nama Kos</div>
													<div class="col-md-1">:</div>
													<div class="col-md-7">Kost Mamank Alex</div>
												</div>
												<div class="row">
													<div class="col-md-3">Pemilik Kos</div>
													<div class="col-md-1">:</div>
													<div class="col-md-7">Bang Alex</div>
												</div>
												<div class="row">
													<div class="col-md-3">Jumlah Kamar</div>
													<div class="col-md-1">:</div>
													<div class="col-md-3">
															<input type="text" class="form-control" class="jumlah_kamar" id="jumlah_kamar" onkeyup="totalHarga()">
													</div>
													<div class="col-md-2">Kosong</div>
													<div class="col-md-1">:</div>
													<div class="col-md-1">4</div>
												</div>
												<div class="row">
													<div class="col-md-3">Harga Kos</div>
													<div class="col-md-1">:</div>
													<input type="hidden" value="1200000" id="harga_palsu">
													<div class="col-md-7">Rp. <label id="harga_kamar"></label> / Tahun</div>
												</div>
												<div class="row">
													<div class="col-md-3">Jenis Kos</div>
													<div class="col-md-1">:</div>
													<div class="col-md-7">Kos Pria</div>
												</div>
												<div class="row">
													<div class="col-md-3">No Rekening</div>
													<div class="col-md-1">:</div>
													<div class="col-md-7">23120321039</div>
												</div>
												<div class="row mt-3">
													<div class="col-md-4"></div>
													<div class="col-md-4">
														<button class="btn btn-success lanjut">Lanjut</button>
													</div>
													<div class="col-md-4"></div>
												</div>
											</div>

											<div class="bukti-pembayaran" style="display: none">
												<h5>Lampirkan Bukti Pembayaran</h5>
												
												<div class="row">
													<div class="input-group mt-4">
													<input type="file" class="form-control-file">
												</div>
												</div>

												<div class="row mt-4">
													<div class="col-md-4"></div>
													<div class="col-md-4">
														<button class="btn btn-primary submit">Submit</button>
													</div>
													<div class="col-md-4"></div>
												</div>
											</div>

										</div>



										<div class="modal-footer">
											<button type="button" class="btn btn-danger tutup" data-dismiss="modal">Kembali</button>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="row row13">
				<h4><b>Deskripsi</b></h4>
			</div>
			<div class="row">
				<p>Penginapan yang nyaman dan membuat kalian betah. Kos ini terdapat di Jakarta.<br>
				Kost Mamank Alex ini sangat bersih dan rapi, nyaman untuk di tempati, dan pastinya harganya murah dong, untuk fasilitasnya juga baik. </p>
			</div>
		</div>
	</div>
		<div class="container container2">
			<div class="bungkus-fasilitas">
				<div class="row">
					<div class="col-md-6">
						<div class="row row14">
							<div>Ada Kosong</div>
						</div>
						<div class="row">
							<div class="col-lg-4">Jumlah Kamar</div>
							<div class="col-lg-1">:</div>
							<div class="col-lg-7">72</div>
						</div>
						<div class="row">
							<div class="col-lg-4">Ukuran Kamar</div>
							<div class="col-lg-1">:</div>
							<div class="col-lg-7">3 x 3</div>
						</div>
						<div class="row">
							<div class="col-lg-4">Luas Kamar</div>
							<div class="col-lg-1">:</div>
							<div class="col-lg-7">3 m<sup>2</sup></div>
						</div>
					</div>
					<div class="col-md-6">
						<img src="../assets/img/hipwee-kosan3-750x422.jpg" alt="" width="100%">
					</div>
				</div>
			</div>
		</div>
			
			<div class="container3">
				<div class="container">
				<div class="row">
					<h3>Fasilitas</h3>
				</div>
				<div class="row row15">
						<div class="col-lg-3">
							<div class="row">
								<div class="col-lg-3">
									<img src="../assets/img/wifi.png" alt="" width="30">
								</div>
								<div class="col-lg-9">Internet / WI-FI</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="row">
								<div class="col-lg-3">
									<img src="../assets/img/air-conditioner.png" alt="" width="30">
								</div>
								<div class="col-lg-9">AC</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="row">
								<div class="col-lg-3">
									<img src="../assets/img/television.png" alt="" width="30">
								</div>
								<div class="col-lg-9">Televisi</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="row">
								<div class="col-lg-3">
									<img src="../assets/img/bed.png" alt="" width="30">
								</div>
								<div class="col-lg-9">Tempat Tidur</div>
							</div>
						</div>
				</div>

				<div class="row row16">
						<div class="col-lg-3">
							<div class="row">
								<div class="col-lg-3">
									<img src="../assets/img/bathtub.png" alt="" width="30">
								</div>
								<div class="col-lg-9">Bathtub</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="row">
								<div class="col-lg-3">
									<img src="../assets/img/kitchen.png" alt="" width="30">
								</div>
								<div class="col-lg-9">Dapur</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="row">
								<div class="col-lg-3">
									<img src="../assets/img/toilet.png" alt="" width="30">
								</div>
								<div class="col-lg-9">Toilet</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="row">
								<div class="col-lg-3">
									<img src="../assets/img/24-hours.png" alt="" width="30">
								</div>
								<div class="col-lg-9">24 jam</div>
							</div>
						</div>
				</div>
	
				</div>
			</div>

			<div class="container4">
				<div class="container">
			<div class="bungkus-peta">
				<div class="row">
					<h3>Peta</h3>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div id="googleMap" style="height: 500px; width: 100%"></div>
					</div>
				</div>

				<div class="row">
					<button class="hubungi1">Hubungi Kos</button>
				</div>
			</div>
			</div>
		</div>

		<div class="container5">
				<div class="container">
			<div class="kos-lainnya">
					<div class="row row7">
			  <div class="col-lg-12">
					<h3>KOST LAINNYA</h3>
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

				<div class="row8 row">
				<div class="col-lg-10"></div>
				<div class="col-lg-2">
					<div class="selengkapnya">
						Lihat Selengkapnya >
					</div>
				</div>
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
	</footer>
</body>
</html>
  <!-- <script src="http://maps.googleapis.com/maps/api/js"></script> -->
<script src="../assets/js/review.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOVfpPuuh3VHFvtoas3ZuNTt2Kp9KIkTU&callback=initMap"
async defer></script>