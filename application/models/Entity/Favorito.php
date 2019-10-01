<?php
namespace Entity;
//defined('BASEPATH') OR exit('No direct script access allowed');
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity @ORM\Table(name="favorito")
**/
class Favorito {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer", name="id_favorito")
	* @ORM\GeneratedValue
	*/
	private $id;
	/**
    * @ORM\ManyToOne(targetEntity="EPI")
    * @ORM\JoinColumn(name="epi_id", referencedColumnName="id")
    */
	private $EPI;
    /**
     * Diversos favoritos possuem um usuário.
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="Favorito")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $Usuario;

	public function getId(){
		return $this->id;
	}

	public function getEPI(){
		return $this->EPI;
	}

	public function setEPI($EPI){
		$this->EPI = $EPI;
	}
}