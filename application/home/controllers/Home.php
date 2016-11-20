<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 * 		http://localhost/CodeIgniter-3.1.2/index.php/Home/index
	 */
	public function index()
	{
		$this->load->view('zhuye');
	}
}
