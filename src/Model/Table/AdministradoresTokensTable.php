<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AdministradoresTokens Model
 *
 * @property \App\Model\Table\AdministradoresTable|\Cake\ORM\Association\BelongsTo $Administradores
 *
 * @method \App\Model\Entity\AdministradoresToken get($primaryKey, $options = [])
 * @method \App\Model\Entity\AdministradoresToken newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AdministradoresToken[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AdministradoresToken|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdministradoresToken|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdministradoresToken patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AdministradoresToken[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AdministradoresToken findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AdministradoresTokensTable extends Table
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

        $this->setTable('administradores_tokens');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'administradores_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Administradores', [
            'foreignKey' => 'administradores_id',
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
            ->scalar('instancia')
            ->maxLength('instancia', 255)
            ->allowEmptyString('instancia');

        $validator
            ->scalar('ip_restricao')
            ->maxLength('ip_restricao', 255)
            ->allowEmptyString('ip_restricao');

        $validator
            ->scalar('info')
            ->maxLength('info', 16777215)
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
        $rules->add($rules->existsIn(['administradores_id'], 'Administradores'));

        return $rules;
    }
}