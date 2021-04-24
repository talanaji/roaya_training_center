<div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center_bottom" style="background-image:url(<?=base_url()?>public/frontend/img/parallax/img6.png);">

   
   <div class="nicdark_section nicdark_bg_greydark_alpha_gradient_2"

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">


            <div class="nicdark_section nicdark_height_200"></div>

            <div class="grid grid_12">
                <strong class="nicdark_color_white nicdark_font_size_60 nicdark_first_font">الدورات</strong>
            </div>

            <div class="nicdark_section nicdark_height_20"></div>


        </div>
        <!--end container-->

    </div>

</div>






<div class="nicdark_section nicdark_bg_grey nicdark_border_bottom_1_solid_grey">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_12">

            <a href="#">الرئيسية</a>
            <img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10" src="<?=base_url()?>public/frontend/img/icons/icon-next-grey.svg">
            <a href="#">Courses</a>
            <img alt="" class="nicdark_margin_left_10 nicdark_margin_right_10" width="10" src="<?=base_url()?>public/frontend/img/icons/icon-next-grey.svg">
            <a href="#">Courses</a>

        </div>

    </div>
    <!--end container-->

</div>




<div class="nicdark_section nicdark_height_50"></div>




<div class="nicdark_section ">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">
        <div class="nicdark_width_100_percentage">
            <!--START results-->
            <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">
                <div class="nicdark_section nicdark_box_sizing_border_box ">

                    <div class="nicdark_width_100_percentage nicdark_float_left">
                        <h2><strong><?=$this->lang->line('all_corses')?></strong></h2>
                    </div>
<!--                    Showing 1-9 of 18 results-->

                    <div class="nicdark_section nicdark_height_10"></div>


                    <div class="nicdark_width_70_percentage nicdark_float_left nicdark_width_100_percentage_all_iphone">

                        <div class="nicdark_section nicdark_height_20"></div>

                        <div class="nicdark_width_50_percentage nicdark_float_left">
                            <div class="nicdark_section nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative nicdark_padding_right_20">
