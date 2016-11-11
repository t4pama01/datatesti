<?php
class Tiedot_model extends CI_Model {

	public function getTiedot() {
		$this->db->select('*');
		$this->db->from('tiedot');
		return $this->db->get()->result_array();
	}
}