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

	public function pesquisarEPIs(){
		$this->load->view('head', array('tituloPagina' => "Teste"));
		$this->load->view('header');
		$EPI = $this->EPIService->find('1', $this->em);
        $numeroCA = $EPI->getCertificadoAprovacao()->getId();
        $nome = $EPI->getCertificadoAprovacao()->getNome();
        $dataValidade = $EPI->getCertificadoAprovacao()->getDataValidade();
        $aprovadoPara = $EPI->getCertificadoAprovacao()->getAprovadoPara();
		$this->load->view('pesquisarEPIs', array('numeroCA' => $numeroCA, 'nome' => $nome, 'dataValidade' => $dataValidade, 'aprovadoPara' => $aprovadoPara));
		$this->load->view('footer');
	}

}