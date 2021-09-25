<?php
$ch = curl_init();
$url = "https://www.hspmsolutions.com/3-ups_api/index.php/web/Admin_web/Fetch_info_admin/getStates";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
if ($e = curl_error($ch)) {
    echo $e;
} else {
    $result = json_decode($response);
}
$res = array();
$res = $result->data;
/**************************fetch all data city */
$ch = curl_init();
$url = "https://www.hspmsolutions.com/3-ups_api/index.php/web/Admin_web/Fetch_info_admin/getCities";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_city = curl_exec($ch);
if ($e = curl_error($ch)) {
    echo $e;
} else {
    $result_city = json_decode($response_city);
}
$res_city = array();
$res_city = $result_city->data;
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
    <title>3UPS Super Admin Panel | Add City</title>
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
                        <h4 class="text-themecolor">City</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item active">City</li>
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
                                <h4 class="card-title">Add City</h4>
                                <form class="needs-validation" novalidate id="cityform" method="post">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label class="form-label" for="validationCustom01">Select State</label>
                                                <select class="form-select" id="state" name="state" required>
                                                    <option value="" selected disabled>Select State</option>
                                                    <?php
                                                    for ($i = 0; $i <= count($res); $i++) {
                                                    ?>
                                                        <option value="<?php echo $res[$i]->state_id ?>"><?php echo $res[$i]->state_name ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                                <div class="invalid-feedback">Please Select The State</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label" for="validationCustom01">Add City</label>
                                            <input type="text" class="form-control" id="city" name="city" placeholder="Add City" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary text-white" type="button" id="addcity" name="addcity" onclick="addCity()">Add</button>
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
                                    /**********************************Add City Data*******************************************/
                                    function addCity() {
                                        var state = $("#state").val();
                                        var city = $("#city").val();


                                        $.ajax({
                                            url: './backend/cityinsert.php',
                                            method: 'POST',
                                            data: {
                                                state: state,
                                                city: city
                                            },
                                            success: function(data) {
                                                alert("city details added");
                                                window.href.location = "add_city.php"
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
                                <h4 class="card-title">Countries</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped border mt-4" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                            <th>Sr.</th>
                                                <!-- <th>City ID</th> -->
                                                <!-- <th>Country </th> -->
                                                <th>State </th>
                                                <th>City </th>
                                                
                                                <th>Status</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Sr.</th>
                                                <!-- <th>City ID</th> -->
                                                <!-- <th>Country</th> -->
                                                <th>State </th>
                                                <th>City </th>
                                                
                                                <th>Status</th>

                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php 
                                                for($i=1;$i<count($res_city);$i++){
                                                    ?>
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <!-- <td><?php echo $res_city[$i]->city_id ?></td> -->
                                                
                                                <td><?php echo $res_city[$i]->state_name?></td>
                                                <td><?php echo $res_city[$i]->city_name ?></td>
                                                <?php 
                                                if($res_city[$i]->city_status)
                                                {
                                                ?>
                                                <td class="active_deactive_icons">
                                                    <a class="active" href="javascript:void(0)"
                                                    data-id="<?php echo $res_city[$i]->city_id ?>"
                                                     title="Active"><i class="far fa-check-circle"></i></a>
                                                 <?php } else { ?>    
                                                    <a class="dactive" href="javascript:void(0)"
                                                    data-id="<?php echo $res_city[$i]->city_id ?>"
                                                     title="Dactive"><i class="far fa-times-circle"></i></a>
                                                </td>
                                                <?php } ?>

                                                <td class="curd_icons">
                                                    <a class="edit" type="button" title="Edit" data-id="<?php echo $res_city[$i]->city_id ?>"
                                                    onclick="$('#dataid').val($(this).data('id')); $('#showmodal').modal('show');" 
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@getbootstrap"><i class="far fa-edit"></i></a>
                                                    <!-- <a class="remove" href="javascript:void(0)" title="Remove"><i class="fas fa-trash" aria-hidden="true"></i></a> -->
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
                    <h4 class="modal-title" id="exampleModalLabel1">Update City</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" novalidate id="updatecity" method="post" >
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="form-label" for="validationCustom01">Select State</label>
                                    <select class="form-select" id="state_update" name="state" required>
                                                    <option value="" selected disabled>Select State</option>
                                                    <?php
                                                    for ($i = 0; $i < count($res); $i++) {
                                                    ?>
                                                        <option value="<?php echo $res[$i]->state_id ?>"><?php echo $res[$i]->state_name ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                    <div class="invalid-feedback">Please Select The State</div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationCustom01">Add City</label>
                                <input type="text" class="form-control" id="cityadd"  placeholder="Add City" required>
                                <input type="hidden" name="dataid" id="dataid" value=""/>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary text-white" onclick="cityUpdate()">Update</button>
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


                                         
/*********************************update city data*************** */
                                   function cityUpdate(){
                                            var state_update = $("#state_update").val();
                                            var cityadd= $("#cityadd").val();
                                            var id = $("#dataid").val();
                                           
                                            if(state_update !='' && cityadd != ''&& id !=''){ 
                                            $.ajax({
                                                url: './backend/cityUpdate.php',
                                                method: 'POST',
                                                data: {
                                                   
                                                    state_update: state_update,
                                                    cityadd: cityadd,
                                                    id: id
                                                },
                                                success: function(data) {
                                                    alert("City updated");
                                                    window.href.location = "add_city.php"
                                                }
                                            });
                                        }
                                        else{
                                            alert("Insert all details")
                                        }
                                    }

            
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