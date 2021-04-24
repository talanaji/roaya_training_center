			
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
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> <?=$this->lang->line('add_doros');?></button>
                        </div>
                    </div>
                </div>
           

 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?=$this->lang->line('addbutton_screen');?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("addbutton_screen_mess");?></h6>
                               
        <form action="<?=base_url()?>permissions" method="post" novalidate>
             <div class="form-body">
                  <hr class="light-grey-hr"/>
				  <div class="form-group">
                                        <h5><?=$this->lang->line('User_name');?> <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select class="form-control" id="u_code" name="u_code" required data-validation-required-message="<?=$this->lang->line('required');?> " onchange="get_scr_btns(this.value)">
                                               <option value="" ><?=$this->lang->line('choose');?></option>
											
                                                 <?php foreach($users_res as $usr){?>
                                    <option value="<?=$usr->u_code?>" >
										<?=$usr->u_fname .' - ( '. $usr->u_username . ')';?>
                                    </option>
                                    <?php } ?>
                                            </select>
                                        </div>
                                    </div>
									
									
									
                 
                    
                   <div class="row">
                   <div class="col-md-6">
                         <h4><?=$this->lang->line('Thescreens');?></h4>
                            <div class="form-group">
                                 <?php foreach($scr_res as $scr){
									    $this->db->where('s_code',$scr->s_code);
										$srow = $this->db->get('screens')->row();
										if($srow->s_active == 1 )
										{
									 ?>
									
					<div class="form-group row">
                                 <div class="col-md-6">
                                  <div class="d-flex no-block align-items-center">
                                <div class="custom-control custom-checkbox">
							  <!--<input id="checkboxscr_<?=$scr->s_code?>" class="all_scrs" name="s_code[]" value="<?=$scr->s_code?>" type="checkbox"  />-->
                        <input id="checkboxscr_<?=$scr->s_code?>" class="all_scrs custom-control-input " name="s_code[]" value="<?=$scr->s_code?>" type="checkbox"  />
                                          <label class="custom-control-label" for="checkboxscr_<?=$scr->s_code?>"><?= $scr->s_name?></label>
										
                                        </div>
                                 </div>
                                 </div>
                                 </div>
                                 <?php 
								     } 
								   }?>
                                
                             </div>
                         </div>
                  
				  
				   <div class="col-md-6">
                         <h4><?=$this->lang->line('TheButtons');?></h4>
                            <div class="form-group">
                                    <?php foreach($btn_res as $btn){?>
									    		
					<div class="form-group row">
                                 <div class="col-md-6">
                                  <div class="d-flex no-block align-items-center">
                                <div class="custom-control custom-checkbox ">
								
                                  <input id="checkboxbtn_<?=$btn->b_code?>" class="custom-control-input all_btns" name="b_code[]" id="checkboxscr_<?=$btn->s_code?>" value="<?=$btn->b_code?>" type="checkbox"  />
                                          <label class="custom-control-label"  for="checkboxbtn_<?=$btn->b_code?>"><?= $btn->b_name?></label>
                                           </div>
                                 </div>
                                 </div>
                                 </div>
                                 <?php 
								     } 
								   ?>
                             </div>
                         </div>
                   </div>
                   </div>
                   
                
       		   
                            <div class="form-actions mt-10">
                                <button type="submit" class="btn btn-success  mr-10"><?=$this->lang->line('Save');?> </button>
                             </div>
                            </form>
                     </div>
                   </div>
                   </div>
               </div>
               </div>
               </div>
             
  

 <script type="text/javascript">
     	function get_scr_btns(v)
		{
			//$(".all_scrs").prop("checked",false); 
		//$(".all_btns").prop("checked",false); 
		 if(v != 0 ){
 			$.ajax({
				url:'<?=base_url()?>permissions/get_btn_and_scr_ajax',
				type:'POST',
				data:{random:Math.random(),
				 code_post : v 
				},
				success: function(data)
				{
 					var spscr ;
					var spbtn ;
					var obj = data;
				 	var i;
					var j;
				    $.each(JSON.parse(obj), function(i , elm) {
				      $(".all_scrs").each(function(index, element) {
						  spscr = elm.u_scr_priv.split(',');
						  for(i=0; i<=spscr.length;i++)
						  {
							 if(spscr[i]  == $(this).val())
								 $(this).prop("checked",true); 
						  }
                      });
					  
					  $(".all_btns").each(function(index, element) {
						  spbtn = elm.u_btn_priv.split(',');
						  for(j=0; j<=spbtn.length;j++)
						  {
							 if(spbtn[j]  == $(this).val())
								 $(this).prop("checked",true); 
						  }
                      });
					  
					 
 				   });
				}
			});
		  }
		}
     </script>