<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Validacao 
{
	private $data;
	private $error = array();
	private $regex_telefone;
	private $regex_email;
	
	public function __construct($parametros=null){
		$this->regex_email = $parametros['email'];
		$this->regex_telefone = $parametros['telefone'];
	}
	
	public function set($name, $value){
		$this->data = array('value' => trim($value), 'name' => $name);
		return $this;
	}
	
	public function required(){
		if(empty($this->data['value'])){
			$this->error[strtolower($this->data['name'])] = sprintf("O %s é obrigatório.", $this->data['name']);			
		}
		return $this;
	}
	
	public function validMail(){
		if(empty($this->data['value']))
		{
			$this->error[strtolower($this->data['name'])] = sprintf("O %s é obrigatório.", $this->data['name']);
		} 
		elseif (!preg_match($this->regex_email, $this->data['value'])) 
		{
			$this->error[strtolower($this->data['name'])] = sprintf("O %s não é um e-mail valido.", $this->data['name']);
		}
		return $this;
	}
	
	public function validPhone(){
		if(empty($this->data['value']))
		{
			$this->error[strtolower($this->data['name'])] = sprintf("O %s é obrigatório.", $this->data['name']);
		}
		else if (!preg_match($this->regex_telefone, $this->data['value'])) 
		{
            $this->error[strtolower($this->data['name'])] = sprintf("O %s no formato (99)9999-9999", $this->data['name']);
        }
        return $this;
	}
	
	public function isValid(){
		if(count($this->error)){
			$this->error['error'] = true;
			return false;
		}else{
			return true;
		}
	}
	
	public function getError($index=null){
		if(empty($index)){
			return $this->error;
		}else{
			return $this->error[$index];
		}
	}
	
	public function getData($index=null){
		if(empty($index)){
			return $this->data;
		}else{
			return $this->data[$index];
		}
	}
	
}