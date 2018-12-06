<?PHP
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class LoginForm extends Form
{

    protected function _buildSchema(Schema $schema)
    {
        return $schema->addField('username', 'string')
                      ->addField('password', ['type' => 'string'])
                      ->addField('lembrar', ['type' => 'boolean']);
    }

    protected function _buildValidator(Validator $validator)
    {
        $validator->add('username', 'format', [
                                'rule' => 'email',
                                'message' => 'Vixi! Esse E-mail não é válido.']
                          )
                  ->add('password', 'format', [
                                'rule' => 'password',
                                'message' => 'Ops! Você se esqueceu da senha.'
                          ])
        
                  ->add('lembrar', 'boolean', [
                                'rule' => 'boolean'
                          ]);
        return $validator;
    }
    
    //Permite definir o comportamento desejado quando o execute() é chamado e o dado é válido.
    protected function _execute(array $data)
    {
        //Enviar E-mail
        return true;
    }
}