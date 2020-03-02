<?php
session_start();
?>

<!doctype html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/highdmin/vertical/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:52:57 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('https://scontent.fdac20-1.fna.fbcdn.net/v/t1.0-0/p640x640/71571724_372662920351419_6251272277388689408_o.jpg?_nc_cat=104&_nc_sid=ca434c&_nc_oc=AQlsZUXwIf6WdO-qVHW4Inr4wsU9gmyKTEbc0A6gs9nJCWozj42X68aaNOD-ja8bjWE&_nc_ht=scontent.fdac20-1.fna&_nc_tp=6&oh=5ac7261879ed235e78712a3661118e32&oe=5EFC1895');background-size: cover;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                        <a style="margin-left: 200px;" href="../index.php" class="text-success">
                                    <span><img src="http://www.munpoly.gov.bd/images/mpi.png" alt="" height="50"></span>
                                </a>
                            <h4 class="text-uppercase text-center pb-4">
                                Munshiganj polytechnic institute
                            </h4>

                            <form class="" action="login_check.php" method="post">

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                    <label for="username">Username</label>
                <input class="form-control" type="text" name="username" id="username" value="<?php if (isset($_GET['username'])) {
                    echo $_GET['username'];
                    } ?>" placeholder="Enter  username">

                <label class="text-small text-danger">
                  <?php if (isset($_GET['user_not_match'])) {
                      echo $_GET['user_not_match'];
                  } ?>
                </label>
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <a href="#" class="text-muted float-right"><small>Forgot your password?</small></a>
                                        <label for="password">Password</label>
                                    <input class="form-control" type="password" name="password" id="password" value="<?php if (isset($_GET['password'])) {
                                        echo $_GET['password'];
                                    } ?>" placeholder="Enter  password">


                                    <label class="text-small text-danger">
                                    <?php if (isset($_GET['password_not_match'])) {
                                        echo $_GET['password_not_match'];
                                    } ?>
                                    </label>



                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">

                                        <div class="checkbox checkbox-custom">
                                            <input id="remember" type="checkbox" checked="">
                                            <label for="remember">
                                                Remember me
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        
                                        <input class="btn btn-success btn-block" type="submit" name="login" value="Login">
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Don't have an account? <a href="register.php" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright"><?=date("Y")?> © Munpoly.gov.bd</p>
            </div>

        </div>



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>


</html>