<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function index() 
	{
		// $this->load->view('templates/header');
		// $this->load->view('savedorders');
		// $this->load->view('templates/footer');

		/*Replace with this:*/
		$this->load->templatesOn('savedorders');
	}




	public function payment() 
	{
		// $this->load->view('templates/header');
		// $this->load->view('dashboard');
		// $this->load->view('templates/footer');

		/*Replace with this:*/
		$this->load->templatesOn('payment');
	}




	public function paymentsuccess() 
	{
		// $this->load->view('templates/header');
		// $this->load->view('dashboard');
		// $this->load->view('templates/footer');

		/*Replace with this:*/
		$this->load->templatesOn('paymentsuccess');
	}








}

/* End of file Orders.php */
/* Location: ./application/controllers/Orders.php */