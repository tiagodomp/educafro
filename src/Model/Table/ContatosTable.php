<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contatos Model
 *
 * @property \App\Model\Table\PerfisTable|\Cake\ORM\Association\BelongsTo $Perfis
 *
 * @method \App\Model\Entity\Contato get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contato newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contato[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contato|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contato|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contato patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contato[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contato findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ContatosTable extends Table
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

        $this->setTable('contatos');
        $this->setDisplayField('numero');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Perfis', [
            'foreignKey' => 'perfis_id',
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
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('ddd')
            ->maxLength('ddd', 5)
            ->requirePresence('ddd', 'create')
            ->notEmpty('ddd');

        $validator
            ->scalar('numero')
            ->maxLength('numero', 10)
            ->requirePresence('numero', 'create')
            ->notEmpty('numero');

        $validator
            ->scalar('falarcom')
            ->maxLength('falarcom', 60)
            ->allowEmpty('falarcom');

        $validator
            ->scalar('aparelho')
            ->maxLength('aparelho', 45)
            ->allowEmpty('aparelho');

        $validator
            ->allowEmpty('type');

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
        $rules->add($rules->existsIn(['perfis_id'], 'Perfis'));

        return $rules;
    }
}
