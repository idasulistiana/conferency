<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Registration_m');
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
		$this->Registration_m->setUsername($this->input->post('user'));
		if($this->Registration_m->cek()->jml > 0){
			$this->session->set_flashdata('user_error', 1);
			if($x == 'participant') $y = 'participant'; else $y = '';
			redirect(site_url('Registration/'.$y));
		}else{
			$this->Registration_m->setTitle($this->input->post('title'));
			$this->Registration_m->setFName($this->input->post('fName'));
			$this->Registration_m->setLName($this->input->post('lName'));
			$this->Registration_m->setCompany($this->input->post('company'));
			$this->Registration_m->setCity($this->input->post('city'));
			$this->Registration_m->setState($this->input->post('state'));
			$this->Registration_m->setCountry($this->input->post('country'));
			$this->Registration_m->setEmail($this->input->post('email'));
			$this->Registration_m->setPhone($this->input->post('phone'));
			$this->Registration_m->setAddress($this->input->post('address'));
			$this->Registration_m->setPass($this->input->post('pass'));
			if($x == 'speaker'){
				$this->Registration_m->setAbstractCat($this->input->post('category'));
				$this->Registration_m->setTSpeech($this->input->post('ctitle'));
				$this->Registration_m->regis_sp();
			}else{
				$this->Registration_m->regis_pt();
			}
			redirect(site_url());
		}
	}
}
?>