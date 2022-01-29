<html>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Flash Sale</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

	<!-- My CSS -->
	<link rel="stylesheet" href="asset/style.css">

	<title>FLASHSALE</title>
</head>
<style>
   .button {
    text-transform: lowercase;
    margin-right: 5px 0;
    font-weight: bold;
	margin-top: 5px;
	margin-bottom: 10px;
  }

  .button:hover::after {
    content: "";
    display: block;
    border-bottom: 2px solid #0b63dc;
    width: 75%;
    margin: auto;
    padding-bottom: 5px;
    margin-bottom: -8px;
	background-color: red;
  }

  .gallery-img {
	  width: 100%;
  }


</style>

<body>
	<br>
<center>
	<img src="fsjan/tombol/sc3.png" class="img-fluid" style="margin-bottom: 12.5px;">
	</center>
	<div class="container">
		
	<div class='row'>
		
		<div class='col-lg-6'>
			<img src='fsjan/produk/sesi4/mulai/1.png' class='img-fluid gallery-img'>
			<img src='fsjan/produk/sesi4/mulai/fs.png' class='img-fluid gallery-img'>
		</div>
		<div class='col-lg-6'>
			<img src='fsjan/produk/sesi4/mulai/2.png' class='img-fluid gallery-img'>
			<img src='fsjan/produk/sesi4/mulai/fs.png' class='img-fluid gallery-img'>
		</div>
		<div class='col-lg-6'>
			<img src='fsjan/produk/sesi4/mulai/3.png' class='img-fluid gallery-img'>
			<img src='fsjan/produk/sesi4/mulai/fs.png' class='img-fluid gallery-img'>
		</div>
		<div class='col-lg-6'>
			<img src='fsjan/produk/sesi4/mulai/4.png' class='img-fluid gallery-img'>
			<img src='fsjan/produk/sesi4/mulai/fs.png' class='img-fluid gallery-img'>
		</div>
		<div class='col-lg-6'>
			<img src='fsjan/produk/sesi4/mulai/5.png' class='img-fluid gallery-img'>
			<img src='fsjan/produk/sesi4/mulai/fs.png' class='img-fluid gallery-img'>
		</div>
		<div class='col-lg-6'>
			<img src='fsjan/produk/sesi4/mulai/6.png' class='img-fluid gallery-img'>
			<img src='fsjan/produk/sesi4/mulai/fs.png' class='img-fluid gallery-img'>
		</div>
		<div class='col-lg-6'>
			<img src='fsjan/produk/sesi4/mulai/7.png' class='img-fluid gallery-img'>
			<img src='fsjan/produk/sesi4/mulai/fs.png' class='img-fluid gallery-img'>
		</div>
		<div class='col-lg-6'>
			<img src='fsjan/produk/sesi4/mulai/8.png' class='img-fluid gallery-img'>
			<img src='fsjan/produk/sesi4/mulai/fs.png' class='img-fluid gallery-img'>
		</div>
		<div class='col-lg-6'>
			<img src='fsjan/produk/sesi4/mulai/9.png' class='img-fluid gallery-img'>
			<img src='fsjan/produk/sesi4/mulai/fs.png' class='img-fluid gallery-img'>
		</div>
		<div class='col-lg-6'>
			<img src='fsjan/produk/sesi4/mulai/10.png' class='img-fluid gallery-img'>
			<img src='fsjan/produk/sesi4/mulai/fs.png' class='img-fluid gallery-img'>
		</div>
		<div class='col-lg-6'>
			<img src='fsjan/produk/sesi4/mulai/11.png' class='img-fluid gallery-img'>
			<img src='fsjan/produk/sesi4/mulai/fs.png' class='img-fluid gallery-img'>
		</div>
		<div class='col-lg-6'>
			<img src='fsjan/produk/sesi4/mulai/12.png' class='img-fluid gallery-img'>
			<img src='fsjan/produk/sesi4/mulai/fs.png' class='img-fluid gallery-img'>
		</div>
		<div class='col-lg-6'>
			<img src='fsjan/produk/sesi4/mulai/13.png' class='img-fluid gallery-img'>
			<img src='fsjan/produk/sesi4/mulai/fs.png' class='img-fluid gallery-img'>
		</div>
		<div class='col-lg-6'>
			<img src='fsjan/produk/sesi4/mulai/14.png' class='img-fluid gallery-img'>
			<img src='fsjan/produk/sesi4/mulai/fs.png' class='img-fluid gallery-img'>
		</div>
		<div class='col-lg-6'>
			<img src='fsjan/produk/sesi4/mulai/15.png' class='img-fluid gallery-img'>
			<img src='fsjan/produk/sesi4/mulai/fs.png' class='img-fluid gallery-img'>
		</div>	
		<div class='col-lg-6'>
			<img src='fsjan/produk/sesi4/mulai/16.png' class='img-fluid gallery-img'>
			<img src='fsjan/produk/sesi4/mulai/fs.png' class='img-fluid gallery-img'>
		</div>	
	</div>
	<br>
	<br>
	
	<center>
			<a href="index">
				<button type="submit" class="button">Back</button>
			</a>
		
	</center>
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
</body>

</html>