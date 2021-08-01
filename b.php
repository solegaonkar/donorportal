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
	<style>
	* {
		box-sizing: border-box;
	}

	body {
		background-color: #f1f1f1;
	}

	#regForm {
		background-color: #ffffff;
		margin: 50px auto;
		font-family: Calibri;
		padding: 40px;
		width: 70%;
		min-width: 300px;
	}

	h1 {
		text-align: center;  
	}

	input {
		padding: 10px;
		width: 100%;
		font-size: 17px;
		font-family: Calibri;
		border: 1px solid #aaaaaa;
	}

	/* Mark input boxes that gets an error on validation: */
	input.invalid {
		background-color: #ffdddd;
	}

	/* Hide all steps by default: */
	.tab {
		display: none;
	}

	button {
		background-color: #04AA6D;
		color: #ffffff;
		border: none;
		padding: 10px 20px;
		font-size: 17px;
		font-family: Calibri;
		cursor: pointer;
	}

	button:hover {
		opacity: 0.8;
	}

	#prevBtn {
		background-color: #bbbbbb;
	}

	/* Make circles that indicate the steps of the form: */
	.step {
		height: 15px;
		width: 15px;
		margin: 0 2px;
		background-color: #bbbbbb;
		border: none;  
		border-radius: 50%;
		display: inline-block;
		opacity: 0.5;
	}

	.step.active {
		opacity: 1;
	}

	/* Mark the steps that are finished and valid: */
	.step.finish {
		background-color: #04AA6D;
	}
	</style>

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
	<li><a href="donor_create.php">Create</a></li>
	<li><a href="donor_list.php">View/Update</a></li>
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
	<h4 class="font-size-18">Create Donor</h4> <h7> Create only if donor does not exist</h7>
	</div>
	</div>

	<div class="row">
	<div class="col-sm-12">
	<div class="card">
	<div class="card-body">
	<h4 class="card-title">Create Donor</h4>
	<h9>All the fields marked * are mandatory.</h9><br>
	<h9>If information for not * filed is not known, please leave it blank</h9>
	<form id="regForm" action="home.php">
	<!-- One "tab" for each step in the form: -->
	<!-- <fieldset> -->
	<div class="tab">
	<h5>Personal Details</h5>
	<div class="row">
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="fname" class="col-lg-3 col-form-label">First Name</label>
	<div class="col-lg-9">
	<input id="fname" name="fname" type="text" class="form-control">
	</div>
	</div>
	</div>
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="mname" class="col-lg-3 col-form-label">Middle Name</label>
	<div class="col-lg-9">
	<input id="mname" name="mname" type="text" class="form-control">
	</div>
	</div>
	</div>
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Last Name</label>
	<div class="col-lg-9">
	<input id="lname" name="lname" type="text" class="form-control">
	</div>
	</div>
	</div>
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="dob" class="col-lg-3 col-form-label">Date of Birth</label>
	<div class="col-lg-9">
	<input id="dob" name="dob" type="date" class="form-control">
	</div>
	</div>
	</div>
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="gender" class="col-lg-3 col-form-label">Gender</label>
	<div class="col-lg-9">
	<select class="select2 form-control " name="gender" id="gender" style="width: 100%;">
	<option disabled selected style="display:none;"></option>
	<option value="Female">Female</option>
	<option value="Male">Male</option>
	<option value="Other">Other</option>
	<option value="NA">NA</option>
	</select>                      
	</div>
	</div>
	</div>
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="occupation" class="col-lg-3 col-form-label">Occupation </label>
	<div class="col-lg-9">
	<select class="select2 form-control " name="occupation" id="occupation" style="width: 100%;">
	<option disabled selected style="display:none;"></option>
	<option value="Service - Private">Service - Private</option>
	<option value="Service - Govt.">Service - Govt.</option>
	<option value="Armed Forces">Armed Forces</option>
	<option value="Business">Business</option>
	<option value="Retired">Retired</option>
	<option value="Not Known">Not Known</option>
	<option value="Not Applicable">Not Applicable</option>

	</select>
	</div>
	</div>
	</div>
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="pancard" class="col-lg-3 col-form-label">PAN Card</label>
	<div class="col-lg-9">
	<input id="pancard" name="pancard" type="text" class="form-control">
	</div>
	</div>
	</div>
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="donortype" class="col-lg-3 col-form-label">Donor Type</label>
	<div class="col-lg-9">
	<select class="select2 form-control " name="donortype" id="donortype" style="width: 100%;">
	<option disabled selected style="display:none;"></option>
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
	</div>
	</div>
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="donorimportance" class="col-lg-3 col-form-label">Donor Importance</label>
	<div class="col-lg-9">
	<select class="select2 form-control " name="donorimp" id="donorimp" style="width: 100%;">
	<option disabled selected style="display:none;"></option>
	<option value="VIP">VIP</option>      
	<option value="Non-VIP">Non-VIP</option>      
	</select>                                                     
	</div>
	</div>
	</div>
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="govtsrvnt" class="col-lg-3 col-form-label">Government Servant</label>
	<div class="col-lg-9">
	<select class="select2 form-control " name="govtsrvnt" id="govtsrvnt" style="width: 100%;">
	<option disabled selected style="display:none;"></option>
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
	</div>
	</div>
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="vsmconnection" class="col-lg-3 col-form-label">VSM Connection</label>
	<div class="col-lg-9">
	<select class="select2 form-control " name="vsmconnection" id="vsmconnection" style="width: 100%;">
	<option disabled selected style="display:none;"></option>

	<option value="Volunteer">Volunteer</option>  
	<option value="Alumni">Alumni</option>  
	<option value="Not Applicable">Not Applicable</option>  
	<option value="Do Not Know">Do Not Know</option>  
	</select>                                                           '
	</div>
	</div>
	</div>
	</div>      
	<div class="tab">
	<h5>Contact Details</h5>
	<div class="row">
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="email" class="col-lg-3 col-form-label">Email</label>
	<div class="col-lg-9">
	<input id="email" name="email" type="text" class="form-control">
	</div>
	</div>
	</div>
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="altemail" class="col-lg-3 col-form-label">Alt Email</label>
	<div class="col-lg-9">
	<input id="altemail" name="altemail" type="text" class="form-control">
	</div>
	</div>
	</div>
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="mobile" class="col-lg-3 col-form-label">Mobile</label>
	<div class="col-lg-9">
	<input id="mobile" name="mobile" type="text" class="form-control">
	</div>
	</div>
	</div>
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="altmobile" class="col-lg-3 col-form-label">Alt Number</label>
	<div class="col-lg-9">
	<input id="altmobile" name="altmobile" type="text" class="form-control">
	</div>
	</div>
	</div>
	</div>     
	<div class="tab">
	<h5>Address Details</h5>
	<div class="row">
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="address" class="col-lg-3 col-form-label">Address</label>
	<div class="col-lg-9">
	<input id="address" name="address" type="text" class="form-control">
	</div>
	</div>
	</div>
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="pincode" class="col-lg-3 col-form-label">Pincode</label>
	<div class="col-lg-9">
	<input id="pincode" name="pincode" type="text" class="form-control">
	</div>
	</div>
	</div>
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="country" class="col-lg-3 col-form-label">Country</label>
	<div class="col-lg-9">
	<select class="select2 form-control " name="country" id="country" style="width: 100%;">
	<option disabled selected style="display:none;"></option>
	<option value="India">India</option>  
	<option value="Other">Other</option>  
	</select>                                                            
	</div>
	</div>
	</div>
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="state" class="col-lg-3 col-form-label">State</label>
	<div class="col-lg-9">
	<input id="state" name="state" type="text" class="form-control">
	</div>
	</div>
	</div>
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="district" class="col-lg-3 col-form-label">District</label>
	<div class="col-lg-9">
	<input id="district" name="district" type="text" class="form-control">
	</div>
	</div>
	</div>
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="taluka" class="col-lg-3 col-form-label">Taluka</label>
	<div class="col-lg-9">
	<input id="taluka" name="taluka" type="text" class="form-control">
	</div>
	</div>
	</div>
