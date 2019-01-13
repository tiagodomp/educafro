<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CodigosInfo Model
 *
 * @property \App\Model\Table\CodigosTable|\Cake\ORM\Association\BelongsTo $Codigos
 * @property \App\Model\Table\ModificadoresTable|\Cake\ORM\Association\BelongsTo $Modificadores
 *
 * @method \App\Model\Entity\CodigosInfo get($primaryKey, $options = [])
 * @method \App\Model\Entity\CodigosInfo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CodigosInfo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CodigosInfo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CodigosInfo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CodigosInfo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CodigosInfo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CodigosInfo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CodigosInfoTable extends Table
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

        $this->setTable('codigos_info');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'codigos_id', 'modificadores_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Codigos', [
            'foreignKey' => 'codigos_id',
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
            ->scalar('titulo')
            ->maxLength('titulo', 128)
            ->allowEmptyString('titulo');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 256)
            ->allowEmptyString('descricao');

        $validator
            ->allowEmptyString('img');

        $validator
            ->allowEmptyString('beneficios');

        $validator
            ->allowEmptyString('publico_alvo');

        $validator
            ->allowEmptyString('como_obter');

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
        $rules->add($rules->existsIn(['codigos_id'], 'Codigos'));
        $rules->add($rules->existsIn(['modificadores_id'], 'Modificadores'));

        return $rules;
    }
}
