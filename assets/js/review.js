jQuery(document).ready(function() {
		jQuery(window).scroll(function () {

		if (jQuery(window).scrollTop() > 280) {
		jQuery('#masthead').addClass('navbar-fixed');
		jQuery('#logo_img').addClass('tinggi_logo');
		jQuery('#master').addClass('navigation2');
		jQuery('#top').addClass('margin-ttop');
		}
		if (jQuery(window).scrollTop() < 281) {
			jQuery('#masthead').removeClass('navbar-fixed');
			jQuery('#logo_img').removeClass('tinggi_logo');
			jQuery('#master').removeClass('navigation2');
			jQuery('#top').removeClass('margin-ttop');
		}
		});
});

    function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('googleMap'), {
          center: {lat: -6.273300, lng: 106.823925},
          scrollwheel: false,
          zoom: 3
        });
      }

$(document).ready(function(){
  $("#tampilkan").click(function(){
    $("#tampil").slideDown("slow");
  });
});

$(document).ready(function(){
  $("#tutup").click(function(){
    $("#tampil").slideUp("slow");
  });
});
$(document).ready(function(){
	$(".lanjut").click(function(){
		$(".detail-transfer").hide();
		$("#bungkus-transfer").show();
	});
});
$(document).ready(function(){
	$('.close').click(function(){
		$('#bungkus-transfer').hide();
		$('.detail-transfer').show();
		$('#bungkus-transfer').css("display","none");
		$('.bukti-pembayaran').hide();

	});
});
$(document).ready(function(){
	$('.tutup').click(function(){
		$('#bungkus-transfer').hide();
		$('.detail-transfer').show();
		$('#bungkus-transfer').css("display","none");
		$('.bukti-pembayaran').hide();
	});
});

$(document).ready(function(){
	$('.transfer').click(function(){
		$('#bungkus-transfer').hide();
		$('.bukti-pembayaran').show();
	});
});		

function totalHarga(){
	var kamar = parseInt(document.getElementById('jumlah_kamar').value);
	if(kamar != null || kamar != ""){
		var kamar = parseInt(document.getElementById('jumlah_kamar').value);
		var harga = parseInt(document.getElementById('harga_palsu').value);

		var total = parseInt(kamar * harga);


		var bilangan = document.getElementById('harga_kamar').innerHTML = total;
		
		var number_string = bilangan.toString(),
		sisa 	= number_string.length % 3,
		rupiah 	= number_string.substr(0, sisa),
		ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
			
		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}
		document.getElementById('harga_kamar').innerHTML = rupiah;

		}
	else if(kamar == null || kamar == ""){
		var kamar = parseInt(document.getElementById('jumlah_kamar').value = 1);
		var bilangan = 1200000;
	
		var	number_string = bilangan.toString(),
			sisa 	= number_string.length % 3,
			rupiah 	= number_string.substr(0, sisa),
			ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
				
		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}
		document.getElementById('harga_kamar').innerHTML = rupiah;
			}
}

var bilangan = 1200000;
	
var	number_string = bilangan.toString(),
	sisa 	= number_string.length % 3,
	rupiah 	= number_string.substr(0, sisa),
	ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
		
if (ribuan) {
	separator = sisa ? '.' : '';
	rupiah += separator + ribuan.join('.');
}
document.getElementById('harga_kamar').innerHTML = rupiah;