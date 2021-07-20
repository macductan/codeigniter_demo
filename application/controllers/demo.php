<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class demo extends CI_Controller {
	public function index()
	{
		$data['a'] = 1;
		$this->parser->parse('demo', $data);
	}
}
