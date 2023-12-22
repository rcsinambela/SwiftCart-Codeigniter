<?php

defined('BASEPATH') or exit('No direct script access allowed');

class About extends MY_Controller
{
	public function index()
	{
		// Logika untuk halaman "about" di sini
		$this->load->view('about_view');
	}
}

/* End of file Cart.php */
