<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/veltrix/layouts/vertical/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 11:25:34 GMT -->
<head>
        <meta charset="utf-8" />
        <title>VSM Thane | Create Donation</title>
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
        <!-- Date -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">

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
                                    <h4 class="font-size-18">Create Donation</h4> <h7> Fields marked as <span style="color:red">*</span> are compulsory.</h7> 
                                    </div>
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

                    <div class="card">
                                </div>
                                <?php
				include('functions.php');
				$donor = new VSM_Digi();

				// data insert code starts here.
				//var_dump($_POST);
				if(isset($_POST['donationsubmit']))
				{
					$result=$donor->create_donation();
					if($result[0])
					{
						echo '
						<div class="alert alert-success alert-dismissible fade in" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> 
							<strong>Success!</strong> New Donation Entered Successfully
						</div>';
					}
					else
					{
						echo '
						<div class="alert alert-danger alert-dismissible fade in" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> 
							<strong>Error!</strong> '.$result[1].'<br>Issue Creating Donation. Please try again later
						</div>';
					}
				}
			?>	
    
                            <form class="custom-validation" data-parsley-validate="" id="donation" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <div class="row">
                                <div class="col-xl">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Payment Details</h4>
                                        <h7 class="card-title-desc" style="  color: #ffffff;">  Parsley is a javascript form validation library. </h7>
                                        <!-- <p class="card-title-desc"></p> -->
                                         
                                        <div class="row">
                                        <div class="col-md-3">
                                                 
                                                <label class="h6">Donor Name <span style="color:red">*</span></label>
                                                
                                                <div>
                                                <select class="form-control select2" name="donor" id="donor" required="">
						  <option style="display:none;" selected disabled></option>
							<?php
								$donorlist=$donor->get_donorlist();
								while ($row = mysqli_fetch_array($donorlist,MYSQLI_ASSOC))
								{
									echo "<option value=".$row["did"].">".$row["fname"]." ".$row["mname"]." ".$row["lname"]."</option>";
								}
							?>
                          </select>
                                                </div>
                                        </div>
                                        
                                        <div class="col-md-3">
                                                 
                                                <label class="h6">Transactional Date <span style="color:red">*</span></label>
                                                
                                                <div>
                                                    <input type="text" class="form-control" required id="datepicker" readonly  required="" />
                                                </div>
                                        </div>
                                      

                                        <div class="col-md-3">
                                                
                                                <label class="h6">Financial Year <span style="color:red">*</span></label>
                                                
                                                <div>
                                                    <input type="text" class="form-control" required id="myInput"  required="" 
                                                            parsley-type="text"/>
                                                </div>
                                        </div>
                                        <div class="col-md-3">
                                                
                                                <label class="h6">Mode of Payment <span style="color:red">*</span></label>
                                                
                                                <div>
                                                    <select class="form-control" id="payment"  required="">
                                                    <option >Select</option>
                                                    <option value="Cash">Cash</option>
                                                    <option value="Cheque" selected>Cheque</option>
                                                    <option value="Demand Draft">Demand Draft</option>
                                                    <option value="Bank Transfer">Bank Transfer</option>
                                                    <option value="Website">Website</option>
                                                    </select>
                                                </div>
                                        </div>

                                 </div><!-- end row -->
                                
                                 <div class="row">
                                        <div class="col-md-3">
                                                
                                                <label class="h6">Currency <span style="color:red">*</span></label>
                                                
                                                <div>
                                                     <select class="form-control" id="currency"  required="">
                                                    <option value="Select">Select</option>
                                                    <option value="INR" selected>INR</option>
                                                    <option value="AED">AED</option>
                                                    <option value="USD">USD</option>
                                                    <option value="GBP">GBP</option>
                                                    <option value="EUR">EUR</option>
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="col-md-3">
                                                 
                                                <label class="h6">Amount <span style="color:red">*</span></label>
                                                
                                                <div>
                                                    <input type="text" class="form-control" required id='amount'
                                                            parsley-type="text"   required="" placeholder="Enter Amount"/>
                                                </div>
                                        </div>

                                        <div class="col-md-3">
                                               
                                                <label class="h6">Donation Bank Account <span style="color:red">*</span></label>
                                                
                                                <div>
                                                <select class="form-control" id="dbaccount"  required="">
                                                    <option value="">Select</option>
                                                    <option value="TJSB, Thane">TJSB, Thane</option>
                                                    <option value="TJSB, Borivali">TJSB, Borivali</option>
                                                    <option value="TJSB, Pune">TJSB, Pune</option>
                                                    <option value="HDFC Bank, Thane">HDFC Bank, Thane</option>
                                                    <option value="Axis Bank, Thane">Axis Bank, Thane</option>
                                                    <option value="Bank of Baroda, Shahapur">Bank of Baroda, Shahapur</option>
                                                    </select>
                                                </div>
                                        </div>


                                        <div class="col-md-3">
                                                 
                                                <label class="h6">Donation Type <span style="color:red">*</span></label>
                                                
                                                <div>
                                                    <select class="form-control" id="dtype"  required="">
                                                    <option value="">Select</option>
                                                    <option value="Normal">Normal</option>
                                                    <option value="Corpus">Corpus</option>
                                                    </select>
                                                </div>
                                        </div>
                                    </div><!-- end row -->
                                   
                                   <div class="row">
                                              <div class="col-md-3">
                                                
                                                <label class="h6">Is CSR? <span style="color:red">*</span></label>
                                               
                                                <div>
                                                    <select class="form-control" id="icsr"  required="">
                                                    <option value="">Select</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="col-md-3">
                                                 
                                                <label class="h6">Receipt Number</label>
                                                
                                                <div> 
                                                    <input type="text" class="form-control"  id="Rnumber" name="Rnumber" disabled="disabled"
                                                            parsley-type="text" placeholder="Enter Receipt Number"/>
                                                </div>
                                        </div>
                                        <div class="col-md-3">
                                                 
                                                <label class="h6">Automated Receipt Number <span style="color:red">*</span></label>
                                                
                                                <div>
                                                    <select class="form-control" id="areceipt"  required="" name="areceipt">
                                                    <option value="">Select</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                    </select>
                                                </div>


                                 </div><!-- end row -->
                                 </div><!-- end card body -->
                                   
                                   </div> <!-- end card -->

                                   <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Other Details</h4>
                                        <h7 class="card-title-desc" style="  color: #ffffff;">  Parsley is a javascript form validation library. </h7>
                                        <!-- <p class="card-title-desc"></p> -->
                                        <div class="row">
                                              <div class="col-md-3">
                                                 
                                                <label class="h6">Referral <span style="color:red">*</span></label>
                                                
                                                <div >
                                                    <select class="form-control" id="referral"  required="">
                                                    <option value="">Select</option>
                                                    <option value="Volunteer">Volunteer</option>
                                                    <option value="Donor">Donor</option>
                                                    <option value="Alumni">Alumni</option>
                                                    <option value="Other - VSM">Other - VSM</option>
                                                    <option value="Digital Media">Digital Media</option>
                                                    <option value="Print Media">Print Media</option>
                                                    <option value="Unknown">Unknown</option>
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="col-md-3">
                                                 
                                                <label class="h6">Referral Details</label>
                                                
                                                <div>
                                                    <select class="form-control" id="referral">
                                                    <option value="Select">Select</option>
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="col-md-3">
                                                 
                                                <label class="h6"  required="">Reason <span style="color:red">*</span></label>
                                                
                                                <div>
                                                    <select class="form-control" id="reason" required="">
                                                    <option value="">Select</option>
                                                    <option value="Festival - Diwali">Festival - Diwali</option>
                                                    <option value="Festival - Ganapati">Festival - Ganapati</option>
                                                    <option value="Festival - Gudi Padwa">Festival - Gudi Padwa</option>
                                                    <option value="Festival - Christmas">Festival - Christmas</option>
                                                    <option value="Festival - Navratri">Festival - Navratri</option>
                                                    <option value="Festival - Other">Festival - Other</option>
                                                    <option value="Anniversary - Self">Anniversary - Self</option>
                                                    <option value="Anniversary - Parents">Anniversary - Parents</option>
                                                    <option value="Anniversary - Other">Anniversary - Other</option>
                                                    <option value="Birthday - Self">Birthday - Self</option>
                                                    <option value="Birthday - Parents">Birthday - Parents</option>
                                                    <option value="Birthday - Other">Birthday - Other</option>
                                                    <option value="In Memory">In Memory</option>
                                                    <option value="Death Anniversary">Death Anniversary </option>
                                                    <option value="Nothing Specific">Nothing Specific</option>
                                                    <option value="Do not know">Do not know</option>
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="col-md-3">
                                                
                                                <label class="h6">Branch <span style="color:red">*</span></label>
                                                
                                                <div >
                                                    <select class="form-control" id="branch"  required="">
                                                    <option value="">Select</option>
                                                    <option value="Thane">Thane</option>
                                                    <option value="Borivali">Borivali</option>
                                                    <option value="Pune">Pune</option>
                                                    <option value="Nagpur">Nagpur</option>
                                                    <option value="Shahapur">Shahapur</option>
                                                    <option value="Aurangabad">Aurangabad</option>
                                                    </select>
                                                </div>
                                        </div>
                                        
                                        </div><!-- end row -->
                                      
                                   <div class="row">
                                              <div class="col-md-3">
                                                 
                                                <label class="h6"  >Project/Initiative <span style="color:red">*</span></label>
                                                
                                                <div>
                                                    <select class="form-control" id="p/i"  required="">
                                                    <option value="">Select</option>
                                                    <option value="Vedh - Thane">Vedh - Thane</option>
                                                    <option value="Vedh - Kalyan">Vedh - Kalyan</option>
                                                    <option value="Vedh - Pune">Vedh - Pune</option>
                                                    <option value="Ketto Fundraising">Ketto Fundraising</option>
                                                    <option value="Dene Samajache">Dene Samajache</option>
                                                    <option value="Utsava Kadun Samajakade(Ganapati)">Utsava Kadun Samajakade(Ganapati)</option>
                                                    <option value="Generic Donation">Generic Donation</option>
                                                    <option value="DaanUtsav">DaanUtsav</option>
                                                    </select>
                                                </div>
                                        </div>
                                    
                                        <div class="col-md-3">
                                                 
                                                <label class="h6">Remarks</label>
                                                
                                                <div>
                                                    <input type="text" class="form-control" 
                                                            parsley-type="text" placeholder="Enter Remarks"/>
                                                </div>
                                        </div>
                                       

                                        </div><!-- end row -->
                                        <br></br>
                                        <div class="row">
                                                 <div>
                                        <button type="reset" class="btn btn-info waves-effect">
                                                        Reset
                                                    </button>   
                                    <input type="submit" name="donationsubmit" id="donationsubmit"   class="btn btn-success waves-effect waves-light mr-1">
                                                        
