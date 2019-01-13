<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GruposDeDiscentes Model
 *
 * @property \App\Model\Table\GruposTable|\Cake\ORM\Association\BelongsTo $Grupos
 * @property \App\Model\Table\DiscentesTable|\Cake\ORM\Association\BelongsTo $Discentes
 *
 * @method \App\Model\Entity\GruposDeDiscente get($primaryKey, $options = [])
 * @method \App\Model\Entity\GruposDeDiscente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GruposDeDiscente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GruposDeDiscente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GruposDeDiscente|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GruposDeDiscente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GruposDeDiscente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GruposDeDiscente findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GruposDeDiscentesTable extends Table
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

        $this->setTable('grupos_de_discentes');
        $this->setDisplayField('grupos_id');
        $this->setPrimaryKey(['grupos_id', 'discentes_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Grupos', [
            'foreignKey' => 'grupos_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Discentes', [
            'foreignKey' => 'discentes_id',
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
        $rules->add($rules->existsIn(['discentes_id'], 'Discentes'));

        return $rules;
    }
}
