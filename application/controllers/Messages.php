<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages extends CI_Controller {

	public function index() 
	{
		// $this->load->view('templates/header');
		// $this->load->view('dashboard');
		// $this->load->view('templates/footer');

		/*Replace with this:*/
		$this->load->templatesOn('messages');
	}


	public function readmessage() 
	{
		// $this->load->view('templates/header');
		// $this->load->view('dashboard');
		// $this->load->view('templates/footer');

		/*Replace with this:*/
		$this->load->templatesOn('readmessage');
	}


	public function deletemessage() 
	{

	}



















}

/* End of file Messages.php */
/* Location: ./application/controllers/Messages.php */