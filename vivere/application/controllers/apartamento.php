<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Apartamento extends CI_Controller{
	
	public function __construct(){
		parent::__construct();		
	}
	
	public function index(){
		
		$data['title'] = "Seu Apartamento";
		$data['meta'] = array(
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'description', 'content' => 'Seu Apartamento - VIVERE'),
			array('name' => 'keywords', 'content' => 'vivere'),
			array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
		);
		$data['config'] = array("bg_foto" => "fundo_seuApartamento.jpg");
		
		$data2['ap'] = "class='active'";
		$this->load->view('html_header_view', $data);
		$this->load->view('cabecalho_view', $data2);
		$this->load->view('content/seu_ap_view');
		$this->load->view('rodape_view');
		$this->load->view('html_footer_view');
		
	}
	
	
}
/* Location: ./application/controllers/apartamento.php */