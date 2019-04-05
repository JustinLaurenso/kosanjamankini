function saveKos(){
	var browse = document.getElementById('browse').value;
	var nama = document.getElementById('nama').value;
	var alamat = document.getElementById('alamat').value;
	var jenis = document.getElementById('jenis').value;
	var fasilitas = document.getElementById('fasilitas').value;
	var jlh_lantai = document.getElementById('jlh_lantai').value;
	var jlh_kamar = document.getElementById('jlh_kamar').value;
	var harga = document.getElementById('harga').value;
	var keterangan =document.getElementById('keterangan').value;
	var url = "../function/saveKos.php?image="+browse+"&nama="+nama+"&alamat="+alamat+"&jenis="+jenis+"&fasilitas="+fasilitas+"&jlh_lantai="+jlh_lantai+"&jlh_kamar="+jlh_kamar+"&harga="+harga+"&keterangan="+keterangan+"&cmdsave=savekos";
	window.location = url;
}

