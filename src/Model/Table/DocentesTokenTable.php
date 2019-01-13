<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DocentesToken Model
 *
 * @property \App\Model\Table\DocentesTable|\Cake\ORM\Association\BelongsTo $Docentes
 *
 * @method \App\Model\Entity\DocentesToken get($primaryKey, $options = [])
 * @method \App\Model\Entity\DocentesToken newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DocentesToken[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DocentesToken|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DocentesToken|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DocentesToken patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DocentesToken[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DocentesToken findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DocentesTokenTable extends Table
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

        $this->setTable('docentes_token');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'docentes_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Docentes', [
            'foreignKey' => 'docentes_id',
            'joinType' => 'INNER'
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
            ->scalar('token')
            ->maxLength('token', 255)
            ->allowEmptyString('token');

        $validator
            ->allowEmptyString('senhas');

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
        $rules->add($rules->existsIn(['docentes_id'], 'Docentes'));

        return $rules;
    }
}
