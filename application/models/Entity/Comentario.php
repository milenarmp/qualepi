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
	* @ORM\Column(type="date", name="data_inclusao_comentario")
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
    protected $Usuario;

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

	public function getEExcluido(){
		return $this->eExcluido;
	}

	public function setEExcluido($eExcluido){
		$this->eExcluido = $eExcluido;
	}
}