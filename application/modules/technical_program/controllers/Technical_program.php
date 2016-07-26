<?php

class Technical_program extends CI_Controller {

	function __construct(){
        // Call the Model constructor
        parent::__construct();
     
    }
	function index()
	{	
		$data['content_view']='technical_program';
		$this->load->view('layout',$data);
	}
}
?>