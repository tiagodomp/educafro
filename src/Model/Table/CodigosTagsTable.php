<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CodigosTags Model
 *
 * @property \App\Model\Table\ModificadoresTable|\Cake\ORM\Association\BelongsTo $Modificadores
 *
 * @method \App\Model\Entity\CodigosTag get($primaryKey, $options = [])
 * @method \App\Model\Entity\CodigosTag newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CodigosTag[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CodigosTag|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CodigosTag|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CodigosTag patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CodigosTag[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CodigosTag findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CodigosTagsTable extends Table
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

        $this->setTable('codigos_tags');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'modificadores_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Modificadores', [
            'foreignKey' => 'modificadores_id',
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
            ->scalar('nome')
            ->maxLength('nome', 64)
            ->requirePresence('nome', 'create')
            ->allowEmptyString('nome', false);

        $validator
            ->scalar('abreviatura')
            ->maxLength('abreviatura', 16)
            ->allowEmptyString('abreviatura');

        $validator
            ->allowEmptyString('pertencentes');

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
        $rules->add($rules->existsIn(['modificadores_id'], 'Modificadores'));

        return $rules;
    }
}
