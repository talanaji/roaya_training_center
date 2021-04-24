<!DOCTYPE html>
<html lang="ar" class="h-100" id="login-page2">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?=$this->lang->line('std_login')?></title>
    <script src="<?=base_url()?>public/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>favicon.png">
    <!-- Custom Stylesheet -->
	<script src="<?=base_url()?>public/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <link href="<?=base_url()?>public/newtemplate/css/style.css" rel="stylesheet">
 


</head>

<body class="h-100" class = "rtl">

<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<?php
$this->load->view('cp/alert');
?>
<div class="login-bg2 h-100">
    <div class="container-fluid h-100">
        <div class="row justify-content-between h-100">
          
            <div class="col-xl-3 p-0">
                <div class="form-input-content login-form bg-white">
                    <div class="card">
                        <div class="card-body">
                            <div class="logo text-center">
                                <a href="#">
                                    <img src="<?=base_url()?>public/assets/images/roaya_logo.png" width= "150px" alt="">
                                </a>
                            </div>
                            <h4 class="text-center mt-4"><?=$this->lang->line('log_to_youracc')?></h4>
                            <form class="mt-5 mb-5" method="post">
                                <div class="form-group">
                                    <label><?=$this->lang->line('st_email_log');?></label>
                                    <input type="email" name="st_email" class="form-control" placeholder="email@email.com" required>
                                </div>
                                <div class="form-group">
                                    <label><?=$this->lang->line('User_password');?></label>
                                    <input type="password" name="st_password" class="form-control" placeholder="123456" required>
                                </div>

                     
                                <div class="text-center mb-4 mt-4">
                                    <button type="submit" name="btn_login" class="btn btn-primary"><?=$this->lang->line('Login')?></button>
                                </div>
                            </form>
                            <div class="text-center">
                                <p class="mt-5"><?=$this->lang->line('Dont_have_an_account');?> <a href="<?=base_url()?>Login/register_std"><?=$this->lang->line("Register_Now")?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->
<!-- Common JS -->
<script src="<?=base_url()?>public/newtemplate/assets/plugins/common/common.min.js"></script>
<!-- Custom script -->
   <script src="<?=base_url()?>public/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>public/newtemplate/js/custom.min.js"></script>
<script src="<?=base_url()?>public/newtemplate/js/settings.js"></script>
<script src="<?=base_url()?>public/newtemplate/js/gleek.js"></script>
</body>

</html>