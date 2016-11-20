<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * 		http://localhost/CodeIgniter-3.1.2/index.php/Welcome/index
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
