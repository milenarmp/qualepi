<?php
namespace Service;
use Doctrine\ORM\EntityManager;
require_once 'C:\xampp\htdocs\qualepi\bootstrap.php';
require_once(APPPATH . "models/Entity/CertificadoAprovacao.php");
require_once(APPPATH . "models/Repository/CertificadoAprovacaoRepository.php");

class CertificadoAprovacaoService {

	/**Inserção de novo registro no dd
	* @param $data array contendo dados a serem inseridos
	* @param $em entity manager do Doctrine
	* @return $certificadoAprovacao Objeto do tipo CertificadoAprovacao
	*/
	public function insert(array $data, $em){
		$certificadoAprovacao = new \Entity\CertificadoAprovacao;
        $date = new \DateTime($data['data_validade_ca']);
        $certificadoAprovacao->setId($data['id_ca']);
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

	/**Atualização de registro no dd
	* @param $id do Objeto/Registro a ser alterado
        * @param $data contendo dados a serem inseridos
	* @param $em entity manager do Doctrine
	* @return $certificadoAprovacao Objeto do tipo CertificadoAprovacao
	*/
	public function update($id, array $data, $em){
		$certificadoAprovacao = $em->getReference("models\Entity\CertificadoAprovacao", $id);
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

	//Retorna todos os registros da entidade
	public function fetchAll($em){

            require_once(APPPATH . "models/Entity/CertificadoAprovacao.php");
		$repo = $em->getRepository(\Entity\CertificadoAprovacao);
		return $repo->findAll();
	}

	/**Procura e retorna o registro do id que foi passado, se houver
	* @param $id do Objeto/Registro a ser alterado
	* @param $em entity manager do Doctrine
	* @return $certificadoAprovacao Objeto do tipo CertificadoAprovacao, se houver
	*/
	public function find($id, $em){
            $repo = $em->getRepository('Entity\CertificadoAprovacao');
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