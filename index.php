<html>

<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    include "koneksi103.php";
    date_default_timezone_set('Asia/Jakarta');
    $jam = date('yjHi'); //TahunTanggalJamMenit
    $hari = date('ymj'); //TahunBulanTanggal
    // $hari = 220130;
    // $jam = 22301000;  //di bawah jam 10
    ?>
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="asset/style.css">
    <style>
    .imeg {
    padding-bottom: 5px;
    }
  
    </style>

    <title>FLASH SALE</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container" data-aos="zoom-in" >
            <a class="navbar-brand pKiri" href="index"><img src="fsjan/basic/logock.png" style="width: 240px;" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto pKanan">
                    <a class="nav-item nav-link" href="bazaarindex">Event</a>
                    <a class="nav-item nav-link" href="https://www.chandrakarya.com/59-clearance-sale">Clearance Sale</a>
                    <a class="nav-item nav-link" href="fspromo">Promo Lainnya</a>
                    <a class="nav-item nav-link" href="faq">F.A.Q</a>
                    <a class="nav-item nav-link" href="video">VIDEO</a>
                </div>
            </div>
            </div>
    </nav>

    <!-- akhir Navbar -->
    <!-- Jumbotron -->
    <div class='gatas'></div>
    <center>
        <ul style="position: absolute;top: 12%;width: 85%;" class="text-center">
            <li class='tinfo'><span id="fs"></span></li>
            <li class='timing'><span id="days"></span>&nbsp;DAYS&nbsp;</li>
            <li class='timing'><span id="hours"></span>&nbsp;Hours&nbsp;</li>
            <li class='timing'><span id="minutes"></span>&nbsp;Minutes&nbsp;</li>
            <li class='timing'><span id="seconds"></span>&nbsp;Seconds&nbsp;</li>
        </ul>
    </center>
 
    <center>
        
        <img src='fsjan/basic/index2.png' class='img-fluid' ></center>
   
    
    <center><h2 class="" data-aos="fade-up">FLASH SALE CHANDRA KARYA</h2>
