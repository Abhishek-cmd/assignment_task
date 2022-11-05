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
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="<?php echo base_url();?>assets/libs--/jquery-vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/jquery-ui.css" rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url();?>assets/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="<?php echo base_url();?>assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            <?php echo ucfirst($_SESSION['user_full_name']);?> <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                        <!-- item-->
                        <a href="<?php echo base_url();?>auth/logout" class="dropdown-item notify-item">
                            <i class="remixicon-logout-box-line"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>
            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="<?php echo base_url();?>auth/dashboard" class="logo text-center">
                    <span class="logo-lg">
                        <!-- <img src="<?php //echo base_url();?>assets/images/logo-light.jpg" alt="" height="50"> -->
                        <!-- <span class="logo-lg-text-light">Xeria</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">X</span> -->
                        <!-- <img src="<?php //echo base_url();?>assets/images/logo-sm.png" alt="" height="24"> -->
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
                            <a href="<?php echo base_url();?>auth/dashboard" class="waves-effect <?php if (!empty($active_tab) && $active_tab == 'Dashboard') { ?>active <?php } ?>">
                                <i class="remixicon-dashboard-line"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>auth/blog" class="waves-effect <?php if (!empty($active_tab) && $active_tab == 'Blog') { ?>active <?php } ?>">
                                <i class="remixicon-dashboard-line"></i>
                                <span> Blog </span>
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
                                    <h4 class="page-title">Blog </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                    <div class="row">

                        <div class="col-md-12">
                            <div class="card-title">
                                Blog Information
                            </div>

                            <div class="card-box">
                                <form id="add_blog" method="POST" action="<?php echo base_url(); ?>auth/addnew_blog" enctype="multipart/form-data">

                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fw-bold fs-6 mb-2">Blog Title <span class="mand-field" style="color:red">*</span></label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="blog_title" id="blog_title" class="form-control form-control-solid mb-3 mb-lg-0"/>
                                    </div><br/><br/>

                                    <div class="fv-row mt-10">
                                        <!--begin::Label-->
                                        <label class="fw-bold fs-6 mb-2">Blog Description <span class="mand-field" style="color:red">*</span></label>
                                        <!--end::Label-->
                                        <!--begin::Input-->

                                        <textarea id="blog_description" name="blog_description"></textarea>

                                        <!-- <textarea id="blog_description" name="blog_description"></textarea> -->

                                        <!-- <input type="textarea" name="blog_description" id="blog_description" class="form-control form-control-solid mb-3 mb-lg-0" rows="4" cols="50"/> -->
                                    </div><br/><br/>

                                    <div class="fv-row mt-10">
                                        <!--begin::Label-->
                                        <label class="fw-bold fs-6 mb-2">Blog Thumbnail Image <span class="mand-field" style="color:red">*</span></label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="file" name="blog_image" id="blog_image" class="form-control form-control-solid mb-3 mb-lg-0"/>

                                    </div><br/><br/>

                                    <div class="text-center pt-15">
                                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit" id="btnSubmit">
                                            <span class="indicator-label">Submit</span>
                                        </button>
                                    </div>

                                </form>
                                
                            </div> <!-- end col -->
                        </div>

                    </div>


                    <div class="row pt-5">

                        <div class="col-md-12">
                            <div class="card-title">
                                Blog List
                            </div>

                            <div class="card-box">
                                <div class="overflow-auto">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-7 gy-5" id="example">

                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class="text-start text-muted fw-bolder fs-8 text-uppercase gs-0">
                                                <th class="min-w-60px text-center">Sr.No</th>         
                                                <th class="min-w-150px text-start">Blog Title</th>
                                                <th class="min-w-125px">Description</th>
                                                <th class="min-w-125px">Thumbnail Image</th>
                                                <th class="min-w-125px">Status</th>
                                                <th class="min-w-125px">Action(s)</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->

                                        <!--begin::Table body-->
                                        <tbody class="text-gray-600 fw-bold">                                   
                                            <?php
                                                if(!empty($blogs)){
                                                   $i=0;
                                                   foreach ($blogs as $key => $value) {
                                                    $i++;
                                            ?>

                                            <tr>
                                                <!--begin::Checkbox-->
                                                <td class="text-center">
                                                    <?php echo $i;?>
                                                </td>

                                                <td class="text-center">
                                                    <?php echo $value['blog_title'];?>
                                                </td>

                                                <td class="text-center">
                                                    <?php echo $value['blog_description'];?>
                                                </td>

                                                <td class="text-center">
                                                    <img src="<?php echo base_url('uploads/'. $value['blog_thumbnail_image']);?>" width="100" height="100"/>
                                                    <?php //echo $value['blog_thumbnail_image'];?>
                                                </td>

                                                <td class="text-center">
                                                    <div class="badge fw-bolder">
                                                        <?php 
                                                           if($value['status'] == '1'){
                                                              echo "<span class='badge badge-light-success fs-12 fw-bolder'><b>Active</b></span>";
                                                           }else if($value['status'] == '0'){
                                                              echo "<span class='badge badge-light-warning fs-12 fw-bolder'><b>Inactive</b></span>";
                                                           }
                                                        ?>                  
                                                    </div>
                                                </td>  

                                                <td class="text-center">
                                                        <div class="d-flex justify-content-center text-center flex-shrink-0">
                                                            <a target="_blank" href="<?php echo base_url(); ?>auth/editblog/<?php echo $value['id']; ?>" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-trigger="hover" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="top" title="Edit Blog">

                                                            <span class="svg-icon svg-icon-3">
                                                                <svg
                                                                  xmlns="http://www.w3.org/2000/svg"
                                                                  width="24px"
                                                                  height="24px"
                                                                  viewBox="0 0 24 24"
                                                                  version="1.1">
                                                                    <path
                                                                        d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                        fill="#000000"
                                                                        fill-rule="nonzero"
                                                                        transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"
                                                                    />
                                                                    <path
                                                                        d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                        fill="#000000"
                                                                        fill-rule="nonzero"
                                                                        opacity="0.3"
                                                                    />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                            </a>

                                                            <a onClick="deleteBlog('<?php echo $value['id']; ?>');" href="#"
                                                          class=" btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-trigger="hover" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="top" title="Delete">

                                                          <span class="svg-icon svg-icon-3">
                                                            
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <path d="M12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 C17.5228475,2 22,6.4771525 22,12 C22,17.5228475 17.5228475,22 12,22 Z M12,20 C16.418278,20 20,16.418278 20,12 C20,7.581722 16.418278,4 12,4 C7.581722,4 4,7.581722 4,12 C4,16.418278 7.581722,20 12,20 Z M19.0710678,4.92893219 L19.0710678,4.92893219 C19.4615921,5.31945648 19.4615921,5.95262146 19.0710678,6.34314575 L6.34314575,19.0710678 C5.95262146,19.4615921 5.31945648,19.4615921 4.92893219,19.0710678 L4.92893219,19.0710678 C4.5384079,18.6805435 4.5384079,18.0473785 4.92893219,17.6568542 L17.6568542,4.92893219 C18.0473785,4.5384079 18.6805435,4.5384079 19.0710678,4.92893219 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                                </g>
                                                            </svg>
                                                          </span>
                                                        </a>


                                                        </div>
                                                </td>                                                   
                                            </tr>                                           

                                            <?php } ?>
                                            <?php } else { ?>
                                              <tr><td colspan="6"><center>No values avaliable. </center></td></tr>
                                            <?php } ?>                              

                                        </tbody>
                                        <!--end::Table body-->

                                    </table>
                                    <!--end::Table-->
                                </div>
                                    
                            </div> <!-- end col -->
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

    <!-- App js -->
    <script src="<?php echo base_url(); ?>assets/js/app.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/new.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/toastr.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/sweetalert2@11.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>

    <script src="https://cdn.ckeditor.com/4.10.0/full-all/ckeditor.js"></script>

  
    <script>
        $(function () {
  
          // CKEDITOR.replace('blog_description');
          CKEDITOR.replace( 'blog_description', {
            toolbar: [
            { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates' ] },
            { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
            { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
            { name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
            '/',
            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
            { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
            { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
            { name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
            '/',
            { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
            { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
            { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
            { name: 'others', items: [ '-' ] },
            ]
            });          
        });
    </script>

    <script>
        $('#blog_title,#blog_description').keyup(function () {
            if ($(this).val().match(/(\s{2,})|[^a-zA-Z0-9']/g))
            {
              $(this).val($(this).val().replace(/(\s{2,})|[^a-zA-Z0-9']/g, ' '));
              $(this).val($(this).val().replace(/^\s*/, ''));
            }

            if ($(this).val().match(/([a-zA-Z0-9])\1{2,}/g)){
              $(this).val($(this).val().replace(/([a-zA-Z0-9])\1{2,}/g, ""));
            } 

            $(this).val(ucfirst($(this).val()));
        });

        $(document).ready(function(){ 
            $('#add_blog').validate({
                rules:{
                    blog_title:{
                       required:true
                    },
                    blog_description:{
                       required:true
                    },
                    blog_image:{
                        required:true
                    }
                },
                messages:{
                    blog_title:{
                        required:"<span style='color:red;'>Please enter blog title here</span>" 
                    },
                    blog_description:{
                        required:"<span style='color:red;'>Please enter blog description here</span>" 
                    },
                    blog_image:{
                       required:"<span style='color:red;'>Please select thumbnail here</span>"             
                    }
                }
            });
        });

        function deleteBlog(blog_id){
            // console.log(blog_id);
            var SITEURL = '<?php echo base_url(); ?>';
            //console.log(SITEURL);

            Swal.fire({
             text: 'Do you really want to suspend this user?', 
             icon: 'warning',
             confirmButtonText: "Yes",
             denyButtonText: 'No',
             buttonsStyling: false,
             showDenyButton: true,
             customClass: {
                confirmButton: "btn btn-light-primary",
                denyButton: "btn btn-danger"
             }
            }).then((result) => {
            if (result.isConfirmed) {
             // ajaxindicatorstart("Please wait...");
             $.ajax({
              cache: false,
              type: "POST",
              url: SITEURL + 'auth/deleteBlogs/'+blog_id,
              data: {blog_id : blog_id},
              dataType: "json",
              processData: true,
              success: function (result) {
                if(result == 1){
                   ajaxindicatorstop();
                   Swal.fire({
                       text: "Blog deleted successfully",
                       icon: "success"               
                   });
                   window.location.href = '<?php echo base_url(); ?>auth/blog';
                }else{
                   ajaxindicatorstop();
                   Swal.fire({
                       text: "Unable to delete",
                       icon: "warning"               
                   });
                }
              }
             });
            } else if (result.isDenied) {
             return false;
            }
           });
        }

    </script>

    <script type="text/javascript">
        $(document).ready(function () {
           $('#example').DataTable();
        });
    </script>

    <script src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap4.min.js"></script>    
</body>


</html>
