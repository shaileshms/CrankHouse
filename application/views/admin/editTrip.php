<div class="well">
    <div class="errorresponse"></div>
    <form class="form" id="frmupdate" role="form" action="<?php echo base_url() ?>admin/updateTrip" method="POST">
        <?php foreach($query->result() as $row):?>
            <div class="form-group">
                <label for="trip">Trip</label>
                <input type="trip" name="trip" class="form-control" value="<?php echo $row->tripName?>" readonly>
            </div>
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" class="form-control" name="firstname" value="<?php echo $row->firstname?>">
            </div>

            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" class="form-control" value="<?php echo $row->lastname?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $row->password?>">
            </div>

            <div class="form-group">
                <input type="hidden" name="hidden" value="<?php echo $row->username ?>"/>
                <input type="submit" class="btn btn-success" id="username" value="update">
            </div>
        <?php endforeach;?>
    </form>
</div>

<script>
    $(document).ready(function (){
        $("#frmupdate").submit(function(e){
            e.preventDefault();
            $.ajax({
                url:'<?php echo base_url() ?>user/update',
                type:'POST',
                dataType:'json',
                data: $("#frmupdate").serialize()
            }).done(function (data){
                window.mydata = data;
                if(mydata['error'] !=""){
                    $(".errorresponse").html(mydata['error']);
                }
                else{
                    $(".errorresponse").text('');
                    $('#frmupdate')[0].reset();
                    $("#response").html(mydata['success']);

                    $.colorbox.close();
                    $("#response").html(mydata['success']);
                }
            });
        });
    });
</script>
</body>
</html>