<div class="col-lg-12">
    <div id="container-fluid" style="background-color: #ffffff;">
        <div id="heading1" class="tab-pane fade in active" >
            <section id="services" style="margin-bottom: 50px;">
                <?php foreach($trips->result() as $trip) { ?>
                    <div class="trips-mainpic" style="max-width:1200px;text-align: center"><img class="image" src="<?php echo base_url(); ?>assets/img/trips/<?php echo $trip->image; ?>"></div>

                    <div class="description">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 text-center">
                                <div class="service-box">
                                    <i class="fa fa-2x fa-angle-double-up wow bounceIn text-primary" style="color: black"></i>
                                    <h5>Max Altitude: <?php echo $trip->altitude; ?> </h5>

                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 text-center">
                                <div class="service-box">
                                    <i class="fa fa-2x fa-line-chart wow bounceIn text-primary" style="color: black" data-wow-delay=".1s"></i>
                                    <h5>Difficulty: <?php echo $trip->difficulty; ?></h5>

                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 text-center">
                                <div class="service-box">
                                    <i class="fa fa-2x fa-calendar wow bounceIn text-primary" style="color: black" data-wow-delay=".3s"></i>
                                    <h5>Duration: <?php echo $trip->duration; ?></h5>

                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 text-center">
                                <div class="service-box">
                                    <i class="fa fa-2x fa-usd wow bounceIn text-primary" style="color: black" data-wow-delay=".4s"></i>
                                    <h5>Price: <?php echo $trip->price; $price=$trip->price; ?></h5>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-6" style="padding-left: 20px; padding-top: 10px;"><h2><?php echo $trip->tripName;?></h2></div>
                        <div class="pull-right btn btn-danger" style="margin: 25px 30px" id="enquiry">Enquire About This!!</div>
                        <div class="row">
                            <div class="col-md-12" style="text-align: justify;">
                                <p style="text-align: justify;padding:20px"><?php echo $trip->description; ?></p>
                            </div>
                        </div>
                    </div>
                <?php }?>

                <ul class="nav nav-pills">
                    <li class="active"><a data-toggle="tab" href="#menu1">Detailed Itinerary</a></li>
                    <li><a data-toggle="tab" href="#menu2">Price Details</a></li>
                </ul>

            <div class="tab-content">
                <div id="menu1" class="tab-pane fade in active">
                    <div class="container-fluid" style="padding-top: 20px; margin-bottom: 40px">
                        <ul>
                            <?php foreach($details->result() as $detail) { ?>
                                <li>
                                    <div class="col-md-2"style="padding: 15px">
                                        <?php echo $detail->day; ?>
                                    </div>
                                    <div class="col-md-10"style="padding: 15px; text-align: justify;">
                                        <?php echo $detail->day_detail; ?>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

                <div id="menu2" class="tab-pane fade">
                    <div class="container-fluid" style="padding-top: 20px; margin-bottom: 40px">
                        <h4>Pricing Details </h4>
                        <h5>Price: <?php echo '$'.$price.'/person' ?></h5>
                        <h5>Discounted price for the group</h5>
                        <h5>The price includes the following:  </h5>
                        <ul>
                            <li> Mountain bike for the duration of the trip and all the necessary accessories.</li>
                            <li> An expert guide.</li>
                            <li> Public transport expenses.</li>
                            <li> Accommodation and food. </li>
                        </ul>
                        <h5>The price excludes the following: </h5>
                        <ul>
                            <li>All drinks and beverages.</li>
                            <li>All heritage site entry fees.</li>
                            <li>Vehicle service.</li>
                            <li>All other extra expenses.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>
</div>
</div>

<script>
    $('#enquiry').on('click',function(e){
        e.preventDefault();
        $.colorbox({
            href:"<?php echo base_url()?>crankhouse/enquiry",
            top:50,
            width:800,
            height:420,
            onClosed:function() {

            }
        });
    });
</script>