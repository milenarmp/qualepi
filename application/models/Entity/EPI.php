<?php
namespace Entity;
//defined('BASEPATH') OR exit('No direct script access allowed');
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity @ORM\Table(name="epi")
**/
class EPI {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer", name="id_epi")
	* @ORM\GeneratedValue
	*/
	private $id;
	/**
	* @ORM\Column(type="", name="")
	*/
	private $CertificadoAprovacao;
	/**
	* @ORM\Column(type="boolean", name="excluido_epis")
	**/
	private $eExcluido;

	public function getId(){
		return $this->id;
	}

	public function getCertificadoAprovacao(){
		return $this->CertificadoAprovacao;
	}

	public function setCertificadoAprovacao($CertificadoAprovacao){
		$this->CertificadoAprovacao = $CertificadoAprovacao;
	}

	public function getEExcluido(){
		return $this->eExcluido;
	}

	public function setEExcluido($eExcluido){
		$this->eExcluido = $eExcluido;
	}
}