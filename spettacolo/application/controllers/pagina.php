<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Pagina extends CI_Controller{
	
	var $hypnobox;
	var $fernandezmera;
	
	public function __construct(){
		parent::__construct();
		$this->hypnobox = "https://www.chatcomercial.com.br/livehelp/www/visitor/index.php?COMPANY_ID=11902&SITE_ID=19977&ssl=1&ahrefmode=true";
		$this->fernandezmera = "http://fernandezmera.nccserver.com.br/fernandezmera190/chat5/cliente/frm_login.asp?IDArea=8&sel=terrazzepatriani";
	}
	
	public function index(){
		$data['title'] = "Spettacolo";
		$data['robots'] = "index,follow";
		$data['description'] = "Spettacolo Patriani - Seu imóvel com sobrenome - Um show de empreendimento";
		$data['keywords'] = "incorporadora, patriani, spettacolo patriani, patriani spettacolo, construcao, construção, apartamento, residencial, empreendimento, imovel, imoveis, sorocaba, predios, apartamentos, lazer, são paulo, spettacolo, espetaculo, rua antonio perez hernandes";		
		$this->load->view('html_header', $data);		
		$this->load->view('content/index_view');
		$this->load->view('html_footer');		
	}
	
	public function home(){
		$data['title'] = "Spettacolo | HOME";
		$data['robots'] = "index,follow";
		$data['description'] = "Spettacolo Patriani - Seu imóvel com sobrenome - Um show de empreendimento";
		$data['keywords'] = "incorporadora, patriani, spettacolo patriani, patriani spettacolo, construcao, construção, apartamento, residencial, empreendimento, imovel, imoveis, sorocaba, predios, apartamentos, lazer, são paulo, spettacolo, espetaculo, rua antonio perez hernandes, home";
		$data['h2_title'] = "SEJA BEM-VINDO";
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('content/home_view');
		$this->load->view('footer');
		$this->load->view('html_footer');
	}
			
	public function projeto(){
		$data['title'] = "Spettacolo | PROJETO";
		$data['robots'] = "index,follow";
		$data['description'] = "Spettacolo Patriani - Seu imóvel com sobrenome - Um show de empreendimento";
		$data['keywords'] = "projeto, projetar, incorporadora, patriani, spettacolo patriani, patriani spettacolo, construcao, construção, apartamento, residencial, empreendimento, imovel, imoveis, sorocaba, predios, apartamentos, lazer, são paulo, spettacolo, espetaculo, rua antonio perez hernandes";
		$data['h2_title'] = "PROJETO";
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('content/projeto_view');
		$this->load->view('footer');
		$this->load->view('html_footer');
	}
	
	public function localizacao(){
		$data['title'] = "Spettacolo | LOCALIZAÇÃO";
		$data['robots'] = "index,follow";
		$data['description'] = "Spettacolo Patriani - Seu imóvel com sobrenome - Um show de empreendimento";
		$data['keywords'] = "encontrar, localizar, incorporadora, patriani, spettacolo patriani, patriani spettacolo, construcao, construção, apartamento, residencial, empreendimento, imovel, imoveis, sorocaba, predios, apartamentos, lazer, são paulo, spettacolo, espetaculo, rua antonio perez hernandes";
		$data['h2_title'] = "LOCALIZAÇÃO";
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('content/localizacao_view');
		$this->load->view('footer');
		$this->load->view('html_footer');
	}
	
	public function lazer(){
		$data['title'] = "Spettacolo | LAZER";
		$data['robots'] = "index,follow";
		$data['description'] = "Spettacolo Patriani - Seu imóvel com sobrenome - Um show de empreendimento";
		$data['keywords'] = "playground, lazer, brincadeiras, diversao, alegria, incorporadora, patriani, spettacolo patriani, patriani spettacolo, construcao, construção, apartamento, residencial, empreendimento, imovel, imoveis, sorocaba, predios, apartamentos, lazer, são paulo, spettacolo, espetaculo, rua antonio perez hernandes";
		$data['h2_title'] = "LAZER";
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('content/lazer_view');
		$this->load->view('footer');
		$this->load->view('html_footer');
	}
	
	public function apartamento(){
		$data['title'] = "Spettacolo | SEU APARTAMENTO";
		$data['robots'] = "index,follow";
		$data['description'] = "Spettacolo Patriani - Seu imóvel com sobrenome - Um show de empreendimento";
		$data['keywords'] = "incorporadora, patriani, spettacolo patriani, patriani spettacolo, construcao, construção, apartamento, residencial, empreendimento, imovel, imoveis, sorocaba, predios, apartamentos, lazer, são paulo, spettacolo, espetaculo, rua antonio perez hernandes";
		$data['h2_title'] = "SEU APARTAMENTO";
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('content/apartamento_view');
		$this->load->view('footer');
		$this->load->view('html_footer');
	}
	
	public function diferenciais(){
		$data['title'] = "Spettacolo | DIFERENCIAIS PATRIANI";
		$data['robots'] = "index,follow";
		$data['description'] = "Spettacolo Patriani - Seu imóvel com sobrenome - Um show de empreendimento";
		$data['keywords'] = "diferenciais, incorporadora, patriani, spettacolo patriani, patriani spettacolo, construcao, construção, apartamento, residencial, empreendimento, imovel, imoveis, sorocaba, predios, apartamentos, lazer, são paulo, spettacolo, espetaculo, rua antonio perez hernandes";
		$data['h2_title'] = "DIFERENCIAIS PATRIANI";
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('content/diferenciais_view');
		$this->load->view('footer');
		$this->load->view('html_footer');
	}
	
	public function realizacoes(){
		$data['title'] = "Spettacolo | REALIZAÇÕES";
		$data['robots'] = "index,follow";
		$data['description'] = "Spettacolo Patriani - Seu imóvel com sobrenome - Um show de empreendimento";
		$data['keywords'] = "realizam, realizacoes, incorporadora, patriani, spettacolo patriani, patriani spettacolo, construcao, construção, apartamento, residencial, empreendimento, imovel, imoveis, sorocaba, predios, apartamentos, lazer, são paulo, spettacolo, espetaculo, rua antonio perez hernandes";
		$data['h2_title'] = "REALIZAÇÕES";
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('content/realizacoes_view');
		$this->load->view('footer');
		$this->load->view('html_footer');
	}
	
	public function contato(){
		$this->load->library('session');
		
		switch ($this->session->userdata('atendimento')){
			case 'viana':
				$url = 'fernandezmera';
				$this->session->set_userdata(array('atendimento'=>'fernandezmera'));
				$this->session->set_userdata(array('email'=>'vendas@fernandezmera.com.br'));
				break;
			case 'fernandezmera':
				$url = 'hypnobox';
				$this->session->set_userdata(array('atendimento'=>'viana'));
				$this->session->set_userdata(array('email'=>'contato@mendesortega.com.br'));
				break;
			default:
				$url = 'hypnobox';
				$this->session->unset_userdata('atendimento');
				$this->session->set_userdata(array('atendimento'=>'fernandezmera'));
				$this->session->set_userdata(array('email'=>'contato@mendesortega.com.br'));
				break;
		}
				
		$data['title'] = "Spettacolo | CONTATO PATRIANI";
		$data['robots'] = "index,follow";
		$data['description'] = "Spettacolo Patriani - Seu imóvel com sobrenome - Um show de empreendimento";
		$data['keywords'] = "contato, faleconosco, email, incorporadora, patriani, spettacolo patriani, patriani spettacolo, construcao, construção, apartamento, residencial, empreendimento, imovel, imoveis, sorocaba, predios, apartamentos, lazer, são paulo, spettacolo, espetaculo, rua antonio perez hernandes";
		$data['h2_title'] = "CONTATO";		
		$data2['atendimentos'] = $this->$url;
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('menu');
		$this->load->view('content/contato_view', $data2);
		$this->load->view('footer');
		$this->load->view('html_footer');
	}
	
	public function email(){
		$this->load->library('form_validation');
	
		$this->form_validation->set_rules('nome', 'Nome', 'required');
		$this->form_validation->set_rules('email', 'E-mail', 'required|callback_email_check');
		$this->form_validation->set_rules('telefone', 'Telefone', 'required');
	
		if($this->form_validation->run() == FALSE)
		{
			$this->contato();
		}
		else
		{
			$this->load->library('session');
			$this->load->helper('mailito_helper');
			
			$nome = $this->input->post('nome');
			$email = $this->input->post('email');
			$telefone = $this->input->post('telefone');
			$message = $this->input->post('mensagem');
			//$assunto = "Contato via site [" . base_url() . "]";
			/*$cc = array(
					'contato@mendesortega.com.br',
					'vendas@fernandezmera.com.br'
			);*/
			
			$cc = array($this->session->userdata('email'));			
			
			$send = enviar_email($nome, $email, $telefone, $message, base_url(), $cc);
			if($send == true){
				$this->session->set_flashdata('mensagem', 'E-mail enviado com sucesso.');						
				$this->session->set_flashdata('alerta', 'alert-success');						
				//print $this->email->print_debugger();
			}else{
				$this->session->set_flashdata('mensagem', 'Erro ao enviar o e-mail.');	
				$this->session->set_flashdata('alerta', 'alert-error');
				//print $this->email->print_debugger();
			}
			redirect(base_url('contato'));
		}
	}

	public function email_check($email){
		if(!preg_match("/^([[:alnum:]_.-]){3,}@([[:lower:][:digit:]_.-]{3,})(.[[:lower:]]{2,3})(.[[:lower:]]{2})?$/", $email))
		{
			$this->form_validation->set_message('email_check', 'O campo %s não é um email valido');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	
}

/* End of file pagina.php */
/* Location: ./application/controllers/pagina.php */