<p class="word-1" data-aos="fade-up" data-aos-delay="50">FLASH SALE Chandra Karya menghadirkan BRANDED SPRINGBED, SOFA dan FURNITURE dengan penawaran EKSTRA MURAH jaminan produk baru bergaransi resmi yang kami hadirkan dengan kuota terbatas.</p>
<p class="word-1" data-aos="fade-up" data-aos-delay="100">Hanya untuk 5 TRANSAKSI TERCEPAT di seluruh gerai Chandra Karya mulai pukul 10.00 WIB.</P>
<p class="word-1" data-aos="fade-up" data-aos-delay="150">FLASH SALE akan dilaksanakan setiap Sabtu & Minggu pada tanggal [8], [9], [15], [16], [22], [23], [29], dan [30] Januari 2022 jaminan produk baru bergaransi resmi. Pastikan Anda tidak melewatkan produk incaran Anda!</P></center>

    
    <!-- akhir jumbotron -->
    <!-- /<a href="https://www.chandrakarya.com/">www.chandrakarya.com</a> -->

    <!-- kupon sekarang -->
    <section id="sekarang">

    <p class='infoklik' data-aos="fade-up" data-aos-delay="200" > KUPON BERLAKU SEKARANG</p>
    <div class="col-lg-12"></div>
    <center>
        <!-- <div class="row" data-aos="fade-up" data-aos-delay="250">
            <div class="col-lg-6">
                <a href="#"><img src="fsjan/produk/sesi3/mulai/k.png" class="img-fluid imeg"></a>
            </div>
        
            <div class="col-lg-6">
                <a href="#"><img src="fsjan/produk/sesi3/mulai/kk.png" class="img-fluid imeg"></a>
            </div>
       
            <div class="col-lg-6">
                <a href="#"><img src="fsjan/produk/sesi3/mulai/kkk.png" class="img-fluid imeg"></a>
            </div>
             -->
            <!-- <img src="fsjan/tombol/s3.png" class="img-fluid imeg" style="padding-bottom: 5px;"> -->

            <!-- <div style="clear:both"><br></div> -->
      
        <div class="row" data-aos="fade-up" data-aos-delay="300">
            <?php

            $select = mysqli_query($conn, "select *from produk where wktshow <= $hari && wktdown >= $hari"); // mengambil produk yang memenuhi syarat
            if (mysqli_num_rows($select) == 0) {
                // Jika $select Tidak ditemukan
            } else {
                while ($query = mysqli_fetch_array($select)) {

                    if ($jam < $query["wktshowjam"]) { //list produk hari ini TAPI belum jam 10:00

                        // setting LINK untuk produk dengan kategori springbed 
                        if ($query["category"] == "springbed") {
                            $a = "<a href='spring/list?&brand=" . $query['kodeproduk'] . "'>";
                        } else {
                            $a = '</a>';
                        }
                        echo '     
                                
		<div class="col-lg-6">
			' . $a . '
			<img src="fsjan/produk/' . $query["imgproduk"] . '" class="img-fluid imeg">
			<img src="fsjan/produk/' . $query["imgbutton"] . '" class="img-fluid imeg">
		</div>
		';
                    } else if (($jam >= $query["wktshowjam"] && $jam < $query["wktdownjam"]) && $query["stock"] >= 1) { // menampilkan produk yang memenuhi syarat dan stock lebih dari 0

                        // setting untuk produk springbed dan non
                        if ($query["category"] == "springbed") {
                            $a = "<a href='spring/kupon?&brand=" . $query['kodeproduk'] . "'>";
                        } else {
                            $a = "<a href='spring/quality?&brand=" . $query['kodeproduk'] . "'>";
                        }
                        echo '
		<div class="col-lg-6">
			' . $a  . '
			<img src="fsjan/produk/' . $query["imgprodukmulai"] . '" class="img-fluid imeg">
			<img src="fsjan/produk/' . $query["imgbuttonmulai"] . '" class="img-fluid imeg">
		</div>
		';
                    } else if ($query["stock"] == 0) { // jika stock adalah 0
                        echo '
		<div class="col-lg-6">
			<img src="fsjan/produk/' . $query["imgproduk"] . '" class="img-fluid imeg">
			<img src="fsjan/produk/' . $query["imgbuttonsold"] . '" class="img-fluid imeg">
		</div>
		';
                    } else {
                    }
                }
            }
            ?></a>
        </div>
       
       
    </center>
    
    <!-- kupon berlaku akan datang -->
    <div style="clear:both">
    <br>
