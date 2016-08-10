<?php

class Data_presenter extends CI_Controller {

	function __construct(){
        // Call the Model constructor
        parent::__construct();
     
    }
	function index()
	{	
		$data['content_view']='data_presenter';
		$this->load->view('layout_admin',$data);
	}
}
?>