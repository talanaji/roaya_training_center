<?php
class Upload extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url','file'));
	}

	function index(){
		//$this->load->view('upload_view');
	}

	

}
?>