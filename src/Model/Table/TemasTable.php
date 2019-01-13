<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Temas Model
 *
 * @property \App\Model\Table\DisciplinasTable|\Cake\ORM\Association\BelongsTo $Disciplinas
 * @property \App\Model\Table\ModificadoresTable|\Cake\ORM\Association\BelongsTo $Modificadores
 *
 * @method \App\Model\Entity\Tema get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tema newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tema[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tema|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tema|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tema patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tema[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tema findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TemasTable extends Table
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

        $this->setTable('temas');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'disciplinas_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Disciplinas', [
            'foreignKey' => 'disciplinas_id',
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
        $rules->add($rules->existsIn(['disciplinas_id'], 'Disciplinas'));
        $rules->add($rules->existsIn(['modificadores_id'], 'Modificadores'));

        return $rules;
    }
}
