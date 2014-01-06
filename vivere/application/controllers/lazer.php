<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Lazer extends CI_Controller{
	
	public function __construct(){
		parent::__construct();		
	}
	
	public function index(){
		redirect(base_url() . 'lazer/terreo');
	}

	public function terreo(){
		
		$data['title'] = "Lazer Térreo";
		$data['meta'] = array(
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'description', 'content' => 'Lazer Térreo - VIVERE'),
			array('name' => 'keywords', 'content' => 'vivere'),
			array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
		);
		$data['config'] = array("bg_foto" => "fundo_lazerTerreo.jpg");
		$data2['terreo'] = "class='active'";
		
		$this->load->view('html_header_view', $data);
		$this->load->view('cabecalho_view', $data2);
		$this->load->view('content/lazer_terreo_view');
		$this->load->view('rodape_view');
		$this->load->view('html_footer_view');
		
	}
	
	public function cobertura(){
		
		$data['title'] = "Lazer Cobertura";
		$data['meta'] = array(
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'description', 'content' => 'Lazer Cobertura - VIVERE'),
			array('name' => 'keywords', 'content' => 'vivere'),
			array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
		);
		$data['config'] = array("bg_foto" => "fundo_lazerCobertura.jpg");
		
		
		$data2['cobertura'] = "class='active'";
		
		$this->load->view('html_header_view', $data);
		$this->load->view('cabecalho_view', $data2);
		$this->load->view('content/lazer_cobertura_view');
		$this->load->view('rodape_view');
		$this->load->view('html_footer_view');
		
	}
	
}
/* Location: ./application/controllers/lazer.php */