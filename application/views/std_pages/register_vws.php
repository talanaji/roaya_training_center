<!DOCTYPE html>
<html lang="en" class="h-100" id="login-page2">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?=$this->lang->line('std_register')?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>public/newtemplate/assets/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="<?=base_url()?>public/newtemplate/css/style.css" rel="stylesheet">
    <script src="<?=base_url()?>public/sweetalert/dist/sweetalert.js"></script>
    <link rel="stylesheet" href="<?=base_url()?>public/sweetalert/dist/sweetalert.css">
    <style>
        .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 50px;
            height: 50px;
            -webkit-animation: spin 2s linear infinite; /* Safari */
            animation: spin 2s linear infinite;
            display: none;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>

<body class="h-100">
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<div class="login-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content login-form">
                    <div class="card">
                        <div class="card-body">
                            <div class="logo text-center">
                                <a href="index.html">
                                    <img src="<?=base_url()?>public/assets/images/roaya_logo.png" alt="">
                                </a>
                            </div>
                            <h4 class="text-center mt-4"><?=$this->lang->line('regis_new_acc');?></h4>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form method="post" name="std_visitor" class="mt-5 mb-5" enctype="multipart/form-data" id="stds_form" novalidate >
                                                <input type="hidden" id="_PRIFIX" name="_PRIFIX" value="<?=STUDENT_PRIFIX;?>" />
                                                <input type="hidden" id="curr_code" name="curr_code" value="" />
                                                <input type="hidden" id="std_visitor" name="std_visitor" value="std_visitor" />

                                                <div class="form-body">

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h5><?=$this->lang->line('st_name');?> <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" class="form-control" id="st_name" name="st_name" required data-validation-required-message="<?=$this->lang->line('required');?> " />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h5><?=$this->lang->line('st_ID');?> <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" class="form-control" id="st_ID" name="st_ID" required data-validation-required-message="<?=$this->lang->line('required');?> " />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h5><?=$this->lang->line('st_password');?> <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="password" class="form-control" id="st_password" name="st_password" required data-validation-required-message="<?=$this->lang->line('required');?> " />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h5><?=$this->lang->line('st_phone');?> <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" class="form-control phone-inputmask"  id="st_phone1" name="st_phone1" required data-validation-required-message="<?=$this->lang->line('required');?> " />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h5><?=$this->lang->line('st_phone').'2';?></h5>
                                                                <input type="text" class="form-control " id="st_phone2" name="st_phone2" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h5><?=$this->lang->line('st_email');?></h5>
                                                            <div class="controls">
                                                                <input type="email" class="form-control" id="st_email" name="st_email" data-validation-email-message="<?=$this->lang->line('error_email');?>"	/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h5><?=$this->lang->line('st_birthdate');?> <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="date" class="form-control date-inputmask" id="st_birthdate" name="st_birthdate" placeholder="MM/DD/YYYY" > </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h5> <?=$this->lang->line('sc_name');?> <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <select class="form-control" id="st_school_code" name="st_school_code" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                                                    <option value=""><?=$this->lang->line('choose');?></option>
                                                                    <?php  draw_lists2("schools" , "sc_code" , "sc_name","sc_active","1"); ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label mb-10"><?=$this->lang->line('st_town');?></label>
                                                            <input type="text" class="form-control" id="st_town" name="st_town" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h5> <?=$this->lang->line('st_sex');?> <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <select class="form-control" id="st_sex" name="st_sex" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                                                    <option value=""><?=$this->lang->line('choose')?></option>
                                                                    <option value="male"><?=$this->lang->line('male')?></option>
                                                                    <option value="female"><?=$this->lang->line('female')?></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h5> <?=$this->lang->line('User_photo');?> <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="file" name="file[]" id="file" multiple required="required"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="form-actions mt-10">
                                                                <button type="submit" class="btn btn-success  mr-10" id="btn_action">
                                                                    <?=$this->lang->line('Save');?> </button>
                                                                <div class="loader"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
<!--                            <div class="text-center">-->
<!--                                <h5 class="mb-5">Or with Login</h5>-->
<!--                                <ul class="list-inline">-->
<!--                                    <li class="list-inline-item m-t-10"><a href="javascript:void()" class="btn btn-facebook"><i class="fa fa-facebook"></i></a>-->
<!--                                    </li>-->
<!--                                    <li class="list-inline-item m-t-10"><a href="javascript:void()" class="btn btn-twitter"><i class="fa fa-twitter"></i></a>-->
<!--                                    </li>-->
<!--                                    <li class="list-inline-item m-t-10"><a href="javascript:void()" class="btn btn-linkedin"><i class="fa fa-linkedin"></i></a>-->
<!--                                    </li>-->
<!--                                    <li class="list-inline-item m-t-10"><a href="javascript:void()" class="btn btn-google-plus"><i class="fa fa-google-plus"></i></a>-->
<!--                                    </li>-->
<!--                                </ul>-->
                   <p class="mt-5"><?=$this->lang->line('you_have_an_account');?> <a href="<?=base_url()?>Login/login_std"><?=$this->lang->line("log_Now")?></a><!--                                </p>-->
<!--                                </p>-->
<!--                            </div>-->
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
<script src="<?=base_url()?>public/newtemplate/js/custom.min.js"></script>
<script src="<?=base_url()?>public/nameplate/js/settings.js"></script>
<script src="<?=base_url()?>public/newtemplate/js/gleek.js"></script>
<script type="text/javascript">
    $(document).ready(function(e) {
        //$("#st_active").removeAttr('value');
        $("#stds_form").submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
            var curr_code= $("#curr_code").val();
            $("#btn_action").attr('disabled',true);
            $("#btn_action").text('<?=$this->lang->line('loading');?>');
            $(".loader").show('fast');
            $.ajax({
                url : '<?=base_url()?>Students_ci/AddEdit_student_vis' ,
                method: 'POST',
                data: formData,
                success: function(data)
                {
                     swal({
                        title: "<?=$this->lang->line('alert');?>",
                        text: data
                    });
                    $("#btn_action").attr('disabled',false);
                    $("#btn_action").text('<?=$this->lang->line('Save');?>');
                      $(".loader").hide('fast');
                } ,
                cache: false,
                contentType: false,
                processData: false
            });
            return false;
        });
    });
</script>
</body>

</html>