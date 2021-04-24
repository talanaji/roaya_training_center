
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
                               
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
						<tr>
							<th><?php echo $this->lang->line("st_name");?></th>
							<th><?php echo $this->lang->line("st_phone");?></th>
							<th><?php echo $this->lang->line("st_payment_date");?></th>
							<th><?php echo $this->lang->line("st_paymentmethods_code");?></th>
							<th><?php echo $this->lang->line("all_clock");?></th>
							<th><?php echo $this->lang->line("all_clock_in_month");?></th>
                            <th><?php echo $this->lang->line("daf3");?></th>
                            <th><?php echo $this->lang->line("operations");?></th>
						</tr>
						</thead>
						<tfoot>
						<tr>
							<th><?php echo $this->lang->line("st_name");?></th>
							<th><?php echo $this->lang->line("st_phone");?></th>
							<th><?php echo $this->lang->line("st_payment_date");?></th>
							<th><?php echo $this->lang->line("st_paymentmethods_code");?></th>
							<th><?php echo $this->lang->line("all_clock");?></th>
							<th><?php echo $this->lang->line("all_clock_in_month");?></th>
                            <th><?php echo $this->lang->line("daf3");?></th>
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
		  draw("<?=base_url()?>Reports/get_st_table/students" , "#tdata");
	});
		  </script>