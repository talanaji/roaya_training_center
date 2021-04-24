
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
          <!-- <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> <?=$this->lang->line('add_doros');?></button>-->
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
                                <h4 class="card-title"><?php echo $this->lang->line("add_edit_crs");?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("add_edit_crs_msg");?></h6>
                       
      <form method="post" enctype="multipart/form-data" id="student_form" novalidate>
       	<input type="hidden" id="_PRIFIX" name="_PRIFIX" value="<?=COURSES_PRIFIX;?>" />
                <input type="hidden" id="curr_code" name="curr_code" value="" />
      <div class="form-body">
      <hr class="light-grey-hr"/>
         <div class="row">
       		    <div class="col-md-6">
                 <div class="form-group">
                 <label class="control-label mb-10">
                         <?=$this->lang->line('crs_name');?>
                      </label>
                       <input type="text" class="form-control" id="crs_name" name="crs_name" required data-validation-required-message="<?=$this->lang->line('required');?>"/>
	                      <span class="help-block"> </span>		
                        <!-- <select class="js-example-basic-multiple select2 form-control" id="te_courses_codes" name="te_courses_codes[]" multiple="multiple" required data-validation-required-message="<?=$this->lang->line('required');?>">
                            <option value="" disabled="disabled"><?=$this->lang->line('choose');?></option>
                            <?php 
							  draw_lists2("courses" , "c_code" , "c_name","c_active","1");
							?>
					 </select>
					 	<span class="help-block"> </span>-->
                 </div>
             </div>
          
			 <div class="col-md-6">
				<div class="form-group">
				  <label class="control-label mb-10"><?=$this->lang->line('crs_hours');?></label>
					  <input type="text" class="form-control" id="crs_hours" name="crs_hours" required data-validation-required-message="<?=$this->lang->line('required');?>"/>
	                      <span class="help-block"> </span>					
					</div>
				</div> 
		 
		 
      
	   <div class="col-md-12">
		<div class="form-group">
		  <label class="control-label mb-10"><?=$this->lang->line('crs_details');?></label>
			  <textarea  class="form-control" id="crs_details" name="crs_details"></textarea> 
			 </div>
		</div> 
		 <div class="col-md-6">
			<div class="form-group">
			  <label class="control-label mb-10"><?=$this->lang->line('crs_keywords');?></label>
				  <input type="text" class="form-control" id="crs_keywords" name="crs_keywords" required data-validation-required-message="<?=$this->lang->line('required');?>"/>
				 	<span class="help-block"> </span>
				 </div>
			</div>      
		  <div class="col-md-6">
			<div class="form-group">
			  <label class="control-label mb-10"><?=$this->lang->line('crs_subscrib');?></label>
				  <input type="number" class="form-control" id="crs_subscrib" name="crs_subscrib" />
				 </div>
			</div> 
			                
			
                           
        <div class="col-md-6">
			<div class="form-group">
			  <label class="control-label mb-10"><?=$this->lang->line('crs_meetings');?></label>
				  <input type="number" class="form-control" id="crs_meetings" name="crs_meetings" />
				 </div>
			</div> 
			                
			<div class="col-md-6">
			<div class="form-group">
			  <label class="control-label mb-10"><?=$this->lang->line('crs_duration');?></label>
				  <input type="text" class="form-control" id="crs_duration" name="crs_duration" required data-validation-required-message="<?=$this->lang->line('required');?>"/>
				 	<span class="help-block"> </span>
				 </div>
			</div>
			
			
			  <div class="col-md-6">
			<div class="form-group">
			  <label class="control-label mb-10"><?=$this->lang->line('crs_price');?></label>
				  <input type="text" class="form-control" id="crs_price" name="crs_price" />
				 </div>
			</div> 
        
             <div class="col-md-6">
              <div class="d-flex no-block align-items-center">
            <div class="custom-control custom-checkbox">
	  <input  type="checkbox" class="te_active custom-control-input " id="crs_show_price" name="crs_show_price" checked  />	
    
                      <label class="custom-control-label" for="te_active"> <?=$this->lang->line('crs_show_price');?></label>
					
                    </div>
             </div>
             </div>
			  <div class="col-md-6">
			<div class="form-group">
			  <label class="control-label mb-10"><?=$this->lang->line('crs_author');?></label>
				  <input type="text" class="form-control" id="crs_author" name="crs_author" />
				 </div>
			</div> 
        
			  <div class="col-md-6">
			<div class="form-group">
			  <label class="control-label mb-10"><?=$this->lang->line('crs_ages');?></label>
				  <input type="text" class="form-control" id="crs_ages" name="crs_ages" />
				 </div>
			</div> 
 
 
			  <div class="col-md-6">
			<div class="form-group">
			 	<label><?=$this->lang->line("crs_pic");?>: </label>
				  
										<input type="file" name="file[]" id="file" multiple required="required"/>
										<h4 id='loading' style="display:none">loading..</h4>
										<div id="image_preview"><img id="previewing" src=""/>
										</div>
										<div id="message"></div>
				 </div>
			</div> 
			  <div class="col-md-6">
			<div class="form-group">
			 	<label><?=$this->lang->line("crs_files");?>: </label>
										<input type="file" name="docs[]" id="docs" multiple required="required"/> 
				 </div>
			</div> 
		   </div>
		 
        
 
 	   </div>
	    
	      <div class="form-group row">
                                 <div class="col-md-12">
                                  <div class="d-flex no-block align-items-center">
                                <div class="custom-control custom-checkbox">
						  <input  type="checkbox" class="te_active custom-control-input " id="crs_active" name="crs_active" checked  />	
                        
                                          <label class="custom-control-label" for="crs_active"> <?=$this->lang->line('active');?></label>
										
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
	
						<div class="col-md-12">
							<div class="col-sm-12" id="this_photos" style="display:none;">
							</div>
						</div>
						<div class="col-md-12">
							<div class="col-sm-12" id="this_docs" style="display:none;">
							</div>
						</div>
