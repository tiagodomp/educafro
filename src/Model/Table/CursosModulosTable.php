<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CursosModulos Model
 *
 * @property \App\Model\Table\CursosTable|\Cake\ORM\Association\BelongsTo $Cursos
 * @property \App\Model\Table\GruposTable|\Cake\ORM\Association\BelongsTo $Grupos
 *
 * @method \App\Model\Entity\CursosModulo get($primaryKey, $options = [])
 * @method \App\Model\Entity\CursosModulo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CursosModulo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CursosModulo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CursosModulo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CursosModulo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CursosModulo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CursosModulo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CursosModulosTable extends Table
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

        $this->setTable('cursos_modulos');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'cursos_id', 'grupos_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Cursos', [
            'foreignKey' => 'cursos_id',
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
            ->scalar('nome')
            ->maxLength('nome', 64)
            ->allowEmptyString('nome');

        $validator
            ->scalar('abreviacao')
            ->maxLength('abreviacao', 32)
            ->allowEmptyString('abreviacao');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 128)
            ->allowEmptyString('titulo');

        $validator
            ->allowEmptyString('matriz_curricular');

        $validator
            ->scalar('tipo')
            ->allowEmptyString('tipo');

        $validator
            ->allowEmptyString('requisitos_deste_modulo');

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
        $rules->add($rules->existsIn(['cursos_id'], 'Cursos'));
        $rules->add($rules->existsIn(['grupos_id'], 'Grupos'));

        return $rules;
    }
}
