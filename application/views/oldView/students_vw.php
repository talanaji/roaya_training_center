
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
	  
	  
	  
	 
                                <h4 class="card-title"><?php echo $this->lang->line("Add_edit_st");?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("Add_edit_st_mess");?></h6>
                               
    
 <form method="post" enctype="multipart/form-data" id="student_form" novalidate >
               	<input type="hidden" id="_PRIFIX" name="_PRIFIX" value="<?=STUDENT_PRIFIX;?>" />
                <input type="hidden" id="curr_code" name="curr_code" value="" />
				
  <div class="form-body">
                  <hr class="light-grey-hr"/>
				         <div class="row">
                      <div class="col-md-6">
		 <div class="form-group">
                                        <h5><?=$this->lang->line('st_name');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                             <input type="text" class="form-control" id="st_name" name="st_name" required data-validation-required-message="<?=$this->lang->line('required');?> " />
                                    </div>
				</div> 
				</div> 
			  <div class="col-md-6">
		 <div class="form-group">
                                        <h5><?=$this->lang->line('st_ID');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                             <input type="text" class="form-control" id="st_ID" name="st_ID" required data-validation-required-message="<?=$this->lang->line('required');?> " />
                                    </div>
				</div> 
				</div> 
				
				
				  <div class="col-md-6">	  
		 <div class="form-group">
                                        <h5><?=$this->lang->line('st_phone');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                             <input type="text" class="form-control phone-inputmask"  id="st_phone1" name="st_phone1" required data-validation-required-message="<?=$this->lang->line('required');?> " />
                                    </div>
				</div> 
				</div> 
				
				  <div class="col-md-6">
			<div class="form-group">
			  <label class="control-label mb-10"><?=$this->lang->line('st_phone').'2';?></label>
				  <input type="text" class="form-control " id="st_phone2" name="st_phone2" />
				 </div>
			</div> 
					  
		<div class="col-md-6">
			<div class="form-group">
			 <h5><?=$this->lang->line('st_email');?></h5>
