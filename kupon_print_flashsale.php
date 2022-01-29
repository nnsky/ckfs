<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<title>KUPON DISKON</title>
	<style>
		.kupon {
			border: 2px black solid;
			padding: 10px 10px 10px 10px;
			background-color: red;
			color: white;
			font-size: 32px;
		}

		.info {
			font-size: 30px;
			color: red;
			font-weight: bold;
		}

		.sk {
			font-size: 30px;
			font-weight: bold;
			text-align: justify;
		}

		.hp {
			display: none;
		}

		.pc {
			display: block;
		}

		@media (max-width: 768px) {
			.info {
				font-size: 12px;
			}

			.kupon {
				border: 2px black solid;
				padding: 10px 10px 10px 10px;
				background-color: red;
				color: white;
				font-size: 15px;
			}

			.sk {
				font-size: 12px;
				text-align: justify;
			}

			.pc {
				display: none;
			}

			.hp {
				display: block;
			}

		}
	</style>
</head>

<?php
if ($_GET['voucher'] == 'kingkoil160') {
	$gambar = "promokk/isi/kk160.png";
	$button = "";
	$link = "#";
} elseif ($_GET['voucher'] == 'kingkoil180') {
	$gambar = "promokk/isi/kk180.png";
	$button = "";
	$link = "#";
} elseif ($_GET['voucher'] == 'kingkoil200') {
	$gambar = "promokk/isi/kk200.png";
	$button = "";
	$link = "#";
} elseif ($_GET['voucher'] == 'pakaianck') {    // untuk categori QTY
	$gambar = "fsdesc/produk/sesi5/mulai/1.png";
	$button = "<img class='img-responsive gallery-img' src='fsdesc/produk/sesi5/mulai/b1.png'> ";
	$link = "https://www.chandrakarya.com/featured-products/1518-lemari-pakaian-ck-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'spcrys160') {	// Untuk categori Springbed
	$gambar = "fsjan/produk/sesi4/mulai/1.png";
	$button = "<img class='img-responsive gallery-img' src='fsjan/produk/sesi4/mulai/b1.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1418-spring-air-crystal-mattress-only-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'spcrys180') {	// Untuk categori Springbed
	$gambar = "fsjan/produk/sesi4/mulai/2.png";
	$button = "<img class='img-responsive gallery-img' src='fsjan/produk/sesi4/mulai/b2.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1418-spring-air-crystal-mattress-only-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'spcrys200') {	// Untuk categori Springbed
	$gambar = "fsjan/produk/sesi4/mulai/3.png";
	$button = "<img class='img-responsive gallery-img' src='fsjan/produk/sesi4/mulai/b3.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1418-spring-air-crystal-mattress-only-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'dreamcel160') {	// Untuk categori Springbed
	$gambar = "fsjan/produk/sesi4/mulai/4.png";
	$button = "<img class='img-responsive gallery-img' src='fsjan/produk/sesi4/mulai/b4.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1379-dreamline-celebrity-mattress-only-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'dreamcel180') {	// Untuk categori Springbed
	$gambar = "fsjan/produk/sesi4/mulai/5.png";
	$button = "<img class='img-responsive gallery-img' src='fsjan/produk/sesi4/mulai/b5.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1379-dreamline-celebrity-mattress-only-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'dreamcel200') {	// Untuk categori Springbed
	$gambar = "fsjan/produk/sesi4/mulai/6.png";
	$button = "<img class='img-responsive gallery-img' src='fsjan/produk/sesi4/mulai/b6.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1379-dreamline-celebrity-mattress-only-flash-sale-chandra-karya.html";
}  elseif ($_GET['voucher'] == 'tabed') {	// Untuk categori qty
	$gambar = "fsjan/produk/sesi4/mulai/7.png";
	$button = "<img class='img-responsive gallery-img' src='fsjan/produk/sesi4/mulai/b7.png'> ";
	$link = "https://www.chandrakarya.com/featured-products/1531-meja-tamu-edmond-flash-sale-chandra-karya.html";
}  elseif ($_GET['voucher'] == 'ema') {	// Untuk categori qty
	$gambar = "fsjan/produk/sesi4/mulai/8.png";
	$button = "<img class='img-responsive gallery-img' src='fsjan/produk/sesi4/mulai/b8.png'> ";
	$link = "https://www.chandrakarya.com/featured-products/1532-sofa-emma-211-dudukan-flash-sale-chandra-karya.html";
}  elseif ($_GET['voucher'] == 'kkwe160') {	// Untuk categori Springbed
	$gambar = "fsjan/produk/sesi4/mulai/9.png";
	$button = "<img class='img-responsive gallery-img' src='fsjan/produk/sesi4/mulai/b9.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1367-king-koil-new-world-endorsed-matress-only-flash-sale-chandra-karya.html";
}  elseif ($_GET['voucher'] == 'kkwe180') {	// Untuk categori Springbed
	$gambar = "fsjan/produk/sesi4/mulai/10.png";
	$button = "<img class='img-responsive gallery-img' src='fsjan/produk/sesi4/mulai/b10.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1367-king-koil-new-world-endorsed-matress-only-flash-sale-chandra-karya.html";
}  elseif ($_GET['voucher'] == 'kkwe200') {	// Untuk categori Springbed
	$gambar = "fsjan/produk/sesi4/mulai/11.png";
	$button = "<img class='img-responsive gallery-img' src='fsjan/produk/sesi4/mulai/b11.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1367-king-koil-new-world-endorsed-matress-only-flash-sale-chandra-karya.html";
}  elseif ($_GET['voucher'] == 'ldsov160') {	// Untuk categori Springbed
	$gambar = "fsjan/produk/sesi4/mulai/12.png";
	$button = "<img class='img-responsive gallery-img' src='fsjan/produk/sesi4/mulai/b12.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1353-lady-americana-new-sovereign-matress-only-flash-sale-chandra-karya-.html";
}  elseif ($_GET['voucher'] == 'ldsov180') {	// Untuk categori Springbed
	$gambar = "fsjan/produk/sesi4/mulai/13.png";
	$button = "<img class='img-responsive gallery-img' src='fsjan/produk/sesi4/mulai/b13.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1353-lady-americana-new-sovereign-matress-only-flash-sale-chandra-karya-.html";
}  elseif ($_GET['voucher'] == 'ldsov200') {	// Untuk categori Springbed
	$gambar = "fsjan/produk/sesi4/mulai/14.png";
	$button = "<img class='img-responsive gallery-img' src='fsjan/produk/sesi4/mulai/b13.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1353-lady-americana-new-sovereign-matress-only-flash-sale-chandra-karya-.html";
}  elseif ($_GET['voucher'] == 'dxie') {	// Untuk categori qty
	$gambar = "fsjan/produk/sesi4/mulai/15.png";
	$button = "<img class='img-responsive gallery-img' src='fsjan/produk/sesi4/mulai/b14.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1534-rak-tv-dixie-flash-sale-chandra-karya-.html";
}	elseif ($_GET['voucher'] == 'cita') {	// Untuk categori qty
	$gambar = "fsjan/produk/sesi4/mulai/16.png";
	$button = "<img class='img-responsive gallery-img' src='fsjan/produk/sesi4/mulai/b15.png'> ";
	$link = "https://www.chandrakarya.com/featured-products/1533-lemari-pakaian-ck-3-pintu-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'cover160') {	// Untuk categori qty
	$gambar = "fsjan/produk/sesi4/mulai/k.png";
	$button = "<img class='img-responsive gallery-img' src=''> ";
	$link = "https://www.chandrakarya.com/featured-products/977-special-price-king-koil-world-endorsed-full-set.html";

}  elseif ($_GET['voucher'] == 'cover180') {	// Untuk categori qty
	$gambar = "fsjan/produk/sesi4/mulai/kk.png";
	$button = "<img class='img-responsive gallery-img' src=''> ";
	$link = "https://www.chandrakarya.com/featured-products/977-special-price-king-koil-world-endorsed-full-set.html";

}  elseif ($_GET['voucher'] == 'cover200') {	// Untuk categori qty
	$gambar = "fsjan/produk/sesi4/mulai/kkk.png";
	$button = "<img class='img-responsive gallery-img' src=''> ";
	$link = "https://www.chandrakarya.com/featured-products/977-special-price-king-koil-world-endorsed-full-set.html";
} 



