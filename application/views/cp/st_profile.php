    <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">الملف الشخصي ل<?php echo $st_name?> </h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">الصفحة الرئيسية</a></li>
                                <li class="breadcrumb-item active">الصفحة الشخصية </li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="user-bg">
                                <?php
                                 if(!empty($st_photo))
                                 {
                                ?>
                                <img width="100%" height="350" alt="user" src="<?=base_url().$st_photo?>" />
                            <?php }
                            else {
                                     if($st_sex == 'male')
                                         $pic = "male_ch.png";
                                      else
                                        $pic = "female_ch.png";
                                     ?>
                                <img width="100%" height="350" alt="user" src="<?=base_url()?>public/img/<?=$pic?>" />
                                <?php
                            }?>
                            </div>
                            <div class="card-body">
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-6 border-right">
                                        <strong><?=$this->lang->line('st_name')?></strong>
                                        <p><?php echo $st_name?></p>
                                    </div>
                                    <div class="col-md-6"><strong><?=$this->lang->line('st_class')?></strong>
                                        <p><?php echo $st_class?></p>
                                    </div>
                                </div>
                                <hr>
                                <!-- /.row -->
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-6 border-right"><strong><?=$this->lang->line('User_email')?></strong>
                                        <p><?php echo $st_email?></p>
                                    </div>
                                    <div class="col-md-6"><strong><?=$this->lang->line('st_phone')?></strong>
                                        <p><?php echo $st_phone1?>  -- <?php echo $st_phone2?></p>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <hr>
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12"><strong><?=$this->lang->line('st_town')?></strong>
                                        <p><?=$st_town?>.</p>
                                    </div>
                                </div>
                                <hr>
                                <br/>
<!--                                <div class="row m-t-15">-->
<!--                                    <div class="col-md-4 col-sm-4 text-center">-->
<!--                                        <p class="text-purple"><i class="ti-facebook"></i></p>-->
<!--                                        <h1>258</h1> </div>-->
<!--                                    <div class="col-md-4 col-sm-4 text-center">-->
<!--                                        <p class="text-blue"><i class="ti-twitter"></i></p>-->
<!--                                        <h1>125</h1> </div>-->
<!--                                    <div class="col-md-4 col-sm-4 text-center">-->
<!--                                        <p class="text-danger"><i class="ti-google"></i></p>-->
<!--                                        <h1>140</h1> </div>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">الاعدادات</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">الحجوزات</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">المدفوعات</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#msgs" role="tab">ارشيف الرسائل ( <?=$all_msg_count->ct?> )</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6 border-right"> <strong><?=$this->lang->line('is_SMS_sub')?></strong>
                                                <br>
                                                <p class="text-muted">
                                                  <input type="checkbox" <?=$st_SMS_sub == 1 ? "checked=checked":""?> value="<?=$st_code?>" class="form-control" id="chk_st_SMS_sub" name="chk_st_SMS_sub" />
                                                </p>
                                            </div>
                                        </div>
                                    </div>
