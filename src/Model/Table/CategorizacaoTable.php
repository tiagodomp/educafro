<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categorizacao Model
 *
 * @property \App\Model\Table\CategorizacaoInfoTable|\Cake\ORM\Association\HasMany $CategorizacaoInfo
 * @property \App\Model\Table\EventosTable|\Cake\ORM\Association\HasMany $Eventos
 *
 * @method \App\Model\Entity\Categorizacao get($primaryKey, $options = [])
 * @method \App\Model\Entity\Categorizacao newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Categorizacao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Categorizacao|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categorizacao|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categorizacao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Categorizacao[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Categorizacao findOrCreate($search, callable $callback = null, $options = [])
 */
class CategorizacaoTable extends Table
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

        $this->setTable('categorizacao');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('CategorizacaoInfo', [
            'foreignKey' => 'categorizacao_id'
        ]);
        $this->hasMany('Eventos', [
            'foreignKey' => 'categorizacao_id'
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

        return $rules;
    }
}
