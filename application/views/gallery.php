
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Crank House - Mountain Bike Trips Nepal Gallery</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Welcome to Crank House Kathmandu, Nepal photo gallery of all the trips around nepal. ">
        <meta name="author" content="Crank House">
        <meta name="keyword" content="Mountain, bike, mountain bike,  Nepal, MTB, cycle, tour">

        <style>

             /*Demo styles*/
            html,body{background:#222;margin:0;}
            body{border-top:4px solid #000;}
            .content{color:#777;font:12px/1.4 "helvetica neue",arial,sans-serif;margin-left: 7%;}
            h1{font-size:12px;font-weight:normal;color:#ddd;margin:0;}
            p{margin:0 0 20px}
            a {color:#22BCB9;text-decoration:none;}
            .cred{margin-top:20px;font-size:11px;}

            /* This rule is read by Galleria to define the gallery height: */
            #galleria{height:600px;width:90%}

        </style>

        <!-- load jQuery -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

        <!-- load Galleria -->
        <script src="../assets/js/galleria-1.4.2.min.js"></script>

    </head>
<body>
    <div class="content">
        <h1> Mountain Bike Trips Photo Gallery</h1>
        <p>Our moments during our adventures</p>

        <!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->

        <div id="galleria">
<!--            <img src="../assets/img/trips/1.jpg">-->

            <?php
            foreach(glob("assets/img/trips/*.*") as $filename){ ?>
<!--                --><?php //echo $filename; ?>
                <img src="<?php echo base_url().$filename; ?>" />
            <?php
            }
            ?>

        </div>
    </div>

    <script>

    // Load the classic theme
    Galleria.loadTheme('<?php echo base_url();?>assets/js/galleria.classic.min.js');

    // Initialize Galleria
    Galleria.run('#galleria');

    </script>
    </body>
</html>