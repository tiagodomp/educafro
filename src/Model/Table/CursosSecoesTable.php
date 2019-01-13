<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CursosSecoes Model
 *
 * @property \App\Model\Table\CursosTable|\Cake\ORM\Association\BelongsTo $Cursos
 *
 * @method \App\Model\Entity\CursosSeco get($primaryKey, $options = [])
 * @method \App\Model\Entity\CursosSeco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CursosSeco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CursosSeco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CursosSeco|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CursosSeco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CursosSeco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CursosSeco findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CursosSecoesTable extends Table
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

        $this->setTable('cursos_secoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'cursos_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Cursos', [
            'foreignKey' => 'cursos_id',
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
            ->scalar('tipo')
            ->allowEmptyString('tipo');

        $validator
            ->integer('quantas')
            ->allowEmptyString('quantas');

        $validator
            ->allowEmptyString('docentes');

        $validator
            ->allowEmptyString('discentes');

        $validator
            ->allowEmptyString('data_inicio_modulo');

        $validator
            ->allowEmptyString('data_final_modulo');

        $validator
            ->integer('codigo_turma')
            ->requirePresence('codigo_turma', 'create')
            ->allowEmptyString('codigo_turma', false)
            ->add('codigo_turma', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('vagas')
            ->allowEmptyString('vagas');

        $validator
            ->scalar('carga_horaria')
            ->maxLength('carga_horaria', 128)
            ->allowEmptyString('carga_horaria');

        $validator
            ->date('prox_secao')
            ->allowEmptyDate('prox_secao');

        $validator
            ->boolean('visivel')
            ->allowEmptyString('visivel');

        $validator
            ->date('data_inicio_cadastro')
            ->allowEmptyDate('data_inicio_cadastro');

        $validator
            ->date('data_final_cadastro')
            ->allowEmptyDate('data_final_cadastro');

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
        $rules->add($rules->isUnique(['codigo_turma']));
        $rules->add($rules->existsIn(['cursos_id'], 'Cursos'));

        return $rules;
    }
}
