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
           
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?=$page_title?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("Add_edit_st_mess");?></h6>
                  <form method="post" enctype="multipart/form-data" id="groupREG_form">
 		<input type="hidden" id="curr_code" name="curr_code" value="" />
		  <div class="form-body">
		    <hr class="light-grey-hr"/>
              <div class="row">
       	 	     <div class="col-md-6">
                 <div class="form-group">
                 <label class="control-label mb-10">
                      <?=$this->lang->line('reg_teach_code');?>
                      </label>
                          <select class="form-control" id="reg_teach_code" name="reg_teach_code">
                            <option value=""><?=$this->lang->line('choose');?></option>
                            <?php 
							  draw_lists("teachers" , "te_code" , "te_name");
							?>
                        </select>
				    </div>
				 </div>
                 <div class="col-md-6">
                 <div class="form-group">
                 <label class="control-label mb-10">
                         <?=$this->lang->line('res_std_codes');?>
                 </label>
				 <select class="js-example-basic-multiple form-control select2" id="reg_std_code"     name="reg_std_code[]" multiple="multiple">
					<option  value="" ><?=$this->lang->line('choose');?></option>
					<?php 
					  draw_lists("students" , "st_code" , "st_name");
					?>
				</select>
           			</div>
         		 </div>
  		    	 <div class="col-md-6">
                 <div class="form-group">
                 <label class="control-label mb-10">
                         <?=$this->lang->line('tr_title');?>
                      </label>
                          <select class="form-control" id="reg_tr_code" name="reg_tr_code">
                            <option value=""><?=$this->lang->line('choose');?></option>
                            <?php 
							  draw_lists("Training_courses" , "tr_code" , "tr_title");
							?>
                        </select>
           			</div>
         		 </div>
			     <div class="col-md-6">
				<div class="form-group">
				  <label class="control-label mb-10"><?=$this->lang->line('res_room_code');?></label>
					  <select type="text" class="form-control" id="reg_room_code" name="reg_room_code">
						 <option value=""><?=$this->lang->line('choose');?></option>
							 <?php 
								  draw_lists("rooms" , "room_code" , "room_name");
							 ?>
					  </select>
					 </div>
				</div>
			 <!--<div class="col-md-6">
				<div class="form-group">
				  <label class="control-label mb-10"><?=$this->lang->line('res_time_start');?></label>
				  <div class='input-group date'>
						<input type='text'  class="form-control" id="datetimepicker1" name="res_time_start" />
						<span class="input-group-addon">
							<span class="fa fa-clock-o"></span>
						</span>
					</div>
				  </div>
			 </div>-->      
			     <div class="col-md-6">
				<div class="form-group">
				  <label class="control-label mb-10"><?=$this->lang->line('reg_time_end');?></label>
				  <div class='input-group date'>
						<input type='text' class="form-control" id="datetimepicker1" name="reg_end_date" />
						<span class="input-group-addon">
							<span class="fa fa-clock-o"></span>
						</span>
					</div>
				  </div>
				</div> 
			     <div class="col-md-6">
				<div class="form-group">
				  <label class="control-label mb-10"><?=$this->lang->line('reg_paid_price');?></label>
					  <input type="number" class="form-control" id="reg_paid_price" name="reg_paid_price" />
					 </div>
				</div>  
			 <!--<div class="col-md-6">
				<div class="form-group">
				  <label class="control-label mb-10"><?=$this->lang->line('res_teacher_percent');?></label>
					  <input type="number" class="form-control" id="res_teacher_percent" name="res_teacher_percent" />
					 </div>
				</div>-->    
			     <div class="col-md-12">
				<div class="form-group">
				  <label class="control-label mb-10"><?=$this->lang->line('reg_notes');?></label>
					  <textarea class="form-control" id="reg_notes" name="reg_notes"></textarea>
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


  <script type="text/javascript">
	$(document).ready(function(e) {
		$('.js-example-basic-multiple').select2();
		$("#res_is_confirmed").attr("checked",false);
		   
          $("#groupREG_form").submit(function(e){
			e.preventDefault();
 			 var curr_code= $("#curr_code").val();
			 $("#btn_action").attr('disabled',true);
			 $("#btn_action").text('<?=$this->lang->line('loading');?>');
			 $.ajax({
				url : '<?=base_url()?>Training_ci/AddEdit_GRreserv' ,
				method: 'POST', 
				data: $(this).serialize(), 
				//async:false,
				success: function(data)
				{
					 $("#btn_action").attr('disabled',false);
					 $("#btn_action").text('<?=$this->lang->line('Save');?>');
					 var sp = data.split('╩');
 					 alert(data);
   				}  
				 
			});
			 return false; 
 		});
 
				 
       });

	    
			   
</script>
