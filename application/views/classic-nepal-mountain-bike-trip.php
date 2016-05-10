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
                    <li><a href="<?php echo base_url('pokhara-mountain-bike-trip'); ?>" class="list-group-item pokhara">Pokhara</a></li>
                    <li><a href="<?php echo base_url('classic-nepal-mountain-bike-trip'); ?>" class="list-group-item classicnepal active">Classic Nepal</a></li>
                </div>
            </div>
        </div>
        <div class="col-lg-10">
            <div id="container-fluid" style="background-color: #ffffff;">
                <div id="heading1" class="tab-pane fade in active" >
                    <section id="services" style="margin-bottom: 50px;">
                        <div class="trips-mainpic" style="max-width:1200px;text-align: center"><img class="image" src="<?php echo base_url(); ?>assets/img/trips/classicnepal.jpg"></div>
                        <div class="description">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box">
                                        <i class="fa fa-2x fa-angle-double-up wow bounceIn text-primary" style="color: black"></i>
                                        <h5>Max Altitude: 1300m</h5>

                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box">
                                        <i class="fa fa-2x fa-line-chart wow bounceIn text-primary" style="color: black" data-wow-delay=".1s"></i>
                                        <h5>Difficulty: Professional</h5>

                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box">
                                        <i class="fa fa-2x fa-calendar wow bounceIn text-primary" style="color: black" data-wow-delay=".3s"></i>
                                        <h5>Duration: 14 days</h5>

                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box">
                                        <i class="fa fa-2x fa-usd wow bounceIn text-primary" style="color: black" data-wow-delay=".4s"></i>
                                        <h5>Price: $1365</h5>

                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12" style="text-align: justify;margin-top:10px">
                                    <p style="text-align: justify;padding:20px">The Classic Nepal trip includes cycling around the classic sites of Nepal including the birthplace of Gautam Buddha, Sauraha National Park. This trip lets you enjoy the classic Nepal and see geographical diversity. You will find yourself cycling in mountains as well as the plains meet friendly locals along the way and eat variety of cuisines as well as local food and drinks </p>
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
                                        <td>Bhaktapur  - Godawari</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> 3</td>
                                        <td>Godawari -  Dakshinkali  </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> 4</td>
                                        <td>Dakshinkali - Daman</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> 5</td>
                                        <td>Daman-Hetauda</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> 6</td>
                                        <td>Hetauda - Chitwan Sauraha</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> 7</td>
                                        <td>Sauraha Activities/Rest </td>
                                        <td>Jungle Visit and Tharu Dance</td>
                                    </tr>

                                    <tr>
                                        <td> 8</td>
                                        <td>Sauraha to Lumbini</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> 9</td>
                                        <td>Lumbini – Butwal</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> 10</td>
                                        <td>Butwal - Tansen</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> 11</td>
                                        <td>Tansen- Pokhara</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> 12</td>
                                        <td>Pokhara Activities</td>
                                        <td>Boating, Hiking, Riding and Sightseeing</td>
                                    </tr>
                                    <tr>
                                        <td> 13</td>
                                        <td>Pokhara More Exploration</td>
                                        <td>Boating, Hiking, Riding and Sightseeing</td>
                                    </tr>
                                    <tr>
                                        <td> 14</td>
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
                                    <h5>Price: $1365/person</h5>
                                    <h5>Larger group  (>4 people): $1125/person</h5>
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
                                                We will pick you up from the airport and take you to your hotel. You can check your bike for the trip.


                                            </div>
                                        </li>

                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 2
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                We will start our 27km long mountain bike trip. At first, we will head towards Bhaktapur, a beautiful city full of awesome Nepali architecture, old buildings and temples. After a relaxing lunch in the square, we will make our way to Lubhu, a village famous for handmade textiles and then towards Godawari where you can visit Bajra Barahi temple situated in the midst of beautiful woodland.



                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 3
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                After a short drive to Bungamati, situated in the southern part of Kathmandu, we will eat lunch and ride towards Dakshinkali via Chobar gorge. Then we will take a 20km bike ride to Dakshinkali. Upon arrival, we rest for the day and make an early morning visit to the temple.


                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 4
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                We will ride towards Kulakhani Hydro Electricity project via some exciting trails. The trails includes pine forests and small villages. We will also visit Markhu that is a home to a beautiful lake. After lunch at Markhu, we will take our mountain bikes towards Daman, riding in the highway with clocking of 65km of travelling. We will stay overnight at a hotel.

                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 5
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                On the fifth day we will gear up for the downhill ride towards Hetauda. This part of the journey is 52km long. The roads are adventurous and includes sharp turns and bends 1500m downhill. You can see Rhododendron forests and awesome views beneath.

                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 6
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                We will take the Mahendra highway and arrive at Lothat Bridge which is about 33km away. Then we will the the off-road route leading towards Sauraha. We will ride with Rapti River on the left and forests on the right arriving at the comfortable hotel at Sauraha.

                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 7
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                On the seventh day we will rest and soak up the warm climate of Terai plains. Sauraha has a lot to offer. You can take elephant ride in the National Park or enjoy the local Tharu dance. The national park is home to one-horned rhinos and Royal Bengal Tiger and if you are lucky you will glimpse these wonderful species.

                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 8
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                We will head towards Lumbini, birthplace of Lord Buddha. On the way you will enter forest area that is home to over 130 different species of plants, many endangered. There are also lakes and other natural wonders and once we leave these behind we will see drastic change in scenery. Then we will once again ride on the highway and go towards Narayanghat where we will rest for refreshments after which we will drive to Lumbini. Once at Lumbini we will have ridden 60km of on/off road terrain followed by 132km drive.

                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 9
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                We will return trip to Butwal riding through small villages to Bhairahawa and then continue until we complete the 62km ride to Butwal.

                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 10
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                After breakfast we will take the uphill ride to Tansen on the Siddhartha Highway. It is an uphill ride that slopes up gently at first and once we closer to Tansen it gets quite steep. You can Dhaulagiri and the Annapurna ranges including Machhapuchhare mountain. Tansen is much like Bhaktapur, full of traditional Nepali architecture and an old palace. This part of the journey is around 40km long.

                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 11
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">
                                                We will get ready for 60km long journey from Tansen. The start of the journey includes a downhill road that merges with Siddhartha highway. For lunch we will stop at Galyang and then ride towards Pokhara. The area is popular amonst honey hunters. We will then take 65km drive to Pokhara.


                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 12
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">

                                                Pokhara Rest day 1

                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 13
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">

                                                Pokhara Rest day 2

                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1"style="padding: 15px">
                                                Day 14
                                            </div>
                                            <div class="col-md-11"style="padding: 15px">

                                              Fly back to Kathmandu

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