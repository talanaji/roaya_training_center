
	
		
		
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
                                <h6 class="card-subtitle"><?php echo $this->lang->line("add_new_user_mess");?></h6>

			 <form action="<?=base_url()?>Permissions/addEdit_users" method="post"  novalidate>
			  
				  <input type="hidden" id="u_code" name="u_code" value="<?= !empty($u_code)?$u_code :"" ;?>"/>
<div class="form-body">
<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i><?=$this->lang->line('PersonInfo')?></h6>
	 <hr class="light-grey-hr"/>
		 <div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label mb-10"><?=$this->lang->line('User_name');?></label>
						<input type="text" id="u_username" title ="u_username" name="u_username" value="<?= !empty($u_username)?$u_username :"" ;?>" class="form-control" data-validation-callback-callback="checkuser_callback_function"  >
						<span class="help-block">   </span> 
					</div>
				</div>
										<!--/span-->
		<div class="col-md-6">
			<div class="form-group has-error">
				<label class="control-label mb-10"><?=$this->lang->line('User_fullname');?></label>
				<input type="text" id="u_fname" value="<?= !empty($u_fname)?$u_fname :"" ;?>" name="u_fname" class="form-control"required data-validation-required-message="<?=$this->lang->line('required');?> ">
				<span class="help-block"> </span> 
			</div>
		</div> <!--/span-->
	 </div>

	 <div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label class="control-label mb-10"><?=$this->lang->line('User_email');?></label>
					<input type="text" id="u_email" name="u_email" value="<?= !empty($u_email)?$u_email :"" ;?>" class="form-control" required data-validation-required-message="<?=$this->lang->line('required');?> ">
					<span class="help-block">   </span> 
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label class="control-label mb-10"><?=$this->lang->line('u_ID');?></label>
					<input type="text" id="u_ID" name="u_ID" value="<?= !empty($u_ID)?$u_ID :"" ;?>" class="form-control" required data-validation-required-message="<?=$this->lang->line('required');?> ">
					<span class="help-block">   </span> 
				</div>
			</div>
			<!--/span-->
		   <div class="col-md-4">
			 <div class="form-group has-error">
				<label class="control-label mb-10"><?=$this->lang->line('User_password');?></label>
				<input type="password" id="u_password" name="u_password" class="form-control" autocomplete="off"  <?php if($u_password=="") echo "required data-validation-required-message=".$this->lang->line('required').""?>>
				<span class="help-block"> </span> 
			</div>
		</div> <!--/span-->
	 </div>						
   <!--------------- /Row ----------------->
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label mb-10"><?=$this->lang->line('User_sex');?></label>
				<select class="form-control" id="u_sex" name="u_sex" required data-validation-required-message="<?=$this->lang->line('required');?>">
					<option value="Male" <?= !empty($u_sex) && $u_sex=="Male"? "selected=selected" :"" ;?>><?=$this->lang->line('male');?></option>
					<option value="Female" <?= !empty($u_sex) && $u_sex=="Female"? "selected=selected" :"" ;?>><?=$this->lang->line('female');?></option>
				</select>
					<span class="help-block"> </span>
			 </div>
		</div>
		<!------------- /span -------------->
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label mb-10"><?=$this->lang->line('User_birthday');?></label>
				<input type="text" id="min-date2" class="form-control" placeholder="dd/mm/yyyy" value="<?= !empty($u_birthday)?$u_birthday :"" ;?>"  name="u_birthday" required data-validation-required-message="<?=$this->lang->line('required');?> ">
				<span class="help-block"> </span>
			</div>
		</div>
		<!--/span-->

		 <!------------- /span -------------->
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label mb-10"><?=$this->lang->line('User_type');?></label>
				<select class="form-control" id="u_type" name="u_type" required data-validation-required-message="<?=$this->lang->line('required');?> ">
					 <option value=""><?=$this->lang->line('choose');?></option>
					 <option value="1" <?= !empty($u_type) && $u_type=="1"? "selected=selected" :"" ;?>><?=$this->lang->line('admin_option');?></option>
					 <option value="2" <?= !empty($u_type) && $u_type=="2"? "selected=selected" :"" ;?>><?=$this->lang->line('user_option');?></option>
				</select>
					<span class="help-block"> </span>
			</div>
		</div>
		<!--/span-->

		<!------------- /span -------------->
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label mb-10"><?=$this->lang->line('active');?></label>
				<select class="form-control" id="u_active" name="u_active" required data-validation-required-message="<?=$this->lang->line('required');?> ">
					 <option value=""><?=$this->lang->line('choose');?></option>
					 <option value="1" <?= !empty($u_active) && $u_active=="1"? "selected=selected" :"" ;?>><?=$this->lang->line('active_option');?></option>
					 <option value="0" <?=  $u_active=="0"? "selected=selected" :"" ;?>><?=$this->lang->line('inactive_option');?></option>
				</select>
					<span class="help-block"> </span>
			</div>
		</div>
		<!--/span-->
	</div>
 <!-- /Row -->
	<!-- /Row -->

