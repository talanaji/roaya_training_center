<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?=$page_title?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>public/newtemplate/assets/images/favicon.png">
    <link href="<?=base_url()?>public/newtemplate/css/style.css" rel="stylesheet">
    <script src="<?=base_url()?>public/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url()?>public/sweetalert/dist/sweetalert.js"></script>
    <link rel="stylesheet" href="<?=base_url()?>public/sweetalert/dist/sweetalert.css">
    <style>
        .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 60px;
            height: 60px;
            -webkit-animation: spin 2s linear infinite; /* Safari */
            animation: spin 2s linear infinite;
            display: none;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
    <script type="text/javascript">
        function chkBox(selector)
        {
            if($(selector).is(":checked"))
            {
                return 1;
            }
            else {
                return 0;
            }
        }
        function _PREFIX()
        {
            return m_PREFIX = document.getElementById("_PRIFIX").value;
        }
        function fetch_per_params(url , selector ,  right_val , prfx_type , actv=-1)
        {
            $.ajax({
                url : url,
                type:'POST',
                data:{random:Math.random() ,
                    post_val    : right_val ,
                    prefix_type : prfx_type ,
                    active      : actv
                } ,
                success: function(data)
                { $(selector).html(data);$(".slider").css("display",'none');$('#example').DataTable();}
            });
        }
    </script>
