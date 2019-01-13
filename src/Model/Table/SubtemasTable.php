<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Subtemas Model
 *
 * @property \App\Model\Table\TemasTable|\Cake\ORM\Association\BelongsTo $Temas
 * @property \App\Model\Table\DocentesTable|\Cake\ORM\Association\BelongsTo $Docentes
 * @property \App\Model\Table\ModificadoresTable|\Cake\ORM\Association\BelongsTo $Modificadores
 *
 * @method \App\Model\Entity\Subtema get($primaryKey, $options = [])
 * @method \App\Model\Entity\Subtema newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Subtema[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Subtema|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Subtema|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Subtema patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Subtema[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Subtema findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SubtemasTable extends Table
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

        $this->setTable('subtemas');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'temas_id', 'docentes_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Temas', [
            'foreignKey' => 'temas_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Docentes', [
            'foreignKey' => 'docentes_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Modificadores', [
            'foreignKey' => 'modificadores_id'
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
            ->scalar('descricao')
            ->allowEmptyString('descricao');

        $validator
            ->allowEmptyString('carga_horaria');

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
        $rules->add($rules->existsIn(['temas_id'], 'Temas'));
        $rules->add($rules->existsIn(['docentes_id'], 'Docentes'));
        $rules->add($rules->existsIn(['modificadores_id'], 'Modificadores'));

        return $rules;
    }
}