<div class="seprator-block"></div>

	<div class="row">
		<div class="col-md-12 ">
			<div class="form-group">
				<label class="control-label mb-10"><?=$this->lang->line('User_address');?></label>
				<input type="text" class="form-control" id="u_address" name="u_address" value="<?= !empty($u_address)?$u_address :"" ;?>" required data-validation-required-message="<?=$this->lang->line('required');?> ">
				<span class="help-block"> </span>
			</div>
		</div>
	</div>
 <!-- /Row -->
</div>

				<div class="form-actions mt-10">
					<button type="submit" class="btn btn-success  mr-10"><?=$this->lang->line('Save');?> </button>
				 </div>
				</form>
			
			</div>
		</div>
	</div>
</div>
	
<!-- /Row -->
<!-- /Row -->
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $this->lang->line("add_edit_user");?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("add_new_user_mess");?></h6>
								     <div class="table-responsive m-t-40">
								   <table id="example" class="table display table-bordered table-striped">
									<thead>
									  <tr>
											<th><?=$this->lang->line('User_name')?></th>
											<th><?=$this->lang->line('User_fullname')?></th>
											<th><?=$this->lang->line('User_email')?></th>
											<th><?=$this->lang->line('User_type')?></th>
											<th><?=$this->lang->line('active')?></th>
											<th><?=$this->lang->line('opt')?></th>

										</tr>
									</thead>
									<tfoot>
										<tr>
											<th><?=$this->lang->line('User_name')?></th>
											<th><?=$this->lang->line('User_fullname')?></th>
											<th><?=$this->lang->line('User_email')?></th>
											<th><?=$this->lang->line('User_type')?></th>
											<th><?=$this->lang->line('active')?></th>
											<th><?=$this->lang->line('opt')?></th>
										</tr>
									</tfoot>
									<tbody>
										<?php 
											foreach($users_res as $usr){
												if($usr->u_active ==1)
												 $ac =   $this->lang->line('active') ;
												 else
												 $ac = $this->lang->line('inactive') ;

												 if($usr->u_type ==1)
												 $typ =   $this->lang->line('admin_option') ;
												 else
												 $typ = $this->lang->line('user_option') ;
											 if($usr->u_active == 1)
												 $u = $usr->u_code;
											 else
												 $u = "off";

										?> 
										<tr>
											<td><?=$usr->u_username?></td>
											<td><?=$usr->u_fname?></td>
											<td><?=$usr->u_email?></td>
											<td><?=$typ?></td>
											<td><?=$ac?></td>
											<td>
											<a href="<?=base_url()?>permissions/addEdit_users/<?=$usr->u_code?>">  <img src="<?=base_url()?>public/assets/images/icon/user_edit.png" alt="<?=$usr->u_username?>"></a>
                                            <a class='Del' title="<?=$u?>"><img src="<?=base_url()?>public/assets/images/icon/user_block.png" alt="<?=$usr->u_username?>"></a>

											   </td>
										</tr>

										 <?php 
											} 
										?> 
									</tbody>
								</table>
							</div>
							</div>
						</div>	
					</div>	
				</div>	
		  <script type="text/javascript">
		  function checkuser_callback_function($el, value, callback ) {
			  var u_code = document.getElementById("u_code").value;
					  var formData = new FormData(this);	
					   var valid = false;
					     var $target = $(event.target),
						 //  st = $target.data('id');
					//var st = target.id;
					var st ="u_username";
			 $.ajax({
				url : '<?=base_url()?>Permissions/ifex/'+value+'/'+st+'/'+u_code,
				method: 'POST', 
				data: formData, 
				success: function(data)
				{
					if (data == "2")
					 valid = true;
             callback({
            value: value,
            valid: valid,
            message: "<?=$this->lang->line('item_exists')?>"
        });	  				 	
 				} ,
				cache: false,
				contentType: false,
				processData: false  
			}); 
    }
	   $(document).ready(function(e) {
     
		$(document).on('click','.Del',function(){
					var pk = $(this).attr('title');
					if (pk == "off")
					{
						swal({  title: '<?php echo $this->lang->line("this_user_is_blocked");?>!!'})
					}
                      else
					  {						  
							swal({
					  title: '<?php echo $this->lang->line("conf_desp_user");?>?',
					  type: 'warning',
					  showCancelButton: true,
					  confirmButtonColor: '#3085d6',
					  cancelButtonColor: '#d33',
					  confirmButtonText: '<?php echo $this->lang->line("yes_block");?>',
					   cancelButtonText: '<?php echo $this->lang->line("not_delete");?>'
					}).then((result) => {
					  if (result.value) {
							draw("<?=base_url()?>permissions/del_users/"+pk ,"");
							 location.reload();
						
					  }
					})
		               }
					
				});
       });

</script>