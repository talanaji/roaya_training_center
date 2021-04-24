
    <link rel="stylesheet" href="<?=base_url()?>public/bootstrap-tagsinput/bootstrap-tagsinput.css">
        <script src="<?=base_url()?>public/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
 
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
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
          <!-- <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> <?=$this->lang->line('add_doros');?></button>-->
        </div>
    </div>
</div>
<!-- 
   <!-- Row -->
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $page_title;?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("add_edit_crs_mss");?></h6>
					     <div class="table-responsive m-t-40">
								   <table id="example" class="table display table-bordered table-striped">
									<thead>
									  <tr>
                                        <th><?php echo $this->lang->line("comm_name");?></th>
                                        <th><?php echo $this->lang->line("crs_name");?></th>
                                        <th><?php echo $this->lang->line("active");?></th>
                                        <th><?php echo $this->lang->line("operations");?></th>
                                    </tr>
						</thead>
						<tfoot>
                                <tr>
                                    <th><?php echo $this->lang->line("comm_name");?></th>
                                    <th><?php echo $this->lang->line("crs_name");?></th>
                                    <th><?php echo $this->lang->line("active");?></th>
                                    <th><?php echo $this->lang->line("operations");?></th>
                                </tr>
						</tfoot>
						<tbody id="tdata">
 					    </tbody>
					</table>  
                           </div>
                        </div>	
                    </div>	
                </div>	
                </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalbody">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 </div>
            </div>
        </div>
    </div>
   <script type="text/javascript">
	$(document).ready(function(e) { 
          $(window).keydown(function(event){
            if(event.keyCode == 13) {
              event.preventDefault();
              return false;
            }
          });
          draw("<?=base_url()?>Courses_ci/get_comments/" , "#tdata");
              $(document).on('click','.Del',function(){
					var pk = $(this).attr('title');
						 swal({
                              title: '<?php echo $this->lang->line("Confirm_del");?>?',
                              type: 'warning',
                              showCancelButton: true,
                              confirmButtonColor: '#3085d6',
                              cancelButtonColor: '#d33',
                              confirmButtonText: '<?php echo $this->lang->line("yes_delete");?>',
                               cancelButtonText: '<?php echo $this->lang->line("not_delete");?>'
                            }).then((result) => {
                      if (result.value) {
                          draw("<?=base_url()?>Courses_ci/del_items/Comments/comm_code/"+pk , "");
                          draw("<?=base_url()?>Courses_ci/get_comments/" , "#tdata");
                       }
                    })
 				});
              $(document).on('click','.chks_box',function () {
                  var th = $(this);
                  var v = th.attr('title');
                  if(th.is(":checked"))
                      a = 1;
                  else
                      a=0;
                  $.ajax({
                      url:'<?=base_url()?>Courses_ci/update_comment',
                      type:'POST',
                      data:{random:Math.random(),
                        pk_post : v,
                          vals : a
                      },
                      success:function (data) {

                      }
                  })
              });
              $(document).on('click','.show_comment',function () {
            var th = $(this);
            var v = th.attr('title');

            $.ajax({
                url:'<?=base_url()?>Courses_ci/show_comm_details',
                type:'POST',
                data:{random:Math.random(),
                    pk_post : v
                },
                success:function (data) {
                  var en = JSON.parse(data);
                  $("#exampleModalLongTitle").text(en.comm_title + " - "+en.comm_name);
                  $("#modalbody").text(en.comm_txt);
                }
            })
        });
        });
 	
	
	
	 function showSelectsd()
	  {
		var selO = document.getElementsByName('mySel')[0];
		var selValues = [];
		for(i=0; i < selO.length; i++){
			if(selO.options[i].selected){
				selValues.push(selO.options[i].value);
			}
		}
	 }   
			   
</script>

 