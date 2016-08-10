<?php

class Data_payment extends CI_Controller {

	function __construct(){
        // Call the Model constructor
        parent::__construct();
     
    }
	function index()
	{	
		$data['content_view']='data_payment';
		$this->load->view('layout_admin',$data);
	}
}
?>