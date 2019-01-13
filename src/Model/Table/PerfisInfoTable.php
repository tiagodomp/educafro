<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PerfisInfo Model
 *
 * @property \App\Model\Table\PerfisTable|\Cake\ORM\Association\BelongsTo $Perfis
 * @property \App\Model\Table\PerfisUsersTable|\Cake\ORM\Association\BelongsTo $PerfisUsers
 *
 * @method \App\Model\Entity\PerfisInfo get($primaryKey, $options = [])
 * @method \App\Model\Entity\PerfisInfo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PerfisInfo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PerfisInfo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PerfisInfo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PerfisInfo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PerfisInfo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PerfisInfo findOrCreate($search, callable $callback = null, $options = [])
 */
class PerfisInfoTable extends Table
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

        $this->setTable('perfis_info');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'perfis_id', 'perfis_user_id']);

        $this->belongsTo('Perfis', [
            'foreignKey' => 'perfis_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('PerfisUsers', [
            'foreignKey' => 'perfis_user_id',
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
        $rules->add($rules->existsIn(['perfis_id'], 'Perfis'));
        $rules->add($rules->existsIn(['perfis_user_id'], 'PerfisUsers'));

        return $rules;
    }
}
