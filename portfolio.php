<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>StroyProkat</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="/style/bootstrap/css/bootstrap.css" media="all" />
        <link rel="shortcut icon" href="/style/images/icon-big3.png">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <div id="logo"><a href="index.html"><img src="style/images/logo.png" alt="" /></a></div>
                </div>
                <ul class="nav nav-pills navbar-nav navbar-right">
                    <li><a href="index.html">Главная</a></li>
                    <li class="active"><a href="portfolio.php">Каталог</a></li>
                    <li><a href="contact.html">Контакты</a></li>
                </ul>
            </div>
        </nav>
        <?php include_once 'contentArray.php'; ?>
        <div class="container">
            <!-- End Header Wrapper -->
            <!-- Begin Wrapper -->
            <?php foreach ($params as $key => $value): ?>

                <div class="row">
                    <div class="col-md-7">
                        <a  href="#">
                            <img class="img-responsive" src="style/images/catalog/<?php echo $value['image']; ?>" alt="">
                        </a>
                    </div>
                    <div class="col-md-5">
                        <h3><?php echo $value['name']; ?></h3>
                        <!--<h4>Subheading</h4>-->
                        <p><?php echo substr($value['description'], '0', '800').'...' ; ?></p>
                        <a class="btn btn-primary" href="/tool.php?item=<?php echo $key?>">Смотреть полностью <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
                <hr>
            <?php endforeach; ?>
            <!-- End Wrapper -->
            <div class="clearfix"></div>
            <!--<div class="push"></div>-->
            <!-- Begin Footer -->

            <nav class="navbar navbar-fixed-bottom">
                <div class="container">
                    <div class="navbar-header">
                    </div>
                    <ul class="nav nav-pills navbar-nav navbar-right">
                        <li><a href="#"><img src="style/images/icon-rss.png" alt="" /></a></li>
                        <li><a href="#"><img src="style/images/icon-twitter.png" alt="" /></a></li>
                        <li><a href="#"><img src="style/images/icon-dribble.png" alt="" /></a></li>
                        <li><a href="#"><img src="style/images/icon-tumblr.png" alt="" /></a></li>
                        <li><a href="#"><img src="style/images/icon-flickr.png" alt="" /></a></li>
                        <li><a href="#"><img src="style/images/icon-facebook.png" alt="" /></a></li>
                    </ul>

                </div>
            </nav>
        </div>
    </body>
</html>

