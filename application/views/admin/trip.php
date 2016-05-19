<div class="container col-md-12" style="margin-left: 15em; margin-top: 2em;">
<div id="response"></div>

<div class="panel-body">
    <div class="table-responsive">

        <table class="table table-striped table-hover" id="trip">
            <thead class="cf">
            <tr>
                <td><strong>ID</strong></td>
                <td><strong>Trip</strong></td>
                <td><strong>Price</strong></td>
                <td><strong>Altitude</strong></td>
                <td><strong>Diffuculty</strong></td>
                <td><strong>Distance</strong></td>
                <td><strong>Duration</strong></td>
                <td><strong>Actions</strong></td>
            </tr>
            </thead>
            <tbody id="listTrip">

            </tbody>
        </table>
    </div>
</div>
</div>

<script>
    $(document).ready(function (){
        //fill data
        var btnedit='';
        var btndelete = '';
        listTrip();

        function listTrip(){
            $.ajax({
                url:'<?php echo base_url() ?>admin/listTrip',
                type:'GET'
            }).done(function (data){
                $("#listTrip").html(data);
//                $('#trip').paging({limit:10});

                btnedit = $("#listTrip .btnedit");
                btndelete = $("#listTrip .btndelete");
                var deleteurl = btndelete.attr('href');
                var editurl = btnedit.attr('href');

                //delete record
                btndelete.on('click', function (e){
                    e.preventDefault();
                    var deleteid = $(this).data('id');
                    if(confirm("are you sure")){

                        $.ajax({
                            url:deleteurl,
                            type:'POST' ,
                            data:'id='+deleteid
                        }).done(function (data){
                            $("#response").html(data);
                            listTrip();
                        });
                    }
                });

                //edit record
                btnedit.on('click', function (e){
                    e.preventDefault();
                    var editid = $(this).data('id');
                    $.colorbox({
                        href:"<?php echo base_url()?>admin/editTrip/"+editid,
                        top:50,
                        width:500,
                        onClosed:function() {listUser();}
                    });
                });

            });
        }

    });
</script>