
	
		
		
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
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#admin-Dashboard"><?php echo $this->lang->line("table_st");?></a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#admin-Activity"><?php echo $this->lang->line("Add_edit_st");?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="row clearfix row-deck">



				
				
				
				
				
                <!-- 
   <!-- Row -->
 <div class="tab-content">
                    <div class="tab-pane fade show active" id="admin-Dashboard" role="tabpanel">
                        <div class="row clearfix">
   <div class="col-12">
     <div class="card">
        <div class="card-body">
             <h4 class="card-title"><?php echo $this->lang->line("Add_edit_st");?></h4>
             <h6 class="card-subtitle"><?php echo $this->lang->line("Add_edit_st_mess");?></h6>
              <form method="post" enctype="multipart/form-data" id="student_form" novalidate >
                <input type="hidden" id="_PRIFIX" name="_PRIFIX" value="<?=STUDENT_PRIFIX;?>" />
                <input type="hidden" id="curr_code" name="curr_code" value="" />
                   <div class="form-body">
              


                      <div class="row">

												
												
                          <div class="col-md-4 password_div" style="display: none !important;">
                              <div class="form-group">
                                  <label><?=$this->lang->line('st_password');?> <span class="text-danger">*</span></label>
                                  <div class="input-group">
                                      <input type="text" class="form-control" id="st_password" name="st_password" />
									      <div class="input-group-prepend">
									        <span class="input-group-text"> <a  id="snd_password_email" onclick="send_email('st_password')">email</a></span>
									     <span class="input-group-text">  <a  id="snd_password_mobile"  onclick="send_mobile('st_password')">sms</a></span>
                                  </div>                                                    </div>

                              </div>
                          </div>
                         
                          



                          <div class="col-md-4">
                             <div class="form-group">
                                <label><?=$this->lang->line('st_name');?> <span class="text-danger">*</span></label>
                                <div class="controls">
                                     <input type="text" class="form-control" id="st_name" name="st_name" required data-validation-required-message="<?=$this->lang->line('required');?> " />
                              </div>
                           </div>
                         </div>
                          <div class="col-md-4">
                                <div class="form-group">
                                   <label><?=$this->lang->line('st_ID');?> <span class="text-danger">*</span></label>
                                    <div class="controls">
                                         <input type="text" class="form-control" id="st_ID" name="st_ID" required data-validation-required-message="<?=$this->lang->line('required');?> " />
                                     </div>
                                 </div>
                            </div>
                          <div class="col-md-4">
                               <div class="form-group">
                                    <label><?=$this->lang->line('st_phone');?> <span class="text-danger">*</span></label>
                                    <div class="controls">
                                      <input type="text" class="form-control phone-inputmask"  id="st_phone1" name="st_phone1" required data-validation-required-message="<?=$this->lang->line('required');?> " />
                                    </div>
                                </div>
                             </div>
                          <div class="col-md-4">
                                <div class="form-group">
                                      <label><?=$this->lang->line('st_phone').'2';?></label>
                                      <input type="text" class="form-control " id="st_phone2" name="st_phone2" />
                                 </div>
                              </div>
                          <div class="col-md-4">
                                <div class="form-group">
                                 <label><?=$this->lang->line('st_email');?></label>
                                   <div class="controls">
                                      <input type="email" class="form-control" id="st_email" name="st_email" data-validation-email-message="<?=$this->lang->line('error_email');?>"	/>
                                   </div>
                                  </div>
                               </div>
                          <div class="col-md-4">
                                <div class="form-group">
                                    <label><?=$this->lang->line('st_birthdate');?> <span class="text-danger">*</span></label>
                                     <div class="controls">
									 <input data-provide="datepicker" data-date-format="dd/mm/yyyy" data-date-autoclose="true" id="st_birthdate" name="st_birthdate" class="form-control" placeholder="MM/DD/YYYY"/>
                                  </div>
                             </div>
                             </div>
                          <div class="col-md-4">
                             <div class="form-group">
                                  <label> <?=$this->lang->line('sc_name');?> <span class="text-danger">*</span></label>
                                  <div class="controls">
                                        <select class="form-control" id="st_school_code" name="st_school_code" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                             <option value=""><?=$this->lang->line('choose');?></option>
                                               <?php  draw_lists2("schools" , "sc_code" , "sc_name","sc_active","1"); ?>
                                        </select>
                                   </div>
                                 </div>
                            </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label>  <?=$this->lang->line('st_paymentmethods_code');?> <span class="text-danger">*</span></label>
                                <div class="controls">
                                  <select class="form-control" id="st_paymentmethods_code" name="st_paymentmethods_code" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                      <option value=""><?=$this->lang->line('choose');?></option>
                                      <?php  draw_lists2("payment_methods" , "m_code" , "m_name","m_active","1"); ?>
                                  </select>
                                </div>
                              </div>
                           </div>
                          <div class="col-md-4">
                            <div class="form-group">
                               <label> <?=$this->lang->line('st_class');?> <span class="text-danger">*</span></label>
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
                          <div class="col-md-4">
                                 <div class="form-group">
                                      <label class="control-label mb-10"><?=$this->lang->line('st_town');?></label>
                                      <input type="text" class="form-control" id="st_town" name="st_town" />
                                 </div>
                              </div>
                          <div class="col-md-4">
                             <div class="form-group">
                                <label> <?=$this->lang->line('st_sex');?> <span class="text-danger">*</span></label>
                                <div class="controls">
                                   <select class="form-control" id="st_sex" name="st_sex" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                       <option value=""><?=$this->lang->line('choose')?></option>
                                       <option value="male"><?=$this->lang->line('male')?></option>
                                       <option value="female"><?=$this->lang->line('female')?></option>
                                    </select>
                                 </div>
                               </div>
                            </div>
                          <div class="col-md-4">
                                 <div class="form-group">
                                    <label> <?=$this->lang->line('st_sub_code');?> <span class="text-danger">*</span></label>
                                     <div class="controls">
                                       <select class="form-control"id="st_sub_code" name="st_sub_code"required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                              <option value=""> <?=$this->lang->line('choose')?></option>
                                            <?php  draw_lists2("subscribe_type" , "sub_code" , "sub_name","sub_active","1"); ?>
                                        </select>
                                      </div>
                                 </div>
                             </div>
                          <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                  <label> <?=$this->lang->line('st_status_code');?> <span class="text-danger">*</span></label>
                                  <div class="controls">
                                    <select class="form-control" id="st_status_code" name="st_status_code" required data-validation-required-message="<?=$this->lang->line('required');?> ">
                                         <option value=""> <?=$this->lang->line('choose')?></option>
                                        <?php   draw_lists("std_status" , "std_code" , "std_name","std_active","1");  ?>
                                    </select>
                                   </div>
                                </div>
                             </div>
                         <div class="col-md-12 col-sm-12">
                               <div class="form-group">
                                  <label> <?=$this->lang->line('st_payment_date');?> <span class="text-danger">*</span></label>
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
                         
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label><?=$this->lang->line("photos");?>: </label>
                                       <input type="file" name="file[]" class="dropify" id="file" multiple  />
                                   </div>
                               </div>
							   <div class="col-md-6">
                                   <div class="form-group">
                                       <label><?=$this->lang->line("files");?>: </label>
                                       <input type="file" name="docs[]" id="docs" multiple class="dropify" />
                                   </div>
                               </div>
							     <div class="col-md-12">
                                <div class="d-flex no-block align-items-center">
                                   <div class="custom-control  custom-checkbox">
                                        <input  type="checkbox" class="st_active custom-control-input " id="st_active" name="st_active" checked  />
                                         <label class="custom-control-label" for="st_active"> <?=$this->lang->line('active');?></label>
                                   </div>
                                </div>
                            </div>
                        </div>
						<div class="row">
                                        <div class="col-sm-12 text-right m-t-20">
                                            <button type="submit" class="btn btn-success  mr-10" id="btn_action">
                               <?=$this->lang->line('Save');?> </button>
                                        </div>
                                    </div>
                      
                    </form>
	       </div>
 	    </div>
		
		
		
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
     
     </div>
     
  </div>
  </div>
   <div class="card bg-none b-none">
                            <div class="card-body pt-0">
                                <div class="table-responsive">
								    <div class="col-sm-12" id="this_photos" style="display:none;">
  </div>
  </div>
  </div>
  </div>
  
   <div class="card bg-none b-none">
                            <div class="card-body pt-0">
                                <div class="table-responsive">
								  <div class="col-sm-12" id="this_docs" style="display:none;">
  </div>
  </div>
  </div>
  </div>
  
  
  
  

  
  
  
  
  
  </div>

  
		
  
  

                    <div class="tab-pane fade" id="admin-Activity" role="tabpanel">
                        <div class="row clearfix">
						<div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <div class="input-group">
                                            <input type="text" name = "ser_name_st" id="ser_name_st"  class="form-control" placeholder="<?=$this->lang->line('st_name');?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="ser_id_st" name="ser_id_st" placeholder="<?=$this->lang->line('st_ID');?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="ser_phone_st" name="ser_phone_st" placeholder="<?=$this->lang->line('st_phone');?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <div class="input-group">
                                            <input data-provide="datepicker" id="ser_bir_st" name="ser_bir_st" data-date-autoclose="true" class="form-control" placeholder="<?=$this->lang->line('st_birthdate');?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-6">
                                        <a name="ser_btn_st" id="ser_btn_st"  class="btn btn-sm btn-primary btn-block ser_btn_st" title="بحث عن طالب"><?=$this->lang->line('Search');?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
						
				            <div class="table-responsive card">
                            <table   class="table table-hover table-vcenter table-striped mb-0 text-nowrap">
                                <thead>
                                    <tr>
                                <th><?php echo $this->lang->line("st_name");?></th>
                                <th><?php echo $this->lang->line("st_ID");?></th>
                                <th><?php echo $this->lang->line("st_phone");?></th>
								<th><?php echo $this->lang->line("st_class");?></th>
                                <th><?php echo $this->lang->line("st_status_code");?></th>
                                <th><?php echo $this->lang->line("operations");?></th>
                                    </tr>
                                </thead>		
						<tbody id="tdata">
						 
 					    </tbody>
					</table>  
                           </div>
                        </div>	
                    </div>	
                </div>	
                
  
  
  
  
  
  
  
  
  
  
  
  	<!-- /Row -->
  <script type="text/javascript">
             $("#file").change(function() {
              $("#message").empty(); // To remove the previous error message
              var file = this.files[0];
              var imagefile = file.type;
              var match= ["image/jpeg","image/png","image/jpg" ,"application/pdf" ,"application/msword" ,"application/vnd.openxmlformats-officedocument.wordprocessingml.document"];
              if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
              {
                  $('#previewing').attr('src','noimage.png');
                  $("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
                  return false;
              }
              else
              {
                  var reader = new FileReader();
                  reader.onload = imageIsLoaded;
                  reader.readAsDataURL(this.files[0]);
              }
          });
          $(document).on('click','.photo_main',function(){
              if(confirm('<?php echo $this->lang->line("are_you_sure");?>'))
              {
                  var s_code = $(this).parent().parent().attr('S_code');
                  var Rcus = $(this).parent().parent().attr('rcu');
                  var ismain = 0;
                  if($(this).is(":checked"))
                      ismain = 1
                  else
                      ismain = 0;
                  var  prefix = _PREFIX();
                  $.ajax({
                      url : '<?=base_url()?>common/set_photo_main' ,
                      type: 'POST' ,
                      data: {random:Math.random() ,
                          S_code : s_code ,
                          is_main : ismain ,
                          prefix_type : prefix,
                          rcu         : Rcus
                      },
                      success: function(data)
                      {
                          fetch_per_params('<?=base_url()?>common/fetch_this_photos' , '#this_photos'  , Rcus , _PREFIX());// fetch all photos
                      }
                  });
              }
          });
          $(document).on('click','.photo_slider',function(){
              if(confirm('<?php echo $this->lang->line("are_you_sure");?>'))
              {
                  var s_code = $(this).parent().parent().attr('S_code');
                  var Rcus = $(this).parent().parent().attr('rcu');
                  var Pcode = $(this).parent().parent().attr('P_code');
                  var isslider = 0;
                  if($(this).is(":checked"))
                      isslider = 1
                  else
                      isslider = 0;
                  var  prefix = _PREFIX();
                  $.ajax({
                      url : '<?=base_url()?>common/set_photo_slider' ,
                      type: 'POST' ,
                      data: {random:Math.random() ,
                          S_code : s_code ,
                          is_slider : isslider ,
                          prefix_type : prefix,
                          rcu         : Rcus ,
                          P_code      : Pcode
                      },
                      success: function(data)
                      {
                          fetch_per_params('<?=base_url()?>common/fetch_this_photos' , '#this_photos'  , Rcus , _PREFIX());// fetch all photos
						 
                      }
                  });
              }
          });
          $(document).on('click','.photo_active',function(){
              if(confirm('<?php echo $this->lang->line("are_you_sure");?>'))
              {
                  var s_code = $(this).parent().parent().attr('S_code');
                  var actives = 0;
                  if($(this).is(":checked"))
                      actives = 1
                  else
                      actives = 0;
                  var  prefix = _PREFIX();
                  $.ajax({
                      url : 'common/set_photo_active' ,
                      type: 'POST' ,
                      data: {random:Math.random() ,
                          S_code : s_code ,
                          active : actives
                      },
                      success: function(data)
                      {
                          fetch_per_params('common/fetch_this_photos' , '#this_photos'  , Rcus , _PREFIX());// fetch all photos
                      }
                  });
              }
          });

          $(document).on('click','.Del_photo',function(){
              var pk = $(this).attr('title');
              var rcu = $(this).attr('rcu'); // FK for item in subject photo
              if(confirm('<?php echo $this->lang->line("Confirm_del");?>'))
              {
                  $.ajax({
                      url : 'common/del_this_photo/'+pk + '/'+rcu + '/'+ _PREFIX(),
                      type: 'POST' ,
                      data: {random:Math.random()
                      },
                      success: function(data)
                      {
                          alert(data);
						  
                          fetch_per_params('common/fetch_this_photos' , '#this_photos'  , rcu , _PREFIX());// fetch all photos
                      }
                  });
              }
              else{alert('<?php echo $this->lang->line("cancel_Confirm_del");?>');}
          }); // Photo Delete Event for all
      function send_email(input_id)
      {
          if(confirm("<?=$this->lang->line('confirm_send_email')?>")) {
              $("#snd_password_email").attr("disabled",true);
              $.ajax({
                  url:'<?=base_url()?>Students_ci/send_password',
                  type:'POST',
                  data:{random:Math.random(),
                      email_to: $("#st_email").val(),
                      email_from: '<?=$this->options->op_admin_email?>',
                      email_name : '<?=$this->options->op_title?>' ,
                      email_subject:'<?=$this->lang->line("password_title")?>',
                      email_msg_vals : $("#st_password").val(),
                      curr_codepost  : $("#curr_code").val()

                  },
                  success:function (data) {
                      swal(data);
                      setTimeout(function () {
                          $("#snd_password_email").attr("disabled",false);
                       },1000000);
                  }
              });
          }
      }
      function send_mobile()
      {
          if(confirm("<?=$this->lang->line('confirm_send_mobile')?>")) {
              $("#snd_password_mobile").attr("disabled",true);
              $.ajax({
                  url:'<?=base_url()?>Students_ci/send_mobile',
                  type:'POST',
                  data:{random:Math.random(),
                      password_vals : $("#st_password").val(),
                      mobile_msg_vals : $("#st_phone1").val(),
                      curr_codepost  : $("#curr_code").val()

                  },
                  success:function (data) {
                      swal(data);
                      setTimeout(function () {
                          $("#snd_password_mobile").attr("disabled",false);
                      },1000000);
                  }
              });
          }
      }
 	$(document).ready(function(e) {
		//$("#st_active").removeAttr('value');

		  draw("<?=base_url()?>Students_ci/get_items/students/st_code/st_name/st_active" , "#tdata");
		
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
					// var sp = data.split('╩');
					 alert(data);
                  if ( curr_code != '' || curr_code != null ) {
                        fetch_per_params( '<?=base_url()?>Common/fetch_this_photos', '#this_photos', curr_code, _PREFIX() );
                       fetch_per_params( '<?=base_url()?>Common/fetch_this_docs', '#this_docs', curr_code, 'CRS_DOCS' );
                        return false;
                    }
				         
                    
 				} ,
				cache: false,
				contentType: false,
				processData: false
			});
			 return false; 
 		});
		  $(document).on('click','.Edit',function(){
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
				var st_password = $(this).attr('st_password2');

				$("#curr_code").val(pk);
		
			    $( "#this_docs" ).css( "display", "block" );
 
		         fetch_per_params( '<?=base_url()?>Common/fetch_this_photos', '#this_photos', pk, _PREFIX(), 1 ); //fetch all users
		         fetch_per_params( '<?=base_url()?>Common/fetch_this_docs', '#this_docs', pk, "std", 1 ); //fetch all users	  
				$("#this_photos").css("display","block");
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
				$("#st_active").val("1");

				$("#st_paymentmethods_code").val(st_paymentmethods_code);
				$("#st_status_code").val(st_status_code);
				$("#st_payment_date").val(st_payment_date);
				$(".password_div").css("display","block");
				$("#st_password").val(st_password);
				if(st_active == 1)
				
                 $("#st_active").attr('checked', true);
				  else
				   $("#st_active").attr('checked', false);

  				  $("#btn_add").val('<?php echo $this->lang->line('update_btn');?>');
				$("#btn_add").val('<?php echo $this->lang->line('update_btn');?>');
				$('.nav-tabs a[href="#admin-Dashboard"]').tab('show')
 	      });
		  $(document).on('click','.Del',function(){
					var pk = $(this).attr('title');
									//	var sc_name1 = document.getElementById ( pk ).innerText;
					swal({
					  title: '<?php echo $this->lang->line("Confirm_del");?>?',
					  //text: sc_name1,
					 // type: 'warning',
					  showCancelButton: true,
					  confirmButtonColor: '#3085d6',
					  cancelButtonColor: '#d33',
					  confirmButtonText: '<?php echo $this->lang->line("yes_delete");?>',
					   cancelButtonText: '<?php echo $this->lang->line("not_delete");?>'
					}).then((result) => {
					  if (result.value) {
							draw("<?=base_url()?>Students_ci/del_items/students/st_code/"+pk , "");
							  draw("<?=base_url()?>Students_ci/get_items/students/st_code/st_name/st_active" , "#tdata");
					
					  }
					})
					
				});
         $(document).on('click','.ser_btn_st',function(){
						   var ser_phone_stv= $("#ser_phone_st").val();
						   var ser_name_stv= $("#ser_name_st").val();
						   var ser_id_stv= $("#ser_id_st").val();
						   var ser_bir_stv= $("#ser_bir_st").val();
          var param = {
              ser_phone_st : ser_phone_stv,
              ser_name_st  : ser_name_stv ,
              ser_id_st   : ser_id_stv ,
              ser_bir_st  : ser_bir_stv
          }
             draw_such_params("<?=base_url()?>Students_ci/get_items_ser/" , "#tdata" , param);
              
          });	

       });
 </script>
