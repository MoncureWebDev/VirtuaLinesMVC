<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploadfile extends CI_Controller {

	public function index()
	{
		$this->load->templatesOn('fileupload');
	}



	public function fileupload() 
	{
		// $this->load->view('templates/header');
		// $this->load->view('dashboard');
		// $this->load->view('templates/footer');

		/*Replace with this:*/
		$this->load->templatesOn('fileupload');
	}













}

/* End of file Uploadfile.php */
/* Location: ./application/controllers/Uploadfile.php */