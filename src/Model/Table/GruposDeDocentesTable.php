<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GruposDeDocentes Model
 *
 * @property \App\Model\Table\GruposTable|\Cake\ORM\Association\BelongsTo $Grupos
 * @property \App\Model\Table\DocentesTable|\Cake\ORM\Association\BelongsTo $Docentes
 *
 * @method \App\Model\Entity\GruposDeDocente get($primaryKey, $options = [])
 * @method \App\Model\Entity\GruposDeDocente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GruposDeDocente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GruposDeDocente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GruposDeDocente|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GruposDeDocente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GruposDeDocente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GruposDeDocente findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GruposDeDocentesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('grupos_de_docentes');
        $this->setDisplayField('grupos_id');
        $this->setPrimaryKey(['grupos_id', 'docentes_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Grupos', [
            'foreignKey' => 'grupos_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Docentes', [
            'foreignKey' => 'docentes_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['grupos_id'], 'Grupos'));
        $rules->add($rules->existsIn(['docentes_id'], 'Docentes'));

        return $rules;
    }
}