</div>
	</div>
	  </div>
	   
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $this->lang->line("add_edit_crs");?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("add_edit_crs_mss");?></h6>
					     <div class="table-responsive m-t-40">
								   <table id="example" class="table display table-bordered table-striped">
									<thead>
									  <tr>
				
							<th><?php echo $this->lang->line("crs_name");?></th>
							<th><?php echo $this->lang->line("crs_author");?></th>
							<th><?php echo $this->lang->line("active");?></th>
                            <th><?php echo $this->lang->line("operations");?></th>
						</tr>
						</thead>
						<tfoot>
						<tr>
							<th><?php echo $this->lang->line("crs_name");?></th>
							<th><?php echo $this->lang->line("crs_author");?></th>
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
		  draw("<?=base_url()?>Courses_ci/get_items/courses_tb/crs_code/crs_name/crs_active" , "#tdata");
		 $('.js-example-basic-multiple').select2();
          $("#student_form").submit(function(e){
			e.preventDefault();
 			 var formData = new FormData(this);	
			 var curr_code= $("#curr_code").val();
			 $("#btn_action").attr('disabled',true);
			 $("#btn_action").text('<?=$this->lang->line('loading');?>');
			 $.ajax({
				url : '<?=base_url()?>Courses_ci/AddEdit_Courses' ,
				method: 'POST', 
				data: formData, 
				//async:false,
				success: function(data)
				{
					 $("#btn_action").attr('disabled',false);
					 $("#btn_action").text('<?=$this->lang->line('Save');?>');
					alert(data);
 				
		  draw("<?=base_url()?>Courses_ci/get_items/courses_tb/crs_code/crs_name/crs_active" , "#tdata");
            		  if ( curr_code != '' || curr_code != null ) {
    						fetch_per_params( '<?=base_url()?>Common/fetch_this_photos', '#this_photos', curr_code, _PREFIX() );
    						fetch_per_params( '<?=base_url()?>Common/fetch_this_docs', '#this_docs', curr_code, 'CRS_DOCS' );
    						return false;
    					}

 				} ,
				cache: false,
				contentType: false,
				processData: false
			});
			 return false; 
 		});
		  $(document).on('click','.Edit',function(){ 
 
				var pk = $(this).attr('title');
 				var crs_name = $(this).attr('crs_name');
 				var crs_hours = $(this).attr('crs_hours');
 				var crs_details = $(this).attr('crs_details');
				var crs_subscrib = $(this).attr('crs_subscrib');
				var crs_meetings = $(this).attr('crs_meetings');
				var crs_duration = $(this).attr('crs_duration');
				var crs_price = $(this).attr('crs_price');
				var crs_show_price = $(this).attr('crs_show_price');
				var crs_author = $(this).attr('crs_author');
				var crs_ages = $(this).attr('crs_ages');
 				var crs_active = $(this).attr('crs_active');
			/*	var te_courses_codes = $(this).attr('te_courses_codes');
 		       var n = $( "#this_photos" ).length;
			  if(n > 0)
				  $("#example").DataTable().destroy();*/
				$("#curr_code").val(pk);
			  
    	fetch_per_params( '<?=base_url()?>Common/fetch_this_docs', '#this_docs', pk, 'CRS_DOCS' );
			$( "#this_docs" ).css( "display", "block" );
 
			fetch_per_params( '<?=base_url()?>Common/fetch_this_photos', '#this_photos', pk, _PREFIX(), 1 ); //fetch all users
			$( "#this_photos" ).css( "display", "block" );
				$("#crs_name").val(crs_name);
				$("#crs_hours").val(crs_hours);
				$("#crs_details").val(crs_details);
				$("#crs_subscrib").val(crs_subscrib);
				$("#crs_meetings").val(crs_meetings);
				$("#crs_duration").val(crs_duration);
 				$("#crs_price").val(crs_price);
				$("#crs_show_price").val(crs_show_price);
				$("#crs_author").val(crs_author);
				$("#crs_ages").val(crs_ages); 
 
				if(crs_active == 1)
				  $("#crs_active").attr('checked', true);
				  else
				  $("#crs_active").attr('checked', false);
					
 			//$("#file").attr("required" , false);
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
		for(i=0; i < selO.length; i++){
			if(selO.options[i].selected){
				selValues.push(selO.options[i].value);
			}
		}
	 }   
			   
</script>