
	
		
		
        <!-- Start Page title and tab -->
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="header-action">
                        <h1 class="page-title"> <?=$page_title?></h1>
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
                <div class="tab-content">
                  
                <div class="card">
                    <div class="card-body">
                 <!-- Row -->
              <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?=$page_title?></h4>
                              <h6 class="card-subtitle"><?php echo $this->lang->line("Add_edit_res_mess");?></h6>
    <form method="post" enctype="multipart/form-data" id="student_form2">
    		<input type="hidden" id="curr_code" name="curr_code" value="" />
		  	<input type="hidden" id="_PRIFIX" name="_PRIFIX" value="<?=STUDENT_PRIFIX;?>" />
		  <div class="form-body">
		    <hr class="light-grey-hr"/>
              <div class="row">

			    <div class="col-md-6">
		            <div class="form-group">
                          <?=$this->lang->line('res_std_code');?> <span class="text-danger">*</span>
                     <div class="controls">
                        <select class="select2 form-control custom-select" id="res_std_code" name="res_std_code" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                            <option value=""><?=$this->lang->line('choose');?></option>
                            <?php 
							  draw_lists2("students" , "st_code" , "st_name" ,"st_active","1");
							?>
                        </select>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                      <div class="form-group">
                          <?=$this->lang->line('res_paid_price');?><span class="text-danger">*</span>
                          <div class="controls">
                              <input type='text'  class="form-control" id="res_paid_price" name="res_paid_price"  required data-validation-required-message="<?=$this->lang->line('required');?> " />
                          </div>
                      </div>
                  </div>

                <!--			    <div class="col-md-6">-->
                <!--		          <div class="form-group">-->
                <!--                   <? //=$this->lang->line('res_room_code');?><!-- <span class="text-danger">*</span>-->
                <!--                     <div class="controls">-->
                <!--                            <select class="select2 form-control custom-select" id="res_room_code" name="res_room_code" required data-validation-required-message=" <?//=$this->lang->line('required');?><!-- ">-->
                <!--                            <option value=""> <?//=$this->lang->line('choose');?> </option>-->
                <!--                            <?php //
                //							 draw_lists("rooms" , "room_code" , "room_name","room_active","1");
                //							?>
                <!--                        </select>-->
                <!--                   </div>-->
                <!--				</div> -->
                <!--			 </div>-->

           <div id="product" class="row">
			 <div class="row product" name="product" id="product-1" title="<?='-1'?>">

             <div class="col-md-3">
		            <div class="form-group">
                      <?=$this->lang->line('res_cors_code');?><span class="text-danger">*</span>
                       <div class="controls">
                        <select class="select2 form-control custom-select" id="res_cors_code<?='-1'?>" name="res_cors_code[]" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                            <option value=""><?=$this->lang->line('choose');?></option>
                            <?php 
							  draw_lists2("courses" , "c_code" , "c_name","c_active","1");
							?>
                        </select>
                     </div>
				   </div>
				</div>

		     <div class="col-md-3">
		            <div class="form-group">
                      <?=$this->lang->line('res_teach_code');?><span class="text-danger">*</span>
                        <div class="controls">
                         <select class="select2 form-control custom-select" id="res_teach_code<?='-1'?>" name="res_teach_code[]" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                            <option value=""><?=$this->lang->line('choose');?></option>
                            <?php 
							  draw_lists2("teachers" , "te_code" , "te_name" ,"te_active","1");
							?>
                        </select>
                    </div>
				  </div>
				</div>

             <div class="col-md-2">
                 <div class="form-group">
                    <?=$this->lang->line('res_time_start');?><span class="text-danger">*</span>
                      <div class="controls">
                        <input type='text'  class="form-control dt dt_from" autocomplete="false" onblur="get_existance('-1')"  id="res_time_start<?='-1'?>" name="res_time_start[]"  required data-validation-required-message="<?=$this->lang->line('required');?> " />              </div>
                   </div>
                </div>

		     <div class="col-md-2">
                    <div class="form-group">
                       <?=$this->lang->line('res_time_end');?><span class="text-danger">*</span>
                       <div class="controls">
                          <input type='text' class="form-control dt dt_to" autocomplete="false" onblur="get_existance('-1')" id="res_time_end<?='-1'?>" name="res_time_end[]"  required data-validation-required-message="<?=$this->lang->line('required');?> " />
                       </div>
                    </div>
              </div>

  		     <div class="col-md-2">
		        <div class="form-group">
                   <?=$this->lang->line('res_teacher_percent');?><span class="text-danger">*</span>
                   <div class="controls">
                     <input type='text'  class="form-control" onchange="get_existance('-1')"  id="res_teacher_percent<?='-1'?>" name="res_teacher_percent[]"  required data-validation-required-message="<?=$this->lang->line('required');?> " />
                   </div>
				</div> 
		   </div>

         	 <div class="col-md-8">
			<div class="form-group">
			  <label class="control-label mb-10"><?=$this->lang->line('te_notes');?></label>
				  <textarea class="form-control" id="res_admin_note<?='-1'?>" name="res_admin_note[]"></textarea>
				 </div>
			</div>

             <div class="col-md-4">
                 <div class="form-group">
                     <a class="copyrow" style="cursor: pointer" title="-1"> <i class="fa fa-copy"></i></a>
                 </div>
             </div>

 	         <div class="form-group row ">
               <div class="col-md-12">
                  <div class="d-flex no-block align-items-center">
                      <div class="custom-control  custom-checkbox">
					       <input  type="checkbox" class="res_is_confirmed custom-control-input " id="res_is_confirmed" name="res_is_confirmed" checked  />
                           <label class="custom-control-label" for="res_is_confirmed"><?=$this->lang->line('res_is_confirmed');?></label>
					   </div>
                   </div>
               </div>
            </div>

          </div>


           </div>
		      <div class="form-actions mt-10">
			<button type="submit" class="btn btn-success  mr-10" id="btn_action">
			   <?=$this->lang->line('Save');?> </button>
			   <input type="button" name="add_item" value="Add More" onClick="addMore();" />
		 </div>
          </div>
	</form>

            <!-- Modal alert-->
               <div class="modal fade" id="repeat_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><?=$this->lang->line('repeat_reserv')?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" id="repeat_form">
                                    <div class="modal-body">

                                        <div class="field_wrapper">
                                            <input type="hidden" id="stdvalhid" name="stdvalhid" />
                                            <input type="hidden" id="ppricevalhid"  name="ppricevalhid"/>
                                            <input type="hidden" id="teachvalhid"  name="teachvalhid"/>
                                            <input type="hidden" id="corsvalhid" name="corsvalhid" />
                                            <input type="hidden" id="teachpercentvalhid" name="teachpercentvalhid" />

                                            <div class="row">
                                                <div class="col-md-4">
                                                     <?=$this->lang->line('todate');?><br />
                                                     <input type="text" data-provide="datepicker" onblur="get_existance_repeatres(0)" id="dates0" data-date-autoclose="true" class="form-control" name="dates[]" />
                                                </div>
                                                <div class="col-md-4">
                                                    <?=$this->lang->line('date_ST');?><br>
                                                    <input type="text" class="form-control dt" onblur="get_existance_repeatres(0)" id="dates_ST0" name="dates_ST[]" value=""/>
                                                </div>
                                                <div class="col-md-4">
                                                    <?=$this->lang->line('date_ND');?><br>
                                                    <input type="text" class="form-control dt" onblur="get_existance_repeatres(0)" id="dates_ND0" name="dates_ND[]" value=""/>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10"><?=$this->lang->line('te_notes');?></label>
                                                        <textarea class="form-control" onblur="get_existance_repeatres(0)"  name="res_admin_noteRepeat[]"></textarea>
                                                    </div>
                                                </div>
                                                    <div class="col-md-6">
                                                    <a href="javascript:void(0);" class="add_button" title="0">
                                                        <i class="fa fa-plus" style="font-size: 20pt"></i></a>
                                                    </div>
                                             </div>
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary" value="<?=$this->lang->line('copy_reservs')?>">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            <!-- end modal -->
            <!-- Modal alert-->
            <div class="modal fade" id="alert_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="show_res_details">
                            <p id="alertp"></p>
                            <br/>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->
	                        </div>
                        </div>
                    </div>
	            </div>
             </div>
 	<!-- /Row -->

