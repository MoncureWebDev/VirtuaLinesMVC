<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		echo "This is the HOME Controller!  But I don't think you will ever see it!";
	}

//*****************************************************************************************
	public function tryloader()
	{
	/*  This function is using the My_loader controller in order to load
	    header and footer templates automatically with one line of code.
	 Location: ./application/core/My_Loader.php 
	 Loading login.php view as a test....*/ 

	$this->load->templatesOn('login');
	}



//*****************************************************************************************

	public function login() 
	{
		// $this->load->view('templates/header');
		// $this->load->view('login');
		// $this->load->view('templates/footer');

		/*Replace with this:*/
		$this->load->templatesOn('login');
	}


//*****************************************************************************************

	public function register()
	{
		// from documentation... libraries, form_validation
		$this->form_validation->set_rules('name', 'Full Name', 'trim|required|min_length[3]');
		//     processing name...         'field name', 'Human Readable name', 'Options'
		// 
		$this->form_validation->set_rules('sex', 'Sex');

		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required|min_length[5]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');

		// If form validation fails,show the view... check by pointing form_validation at 'run' method
		if($this->form_validation->run() == FALSE)
		{  //if validation false.....
			$this->load->templatesOn('register');		
		} else {
			//Collect form data
			echo $fullname 	= 	$this->input->post('name')." ";
			echo $sex 		= 	$this->input->post('sex')." ";
			echo $email 	= 	$this->input->post('email')." ";
			echo $rawpass 	= 	$this->input->post('confirm_password')." ";
			/*Hash raw password, input confirmed password*/

			//Verify if user exists .... need a model
			//Call userExist function from User_model
			$result = $this->User_model->userExist($email);
			//Returns true or false.  Let's grab the result... in the variable $result ^^^

			if($result == TRUE) //if user exists....
			{
				//Setting user data in a SESSION
				$error = "User already exists!  Please Login.";
				$this->session->set_flashdata('error', $error);
				//  set_flashdata takes in name of session you want to use, then message
				//Now if we echo, we will display the message!



				//Redirect to Login Page
				redirect('home/login');
			} else {
				//Insert Data in DB

				$password = md5($rawpass);


				//Calling insertUserRegistrationData() from the Model...
				$result = $this->User_model->insertUserRegistrationData($email, $fullname, $sex, $password);

				if($result > 0)// if more results than 0, insertion was successful, so...
				{
					$success = "Registration Successful!  Please Login.";
					$this->session->set_flashdata('error', $success);
					redirect('home/login');

//**********************************************
// 2 Types of sessions;
					// One will keep the variable for duration of the application, 
					// Session will stay on (we will use for email, etc).

					// set_flashdata on the other hand will set the message, but as soon as it does this,
					// the session is used, it will not unset it.  So we don't have to write something to
					// set and unset messages as you might in procedural PHP.



//**********************************************



				} else {
					$error = "User already exists!  Please Login.";
					$this->session->set_flashdata('error', $error);
					redirect('home/register');
					//$this->load->templatesOn('register');	
				}

				



			}
			}



			


			//Redirect to Login
		} //END else

	} //*************END register*************************


//*****************************************************************************************

	public function resetpassword()
	{
		// $this->load->view('templates/header');
		// $this->load->view('resetpassword');
		// $this->load->view('templates/footer');



				/*Replace with this:*/
		$this->load->templatesOn('resetpassword');
	}

//*****************************************************************************************

	public function verifypasswordcode()
	{
		// $this->load->view('templates/header');
		// $this->load->view('verifypasswordresetcode');
		// $this->load->view('templates/footer');

				/*Replace with this:*/
		$this->load->templatesOn('verifypasswordresetcode');
	}

//*****************************************************************************************

	public function newpassword()
	{
		// $this->load->view('templates/header');
		// $this->load->view('newpassword');
		// $this->load->view('templates/footer');

				/*Replace with this:*/
		$this->load->templatesOn('newpassword');
	}

//*****************************************************************************************





}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */