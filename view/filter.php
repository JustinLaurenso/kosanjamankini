<!DOCTYPE html>
<html>
<head>
	<title>Filter</title>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="../assets/css/filter.css">
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
                               <a href="home.html">Home </b></a>
                           </li>
                           <li>
                              <a href="bukakos.html">Buka Kos</a>
                           </li>
                            <li class="active">
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
                <div class="col-lg-8" style="height: 500px; overflow: auto;">
                   <div class="row row1">
                      <button class="tampilkan-filter" id="tampilkan">TAMPILKAN FILTER</button>
                   </div>
                  
                  <div id="tampil">
                     <div class="row row3">
                     <div class="col-lg-12">
                        <div class="row row4">
                           <div class="col-lg-12">
                              <label>Urutkan Berdasarkan : </label>
                           </div>
                           <div class="col-lg-12">
                              <select name="kategori" id="kategori" class="form-control">
                                 <option value="">Pilih Semua</option>
                                 <option value="">Terbaru</option>
                                 <option value="">Termahal</option>
                                 <option value="">Termurah</option>
                              </select>
                           </div>
                        </div>
                        <div class="row row6">
                           <div class="col-lg-12">
                              <label>Harga : </label>
                           </div>
                           <div class="col-lg-5">
                              <input type="text" placeholder="IDR 0" class="form-control">
                           </div>
                           <div class="col-lg-1"> - </div>
                           <div class="col-lg-5">
                              <input type="text" placeholder="IDR" class="form-control">
                           </div>
                        </div>

                        <div class="row row7">
                           <div class="col-lg-12">
                              <label>Jenis Kos :</label>
                           </div>
                           <div class="col-lg-12">
                              <input type="radio" name="jenis-kos" id="pria"> Pria
                              <input type="radio" name="jenis-kos" id="wanita"> Wanita
                              <input type="radio" name="jenis-kos" id="campur"> Campur
                           </div>
                        </div>

                        <div class="row row8">
                           <div class="col-lg-12">
                              <label>Fasilitas Kos :</label>
                           </div>
                           <div class="col-md-6">
                              <div class="row">
                                 <img src="../assets/img/wifi.png" alt="" width="20" height="20" height="20"> Internet / Wifi
                              </div>
                              <div class="row">
                                 <img src="../assets/img/bathtub.png" alt="" width="20" height="20"> Bathub
                              </div>
                              <div class="row">
                                 <img src="../assets/img/television.png" alt="" width="20" height="20"> Televisi
                              </div>
                              <div class="row">
                                 <img src="../assets/img/air-conditioner.png" alt="" width="20" height="20"> AC
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="row">
                                 <img src="../assets/img/toilet.png" alt="" width="20" height="20"> Toilet
                              </div>
                              <div class="row">
                                 <img src="../assets/img/kitchen.png" alt="" width="20" height="20"> Dapur
                              </div>
                              <div class="row">
                                 <img src="../assets/img/Bed.png" alt="" width="20" height="20"> Tempat Tidur
                              </div>
                              <div class="row">
                                 <img src="../assets/img/24-hours.png" alt="" width="20" height="20"> Open 24 Jam
                              </div>
                           </div>
                        </div>

                        <div class="row row9">
                           <div class="col-lg-12">
                              <button id="tutup">Tutup</button>
                           </div>
                           <div class="col-lg-12">
                              <button>Cari</button>
                           </div>

                        </div>
                     </div>
                  </div>
                  </div>

                   <div class="row2 row">
                      <div class="col-md-6">
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

                       <div class="col-md-6">
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
                   </div>

                     <div class="row2 row">
                      <div class="col-md-6">
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

                       <div class="col-md-6">
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
                   </div>

                     <div class="row2 row">
                      <div class="col-md-6">
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

                       <div class="col-md-6">
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
                   </div>

                     <div class="row2 row">
                      <div class="col-md-6">
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

                       <div class="col-md-6">
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
                   </div>

                     <div class="row2 row">
                      <div class="col-md-6">
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

                       <div class="col-md-6">
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
                   </div>

                     <div class="row2 row">
                      <div class="col-md-6">
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

                       <div class="col-md-6">
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
                   </div>
                </div>
               <div class="col-lg-4">
                  <div id="googleMap" style="width: 100%; height: 500px;"></div>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOVfpPuuh3VHFvtoas3ZuNTt2Kp9KIkTU&callback=initMap"
async defer></script>