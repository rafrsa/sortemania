<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
    public $layout = 'default';
    public $title = '::: Titulo default :::';
    public $css = array('bootstrap.min', 'geral');
    public $js =  array('jquery-2.2.4.min', 'bootstrap.min', 'funcoes');
    
    public function Login()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->layout = '';
        $this->load->view('v_construcao');
        
    }
    
    public function CadastrarUsuario()
    {
        $this->load->view('v_cadusuario');        
    }
    
    public function RetornaAjax()
    {
        $this->layout = '';
        
        echo "ajax...";
        die();
    }
}
