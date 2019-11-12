<?php
namespace Service;
use Doctrine\ORM\EntityManager;
require_once 'C:\xampp\htdocs\qualepi\bootstrap.php';
require_once(APPPATH . "models/Entity/Favorito.php");
require_once(APPPATH . "models/Repository/FavoritoRepository.php");

class FavoritoService {

	/**Inserção de novo registro no dd
	* @param $data array contendo dados a serem inseridos
	* @param $em entity manager do Doctrine
	* @return $favorito Objeto do tipo Favorito
	*/
	public function insert(array $data, $em){
		$favorito = new \Entity\Favorito;
		$favorito->setUsuario($data['Usuario']);
		$favorito->setEPI($data['EPI']);
		$em->persist($favorito);
		$em->flush();
		return $favorito;
	}

	/**Procura e retorna o registro, se houver
	/* @param $criterio array contendo os criterios a serem buscados
	* @param $em entity manager do Doctrine
	* @return array de Objeto do tipo Favorito, se houver
	*/
	public function findBy(array $criterio, $em){
		$repo = $em->getRepository('Entity\Favorito');
		return $repo->findBy($criterio);
	}

	/**Deleta o registro do banco de dados
	* @param $id do Objeto/Registro a ser deletado
	* @param $em entity manager do Doctrine
	* @return true
	*/
	public function delete($id, $em){
		$Favorito = $em->getReference('Entity\Favorito', $id);
		$em->remove($Favorito);
		$em->flush();
		return true;
	}
}