<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {



	public function userExist($email) 
	{ 
		$this->db->where('email', $email);
		//          this 'email' should be the same name from the database
		$query = $this->db->get('users');

		if($query->num_rows() > 0)
		{
			return TRUE;
			
		}	else  {

			return FALSE;
		}
	}



	public function insertUserRegistrationData($email, $fullname, $sex, $password)
	{

	//*********************************************************************************************
	//			INSERTING INTO THE DATABASE

	// $data = array(
	//         'title' => 'My title',
	//         'name' => 'My Name',
	//         'date' => 'My date'
	// );

	// $this->db->insert('mytable', $data);
	// Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')
	//*********************************************************************************************

		$data = array (
			//NEEDS TO BE ARRANGED THE SAME WAY AS IN THE DATABASE!!
			'fullname' 	=> 	$fullname,
			'sex'		=>	$sex,
			'password'	=>	$password,
			'email'		=>	$email
		/*
		************************************************
		Message: Type: ParseError
		Message: syntax error, unexpected '=', expecting ')'
		Solution:
			We used '=>' instead of '=>' in our Array!!!
		************************************************
		*/
		); //$data array
			$this->db->insert('users', $data);
			//Confirm successful insertion CI way!
			$insert_id = $this->db->insert_id(); 
			//If successful, the ID that was inserted into db will be fetched!!
			return $insert_id;
			//Now call this from the controller!
		



	}//public function insertUserRegistrationData






//Process User Login
	public function getLoginData($email, $password) 
	{//verify if user logged in or not
		$this->db->where('email', $email);
		$this->db->where('password', $passwrod);
		//check if user email and password match

		$query = $this->db->get('users');

		if($query->num_rows() > 0 )
		{
			return TRUE;
			//logged in
		} else {
			return FALSE;
		}
	}//public function getLoginData









}//class User_model

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */