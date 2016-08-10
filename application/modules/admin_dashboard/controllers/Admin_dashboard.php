<?php

class Admin_dashboard extends CI_Controller {

	function __construct(){
        // Call the Model constructor
        parent::__construct();
     
    }
	function index()
	{	
		$data['content_view']='admin_dashboard';
		$this->load->view('layout_admin',$data);
	}
}
?>