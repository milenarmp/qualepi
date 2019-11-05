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

	public function index(){
		if($this->session->userdata('logado')){
			$criterio = array(
				'Usuario' => $this->UsuarioService->find($this->session->userdata('idUsuario'), $this->em)
 			);
			$favoritos = $this->FavoritoService->findBy($criterio, $this->em);
			echo count($favoritos);
		}else{
		$mensagem = array(
			'titulo' => 'Ooops! Parece que você não está logado...',
			'observacoes' => 'Algumas funcionalidades do sistema são destinadas para usuários autenticados. Por favor, faça seu login ou cadastre-se!'
		);
		$this->load->view('head', array('tituloPagina' => "Erro!"));
		$this->load->view('header');
        $this->load->view('mensagem', array('mensagem' => $mensagem));
		$this->load->view('footer');
		}
	}

	public function favoritar($CA){
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
		$this->FavoritoService->insert($dadosFavorito, $this->em);
	}
}