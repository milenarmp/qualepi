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
	public function cadastrar($dados){

	}
}