</div>
	<div class="tab">
	<h5>Other Details</h5>
	<div class="row">
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="referral" class="col-lg-3 col-form-label">Referral</label>
	<div class="col-lg-9">
	<select class="select2 form-control " name="referral" id="referral" style="width: 100%;">
	<option disabled selected style="display:none;"></option>
	<option value="Volunteer">Volunteer</option>
	<option value="Donor">Donor</option>
	<option value="Alumni">Alumni</option>
	<option value="Other-VSM">Other-VSM</option>
	<option value="Digital Media">Digital Media</option>
	<option value="Print Media">Print Media</option>
	<option value="Volunteer">Volunteer</option>                          

	</select>                                                           
	</div>
	</div>
	</div>
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Referral Details</label>
	<div class="col-lg-9">
	<input id="referraldetails" name="referraldetails" type="text" class="form-control">
	</div>
	</div>
	</div>
	<div class="col-lg-9">
	<div class="form-group row">
	<label for="otherinfo" class="col-lg-3 col-form-label">Other Information</label>
	<div class="col-lg-9">
	<input id="otherinfo" name="otherinfo" type="text" class="form-control">
	</div>
	</div>
	</div>
	</div>    
	</div>   
	<div style="overflow:auto;">
	<div style="float:right;">
	<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
	<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
	</div>
	</div>   
	<div style="overflow:auto;">
	<div style="float:right;">
	<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
	<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
	</div>
	</div>               
	</form>
	</div>
	</div>
	</div>
	</div>
	<!-- end row -->



	</div> <!-- container-fluid -->
	</div>
	<!-- End Page-content -->

	<script>
	var currentTab = 0; // Current tab is set to be the first tab (0)
	showTab(currentTab); // Display the current tab

	function showTab(n) {
	  // This function will display the specified tab of the form...
	  var x = document.getElementsByClassName("tab");
	  x[n].style.display = "block";
	  //... and fix the Previous/Next buttons:
	  if (n == 0) {
		document.getElementById("prevBtn").style.display = "none";
	  } else {
		document.getElementById("prevBtn").style.display = "inline";
	  }
	  if (n == (x.length - 1)) {
		document.getElementById("nextBtn").innerHTML = "Submit";
	  } else {
		document.getElementById("nextBtn").innerHTML = "Next";
	  }
	  //... and run a function that will display the correct step indicator:
	  fixStepIndicator(n)
	}

	function nextPrev(n) {
	  // This function will figure out which tab to display
	  var x = document.getElementsByClassName("tab");
	  // Exit the function if any field in the current tab is invalid:
	  if (n == 1 && !validateForm()) return false;
	  // Hide the current tab:
	  x[currentTab].style.display = "none";
	  // Increase or decrease the current tab by 1:
	  currentTab = currentTab + n;
	  // if you have reached the end of the form...
	  if (currentTab >= x.length) {
		// ... the form gets submitted:
		document.getElementById("regForm").submit();
		return false;
	  }
	  // Otherwise, display the correct tab:
	  showTab(currentTab);
	}

	function validateForm() {
	  // This function deals with validation of the form fields
	  var x, y, i, valid = true;
	  x = document.getElementsByClassName("tab");
	  y = x[currentTab].getElementsByTagName("input");
	  // A loop that checks every input field in the current tab:
	  for (i = 0; i < y.length; i++) {
		// If a field is empty...
		if (y[i].value == "") {
		  // add an "invalid" class to the field:
		  y[i].className += " invalid";
		  // and set the current valid status to false
		  valid = false;
		}
	  }
	  // If the valid status is true, mark the step as finished and valid:
	  if (valid) {
		document.getElementsByClassName("step")[currentTab].className += " finish";
	  }
	  return valid; // return the valid status
	}

	function fixStepIndicator(n) {
	  // This function removes the "active" class of all steps...
	  var i, x = document.getElementsByClassName("step");
	  for (i = 0; i < x.length; i++) {
		x[i].className = x[i].className.replace("active", "");
	  }
	  //... and adds the "active" class on the current step:
	  x[n].className += " active";
	}
	</script>
	   
			
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
			
			<script src="assets/js/app.js"></script>
			
			</body>
			
			<!-- Mirrored from themesbrand.com/veltrix/layouts/vertical/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 11:25:34 GMT -->
			</html>
			