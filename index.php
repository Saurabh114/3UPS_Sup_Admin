<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon.png">
    <title>3UPS Super Admin</title>
    <!-- This page CSS -->
    <link href="./assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="./assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
    <!-- Custom CSS -->
    <link href="./assets/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="./assets/css/pages/dashboard4.css" rel="stylesheet">
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
        <?php include('includes/sidebar.php')  ?>
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
                        <h4 class="text-themecolor">Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Merchant</h4>
                                <h6 class="card-subtitle">New Registration for Merchant</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-striped border">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>Name</th>
                                                <th>Business Name</th>
                                                <th>Business Category</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="label label-primary m-1" style="height: fit-content;">Request</span>
                                                        <span class="label label-warning m-1" style="height: fit-content;">Awaiting</span>
                                                        <a href="merchant_details.php"><button type="submit" class="btn btn-outline-primary btn-sm m-2" style="width: 81px;">View More</button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="label label-primary m-1" style="height: fit-content;">Request</span>
                                                        <span class="label label-warning m-1" style="height: fit-content;">Awaiting</span>
                                                        <a href="merchant_details.php"><button type="submit" class="btn btn-outline-primary btn-sm m-2" style="width: 81px;">View More</button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="label label-primary m-1" style="height: fit-content;">Request</span>
                                                        <span class="label label-warning m-1" style="height: fit-content;">Awaiting</span>
                                                        <a href="merchant_details.php"><button type="submit" class="btn btn-outline-primary btn-sm m-2" style="width: 81px;">View More</button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="label label-primary m-1" style="height: fit-content;">Request</span>
                                                        <span class="label label-warning m-1" style="height: fit-content;">Awaiting</span>
                                                        <a href="merchant_details.php"><button type="submit" class="btn btn-outline-primary btn-sm m-2" style="width: 81px;">View More</button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="label label-primary m-1" style="height: fit-content;">Request</span>
                                                        <span class="label label-warning m-1" style="height: fit-content;">Awaiting</span>
                                                        <a href="merchant_details.php"><button type="submit" class="btn btn-outline-primary btn-sm m-2" style="width: 81px;">View More</button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="label label-primary m-1" style="height: fit-content;">Request</span>
                                                        <span class="label label-warning m-1" style="height: fit-content;">Awaiting</span>
                                                        <a href="merchant_details.php"><button type="submit" class="btn btn-outline-primary btn-sm m-2" style="width: 81px;">View More</button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="label label-primary m-1" style="height: fit-content;">Request</span>
                                                        <span class="label label-warning m-1" style="height: fit-content;">Awaiting</span>
                                                        <a href="merchant_details.php"><button type="submit" class="btn btn-outline-primary btn-sm m-2" style="width: 81px;">View More</button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="label label-primary m-1" style="height: fit-content;">Request</span>
                                                        <span class="label label-warning m-1" style="height: fit-content;">Awaiting</span>
                                                        <a href="merchant_details.php"><button type="submit" class="btn btn-outline-primary btn-sm m-2" style="width: 81px;">View More</button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="label label-primary m-1" style="height: fit-content;">Request</span>
                                                        <span class="label label-warning m-1" style="height: fit-content;">Awaiting</span>
                                                        <a href="merchant_details.php"><button type="submit" class="btn btn-outline-primary btn-sm m-2" style="width: 81px;">View More</button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="label label-primary m-1" style="height: fit-content;">Request</span>
                                                        <span class="label label-warning m-1" style="height: fit-content;">Awaiting</span>
                                                        <a href="merchant_details.php"><button type="submit" class="btn btn-outline-primary btn-sm m-2" style="width: 81px;">View More</button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="label label-primary m-1" style="height: fit-content;">Request</span>
                                                        <span class="label label-warning m-1" style="height: fit-content;">Awaiting</span>
                                                        <a href="merchant_details.php"><button type="submit" class="btn btn-outline-primary btn-sm m-2" style="width: 81px;">View More</button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- End Page Content -->
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
        <?php include('includes/footer.php')  ?>
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
    <script src="./assets/node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="./assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="./assets/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="./assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="./assets/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="./assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--Sky Icons JavaScript -->

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
</body>

</html>