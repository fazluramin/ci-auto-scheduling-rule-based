<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class c_sekjur extends CI_Controller
{

	function __construct()
    {
        parent::__construct();

		include_once("web.php");
		
    }

	function render_view($data)
	{
      $this->load->view('page_sekjur',$data);
	}

	function index()
	{
		$data = array();	
		$data['page_name'] = 'home';
		$data['page_title'] = 'Welcome';
		$data['page_level'] = 'SEKRETARIS JURUSAN';
		
		$this->render_view($data);
	}
}