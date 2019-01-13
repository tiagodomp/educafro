<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SuperUsuariosAcoes Model
 *
 * @property \App\Model\Table\SuperUsuariosTable|\Cake\ORM\Association\BelongsTo $SuperUsuarios
 *
 * @method \App\Model\Entity\SuperUsuariosAco get($primaryKey, $options = [])
 * @method \App\Model\Entity\SuperUsuariosAco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SuperUsuariosAco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SuperUsuariosAco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SuperUsuariosAco|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SuperUsuariosAco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SuperUsuariosAco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SuperUsuariosAco findOrCreate($search, callable $callback = null, $options = [])
 */
class SuperUsuariosAcoesTable extends Table
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

        $this->setTable('super_usuarios_acoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'super_usuarios_id']);

        $this->belongsTo('SuperUsuarios', [
            'foreignKey' => 'super_usuarios_id',
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
        $rules->add($rules->existsIn(['super_usuarios_id'], 'SuperUsuarios'));

        return $rules;
    }
}
