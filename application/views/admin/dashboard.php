<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8" />
        <title>Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

        <!-- plugin css -->
        <link href="<?php echo base_url(); ?>assets/libs--/jquery-vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="<?php echo base_url(); ?> #" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="<?php echo base_url(); ?>assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                <?php echo ucfirst($_SESSION['user_full_name']);?> <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            

                            <!-- item-->
                            <a href="<?php echo base_url(); ?>auth/logout" class="dropdown-item notify-item">
                                <i class="remixicon-logout-box-line"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>
                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="<?php echo base_url(); ?>" class="logo text-center">
                        <span class="logo-lg">
                            <!-- <img src="<?php echo base_url(); ?>assets/images/logo-light.jpg" alt="" height="50"> -->
                            <!-- <span class="logo-lg-text-light">Xeria</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">X</span> -->
                            <!-- <img src="<?php echo base_url(); ?>assets/images/logo-sm.jpg" alt="" height="24"> -->
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>
        
                 
                </ul>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Navigation</li>

                           <li>
                                <a href="<?php echo base_url(); ?>auth/dashboard" class="waves-effect <?php if (!empty($active_tab) && $active_tab == 'Dashboard') { ?>active <?php } ?>">
                                    <i class="remixicon-dashboard-line"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li> 
                            <li>
                                <a href="<?php echo base_url(); ?>auth/blog" class="waves-effect <?php if (!empty($active_tab) && $active_tab == 'Blog') { ?>active <?php } ?>">
                                    <i class="remixicon-dashboard-line"></i>
                                    <span> Blogs </span>
                                </a>
                            </li> 

                   
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?> javascript: void(0);">Test</a></li>
                                           
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <!-- <div class="col-md-6 col-xl-3">
                                <div class="card-box">
                                    <h4 class="mt-0 font-16">ISDQI Status</h4>
                                    <h2 class="text-primary my-3 text-center"><span data-plugin="counterup">31,570</span></h2>
                                </div>
                            </div> -->

                            <div class="col-md-6 col-xl-2">
                                <div class="card-box">
                                    <h4 class="mt-0 font-16">Total Blogs</h4>
                                    <h2 class="text-primary my-3 text-center"><a href="<?php echo base_url(); ?>auth/blog"><span data-plugin="counterup"><?php echo count($blogs);?></span></a></h2>
                                </div>
                            </div>                           
                        </div>              

                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                           
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    2022 © Project
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

     

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="<?php echo base_url(); ?>assets/js/vendor.min.js"></script>

        <!-- <script src="<?php echo base_url(); ?>assets/js/app.min.js"></script> -->
        <script src="<?php echo base_url(); ?>assets/js/new.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/toastr.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/libs--/apexcharts/apexcharts.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/libs--/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/libs--/jquery-vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/libs--/jquery-vectormap/jquery-jvectormap-world-mill-en.js"></script>

        <!-- Peity chart-->
        <script src="<?php echo base_url(); ?>assets/libs--/peity/jquery.peity.min.js"></script>

        <!-- init js -->
        <script src="<?php echo base_url(); ?>assets/js/pages/dashboard-2.init.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/js/app.min.js"></script>
        
    </body>


</html>

<?php if ($this->session->flashdata('success')) { ?>
 <script type="text/javascript">
    toasterSuccess("<?php echo $this->session->flashdata('success'); ?>");
  </script>
<?php } else if ($this->session->flashdata('error')) { ?>
  <script type="text/javascript">
    toasterError("<?php echo $this->session->flashdata('error'); ?>");
  </script>
<?php } ?>