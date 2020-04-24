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
		$this->load->model('Service\ComentarioService', 'ComentarioService');
	}
	/**
 	* Método index da classe, renderiza a visão
	*/
	public function index(){
		$this->load->view('head', array('tituloPagina' => "Início"));
		$logado = $this->session->userdata('logado');
		$nomeUsuario = $this->session->userdata('nomeUsuario');
		$this->load->view('header', array('logado' => $logado, 'nomeUsuario' => $nomeUsuario));
        $this->load->view('inicio');
		$this->load->view('footer');
	}

	/**
 	* Atualiza a base de dados
 	* @return $retorno Array Json
	*/
 	public function atualizarEPIs(){
 		if($this->userdata('nomeUsuario' == 'admin')){
 			$contador = $this->EPIService->atualizarEPI($this->em);
        	$retorno = array(
            'registros' => $contador,
            'msg' => 'Sucesso! Quantidade de EPIs cadastrados: '
        	);
        	header('Content-type: application/json');
        	echo json_encode($retorno);
 		}

 	}

	/**
 	* Carrega view específica para visulizar dados do EPI
 	* @param  $CA string contendo id do CA
	*/
    public function visualizarEPI($CA){
    	$CA = $this->CertificadoAprovacaoService->find($CA, $this->em);
    	$EPI = $this->EPIService->findBy(array('CertificadoAprovacao' => $CA->getId()), $this->em);
    	$Comentarios = $this->ComentarioService->retornoComentarios($EPI, $this->em);
    	$retorno = array(
    		'logado' => $this->session->userdata('logado'),
    		'nomeEPI' => $CA->getNome(),
    		'situacao' => $CA->getSituacao(),
    		'caEPI' => $CA->getId(),
    		'aprovadoPara' => mb_strtolower($CA->getAprovadoPara()),
    		'observacoes' => $CA->getObservacoes(),
    		'dataValidade' => $this->dataParaString($CA->getDataValidade()),
    		'fabricante' => $CA->getRazaoSocial(),
    		'natureza' => $CA->getNatureza(),
    		'restritoPara' => mb_strtolower($CA->getRestritoPara()),
    		'descricao' => mb_strtolower($CA->getDescricao()),
    		'comentarios' => $Comentarios
    	);
    	$this->load->view('head', array('tituloPagina' => "Visualizar EPI"));
    	$logado = $this->session->userdata('logado');
		$nomeUsuario = $this->session->userdata('nomeUsuario');
		$this->load->view('header', array('logado' => $logado, 'nomeUsuario' => $nomeUsuario));
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
		$retornoEPI = $this->EPIService->retornoEPIsA($EPIs, $this->em);
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

	/**
 	* Carrega a página sobrenos
	*/
	public function sobreNos(){
    	$this->load->view('head', array('tituloPagina' => "Sobre nós"));
    	$logado = $this->session->userdata('logado');
		$nomeUsuario = $this->session->userdata('nomeUsuario');
		$this->load->view('header', array('logado' => $logado, 'nomeUsuario' => $nomeUsuario));
    	$this->load->view('sobrenos');
    	$this->load->view('footer');
	}

		/**
 	* Carrega a página contato
	*/
	public function contato(){
    	$this->load->view('head', array('tituloPagina' => "Contato"));
    	$logado = $this->session->userdata('logado');
		$nomeUsuario = $this->session->userdata('nomeUsuario');
		$this->load->view('header', array('logado' => $logado, 'nomeUsuario' => $nomeUsuario));
    	$this->load->view('contato');
    	$this->load->view('footer');
	}
}
