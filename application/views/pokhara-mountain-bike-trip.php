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
                    <li><a href="<?php echo base_url('kathmandu-mountain-bike-trip'); ?>" class="list-group-item kathmandutrip">Kathmandu Trip</a></li>
                    <li><a href="<?php echo base_url('kathmandu-round-mountain-bike-trip'); ?>" class="list-group-item kathmanduroundtrip">Kathmandu Round Trip</a></li>
                    <li><a href="<?php echo base_url('pokhara-mountain-bike-trip'); ?>" class="list-group-item pokhara active">Pokhara</a></li>
                    <li><a href="<?php echo base_url('classic-nepal-mountain-bike-trip'); ?>" class="list-group-item classicnepal">Classic Nepal</a></li>
                </div>
            </div>
        </div>
        <div class="col-lg-10">
            <div id="container-fluid" style="background-color: #ffffff;">
                <div id="heading1" class="tab-pane fade in active" >
                    <section id="services" style="margin-bottom: 50px;">
                        <div class="trips-mainpic" style="max-width:1200px;text-align: center"><img class="image" src="<?php echo base_url(); ?>assets/img/trips/pokhara.jpg"></div>
                        <div class="description">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box">
                                        <i class="fa fa-2x fa-angle-double-up wow bounceIn text-primary" style="color: black"></i>
                                        <h5>Max Altitude: 17,700 ft</h5>

                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box">
                                        <i class="fa fa-2x fa-line-chart wow bounceIn text-primary" style="color: black" data-wow-delay=".1s"></i>
                                        <h5>Difficulty: Challenging</h5>

                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box">
                                        <i class="fa fa-2x fa-calendar wow bounceIn text-primary" style="color: black" data-wow-delay=".3s"></i>
                                        <h5>Duration: 9 days</h5>

                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box">
                                        <i class="fa fa-2x fa-usd wow bounceIn text-primary" style="color: black" data-wow-delay=".4s"></i>
                                        <h5>Price: $920</h5>

                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12" style="text-align: justify;margin-top:10px">
                                    <p style="text-align: justify;padding:20px">Pokhara (Nepali: पोखरा) is the second largest city of Nepal as well as the headquarters of Kaski District, Gandaki Zone and the Western Development Region. It is located 200 km west of the capital Kathmandu. Despite being a comparatively smaller valley than Kathmandu, its geography varies dramatically within just few kilometres from north to south.</p>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#menu1">Summary</a></li>
                            <li><a data-toggle="tab" href="#menu2">Detailed Itenarary</a></li>
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
                                            <td>Kathmandu - Nuwakot </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td> 3</td>
                                            <td>Nuwakot - Dhading Besi </td>
                                            <td>270 km drive</td>
                                        </tr>
                                        <tr>
                                            <td> 4</td>
                                            <td>Dhading Besi - Gorkha </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td> 5</td>
                                            <td>Gorkha - Sundarbazaar</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td> 6</td>
                                            <td>Sundarbazaar - Pokhara</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td> 7</td>
                                            <td>Pokhara rest day</td>
                                            <td>Rest day </td>
                                        </tr>
                                        <tr>
                                            <td> 8</td>
                                            <td>Pokhara to Butwal/Tansen </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td> 9</td>
                                            <td>Fly back to Kathmandu</td>
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
                                    <h5>Price: $920/person</h5>
                                    <h5>Larger group  (>4 people): $810/person</h5>
                                    <h5>The price includes the following:  </h5>
                                    <ul>
                                        <li> Mountain bike for the duration of the trip and all the necessary accessories.</li>
                                        <li>   An expert guide.</li>
                                        <li> Public transport expenses.</li>
                                        <li> Accomodation and food. </li>
                                    </ul>



                                </div>
                            </div>



                            <div id="menu2" class="tab-pane fade ">
                                <div class="container-fluid" style="padding-top: 20px; margin-bottom: 40px">
                                    <h4>
                                        Kathmandu - Pokhara Mountain Bike Trip </h4>
                                    <h6>Duration: 9 days</h6>
                                    <h6>Skills/Fitness: Professional </h6>
                                    <ul>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 1
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                We will pick you up from the airport and take you to a hotel. On the first day you will check the mountain bike you will be riding in the trip.



                                            </div>
                                        </li>

                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 2
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                We will leave for Budanilkantha, a famous Hindu temple in Kathmandu. Then we will ride through the outskirts of Shivapuri National Park. You can see Langtang Range in this route. It is followed by a downhill ride upto Likhu Khola and make our way to Nuwakot, our destination covering total of 45km.

                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 3
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                On the third day we will head towards Dhading Besi. The ride will start with a 3km uphill ride on black topped road. You will see farm lands and local villages. From Samari to Taskar the road is rocky and from Taskar to Ratomate its dusty. We will finally reach Dhading besi covering almost 45km of mountain bike riding.


                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 4
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                We will make our way to Gorkha covering the total distance of 54.5km. We start with well built road and hit “Jeep Tracks” after Murali Bhanjyang. Gorkha, the destination is the birth place of Prithivi Narayan Shah, the King who conquered numerous kingdoms and created a united Nepal. Upon arrival, you can visit Gorkha Palace situated at the top of the mountain.
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 5
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                On our way to Sundar Bazaar, we will complete almost 54km mountain bike riding. You can see the local banana plantations and cross two different districts Dhading and Lumjung. You will stay at a Guest House over night
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 6
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                On the sixth day we will aim to reach Pokhara covering the distance of 74km. From Sundar Bazaar you can see Machhapuchhre Mountain. Once in Pokhara you can see Begnas Lake which is less crowded compared to Phewa Lake. Pokhara is a very popular tourist destination with tons of fun activities including boating, paragliding etc.

                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 7
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                Rest day in Pokhara. You can relax and explore the city, walk around lake side and see the international mix of people, get involved in outdoor activity or just relax on the boat in Fewa lake whole day.


                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 8
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                After the rest day will will start fresh and make out way to Tansen and Butwal. The journey includes off road assent of around 3km, followed by 12 km of “Jeep track” and also a narrow trail with downhill. We will cover approximately 35km of riding.

                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 9
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                Fly back to Kathmandu.

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