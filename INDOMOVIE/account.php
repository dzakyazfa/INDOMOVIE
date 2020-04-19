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
    <script src="assets/js/jquery.js"></script> 
    <script src="assets/js/popper.js"></script> 
    <script src="assets/js/bootstrap.js"></script>
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
            <a href="indexxx.php"><img src="image/play.png" class="play-btn">INDOMOVIE</a>
          </div>
          <div class="col-md-6 text-center">
            <img src="image/film.png" class="img-log">
          </div>
        </div>
      </div>
      <img src="image/oo.png" class="bottom-img">
    </section>

    <section id="indomovie">
      <div class="container">
        <h1 class="titlee text-center">INDOMOVIE</h1>
        <div class="row">
          <div class="col-md-6 sejarah">
            <p class="sej-title">Tentang Kami</p>
            <p>INDOMOVIE adalah situs streaming dan download film. Kami membuat situs ini agar masyarakat indonesia terhibur dan tidak nolep. Maap yak kalau film nya bajakan awoakwaok. Salam, INDOMOVIE Team </p>
          </div>
          <div class="col-md-6 poto">
            <img src="image/video.png" class="image-fluid">
          </div>
        </div>
      </div>
    </section>

    <!--Fav-->
    <section id="favorite">
      <div class="container">
        <h1 class="titlee text-center">FAVORITE</h1>
        <div class="row">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="poster/venom.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>Venom</h5>
        <p>2018</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="poster/blackpnthr.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>Black Panther</h5>
        <p>2018</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
      </div>
    </section>
    <!--Logout-->
    <section id="logout">
      <div class="container text-center">
        <p>LOGOUT</p>
        <a href="logout.php" class="btn">Logout</a>
      </div>
    </section>

    <!--akhir-->
    <section id="footer">
      <img src="image/ombak.png" class="footer-img">
      <div class="container">
        <div class="row">
          <div class="col-md-4 footer-box">
            <p></p>
          </div>
          <div class="col-md-4 footer-box">
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
