function daftar(){
     var password = document.getElementById('password').value;
    var repass = document.getElementById('repassword').value;

    if(repass != password){
       document.getElementById('gagal').innerHTML = "Password tidak cocok";
    }
    else if(repass == password){
      document.getElementById('gagal').innerHTML = "";
    }
   }