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
    <title>3UPS Super Admin | Merchant Details</title>
    <!-- Custom CSS -->
    <link href="./assets/css/style.min.css" rel="stylesheet">

    <style>
        .merchant_details_heading p {
            margin-bottom: 5px;
            font-weight: 500;
        }

        .merchant_details_body h5 {
            font-weight: 600;
            margin-left: 10px;

        }
    </style>

</head>

<body class="skin-default-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">3UPS admin</p>
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
                        <h4 class="text-themecolor">Merchant Details</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Merchant Details</li>
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
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-flex">
                                    <span class="label label-primary m-1" style="height: fit-content;">Request</span>
                                    <span class="label label-warning m-1" style="height: fit-content;">Awaiting</span>
                                </div>
                                <center class="m-t-30"> <img src="./assets/images/users/5.jpg" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10">Saurabh Patil</h4>
                                    <h6 class="card-subtitle">Owner Of Business</h6>
                                    <br>
                                    <div>
                                        <div>
                                            <h6>Contact No:</h6>
                                            <p><b>7775941800</b></p>
                                        </div>
                                        <div>
                                            <h6>Email ID:</h6>
                                            <p><b>saurabh_patil@hspmsolutions.com</b></p>
                                        </div>
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body pt-0">
                                <center class=""> <img src="./assets/images/subway.png" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10">Subway</h4>
                                    <h6 class="card-subtitle">Business Category</h6>
                                </center>
                                <div class="status_btn">
                                    <div class="approve_reject d-flex text-center">
                                        <div class="m-auto">
                                            <button type="submit" class="btn btn-outline-success m-2">Approve</button>
                                            <button type="submit" class="btn btn-outline-danger m-2">Reject</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="text-center mt-2">
                                    <div class="m-auto">
                                        <button class="btn btn-outline-primary text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                            Request for Update
                                        </button>
                                        </p>
                                        <div class="collapse" id="collapseExample" style="">
                                            <div class="card card-body">
                                                <div class="form-group">
                                                    <label class="form-label">Remarks</label>
                                                    <textarea class="form-control" rows="3" style="border:1px solid black;border-radius:5px"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-outline-info" style="width: 50%;margin: auto;">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">Details</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">Documents</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <div class="merchant_details">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="merchant_details_heading">
                                                        <p>Business Name:</p>
                                                    </div>
                                                    <div class=" merchant_details_body">
                                                        <h5>Subway</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="merchant_details_heading">
                                                        <p>Business Type:</p>
                                                    </div>
                                                    <div class=" merchant_details_body">
                                                        <h5>Public Limited</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="merchant_details_heading">
                                                        <p>Business Category:</p>
                                                    </div>
                                                    <div class=" merchant_details_body">
                                                        <h5>Food & Beverage</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="merchant_details_heading">
                                                        <p>Aadhar Number:</p>
                                                    </div>
                                                    <div class=" merchant_details_body">
                                                        <h5>4325 4234 4234</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="merchant_details_heading">
                                                        <p>Pan Number:</p>
                                                    </div>
                                                    <div class=" merchant_details_body">
                                                        <h5>CWCII7843L</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="merchant_details_heading">
                                                        <p>GST Number:</p>
                                                    </div>
                                                    <div class=" merchant_details_body">
                                                        <h5>27AABCU9603R1ZN</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3"></div>
                                                <div class="col-lg-4">
                                                    <div class="merchant_details_heading">
                                                        <p>Opening Time:</p>
                                                    </div>
                                                    <div class=" merchant_details_body">
                                                        <h5>10:45 AM</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="merchant_details_heading">
                                                        <p>Closing Time:</p>
                                                    </div>
                                                    <div class=" merchant_details_body">
                                                        <h5>6:45 PM</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="merchant_details_heading">
                                                        <p>Business Details:</p>
                                                    </div>
                                                    <div class=" merchant_details_bod">
                                                        <h5 style="font-weight:400;">The business description is meant to provide an overview of the business, including what the business does and how the company is unique from others in the same industry.</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-xs-6 b-r mb-2">
                                                <h5>Aadhar Card</h5>
                                                <embed src="./assets/images/img3.jpg" type="application/pdf" width="100%" height="300px" />
                                            </div>
                                            <div class="col-md-12 col-xs-6 b-r mb-2">
                                                <h5>Pan Card</h5>
                                                <embed src="./assets/images/img3.jpg" type="application/pdf" width="100%" height="300px" />
                                            </div>
                                            <div class="col-md-12 col-xs-6 b-r mb-2">
                                                <h5>GST Registration</h5>
                                                <embed src="./assets/images/img3.jpg" type="application/pdf" width="100%" height="300px" />
                                            </div>
                                            <div class="col-md-12 col-xs-6">
                                                <h5>Business Registration</h5>
                                                <embed src="./assets/images/img3.jpg" type="application/pdf" width="100%" height="300px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme working">7</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
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
</body>


</html>