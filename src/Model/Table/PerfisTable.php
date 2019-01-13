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
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
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
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('nome_social')
            ->maxLength('nome_social', 64)
            ->allowEmptyString('nome_social');

        $validator
            ->allowEmptyString('contatos');

        $validator
            ->scalar('facebook')
            ->maxLength('facebook', 256)
            ->allowEmptyString('facebook');

        $validator
            ->scalar('curriculo_lattes')
            ->maxLength('curriculo_lattes', 256)
            ->allowEmptyString('curriculo_lattes');

        $validator
            ->allowEmptyString('curriculo_upload');

        $validator
            ->allowEmptyString('pictures');

        $validator
            ->scalar('rg')
            ->maxLength('rg', 32)
            ->allowEmptyString('rg');

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 32)
            ->allowEmptyString('cpf');

        $validator
            ->scalar('cep')
            ->maxLength('cep', 32)
            ->allowEmptyString('cep');

        $validator
            ->scalar('endereco')
            ->maxLength('endereco', 128)
            ->allowEmptyString('endereco');

        $validator
            ->scalar('endereco_num')
            ->maxLength('endereco_num', 128)
            ->allowEmptyString('endereco_num');

        $validator
            ->scalar('bairro')
            ->maxLength('bairro', 128)
            ->allowEmptyString('bairro');

        $validator
            ->scalar('cidade')
            ->maxLength('cidade', 128)
            ->allowEmptyString('cidade');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 128)
            ->allowEmptyString('estado');

        $validator
            ->allowEmptyString('modo_template');

        $validator
            ->allowEmptyString('auto_declaracao');

        $validator
            ->allowEmptyString('banca_verificacao');

        $validator
            ->allowEmptyString('deficiencia');

        $validator
            ->allowEmptyString('transporte_publico');

        $validator
            ->scalar('religiao')
            ->maxLength('religiao', 32)
            ->allowEmptyString('religiao');

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

        return $rules;
    }
}
