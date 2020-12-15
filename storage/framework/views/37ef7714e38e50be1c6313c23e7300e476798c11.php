<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="css/landing-page.min.css" rel="stylesheet">
    <title>LYC</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a href="\"><img class="navbar-brand" src="<?php echo e(asset('lyc_logo2.png')); ?>" height="70px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
          </ul>
            <?php if(Route::has('login')): ?>
              <?php if(auth()->guard()->check()): ?>
              <span class="navbar-text">
                <a class="nav-link" href="<?php echo e('/dashboard'); ?>">Dashboard</a>
              </span>
              <?php else: ?>
              <span class="navbar-text">
                <a class="nav-link" href="<?php echo e('login'); ?>">Login</a>
              </span>
              <span class="navbar-text">
                <a class="nav-link" href="<?php echo e('daftar'); ?>">Register</a>
              </span>
              <?php endif; ?>
            <?php endif; ?>
        </div>
      </div>
      
    </nav>

    

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <img src="lyc_outline.png" width="350px" height="350px">
          </div>
          <div class="col-xl-9 mx-auto">
            <h4 class="mb-5">Sebuah wadah kolaborasi dan belajar untuk mengembangkan minat dan bakat para siswa Lampung</h4>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-4 mb-2 mb-md-0">
                  <a style="font-weight: 600; border-radius:60px; padding:15px; background: #ffffff;display:inline-block" class="cta-btn align-middle " href="/daftar">Daftar Sekarang</a>
                </div>
                <div class="col-12 col-md-4">
                </div>
                <div class="col-12 col-md-4">
                  <a style="font-weight: 600; border-radius:60px; padding:15px; background: #ffffff;display:inline-block" class="cta-btn align-middle " href="/login">Verifikasi Pembayaran</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>

    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-2">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-people m-auto text-primary"></i>
              </div>
              <h5>Kelas Kepemimpinan</h5>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-tag m-auto text-primary"></i>
              </div>
              <h5>Kelas Bisnis</h5>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-camrecorder m-auto text-primary"></i>
              </div>
              <h5>Kelas Multimedia</h5>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-book-open m-auto text-primary"></i>
              </div>
              <h5>Kelas Bahasa</h5>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-picture m-auto text-primary"></i>
              </div>
              <h5>Kelas Seni</h5>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-graduation m-auto text-primary"></i>
              </div>
              <h5>Kelas Perguruan Tinggi</h5>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <h6 class="text-center mb-3">Powered by</h6>
      <div class="row">
        <div class="col">
          <img class="mr-2" src="logo.png">
          <img src="lampung_geh.png" class="mr-2" width="150px" height="30px">
          <img src="darmajaya.png" width="150px" height="30px">
        </div>
      </div>
    </section>

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\lyc\resources\views/welcome.blade.php ENDPATH**/ ?>