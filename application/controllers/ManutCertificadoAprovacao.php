<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once 'application/models/Service/CertificadoAprovacaoService.php';
include_once 'application/libraries/Doctrine.php';
class ManutCertificadoAprovacao extends CI_Controller{


	public function __construct(){
		parent::__construct();
		// $this->load->library();
	}

	public function index(){

	}

	public function fetchAll(){
		$Doctrine = new Doctrine();
		$em = $Doctrine->getEntityManager();
		$certificadoAprovacao = new CertificadoAprovacaoService();
		$certificadoAprovacao->fetchAll($em);		
	}

}