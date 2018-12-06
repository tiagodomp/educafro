<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cadastros Model
 *
 * @method \App\Model\Entity\Cadastro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cadastro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cadastro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cadastro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cadastro|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cadastro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cadastro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cadastro findOrCreate($search, callable $callback = null, $options = [])
 */
class CadastrosTable extends Table
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

        $this->setTable('cadastros');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id']);
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
            ->nonNegativeInteger('id')
            ->allowEmpty('id', 'create')
            ->add('id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('username')
            ->maxLength('username', 45)
            ->allowEmpty('username');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('lembrar');

        $validator
            ->scalar('password')
            ->maxLength('password', 200)
            ->allowEmpty('password');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 60)
            ->allowEmpty('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 60)
            ->allowEmpty('last_name');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 60)
            ->allowEmpty('nome');

        $validator
            ->scalar('rg')
            ->maxLength('rg', 60)
            ->allowEmpty('rg');

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 60)
            ->allowEmpty('cpf');

        $validator
            ->scalar('cep')
            ->maxLength('cep', 60)
            ->allowEmpty('cep');

        $validator
            ->integer('registrosid')
            ->allowEmpty('registrosid');

        $validator
            ->integer('codigoid')
            ->allowEmpty('codigoid');

        $validator
            ->integer('perfisid')
            ->allowEmpty('perfisid');

        $validator
            ->integer('contatosid')
            ->allowEmpty('contatosid');

        $validator
            ->scalar('ddd')
            ->maxLength('ddd', 6);

        $validator
            ->scalar('numero')
            ->maxLength('numero', 15)
            ->allowEmpty('numero');

        $validator
            ->integer('rolesid')
            ->allowEmpty('rolesid');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['id']));
        $rules->add($rules->isUnique(['cpf']));
        $rules->add($rules->isUnique(['rg']));

        return $rules;
    }
}
