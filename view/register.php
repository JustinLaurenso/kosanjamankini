<?php
error_reporting(0);
 require_once "../function/SaveRegister.php";
  ?>
<!DOCTYPE html>
<html>
<head>
    <title>Register Form</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="../assets/css/register.css">
</head>
<body>
  <header>
    <div class="container-fullscreen">
      <div class="row">
     
        
        <div class="col-lg-6 col-sm-6" style="background-image: url(../assets/img/kosan.jpg) ;background-repeat: no-repeat;">
          <div class="section">
           <img src="../assets/img/kokilogo2.png" alt="logo" width="250" class="logo" height="200">
           <h2><b>Cari kosan dengan gampang?</b></h2>
           <br><h4>Buruan <font style="color:#dd300d;">login</font> sekarang!</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="register">
            <h3>Register</h3>
            <form action="" method="POST">
              <div class="overflow">
              <div class="row row1">
              <div class="col-lg-2 col-sm-2">
                <div class="logo_user">
                    <img src="../assets/img/if_user_216498.png" alt="" class="user" width="30">
                </div>
              </div>
              <div class="col-lg-10 col-sm-10">
                <input autocomplete="off" type="text" class="form-control" name="username" id="username" placeholder="Username" required>     
              </div>
            </div>

             <div class="row row1">
              <div class="col-lg-2 col-sm-2">
                <div class="logo_user">
                    <img src="../assets/img/if_user_216498.png" alt="" class="user" width="30">
                </div>
              </div>
              <div class="col-lg-10 col-sm-10">
                <input autocomplete="off" type="text" class="form-control" name="name" id="name" placeholder="Name" required>     
              </div>
            </div>

             <div class="row row1">
              <div class="col-lg-2 col-sm-2">
                <div class="logo_pass" align="middle">
                    <img src="../assets/img/mail-black-envelope-symbol.png" alt="" class="user" width="28">
                </div>
              </div>
              <div class="col-lg-10 col-sm-10">
                <input autocomplete="off" required type="email" class="form-control" name="e-mail" id="e-mail" placeholder="E-mail">
              </div>
            </div>


            <div class="row row1">
              <div class="col-lg-2 col-sm-2">
                <div class="logo_pass">
                    <img src="../assets/img/if_lock-closed_216288.png" alt="" class="user" width="30">
                </div>
              </div>
              <div class="col-lg-10 col-sm-10">
                <input autocomplete="off" required type="password" class="form-control" name="password" id="password" placeholder="Password">
              </div>
            </div>

             <div class="row row1">
              <div class="col-lg-2 col-sm-2">
                <div class="logo_pass">
                    <img src="../assets/img/if_lock-closed_216288.png" alt="" class="user" width="30">
                </div>
              </div>
              <div class="col-lg-10 col-sm-10">
                <input autocomplete="off" required type="password" class="form-control" name="repassword" id="repassword" placeholder="Re-Type Password" onkeyup="daftar()">
                
              </div>
              <label id="gagal"></label>
            </div>
<!-- 
            <div class="row row1">
              <div class="col-lg-2">
                <div class="logo_pass">
                  <img src="" alt="" class="user" width="30">
                </div>
              </div>
              <div class="col-lg-10">
                <select name="gender" id="gender" class="form-control">
                  <option value="">
                    -- Gender --
                  </option>
                  <option value="Laki-Laki">
                    Male
                  </option>
                  <option value="Perempuan">
                    Female
                  </option>
                </select>
              </div>
            </div> -->


            </div>

            <div class="row row2">
              <div class="col-lg-4 col-sm-4"></div>
              <div class="tombol_masuk col-lg-4 col-sm-4">
             <input type="submit" name="daftar" id="login" value="Daftar" class="btnmasuk">
              </div>
              <div class="col-lg-4 col-sm-4"></div>
            </div>
                </form>

            <div class="row row3">
              <div class="col-lg-12 col-sm-12" style="text-align: center;">
                Sudah punya akun?<a href="index.php">Login</a>
              </div>
            </div>            

          </div>
        </div>
      </div>
    </div>
  </header>
  
</body>
</html>

<script src="../assets/js/register.js"></script>
