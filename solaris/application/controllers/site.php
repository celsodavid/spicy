<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
	}
	
	public function index()
	{
		$data['title'] = "Início";
		$data['description'] = "";
		$data['keywords'] = "";
		
		$this->load->view('html_header', $data);
		$this->load->view('content/index_view');
		$this->load->view('html_footer');
	}
	
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */