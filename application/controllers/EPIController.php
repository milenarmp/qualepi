<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Classe responsável pelo CRUD da entidade EPI
*/
class EPIController extends CI_Controller{

	private $em;
	/**
 	* Método construtor da classe
	*/
	public function __construct(){
		parent::__construct();
		$this->load->library('doctrine');
		$this->em = $this->doctrine->em;
		$this->load->model('Service\CertificadoAprovacaoService', 'CertificadoAprovacaoService');
	}
	/**
 	* Método index da classe, renderiza a visão
	*/
	public function index(){
		$this->load->view('head', array('tituloPagina' => "Início"));
		$this->load->view('header');
		$this->load->view('footer');
	}

	/**
 	* Atualiza a base de dados
 	* @return array Json
	*/
 	public function atualizarEPIs(){
 				$arq = fopen("C:\\xampp\\htdocs\\qualepi\\application\\controllers\\tgg_export_caepi.txt", "r");

		while($linha = fgets($arq)){
			$registro = explode("|", $linha);
			$data = "$registro[1]";
			$dataFormatada = implode("-", array_reverse(explode("/", $data)));
			$dados = array('numero_ca' => $registro[0],
				'data_validade_ca' => $dataFormatada,
				'situacao_ca' => $registro[2],
				'numero_processo_ca' => $registro[3],
				'cnpj_ca' => $registro[4],
				'razao_social_ca' => $registro[5],
				'natureza_ca' => $registro[6],
				'nome_ca' => $registro[7],
				'descricao_ca' => $registro[8],
				'marca_ca' => $registro[9],
				'referencia_ca' => $registro[10],
				'cor_ca' => $registro[11],
				'aprovado_para_ca' => $registro[12],
				'restrito_para_ca' => $registro[13],
				'observacoes_ca' => $registro[14],
				'cnpj_laboratorio_ca' => $registro[15],
				'razao_social_laboratorio_ca' => $registro[16],
				'nr_laudo_ca' => $registro[17],
				'norma_ca' => $registro[18]);
			if($registro[2] != 'VENCIDO'){
				$this->CertificadoAprovacaoService->insert($dados);
			}
		}
		fclose($arq);
 	}
}