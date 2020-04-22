<!DOCTYPE html>
<html>
<head>
    <title>INDOMOVIE</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mogra&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php include 'cek-login.php'; ?>
<body style="background: linear-gradient(to bottom,rgba(0, 0, 0, 0.8) 0,rgb(0, 0, 0) 100%), url('image/Y44zYKKNbBtzAWfzPBLFhC-1200-80.jpg');background-repeat: no-repeat;background-size: cover;">
    
    <section id="nav-bar">
    
        <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="account.php">INDOMOVIE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Best Rating</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Serial TV
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color:black">
              <a class="dropdown-item" href="#">Asia</a>
              <a class="dropdown-item" href="#">Amerika</a>
              <a class="dropdown-item" href="#">Eropa</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Genre
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color:black">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Adventure</a>
              <a class="dropdown-item" href="#">Animation</a>
            </div>
          </li>
        </ul>
    </div>
      </div>
    </nav>
        </section>       
        
        <div id="card"> 
          <div id="card-content">
          <div id="card-title">
            <h3>PERHATIAN</h3>
            <div class="underline-title"></div>
          </div>
          <h6>
          <?php
          echo"Selamat Datang ".$_SESSION['username']; echo". Terima Kasih sudah berlangganan, Kami mohon kebijakannya dalam menanggapi film-film yang ada di situs ini. Salam hormat, INDOMOVIE Team, Terima Kasih";
          ?>
        </h6>
        </div>
        </div>
        <section id="home">
          <div class="container">
            <h1 class="titlee text-center">INDOMOVIE STREAMING SITE</h1>
            <p>
            <h5 class="title text-center">Selamat Datang di Website INDOMOVIE. Disini kami menyediakan layanan Streaming</h5>
            <p>
            <h5 class="title text-center">dan Download Film dengan kualitas tinggi!</h5>    
          </div>
        </section>

        <section id="film">
          <div class="a">
            <div class="container">
              <div class="row text-center">
                <div class="col-md-2″>.col-md-2 box">
                    <a href="http://localhost/film/enmen.html" class="font">
                  <img src="poster/unnamed.jpg" class="poster-img">
                  <h5>Ant-Man</h5>
                  </a>
                </div>
                <div class="col-md-2″>.col-md-2 box">
                    <a href="http://localhost/film/blackpnthr.html" class="font">
                  <img src="poster/blackpnthr.jpg" class="poster-img">
                  <h5>Black Panther</h5>
                </a>
                  </div>
                <div class="col-md-2″>.col-md-2 box">
                  <a href="http://localhost/film/venom.html" class="font">
                  <img src="poster/venom.jpg" class="poster-img">
                  <h5>Venom</h5>
                </a>
                </div>
                <div class="col-md-2″>.col-md-2 box">
                    <a href="http://localhost/film/coco.html" class="font">
                    <img src="poster/coco.jpg" class="poster-img">
                    <h5>Coco</h5>
                    </a>
                </div>
                <div class="col-md-2″>.col-md-2 box">
                    <a href="http://localhost/film/cptmarvel.html" class="font">
                      <img src="poster/CaptainMarvelPoster2019.jpg" class="poster-img">
                      <h5>Captain Marvel</h5>
                      </a>
                </div>
                <div class="col-md-2″>.col-md-2 box">
                    <a href="http://localhost/film/thenun.html" class="font">
                    <img src="poster/TheNunPoster.jpg" class="poster-img">
                    <h5>The Nun</h5>
                    </a>
                </div>
                <div class="col-md-2″>.col-md-2 box">
                    <a href="http://localhost/film/firstavenger.html" class="font">
                  <img src="poster/Captain_America_The_First_Avenger_poster.jpg" class="poster-img">
                  <h5>Captain America: <p>The First Avenger</h5>
                  </a>
                </div>
                <div class="col-md-2″>.col-md-2 box">
                    <a href="http://localhost/film/wwz.html" class="font">
                  <img src="poster/world war z.jpg" class="poster-img">
                  <h5>World War Z</h5>
                </a>
                  </div>
                <div class="col-md-2″>.col-md-2 box">
                  <a href="http://localhost/film/wintersldr.html" class="font">
                  <img src="poster/winter_soldier.jpg" class="poster-img">
                  <h5>Captain America:<p>The Winter Soldier</h5>
                </a>
                </div>
                <div class="col-md-2″>.col-md-2 box">
                    <a href="http://localhost/film/boboiboy.html" class="font">
                    <img src="poster/boboiboy.jpg" class="poster-img">
                    <h5>BoBoiBoy <p>Movie 2</h5>
                    </a>
                </div>
                <div class="col-md-2″>.col-md-2 box">
                    <a href="http://localhost/film/im3.html" class="font">
                      <img src="poster/Iron_Man_3_theatrical_poster.jpg" class="poster-img">
                      <h5>Iron Man 3</h5>
                      </a>
                </div>
                <div class="col-md-2″>.col-md-2 box">
                    <a href="http://localhost/film/civilwar.html" class="font">
                    <img src="poster/civilwar.jpg" class="poster-img">
                    <h5>Captain America:<p>Civil War</h5>
                    </a>
                </div>
                <div class="col-md-2″>.col-md-2 box">
                    <a href="http://localhost/film/jl.html" class="font">
                  <img src="poster/jl.jpg" class="poster-img">
                  <h5>Justice<p> League</h5>
                  </a>
                </div>
                <div class="col-md-2″>.col-md-2 box">
                    <a href="http://localhost/film/dpm2.html" class="font">
                  <img src="poster/dpm2.jpg" class="poster-img">
                  <h5>Despicable <p>Me 2</h5>
                </a>
                  </div>
                <div class="col-md-2″>.col-md-2 box">
                  <a href="http://localhost/film/ffh.html" class="font">
                  <img src="poster/ffh.jpg" class="poster-img">
                  <h5>Spider-Man:<p>Far From Home</h5>
                </a>
                </div>
                <div class="col-md-2″>.col-md-2 box">
                    <a href="http://localhost/film/lk.html" class="font">
                    <img src="poster/lionking.jpg" class="poster-img">
                    <h5>The Lion King</h5>
                    </a>
                </div>
                <div class="col-md-2″>.col-md-2 box">
                    <a href="http://localhost/film/dp2.html" class="font">
                      <img src="poster/dedpul2.jpg" class="poster-img">
                      <h5>Deadpool 2</h5>
                      </a>
                </div>
                <div class="col-md-2″>.col-md-2 box">
                    <a href="http://localhost/film/bb.html" class="font">
                    <img src="poster/bb.jpg" class="poster-img">
                    <h5>Bad Boys<p>for Life</h5>
                    </a>
                </div>
              </div>
            </div>
            </div>
          </section>
        
        

</body>
</html>