<script type="text/javascript">
  function addMore() {
    $("<DIV>").load("add_f", function() {
     $("#product").append($(this).html());

        $(".dt").datetimepicker("destroy"); $('.dt').datetimepicker({  showClear: true }) ;
    });
 }

 function get_existance(id)
 {
        var params = {   student_id  : $("#res_std_code").val(),
                         paid_price  : $("#res_paid_price").val(),
                         cors_code   : $("#res_cors_code"+id).val(),
                         teach_code  : $("#res_teach_code"+id).val(),
                         time_start  : $("#res_time_start"+id).val(),
                         time_end    : $("#res_time_end"+id).val(),
                         teacher_percent    : $("#res_teacher_percent"+id).val(),
                         admin_note    : $("#res_admin_note"+id).val() } ;

     if(params.student_id !='' && params.time_start !='' && params.time_end !='' && params.cors_code !='') {
         $.ajax({
             url: '<?=base_url()?>Reservation_ci/check_existance',
             method: 'POST',
             data: params,
             success: function (data) {
                 var sp = data.split('╩');
                  var subsp = sp[2];
                var spp = subsp.split("╦"); // colors

                 if(sp[0] > 0 )
                 {
                     $("#alert_modal").on("hidden.bs.modal", function(){
                         $("#show_res_details").html("<p id=\"alertp\"></p><br/>");
                     });
                     $("#exampleModalLabel2").text("<?=$this->lang->line("reserv_found_title");?>");
                     $("#show_res_details").html(" <p id='alertp'></p><br/>"+sp[1]);
                     $('#alert_modal').modal('show');
                     $("#alertp").text("<?=$this->lang->line('reserv_found')?>"+params.time_start +" to "+ params.time_end);
                     $("#res_time_start"+id).val('');
                     $("#res_time_end"+id).val('');
                 }
                 else if(sp[0] < 0)
                 {

                     $("#alertp").text(sp[1]+' - '+params.time_start +" to "+ params.time_end);
                     $('#alert_modal').modal('show');

                     $("#res_time_start"+id).val('');
                     $("#res_time_end"+id).val('');
                 }

             }
         });
     }
 }
  function get_existance_repeatres(id)
  {
      var params = {   student_id  : $("#stdvalhid").val(),
          paid_price  : $("#ppricevalhid").val(),
          cors_code   : $("#corsvalhid"+id).val(),
          teach_code  : $("#teachvalhid"+id).val(),
          time_start  : $("#dates_ST"+id).val(),
          time_end    : $("#dates_ND"+id).val(),
          todates    : $("#dates"+id).val(),
          admin_note    : $("#res_admin_noteRepeat"+id).val() } ;

      if(params.student_id !='' && params.time_start !='' && params.time_end !='' && params.cors_code !='') {
          $.ajax({
              url: '<?=base_url()?>Reservation_ci/check_existance',
              method: 'POST',
              data: params,
              success: function (data) {
                  var sp = data.split('╩');
                  var subsp = sp[2];
                  var spp = subsp.split("╦"); // colors

                  if(sp[0] > 0 )
                  {
                      $("#alert_modal").on("hidden.bs.modal", function(){
                          $("#show_res_details").html("<p id=\"alertp\"></p><br/>");
                      });
                      $("#exampleModalLabel2").text("<?=$this->lang->line("reserv_found_title");?>");
                      $("#show_res_details").html(" <p id='alertp'></p><br/>"+sp[1]);
                      $('#alert_modal').modal('show');
                      $("#alertp").text("<?=$this->lang->line('reserv_found')?>"+params.time_start +" to "+ params.time_end);
                      $("#res_time_start"+id).val('');
                      $("#res_time_end"+id).val('');
                  }
                  else if(sp[0] < 0)
                  {

                      $("#alertp").text(sp[1]+' - '+params.time_start +" to "+ params.time_end);
                      $('#alert_modal').modal('show');

                      $("#res_time_start"+id).val('');
                      $("#res_time_end"+id).val('');
                  }

              }
          });
      }
  }
	$(document).ready(function(e) {
        $('.dt').datetimepicker({  showClear: true }) ;
        $("#res_is_confirmed").attr("checked",false);
        $("#alert_modal").on("hidden.bs.modal", function(){
            $("#show_res_details").html("<p id=\"alertp\"></p><br/>");
        });
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper


        $(document).on('click','.delrows',function () {
            var vals = $(this).attr('title');
            $.ajax({
                url: '<?=base_url()?>Reservation_ci/clear_session',
                method: 'POST',
                data: $(this).serialize(),
                success: function (data)
                {
                    $("#product"+vals).remove();
                }
            });

         });

        $(document).on('click','.copyrow',function () {
            var vals = $(this).attr('title');

            var postv = parseInt(vals) + 1 ;
            $.ajax({
                url: '<?=base_url()?>Reservation_ci/get_inserted_row_val',
                method: 'POST',
                data: {random:Math.random(),
                    ins_row_val:postv
                },
                success: function (data)
                {
                     if(data > 0)
                     {
                          $(".copies").remove(); // all filed copies in dialog reserv repeation
                          $('#repeat_modal').modal({backdrop: 'static', keyboard: false});
                      }
                     else
                     {
                         $("#alertp").text('<?=$this->lang->line('cannot_copy')?>');
                         $('#alert_modal').modal('show');
                     }
                }
            });
                /**************** Load Variables from form to repeat reserv form **************/
                    $("#ppricevalhid").val($("#res_paid_price").val());
                    $("#stdvalhid").val($("#res_std_code").val());

                    $("#teachvalhid").val($("#res_teach_code"+vals).val());
                    $("#corsvalhid").val($("#res_cors_code"+vals).val());
                    $("#teachpercentvalhid").val($("#res_teacher_percent"+vals).val());
                /****************************************************************************/

        });

        $('#student_form2').on('submit', function(e){
            e.preventDefault();
            var curr_code= $("#curr_code").val();
            $.ajax({
                url: '<?=base_url()?>Reservation_ci/addreserv_new',
                method: 'POST',
                data: $(this).serialize(),
                success: function (data)
                {
                    $("#alertp").text(data);
                    $("#exampleModalLabel2").text("<?=$this->lang->line("sucess_res");?>");
                    $('#alert_modal').modal('show');
                 }
            });
        });
        $('#repeat_form').on('submit', function(e){
            e.preventDefault();
            var curr_code= $("#curr_code").val();
            $.ajax({
                url: '<?=base_url()?>Reservation_ci/copy_new_reserv',
                method: 'POST',
                data: $(this).serialize(),
                success: function (data)
                {
                    $("#alertp").text(data);
                    $('#alert_modal').modal('show');
                }
            });
        });
        //Once add button is clicked
        $(addButton).click(function(){
            var ct = $(this).attr('title') ;
             ct = parseInt(ct)+1;

                  $(wrapper).append('<div class="row copies" style="border-top: 1px solid #000000"><div class="col-md-4">'+
                      'تاريخ اليوم<input type="text" onblur="get_existance_repeatres('+ct+')" class="form-control" data-provide="datepicker"  id="dates'+ct+'" data-date-autoclose="true" name="dates[]" value=""/>'+
                      '</div>'+
                      '<div class="col-md-4">'+
                      'وقت البدء<input type="text"  onblur="get_existance_repeatres('+ct+')" class="form-control dt" id="dates_ST'+ct+'" name="dates_ST[]" value=""/> '+
                      '</div>'+
                      '<div class="col-md-4">'+
                      'وقت الانتهاء<input type="text" onblur="get_existance_repeatres('+ct+')" class="form-control dt" id="dates_ND'+ct+'" name="dates_ND[]" value=""/>'+
                      '</div>'+
                      '<div class="col-md-6">'+
                      '<div class="form-group">'+
                      'ملاحظات<textarea class="form-control" onblur="get_existance_repeatres('+ct+')"  name="res_admin_noteRepeat[]"></textarea>'+
                      '</div>'+
                      '</div>'+
                      '<div class="col-md-6">'+
                      '<a href="javascript:void(0);" class="remove_button">'+
                      '<i class="fa fa-remove"></i>'+
                      '</a>'+
                      '</div>'+
                      '</div>'); //Add field html
            $(".dt").datetimepicker("destroy"); $('.dt').datetimepicker({  showClear: true }) ;
            $(this).attr('title',ct)
         });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').parent('div').remove(); //Remove field html
         });

       });	   
</script>
