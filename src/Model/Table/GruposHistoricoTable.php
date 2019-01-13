<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GruposHistorico Model
 *
 * @property \App\Model\Table\LogTable|\Cake\ORM\Association\BelongsTo $Log
 * @property \App\Model\Table\GruposTable|\Cake\ORM\Association\BelongsTo $Grupos
 *
 * @method \App\Model\Entity\GruposHistorico get($primaryKey, $options = [])
 * @method \App\Model\Entity\GruposHistorico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GruposHistorico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GruposHistorico|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GruposHistorico|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GruposHistorico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GruposHistorico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GruposHistorico findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GruposHistoricoTable extends Table
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

        $this->setTable('grupos_historico');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'log_id', 'grupos_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Log', [
            'foreignKey' => 'log_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Grupos', [
            'foreignKey' => 'grupos_id',
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
            ->date('ultima_data_iniciada')
            ->allowEmptyDate('ultima_data_iniciada');

        $validator
            ->date('ultima_data_finalizada')
            ->allowEmptyDate('ultima_data_finalizada');

        $validator
            ->scalar('ultimo_status')
            ->maxLength('ultimo_status', 32)
            ->allowEmptyString('ultimo_status');

        $validator
            ->allowEmptyString('historico');

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
        $rules->add($rules->existsIn(['log_id'], 'Log'));
        $rules->add($rules->existsIn(['grupos_id'], 'Grupos'));

        return $rules;
    }
}
