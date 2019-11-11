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
		$this->load->library('session');
		$this->load->model('Service\CertificadoAprovacaoService', 'CertificadoAprovacaoService');
		$this->load->model('Service\EPIService', 'EPIService');
	}
	/**
 	* Método index da classe, renderiza a visão
	*/
	public function index(){
		$this->load->view('head', array('tituloPagina' => "Início"));
		$this->load->view('header');
        $this->load->view('manterEPI');
		$this->load->view('footer');
	}

	/**
 	* Atualiza a base de dados
 	* @return $retorno Array Json
	*/
 	public function atualizarEPIs(){
            set_time_limit(60 * 60);
            $arq = fopen("C:\\xampp\\htdocs\\qualepi\\application\\controllers\\teste.txt", "r");
            $contador = 0;
		while($linha = fgets($arq)){
			$registro = explode("|", $linha);
			$data = "$registro[1]";
			$data1 = implode("/", array_reverse(explode("/", $data)));
                        $dataFormatada = $this->formataData($data1);
			$dados = array('id_ca' => $registro[0],
                                'numero_ca' => $registro[0],
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
                if(!is_object($this->CertificadoAprovacaoService->find($registro[0], $this->em))){
                        $certificadoAprovacao = $this->CertificadoAprovacaoService->insert($dados, $this->em);
                        $dadosEPI = array('certificadoAprovacao' => $certificadoAprovacao);
                        $this->EPIService->insert($dadosEPI, $this->em);
                        $contador++;
                }
			}
		}
		fclose($arq);
        $retorno = array(
            'registros' => $contador,
            'msg' => 'Sucesso! Quantidade de EPIs cadastrados: '
        );
        header('Content-type: application/json');
        echo json_encode($retorno);
 	}

	/**
 	* Formata data
 	* @param  $data string
 	* @return objeto do tipo date
	*/
    public function formataData($data){
        return date("Y/m/d", strtotime($data));
    }

	/**
 	* Carrega view específica para visulizar dados do EPI
 	* @param  $CA string contendo id do CA
	*/
    public function visualizarEPI($CA){
    	$CA = $this->CertificadoAprovacaoService->find($CA, $this->em);
    	$EPI = $this->EPIService->findBy(array('CertificadoAprovacao' => $CA->getId()), $this->em);
    	$retorno = array(
    		'nomeEPI' => $CA->getNome(),
    		'situacao' => $CA->getSituacao(),
    		'caEPI' => $CA->getId(),
    		'aprovadoPara' => mb_strtolower($CA->getAprovadoPara()),
    		'observacoes' => $CA->getObservacoes(),
    		'dataValidade' => $this->dataParaString($CA->getDataValidade()),
    		'fabricante' => $CA->getRazaoSocial(),
    		'natureza' => $CA->getNatureza(),
    		'restritoPara' => mb_strtolower($CA->getRestritoPara()),
    		'descricao' => mb_strtolower($CA->getDescricao())
    	);
    	$this->load->view('head', array('tituloPagina' => "Visualizar EPI"));
    	$this->load->view('header');
    	$this->load->view('visualizarEPI', array('retorno' => $retorno));
    	$this->load->view('footer');
    }

	/**
 	* Pesquisa o EPI a partir do termo passado via POST
 	* @return  $retorno array json
	*/
    public function pesquisarEPIs(){
    	$pesquisa = trim($this->input->post('pesquisa'),true);

		$EPIs = $this->EPIService->pesquisarEPI($pesquisa, $this->em);
		$retornoEPI = [];
		 foreach($EPIs as $epi){
		 	if(!empty($epi)){
		 	$ca = $this->CertificadoAprovacaoService->find($epi[0]->getCertificadoAprovacao()->getId(), $this->em);
		 	$retornoEPI[] = [
		 		'numeroCA' => $ca->getId(),
		 		'nome' => $ca->getNome(),
		 		'dataValidade' => $this->dataParaString($ca->getDataValidade()),
		 		'aprovadoPara' => mb_strtolower($ca->getAprovadoPara()),
		 		'visualizar' => '<a href="http://localhost/qualepi/index.php/EPIController/visualizarEPI/'.$ca->getId().'" target="_blank">Mais detalhes</a>',
		 	];
		 	}
		 }
		 $retorno = array(
             'EPI' => $retornoEPI
         );
         header('Content-type: application/json');
         echo json_encode($retorno);
	}

	/**
 	* Transforma objeto tipo date em string
 	* @param  $data objeto tipo date
 	* @return strin contendo a data transformada em string
	*/
	public function dataParaString($data){
		return date_format($data, 'd/m/y');
	}
}