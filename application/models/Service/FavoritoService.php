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
}