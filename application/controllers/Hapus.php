<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hapus extends CI_Controller {

	public function index()
	{
		$this->load->view('Admin/hapus');
	}
	

	

	function reload()
	{
		redirect(base_url("index.php/Admin/beranda"));
	}
}
