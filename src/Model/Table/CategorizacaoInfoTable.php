<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CategorizacaoInfo Model
 *
 * @property \App\Model\Table\CategorizacaoTable|\Cake\ORM\Association\BelongsTo $Categorizacao
 *
 * @method \App\Model\Entity\CategorizacaoInfo get($primaryKey, $options = [])
 * @method \App\Model\Entity\CategorizacaoInfo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CategorizacaoInfo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CategorizacaoInfo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategorizacaoInfo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategorizacaoInfo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CategorizacaoInfo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CategorizacaoInfo findOrCreate($search, callable $callback = null, $options = [])
 */
class CategorizacaoInfoTable extends Table
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

        $this->setTable('categorizacao_info');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'categorizacao_id']);

        $this->belongsTo('Categorizacao', [
            'foreignKey' => 'categorizacao_id',
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
        $rules->add($rules->existsIn(['categorizacao_id'], 'Categorizacao'));

        return $rules;
    }
}
