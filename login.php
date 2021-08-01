<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/veltrix/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 11:25:59 GMT -->
<head>
    <meta charset="utf-8" />
    <title>VSM Thane | Login</title>
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

<body>

    <!-- <div class="home-btn d-none d-sm-block">
        <a href="login.php" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div> -->
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary">
                            <div class="text-primary text-center p-4">
                                <h5 class="text-white font-size-20">Welcome Back !</h5>
                                <p class="text-white-50">Sign in to continue to VSM Donar Portal!</p>
                                <!-- <a href="index.html" class="logo logo-admin"> -->
                                    <img src="assets/images/vsmlogo.png" height="55" alt="logo">
                            </div>
                        </div>

                        <div class="card-body p-4">
                            <div class="p-3">
                            <?php
                                    include('functions.php');
                                    $donor = new VSM_Digi();
                                    
                                    if(isset($_POST['loginsubmit']))
                                    {
                                        $result=$donor->verify_credentials();
                                        
                                        //If result[0] returns other than 0 means entry exists
                                        //var_dump($result);
                                        if($result[0] != 0)
                                        {
                                            session_start();
                                            $_SESSION['username'] = $result[2];
                                            header("location:home.php");
                                        }
                                        else    
                                        {
                                            echo '<div class="alert alert-danger " >
                                                <strong>Error!</strong> Entered Username or Password is incorrect
                                            </div>';
                                        }
                                    }
                                ?>
                                <form method="post" class="form-horizontal mt-4" action="login.php">
                                  
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Enter username">
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                                <label class="custom-control-label" for="customControlInline">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit" name="loginsubmit">Log In</button>
                                        </div>
                                    </div>

                                    <div class="form-group mt-2 mb-0 row">
                                        <div class="col-12 mt-4">
                                            <a href="pages-recoverpw.html"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>

                    <div class="mt-5 text-center">
                        <!-- <p>Don't have an account ? <a href="pages-register.html" class="font-weight-medium text-primary"> Signup now </a> </p> -->
                        <strong>Copyright &copy; 2017 <a href="http://vsmthane.org">VSM Thane</a>.</strong> All rights reserved.                    
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>


<!-- Mirrored from themesbrand.com/veltrix/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 11:25:59 GMT -->
</html>