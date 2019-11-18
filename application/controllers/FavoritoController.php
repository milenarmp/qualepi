<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Classe responsável pelo CRUD da entidade Favorito
*/
class FavoritoController extends CI_Controller{

	private $em;
	/**
 	* Método construtor da classe
	*/
	public function __construct(){
		parent::__construct();
		$this->load->library('doctrine');
		$this->load->library('session');
		$this->em = $this->doctrine->em;
		$this->load->model('Service\UsuarioService', 'UsuarioService');
		$this->load->model('Service\CertificadoAprovacaoService', 'CertificadoAprovacaoService');
		$this->load->model('Service\FavoritoService', 'FavoritoService');
		$this->load->model('Service\EPIService', 'EPIService');
	}

	/**
 	* Método index da classe
	*/
	public function index(){
		if($this->session->userdata('logado')){
			$criterio = array(
				'Usuario' => $this->UsuarioService->find($this->session->userdata('idUsuario'), $this->em)
 			);
			$favoritos = $this->FavoritoService->findBy($criterio, $this->em);
			$EPIs = [];
			foreach ($favoritos as $favorito){
				$EPIs[] = $this->EPIService->find($favorito->getEPI(), $this->em);
			}
			$retornoEPI = $this->EPIService->retornoEPIsB($EPIs, $this->em);
    		$this->load->view('head', array('tituloPagina' => "Visualizar EPI"));
    		$logado = $this->session->userdata('logado');
		$nomeUsuario = $this->session->userdata('nomeUsuario');
		$this->load->view('header', array('logado' => $logado, 'nomeUsuario' => $nomeUsuario));
			$this->load->view('favoritos', array('EPIs' => $retornoEPI));
			$this->load->view('footer');
		}else{
		$mensagem = array(
			'titulo' => 'Ooops! Parece que você não está logado...',
			'observacoes' => 'Algumas funcionalidades do sistema são destinadas para usuários autenticados. Por favor, faça seu login ou cadastre-se!'
		);
		$this->load->view('head', array('tituloPagina' => "Erro!"));
		$logado = $this->session->userdata('logado');
		$nomeUsuario = $this->session->userdata('nomeUsuario');
		$this->load->view('header', array('logado' => $logado, 'nomeUsuario' => $nomeUsuario));
        $this->load->view('mensagem', array('mensagem' => $mensagem));
		$this->load->view('footer');
		}
	}

	/**
 	* Adiciona um registro a tabela de Favorito
	*/
	public function favoritar(){
		$CA = trim($this->input->post('certificadoAprovacao'),true);
		$Usuario = $this->UsuarioService->find($this->session->userdata('idUsuario'), $this->em);
		$CertificadoAprovacao = $this->CertificadoAprovacaoService->find($CA, $this->em);
		$criterio = array(
			'CertificadoAprovacao' => $CertificadoAprovacao
		);
		$EPI = $this->EPIService->findBy($criterio, $this->em);
		$dadosFavorito = array(
			'Usuario' => $Usuario,
			'EPI' => $EPI[0]
		);
		$Favorito = $this->FavoritoService->insert($dadosFavorito, $this->em);
		if(is_object($Favorito)){
			$retorno = array(
            	'msg' => TRUE,
        		);
		}else{
			$retorno = array(
            	'msg' => FALSE,
        		);
		}
		echo json_encode($retorno);
	}

	/**
 	* Remove um registro a tabela de Favorito
 	* @param  $CA string contendo o id do CA
	*/
	public function remover($CA){
		$Usuario = $this->UsuarioService->find($this->session->userdata('idUsuario'), $this->em);
		$CertificadoAprovacao = $this->CertificadoAprovacaoService->find($CA, $this->em);
		$criterio = array(
			'CertificadoAprovacao' => $CertificadoAprovacao
		);
		$EPI = $this->EPIService->findBy($criterio, $this->em);

		$criterioFavorito = array(
			'Usuario' => $Usuario,
			'EPI' => $EPI[0]
		);
		$Favorito = $this->FavoritoService->findBy($criterioFavorito, $this->em);
		$this->FavoritoService->delete($Favorito[0]->getId(), $this->em);
		header("Location: /qualepi/index.php/FavoritoController");
	}
}