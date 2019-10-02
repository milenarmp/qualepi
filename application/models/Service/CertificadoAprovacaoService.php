<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
namespace Service;
use Doctrine\ORM\EntityManager;
class CertificadoAprovacaoService {

	//Inserção de novo registro no dd
	public function insert(array $data, $em){
		require_once(APPPATH . "models/Entity/CertificadoAprovacao.php");
		//Preenchendo um objeto da classe Certificado Aprovação para persistir no db
		$certificadoAprovacao = new \Entity\CertificadoAprovacao;

		$certificadoAprovacao->setNumero($data['numero_ca']);
		$certificadoAprovacao->setRestricoes($data['restricoes']);
		$certificadoAprovacao->setDataValidade($data['dataValidade']);
		$certificadoAprovacao->setObservacoes($data['observacoes']);
		$certificadoAprovacao->setAgentesProtecao($data['agenteProtecao']);
		$certificadoAprovacao->setFabricante($data['fabricante']);
		$certificadoAprovacao->setEExcluido($data['eExcluido']);

		$em->persist($certificadoAprovacao);
		$em->flush();
		return $certificadoAprovacao;
	}
	//Atualização de registro no db
	public function update($id, array $array, $em){
		//Criando um dummy objeto com o id para realizar o update
		$certificadoAprovacao = $em->getReference("models\Entity\CertificadoAprovacao", $id);
		//Passando os campos para preenchimento do objeto
		$certificadoAprovacao->setNumero($data['numero']);
		$certificadoAprovacao->setMembrosProtecao($data['membrosProtecao']);
		$certificadoAprovacao->setRestricoes($data['restricoes']);
		$certificadoAprovacao->setDataValidade($data['dataValidade']);
		$certificadoAprovacao->setObservacoes($data['observacoes']);
		$certificadoAprovacao->setAgentesProtecao($data['agenteProtecao']);
		$certificadoAprovacao->setFabricante($data['fabricante']);
		$certificadoAprovacao->setEExcluido($data['eExcluido']);
		//Persiste a entidade através do objeto
		$em->persist($certificadoAprovacao);
		$em->flush();
		return $certificadoAprovacao;
	}
	//Retorna todos os registros da entidade
	public function fetchAll($em){
		$repo = $em->getRepository("models\Entity\CertificadoAprovacao");
		return $repo->findAll();
	}

	//Procura e retorna o registro do id que foi passado
	public function find($id, $em){
		$repo = $em->getRepository("models\Entity\CertificadoAprovacao");
		return $repo->find($id);
	}

	//Deleta o registro que possui o id que foi passado
	public function delete($id, $em){
		//Criando um dummy objeto com o id para realizar o delete
		$certificadoAprovacao = $em->getReference("models\Entity\CertificadoAprovacao", $id);
		$em->remove($certificadoAprovacao);
		return true;
	}
}