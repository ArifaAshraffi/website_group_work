
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Corlate</title>
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/bootstrap3.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
<?php
include_once('header.php');
?>
<section id="main-slider" class="no-margin">
   <div id="about-slider">
    <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
            <li data-target="#carousel-slider" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/moina.jpg"height="300px" width="1000px"  alt="">
            </div>
            <div class="item">
                <img src="images/amra.jpg" class="img-responsive" alt="">
            </div>
            <div class="item">
                <img src="images/sir.jpg" class="img-responsive" alt="">
            </div>
            <div class="item">
                <img src="images/jerin.jpg" class="img-responsive" alt="">
            </div>
        </div>
        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div> <!--/#carousel-slider-->
    </div><!--/#about-slider-->
    <!-- Our Skill -->
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <!--<img src="images/slider/img3.png" class="img-responsive">-->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->
<?php
include_once('footer.php');
?>
</body>
</html>



