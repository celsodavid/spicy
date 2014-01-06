<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['titulo'] = "MAISON LOUISE A ESSÊNCIA DOS JARDINS";
		$data['descricao'] = "Líder no segmento de construção civil, de alto padrão, a Zabo está sempre inovando nas soluções de arquitetura e engenharia. Conheça nossos produtos e serviços. Maison Louise - rua josé maria lisboa, 154 - jardins, são paulo - sp";
		$data['keys'] = "Zabo, Construções, Construção Civil, Arquitetura, Engenharia, Maison Lousie, maison, stephanie, josephine, daniele, sophie, jolie, catherine, Piscina coberta, Fitness, Salão de festas, Jardim, área de descanso, Recreação infantil, Hall Social, hall de serviço, benedito abbud, paisagismo, 4 dormitôrios, 2 suítes, 3 vagas, 1 por andar, 215m² Privativo, Luxo, Espaço, Conforto, Privacidade, requinte, itamar berezin, lobby, essência, apartamentos, planta, implantação, contato, fale conosco, atendimento, empreendimentos";
		$this->load->view('home', $data);
	}
	
	public function email(){		
		$this->load->helper('mailito_helper');
		
		$nome = $this->input->post('nome');
		$email = $this->input->post('email');
		$telefone = $this->input->post('phone');
		$mensagem = $this->input->post('mensagem');
		
		$send = enviar_email($nome, $email, $telefone, $mensagem, base_url());
		if($send == true){
			$this->session->set_flashdata('email_enviado','E-mail enviado com sucesso. Aguarde contato.');
			$this->session->set_flashdata('class_mail','txt_mensagemEmail');
			//$data['email_enviado'] = "E-mail enviado com sucesso. Aguarde contato.";
		}else{
			$this->session->set_flashdata('email_enviado','Erro ao enviar o e-mail. Por favor envia um email para <a class="link_contato" href="mailito:contato@maisonlouise.com.br" title="Enviar E-mail">contato@maisonlouise.com.br</a>');
			$this->session->set_flashdata('class_mail','txt_mensagemEmail_Erro');
			//$data['email_enviado'] = "Erro ao enviar o e-mail. Por favor envia um email para contato@maisonlouise.com.br";
		}
		
		#echo $data['email_enviado'];
		
		redirect(base_url('#contato'));
		
	}
	
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */