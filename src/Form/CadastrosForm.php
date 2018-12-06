<?PHP
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class CadastrosForm extends Form
{
    //Campos não obrigatórios no mysql não incluirei neste FORM
    //Objetivo: cadastrar, e o que faltar eles completam 
    protected function _buildSchema(Schema $schema)
    {                  //Dados obrigatórios da Tabela Users 
        return $schema->addField('username', ['type' => 'string'])
                      ->addField('email', ['type' => 'string'])
                      ->addField('lembrar', ['type' => 'boolean'])
                      ->addField('password', ['type' => 'string'])
                      ->addField('first_name', ['type' => 'string'])
                      ->addField('last_name', ['type' => 'string'])
                      ->addField('codigos_id', ['type' => 'numeric'])
                                
                      //Dados obrigatórios da Tabela Perfis 
                      ->addField('perfis_id', ['type' => 'numeric'])
                      ->addField('nome', ['type' => 'string'])
                      ->addField('rg', ['type' => 'string'])
                      ->addField('cpf', ['type' => 'string'])
                      ->addField('cep', ['type' => 'string'])
                      ->addField('endereco_num', ['type' => 'numeric'])
                
                      //Dados obrigatórios da tabela contatos
                      ->addField('contatos_id', ['type' => 'numeric'])
                      ->addField('ddd', ['type' => 'numeric'])
                      ->addField('numero', ['type' => 'numeric'])
                
                      //Dados obrigatórios da tabela Regras
                      ->addField('roles_id', ['type' => 'numeric']);
                      //Os demais campos serão atribuido automaticamente nos controllers
                           
    }

    protected function _buildValidator(Validator $validator)
    {
        return $validator->add('username', 'format', [
                                'rule' => 'string',
                                'message' => 'Esta certo que este é o seu username ?']
                            )
                    ->add('email', 'format', [
                                'rule' => 'email',
                                'message' => 'Vixi! Esse E-mail não é válido.']
                          )
                    ->add('lembrar', 'boolean', [
                                'rule' => 'boolean']
                            )
                    ->add('password', 'format', [
                                'rule' => 'password',
                                'message' => 'Ops! Você se esqueceu da senha.']
                            )
                    ->add('first_name', 'format', [
                                'rule' => ['maxLength' => 60],
                                'message' => 'Ops! Digite apenas o seu Primeiro nome']
                            ) 
                    ->add('last_name', 'format', [
                                'rule' => ['maxLength'=> 60],
                                'message' => 'Abrevie o seu sobrenome']
                            )
                
                
                    //Perfil
                    ->add('nome', 'format', [
                                'rule' => 'string']
                            )
                    ->add('rg', 'format', [
                                'rule' => 'string',
                                'message' => 'Seu documento esta errado']
                            )
                    ->add('cpf', 'format', [
                                'rule' => 'string',
                                'message' => 'Seu CPF esta errado']
                            )
                    ->add('cep', 'format', [
                                'rule' => 'string',
                                'message' => 'Seu CEP não foi encontrado']
                            )
                    ->add('endereco_num', 'format', [
                                'rule' => 'string']
                            )
                
                    //Contatos
                    ->add('DDD', 'format', [
                                'rule' => 'numeric',
                                'message' => 'DDD incorreto']
                            )
                    ->add('numero', 'format', [
                                'rule' => 'numeric',
                                'message' => 'Número do seu telefone/celular esta errado']
                            );

    }
    
    //Permite definir o comportamento desejado quando o execute() é chamado e o dado é válido.
    protected function _execute(array $data)
    {
        //Enviar E-mail
        return true;
    }
}