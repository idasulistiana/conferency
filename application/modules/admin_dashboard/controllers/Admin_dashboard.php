<?php

class Admin_dashboard extends CI_Controller {

	function __construct(){
        // Call the Model constructor
        parent::__construct();
		$this->load->model('Speaker_m');
		$this->load->model('Login_m');
		$this->load->model('Rundown_m');
		$this->load->model('Payment_m');
		/*$this->load->helper('datatable_helper');*/
      	error_reporting(~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);     
    }
	function index()
	{
		if($this->session->userdata('status') == 1){
			/*$data['content_view']='admin_dashboard';
			$this->load->view('layout_admin',$data);*/
			$this->participant();
		}else
			$this->load->view('login');
	}
	public function presenter(){
		if($this->session->userdata('status') == 1){
			$data['content_view']='presenter';
			$data['presenter'] = $this->Speaker_m->lihat();
			$this->load->view('layout_admin',$data);
		}else
			$this->load->view('login');
	}
	public function participant(){
		if($this->session->userdata('status') == 1){
			$data['content_view']='participant';
			$data['presenter'] = $this->Speaker_m->lihatParticipant();
			$this->load->view('layout_admin',$data);
		}else
			$this->load->view('login');
	}
	public function payment(){
		if($this->session->userdata('status') == 1){
			$data['content_view']='padmin';
			$data['presenter'] = $this->Speaker_m->lihatPayment();
			$this->load->view('layout_admin',$data);
		}else
			$this->load->view('login');
	}
	public function plogin(){
		$this->Login_m->setUsername($this->input->post('user'));
		$this->Login_m->setPass($this->input->post('psw'));
		$log = $this->Login_m->login();
		echo $this->input->post('user');
		if($log->status == ""){
			$this->session->set_flashdata('error', 'Wrong username and password');
			redirect(site_url('admin_dashboard'));
		}
		else{
			$this->session->set_userdata('username',$log->username);
			$this->session->set_userdata('status',$log->status);
			$this->session->set_userdata('ket',$log->ket);
			redirect(site_url('admin_dashboard'));
		}
	}
	public function list_data_presenter(){
		$output = $this->Speaker_m->list_data_presenter();
		echo json_encode($output);
	}
	public function logout(){
		$this->session->sess_destroy();
	    redirect(site_url());
	}
	public function confirm_payment($x){
		if($this->session->userdata('status') == 1){
			$id = $this->uri->segment(4);
			$id1 = $this->uri->segment(5);
			$this->Payment_m->setId($id);
			$this->Payment_m->updatePayment();
			$this->Payment_m->update1($x,$id1);
			redirect(site_url('admin_dashboard/payment'));
		}else
			$this->load->view('login');
	}
	public function rundown(){
		if($this->session->userdata('status') == 1){
			$data['content_view']='rundown';
			$data['rundown1'] = $this->Rundown_m->lihat('2016-10-10');
			$data['rundown2'] = $this->Rundown_m->lihat('2016-10-11');
			$this->load->view('layout_admin',$data);
		}else
			$this->load->view('login');
	}
	public function list_speaker($x){
		$row_data = explode(';', $x);
		$a = $row_data[0];
        $b = $row_data[2];
		echo "<select name='presenter' id='presenter' class='form-control'>";
		foreach ($this->Speaker_m->lihatByCat($a, $b) as $rows) {
			echo "<option value='".$rows->id_speaker."'>".$rows->fname." ".$rows->lname."</option>";
		}
		echo "</select>";
	}
}
?>