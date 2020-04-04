<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages_model extends CI_Model {

	public function getMessages()
	{




		// If we want to communicate with the controller...
		$this->db->get('message');// get messages
		$query = $this->result();//fetch everything and keep it in this query...

		return $query; // return the query to Welcome controller
	}
	

}

/* End of file Messages_model.php */
/* Location: ./application/models/Messages_model.php */