<?PHP
namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use ArrayObject;
use Cake\Datasource\EntityInterface;
use Cake\Event\Event;
use Cake\ORM\Entity;
use Cake\ORM\Query;
use Cake\Utility\Text;

class disponiveisBehavior extends Behavior
{
    protected $_defaultConfig = [
        'field' => 'ativacao',
        'slug' => '',
        'replacement' => '-',
    ];
    
    public function botaoDisp(Entity $entity, $tipoDeVerificacao)
    {
        $value = $entity->get('ativacao');
        
        switch ($tipoDeVerificacao)
        {
            case 0:
                if($value === 0)
                    
                break;
            case 1:
                if($value === 1)
                    
                break;
        }
    }
    
    public function findDisponivel(Query $query, array $options)
    {
        return $query->where(['disp' => $options['disp']]);
    }
}

