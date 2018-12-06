<?php

namespace App\Controller;

/**
 * Description of ValidarController
 *
 * @author Tiago Pereira
 */
class ValidarController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    //Permite o  acesso público em  certa ação
    public function beforeFilter(\Cake\Event\Event $event) {
        $this->Auth->allow('validar');
    }

    public function validar() {

        $session = $this->request->getSession();
        $dados = $session->read('Registro');
		
        if(!empty($dados)) {
            //validar array $dados e retornar perfil caso CPF exista
            $obterDados = $this->obterDadosServer($dados);
            if (!empty($obterDados)) {
                //Enviar os dados para session e redirecionar para Cadastro
                if ($this->enviarDadosSession($obterDados)) {
                    $this->Flash->success(__('Ufa! A sua sessão foi validada com sucesso'));
					
				debug($obterDados);
		
                    $this->redirect(['controller' => 'Cadastros', 'action' => 'associarDados']);
                }
            } else {
                $erro = 'Por favor, se cadastre no ITAFRO.educafro.org.br ou no MEDAFRO.educafro.org.br, antes de proseguir com o seu cadastro';
                $this->Flash->error($erro);
                    $this->redirect(['controller' => 'Cadastros', 'action' => 'associarDados']);
            }
        } else {
            $erro = 'ERRO em Validar usuário';
            $this->Flash->error($erro);
            return $this->redirect(['controller' => 'Registros', 'action' => 'registro', $erro]);
        }
        $this->render('validar', 'initial');
        $this->set(compact('validar'));
    }

    /**
     * @param $dados
     * @return mixed|null
     */
    //Validar Registro com os dados do ITAFRO.educafro.org.br e do MEDAFRO.educafro.org.br
    private function obterDadosServer($dados) {
        // Dados de acesso a api educafro
        $url = 'http://educafro.org.br/associados/api/api.php/';
        $key = 'EducafroSp@19';
        $pass = base64_encode($key);
        $cpf = $dados['User.perfi.cpf'];
        $urlFull = $url.'?key='.$pass.'&cpf='.$cpf;
        //http://educafro.org.br/associados/api/api.php/?key=RWR1Y2Fmcm9TcEAxOQ==&cpf=482.970.758-50
        //soliciatação json ao server da educafro
        $solicite = file_get_contents($urlFull);
        $obterDados = json_decode($solicite, true);
		

        //Organizar objeto recebido em $obterDados via JSON, no array $response para enviar para session pelo método validar
        if (!empty($obterDados['dados']['nome'])) {
            //Acrescento os dados retornados do servidor da educafro ao array que será salvo na session.
            $dados['User.perfi.nome'] = $obterDados['dados']['nome'];
            $dados['User.first_name'] = $this->separarFnome($obterDados ['dados']['nome']);
            $dados['User.last_name'] = $this->separarLnome($obterDados ['dados']['nome']);
            //O cpf esta salvo na session Registro, porém não posso alterá-lo devido o usuario não constar na consulta JSON, return o cpf previamente descrito em Registro...
            //$dados['User.perfi.cpf'] = $obterDados['dados']['cpf'];
            $dados['User.perfi.cep'] = $this->validarCEP($obterDados ['dados']['cep']);
            $dados['User.perfi.endereco'] = $this->consultarEndereco($obterDados ['dados']['cep']);
			$dados['User.perfi.bairro'] = $this->consultarBairro($obterDados ['dados']['cep']);
			$dados['User.perfi.cidade'] = $this->consultarLocalidade($obterDados ['dados']['cep']);
			$dados['User.perfi.estado'] = $this->consultarUf($obterDados ['dados']['cep']);
            $dados['User.type'] = $this->setTipo($obterDados['dados']['tipo']);
            $dados['User.contato.num'] = $this->validarTelefone($obterDados['dados']['telefone']);
            $dados['User.contato.ddd'] = $this->validarDdd($obterDados['dados']['telefone']);
            $dados['User.roles_id'] = 3;
        } else {
            // Altero para usuario tipo ONLINE = 4, e aplico as roles Aluno = 3;
            $dados['User.type'] = 4;
            $dados['User.roles_id'] = 3;
        }

        return $dados;
    }

    private function enviarDadosSession($dados) {
        //Recebo um array do método validar e escrevo ele na session
        $session = $this->request->getSession();
        if ($session->check('Registro')) {
            //Se usuário for do tipo online, significa que ele nn conseguiu obter os dados do server da educafro
            if ($dados['User.type'] == 4) {
                $session->write('Validar', [
                    'User.first_name' => null,
                    'User.last_name' => null,
                    'User.type' => $dados['User.type'],
                    'User.contato.ddd' => null,
                    'User.contato.num' => null,
                    //Acesso facilitado nas views
                    'User.perfi.nome' => null,
                    'User.perfi.cpf' => $dados['User.perfi.cpf'],
                    'User.perfi.cep' => null,
                    'User.roles_id' => $dados['User.roles_id'],
                    'User.perfi.endereco' => null,
					'User.perfi.bairro' => null,
					'User.perfi.cidade' => null,
					'User.perfi.estado' => null
                ]);
            } else {
                $session->write('Validar', [
                    'User.first_name' => $dados['User.first_name'],
                    'User.last_name' => $dados['User.last_name'],
                    'User.type' => $dados['User.type'],
                    'User.contato.ddd' => $dados['User.contato.ddd'],
                    'User.contato.num' => $dados['User.contato.num'],
                    //Acesso facilitado nas views
                    'User.perfi.nome' => $dados['User.perfi.nome'],
                    'User.perfi.cpf' => $dados['User.perfi.cpf'],
                    'User.perfi.cep' => $dados['User.perfi.cep'],
                    'User.roles_id' => $dados['User.roles_id'],
                    'User.perfi.endereco' => $dados['User.perfi.endereco'],
					'User.perfi.bairro' => $dados['User.perfi.bairro'],
					'User.perfi.cidade' => $dados['User.perfi.cidade'],
					'User.perfi.estado' => $dados['User.perfi.estado']
                ]);
            }
			
            return true;
        } else {
            $this->Flash->error('Opaa! Por favor tente reiniciar ou limpar o cache do seu navegador');
        }
    }

    private function separarFnome($nome) {
        $first = explode(' ', $nome, 2);
        if (!empty($first)) {
            return $first[0];
        } else {
            return '';
        }
    }

    private function separarLnome($nome) {
        $last = explode(' ', $nome, 2);
        if (!empty($last)) {
            return $last[1];
        } else {
            return '';
        }
    }

    private function setTipo($tipo) {
		
		$tipo = strtolower($tipo);
		
        if ($tipo == 'itafro') {
            return 2;
        } elseif ($tipo == 'med-afro') {
            return 3;
        } else {
            return 4;
        }
    }

    //corrigir código deixá-lo mais dry 
    private function validarCEP($consultar) {
        //deixo apenas números no CEP
        $cep = str_replace("-", "", $consultar);
        $url = 'https://viacep.com.br/ws/' . $cep . '/json';

        $solicite = file_get_contents($url);
        $response = json_decode($solicite, true);

        if (!empty($response['logradouro'])) {
            return $cep;
        } else {
            return '00000-000';
        }
    }

    //corrigir código deixá-lo mais dry 
    private function consultarEndereco($consultar) {
        //deixo apenas números no CEP
        $cep = str_replace("-", "", $consultar);
        $url = 'https://viacep.com.br/ws/' . $cep . '/json';

        $solicite = file_get_contents($url);
        $response = json_decode($solicite, true);

        if (!empty($response['logradouro'])) {
            return $response['logradouro'];
        } else {
            return 'Logradouro Indefinido';
        }
    }

	 //corrigir código deixá-lo mais dry 
    private function consultarBairro($consultar) {
        //deixo apenas números no CEP
        $cep = str_replace("-", "", $consultar);
        $url = 'https://viacep.com.br/ws/' . $cep . '/json';

        $solicite = file_get_contents($url);
        $response = json_decode($solicite, true);

        if (!empty($response['bairro'])) {
            return $response['bairro'];
        } else {
            return 'Bairro Indefinido';
        }
    }
	
	 //corrigir código deixá-lo mais dry 
    private function consultarLocalidade($consultar) {
        //deixo apenas números no CEP
        $cep = str_replace("-", "", $consultar);
        $url = 'https://viacep.com.br/ws/' . $cep . '/json';

        $solicite = file_get_contents($url);
        $response = json_decode($solicite, true);

        if (!empty($response['localidade'])) {
            return $response['localidade'];
        } else {
            return 'Localidade Indefinido';
        }
    }

 //corrigir código deixá-lo mais dry 
    private function consultarUf($consultar) {
        //deixo apenas números no CEP
        $cep = str_replace("-", "", $consultar);
        $url = 'https://viacep.com.br/ws/' . $cep . '/json';

        $solicite = file_get_contents($url);
        $response = json_decode($solicite, true);

        if (!empty($response['uf'])) {
            return $response['uf'];
        } else {
            return 'UF Indefinido';
        }
    }
	
    private function validarTelefone($telefone) {
        $ddd = explode(')', $telefone, 2);
        if (!empty($ddd)) {
            return $ddd[1];
        } else {
            return $ddd = '';
        }
    }

    private function validarDdd($telefone) {
        $ddd = explode(')', $telefone, 2);
        $ddd[0] = str_replace("(", "", $ddd[0]);
        $ddd[0] = str_replace(")", "", $ddd[0]);
        if (!empty($ddd)) {
            return $ddd[0];
        } else {
            return $ddd = '';
        }
    }

}
