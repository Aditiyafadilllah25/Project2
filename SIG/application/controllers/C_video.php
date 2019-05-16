<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_video extends MY_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_video');
		$this->load->helper('url');
 
	}

	public function index()
	{
		redirect('C_video/getVidio/1','refresh');
		
	}

	public function getVidio($id){
		$where = array('id_vidio' => $id);
		$data['vidio'] = $this->M_video->tampil_data($where,'vidio_slider')->result();
		$this->load->view('frontend/views_slider',$data);
	}

}

/* End of file Dashboard.php */
