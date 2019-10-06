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
     * Um comentário possuí um usuário.
     * @ORM\OneToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id_usuario")
     */
    private $Usuario;
    /**
     * Um comentário possuí um EPI.
     * @ORM\OneToOne(targetEntity="EPI")
     * @ORM\JoinColumn(name="epi_id", referencedColumnName="id_epi")
     */
	private $EPI;

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