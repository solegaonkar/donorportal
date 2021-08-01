<?php 
	session_start(); 
	if(!isset($_SESSION['username']))
	{
		header("location:index");
	}
?>
<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/veltrix/layouts/vertical/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 11:25:40 GMT -->
<head>
        <meta charset="utf-8" />
        <title>VSM Thane | Donor List</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/vsmlogo.png">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <div class="rightbar-overlay"></div>

<!-- Datatable init js -->
<script src="assets/js/pages/datatables.init.js"></script> 

<script src="assets/js/app.js"></script>

    </head>

    <body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="https://vsmthane.org" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/vsmlogo.png" alt="" height="50">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/vsmlogo.png" alt="" height="50">
                        </span>
                    </a>

                    <a href="https://vsmthane.org" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/vsmlogo.png" alt="" height="50">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/vsmlogo.png" alt="" height="50">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                    <i class="mdi mdi-menu"></i>
                </button>
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">MAIN NAVIGATION</li>

                            <li>
                                <a href="home.php" class="waves-effect">
                                <i class="fas fa-palette"></i>
                                    <span>Dashboard</span>
                                </a>
</li>                            <li>
<a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fas fa-user"></i>
                                    <span>Donors</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="donor_create.php">Create</a></li>
                                    <li><a href="donor_list.php">View/Update</a></li>
                                </ul>
                                <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fas fa-money-bill"></i>
                                    <span>Donations</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="donation_create.php">Create</a></li>
                                    <li><a href="donation_list.php">View/Update</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fas fa-chart-pie"></i>
                                    <span>Reports</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="reports_donorlist.php">Donors List</a></li>
                                    <li><a href="reports_donationlistv2.php">Donations List</a></li>
                                    <li><a href="reports_monthlydonations.php">Monthly-Donations Mailer</a></li>
                                </ul>
                            </li>
                            </li>
                            <li>
                                <a href="change_password.php" class="waves-effect">
                                <i class="fas fa-key"></i>
                                    <span>Change Password</span>
                                </a>
</li>           
<li>
                                <a href="login.php" class="waves-effect">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                    <span>Logout</span>
                                </a>
</li>           

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4 class="font-size-18">Donors List</h4>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">List</a></li>
                                        <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li> -->
                                        <li class="breadcrumb-item active">Donors List</li>
                                    </ol>
                                </div>
                            </div>

                           
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                    
                                    <table id="donortable" class="table table-striped table-bordered nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                        <tr>
                          <th>Sr.No.</th>
                          <th>Actions</th>
                          <th>Donor ID</th>
                          <th>Full Name</th>
                          <th>Address1</th>
                          <th>Address2</th>
                          <th>Address3</th>
                          <th>District</th>
                          <th>City</th>
                          <th>Mobile</th>
                          <th>Landline</th>
                          <th>Alt. Number</th>
                          <th>Email</th>
                          <th>Company</th>
                          <th>isVIP</th>
                          <th>Donor Category</th>
                          <th>Other Details</th>
                        </tr>
                      </thead>
                   </table>
					
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        
                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                            <strong>Copyright &copy; 2017 <a href="http://vsmthane.org">VSM Thane</a>.</strong> All rights reserved.                    
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" 
                            data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <a href="https://1.envato.market/grNDB" class="btn btn-primary btn-block mt-3" target="_blank"><i class="mdi mdi-cart mr-1"></i> Purchase Now</a>

                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script> 

        <script src="assets/js/app.js"></script>
        <script src="assets/js/donor_list.js"></script>
    

    </body>

<!-- Mirrored from themesbrand.com/veltrix/layouts/vertical/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 11:25:45 GMT -->
</html>
