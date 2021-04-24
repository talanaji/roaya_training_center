
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
	  
	  
	  
	 
                                <h4 class="card-title"><?php echo $this->lang->line("reports_ress");?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("reports_teachers_mess");?></h6>
 <form method="post" enctype="multipart/form-data" id="school_form" novalidate>
               
      <div class="form-body">
      <hr class="light-grey-hr"/>
	  <div class="row">
	   <div class="col-md-2">
		 <div class="form-group">
                                        <h5> <?=$this->lang->line('st_name');?> </h5>
                                        <div class="controls">
                                            <select class="select2 form-control custom-select" id="students" name="students" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                                 <option value=""><?=$this->lang->line('choose');?></option>
							
                                                <?php 
							  draw_lists("students" , "st_code" , "st_name","st_active");
							?>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
									<?php 
									 if( $this->session->userdata('User_type') == 1)
		 {?>
									 <div class="col-md-2">
		 <div class="form-group">
                                        <h5> <?=$this->lang->line('te_name');?> </h5>
                                        <div class="controls">
                                            <select class="select2 form-control custom-select" id="teachers" name="teachers" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                                 <option value=""><?=$this->lang->line('choose');?></option>
                                                <?php 
							  draw_lists("teachers" , "te_code" , "te_name","te_active");
							?>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
									<?php
		 }
		 ?>
									<div class="col-md-2">
					 <div class="form-group">
					 <label class="control-label mb-10"><?=$this->lang->line('res_is_confirmed');?></label>
							  <select class="form-control" id="res_is_confirmed" name="res_is_confirmed">
													  <option value="all"><?=$this->lang->line('all');?></option>
								<?php 
								  draw_lists("reservation_status" , "rest_code" , "rest_name");
								?>
							</select>
						</div>
					 </div>
	 	 <div class="col-md-3">
		 <div class="form-group">
                                        <h5> <?=$this->lang->line('from_date');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="min-date7" name="start_date" />
                                        </div>
                                    </div>
                                    </div>
										 <div class="col-md-3">
		 <div class="form-group">
                                        <h5> <?=$this->lang->line('to_date');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                              <input type="text" class="form-control" id="min-date8" name="end_date" />
                                        </div>
                                    </div>
                                    </div>

     		   </div>
			   <div class="row">
			   <div class="col-md-11">
			   <button type="button" id="ser" name="ser" class="btn waves-effect waves-light btn-block btn-success ser"><?=$this->lang->line('Search');?></button>
     		   </div>
			   <div class="col-md-1">
			      <img src='<?=base_url()?>/public/assets/images/icon/printer.png' id="print" name="print" class="print"/>
     		   </div>
     		   </div>
			   </form>
     		   </div>
     		   </div>
     		   </div>
     		   </div>
     		   </div>
     	
     			   <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> <?=$this->lang->line('reports_ress');?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("reports_teachers_mess");?></h6>
                 
                                    <table id="example" border="1" align="right" class="tablesaw table-bordered table-hover table tablesaw-swipe">
                                        <thead>
						<tr>
							<th><?php echo $this->lang->line("te_name");?></th>
							<th><?php echo $this->lang->line("te_name");?></th>
							<th><?php echo $this->lang->line("te_name");?></th>
                       
						</tr>
						</thead>
						<tfoot>
						<tr>
							<th><?php echo $this->lang->line("te_name");?></th>
							<th><?php echo $this->lang->line("te_name");?></th>	
							<th><?php echo $this->lang->line("te_name");?></th>
               
						</tr>
						</tfoot>
						<tbody id="tdata" class="tdata">
						
 					    </tbody>
					</table>  
                           </div>
                        </div>	
                    </div>	
                </div>	
                </div>	
           
				
				<script type="text/javascript">

	$(document).ready(function(e) {
		  draw("<?=base_url()?>Reports/m3ashat" , "#tdata");
function printData()
{
   var divToPrint=document.getElementById("example");
  


   newWin= window.open("");
    newWin.document.write('<html><head></head><body dir="rtl">');
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

  $(document).on('click','.print',function(){
printData();
});
		  
		  				

		   $(document).on('click','.ser',function(){
			   var students = $("#students").val();
			   var teachers = $("#teachers").val();
			   var start_date= $("#min-date7").val();
			   var end_date= $("#min-date8").val();
			   var confirmed= $("#res_is_confirmed").val();
			if (students == "")
				students = 0;
			if (teachers == "")
				teachers = 0;
            if (start_date == "")
				start_date = 0;
             if (end_date == "")
				end_date = 0;		
					
			
				
				 draw("<?=base_url()?>Reports/get_reservations/"+students+"/"+teachers+"/"+confirmed+"/"+start_date+"/"+end_date , "#tdata");
			//	alert("<?=base_url()?>Reports/get_reservations/"+students+"/"+teachers+"/"+confirmed+"/"+start_date+"/"+end_date);
					
					
				});
	});
			 
		  </script>