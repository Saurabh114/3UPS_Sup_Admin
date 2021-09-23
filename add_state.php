<?php
$ch = curl_init();
$url = "https://www.hspmsolutions.com/3-ups_api/index.php/web/Admin_web/Fetch_info_admin/getCountry";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
if($e = curl_error($ch)){
     echo $e;
 }
 else{
     $result = json_decode($response); 
 }
 $res = array();
 $res=$result->data;
 /**************************get all state data ********************/
 $url2 = "https://www.hspmsolutions.com/3-ups_api/index.php/web/Admin_web/Fetch_info_admin/getStates";
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_state = curl_exec($ch);
 if($e = curl_error($ch)){
     echo $e;
 }
 else{
     $result_state = json_decode($response_state); 
 }
 $res_state = array();
 $res_state=$result_state->data;
?>
<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon.png">
    <title>3UPS Super Admin Panel | Add State</title>
    <!-- Custom CSS -->
    <link href="./assets/css/style.min.css" rel="stylesheet">
</head>

<body class="skin-default-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">3UPS Admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include('includes/header.php') ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include('includes/sidebar.php') ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">State</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item active">State</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add State</h4>
                                <form class="needs-validation" novalidate id="countryform" method="post">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label class="form-label" for="validationCustom01">Select Country</label>
                                                <select class="form-select" id="country" name="country" required>
                                                    <option value="" selected disabled>Select Contry</option>
                                                    <?php 
                                                for($i=0;$i<count($res);$i++){
                                                    ?>
                                                    <option value="<?php echo $res[$i]->country_id ?>"><?php echo $res[$i]->country_name ?></option>
                                                    <?php  
                                                 }
                                                ?>
                                                </select>
                                                <div class="invalid-feedback">Please Select The Country</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label" for="validationCustom01">Add State</label>
                                            <input type="text" class="form-control" id="state" placeholder="Add State" name="state" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                       <div class="row">
                                       <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationCustom01">Enter Latitude</label>
                                <input type="text" class="form-control" id="state_lat" placeholder="Enter Latitude" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationCustom01">Enter Longitude</label>
                                <input type="text" class="form-control" id="state_long" placeholder="Enter Longitude" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                                    </div>
                                    <center><button class="btn btn-primary text-white" type="button" id="addstate" onclick="addState()">Add</button></center>
                                </form>
                                <script>
                                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                                    (function() {
                                        'use strict';
                                        window.addEventListener('load', function() {
                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                            var forms = document.getElementsByClassName('needs-validation');
                                            // Loop over them and prevent submission
                                            var validation = Array.prototype.filter.call(forms, function(form) {
                                                form.addEventListener('submit', function(event) {
                                                    if (form.checkValidity() === false) {
                                                        event.preventDefault();
                                                        event.stopPropagation();
                                                    }
                                                    form.classList.add('was-validated');
                                                }, false);
                                            });
                                        }, false);
                                    })();
                                       
                                       /**********************************ajax*******************************************/
                                       function addState(){
                                      
                var country=$("#country").val();
                var state=$("#state").val();
                var state_lat=$("#state_lat").val();
                var state_long=$("#state_long").val();
                $.ajax({
                    url:'stateinsert.php',
                    method:'POST',
                    data:{
                        country:country,
                        state:state,
                        state_lat:state_lat,
                        state_long:state_long
                    },
                   success:function(data){
                       alert("state details added");
                       window.location.href="./add_state.php"
                   }
                });
        }
           </script>
    

                                    
                                    
                                  

                                
                            </div>
                        </div>
                    </div>

                </div>
                  

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">States</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped border mt-4" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Country Name</th>
                                                <th>State Name</th>
                                                <th>Latitude</th>
                                                <th>Longitude</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Country Name</th>
                                                <th>State Name</th>
                                                <th>Latitude</th>
                                                <th>Longitude</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            for($i=1;$i<count($res_state);$i++)
                                            {
                                            ?>
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php echo $res_state[$i]->country_name?></td>
                                                <td><?php echo $res_state[$i]->state_name?></td>
                                                <td><?php echo $res_state[$i]->state_lat?></td>
                                                <td><?php echo $res_state[$i]->state_long?></td>
                                               
                                                <td class="active_deactive_icons">
                                                <?php
                                                if($res_state[$i]->state_status)
                                                {
                                                ?>
                                                    <a class="active" href="javascript:void(0)" title="Active"><i class="far fa-check-circle"></i></a>
                                                    <?php
                                                } else{ 
                                                    ?>
                                                    <a class="dactive" href="javascript:void(0)" title="Dactive"><i class="far fa-times-circle"></i></a>
                                                    <?php
                                                }
                                                ?>
                                                </td>
                                                <td class="curd_icons">
                                                <a class="edit" type="button" title="Edit" data-id="<?php echo $res_state[$i]->state_id ?>"
                                                    onclick="$('#dataid').val($(this).data('id')); $('#showmodal').modal('show');" 
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@getbootstrap"><i class="far fa-edit"></i></a>
                                                 <!-- /   <a class="remove" href="javascript:void(0)" title="Remove"><i class="fas fa-trash" aria-hidden="true"></i></a> -->
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php include('includes/footer.php') ?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
<!-- ============================================================== 
                   Edit Modal
    ================================================================ -->

    <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel1">Update State</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" novalidate method="post" id="stateupdate" method="post" >
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="form-label" for="validationCustom01">Select Country</label>
                                    <select class="form-select" id="country_name" required>
                                        <option value="" selected disabled>Select Contry</option>
                                        <?php 
                                                for($i=0;$i<count($res);$i++){
                                                    ?>
                                                    <option value="<?php echo $res[$i]->country_id ?>"><?php echo $res[$i]->country_name ?></option>
                                                    <?php  
                                                 }
                                                ?>
                                    </select>
                                    <div class="invalid-feedback">Please Select The Country</div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationCustom01">Add State</label>
                                <input type="text" class="form-control" id="state" placeholder="Add State" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationCustom01">Enter Latitude</label>
                                <input type="text" class="form-control" id="latitude" placeholder="Enter Latitude" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationCustom01">Enter Longitude</label>
                                <input type="text" class="form-control" id="longitude" placeholder="Enter Longitude" required>
                                <input type="hidden" name="dataid" id="dataid" value=""/>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary text-white">Update</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->
    <!-- ============================================================== 
                        Edit Modal End
     ============================================================== -->


    <script src="./assets/node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="./assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="./assets/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="./assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="./assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="./assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="./assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="./assets/js/custom.min.js"></script>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
         $("document").ready(function() {
        $('#country').on('change', function() {
var country_id = this.value;
$.ajax({
url: "./backend/states-by-states.php",
type: "POST",
data: {
country_id: country_id
},
cache: false,
success: function(result){
$("#state").html(result);
 
}
});
});
    });

    $("document").ready(function() {
                                        $("#stateUpdate").submit(function(e) {
                                            // e.preventDefault();
                                            var country_name = $("#country_name").val();
                                            var state = $("#state").val();
                                            var latitude=$("#latitude").val();
                                            var longitude=$("#longitude").val();
                                            var id = $("#dataid").val();
                                            
                                            if(country_name !='' && state != '' && latitude!='' && longitude !=''){ 
                                            $.ajax({
                                                url: './backend/stateUpdate.php',
                                                method: 'POST',
                                                data: {
                                                    type:"update",
                                                    country_name:country_name,
                                                    state:state,
                                                    latitude:longitude
                                                },
                                                success: function(data) {
                                                    alert("State updated");
                                                }
                                            });
                                        }
                                        else{
                                            alert("Insert all details")
                                        }
                                        });
                                    });

    </script>
</body>

</html>