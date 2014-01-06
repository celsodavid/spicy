<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Projeto extends CI_Controller{
	
	public function __construct(){
		parent::__construct();		
	}
	
	public function index(){
		
		$data['title'] = "Projeto";
		$data['meta'] = array(
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'description', 'content' => 'Projeto - VIVERE'),
			array('name' => 'keywords', 'content' => 'vivere'),
			array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
		);
			$data['config'] = array("bg_foto" => "fundo.jpg");
		$data2['projeto'] = "class='active'";
		
		$this->load->view('html_header_view', $data);
		$this->load->view('cabecalho_view', $data2);
		$this->load->view('content/projeto_view');
		$this->load->view('rodape_view');
		$this->load->view('html_footer_view');
		
	}
	
	
}
/* Location: ./application/controllers/projeto.php */