<?php
defined('BASEPATH') OR exit('No direct script access allowed');
namespace Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity @ORM\Table(name="ca")
**/
class CertificadoAprovacao {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer", name="id_ca")
	* @ORM\GeneratedValue
	*/
	private $id;

	/**
	* @ORM\Column(type="integer", name="numero_ca")
	* @ORM\GeneratedValue
	*/
	private $numero;

	/**
	* @ORM\Column(type="string", length=255, name="membros_protecao_ca")
	**/
	private $membrosProtecao;

	/**
	* @ORM\Column(type="string", length=255, name="restricoes_ca")
	**/
	private $restricoes;

	/**
	* @ORM\Column(type="date", name="data_validade_ca")
	**/
	private $dataValidade;

	/**
	* @ORM\Column(type="string", length=255, name="observacoes_ca")
	**/
	private $observacoes;

	/**
	* @ORM\Column(type="string", length=255, name="agentes_protecao_ca")
	**/
	private $agentesProtecao;

	/**
	* @ORM\Column(type="string", length=255, name="fabricante_ca")
	**/
	private $fabricante;	

	/**
	* @ORM\Column(type="boolean", name="excluido_ca")
	**/
	private $eExcluido;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}

	public function getId(){
		return $this->id;
	}

	public function getMembrosProtecao(){
		return $this->membrosProtecao;
	}

	public function setMembrosProtecao($membrosProtecao){
		$this->membrosProtecao = $membrosProtecao;
	}

	public function getRestricoes(){
		return $this->restricoes;
	}

	public function setRestricoes($restricoes){
		$this->restricoes = $restricoes;
	}

	public function getDataValidade(){
		return $this->dataValidade;
	}

	public function setDataValidade($dataValidade){
		$this->dataValidade = $dataValidade;
	}

	public function getObservacoes(){
		return $this->observacoes;
	}

	public function setObservacoes($observacoes){
		$this->observacoes = $observacoes;
	}

	public function getAgentesProtecao(){
		return $this->agentesProtecao;
	}

	public function setAgentesProtecao($agentesProtecao){
		$this->agentesProtecao = $agentesProtecao;
	}

	public function getFabricante(){
		return $this->fabricante;
	}

	public function setFabricante($fabricante){
		$this->fabricante = $fabricante;
	}	

	public function getEExcluido(){
		return $this->eExcluido;
	}

	public function setEExcluido($eExcluido){
		$this->eExcluido = $eExcluido;
	}	
}
?>