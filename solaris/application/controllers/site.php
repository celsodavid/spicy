<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public $contato_view;
	
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
		$data['rodape_img'] = "residencial";
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
		$data['rodape_img'] = "resort";
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
		$data['rodape_img'] = "localizacao";
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('content/localizacao_view', $data);
		$this->load->view('footer', $data);
		$this->load->view('html_footer');
	}
	
	public function contato()
	{
		/* 
			São Paulo - kaubatalha@abacusconsultoria.com.br 
			Boituva- wasposato@bol.com.br
		 */
		$data['title'] = "Contato";
		$data['description'] = "";
		$data['keywords'] = "";
		$data['menu4'] = true;
		$data['rodape_img'] = "contato";
		
		if($this->input->post('enviar')) {
			$this->contato_view = "contato_sucesso_view";
		}
		else {
			$this->contato_view = "contato_view";
		}
		
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view("content/{$this->contato_view}", $data);
		$this->load->view('footer', $data);
		$this->load->view('html_footer', $data);
	}
	
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */