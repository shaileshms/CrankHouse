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
                    <li><a href="<?php echo base_url('jomsom-muktinath-mountain-bike-trip'); ?>" class="list-group-item uppermustang active">Jomsom Muktinath</a></li>
                    <li><a href="<?php echo base_url('kathmandu-mountain-bike-trip'); ?>" class="list-group-item kathmandutrip">Kathmandu Trip</a></li>
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
                        <div class="trips-mainpic" style="max-width:1200px;text-align: center"><img class="image" src="<?php echo base_url(); ?>assets/img/trips/mustang.jpg"></div>
                        <div class="description">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box">
                                        <i class="fa fa-2x fa-angle-double-up wow bounceIn text-primary" style="color: black"></i>
                                        <h5>Max Altitude: 3800m</h5>

                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box">
                                        <i class="fa fa-2x fa-line-chart wow bounceIn text-primary" style="color: black" data-wow-delay=".1s"></i>
                                        <h5>Difficulty: Intermidiate</h5>

                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box">
                                        <i class="fa fa-2x fa-calendar wow bounceIn text-primary" style="color: black" data-wow-delay=".3s"></i>
                                        <h5>Duration: 5 days</h5>

                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box">
                                        <i class="fa fa-2x fa-usd wow bounceIn text-primary" style="color: black" data-wow-delay=".4s"></i>
                                        <h5>Price: $2350</h5>

                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12" style="text-align: justify;margin-top:10px">
                                    <p style="text-align: justify;padding-left:20px;padding-right:20px;padding-top:20px">Our Jomsom to Muktinath mountain bike trip is an adventure filled guided trip in the Himalayas lasting approximately 5 to 6 days. It is a challenging journey that includes around 115km of mountain bike ride in high altitude and rough terrain. Jomsom is famous for apple and apple brandy while Muktinath is a home to the famous Hindu temple in the Himalayas. You will start the journey from Jomsom and be able to experience the untouched beauty of the mountains. More detailed description is included in this page along with the summary of the trip. </p>
                                
                                
                                    <p style="text-align: justify;padding-left:20px;padding-right:20px">We will guide you through the entire journey and provide you with all the necessary equipment. We also offer custom packages based on your specific needs. Please contact us with your requirements and we will be happy to design the right trip package for you.
</p>
                                </div>
                            </div>
                        </div>
                       <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#menu1">Summary</a></li>
                            <li ><a data-toggle="tab" href="#menu2">Detailed Itenarary</a></li>
			<li ><a data-toggle="tab" href="#menu3">Price Details</a></li>
                        </ul>

                        <div class="tab-content"style="background-color:#ffffff" >

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
                                        <td>Kathmandu - Pokhara</td>
                                        <td>Travel by bus</td>

                                    </tr>
                                    <tr>
                                        <td> 2</td>
                                        <td>Pokhara - Kagbeni </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> 3</td>
                                        <td>Kagbeni - Muktinath </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> 4</td>
                                        <td>Muktinath - Marpha </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> 5</td>
                                        <td>Marpha - Tatopani/Pokhara</td>
                                        <td>Three day rafting / paragliding boating</td>
                                    </tr>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                            <div id="menu2" class="tab-pane fade ">
                                <div class="container-fluid" style="padding-top: 20px; margin-bottom: 40px">
                                    <h4>
                                        Jomsom Muktinath Mountain Bike Trip </h4>
                                    <h6>Duration: 5-6 days</h6>
                                    <h6>Skills/Fitness: Intermidiate </h6>
                                    <ul>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 1
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                On the first day of trip we will drive to Pokhara. It is a 212 km drive that takes 5 to 6 hours depending upon road condition and traffic. Pokhara is a beautiful city famous for mountains and lakes.

                                            </div>
                                        </li>

                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 2
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                We will fly or drive to Jomsom and then ride to Kagbeni. The flight takes only around 15 minutes while travelling by road includes 6-7 hours of off road driving (110 km). Once we arrive at Jomsom we will take a 14km mountain bike ride in order to acclimatize ourselves on the high altitude.

                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 3
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                On the third day of the trip we will make the 19 km bike ride to Muktinath, which is at the altitude of around 3800m. This part of the journey is almost all uphill.  On the way you can see Thorong Peak, Dhaulagiri and Nilgiri mountains. Muktinath is famous for both Hindu and Buddhist temples.

                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 4
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                The bike ride is 36 km long to Marpha via Lupra pass, situated at the altitude of 2600 m. Marpha is famous for its delicious apples and local apple brandy. You can also visit a monastery that offers the awesome views of the Marpha village
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 5
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                On the last day of the trip we will ride to Tatopani. It is a 46km long journey and upon arrival you can relax in the natural hot springs found in the area and try local Yak steaks. Then we will ride to Beni, which is 22km away and finally make the 5 hours drive back to Pokhara (120km).

                                        </li>

                                    </ul>


                                </div>
                            </div>
                            
                            
                           <div id="menu3" class="tab-pane fade ">
                                <div class="container-fluid" style="padding-top: 20px; margin-bottom: 40px">
                                    <h4>
                                        Pricing Details </h4>
                                    <h5>Price: $2350/person</h5>
                                    <h5>Larger group  (>4 people): $2120/person</h5>
                                    <h5>The price includes the following:  </h5>
                                    <ul>
                                   <li> Mountain bike for the duration of the trip and all the necessary accessories.</li>
                                    <li>   An expert guide.</li>
                                      <li> Public transport expenses.</li>
                                        <li> Accomodation and food. </li>
                                    </ul>



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