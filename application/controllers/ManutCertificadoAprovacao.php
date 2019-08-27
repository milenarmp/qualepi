<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ManutCertificadoAprovacao extends CI_Controller{

	private $em;

	public function __construct(){
		parent::__construct();
		$this->load->library('doctrine');
		$this->em = $this->doctrine->em;
		$this->load->model('Service\CertificadoAprovacaoService', 'CertificadoAprovacaoService');
	}

	public function index(){
		$Teste = $this->CertificadoAprovacaoService->insert(array(
			'numero' => '1',
			'membrosProtecao' => 'braço',
			'restricoes' => 'nenhuma',
			'dataValidade' => null,
			'observacoes' => 'olhos',
			'agenteProtecao' => 'frio',
			'fabricante' => '3M do Brasil',
			'eExcluido' => '0'
		), $this->em);
	}

	public function fetchAll(){
	
	}

}