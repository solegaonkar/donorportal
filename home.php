<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/veltrix/layouts/vertical/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 11:25:34 GMT -->
<head>
        <meta charset="utf-8" />
        <title>VSM Thane | Create Donor</title>
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
        <!-- Begin page -->
       
            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                                    <h4 class="font-size-23">Dashboard <small>VSM Summary</small></h4>
                                    <ol class="breadcrumb mb-0"> <li class="breadcrumb-item active"></li>
                                    </ol>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/01.png" alt="">
                                            </div>
                                            
                                            <h4 class="font-weight-medium font-size-24 ">0.00 Lakhs
                                            </h4>
                                            
                                        </div>
                                        <div class="pt-2">
                                          <p class="text-white-50 mb-0 mt-1">Donations this month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/01.png" alt="">
                                            </div>
                                            
                                            <h4 class="font-weight-medium font-size-24 ">0.00 Lakhs</h4>
                                        </div>
                                        <div class="pt-2">
                                            <p class="text-white-50 mb-0 mt-1">Donations YTD</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/01.png" alt="">
                                            </div>
                                            
                                            <h4 class="font-weight-medium font-size-24">0</h4>
                                        </div>
                                        <div class="pt-2">
                                            <p class="text-white-50 mb-0 mt-1">Number of Donations YTD</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/01.png" alt="">
                                            </div>
                                            
                                            <h4 class="font-weight-medium font-size-24"> 1.35 Crores</h4>
                                        </div>
                                        <div class="pt-2">
                                            <p class="text-white-50 mb-0 mt-1">Budget 2021-22</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/01.png" alt="">
                                            </div>
                                            
                                            <h4 class="font-weight-medium font-size-24">0.00 Lakhs</h4>
                                        </div>
                                        <div class="pt-2">
                                            <p class="text-white-50 mb-0 mt-1">Normal Donations YTD</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4">
                                                <img src="assets/images/services-icon/01.png" alt="">
                                            </div>
                                            
                                            <h4 class="font-weight-medium font-size-24">0.00 Lakhs</h4>
                                        </div>
                                        <div class="pt-2">
                                            <p class="text-white-50 mb-0 mt-1">Corpus Donations YTD</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- end row -->
                        <!-- end row -->

                        
                        <!-- end row -->



                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        
        <div class="rightbar-overlay"></div>

         <!-- JAVASCRIPT -->
         <script src="assets/libs/jquery/jquery.min.js"></script>
         <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
         <script src="assets/libs/metismenu/metisMenu.min.js"></script>
         <script src="assets/libs/simplebar/simplebar.min.js"></script>
         <script src="assets/libs/node-waves/waves.min.js"></script>
 
         <!-- Peity chart-->
         <script src="assets/libs/peity/jquery.peity.min.js"></script>
 
         <!-- Plugin Js-->
         <script src="assets/libs/chartist/chartist.min.js"></script>
         <script src="assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js"></script>
 
         <script src="assets/js/pages/dashboard.init.js"></script>
 
         <script src="assets/js/app.js"></script>
 

    </body>


<!-- Mirrored from themesbrand.com/veltrix/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 11:25:07 GMT -->
</html>





                        

                    