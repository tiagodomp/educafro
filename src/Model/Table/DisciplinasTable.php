<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Disciplinas Model
 *
 * @property \App\Model\Table\CursosModulosTable|\Cake\ORM\Association\BelongsTo $CursosModulos
 * @property \App\Model\Table\ModificadoresTable|\Cake\ORM\Association\BelongsTo $Modificadores
 *
 * @method \App\Model\Entity\Disciplina get($primaryKey, $options = [])
 * @method \App\Model\Entity\Disciplina newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Disciplina[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Disciplina|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Disciplina|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Disciplina patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Disciplina[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Disciplina findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DisciplinasTable extends Table
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

        $this->setTable('disciplinas');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'cursos_modulos_id', 'modificadores_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('CursosModulos', [
            'foreignKey' => 'cursos_modulos_id',
            'joinType' => 'INNER'
        ]);
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
            ->allowEmptyString('nome');

        $validator
            ->scalar('icon')
            ->maxLength('icon', 256)
            ->allowEmptyString('icon');

        $validator
            ->scalar('descricao')
            ->allowEmptyString('descricao');

        $validator
            ->integer('credito_aula')
            ->allowEmptyString('credito_aula');

        $validator
            ->integer('credito_trabalho')
            ->allowEmptyString('credito_trabalho');

        $validator
            ->integer('carga_horaria_total')
            ->allowEmptyString('carga_horaria_total');

        $validator
            ->scalar('setores_enem')
            ->allowEmptyString('setores_enem');

        $validator
            ->date('ativar')
            ->allowEmptyDate('ativar');

        $validator
            ->scalar('objetivos')
            ->allowEmptyString('objetivos');

        $validator
            ->scalar('programa_resumido')
            ->maxLength('programa_resumido', 64)
            ->allowEmptyString('programa_resumido');

        $validator
            ->scalar('programa')
            ->allowEmptyString('programa');

        $validator
            ->scalar('avaliacao')
            ->allowEmptyString('avaliacao');

        $validator
            ->scalar('metodo')
            ->allowEmptyString('metodo');

        $validator
            ->scalar('criterio')
            ->allowEmptyString('criterio');

        $validator
            ->scalar('recuperacao')
            ->allowEmptyString('recuperacao');

        $validator
            ->scalar('bibliografia')
            ->allowEmptyString('bibliografia');

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
        $rules->add($rules->existsIn(['cursos_modulos_id'], 'CursosModulos'));
        $rules->add($rules->existsIn(['modificadores_id'], 'Modificadores'));

        return $rules;
    }
}
