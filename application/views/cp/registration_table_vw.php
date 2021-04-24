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
        
                               
                                    <table id="example" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">

						<thead>
						<tr>
							<th><?php echo $this->lang->line("st_name");?></th>
							<th><?php echo $this->lang->line("te_name");?></th>
							<th><?php echo $this->lang->line("c_name");?></th>
							<th><?php echo $this->lang->line("room_name");?></th>
							<th><?php echo $this->lang->line("reg_todate");?></th>
 							<th><?php echo $this->lang->line("end_date");?></th>
							<th><?php echo $this->lang->line("reg_paid_price");?></th>
 							<th><?php echo $this->lang->line("reg_is_complete");?></th>
                            <th><?php echo $this->lang->line("operations");?></th>
						</tr>
						</thead>
						<tfoot>
						<tr>
							<th><?php echo $this->lang->line("st_name");?></th>
							<th><?php echo $this->lang->line("te_name");?></th>
							<th><?php echo $this->lang->line("c_name");?></th>
							<th><?php echo $this->lang->line("room_name");?></th>
							<th><?php echo $this->lang->line("reg_todate");?></th>
 							<th><?php echo $this->lang->line("end_date");?></th>
							<th><?php echo $this->lang->line("reg_paid_price");?></th>
 							<th><?php echo $this->lang->line("reg_is_complete");?></th>
                            <th><?php echo $this->lang->line("operations");?></th>
						</tr>
						</tfoot>
						<tbody id="tdata">
		<?php 
							
			 foreach($d as  $dd )
			 { 
							 
 				 if($dd->reg_is_complete == 1)
					 $ac = 'checked=checked';
				 else 
					 $ac = '';
				 echo "<tr title=''>  
 			            <td>".$dd->st_name."</td>
 			            <td>".$dd->te_name."</td>
 			            <td>".$dd->tr_title."</td>
 			            <td>".$dd->room_name."</td>
 			            <td>".$dd->reg_date."</td>
  			            <td>".$dd->reg_end_date."</td>
 			            <td>".$dd->reg_paid_price."</td>
 						<td>
						<input type='checkbox' class='".$chbox."'".$ac." disabled='disabled'/></td>
 						<td> " ;
 
 					echo " <a style='cursor:pointer'  class='Edits' data-toggle='modal' data-target='#myModal'
								title= '".$dd->reg_code."'
								st_name= '".$dd->st_name."'
								tr_title= '".$dd->tr_title."'
								reg_teach_code= '".$dd->reg_teach_code."'
								reg_tr_code= '".$dd->reg_tr_code."'
								room_name= '".$dd->room_name."'
								reg_date= '".$dd->reg_date."'
								reg_std_code ='".$dd->reg_std_code."'
 								reg_end_date= '".$dd->reg_end_date."'
								reg_paid_price= '".$dd->reg_paid_price."'
 								reg_room_code= '".$dd->reg_room_code."'
  								reg_notes = '".$dd->reg_notes."'  
								reg_is_complete ='".$dd->reg_is_complete."'>
								       <i class='fa fa-edit'></i> 
								  </a>
								</td>
					         </tr>";
					 }
					?>
 					    </tbody>
					</table>  
                           </div>
                        </div>	
                    </div>	
                </div>	
            </div>	
        </div>
    </div>
	  </div>
	   </div>
            </div>		
        </div>
    </div>
 	<!-- /Row -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Reservation </h4>
      </div>
      <div class="modal-body">
      <div id="alert"></div>
       <div class="panel-body">
     <div class="row">
       <div class="col-sm-12 col-xs-12">
	       <div class="form-wrap">
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
				 <select class="form-control" id="reg_std_code" name="reg_std_code[]">
					<option value="" disabled="disabled"><?=$this->lang->line('choose');?></option>
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
				  <label class="control-label mb-10">
				   <?=$this->lang->line('res_room_code');?></label>
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
						<input type='text' class="form-control" id="min-date3" name="reg_end_date" />
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
				
				<div class="col-md-6">
				<div class="form-group">
				  <label class="control-label mb-10"><?=$this->lang->line('reg_is_complete');?></label>
					  <input type="checkbox" class="form-control" id="reg_is_complete" name="reg_is_complete" />
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
      </div>
     
    </div>
  </div>
			</div>
						
  <script type="text/javascript">
	$(document).ready(function(e) {
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
		  $(document).on('click','.Edits',function(){
 				var pk = $(this).attr('title');
				var st_name = $(this).attr('st_name');
				var tr_title = $(this).attr('tr_title');
				var reg_teach_code = $(this).attr('reg_teach_code');
				var reg_tr_code = $(this).attr('reg_tr_code');
				var reg_room_code = $(this).attr('reg_room_code');
				var reg_end_date = $(this).attr('reg_end_date');
				var reg_std_code = $(this).attr('reg_std_code');
			  
			    var reg_paid_price = $(this).attr('reg_paid_price');
			  
				var reg_notes = $(this).attr('reg_notes');
				var reg_is_complete = $(this).attr('reg_is_complete');
			 
				    
				$("#curr_code").val(pk);
 				$("#st_name").val(st_name);
				$("#reg_teach_code").val(reg_teach_code);
				$("#reg_tr_code").val(reg_tr_code);
				$("#reg_room_code").val(reg_room_code);
				$("#reg_end_date").val(reg_end_date);
				$("#reg_std_code").val(reg_std_code);
				$("#reg_paid_price").val(reg_paid_price);
				$("#reg_notes").val(reg_notes);
                
				  if(reg_is_complete == 1 )
					  $("#reg_is_complete").attr("checked",true);
			  else
				      $("#reg_is_complete").attr("checked",false);
					
		   
			  
  	      });
		  $(document).on('click','.Del',function(){
					var pk = $(this).attr('title');
					if(confirm('<?php echo $this->lang->line("Confirm_del");?>'))
					{
						draw("<?=base_url()?>Students_ci/del_items/students/st_code/"+pk , "");
						draw("<?=base_url()?>Students_ci/get_items/students/st_code/st_name/st_active" , "#tdata");
					}
					else{alert('<?php echo $this->lang->line("cancel_Confirm_del");?>');}
				});
       });

	    
			   
</script>
