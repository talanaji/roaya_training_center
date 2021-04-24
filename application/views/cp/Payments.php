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
       <form method="post"  id="student_form" novalidate >
	   	<input type="hidden" id="_PRIFIX" name="_PRIFIX" value="<?=STUDENT_PRIFIX;?>" />
                <input type="hidden" id="curr_code" name="curr_code" value="" />
             <div class="form-body">
                  <hr class="light-grey-hr"/>
				         <div class="row">
                      <div class="col-md-6">
		 <div class="form-group">
                                        <h5>     <?=$this->lang->line('res_std_code');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
										   
<select class="select2 form-control custom-select" id="res_std_code" name="res_std_code" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                            <option value=""><?=$this->lang->line('choose');?></option>
                            <?php 
							 draw_lists2("students" , "st_code" , "st_name" ,"st_active","1");
							  
							?>
                        </select>                                    </div>
				</div> 
				</div>     <div class="col-md-6">
		 <div class="form-group">
                                        <h5>  <?=$this->lang->line('st_paymentmethods_code');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select class="form-control" id="m_code" name="m_code" required data-validation-required-message="<?=$this->lang->line('required');?> ">
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
                                        <h5><?=$this->lang->line('p_date');?><span class="text-danger">*</span></h5>
                                        <div class="controls">
<input type='text'  class="form-control" value="<?php echo date('Y-m-d');?>" name="p_date" readonly="readonly"/>              </div>
				</div> 
				</div> 	
										 <div class="col-md-6">
		 <div class="form-group">
                                        <h5><?=$this->lang->line('amount');?><span class="text-danger">*</span></h5>
                                        <div class="controls">
<input type='number'  class="form-control" id="amount" name="amount"  required data-validation-required-message="<?=$this->lang->line('required');?> " />              </div>
				</div> 
				</div> 	
									 <div class="col-md-12">
			<div class="form-group">
			  <label class="control-label mb-10"><?=$this->lang->line('te_notes');?></label>
				  <textarea class="form-control" id="info" name="info"></textarea>
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
				    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> <?=$this->lang->line('table_st');?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("Add_edit_st_mess");?></h6>
                               
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
						<tr>
							<th><?php echo $this->lang->line("st_name");?></th>
							<th><?php echo $this->lang->line("p_date");?></th>
                            <th><?php echo $this->lang->line("st_paymentmethods_code");?></th>
                            <th><?php echo $this->lang->line("amount");?></th>
                            <th><?php echo $this->lang->line("operations");?></th>
						</tr>
						</thead>
						<tfoot>
						<tr>
							<th><?php echo $this->lang->line("st_name");?></th>
							<th><?php echo $this->lang->line("p_date");?></th>
                            <th><?php echo $this->lang->line("st_paymentmethods_code");?></th>
                            <th><?php echo $this->lang->line("amount");?></th>
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
	 draw("<?=base_url()?>Payments_ci/get_items/payments/p_code" , "#tdata");
     	    $("#student_form").submit(function(e){
			e.preventDefault();
 			 var formData = new FormData(this);	
			 var curr_code= $("#curr_code").val();
			 $("#btn_action").attr('disabled',true);
			 $("#btn_action").text('<?=$this->lang->line('loading');?>');
			 $.ajax({
				url : '<?=base_url()?>Payments_ci/AddEdit_Payments' ,
				method: 'POST', 
				data: formData, 
				//async:false,
				success: function(data)
				{
					 $("#btn_action").attr('disabled',false);
					 $("#btn_action").text('<?=$this->lang->line('Save');?>');
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

		 
			  $(document).on('click','.Del',function(){
					var pk = $(this).attr('title');
										//var sc_name1 = document.getElementById ( pk ).innerText;
					swal({
					  title: '<?php echo $this->lang->line("Confirm_del");?>?',
					  showCancelButton: true,
					  confirmButtonColor: '#3085d6',
					  cancelButtonColor: '#d33',
					  confirmButtonText: '<?php echo $this->lang->line("yes_delete");?>',
					   cancelButtonText: '<?php echo $this->lang->line("not_delete");?>'
					}).then((result) => {
					  if (result.value) {
							draw("<?=base_url()?>Students_ci/del_items/payments/p_code/"+pk , "");
							 draw("<?=base_url()?>Payments_ci/get_items/payments/p_code" , "#tdata");
						swal(
						  '<?php echo $this->lang->line("secc_delete");?>',
						  sc_name1
						)
					  }
					})
					
				});
	 });
     </script>