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
             <form method="post" enctype="multipart/form-data" id="trainings_form">
                 <input type="hidden" id="curr_code" name="curr_code" value="" />
      <div class="form-body">
      <hr class="light-grey-hr"/>
        <!-- `tr_code`, `tr_title`, `tr_hour_no`, `tr_price`, `tr_desc`, `tr_active`-->
         <div class="row">
			 <div class="col-md-12">
				<div class="form-group">
				  <label class="control-label mb-10"><?=$this->lang->line('tr_title');?></label>
					  <input type="text" class="form-control" id="tr_title" name="tr_title" />
					 </div>
				</div>
					<div class="col-md-3">
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
				<div class="col-md-3">
				<div class="form-group">
				  <label class="control-label mb-10"><?=$this->lang->line('no_of_tre_co');?></label>
					  <input type="text" class="form-control" id="tr_hour_no" name="tr_hour_no" />
					 </div>
				</div>	
				
				<div class="col-md-3">
				<div class="form-group">
				  <label class="control-label mb-10"><?=$this->lang->line('tr_hour_no');?></label>
					  <input type="text" class="form-control" id="tr_hour_no" name="tr_hour_no" />
					 </div>
				</div>
				<div class="col-md-3">
				<div class="form-group">
				  <label class="control-label mb-10"><?=$this->lang->line('tr_price_for_on_st');?></label>
					  <input type="text" class="form-control" id="tr_hour_no" name="tr_hour_no" />
					 </div>
				</div>
					<div class="col-md-12">
				<div class="form-group">
				  <label class="control-label mb-10"><?=$this->lang->line('tr_hour_no');?></label>
					  <input type="text" class="form-control" id="tr_hour_no" name="tr_hour_no" />
					 </div>
				</div>
			
              
             <div class="col-md-12">
				<div class="form-group">
				  <label class="control-label mb-10"><?=$this->lang->line('tr_desc');?></label>
					<textarea class="form-control" id="tr_desc" name="tr_desc"></textarea>
					 </div>
				</div>
              
             
             
              <div class="col-md-12">
                            <div class="form-group">
                              <label class="control-label mb-10">
                                  <?=$this->lang->line('active');?>
                              </label>
                                  <input  type="checkbox" id="tr_active" name="tr_active" check ed="checked" />
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
                               
                                    <table id="example" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
            
						<thead>
						<tr>
							<th><?php echo $this->lang->line("tr_title");?></th>
							<th><?php echo $this->lang->line("active");?></th>
                            <th><?php echo $this->lang->line("operations");?></th>
						</tr>
						</thead>
						<tfoot>
						<tr>
							<th><?php echo $this->lang->line("tr_title");?></th>
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
        </div>
    </div>
  <script type="text/javascript">
	   $(document).ready(function(e) {
 		draw("<?=base_url()?>Training_ci/get_trainings" , "#tdata");
        $("#trainings_form").submit(function(e){
			e.preventDefault();
			// tinymce.triggerSave(); ////////////////
 			 var curr_code= $("#curr_code").val();
			 $("#btn_action").attr('disabled',true);
			 $("#btn_action").text('<?=$this->lang->line('loading');?>');
			 $.ajax({
				url : '<?=base_url()?>Training_ci/AddEdit_trainings' ,
				method: 'POST', 
				data: $(this).serialize(), 
 				success: function(data)
				{
					 $("#btn_action").attr('disabled',false);
					 $("#btn_action").text('<?=$this->lang->line('Save');?>');
					 var sp = data.split('╩');
 					alert(data);
 					draw("<?=base_url()?>Training_ci/get_trainings" , "#tdata");
 				} 
			});
			 return false; 
 		});
	 	$(document).on('click','.Edit',function(){
			var pk = $(this).attr('title');
			var tr_title = $(this).attr('tr_title');
			var tr_active = $(this).attr('tr_active');
			var tr_hour_no = $(this).attr('tr_hour_no');
			var tr_price = $(this).attr('tr_price');
			var tr_desc = $(this).attr('tr_desc');
			
 			 $("#curr_code").val(pk);
  			 $("#tr_title").val(tr_title);
  			 $("#tr_hour_no").val(tr_hour_no);
  			 $("#tr_price").val(tr_price);
  			 $("#tr_desc").val(tr_desc);
 				if(tr_active == 1)
				  $("#tr_active").attr('checked', true);
				  else
				  $("#tr_active").attr('checked', false);
  				  $("#btn_add").val('<?php echo $this->lang->line('update_btn');?>');
 	      });
		$(document).on('click','.Del',function(){
					var pk = $(this).attr('title');
					if(confirm('<?php echo $this->lang->line("Confirm_del");?>'))
					{
						draw("<?=base_url()?>Training_ci/del_items/Training_courses/tr_code/"+pk , "");
						draw("<?=base_url()?>Training_ci/get_trainings" , "#tdata");
					}
					else{alert('<?php echo $this->lang->line("cancel_Confirm_del");?>');}
				});
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


 
