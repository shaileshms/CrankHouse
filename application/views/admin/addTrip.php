<div class="container col-md-12">
    <div id="response"></div>
    <div class="errorresponse"></div>
    <h2>New trip information:</h2>
    <form class="form-horizontal" id="frmadd" role="form" action="<?php echo base_url() ?>admin/addTrip" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label class="control-label col-sm-2" for="tripName">Trip Name:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="trip" id="trip" placeholder="Enter Trip Name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="description">Description:</label>
            <div class="col-sm-6">
                <textarea rows="6" class="form-control" name="description" id="trip" />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="price">Price:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="price" id="price" placeholder="Enter Price">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="altitude">Altitude:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="altitude" id="altitude" placeholder="Enter Altitude">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="difficulty">Difficulty:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="difficulty" id="difficulty" placeholder="Enter Difficulty">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="distance">Distance:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="distance" id="distance" placeholder="Enter Distance">
            </div>
        </div>
        <div class="form-group" id="int">
            <label class="control-label col-sm-2" for="duration">Duration:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="duration" id="duration" placeholder="Enter Duration">
            </div>
            <div class="col-sm-2">
                <button type="button" id="itinerary" class="btn btn-info">Detail Itinerary</button>
            </div>
            <div class="col-sm-12"></div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="image">Image:</label>
            <div class="col-sm-6">
            <span class="btn btn-default btn-file form-control">
                <input type="file" name="uploadedimages[]" id="myfile">
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
        $("#itinerary").click(function() {
            var days = $("#duration")[0].value;
            for (i=1; i<=days; i++) {
                var thisdiv = document.createElement("div");
                thisdiv.className = 'form-group';
                var ap = document.getElementById('int')
                ap.appendChild(thisdiv);

                var thislabel = document.createElement("label");
                thislabel.className = 'control-label col-sm-2';
                thislabel.innerHTML = 'Day '+i+':';
                ap.appendChild(thislabel);

                var anotherdiv = document.createElement("div");
                anotherdiv.className = 'col-sm-6';
                ap.appendChild(anotherdiv);

                var thistextarea = document.createElement("textarea");
                thistextarea.className = 'form-control';
                thistextarea.rows = '4';
                thistextarea.cols = '50';
                thistextarea.name = 'day'+i;
                thistextarea.id = 'day'+i;
                anotherdiv.appendChild(thistextarea);
            }
        });

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
