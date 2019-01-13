<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RegrasPermicaoCrud Model
 *
 * @property \App\Model\Table\RegrasHierarquiasTable|\Cake\ORM\Association\HasMany $RegrasHierarquias
 *
 * @method \App\Model\Entity\RegrasPermicaoCrud get($primaryKey, $options = [])
 * @method \App\Model\Entity\RegrasPermicaoCrud newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RegrasPermicaoCrud[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RegrasPermicaoCrud|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RegrasPermicaoCrud|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RegrasPermicaoCrud patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RegrasPermicaoCrud[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RegrasPermicaoCrud findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RegrasPermicaoCrudTable extends Table
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

        $this->setTable('regras_permicao_crud');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('RegrasHierarquias', [
            'foreignKey' => 'regras_permicao_crud_id'
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
            ->allowEmptyString('criar');

        $validator
            ->allowEmptyString('visualizar');

        $validator
            ->allowEmptyString('editar');

        $validator
            ->allowEmptyString('deletar');

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
