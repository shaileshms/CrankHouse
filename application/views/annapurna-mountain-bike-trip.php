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
                    <li><a href="<?php echo base_url('annapurna-mountain-bike-trip'); ?>" class="list-group-item annapurna active">Annapurna</a></li>
                    <li><a href="<?php echo base_url('jomsom-muktinath-mountain-bike-trip'); ?>" class="list-group-item uppermustang">Jomsom Muktinath</a></li>
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
                        <div class="trips-mainpic" style="max-width:1200px;text-align: center"><img class="image" src="<?php echo base_url(); ?>assets/img/trips/annapurna.jpg"></div>
                        <div class="description">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box">
                                        <i class="fa fa-2x fa-angle-double-up wow bounceIn text-primary" style="color: black"></i>
                                        <h5>Max Altitude: 5415m</h5>

                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box">
                                        <i class="fa fa-2x fa-line-chart wow bounceIn text-primary" style="color: black" data-wow-delay=".1s"></i>
                                        <h5>Difficulty: Prefessional</h5>

                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box">
                                        <i class="fa fa-2x fa-calendar wow bounceIn text-primary" style="color: black" data-wow-delay=".3s"></i>
                                        <h5>Duration: 12 days</h5>

                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box">
                                        <i class="fa fa-2x fa-usd wow bounceIn text-primary" style="color: black" data-wow-delay=".4s"></i>
                                        <h5>Price: $1640</h5>

                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12" style="text-align: justify;margin-top:10px">
                                    <p style="text-align: justify;padding-left:20px;padding-right:20px;padding-top:20px">Our Annapurna mountain bike trip is an adventure filled guided trip in the himalayas lasting approxmimately 10-12 days. It is a strenous journey that will push you and your bike to the limit with over 235 km of mountain bike ride in high altitude and rough terrain. On each day of the journey you will encounter riding challenges on the diverse trails, some of them technically challenging. You can find the detailed itenerary on this page including short description on what you can expect on each day of the journey.  </p>
                                    <p style="text-align: justify;padding-left:20px;padding-right:20px">We will guide you through the entire journey and provide you with all the necessary equiptment. We also offer custom packages based on your specific needs, if that is what you want then please contact us and we will be happy to design the right trip package for you. </p>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#menu1">Summary</a></li>
                            <li><a data-toggle="tab" href="#menu20">Detailed Itenarary</a></li>
                            <li><a data-toggle="tab" href="#menu3">Price Details</a></li>

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
                                            <td>Arrive in Kathmandu Stay at hotel</td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td> 2</td>
                                            <td>Kathmandu </td>
                                            <td>Short ride around town</td>
                                        </tr>
                                        <tr>
                                            <td> 3</td>
                                            <td>Kathmandu - Besisahsar </td>
                                            <td>270 km drive</td>
                                        </tr>
                                        <tr>
                                            <td> 4</td>
                                            <td>Beshisahar - Tal </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td> 5</td>
                                            <td>Tal - Chame</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td> 6</td>
                                            <td>Chame - Manang</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td> 7</td>
                                            <td>Manang</td>
                                            <td>Rest day </td>
                                        </tr>
                                        <tr>
                                            <td> 8</td>
                                            <td>Manang to Thorong Phedi </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td> 9</td>
                                            <td>Thorong Phedi- Muktinath</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td> 10</td>
                                            <td>Muktinath - Marpha</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td> 11</td>
                                            <td>Marpha - Tatopani</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td> 12</td>
                                            <td>Tatopani - Beni</td>
                                            <td></td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>




                            <div id="menu3" class="tab-pane fade ">
                                <div class="container-fluid" style="padding-top: 20px; margin-bottom: 40px">
                                    <h4>
                                        Pricing Details </h4>
                                    <h5>Price: $1640/person</h5>
                                    <h5>Larger group  (>4 people): $1460/person</h5>
                                    <h5>The price includes the following:  </h5>
                                    <ul>
                                   <li> Mountain bike for the duration of the trip and all the necessary accessories.</li>
                                    <li>   An expert guide.</li>
                                      <li> Public transport expenses.</li>
                                        <li> Accomodation and food. </li>
                                    </ul>



                                </div>
                            </div>



                            <div id="menu20" class="tab-pane fade ">
                                <div class="container-fluid" style="padding-top: 20px; margin-bottom: 40px">
                                    <h4>
                                        Annapurna Mountain Bike Trip </h4>
                                    <h6>Duration: 10-12 days</h6>
                                    <h6>Skills/Fitness: Professional </h6>
                                    <ul>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 1
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                We will pick you up at the airport and take you to a hotel in Kathmandu and check the bike you will be riding on the trip.

                                            </div>
                                        </li>

                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 2
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                A short ride around Kathmandu to ensure you have the right fitness level and skills for the strenuous and challenging trip ahead.


                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 3
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                On the third day of the trip, we will drive to Beshishahar. It is a 270 km drive that takes 7 to 8 hours, depending upon the traffic.

                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 4
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                Start fresh for the 38 km long ride on your mountain bike to Tal. The terrain you will encounter will be rocky and rugged and you will be riding at the altitude of 1700 m. You will pass through rivers and villages and stay over night in a tea house.
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 5
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                We will be back on our bikes and head for Chame which is 40 km from Tal and also the headquarter of Manang district. It is a scenic route filled with waterfalls and awesome natural beauty.
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 6
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                A 29 km ride a the altitude of 3500 m. You can see Gangapurna Mountain, Annapurna 1 and also Gangapurna Lake. During your journey you will also notice the difference in lifestyle of the Manangey residents in the remote villages.
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 7
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                In order to ensure your body can cope with the increasing altitude we will rest at Manang for acclimatization. You can take a visit to the monastery or take a 400 m hike. We also recommend you to see Gangapurna Lake close by if time allows.
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 8
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                In the high altitude of around 4450 m you will make your way to Thorong Phedi. It is a 14 km ride and if you are lucky you can see local wild life such as vultures and Blue Seed.
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 9
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                On the ninth day we will make our way from Thorong Phedi to Muktinath (Alt: 5416m to 3800m). We need to start early in the morning. Wake up at 4:00 am and embark on the 22km ride. First 200 m of the journey includes a steep down hill where we need to carry the bike. On this day we will carry pack lunch with us.
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 10
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                Our destination will be Marpha. It is a 28km ride at the altitude of around 2700m. We will be riding through the trekking trails that are quite technical. Depending on your mountain biking skills the we will either take Supra Valley ride or through the wider roads through the Kagbeni village. You will be able to see the 7th highest mountain in the world, Dhaulagiri. You will stay at Marpha overnight, the apple kingdom of Nepal and home of the Thakali people. The apples there are delicious and you can also try the local brandy.
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 11
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                We will enjoy the 46km downhill ride from Marpha to Tatopani (1190m). The ride is 80% downhill where you will be able to see huge waterfalls in the Jeep trails and also the deepest gorge on the world. Upon arrival at Tatopani we can relax in the natural hot springs.
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 12
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">

                                                The last day of the journey you will ride on your mountain bike to Beni. It is a 22km journey followed by a drive to Pokhara which is 130 km away.
                                            </div>
                                        </li>
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