<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7 lt-ie10"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 lt-ie10"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
    
        <meta charset="utf-8">

<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <link rel="shortcut icon" href="<?php echo base_url('asset/img/faviconx.ico')?>">
		 
        <title>Samantha Project</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php echo base_url('asset/proton/styles/d6220a84.bootstrap.css')?>">

        <!-- Page-specific Plugin CSS: -->
        <link rel="stylesheet" href="<?php echo base_url('asset/proton/styles/vendor/jquery.pnotify.default.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('asset/proton/styles/vendor/select2/select2.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('asset/proton/styles/carousel.css')?>">


        <!-- Proton CSS: -->
        <link rel="stylesheet" href="<?php echo base_url('asset/proton/styles/1b2c4b33.proton.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('asset/proton/styles/vendor/animate.css')?>">

        <!-- adds CSS media query support to IE8   -->
        <!--[if lt IE 9]>
            <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
            <script src="scripts/vendor/respond.min.js"></script>
        <![endif]-->

        <!-- Fonts CSS: -->
        <link rel="stylesheet" href="<?php echo base_url('asset/proton/styles/9a41946e.font-awesome.css')?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url('asset/proton/styles/4d9a7458.font-titillium.css')?>" type="text/css" />

        <!-- Common Scripts: -->
        <script src="<?php echo base_url('asset/proton/scripts/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('asset/proton/scripts/vendor/modernizr.js')?>"></script>
        <script src="<?php echo base_url('asset/proton/scripts/vendor/jquery.cookie.js')?>"></script>
    </head>

     <body class="dashboard-page">
        
        <script>
	        var theme = $.cookie('protonTheme') || 'default';
	        $('body').removeClass (function (index, css) {
	            return (css.match (/\btheme-\S+/g) || []).join(' ');
	        });
	        if (theme !== 'default') $('body').addClass(theme);
        </script>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

     
   
		   <section class="wrapper scrollable">
        
            <nav class="user-menu">
                <!--<a href="javascript:;" class="main-menu-access">
                    <i class="icon-proton-logo"></i>
                    <i class="icon-reorder"></i>
                </a>-->
                <section class="user-menu-wrapper">
                    <a href="javascript:;" data-expand=".theme-view" class="view-menu-access">
                        <i class="icon-list"></i>
                    </a>
                </section>

                <div class="panel panel-default nav-view theme-view">
                    <div class="arrow user-menu-arrow"></div>
                    <div class="panel-heading">
                        <i class="icon-cog"></i>
                        <span>Menu</span>
                        <a href="javascript:;" class="close-user-menu"><i class="icon-remove"></i></a>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item" data-theme="default">
                           <a href="<?php echo site_url('c_home/do_logout')?>">
                                <i class="icon-off"></i>
                                <div class="text-holder">
                                    <span class="title-text">
                                       Logout
                                    </span>
                                </div>
                            </a>
                        </li>
                     </ul>
                </div>

               
            </nav>
            <section class="title-bar">
                <div>
                    <span>DASHBOARD</span>
                    <nav class="dashboard-menu">
                    </nav>
                </div>
            </section>
			
           
                <div class="panel-body">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
              <a href="<?php echo site_url('c_trans/index/index')?>">
                <center><img src="<?php echo base_url('asset/img/contoh.png')?>" class="img-responsive" alt="Responsive image" ></center></a>
                <div class="carousel-caption">
                    <h3></h3>
                    <p>Menampilkan daftar penjualan pulsa</p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
               <a href="<?php echo site_url('c_beli/index')?>">
<center><img src="<?php echo base_url('asset/img/contoh.png')?>" class="img-responsive" alt="Responsive image" ></center></a>
                <div class="carousel-caption">
                    
                    <p>Menampilkan daftar pembelian saldo
                        </p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
             <a href="<?php echo site_url('c_stok/index')?>">
                <center><img src="<?php echo base_url('asset/img/contoh.png')?>" class="img-responsive" alt="Responsive image" ></center></a>
                <div class="carousel-caption">
                   
                    <p>Menampilkan data stok</p>
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
            <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="">Data Penjualan</a></li>
            <li data-target="#myCarousel" data-slide-to="1"><a href="">Data Pembelian</a></li>
            <li data-target="#myCarousel" data-slide-to="2"><a href="">Data Stok</a></li>
            <li data-target="#myCarousel" data-slide-to="3"><a href="">Laporan</a></li>
        </ul>
    </div>

    <!-- End Carousel -->
  </div>
 <div>             
                 
      

        
        <script src="<?php echo base_url('asset/proton/scripts/9e25e8e2.bootstrap.min.js')?>"></script>

		<!-- Proton base scripts: -->
        <script src="<?php echo base_url('asset/proton/scripts/3fa227ae.proton.js')?>"></script>


        <!-- Page-specific scripts: -->
        <script src="<?php echo base_url('asset/proton/scripts/jquery-ui.min.js')?>"></script>
        <script src="<?php echo base_url('asset/proton/scripts/proton/73f27b75.dashboard,js')?>"></script>
        <script src="<?php echo base_url('asset/proton/scripts/proton/217183f0.dashdemo.js')?>"></script>

        <!-- Bootstrap Tags Input -->
        <!-- http://timschlechter.github.io/bootstrap-tagsinput/examples/ -->
            <script src="<?php echo base_url('asset/proton/scripts/vendor/bootstrap-tagsinput.min.js')?>"></script>
     <script src="<?php echo base_url('asset/proton/scripts/carousel.js')?>"></script>

        <!-- Raphael, used for graphs -->
        <!-- http://raphaeljs.com/ -->
            <script src="<?php echo base_url('asset/proton/scripts/vendor/raphael-min.js')?>"></script>
        
        <!-- Morris graphs -->
        <!-- https://github.com/oesmith/morris.js -->
            <script src="<?php echo base_url('asset/proton/scripts/vendor/morris.min.js')?>"></script>

        <!-- Select2 For Bootstrap3 -->
        <!-- https://github.com/fk/select2-bootstrap-css -->
            <script src="<?php echo base_url('asset/proton/scripts/vendor/select2.min.js')?>"></script>
            
        <!-- Number formating for dashboard demo -->
            <script src="<?php echo base_url('asset/proton/scripts/vendor/numeral.min.js')?>"></script>

        <!-- Notifications -->
        <!-- http://pinesframework.org/pnotify/ -->
            <script src="<?php echo base_url('asset/proton/scripts/vendor/jquery.pnotify.min.js')?>"></script>
    </body>
</html>
