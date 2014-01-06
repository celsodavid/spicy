<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Diferenciais extends CI_Controller{
	
	public function __construct(){
		parent::__construct();		
	}
	
	public function index(){
		redirect(base_url() . 'diferenciais-patriani');
	}
	
	public function patriani(){
		
		$data['title'] = "Diferenciais Patriani";
		$data['meta'] = array(
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'description', 'content' => 'Diferenciais - VIVERE'),
			array('name' => 'keywords', 'content' => 'vivere'),
			array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
		);
		$data['config'] = array("bg_foto" => "fundo.jpg");
		$data2['dif'] = "class='active'";
		
		$this->load->view('html_header_view', $data);
		$this->load->view('cabecalho_view', $data2);
		$this->load->view('content/diferenciais_view');		
		$this->load->view('rodape_view');
		$this->load->view('html_footer_view');
		
	}
	
	
}
/* Location: ./application/controllers/diferenciais.php */