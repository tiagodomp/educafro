<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Codigos Model
 *
 * @property \App\Model\Table\CodigosTagsTable|\Cake\ORM\Association\BelongsTo $CodigosTags
 *
 * @method \App\Model\Entity\Codigo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Codigo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Codigo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Codigo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Codigo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Codigo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Codigo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Codigo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CodigosTable extends Table
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

        $this->setTable('codigos');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'codigos_tags_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('CodigosTags', [
            'foreignKey' => 'codigos_tags_id',
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
            ->scalar('codigo')
            ->maxLength('codigo', 100)
            ->allowEmptyString('codigo');

        $validator
            ->scalar('ativacao')
            ->allowEmptyString('ativacao');

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
        $rules->add($rules->existsIn(['codigos_tags_id'], 'CodigosTags'));

        return $rules;
    }
}
