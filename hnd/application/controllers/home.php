<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['title'] = 'Home | HND Habitações';
		$data['description'] = 'HND Habitações - Comprometida em construir imóveis econômicos com rapidez e qualidade.';
		$data['keywords'] = 'incorporadora, hnd, construção, empreendimento, imovel, obras, piracicaba, lancamento, breve, ícone investimento, ícone participações, bluecorp coretora de seguro, ca mobiliário com segurança';
		
		$menu['home'] = 'active';
		$conteudo['pagina_view'] = 'home_view';
		
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}

	public function empresa(){
		$data['title'] = 'Empresa | HND Habitações';
		$data['description'] = 'HND Habitações - Comprometida em construir imóveis econômicos com rapidez e qualidade.';
		$data['keywords'] = 'incorporadora, hnd, construção, empreendimento, imovel, obras, piracicaba, lancamento, breve, empresa, ícone investimento, ícone participações, bluecorp coretora de seguro, ca mobiliário com segurança';
		
		$menu['empresa'] = 'active';
		$conteudo['pagina_view'] = 'empresa_view';
		
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}

	public function principios(){
		$data['title'] = 'Princípios | HND Habitações';
		$data['description'] = 'HND Habitações - Comprometida em construir imóveis econômicos com rapidez e qualidade.';
		$data['keywords'] = 'incorporadora, hnd, construção, empreendimento, imovel, obras, piracicaba, lancamento, breve, principios, ícone investimento, ícone participações, bluecorp coretora de seguro, ca mobiliário com segurança';

		$menu['principios'] = 'active';
		$conteudo['pagina_view'] = 'principios_view';
		
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}

	public function empreendimento(){
		$data['title'] = 'Empreendimento | HND Habitações';
		$data['description'] = 'HND Habitações - Comprometida em construir imóveis econômicos com rapidez e qualidade.';
		$data['keywords'] = 'incorporadora, hnd, construção, empreendimento, imovel, obras, piracicaba, lancamento, breve, ícone investimento, ícone participações, bluecorp coretora de seguro, ca mobiliário com segurança';
		
		$menu['emp'] = 'active';
		$conteudo['pagina_view'] = 'empreendimento_view';
		
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	
	public function localizacao(){
		$data['title'] = 'Empreendimento - Localização | HND Habitações';
		$data['description'] = 'HND Habitações - Comprometida em construir imóveis econômicos com rapidez e qualidade.';
		$data['keywords'] = 'incorporadora, hnd, construção, empreendimento, imovel, obras, localizacao, piracicaba, lancamento, breve, ícone investimento, ícone participações, bluecorp coretora de seguro, ca mobiliário com segurança';
		
		$menu['emp'] = 'active';
		$conteudo['pagina_view'] = 'localizacao_view';
		
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	
	public function contato(){
		$data['title'] = 'Contato | HND Habitações';
		$data['description'] = 'HND Habitações - Comprometida em construir imóveis econômicos com rapidez e qualidade.';
		$data['keywords'] = 'incorporadora, hnd, construção, empreendimento, imovel, obras, piracicaba, lancamento, breve, contato hnd, ícone investimento, ícone participações, bluecorp coretora de seguro, ca mobiliário com segurança';
		
		$menu['contato'] = 'active';
		$conteudo['pagina_view'] = 'contato_view';
		
		
		if($this->input->post('enviar_email') == "enviar"){

			$nome = $this->input->post('nome');
			$email = $this->input->post('email');
			$telefone = $this->input->post('phone');
			$mensagem = utf8_decode($this->input->post('mss'));
			$assunto = utf8_decode('Contato via site com Hnd Habitações');
			
			
			$this->load->library('email');
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			
			
			$this->email->from("$email","$nome");
			$this->email->to('hnd@hndhabitacoes.com.br');						
			$this->email->cc("$email","$nome");
			
			$this->email->subject($assunto);
			$this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
			<head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
				Nome:		{$nome}<br/>
				E-mail:		{$email}<br/>
				Telefone:	{$telefone}<br/>
				Assunto:	{$assunto}: <br/>
				Mensagem:	{$mensagem}<br/>
			</body></html>");
			
			$em = $this->email->send();
			if($em){
				//echo "1<br>";
				//echo $this->email->print_debugger();
				//die();
				$conteudo['email_enviado'] = "<script type='text/javascript'>alert('E-mail enviado com sucesso');</script>";
			}else{
				//echo "2<br>";
				//echo $this->email->print_debugger();
				//die();
				$conteudo['email_enviado'] = "<script type='text/javascript'>alert('O E-mail não pode ser enviado! \n Se o problema persistir, entre em contato pelo hnd@hndhabitacoes.com.br');</script>";						
			}
			
		}
		
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	
	
	
}

/* Location: ./application/controllers/home.php */