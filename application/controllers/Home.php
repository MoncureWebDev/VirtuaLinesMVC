<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		echo "This is the HOME Controller!  But I don't think you will ever see it!";
	}


	//Process the Login
	public function login() 
	{
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');



		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('login');
			$this->load->view('templates/footer');
			
		} else {
			$email = $this->input->post('email');
			$rawpass = $this->input->post('password');

			//Need to hash password
			$password = md5($rawpass);

			//.. called from User_model
			$result = $this->User_model->getLoginData($email, $password);
			//getLoginData($email, $password);

			if($result == FALSE)
			{
				$error = "User not found.  Please Register";

				$this->session->set_flashdata('error', $error);

				redirect('home/register');
			} else {
				// if success, go to dashboard

				redirect('dashboard');
				//The Dashboard controller index goes to dashboard view
			}//else
		}//







	}//public function login() 


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
			$this->load->view('templates/header');
			$this->load->view('register');
			$this->load->view('templates/footer');
					
		} else {
			//Collect form data
			$fullname = $this->input->post('name');
			$sex = $this->input->post('sex');
			$email = $this->input->post('email');
			$rawpass = $this->input->post('confirm_password');
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
					$this->session->set_flashdata('success', $success);
					redirect('home/login');

				} else {
					$error = "Registration Not Successful.  Please try again.";
					$this->session->set_flashdata('error', $error);
					redirect('home/register');
						
				}

				// echo the message in view!



			}//insert data in db
		}//collect form data



			


			//Redirect to Login
		// } //END else

	} //*************END register*************************


//*****************************************************************************************

	public function resetpassword()
	{
		$this->load->view('templates/header');
		$this->load->view('resetpassword');
		$this->load->view('templates/footer');

	}

//*****************************************************************************************

	public function verifypasswordcode()
	{
		$this->load->view('templates/header');
		$this->load->view('verifypasswordresetcode');
		$this->load->view('templates/footer');


	}

//*****************************************************************************************

	public function newpassword()
	{
		$this->load->view('templates/header');
		$this->load->view('newpassword');
		$this->load->view('templates/footer');

	}

//*****************************************************************************************





}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */