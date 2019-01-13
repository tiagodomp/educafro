<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserCadastro Model
 *
 * @property \App\Model\Table\ModificadoresTable|\Cake\ORM\Association\BelongsTo $Modificadores
 * @property \App\Model\Table\UserTable|\Cake\ORM\Association\HasMany $User
 *
 * @method \App\Model\Entity\UserCadastro get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserCadastro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserCadastro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserCadastro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserCadastro|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserCadastro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserCadastro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserCadastro findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UserCadastroTable extends Table
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

        $this->setTable('user_cadastro');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        /*$this->belongsTo('Modificadores', [
            'foreignKey' => 'modificadores_id'
        ]); */
        $this->hasMany('User', [
            'foreignKey' => 'user_cadastro_id'
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
            ->scalar('username')
            ->maxLength('username', 45)
            ->requirePresence('username', 'create')
            ->allowEmptyString('username', false);

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->allowEmptyString('email', false);

        $validator
            ->scalar('password')
            ->maxLength('password', 200)
            ->requirePresence('password', 'create')
            ->allowEmptyString('password', false);

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 60)
            ->allowEmptyString('first_name');

        $validator
            ->scalar('middle_name')
            ->maxLength('middle_name', 60)
            ->allowEmptyString('middle_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 60)
            ->allowEmptyString('last_name');

        $validator
            ->scalar('rg')
            ->maxLength('rg', 60)
            ->allowEmptyString('rg');

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 60)
            ->allowEmptyString('cpf');

        $validator
            ->scalar('cep')
            ->maxLength('cep', 60)
            ->allowEmptyString('cep');

        $validator
            ->scalar('numero_principal')
            ->maxLength('numero_principal', 25)
            ->allowEmptyString('numero_principal');

        $validator
            ->scalar('numero_contato')
            ->maxLength('numero_contato', 25)
            ->allowEmptyString('numero_contato');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['id']));
        //$rules->add($rules->existsIn(['modificadores_id'], 'Modificadores'));

        return $rules;
    }
}