<!--                                    <div class="card-body">-->
<!--                                        <div class="profiletimeline">-->
<!--                                            <div class="sl-item">-->
<!--                                                <div class="sl-left"> <img src="dist/images/users/13.jpg" alt="user" class="img-circle" /> </div>-->
<!--                                                <div class="sl-right">-->
<!--                                                    <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>-->
<!--                                                        <p>assign a new task <a href="javascript:void(0)"> Design weblayout</a></p>-->
<!--                                                        <div class="row">-->
<!--                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="--><?//=base_url()?><!--public/assets/images/big/img1.jpg" class="img-responsive radius" /></div>-->
<!--                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="--><?//=base_url()?><!--public/assets/images/big/img2.jpg" class="img-responsive radius" /></div>-->
<!--                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="--><?//=base_url()?><!--public/assets/images/big/img3.jpg" class="img-responsive radius" /></div>-->
<!--                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="--><?//=base_url()?><!--public/assets/images/big/img4.jpg" class="img-responsive radius" /></div>-->
<!--                                                        </div>-->
<!--                                                        <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="sl-item border-top">-->
<!--                                                <div class="sl-left"> <img src="--><?//=base_url()?><!--public/dist/images/users/13.jpg" alt="user" class="img-circle" /> </div>-->
<!--                                                <div class="sl-right">-->
<!--                                                    <div> <a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>-->
<!--                                                        <div class="m-t-20 row">-->
<!--                                                            <div class="col-md-3 col-xs-12"><img src="--><?//=base_url()?><!--public/assets/images/big/img1.jpg" alt="user" class="img-responsive radius" /></div>-->
<!--                                                            <div class="col-md-9 col-xs-12">-->
<!--                                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> <a href="javascript:void(0)" class="btn btn-success"> Design weblayout</a></div>-->
<!--                                                        </div>-->
<!--                                                        <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="sl-item border-top">-->
<!--                                                <div class="sl-left"> <img src="--><?//=base_url()?><!--public/dist/images/users/13.jpg" alt="user" class="img-circle" /> </div>-->
<!--                                                <div class="sl-right">-->
<!--                                                    <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>-->
<!--                                                        <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>-->
<!--                                                    </div>-->
<!--                                                    <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="sl-item border-top">-->
<!--                                                <div class="sl-left"> <img src="--><?//=base_url()?><!--public/dist/images/users/13.jpg" alt="user" class="img-circle" /> </div>-->
<!--                                                <div class="sl-right">-->
<!--                                                    <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>-->
<!--                                                        <p class="m-t-10">-->
<!--                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt-->
<!--                                                        </p>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 border-right"> <strong><?=$this->lang->line('User_fullname')?></strong>
                                                <br>
                                                <p class="text-muted"><?=$st_name?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 border-right"> <strong><?=$this->lang->line('st_phone')?></strong>
                                                <br>
                                                <p class="text-muted"><?=$st_phone1?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 border-right"> <strong><?=$this->lang->line('User_email')?></strong>
                                                <br>
                                                <p class="text-muted"><?=$st_email?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong><?=$this->lang->line('st_town')?></strong>
                                                <br>
                                                <p class="text-muted"><?=$st_town?></p>
                                            </div>
                                        </div>
                                        <hr>
                                         <div class="row">
                                             <div class="col-md-4">
                                                 <div class="form-group">
                                                     <h5><?=$this->lang->line('res_teach_code');?><span class="text-danger">*</span></h5>
                                                     <div class="controls">
                                                         <select class="form-control" id="res_teach_code" name="res_teach_code">
                                                             <option value=""><?=$this->lang->line('choose');?></option>
                                                             <?php
                                                                draw_lists2("teachers" , "te_code" , "te_name" ,"te_active","1");
                                                             ?>
                                                         </select>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-md-3">
                                                 <div class="form-group">
                                                     <h5><?=$this->lang->line('res_todatef');?><span class="text-danger">*</span></h5>
                                                     <div class="controls">
                                                         <input type='text'  class="form-control" id="min-date12" name="res_todatef"  required data-validation-required-message="<?=$this->lang->line('required');?> " />              </div>
                                                 </div>
                                             </div>
                                             <div class="col-md-3">
                                                 <div class="form-group">
                                                     <h5><?=$this->lang->line('res_todatet');?><span class="text-danger">*</span></h5>
                                                     <div class="controls">
                                                         <input type='text'  class="form-control" id="min-date13" name="res_todatet"  required data-validation-required-message="<?=$this->lang->line('required');?> " />              </div>
                                                 </div>
                                             </div>
                                             <div class="col-md-2">
                                                 <div class="form-group">
                                                     <div class="controls">
                                                         <button type='button' code="<?=$this->uri->segment('3');?>"  class="btn btn-primary" id="btn_filterreservation" name="btn_filterreservation"><i class="fa fa-search"></i> </button>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-12">
                                                <h4 class="card-title"> <?=$this->lang->line('Last_reservations');?></h4>
                                                  <h6 class="card-subtitle"><?php echo $this->lang->line("Last_reservations_mess");?></h6>
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
                                                                <th><?php echo $this->lang->line("res_teacher_percent");?></th>
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
                                                                <th><?php echo $this->lang->line("res_teacher_percent");?></th>

                                                            </tr>
                                                            </tfoot>
                                                            <tbody id="tdata_reserv">
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
                                                                 echo "
					                                        </tr>";
                                                            }
                                                            ?>
                                                            </tbody>
                                                        </table>
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
                                                            </div>
                                                        </form>
                                                    </div>
                                             </div>
                                         </div>
                                       </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                          <div class="row">
                                                   <div class="col-md-3 col-xs-6 border-right"> <strong><?=$this->lang->line('User_fullname')?></strong>
                                                      <br>
                                                      <p class="text-muted"><?=$st_name?></p>
                                                  </div>
                                                  <div class="col-md-3 col-xs-6 border-right"> <strong><?=$this->lang->line('st_phone')?></strong>
                                                      <br>
                                                      <p class="text-muted"><?=$st_phone1?></p>
                                                  </div>
                                                  <div class="col-md-3 col-xs-6 border-right"> <strong><?=$this->lang->line('User_email')?></strong>
                                                      <br>
                                                      <p class="text-muted"><?=$st_email?></p>
                                                  </div>
                                                  <div class="col-md-3 col-xs-6"> <strong><?=$this->lang->line('st_town')?></strong>
                                                      <br>
                                                      <p class="text-muted"><?=$st_town?></p>
                                                  </div>
                                               <hr>
                                              <div class="col-md-4">
                                                  <div class="form-group">
                                                      <h5><?=$this->lang->line('p_datef');?><span class="text-danger">*</span></h5>
                                                      <div class="controls">
                                                          <input type='text'  class="form-control" id="min-date10" name="p_datef"  required data-validation-required-message="<?=$this->lang->line('required');?> " />              </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="form-group">
                                                      <h5><?=$this->lang->line('p_datet');?><span class="text-danger">*</span></h5>
                                                      <div class="controls">
                                                          <input type='text'  class="form-control" id="min-date11" name="p_datet"  required data-validation-required-message="<?=$this->lang->line('required');?> " />              </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <div class="form-group">
                                                       <div class="controls">
                                                          <button type='button' code="<?=$this->uri->segment('3');?>"   class="btn btn-primary" id="btn_filterpayment" name="btn_filterpayment"><i class="fa fa-search"></i> </button>
                                                      </div>
                                                  </div>
                                              </div>
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title"> <?=$this->lang->line('thSt_Payments_rep');?></h4>
                                                        <h6 class="card-subtitle"><?php echo $this->lang->line("thSt_Payments_rep_mess");?></h6>

                                                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                                            <thead>
                                                            <tr>
                                                                <th><?php echo $this->lang->line("st_name");?></th>
                                                                <th><?php echo $this->lang->line("p_date");?></th>
                                                                <th><?php echo $this->lang->line("st_paymentmethods_code");?></th>
                                                                <th><?php echo $this->lang->line("amount");?></th>
                                                                <th><?php echo $this->lang->line("iinfo");?></th>
                                                             </tr>
                                                            </thead>
                                                            <tfoot>
                                                            <tr>
                                                                <th><?php echo $this->lang->line("st_name");?></th>
                                                                <th><?php echo $this->lang->line("p_date");?></th>
                                                                <th><?php echo $this->lang->line("st_paymentmethods_code");?></th>
                                                                <th><?php echo $this->lang->line("amount");?></th>
                                                                <th><?php echo $this->lang->line("iinfo");?></th>
                                                             </tr>
                                                            </tfoot>
                                                            <tbody id="tdata_payment">
                                                            <?php foreach($ddd as   $dd )
                                                            { ?>
                                                                <tr title=''>
                                                                    <td><?=$dd->st_name?></td>
                                                                    <td><?=$dd->p_date?></td>
                                                                    <td><?=$dd->m_name?></td>
                                                                    <td><?=$dd->amount?></td>
                                                                    <td><?=$dd->info?></td>
                                                                 </tr>
                                                            <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                 </div>
                            </div>
                                <div class="tab-pane" id="msgs" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                             <div class="col-md-12 col-xs-6 border-right">
                                                 <h4 class="card-title"> <?=$this->lang->line('privouse_msg');?></h4>
                                                <table  class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" cellspacing="0" width="100%">
                                                    <thead>
                                                    <tr>
                                                        <th><?php echo $this->lang->line("stdn_msg");?></th>
                                                        <th><?php echo $this->lang->line("stdn_send_date");?></th>
                                                        <th><?php echo $this->lang->line("stdn_send_type");?></th>
                                                        <th><?php echo $this->lang->line("from_person_name");?></th>
                                                     </tr>
                                                    </thead>
                                                    <tfoot>
                                                    <tr>
                                                        <th><?php echo $this->lang->line("stdn_msg");?></th>
                                                        <th><?php echo $this->lang->line("stdn_send_date");?></th>
                                                        <th><?php echo $this->lang->line("stdn_send_type");?></th>
                                                        <th><?php echo $this->lang->line("from_person_name");?></th>
                                                     </tr>
                                                    </tfoot>
                                                    <tbody id="tdata_reserv">
                                                    <?php

                                                    foreach($std_msgs as  $std_msg )
                                                    {
                                                        echo "<tr> 
                                                                <td>".$std_msg->stdn_msg."</td>
                                                                <td>".$std_msg->stdn_send_date."</td>
                                                                <td>".$std_msg->stdn_send_type."</td>
                                                                <td>".$std_msg->from_person_name."</td>";
                                                         echo " </tr>";
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
                    <!-- Column -->
                    </div>
                </div>
                <!-- row -->

    <script type="text/javascript">

        $(document).ready(function(e) {
            $("#chk_st_SMS_sub").change(function (e) {

                if(confirm('<?=$this->lang->line('are_you_sure')?>')) {
                    var cod = $(this).val();
                    var c = 0;
                    if ($(this).is(":checked"))
                        c = 1;

                    $.ajax({
                        url: "<?=base_url()?>Students_ci/SMS_sub_update",
                        type: "POST",
                        data: {
                            random: Math.random(),
                            codepost: cod,
                            chkpost: c
                        },
                        success: function (data) {
                            swal(data);
                        }
                    });
                }
            });
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
            $("#btn_filterreservation").click(function (e) {
                 var df = $("#min-date12").val();
                 var dt = $("#min-date13").val();
                 var res_teach_code = $("#res_teach_code").val();
                 var st_codev = $(this).attr("code");
                 $.ajax({
                     url:"<?=base_url()?>Students_ci/filter_res",
                     type:"POST",
                     data:{random:Math.random(),
                         df_postf : df,
                         dt_postt : dt,
                         st_codepost  : st_codev ,
                         res_teach_codepost : res_teach_code
                     },
                     success:function (data) {
                         $("#tdata_reserv").html(data);
                     }
                 });
             });
            $("#btn_filterpayment").click(function (e) {
                 var df = $("#min-date10").val();
                 var dt = $("#min-date11").val();
                 var st_codev = $(this).attr("code");
                 $.ajax({
                     url:"<?=base_url()?>Students_ci/filter_payments",
                     type:"POST",
                     data:{random:Math.random(),
                         df_postf : df,
                         dt_postt:dt,
                         st_codepost  : st_codev
                     },
                     success:function (data) {
                         $("#tdata_payment").html(data);
                     }
                 });
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