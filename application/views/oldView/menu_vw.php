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
                                <h6 class="card-subtitle"><?php echo $this->lang->line("Add_edit_st_mess");?></h6>

                         <form action="<?=base_url()?>permissions/addEdit_menu" method="post">
                              <input type="hidden" id="m_code" name="m_code" value="<?= !empty($m_code)? $m_code:""?>"/>
        <div class="form-body">
                  <hr class="light-grey-hr"/>
                     <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label mb-10"><?=$this->lang->line('m_name');?></label>
                                    <input type="text" id="m_name"   name="m_name" value="<?= !empty($m_name)? $m_name:""?>" class="form-control" placeholder="">
                                 </div>
                            </div>
                   </div>
     		   </div>
            <!--<div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <div class="checkbox checkbox-success">
                        <input id="checkbox_34" type="checkbox">
                        <label for="checkbox_34">Check me out !</label>
                    </div>
                </div>
            </div>-->
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
                                <h6 class="card-subtitle"><?php echo $this->lang->line("Add_edit_st_mess");?></h6>
								
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
														foreach($menu_res as $men){
															if($men->m_active ==1)
															 $ac =   $this->lang->line('active') ;
															 else
															 $ac = $this->lang->line('inactive') ;
													?> 
													<tr>
														<td><?=$men->m_name?></td>
														<td><?=$ac?></td>
														<td>
                                                             <a href="<?=base_url()?>permissions/del_items/menus/m_code/<?=$men->m_code?>"><button type='button' class='btn waves-effect waves-light btn-danger'><?=$this->lang->line('delete')?></button></a>    
                                                             <a href="<?=base_url()?>permissions/addEdit_menu/<?=$men->m_code?>"><button type='button' class='btn waves-effect waves-light btn-info'><?=$this->lang->line('edit')?></button></a>
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
						