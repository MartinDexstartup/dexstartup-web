<?php

/**
  * 
  */
 class Admin extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		

    }

    public function index()
    {
    	if (is_null(get_cookie('dexsecret'))) {

 			$this->view();
		}
    	else
    	{
    		redirect(base_url()."dashboarddex");
    	}
    }

    public function view()
    {
    	$this->load->view('admin');
    }


// the following  functions are experimental only
    

    public function get()
    {
    	 $cookie= array(
           'name'   => 'dexsecret',
           'value'  => 'exploring life and bug make you happy',
           'expire' => '3600',
       );

    		
    

       $this->input->set_cookie($cookie);
   		
   		
   		echo $this->input->cookie('dexsecret',true);
    	


    }

    public function delete()
    {
    	delete_cookie('dexsecret');
    }
 } 
?>