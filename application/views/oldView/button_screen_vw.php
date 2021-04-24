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
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div>
           
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?=$page_title?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("Add_edit_st_mess");?></h6>
        <form action="<?=base_url()?>permissions/addbutton_screen" method="post">
             <div class="form-body">
                  <hr class="light-grey-hr"/>
                     <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label mb-10"><?=$this->lang->line('s_name');?></label>
                                <select class="form-control" id="s_code" name="s_code" onchange="get_btns(this.value)">
                                    <option value="" ><?=$this->lang->line('choose');?></option>
                                    <?php foreach($scr_res as $scr){?>
                                    <option value="<?=$scr->s_code?>">
										<?=$scr->s_name?>
                                    </option>
                                    <?php } ?>
                                    
                                </select>
                             </div>
                         </div>  
                   </div>
                    
                   <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                 <?php foreach($btn_res as $btn){?>
                                 <div class="col-md-6">
                                      <div class="checkbox checkbox-success ">
                                          <input id="checkbox_<?=$btn->b_code?>" class="all_btns" name="b_code[]" value="<?=$btn->b_code?>" type="checkbox"  />
                                          <label for="checkbox_<?=$btn->b_code?>"><?= $btn->b_name?></label>
                                        </div>
                                 </div>
                                 <?php }?>
                                
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
                

 	<!-- /Row -->
     <script type="text/javascript">
     	function get_btns(v)
		{
			$(".all_btns").prop("checked",false); 
 			$.ajax({
				url:'<?=base_url()?>permissions/get_btns_ajax',
				type:'POST',
				data:{random:Math.random(),
				 code_post : v 
				},
				success: function(data)
				{
					var obj = data;
				    $.each(JSON.parse(obj), function(i , elm) {
				      $(".all_btns").each(function(index, element) {
                         if( elm.scrbtn_btn_code == $(this).val())
						     $(this).prop("checked",true); 
                     });
 				   });
				}
			});
		}
     </script>