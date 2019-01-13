<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserAtribuicoes Model
 *
 * @property \App\Model\Table\UserTable|\Cake\ORM\Association\BelongsTo $User
 * @property \App\Model\Table\EventosTable|\Cake\ORM\Association\BelongsTo $Eventos
 *
 * @method \App\Model\Entity\UserAtribuico get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserAtribuico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserAtribuico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserAtribuico|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserAtribuico|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserAtribuico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserAtribuico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserAtribuico findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UserAtribuicoesTable extends Table
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

        $this->setTable('user_atribuicoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'user_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('User', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Eventos', [
            'foreignKey' => 'eventos_id'
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
            ->scalar('acao')
            ->requirePresence('acao', 'create')
            ->allowEmptyString('acao', false);

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 128)
            ->allowEmptyString('titulo');

        $validator
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
        $rules->add($rules->existsIn(['user_id'], 'User'));
        $rules->add($rules->existsIn(['eventos_id'], 'Eventos'));

        return $rules;
    }
}
