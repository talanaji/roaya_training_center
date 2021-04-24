        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="header-action">
                        <h1 class="page-title"><?=$page_title?></h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><?php echo $this->lang->line("home_page");?></a></li>

                            <li class="breadcrumb-item active" aria-current="page"><?=$page_title?></li>
                        </ol>
                    </div>
               
                </div>
            </div>
        </div>
			
    
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="row clearfix row-deck">
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body ribbon">
                                <div class="ribbon-box green" data-toggle="tooltip" title="New Professors">5</div>
                                <a href="professors.html" class="my_sort_cut text-muted">
                                    <i class="fa fa-black-tie"></i>
                                    <span><?php echo $this->lang->line("teachers_managment");?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="app-contact.html" class="my_sort_cut text-muted">
                                    <i class="fa fa-address-book"></i>
                                    <span><?php echo $this->lang->line("Contact");?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body ribbon">
                                <div class="ribbon-box orange" data-toggle="tooltip" title="New Staff">8</div>
                                <a href="staff.html" class="my_sort_cut text-muted">
                                    <i class="fa fa-user-circle-o"></i>
                                    <span><?php echo $this->lang->line("st_all");?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="app-filemanager.html" class="my_sort_cut text-muted">
                                    <i class="fa fa-folder"></i>
                                    <span><?php echo $this->lang->line("files");?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="library.html" class="my_sort_cut text-muted">
                                    <i class="fa fa-book"></i>
                                    <span><?php echo $this->lang->line("view_all_reserv");?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="holiday.html" class="my_sort_cut text-muted">
                                    <i class="fa fa-bullhorn"></i>
                                    <span>Holiday</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>	
		

				   <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"><?=$this->lang->line('today_ress');?></h3>
                                    <div class="card-options">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                        <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                        <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead>									
							<th><?php echo $this->lang->line("st_name");?></th>
							<th><?php echo $this->lang->line("te_name");?></th>
							<th><?php echo $this->lang->line("status");?></th>
							<th><?php echo $this->lang->line("c_name");?></th>
							<th><?php echo $this->lang->line("room_name");?></th>
							<th><?php echo $this->lang->line("res_todate");?></th>
							<th><?php echo $this->lang->line("start_time");?></th>
							<th><?php echo $this->lang->line("end_time");?></th>
                         
						</tr>
						</thead>
						<tbody id="tdata">
		             <?php
                      foreach($d as  $dd )
                         { $time_start = strtotime($dd->res_time_start);
                                  $day = date('Y-m-d') ;
                                  $monthdata =  date('Y-m-d',strtotime($dd->res_time_start)) ;    
                        if( $monthdata == $day )
                             {
                                 $this->db->select('rest_name,color');
                                 $this->db->from('reservation_status');
                                 $this->db->where('rest_code',$dd->res_is_confirmed);
								// $data['result'] = $this->result();
								  //$q23 = $this->db->get()->row()->color;
                                 $q = $this->db->get()->row()->rest_name;
                               
                                

                              echo "<tr>";
                                   echo " <td>";
                                            if(  $dd->res_is_confirmed ==0 && $this->session->userdata('User_type') == 2){
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
                                   echo "".$dd->st_name."</td>
                                    <td>".$dd->te_name."</td>
                                    <td>".$dd->c_name."</td>
                                    <td><span class='tag ".$q2."'>".$q."</span></td>
                                    <td>".$dd->room_name."</td>
                                    <td>".$dd->res_todate."</td>
                                    <td>".$dd->res_time_start."</td>
                                    <td>".$dd->res_time_end."</td>
                                    </tr>";
                         }
                         }
                        ?>
 					    </tbody>
						</table>  
                           </div>
                        </div>	
                    </div>
                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="">
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
                                              <?php if($this->session->userdata('User_type') == 1) { ?>
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
                                              <?php }else{ ?>
                                                  <div class="col-md-12">
                                                      <div class="form-group text-danger" id="admin_noteTxt"></div>
                                                  </div>
                                              <?php } ?>
                                              <div class="col-md-12">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal"><?=$this->lang->line('Close');?></button>
                                                  <button type="submit" id="edit_reserv" class="btn btn-primary"><?=$this->lang->line('Save');?></button>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                </div>

                <?php if($this->session->userdata('User_type') == 1) // in case superadmin
                {
                    ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"> <?=$this->lang->line('new_std');?></h4>
                                    <h6 class="card-subtitle"><?php echo $this->lang->line("new_std_mss");?></h6>

                                    <table  class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th><?php echo $this->lang->line("st_name");?></th>
                                            <th><?php echo $this->lang->line("st_reg_date");?></th>
                                            <th><?php echo $this->lang->line("active");?></th>
                                         </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th><?php echo $this->lang->line("st_name");?></th>
                                            <th><?php echo $this->lang->line("st_reg_date");?></th>
                                            <th><?php echo $this->lang->line("active");?></th>
                                         </tr>
                                        </tfoot>
                                        <tbody id="tdatas">
                                            <?php
                                              foreach ($new_std as $new){
                                                  if($new->st_active == 1)
                                                      $xx = "active";
                                                  else
                                                      $xx = "non active";
                                                  ?>
                                             <td><a style="cursor: pointer"
                                                    title= '<?=$new->st_code?>'
                                                    st_name = '<?=$new->st_name?>'
                                                    st_school_code= '<?=$new->st_school_code?>'
                                                    st_class= '<?=$new->st_class?>'
                                                    st_phone1= '<?=$new->st_phone1?>'
                                                    st_phone2= '<?=$new->st_phone2?>'
                                                    st_ID= '<?=$new->st_ID?>'
                                                    st_email= '<?=$new->st_email?>'
                                                    st_town= '<?=$new->st_town?>'
                                                    st_sex= '<?=$new->st_sex?>'
                                                    st_birthdate= '<?=$new->st_birthdate?>'
                                                    st_sub_code= '<?=$new->st_sub_code?>'
                                                    st_price= '<?=$new->st_price?>'
                                                    st_active= '<?=$new->st_active?>'
                                                    st_paymentmethods_code= '<?=$new->st_paymentmethods_code?>'
                                                    st_status_code= '<?=$new->st_status_code?>'
                                                    st_payment_date= '<?=$new->st_payment_date?>' class="Edit_std" data-toggle='modal' data-target='#myModal_std'><?=$new->st_name?></a> </td>
                                            <td><?=$new->st_reg_date?></td>
                                            <td><?=$xx?></td>
                                             <?php }  ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="myModal_std" tabindex="-1" role="dialog" aria-labelledby="">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id=""><?=$this->lang->line("edit_res")?> </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                </div>
                                <div class="modal-body">
                                    <div id="alert"></div>
                                    <form method="post" enctype="multipart/form-data" id="student_form" novalidate >
                                        <input type="hidden" id="_PRIFIX" name="_PRIFIX" value="<?=STUDENT_PRIFIX;?>" />
                                        <input type="hidden" id="curr_codes" name="curr_code" value="" />
                                        <div class="form-body">
                                            <hr class="light-grey-hr"/>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5><?=$this->lang->line('st_name');?> <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" id="st_name" name="st_name" required data-validation-required-message="<?=$this->lang->line('required');?> " />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5><?=$this->lang->line('st_ID');?> <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" id="st_ID" name="st_ID" required data-validation-required-message="<?=$this->lang->line('required');?> " />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5><?=$this->lang->line('st_phone');?> <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" class="form-control phone-inputmask"  id="st_phone1" name="st_phone1" required data-validation-required-message="<?=$this->lang->line('required');?> " />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10"><?=$this->lang->line('st_phone').'2';?></label>
                                                        <input type="text" class="form-control " id="st_phone2" name="st_phone2" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5><?=$this->lang->line('st_email');?></h5>
                                                        <div class="controls">
                                                            <input type="email" class="form-control" id="st_email" name="st_email" data-validation-email-message="<?=$this->lang->line('error_email');?>"	/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5><?=$this->lang->line('st_birthdate');?> <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" class="form-control date-inputmask" id="st_birthdate" name="st_birthdate" placeholder="MM/DD/YYYY" > </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5> <?=$this->lang->line('sc_name');?> <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-control" id="st_school_code" name="st_school_code" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                                                <option value=""><?=$this->lang->line('choose');?></option>
                                                                <?php  draw_lists2("schools" , "sc_code" , "sc_name","sc_active","1"); ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>  <?=$this->lang->line('st_paymentmethods_code');?> <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-control" id="st_paymentmethods_code" name="st_paymentmethods_code" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                                                <option value=""><?=$this->lang->line('choose');?></option>
                                                                <?php  draw_lists2("payment_methods" , "m_code" , "m_name","m_active","1"); ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5> <?=$this->lang->line('st_class');?> <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-control" id="st_class" name="st_class" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                                                <option value=""><?=$this->lang->line('choose');?></option>
                                                                <?php  for($i=1;$i<=12;$i++) { ?>
                                                                    <option value="<?=$i?>"><?=$i?></option>;
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10"><?=$this->lang->line('st_town');?></label>
                                                        <input type="text" class="form-control" id="st_town" name="st_town" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5> <?=$this->lang->line('st_sex');?> <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-control" id="st_sex" name="st_sex" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                                                <option value=""><?=$this->lang->line('choose')?></option>
                                                                <option value="male"><?=$this->lang->line('male')?></option>
                                                                <option value="female"><?=$this->lang->line('female')?></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5> <?=$this->lang->line('st_sub_code');?> <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-control"id="st_sub_code" name="st_sub_code"required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                                                <option value=""> <?=$this->lang->line('choose')?></option>
                                                                <?php  draw_lists2("subscribe_type" , "sub_code" , "sub_name","sub_active","1"); ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5> <?=$this->lang->line('st_status_code');?> <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-control" id="st_status_code" name="st_status_code" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                                                <option value=""> <?=$this->lang->line('choose')?></option>
                                                                <?php   draw_lists("std_status" , "std_code" , "std_name","std_active","1");  ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5> <?=$this->lang->line('st_payment_date');?> <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select class="form-control" id="st_payment_date" name="st_payment_date" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                                                <option value=""> <?=$this->lang->line('choose')?></option>
                                                                <?php   for($i=1;$i<=30;$i++) {  ?>
                                                                    <option value="<?=$i?>"><?=$i?></option>;
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <div class="col-md-12">

                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="custom-control  custom-checkbox">
                                                            <input  type="checkbox" class="st_active custom-control-input " id="st_active" name="st_active" checked  />
                                                            <label class="custom-control-label" for="st_active"> <?=$this->lang->line('active');?></label>
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
              <?php } ?>



					
			
 <script type="text/javascript">
	  
	$(document).ready(function(e) {
		 
           $("#reser_form").submit(function(e){
			e.preventDefault();
 			 var formData = new FormData(this);	
 			 var curr_code= $("#curr_code").val();
			 //$("#edit_reserv").attr('disabled',true);
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
					 //$("#edit_reserv").attr('disabled',false);
					 $("#edit_reserv").text('<?=$this->lang->line('Save');?>');
					 $("#alert").html('<strong>'+data+'</strong>');
   				} ,
				cache: false,
				contentType: false,
				processData: false
			});
			 return false; 
 		});
        $("#student_form").submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
            var curr_code= $("#curr_code").val();
            $("#btn_action").attr('disabled',true);
            $("#btn_action").text('<?=$this->lang->line('loading');?>');
            $.ajax({
                url : '<?=base_url()?>Students_ci/AddEdit_student' ,
                method: 'POST',
                data: formData,
                //async:false,
                success: function(data)
                {
                    $("#btn_action").attr('disabled',false);
                    $("#btn_action").text('<?=$this->lang->line('Save');?>');
                    var sp = data.split('╩');
                    swal(data).then((value) => {
                        location.reload();
                        return false;
                    });
                } ,
                cache: false,
                contentType: false,
                processData: false
            });
            return false;
        });
		
		 $("#mess_form").submit(function(e){
			e.preventDefault();
 			 var formData = new FormData(this);	
 			 var curr_code= $("#curr_code").val();
			 $("#send_mess").attr('disabled',true);
			 $("#send_mess").text('<?=$this->lang->line('loading');?>');
			 $.ajax({
				url : '<?=base_url()?>home/sendmess' ,
				method: 'POST', 
				data: formData, 
				//async:false,
				success: function(data)
				{
					
					if(data == 2)
						$("#send_mess").hide('fast')
					
					if(data ==' تمت العملية بنجاح ')
					{
						$("#myModal").modal('hide');
						setTimeout(function(){location.reload()},700);
					}
					 $("#send_mess").attr('disabled',false);
					 $("#send_mess").text('<?=$this->lang->line('Save');?>');
					 $("#alert").html('<strong>'+data+'</strong>');
   				} ,
				cache: false,
				contentType: false,
				processData: false
			});
			 return false; 
 		});

        $(document).on('click','.Edit_std',function(){
            var pk = $(this).attr('title');
            var st_name = $(this).attr('st_name');
            var st_school_code = $(this).attr('st_school_code');
            var st_class = $(this).attr('st_class');
            var st_phone1 = $(this).attr('st_phone1');
            var st_phone2 = $(this).attr('st_phone2');
            var st_ID = $(this).attr('st_ID');
            var st_email = $(this).attr('st_email');
            var st_town = $(this).attr('st_town');
            var st_sex = $(this).attr('st_sex');
            var st_birthdate = $(this).attr('st_birthdate');
            var st_sub_code = $(this).attr('st_sub_code');
            var st_price = $(this).attr('st_price');
            //$("#st_active").parent().parent().addClass('validate');
            //	$("#st_active").val(st_active);
            var st_active = $(this).attr('st_active');
            var st_paymentmethods_code = $(this).attr('st_paymentmethods_code');
            var st_status_code = $(this).attr('st_status_code');
            var st_payment_date = $(this).attr('st_payment_date');

            $("#curr_codes").val(pk);
            //fetch_per_params('<?//=base_url()?>//Common/fetch_this_photos' , '#this_photos'  , pk ,_PREFIX(),1);//fetch all users
            //$("#this_photos").css("display","block");
            $("#st_name").val(st_name);
            $("#st_school_code").val(st_school_code);
            $("#st_class").val(st_class);
            $("#st_phone1").val(st_phone1);
            $("#st_phone2").val(st_phone2);
            $("#st_ID").val(st_ID);
            $("#st_email").val(st_email);
            $("#st_town").val(st_town);
            $("#st_sex").val(st_sex);
            $("#st_birthdate").val(st_birthdate);
            $("#st_sub_code").val(st_sub_code);
            $("#st_price").val(st_price);
             $("#st_paymentmethods_code").val(st_paymentmethods_code);
            $("#st_status_code").val(st_status_code);
            $("#st_payment_date").val(st_payment_date);
            if(st_active == 1)

                $("#st_active").attr('checked', true);
            else
                $("#st_active").attr('checked', false);

            $("#btn_add").val('<?php echo $this->lang->line('update_btn');?>');
            $("#btn_add").val('<?php echo $this->lang->line('update_btn');?>');
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
			   $("#admin_noteTxt").html("<?=$this->lang->line('admin_notice')?>: "+res_admin_note);
			   $("#reser_form input[type=text] , input[type=number]").attr("disabled",true);
			   $("#reser_form select").attr("disabled",true);
			   $("#res_is_confirmed").attr("disabled",false);
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
