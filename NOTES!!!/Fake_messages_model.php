<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fake_messages_model extends CI_Model {

	//*** THIS MODEL IS ONLY HERE TO ILLUSTRATE HOW WE CAN GET MESSAGES INTO A CONTROLLER,
	// AND THEN INTO A VIEW.  

	//THIS EXAMPLE WORKS WITH THIS "Fake_messages_model" and the "Welcome" controller!!!

	public function getMessages()
	{




		// If we want to communicate with the controller...
		$this->db->get('message');// get messages
		$query = $this->result();//fetch everything and keep it in this query...

		return $query; // return the query to Welcome controller
	}
	

}

/* End of file Fake_messages_model.php */
/* Location: ./application/models/Fake_messages_model.php */