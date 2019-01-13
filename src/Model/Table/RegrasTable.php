<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Regras Model
 *
 * @property \App\Model\Table\GruposTable|\Cake\ORM\Association\BelongsTo $Grupos
 * @property \App\Model\Table\RegrasHierarquiasTable|\Cake\ORM\Association\BelongsTo $RegrasHierarquias
 * @property \App\Model\Table\ModificadoresTable|\Cake\ORM\Association\BelongsTo $Modificadores
 *
 * @method \App\Model\Entity\Regra get($primaryKey, $options = [])
 * @method \App\Model\Entity\Regra newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Regra[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Regra|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Regra|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Regra patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Regra[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Regra findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RegrasTable extends Table
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

        $this->setTable('regras');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'grupos_id', 'regras_hierarquias_id', 'modificadores_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Grupos', [
            'foreignKey' => 'grupos_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('RegrasHierarquias', [
            'foreignKey' => 'regras_hierarquias_id',
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
            ->scalar('cargo')
            ->maxLength('cargo', 32)
            ->requirePresence('cargo', 'create')
            ->allowEmptyString('cargo', false);

        $validator
            ->scalar('status')
            ->maxLength('status', 256)
            ->allowEmptyString('status');

        $validator
            ->scalar('descricao')
            ->allowEmptyString('descricao');

        $validator
            ->allowEmptyString('info');

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
        $rules->add($rules->existsIn(['regras_hierarquias_id'], 'RegrasHierarquias'));
        $rules->add($rules->existsIn(['modificadores_id'], 'Modificadores'));

        return $rules;
    }
}
