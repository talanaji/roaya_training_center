 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


    <script type="text/javascript">


    <?php if ($this->session->flashdata('success')) {?>
	  toastr.options.positionClass = 'toast-bottom-left'
        toastr.success("<?php echo $this->session->flashdata('success'); ?>");
    <?php } else if ($this->session->flashdata('error')) {?>
	  toastr.options.timeOut = '5000';
	  toastr.options.positionClass = 'toast-bottom-left';
        toastr.error("<?php echo $this->session->flashdata('error'); ?>");
    <?php } else if ($this->session->flashdata('warning')) {?>
	  toastr.options.positionClass = 'toast-bottom-left';
        toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
    <?php } else if ($this->session->flashdata('info')) {?>
	  toastr.options.positionClass = 'toast-bottom-left';
        toastr.info("<?php echo $this->session->flashdata('info'); ?>");
    <?php }?>


    </script>