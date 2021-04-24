
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
                                <li class="breadcrumb-item"><?php echo $this->lang->line("home_page");?></a></li>
                                <li class="breadcrumb-item active"><?=$page_title?></li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i>  <?=$this->lang->line('add_doros');?></button>
                        </div>
                    </div>
                </div>
				
				
  <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> <?=$this->lang->line('St_Payments_rep');?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("St_Payments_rep_mess");?></h6>
                               
                                    <table  class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" cellspacing="0" width="100%">
                                        <thead>
						<tr>
							<th><?php echo $this->lang->line("st_name");?></th>
							<th><?php echo $this->lang->line("te_name");?></th>
							<th><?php echo $this->lang->line("c_name");?></th>
							<th><?php echo $this->lang->line("room_name");?></th>
							<th><?php echo $this->lang->line("res_todate");?></th>
							<th><?php echo $this->lang->line("start_time");?></th>
							<th><?php echo $this->lang->line("end_time");?></th>
														<?php
							if ($this->session->userdata('User_type') == 1)
							{
								echo "<th>".$this->lang->line("res_paid_price")."</th>";
						    }
							?>
							<th><?php echo $this->lang->line("res_teacher_percent");?></th>
                          	<th><?php echo $this->lang->line("res_hours");?></th>
							<th><?php echo $this->lang->line("end_time");?></th>
						</tr>
						</thead>
						<tfoot>
						<tr>
							<th><?php echo $this->lang->line("st_name");?></th>
							<th><?php echo $this->lang->line("te_name");?></th>
							<th><?php echo $this->lang->line("c_name");?></th>
							<th><?php echo $this->lang->line("room_name");?></th>
							<th><?php echo $this->lang->line("res_todate");?></th>
							<th><?php echo $this->lang->line("start_time");?></th>
							<th><?php echo $this->lang->line("end_time");?></th>
							
							<?php
							if ($this->session->userdata('User_type') == 1)
							{
								echo "<th>".$this->lang->line("res_paid_price")."</th>";
						    }
							?>
							<th><?php echo $this->lang->line("res_teacher_percent");?></th>
								<th><?php echo $this->lang->line("res_hours");?></th>
                            <th><?php echo $this->lang->line("end_time");?></th>
						</tr>
						</tfoot>
						<tbody id="tdata">
		<?php 
							
			 foreach($d as  $dd )
			 { 
							 
 			   $this->db->select('color');
                     $this->db->from('reservation_status');
                     $this->db->where('rest_code',$dd->res_is_confirmed);
                     $q = $this->db->get()->row()->color;
					 //echo $q ;
					 	$sum2 = 0;
				$starttimestamp = StrToTime($dd->res_time_start);
            	$endtimestamp =  StrToTime($dd->res_time_end);	
            $diff=$endtimestamp - $starttimestamp;
            $difference = $diff / ( 60 * 60 );
      if ($dd->is_sms_sent == 1)
            {
          $sms =" <img width='30' src='".base_url()."public/assets/images/icon/sms.png'>" ;
         }
      //$difference  = $dd->res_time_start;

					
                         echo "<tr class='".$q."'>";  
 			           	
					   echo "<td>";
					    if($btn_res_edit == 1 &&  $dd->res_is_confirmed ==0 && $this->session->userdata('User_type') == 2){
				echo " <a style='cursor:pointer'  class='Edits' data-toggle='modal' data-target='#myModal'
								title= '".$dd->res_code."'
								st_name= '".$dd->st_name."'
								c_name= '".$dd->c_name."'
								res_teach_code= '".$dd->res_teach_code."'
								res_cors_code= '".$dd->res_cors_code."'
								room_name= '".$dd->room_name."'
								res_todate= '".$dd->res_todate."'
								res_time_start= '".$dd->res_time_start."'
								res_time_end= '".$dd->res_time_end."'
								res_paid_price= '".$dd->res_paid_price."'
								res_teacher_percent= '".$dd->res_teacher_percent."'
								te_ID= '".$dd->te_ID."'
								st_ID= '".$dd->st_ID."'
								res_room_code= '".$dd->res_room_code."'
								res_std_code= '".$dd->res_std_code."'
								key= '".$this->session->userdata('User_type')."'
								res_teach_note = '".$dd->res_teach_note."' ";
								echo "res_admin_note= '".$dd->res_admin_note."' ";
				                echo "res_is_confirmed ='".$dd->res_is_confirmed."'";
								echo "> ";
				 }
				 		 elseif($this->session->userdata('User_type') == 1){
					echo " <a style='cursor:pointer'  class='Edits' data-toggle='modal' data-target='#myModal'
								title= '".$dd->res_code."'
								st_name= '".$dd->st_name."'
								c_name= '".$dd->c_name."'
								res_teach_code= '".$dd->res_teach_code."'
								res_cors_code= '".$dd->res_cors_code."'
								room_name= '".$dd->room_name."'
								res_todate= '".$dd->res_todate."'
								res_time_start= '".$dd->res_time_start."'
								res_time_end= '".$dd->res_time_end."'
								res_paid_price= '".$dd->res_paid_price."'
								res_teacher_percent= '".$dd->res_teacher_percent."'
								te_ID= '".$dd->te_ID."'
								st_ID= '".$dd->st_ID."'
								res_room_code= '".$dd->res_room_code."'
								res_std_code= '".$dd->res_std_code."'
								key= '".$this->session->userdata('User_type')."'
								res_teach_note = '".$dd->res_teach_note."' ";
								echo "res_admin_note= '".$dd->res_admin_note."' ";
				                echo "res_is_confirmed ='".$dd->res_is_confirmed."'";
								echo ">"; 
				 }
					  echo " ".$dd->st_name."</a></td>
 			            <td>".$dd->te_name."</td>
 			            <td>".$dd->c_name."</td>
 			            <td>".$dd->room_name."</td>
 			            <td>".$dd->res_todate."</td>
 			            <td>".$dd->res_time_start."</td>
 			            <td>".$dd->res_time_end."</td>";
						if ($this->session->userdata('User_type') == 1)
							{
								echo "<td>".$dd->res_paid_price."</td>";
						    }
 			            
 			          echo "  <td>".$dd->res_teacher_percent."</td>" ;
				      echo "  <td>". $difference."</td>" ;
				      echo "  <td>". $sms."</td>" ;
			  			
		
 								echo "
					         </tr>";
 			 }
			?>
 					    </tbody>
						</table>  
                           </div>
                        </div>	
                    </div>	
                </div>	
 	<!-- /Row -->
				
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
	   <h4 class="modal-title" id="myModalLabel"><?=$this->lang->line("edit_res")?> </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       
      </div>
      <div class="modal-body">
      <div id="alert"></div>
       <form method="post" enctype="multipart/form-data" id="reser_form">
 	     <input type="hidden" id="curr_code" name="curr_code" value="" />
		 <div class="row">
			<div class="col-md-4">
							 <div class="form-group">
							 <label class="control-label mb-4">
								  <?=$this->lang->line('res_teach_code');?>
								  </label>
									  <select class="form-control" id="res_teach_code" name="res_teach_code">
										<option value=""><?=$this->lang->line('choose');?></option>
										<?php 
										  draw_lists("teachers" , "te_code" , "te_name");
										?>
									</select>
								</div>
							 </div>
			<div class="col-md-4">
					 <div class="form-group">
					 <label class="control-label mb-4">
							 <?=$this->lang->line('res_std_code');?>
						  </label>
							  <select class="form-control" id="res_std_code" name="res_std_code">
								<option value=""><?=$this->lang->line('choose');?></option>
								<?php 
								  draw_lists("students" , "st_code" , "st_name");
								?>
							</select>
						</div>
					 </div>
			<div class="col-md-4">
					 <div class="form-group">
					 <label class="control-label mb-4">
							 <?=$this->lang->line('res_cors_code');?>
						  </label>
							  <select class="form-control" id="res_cors_code" name="res_cors_code">
								<option value=""><?=$this->lang->line('choose');?></option>
								<?php 
								  draw_lists("courses" , "c_code" , "c_name");
								?>
							</select>
						</div>
					 </div>
			<div class="col-md-4">
					<div class="form-group">
					  <label class="control-label mb-10"><?=$this->lang->line('res_room_code');?></label>
						  <select type="text" class="form-control" id="res_room_code" name="res_room_code">
							 <option value=""><?=$this->lang->line('choose');?></option>
									<?php 
									  draw_lists("rooms" , "room_code" , "room_name");
								 ?>
						  </select>
						 </div>
					</div>
			<div class="col-md-4">
					<div class="form-group">
					  <label class="control-label mb-10"><?=$this->lang->line('res_time_start');?></label>
					  <div class='input-group date'>
							<input type='text'  class="form-control" id="datetimepicker1" name="res_time_start" />
							<span class="input-group-addon">
								<span class="fa fa-clock-o"></span>
							</span>
						</div>
					  </div>
				 </div>      
			<div class="col-md-4">
					<div class="form-group">
					  <label class="control-label mb-10"><?=$this->lang->line('res_time_end');?></label>
					  <div class='input-group date'>
							<input type='text' class="form-control" id="datetimepicker2" name="res_time_end" />
							<span class="input-group-addon">
								<span class="fa fa-clock-o"></span>
							</span>
						</div>
					  </div>
					</div> 
			<?php
                        if($this->session->userdata('User_type') == 1)
						{
							?>
			<div class="col-md-4">
					<div class="form-group">
					  <label class="control-label mb-10"><?=$this->lang->line('res_paid_price');?></label>
						  <input type="number" class="form-control" id="res_paid_price" name="res_paid_price" />
						 </div>
					</div>  
			<div class="col-md-4">
					<div class="form-group">
					  <label class="control-label mb-10"><?=$this->lang->line('res_teacher_percent');?></label>
						  <input type="number" class="form-control" id="res_teacher_percent" name="res_teacher_percent" />
						 </div>
					</div> 
					<?php
						}
						?>
						<div class="col-md-4">
					 <div class="form-group">
					 <label class="control-label mb-10"><?=$this->lang->line('res_is_confirmed');?></label>
							  <select class="form-control" id="res_is_confirmed" name="res_is_confirmed">
								
								<?php 
								  draw_lists("reservation_status" , "rest_code" , "rest_name");
								?>
							</select>
						</div>
					 </div>
						
						
			<div class="col-md-12">
						<div class="form-group">
					  <label class="control-label mb-10">
					  <?=$this->lang->line('res_teach_note');?>	</label>
						  <textarea class="form-control" id="res_teach_note" name="res_teach_note"></textarea>
						 </div>
					</div>  
		 <?php if($this->session->userdata('User_type')==1){?>
			<div class="col-md-12">
			   <div class="form-group">
				  <label class="control-label mb-10">
					  <?=$this->lang->line('res_admin_note');?>	</label>
						  <textarea class="form-control" id="res_admin_note" name="res_admin_note"></textarea>
						 </div>
					</div> 
					<?php }else{
		           ?>
				 <div class="col-md-12">
				   <div class="form-group text-danger" id="admin_noteTxt">
 						   
					 </div>
					</div> 
					<?php } ?>
		
			  	<div class="col-md-12">
				<button type="button" class="btn btn-default" data-dismiss="modal"><?=$this->lang->line('Close');?></button>
				<button type="submit" id="edit_reserv" class="btn btn-primary"><?=$this->lang->line('Save');?></button>
			  </div>
		 </form>
      </div>
     
    </div>
  </div>
			</div>
			</div>
			
			
  <script type="text/javascript">
	  
	$(document).ready(function(e) {
		 
           $("#reser_form").submit(function(e){
			e.preventDefault();
 			 var formData = new FormData(this);	
 			 var curr_code= $("#curr_code").val();
			 $("#edit_reserv").attr('disabled',true);
			 $("#edit_reserv").text('<?=$this->lang->line('loading');?>');
			 $.ajax({
				url : '<?=base_url()?>Reservation_ci/AddEdit_reserv' ,
				method: 'POST', 
				data: formData, 
				//async:false,
				success: function(data)
				{
					
					if(data == 2)
						$("#edit_reserv").hide('fast')
					
					if(data ==' تمت العملية بنجاح ')
					{
						$("#myModal").modal('hide');
						setTimeout(function(){location.reload()},700);
					}
					 $("#edit_reserv").attr('disabled',false);
					 $("#edit_reserv").text('<?=$this->lang->line('Save');?>');
					 $("#alert").html('<strong>'+data+'</strong>');
   				} ,
				cache: false,
				contentType: false,
				processData: false
			});
			 return false; 
 		});
		
		  $(document).on('click','.Edits',function(){
			  var aaa = $(this);
				var pk = $(this).attr('title');
				var st_name = $(this).attr('st_name');
				var c_name = $(this).attr('c_name');
				var res_cors_code = $(this).attr('res_cors_code');
				var room_name = $(this).attr('room_name');
				var res_room_code = $(this).attr('res_room_code');
				var res_teach_code = $(this).attr('res_teach_code');
			  
				 var res_todate = $(this).attr('res_todate');
			  
				var res_time_start = $(this).attr('res_time_start');
				var res_time_end = $(this).attr('res_time_end');
				var res_teach_note = $(this).attr('res_teach_note');
				var res_paid_price = $(this).attr('res_paid_price');
				var res_teacher_percent = $(this).attr('res_teacher_percent');
				var res_std_code = $(this).attr('res_std_code');
				var te_ID = $(this).attr('te_ID');
				var st_ID = $(this).attr('st_ID');
				var res_is_confirmed = $(this).attr('res_is_confirmed');
				var res_admin_note = $(this).attr('res_admin_note');
				var key = $(this).attr('key');
				 
				    
				$("#curr_code").val(pk);
 				$("#st_name").val(st_name);
				$("#room_name").val(room_name);
				$("#res_room_code").val(res_room_code);
				$("#res_is_confirmed").val(res_is_confirmed);
				$("#res_cors_code").val(res_cors_code);
				$("#res_std_code").val(res_std_code);
				$("#datetimepicker1").val(res_time_start);
				$("#datetimepicker2").val(res_time_end);
				$("#res_teach_note").val(res_teach_note);
				$("#res_paid_price").val(res_paid_price);
 				$("#res_teacher_percent").val(res_teacher_percent);
				$("#te_ID").val(te_ID);
				$("#st_ID").val(st_ID);
 				$("#res_admin_note").val(res_admin_note);
 				$("#res_teach_code").val(res_teach_code);
				 

					
		  if(key != 1 )
		   {
			   $("#admin_noteTxt").html("<?=$this->lang->line('admin_notice')?>:/ "+res_admin_note);
			   $("#reser_form input[type=text] , input[type=number]").attr("readonly",true);
			   $("#reser_form select").attr("readonly",true);
		   }
			  
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
