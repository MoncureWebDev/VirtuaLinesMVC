<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()


	{
		$result = $this->Messages_model->getMessages();
		//The messages are now being stored in $result in the form of an array.
		//So loop through....
		foreach($result as message){
			//loop through

			//********BUT!!!!!!!
			//Don't want to echo result in a controller!
			//So what you do instead is pass it to the VIEW!!!!


			//Create an array...
			$data = array(/*......*/);
			//Pass the result into the array, and then .....
		}

		$this->load->view('welcome_message', $data);
		//...PASS the $data array into the VIEW!!!!
	}
}
