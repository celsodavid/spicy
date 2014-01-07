<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
		
	public function __construct()
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
		#$this->load->view('footer');
		$this->load->view('html_footer');
	}
	
	public function home()
	{
		$data['title'] = "Home";
		$data['description'] = "";
		$data['keywords'] = "";
		$data['menu'] = "home";
		$data['h3'] = "Breve Lançamento Patriani<br/> na Vila Assunção em Santo André.";
		
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('content/home_view', $data);
		$this->load->view('footer');
		$this->load->view('html_footer');
	}
	
	public function localizacao()
	{
		$data['title'] = "Localização";
		$data['description'] = "";
		$data['keywords'] = "";
		$data['menu'] = "localizacao";
		$data['h3'] = "Santo André.<br/> Seu lugar de viver bem.";
		
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('content/localizacao_view', $data);
		$this->load->view('footer');
		$this->load->view('html_footer');
	}
	
	public function projeto()
	{
		$data['title'] = "Projeto";
		$data['description'] = "";
		$data['keywords'] = "";
		$data['menu'] = "projeto";
		$data['h3'] = "Conheça seu futuro lar.<br/>Entre e comece a viver.";
		
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('content/projeto_view', $data);
		$this->load->view('footer');
		$this->load->view('html_footer');
	}
		
	public function seu_apartamento()
	{
		$data['title'] = "Seu Apartamento";
		$data['description'] = "";
		$data['keywords'] = "";
		$data['menu'] = "seuapartamento";
		$data['h3'] = "Espaço, conforto, bom gosto e bem-estar.<br/>E isso é só o começo.";
		
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('content/seuapartamento_view', $data);
		$this->load->view('footer');
		$this->load->view('html_footer');
	}
	
	public function lazer()
	{
		$data['title'] = "Lazer";
		$data['description'] = "";
		$data['keywords'] = "";
		$data['menu'] = "lazer";
		$data['h3'] = "Diversão total para você.<br/>E isso é só o começo.";
		
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('content/lazer_view', $data);
		$this->load->view('footer');
		$this->load->view('html_footer');
	}
	
	public function diferenciais()
	{
		$data['title'] = "Diferenciais Patriani";
		$data['description'] = "";
		$data['keywords'] = "";
		$data['menu'] = "diferenciais";
		$data['h3'] = "Diferenciais Patriani.<br/> Um compromisso com a qualidade.";
		
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('content/diferenciais_view', $data);
		$this->load->view('footer');
		$this->load->view('html_footer');
	}
	
	public function realizacoes()
	{
		$data['title'] = "Realização Incorporadora Patriani";
		$data['description'] = "";
		$data['keywords'] = "";
		$data['menu'] = "realizacao";
		$data['h3'] = "Grandes marcas unidas<br/> para você viver melhor.";
		
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('content/realizacao_view', $data);
		$this->load->view('footer');
		$this->load->view('html_footer');
	}
	
	public function contato()
	{
		$data['title'] = "Fale Conosco - Atendimento Online";
		$data['description'] = "";
		$data['keywords'] = "";
		$data['menu'] = "contato";
		$data['h3'] = "Breve Lançamento Patriani<br/> na Vila Assunção em Santo André.";
		
		if($this->input->post('save')) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nome','Nome','required');
			$this->form_validation->set_rules('telefone','Telefone','required|calback_valid_phone');
			$this->form_validation->set_rules('email','E-mail','required|valid_email');
			$this->form_validation->set_rules('opcao1','Você conhece a incorporadora Patriani?','required');
			$this->form_validation->set_rules('mensagem','Mensagem','required');
			$this->form_validation->set_rules('idade','Idade');
			$this->form_validation->set_rules('filhos','Filhos');
			
			if($this->form_validation->run() == FALSE) {
				$view = 'content/contato_view';
			}
			else {
				$email['nome'] = $this->input->post('nome');
				$email['telefone'] = $this->input->post('telefone');
				$email['civil'] = $this->input->post('civil');
				$email['idade'] = $this->input->post('idade');
				$email['email'] = $this->input->post('email');
				$email['filhos'] = $this->input->post('filhos');
				$email['opcao1'] = $this->input->post('opcao1');
				$email['mensagem'] = $this->input->post('mensagem');
				$email['items'] = $this->input->post('opcao2');
				$mensagem = $this->load->view('email/mensagem',$email,TRUE);
				echo $mensagem;
				die();
				#$this->load->library('email');
				#$this->email->from($this->input->post('email'),$this->input->post('nome'));
				
				#$this->email->to('celunico43@gmail.com');
				#$this->email->cc('tarsila@spicycomm.com.br');
				
				#$this->email->to('atendimento@incorporadorapatriani.com.br');
				#$this->email->cc('');
				#$this->email->bcc('contato@happinesspatriani.com.br');				
				#$this->email->subject('Contato via site ['.base_url().']');
				#$this->email->message($mensagem);
				
				#if($this->email->send()) {
				#	$view = 'content_view/contato_sucesso_view';
				#}
				#else {
				#	$view = 'content_view/contato_falha_view';
				#}
			}
		}
		else {
			#$view = 'content/contato_view';
			#$view = 'content/contato_falha_view';
			$view = 'content/contato_sucesso_view';
		}
		
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view($view, $data);
		$this->load->view('footer');
		$this->load->view('html_footer');
	}	
	
	public function valid_email($email) {
		if(!preg_match("/^([[:alnum:]_.-]){3,}@([[:lower:][:digit:]_.-]{3,})(.[[:lower:]]{2,3})(.[[:lower:]]{2})?$/", $email)) {
			$this->form_validation->set_message('valid_email', '* O campo %s não é um email valido.');
			return FALSE;
		}
		else {
			return TRUE;
		}
	}
	
	public function valid_phone($telefone) {
		if(!preg_match("/^\([0-9]{2}\)[0-9]{4}\-[0-9]{4}$/", $telefone)) {
			$this->form_validation->set_message('valid_phone', '* O campo %s não é um um número valido.');
			return FALSE;
		}
		else {
			return TRUE;
		}
	}
	
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */