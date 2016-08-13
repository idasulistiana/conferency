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
	function call_paper()
	{	
		$data['content_view']='call_paper';
		$this->load->view('layout',$data);
	}
	function speaker_guidelines()
	{	
		$data['content_view']='speaker_guidelines';
		$this->load->view('layout',$data);
	}
	function proceeding()
	{	
		$data['content_view']='proceeding';
		$this->load->view('layout',$data);
	}
}
?>