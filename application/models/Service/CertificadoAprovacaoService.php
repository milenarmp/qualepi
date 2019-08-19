<?php
defined('BASEPATH') OR exit('No direct script access allowed');

namespace models\Service;
include_once(BASEPATH . 'core/Model.php');
use models\Entity\CertificadoAprovacao as CertificadoAprovacao;
use Doctrine\ORM\EntityManager;

class CertificadoAprovacaoService extends CI_Model{
	private $em;

	//Construtor da Classe
	public function __construct(){
		parent::__construct();
	}
	//Inserção de novo registro no db	
	public function insert(array $data){		
		//Preenchendo um objeto da classe Certificado Aprovação para persistir no db
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
	public function update($id, array $array){
		//Criando um dummy objeto com o id para realizar o update
		$certificadoAprovacao = $this->em->getReference("models\Entity\Cliente", $id);
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
		$this->em->persist($certificadoAprovacao);
		$this->em->flush();
		return $certificadoAprovacao;
	}
	//Retorna todos os registros da entidade	
	public function fetchAll($em){
		$this->em = $em;		
		$repo = $this->em->getRepository('application\models\Entity\CertificadoAprovacao');
		return $repo->findAll();
		 
	}
	//Procura e retorna o registro do id que foi passado
	public function find($id){
		$repo = $this->em->getRepository("models\Entity\CertificadoAprovacao");
		return $repo->find($id);
	}
	//Deleta o registro que possui o id que foi passado
	public function delete($id){
		//Criando um dummy objeto com o id para realizar o delete
		$certificadoAprovacao = $this->em->getReference("models\Entity\CertificadoAprovacao", $id);
		$this->em->remove($certificadoAprovacao);
		return true;
	}
}