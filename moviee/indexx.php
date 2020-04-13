<!DOCTYPE html>
<html>
<head>
    <title>INDOMOVIE-ACCOUNT</title>
    <link rel="stylesheet" type="text/css" media="screen" href="account.css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins|Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mogra&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php include 'cek-login.php'; ?>
<body>
    <section id="nav-bar">
    
    <nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#top">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#indomovie">INDOMOVIE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#favorite">FAVORITE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#logout">LOGOUT</a>
      </li>
    </ul>
</div>
  </div>
</nav>
    </section>

    <!--banner section-->
    <section id="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="title">INDOMOVIE</p>
            <p class="isi"><?php echo "Selamat Datang ".$_SESSION['username']; echo" Dengan menjadi member, kamu bisa mendapatkan akses ke halaman ini, terima kasih atas kepercayaannya untuk menggunakan situs kami. Salam Hormat, INDOMOVIE Team";  ?></p>
            <a href="index.php"><img src="image/play.png" class="play-btn">INDOMOVIE</a>
          </div>
          <div class="col-md-6 text-center">
            <img src="image/film.png" class="img-log">
          </div>
        </div>
      </div>
      <img src="image/oo.png" class="bottom-img">
    </section>

    <!--VISI MISI-->

    <section id="indomovie">
      <div class="container text-center">
        <h1 class="titlee">VISI MISI</h1>
        <div class="row text-center">
          <div class="col-md-4 vm">
            <img src="image/kisspng-statistics-indonesia-organization-bps-kabupaten-pa-foxit-reader-5b0775745172c7.0901421315272154763336.png" class="visi-img">
            <h4>Visi</h4>
            <p>Pelopor data statistik terpercaya untuk semua</p>
          </div>
          <div class="col-md-4 vm">
            <img src="image/1.png" class="power-img">
          </div>
          <div class="col-md-4 vm">
            <img src="image/kisspng-statistics-indonesia-organization-bps-kabupaten-pa-foxit-reader-5b0775745172c7.0901421315272154763336.png" class="misi-img">
            <h4>Misi</h4>
            <p>1. Menyediakan data statistik berkualitas melalui kegiatan statistik yang terintegrasi dan berstandar nasional maupun internasional.
              
              2. Memperkuat Sistem Statistik Nasional yang berkesinambungan melalui pembinaan dan koordinasi di bidang statistik
              
              3. Membangun insan statistik yang profesional, berintegritas dan amanah untuk kemajuan perstatistikan</p>
          </div>
        </div>
      </div>
    </section>

    <!--sejarah-->
    <section id="favorite">
      <div class="container">
        <h1 class="titlee text-center">SEJARAH KAMI</h1>
        <div class="row">
          <div class="col-md-6 sejarah">
            <p class="sej-title">HISTORY</p>
            <p>Badan Pusat Statistik adalah Lembaga Pemerintah Non Kementerian yang bertanggung jawab langsung kepada Presiden. Sebelumnya, BPS merupakan Biro Pusat Statistik, yang dibentuk berdasarkan UU Nomor 6 Tahun 1960 tentang Sensus dan UU Nomer 7 Tahun 1960 tentang Statistik. Sebagai pengganti kedua UU tersebut ditetapkan UU Nomor 16 Tahun 1997 tentang Statistik. Berdasarkan UU ini yang ditindaklanjuti dengan peraturan perundangan dibawahnya, secara formal nama Biro Pusat Statistik diganti menjadi Badan Pusat Statistik.</p>
          </div>
          <div class="col-md-6 poto">
            <img src="image/asik.png" class="imagae-fluidd">
          </div>
        </div>
      </div>
    </section>
    <!--contact-->
    <section id="logout">
      <div class="container text-center">
        <p>SOCIAL MEDIA</p>
        <a href="logout.php">Logout</a>
      </div>
    </section>

    <!--akhir-->
    <section id="footer">
      <img src="image/ombak.png" class="footer-img">
      <div class="container">
        <div class="row">
          <div class="col-md-4 footer-box">
            <img src="image/kisspng-statistics-indonesia-organization-bps-kabupaten-pa-foxit-reader-5b0775745172c7.0901421315272154763336.png">
            <p>Subscribe Channel YouTube BPS Statistics untuk informasi yang lebih banyak</p>
          </div>
          <div class="col-md-4 footer-box">
            <p><b>HUBUNGI KAMI</b></p>
            <p><i class="fa fa-map-marker"></i> Sawojajar, Malang</p>
            <p><i class="fa fa-phone"></i> +62 85257680411</p>
            <p><i class="fa fa-envelope-o"></i> dzakyazfa@gmail.com</p>
          </div>
        </div>
      </div>
    </section>
    <script src="smooth-scroll.js"></script>
    <script>
      var scroll = new SmoothScroll('a[href*="#"]');
    </script>
</body>
</html>
