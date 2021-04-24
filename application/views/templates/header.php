
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<head>
 
    <meta charset="utf-8">  
    
    <title><?=!empty($page_title)?$page_title:""?></title> <!--insert your title here-->
    <meta name="description" content="Education - Learning theme for your business"> <!--insert your description here-->  
    <meta name="author" content="nicdark"> <!--insert your name here-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta responsive-->
     <link href="https://fonts.googleapis.com/css?family=El+Messiri:600&display=swap" rel="stylesheet">
    <!--START CSS--> 
    <link rel="stylesheet" href="<?=base_url()?>public/frontend/css/nicdark_style.css"> <!--style-->

   
  

    <!--[if lt IE 9]>  
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>  
    <![endif]-->  

    <!--FAVICONS-->
    <link rel="shortcut icon" href="<?=base_url()?>public/frontend/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="<?=base_url()?>public/frontend/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=base_url()?>public/frontend/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url()?>public/frontend/img/favicon/apple-touch-icon-114x114.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!--END FAVICONS-->


<style>
      body {
      font-family: 'El Messiri';
      }
    </style>
</head>  
    <body id="start_nicdark_framework">
    <?php if($this->session->userdata("lang") == "arabic")
        $key_langg  = "ar";
    else
        $key_langg = "en";
    ?>


        <!--START nicdark_site-->
        <div class="nicdark_site">

            <!--START nicdark_site_fullwidth-->
            <div class="nicdark_site_fullwidth nicdark_site_fullwidth_boxed nicdark_clearfix">








                <!--START search container-->
<div class="nicdark_display_table nicdark_transition_all_08_ease nicdark_navigation_2_search_content nicdark_bg_greydark_alpha_9 nicdark_position_fixed nicdark_width_100_percentage nicdark_height_100_percentage nicdark_z_index_1_negative nicdark_opacity_0">

    <!--close-->
    <div class="nicdark_cursor_zoom_out nicdark_navigation_2_close_search_content nicdark_width_100_percentage nicdark_height_100_percentage nicdark_position_absolute nicdark_z_index_1_negative"></div>


 <div class="nicdark_display_table nicdark_transition_all_08_ease nicdark_navigation_2_search_content nicdark_bg_greydark_alpha_9 nicdark_position_fixed nicdark_width_100_percentage nicdark_height_100_percentage nicdark_z_index_1_negative nicdark_opacity_0">

        <div class="nicdark_width_700 nicdark_width_250_all_iphone nicdark_display_inline_block">
            <div class="nicdark_width_80_percentage nicdark_padding_5 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                <input class="nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0 nicdark_first_font nicdark_color_white nicdark_placeholder_color_white nicdark_font_size_30 nicdark_line_height_30" type="text" placeholder="بحث">
            </div>
            <div class="nicdark_width_20_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                <a class="nicdark_width_55 nicdark_height_55 nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_bg_green nicdark_padding_15 nicdark_border_radius_3 " href="#">
                    <img alt="" width="25" src="<?=base_url()?>public/frontend/img/icons/icon-search-white.svg">
                </a>   
            </div>
        </div>
    </div>
            


</div>
<!--END search container-->




<!--START menu responsive-->
<div class="nicdark_navigation_2_sidebar_content nicdark_padding_40 nicdark_box_sizing_border_box nicdark_overflow_hidden nicdark_overflow_y_auto nicdark_transition_all_08_ease nicdark_bg_green nicdark_height_100_percentage nicdark_position_fixed nicdark_width_300 nicdark_right_300_negative nicdark_z_index_9">
    <img alt="" width="25" class="nicdark_close_navigation_2_sidebar_content nicdark_cursor_pointer nicdark_right_20 nicdark_top_20 nicdark_position_absolute" src="<?=base_url()?>public/frontend/img/icons/icon-close-white.svg">


