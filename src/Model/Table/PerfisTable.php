<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Perfis Model
 *
 * @method \App\Model\Entity\Perfi get($primaryKey, $options = [])
 * @method \App\Model\Entity\Perfi newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Perfi[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Perfi|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Perfi|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Perfi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Perfi[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Perfi findOrCreate($search, callable $callback = null, $options = [])
 */
class PerfisTable extends Table
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

        $this->setTable('perfis');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');
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
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 60)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->allowEmpty('img');

        $validator
            ->scalar('rg')
            ->maxLength('rg', 20)
            ->requirePresence('rg', 'create')
            ->notEmpty('rg')
            ->add('rg', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 20)
            ->requirePresence('cpf', 'create')
            ->notEmpty('cpf')
            ->add('cpf', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('cep')
            ->maxLength('cep', 20)
            ->allowEmpty('cep');

        $validator
            ->scalar('endereco')
            ->maxLength('endereco', 255)
            ->allowEmpty('endereco');

        $validator
            ->scalar('endereconum')
            ->maxLength('endereconum', 10)
            ->allowEmpty('endereconum');

        $validator
            ->scalar('bairro')
            ->maxLength('bairro', 60)
            ->allowEmpty('bairro');

        $validator
            ->scalar('cidade')
            ->maxLength('cidade', 60)
            ->allowEmpty('cidade');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 30)
            ->allowEmpty('estado');

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
        $rules->add($rules->isUnique(['rg']));
        $rules->add($rules->isUnique(['cpf']));

        return $rules;
    }
}
