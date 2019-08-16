<?php
namespace models\Service;

use models\Entity\CertificadoAprovacao as CertificadoAprovacao;
use Doctrine\ORM\EntityManager;

class CertificadoAprovacaoService{
	private $em;
	//Construtor da Classe
	public function __construct(EntityManager $em){
		$this->em = $em;
	}
	//Inserção de novo registro no db	
	public function insert(array $data){
		$certificadoAprovacao = new CertificadoAprovacao;

		$certificadoAprovacao->setNumero($data['numero']);
		$certificadoAprovacao->setMembrosProtecao($data['membrosProtecao']);
		$certificadoAprovacao->setRestricoes($data['restricoes']);
		$certificadoAprovacao->setDataValidade($data['dataValidade']);
		$certificadoAprovacao->setObservacoes($data['observacoes']);
		$certificadoAprovacao->setAgentesProtecao($data['agenteProtecao']);
		$certificadoAprovacao->setFabricante($data['fabricante']);
		$certificadoAprovacao->setEExcluido($data['eExcluido']);

		$this->em->persist($certificadoAprovacao);
		$this->em->flush();
		return $certificadoAprovacao;
	}
	//Atualização de registro no db		
	public function update(){

	}
	//Atualização de registro no db	
	public function fetchAll(){

	}

	public function find(){
		
	}

	public function delete(){

	}
}