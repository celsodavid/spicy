<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	
	public $atendimento;
	
	public function __construct()
	{
		parent::__construct();		
		$valor = array("http://viana.hypnobox.com.br/atendimento/index.php?id_produto=83","http://fernandezmera.nccserver.com.br/fernandezmera190/chat5/cliente/frm_login.asp?IDArea=8&sel=terrazzepatriani");
		$valor[] = shuffle($valor);
		#echo $valor[0];
		if(!$this->atendimento) {
			$this->atendimento = $valor[1];
		}
		else {
			$this->atendimento = $valor[0];
		}
	}

	public function index()
	{
		$data['title'] = "Início";
		$data['description'] = "Bem vindo a mais uma empreendimento Patriani, agora em Santo André - Happiness Patriani";
		$data['keywords'] = "happiness, patriani, apartamentos, santo andre, sao paulo, alegria, conforto, comprar";
		$data['class'] = "index_geral";
		
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('content_view/index');
		$this->load->view('footer');
		$this->load->view('html_footer');
	}
	
	public function home()
	{
		$data['title'] = "Home";
		$data['description'] = "Sua conquista, sua felicidade, conheça melhor a sua nova conquista.";
		$data['keywords'] = "happiness, patriani, suites, lavabo, churrasqueira, garagem, lançamento, apartamentos, são paulo, santo andre";
		$data['class'] = "geral";
		$data['class_footer'] = "rodape_home";
		$data['active'] = "home";
		
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('menu', $data);
		$this->load->view('content_view/home');
		$this->load->view('footer', $data);
		$this->load->view('html_footer');
		#$this->load->view('teste', $data);
	}
	
	public function localizacao()
	{
		$data['title'] = "Localização";
		$data['description'] = "Campestre, um lugar com uma infraestrutura completa com todo conforto e com tudo que você quer e precisa para o seu dia a dia.";
		$data['keywords'] = "happiness, patriani, campestre, santo andre, sao paulo, conforto, localizacao, grand plaza, shopping, universidade, federal, abc, celso daniel";
		$data['class'] = "geral";
		$data['class_footer'] = "rodape_localizacao";
		$data['active'] = "localizacao";
		
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('menu', $data);
		$this->load->view('content_view/localizacao');
		$this->load->view('footer', $data);
		$this->load->view('html_footer');
	}
	
	public function projeto()
	{
		$data['title'] = "Projeto";
		$data['description'] = "Grandes profissionais criaram o projeto Happiness e a Patriani fazendo sempre tudo para o seu dia nascer feliz.";
		$data['keywords'] = "happiness, patriani, apartamentos, inovacao, arquitetos, paisagismo, 78m2, sp, abc";
		$data['class'] = "geral";
		$data['class_footer'] = "rodape_projeto";
		$data['active'] = "projeto";
		
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('menu', $data);
		$this->load->view('content_view/projeto');
		$this->load->view('footer', $data);
		$this->load->view('html_footer');
	}
		
	public function seu_apartamento()
	{
		$data['title'] = "Seu Apartamento";
		$data['description'] = "Apartamento em lugar diferenciado garantindo conforto para seus cliente.";
		$data['keywords'] = "happiness, patriani, 78m2, privativos, suites, lavabo, churrasqueira, vagas, felicidade, alegria, abc, sao paulo";
		$data['class'] = "geral";
		$data['class_footer'] = "rodape_apartamento";
		$data['active'] = "seu_apartamento";
		
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('menu', $data);
		$this->load->view('content_view/apartamento');
		$this->load->view('footer', $data);
		$this->load->view('html_footer');
	}
	
	public function lazer($imagem=null)
	{
		$data['title'] = "Lazer";
		$data['description'] = "Lazer e felicidade têm lugares garantidos e privilagiados.";
		$data['keywords'] = "happiness, patriani, pomar, garagem, hall, games, jogos, fitness, playground, brinquedoteca, piscina, churrasqueira, living, conforto, espaço.";
		$data['class'] = "geral";
		$data['class_footer'] = "rodape_lazer";
		$data['active'] = "lazer";
		$data['src'] = ($imagem != null) ? $imagem : 'perspectiva-ilustrada-da-piscina';
		//$data['tag_a_active'] = ($imagem != null) ? '' : 'piscina_hover';
		
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('menu', $data);
		$this->load->view('content_view/lazer', $data);
		$this->load->view('footer', $data);
		$this->load->view('html_footer');
	}
	
	private function lazerInfo($info)
	{
		$return = array();
		switch ($info){
			case 'image1': 
				$return['p'] = "Aproveite o sol. Curta sua piscina. Sinta o bem-estar.";
				$return['span'] = "Piscina adulto e infantil com deck molhado e solarium. Quando o calor estiver forte, desça e aproveite.";
			break;

			case 'image2':
				$return['p'] = "A Academia que você sempre quis, pertinho de você.";
				$return['span'] = "Fitness entregue equipado com aparelhos de última geração, TV e decoração especial.<br/> A academia que você sempre quis, pertinho de você: é só pegar o elevador.";
			break;

			case 'image3':
				$return['p'] = "Diversão garantida para todas as idades.";
				$return['span'] = "Alegria não irá faltar aqui. Salão de jogos com mesa de Air Play e Espaço Games com TV e Videogame. Divirta-se!";
			break;

			case 'image4':
				$return['p'] = "A fase mais feliz da vida vai ficar ainda mais alegre.";
				$return['span'] = "Um local onde a criançada vai se divertir demais! Brinquedoteca equipada com TV, DVD<br/>exclusivo espaço de mini teatro e muito mais.";
			break;

			case 'image5':
				$return['p'] = "Criança é sinônimo de felicidade. E este playground<br/> é sinônimo de pura animação.";
				$return['span'] = "Playground com piso especial emborrachado integrado com mini quadra de chute a gol.<br/> Segurança e diversão garantidas para as crianças.";
			break;

			case 'image6':
				$return['p'] = "Os bichinhos que alegram sua vida terão um espaço só para eles.";
				$return['span'] = "Agility Dog. Comodidade para você e diversão para seu melhor amigo.";
			break;

			case 'image7':
				$return['p'] = "A felicidade será sempre a convidada de honra nas suas festas.";
				$return['span'] = "Salão de festas com bar, palco, pista de dança com globo de luz e lounge.";
			break;

			case 'image8':
				$return['p'] = "Enquanto você prepara o churrasco, seus amigos<br/> temperam o clima com bom humor.";
				$return['span'] = "Churrasqueira com forno de pizza equipada com bancada, armários, mesas e guarda-sol.<br/> Um cenário perfeito para você receber seus convidados com conforto e bom gosto.";
			break;

			case 'image9':
				$return['p'] = "Um lugar perfeito para sua família sentar e contar<br/> histórias. Todas com final feliz.";
				$return['span'] = " Um espaço gostoso e aconchegante para você relaxar ou reunir seus amigos ao ar livre.";
			break;

			case 'image10':
				$return['p'] = "Sustentabilidade, mobilidade e preocupação<br/> com seu bem-estar.";
				$return['span'] = "A Patriani apresenta mais uma novidade: O primeiro prédio de Santo André<br/> com recarga para bicicleta elétrica.";
			break;
								
			default: 
				$return['p'] = "Aproveite o sol. Curta sua piscina. Sinta o bem-estar.";
				$return['span'] = "Piscina adulto e infantil com deck molhado e solarium. Quando o calor estiver forte, desça e aproveite.";
			break;
		}
		return $return;
	}
	
	public function lazerView()
	{
		$informacoes = $this->lazerInfo($this->input->post('indice'));
		$data['tag_p'] = $informacoes['p'];
		$data['tag_span'] = $informacoes['span'];
		$data['src'] = $this->input->post('src');
		
		$this->load->view('ajax/lazer_view', $data);
	} 
	
	public function diferenciais()
	{
		$data['title'] = "Diferenciais Patriani";
		$data['description'] = "Diferenciais Patriani. Um compromisso com a qualidade.";
		$data['keywords'] = "happiness, patriani, diferenciais, sao paulo, santo andre, abc, sustentabilidade, acessibilidade";
		$data['class'] = "geral";
		$data['class_footer'] = "rodape_diferenciais";
		$data['active'] = "diferenciais";
		
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('menu', $data);
		$this->load->view('content_view/diferenciais');
		$this->load->view('footer', $data);
		$this->load->view('html_footer');
	}
	
	public function realizacoes()
	{
		$data['title'] = "Realizações";
		$data['description'] = "Para você que sempre sonhou em viver em uma cidade cada vez mais valorizada com todo o conforto e praticidade que sempre buscou.";
		$data['keywords'] = "patriani, happiness, vertice, vivere, terrazze, mobilita, spettacolo, outros, empreendimentos, apartamentos, incorporadora, parceiros, relacionados";
		$data['class'] = "geral";
		$data['class_footer'] = "rodape_realizacoes";
		$data['active'] = "realizacoes";
		
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('menu', $data);
		$this->load->view('content_view/realizacoes');
		$this->load->view('footer', $data);
		$this->load->view('html_footer');
	}
	
	public function contato()
	{		
		$data['title'] = "Fale Conosco";
		$data['description'] = "Seja Happy, a Incorporadora Patriani sempre inovando para lhe dar conforto e alegria, seja happy, vem de happiness patriani.";
		$data['keywords'] = "patriani, happiness, contatos, atendimento, online, fale conosco, duvidas";
		$data['class'] = "geral";
		$data['class_footer'] = "rodape_contato";
		$data['active'] = "contato";
		$data['atendimento'] = $this->atendimento;
		
		if($this->input->post('enviar')) {			
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nome', 'Nome', 'required');
			$this->form_validation->set_rules('telefone', 'Telefone', 'required|valid_phone');
			$this->form_validation->set_rules('email', 'E-mail', 'required|callback_valid_email');
			$this->form_validation->set_rules('opcao1', 'Você conhece a incorporadora Patriani?', 'required');
			$this->form_validation->set_rules('mensagem', 'Mensagem', 'required');
			$this->form_validation->set_rules('idade','Idade');
			$this->form_validation->set_rules('filhos','Filhos');
			
			if($this->form_validation->run() == FALSE) {
				$view = 'content_view/contato';
			}
			else {				
				$dados['nome'] = $this->input->post('nome');
				$dados['telefone'] = $this->input->post('telefone');
				$dados['estadoCivil'] = $this->input->post('estadoCivil');
				$dados['idade'] = $this->input->post('idade');
				$dados['email'] = $this->input->post('email');
				$dados['filhos'] = $this->input->post('filhos');
				$dados['opcao1'] = $this->input->post('opcao1');
				$dados['mensagem'] = $this->input->post('mensagem');
				$dados['items'] = $this->input->post('opcao2');
				$dados['i'] = 0;				
				$mensagem = $this->load->view('mensagem',$dados,TRUE);
				
				$this->load->library('email');				
				$this->email->from($this->input->post('email'),$this->input->post('nome'));				
				$this->email->to('atendimento@incorporadorapatriani.com.br');
				#$this->email->cc('');
				$this->email->bcc('contato@happinesspatriani.com.br');
				
				#$this->email->to('celunico43@gmail.com');
				#$this->email->cc('tarsila@spicycomm.com.br');
				
				$this->email->subject('Contato via site ['.base_url().']');
				$this->email->message($mensagem);
				if($this->email->send()) {
					$view = 'content_view/contato_sucesso';
				}
				else {
					$view = 'content_view/contato_falha';
				}
			}			
		}
		else {
			$view = 'content_view/contato';
		}
		
		$this->load->view('html_header', $data);
		$this->load->view('header', $data);
		$this->load->view('menu', $data);
		$this->load->view($view);
		$this->load->view('footer', $data);
		$this->load->view('html_footer');	
	}	
	
	public function valid_email($email) {
		if(!preg_match("/^([[:alnum:]_.-]){3,}@([[:lower:][:digit:]_.-]{3,})(.[[:lower:]]{2,3})(.[[:lower:]]{2})?$/", $email)) {
			$this->form_validation->set_message('valid_email', 'O campo %s não é um email valido.');
			return FALSE;
		}
		else {
			return TRUE;
		}
	}
	
	public function valid_phone($telefone) {
		if(!preg_match("/^\([0-9]{2}\)[0-9]{4}\-[0-9]{4}$/", $telefone)) {
			$this->form_validation->set_message('valid_phone', 'O campo %s não é um um número valido.');
			return FALSE;
		}
		else {
			return TRUE;
		}
	}
	
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */