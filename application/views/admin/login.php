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

    <!-- App css -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/toastr.css" rel="stylesheet" type="text/css"/>

</head>

<body>

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">                               
                                <p class="text-muted mb-4 mt-3">Enter your mobile and password to access admin
                                    panel.</p>
                            </div>

                            <form id="login_form" action="<?php echo base_url();?>auth/login" method="POST">

                                <div class="form-group mb-3">
                                    <label for="mobile">Mobile</label>
                                    <input class="form-control" type="text" id="mobile" name="mobile" placeholder="Enter your mobile">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password">
                                </div>

                                <!-- <div class="form-group mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                        <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div> -->

                                <div class="form-group mb-0 text-center">
                                    <a href="#" >
                                        <button class="btn btn-primary btn-block" type="submit" id="kt_sign_in_submit">
                                            Log In </button>
                                    </a>
                                </div>

                            </form>                            

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <!-- <p> <a href="" class="text-muted ml-1">Forgot your password?</a></p> -->
                            <p class="text-muted">Don't have an account? <a href="<?php echo base_url(); ?>auth/register" class="text-primary font-weight-medium ml-1">Sign Up</a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt">
        2022 &copy;<a href="#" class="text-muted">Project</a>
    </footer>

    <!-- Vendor js -->
    <script src="<?php echo base_url(); ?>assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="<?php echo base_url(); ?>assets/js/app.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/new.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js"></script>    
    
      
    <script src="<?php echo base_url(); ?>assets/js/toastr.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>


    <script>
      $(document).ready(function(){ 
        $('#login_form').validate({
            rules:{
              mobile:{
                required:true,                
                mobile_no:true,
                digits:true,
                minlength: 10,
                maxlength: 10
              },
              password:{
                  minlength: 6,
                  maxlength: 30,
                  required: true
                }
            },
            messages:{
                mobile:{
                   required:"<span style='color:red;'>Please enter mobile here</span>"             
                },
                password:{
                  required: "<span style='color:red;'>Please enter password here</span>"
                }
            }
        });
      });
    </script>

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