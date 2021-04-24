<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>public/assets/images/favicon.png">
<title><?=$page_title?></title>
<script src="<?=base_url()?>public/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<link href="<?=base_url()?>public/assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url()?>public/assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url()?>public/assets/node_modules/switchery/dist/switchery.min.css" rel="stylesheet" />
<link href="<?=base_url()?>public/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
<link href="<?=base_url()?>public/assets/node_modules/datatables/media/css/dataTables.bootstrap4.css" rel="stylesheet">
<link href="<?=base_url()?>public/assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>public/assets/node_modules/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url()?>public/dist/css/style.min.css" rel="stylesheet">
<link href="<?=base_url()?>public/dist/css/pages/file-upload.css" rel="stylesheet">
<link href="<?=base_url()?>public/assets/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
<link href="<?=base_url()?>public/assets/node_modules/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
<link href="<?=base_url()?>public/assets/node_modules/jquery-asColorPicker-master/dist/css/asColorPicker.css" rel="stylesheet">
<link href="<?=base_url()?>public/assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url()?>public/assets/node_modules/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
<link href="<?=base_url()?>public/assets/node_modules/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<link href="<?=base_url()?>public/dist/css/pages/widget-page.css" rel="stylesheet">
<link href="<?=base_url()?>public/assets/node_modules/tablesaw-master/dist/tablesaw.css" rel="stylesheet">
<link href="<?=base_url()?>public/assets/node_modules/chartist-js/dist/chartist.min.css" rel="stylesheet">
<link href="<?=base_url()?>public/assets/node_modules/chartist-js/dist/chartist-init.css" rel="stylesheet">
<link href="<?=base_url()?>public/assets/node_modules/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="<?=base_url()?>public/assets/node_modules/jsgrid/jsgrid.min.css" />
<link type="text/css" rel="stylesheet" href="<?=base_url()?>public/assets/node_modules/jsgrid/jsgrid-theme.min.css" />
<link href="https://fonts.googleapis.com/css?family=El+Messiri&amp;subset=arabic,cyrillic" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link href="<?=base_url()?>public/dist/css/all.css" rel="stylesheet">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
<!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>--->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --->
<!-- WARNING: Respond.js doesn't work if you view the page via file: --->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif] -->

<script type="text/javascript">
    function chkBox(selector)
    {
        if($(selector).is(":checked"))
        {
            return 1;
        }
        else{ return 0;}
    }
    function draw(url , selector )
    {
        $('.tablesaw').dataTable().fnDestroy();
        $.ajax({
            url : url ,
            beforeSend: function ( xhr )
            {
                xhr.overrideMimeType("text/plain; charset=utf-8");
            } ,
            type: 'POST',
            data:{random:Math.random()} ,
            success:function(data)
            {

                $(selector).html(data);

            }
        });
    }
    function _PREFIX()
    {
        return m_PREFIX = document.getElementById("_PRIFIX").value;
    }
    function get_chkbox_val(selector)
    {
        if($(selector).is(":checked"))
        {
            return 1;
        }
        else{ return 0;}
    }
    function fetch_all(url , selector)
    {
        $.ajax({
            url : url,
            type:'POST',
            data:{random:Math.random()} ,
            success: function(data)
            { $(selector).html(data); }
        });
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
            { $(selector).html(data); }
        });
    }
    function draw_such_params(url , selector , params )
    {
        //var arr =  $("param_selector,param_selector").serialize()
        $.ajax({
            url : url ,
            beforeSend: function ( xhr )
            {
                xhr.overrideMimeType("text/plain; charset=utf-8");
            } ,
            type: 'POST',
            data:   params   ,
            success:function(data)
            {
                $(selector).html(data);

            }
        });
    }


</script>
</head>

<body class="skin-blue fixed-layout">
				  <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> <?=$this->lang->line('today_ress');?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("today_ress_mss");?></h6>
                               
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
                          draw('<?=base_url()?>Tv_ci/get_today_programs' , '#tdata' );
                          setInterval(function () {
                              draw('<?=base_url()?>Tv_ci/get_today_programs' , '#tdata' );
                          },30000);

                      });




                  </script>


<script src="<?=base_url()?>public/dist/js/pages/jasny-bootstrap.js"></script>

<script src="<?=base_url()?>public/assets/node_modules/datatables/datatables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script defer src="<?=base_url()?>public/dist/js/all.js"></script>





</body>
</html>