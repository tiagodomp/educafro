<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AdministradoresAcoes Model
 *
 * @property \App\Model\Table\AdministradoresTable|\Cake\ORM\Association\BelongsTo $Administradores
 *
 * @method \App\Model\Entity\AdministradoresAco get($primaryKey, $options = [])
 * @method \App\Model\Entity\AdministradoresAco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AdministradoresAco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AdministradoresAco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdministradoresAco|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdministradoresAco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AdministradoresAco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AdministradoresAco findOrCreate($search, callable $callback = null, $options = [])
 */
class AdministradoresAcoesTable extends Table
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

        $this->setTable('administradores_acoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'administradores_id']);

        $this->belongsTo('Administradores', [
            'foreignKey' => 'administradores_id',
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
        $rules->add($rules->existsIn(['administradores_id'], 'Administradores'));

        return $rules;
    }
}
