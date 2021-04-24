
	
		
		
        <!-- Start Page title and tab -->
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="header-action">
                        <h1 class="page-title"> <?=$page_title?></h1>
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
                <div class="tab-content">
                  
                        <div class="card">
                            <div class="card-body">
                               





			
    <!-- Row -->
   <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?=$page_title?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("rest_mess");?></h6>
             <form method="post" enctype="multipart/form-data" id="school_form" novalidate>
                 <input type="hidden" id="curr_code" name="curr_code" value="" />
      <div class="form-body">
      <hr class="light-grey-hr"/>
	   <div class="form-group">
                                        <?=$this->lang->line('rest_name');?>  <span class="text-danger">*</span>
                                        <div class="controls">
							
                                           <input type="text" class="form-control" id="rest_name" name="rest_name"  required data-validation-required-message="<?=$this->lang->line('required');?> "/>
                                    </div>	
			
  
                    </div>
					  <div class="form-group">
                                       <?=$this->lang->line('color');?>  <span class="text-danger">*</span>
                                        <div class="controls">
	  <select class="form-control" id="color" name="color" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                              <option value="t"><?=$this->lang->line('no_color');?></option>
                                            <option value="alert-success" class='alert-success'><?=$this->lang->line('green');?></option>
                                            <option value="alert-warning" class='alert-warning' ><?=$this->lang->line('yellow');?></option>
                                            <option value="alert-info" class='alert-info' ><?=$this->lang->line('blue');?></option>
                                            <option value="alert-danger" class='alert-danger' ><?=$this->lang->line('red');?></option>
                                           
                                        
                                        </select>
                            
                                    </div>	
			
  
                    </div>
					
					
					
	
     		   </div>
			   <div class="form-group row">
                                 <div class="col-md-12">
                                  <div class="d-flex no-block align-items-center">
                                <div class="custom-control custom-checkbox">
							
                        <input id="rest_active" class="rest_active custom-control-input " name="rest_active" type="checkbox" checked />
                                          <label class="custom-control-label" for="rest_active"> <?=$this->lang->line('active');?></label>
										
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
    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?=$page_title?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("rest_mess");?></h6>
                  <table  class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th><?php echo $this->lang->line("rest_name");?></th>
							<th><?php echo $this->lang->line("active");?></th>
                            <th><?php echo $this->lang->line("operations");?></th>
						</tr>
						</thead>
						<tfoot>
						<tr>
							<th><?php echo $this->lang->line("rest_name");?></th>
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
            
   <script type="text/javascript">
	$(document).ready(function(e) {
 		draw("<?=base_url()?>Constants_ci/get_items/reservation_status/rest_code/rest_name/rest_active" , "#tdata");
        $("#school_form").submit(function(e){
			e.preventDefault();
			// tinymce.triggerSave(); ////////////////
 			 var formData = new FormData(this);	
			 var curr_code= $("#curr_code").val();
			 $("#btn_action").attr('disabled',true);
			 $("#btn_action").text('<?=$this->lang->line('loading');?>');
			 $.ajax({
				url : '<?=base_url()?>Constants_ci/AddEdit_reserv_state' ,
				method: 'POST', 
				data: formData, 
 				success: function(data)
				{
					 $("#btn_action").attr('disabled',false);
					 $("#btn_action").text('<?=$this->lang->line('Save');?>');
					 var sp = data.split('╩');
 					 toastr["success"](data);
					  
                      var elements = document.getElementsByTagName("input");
for (var ii=0; ii < elements.length; ii++) {
  if (elements[ii].type == "text") {
    elements[ii].value = "";
  }
}
				
 					draw("<?=base_url()?>Constants_ci/get_items/reservation_status/rest_code/rest_name/rest_active" , "#tdata");
 				} ,
				cache: false,
				contentType: false,
				processData: false
			});
			 return false; 
 		});
	 	$(document).on('click','.Edit',function(){
			var pk = $(this).attr('title');
			var rest_name = $(this).attr('rest_name');
			var rest_active = $(this).attr('rest_active');
 			 $("#curr_code").val(pk);
  			 $("#rest_name").val(rest_name);
				if(rest_active == 1)
				  $("#rest_active").attr('checked', true);
				  else
				  $("#rest_active").attr('checked', false);
  				  $("#btn_add").val('<?php echo $this->lang->line('update_btn');?>');
 	      });
	

	$(document).on('click','.Del',function(){
					var pk = $(this).attr('title');
										var sc_name1 = document.getElementById ( pk ).innerText;
					swal({
  title: '<?php echo $this->lang->line("Confirm_del");?>?',
  text: sc_name1,
 // type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: '<?php echo $this->lang->line("yes_delete");?>',
   cancelButtonText: '<?php echo $this->lang->line("not_delete");?>'
}).then((result) => {
  if (result.value) {
	 draw("<?=base_url()?>Constants_ci/del_items/reservation_status/rest_code/"+pk , "");
						draw("<?=base_url()?>Constants_ci/get_items/reservation_status/rest_code/rest_name/rest_active" , "#tdata");
    	toastr["success"](sc_name1, "تم الحذف بنجاح")
  }
})
			});
 
      });
 	 
</script>