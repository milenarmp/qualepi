<?php
namespace Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity @ORM\Table(name="usuario")
**/
class Usuario {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer", name="id_usuario")
	* @ORM\GeneratedValue
	*/
	private $id;
	/**
	* @ORM\Column(type="string", length=255, name="nome_usuario")
	*/
	private $nome;
	/**
	* @ORM\Column(type="string", length=255, name="login_usuario")
	*/
	private $login;
	/**
	* @ORM\Column(type="string", length=255, name="senha_usuario")
	*/
	private $senha;
	/**
	* @ORM\Column(type="string", length=255, name="email_usuario")
	*/
	private $email;
	/**
	* @ORM\Column(type="boolean", name="excluido_usuario")
	**/
	private $eExcluido;
	/**
    * Um usuário possuí diversos comentários.
    * @ORM\OneToMany(targetEntity="Comentario", mappedBy="usuario")
    */
	private $Comentario;
	/**
    * Um usuário possuí diversos favoritos.
    * @ORM\OneToMany(targetEntity="Favorito", mappedBy="usuario")
    */
	private $Favorito;

	public function getId(){
		return $this->id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getLogin(){
		return $this->nome;
	}

	public function setLogin($login){
		$this->login = $login;
	}

	public function getSenha(){
		return $this->nome;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getEExcluido(){
		return $this->eExcluido;
	}

	public function setEExcluido($eExcluido){
		$this->eExcluido = $eExcluido;
	}
}