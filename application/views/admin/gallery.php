<div class="container col-md-12" style="margin-left: 15em; margin-top: 2em;">
    <div id="response"></div>
    <div class="errorresponse"></div>
    <h2>Add gallery photos</h2>
    <form class="form-horizontal" id="frmadd" role="form" action="<?php echo base_url() ?>admin/addPhotos" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label class="control-label col-sm-2" for="image">Photos:</label>
            <div class="col-sm-4">
            <span class="btn btn-default btn-file form-control">
                <input type="file" name="uploadedimages[]" id="myfile" multiple>
            </span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
        </div>
    </form>
</div>
<script>
    $(document).ready(function () {
        // add data
        $("#frmadd").submit(function (e) {
            e.preventDefault();
            var url = $(this).attr('action');
            var data = new FormData(this);
            $.ajax({
                url: url,
                type: 'POST',
                processData: false,
                contentType: false,
                dataType:'json',
                data: data
            }).done(function (data) {
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
