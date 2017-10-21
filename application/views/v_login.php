<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7 lt-ie10"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 lt-ie10"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <link rel="shortcut icon" href="<?php echo base_url('asset/img/faviconx.ico')?>">
        <title>Samantha - Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php echo base_url('asset/proton/styles/d6220a84.bootstrap.css')?>">


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
      
<!--    <link rel="shortcut icon" href="</?php echo base_url('asset/img/favicon.ico')?>">-->
    
<body class="login-page">
        
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

        <form role="form" action="<?php echo site_url() ?>/c_login/process" method="post">
            <section class="wrapper scrollable animated fadeInDown">
                <section class="panel panel-default">
                    <div class="panel-heading">
                        <div>
                            <img src="<?php echo base_url('asset/proton/images/proton-logo.png')?>" alt="proton-logo">
                            <h1>
                                <span class="title">
                                   Samantha
                                </span>
                                <span class="subtitle">
                                    ADMIN PANEL
                                </span>
                            </h1>
                        </div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="welcome-text">
                                Welcome back to Samantha!
                            </span>
                            </li>
                        <li class="list-group-item">
                            <span class="login-text">
                                Login with your Admin Account
                            </span>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control input-lg"  placeholder="Username" required autofocus id="username" name="username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control input-lg" placeholder="Password" required id="password" name="password">
                            </div>
                        </li>
                    </ul>
                    <div class="panel-footer">
                        <button class="btn btn-lg btn-success" type="submit">
                    Sign in</button><br>
                        
                    </div>
                </section>
            </section>
        </form>
    </body>
</html>

<!--<div class="account-wall">
              <img class="profile-img" src="<//?php echo base_url('asset/img/avatar.png')?>" class=""img-rounded>
                <form class="form-signin" action="<//?php echo site_url() ?>/c_login/process" method="post">
                <input type="text" class="form-control" placeholder="Username" required autofocus id="username" name="username">
                <input type="password" class="form-control" placeholder="Password" required id="password" name="password">
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                
                </form>
            </div>-->