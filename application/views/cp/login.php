<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>public/assets/images/favicon.png">

<title><?=$this->lang->line('Login_page_admin_control_panel')?></title>
<link href="https://fonts.googleapis.com/css?family=El+Messiri&amp;subset=arabic,cyrillic" rel="stylesheet">
<!-- Bootstrap Core and vandor -->
    <script src="<?=base_url()?>public/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="<?=base_url()?>public/assets/plugins/bootstrap/css/bootstrap.min.css" />

<!-- Core css -->
<link rel="stylesheet" href="<?=base_url()?>public/assets/css/style.min.css"/>

</head>
<body class="font-muli rtl">
<?php
	  $this->load->view('cp/alert');
	?>
<div class="auth option2" style="background-image:url(<?=base_url()?>public/assets/images/2514310.jpg);background-repeat: no-repeat;background-size: 100% 100%;">
    <div class="auth_left">
        <div class="card">
            <div class="card-body" >
          <form action="<?=base_url()?>login/auth" method="POST" class="form-horizontal form-material text-center" id="loginform">   
   <a class="header-brand"><img src="<?=base_url()?>public/assets/images/roaya_logo.png" alt="Home" width="150px"/></a>		  
                <div class="form-group">
                    <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?= $this->lang->line('User_name')?>">
                </div>
                <div class="form-group">
                    <label class="form-label"><a href="forgot-password.php" class="float-right small"><?= $this->lang->line('Forgot_pwd')?></a></label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="<?= $this->lang->line('password_placeholder')?>">
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" />
                    <span class="custom-control-label"><?= $this->lang->line('Remember_me')?></span>
                    </label>
                </div>
                <div class="text-center">
				<button class="btn btn-primary btn-block" type="submit"><?= $this->lang->line('Login_btn')?></button>
                 
                    
                </div>
				</form>
            </div>
        </div>        
    </div>
</div>
 
<!-- Start Main project js, jQuery, Bootstrap -->
<script src="<?=base_url()?>public/assets/bundles/lib.vendor.bundle.js"></script>

<!-- Start project main js  and page js -->
<script src="<?=base_url()?>public/assets/js/core.js"></script>
</body>
</html>