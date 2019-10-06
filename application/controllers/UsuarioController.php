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
		$this->em = $this->doctrine->em;
		$this->load->model('Service\UsuarioService', 'UsuarioService');
	}

	/**
 	* Método index da classe, renderiza a visão
	*/
	public function index(){
		$this->load->view('head', array('tituloPagina' => "Cadastro"));
		$this->load->view('header');
		$this->load->view('cadastro');
		$this->load->view('footer');
	}

	/**
 	* Cadastra um novo usuário na base de dados
 	* @return array Json
 	* @param  $dados Array contendo as informações cadastrais
	*/
	public function cadastrar(){
		$dadosUsuario = json_decode($_POST['dados'],true);
		$dados['nome'] = $dadosUsuario[0]['value'];
		$dados['nomeUsuario'] = $dadosUsuario[1]['value'];
		$dados['email'] = $dadosUsuario[2]['value'];
		$dados['senha'] = $dadosUsuario[4]['value'];
		$usuario = $this->UsuarioService->insert($dados, $this->em);

		if(is_object($usuario)){
			$retorno = array(
                'msg' => 'Sucesso! Usuário cadastrado no sistema.'
            );
            echo json_encode($retorno);
		}else{
			$retorno = array(
                'msg' => 'Erro! Usuário não cadastrado no sistema.'
            );
            echo json_encode($retorno);
		}
	}
}