<div class="controls">
				  <input type="email" class="form-control" id="st_email" name="st_email" data-validation-email-message="<?=$this->lang->line('error_email');?>"	/>
				 </div>
				 </div>
			</div>		
					<div class="col-md-6">
				  <div class="form-group">
                                        <h5><?=$this->lang->line('st_birthdate');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control date-inputmask" id="st_birthdate" name="st_birthdate" placeholder="MM/DD/YYYY" > </div>
                                    </div>
                                    </div>
				
				
		
				
				
		 <div class="col-md-6">
		 <div class="form-group">
                                        <h5> <?=$this->lang->line('sc_name');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select class="form-control" id="st_school_code" name="st_school_code" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                                 <option value=""><?=$this->lang->line('choose');?></option>
                                                <?php 
							  draw_lists2("schools" , "sc_code" , "sc_name","sc_active","1");
							?>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
									
				 <div class="col-md-6">
		 <div class="form-group">
                                        <h5>  <?=$this->lang->line('st_paymentmethods_code');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select class="form-control" id="st_paymentmethods_code" name="st_paymentmethods_code" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                                 <option value=""><?=$this->lang->line('choose');?></option>
                                                <?php 
							  draw_lists2("payment_methods" , "m_code" , "m_name","m_active","1");
							?>
                                            </select>
                                        </div>
                                    </div>
                                    </div>					
       		  
               
     	 <div class="col-md-6">
		 <div class="form-group">
                                        <h5> <?=$this->lang->line('st_class');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select class="form-control" id="st_class" name="st_class" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                                 <option value=""><?=$this->lang->line('choose');?></option>
                                               <?php 
	                    for($i=1;$i<=12;$i++)
						{
 					 ?>
				       <option value="<?=$i?>"><?=$i?></option>;
					 <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    </div>	
			  <div class="col-md-6">
			<div class="form-group">
			  <label class="control-label mb-10"><?=$this->lang->line('st_town');?></label>
				  <input type="text" class="form-control" id="st_town" name="st_town" />
				 </div>
			</div> 
			  
 <div class="col-md-6">
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


<div class="col-md-6">
		 <div class="form-group">
                                        <h5> <?=$this->lang->line('st_sub_code');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select class="form-control"id="st_sub_code" name="st_sub_code"required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                                  
				 <option value=""> <?=$this->lang->line('choose')?></option>
				<?php 
					 draw_lists2("subscribe_type" , "sub_code" , "sub_name","sub_active","1");
				 ?>
				</select>
                                            
                                        </div>
                                    </div>
                                    </div>	
          <div class="col-md-6">
		 <div class="form-group">
                                        <h5> <?=$this->lang->line('st_status_code');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select class="form-control" id="st_status_code" name="st_status_code" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                                
				 <option value=""> <?=$this->lang->line('choose')?></option>
				<?php 
						 draw_lists("std_status" , "std_code" , "std_name","std_active","1");
					 ?>
				</select>
                                            
                                        </div>
                                    </div>
                                    </div>	    
			
         <div class="col-md-6">
		 <div class="form-group">
                                        <h5> <?=$this->lang->line('st_payment_date');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select class="form-control" id="st_payment_date" name="st_payment_date" required data-validation-required-message="<?=$this->lang->line('required');?> ">

				 <option value=""> <?=$this->lang->line('choose')?></option>
				<?php 
	                    for($i=1;$i<=30;$i++)
						{
 					 ?>
				       <option value="<?=$i?>"><?=$i?></option>;
					 <?php } ?>
				</select>
                                           
                                        </div>
                                    </div>
                                    </div>	 
		   </div>
		
	 <div class="form-group row ">
                                 <div class="col-md-12">
                                  <div class="d-flex no-block align-items-center">
                                <div class="custom-control  custom-checkbox">
                     <input  type="checkbox" class="st_active custom-control-input " id="st_active" name="st_active" checked  />
                                          <label class="custom-control-label" for="st_active"> <?=$this->lang->line('active');?></label>
										
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
	
	
            
	
	
	
    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> <?=$this->lang->line('table_st');?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("Add_edit_st_mess");?></h6>
                               
                      <table id="example" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
					  

                                        <thead>
						<tr>
							<th><?php echo $this->lang->line("st_name");?></th>
							<th><?php echo $this->lang->line("st_phone");?></th>
							<th><?php echo $this->lang->line("st_status_code");?></th>
                            <th><?php echo $this->lang->line("operations");?></th>
						</tr>
						</thead>
						<tfoot>
						<tr>
							<th><?php echo $this->lang->line("st_name");?></th>
							<th><?php echo $this->lang->line("st_phone");?></th>
							<th><?php echo $this->lang->line("st_status_code");?></th>
                            <th><?php echo $this->lang->line("operations");?></th>
						</tr>
						</tfoot>
						<tbody id="tdata">
						 
 					    </tbody>
					</table>  
                           </div>
                        </div>	
                    </div>	
                </div>	
               </div>
    
         
 	<!-- /Row -->
  <script type="text/javascript">

	$(document).ready(function(e) {
		//$("#st_active").removeAttr('value');
		  draw("<?=base_url()?>Students_ci/get_items/students/st_code/st_name/st_active" , "#tdata");
          $("#student_form").submit(function(e){
			e.preventDefault();
 			 var formData = new FormData(this);	
			 var curr_code= $("#curr_code").val();
			 $("#btn_action").attr('disabled',true);
			 $("#btn_action").text('<?=$this->lang->line('loading');?>');
			 $.ajax({
				url : '<?=base_url()?>Students_ci/AddEdit_student' ,
				method: 'POST', 
				data: formData, 
				//async:false,
				success: function(data)
				{
					 $("#btn_action").attr('disabled',false);
					 $("#btn_action").text('<?=$this->lang->line('Save');?>');
					 var sp = data.split('╩');
					 swal(data)
                     .then((value) => {
                    location.reload();
				  return false;
                       });
 				} ,
				cache: false,
				contentType: false,
				processData: false
			});
			 return false; 
 		});
		  $(document).on('click','.Edit',function(){
				var pk = $(this).attr('title');
 				var st_name = $(this).attr('st_name');
				var st_school_code = $(this).attr('st_school_code');
				var st_class = $(this).attr('st_class');
				var st_phone1 = $(this).attr('st_phone1');
 				var st_phone2 = $(this).attr('st_phone2');
				var st_ID = $(this).attr('st_ID');
				var st_email = $(this).attr('st_email');
				var st_town = $(this).attr('st_town');
				var st_sex = $(this).attr('st_sex');
				var st_birthdate = $(this).attr('st_birthdate');
				var st_sub_code = $(this).attr('st_sub_code');
				var st_price = $(this).attr('st_price');
				 //$("#st_active").parent().parent().addClass('validate');
				 //	$("#st_active").val(st_active);
				var st_active = $(this).attr('st_active');
				var st_paymentmethods_code = $(this).attr('st_paymentmethods_code');
				var st_status_code = $(this).attr('st_status_code');
				var st_payment_date = $(this).attr('st_payment_date');
 		
				$("#curr_code").val(pk);
		        // fetch_per_params('<?=base_url()?>Common/fetch_this_photos' , '#this_photos'  , pk ,_PREFIX(),1);//fetch all users
				$("#this_photos").css("display","block");
				$("#st_name").val(st_name);
				$("#st_school_code").val(st_school_code);
				$("#st_class").val(st_class);
				$("#st_phone1").val(st_phone1);
				$("#st_phone2").val(st_phone2);
				$("#st_ID").val(st_ID);
 				$("#st_email").val(st_email);
				$("#st_town").val(st_town);
				$("#st_sex").val(st_sex);
				$("#st_birthdate").val(st_birthdate);
				$("#st_sub_code").val(st_sub_code);
				$("#st_price").val(st_price);
				$("#st_active").val("1");				
				$("#st_paymentmethods_code").val(st_paymentmethods_code);
				$("#st_status_code").val(st_status_code);
				$("#st_payment_date").val(st_payment_date);
				if(st_active == 1)
				
                 $("#st_active").attr('checked', true);
				  else
				   $("#st_active").attr('checked', false);

  				  $("#btn_add").val('<?php echo $this->lang->line('update_btn');?>');
				$("#btn_add").val('<?php echo $this->lang->line('update_btn');?>');
 	      });
		  $(document).on('click','.Del',function(){
					var pk = $(this).attr('title');
										//var sc_name1 = document.getElementById ( pk ).innerText;
					swal({
					  title: '<?php echo $this->lang->line("Confirm_del");?>?',
					 // text: sc_name1,
					 // type: 'warning',
					  showCancelButton: true,
					  confirmButtonColor: '#3085d6',
					  cancelButtonColor: '#d33',
					  confirmButtonText: '<?php echo $this->lang->line("yes_delete");?>',
					   cancelButtonText: '<?php echo $this->lang->line("not_delete");?>'
					}).then((result) => {
					  if (result.value) {
							draw("<?=base_url()?>Students_ci/del_items/students/st_code/"+pk , "");
							draw("<?=base_url()?>Students_ci/get_items/students/st_code/st_name" , "#tdata");
						swal(
						  '<?php echo $this->lang->line("secc_delete");?>',
						  sc_name1
						)
					  }
					})
					
				});
       });
 	
	    
			   
</script>
