<?php
namespace Service;
use Doctrine\ORM\EntityManager;
require_once 'C:\xampp\htdocs\qualepi\bootstrap.php';
require_once(APPPATH . "models/Entity/Comentario.php");
require_once(APPPATH . "models/Entity/Usuario.php");
require_once(APPPATH . "models/Repository/ComentarioRepository.php");

class ComentarioService {

	/**Inserção de novo registro no database
	* @param $data array contendo dados a serem inseridos
	* @param $em entity manager do Doctrine
	* @return $Comentario Objeto do tipo Comentario
	*/
	public function insert(array $data, $em){
		require_once(APPPATH . "models/Entity/Comentario.php");
		$Comentario = new \Entity\Comentario;
		$Comentario->setUsuario($data['Usuario']);
		$Comentario->setEPI($data['EPI']);
		$Comentario->setDescricao($data['descricao']);
		$Comentario->setTitulo($data['titulo']);
		$Comentario->setDataInclusao($data['dataInclusao']);
		$em->persist($Comentario);
		$em->flush();
		return $Comentario;
	}

	/**Procura e retorna o registro, se houver
	/* @param $criterio array contendo os criterios a serem buscados
	* @param $em entity manager do Doctrine
	* @return array de Objeto do tipo Comentario, se houver
	*/
	public function findBy(array $criterio, $em){
		$repo = $em->getRepository('Entity\Comentario');
		return $repo->findBy($criterio);
	}

	public function retornoComentarios($EPI, $em){
		$criterio = array(
			'EPI' => $EPI
		);
		$Comentarios = $this->findBy($criterio, $em);
		$retornoComentarios = [];
		foreach ($Comentarios as $comentario){
			$retornoComentarios[] = array(
				'usuario' => $comentario->getUsuario()->getNome(),
				'titulo' => $comentario->getTitulo(),
				'descricao' => $comentario->getDescricao()
			);
		}
		return $retornoComentarios;
	}
}
