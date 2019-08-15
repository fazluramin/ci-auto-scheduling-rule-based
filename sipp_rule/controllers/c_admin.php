<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class c_admin extends CI_Controller
{

	function __construct()
    {
        parent::__construct();

		include("web.php");
		
    }

	function render_view($data)
	{
      $this->load->view('page',$data);
	}

	function index()
	{
		$data = array();	
		$data['page_name'] = 'home';
		$data['page_title'] = 'Welcome';
		$data['page_level'] = 'ADMIN';
		
		$this->render_view($data);
	}
	
}