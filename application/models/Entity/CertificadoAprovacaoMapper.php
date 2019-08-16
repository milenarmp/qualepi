<?php
class CertificadoAprovacaoMapper{
	
	namespace models\Mapper;

	use models\Entity\CertificadoAprovacao;
	use Doctrine\ORM\Entity Manager;

	public function __construc(EntityManager $em){
		$this->em = $em;
	}

	//Função para inserção de registro no db
	public function insert(CertificadoAprovacao $certificadoAprovacao){
			$this->em->persist($certificadoAprovacao);
			$this->emflush();

			return [
			'success' => true
		];
	}

	//Função para atualização de registro no db
	public function update($id, $array){
		return [

			'success' => true;
		];
	}

	public function find($id){
		return $this->dados($id);
	}

	public function fetchAll(){
		$dados = $this->dados;
	}



}