<!--START menu responsive-->
    <div class="nicdark_navigation_2_sidebar">
        <ul>
            <li>
                <a href="index.html">HOME</a>

                <ul class="nicdark_sub_menu">
                    <li><a href="index.html">Home 1</a></li>
                    <li><a href="index-2.html">Home 2</a></li>
                    <li><a href="index-3.html">Home 3</a></li>
                    <li><a href="index-4.html">Home 4</a></li>
                    <li><a href="index-5.html">Home 5</a></li>
                </ul>

            </li>
            <li>
                <a href="courses.html">COURSES</a>

                <ul class="nicdark_sub_menu">
                    <li><a href="courses.html">Archive</a></li>
                    <li><a href="single-course.html">Single Course</a></li>
                    <li>
                        <a href="account.html">User Pages</a>

                        <ul class="nicdark_sub_menu">
                            <li><a href="account.html">My Account</a></li> 
                            <li><a href="compare.html">Compare</a></li>
                        </ul>

                    </li> 
                    <li>
                        <a href="courses.html">Shop</a>

                        <ul class="nicdark_sub_menu">
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="thankyou.html">Thank You</a></li>
                        </ul>

                    </li> 
                </ul>

            </li>
            <li>
                <a href="teachers.html">TEACHERS</a>

                <ul class="nicdark_sub_menu">
                    <li><a href="teachers.html">Archive</a></li>
                    <li><a href="single-teacher.html">Single Teacher</a></li>
                </ul>

            </li>
            <li>
                <a href="#">PAGES</a>

                <ul class="nicdark_sub_menu">
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="single-course.html">Single Course</a></li>
                    <li><a href="single-teacher.html">Single Teacher</a></li>
                    <li><a href="contact-1.html">Contact</a></li>
                </ul>

            </li>
            <li>
                <a href="blog-standard.html">BLOG</a>

                <ul class="nicdark_sub_menu">
                    <li><a href="blog-standard.html">Archive Standard</a></li>
                    <li><a href="blog-masonry.html">Archive Masonry</a></li>
                    <li><a href="single.html">Post Right Sidebar</a></li>
                    <li><a href="single-full-width.html">Post Full Width</a></li>
                    <li><a href="single-left-sidebar.html">Post Left Sidebar</a></li>
                </ul>

            </li>
            <li>
                <a href="contact-1.html">CONTACT</a>
            </li>
            
        </ul>

    </div>



</div>
<!--END menu responsive-->





<div class="nicdark_section">

    <div class="nicdark_section nicdark_bg_greydark">
        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_6 nicdark_padding_botttom_10 nicdark_padding_top_10 nicdark_text_align_center_responsive">

              
                <div class="nicdark_navigation_top_header_2">
                    <ul>
                        <li>
                            <img alt="" class="nicdark_margin_right_10 " width="15" src="<?=base_url()?>public/frontend/img/icons/icon-world-grey.svg">
                            <a class=" nicdark_line_height_18" href="#">اللغات</a>

                            <ul class="nicdark_sub_menu">
                                <li><a href="#">العربية</a></li>
                                <li><a href="#">עברית</a></li>
                               
                            </ul>

                        </li>
                        <li>
                            
                            <img alt="" class="nicdark_margin_right_10" width="15" src="<?=base_url()?>public/frontend/img/icons/icon-share-grey.svg">
                            

                            <a target="_blank" href="https://www.facebook.com/cleanthemeslab"><img alt="" class="nicdark_margin_left_10  nicdark_margin_top_2 nicdark_display_none_all_responsive" width="12" src="<?=base_url()?>public/frontend/img/icons/icon-facebook-grey.svg"></a>
                            <a target="_blank" href="https://twitter.com/cleanthemeslab"><img alt="" class="nicdark_margin_left_10  nicdark_margin_top_2 nicdark_display_none_all_responsive" width="12" src="<?=base_url()?>public/frontend/img/icons/icon-twitter-grey.svg"></a>
                            <a target="_blank" href="#"><img alt="" class="nicdark_margin_left_10  nicdark_margin_top_2 nicdark_display_none_all_responsive" width="12" src="<?=base_url()?>public/frontend/img/icons/icon-linkedin-grey.svg"></a>
                            <a target="_blank" href="#"><img alt="" class="nicdark_margin_left_10  nicdark_margin_top_2 nicdark_display_none_all_responsive" width="12" src="<?=base_url()?>public/frontend/img/icons/icon-pinterest-grey.svg"></a>
                            <a target="_blank" href="https://www.instagram.com/cleanthemeslab/"><img alt="" class="nicdark_margin_left_10  nicdark_margin_top_2 nicdark_display_none_all_responsive" width="12" src="<?=base_url()?>public/frontend/img/icons/icon-instagram-grey.svg"></a>

                        </li>
                    </ul>
                </div>
                

            </div>


            <div class="grid grid_6 nicdark_text_align_right nicdark_border_top_1_solid_greydark_responsive nicdark_text_align_center_responsive nicdark_padding_botttom_10 nicdark_padding_top_10">

              
                 <div class="nicdark_navigation_top_header_2">
                    <?php if(empty($this->session->userdata('st_code'))){?>
                    <ul>
                        <li>
                            <img alt="" class="nicdark_margin_right_10 nicdark_float_left" width="15" src="<?=base_url()?>public/frontend/img/icons/icon-user-grey.svg">
                            <a href="<?=base_url()?>Login/login_std" ><?=$this->lang->line('login');?></a>
                        </li>
                        <li>
                            <img alt="" class="nicdark_margin_right_10 nicdark_float_left" width="15" src="<?=base_url()?>public/frontend/img/icons/icon-login-grey.svg">
                            <a href="<?=base_url()?>Login/register_std"><?=$this->lang->line('REGISTER');?></a>
                        </li>
                    </ul>
                    <?php } else{
                        ?>
                        <ul>

                            <li>
                                <img alt="" class="nicdark_margin_right_10 nicdark_float_left" width="15" src="<?=base_url()?>public/frontend/img/icons/icon-login-grey.svg">
                                <span style="color: #fff"> <?=$this->lang->line('Welcome_person').$this->session->userdata('st_name');?></span><a href="<?=base_url()?>Login/logout"> <?=$this->lang->line('LogOut')?></a>
                            </li>
                        </ul>
                    <?php
                    }?>
                </div>
                

            </div>


        </div>
        <!--end container-->

    </div>

