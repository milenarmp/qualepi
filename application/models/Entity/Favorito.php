<?php
namespace Entity;
//defined('BASEPATH') OR exit('No direct script access allowed');
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity @ORM\Table(name="favorito")
* @ORM\Entity(repositoryClass="Repository\FavoritoRepository")
**/
class Favorito {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer", name="id_favorito")
	* @ORM\GeneratedValue
	*/
	private $id;
    /**
     * @ORM\ManyToOne(targetEntity="EPI", inversedBy="id_favorito")
     * @ORM\JoinColumn(nullable=false, name="id_epi", referencedColumnName="id_epi")
     */
	private $EPI;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="id_favorito")
     * @ORM\JoinColumn(nullable=false, name="id_usuario", referencedColumnName="id_usuario")
     */
    protected $Usuario;

    /**
    * Getters e Setters
    */
	public function getId(){
		return $this->id;
	}

	public function getEPI(){
		return $this->EPI;
	}

	public function setEPI($EPI){
		$this->EPI = $EPI;
	}

	public function getUsuario(){
		return $this->Usuario;
	}

	public function setUsuario($Usuario){
		$this->Usuario = $Usuario;
	}
}