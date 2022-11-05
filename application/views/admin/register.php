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
    <link rel="shortcut icon" href="assets/images/favicon.ico">

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
                                <p class="text-muted mb-4 mt-3">Don't have an account? Create your own account, it takes less than a minute</p>
                            </div>

                            <form id="register_form" action="<?php echo base_url();?>auth/register" method="POST">

                                <div class="form-group">
                                    <label for="fullname">First Name</label>
                                    <input class="form-control" type="text" id="first_name" name="first_name" placeholder="Enter your first name">
                                </div>

                                <div class="form-group">
                                    <label for="fullname">Last Name</label>
                                    <input class="form-control" type="text" id="last_name" name="last_name" placeholder="Enter your last name">
                                </div>

                                <div class="form-group">
                                    <label for="emailaddress">Email address</label>
                                    <input class="form-control" type="email" id="emailaddress" name="emailaddress" placeholder="Enter your email">
                                </div>

                                <div class="form-group">
                                    <label for="emailaddress">Mobile</label>
                                    <input class="form-control" type="text" id="mobile" name="mobile" placeholder="Enter your mobile">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password">
                                </div>
                                <!-- <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                                        <label class="custom-control-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                    </div>
                                </div> -->
                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary btn-block" type="submit" id="register"> Sign Up </button>
                                </div>

                            </form>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Already have account? <a href="<?php echo base_url(); ?>auth/login" class="text-muted font-weight-medium ml-1">Sign In</a></p>
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
    <script src="<?php echo base_url(); ?>assets/js/toastr.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>



    <script>

        $('#first_name,#last_name').keyup(function () {
            if ($(this).val().match(/(\s{2,})|[^a-zA-Z']/g))
            {
              $(this).val($(this).val().replace(/(\s{2,})|[^a-zA-Z']/g, ' '));
              $(this).val($(this).val().replace(/^\s*/, ''));
            }

            if ($(this).val().match(/([a-zA-Z])\1{2,}/g)){
              $(this).val($(this).val().replace(/([a-zA-Z])\1{2,}/g, ""));
            } 

            $(this).val(ucfirst($(this).val()));
        });

        $(document).ready(function(){ 
            $('#register_form').validate({
                rules:{
                    first_name:{
                       required:true
                    },
                    last_name:{
                       required:true
                    },
                    mobile:{
                        required:true,                
                        mobile_no:true,
                        digits:true,
                        minlength: 10,
                        maxlength: 10
                    },
                    emailaddress:{
                       required:true,
                       email:true
                    },
                    password:{
                       minlength: 6,
                       maxlength: 30,
                       required: true
                    }
                },
                messages:{
                    first_name:{
                        required:"<span style='color:red;'>Please enter first name here</span>" 
                    },
                    last_name:{
                        required:"<span style='color:red;'>Please enter last name here</span>" 
                    },
                    mobile:{
                       required:"<span style='color:red;'>Please enter mobile here</span>"             
                    },
                    emailaddress:{
                        required:"<span style='color:red;'>Please enter email here</span>"             
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
