﻿<?php
include_once ('group.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl" lang="ar">
<head>
    <title>لوحة تحكم الإدارة </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Window-target" content="_top" />
</head>
<style type="text/css">
    body{background:#f8f8f8;color:#434343;font:bold 17px arial;margin:0px 0px 0px 0px;padding:0px;font-size:100% !important;list-style-type:none;}
    a:link,body_alink{color:#0F5065;text-decoration:none;}a:visited,body_avisited{color:#0F5065;text-decoration:none;}a:hover,a:active,body_ahover{color:#1AA6C0;text-decoration:none;}
    .page{background:#f8f8f8;color:#000000;padding-top:20px}
    #show_result{
        background-color:#fff; padding:10px; position:relati;
        border: 1px solid #ccc; border-radius:3px; box-shadow:0 0 10px #ddd inset;
        margin-bottom:10px;
    }
    .ButtonIn,.ButtonIn:hover ,.RegPass .RegisterNew,.RegPass .RegisterNew:hover,.RegPass .LostPass,.RegPass .LostPass:hover ,.ButtonDo ,.ButtonDo:hover { -webkit-transition:all 0.4s ease-in-out 0s; -moz-transition:all 0.4s ease-in-out 0s; -o-transition:all 0.4s ease-in-out 0s; -ms-transition:all 0.4s ease-in-out 0s; transition:all 0.4s ease-in-out 0s;}
    .ButtonIn:hover { background:none repeat scroll 0 0 #c3d0db; text-shadow:0 1px 0 #dfe7ee;}
    .ButtonIn { background:none repeat scroll 0 0 #fff; border:1px solid #a3bace; border-radius:4px; -moz-border-radius:4px; -webkit-border-radius:4px; color:#708190; font-family:"Droid Arabic Kufi","Open Sans",sans-serif; font-size:14px;}
    .tborder{ background-color:#fbfbfb; border:1px solid #eeeeee; font-family:"Droid Arabic Kufi","Open Sans",sans-serif; font-size:0.75em; overflow:hidden; padding:4px;}
    .tcat{background:#708291;color:#FFFFFF; font-family:"Droid Arabic Kufi","Open Sans",sans-serif; text-shadow:0 1px 0 #000;}
    .tcat a:link,.tcat_alink{color:#e1e1e1;text-decoration:none;}
    .tcat a:visited,.tcat_avisited{color:#e1e1e1;text-decoration:none;}
    .tcat a:hover,.tcat a:active,.tcat_ahover{color:#FFFFCC;text-decoration:underline;}
    .panelsurround{background:#fefefe;color:#000000;}
    .panel{background:#fefefe;color:#000000;padding:0px;border:0px outset;}
    .smallfont{font-size:11px;font-weight:bold;font-family:"Droid Arabic Kufi","Open Sans",sans-serif;}
    .time{color:#FF0000;}
    .highlight{color:#FF0000;font-weight:bold;}
    .fieldset { background-color:#fff; font-weight:lighter;margin-bottom:10px;}
    .fieldset,.fieldset td,.fieldset p,.fieldset li { font-size:12px; font-weight:lighter; font-family:"Droid Arabic Kufi","Open Sans",sans-serif;}
    .fieldset img { max-width:100px !important;}
    .fieldset img { max-width:100px !important;}
    legend{color:#2c9d9c;font-size:11px;font-weight:bold;}
    select{background:#fdfdfd;color:#4e81a4;font:12px "Droid Arabic Kufi","Open Sans",sans-serif !important;border:1px solid #ccc;}
    option,optgroup{font-size:12px;font-family:"Droid Arabic Kufi","Open Sans",sans-serif !important;}
    select { width:200px;}
    textarea,.bginput{background:#d9ebeb;font:11px tahoma !important; border:1px solid #afd4d3; border-radius:6px; -moz-border-radius:6px; -webkit-border-radius:6px; padding:4px; margin:5px 0;}
    .bginput option,.bginput optgroup{font-size:11px;font-family:tahoma !important;}
    textarea:focus,.bginput:focus { background:#fff; -webkit-box-shadow:0 0 10px #b4e6eb; -moz-box-shadow:0 0 10px #b4e6eb ; box-shadow:0 0 10px #b4e6eb;}
    .bginput:focus ,textarea ,.bginput{ -webkit-transition:all 0.4s ease-in-out 0s; -moz-transition:all 0.4s ease-in-out 0s; -o-transition:all 0.4s ease-in-out 0s; -ms-transition:all 0.4s ease-in-out 0s; transition:all 0.4s ease-in-out 0s;}
    .bginput:focus { background:none !important ; box-shadow:none !important ;}
    .bginput:focus { background:none !important ; box-shadow:none !important ;}
    .thead{background:#d9ebeb;color:#268180;font-size:15px;text-shadow:0 1px 0 #fff;border-top:1px solid #afd4d3;border-bottom:1px solid #afd4d3;}
    .thead a:link,.thead_alink{color:#268180;}
    .thead a:visited,.thead_avisited{color:#268180;}
    .thead a:hover,.thead a:active,.thead_ahover{color:#53b9b8;}
    .Tborderforum{ background:#fbfbfb; border:1px solid #dbe2e6; font-family:"Droid Arabic Kufi","Open Sans",sans-serif; font-size:0.75em; margin:5px; overflow:hidden; padding:4px;}
    FD1Screen ,.FD2Screen { display:none;}
    FD1Screen ,.FD2Screen ,.FD3Screen ,.FD4Screen ,.FD5Screen ,.FD6Screen ,.ToolsThread { display:table-cell;}
    .alt1,.alt1Active{ background:none repeat scroll 0 0 #fff; border-bottom:1px solid #dbe2e6; color:#000000;}
    .alt2,.alt2Active{ background:none repeat scroll 0 0 #fff; border-bottom:1px solid #dbe2e6; color:#319998;}
    .notice{ width:80%;font-family: Tahoma;text-transform:capitalize;text-align: center;padding: 4pt;border: 2pt;border-style: double;border-color: black;padding:50px;background-color:#FFF6BF;border:1px solid #FFD324; }
    .PostUserName { font-family:"Droid Arabic Kufi","Open Sans",sans-serif; font-size:13px;line-height:7px; margin-top:-5px;font-weight:bold;}
    .IconThread ,.SearchSub ,.SubForumsTitle ,.EditNote ,.TmpPost .FooterPost .Controls li,.TmpPost .HeaderPost .Left:hover,.TmpPost .HeaderPost .Left ,#vB_Editor_QR_textarea:focus ,#UserBar .ContentBar .ContentBarUesr li ,#UserBar .ContentBar .ContentBarUesr li:hover,.TmpPost .HeaderPost .ActivityUser,.TmpPost .HeaderPost .ActivityUser:hover ,.TagScreen .TagListCell:hover ,.TagScreen .TagListCell ,.IconFooterCounct li ,.IconFooterMain a:hover ,.FooterRigthCounct li:hover ,.FooterRigthCounct li ,.FooterRigth li,.FooterRigth li:hover ,.FooterLeft .FooterSc .FaSc li ,.FooterLeft .FooterSc .FaSc li:hover ,textarea:focus,.bginput:focus ,textarea ,.bginput ,#HeaderUser .ContentUser .IconsAS .ForumAlerts li:hover,#HeaderUser .ContentUser .IconsAS .ForumAlerts li ,#NavTopLink .RePage .ReLast ,.F-HomeMainTitle,.F-HomeMainTitle:hover ,#ControlsPostToolbar .Right,#ControlsPostToolbar .Right:hover ,.TmpPost .ContentPost .Message a,.TmpPost .ContentPost .Message a:hover ,.CounctAlerts li ,.CounctAlerts li:hover ,#HeaderMain .HeaderLinkMain .LinkMain .LinkLeft a ,#HeaderMain .HeaderLinkMain .LinkMain .LinkLeft a:hover ,.ButtonIn,.ButtonIn:hover ,.RegPass .RegisterNew,.RegPass .RegisterNew:hover,.RegPass .LostPass,.RegPass .LostPass:hover ,.ButtonDo ,.ButtonDo:hover { -webkit-transition:all 0.4s ease-in-out 0s; -moz-transition:all 0.4s ease-in-out 0s; -o-transition:all 0.4s ease-in-out 0s; -ms-transition:all 0.4s ease-in-out 0s; transition:all 0.4s ease-in-out 0s;}
    .IconThread { background-color:#fff; border:1px solid #ccc; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; color:#000; float:right; font-family:"Droid Arabic Kufi","Open Sans",sans-serif; font-size:0.9em; font-weight:lighter; margin:5px; padding:2px 5px; width:auto; height:30px;}
    .IconThread img { display:none;}
    .IconThread:hover { background:none repeat scroll 0 0 #e6e6e6; border:1px solid #adadad; color:#333; text-shadow:1px 1px 1px #fff;}
    .IconThread a { color:#000; text-decoration:none;}
    .IconThread a:hover { color:#000; text-decoration:none;}
    .BoxShadow { -moz-box-shadow:0 0 3px #ddd; -webkit-box-shadow:0 0 3px #ddd; box-shadow:0 0 3px #ddd;}
    .simptip-position-bottom:before { border-bottom-color:#323232;}[data-tooltip].simptip-position-bottom:after { background-color:#323232; color:#ecf0f1; font-size:9px;}.simptip-position-bottom.half-arrow:before { border-right:7px solid #323232;}

</style>
<body>
<div class="page">
    <table class="tborder" cellpadding="6" cellspacing="1" border="0" width="90%" align="center">
        <tr>
            <td class="tcat">قائمة الحلقات</td>
        </tr>
        <tr>
            <td class="panelsurround" align="center">
                <div class="panel">
                    <div style="width:auto" align="right">
                        <?php
                       // if(isset($_GET["do"]))
                        $dos = "";//$_GET["do"];
                        if($dos == "editall") {
                        $idcat = intval($_GET['catid']);
                        require_once('mypager.class.php');
                        $pager = new MyPager(20);
                        $pager->on_first_last = true;
                        $pager->on_prev_next = true;
                        $pager->links_range = 5;
                        $res = mysqli_query($db,"SELECT COUNT(id) FROM drame_episodios WHERE main_cat='$idcat' ORDER BY id DESC") or die(mysqli_error($db));
                        $pager->total = mysqli_result($res, 0, 0);
                        if($pager->total == "0"){
                            echo "<div align=\"center\"> <p>&nbsp;</p> <div class=\"notice\"\">
													<font color=\"#CC3300\"><b>لا يوجد أي حلقات مضافة لهذه الدراما</b></font>
											</div></div><br />";
                        }else{
                        list($r1, $r2) = $pager->GetRange();
                        ?>
                        <div class="TotalPages">
                            <div class="pagenav" align="left">
                                <table class="tborder" cellpadding="3" cellspacing="1" border="0">
                                    <tr>
                                        <?php $pager->PrintLinks(); ?>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <table class="Tborderforum" cellpadding="6" cellspacing="1" border="0" width="100%" align="center">
                            <tbody>
                            <tr>
                                <td class="tcat" align="center">معلومات</td>
                                <td class="tcat" align="center">المشاهدات</td>
                                <td class="tcat" align="center">حالة الحلقة</td>
                                <td class="tcat" align="center">خيارات</td>
                            </tr>
                            </tbody>
                            <?php
                            $result = mysqli_query($db,"SELECT * FROM drame_episodios WHERE main_cat='$idcat' ORDER BY id DESC LIMIT " . $pager->offset . ", " . $pager->limit) or die(mysqli_error($db));
                            require_once ('../settings.php');
                            $url = $settings['siteurl'];
                            while($row = mysqli_fetch_array($result)){
                                $ids = $row['id'];
                                $idcat = $row['main_cat'];
                                $numep = $row['num_of_episodios'];
                                $dataadd = $row['date_add'];
                                $view = $row['view'];
                                $typestr = $row['typestr'];
                                if($typestr == "sub"){
                                    $trs = "مترجمة";
                                }else{
                                    $trs = "غير مترجمة";
                                }
                                $resultss = mysqli_query($db,"SELECT * FROM drame_catoregies WHERE id='$idcat' ORDER BY id") or die(mysqli_error($db));
                                $fetss = @mysqli_fetch_array($resultss);
                                $fetsars = $fetss['name_arabic'];
                                $tytt = $fetss['type'];
                                if($tytt == "dr"){
                                    $ge = "دراما";
                                }elseif($tytt == "pr"){
                                    $ge = "برنامج";
                                }else{
                                    $ge = "دراما";
                                }
                                $link_e = "<a href='epsoid.php?do=edit&id=".$ids."'>تعديل</a>";
                                $link_d = "<a href='epsoid.php?do=delete&id=".$ids."'>حذف</a>";
                                echo '
												<tr>
													<td class="FD2Screen thead">إسم الدراما : &nbsp;<font color="green">'.$fetsars.'</font><br />رقم الحلقة : &nbsp;<font color="red">'.$numep.'</font><br />أضيفت في : &nbsp;<font color="blue">'.$dataadd.'</font><br />التصنيف : &nbsp;<font color="gray">'.$ge.'</font></td>
													<td class="FD2Screen thead" align="center">'.$view.'</td>
													<td class="FD2Screen thead" align="center">'.$trs.'</td>
													<td class="FD2Screen thead" align="center">'.$link_e.' | '.$link_d.'</td>
												</tr>
											';
                            }
                            echo '</table>';
                            }

                            }
                        elseif($dos == "edit"){
                                $referer = $_SERVER['HTTP_REFERER'];
                                if(isset($_POST['submit_edit_ep'])){
                                    $ref = $_POST['ref'];
                                    $ide = $_POST['id'];
                                    $types = $_POST['types'];
                                    $down_link1 = $_POST['down_link1'];
                                    $down_link2 = $_POST['down_link2'];
                                    $down_link3 = $_POST['down_link3'];
                                    $openload_co = $_POST['openload_co'];
                                    $videa_hu = $_POST['videa_hu'];
                                    $google_2 = $_POST['google_2'];
                                    $google_1 = $_POST['google_1'];
                                    $google_3 = $_POST['google_3'];
                                    $estream = $_POST['estream'];
                                    $video_meta_ua = $_POST['video_meta_ua'];
                                    $archive = $_POST['archive'];
                                    $myvi_ru = $_POST['myvi_ru'];
                                    $VEEVR = $_POST['VEEVR'];
                                    $cloudy_ec = $_POST['cloudy_ec'];

                                    $keeload = $_POST['keeload'];

                                    $io_ua = $_POST['io_ua'];
                                    $MEDIAFIRE = $_POST['MEDIAFIRE'];
                                    $YOUTUBE = $_POST['YOUTUBE'];
                                    $JOKEROO = $_POST['JOKEROO'];
                                    $DAILIMOTION = $_POST['DAILIMOTION'];
                                    $google_3 = $_POST['google_3'];
                                    $mp4upload = $_POST['mp4upload'];
                                    $ok_ru = $_POST['ok_ru'];
                                    $VIDTO = $_POST['VIDTO'];
                                    @mysqli_query($db,"UPDATE drame_episodios SET typestr = '$types', download_link = '$down_link1', download_link2 = '$down_link2', download_link3 = '$down_link3', openload_co = '$openload_co', rutube = '$videa_hu', google_2 = '$google_2', ZIPPYSHARE = '$estream', cloudy_ec = '$cloudy_ec', vip = '$archive', myvi_ru = '$myvi_ru', myvi_ru = '$myvi_ru', VEEVR = '$VEEVR', ok_ru = '$ok_ru', JOKEROO = '$JOKEROO', keeload = '$keeload', MEDIAFIRE = '$MEDIAFIRE', io_ua = '$io_ua', mp4upload = '$mp4upload', DAILIMOTION = '$DAILIMOTION', YOUTUBE = '$YOUTUBE', google_3 = '$google_3', google_1 = '$google_1', VIDTO = '$VIDTO' WHERE id='$ide'") OR die(mysqli_error($db));
                                    echo "<p>&nbsp;</p><p>&nbsp;</p><p align=\"center\"><img border=\"0\" src=\"images/processing.gif\"></p>";
                                    echo "<p align=\"center\">تم التعديل على الحلقة بنجاح<br />جاري إعادة التوجيه</p>";
                                    echo "<META HTTP-EQUIV=\"refresh\" content=\"3;URL=$ref\">";
                                    exit();
                                }else{
                                    $ide = intval($_GET['id']);
                                    $result = mysqli_query($db,"SELECT * FROM drame_episodios WHERE id='$ide' ORDER BY id") or die(mysqli_error($db));
                                    $num = @mysqli_num_rows($result);
                                    if($num == 1){
                                        $row = @mysqli_fetch_array($result);
                                        echo '<form  method="post" action="epsoid.php?do=edit">';
                                        echo '
												<fieldset class="fieldset">
													<legend>تعديل الحلقة رقم '.$row['num_of_episodios'].'</legend>
													<table cellpadding="0" cellspacing="3" border="0" width="400">
														<tr>
															<td width="100%" valign="top">
																<div><label>هل الحلقة مترجمة أم لا</label></div>
																<select name="types" id="">
																	';
                                        if($row["typestr"] == "sub"){
                                            $sssss0 = 'selected="selected"';
                                        }elseif($row["typestr"] == "raw"){
                                            $sssss1 = 'selected="selected"';
                                        }else{
                                            $sssss0 = 'selected="selected"';
                                        }
                                        echo '<option '.$sssss0.' value="sub">مترجمة</option>';
                                        echo '<option '.$sssss1.' value="raw">غير مترجمة</option>';
                                        echo '
																</select>
															</td>
														</tr>
														<tr>
															<td width="100%" valign="top">
																<div><label>رابط التحميل الأول : <input type="text" value="'.$row['download_link'].'" class="bginput" name="down_link1" maxlength="500" id="url" size="60" /></label></div>
																<div><label>رابط التحميل الثاني : <input type="text" value="'.$row['download_link2'].'" class="bginput" name="down_link2" maxlength="500" id="url" size="60" /></label></div>
																<div><label>رابط التحميل الثالث : <input type="text" value="'.$row['download_link3'].'" class="bginput" name="down_link3" maxlength="500" id="url" size="60" /></label></div>
																<div><label>رابط مشاهدة سيرفر openload_co : <input type="text" value="'.$row['openload_co'].'" class="bginput" name="openload_co" maxlength="500" id="url" size="60" /></label></div>
																<div><label>رابط مشاهدة سيرفر videa-hu : <input type="text" value="'.$row['rutube'].'" class="bginput" name="videa_hu" maxlength="500" id="url" size="60" /></label></div>
																<div><label>رابط مشاهدة سيرفر google_2 : <input type="text" value="'.$row['google_2'].'" class="bginput" name="google_2" maxlength="500" id="url" size="60" /></label></div>
																<div><label>رابط مشاهدة سيرفر estream : <input type="text" value="'.$row['ZIPPYSHARE'].'" class="bginput" name="estream" maxlength="500" id="url" size="60" /></label></div>
																<div><label>رابط مشاهدة سيرفر video_meta_ua : <input type="text" value="'.$row['video_meta_ua'].'" class="bginput" name="cloudy_ec" maxlength="500" id="url" size="60" /></label></div>
																<div><label>رابط مشاهدة سيرفر archive : <input type="text" value="'.$row['vip'].'" class="bginput" name="archive" maxlength="500" id="url" size="60" /></label></div>
																<div><label>رابط مشاهدة سيرفر myvi_ru : <input type="text" value="'.$row['myvi_ru'].'" class="bginput" name="myvi_ru" maxlength="500" id="url" size="60" /></label></div>
																<div><label>رابط مشاهدة سيرفر tune.pk : <input type="text" value="'.$row['VEEVR'].'" class="bginput" name="VEEVR" maxlength="500" id="url" size="60" /></label></div>
																<div><label>رابط مشاهدة سيرفر ok_ru : <input type="text" value="'.$row['ok_ru'].'" class="bginput" name="ok_ru" maxlength="500" id="url" size="60" /></label></div>
																<div><label>رابط مشاهدة سيرفر VIDTO : <input type="text" value="'.$row['VIDTO'].'" class="bginput" name="VIDTO" maxlength="500" id="url" size="60" /></label></div>
															<div><label>رابط مشاهدة سيرفر rapidvideo : <input type="text" value="'.$row['JOKEROO'].'" class="bginput" name="JOKEROO" maxlength="500" id="url" size="60" /></label></div>
															
<div><label>رابط مشاهدة سيرفر DAILIMOTION-part1 : <input type="text" value="'.$row['YOUTUBE'].'" class="bginput" name="YOUTUBE" maxlength="500" id="url" size="60" /></label></div>
															
<div><label>رابط مشاهدة سيرفر DAILIMOTION-part2 : <input type="text" value="'.$row['DAILIMOTION'].'" class="bginput" name="DAILIMOTION" maxlength="500" id="url" size="60" /></label></div>
															
<div><label>رابط مشاهدة سيرفر keeload : <input type="text" value="'.$row['keeload'].'" class="bginput" name="keeload" maxlength="500" id="url" size="60" /></label></div>
															
<div><label>رابط مشاهدة سيرفر envul : <input type="text" value="'.$row['mp4upload'].'" class="bginput" name="mp4upload" maxlength="500" id="url" size="60" /></label></div>
<div><label>رابط مشاهدة سيرفر google_1 : <input type="text" value="'.$row['google_1'].'" class="bginput" name="google_1" maxlength="500" id="url" size="60" /></label></div>
<div><label>رابط مشاهدة سيرفر streamango : <input type="text" value="'.$row['cloudy_ec'].'" class="bginput" name="cloudy_ec" maxlength="500" id="url" size="60" /></label></div>

<div><label>رابط مشاهدة سيرفر mail : <input type="text" value="'.$row['google_3'].'" class="bginput" name="google_3" maxlength="500" id="url" size="60" /></label></div>
															
</td>
														</tr>
													</table>
												</fieldset>
												<br />
												<div style="margin-top:6px" align="center">
													<input type="hidden" name="ref" class="ButtonIn" value="'.$referer.'" />
													<input type="hidden" name="id" class="ButtonIn" value="'.$ide.'" />
													<input type="submit" name="submit_edit_ep" class="ButtonIn" value="تعديل" />
												</div>
											';
                                        echo '</form>';
                                    }else{
                                        echo "<p>&nbsp;</p><p>&nbsp;</p><p align=\"center\"><img border=\"0\" src=\"images/processing.gif\"></p>";
                                        echo "<p align=\"center\">لم يتم العثور على الحلقة المحددة<br />جاري إعادة التوجيه</p>";
                                        echo "<META HTTP-EQUIV=\"refresh\" content=\"3;URL=$referer\">";
                                        exit();
                                    }
                                }
                            }
                        elseif($dos == "delete"){
                                $referer = $_SERVER['HTTP_REFERER'];
                                $ids = intval($_GET['id']);
                                @mysqli_query($db,"DELETE FROM drame_episodios WHERE id = '$ids'") or die(mysqli_error($db));
                                echo "<p>&nbsp;</p><p>&nbsp;</p><p align=\"center\"><img border=\"0\" src=\"images/processing.gif\"></p>";
                                echo "<p align=\"center\">تم حذف الحلقة بنجاح<br />جاري إعادة التوجيه</p>";
                                echo "<META HTTP-EQUIV=\"refresh\" content=\"3;URL=$referer\">";
                                exit();
                            }
                        else{
                            require_once('mypager.class.php');
                            $pager = new MyPager(20);
                            $pager->on_first_last = true;
                            $pager->on_prev_next = true;
                            $pager->links_range = 5;
                            $res = mysqli_query($db,"SELECT COUNT(id) FROM drame_episodios ORDER BY id DESC") or die(mysqli_error($db));
                            $pager->total = mysqli_result($res, 0, 0);
                            if($pager->total == "0"){
                                echo "<div align=\"center\"> <p>&nbsp;</p> <div class=\"notice\"\">
													<font color=\"#CC3300\"><b>لا يوجد أي إضافات حتى الآن</b></font>
											</div></div><br />";
                            }else{
                            list($r1, $r2) = $pager->GetRange();
                            ?>
                            <div class="TotalPages">
                                <div class="pagenav" align="left">
                                    <table class="tborder" cellpadding="3" cellspacing="1" border="0">
                                        <tr>
                                            <?php $pager->PrintLinks(); ?>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <table class="Tborderforum" cellpadding="6" cellspacing="1" border="0" width="100%" align="center">
                                <tbody>
                                <tr>
                                    <td class="tcat" align="center">معلومات</td>
                                    <td class="tcat" align="center">المشاهدات</td>
                                    <td class="tcat" align="center">حالة الحلقة</td>
                                    <td class="tcat" align="center">خيارات</td>
                                </tr>
                                </tbody>
                                <?php
                                $result = mysqli_query($db,"SELECT * FROM drame_episodios ORDER BY id DESC LIMIT " . $pager->offset . ", " . $pager->limit) or die(mysqli_error($db));
                                require_once ('../settings.php');
                                $url = $settings['siteurl'];
                                while($row = mysqli_fetch_array($result)){
                                    $ids = $row['id'];
                                    $idcat = $row['main_cat'];
                                    $numep = $row['num_of_episodios'];
                                    $dataadd = $row['date_add'];
                                    $view = $row['view'];
                                    $typestr = $row['typestr'];
                                    if($typestr == "sub"){
                                        $trs = "مترجمة";
                                    }else{
                                        $trs = "غير مترجمة";
                                    }
                                    $resultss = mysqli_query($db,"SELECT * FROM drame_catoregies WHERE id='$idcat' ORDER BY id") or die(mysqli_error($db));
                                    $fetss = @mysqli_fetch_array($resultss);
                                    $fetsars = $fetss['name_arabic'];
                                    $tytt = $fetss['type'];
                                    if($tytt == "dr"){
                                        $ge = "دراما";
                                    }elseif($tytt == "pr"){
                                        $ge = "برنامج";
                                    }else{
                                        $ge = "دراما";
                                    }
                                    $link_e = "<a href='epsoid.php?do=edit&id=".$ids."'>تعديل</a>";
                                    $link_d = "<a href='epsoid.php?do=delete&id=".$ids."'>حذف</a>";
                                    echo '
												<tr>
													<td class="FD2Screen thead">إسم الدراما : &nbsp;<font color="green">'.$fetsars.'</font><br />رقم الحلقة : &nbsp;<font color="red">'.$numep.'</font><br />أضيفت في : &nbsp;<font color="blue">'.$dataadd.'</font><br />التصنيف : &nbsp;<font color="gray">'.$ge.'</font></td>
													<td class="FD2Screen thead" align="center">'.$view.'</td>
													<td class="FD2Screen thead" align="center">'.$trs.'</td>
													<td class="FD2Screen thead" align="center">'.$link_e.' | '.$link_d.'</td>
												</tr>
											';
                                }
                                echo '</table>';
                                }
                                }
                                ?>
                    </div>
                </div>
            </td>
        </tr>
        <table>
</div>
</body>
</html>