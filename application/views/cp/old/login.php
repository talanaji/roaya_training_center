<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
	
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>public/assets/images/favicon.png">
    <title><?=$this->lang->line('Login_page_admin_control_panel')?></title>
    
    <!-- page css -->
    <script src="<?=base_url()?>public/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <link href="<?=base_url()?>public/dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url()?>public/dist/css/style.min.css" rel="stylesheet">

	
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
 
</head>

<body>
<?php
	  $this->load->view('cp/alert');
	?>

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label"><?= $this->lang->line('login_title')?></p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="login-register login-sidebar" style="background-image:url(<?=base_url()?>public/assets/images/background/login-register.jpg);">
        <div class="login-box card">
            <div class="card-body">
			  <form action="<?=base_url()?>login/auth" method="POST" class="form-horizontal form-material text-center" id="loginform">
            
                    <a href="javascript:void(0)" class="db"><img src="<?=base_url()?>public/assets/images/roaya_logo.png" alt="Home" /></a>
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required id="email" name="email" placeholder="<?= $this->lang->line('User_name')?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required id="password" name="password" placeholder="<?= $this->lang->line('password_placeholder')?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div class="custom-control custom-checkbox">
								
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">|
                                    <label class="custom-control-label" for="customCheck1"><?= $this->lang->line('Remember_me')?></label>
                                </div> 
                                <div class="ml-auto">
                                    <a href="javascript:void(0)" id="to-recover" class="text-muted"><i class="fas fa-lock m-r-5"></i> <?= $this->lang->line('Forgot_pwd')?>?</a> 
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase btn-rounded" type="submit"><?= $this->lang->line('Login_btn')?></button>
                        </div>
                    </div>
                   
                  
                </form>
                <form class="form-horizontal" id="recoverform" action="">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3><?= $this->lang->line('Recover_Password')?></h3>
                            <p class="text-muted"><?= $this->lang->line('Enter_your_Email_and_instructions_will_be_sent_to_you')?>! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="<?= $this->lang->line('User_email')?>">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit"><?= $this->lang->line('Recover_Password')?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?=base_url()?>public/assets/node_modules/popper/popper.min.js"></script>
    <script src="<?=base_url()?>public/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>public/assets/node_modules/sweetalert/sweetalert.min.js"></script>
    <script src="<?=base_url()?>public/assets/node_modules/sweetalert/jquery.sweet-alert.custom.js"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">

  
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
    
</body>

</html>