<!--                                <img alt="" class="nicdark_position_absolute nicdark_top_5 nicdark_left_0 nicdark_margin_top_5" width="15" src="--><?//=base_url()?><!--public/frontend/img/icons/icon-pen.svg">-->
                                <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="بحث عن دورات">
                            </div>
                        </div>
                        <div class="nicdark_width_50_percentage nicdark_float_left">
                            <div class="nicdark_float_left nicdark_width_100_percentage_all_iphone">
                                <a class="nicdark_bg_white_hover nicdark_color_green_hover nicdark_border_2_solid_green nicdark_transition_all_08_ease nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_width_100_percentage nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 " href="#">بحث</a>
                            </div>
                        </div>
                    </div>


                    <div class="nicdark_width_30_percentage nicdark_float_left nicdark_text_align_right nicdark_width_100_percentage_all_iphone">

                        <div class="nicdark_section nicdark_height_20"></div>

                        <div class="nicdark_display_inline_block nicdark_bg_orange nicdark_border_1_solid_orange nicdark_padding_8 nicdark_margin_right_10 nicdark_border_radius_3">
                            <a class="nicdark_tooltip_jquery" title="Advanced Settings" href="#"><img alt="" class="nicdark_float_left" width="23" src="<?=base_url()?>public/frontend/img/icons/icon-settings-white.svg"></a>
                        </div>

                        <div class="nicdark_display_inline_block nicdark_bg_green nicdark_border_1_solid_green nicdark_padding_8 nicdark_margin_right_10 nicdark_border_radius_3">
                            <a class="nicdark_tooltip_jquery" title="List View" href="#"><img alt="" class="nicdark_float_left" width="23" src="<?=base_url()?>public/frontend/img/icons/icon-list-white.svg"></a>
                        </div>

                        <div class="nicdark_display_inline_block nicdark_border_1_solid_grey_2 nicdark_padding_8 nicdark_border_radius_3">
                            <a class="nicdark_tooltip_jquery" title="Grid View" href="#"><img alt="" class="nicdark_float_left" width="23" src="<?=base_url()?>public/frontend/img/icons/icon-grid-grey.svg"></a>
                        </div>

                    </div>

                </div>
            </div>
            <!--END results-->



            <div class="nicdark_width_100_percentage">

        <?php

        foreach ($results as $res){
             ?>
                <!--START preview-->
                <div class="nicdark_width_33_percentage nicdark_width_100_percentage_responsive nicdark_float_left">

                    <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">
                         <!--start preview-->
                        <div class="nicdark_section nicdark_border_1_solid_grey">
                             <!--image-->
                            <div class="nicdark_section nicdark_position_relative">
                                <img alt="" class="nicdark_section" height="200" src="<?=base_url().$res->P_photo?>">
                                 <div class="nicdark_bg_greydark_alpha_gradient_2 nicdark_position_absolute nicdark_left_0 nicdark_height_100_percentage nicdark_width_100_percentage nicdark_padding_20 nicdark_box_sizing_border_box">
                                    <!--<a class="nicdark_tooltip_jquery nicdark_position_absolute nicdark_right_0" title="Add To Favorities" href="account.html#tabs-3">-->
                                    <!--<img alt="" class="nicdark_margin_right_60" width="25" src="--><?//=base_url()?><!--public/frontend/img/icons/icon-heart-white.svg">-->
                                    <!--</a>-->
                                    <!---->
                                    <!--<a class="nicdark_tooltip_jquery nicdark_position_absolute nicdark_right_0" title="Add To Compare" href="compare.html">-->
                                    <!--<img alt="" class="nicdark_margin_right_20 nicdark_right_0" width="25" src="--><?//=base_url()?><!--public/frontend/img/icons/icon-compare-white.svg">-->
                                    <!--</a>-->

                                    <div class="nicdark_position_absolute nicdark_bottom_20">
                                        <div class="nicdark_display_table nicdark_float_left">
                                            <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle" width="20" src="<?=base_url()?>public/frontend/img/icons/icon-calendar.svg">
                                            <p class=" nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_13"><?=$res->crs_date?></p>
                                            <img alt="" class="nicdark_margin_right_10 nicdark_margin_left_20 nicdark_display_table_cell nicdark_vertical_align_middle" width="20" src="<?=base_url()?>public/frontend/img/icons/icon-clock.svg">
                                            <p class="nicdark_color_white nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_13"><?=$res->crs_hours?></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--image-->


                            <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box">

                                <h3><a class="nicdark_color_greydark nicdark_first_font" href="<?=base_url()?>Main/singlecourse/<?=$res->crs_code?>"><?=$res->crs_name?></a></h3>
                                <div class="nicdark_section nicdark_height_20"></div>
                                <p><a class="" href="<?=base_url()?>Main/singlecourse/<?=$res->crs_code?>"><?php $x =substr($res->crs_details,0,100) ; echo str_replace("�",$this->lang->line('read_more') ,$x);?></a></p>

                            </div>

                            <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box nicdark_bg_grey nicdark_border_top_1_solid_grey">

<!--                                <div class="nicdark_width_33_percentage nicdark_width_50_percentage_all_iphone nicdark_display_none_all_iphone nicdark_float_left">-->
<!--                                    <div class="nicdark_display_table nicdark_float_left">-->
<!--                                        <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle nicdark_border_radius_100_percentage" width="25" src="--><?//=base_url()?><!--public/frontend/img/avatar/avatar-chef-1.png">-->
<!--                                        <p class="nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_15"><a href="single-teacher.html">John</a></p>-->
<!--                                    </div>-->
<!--                                </div>-->

<!--                                <div class="nicdark_width_33_percentage nicdark_width_50_percentage_all_iphone nicdark_float_left">-->
<!--                                    <div class="nicdark_display_table nicdark_float_left">-->
<!--                                        <img alt="" class="nicdark_margin_right_10 nicdark_display_table_cell nicdark_vertical_align_middle" width="23" src="--><?//=base_url()?><!--public/frontend/img/icons/icon-availability.svg">-->
<!--                                        <p class="nicdark_display_table_cell nicdark_vertical_align_middle nicdark_font_size_15"><a href="single-course.html">70 Seats</a></p>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <?php if($res->crs_show_price ==1){?>
                                <div class="nicdark_width_33_percentage nicdark_width_50_percentage_all_iphone nicdark_float_left nicdark_text_align_right">
                                    <a class="nicdark_display_inline_block nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_8 nicdark_border_radius_3 nicdark_font_size_13" href="<?=base_url()?>Main/singlecourse/<?=$res->crs_code?>"><?=$res->crs_price .' NIS'?></a>
                                </div>
                                <?php }?>
                            </div>
                         </div>
                        <!--start preview-->
                     </div>
                 </div>
                <!--END preview-->
          <?php } ?>
            </div>





            <div class="nicdark_section nicdark_height_50"></div>


<!--            <div class="nicdark_section nicdark_text_align_center">-->
<!--                <a class="nicdark_display_inline_block nicdark_color_greydark nicdark_first_font nicdark_padding_10 nicdark_font_size_20" href="#"><strong>1</strong></a>-->
<!--                <a class="nicdark_display_inline_block nicdark_first_font nicdark_padding_10 nicdark_font_size_20" href="#"><strong>2</strong></a>-->
<!--                <a class="nicdark_display_inline_block nicdark_first_font nicdark_padding_10 nicdark_font_size_20" href="#"><strong>3</strong></a>-->
<!--                <a class="nicdark_display_inline_block nicdark_first_font nicdark_padding_10 nicdark_font_size_20" href="#"><strong>4</strong></a>-->
<!--                <a class="nicdark_display_inline_block nicdark_first_font nicdark_padding_10 nicdark_font_size_20" href="#"><strong>5</strong></a>-->
<!--            </div>-->
            <?php echo $links ; ?>


        </div>


    </div>
    <!--end container-->

</div>


<div class="nicdark_section nicdark_height_70"></div>

