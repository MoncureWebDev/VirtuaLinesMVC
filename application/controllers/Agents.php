<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agents extends CI_Controller {

	public function index() 
	{
		// $this->load->view('templates/header');
		// $this->load->view('agent');
		// $this->load->view('templates/footer');

		/*Replace with this:*/
		$this->load->templatesOn('agent');
	}


	public function agents() 
	{
		// $this->load->view('templates/header');
		// $this->load->view('agents');
		// $this->load->view('templates/footer');

		/*Replace with this:*/
		$this->load->templatesOn('agents');
	}

}

/* End of file Agents.php */
/* Location: ./application/controllers/Agents.php */