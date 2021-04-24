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
           
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?=$page_title?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("addsub_mess");?></h6>
             <form method="post" enctype="multipart/form-data" id="school_form" novalidate>
                 <input type="hidden" id="curr_code" name="curr_code" value="" />
      <div class="form-body">
      <hr class="light-grey-hr"/>
	   <div class="form-group">
                                        <h5><?=$this->lang->line('sub_name');?>  <span class="text-danger">*</span></h5>
                                        <div class="controls">
										<?php $hasil ="1111";?>
                                           <input type="text" class="form-control" id="sub_name" name="sub_name"  required data-validation-required-message="<?=$this->lang->line('required');?> "/>
                                    </div>	
			
  
                    </div>
                   
				   
				   
         
			    <div class="form-group row">
                                 <div class="col-md-12">
                                  <div class="d-flex no-block align-items-center">
                                <div class="custom-control custom-checkbox">
							
                        <input id="sub_active" class="sub_active custom-control-input " name="sub_active" type="checkbox" checked />
                                          <label class="custom-control-label" for="sub_active"> <?=$this->lang->line('active');?></label>
										
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
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?=$page_title?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("addsub_mess");?></h6>
              <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th><?php echo $this->lang->line("sc_name");?></th>
							<th><?php echo $this->lang->line("active");?></th>
                            <th><?php echo $this->lang->line("operations");?></th>
						</tr>
						</thead>
						<tfoot>
						<tr>
							<th><?php echo $this->lang->line("sc_name");?></th>
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
 		draw("<?=base_url()?>Constants_ci/get_items/subscribe_type/sub_code/sub_name/sub_active" , "#tdata");
        $("#school_form").submit(function(e){
			e.preventDefault();
			// tinymce.triggerSave(); ////////////////
 			 var formData = new FormData(this);	
			 var curr_code= $("#curr_code").val();
			 $("#btn_action").attr('disabled',true);
			 $("#btn_action").text('<?=$this->lang->line('loading');?>');
			 $.ajax({
				url : '<?=base_url()?>Constants_ci/AddEdit_subscribes' ,
				method: 'POST', 
				data: formData, 
 				success: function(data)
				{
					 $("#btn_action").attr('disabled',false);
					 $("#btn_action").text('<?=$this->lang->line('Save');?>');
					 var sp = data.split('╩');
					  swal(data)
                     .then((value) => {
                     location.reload();
                       })
 					//alert(data);
 					//draw("<?=base_url()?>Constants_ci/get_items/subscribe_type/sub_code/sub_name/sub_active" , "#tdata");
 				} ,
				cache: false,
				contentType: false,
				processData: false
			});
			 return false; 
 		});
	 	$(document).on('click','.Edit',function(){
			var pk = $(this).attr('title');
			var sub_name = $(this).attr('sub_name');
			var sub_active = $(this).attr('sub_active');
 			 $("#curr_code").val(pk);
  			 $("#sub_name").val(sub_name);
				if(sub_active == 1)
					document.getElementById("sub_active").checked = true;
				  else
					document.getElementById("sub_active").checked = false;
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
	 draw("<?=base_url()?>Constants_ci/del_items/subscribe_type/sub_code/"+pk , "");
				draw("<?=base_url()?>Constants_ci/get_items/subscribe_type/sub_code/sub_name/sub_active" , "#tdata"); 
    swal(
      '<?php echo $this->lang->line("secc_delete");?>',
      sc_name1
    )
  }
})
})
				
 
      });
 	   function check_regular(v)
	   {
				  var regexp = /[\w-]{4,20}/;
				  if(v.match(regexp))
				   {return true}
				   else
				   {
					   $("#R_video_key").val('');
					   return false ;
					   
				   }
			  }
</script>
