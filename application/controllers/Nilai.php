<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	$lay=$this->load->view('layout');
		$this->load->view('User/nilai',$lay);
	}
	public function kelas()
	{	$lay=$this->load->view('layoutadmin');
		$this->load->view('User/nilai2',$lay);
	}
	public function ipa1()
	{	$lay=$this->load->view('layoutadmin');
		$this->load->view('Admin/ipa1',$lay);
	}
	public function ipa2()
	{	$lay=$this->load->view('layoutadmin');
		$this->load->view('Admin/ipa2',$lay);
	}
	public function ipa3()
	{	$lay=$this->load->view('layoutadmin');
		$this->load->view('Admin/ipa3',$lay);
	}
	public function iis()
	{	$lay=$this->load->view('layoutadmin');
		$this->load->view('Admin/iis',$lay);
	}
	public function ibb()
	{	$lay=$this->load->view('layoutadmin');
		$this->load->view('Admin/ibb',$lay);
	}
	public function input()
	{	$lay=$this->load->view('layoutadmin');
		$this->load->view('Admin/input',$lay);
	}
	public function pencarian()
	{	$lay=$this->load->view('layoutadmin');
		$this->load->view('Admin/pencarian',$lay);
	}
	public function ganti()
	{	$lay=$this->load->view('layoutadmin');
		$this->load->view('Admin/ganti',$lay);
	}
}
