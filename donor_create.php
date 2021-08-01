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
        <style>
    .error
    {
        color: Red;
        visibility: hidden;
    }
</style>

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
                                    <h4 class="font-size-18">Create Donor</h4> <h7> Fields marked as * are compulsory.</h7> 
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

                        <!-- start page title -->
                        <!-- <div class="row align-items-center"> -->
                            <!-- <div class="col-sm-6"> -->
                                <!-- <div class="page-title-box">
                                    <h4 class="font-size-18">Create Donor</h4> <h7> Fields marked as * are compulsory.</h7> -->
                                <!-- </div> -->
                            <!-- </div> -->
                            <div class="card">
                                </div>
                            <form class="custom-validation" id="donor" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Personal Details</h4>
                                        <h7 class="card-title-desc" style="  color: #ffffff;">  Parsley is a javascript form validation library. </h7>
                                        <!-- <p class="card-title-desc"></p> -->
        
                                       
                                        <div class="form-group">
                                                <label>First Name *</label>
                                                <div>
                                                    <input type="text" class="form-control" required id='fname'
                                                            parsley-type="text" placeholder="Enter first name"/>
                                                </div>
                                        </div>
                                        
                                        <div class="form-group">
                                                <label>Middle Name</label>
                                                <div>
                                                    <input type="text" class="form-control"  id='mname'
                                                            parsley-type="text" placeholder="Enter middle name"/>
                                                </div>
                                        </div>
                                        
                                        <div class="form-group">
                                                <label>Last Name *</label>
                                                <div>
                                                    <input type="text" class="form-control" required id='lname'
                                                            parsley-type="text" placeholder="Enter last name"/>
                                                </div>
                                        </div>
                                        
                                        <div class="form-group">
                                                <label>Date of Birth *</label>
                                                
                                                <div>
                                                    <input class="form-control" type="date" id="dateofbirth" required
                                                            parsley-type="text" />
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label>Gender *</label>
                                                <div>
                                                <select class="form-control" id='gender'>
                                                    <option>Select</option>
                                                    <option>Female</option>
                                                    <option>Male</option>
                                                    <option>Other</option>
                                                    <option>NA</option>
                                                </select>
                                                </div>
                                        </div>
                                        
                                        <div class="form-group">
                                                <label>Occupation *</label>
                                                <select class="form-control " id="occupation">
                                                    <option>Select</option>
                                                    <option value="Service - Private">Service - Private</option>
                                                    <option value="Service - Govt.">Service - Govt.</option>
                                                    <option value="Armed Forces">Armed Forces</option>
                                                    <option value="Business">Business</option>
                                                    <option value="Retired">Retired</option>
                                                    <option value="Not Known">Not Known</option>
                                                    <option value="Not Applicable">Not Applicable</option>

	                                            </select>
                                        </div>
                                        <div class="form-group">
                                                <label>PAN Card *</label>
                                                <div>
                                                    <input type="text" class="form-control" required id="pancard" maxlength="10" onblur="validatePanNumber(this)"
                                                            parsley-type="text" placeholder="Enter PAN Number"/>
                                                    <span id="lblPANCard" class="error">Invalid PAN Number</span>
                                                </div>

                                        </div>
                                        <div class="form-group">
                                                <label>Donor Type *</label>
                                                <select class="form-control " id="donortype">
                                                    <option>Select</option>
                                                    <option value="Individual">Individual</option>
                                                    <option value="Public Ltd">Public Ltd</option>
                                                    <option value="Pvt Ltd">Pvt Ltd</option>
                                                    <option value="Partnership Firm">Partnership Firm</option>
                                                    <option value="HUF">HUF</option>
                                                    <option value="LLP/LLC">LLP/LLC</option>
                                                    <option value="Bank">Bank</option>
                                                    <option value="Trust">Trust</option>
                                                    <option value="Other-FI">Other-FI</option>
                                                    <option value="Other-Non FI">Other-Non FI</option>
                                                    <option value="Other">Other</option>

	                                            </select>
                                                </div>
                                                <div class="form-group">
                                                <label>Donor Importance *</label>
                                                <select class="form-control " id="donorimportance">
                                                    <option>Select</option>
                                                    <option value="VIP">VIP</option>      
                                                    <option value="Non-VIP">Non-VIP</option>    

	                                            </select>
                                                </div>
                                                <div class="form-group">
                                                <label>Government Servant *</label>
                                                <select class="form-control " id="govtservant">
                                                    <option>Select</option>
                                                    <option value="No">No</option>  
                                                    <option value="Politician">Politician</option>  
                                                    <option value="IS">IS</option>  
                                                    <option value="IPS">IPS</option>  
                                                    <option value="State Services">State Services</option>  
                                                    <option value="Military">Military</option>  
                                                    <option value="Not Sure">Not Sure</option>  
                                                    <option value="Other">Other</option>  
	                                            </select>
                                                </div>
                                                <div class="form-group">
                                                <label>VSM Connection *</label>
                                                <select class="form-control " id="vsmconnection">
                                                    <option>Select</option>
                                                    <option value="Volunteer">Volunteer</option>  
                                                    <option value="Alumni">Alumni</option>  
                                                    <option value="Not Applicable">Not Applicable</option>  
                                                    <option value="Do Not Know">Do Not Know</option>  
	                                            </select>
                                                </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Other Details</h4>
                                        <h7 class="card-title-desc" style="  color: #ffffff;">  Parsley is a javascript form validation library. </h7>
                                        <!-- <p class="card-title-desc"></p> -->
                                        <div class="form-group">
                                                <label>Referral *</label>
                                                <select class="form-control " class="referral">
                                                    <option>Select</option>
                                                    <option value="Donor">Donor</option>
                                                    <option value="Alumni">Alumni</option>
                                                    <option value="Other-VSM">Other-VSM</option>
                                                    <option value="Digital Media">Digital Media</option>
                                                    <option value="Print Media">Print Media</option>
                                                    <option value="Volunteer">Volunteer</option>  
	                                            </select>
                                                </div>
                                                <div class="form-group">
                                                <label>Referral Details*</label>
                                                <input type="text" class="form-control" required id="referraldetails"
                                                            parsley-type="text" placeholder=""/>
                                                </div>
                                                <div class="form-group">
                                                <label>Other Details</label>
                                                <input type="text" class="form-control" id="otherdetails"
                                                            parsley-type="text" placeholder=""/>
                                                </div>
                                       
                                        
                                    </div>
                                </div>
                                </div> <!-- end col -->
                                <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Contact Details</h4>
                                        <h7 style="  color: #ffffff;">  Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.</h7>
                                        <div class="form-group">
                                                <label>Email</label>
                                                <div>
                                                   <input type="email" id="email" class="form-control" parsley-type="email" placeholder="Enter a valid e-mail" autocomplete="off">
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label>Alt Email </label>
                                                <div>
                                                   <input type="email" id="altemail" class="form-control" parsley-type="email" placeholder="Enter a valid e-mail" autocomplete="off">
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label>Mobile Number </label>
                                                <div>
                                                <input data-parsley-type="tel" id="mobile" type="tel" class="form-control" placeholder="Enter mobile number" autocomplete="off">                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label>Alt Mobile </label>
                                                <div>
                                                   <input type="tel" id="altmobile" class="form-control" parsley-type="email" placeholder="Enter alt mobile number" autocomplete="off">
                                                </div>
                                        </div>
                                        
                                       
                                       
        
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Address Details</h4>
                                        <h7 style="  color: #ffffff;">  Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.</h7>
                                        <div class="form-group">
                                                <label>Address *</label>
                                                <div>
                                                <textarea required id="address" class="form-control" rows="3" autocomplete="off" placeholder="Enter address"></textarea>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label>Pincode</label>
                                                <div>
                                                    <input type="text" class="form-control"  id="pincode"
                                                            parsley-type="" placeholder="" onkeyup="GetDetail(this.value)"/>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label>Country</label>
                                                <select class="form-control " id="country">
                                                    <option>Select</option>
                                                    <option value="No">India</option> 
                                                    <option value="Other">Other</option>  
	                                            </select>
                                         </div>
                                       
                                         <div class="form-group">
                                                <label>State</label>
                                                <div>
                                                    <input type="text" class="form-control" id="state"
                                                            parsley-type="text" placeholder="" />
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label>District</label>
                                                <div>
                                                    <input type="text" class="form-control" id="district"
                                                            parsley-type="text" placeholder="" />
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label>Taluka</label>
                                                <div>
                                                    <input type="text" class="form-control" id="taluka"
                                                            parsley-type="text" placeholder=""/>
                                                </div>
                                        </div>
                                        <div>
                                        <button type="reset" class="btn btn-info waves-effect">
                                                        Reset
                                                    </button>   
                                    <button type="submit" class="btn btn-success waves-effect waves-light mr-1">
                                                        Submit
                                                    </button>
                                                    
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
        <script src="assets/libs/jquery-ui-dist/jquery-ui.min.js"></script>
        <script src="assets/libs/jquery-ui-dist/donor_create.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- form wizard -->
        <script src="assets/libs/jquery-steps/build/jquery.steps.min.js"></script>

        <!-- form wizard init -->
        <script src="assets/js/pages/form-wizard.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/veltrix/layouts/vertical/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 11:25:34 GMT -->
</html>
