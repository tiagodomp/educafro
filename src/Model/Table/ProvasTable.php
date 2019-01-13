<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Provas Model
 *
 * @property \App\Model\Table\DisciplinasTable|\Cake\ORM\Association\BelongsTo $Disciplinas
 * @property \App\Model\Table\ProvasAnimasTable|\Cake\ORM\Association\BelongsTo $ProvasAnimas
 * @property \App\Model\Table\ModificadoresTable|\Cake\ORM\Association\BelongsTo $Modificadores
 *
 * @method \App\Model\Entity\Prova get($primaryKey, $options = [])
 * @method \App\Model\Entity\Prova newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Prova[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Prova|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prova|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prova patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Prova[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Prova findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProvasTable extends Table
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

        $this->setTable('provas');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'disciplinas_id', 'modificadores_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Disciplinas', [
            'foreignKey' => 'disciplinas_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ProvasAnimas', [
            'foreignKey' => 'provas_anima_id'
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
            ->scalar('tipo')
            ->allowEmptyString('tipo');

        $validator
            ->allowEmptyString('provas');

        $validator
            ->allowEmptyString('gabarito');

        $validator
            ->allowEmptyString('notas');

        $validator
            ->allowEmptyString('info_anima');

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
        $rules->add($rules->existsIn(['provas_anima_id'], 'ProvasAnimas'));
        $rules->add($rules->existsIn(['modificadores_id'], 'Modificadores'));

        return $rules;
    }
}
