<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	

	public function index()
	{
		$this->load->view('cover/header');
		$this->load->view('dashboard/index');
		$this->load->view('cover/footer');
		
	}

	public function example()
	{
		$this->load->view('cover/header');
		$this->load->view('example');
		$this->load->view('cover/footer');
	}


	public function test()
	{
		$this->load->view('test');
		
	}

}

/* End of file Dashboard.php */
