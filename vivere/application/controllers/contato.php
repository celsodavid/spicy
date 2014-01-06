<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller{
	
	var $hypnobox;
	var $fernandezmera;
	
	public function __construct(){
		parent::__construct();
		$this->hypnobox = "http://viana.hypnobox.com.br/atendimento/index.php?id_produto=83";
		$this->fernandezmera = "http://fernandezmera.nccserver.com.br/fernandezmera190/chat5/cliente/frm_login.asp?IDArea=8&sel=terrazzepatriani";		
	}
	
	public function index(){
		
		$data['title'] = "Contato";
		$data['meta'] = array(
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'description', 'content' => 'CONTATO - VIVERE'),
			array('name' => 'keywords', 'content' => 'vivere'),
			array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
		);
		$data['config'] = array("bg_foto" => "fundo.jpg");
		// sorteio o atendimento online, para que nunca se repita o mesmo atendimento
		switch ($this->session->userdata('atendimento')){
			case 'viana': 
					$url = 'fernandezmera';						
					$this->session->set_userdata(array('atendimento'=>'fernandezmera'));
					$this->session->set_userdata(array('email'=>'vendas@fernandezmera.com.br'));
				break;
			case 'fernandezmera': 
					$url = 'hypnobox';					
					$this->session->set_userdata(array('atendimento'=>'viana'));
					$this->session->set_userdata(array('email'=>'recepcao1@viananegocios.com.br'));
				break;			
			default:
					$url = 'hypnobox';	
					$this->session->unset_userdata('atendimento');		
					$this->session->set_userdata(array('atendimento'=>'fernandezmera'));
					$this->session->set_userdata(array('email'=>'vendas@fernandezmera.com.br'));
				break;
		}
		
		$data2['contato'] = "class='active'";
		// recebe a o parametro correto para passar a url correspondente			
		$data3['atendimentos'] = $this->$url;
		
		$this->load->view('html_header_view', $data);
		$this->load->view('cabecalho_view', $data2);
		$this->load->view('content/contato_view', $data3);
		$this->load->view('rodape_view');
		$this->load->view('html_footer_view');
		
	}
	
	public function enviaEmail(){		
		$this->load->helper('mailito');
		
		$nome = $this->input->post('name');
		$email = $this->input->post('email');			
		$telefone = $this->input->post('telefone');
		$message = $this->input->post('message');
		$assunto = "Contato via site [" . base_url() . "]";
		$cc = array($this->session->userdata('email'));
		
		$send = enviar_email($nome, $email, $telefone, $message, base_url(), $cc);
		if($send == true){
			$data['email_enviado'] = "E-mail enviado com sucesso. Aguarde contato.";
			//$data['email_enviado'] = $this->email->print_debugger();
		}else{
			$data['email_enviado'] = "Erro ao enviar o e-mail. Por favor envia um email para viverepatriani@viverepatriani.com.br";
			//$data['email_enviado'] = $this->email->print_debugger();
		}
		
		// Configura a <head> e carrega as views
		$data['title'] = "Contato";
		$data['meta'] = array(
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'description', 'content' => 'CONTATO - VIVERE'),
			array('name' => 'keywords', 'content' => 'vivere'),
			array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
		);
		$data2['contato'] = "class='active'";
		$data['config'] = array("bg_foto" => "fundo.jpg");
		$this->load->view('html_header_view', $data);
		$this->load->view('cabecalho_view', $data2);
		$this->load->view('content/email_enviado_view');
		$this->load->view('rodape_view');
		$this->load->view('html_footer_view');
		
	}
}
/* Location: ./application/controllers/contato.php */