
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor"><?=$page_title?></h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)"><?php echo $this->lang->line("home_page");?></a></li>
                                <li class="breadcrumb-item active"><?=$page_title?></li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i><?=$this->lang->line('add_doros');?></button>
                        </div>
                    </div>
                </div>
                <!-- 
   <!-- Row -->
      <!-- Row -->
	  
	  
	  <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
	  
	  
	  
	 
                                <h4 class="card-title"><?php echo $this->lang->line("Add_edit_res");?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("Add_edit_res_mess");?></h6>
                               
    
      <form method="post" enctype="multipart/form-data" id="groupRES_form" novalidate >
	  <div class="form_error">
         
        </div>
         

 		<input type="hidden" id="curr_code" name="curr_code" value="" />
		  	<input type="hidden" id="_PRIFIX" name="_PRIFIX" value="<?=STUDENT_PRIFIX;?>" />
		  <div class="form-body">
		    <hr class="light-grey-hr"/>
              <div class="row">
			  
			  <div class="col-md-6">
		 <div class="form-group">
                                        <h5>  <?=$this->lang->line('res_teach_code');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
<select class="select2 form-control custom-select" id="res_teach_code" name="res_teach_code" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                            <option value=""><?=$this->lang->line('choose');?></option>
                            <?php 
							  draw_lists2("teachers" , "te_code" , "te_name" ,"te_active","1");
							?>
                        </select>                                    </div>
				</div> 
				</div> 
			  
       		    <div class="col-md-6">
		 <div class="form-group">
                                        <h5>     <?=$this->lang->line('res_std_code');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
 <select class="js-example-basic-multiple select2 form-control" id="res_std_code"     name="res_std_code[]" multiple="multiple">
					<option value=""><?=$this->lang->line('choose');?></option>
					<?php 
					  draw_lists("students" , "st_code" , "st_name");
					?>
				</select>                                 </div>
				</div> 
				</div> 
				
				
               <div class="col-md-6">
		 <div class="form-group">
                                        <h5>      <?=$this->lang->line('res_cors_code');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
<select class="select2 form-control custom-select" id="res_cors_code" name="res_cors_code" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                            <option value=""><?=$this->lang->line('choose');?></option>
                            <?php 
							  draw_lists2("courses" , "c_code" , "c_name","c_active","1");
							?>
                        </select>                                    </div>
				</div> 
				</div> 
			   
			    <div class="col-md-6">
		 <div class="form-group">
                                        <h5>     <?=$this->lang->line('res_room_code');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
<select class="select2 form-control custom-select" id="res_room_code" name="res_room_code" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                            <option value=""><?=$this->lang->line('choose');?></option>
                            <?php 
							 draw_lists("rooms" , "room_code" , "room_name","room_active","1");
							?>
                        </select>                                    </div>
				</div> 
				</div> 
				
				
  			 <div class="col-md-6">
		 <div class="form-group">
                                        <h5><?=$this->lang->line('res_time_start');?><span class="text-danger">*</span></h5>
                                        <div class="controls">
<input type='text'  class="form-control" id="min-date" name="res_time_start"  required data-validation-required-message="<?=$this->lang->line('required');?> " />              </div>
				</div> 
				</div> 
		  			 <div class="col-md-6">
		 <div class="form-group">
                                        <h5><?=$this->lang->line('res_time_end');?><span class="text-danger">*</span></h5>
                                        <div class="controls">
<input type='text'  class="form-control" id="min-date1" name="res_time_end"  required data-validation-required-message="<?=$this->lang->line('required');?> " />              </div>
				</div> 
				</div> 		
				
 			 <div class="col-md-6">
		 <div class="form-group">
                                        <h5><?=$this->lang->line('res_paid_price');?><span class="text-danger">*</span></h5>
                                        <div class="controls">
<input type='text'  class="form-control" id="res_paid_price" name="res_paid_price"  required data-validation-required-message="<?=$this->lang->line('required');?> " />              </div>
				</div> 
				</div> 	
 		  
				 <div class="col-md-6">
		 <div class="form-group">
                                        <h5><?=$this->lang->line('res_teacher_percent');?><span class="text-danger">*</span></h5>
                                        <div class="controls">
<input type='text'  class="form-control" id="res_teacher_percent" name="res_teacher_percent"  required data-validation-required-message="<?=$this->lang->line('required');?> " />              </div>
				</div> 
				</div> 	
				
  		 
		 
		  <div class="col-md-12">
			<div class="form-group">
			  <label class="control-label mb-10"><?=$this->lang->line('te_notes');?></label>
				  <textarea class="form-control" id="res_admin_note" name="res_admin_note"></textarea>
				 </div>
			</div> 
 	
		   
		    <div class="form-group row ">
                                 <div class="col-md-12">
                                  <div class="d-flex no-block align-items-center">
                                <div class="custom-control  custom-checkbox">
								
                     <input  type="checkbox" class="res_is_confirmed custom-control-input " id="res_is_confirmed" name="res_is_confirmed" checked  />
                                          <label class="custom-control-label" for="res_is_confirmed"><?=$this->lang->line('res_is_confirmed');?></label>
										
                                  </div>
                                 </div>   
                                 </div>   
                                 </div> 
                                 </div> 
		 <div class="form-actions mt-10">
			<button type="submit" class="btn btn-success  mr-10" id="btn_action">
			   <?=$this->lang->line('Save');?> </button>
		 </div>
		</form>
	</div>
</div>
</div>
	</div>
 	<!-- /Row -->
  <script type="text/javascript">
 	$(document).ready(function(e) {
		$('.js-example-basic-multiple').select2();
		$("#res_is_confirmed").attr("checked",false);
          $("#groupRES_form").submit(function(e){
			e.preventDefault();
 			 var formData = new FormData(this);	
			 var curr_code= $("#curr_code").val();
			 $.ajax({
			url : '<?=base_url()?>Reservation_ci/AddEdit_GRreserv' ,
				method: 'POST', 
				data: formData, 
				success: function(data)
 				{    
				$('input[type=text]').val('');
				$('input[type=hidden]').val('');
				$('input[type=checkbox]').attr('checked',false);
				$('select').val('');
				$('textarea').val('');
				$(".select2-selection__rendered").text('<?=$this->lang->line('choose')?>');
				swal(data)
                     .then((value) => {
                    /// location.reload();
				  return false;
                       });
 				} ,
				cache: false,
				contentType: false,
				processData: false
			});
			 return false; 
 		});
       });	 
  
  
  
  
	

	    
			   
</script>
