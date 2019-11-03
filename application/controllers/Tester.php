<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Classe responsável pelo CRUD da entidade Usuario
*/
class Tester extends CI_Controller{

	private $em;
	/**
 	* Método construtor da classe
	*/
	public function __construct(){
		parent::__construct();
		$this->load->library('doctrine');
		$this->em = $this->doctrine->em;
		$this->load->model('Service\UsuarioService', 'UsuarioService');
		$this->load->model('Service\EPIService', 'EPIService');
	}

	public function index(){
		$this->load->view('head', array('tituloPagina' => "Tester"));
		$this->load->view('header');
		$this->load->view('visualizarEPI', array('nomeEPI' => "Protetor auditivo", 'caEPI' => '5.745', 'situacao' => 'Válido'));
		$this->load->view('footer');
	}


}