</div>                                              </div>

                                        
                                 </div><!-- end card body -->
                                   
                                   </div> <!-- end card -->
                                   
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
        <script src="assets/libs/parsleyjs/parsley.min.js"></script>
        <script type="text/javascript">

$(function () {
  $('#donation').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function() {
    return false; // Don't submit form for this demo
  });
});
        <!-- form wizard -->
        <script src="assets/libs/jquery-steps/build/jquery.steps.min.js"></script>

        <!-- form wizard init -->
        <script src="assets/js/pages/form-wizard.init.js"></script>

        <script src="assets/js/app.js"></script>
       <!-- date -->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        
        <script type='text/javascript'>
       $(document).ready(function(){

       $('#datepicker').datepicker({
      dateFormat: "yy-mm-dd",
       maxDate:-1,
       
   });
});
$(function() {
    $("#datepicking").datepicker();
    
    $("#datepicker").val();
    
    $("#datepicker").on("change",function(){
        var selected = $(this).val();
var dtArray = selected.split("-");

dtYear = (dtArray[0]);
dtMonth = (dtArray[1]);
dtDay = (dtArray[2]);
        $("#myInput").val(dtYear);
        $("#myInput").prop("readonly", true);
    });
});


$('#areceipt').change(function () {
    $("#Rnumber").attr("disabled", $("#areceipt").val() == "Yes");
});

</script>


    </body>

<!-- Mirrored from themesbrand.com/veltrix/layouts/vertical/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 11:25:34 GMT -->
</html>

                           

 