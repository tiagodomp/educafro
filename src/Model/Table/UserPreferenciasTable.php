<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserPreferencias Model
 *
 * @property \App\Model\Table\UserTable|\Cake\ORM\Association\BelongsTo $User
 *
 * @method \App\Model\Entity\UserPreferencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserPreferencia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserPreferencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserPreferencia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserPreferencia|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserPreferencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserPreferencia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserPreferencia findOrCreate($search, callable $callback = null, $options = [])
 */
class UserPreferenciasTable extends Table
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

        $this->setTable('user_preferencias');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'user_id']);

        $this->belongsTo('User', [
            'foreignKey' => 'user_id',
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
            ->allowEmptyString('configuracoes');

        $validator
            ->allowEmptyString('temas');

        $validator
            ->allowEmptyString('plugins');

        $validator
            ->allowEmptyString('temporarios');

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

        return $rules;
    }
}
