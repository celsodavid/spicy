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
	
	public function residencial()
	{
		$data['title'] = "Residencial";
		$data['description'] = "";
		$data['keywords'] = "";
		$data['menu1'] = true;
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('content/residencial_view', $data);
		$this->load->view('footer', $data);
		$this->load->view('html_footer', $data);
	}

	public function resort()
	{
		$data['title'] = "Resort";
		$data['description'] = "";
		$data['keywords'] = "";
		$data['menu2'] = true;
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('content/resort_view', $data);
		$this->load->view('footer', $data);
		$this->load->view('html_footer', $data);
	}
	
	public function localizacao()
	{
		$data['title'] = "Localizacao";
		$data['description'] = "";
		$data['keywords'] = "";
		$data['menu3'] = true;		
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('content/localizacao_view', $data);
		$this->load->view('footer', $data);
		$this->load->view('html_footer');
	}
	
	public function contato()
	{
		$data['title'] = "Fale Conosco";
		$data['description'] = "";
		$data['keywords'] = "";
		$data['menu4'] = true;
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('content/contato_view', $data);
		$this->load->view('footer', $data);
		$this->load->view('html_footer', $data);
	}
	
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */