<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <title>StroyProkat</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="аренда строительного инструмента, строительное оборудование, аренда витебск">
    <link rel="stylesheet" type="text/css" href="style.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="/style/bootstrap/css/bootstrap.min.css" media="all"/>
    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all"/><![endif]-->
    <script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
    <!--<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>-->
    <!--<script type="text/javascript" src="style/js/scripts.js"></script>-->
    <script type='text/javascript' src='style/js/slider/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='style/js/slider/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='style/js/slider/camera.min.js'></script>
    <link rel="shortcut icon" href="/style/images/icon-big3.png">
    <link rel='stylesheet' id='camera-css' href='style/css/camera.css' type='text/css' media='all'>
    <script>
        jQuery(function () {
            jQuery('#camera_wrap_1').camera({
                thumbnails: true
            });
            jQuery('#camera_wrap_2').camera({
                height: '400px',
                loader: 'bar',
                pagination: false,
                thumbnails: true
            });
        });
    </script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <div id="logo"><a href="index.php"><img src="style/images/logo.png" alt=""/></a></div>
        </div>
        <ul class="nav nav-pills navbar-nav navbar-right">
            <li class="active"><a href="index.php">Главная</a></li>
            <li><a href="portfolio.php">Каталог</a></li>
            <li><a href="contact.html">Контакты</a></li>
        </ul>
    </div>
</nav>
<div class="padding-bottom">
    <div class="container">
        <p class="text-center lead">Аренда строительного оборудования в Витебскe.</p>
        <div class="fluid_container">
            <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
                <?php for ($i = 1; $i <= 6; $i++): ?>
                    <div data-thumb="/style/images/slider/slides/thumbs/picture_<?= $i ?>.jpg"
                         data-src="/style/images/slider/slides/picture_<?= $i ?>.jpg">
                        <!--<div class="camera_caption fadeFromBottom">-->
                        <!--Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>-->
                        <!--</div>-->
                    </div>

                <?php endfor; ?>
            </div><!-- #camera_wrap_1 -->
        </div><!-- .fluid_container -->

        <!-- End Slider -->
        <!-- Begin Wrapper -->
        <div class="col-xs-12 text-center"><h2>У нас вы найдете все самое лучшее и необходимое</h2></div>
        <div class="col-xs-12 text-center"><h4><a class="btn btn-primary" href="/portfolio.php">Перейти в каталог</a>
            </h4></div>
    </div>
    <!-- End Wrapper -->
    <div class="clearfix"></div>
    <!--<div class="push"></div>-->
    <!-- Begin Footer -->
    <nav class="navbar navbar-fixed-bottom">
        <div class="container">
            <div class="navbar-header logo-mts">
                <img src="style/images/logo_mts.png" alt=""/>
                <small>+375 29 515 18 23</small>
            </div>
            <ul class="nav nav-pills navbar-nav navbar-right">
                <li><a href="#"><img src="style/images/icon-rss.png" alt=""/></a></li>
                <li><a href="#"><img src="style/images/icon-twitter.png" alt=""/></a></li>
                <li><a href="#"><img src="style/images/icon-dribble.png" alt=""/></a></li>
                <li><a href="#"><img src="style/images/icon-tumblr.png" alt=""/></a></li>
                <li><a href="#"><img src="style/images/icon-flickr.png" alt=""/></a></li>
                <li><a href="#"><img src="style/images/icon-facebook.png" alt=""/></a></li>
            </ul>

        </div>
    </nav>
    <!--            <div id="footer-wrapper">
                    <div id="footer">
                        <div id="footer-content">
                             Begin Copyright
                            <div id="copyright">
                                <p>Copyright &copy; <a href="#">Domain Name</a> - All Rights Reserved | Design By <a target="_blank" href="http://elemisfreebies.com/">elemis</a></p>
                            </div>
                             End Copyright
                             Begin Social Icons
                            <div id="socials">
                                <ul>
                                    <li><a href="#"><img src="style/images/icon-rss.png" alt="" /></a></li>
                                    <li><a href="#"><img src="style/images/icon-twitter.png" alt="" /></a></li>
                                    <li><a href="#"><img src="style/images/icon-dribble.png" alt="" /></a></li>
                                    <li><a href="#"><img src="style/images/icon-tumblr.png" alt="" /></a></li>
                                    <li><a href="#"><img src="style/images/icon-flickr.png" alt="" /></a></li>
                                    <li><a href="#"><img src="style/images/icon-facebook.png" alt="" /></a></li>
                                </ul>
                            </div>
                             End Social Icons
                        </div>
                    </div>
                </div>-->
    <!-- End Footer -->
</div>
</body>
</html>