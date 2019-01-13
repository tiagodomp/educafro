<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RegrasHierarquias Model
 *
 * @property \App\Model\Table\RegrasPermicaoCrudTable|\Cake\ORM\Association\BelongsTo $RegrasPermicaoCrud
 * @property \App\Model\Table\ModificadoresTable|\Cake\ORM\Association\BelongsTo $Modificadores
 *
 * @method \App\Model\Entity\RegrasHierarquia get($primaryKey, $options = [])
 * @method \App\Model\Entity\RegrasHierarquia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RegrasHierarquia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RegrasHierarquia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RegrasHierarquia|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RegrasHierarquia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RegrasHierarquia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RegrasHierarquia findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RegrasHierarquiasTable extends Table
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

        $this->setTable('regras_hierarquias');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'regras_permicao_crud_id', 'modificadores_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('RegrasPermicaoCrud', [
            'foreignKey' => 'regras_permicao_crud_id',
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
            ->integer('hierarquia')
            ->requirePresence('hierarquia', 'create')
            ->allowEmptyString('hierarquia', false);

        $validator
            ->scalar('observacao')
            ->allowEmptyString('observacao');

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
        $rules->add($rules->existsIn(['regras_permicao_crud_id'], 'RegrasPermicaoCrud'));
        $rules->add($rules->existsIn(['modificadores_id'], 'Modificadores'));

        return $rules;
    }
}
