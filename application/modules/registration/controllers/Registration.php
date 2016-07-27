<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			$this->load->model('Speaker_m');
      error_reporting(~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
    }

	public function index(){
		$data['content_view']='registration_speaker';
		$this->load->view('layout',$data);
	}
	public function participant(){
		$data['content_view']='registration_participant';
		$this->load->view('layout',$data);
	}
	public function regis($x){
		$this->Speaker_m->setUsername($this->input->post('user'));
		if($this->Speaker_m->cek()->jml > 0){
			$this->session->set_flashdata('user_error', 1);
			if($x == 'participant') $y = 'participant'; else $y = '';
			redirect(site_url('Registration/'.$y));
		}else{
			$this->Speaker_m->setTitle($this->input->post('title'));
			$this->Speaker_m->setFName($this->input->post('fName'));
			$this->Speaker_m->setLName($this->input->post('lName'));
			$this->Speaker_m->setCompany($this->input->post('company'));
			$this->Speaker_m->setCity($this->input->post('city'));
			$this->Speaker_m->setState($this->input->post('state'));
			$this->Speaker_m->setCountry($this->input->post('country'));
			$this->Speaker_m->setEmail($this->input->post('email'));
			$this->Speaker_m->setPhone($this->input->post('phone'));
			$this->Speaker_m->setAddress($this->input->post('address'));
			$this->Speaker_m->setPass($this->input->post('pass'));
			if($x == 'speaker'){
				$this->Speaker_m->setAbstractCat($this->input->post('category'));
				$this->Speaker_m->setTSpeech($this->input->post('ctitle'));
				$this->Speaker_m->regis_sp();
			}else{
				$this->Speaker_m->regis_pt();
			}
			redirect(site_url());
		}
	}
}
?>