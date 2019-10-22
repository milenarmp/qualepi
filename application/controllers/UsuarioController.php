<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Classe responsável pelo CRUD da entidade Usuario
*/
class UsuarioController extends CI_Controller{

	private $em;
	/**
 	* Método construtor da classe
	*/
	public function __construct(){
		parent::__construct();
		$this->load->library('doctrine');
		$this->load->library('session');
		$this->em = $this->doctrine->em;
		$this->load->model('Service\UsuarioService', 'UsuarioService');
	}

	/**
 	* Método Cadastro da classe, renderiza a visão de cadastro
	*/
	public function cadastro(){
		$this->load->view('head', array('tituloPagina' => "Cadastro"));
		$this->load->view('header');
		$this->load->view('cadastro');
		$this->load->view('footer');
	}

	/**
 	* Cadastra um novo usuário na base de dados via POST
 	* @return array Json
	*/
	public function cadastrar(){
		$dadosUsuario = json_decode($_POST['dados'],true);
		$dados['nome'] = $dadosUsuario[0]['value'];
		$dados['nomeUsuario'] = $dadosUsuario[1]['value'];
		$dados['email'] = $dadosUsuario[2]['value'];
		$dados['senha'] = $dadosUsuario[4]['value'];
		$usuario = $this->UsuarioService->insert($dados, $this->em);

		if(is_object($usuario)){
            return true;
		}else{
            return false;
		}
	}

	/**
 	* Método Login da classe, renderiza a visão de login
	*/
	public function login(){
		$this->load->view('head', array('tituloPagina' => "Login"));
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	/**
 	* Verifica as informações cadastrais e autoriza ou não o login
 	* @return array Json
	*/
	public function logar(){
		$dadosLogin = json_decode($_POST['dados'],true);
		$usuario = $this->UsuarioService->findOneBy($dados['nomeUsuario'], $this->$em);
		if(is_object($usuario)){
			if($usuario->getSenha() == $dados['senha']){
			}
		}
	}
}