<?php include("config.php");?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PORTFOLIO</title>
	<link rel="stylesheet" href="assets/css/style.css" type="text/css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="assets/css/style1.css" type="text/css">
  <link rel="stylesheet" href="assets/AOS/aos-master/dist/aos.css">
</head>
<body class="bg-awal">

<!-- Tittle -->
    <div id="tt" class="zz aos-all aos-item"> 
      <p id="t1" data-aos="fade-down"><b>PORTFOLIO IDE KREASI</b></p>
      <p id="t2" data-aos="fade-up">"Muhamad Lutfi Khakim"</p>
      <p id="t4"><a class="t3" id="t3" href="#content1">Learn More</a></p>
    </div>
<!-- End -->

<!-- Intro -->
	<div id="content1">
        <div class="aos-all aos-item">
		<div id="baca" class="zz">
			<h1 class="judul" data-aos="fade-down">INTRO</h1>
			<hr id="hr1">
			<p id="p-intro" data-aos="zoom-out-in">Assalamu`alaikum Wr Wb.</p>
			<p id="p-intro" data-aos="zoom-in-out">Perkenalkan nama saya Muhamad Lutfi Khakim, saya biasa dipanggil dengan lutfi. Saya lahir tanggal 27 Juni 2001. Saya berasal dari Pasuruan, purwosari. Saya merupakan anak pertama dari 2 bersaudara. Saya memiliki hobi yaitu menonton Anime dan membaca Manga.</p>
		</div>
        
		<div id="liat" class="zz">
			<img id="img-intro" src="assets/img/sd.jpg">
        </div>
            <hr id="hr2">            
        </div>
	</div>


<!-- End -->

<!-- Keahlian -->
<div class="contain" id="content2">
    <div class="aos-all aos-item">
        <div class="galeri">
            <h1 class="judul" data-aos="fade-down">KEAHLIAN</h1>
            <hr id="hr1">
                <center>
                <div class="haha">
                    <img class="image" src="assets/img/html.png" alt="">
                    <div class="overlay">
                        <div class="layover">
                            <div class="text">css 50%</div>
                        </div>
                    </div>
                </div>

                <div class="haha">
                    <img class="image" src="assets/img/cs.png" alt="">
                    <div class="overlay">
                        <div class="layover">
                            <div class="text">css 50%</div>
                        </div>
                    </div>
                </div>

                <div class="haha">
                    <img class="image" src="assets/img/php.png" alt="">
                    <div class="overlay">
                        <div class="layover">
                            <div class="text">css 50%</div>
                        </div>
                    </div>
                <div>
                </center>
                  <hr id="hr3">
                </div>
            </div>
        </div>
      </div>
<!-- End -->

<!-- Galery -->
<div id="galeri">
  <div id="content3">
    <div class="aos-all aos-item">
                <h1 class="judul" data-aos="fade-out">GALERI</h1>
                <hr id="hr1">
                <div class="container" id="kk">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-aos="zoom-in">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                        </ol>
    
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
    
                            <div class="item active">
                                <center>
                                    <img src="assets/img/sakkelas.jpg" alt="Los Angeles" style="height:500px">
                                    <div class="carousel-caption">
                                        <h3>Kelas X RPL</h3>
                                        <p>Rekayasa Perangkat Lunak</p>
                                    </div>
                                </center>
                            </div>
    
                            <div class="item">
                                <center>
                                    <img src="assets/img/kelass.jpg" alt="Chicago" height="500px">
                                    <div class="carousel-caption">
                                        <h3>Perpisahan Wali Kelas X RPl</h3>
                                        <p>Rekayasa Perangkat Lunak</p>
                                    </div>
                                </center>
                            </div>
    
                            <div class="item">
                                <center>
                                    <img src="assets/img/berempat.jpg" alt="New York" style="height:500px;">
                                    <div class="carousel-caption">
                                        <h3>Bromo Adiwiyata</h3>
                                        <p>Adiwiyata SMKN 1 Purwosari</p>
                                    </div>
                                </center>
                            </div>
    
                            <div class="item">
                                <center>
                                    <img src="assets/img/renang1.jpg" alt="New York" style="height:500px;">
                                    <div class="carousel-caption">
                                        <h3>Renang XI RPL</h3>
                                        <p>Rekayasa Perangkat Lunak</p>
                                    </div>
                                </center>
                            </div>
    
                            <div class="item">
                                <center>
                                    <img src="assets/img/kelas.jpg" alt="New York" style="height:500px;">
                                    <div class="carousel-caption">
                                        <h3>Reoni 9H SMP</h3>
                                        <p>9H SMPN 1 Purwosari</p>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div>
                      <hr id="hr4">
                    </div>
                </div>
            </div>
          </div>
        </div>
<!-- End -->

<!-- Comment -->
<div id="kek">
	<form method="POST" action="proses.php">
		<input class="x1" id="x1" type="text" name="nama" placeholder="Nama"><br>
		<input class="x2" id="x2" type="email" name="email" placeholder="Email"><br>
		<input class="x3" id="x3" type="text" name="komentar" placeholder="Comment">
		<input class="x4" id="x4" type="submit" name="kirim" placeholder="Kirim"><br>
	</form>
    <div id="gg"></div>
</div>
<!-- END -->

<!-- Mengeluarkan -->
<div id="content4">
<div id="isi-pesan">
	<?php
		$sql="SELECT * FROM comment";
		$query=mysqli_query($db,$sql);
		while($pesan = mysqli_fetch_array($query)){
			echo "<p class='user'><b>".$pesan['nama']."</b></p>";
            echo "<p class='email'><b>".$pesan['email']."</b></p>";
            echo "<p class='com'><b>".$pesan['komentar']."</b></p>";
            echo "<a class='sub' href='hapus.php?id=".$pesan['id']."'><button>Hapus</button></a>";
            echo "<br><br>";
		}
	?>
    </div>
	</div>
<!-- END -->

<!-- cpr -->
<div id="cpr">
	<p id="p-cpr">Copyright © 2017 by Lutfi</p>
</div>
<!-- END -->

<script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>
            <script type="text/javascript" src="assets/js/bootstrap.js"></script>
            <script type="text/javascript" src="assets/js/js.js"></script>
            <script type="text/javascript" src="assets/js/script.js"></script>
            <script type="text/javascript" src="assets/js/aos.js"></script>
            <script type="text/javascript" src="assets/js/plugin.js"></script>
            <script type="text/javascript" src="assets/AOS/aos-master/dist/aos.js"></script>
            <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>
</body>
</html>