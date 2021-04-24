		
        <!-- Start Page title and tab -->



        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="header-action">
                        <h1 class="page-title"><?=$page_title?></h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><?php echo $this->lang->line("home_page");?></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?=$page_title?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>







     <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="row clearfix row-deck">


           
        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?=$page_title?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("website_settings_txt");?></h6>
                         <form action="" method="post" enctype="multipart/form-data" name="myform" id="myform">
                              <input type="hidden" id="op_code" name="op_code" value="<?=$this->options->op_code;?>"/>
            <div class="form-body">
              <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i><?=$page_title?></h6>
                 <hr class="light-grey-hr"/>
                     <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label mb-10"><?=$this->lang->line('op_title');?></label>
                                    <input type="text" id="op_title"  name="op_title" value="<?=$this->options->op_title;?>" class="form-control" placeholder="">
                                    <span class="help-block">   </span> 
                                </div>
                            </div> <!--/span-->
                            <div class="col-md-6">
                        <div class="form-group has-error">
                            <label class="control-label mb-10"><?=$this->lang->line('op_desc');?></label>
                            <input type="text" id="op_desc" value="<?=$this->options->op_desc;?>" name="op_desc" class="form-control" placeholder="">
                            <span class="help-block"> </span> 
                        </div>
                    </div> <!--/span-->
                    </div>
                 
				 <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label mb-10"><?=$this->lang->line('op_keyword');?></label>
                                <input type="text" id="op_keyword" name="op_keyword" value="<?=$this->options->op_keyword;?>" class="form-control" placeholder="">
                                <span class="help-block">   </span> 
                            </div>
                        </div> <!--/span-->
                       <div class="col-md-6">
                         <div class="form-group has-error">
                            <label class="control-label mb-10"><?=$this->lang->line('op_admin_email');?></label>
                            <input type="text" id="op_admin_email" name="op_admin_email" value="<?=$this->options->op_admin_email;?>" class="form-control" autocomplete="off" placeholder="">
                            <span class="help-block"> </span> 
                        </div>
                    </div> <!--/span-->
                 </div>						
               <!--------------- /Row ----------------->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label mb-10"><?=$this->lang->line('op_password_msg');?></label>
                            <textarea class="form-control" rows="7" id="op_password_msg" name="op_password_msg"><?=strip_tags($this->options->op_password_msg);?></textarea>
                         </div>
                    </div> <!------------- /span -------------->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label mb-10"><?=$this->lang->line('op_register_msg');?></label>
                            <textarea class="form-control" rows="7" id="op_register_msg" name="op_register_msg"><?=strip_tags($this->options->op_register_msg);?></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label mb-10"><?=$this->lang->line('op_regtraining_msg');?></label>
                            <textarea class="form-control" rows="7" id="op_regtraining_msg" name="op_regtraining_msg"><?=strip_tags($this->options->op_regtraining_msg);?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label mb-10"><?=$this->lang->line('op_facebook_link');?></label>
                            <input type="text" class="form-control" value="<?=$this->options->op_facebook_link;?>" id="op_facebook_link" name="op_facebook_link" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label mb-10"><?=$this->lang->line('op_twitter_link');?></label>
                            <input type="text" class="form-control" value="<?=$this->options->op_twitter_link;?>" id="op_twitter_link" name="op_twitter_link" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label mb-10"><?=$this->lang->line('op_youtube_link');?></label>
                            <input type="text" class="form-control" value="<?=$this->options->op_youtube_link;?>" id="op_youtube_link" name="op_youtube_link" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label mb-10 text-left"><?=$this->lang->line('op_logo');?></label>
                            <input type="file" id="op_logo" name="op_logo">
                            <div class="col-md-4"> <?php
                                if(!empty($this->options->op_logo)){
                                    ?>
                                    <img src="<?= !empty($this->options->op_logo) ? base_url().LOGO_PATH.$this->options->op_logo : ""?>" width="100" height="100"  />
                                <?php }?>
                            </div>
                        </div>
                    </div>
               </div>
 			 <!-- /Row -->
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <h4><?=$this->lang->line('SMS_settings');?></h4></div>
                      <hr />
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label class="control-label mb-10"><?=$this->lang->line('SMS_username');?></label>
                          <input type="text" class="form-control" value="<?=$this->options->SMS_username;?>" id="SMS_username" name="SMS_username" />
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label class="control-label mb-10"><?=$this->lang->line('SMS_password');?></label>
                          <input type="text" class="form-control" value="<?=$this->options->SMS_password;?>" id="SMS_password" name="SMS_password" />
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label class="control-label mb-10"><?=$this->lang->line('SMS_accid');?></label>
                          <input type="text" class="form-control" value="<?=$this->options->SMS_accid;?>" id="SMS_accid" name="SMS_accid" />
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label class="control-label mb-10"><?=$this->lang->line('SMS_sysPW');?></label>
                          <input type="text" class="form-control" value="<?=$this->options->SMS_sysPW;?>" id="SMS_sysPW" name="SMS_sysPW" />
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label class="control-label mb-10"><?=$this->lang->line('notify_is_recieves');?></label>
                          <input type="checkbox" class="form-control" <?=$this->options->notify_is_recieves == 1 ? "checked=checked":"";?>  id="notify_is_recieves" name="notify_is_recieves" />
                      </div>
                  </div>
              </div>
 			 <!-- /Row -->
 		   </div>
                 <div class="form-actions mt-10">
                    <button type="submit" name="btn_submit" class="btn btn-success  mr-10"><?=$this->lang->line('Save');?> </button>
                 </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

                
 	<!-- /Row -->