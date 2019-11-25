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
		 		'visualizar' => '<a href="http://localhost/qualepi/index.php/EPIController/visualizarEPI/'.$ca->getId().'" target="_blank"><i class="fas fa-info-circle"> </i></a>',
		 		'remover' => '<a href="http://localhost/qualepi/index.php/FavoritoController/remover/'.$ca->getId().'"><i class="fas fa-trash-alt"> </i></a>'
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

	/**
 	* Formata data
 	* @param  $data string
 	* @return objeto do tipo date
	*/
    public function formataData($data){
        return date("Y/m/d", strtotime($data));
    }

	public function atualizarEPI($em){
		$CertificadoAprovacaoService = new \Service\CertificadoAprovacaoService;
		    set_time_limit(60 * 60);
            $arq = fopen("C:\\xampp\\htdocs\\qualepi\\application\\controllers\\teste.txt", "r");
            $contador = 0;
			while($linha = fgets($arq)){
			$registro = explode("|", $linha);
			$data = "$registro[1]";
			$data1 = implode("/", array_reverse(explode("/", $data)));
                        $dataFormatada = $this->formataData($data1);
			$dados = array('id_ca' => $registro[0],
                'numero_ca' => $registro[0],
				'data_validade_ca' => $dataFormatada,
				'situacao_ca' => $registro[2],
				'numero_processo_ca' => $registro[3],
				'cnpj_ca' => $registro[4],
				'razao_social_ca' => $registro[5],
				'natureza_ca' => $registro[6],
				'nome_ca' => $registro[7],
				'descricao_ca' => $registro[8],
				'marca_ca' => $registro[9],
				'referencia_ca' => $registro[10],
				'cor_ca' => $registro[11],
				'aprovado_para_ca' => $registro[12],
				'restrito_para_ca' => $registro[13],
				'observacoes_ca' => $registro[14],
				'cnpj_laboratorio_ca' => $registro[15],
				'razao_social_laboratorio_ca' => $registro[16],
				'nr_laudo_ca' => $registro[17],
				'norma_ca' => $registro[18]);
			if($registro[2] != 'VENCIDO'){
                if(!is_object($CertificadoAprovacaoService->find($registro[0], $em))){
                        $certificadoAprovacao = $CertificadoAprovacaoService->insert($dados, $em);
                        $dadosEPI = array('certificadoAprovacao' => $certificadoAprovacao);
                        $this->insert($dadosEPI, $em);
                        $contador++;
                }
			}
		}
		fclose($arq);
		return $contador;
	}
}