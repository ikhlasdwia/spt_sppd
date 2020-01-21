<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		$this->template->load('template/main','dashboard');
	}

	public function edit()
	{
		$this->template->load('template/main','lapar');
	}


}
