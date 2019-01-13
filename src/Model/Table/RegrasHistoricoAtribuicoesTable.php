<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RegrasHistoricoAtribuicoes Model
 *
 * @property \App\Model\Table\UserAtribuicoesTable|\Cake\ORM\Association\BelongsTo $UserAtribuicoes
 *
 * @method \App\Model\Entity\RegrasHistoricoAtribuico get($primaryKey, $options = [])
 * @method \App\Model\Entity\RegrasHistoricoAtribuico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RegrasHistoricoAtribuico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RegrasHistoricoAtribuico|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RegrasHistoricoAtribuico|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RegrasHistoricoAtribuico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RegrasHistoricoAtribuico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RegrasHistoricoAtribuico findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RegrasHistoricoAtribuicoesTable extends Table
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

        $this->setTable('regras_historico_atribuicoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'user_atribuicoes_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('UserAtribuicoes', [
            'foreignKey' => 'user_atribuicoes_id',
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
        $rules->add($rules->existsIn(['user_atribuicoes_id'], 'UserAtribuicoes'));

        return $rules;
    }
}
