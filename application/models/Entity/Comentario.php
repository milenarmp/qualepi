<?php
namespace Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity @ORM\Table(name="comentario")
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
	* @ORM\Column(type="boolean", name="excluido_comentario")
	**/
	private $eExcluido;
	/**
    * @ORM\ManyToOne(targetEntity="EPI")
    * @ORM\JoinColumn(name="epi_id", referencedColumnName="id")
    */
	private $EPI;
    /**
     * Diversos comentários possuem um usuário.
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="Comentario")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $Usuario;

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