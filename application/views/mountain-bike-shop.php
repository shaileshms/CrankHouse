<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crank House - Shop</title>

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/shop-homepage.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/creative-shop.css" type="text/css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css" type="text/css">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66283578-2', 'auto');
  ga('send', 'pageview');

   </script>

</head>

<body>

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="border-bottom-color:#eeeeee;">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="centered">
            <a style ="box-shadow: inset;box-shadow: 10px" class="navbar-brand page-scroll" href="<?php echo base_url();?>"><img style="height:70px;width:105px;"class="image" src="<?php echo base_url();?>assets/img/logo-black.png"></a>
        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="<?php echo base_url(); ?>">Home</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo base_url('#about'); ?>">About Us</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo base_url('#services');?>">Services</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo base_url('#trips');?>">Trips</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo base_url('#shop');?>">Bike Shop</a>
                </li>
                 <li>
                    <a class="page-scroll" href='<?php echo base_url('crankhouse/gallery'); ?>' target="_blank">Gallery</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo base_url('#contact');?>">Contact Us</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
        <div class="" style="padding-top:10px;position:absolute;top:0px;right:15px;">
            <a href="https://www.facebook.com/crankhouse/" target="_blank"><img src="<?php echo base_url(); ?>assets/img/facebook.png" style="height: 20px;"> </a>
            <a href="https://www.instagram.com/crankhousethamel/" target="_blank"><img src="<?php echo base_url(); ?>assets/img/instagram.png" style="height: 20px;"> </a>
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Page Content -->
<div class="container" style="padding-bottom:50px">
    <div class="row">
        <div class="col-md-2">
            <div class="row">
                <h3>Category</h3>
                <div class="list-group" id="menu">

                    <li><a href="#" class="list-group-item active" onclick="allitem()">All</a></li>
                    <li><a href="#" class="list-group-item" onclick="bike()">Bike</a></li>
                    <li><a href="#" class="list-group-item" onclick="accessories()">Accessories</a></li>

                </div>
            </div>
        </div>

        <div class="col-md-10">
            <div class="row">
                <div class="col-sm-4 col-lg-4 col-md-4 bike">
                <a href="<?php echo base_url();?>assets/product-detail/marlin7-blue.html"  class="open-popup-link">
                    <div class="thumbnail">
                        <img src="assets/img/products/1.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="<?php echo base_url();?>assets/product-detail/marlin7-blue.html"  class="open-popup-link" id ="popover1"data-toggle="popover" title="" data-content="$700">Rs 70,000</h4>
                            <h4>MARLIN 7 (Blue)</h4>
                        </div>
                    </div>
                </a>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4 bike">
                    <a href="<?php echo base_url();?>assets/product-detail/marlin7-cyan.html"  class="open-popup-link">
                    <div class="thumbnail">
                        <img class="img-rounded" src="assets/img/products/2.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="<?php echo base_url();?>assets/product-detail/marlin7-cyan.html" class="open-popup-link" id ="popover2"data-toggle="popover" title="" data-content="$700">Rs 70,000</h4>
                            <h4>MARLIN 7 (Cyan)</h4>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4 bike">
                <a href="<?php echo base_url();?>assets/product-detail/marlin6-orange.html"  class="open-popup-link">
                    <div class="thumbnail">
                        <img src="assets/img/products/3.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="<?php echo base_url();?>assets/product-detail/marlin6-orange.html"  class="open-popup-link" id ="popover3"data-toggle="popover" title="" data-content="$600">Rs 60,000</h4>
                            <h4>MARLIN 6 (Orange)</h4>
                        </div>
                    </div>
                </a>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4 bike">
                    <a href="<?php echo base_url();?>assets/product-detail/marlin6-green.html"  class="open-popup-link">
                    <div class="thumbnail">
                        <img src="assets/img/products/1_1.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="<?php echo base_url();?>assets/product-detail/marlin6-green.html" class="open-popup-link" id ="popover27"data-toggle="popover" title="" data-content="$600">Rs 60,000</a></h4>
                            <h4><a href="#">MARLIN 6 (Green)</a></h4>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/4.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover4"data-toggle="popover" title="" data-content="$17">Rs 1,700</a></h4>
                            <h4><a href="#">Brake Pads</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/5.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover5"data-toggle="popover" title="" data-content="$35">Rs 3,500</a></h4>
                            <h4><a href="#">Security Lock</a></h4>

                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/6.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover26"data-toggle="popover" title="" data-content="$25">Rs 2,500</a></h4>
                            <h4><a href="#">Pump</a></h4>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/7.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover6"data-toggle="popover" title="" data-content="$13">Rs 1,300</a></h4>
                            <h4><a href="#">Brake Pads</a></h4>

                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/8.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover7"data-toggle="popover" title="" data-content="$15">Rs 1,500</a></h4>
                            <h4><a href="#">Grips</a></h4>

                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/9.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover8"data-toggle="popover" title="" data-content="$50">Rs 5,000</a></h4>
                            <h4><a href="#">Cateye Velo</a></h4>

                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/10.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover9"data-toggle="popover" title="" data-content="$12">Rs 1,200</a></h4>
                            <h4><a href="#">Bottle Holder</a></h4>

                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/11.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover10"data-toggle="popover" title="" data-content="$85">Rs 8,500</a></h4>
                            <h4><a href="#">Crank</a></h4>

                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/12.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover11"data-toggle="popover" title="" data-content="$700">Rs 70,000</a></h4>
                            <h4><a href="#">XT Group Set</a></h4>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/13.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover12"data-toggle="popover" title="" data-content="$13">Rs 4,000</a></h4>
                            <h4><a href="#">VP Pedals</a></h4>

                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/14.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover13"data-toggle="popover" title="" data-content="$24">Rs 2,400</a></h4>
                            <h4><a href="#">Grips</a></h4>

                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/15.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover14"data-toggle="popover" title="" data-content="$75">Rs 7,500</a></h4>
                            <h4><a href="#">Semano Brake Set</a></h4>

                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/16.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover15"data-toggle="popover" title="" data-content="$45">Rs 4,500</a></h4>
                            <h4><a href="#">Bottom Bracket</a></h4>

                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/17.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover16"data-toggle="popover" title="" data-content="$8">Rs 800</a></h4>
                            <h4><a href="#">Cateye Bell</a></h4>

                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/18.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover17"data-toggle="popover" title="" data-content="$??">Rs ??</a></h4>
                            <h4><a href="#">Cateye Lights</a></h4>

                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/19.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover18"data-toggle="popover" title="" data-content="$3">Rs 300</a></h4>
                            <h4><a href="#">Chain Link</a></h4>

                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/20.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover19"data-toggle="popover" title="" data-content="$8">Rs 800</a></h4>
                            <h4><a href="#">Finish Line Oil</a></h4>

                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/21.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover20"data-toggle="popover" title="" data-content="$45">Rs 4,500</a></h4>
                            <h4><a href="#">Prowell Helmet</a></h4>

                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/22.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover21"data-toggle="popover" title="" data-content="$7">Rs 700</a></h4>
                            <h4><a href="#">Kenda Tube</a></h4>

                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/23.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover22"data-toggle="popover" title="" data-content="$45">Rs 4,500/ set</a></h4>
                            <h4><a href="#">Maxxis Tyres </a></h4>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/24.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover23"data-toggle="popover" title="" data-content="$45">Rs 4,500</a></h4>
                            <h4><a href="#">Shimano Derailleur</a></h4>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/25.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover24"data-toggle="popover" title="" data-content="$10">Rs 1,000</a></h4>
                            <h4><a href="#">Patch Kit</a></h4>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4 col-md-4 accessories">
                    <div class="thumbnail">
                        <img src="assets/img/products/26.jpg" alt="">
                        <div class="caption">
                            <h4 class="pull-right"><a href="#" id ="popover25"data-toggle="popover" title="" data-content="$2">Rs 200/pc</a></h4>
                            <h4><a href="#">Reflector Strap</a></h4>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- /.container -->

