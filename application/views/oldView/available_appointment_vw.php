 <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor"><?php echo $this->lang->line("Manage_Users");?></h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)"><?php echo $this->lang->line("home_page");?></a></li>
                                <li class="breadcrumb-item active"><?php echo $this->lang->line("Manage_Users");?></li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> <?=$this->lang->line('send_new_mees');?></button>
                        </div>
                    </div>
                </div>
           
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $this->lang->line("add_edit_user");?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("add_new_user_mess");?></h6>
          
 <div class="panel-wrapper collapse in">
    <div class="panel-body">
       <div class="row">
       	 <div class="col-md-4">
                 <div class="form-group">
                 <label class="control-label mb-10">
                      <?=$this->lang->line('res_teach_code');?>
                      </label>
                          <select class="form-control" id="te_code" name="te_code">
                            <option value=""><?=$this->lang->line('choose');?></option>
                            <?php 
							  draw_lists("teachers" , "te_code" , "te_name",'te_active','1');
							?>
                        </select>
				    </div>
				 </div>
            <div class="col-md-4">
                 <div class="form-group">
                 <label class="control-label mb-10">
                      <?=$this->lang->line('res_date');?>
                      </label>
                           <div class='input-group date'>
							<input type='text' class="form-control" id="min-date2" name="res_date" />
							
					</div>
				    </div>
				 </div>
		  
		      <div class="col-md-4">
	   	    <div class="form-group">
	   	    
			 <button type="submit" class="btn btn-success  mr-10" id="btn_get">
				   <?=$this->lang->line('Get_results');?> </button>
		   
			   </div>
		   </div>
       </div>
        <div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
								
								</div>
								<div class="clearfix"></div>
							</div>
    <div class="panel-wrapper collapse in">
        <div class="panel-body">
            <div class="table-wrap">
                <div class="table-responsive">
                <!--datable_2-->
              <table id="example1" class="display table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th></th>
							<th></th>
							 
						</tr>
						</thead>
						<tfoot>
						<tr>
						 	<th></th>
							<th></th>
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
	  </div>
	   </div>
            </div>		
        </div>
    </div>
 	<!-- /Row -->

 
						
			
			
  <script type="text/javascript">
	  
	$(document).ready(function(e) { 
		  draw("<?=base_url()?>Teachers_ci/available_app_ajax" , "#tdata");
		
		 $("#btn_get").click(function(){
			var arr =  $("select[name=te_code],input[name=res_date]").serialize()
  		    draw_such_params("<?=base_url()?>Teachers_ci/available_app_ajax" , "#tdata" , arr);	
		});
        
       });

	    
			   
</script>
