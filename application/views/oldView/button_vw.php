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
                                <h6 class="card-subtitle"><?php echo $this->lang->line("addbutton_mess");?></h6>

                         <form action="<?=base_url()?>permissions/addEdit_button" method="post" novalidate>
                              <input type="hidden" id="b_code" name="b_code" value="<?= !empty($b_code)? $b_code:""?>"/>
        <div class="form-body">
                  <hr class="light-grey-hr"/>
				   <div class="form-group">
                                        <h5><?=$this->lang->line('b_name');?>  <span class="text-danger">*</span></h5>
                                        <div class="controls">
										<?php $hasil ="1111";?>
                                           <input type="text" class="form-control"  value="<?= !empty($b_name)? $b_name:""?>" id="b_name" name="b_name"  required data-validation-required-message="<?=$this->lang->line('required');?> "/>
                                    </div>	
			
  
                    </div>
					
					
     		   </div>
        
                            <div class="form-actions mt-10">
                                <button type="submit" class="btn btn-success  mr-10"><?=$this->lang->line('Save');?> </button>
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
                                <h6 class="card-subtitle"><?php echo $this->lang->line("addbutton_mess");?></h6>
											   <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
												<thead>
												  <tr>
                                                    	<th><?=$this->lang->line('b_name')?></th>
														<th><?=$this->lang->line('active')?></th>
														<th><?=$this->lang->line('opt')?></th>
														 
													</tr>
												</thead>
												<tfoot>
													<tr>
													    <th><?=$this->lang->line('b_name')?></th>
														<th><?=$this->lang->line('active')?></th>
														<th><?=$this->lang->line('opt')?></th>
 													</tr>
												</tfoot>
												<tbody>
													<?php 
														foreach($btn_res as $btn){
															if($btn->b_active ==1)
															 $ac =   $this->lang->line('active') ;
															 else
															 $ac = $this->lang->line('inactive') ;
													?> 
													<tr>
														<td><?=$btn->b_name?></td>
														<td><?=$ac?></td>
														<td>
                                                             <a href="<?=base_url()?>permissions/del_items/buttons/b_code/<?=$btn->b_code?>"><button type='button' class='btn waves-effect waves-light btn-danger'><?=$this->lang->line('delete')?></button></a>   
                                                             <a href="<?=base_url()?>permissions/addEdit_button/<?=$btn->b_code?>"><button type='button' class='btn waves-effect waves-light btn-info'><?=$this->lang->line('edit')?></button></a>
                                                           </td>
 													</tr>
													 
													 <?php 
														} 
													?> 
												</tbody>
											</table>
										</div>
									</div>	
								</div>	
							</div>	
					