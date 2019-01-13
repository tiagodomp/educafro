<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GruposSecoes Model
 *
 * @property \App\Model\Table\GruposTable|\Cake\ORM\Association\BelongsTo $Grupos
 *
 * @method \App\Model\Entity\GruposSeco get($primaryKey, $options = [])
 * @method \App\Model\Entity\GruposSeco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GruposSeco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GruposSeco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GruposSeco|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GruposSeco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GruposSeco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GruposSeco findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GruposSecoesTable extends Table
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

        $this->setTable('grupos_secoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'grupos_id']);

        $this->addBehavior('Timestamp');

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
            ->scalar('titulo')
            ->maxLength('titulo', 128)
            ->allowEmptyString('titulo');

        $validator
            ->allowEmptyString('inscritos');

        $validator
            ->allowEmptyString('pendentes');

        $validator
            ->allowEmptyString('matriculados');

        $validator
            ->allowEmptyString('rejeitados');

        $validator
            ->scalar('descricao')
            ->allowEmptyString('descricao');

        $validator
            ->scalar('codigo_do_grupo')
            ->maxLength('codigo_do_grupo', 256)
            ->allowEmptyString('codigo_do_grupo');

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
        $rules->add($rules->existsIn(['grupos_id'], 'Grupos'));

        return $rules;
    }
}
