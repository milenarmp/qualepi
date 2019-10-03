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
                $date = new \DateTime($data['data_validade_ca']);
		$certificadoAprovacao->setNumero($data['numero_ca']);
		$certificadoAprovacao->setDataValidade($date);
                $certificadoAprovacao->setSituacao($data['situacao_ca']);
                $certificadoAprovacao->setNumeroProcesso($data['numero_processo_ca']);
                $certificadoAprovacao->setCnpj($data['cnpj_ca']);
                $certificadoAprovacao->setRazaoSocial($data['razao_social_ca']);
                $certificadoAprovacao->setNatureza($data['natureza_ca']);
                $certificadoAprovacao->setNome($data['nome_ca']);
                $certificadoAprovacao->setDescricao($data['descricao_ca']);
                $certificadoAprovacao->setMarca($data['marca_ca']);
                $certificadoAprovacao->setReferencia($data['referencia_ca']);
                $certificadoAprovacao->setCor($data['cor_ca']);
                $certificadoAprovacao->setAprovadoPara($data['aprovado_para_ca']);
                $certificadoAprovacao->setRestritoPara($data['restrito_para_ca']);
		$certificadoAprovacao->setObservacoes($data['observacoes_ca']);
                $certificadoAprovacao->setCnpjLaboratorio($data['cnpj_laboratorio_ca']);
		$certificadoAprovacao->setRazaoSocialLaboratorio($data['razao_social_laboratorio_ca']);
		$certificadoAprovacao->setNrLaudo($data['nr_laudo_ca']);
                $certificadoAprovacao->setNorma($data['norma_ca']);

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