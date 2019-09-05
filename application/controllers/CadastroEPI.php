<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroEPI extends CI_Controller{

	private $em;

	public function __construct(){
		parent::__construct();
	}

	public function index(){

		$arq = fopen("C:\\xampp\\htdocs\\qualepi\\application\\controllers\\tgg_export_caepi.txt", "r");

		while($linha = fgets($arq)){
			$registro = array('numero', 'dataValidade', 'situacao', 'numeroProcesso', 'cnpj', 'razaoSocial', 'natureza', 'nome', 'descricao', 'referencia', 'cor', 'aprovadoPara', 'restritoPara', 'cnpjLaboratorio', 'razaoSocialLaboratorio', 'nrLaudo', 'norma');
		}

		fclose($arq);
	}
}