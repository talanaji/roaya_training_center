<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col p-md-0">
                <h4><?=$page_title?></h4>
            </div>
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=base_url()?>Std_dashboard"><?=$this->lang->line('Home');?></a>
                    </li>
                    <!-- <li class="breadcrumb-item"><a href="javascript:void()">Forms</a>
                    </li> -->
                    <li class="breadcrumb-item active"><?=$page_title?>
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" name="std_visitor" class="mt-5 mb-5" enctype="multipart/form-data" id="stds_form" novalidate >
                            <input type="hidden" id="_PRIFIX" name="_PRIFIX" value="<?=STUDENT_PRIFIX;?>" />
                            <input type="hidden" id="curr_code" name="curr_code" value="<?=$this->session->userdata('st_code')?>" />
                            <input type="hidden" id="std_visitor" name="std_visitor" value="std_visitor" />

                            <div class="form-body">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5><?=$this->lang->line('st_name');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <p class="form-control"><?=$this->session->userdata('st_name')?></p>
                                            <input type="hidden" value="<?=$this->session->userdata('st_name')?>" class="form-control" id="st_name" name="st_name" required data-validation-required-message="<?=$this->lang->line('required');?> " />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5><?=$this->lang->line('st_ID');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <p class="form-control"><?=$this->session->userdata('st_ID')?></p>
                                            <input type="hidden" value="<?=$this->session->userdata('st_ID')?>" class="form-control" id="st_ID" name="st_ID" required data-validation-required-message="<?=$this->lang->line('required');?> " />
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
                                            <p type="hidden" class="form-control phone-inputmask"><?=$this->session->userdata('st_phone1')?></p>
                                            <input type="hidden" class="form-control phone-inputmask" value="<?=$this->session->userdata('st_phone1')?>"  id="st_phone1" name="st_phone1" required data-validation-required-message="<?=$this->lang->line('required');?> " />
                                         </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5><?=$this->lang->line('st_phone').'2';?></h5>
                                            <input type="text" class="form-control " value="<?=$this->session->userdata('st_phone2')?>" id="st_phone2" name="st_phone2" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5><?=$this->lang->line('st_email');?></h5>
                                        <div class="controls">
                                            <input type="email" value="<?=$this->session->userdata('st_email')?>" class="form-control" id="st_email" name="st_email" data-validation-email-message="<?=$this->lang->line('error_email');?>"	/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5><?=$this->lang->line('st_birthdate');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="date" value="<?=$this->session->userdata('st_birthdate')?>" class="form-control date-inputmask" id="st_birthdate" name="st_birthdate" placeholder="MM/DD/YYYY" > </div>
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
                                        <h5> <?=$this->lang->line('st_class');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <p class="form-control"><?=$this->session->userdata('st_class')?></p>
                                            <input type="hidden" id="st_class" name="st_class" value="<?=$this->session->userdata('st_class')?>">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label mb-10"><?=$this->lang->line('st_town');?></label>
                                        <input type="text" class="form-control" value="<?=$this->session->userdata('st_town')?>" id="st_town" name="st_town" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5> <?=$this->lang->line('st_sex');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select class="form-control" id="st_sex" name="st_sex" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                                <option value=""><?=$this->lang->line('choose')?></option>
                                                <option value="male" <?=$this->session->userdata('st_sex')=='male'? "selected=selected":""?>><?=$this->lang->line('male')?></option>
                                                <option value="female" <?=$this->session->userdata('st_sex')=='male'?"" :"selected=selected"?>><?=$this->lang->line('female')?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5> <?=$this->lang->line('User_photo');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="file[]" id="file" maxlength="5" multiple />
                                            <input type="hidden" name="st_active" id="st_active" value="1" />
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
                <div class="col-md-12">
                    <div class="col-sm-12" id="this_photos" style="display:none;">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- #/ container -->
    <script type="text/javascript">
        $(document).ready(function(e) {
            $("#st_school_code").val('<?=$this->session->userdata('st_school_code')?>');

                var pk = $("#curr_code").val();
              fetch_per_params('<?=base_url()?>Common/fetch_this_photos' , '#this_photos'  , pk ,_PREFIX(),1);//fetch all users
             $("#this_photos").css("display","block");


            $("#stds_form").submit(function(e){
                e.preventDefault();
                var formData = new FormData(this);
                var curr_code= $("#curr_code").val();
                $("#btn_action").attr('disabled',true);
                $("#btn_action").text('<?=$this->lang->line('loading');?>');
                $(".loader").show('fast');
                $.ajax({
                    url : '<?=base_url()?>Students_ci/AddEdit_student' ,
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
                        fetch_per_params('<?=base_url()?>Std_dashboard/std_update' , '#'  , $("#st_email").val() ,_PREFIX(),1);//fetch all users
                    } ,
                    cache: false,
                    contentType: false,
                    processData: false
                });
                return false;
            });
        });

    </script>
</div>

<!--**********************************
    Content body end
***********************************-->