echo "
<a href='index' class='btn btn-success btn-lg'>Halaman Utama</a>
<center><h3>Selamat Bapak/Ibu " . $_GET['nama'] . ", Anda Mendapatkan <br></h3>
<img src='" . $gambar . "' class='img-responsive gallery-img'>
" . $button . "
<div class='caption'><br>
<span class='kupon'>KODE KUPON : " . $_GET['kode'] . "</span>
<br>
<div style='clear:both'><br></div>
<center class='info'>* HARAP CATAT/SCREENSHOT KODE KUPON SEBELUM MELANJUTKAN KE HALAMAN SELANJUTNYA</center>
<div style='clear:both'><br></div>
";
if ($link != "#") {
	echo "
		<div class='hp'>
	<center>
		<div class='col-xs-6'>
			
		</div>
		<div class='col-xs-6'>
			<a class='btn btn-success' href='https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya%20Saya%20Mau%20Belanja%20" . $_GET['produk'] . "%20Dengan%20Voucher%20*" . $_GET['kode'] . "*' >Belanja Via Whatsapp</a></center>
		</div>
	</center>
	</div>

	<div class='pc'>
	<center>
			
			<a class='btn btn-success btn-lg' href='https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya%20Saya%20Mau%20Belanja%20*" . $_GET['produk'] . "*%20Dengan%20Voucher%20*" . $_GET['kode'] . "*' >Belanja Via Whatsapp</a></center>
	</center>
	</div>
	<div style='clear:both'><br></div>

	<div class='container'>
	<span class='sk'>
	Syarat & Ketentuan
	<ul>
	<li>Kupon Potongan Langsung sementara hanya berlaku untuk pembelanjaan secara offline, dan melalui pesan whatsapp nomer resmi kami.</li>
	<li>Hanya tersedia 5 kuota kupon Potongan Langsung untuk masing-masing produk dan tidak berlaku jika kuota sudah habis.</li>
	<li>Segera klaim kupon yang telah anda dapatkan, dan beritahu tim kami tentang detail item dan ukuran yang diinginkan(khusus untuk springbed).</li>
	<li>Apabila sistem menyatakan Kupon Error atau Sudah Terpakai, bisa ditanyakan kepada CS melalui Call/Whatsapp.</li>
	<li>1(satu) Kupon Potongan Langsung hanya berlaku untuk 1(satu) kali transaksi.</li>
	<li>Kupon dianggap sudah terpakai apabila pembayaran lunas sudah terkonfirmasi.</li>
	<li>Kupon Flash Sale tidak berlaku apabila sudah melewati batas waktu dan kuota yang sudah ditentukan.</li>
	<li>CSO Chandra Karya hanya di nomor hp <a href='https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya'>0899 0021 020,</a> di luar daripada itu harap konfirmasi dulu dengan nomor resmi untuk mencegah penyalahgunaan.</li>
	</ul>
	</span>
	";
} else {

	echo "
	<div class='container'>
	<span class='sk'>
	Syarat & ketentuan
	<ul>
	<li>Kupon Potongan Langsung berlaku untuk pembelanjaan secara offline dan online.</li>
	<li>Syarat mendapatkan Kupon Divan Ohio Rp 900.000 dengan membeli Springbed tipe apa saja (KECUALI CHIRO ENDORSED) dengan ukuran 160x200, 180x200, 200x200
	<br>Segera klaim kupon yang telah anda dapatkan.
	<br>Apabila sistem menyatakan kupon sudah terpakai.bisa ambil kupon terbaru apabila ada stok.
	</li>
	<li>1 (satu) Kupon Potongan Langsung hanya berlaku untuk 1(satu) kali transaksi.</li>
	<li>Kupon dianggap sudah terpakai apabila pembayaran lunas sudah terkonfrimasi.</li>
	<li>Kupon Flash Sale tidak berlaku apabila sudah melewati bayas waktu dan kuota yang sudah ditentukan.</li>
	<li> CSO Chandra Karya hanya nomor hp <a href='https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya'>0899 0021 020,</a> di luar daripada itu harap konfirmasi dulu dengan nomor resmi untuk mencegah penyalahgunaan.</li>
	</ul>
	</span>
	";
}

echo "
<p class='info'>
Dengan mengikuti promo ini, customer dianggap mengerti dan menyetujui semua Syarat & Ketentuan yang berlaku. 
</span>
<br>
<span class='info'>
* Chandra Karya berhak mengubah Syarat & Ketentuan tanpa pemberitahuan lebih dulu.
</span>
";
?>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
const galleryImage = document.querySelectorAll('.gallery-img');
galleryImage.forEach((img, i)=>
 {
img.dataset.aos = 'zoom-in';
img.dataset.aosDelay = i * 100;
 })
    AOS.init({
		once : true,
		duration : 2000,
	});
  </script>