<?php
namespace Service;
use Doctrine\ORM\EntityManager;
require_once(APPPATH . "models/Entity/EPI.php");
require_once(APPPATH . "models/Entity/CertificadoAprovacao.php");
require_once(APPPATH . "models/Repository/EPIRepository.php");
require_once(APPPATH . "models/Service/CertificadoAprovacaoService.php");

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

	/**Procura e retorna o registro do id que foi passado, se houver
	* @param $id do Objeto/Registro
	* @param $em entity manager do Doctrine
	* @return $certificadoAprovacao Objeto do tipo CertificadoAprovacao, se houver
	*/
	public function find($id, $em){
        $repo = $em->getRepository('Entity\EPI');
        return $repo->find($id);
	}

	/**Retorna todos os registros
	* @param $em entity manager do Doctrine
	* @return $certificadoAprovacao Objetos do tipo CertificadoAprovacao
	*/
	public function fetchAll($em){
        $repo = $em->getRepository('Entity\EPI');
		return $repo->findAll();
	}

	public function pesquisarEPI($termo, $em){
		$CertificadoAprovacaoService = new \Service\CertificadoAprovacaoService;
		$CAs = $CertificadoAprovacaoService->pesquisarCA($termo, $em);
		$EPIs = [];
		foreach($CAs as $ca){
			$EPIs[] = $this->findBy(array ('CertificadoAprovacao' => $ca->getId()), $em);
		}
		return $EPIs;
	}

	public function findBy(array $criterio, $em){
		$repo = $em->getRepository('Entity\EPI');
		return $repo->findBy($criterio);
	}
}