<section class="footer">
    <div class="row">
        <div class="col-lg-12 text-muted">
            <p class="footer-text">Copyright <i class="fa fa-copyright"></i> 2016 Crank House |
                <i class="fa fa-map-marker"></i> Chaksibari Marg, Kathmandu 44600 |
                <i class="fa fa-phone"></i> +977 9806-593-830 |
                <i class="fa fa-envelope-o"></i> info@crankhouse.com
            </p>
        </div>
    </div>
</section>

<!-- /.container -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

<script src="<?php echo base_url(); ?>assets/js/magnific-popup.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        $('#menu li a').on('click', function() {
            $(this).parent().parent().find('.active').removeClass('active');
            $(this).parent().addClass('active');
        });
    });
</script>

<script>
    $('.open-popup-link').magnificPopup({
        type:'ajax'
    });
</script>

<script>
    function bike(){
        var ele = document.getElementsByClassName("accessories");
        for(i=0;i<ele.length;i++)
        {
            ele[i].hidden = true;
        }
        var ele = document.getElementsByClassName("bike");
        for(i=0;i<ele.length;i++)
        {
            ele[i].hidden = false;
        }
    }

    function accessories(){
        var ele = document.getElementsByClassName("bike");
        for(i=0;i<ele.length;i++)
        {
            ele[i].hidden = true;
        }
        var ele = document.getElementsByClassName("accessories");
        for(i=0;i<ele.length;i++)
        {
            ele[i].hidden = false;
        }
    }

    function allitem(){
        var ele = document.getElementsByClassName("accessories");
        for(i=0;i<ele.length;i++)
        {
            ele[i].hidden = false;
        }
        var ele1 = document.getElementsByClassName("bike");
        for(i=0;i<ele1.length;i++)
        {
            ele1[i].hidden = false;
        }
    }
</script>

<script>
    $(document).ready(function(){
        $("#popover1").popover({ trigger: "hover" });
        $("#popover2").popover({ trigger: "hover" });
        $("#popover3").popover({ trigger: "hover" });
        $("#popover4").popover({ trigger: "hover" });
        $("#popover5").popover({ trigger: "hover" });
        $("#popover6").popover({ trigger: "hover" });
        $("#popover7").popover({ trigger: "hover" });
        $("#popover8").popover({ trigger: "hover" });
        $("#popover9").popover({ trigger: "hover" });
        $("#popover10").popover({ trigger: "hover" });
        $("#popover11").popover({ trigger: "hover" });
        $("#popover12").popover({ trigger: "hover" });
        $("#popover13").popover({ trigger: "hover" });
        $("#popover14").popover({ trigger: "hover" });
        $("#popover15").popover({ trigger: "hover" });
        $("#popover16").popover({ trigger: "hover" });
        $("#popover17").popover({ trigger: "hover" });
        $("#popover18").popover({ trigger: "hover" });
        $("#popover19").popover({ trigger: "hover" });
        $("#popover20").popover({ trigger: "hover" });
        $("#popover21").popover({ trigger: "hover" });
        $("#popover22").popover({ trigger: "hover" });
        $("#popover23").popover({ trigger: "hover" });
        $("#popover24").popover({ trigger: "hover" });
        $("#popover25").popover({ trigger: "hover" });
        $("#popover26").popover({ trigger: "hover" });
        $("#popover27").popover({ trigger: "hover" });
        $("#popover28").popover({ trigger: "hover" });
    });
</script>
</body>

</html>