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
	* @ORM\Column(type="string", length=20, name="cnpj_ca")
	*/
	private $cnpj;
	/**
	* @ORM\Column(type="string", length=20, name="cnpj_laboratorio_ca")
	*/
	private $cnpjLaboratorio;
	/**
	* @ORM\Column(type="string",length=255, name="referencia_ca")
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

	public function getNumeroProcesso(){
		return $this->numeroProcesso;
	}

	public function setNumeroProcesso($numeroProcesso){
		$this->numeroProcesso = $numeroProcesso;
	}

	public function getCnpj(){
		return $this->cnpj;
	}

	public function setCnpj($cnpj){
		$this->cnpj = $cnpj;
	}

	public function getCnpjLaboratorio(){
		return $this->cnpjLaboratorio;
	}

	public function setCnpjLaboratorio($cnpjLaboratorio){
		$this->cnpjLaboratorio = $cnpjLaboratorio;
	}

	public function getReferencia(){
		return $this->referencia;
	}

	public function setReferencia($referencia){
		$this->referencia = $referencia;
	}

	public function getNrLaudo(){
		return $this->nrLaudo;
	}

	public function setNrLaudo($nrLaudo){
		$this->nrLaudo = $nrLaudo;
	}

	public function getNorma(){
		return $this->norma;
	}

	public function setNorma($norma){
		$this->norma = $norma;
	}

	public function getRazaoSocial(){
		return $this->razaoSocial;
	}

	public function setRazaoSocial($razaoSocial){
		$this->razaoSocial = $razaoSocial;
	}

	public function getRazaoSocialLaboratorio(){
		return $this->razaoSocialLaboratorio;
	}

	public function setRazaoSocialLaboratorio($razaoSocialLaboratorio){
		$this->razaoSocialLaboratorio = $razaoSociallaboratorio;
	}

	public function getNatureza(){
		return $this->natureza;
	}

	public function setNatureza($natureza){
		$this->natureza = $natureza;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getCor(){
		return $this->cor;
	}

	public function setCor($cor){
		$this->cor = $cor;
	}

	public function getMembrosProtecao(){
		return $this->membrosProtecao;
	}

	public function setMembrosProtecao($membrosProtecao){
		$this->membrosProtecao = $membrosProtecao;
	}

	public function getRestritoPara(){
		return $this->restritoPara;
	}

	public function setRestritoPara($restritoPara){
		$this->restritoPara = $restritoPara;
	}

	public function getDataValidade(){
		return $this->dataValidade;
	}

	public function setDataValidade($dataValidade){
		$this->dataValidade = $dataValidade;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getAprovadoPara(){
		return $this->aprovadoPara;
	}

	public function setAprovadoPara($aprovadoPara){
		$this->aprovadoPara = $aprovadoPara;
	}

	public function getMarca(){
		return $this->marca;
	}

	public function setMarca($marca){
		$this->marca = $marca;
	}

	public function getSituacao(){
		return $this->situacao;
	}

	public function setSituacao($situacao){
		$this->situacao = $situacao;
	}

	public function getObservacoes(){
		return $this->observacoes;
	}

	public function setObservacoes($observacoes){
		$this->observacoes = $observacoes;
	}

	public function getEExcluido(){
		return $this->eExcluido;
	}

	public function setEExcluido($eExcluido){
		$this->eExcluido = $eExcluido;
	}
}
?>