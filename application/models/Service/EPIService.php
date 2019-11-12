<?php
namespace Service;
use Doctrine\ORM\EntityManager;
require_once(APPPATH . "models/Entity/EPI.php");
require_once(APPPATH . "models/Entity/CertificadoAprovacao.php");
require_once(APPPATH . "models/Repository/EPIRepository.php");
require_once(APPPATH . "models/Service/CertificadoAprovacaoService.php");

class EPIService {

	/**Inserção de novo registro no database
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
	* @return Objeto do tipo EPI, se houver
	*/
	public function find($id, $em){
        $repo = $em->getRepository('Entity\EPI');
        return $repo->find($id);
	}

	/**Retorna todos os registros
	* @param $em entity manager do Doctrine
	* @return Objetos do tipo EPI
	*/
	public function fetchAll($em){
        $repo = $em->getRepository('Entity\EPI');
		return $repo->findAll();
	}

	/**Busca o CA no banco de dados
    * @param $termo string com o termo a ser pesquisado
    * @param $em entity manager do Doctrine
    * @return $EPIs array de objetos encontrados
	*/
	public function pesquisarEPI($termo, $em){
		$CertificadoAprovacaoService = new \Service\CertificadoAprovacaoService;
		$CAs = $CertificadoAprovacaoService->pesquisarCA($termo, $em);
		$EPIs = [];
		foreach($CAs as $ca){
			$EPIs[] = $this->findBy(array ('CertificadoAprovacao' => $ca->getId()), $em);
		}
		return $EPIs;
	}

	/**Procura e retorna o registro, se houver
	/* @param $criterio array contendo os criterios a serem buscados
	* @param $em entity manager do Doctrine
	* @return array de Objeto do tipo EPI, se houver
	*/
	public function findBy(array $criterio, $em){
		$repo = $em->getRepository('Entity\EPI');
		return $repo->findBy($criterio);
	}

	/**
 	* Pesquisa e monta o array para montar o datatable
 	* @param   $EPIs array de objetos do tipo EPI
 	* @return  $retornoEPI array montado com infos
	*/
	public function retornoEPIsA($EPIs, $em){
		$CertificadoAprovacaoService = new \Service\CertificadoAprovacaoService;
		$retornoEPI = [];
		 foreach($EPIs as $epi){
		 	if(!empty($epi)){
		 	$ca = $CertificadoAprovacaoService->find($epi[0]->getCertificadoAprovacao()->getId(), $em);
		 	$retornoEPI[] = [
		 		'numeroCA' => $ca->getId(),
		 		'nome' => $ca->getNome(),
		 		'dataValidade' => $this->dataParaString($ca->getDataValidade()),
		 		'aprovadoPara' => mb_strtolower($ca->getAprovadoPara()),
		 		'visualizar' => '<a href="http://localhost/qualepi/index.php/EPIController/visualizarEPI/'.$ca->getId().'" target="_blank">Mais detalhes</a>',
		 			];
				}
			}
		return $retornoEPI;
	}

	/**
 	* Pesquisa e monta o array para montar o datatable
 	* @param   $EPIs array de objetos do tipo EPI
 	* @return  $retornoEPI array montado com infos
	*/
	public function retornoEPIsB($EPIs, $em){
		$CertificadoAprovacaoService = new \Service\CertificadoAprovacaoService;
		$retornoEPI = [];
		 foreach($EPIs as $epi){
		 	if(!empty($epi)){
		 	$ca = $CertificadoAprovacaoService->find($epi->getCertificadoAprovacao()->getId(), $em);
		 	$retornoEPI[] = [
		 		'numeroCA' => $ca->getId(),
		 		'nome' => $ca->getNome(),
		 		'dataValidade' => $this->dataParaString($ca->getDataValidade()),
		 		'aprovadoPara' => mb_strtolower($ca->getAprovadoPara()),
		 		'visualizar' => '<a href="http://localhost/qualepi/index.php/EPIController/visualizarEPI/'.$ca->getId().'" target="_blank">Mais detalhes</a>',
		 		'remover' => '<a href="http://localhost/qualepi/index.php/FavoritoController/remover/'.$ca->getId().'">Remover</a>'
		 			];
				}
			}
		return $retornoEPI;
	}
	/**
 	* Transforma objeto tipo date em string
 	* @param  $data objeto tipo date
 	* @return strin contendo a data transformada em string
	*/
	public function dataParaString($data){
		return date_format($data, 'd/m/y');
	}
}