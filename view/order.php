<!DOCTYPE html>
<html>
<head>
	<title> Order </title>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="../assets/css/order.css">
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
					<input type="text" class="form-control col-md-10" placeholder="Ketik Restoran atau Nama Makanan">
					<button class="col-md-2 col-md-2 btn" style="background-color: #db450b; color: #fff;margin-top: 0px;"><i class="fas fa-search"></i></button>
			</div>
				</div>
				<div class="col-md-4 col-md-4 navigation" id="master">
					   <div class="navbar">
                        <ul class="nav">
                           <li>
                               <a href="home.html">Home </b></a>
                           </li>
                           <li class="">
                           	<a href="bukakos.html">Buka Kos</a>
                           </li>
                            <li>
                               <a href="filter.html">Filter</a>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li class="dropdown">
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
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="row imgttl">
								<div class="col-lg-12 col-md-12"><b><h4>Bakso Malang Pak De</h4></b></div>
								<div class="col-lg-12 col-md-12 dtltoko">Jl.Wononegoro Blok.5A ,Pontianak</div>
								<div class="col-lg-12 col-md-12 dtltoko"><font color="green">Open  </font> 8.00 AM -- 21.00 PM</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<img src="../assets/img/lunch3.jpg" alt="" width="400" class="img">
						</div>
					</div>
				</div>

		<div class="col-lg-6 col-md-6" style="background-color: #fff;">
					<div class="row">
					<div class="col-lg-12 col-md-12 head">Paket</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="row">
					<div class="col-lg-6 col-md-6 paketsec">Paket Komplit  <br><font style="color:grey;font-size:10pt;">(Mie,Sayur,Tahu 2,bakso 4,gepeng 3,urat 2,telur asin 1)</font>
					<br><font style="color:red;font-size:10pt;">Rp.38000/porsi</font></div>

					<div class="col-lg-6 col-md-6 paketsec">Paket Hemat  <br><font style="color:grey;font-size:10pt;">(Mie,Sayur,Tahu 1,bakso 5,gepeng 3,urat 2)</font>
					<br><font style="color:red;font-size:10pt;">Rp.30000/porsi</font></div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="row">
					<div class="col-lg-6 col-md-6 paketsec">
						<input type="button" name="" class="addbut btn btn-success btn-sm" value="Add">
					</div>

					<div class="col-lg-6 col-md-6 paketsec">
						<input type="button" name="" class="addbut btn btn-sm btn-success" value="Add">
					</div>
					</div>
				</div>
			</div>
			<div class="row">
					<div class="col-lg-12 col-md-12 head cus">Custom</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
				<div class="row">
					<div class="col-lg-12 col-md-12 basosechead">Bakso :</div>

					<div class="col-lg-5 col-md-5 basosec">Biasa <br><font style="color:red;font-size:10pt;">Rp.1500/pcs</font></div>
					<div class="col-lg-7 col-md-7 jumlah"><input type="button" name="" class="addbut btn btn-sm btn-success" value="Add"></div>

					<div class="col-lg-5 col-md-5 basosec">Gepeng <br><font style="color:red;font-size:10pt;">Rp.1800/pcs</font></div>
					<div class="col-lg-7 col-md-7 jumlah"><input type="button" name="" class="addbut btn btn-sm btn-success" value="Add"></div>

					<div class="col-lg-5 col-md-5 basosec">Urat <br><font style="color:red;font-size:10pt;">Rp.2000/pcs</font></div>
					<div class="col-lg-7 col-md-7 jumlah"><input type="button" name="" class="addbut btn btn-sm btn-success" value="Add"></div>

					<div class="col-lg-5 col-md-5 basosec">Telur Asin <br><font style="color:red;font-size:10pt;">Rp.6000/pcs</font></div>
					<div class="col-lg-7 col-md-7 jumlah"><input type="button" name="" class="addbut btn btn-sm btn-success" value="Add"></div>
				</div>
				</div>
			<div class="col-lg-6 col-md-6">
				<div class="row">
							<div class="col-lg-12 col-md-12 space">
								<div class="row">
									<div class="col-lg-5 col-md-5 bottomhead none">Tahu<br><font style="color:red;font-size:10pt;">Rp.3700/pcs </font>
								</div>
									<div class="col-lg-7 col-md-7 jumlah"><input type="button" name="" class="addbut btn btn-sm btn-success" value="Add"></div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 space">
								<div class="row">
									<div class="col-lg-5 col-md-5 bottomhead none">Sayur <br><font style="color:red;font-size:10pt;">Rp.3500 </font>
								</div>
									<div class="col-lg-7 col-md-7 jumlah"><input type="button" name="" class="addbut btn btn-sm btn-success" value="Add"></div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 space">
								<div class="row">
									<div class="col-lg-5 col-md-5 bottomhead none">Mie <br><font style="color:red;font-size:10pt;">Rp.5000 </font></div>
									<div class="col-lg-7 col-md-7 jumlah"><input type="button" name="" class="addbut btn btn-sm btn-success" value="Add"></div>
								</div>
							</div>				
					</div>
			</div>				
			</div>
						<div class="row">
								<div class="col-lg-12 col-md-12" style="text-align: center;"><input type="button" name="" id="orderbut" value="Proses" class="btn btn-success" data-toggle="modal" data-target="#orderan"></div>
						</div>
				</div>
			</div>
				
				<div class="modal fade" class="orderan" id="orderan">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
									<h4>Order</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>		
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-10" style="text-align: center;">
										<img src="../assets/img/lunch3.jpg" width="80%" style="margin: auto; text-align: center;">
									</div>
									<div class="col-md-1"></div>
								</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-danger" data-dismiss="modal">Tutup</button>
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
</body>
</html>