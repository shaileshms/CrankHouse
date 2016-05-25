<div class="well">
    <div class="errorresponse"></div>
    <form class="form" id="frmupdate" role="form" action="<?php echo base_url() ?>admin/updateTrip" method="POST">
        <?php foreach($trip->result() as $row):?>
            <div class="form-group">
                <label for="trip">Trip</label>
                <input type="text" name="tripName" class="form-control" value="<?php echo $row->tripName?>">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea rows="6" class="form-control" name="description" id="trip"><?php echo $row->description?></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" value="<?php echo $row->price?>">
            </div>

            <div class="form-group">
                <label for="altitude">Altitude</label>
                <input type="text" name="altitude" class="form-control" value="<?php echo $row->altitude?>">
            </div>
            <div class="form-group">
                <label for="difficulty">Difficulty</label>
                <input type="text" name="difficulty" class="form-control" value="<?php echo $row->difficulty?>">
            </div>
            <div class="form-group">
                <label for="distance">Distance</label>
                <input type="text" name="distance" class="form-control" value="<?php echo $row->distance?>">
            </div>
            <div class="form-group">
                <label for="duration">Duration</label>
                <input type="text" name="duration" class="form-control" value="<?php echo $row->duration?>" readonly>
            </div>

            <?php $i=1; foreach($detail->result() as $day): ?>
                <div class="form-group">
                    <label for="day"><?php echo $day->day;?></label>
                    <textarea rows="6" class="form-control" name="<?php echo "day".$i;?>"><?php echo $day->day_detail?></textarea>
                </div>
            <?php $i++; endforeach;?>

            <div class="form-group">
                <input type="hidden" name="hidden" value="<?php echo $row->id ?>"/>
                <input type="submit" class="btn btn-success" id="trip" value="Update">
            </div>
        <?php endforeach;?>
    </form>
</div>

<script>
    $(document).ready(function (){
        $("#frmupdate").submit(function(e){
            e.preventDefault();
            $.ajax({
                url:'<?php echo base_url() ?>admin/updateTrip',
                type:'POST',
                dataType:'json',
                data: $("#frmupdate").serialize()
            }).done(function (data){
                window.mydata = data;
                if(mydata['error'] !=""){
                    $(".errorresponse").html(mydata['error']);
                }
                else{
                    $.colorbox.close();
                    $("#response").html(mydata['success']);
                }
            });
        });
    });
</script>
</body>
</html>