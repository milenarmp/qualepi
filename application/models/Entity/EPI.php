<?php
namespace Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity @ORM\Table(name="epi")
* @ORM\Entity(repositoryClass="Repository\EPIRepository")
**/
class EPI {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer", name="id_epi")
	* @ORM\GeneratedValue
	*/
	private $id;
    /**
    * Um EPI possui um CertificadoAprovacao
    * @ORM\OneToOne(targetEntity="CertificadoAprovacao")
    * @ORM\JoinColumn(name="ca_epi", referencedColumnName="id_ca")
    */
	private $CertificadoAprovacao;
	/**
	* @ORM\Column(type="boolean", name="excluido_epi")
	**/
	private $eExcluido;

    /**
    * Getters e Setters
    */
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