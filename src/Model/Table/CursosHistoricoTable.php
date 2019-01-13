<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CursosHistorico Model
 *
 * @property \App\Model\Table\CursosSecoesTable|\Cake\ORM\Association\BelongsTo $CursosSecoes
 * @property \App\Model\Table\LogTable|\Cake\ORM\Association\BelongsTo $Log
 *
 * @method \App\Model\Entity\CursosHistorico get($primaryKey, $options = [])
 * @method \App\Model\Entity\CursosHistorico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CursosHistorico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CursosHistorico|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CursosHistorico|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CursosHistorico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CursosHistorico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CursosHistorico findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CursosHistoricoTable extends Table
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

        $this->setTable('cursos_historico');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'cursos_secoes_id', 'log_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('CursosSecoes', [
            'foreignKey' => 'cursos_secoes_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Log', [
            'foreignKey' => 'log_id',
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

        $validator
            ->allowEmptyString('historico_aproveitamento');

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
        $rules->add($rules->existsIn(['cursos_secoes_id'], 'CursosSecoes'));
        $rules->add($rules->existsIn(['log_id'], 'Log'));

        return $rules;
    }
}
