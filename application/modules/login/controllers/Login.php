<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_m');
      	error_reporting(~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
    }

	public function index(){
		$data['content_view']='login';
		$this->load->view('layout',$data);
	}
	public function plogin(){
		$this->Login_m->setUsername($this->input->post('user'));
		$this->Login_m->setPass($this->input->post('psw'));
		$log = $this->Login_m->login();
		echo $this->input->post('user');
		if($log->status == "")
			redirect(site_url('Login'));
		else{
			$this->session->set_userdata('username',$log->username);
			$this->session->set_userdata('status',$log->status);
			$this->session->set_userdata('ket',$log->ket);
			if($log->status == 2)
				redirect(site_url('Speaker'));
			else
				redirect(site_url('Audience'));
		}
	}
}
?>