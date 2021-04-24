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
        <div class="row">
         <div class="col-md-12">
			  <h4><center><?=$this->lang->line('Todate').":".date('Y-m-d')?></center></h4>
		  </div>
         <div class="col-md-8">
                  
				<label class="control-label mb-10">
				  <?=$this->lang->line('tr_title');?>
				  </label>
					  <select class="form-control" id="tr_code" name="tr_code">
						<option value=""><?=$this->lang->line('choose');?></option>
						<?php 
							draw_lists("Training_courses" , "tr_code" , "tr_title");
						?>
					</select>
				</div>
  		 
		<div class="col-sm-12">
			<div class="panel panel-default card-view">
				<div class="panel-heading">
					<div class="pull-left">
						<h6 class="panel-title txt-dark">Complex Header</h6>
					</div>
					<div class="clearfix"></div>
				</div>
    <div class="panel-wrapper collapse in">
        <div class="panel-body">
            <div class="table-wrap">
                <div class="table-responsive">
                <!--datable_2-->
				 <form method="post" enctype="multipart/form-data" id="attend_form">
				   <input id="btn_save_all" type="submit" value="<?=$this->lang->line('reg_all');?>" class="btn btn-success" />
					 <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
				<tr>
				    <th><?php echo $this->lang->line("select_one");?></th>
					<th><?php echo $this->lang->line("st_name");?></th>
					<th><?php echo $this->lang->line("te_name");?></th>
					<th><?php echo $this->lang->line("c_name");?></th>
 					<th><?php echo $this->lang->line("reg_todate");?></th>
					<th><?php echo $this->lang->line("end_date");?></th>
 					<th><?php echo $this->lang->line("operations");?></th>
				</tr>
				</thead>
				<tfoot>
				<tr>
					<th><?php echo $this->lang->line("select_one");?></th>
					<th><?php echo $this->lang->line("st_name");?></th>
					<th><?php echo $this->lang->line("te_name");?></th>
					<th><?php echo $this->lang->line("c_name");?></th>
 					<th><?php echo $this->lang->line("reg_todate");?></th>
					<th><?php echo $this->lang->line("end_date");?></th>
 					<th><?php echo $this->lang->line("operations");?></th>
				</tr>
				</tfoot>
				<tbody id="tdata">
		 
				</tbody>
			</table>  
				  </form>
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

 
						
  <script type="text/javascript">
	$(document).ready(function(e) {
      $("#attend_form").submit(function(e){
			e.preventDefault();
 			 var curr_code= $("#curr_code").val();
		  if($(".ck_table").is(":checked"))
			  {
				 $("#btn_save_all").attr('disabled',true);
				 $("#btn_save_all").val('<?=$this->lang->line('loading');?>');
				 $.ajax({
				url : '<?=base_url()?>Training_ci/save_group_att' ,
				method: 'POST', 
				data: $(this).serialize(), 
				//async:false,
				success: function(data)
				{
					   var sp = data.split(',');
					var slug = '';
					$.each( sp , function( key, value ) {
						
						if(value > 0)
							slug = '<?=$this->lang->line('Attended')?>';
 						else
							slug = '<?=$this->lang->line('notAttend')?>';
						  $("#checkbox_"+value).attr("disabled",true);
						  
						   $("#btn_"+value).text(slug);
					 });
   				}  
				 
			});
			  }
			 return false; 
 		});
	  $(document).on('click','.regthis',function(){
		  var valls = $(this).attr('title');
		  var t = $(this);
		  $(this).text("<?=$this->lang->line('loading')?>") ;
		  $.ajax({
				  url:'<?=base_url()?>Training_ci/save_one_att',
				  type:'POST',
				  data:{random:Math.random(),
					 tr_post:valls   
					},
				  success:function(data)
				  {
 					  if(data == 1 )
						   t.parent().text("<?=$this->lang->line('Attended')?>") ;
					  
				  }
				});
	  });
	  $("#tr_code").change(function(){
		  var thisval = $(this).val();
		  if(thisval !='' || thisval!=null)
		  {
				$.ajax({
				  url:'<?=base_url()?>Training_ci/get_trainigs_today',
				  type:'POST',
				  data:{random:Math.random(),
					 tr_post:thisval   
					},
				  success:function(data)
				  {
					  $("#tdata").html(data);
				  }
				});
		  }
 	  });   
 });
 

	    
			   
</script>
