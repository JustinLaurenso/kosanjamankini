<!DOCTYPE html>
<html>
<head>
	<title> Catering </title>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="../assets/css/catering.css">
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
			<div id="demo" class="carousel slide" data-ride="carousel">
				 <ul class="carousel-indicators">
				    <li data-target="#demo" data-slide-to="0" class="active"></li>
				    <li data-target="#demo" data-slide-to="1"></li>
				    <li data-target="#demo" data-slide-to="2"></li>
				  </ul>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="../assets/img/24689209_Chinese New Year fb promo copy.jpg" alt="Los Angeles" width="100%" height="500">
				    </div>
				    <div class="carousel-item">
				      <img src="../assets/img/xmas-promo-2017_web-banner_small-1.jpg" alt="Chicago" width="100%" height="500">
				    </div>
				    <div class="carousel-item">
				      <img src="../assets/img/Phoenicia-Corporate-Catering-Landing-Page-2016-v1.png" alt="New York" width="100%" height="500">
					 </div>
					 </div>
				  <a class="carousel-control-prev" href="#demo" data-slide="prev" style="width: 100px;">
				    <span class="carousel-control-prev-icon"></span>
				  </a>
				  <a class="carousel-control-next" href="#demo" data-slide="next" style="width: 100px;">
				    <span class="carousel-control-next-icon"></span>	
				  </a>
			</div>
		</div>

		<div class="bungkus1 mt-5">
			<div class="row row1">
				<div class="col-md-4"></div>
				<div class="col-md-4 promo">
					<h4>PROMO</h4>
				</div>
				<div class="col-md-4"></div>
			</div>

			<div class="row row3 mt-5">
				<div class="col-md-12">
						<div id="demoo" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				     	<div class="row">
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/break3.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Pancake Mentega</p>
				     					<p><s>Rp 5.000</s>  Rp 4.000 </p>

				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/break1.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Roti Panggang</p>
				     					<p><s>Rp 4.000</s>  Rp 3.000 </p>
				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/dinner3.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Nasi Goreng</p>
				     					<p><s>Rp 12.000</s>  Rp 10.000 </p>
				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/lunch2.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Sate Padang</p>
				     					<p><s>Rp 15.000</s>  Rp 12.000 </p>
				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/lunch1.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Mie Goreng</p>
				     					<p><s>Rp 10.000</s>  Rp 7.000 </p>
				     				</div>
				     			</div>
				     		</div>

				     	</div>
				    </div>
				    <div class="carousel-item">
				      		  <div class="row">
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/break3.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Pancake Mentega</p>
				     					<p><s>Rp 5.000</s>  Rp 4.000 </p>

				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/break1.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Roti Panggang</p>
				     					<p><s>Rp 4.000</s>  Rp 3.000 </p>
				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/dinner3.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Nasi Goreng</p>
				     					<p><s>Rp 12.000</s>  Rp 10.000 </p>
				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/lunch2.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Sate Padang</p>
				     					<p><s>Rp 15.000</s>  Rp 12.000 </p>
				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/lunch1.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Mie Goreng</p>
				     					<p><s>Rp 10.000</s>  Rp 7.000 </p>
				     				</div>
				     			</div>
				     		</div>

				     	</div>
				    </div>
				    <div class="carousel-item">
				    		   	<div class="row">
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/break3.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Pancake Mentega</p>
				     					<p><s>Rp 5.000</s>  Rp 4.000 </p>

				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/break1.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Roti Panggang</p>
				     					<p><s>Rp 4.000</s>  Rp 3.000 </p>
				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/dinner3.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Nasi Goreng</p>
				     					<p><s>Rp 12.000</s>  Rp 10.000 </p>
				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/lunch2.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Sate Padang</p>
				     					<p><s>Rp 15.000</s>  Rp 12.000 </p>
				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/lunch1.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Mie Goreng</p>
				     					<p><s>Rp 10.000</s>  Rp 7.000 </p>
				     				</div>
				     			</div>
				     		</div>

				     	</div>
					 </div>
				  <a class="carousel-control-prev" href="#demoo" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  </a>
				  <a class="carousel-control-next" href="#demoo" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>	
				  </a>
				</div>
				</div>
			</div>
		</div>
	</div>
		<div class="bungkus1 mt-5">
			<div class="row row4">
				<div class="col-md-4"></div>
				<div class="col-md-4 promo">
					<h4>FAVOURITE</h4>
				</div>
				<div class="col-md-4"></div>
			</div>
				
			<div class="row mt-5">
				<div class="col-md-12">
						<div id="demooo" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				     	<div class="row">
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/dinner1.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Bebek Panggang</p>
				     					<p>Rp 30.000</p>
				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/lunch3.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Bakso Malang</p>
				     					<p>Rp 15.000</p>
				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/dinner3.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Nasi Goreng Seafood</p>
				     					<p>Rp 18.000</p>
				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/nasiuduk.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Nasi Uduk</p>
				     					<p>Rp 20.000</p>
				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/lunch1.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Mie Goreng Special</p>
				     					<p>Rp 13.000</p>
				     				</div>
				     			</div>
				     		</div>

				     	</div>
				    </div>
				    <div class="carousel-item">
				      		   	<div class="row">
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/break3.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Pancake Mentega</p>
				     					<p>Rp 5.000</p>
				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/break1.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Roti Panggang</p>
				     					<p>Rp 3.000</p>
				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/dinner3.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Nasi Goreng</p>
				     					<p>Rp 12.000</p>
				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/lunch2.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Sate Padang</p>
				     					<p>Rp 15.000</p>
				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/lunch1.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Mie Goreng</p>
				     					<p>Rp 10.000</p>
				     				</div>
				     			</div>
				     		</div>

				     	</div>
				    </div>
				    <div class="carousel-item">
				    		   	<div class="row">
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/break3.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Pancake Mentega</p>
				     					<p>Rp 5.000</p>
				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/break1.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Roti Panggang</p>
				     					<p>Rp 3.000</p>
				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/dinner3.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Nasi Goreng</p>
				     					<p>Rp 12.000</p>
				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/lunch2.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Sate Padang</p>
				     					<p>Rp 15.000</p>
				     				</div>
				     			</div>
				     		</div>
				     		<div class="col-lg">
				     			<div class="bungkus-image-promo">
				     				<div class="bungkus-image">
				     					<img src="../assets/img/lunch1.jpg" alt="" width="100%">
				     				</div>
				     				<div class="detail-makanan">
				     					<p>Mie Goreng</p>
				     					<p>Rp 10.000</p>
				     				</div>
				     			</div>
				     		</div>

				     	</div>
					 </div>
				  <a class="carousel-control-prev" href="#demooo" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  </a>
				  <a class="carousel-control-next" href="#demooo" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>	
				  </a>
				</div>
				</div>
				</div>
			</div>

		</div>

		<div class="bungkus mt-5">
			<div class="row row4">
			<div class="col-md-4"></div>
				<div class="col-md-4 promo">
					<h4>CATEGORIES</h4>
				</div>
				<div class="col-md-4"></div>
			</div>

			<div class="row mt-5">
				<div class="col-md-4">
					<div class="bungkus-category">
						<div class="img-category">
							<img src="../assets/img/discount.png" alt="" width="50%">
						</div>
						<h5 class="mt-4">Promo</h5>
					</div>
				</div>
				<div class="col-md-4">
					<div class="bungkus-category">
						<div class="img-category">
							<img src="../assets/img/best-seller.png" alt="" width="50%">
						</div>
						<h5 class="mt-4">Favourite</h5>
					</div>
				</div>
				<div class="col-md-4">
					<div class="bungkus-category">
						<div class="img-category">
							<img src="../assets/img/map.png" alt="" width="50%">
						</div>
						<h5 class="mt-4">Around</h5>
					</div>
				</div>
			</div>

			<div class="row mt-5">
				<div class="col-md-4">
					<div class="bungkus-category">
						<div class="img-category">
							<img src="../assets/img/day-and-night.png" alt="" width="50%">
						</div>
						<h5 class="mt-4">Day and Night</h5>
					</div>
				</div>
				<div class="col-md-4">
					<div class="bungkus-category">
						<div class="img-category">
							<img src="../assets/img/lunch-box.png" alt="" width="50%">
						</div>
						<h5 class="mt-4">Healthy Food</h5>
					</div>
				</div>
				<div class="col-md-4">
					<div class="bungkus-category">
						<div class="img-category">
							<img src="../assets/img/stew.png" alt="" width="50%">
						</div>
						<h5 class="mt-4">Newly Added</h5>
					</div>
				</div>
			</div>
		</div>

		<div class="bungkus mt-5">
			<div class="row row4">
			<div class="col-md-4"></div>
				<div class="col-md-4 promo">
					<h4>CUISINES</h4>
				</div>
				<div class="col-md-4"></div>
			</div>

			<div class="row mt-5">
				<div class="col-md-3">
					<div class="bungkus-category">
						<div class="img-category">
							<img src="../assets/img/fried-rice.png" alt="" width="50%">
						</div>
						<h5 class="mt-4">Rice</h5>
					</div>
				</div>
				<div class="col-md-3">
					<div class="bungkus-category">
						<div class="img-category">
							<img src="../assets/img/ramen.png" alt="" width="50%">
						</div>
						<h5 class="mt-4">Noodles</h5>
					</div>
				</div>
				<div class="col-md-3">
					<div class="bungkus-category">
						<div class="img-category">
							<img src="../assets/img/steak.png" alt="" width="50%">
						</div>
						<h5 class="mt-4">Meat</h5>
					</div>
				</div>
				<div class="col-md-3">
					<div class="bungkus-category">
						<div class="img-category">
							<img src="../assets/img/bread.png" alt="" width="50%">
						</div>
						<h5 class="mt-4">Bread</h5>
					</div>
				</div>
			</div>

			<div class="row mt-5">
				<div class="col-md-3">
					<div class="bungkus-category">
						<div class="img-category">
							<img src="../assets/img/sushi.png" alt="" width="50%">
						</div>
						<h5 class="mt-4">Sushi</h5>
					</div>
				</div>
				<div class="col-md-3">
					<div class="bungkus-category">
						<div class="img-category">
							<img src="../assets/img/fast-food.png" alt="" width="50%">
						</div>
						<h5 class="mt-4">Junk Food</h5>
					</div>
				</div>
				<div class="col-md-3">
					<div class="bungkus-category">
						<div class="img-category">
							<img src="../assets/img/shrimp.png" alt="" width="50%">
						</div>
						<h5 class="mt-4">Seafood</h5>
					</div>
				</div>
				<div class="col-md-3">
					<div class="bungkus-category">
						<div class="img-category">
							<img src="../assets/img/ice-cream.png" alt="" width="50%">
						</div>
						<h5 class="mt-4">Desserts</h5>
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