<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_video extends CI_Model {

	public function tampil_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

}