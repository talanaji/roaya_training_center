
	
		
		
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
                                <h6 class="card-subtitle"><?php echo $this->lang->line("Add_edit_st_mess");?></h6>

		 <form action="<?=base_url()?>permissions/addEdit_screen" method="post">
			  <input type="hidden" id="s_code" name="s_code" value="<?= !empty($s_code)? $s_code:""?>"/>
<div class="form-body">
  <hr class="light-grey-hr"/>
	 <div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="control-label mb-10"><?=$this->lang->line('s_name');?></label>
					<input type="text" id="s_name"   name="s_name" value="<?= !empty($s_name)? $s_name:""?>" 
					class="form-control" placeholder="">
				 </div>
			</div>

		   <div class="col-md-6">
			<div class="form-group">
				<label class="control-label mb-10"><?=$this->lang->line('s_menu_code');?></label>
				<select class="form-control" id="s_menu_code" name="s_menu_code">
					<option value="" ><?=$this->lang->line('choose');?></option>
					<?php foreach($menu_res as $men){?>
					<option value="<?=$men->m_code?>" <?= !empty($s_menu_code) && $s_menu_code == $men->m_code?"selected=selected" : ""?>>
						<?=$men->m_name?>
					</option>
					<?php } ?>

				</select>
			 </div>
		 </div>  
   </div>

   <div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="control-label mb-10"><?=$this->lang->line('s_url');?></label>
					<input type="text" id="s_url"   name="s_url" value="<?= !empty($s_url)? $s_url:""?>" 
					class="form-control" placeholder="">
				 </div>
			</div>

		   <div class="col-md-6">
			<div class="form-group">
				<label class="control-label mb-10"><?=$this->lang->line('s_symbol');?></label> 
				<input type="text" id="s_symbol"   name="s_symbol" value="<?= !empty($s_symbol)? $s_symbol:""?>" 
					class="form-control" placeholder="">

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

<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?=$page_title?></h4>
                                <h6 class="card-subtitle"><?php echo $this->lang->line("Add_edit_st_mess");?></h6>
							 <table id="datable_2" class="table table-hover table-bordered display mb-30" >
								<thead>
								  <tr>
										<th><?=$this->lang->line('b_name')?></th>
										<th><?=$this->lang->line('m_name')?></th> 
										<th><?=$this->lang->line('active')?></th>
										<th><?=$this->lang->line('opt')?></th>

									</tr>
								</thead>
								<tfoot>
									<tr>
										<th><?=$this->lang->line('b_name')?></th>
										<th><?=$this->lang->line('m_name')?></th>
										<th><?=$this->lang->line('active')?></th>
										<th><?=$this->lang->line('opt')?></th>
									</tr>
								</tfoot>
								<tbody>
									<?php 
										foreach($scr_res as $scr){
											if($scr->s_active ==1)
											 $ac =   $this->lang->line('active') ;
											 else
											 $ac = $this->lang->line('inactive') ;
									?> 
									<tr>
										<td><?=$scr->s_name?></td>
										<td><?=$scr->m_name?></td>
										<td><?=$ac?></td>
										<td>
											 <a href="<?=base_url()?>permissions/addEdit_screen/<?=$scr->s_code?>"><img src="<?=base_url()?>public/assets/images/icon/wrench.png"  title='<?=$scr->s_code?>'  /></a>
										 	
										 	<img src="<?=base_url()?>public/assets/images/icon/trash.png" class='Del' title='<?=$scr->s_code?>'  />
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
		  <script type="text/javascript">
	$(document).ready(function(e) {	  
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
	  draw("<?=base_url()?>permissions/del_items/screens/s_code/"+pk , ""); 
 
	 location.reload();
  }
})
				});
 
      });
 	  
</script>