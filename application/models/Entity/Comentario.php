<?php
namespace Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity @ORM\Table(name="comentario")
* @ORM\Entity(repositoryClass="Repository\ComentarioRepository")
**/
class Comentario {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer", name="id_comentario")
	* @ORM\GeneratedValue
	*/
	private $id;
	/**
	* @ORM\Column(type="string", length=255, name="titulo_comentario")
	*/
	private $titulo;
	/**
	* @ORM\Column(type="string", length=255, name="descricao_comentario")
	*/
	private $descricao;
	/**
	* @ORM\Column(type="date", name="data_inclusao_comentario", nullable=true)
	**/
	private $dataInclusao;
    /**
     * @ORM\ManyToOne(targetEntity="EPI", inversedBy="id_comentario")
     * @ORM\JoinColumn(nullable=false, name="id_epi", referencedColumnName="id_epi")
     */
	private $EPI;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="id_comentario")
     * @ORM\JoinColumn(nullable=false, name="id_usuario", referencedColumnName="id_usuario")
     */
    private $Usuario;

    /**
    * Getters e Setters
    */
	public function getId(){
		return $this->id;
	}

	public function getTitulo(){
		return $this->titulo;
	}

	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}

	public function getUsuario(){
		return $this->Usuario;
	}

	public function setUsuario($Usuario){
		$this->Usuario = $Usuario;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getDataInclusao(){
		return $this->dataInclusao;
	}

	public function setDataInclusao($dataInclusao){
		$this->dataInclusao = $dataInclusao;
	}

	public function setEPI($EPI){
		$this->EPI = $EPI;
	}

	public function getEPI(){
		return $this->EPI;
	}
}