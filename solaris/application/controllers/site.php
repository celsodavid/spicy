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
		$data['title'] = "Contato";
		$data['description'] = "";
		$data['keywords'] = "";
		$data['menu4'] = true;
		$data['rodape_img'] = "contato";
		
		if($this->input->post('enviar')) {			
			$dados['nome'] = $this->input->post('nome');
			$dados['telefone'] = $this->input->post('tel');
			$dados['estado_civil'] = $this->input->post('estado_civil');
			$dados['idade'] = $this->input->post('idade');
			$dados['email'] = $this->input->post('email');
			$dados['filhos'] = $this->input->post('son');
			$dados['opcao1'] = $this->input->post('opcao1');
			$dados['mensagem'] = $this->input->post('mensagem');
			$dados['items'] = $this->input->post('opcao2');
			$dados['i'] = 0;
			$mensagem = $this->load->view('email/mensagem',$dados,TRUE);
			
			$this->load->library('email');
			$this->email->from($this->input->post('email'),$this->input->post('nome'));
			#$this->email->to('kaubatalha@abacusconsultoria.com.br'); // São Paulo
			#$this->email->cc('');
			#$this->email->bcc('wasposato@bol.com.br','solaris@solarisboituva.com.br'); // Boituva
			
			$this->email->to('solaris@solarisboituva.com.br');
			$this->email->cc('celunico43@gmail.com');
			#$this->email->cc('tarsila@spicycomm.com.br');
			
			$this->email->subject('Contato via site ['.base_url().']');
			$this->email->message($mensagem);
			if($this->email->send()) {
				$this->contato_view = "contato_sucesso_view";
			}
			else {
				$this->contato_view = "contato_erro_view";
			}
		}
		else {
			$this->contato_view = "contato_view";
		}
		
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view("content/{$this->contato_view}", $data);
		$this->load->view('footer', $data);
		$this->load->view('html_footer', $data);
		#$this->load->view('email/mensagem');
	}
	
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */