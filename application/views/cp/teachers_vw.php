
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
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> <?=$this->lang->line('add_doros');?></button>
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
                <h4 class="card-title"><?php echo $this->lang->line("add_edit_te");?></h4>
                <h6 class="card-subtitle"><?php echo $this->lang->line("add_edit_te_mss");?></h6>
                  <form method="post" enctype="multipart/form-data" id="student_form" novalidate>
       	<input type="hidden" id="_PRIFIX" name="_PRIFIX" value="<?=TEACHER_PRIFIX;?>" />
                <input type="hidden" id="curr_code" name="curr_code" value="" />
      <div class="form-body">
      <hr class="light-grey-hr"/>
         <div class="row">
       		    <div class="col-md-6">
                 <div class="form-group">
                 <label class="control-label mb-10">
                         <?=$this->lang->line('te_courses_codes');?>
                      </label>
                          <select class="js-example-basic-multiple select2 form-control" id="te_courses_codes" name="te_courses_codes[]" multiple="multiple" required data-validation-required-message="<?=$this->lang->line('required');?>">
                            <option value="" disabled="disabled"><?=$this->lang->line('choose');?></option>
                            <?php 
							  draw_lists2("courses" , "c_code" , "c_name","c_active","1");
							?>
					 </select>
					 	<span class="help-block"> </span>
                 </div>
             </div>
          
			 <div class="col-md-6">
				<div class="form-group">
				  <label class="control-label mb-10"><?=$this->lang->line('te_name');?></label>
					  <input type="text" class="form-control" id="te_name" name="te_name" required data-validation-required-message="<?=$this->lang->line('required');?>"/>
	                      <span class="help-block"> </span>					
					</div>
				</div> 
		 
		 
		 <div class="col-md-6">
			<div class="form-group">
			  <label class="control-label mb-10"><?=$this->lang->line('te_ID');?></label>
				  <input type="text" class="form-control" id="te_ID" name="te_ID" required data-validation-required-message="<?=$this->lang->line('required');?>"/>
				 	<span class="help-block"> </span>
				 </div>
			</div>      
		  <div class="col-md-6">
			<div class="form-group">
			  <label class="control-label mb-10"><?=$this->lang->line('te_birthday');?></label>
				  <input type="text" class="form-control" id="te_birthday" name="te_birthday" />
				 </div>
			</div> 
			                
			
                           
        <div class="col-md-6">
			<div class="form-group">
			  <label class="control-label mb-10"><?=$this->lang->line('te_email');?></label>
				  <input type="email" class="form-control" id="te_email" name="te_email" />
				 </div>
			</div> 
			                
			<div class="col-md-6">
			<div class="form-group">
			  <label class="control-label mb-10"><?=$this->lang->line('te_phone1');?></label>
				  <input type="text" class="form-control" id="te_phone1" name="te_phone1" required data-validation-required-message="<?=$this->lang->line('required');?>"/>
				 	<span class="help-block"> </span>
				 </div>
			</div>
			
			
			  <div class="col-md-6">
			<div class="form-group">
			  <label class="control-label mb-10"><?=$this->lang->line('te_town');?></label>
				  <input type="text" class="form-control" id="te_town" name="te_town" />
				 </div>
			</div> 
			                
			<div class="col-md-6">
			<div class="form-group">
			  <label class="control-label mb-10"><?=$this->lang->line('te_gender');?></label>
				  <select class="form-control" id="te_gender" name="te_gender" required data-validation-required-message="<?=$this->lang->line('required');?>">
				  <option value=""><?=$this->lang->line('choose')?></option>
				  <option value="male"><?=$this->lang->line('male')?></option>
				  <option value="female"><?=$this->lang->line('female')?></option>
				</select>
					<span class="help-block"> </span>
				 </div>
			</div>
      
	   <div class="col-md-12">
		<div class="form-group">
		  <label class="control-label mb-10"><?=$this->lang->line('te_notes');?></label>
			  <textarea  class="form-control" id="te_notes" name="te_notes"></textarea> 
			 </div>
		   </div>
		   </div>
		 
	   </div>

	      <div class="form-group row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label><?=$this->lang->line("photos");?>: </label>
                      <input type="file" name="file[]" id="file" multiple required="required"/>
                  </div>
              </div>

              <div class="col-md-6">

               <div class="d-flex no-block align-items-center">
                  <div class="custom-control custom-checkbox">
				     <input  type="checkbox" class="te_active custom-control-input " id="te_active" name="te_active" checked  />
                         <label class="custom-control-label" for="te_active"> <?=$this->lang->line('active');?></label>
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
                <div class="col-md-12">
                    <div class="col-sm-12" id="this_photos" style="display:none;">
                    </div>
                </div>
	 </div>
  </div>
	   
    <div class="row">
           <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $this->lang->line("add_edit_te");?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("add_edit_te_mss");?></h6>
					     <div class="table-responsive m-t-40">
								   <table id="example" class="table display table-bordered table-striped">
									<thead>
									  <tr>
				
							<th><?php echo $this->lang->line("te_name");?></th>
							<th><?php echo $this->lang->line("st_phone");?></th>
							<th><?php echo $this->lang->line("active");?></th>
                            <th><?php echo $this->lang->line("operations");?></th>
						</tr>
						</thead>
						<tfoot>
						<tr>
							<th><?php echo $this->lang->line("te_name");?></th>
							<th><?php echo $this->lang->line("st_phone");?></th>
							<th><?php echo $this->lang->line("active");?></th>
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
          
   <script type="text/javascript">
	$(document).ready(function(e) {
		  draw("<?=base_url()?>Teachers_ci/get_items/teachers/te_code/te_name/te_active" , "#tdata");
		 $('.js-example-basic-multiple').select2();
          $("#student_form").submit(function(e){
			e.preventDefault();
 			 var formData = new FormData(this);	
			 var curr_code= $("#curr_code").val();
			 $("#btn_action").attr('disabled',true);
			 $("#btn_action").text('<?=$this->lang->line('loading');?>');
			 $.ajax({
				url : '<?=base_url()?>Teachers_ci/AddEdit_teachers' ,
				method: 'POST', 
				data: formData, 
				//async:false,
				success: function(data)
				{
					 $("#btn_action").attr('disabled',false);
					 $("#btn_action").text('<?=$this->lang->line('Save');?>');
                    swal(data).then((value) => {
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
 				var te_name = $(this).attr('te_name');
 				var te_phone1 = $(this).attr('te_phone1');
 				var te_ID = $(this).attr('te_ID');
				var te_email = $(this).attr('te_email');
				var te_town = $(this).attr('te_town');
				var te_gender = $(this).attr('te_gender');
				var te_birthday = $(this).attr('te_birthday');
				var te_notes = $(this).attr('te_notes');
 				var te_active = $(this).attr('te_active');
				var te_courses_codes = $(this).attr('te_courses_codes');
 		       var n = $( "#this_photos" ).length;
			  if(n > 0)
				  $("#example").DataTable().destroy();
				$("#curr_code").val(pk);
			  
		 fetch_per_params('<?=base_url()?>Common/fetch_this_photos' , '#this_photos'  , pk ,_PREFIX(),1);//fetch all users
 			    $("#te_courses_codes").val( JSON.parse(te_courses_codes)) ;
			    $("#te_courses_codes").trigger('change');
			    //$("#te_courses_codes").select2();
				$("#this_photos").css("display","block");
				$("#te_name").val(te_name);
				$("#te_phone1").val(te_phone1);
				$("#te_ID").val(te_ID);
				$("#te_email").val(te_email);
				$("#te_town").val(te_town);
				$("#te_gender").val(te_gender);
 				$("#te_birthday").val(te_birthday);
				$("#te_notes").val(te_notes);
				//$("#te_courses_codes").val(te_courses_codes);
 
				if(te_active == 1)
				  $("#te_active").attr('checked', true);
				  else
				  $("#te_active").attr('checked', false);
					
 				$("#file").attr("required" , false);
				$("#btn_add").val('<?php echo $this->lang->line('update_btn');?>');
 	      });
		  $(document).on('click','.Del',function(){
					var pk = $(this).attr('title');
						 swal({
                              title: '<?php echo $this->lang->line("Confirm_del");?>?',
                              type: 'warning',
                              showCancelButton: true,
                              confirmButtonColor: '#3085d6',
                              cancelButtonColor: '#d33',
                              confirmButtonText: '<?php echo $this->lang->line("yes_delete");?>',
                               cancelButtonText: '<?php echo $this->lang->line("not_delete");?>'
                            }).then((result) => {
                              if (result.value) {
                                draw("<?=base_url()?>Students_ci/del_items/teachers/te_code/"+pk , "");
                                                    draw("<?=base_url()?>Teachers_ci/get_items/teachers/te_code/te_name/te_active" , "#tdata");
                                // location.reload();
                              }
                            })
 				});
       });
 	 function showSelectsd()
	  {
		var selO = document.getElementsByName('mySel')[0];
		var selValues = [];
		for(i=0; i < selO.length; i++)
		{
			if(selO.options[i].selected)
			{
				selValues.push(selO.options[i].value);
			}
		}
	 }   
			   
</script>