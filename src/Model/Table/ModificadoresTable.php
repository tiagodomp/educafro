<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Modificadores Model
 *
 * @property \App\Model\Table\UserHistoricoAcoesTable|\Cake\ORM\Association\BelongsTo $UserHistoricoAcoes
 *
 * @method \App\Model\Entity\Modificadore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Modificadore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Modificadore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Modificadore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Modificadore|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Modificadore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Modificadore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Modificadore findOrCreate($search, callable $callback = null, $options = [])
 */
class ModificadoresTable extends Table
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

        $this->setTable('modificadores');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'user_historico_acoes_id']);

        $this->belongsTo('UserHistoricoAcoes', [
            'foreignKey' => 'user_historico_acoes_id',
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
            ->allowEmptyString('rastreador_rotas');

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
        $rules->add($rules->existsIn(['user_historico_acoes_id'], 'UserHistoricoAcoes'));

        return $rules;
    }
}
