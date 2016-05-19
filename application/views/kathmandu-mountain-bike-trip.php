<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crank House - Trips</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/creative-trip.css" type="text/css">

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
            <a style ="box-shadow: inset;box-shadow: 10px" class="navbar-brand page-scroll" href="<?php echo base_url();?>"><img style="height:70px;width:105px;"class="image" src="<?php echo base_url(); ?>assets/img/logo-black.png"></a>
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


<div class="container">
    <div class="row">
        <div class="col-lg-2">
            <div class="row">
                <h3>Trips</h3>
                <div class="list-group" id="menu">
                    <li><a href="<?php echo base_url('annapurna-mountain-bike-trip'); ?>" class="list-group-item annapurna">Annapurna</a></li>
                    <li><a href="<?php echo base_url('jomsom-muktinath-mountain-bike-trip'); ?>" class="list-group-item uppermustang">Jomsom Muktinath</a></li>
                    <li><a href="<?php echo base_url('kathmandu-mountain-bike-trip'); ?>" class="list-group-item kathmandutrip active">Kathmandu Trip</a></li>
                    <li><a href="<?php echo base_url('kathmandu-round-mountain-bike-trip'); ?>" class="list-group-item kathmanduroundtrip">Kathmandu Round Trip</a></li>
                    <li><a href="<?php echo base_url('pokhara-mountain-bike-trip'); ?>" class="list-group-item pokhara">Pokhara</a></li>
                    <li><a href="<?php echo base_url('classic-nepal-mountain-bike-trip'); ?>" class="list-group-item classicnepal">Classic Nepal</a></li>
                </div>
            </div>
        </div>
        <div class="col-lg-10">
            <div id="container-fluid" style="background-color: #ffffff;">
                <div id="heading1" class="tab-pane fade in active" >
                    <section id="services" style="margin-bottom: 50px;">
                        <div class="trips-mainpic" style="max-width:1200px;text-align: center"><img class="image" src="<?php echo base_url(); ?>assets/img/trips/kathmandu.jpg"></div>
                        <div class="description">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box">
                                        <i class="fa fa-2x fa-angle-double-up wow bounceIn text-primary" style="color: black"></i>
                                        <h5>Max Altitude: 1400m</h5>

                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box">
                                        <i class="fa fa-2x fa-line-chart wow bounceIn text-primary" style="color: black" data-wow-delay=".1s"></i>
                                        <h5>Difficulty: Moderate</h5>

                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box">
                                        <i class="fa fa-2x fa-calendar wow bounceIn text-primary" style="color: black" data-wow-delay=".3s"></i>
                                        <h5>Duration: 1 day</h5>

                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box">
                                        <i class="fa fa-2x fa-usd wow bounceIn text-primary" style="color: black" data-wow-delay=".4s"></i>
                                        <h5>Price: $65</h5>

                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12" style="text-align: justify;margin-top:10px">
                                    <p style="text-align: justify;padding:20px">The Kathmandu Valley is the most developed and populated place in Nepal. The majority of offices and headquarters are located in the valley, making it the economic hub of Nepal. It is popular with tourists for its unique architecture, and rich culture that includes the highest number of jatras (street festivals) in Nepal.</p>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#menu1">Itenarary</a></li>
				<li><a data-toggle="tab" href="#menu2">Price Details</a></li>
                        </ul>

 			<div class="tab-content">
                       
                        <div id="menu1" class="tab-pane fade in active">
                            <div class="container-fluid" style="padding-top: 20px; margin-bottom: 40px">
                                <table class="table table-striped table-responsive table-bordered cf">
                                    <thead class="cf">
                                    <tr>
                                        <td><strong>Day</strong></td>
                                        <td><strong>From - To</strong></td>
                                        <td><strong>Remark</strong></td>
                                    </tr>
                                    </thead>
                                    <tbody >
                                    <tr >
                                        <td> 1</td>
                                        <td>Cycling around Kathmandu</td>
                                        <td>The route includes world heritage sites in Kathmandu, Patan and Bhaktapur. </td>

                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                         <div id="menu2" class="tab-pane fade ">
                                <div class="container-fluid" style="padding-top: 20px; margin-bottom: 40px">
                                    <h4>
                                        Pricing Details </h4>
                                    <h5>Price: $65/person</h5>
                                    <h5>Larger group  (>4 people): $50/person</h5>
                                    <h5>The price includes the following:  </h5>
                                    <ul>
                                        <li> Mountain bike for the duration of the trip and all the necessary accessories.</li>
                                        <li>   An expert guide.</li>
                                       
                                        <li> Breakfast and snacks.  </li>
                                    </ul>



                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

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


<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.fittext.js"></script>
<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/creative.js"></script>

</body>

</html>