</div>

<div class="nicdark_section nicdark_position_relative ">

    <div class="nicdark_section nicdark_position_absolute">

        


        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix nicdark_position_relative">

            <div class="grid grid_12 nicdark_display_none_all_responsive">

                <div class="nicdark_section nicdark_height_10"></div>

                <!--LOGO-->
                <a href="#"><img alt="" class="nicdark_position_absolute nicdark_left_15 nicdark_top_20" width="170" src="<?=base_url()?>public/frontend/img/logos/logo.png"></a>
              

                <!--right icons menu-->
                <div class="nicdark_float_right nicdark_width_100  nicdark_position_relative nicdark_height_25 nicdark_display_none_all_responsive">
             <a class="nicdark_navigation_2_open_search_content" href="#"><img alt="" class="nicdark_opacity_05_hover nicdark_transition_all_08_ease nicdark_position_absolute nicdark_top_3_negative nicdark_right_0" width="25" src="<?=base_url()?>public/frontend/img/icons/icon-search-white.svg"></a>

                </div>
                <!--right icons menu-->


                

                <div class="nicdark_section nicdark_height_10"></div> 
                
            </div>




            <!--RESPONSIVE-->
            <div class="nicdark_width_50_percentage nicdark_text_align_center_all_iphone nicdark_width_100_percentage_all_iphone nicdark_float_left nicdark_display_none nicdark_display_block_responsive">
                <div class="nicdark_section nicdark_height_20"></div>
                <a href="index.html"><img alt="" width="170" class="" src="<?=base_url()?>public/frontend/img/logos/logo.png"></a>   
            </div>
            <div class="nicdark_width_50_percentage nicdark_width_100_percentage_all_iphone nicdark_float_left nicdark_display_none nicdark_display_block_responsive">
                <div class="nicdark_section nicdark_height_20"></div>
                <div class="nicdark_float_right nicdark_width_100_percentage nicdark_text_align_right nicdark_text_align_center_all_iphone">
                    
                    
                    <a class="nicdark_open_navigation_2_sidebar_content" href="#">
                        <img alt="" class="nicdark_margin_right_20" width="25" src="<?=base_url()?>public/frontend/img/icons/icon-menu-white.svg">
                    </a>

                    <div class="nicdark_position_relative nicdark_display_inline_block">
                        <a href="cart.html"><img alt="" width="25" src="<?=base_url()?>public/frontend/img/icons/icon-cart-white.svg"></a> 
                        <a class="nicdark_bg_orange nicdark_color_white nicdark_padding_5 nicdark_border_radius_100_percentage nicdark_font_size_8 nicdark_line_height_5 nicdark_position_absolute nicdark_left_0 nicdark_top_10_negative nicdark_margin_left_20" href="#">2</a>
                    </div>

                    <img alt="" class="nicdark_margin_left_20 nicdark_navigation_2_open_search_content" width="25" src="<?=base_url()?>public/frontend/img/icons/icon-search-white.svg"> 

                </div>
            </div>
            <!--RESPONSIVE-->





        </div>
        <!--end container-->

    </div>

</div>



