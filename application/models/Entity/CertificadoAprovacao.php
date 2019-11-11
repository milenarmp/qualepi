<?php
namespace Entity;

use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Table(name="ca")
* @ORM\Entity(repositoryClass="Repository\CertificadoAprovacaoRepository")
**/
class CertificadoAprovacao {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer", name="id_ca")
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
	* @ORM\Column(type="string",length=1000, name="referencia_ca")
	*/
	private $referencia;
	/**
	* @ORM\Column(type="integer", name="nr_laudo_ca")
	*/
	private $nrLaudo;
	/**
	* @ORM\Column(type="string", length=1000, name="norma_ca")
	**/
	private $norma;
	/**
	* @ORM\Column(type="string", length=1000, name="razao_social_ca")
	**/
	private $razaoSocial;
	/**
	* @ORM\Column(type="string", length=1000, name="razao_social_laboratorio_ca")
	**/
	private $razaoSocialLaboratorio;
	/**
	* @ORM\Column(type="string", length=1000, name="natureza_ca")
	**/
	private $natureza;
	/**
	* @ORM\Column(type="string", length=1000, name="nome_ca")
	**/
	private $nome;
	/**
	* @ORM\Column(type="string", length=1000, name="cor_ca", nullable=true)
	**/
	private $cor;
	/**
	* @ORM\Column(type="string", length=1000, name="restrito_para_ca")
	**/
	private $restritoPara;
	/**
	* @ORM\Column(type="date", name="data_validade_ca")
	**/
	private $dataValidade;
	/**
	* @ORM\Column(type="string", length=1000, name="descricao_ca")
	**/
	private $descricao;
	/**
	* @ORM\Column(type="string", length=1000, name="aprovado_para_ca")
	**/
	private $aprovadoPara;
	/**
	* @ORM\Column(type="string", length=1000, name="marca_ca")
	**/
	private $marca;
	/**
	* @ORM\Column(type="string", length=1000, name="situacao_ca")
	**/
	private $situacao;
	/**
	* @ORM\Column(type="string", length=1000, name="observacoes_ca", nullable=true)
	**/
	private $observacoes;
	/**
	* @ORM\Column(type="boolean", name="excluido_ca", nullable=true)
	**/
	private $eExcluido;

    /**
    * Getters e Setters
    */
	function getId() {
            return $this->id;
        }

    function getNumero() {
            return $this->numero;
        }

    function getNumeroProcesso() {
            return $this->numeroProcesso;
        }

    function getCnpj() {
            return $this->cnpj;
        }

    function getCnpjLaboratorio() {
            return $this->cnpjLaboratorio;
        }

    function getReferencia() {
            return $this->referencia;
        }

    function getNrLaudo() {
            return $this->nrLaudo;
        }

    function getNorma() {
            return $this->norma;
        }

    function getRazaoSocial() {
            return $this->razaoSocial;
        }

    function getRazaoSocialLaboratorio() {
            return $this->razaoSocialLaboratorio;
        }

    function getNatureza() {
            return $this->natureza;
        }

    function getNome() {
            return $this->nome;
        }

    function getCor() {
            return $this->cor;
        }

    function getRestritoPara() {
            return $this->restritoPara;
        }

    function getDataValidade() {
            return $this->dataValidade;
        }

    function getDescricao() {
            return $this->descricao;
        }

    function getAprovadoPara() {
            return $this->aprovadoPara;
        }

    function getMarca() {
            return $this->marca;
        }

    function getSituacao() {
            return $this->situacao;
        }

    function getObservacoes() {
            return $this->observacoes;
        }

    function getEExcluido() {
            return $this->eExcluido;
        }

    function setId($id) {
            $this->id = $id;
        }

    function setNumero($numero) {
            $this->numero = $numero;
        }

    function setNumeroProcesso($numeroProcesso) {
            $this->numeroProcesso = $numeroProcesso;
        }

    function setCnpj($cnpj) {
            $this->cnpj = $cnpj;
        }

    function setCnpjLaboratorio($cnpjLaboratorio) {
            $this->cnpjLaboratorio = $cnpjLaboratorio;
        }

    function setReferencia($referencia) {
            $this->referencia = $referencia;
        }

    function setNrLaudo($nrLaudo) {
            $this->nrLaudo = $nrLaudo;
        }

    function setNorma($norma) {
            $this->norma = $norma;
        }

    function setRazaoSocial($razaoSocial) {
            $this->razaoSocial = $razaoSocial;
        }

    function setRazaoSocialLaboratorio($razaoSocialLaboratorio) {
            $this->razaoSocialLaboratorio = $razaoSocialLaboratorio;
        }

    function setNatureza($natureza) {
            $this->natureza = $natureza;
        }

    function setNome($nome) {
            $this->nome = $nome;
        }

    function setCor($cor) {
            $this->cor = $cor;
        }

    function setRestritoPara($restritoPara) {
            $this->restritoPara = $restritoPara;
        }

    function setDataValidade($dataValidade) {
            $this->dataValidade = $dataValidade;
        }

    function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

    function setAprovadoPara($aprovadoPara) {
            $this->aprovadoPara = $aprovadoPara;
        }

    function setMarca($marca) {
            $this->marca = $marca;
        }

    function setSituacao($situacao) {
            $this->situacao = $situacao;
        }

    function setObservacoes($observacoes) {
            $this->observacoes = $observacoes;
        }

    function setEExcluido($eExcluido) {
            $this->eExcluido = $eExcluido;
        }
}