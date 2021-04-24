<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_about extends MY_Controller {


	public function index()
	{
	$data["page_title"] = $this->lang->line("students_managment");
		    $this->load->view('cp/templates/header',$data);
			$this->load->view('cp/web_about_vw',$data);
			$this->load->view('cp/templates/footer',$data);
 	}
}
