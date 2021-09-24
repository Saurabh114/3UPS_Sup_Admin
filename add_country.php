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
    <title>3UPS Super Admin Panel | Add Country</title>
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
                        <h4 class="text-themecolor">Country</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item active">Country</li>
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
                                <h4 class="card-title">Add Country</h4>
                                <form class="needs-validation" novalidate id="countryform" method="POST">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label" for="validationCustom01">Country Name</label>
                                            <input type="text" class="form-control" id="country_name" placeholder="Country Name" name="country_name" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label" for="validationCustomUsername">Mobile Country Code</label>
                                            <div class="input-group">
                                                <input type="tel" class="form-control" id="mobile_country_code" name="mobile_country_code" placeholder="Mobile Country Code"  aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Please add Mobile Country Code.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label" for="validationCustom01">Enter Latitude</label>
                                            <input type="text" class="form-control" id="Latitude" placeholder="Enter Latitude" name="latitude" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label" for="validationCustom01">Enter Longitude</label>
                                            <input type="text" class="form-control" id="longitude" placeholder="Enter Longitude" name="longitude" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                    <div style="text-align: center;">
                                        <button class="btn btn-primary text-white" type="button" id="addcountry" name="addcountry" onclick="addCountry()">Add</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Countries</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped border mt-4" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Country Name</th>
                                                <th>Mobile Code</th>
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
                                                <th>Mobile Code</th>
                                                <th>Latitude</th>
                                                <th>Longitude</th>
                                                <th>status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            for($i=1;$i<count($res);$i++)
                                            {
                                            ?>
                                            <tr>
                                                <td><?php echo $i?></td>
                                                <td><?php echo $res[$i]->country_name ?></td>
                                                <td><?php echo $res[$i]->mobile_country_code ?></td>
                                                <td><?php echo $res[$i]->country_lat ?></td>
                                                <td><?php echo $res[$i]->country_long ?></td>
                                               
                                                <td class="active_deactive_icons">
                                                <?php
                                                if($res[$i]->country_status){
                                                    
                                                
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
                                                    <a class="edit" type="button" title="Edit" data-id="<?php echo $res[$i]->country_id ?>"
                                                    onclick="$('#dataid').val($(this).data('id')); $('#showmodal').modal('show');" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@getbootstrap"><i class="far fa-edit"></i></a>
                                                   <!-- / <a class="remove" href="javascript:void(0)" title="Remove"><i class="fas fa-trash" aria-hidden="true"></i></a> -->
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

    <!-- ============================================================== 
                   Edit Modal
    ================================================================ -->

    <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel1">Update Country</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                <form class="needs-validation" novalidate id="countryUpdate" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationCustom01">Country Name</label>
                                <input type="text" class="form-control" id="country_name" placeholder="Country Name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationCustomUsername">Mobile Country Code</label>
                                <div class="input-group">
                                    <input type="tel" class="form-control" id="mobile_country_code" placeholder="Mobile Country Code" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please add Mobile Country Code.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationCustom01">Enter Latitude</label>
                                <input type="text" class="form-control" id="country_lat" placeholder="Enter Latitude" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationCustom01">Enter Longitude</label>
                                <input type="text" class="form-control" id="country_long" placeholder="Enter Longitude" required>
                                <input type="hidden" name="countrydataid" id="dataid" value=""/>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary text-white">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.modal -->
    <!-- ============================================================== 
                        Edit Modal End
     ============================================================== -->


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
        function addCountry(){
       
                var country_name=$("#country_name").val();
                var mobile_country_code=$("#mobile_country_code").val();
                var Latitude=$("#Latitude").val();
                var longitude=$("#longitude").val();
               
                $.ajax({
                    url:'countryinsert.php',
                    method:'POST',
                    data:{
                        country_name:country_name,
                        mobile_country_code:mobile_country_code,
                        Latitude:Latitude,
                        longitude:longitude
                    },
                   success:function(data){
                  alert("country details added");
                  window.location.href="./add_country.php"
                   }
                });
            }
            /****************************update country data************** */
            $("document").ready(function() {
                                        $("#countryUpdate").submit(function(e) {
                                       
                var country_name=("#country_name").val();
                var mobile_country_code=("#mobile_country_code").val();
                var country_lat=("#country_lat").val();
                var country_long=("#country_long").val();
                var id = $("#dataid").val();
                console.log(country_name);
                console.log(country_lat);
                console.log(country_long);
                console.log(id);
               if(country_name !='' && mobile_country_code != '' && country_lat !='' && country_long !=''){
                $ajax({
                   // type:'update',
                    url:'countryUpdate.php',
                    method:'POST',
                    data:{
                       country_name:country_name,
                       mobile_country_code:mobile_country_code,
                       country_lat:country_lat,
                       country_long:country_long,
                      
                    },
                    success:function(data){
                        alert("Country Updated")
                        window.location.href="./add_country.php"
                        console.log(mobile_country_code)
                
                    }
                });
            }
            else{
                alert("Insert all details")
        }
        });
    });
    </script>

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
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
    <script src="./assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="./assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="./assets/js/dataTables.buttons.min.js"></script>
    <script src="./assets/js/buttons.flash.min.js"></script>
    <script src="./assets/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="./assets/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="./assets/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="./assets/js/buttons.html5.min.js"></script>
    <script src="./assets/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
        $(function() {
            $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
            // responsive table
            $('#config-table').DataTable({
                responsive: true
            });
            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary me-1');
        });
    </script>
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
    </script>
</body>

</html>