<?php
include("fsheader.php");
?>
<style>
    hr {
        width: 50%;
        
    }
</style>
<body>
    <hr>
    <div class="bannerdepan"></div>
    <br>
    <p class="kategori">Pilihan Kategori</p>

    <center>
        <div class="row lelang">
            <div class="container">
                <br>
                <a href="index"><img src="bazaar/basic/logofs2.png" class="img-fluid"></a>
                <p class="timer" id="demo"></p>
            </div>
        </div>
<hr>
        <br>

        <div class="row lelang">
            <div class="container">
                <br>
                <a href="suasana"><img src="bazaar/basic/logoll.png" class="img-fluid"></a>
                <h2><a href="suasana">Suasana Lelang Chandra Karya Jilid 9</a></h2>
         
        

        <div class="row lelang">
            <div class="col-lg-4">
                <img src="bazaar/lelang/basic/10.png" class="img-fluid">
            </div>
            <div class="col-lg-4">
                <img src="bazaar/lelang/basic/11.png" class="img-fluid">
            </div>
            <div class="col-lg-4">
                <img src="bazaar/lelang/basic/12.png" class="img-fluid">
            </div>

            <div class="container">
                <br>
                <a href="lelang" class="link"> <u> >> Klik Disini Untuk Melihat Produk Lelang Lainnya << </u></a>
                <p></p>
            </div>

        </div>
<br>
        <center>
          
          <hr>
            <p><a href="suasana"><img class="img-fluid" src="bazaar/basic/suasana.png" style="width: 100%;"></a></p>
           
            <br>
        </center>
<br> <hr>
        <?php
        include("fsfooter.php");
        ?>
        <hr>
        <footer>
        <?php include('footer.php') ?>
    </footer>
</body>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("DEC 12, 2021 15:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("lelang").innerHTML = "Lelang Akan Dimulai " + days + "H : " + hours + "J : " +
            minutes + "M : " + seconds + "D ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("lelang").innerHTML = "Lelang Selesai";
        }
    }, 1000);

    // Set the date we're counting down to
    var countDownDates = new Date("JAN 22, 2022 10:00:00").getTime();
    var countDownDatess = new Date("JAN 25, 2022 21:00:00").getTime();

    // Update the count down every 1 second
    var y = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDates - now;
        var distances = countDownDatess - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = "FlashSale Akan Dimulai " + days + "H : " + hours + "J : " +
            minutes + "M : " + seconds + "D ";

        // If the count down is over, write some text
        if (distance < 0) {
            var dayss = Math.floor(distances / (1000 * 60 * 60 * 24));
            var hourss = Math.floor((distances % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutess = Math.floor((distances % (1000 * 60 * 60)) / (1000 * 60));
            var secondss = Math.floor((distances % (1000 * 60)) / 1000);
            clearInterval(x);
            document.getElementById("demo").innerHTML = "Flashsale Sedang Dimulai " + dayss + "H : " + hourss + "J : " +
                minutess + "M : " + secondss + "D ";
        }
    }, 1000);
</script>

</html>