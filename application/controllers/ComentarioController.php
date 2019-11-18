<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Classe responsável pelo CRUD da entidade Favorito
*/
class ComentarioController extends CI_Controller{

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
		$this->load->model('Service\UsuarioService', 'UsuarioService');
	}

	public function comentar(){
		$infos['descricao'] = trim($this->input->post('descricaoComentario'),true);
		$infos['titulo'] = trim($this->input->post('tituloComentario'),true);
		$infos['certificadoAprovacao'] = trim($this->input->post('certificadoAprovacao'),true);
		if(null !== $this->session->userdata('idUsuario')){
		$Usuario = $this->UsuarioService->find($this->session->userdata('idUsuario'), $this->em);
		$infos['Usuario'] = $Usuario;
		$EPI = $this->EPIService->findBy(array('CertificadoAprovacao' => $infos['certificadoAprovacao']), $this->em);
		$infos['EPI'] = $EPI[0];
		$infos['dataInclusao'] = null;
		unset($infos['certificadoAprovacao']);
		$Comentario = $this->ComentarioService->insert($infos, $this->em);
				$retorno = array(
            		'msg' => TRUE,
        		);
		} else{
			$retorno = array(
            	'msg' => FALSE,
        		);
			}
		echo json_encode($retorno);
	}
}