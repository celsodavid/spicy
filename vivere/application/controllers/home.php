<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
	
	public function __construct(){
		parent::__construct();		
	}
	
	public function index(){
		
		$data['title'] = "Home";
		$data['meta'] = array(
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'description', 'content' => 'Home - VIVERE'),
			array('name' => 'keywords', 'content' => 'vivere'),
			array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
		);		
		$data['config'] = array("bg_foto" => "fundo_teste.jpg");
		$this->load->view('html_header_view', $data);
		$this->load->view('cabecalho_view_no_close');
		$this->load->view('content/home_view');
		$this->load->view('rodape_view');
		$this->load->view('html_footer_view');
		
	}
	public function teste(){
		
		$this->load->view('teste');
		
	}
}
/* Location: ./application/controllers/home.php */