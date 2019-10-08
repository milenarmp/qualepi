<?php
namespace Service;
use Doctrine\ORM\EntityManager;
require_once 'C:\xampp\htdocs\qualepi\bootstrap.php';
require_once(APPPATH . "models/Entity/Usuario.php");
require_once(APPPATH . "models/Repository/UsuarioRepository.php");

class UsuarioService {

	/**Inserção de novo registro no dd
	* @param $data array contendo dados a serem inseridos
	* @param $em entity manager do Doctrine
	* @return $certificadoAprovacao Objeto do tipo CertificadoAprovacao
	*/
	public function insert(array $data, $em){
		$usuario = new \Entity\Usuario;
		$usuario->setNome($data['nome']);
		$usuario->setLogin($data['nomeUsuario']);
		$usuario->setSenha($data['senha']);
		$usuario->setEmail($data['email']);
		$em->persist($usuario);
		$em->flush();
		return $usuario;
	}
	/**Procura e retorna o registro do parametro que foi passado, se houver
	* @param $campo criterio
	* @param $em entity manager do Doctrine
	* @return $usuario Objeto do tipo Usuario, se houver
	*/
	public function findOneBy($campo, $em){
        $repo = $em->getRepository('Entity\Usuario');
        return $repo->findOneBy($campo);
	}
}