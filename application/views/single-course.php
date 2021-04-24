  <div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom" style="background-image:url(<?=base_url()?>public/frontend/img/parallax/img6.png);">

                    <div class="nicdark_section nicdark_bg_greydark_alpha_gradient_2">
                         <!--start nicdark_container-->
     <div class="nicdark_container nicdark_clearfix">
             <div class="nicdark_section nicdark_height_200"></div>
               <div class="nicdark_width_50_percentage nicdark_width_100_percentage_all_iphone nicdark_float_left">
                 <strong class="nicdark_color_white nicdark_font_size_40 nicdark_first_font"><?=$newest_dawrat->crs_name?></strong>
                   <div class="nicdark_section nicdark_height_20"></div>
                 <div class="nicdark_display_table nicdark_float_left">
                    <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle" width="30" src="<?=base_url()?>public/frontend/img/icons/icon-calendar.svg">
                    <h3 class=" nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle"><?=$newest_dawrat->crs_date?></h3>
                    <img alt="" class="nicdark_margin_right_10 nicdark_margin_left_20 nicdark_display_table_cell nicdark_vertical_align_middle" width="30" src="<?=base_url()?>public/frontend/img/icons/icon-clock.svg">
                    <h3 class="nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle "><?=$newest_dawrat->crs_hours.$this->lang->line('hours');?></h3>
                </div>

                    <div class="nicdark_section nicdark_height_20"></div>
               </div>


              <?php if($newest_dawrat->crs_show_price ==1){?>
                             <div class="nicdark_width_50_percentage nicdark_width_100_percentage_all_iphone nicdark_display_none_all_iphone nicdark_float_left nicdark_text_align_right">
                                 <div class="nicdark_section nicdark_height_40"></div>
                                 <div class="nicdark_display_table nicdark_float_right">
                                     <div class="nicdark_display_table_cell nicdark_vertical_align_bottom">
                                        <h5 class="nicdark_font_size_20 nicdark_color_white"><?=$this->lang->line('for_person');?> / </h5>
                                    </div>
                                     <div class="nicdark_display_table_cell nicdark_vertical_align_top">
                                        <h5 class="nicdark_font_size_20 nicdark_color_white nicdark_margin_5"><?=$this->lang->line('shekel')?></h5>
                                    </div>
                                     <div class="nicdark_display_table_cell nicdark_vertical_align_bottom">
                                        <h1 class=" nicdark_color_white nicdark_font_size_60 nicdark_line_height_50"><?=$newest_dawrat->crs_price;?></h1>
                                    </div>
                                 </div>
                              </div>
                     <?php }?>


                        </div>
                        <!--end container-->

                    </div>

                </div>




               
                    <div class="nicdark_section nicdark_bg_grey nicdark_border_bottom_1_solid_grey">

                        <!--start nicdark_container-->
                        <div class="nicdark_container nicdark_clearfix">

                            <div class="grid grid_12">

                                <a href="<?=base_url()?>">الرئيسية</a>
                                <img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10" src="<?=base_url()?>public/frontend/img/icons/icon-next-grey.svg">
                                <a href="#"><?=$newest_dawrat->trc_name?></a>
                                <img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10" src="<?=base_url()?>public/frontend/img/icons/icon-next-grey.svg">
                                <a href="#"><?=$newest_dawrat->crs_name?></a>
                          </div>

                    
                        </div>
                        <!--end container-->

                    </div>




                    <div class="nicdark_section nicdark_height_50"></div>
                     <div class="nicdark_section">
                         <!--start nicdark_container-->
                        <div class="nicdark_container nicdark_clearfix">
                             <div class="nicdark_width_66_percentage nicdark_width_100_percentage_ipad_port nicdark_width_100_percentage_all_iphone nicdark_float_left">
                                 <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">
                                     <h1><?=$newest_dawrat->crs_name?></h1>
                                    <div class="nicdark_section nicdark_height_20"></div>
                                    <div class="nicdark_width_25_percentage nicdark_width_50_percentage_all_iphone nicdark_float_left">
                                        <div class="nicdark_display_table nicdark_float_left">
                                            <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                                                <img alt="" class="nicdark_margin_right_10 nicdark_border_radius_100_percentage" width="40" src="<?=base_url()?>public/frontend/img/avatar/avatar-chef-1.png">
                                            </div>
                                            <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                                                <p class="nicdark_font_size_13"><?=$this->lang->line("trainers");?></p>
                                                <div class="nicdark_section nicdark_height_5"></div>
                                                <h6 class="">
                                                    <?php
                                                      foreach($trainers as $trn)
                                                      {
                                                          $x .= $trn->te_name." - ";
                                                      }
                                                      echo trim($x,' - ');

                                                    ?>
                                                </h6>
                                            </div>

                                        </div> 
                                    </div>
                                    <div class="nicdark_width_25_percentage nicdark_width_50_percentage_all_iphone nicdark_float_left">

                                        <div class="nicdark_section nicdark_height_5"></div>
                                        <div class="nicdark_display_table nicdark_float_left">
                                            
                                            <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                                                <img alt="" class="nicdark_margin_right_10" width="30" src="<?=base_url()?>public/frontend/img/icons/icon-category-grey.svg">
                                            </div>
                                            <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                                                <p class="nicdark_font_size_13"><?=$this->lang->line('category');?></p>
                                                <div class="nicdark_section nicdark_height_5"></div>
                                                <h5 class=""><?=$newest_dawrat->trc_name;?></h5>
                                            </div>
                                         </div>
                                    </div>
                                    
                                    <div class="nicdark_width_50_percentage nicdark_display_none_all_iphone nicdark_float_right">

                                        <div class="nicdark_section nicdark_height_5"></div>
                                        <div class="nicdark_section nicdark_height_5"></div>
                                        
                                        <div class="nicdark_display_table nicdark_float_right">
                                            <a href="#"><img alt="" class="" width="30" src="<?=base_url()?>public/frontend/img/icons/icon-print-grey.svg"></a>
                                        </div> 
                                    </div>
                           <div class="nicdark_section nicdark_height_20"></div>
                                     <div class="nicdark_section nicdark_position_relative">
                                         <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                             <!-- Indicators -->
                                             <ol class="carousel-indicators">

                                                 <?php
                                                 $c = 0;
                                                 foreach($sub_photos as $sbphoto){?>
                                                 <li data-target="#myCarousel" data-slide-to="<?=$c?>" <?php if($c ==0) echo ' class="active"';?>></li>

                                                     <?php $c++;}?>
                                             </ol>

                                             <!-- Wrapper for slides -->
                                             <div class="carousel-inner">

                                                 <?php
                                                 $c = 1;
                                                 foreach($sub_photos as $sbphoto){?>
                                                 <div class="item <?php if($c ==1) echo 'active';else echo ''; ?>">
                                                     <img  src="<?=base_url().$sbphoto[0]->P_photo?>" style="width:100%;max-height: 430px">
                                                 </div>
                                                     <?php $c++;}?>

                                             </div>

                                             <!-- Left and right controls -->
                                             <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                 <span class="glyphicon glyphicon-chevron-left"></span>
                                                 <span class="sr-only">Previous</span>
                                             </a>
                                             <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                 <span class="glyphicon glyphicon-chevron-right"></span>
                                                 <span class="sr-only">Next</span>
                                             </a>
                                         </div>
                                     </div>
                                </div>
                        <div class="nicdark_section nicdark_height_40"></div>
                           <div class="nicdark_section">
                                <!--START tab-->
                                        <div class="nicdark_tabs">
                                            <ul class="nicdark_list_style_none nicdark_margin_0 nicdark_padding_0 nicdark_section nicdark_border_bottom_2_solid_grey">
                                                <li class="nicdark_display_inline_block"><h4><a class="nicdark_outline_0 nicdark_padding_20 nicdark_display_inline_block nicdark_first_font nicdark_color_greydark" href="#tabs-1"><?=$this->lang->line('Descriptions');?></a></h4></li>
                                                <li class="nicdark_display_inline_block"><h4><a class="nicdark_outline_0 nicdark_padding_20 nicdark_display_inline_block nicdark_first_font nicdark_color_greydark" href="#tabs-2"><?=$this->lang->line('Programs');?></a></h4></li>
                                                <li class="nicdark_display_inline_block"><h4><a class="nicdark_outline_0 nicdark_padding_20 nicdark_display_inline_block nicdark_first_font nicdark_color_greydark" href="#tabs-3"><?=$this->lang->line('trainer');?></a></h4></li>
                                                <li class="nicdark_display_inline_block"><h4><a class="nicdark_outline_0 nicdark_padding_20 nicdark_display_inline_block nicdark_first_font nicdark_color_greydark" href="#tabs-4"><?=$this->lang->line('comments');?> </a></h4></li>
                                                <li class="nicdark_display_inline_block"><h4><a class="nicdark_outline_0 nicdark_padding_20 nicdark_display_inline_block nicdark_first_font nicdark_color_greydark" href="#tabs-5"><?=$this->lang->line('rate_corse');?></a></h4></li>
                                                <li class="nicdark_display_inline_block"><h4><a class="nicdark_outline_0 nicdark_padding_20 nicdark_display_inline_block nicdark_first_font nicdark_color_greydark" href="#tabs-6"><?=$this->lang->line('statistics');?></a></h4></li>
                                            </ul>

                                            <div class="nicdark_section nicdark_height_40"></div>

                                            <div class="nicdark_section" id="tabs-1">

                                                <h3><strong><?=$this->lang->line('corse_desc');?></strong></h3>
                                                <div class="nicdark_section nicdark_height_20"></div>
                                                <p><?=$newest_dawrat->crs_details?></p>
                                                <div class="nicdark_section nicdark_height_40"></div>
