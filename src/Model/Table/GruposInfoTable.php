<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GruposInfo Model
 *
 * @property \App\Model\Table\GruposTable|\Cake\ORM\Association\BelongsTo $Grupos
 * @property \App\Model\Table\ModificadoresTable|\Cake\ORM\Association\BelongsTo $Modificadores
 *
 * @method \App\Model\Entity\GruposInfo get($primaryKey, $options = [])
 * @method \App\Model\Entity\GruposInfo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GruposInfo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GruposInfo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GruposInfo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GruposInfo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GruposInfo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GruposInfo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GruposInfoTable extends Table
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

        $this->setTable('grupos_info');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'grupos_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Grupos', [
            'foreignKey' => 'grupos_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Modificadores', [
            'foreignKey' => 'modificadores_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create')
            ->add('id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('tipo')
            ->allowEmptyString('tipo');

        $validator
            ->boolean('visivel')
            ->allowEmptyString('visivel');

        $validator
            ->scalar('info')
            ->allowEmptyString('info');

        return $validator;
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
        $rules->add($rules->isUnique(['id']));
        $rules->add($rules->existsIn(['grupos_id'], 'Grupos'));
        $rules->add($rules->existsIn(['modificadores_id'], 'Modificadores'));

        return $rules;
    }
}
