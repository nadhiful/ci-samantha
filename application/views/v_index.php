 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=Mochammad Nadhiful Alim"">
    <link rel="shortcut icon" href="<?php echo base_url('asset/img/favicon.ico')?>">

    <title>Project Samantha</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('asset/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('asset/css/carousel.css')?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
  
      <!-- Carousel
    ================================================== -->
    <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
              <a href="<?php echo site_url('c_harga/index')?>">
                <center><img src="<?php echo base_url('asset/img/contoh.png')?>" class="img-responsive" alt="Responsive image" ></center></a>
                <div class="carousel-caption">
                    <h3></h3>
                    <p>Menampilkan daftar macam-macam harga pulsa</p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
               <a href="<?php echo site_url('c_trans/index')?>">
<center><img src="<?php echo base_url('asset/img/contoh.png')?>" class="img-responsive" alt="Responsive image" ></center></a>
                <div class="carousel-caption">
                    
                    <p>Menampilkan Data Transaksi Penjualan
                        </p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
             <a href="<?php echo site_url('c_beli/index')?>">
                <center><img src="<?php echo base_url('asset/img/contoh.png')?>" class="img-responsive" alt="Responsive image" ></center></a>
                <div class="carousel-caption">
                   
                    <p>Menampilkan Data Pembelian Saldo</p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
              <a href="<?php echo site_url('c_laporan/index')?>">
               <center><img src="<?php echo base_url('asset/img/contoh.png')?>" class="img-responsive" alt="Responsive image" ></center></a>
                <div class="carousel-caption">
                   
                    <p>Menampilkan Laporan
                        </p>
                </div>
            </div>
            <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->
        <ul class="nav nav-pills nav-justified">
            <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="">Data Harga</a></li>
            <li data-target="#myCarousel" data-slide-to="1"><a href="">Data Transaksi</a></li>
            <li data-target="#myCarousel" data-slide-to="2"><a href="">Data Pembelian</a></li>
            <li data-target="#myCarousel" data-slide-to="3"><a href="">Laporan</a></li>
        </ul>
    </div>

    <!-- End Carousel -->
  </div>
 <div> 
  <br>
 <br>
 <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


<!---Jquery-->
    <script src="<?php echo base_url('asset/js/jquery.js')?>"></script>
    <script src="<?php echo base_url('asset/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/bootstrap.js')?>"></script>
    <script src="<?php echo base_url('asset/js/dropdown.js')?>"></script>
    <script src="<?php echo base_url('asset/js/carousel.js')?>"></script>
  
  </body>
</html>