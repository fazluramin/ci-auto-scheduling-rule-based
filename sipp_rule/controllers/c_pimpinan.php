<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class c_pimpinan extends CI_Controller
{

	function __construct()
    {
        parent::__construct();

		include_once("web.php");
		
    }

	function render_view($data)
	{
      $this->load->view('page_pimpinan',$data);
	}

	function index()
	{
		$data = array();	
		$data['page_name'] = 'home';
		$data['page_title'] = 'Welcome';
		$data['page_level'] = 'PIMPINAN FAKULTAS';
		
		$this->render_view($data);
	}
}