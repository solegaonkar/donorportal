<?php 
	session_start(); 
	if(!isset($_SESSION['username']))
	{
		header("location:index");
	}
?>
<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/veltrix/layouts/vertical/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 11:25:34 GMT -->
<head>
        <meta charset="utf-8" />
        <title>VSM Thane | Change Password</title>
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
- <div class="page-title-box">
                                    <h4 class="font-size-18">Change Password</h4> <h7> Fields marked as * are compulsory.</h7> 
                                <!-- </div> -->
                        </div>
<!-- 
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/user-4.jpg"
                                    alt="Header Avatar">
                            </button> -->
                            <!-- <div class="dropdown-menu dropdown-menu-right"> -->
                                <!-- item-->
                                <!-- <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 align-middle mr-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-wallet font-size-17 align-middle mr-1"></i> My Wallet</a>
                                <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings font-size-17 align-middle mr-1"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline font-size-17 align-middle mr-1"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-17 align-middle mr-1 text-danger"></i> Logout</a>
                            </div>
                        </div> -->

                        <!-- <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="mdi mdi-settings-outline"></i>
                            </button>
                        </div>
             -->
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
                            <?php
					include('functions.php');
					$user = new VSM_Digi();

					if(isset($_POST['passsubmit']))
					{
						$result=$user->change_password();
						//var_dump($result);
						if($result == "OPI")
						{
        
							echo '
							<div class="alert alert-danger">
								<strong>Error!</strong>Entered Old password is incorrect
							</div>';
						}
						else if ($result[0])
						{
							echo '<div class="alert alert-success">
                            <strong>Success!</strong> Password successfully changed
                        </div>';
						}
						else
						{
							echo '
							<div class="alert alert-danger">
								<strong>Error!</strong> '.$result[1].'<br>Issue generating new password. Please try again later
							</div>';
						}
					}
				?>	
                            <form class="custom-validation" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="card">
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                <div class="card">
                                    <div class="card-body">
        
                                        <!-- <h4 class="card-title">Personal Details</h4>
                                        <h7 class="card-title-desc" style="  color: #ffffff;">  Parsley is a javascript form validation library. </h7> -->
                                        <!-- <p class="card-title-desc"></p> -->
        
                                       
                                        <div class="form-group">
                                                <label>Old Password *</label>
                                                <div>
                                                    <input type="password" class="form-control" required id="oldpass"
                                                            parsley-type="text" placeholder="Enter old password"/>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label>New Password *</label>
                                                <div>
                                                    <input type="password" class="form-control" required id="newpass"
                                                            parsley-type="text" placeholder="Enter new password"/>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label>Retype New Password *</label>
                                                <div>
                                                    <input type="password" class="form-control" required id="newpass1"
                                                            parsley-type="text" placeholder="Enter new password"/>
                                                </div>
                                        </div>
                                        
                                        <div>
                                        <button type="reset" class="btn btn-info waves-effect">
                                                        Reset
                                                    </button>   
                                    <!-- <button type="submit" class="btn btn-success waves-effect waves-light mr-1" > -->
                                    <input type="submit" id="passsubmit" name="passsubmit" class="btn btn-success" onclick="return valpassword()">
                                                        
                                                    </button>
                                                    
                                                    </div>
                                    </div>
                                    </div>
                                    
                                </div>
                                
                                </div>
                                </div> <!-- end col -->
                                
                            
                        </div> <!-- end row -->    
                        </form>

                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                        <!-- <p>Don't have an account ? <a href="pages-register.html" class="font-weight-medium text-primary"> Signup now </a> </p> -->
                        <strong>Copyright &copy; 2017 <a href="http://vsmthane.org">VSM Thane</a>.</strong> All rights reserved.                    
                                         </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- form wizard -->
        <script src="assets/libs/jquery-steps/build/jquery.steps.min.js"></script>

        <!-- form wizard init -->
        <script src="assets/js/pages/form-wizard.init.js"></script>
        <script src="assets/js/pages/change_password.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/veltrix/layouts/vertical/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 11:25:34 GMT -->
</html>