</div>
<section id="akan">
   
    <p class='berlakuklik' data-aos="fade-up" data-aos-delay="350"> KUPON YANG AKAN DATANG</p>
    <!-- <div class="col-sm-12" id="menu"> -->
    <div class="col-sm-12">
      <center>
          <div class="container"></div>
      <div class="row" data-aos="fade-up" data-aos-delay="400">
        <?php
        if ($hari <= 210107) {
            echo '       
      <div class="col-lg">
	<img src="fsjan/tombol/s1.png" class="img-fluid imeg" style="margin-bottom: 12.5px;">
	</div>
	';
        } else {
        }

        if ($hari <= 220115) {
            echo '
	<div class="col-lg-6">
	<img src="fsjan/tombol/s2.png" class="img-fluid imeg" style="margin-bottom: 12.5px;">
	</div>
	';
        } else {
        }

        if ($hari <= 220123) {
            echo '
	<div class="col-lg-6">
	<img src="fsjan/tombol/s3.png" class="img-fluid imeg" style="margin-bottom: 12.5px;">
	</div>
	';
        } else {
        }

        if ($hari <= 220129) {
            echo '
  <div class="col-lg">
	<img src="fsjan/tombol/s4.png" class="img-fluid imeg" style="margin-bottom: 12.5px;">
	</div>
	';
        } else {
        }

        ?>
        </center>
    </div>


    <div class="row" style="padding-left: 40px;" data-aos="fade-up" data-aos-delay="450">
    <?php
    $tampil = mysqli_query($conn, "select *from produk where sesi = 4");
    if (mysqli_num_rows($tampil) == 0) {
        // Jika $select Tidak ditemukan
    } else {
        while ($produk = mysqli_fetch_array($tampil)) {

            if ($produk["wktshow"] > $hari) {
                // setting LINK untuk produk dengan kategori springbed 
                if ($produk["category"] == "springbed") {
                    $a = "<a href='spring/list?&brand=" . $produk['kodeproduk'] . "'>";
                } else {
                    $a = '';
                }

                echo '
              <div class="col-lg-6">
                ' . $a . '
                <img src="fsjan/produk/' . $produk["imgproduk"] . '" class="img-fluid imeg">
                <img src="fsjan/produk/' . $produk["imgbutton"] . '" class="img-fluid imeg">
                <br>
                </a>
              </div>
             
              ';
            } else {
            }
        }
    }


    ?>
    </div>
   
    </section>
    <!-- kupon sudah berlalu -->
    <div style="clear:both"><br></div>
    <section id="lalu">
    <p class='sudahklik' data-aos="fade-up" data-aos-delay="500"> KUPON YANG SUDAH BERLALU</p>
    <div class="col-sm-12">
        <center>
        <div class="row" data-aos="fade-up" data-aos-delay="550">
            <?php
            if ($hari >= 220110) {
                echo '
        <div class="col-lg-6">
	<a href="d1">
    <img src="fsjan/tombol/sc1.png" class="img-fluid imeg " style="margin-bottom: 5px;">
    </a>
	</div>
	';
            } else {
            }

            if ($hari >= 220119) {
                echo '

        <div class="col-lg-6">
	<a href="d2">
    <img src="fsjan/tombol/sc2.png" class="img-fluid imeg " style="margin-bottom: 5px;">
    </a>
	</div>
	';
            } else {
            }

            if ($hari >= 220126) {
                echo '

        <div class="col-lg-6">
	<a href="d3">
    <img src="fsjan/tombol/sc3.png" class="img-fluid imeg " style="margin-bottom: 5px;">
    </a>
	</div>
	';
            } else {
            }

            if ($hari >= 220201) {
                echo '
        <div class="col-lg-6">
	<a href="d4">
    <img src="fsjan/tombol/sc4.png" class="img-fluid imeg " style="margin-bottom: 5px;">
    </a>
	</div>
	';
            
            } else {
            }

            ?>
        </center>
    </div>
        </div>
    </section>
    <br>



    </div>

    
    <div style='clear:both'><br></div>
    <center><a href="https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya"><img src='fsjan/basic/kontak.png' class='img-fluid imeg' data-aos="fade-up" data-aos-delay="600"></a></center>
    <br>



    <footer data-aos="fade-up" data-aos-delay="650">
        <?php include('footer.php') ?>
    </footer>
    


    <!-- Optional JavaScript -->
    <script type="text/javascript" src="jquery-1.2.3.pack.js"></script>
    <!-- countdown time -->
    <script>
        $(function() {
            $('#menu a').click(function() {
                var url = $(this).attr('href');
                $('#container').load(url);
                return false;
            });

        });

        $(function() {
            $('#selesai a').click(function() {
                var url = $(this).attr('href');
                $('#sscontainer').load(url);
                return false;
            });

        });



        // Set the date we're counting down to
        var countDownDate = new Date("JAN 30, 2022 21:00:00").getTime();
        var countupDate = new Date("MAR 5 , 2022 10:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;
            var next = countupDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            var ndays = Math.floor(next / (1000 * 60 * 60 * 24));
            var nhours = Math.floor((next % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var nminutes = Math.floor((next % (1000 * 60 * 60)) / (1000 * 60));
            var nseconds = Math.floor((next % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("fs").innerHTML = "FLASH SALE <br> SEDANG DIMULAI";
            document.getElementById("days").innerHTML = days + "";
            document.getElementById("hours").innerHTML = hours + "";
            document.getElementById("minutes").innerHTML = minutes + "";
            document.getElementById("seconds").innerHTML = seconds + "";

            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("fs").innerHTML = "FLASH SALE <br> AKAN DIMULAI";
                document.getElementById("days").innerHTML = ndays + "";
                document.getElementById("hours").innerHTML = nhours + "";
                document.getElementById("minutes").innerHTML = nminutes + "";
                document.getElementById("seconds").innerHTML = nseconds + "";
                // document.getElementById("days").innerHTML = " - ";
                // document.getElementById("hours").innerHTML = " - ";
                // document.getElementById("minutes").innerHTML = " - ";
                // document.getElementById("seconds").innerHTML = " - ";
            }
        }, 1000);
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
            AOS.init(
                {
		        once : true,
		        duration : 2000,
	             });
    </script>
</body>

</html>