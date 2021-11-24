<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cphoto_viewer extends CI_Controller {
	public function index()
	{
		$this->load->view('Vphoto_viewer');
	}
}
