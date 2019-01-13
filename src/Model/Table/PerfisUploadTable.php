<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PerfisUpload Model
 *
 * @property \App\Model\Table\PerfisTable|\Cake\ORM\Association\BelongsTo $Perfis
 *
 * @method \App\Model\Entity\PerfisUpload get($primaryKey, $options = [])
 * @method \App\Model\Entity\PerfisUpload newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PerfisUpload[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PerfisUpload|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PerfisUpload|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PerfisUpload patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PerfisUpload[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PerfisUpload findOrCreate($search, callable $callback = null, $options = [])
 */
class PerfisUploadTable extends Table
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

        $this->setTable('perfis_upload');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'perfis_id']);

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

        return $rules;
    }
}
