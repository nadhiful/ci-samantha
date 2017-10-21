<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7 lt-ie10"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 lt-ie10"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
 <!--
 Author:M.Nadhiful Alim
 NIM:E2112130
 Name Project:Samantha 
   -->   
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <link rel="shortcut icon" href="<?php echo base_url('asset/img/faviconx.ico')?>">
        <title>Samantha Project</title>
        <meta name="description" content="Page Description">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php echo base_url('asset/proton/styles/d6220a84.bootstrap.css')?>">
        <!--<link rel="stylesheet" href="</?php echo base_url('asset/proton/styles/bootstrap.css')?>">-->


        <!-- Page-specific Plugin CSS: -->
        <link rel="stylesheet" href="<?php echo base_url('asset/proton/styles/vendor/select2/select2.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('asset/proton/styles/vendor/uniformjs/css/uniform.default.css')?>">


        <!-- Proton CSS: -->
        <link rel="stylesheet" href="<?php echo base_url('asset/proton/styles/1b2c4b33.proton.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('asset/proton/styles/vendor/animate.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('asset/proton/styles/tes.css')?>">

      
        <!-- Fonts CSS: -->
        <link rel="stylesheet" href="<?php echo base_url('asset/proton/styles/9a41946e.font-awesome.css')?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url('asset/proton/styles/4d9a7458.font-titillium.css')?>" type="text/css" />

        <!-- Common Scripts: -->
        <script src="<?php echo base_url('asset/proton/scripts/jquery.min.js')?>"></script>
		 <script src="<?php echo base_url('asset/proton/scripts/jquery-1.8.2.min.js')?>"></script>
        <script src="<?php echo base_url('asset/proton/scripts/vendor/modernizr.js')?>"></script>
        <script src="<?php echo base_url('asset/proton/scripts/vendor/jquery.cookie.js')?>"></script>
		<script src="<?php echo base_url('asset/proton/scripts/jquery.mockjax.js')?>"></script>
    
		
    </head>

   <body class='dashboard-page'>
        
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
        
      <nav class="main-menu">
            <ul>
                <li>
                    <a href="<?php echo site_url('c_home/index')?>">
                        <i class="icon-home nav-icon"></i>
                        <span class="nav-text">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="<?php echo site_url('c_trans/index')?>">
                        <i class="icon-laptop nav-icon"></i>
                        <span class="nav-text">
                          Data Penjualan
                        </span>
                        <i class="icon-angle-right"></i>
                    </a>
                    <ul>
                        <li>
                            <a class="subnav-text" href="<?php echo site_url('c_trans/tambah_jenis')?>">
                                Tambah Data
                            </a>
                        </li>
                        </ul>
                </li>
                <li class="has-subnav">
                    <a href="<?php echo site_url('c_beli/index')?>">
                        <i class="icon-edit nav-icon"></i>
                        <span class="nav-text">
                            Data Pembelian
                        </span>
                        <i class="icon-angle-right"></i>
                    </a>
                    <ul>
                            <li>
                            <a class="subnav-text" href="<?php echo site_url('c_beli/index')?>">
                          Tambah Data
                            </a>
                        </li>
                        </ul>
                </li>
                <li>
                    <a href="<?php echo site_url('c_stok/index')?>">
                        <i class="icon-folder-open nav-icon"></i>
                        <span class="nav-text">
                            Data Stok
                        </span>
                           </a>
					</li>
					
                    <!--<ul>
                        <li>
                            <a class="subnav-text" href="</?php echo site_url('c_stok/tambah_jenis')?>">
                               Tambah Data
                            </a>-->
                    <!--    </li>
						</ul>
                </li>-->
                <li>
                    <a href="<?php echo site_url('c_laporan/index')?>">
                        <i class="icon-bar-chart nav-icon"></i>
                        <span class="nav-text">
                            Laporan
                        </span>
                    </a>
                </li>
               </ul>

            <ul class="logout">
                <li>
                    <a href="<?php echo site_url('c_home/do_logout')?>">
                        <i class="icon-off nav-icon"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
     

        <section class="wrapper retracted scrollable">
            
            <script>
                if (!($('body').is('.dashboard-page') || $('body').is('.login-page'))){
                    if ($.cookie('protonSidebar') == 'retracted') {
                        $('.wrapper').removeClass('retracted').addClass('extended');
                    }
                    if ($.cookie('protonSidebar') == 'extended') {
                        $('.wrapper').removeClass('extended').addClass('retracted');
                    }
                }
            </script>
            
            <nav class="user-menu">
                <a href="javascript:;" class="main-menu-access">
                   <i class="icon-proton-logo"></i>
                   <!--<i class="icon-reorder"></i>-->
                </a>
                 </nav>
            
       	 <section class="title-bar">
                <div>
                    <span><?php echo $title?></span>
                    <nav class="dashboard-menu">
                    </nav>
                </div>
            </section>
			<div class="panel panel-default">
                <div class="panel-body">
                    <div class="title">
                        <?php $this->load->view($page) ?>
                    </div></div></div>
                  
            
           
        <script src="<?php echo base_url('asset/proton/scripts/jquery.js')?>"></script>
        <script src="<?php echo base_url('asset/proton/scripts/autocomplete.js')?>"></script>
        <script src="<?php echo base_url('asset/proton/scripts/autocomplete.min.js')?>"></script>
        <script src="<?php echo base_url('asset/proton/scripts/9e25e8e2.bootstrap.min.js')?>"></script>
		<script src="<?php echo base_url('asset/proton/scripts/core.js')?>"></script>
		<script src="<?php echo base_url('asset/proton/scripts/widget.js')?>"></script>
		<script src="<?php echo base_url('asset/proton/scripts/position.js')?>"></script>
		<script src="<?php echo base_url('asset/proton/scripts/menu.js')?>"></script>
		
        <!-- Proton base scripts: -->
        <script src="<?php echo base_url('asset/proton/scripts/3fa227ae.proton.js')?>"></script>


        <!-- Page-specific scripts: -->
        <script src="<?php echo base_url('asset/proton/scripts/proton/6c42db75.sidebar.js')?>"></script>
        <script src="<?php echo base_url('asset/proton/scripts/proton/7d8c8d18.forms.js')?>"></script>
        <!-- jsTree -->
        <script src="<?php echo base_url('asset/proton/scripts/vendor/jquery.jstree.js')?>"></script>
        <!-- Select2 For Bootstrap3 -->
        <!-- https://github.com/fk/select2-bootstrap-css -->
            <script src="<?php echo base_url('asset/proton/scripts/vendor/select2.min.js')?>"></script>

        <!-- uniformJs -->
            <script src="<?php echo base_url('asset/proton/scripts/vendor/jquery.uniform.min.js')?>"></script>

        <!-- Date Time Picker -->
        <!-- https://github.com/smalot/bootstrap-datetimepicker -->
        <!-- NOTE: Original JS file is modified: Proton is forcing bootstrap 2 plugin mode in order to support font icons -->
            <script src="<?php echo base_url('asset/proton/scripts/vendor/bootstrap-datetimepicker.js')?>"></script>
        <!-- Character Counter -->
        <!-- http://cssglobe.com/post/7161/jquery-plugin-simplest-twitterlike-dynamic-character-count-for-textareas -->
            <script src="<?php echo base_url('asset/proton/scripts/vendor/charCount.js')?>"></script>
        <!-- Word Counter -->
        <!-- http://bavotasan.com/2011/simple-textarea-word-counter-jquery-plugin/ -->
            <script src="<?php echo base_url('asset/proton/scripts/vendor/jquery.textareaCounter.js')?>"></script>
        <!-- WYSIWYG Editor -->
        <!-- http://hackerwins.github.io/summernote/ -->
        <!-- JS Modified to use info buttons instead of default buttons for toolbar -->
            <script src="<?php echo base_url('asset/proton/scripts/vendor/summernote.js')?>"></script>
          
    </body>
</html>