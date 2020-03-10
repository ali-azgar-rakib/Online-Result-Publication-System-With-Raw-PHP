<!doctype html>
<html lang="en">

<!-- Mirrored from coderthemes.com/highdmin/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:51:24 GMT -->
<head>
        <meta charset="utf-8" />
        <title><?=$title?></title>
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
        <!-- ========font awesome====== -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- ==================== data table ================= -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.html" class="logo">
                            <span>
                                <img src="http://www.munpoly.gov.bd/images/mpi.png" alt="" height="30">
                                <h4 class="d-inline text-dark">MUPI</h4>
                            </span>
                           
                                
                            
                        </a>
                    </div>

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="<?=$_SESSION['user_photo']?>" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>
                        <h5><a href="#"><?=$_SESSION['user_name']?></a> </h5>
                        <p class="text-muted">Admin </p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->

                            <li>
                                <a href="index.php">
                                    <i class="fi-air-play"></i> <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i style="font-size: 14px; " class="fa fa-users" aria-hidden="true"></i><span> User </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="all_users.php">All user</a></li>
                                    <li><a href="approve_user.php">Approve user</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i style="font-size: 14px; " class="fa fa-users" aria-hidden="true"></i><span> All student </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="add_student.php">Add student</a></li>
                                    <li><a href="all_student.php">All student</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-bell noti-icon"></i>
                                    <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">


                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0"><span class="float-right"><a href="#" class="text-dark"><small>Clear All</small></a> </span>Notification</h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                            <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                            <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-purple"><i class="mdi mdi-account-plus"></i></div>
                                            <p class="notify-details">New user registered.<small class="text-muted">7 days ago</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-custom"><i class="mdi mdi-heart"></i></div>
                                            <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="<?=$_SESSION['user_photo']?>" alt="user" class="rounded-circle"> <span class="ml-1"><?=$_SESSION['user_name']?> <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="profile.php" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="logout.php" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title text-primary">

                                    <!-- dynamic page header  -->

                                    <?php switch ($title) {

                                      //  dashboard page 

                                      case 'dashboard':
                                        ?>
                                        <i class="fas fa-tachometer-alt"></i> Dashboard <small>content overview</small> </h4>
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-tachometer-alt"></i>Dashboard</li>
                                    </ol>
                                        <?php
                                        break;

                                        // profile page 

                                      case 'profile':
                                        ?>
                                            <h2 class="text-primary"><i class="fas fa-user"></i> profile</h2>
                                            <div aria-label="breadcrumb">
                                              <ol class="breadcrumb">
                                                <li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=dashboard"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                                                <li  class="breadcrumb-item active" aria-current="page"><i class="fas fa-user"></i> user</li>
                                              </ol>
                                            </div>
                                        <?php
                                        break;

                                        // all user page 

                                      case 'all users':
                                        ?>
                                        
                                        <h2 class="text-primary"><i class="fas fa-users"></i> All Users</h2>
                                        <div aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                          <li class="breadcrumb-item active" aria-current="page"> <a style="text-decoration:none;" href='index.php?page=dashboard'><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                                          <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-users"></i> all user</li>
                                        </ol>
                                      </div>
                                        
                                        <?php
                                        
                                        break;

                                        case 'approve user':

                                          ?>
                                          
                                          
                                          <h2 class="text-primary"><i class="fas fa-users"></i> All Users</h2>
                                          <div aria-label="breadcrumb">
                                          <ol class="breadcrumb">
                                            <li class="breadcrumb-item active" aria-current="page"> <a style="text-decoration:none;" href='index.php?page=dashboard'><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-user-plus"></i> approve user</li>
                                          </ol>
                                        </div>
                                          
                                          <?php
                                          break;

                                        case 'add student':
                                          ?>
                                          
                                          <h2 class="text-primary"><i class="fas fa-user-plus"></i> Add student </h2>
                                            <div aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                              <li class="breadcrumb-item active" aria-current="page"> <a href='index.php?page=dashboard'><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                                              <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-user-plus"></i> add student result</li>
                                            </ol>
                                          </div>

                                          <?php
                                          break;
                                        case 'all student':
                                          ?>
                                          
                                          <h2 class="text-primary"><i class="fas fa-users"></i> All student </h2>
                                          <div aria-label="breadcrumb">
                                          <ol class="breadcrumb">
                                            <li class="breadcrumb-item active" aria-current="page"> <a style="text-decoration:none;" href='index.php?page=dashboard'><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-users"></i> all student result</li>
                                          </ol>
                                        </div>
                                          
                                          <?php
                                          break;
                                        case 'update student data':
                                          ?>
                                          <h2 class="text-primary"><i class="fas fa-user-edit"></i> Update student Data </h2>
                                            <div aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                              <li class="breadcrumb-item active" aria-current="page"> <a href='index.php?page=dashboard'><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                                              <li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=all_student" ><i class="fas fa-users"></i> all student</li></a>
                                              <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-user-edit"></i> update student data</li>
                                            </ol>
                                          </div>
                                          <?php
                                          break;


                                      
                                      default:
                                        # code...
                                        break;
                                    }
                                    ?>
                                      
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->

