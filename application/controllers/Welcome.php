<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data=array();
		$data['title']='Home';
		$data['maincontent']=$this->load->view('home_content','',true);
		$this->load->view('master',$data);
	}
	
	public function general()
	{
		$data=array();
		$data['title']='General';
		$data['maincontent']=$this->load->view('general_content','',true);
		$this->load->view('master',$data);
	}
	
	public function button()
	{
		$data=array();
		$data['title']='Button';
		$data['maincontent']=$this->load->view('button_content','',true);
		$this->load->view('master',$data);
	}
	
	public function panel()
	{
		$data=array();
		$data['title']='Panel';
		$data['maincontent']=$this->load->view('panel_content','',true);
		$this->load->view('master',$data);
	}
}