<!--                                                <h3><strong>Requirements</strong></h3>-->
<!--                                                <div class="nicdark_section nicdark_height_20"></div>-->
<!--                                                <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum ligula libero, feugiat faucibus mattis eget, pulvinar et ligula.</p>-->
<!--                                                <div class="nicdark_section nicdark_height_50"></div>-->
                                                
                                                <!--start tag-->
                                                <div class="nicdark_section">
                                                    <a class="nicdark_display_inline_block nicdark_padding_8 nicdark_first_font nicdark_margin_right_10 nicdark_color_greydark nicdark_padding_left_0" href="#"><?=$this->lang->line('Tags');?> :</a>
                                                    <?php $keys = explode(',',$newest_dawrat->crs_keywords);
                                                        for($k=0;$k<=count($keys)-1;$k++)
                                                        {
                                                    ?>
                                                    <a class="nicdark_display_inline_block nicdark_font_size_13 nicdark_border_1_solid_grey nicdark_padding_8 nicdark_border_radius_3 nicdark_margin_10" href="#"># <?=$keys[$k]?></a>
                                                    <?php } ?>

                                                </div>
                                                <!--end tag-->

                                                <div class="nicdark_section nicdark_height_30"></div>

                                                <!--start social-->
                                                <div class="nicdark_section">
                                                    <a href="#"><img alt="" width="40" class="nicdark_margin_right_10" src="<?=base_url()?>public/frontend/img/icons/icon-facebook-color.svg"></a>
                                                    <a href="#"><img alt="" width="40" class="nicdark_margin_right_10" src="<?=base_url()?>public/frontend/img/icons/icon-twitter-color.svg"></a>
                                                    <a href="#"><img alt="" width="40" class="nicdark_margin_right_10" src="<?=base_url()?>public/frontend/img/icons/icon-pinterest-color.svg"></a>
                                                    <a href="#"><img alt="" width="40" class="nicdark_margin_right_10" src="<?=base_url()?>public/frontend/img/icons/icon-linkedin-color.svg"></a>
                                                    <a href="#"><img alt="" width="40" class="nicdark_margin_right_10" src="<?=base_url()?>public/frontend/img/icons/icon-google-color.svg"></a>
                                                    <a href="#"><img alt="" width="40" class="nicdark_margin_right_10" src="<?=base_url()?>public/frontend/img/icons/icon-mail-color.svg"></a>
                                                </div>
                                                <!--end-->

                                            </div>
                                            <div class="nicdark_section" id="tabs-2">

                                                <!--START program-->
                                                <h3><strong><?=$this->lang->line('Programs');?></strong></h3>
                                                <div class="nicdark_section nicdark_height_30"></div>

                                                <div class="nicdark_section">

                                                    <?php foreach ($sub_docs as $sd){?>
                                                    <div class="nicdark_section nicdark_border_top_1_solid_grey nicdark_padding_15 nicdark_box_sizing_border_box">
                                                        <div class="nicdark_width_15_percentage nicdark_width_100_percentage_responsive nicdark_float_left">
                                                            <table>
                                                                <tr>
                                                                    <td><img alt="" width="20" src="<?=base_url()?>public/frontend/img/icons/icon-file-green.svg"></td>
                                                                    <td><span class="nicdark_color_grey nicdark_first_font nicdark_font_size_12 nicdark_margin_left_10"><?=$sd[0]->P_title_ar?></span></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="nicdark_width_75_percentage nicdark_width_100_percentage_responsive nicdark_float_left">
                                                            <h4 class="nicdark_padding_5 nicdark_second_font"><?=$this->lang->line('file')?></h4>
                                                        </div>
                                                        <div class="nicdark_width_10_percentage nicdark_width_100_percentage_responsive nicdark_float_left nicdark_text_align_right nicdark_text_align_left_responsive nicdark_margin_top_5_responsive">
                                                            <a class="nicdark_display_inline_block nicdark_color_white nicdark_bg_orange nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13" target="_blank" href="<?=base_url().$sd[0]->P_photo?>"><?=$this->lang->line('previews')?></a>
                                                        </div>
                                                    </div>
                                                    <?php } ?>


                                                </div>

                                                <!--END program-->

                                            </div>
                                            <div class="nicdark_section" id="tabs-3">
                        <h3><strong><?=$this->lang->line('Our_Main_Teachers');?></strong></h3>
                        <div class="nicdark_section nicdark_height_30"></div>
                          <div class="nicdark_section">
                              <!--START teacher-->
                                  <?php
                                  $techs = $this->db->query("select * from teachers_trainigs,
                                                                           teachers,
                                                                           subject_photos,
                                                                           photos 
                                                              where   teachers_trainigs.tt_te_code =teachers.te_code
                                                              and     subject_photos.Photo_id  = photos.P_code
                                                              and     subject_photos.Rcu_id  = teachers.te_code
                                                              and     subject_photos.prefix_type = '".TEACHER_PRIFIX."'
                                                              and     subject_photos.is_main  = 1
                                                              and     subject_photos.S_active = 1
                                                              and     teachers_trainigs.tt_crs_code = '".$newest_dawrat->crs_code."'
                                                             ")->result();
                                                foreach ($techs as $ttc){
                                    ?>
                                                    <div class="nicdark_section nicdark_border_top_1_solid_grey nicdark_padding_40_20 nicdark_box_sizing_border_box">
                                                       <div class="nicdark_display_table nicdark_float_left">
                                                             <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                                                                <img alt="" class="nicdark_width_50_all_iphone nicdark_margin_right_20 nicdark_border_radius_100_percentage " width="100" src="<?=base_url().$ttc->P_photo?>">
                                                            </div>

                                                            <div class="nicdark_display_table_cell nicdark_vertical_align_middle">
                                                                <h3 class=""><strong><?=$ttc->te_name?></strong></h3>
                                                                <div class="nicdark_section nicdark_height_5"></div>
                                                                <h5 class="nicdark_color_grey"><?=$newest_dawrat->crs_name?></h5>
                                                                <div class="nicdark_section nicdark_height_20"></div>

                                                                <div class="nicdark_section">
                                                                    <img alt="" width="25" class="nicdark_margin_right_10" src="<?=base_url()?>public/frontend/img/icons/icon-facebook-color.svg">
                                                                    <img alt="" width="25" class="nicdark_margin_right_10" src="<?=base_url()?>public/frontend/img/icons/icon-twitter-color.svg">
                                                                    <img alt="" width="25" class="nicdark_margin_right_10" src="<?=base_url()?>public/frontend/img/icons/icon-pinterest-color.svg">
                                                                    <img alt="" width="25" class="nicdark_margin_right_10" src="<?=base_url()?>public/frontend/img/icons/icon-linkedin-color.svg">
                                                                </div>
                                                             </div>
                                                         </div>
                                                         <div class="nicdark_section nicdark_height_20"></div>
                                                         <p class="nicdark_section"><!--here desc about teacher--></p>
                                                     </div>
                                                      <?php } ?>
                                                    <!--END teacher-->
                                                 </div>
                                             </div>
                                            <div class="nicdark_section" id="tabs-4">
                                                <div class="nicdark_section">
                                                    <h3><strong><?=$this->lang->line('comments');?> </strong></h3>
                                                    <div class="nicdark_section nicdark_height_30"></div>
                                                    <div class="nicdark_section nicdark_border_top_1_solid_grey nicdark_padding_40_20 nicdark_box_sizing_border_box">
                                                        <h3><strong><?=$this->lang->line('addcomments');?></strong></h3>
                                                        <div class="nicdark_section nicdark_height_30"></div>
                                                        <div class="nicdark_section nicdark_box_sizing_border_box">
                                                             <!--form-->
                                                            <form method="post" id="comm_form" name="comm_form">
                                                                <div class="nicdark_section nicdark_height_30" id="alertcomm"></div>
                                                                <input type="hidden" value="<?=$newest_dawrat->crs_code?>" id="crs_code" name="crs_code">
                                                                <div class="nicdark_section">
                                                                    <div class="nicdark_width_50_percentage nicdark_padding_10 nicdark_padding_left_0 nicdark_box_sizing_border_box nicdark_float_left">
                                                                        <input type="text" id="comm_name" name="comm_name" class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0"placeholder="الاسم الشخصي" required>
                                                                    </div>
                                                                    <div class="nicdark_width_50_percentage nicdark_padding_10 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left">
                                                                        <input type="text" id="comm_name1" name="comm_name1" class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0"placeholder="اسم العائلة" required>
                                                                    </div>
                                                                </div>
                                                                <div class="nicdark_section">
                                                                    <div class="nicdark_width_50_percentage nicdark_padding_10 nicdark_padding_left_0 nicdark_box_sizing_border_box nicdark_float_left">
                                                                        <input id="comm_email" name="comm_email" class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0" type="email" placeholder="البريد الالكتروني">
                                                                    </div>
                                                                    <div class="nicdark_width_50_percentage nicdark_padding_10 nicdark_padding_right_0 nicdark_box_sizing_border_box nicdark_float_left">
                                                                        <input id="comm_title" name="comm_title" class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="الموضوع" required>
                                                                    </div>
                                                                </div>
                                                                <div class="nicdark_section">
                                                                    <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_padding_right_0 nicdark_padding_left_0 nicdark_box_sizing_border_box nicdark_float_left">
                                                                        <textarea id="comm_txt" name="comm_txt" rows="7" class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_bottom_width_2 nicdark_border_right_width_0 nicdark_border_left_width_0" placeholder="نص التعليق"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="nicdark_section">
                                                                <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_padding_right_0 nicdark_padding_left_0 nicdark_box_sizing_border_box nicdark_float_left">
                                                                    <button type="submit" class="nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box  nicdark_color_white nicdark_bg_orange nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 "><?=$this->lang->line('comm_now')?></button>
                                                                </div>
                                                            </div>
                                                            </form>
                                                            <!--form-->
                                                         </div>
                                                        <!--START comment preview-->
                                                        <div id="comm_area" class="nicdark_section">

                                                        </div>
                                                        <!--END comment preview-->
                                                     </div>
                                                </div>
                                             </div>
                                            <div class="nicdark_section" id="tabs-5">
                                              <div class="nicdark_section">
                                                     <h3><strong><?=$this->lang->line('course_rating')?></strong></h3>
                                                    <div class="nicdark_section nicdark_height_30"></div>
                                                     <div class="nicdark_section">
                                                         <div class="nicdark_width_30_percentage nicdark_width_100_percentage_all_iphone nicdark_border_radius_3 nicdark_float_left nicdark_text_align_center nicdark_bg_greydark nicdark_padding_30 nicdark_box_sizing_border_box">
                                                             <h1 class="nicdark_font_size_70 nicdark_color_white"><strong>5</strong></h1>
                                                             <div class="nicdark_section nicdark_height_20"></div>
                                                             <div class="nicdark_section ">
                                                                <img alt="" class="" width="15" src="<?=base_url()?>public/frontend/img/icons/icon-star-full-yellow.svg">
                                                                <img alt="" class="" width="15" src="<?=base_url()?>public/frontend/img/icons/icon-star-full-yellow.svg">
                                                                <img alt="" class="" width="15" src="<?=base_url()?>public/frontend/img/icons/icon-star-full-yellow.svg">
                                                                <img alt="" class="" width="15" src="<?=base_url()?>public/frontend/img/icons/icon-star-full-yellow.svg">
                                                                <img alt="" class="nicdark_margin_right_10" width="15" src="<?=base_url()?>public/frontend/img/icons/icon-star-full-yellow.svg">
                                                            </div>
                                                             <p>3 Ratings</p>
                                                         </div>
                                                         <div class="nicdark_width_70_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_left_40 nicdark_padding_left_0_all_iphone nicdark_float_left nicdark_box_sizing_border_box">
                                                             <div class=" nicdark_border_radius_3 nicdark_section nicdark_border_1_solid_grey nicdark_padding_20 nicdark_box_sizing_border_box">
                                                                <table class="nicdark_section">
                                                                    <tr>
                                                                        <td class="nicdark_width_20_percentage "><h5><strong>5 Stars</strong></h5></td>
                                                                        <td class="nicdark_width_70_percentage "><div class="nicdark_section nicdark_bg_yellow nicdark_height_10 nicdark_border_radius_3"></div></td>
                                                                        <td class="nicdark_width_10_percentage nicdark_text_align_right"><p class="nicdark_font_size_14 nicdark_line_height_30">3</p></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nicdark_width_20_percentage "><h5><strong>4 Stars</strong></h5></td>
                                                                        <td class="nicdark_width_70_percentage "><div class="nicdark_section nicdark_bg_grey_3 nicdark_height_10 nicdark_border_radius_3"></div></td>
                                                                        <td class="nicdark_width_10_percentage nicdark_text_align_right"><p class="nicdark_font_size_14 nicdark_line_height_30">0</p></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nicdark_width_20_percentage "><h5><strong>3 Stars</strong></h5></td>
                                                                        <td class="nicdark_width_70_percentage "><div class="nicdark_section nicdark_bg_grey_3 nicdark_height_10 nicdark_border_radius_3"></div></td>
                                                                        <td class="nicdark_width_10_percentage nicdark_text_align_right"><p class="nicdark_font_size_14 nicdark_line_height_30">0</p></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nicdark_width_20_percentage "><h5><strong>2 Stars</strong></h5></td>
                                                                        <td class="nicdark_width_70_percentage "><div class="nicdark_section nicdark_bg_grey_3 nicdark_height_10 nicdark_border_radius_3"></div></td>
                                                                        <td class="nicdark_width_10_percentage nicdark_text_align_right"><p class="nicdark_font_size_14 nicdark_line_height_30">0</p></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="nicdark_width_20_percentage "><h5><strong>1 Stars</strong></h5></td>
                                                                        <td class="nicdark_width_70_percentage "><div class="nicdark_section nicdark_bg_grey_3 nicdark_height_10 nicdark_border_radius_3"></div></td>
                                                                        <td class="nicdark_width_10_percentage nicdark_text_align_right"><p class="nicdark_font_size_14 nicdark_line_height_30">0</p></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                         </div>
                                                   </div>
                                                   <div class="nicdark_section nicdark_height_30"></div>
                                                     <!--START comment preview-->
                                                    <div class="nicdark_section nicdark_border_top_1_solid_grey nicdark_padding_40_20 nicdark_box_sizing_border_box">
                                                        <div class="nicdark_display_table nicdark_float_left">
                                                            <img alt="" class="nicdark_display_none_all_iphone nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle nicdark_border_radius_100_percentage" width="40" src="<?=base_url()?>public/frontend/img/avatar/avatar-chef-3.png">
                                                            <p class="  nicdark_display_table_cell nicdark_vertical_align_middle "><span class="nicdark_color_greydark nicdark_first_font nicdark_margin_right_20"><strong>Jane Dark</strong></span></p>

                                                            <div class="nicdark_display_table_cell nicdark_vertical_align_middle ">
                                                                <img alt="" class="" width="15" src="<?=base_url()?>public/frontend/img/icons/icon-star-full-yellow.svg">
                                                                <img alt="" class="" width="15" src="<?=base_url()?>public/frontend/img/icons/icon-star-full-yellow.svg">
                                                                <img alt="" class="" width="15" src="<?=base_url()?>public/frontend/img/icons/icon-star-full-yellow.svg">
                                                                <img alt="" class="" width="15" src="<?=base_url()?>public/frontend/img/icons/icon-star-full-yellow.svg">
                                                                <img alt="" class="nicdark_margin_right_10" width="15" src="<?=base_url()?>public/frontend/img/icons/icon-star-full-yellow.svg">
                                                            </div>

                                                        </div>

                                                        <div class="nicdark_section nicdark_height_20"></div>
                                                        <div class="nicdark_section">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et ipsum sit amet ex pulvinar mattis. Pellentesque vitae purus viverra, aliquet lacus in, fringilla massa. Suspendisse ac est a nisi aliquet sollicitudin. Interdum et malesuada fames.</p>
                                                        </div>

                                                    </div>
                                                    <!--END comment preview-->
                                                 </div>
                                             </div>
                                            <div class="nicdark_section" id="tabs-6">
                                            <div class="nicdark_section">
                                                    <h3><strong>احصائيات الدورة</strong></h3>
                                                    <div class="nicdark_section nicdark_height_30"></div>
                                                     <div class="nicdark_section">
                                                       <div class="nicdark_width_33_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_right_20 nicdark_padding_right_0_all_iphone nicdark_float_left nicdark_box_sizing_border_box">
                                                             <div class=" nicdark_border_radius_3 nicdark_section nicdark_border_1_solid_grey  nicdark_padding_30 nicdark_box_sizing_border_box">
                                                                <div class="nicdark_section nicdark_text_align_center   nicdark_box_sizing_border_box">
                                                                     <h1 class="nicdark_font_size_50 "><strong>30</strong></h1>
                                                                     <p>عدد الدورات  </p>
                                                                 </div>
                                                            </div>
                                                         </div>
                                                         <div class="nicdark_width_33_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_right_20 nicdark_padding_left_0_all_iphone nicdark_padding_right_0_all_iphone nicdark_padding_left_20 nicdark_float_left nicdark_box_sizing_border_box">
                                                             <div class=" nicdark_border_radius_3 nicdark_section nicdark_border_1_solid_grey  nicdark_padding_30 nicdark_box_sizing_border_box">
                                                                <div class="nicdark_section nicdark_text_align_center   nicdark_box_sizing_border_box">
                                                                     <h1 class="nicdark_font_size_50 "><strong>10</strong></h1>
                                                                     <p>عدد المشركين</p>
                                                                 </div>
                                                            </div>
                                                         </div>


                                                      <!--  <div class="nicdark_width_33_percentage nicdark_width_100_percentage_all_iphone nicdark_padding_left_20 nicdark_padding_left_0_all_iphone nicdark_float_left nicdark_box_sizing_border_box">

                                                            <div class=" nicdark_border_radius_3 nicdark_section nicdark_border_1_solid_grey  nicdark_padding_30 nicdark_box_sizing_border_box">
                                                                <div class="nicdark_section nicdark_text_align_center   nicdark_box_sizing_border_box">

                                                                    <h1 class="nicdark_font_size_50 "><strong>40</strong></h1>

                                                                    <p>Maximum</p>

                                                                </div>
                                                            </div>

                                                        </div>-->



                                                    </div>




                                                    <div class="nicdark_section nicdark_height_30"></div>
                                                    
                                                    
                                                    <!--START attendes-->
                                                    <div class="nicdark_section">
                                                    
                                                        <!--START preview-->
                                                        <div class="nicdark_width_25_percentage nicdark_width_50_percentage_all_iphone nicdark_padding_20 nicdark_float_left nicdark_box_sizing_border_box">
                                                            <div class="nicdark_section nicdark_box_sizing_border_box">
                                        

                                                                <div class="nicdark_section nicdark_position_relative">
                                                                        
                                                                    <img alt="" class="nicdark_section" src="<?=base_url()?>public/frontend/img/avatar/avatar-chef-2.png">

                                                                    <div class="nicdark_bg_greydark_alpha_gradient_3 nicdark_position_absolute nicdark_left_0 nicdark_height_100_percentage nicdark_width_100_percentage nicdark_box_sizing_border_box">
                                                                        
                                                                        <div class="nicdark_position_absolute nicdark_bottom_20 nicdark_width_100_percentage nicdark_padding_botttom_0 nicdark_padding_20 nicdark_box_sizing_border_box nicdark_text_align_center">
                                                                            <h5 class="nicdark_color_white"><strong>Jane Goleman</strong></h5>
                                                                        </div>

                                                                    </div>

                                                                </div>



                                                            </div>
                                                        </div>
                                                        <!--END preview-->

                                                        <!--START preview-->
                                                        <div class="nicdark_width_25_percentage nicdark_width_50_percentage_all_iphone nicdark_padding_20 nicdark_float_left nicdark_box_sizing_border_box">
                                                            <div class="nicdark_section nicdark_box_sizing_border_box">
                                        

                                                                <div class="nicdark_section nicdark_position_relative">
                                                                        
                                                                    <img alt="" class="nicdark_section" src="<?=base_url()?>public/frontend/img/avatar/avatar-chef-3.png">

                                                                    <div class="nicdark_bg_greydark_alpha_gradient_3 nicdark_position_absolute nicdark_left_0 nicdark_height_100_percentage nicdark_width_100_percentage nicdark_box_sizing_border_box">
                                                                        
                                                                        <div class="nicdark_position_absolute nicdark_bottom_20 nicdark_width_100_percentage nicdark_padding_botttom_0 nicdark_padding_20 nicdark_box_sizing_border_box nicdark_text_align_center">
                                                                            <h5 class="nicdark_color_white"><strong>Jane Mgrayan</strong></h5>
                                                                        </div>

                                                                    </div>

                                                                </div>



                                                            </div>
                                                        </div>
                                                        <!--END preview-->


                                                        <!--START preview-->
                                                        <div class="nicdark_width_25_percentage nicdark_width_50_percentage_all_iphone nicdark_padding_20 nicdark_float_left nicdark_box_sizing_border_box">
                                                            <div class="nicdark_section nicdark_box_sizing_border_box">
                                        

                                                                <div class="nicdark_section nicdark_position_relative">
                                                                        
                                                                    <img alt="" class="nicdark_section" src="<?=base_url()?>public/frontend/img/avatar/avatar-chef-4.png">

                                                                    <div class="nicdark_bg_greydark_alpha_gradient_3 nicdark_position_absolute nicdark_left_0 nicdark_height_100_percentage nicdark_width_100_percentage nicdark_box_sizing_border_box">
                                                                        
                                                                        <div class="nicdark_position_absolute nicdark_bottom_20 nicdark_width_100_percentage nicdark_padding_botttom_0 nicdark_padding_20 nicdark_box_sizing_border_box nicdark_text_align_center">
                                                                            <h5 class="nicdark_color_white"><strong>Jack Johnson</strong></h5>
                                                                        </div>

                                                                    </div>

                                                                </div>



                                                            </div>
                                                        </div>
                                                        <!--END preview-->


                                                        <!--START preview-->
                                                        <div class="nicdark_width_25_percentage nicdark_width_50_percentage_all_iphone nicdark_padding_20 nicdark_float_left nicdark_box_sizing_border_box">
                                                            <div class="nicdark_section nicdark_box_sizing_border_box">
                                        

                                                                <div class="nicdark_section nicdark_position_relative">
                                                                        
                                                                    <img alt="" class="nicdark_section" src="<?=base_url()?>public/frontend/img/avatar/avatar-chef-5.png">

                                                                    <div class="nicdark_bg_greydark_alpha_gradient_3 nicdark_position_absolute nicdark_left_0 nicdark_height_100_percentage nicdark_width_100_percentage nicdark_box_sizing_border_box">
                                                                        
                                                                        <div class="nicdark_position_absolute nicdark_bottom_20 nicdark_width_100_percentage nicdark_padding_botttom_0 nicdark_padding_20 nicdark_box_sizing_border_box nicdark_text_align_center">
                                                                            <h5 class="nicdark_color_white"><strong>Nick Hopiness</strong></h5>
                                                                        </div>

                                                                    </div>

                                                                </div>



                                                            </div>
                                                        </div>
                                                        <!--END preview-->


                                                        <!--START preview-->
                                                        <div class="nicdark_width_25_percentage nicdark_width_50_percentage_all_iphone nicdark_padding_20 nicdark_float_left nicdark_box_sizing_border_box">
                                                            <div class="nicdark_section nicdark_box_sizing_border_box">
                                                                  <div class="nicdark_section nicdark_position_relative">
                                                                     <img alt="" class="nicdark_section" src="<?=base_url()?>public/frontend/img/avatar/avatar-chef-6.png">
                                                                     <div class="nicdark_bg_greydark_alpha_gradient_3 nicdark_position_absolute nicdark_left_0 nicdark_height_100_percentage nicdark_width_100_percentage nicdark_box_sizing_border_box">
                                                                         <div class="nicdark_position_absolute nicdark_bottom_20 nicdark_width_100_percentage nicdark_padding_botttom_0 nicdark_padding_20 nicdark_box_sizing_border_box nicdark_text_align_center">
                                                                            <h5 class="nicdark_color_white"><strong>Steve Morgan</strong></h5>
                                                                        </div>
                                                                     </div>

                                                                </div>
                                                             </div>
                                                        </div>
                                                        <!--END preview-->
                                                     </div>
                                                    <!--END attendes-->
                                                 </div>
                                            </div>
                                         </div>
                                        <!--END tab-->
                                     </div>
                                </div>
                             <div class="nicdark_width_33_percentage nicdark_width_100_percentage_ipad_port nicdark_width_100_percentage_all_iphone nicdark_float_left">
                                 <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">
                                     <div class="nicdark_section nicdark_height_60"></div>
                                     <div class="nicdark_section nicdark_text_align_center"></div>
                                     <div class="nicdark_section nicdark_height_25"></div>
                                     <div class="nicdark_section nicdark_height_13"></div>
                                  <table class="nicdark_section">
                                        <tbody>
                                            <tr class="nicdark_border_bottom_2_solid_grey">
											<td class="nicdark_padding_20 "><h4 class=" nicdark_text_align_right">عدد المشتركين حتى (<?=$newest_dawrat->crs_subscrib?>) </h4></td>
                                                <td class="nicdark_padding_20 "><img alt="" class="" width="40" src="<?=base_url()?>public/frontend/img/icons/icon-availability.svg"></td>
                                            </tr>
                                            <tr class="nicdark_border_bottom_2_solid_grey">
											 <td class="nicdark_padding_20"><h4 class=" nicdark_text_align_right">الفئة العمرية :(<?=$newest_dawrat->crs_ages?>)</h4></td>
                                                <td class="nicdark_padding_20"><img alt="" class="" width="40" src="<?=base_url()?>public/frontend/img/icons/icon-level.svg"></td>
                                            </tr>
                                            <tr  class="nicdark_border_bottom_2_solid_grey">
											<td class="nicdark_padding_20 "><h4 class=" nicdark_text_align_right">عدد ساعات التدريب  (<?=$newest_dawrat->crs_hours?>) </h4></td>
                                                <td class="nicdark_padding_20 "><img alt="" class="" width="40" src="<?=base_url()?>public/frontend/img/icons/icon-clock-grey.svg"></td>
                                            </tr>
                                            <tr  class="nicdark_border_bottom_2_solid_grey">
											<td class="nicdark_padding_20 "><h4 class=" nicdark_text_align_right">عدد اللقاءات  (<?=$newest_dawrat->crs_meetings?>)</h4></td>
                                                <td class="nicdark_padding_20 "><img alt="" class="" width="40" src="<?=base_url()?>public/frontend/img/icons/icon-pin-grey.svg"></td>
                           
                                            </tr>
											        <tr  class="nicdark_border_bottom_2_solid_grey">
											<td class="nicdark_padding_20 "><h4 class=" nicdark_text_align_right">السعر  (<?=$newest_dawrat->crs_price?> شاقل)</h4></td>
                                                <td class="nicdark_padding_20 "><img alt="" class="" width="40" src="<?=base_url()?>public/frontend/img/icons/icon-card-grey.svg"></td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>


                                    <div class="nicdark_section nicdark_height_20"></div>

                                    <div class="nicdark_section nicdark_bg_white nicdark_border_1_solid_grey">

                                          <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box nicdark_bg_grey nicdark_border_bottom_1_solid_grey nicdark_text_align_center">
                                            
                                            
                                            <h3 class=""><strong>تواصل معنا</strong></h3>
                                          </div>
                                          <div class="nicdark_section nicdark_padding_10 nicdark_box_sizing_border_box">
                                            
                                            <div class="nicdark_section">
                                                <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
                                                    <input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="الاسم">
                                                </div>
                                                
                                            </div>
                                            <div class="nicdark_section">
                                                <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
                                                    <input class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="الاميل">
                                                </div>
                                                
                                            </div>
                                            <div class="nicdark_section">
                                                <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
                                                    <textarea rows="4" class="nicdark_padding_left_0 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" placeholder="الرسالة"></textarea>
                                                </div>
                                            </div>
                                            <div class="nicdark_section">
                                                <div class="nicdark_width_100_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left">
                                                    <a class="nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_width_100_percentage nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 " >ارسل التفاصيل</a>   
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                </div>
                                <div class="nicdark_section nicdark_height_50"></div>
                            </div>
                    
                                <div class="nicdark_section nicdark_height_50"></div>


                            </div>
                        </div>
                        <!--end container-->
                    </div>
   <!--START related products-->
    <div class="nicdark_section nicdark_border_top_1_solid_grey">
                         <!--start nicdark_container-->
      <div class="nicdark_container nicdark_clearfix">
         <div class="nicdark_section nicdark_height_50"></div>
           <div class="grid grid_12">
               <h2><strong><?=$this->lang->line('related_courses');?></strong></h2>
           </div>
   <div class="nicdark_width_100_percentage">

     <!--START preview-->
       <?php

        foreach ($related_posts as $rel) {
            foreach ($rel as $re) {

                ?>
                <div class="nicdark_width_33_percentage nicdark_width_100_percentage_ipad_port nicdark_width_100_percentage_all_iphone nicdark_float_left">

                    <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">
                        <!--start preview-->
                        <div class="nicdark_section nicdark_border_1_solid_grey">
                            <!--image-->
                            <div class="nicdark_section nicdark_position_relative">
                                <img alt="" class="nicdark_section" src="<?= base_url() . $re->P_photo ?>">
                                <div class="nicdark_bg_greydark_alpha_gradient_2 nicdark_position_absolute nicdark_left_0 nicdark_height_100_percentage nicdark_width_100_percentage nicdark_padding_20 nicdark_box_sizing_border_box">

                                    <div class="nicdark_position_absolute nicdark_bottom_20">
                                        <div class="nicdark_display_table nicdark_float_left">
                                            <img alt=""
                                                 class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle"
                                                 width="20"
                                                 src="<?= base_url() ?>public/frontend/img/icons/icon-calendar.svg">
                                            <p class=" nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_13">
                                                <?=$re->crs_date?></p>
                                            <img alt=""
                                                 class="nicdark_margin_right_10 nicdark_margin_left_20 nicdark_display_table_cell nicdark_vertical_align_middle"
                                                 width="20"
                                                 src="<?= base_url() ?>public/frontend/img/icons/icon-clock.svg">
                                            <p class="nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_13">
                                                <?=$re->crs_hours?></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--image-->


                            <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box nicdark_bg_white">

                                <h3><a class="nicdark_color_greydark nicdark_first_font" href="<?=base_url()?>Main/singlecourse/<?=$re->crs_code?>">
                                        <?=$re->crs_name?></a></h3>
                                <div class="nicdark_section nicdark_height_20"></div>
                                <p><a class="" href="<?=base_url()?>Main/singlecourse/<?=$re->crs_code?>"><?=substr($re->crs_details,0,100)?></a></p>

                            </div>

                            <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box nicdark_bg_grey nicdark_border_top_1_solid_grey">

                                <div class="nicdark_width_33_percentage nicdark_display_none_all_responsive nicdark_width_50_percentage_responsive nicdark_float_left">
                                    <div class="nicdark_display_table nicdark_float_left">
                                        <img alt=""
                                             class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle nicdark_border_radius_100_percentage"
                                             width="25"
                                             src="<?= base_url() ?>public/frontend/img/avatar/avatar-chef-1.png">
                                        <p class="nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_15">
                                            <a href="single-teacher.html">John</a></p>
                                    </div>
                                </div>

                                <div class="nicdark_width_33_percentage nicdark_width_50_percentage_responsive nicdark_float_left">
                                    <div class="nicdark_display_table nicdark_float_left">
                                        <img alt=""
                                             class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle"
                                             width="23"
                                             src="<?= base_url() ?>public/frontend/img/icons/icon-availability.svg">
                                        <p class="nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_15">
                                            <a href="single-course.html">221 Seats</a></p>
                                    </div>
                                </div>

                                <div class="nicdark_width_33_percentage nicdark_width_50_percentage_responsive nicdark_float_left nicdark_text_align_right">
                                    <a class="nicdark_display_inline_block nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13"
                                       href="single-course.html">FREE</a>
                                </div>

                            </div>


                        </div>
                        <!--start preview-->

                    </div>

                </div>
            <?php }
        }?>
    <!--END preview-->

 </div>
           <div class="nicdark_section nicdark_height_50"></div>
       </div>
 <!--end container-->

                    </div>
  <script src="<?=base_url()?>public/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
  <!--END related products-->
  <script type="text/javascript">
      $(document).ready(function (e) {
          getcomments();
          $("#comm_form").submit(function (e) {
              e.preventDefault();
              $.ajax({
                  url:"<?=base_url()?>Main/add_comment",
                  type:"POST",
                  data:$("#comm_form").serialize(),
                  success:function (data) {
                      $("#alertcomm").text(data);
                  }
              });
          });
      });
      function getcomments()
      {
          $.ajax({
              url:"<?=base_url()?>Main/getcomments/<?=$this->uri->segment('3')?>",
              type:"POST",
              data:{random:Math.random()},
              success:function (data) {
                  <!--START comment preview-->
                  <!--END comment preview-->
                  $.each(JSON.parse(data), function(k, v) {
                      $("#comm_area").append('<div class="nicdark_display_table nicdark_float_left">\n' +
                          '                        <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle nicdark_border_radius_100_percentage" width="40" src="<?=base_url()?>public/frontend/img/avatar/avatar-chef-1.png">\n' +
                          '                        <p class="  nicdark_display_table_cell nicdark_vertical_align_middle "><span class="nicdark_color_greydark nicdark_first_font nicdark_margin_right_20"><strong>'+v.comm_name+'</strong></span>'+v.comm_date+'</p>\n' +
                          '                    </div>\n' +
                          '\n' +
                          '                    <div class="nicdark_section nicdark_height_20"></div>\n' +
                          '                        <div class="nicdark_section">\n' +
                          '                        <p>'+v.comm_txt+'</p>\n' +
                          '                    </div>\n' +
                          '                    <div class="nicdark_section nicdark_height_20"></div>\n');
                  });
              }
          });
      }
  </script>
