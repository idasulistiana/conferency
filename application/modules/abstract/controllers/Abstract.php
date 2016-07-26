<?php

class Abstract extends CI_Controller {

	function __construct(){
        // Call the Model constructor
        parent::__construct();
     
    }
	function index()
	{	
		$data['content_view']='abstract';
		$this->load->view('layout',$data);
	}
}
?>