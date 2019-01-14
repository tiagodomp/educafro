<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Outros Model
 *
 * @property \App\Model\Table\UserTable|\Cake\ORM\Association\BelongsTo $User
 * @property \App\Model\Table\RegrasTable|\Cake\ORM\Association\BelongsTo $Regras
 * @property \App\Model\Table\GruposTable|\Cake\ORM\Association\BelongsTo $Grupos
 *
 * @method \App\Model\Entity\Outro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Outro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Outro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Outro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Outro|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Outro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Outro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Outro findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OutrosTable extends Table
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

        $this->setTable('outros');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'user_id', 'regras_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('User', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Regras', [
            'foreignKey' => 'regras_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Grupos', [
            'foreignKey' => 'grupos_id'
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
            ->allowEmptyString('presenca');

        $validator
            ->integer('pontuacao')
            ->allowEmptyString('pontuacao');

        $validator
            ->boolean('bonificacao')
            ->allowEmptyString('bonificacao');

        $validator
            ->allowEmptyString('bonificacao_historico');

        $validator
            ->scalar('distancia_casa_sede')
            ->maxLength('distancia_casa_sede', 64)
            ->allowEmptyString('distancia_casa_sede');

        $validator
            ->allowEmptyString('auto_avaliacao');

        $validator
            ->allowEmptyString('avaliacao_equipe');

        $validator
            ->allowEmptyString('avaliacao_administradores');

        $validator
            ->allowEmptyString('dias_disponiveis');

        $validator
            ->allowEmptyString('conselheiro');

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
        $rules->add($rules->existsIn(['user_id'], 'User'));
        $rules->add($rules->existsIn(['regras_id'], 'Regras'));
        $rules->add($rules->existsIn(['grupos_id'], 'Grupos'));

        return $rules;
    }
}
