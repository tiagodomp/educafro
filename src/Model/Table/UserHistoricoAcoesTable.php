<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserHistoricoAcoes Model
 *
 * @property \App\Model\Table\UserTable|\Cake\ORM\Association\BelongsTo $User
 * @property \App\Model\Table\LogTable|\Cake\ORM\Association\BelongsTo $Log
 *
 * @method \App\Model\Entity\UserHistoricoAco get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserHistoricoAco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserHistoricoAco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserHistoricoAco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserHistoricoAco|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserHistoricoAco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserHistoricoAco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserHistoricoAco findOrCreate($search, callable $callback = null, $options = [])
 */
class UserHistoricoAcoesTable extends Table
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

        $this->setTable('user_historico_acoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'user_id', 'log_id']);

        $this->belongsTo('User', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Log', [
            'foreignKey' => 'log_id',
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
            ->allowEmptyString('acoes');

        $validator
            ->allowEmptyString('acessos');

        $validator
            ->allowEmptyString('uploads');

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
        $rules->add($rules->existsIn(['user_id'], 'User'));
        $rules->add($rules->existsIn(['log_id'], 'Log'));

        return $rules;
    }
}
