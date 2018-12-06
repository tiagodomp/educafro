<?PHP
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class RegistrosForm extends Form
{

    /**
     * Builds the schema for the modelless form
     *
     * @param \Cake\Form\Schema $schema From schema
     * @return \Cake\Form\Schema
     */
    //Campos não obrigatórios no mysql não incluirei neste FORM
    //Objetivo: cadastrar, e o que faltar eles completam 
    protected function _buildSchema(Schema $schema)
    {                  //Dados obrigatórios da Tabela Users 
        return $schema->addField('cpf', ['type' => 'string'])
                      ->addField('email', ['type' => 'string'])
                      ->addField('password', ['type' => 'string'])
                      ->addField('lembrar', ['type' => 'boolean']);
    }

    /**
     * Form validation builder
     *
     * @param \Cake\Validation\Validator $validator to use against the form
     * @return \Cake\Validation\Validator
     */
    protected function _buildValidator(Validator $validator)
    {
        $validator->add('cpf', 'format', [
                                'rule' => 'string',
                                'message' => 'Eita, você digitou errado o seu CPF... ']
                            )
                    ->notEmpty('cpf', 'É necessário o seu CPF para prosseguir')
                
                    ->add('email', 'format', [
                                'rule' => 'email',
                                'message' => 'Vixi! Esse E-mail não é válido.']
                          )
                    ->notEmpty('email', 'É necessário o seu email para prosseguir')
                
                    ->add('password', 'format', [
                                'rule' => 'password',
                                'message' => 'Esta Senha não é válida']
                            )
                    ->notEmpty('password', 'É necessário uma senha para prosseguir')
        
                    ->add('lembrar', 'boolean', [
                                'rule' => 'boolean']
                            );

               
                    //Definir Roles
                
        return $validator;
    }

    /**
     * Defines what to execute once the From is being processed
     *
     * @param array $data Form data.
     * @return bool
     */
    //Permite definir o comportamento desejado quando o execute() é chamado do controller e o dado é válido pela action _builValidator.
    protected function _execute(array $data)
    {
        $session = $this->request->getSession();
        
        if(isset($session)){
            $session->write('Cadastro',[ 
                'User.id' => '',
                'User.username' => '',
                'User.senha' => $data->password,
                'User.email' => $data->email,
                'User.remember_token' => $data->remember_token,
                'User.google' => '',
                'User.created' => '',
                'User.modified' => '',
                'User.oauth_provider' => '',
                'User.oauth_uid' => '',
                'User.first_name' => '',
                'User.last_name' => '',
                'User.gender' =>'',
                'User.locale' => '',
                'User.cover' =>'',
                'User.picture' =>'',
                'User.link' => '',
                'User.type' => 1,
                'User.codigos_id' => 1028,
                'User.roles_id' => 3,
                
                //Acesso facilitado nas views
                'User.perfis_id' => '',
                'User.perfi.nome' => '',
                'User.perfi.img' => '',
                'User.perfi.rg' => '',
                'User.perfi.cpf' => $data->cpf,
                'User.perfi.cep' => '',
                'User.perfi.endnum' => '',
                'User.contato.num' => '',
                'User.codigo.code' => 'ITAeMED_73S73D35ENV0LM1M3N7O',
                'User.role.role' => 'Alunos',
                'Config.language' => 'Pt-Br' 
            ]);
            $this->Flash->sucess('Ufa! Você foi registrado');
        }else{
            $this->Flash->error('Opaa! Por favor tente reiniciar ou limpar o cache do seu navegador');
        } 

        //Enviar E-mail
        return true;
    }
}