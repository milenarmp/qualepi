<?php
namespace Entity;
//defined('BASEPATH') OR exit('No direct script access allowed');
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
	*/
	private $numero;

	/**
	* @ORM\Column(type="integer", name="numero_processo_ca")
	*/
	private $numeroProcesso;

	/**
	* @ORM\Column(type="integer", name="cnpj_ca")
	*/
	private $cnpj;

	/**
	* @ORM\Column(type="integer", name="cnpj_laboratorio_ca")
	*/
	private $cnpjLaboratorio;

	/**
	* @ORM\Column(type="integer", name="referencia_ca")
	*/
	private $referencia;

	/**
	* @ORM\Column(type="integer", name="nr_laudo_ca")
	*/
	private $nrLaudo;

	/**
	* @ORM\Column(type="string", length=255, name="norma_ca")
	**/
	private $norma;

	/**
	* @ORM\Column(type="string", length=255, name="razao_social_ca")
	**/
	private $razaoSocial;

	/**
	* @ORM\Column(type="string", length=255, name="razao_social_laboratorio_ca")
	**/
	private $razaoSocialLaboratorio;

	/**
	* @ORM\Column(type="string", length=255, name="natureza_ca")
	**/
	private $natureza;

	/**
	* @ORM\Column(type="string", length=255, name="nome_ca")
	**/
	private $nome;

	/**
	* @ORM\Column(type="string", length=255, name="cor_ca", nullable=true)
	**/
	private $cor;

	/**
	* @ORM\Column(type="string", length=255, name="membros_protecao_ca")
	**/
	private $membrosProtecao;

	/**
	* @ORM\Column(type="string", length=255, name="restrito_para_ca")
	**/
	private $restritoPara;

	/**
	* @ORM\Column(type="date", name="data_validade_ca")
	**/
	private $dataValidade;

	/**
	* @ORM\Column(type="string", length=255, name="descricao_ca")
	**/
	private $descricao;

	/**
	* @ORM\Column(type="string", length=255, name="aprovado_para_ca")
	**/
	private $aprovadoPara;

	/**
	* @ORM\Column(type="string", length=255, name="marca_ca")
	**/
	private $marca;

	/**
	* @ORM\Column(type="string", length=255, name="situacao_ca")
	**/
	private $situacao;

	/**
	* @ORM\Column(type="string", length=255, name="observacoes_ca", nullable=true)
	**/
	private $observacoes;

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