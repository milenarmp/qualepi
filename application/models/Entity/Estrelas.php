<?php
namespace Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity @ORM\Table(name="estrela")
* @ORM\Entity(repositoryClass="Repository\EstrelasRepository")
**/
class Estrelas {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer", name="id_estrela")
	* @ORM\GeneratedValue
	*/
	private $id;

	/**
	* @ORM\Column(type="integer", name="qtde_estrela")
	*/
	private $qtde;

    /**
     * Um comentário possuí um usuário.
     * @ORM\OneToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id_usuario")
     */
    private $Usuario;

    /**
     * @ORM\ManyToOne(targetEntity="EPI", inversedBy="id_estrela")
     * @ORM\JoinColumn(nullable=false, name="id_epi", referencedColumnName="id_epi")
     */
	private $EPI;

    /**
    * Getters e Setters
    */
	public function getId(){
		return $this->id;
	}
}