<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Provas Model
 *
 * @property \App\Model\Table\PerfisTable|\Cake\ORM\Association\BelongsTo $Perfis
 * @property \App\Model\Table\MateriasTable|\Cake\ORM\Association\BelongsTo $Materias
 *
 * @method \App\Model\Entity\Prova get($primaryKey, $options = [])
 * @method \App\Model\Entity\Prova newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Prova[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Prova|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prova|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prova patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Prova[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Prova findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProvasTable extends Table
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

        $this->setTable('provas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Perfis', [
            'foreignKey' => 'perfis_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Materias', [
            'foreignKey' => 'materias_id',
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
            ->dateTime('aplicada')
            ->requirePresence('aplicada', 'create')
            ->notEmpty('aplicada');

        $validator
            ->decimal('nota')
            ->requirePresence('nota', 'create')
            ->notEmpty('nota');

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
        $rules->add($rules->existsIn(['materias_id'], 'Materias'));

        return $rules;
    }
}
