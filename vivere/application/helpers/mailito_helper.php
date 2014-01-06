<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
// application/helpers/mailito_email.php

function enviar_email($nome, $email, $telefone, $mensagens, $site, $CCopia) {
    $CI = & get_instance();
    
	$mensagens = utf8_decode($mensagens);
    $assunto = "Contato via site [ {$site} ]";
    $mensagem = "<html><head><meta http-equiv='content-type' content='text/html;charset=UTF-8' /></head><body>
    
        Nome:               $nome<br/>
        E-mail:             $email<br/>
        Telefone:           $telefone<br/>
        Mensagem:           $mensagens<br/>
    
    </body></html>";
    $nRemetente = "{$nome}";
    $eRemetente = "{$email}";
    
    $config = array(
        'protocol' => 'smtp',
        'charset' => 'utf8',
        'wordwrap' => TRUE,
        'smtp_host' => 'mail.viverepatriani.com.br',
        'smtp_user' => 'contato@viverepatriani.com.br',
        'smtp_pass' => 'vivere@123',
    	'smtp_port' => 587,
        'smtp_timeout' => 20,
        'mailtype' => 'html'
    );


    $CI->load->library('email', $config);
    
    $CI->email->from($eRemetente, $nRemetente);
    $CI->email->to('vendas@fernandezmera.com.br');    
    $CI->email->cc($CCopia);
    $CI->email->subject($assunto);
    $CI->email->message($mensagem);    


    if ($CI->email->send()) {
        return true;
    } else {
        return $CI->email->print_debugger();
    }
}