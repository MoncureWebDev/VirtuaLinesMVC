<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index() 
	{
		// $this->load->view('templates/header');
		// $this->load->view('dashboard');
		// $this->load->view('templates/footer');

		/*Replace with this:*/
		$this->load->templatesOn('dashboard');
	}



	public function updateprofile() 
	{
		// $this->load->view('templates/header');
		// $this->load->view('dashboard');
		// $this->load->view('templates/footer');

		/*Replace with this:*/
		$this->load->templatesOn('updateprofile');
	}



	public function upgrade() 
	{
		// $this->load->view('templates/header');
		// $this->load->view('dashboard');
		// $this->load->view('templates/footer');

		/*Replace with this:*/
		$this->load->templatesOn('upgrade');
	}



	public function logout() 
	{
		// $this->load->view('templates/header');
		// $this->load->view('dashboard');
		// $this->load->view('templates/footer');

		/*Replace with this:*/
		$this->load->templatesOn('logout');
	}












	public function deleteprofile() 
	{
		// $this->load->view('templates/header');
		// $this->load->view('dashboard');
		// $this->load->view('templates/footer');

		/*Replace with this:*/
		$this->load->templatesOn('deleteprofile');
	}



















}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */