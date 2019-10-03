<?php
namespace Service;
use Doctrine\ORM\EntityManager;
class EPIService {

	/**Inserção de novo registro no dd
	* @param $data array contendo dados a serem inseridos
	* @param $em entity manager do Doctrine
	* @return $EPI Objeto do tipo EPI
	*/
	public function insert(array $data, $em){
		require_once(APPPATH . "models/Entity/EPI.php");
		$EPI = new \Entity\EPI;
		$EPI->setEExcluido(0);
		$EPI->setCertificadoAprovacao($data['certificadoAprovacao']);
		$em->persist($EPI);
		$em->flush();
		return $EPI;
	}
}