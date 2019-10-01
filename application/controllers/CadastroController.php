<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroController extends CI_Controller{

	private $em;

	public function __construct(){
		parent::__construct();
		$this->load->library('doctrine');
		$this->em = $this->doctrine->em;
	}

	public function index(){
		$this->load->view('head', array('tituloPagina' => "Cadastro"));
		$this->load->view('header');
		$this->load->view('cadastro');
		$this->load->view('footer');
	}

	public function cadastrar(){

	}
}