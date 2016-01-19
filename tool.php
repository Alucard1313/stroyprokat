<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <title>StroyProkat</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="/style/bootstrap/css/bootstrap.css" media="all"/>
    <link rel="shortcut icon" href="/style/images/icon-big3.png">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <div id="logo"><a href="index.php"><img src="style/images/logo.png" alt=""/></a></div>
        </div>
        <ul class="nav nav-pills navbar-nav navbar-right">
            <li><a href="index.php">Главная</a></li>
            <li><a href="portfolio.php">Каталог</a></li>
            <li><a href="contact.html">Контакты</a></li>
        </ul>
    </div>
</nav>
<?php include_once 'contentArray.php';
$tool = $params[$_GET['item']];
?>
<div class="container tool">
    <div class="col-md-12">
        <div class="img-container col-md-5 col-md-offset-1">
            <img class="img-responsive" style="width: 800px; height: 300px"
                 src="style/images/catalog/<?= $tool['image']; ?>" alt="">
        </div>
        <div class="col-md-5 technical col-md-offset-1">
            <p><?php echo $tool['technical']; ?></p>
        </div>
        <!--                <div class="clear"></div>-->
        <div class="col-md-12">
            <!--                <hr>-->
            <div class="btn-lg">
                <!--<h4 class="pull-right">$24.99</h4>-->
                <h4><a href=""><?php echo $tool['name']; ?></a>
                </h4>

                <p><?php echo $tool['description']; ?></p>
                <!--                    <p>See more snippets like these online store reviews at <a target="_blank" href="http://bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                                    <p>Want to make these reviews work? Check out
                                        <strong><a href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this building a review system tutorial</a>
                                        </strong>over at maxoffsky.com!</p>-->
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>-->
                <hr>
<!--                <div class="col-md-12">-->
<!--                    Свяжитесь с нами прямо сейчас и получите необходимый вам инструмент!-->
<!---->
<!--                </div>-->
                <div class="col-md-12" style="text-align: center">
                    <?php if(array_key_exists($_GET['item']-1, $params)):?>
                    <a class="btn btn-primary" style="float: left" href="/tool.php?item=<?= $_GET['item']-1?>"><span class="glyphicon glyphicon-chevron-left"></span><?= substr($params[$_GET['item']-1]['name'], 0, 50)?>...</a></h4>
                    <?php endif; ?>
<!--                    <a class="btn btn-primary" href="/contact.html">Контакты</a></h4>-->
                    <?php if(array_key_exists($_GET['item']+1, $params)):?>
                    <a class="btn btn-primary" style="float:right;" href="/tool.php?item=<?= $_GET['item']+1?>"><?= substr($params[$_GET['item']+1]['name'], 0, 50) ?>...<span class="glyphicon glyphicon-chevron-right"></span></a></h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!--                <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>-->
</div>


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
</div>
</body>
</html>