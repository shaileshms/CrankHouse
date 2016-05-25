<div class="container col-md-12">
    <h2>Enquire about this trip:</h2>
    <form class="form-horizontal" id="formsubmit" role="form" method="post" action="<?php echo base_url() ?>crankhouse/enquiryform">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label text-muted">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label text-muted">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="youremail@domain.com">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label text-muted">Message</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="4" name="message"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <input id="submit" name="submit" type="submit" value="Enquiry" class="btn btn-info">
            </div>
        </div>
        <div id="response" class="col-sm-10 col-sm-offset-2 text-muted"></div>
    </form>
</div>

<script>
    $("#formsubmit").submit(function (e) {
        e.preventDefault();
        var url = $(this).attr('action');
        var data = $(this).serialize();
        $.ajax({
            url: url,
            type: 'POST',
            data: data
        }).done(function (data) {
            $("#response").html(data);
            $("#formsubmit")[0].reset();
        });
    });
</script>