</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <div class="brand-logo">
                <a href="<?=base_url()?>"><b><img width="200" height="75" src="<?=base_url().LOGO_PATH.$this->options->op_logo?>" alt="">
                     </b><span class="brand-title"> </span></a>
        </div>
        <div class="nav-control">
            <div class="hamburger"><span class="line"></span>  <span class="line"></span>  <span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <div class="header-left">
                <ul>
                    <li class="icons position-relative"><a href="javascript:void(0)"><i class="icon-magnifier f-s-16"></i></a>
                        <div class="drop-down animated bounceInDown">
                            <div class="dropdown-content-body">
                                <div class="header-search" id="header-search">
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <div class="input-group-append"><span class="input-group-text"><i class="icon-magnifier"></i></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-right">
                <ul>
                    <li class="icons">
                        <a href="javascript:void(0)">
                            <i class="mdi mdi-comment"></i>
                            <div class="pulse-css"></div>
                        </a>
                        <div class="drop-down animated bounceInDown">
                            <div class="dropdown-content-heading">
                                <span class="pull-left">Messages</span>
                                <a href="javascript:void()" class="pull-right text-white">View All</a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="dropdown-content-body">
                                <ul>
                                    <li class="notification-unread">
                                        <a href="javascript:void()">
                                            <img class="pull-left mr-3 avatar-img" src="<?=base_url()?>public/newtemplate/assets/images/avatar/1.jpg" alt="">
                                            <div class="notification-content">
                                                <div class="notification-heading">Druid Wensleydale</div>
                                                <div class="notification-text">A wonderful serenit has take possession</div><small class="notification-timestamp">08 Hours ago</small>
                                            </div>
                                        </a><span class="notify-close"><i class="ti-close"></i></span>
                                    </li>
                                    <li class="notification-unread">
                                        <a href="javascript:void()">
                                            <img class="pull-left mr-3 avatar-img" src="<?=base_url()?>public/newtemplate/assets/images/avatar/2.jpg" alt="">
                                            <div class="notification-content">
                                                <div class="notification-heading">Fig Nelson</div>
                                                <div class="notification-text">A wonderful serenit has take possession</div><small class="notification-timestamp">08 Hours ago</small>
                                            </div>
                                        </a><span class="notify-close"><i class="ti-close"></i></span>
                                    </li>
                                    <li>
                                        <a href="javascript:void()">
                                            <img class="pull-left mr-3 avatar-img" src="<?=base_url()?>public/newtemplate/assets/images/avatar/3.jpg" alt="">
                                            <div class="notification-content">
                                                <div class="notification-heading">Bailey Wonger</div>
                                                <div class="notification-text">A wonderful serenit has take possession</div><small class="notification-timestamp">08 Hours ago</small>
                                            </div>
                                        </a><span class="notify-close"><i class="ti-close"></i></span>
                                    </li>
                                    <li>
                                        <a href="javascript:void()">
                                            <img class="pull-left mr-3 avatar-img" src="<?=base_url()?>public/newtemplate/assets/images/avatar/4.jpg" alt="">
                                            <div class="notification-content">
                                                <div class="notification-heading">Bodrum Salvador</div>
                                                <div class="notification-text">A wonderful serenit has take possession</div><small class="notification-timestamp">08 Hours ago</small>
                                            </div>
                                        </a><span class="notify-close"><i class="ti-close"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="icons">
                        <a href="javascript:void(0)">
                            <i class="mdi mdi-bell"></i>
                            <div class="pulse-css"></div>
                        </a>
                        <div class="drop-down animated bounceInDown dropdown-notfication">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="javascript:void()">
                                            <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="fa fa-check"></i></span>
                                            <div class="notification-content">
                                                <div class="notification-heading">Druid Wensleydale</div>
                                                <span class="notification-text">A wonderful serenit of my entire soul.</span>
                                                <small class="notification-timestamp">20 May 2018, 15:32</small>
                                            </div>
                                        </a>
                                        <span class="notify-close"><i class="ti-close"></i>
                                                </span>
                                    </li>
                                    <li><a href="javascript:void()"><span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="fa fa-close"></i></span><div class="notification-content"><div class="notification-heading">Inverness McKenzie</div><span class="notification-text">A wonderful serenit of my entire soul.</span> <small class="notification-timestamp">20 May 2018, 15:32</small></div></a>
                                        <span class="notify-close"><i class="ti-close"></i>
                                                </span>
                                    </li>
                                    <li><a href="javascript:void()"><span class="mr-3 avatar-icon bg-success-lighten-2"><i class="fa fa-check"></i></span><div class="notification-content"><div class="notification-heading">McKenzie Inverness</div><span class="notification-text">A wonderful serenit of my entire soul.</span> <small class="notification-timestamp">20 May 2018, 15:32</small></div></a>
                                        <span class="notify-close"><i class="ti-close"></i>
                                                </span>
                                    </li>
                                    <li><a href="javascript:void()"><span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="fa fa-close"></i></span><div class="notification-content"><div class="notification-heading">Inverness McKenzie</div><span class="notification-text">A wonderful serenit of my entire soul.</span> <small class="notification-timestamp">20 May 2018, 15:32</small></div></a>
                                        <span class="notify-close"><i class="ti-close"></i>
                                                </span>
                                    </li>
                                    <li class="text-left"><a href="javascript:void()" class="more-link">Show All Notifications</a>  <span class="pull-right"><i class="fa fa-angle-right"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="icons">
                        <a href="javascript:void(0)" class="log-user">

                            <img src="<?=base_url().$this->STD_mainPHOTO?>" alt=""> <span><?=$this->session->userdata('st_name')?></span>  <i class="fa fa-caret-down f-s-14" aria-hidden="true"></i>
                        </a>
                        <div class="drop-down dropdown-profile animated bounceInDown">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li><a href="<?=base_url()?>Std_dashboard/view">
                                            <i class="icon-user"></i> <span><?=$this->lang->line('MyAccount')?></span></a>
                                    </li>
<!--                                    <li><a href="javascript:void()"><i class="icon-wallet"></i> <span>My Wallet</span></a>-->
<!--                                    </li>-->
<!--                                    <li><a href="javascript:void()"><i class="icon-envelope"></i> <span>Inbox</span></a>-->
<!--                                    </li>-->
<!--                                    <li><a href="javascript:void()"><i class="fa fa-cog"></i> <span>Setting</span></a>-->
<!--                                    </li>-->
<!--                                    <li><a href="javascript:void()"><i class="icon-lock"></i> <span>Lock Screen</span></a>-->
<!--                                    </li>-->
                                    <li><a href="<?=base_url()?>login/logout_std"><i class="icon-power"></i> <span><?=$this->lang->line('LogOut')?></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--**********************************
        Header end
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="nk-sidebar">
        <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label"><?=$this->lang->line('Std_home');?></li>
                <li class="mega-menu mega-menu-lg">
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i><span class="nav-text"><?=$this->lang->line('dashboard');?></span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="#"><?=$this->lang->line('registered_training');?></a></li>
                        <li><a href="index-crypto.html">Crypto</a></li>

                    </ul>
                </li>


            </ul>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->
