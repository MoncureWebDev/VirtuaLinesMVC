<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploadimages extends CI_Controller {

	public function index()
	{
		$this->load->templatesOn('imageupload');		
	}


	public function imageupload() 
	{
		// $this->load->view('templates/header');
		// $this->load->view('dashboard');
		// $this->load->view('templates/footer');

		/*Replace with this:*/
		$this->load->templatesOn('imageupload');
	}













}

/* End of file Uploadimages.php */
/* Location: ./application/controllers/Uploadimages.php */