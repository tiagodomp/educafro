<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use CakeDC\Users\Model\Table\UsersTable;

/**
 * User Model
 *
 * @property \App\Model\Table\UserCadastroTable|\Cake\ORM\Association\BelongsTo $UserCadastro
 * @property \App\Model\Table\PerfisTable|\Cake\ORM\Association\BelongsTo $Perfis
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UserTable extends UsersTable
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

        $this->setTable('user');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'user_cadastro_id', 'perfis_id']);

        $this->addBehavior('Timestamp');
        $this->addBehavior('Lqdt/OrmJson.json');

        $this->belongsTo('UserCadastro', [
            'foreignKey' => 'user_cadastro_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Perfis', [
            'foreignKey' => 'perfis_id',
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
            ->scalar('username')
            ->maxLength('username', 256)
            ->allowEmptyString('username');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 256)
            ->allowEmptyString('password');

        $validator
            ->scalar('remember_token')
            ->maxLength('remember_token', 256)
            ->allowEmptyString('remember_token');

        $validator
            ->scalar('google')
            ->maxLength('google', 256)
            ->allowEmptyString('google');

        $validator
            ->scalar('oauth_provider')
            ->allowEmptyString('oauth_provider');

        $validator
            ->scalar('primeiro_nome')
            ->maxLength('primeiro_nome', 64)
            ->allowEmptyString('primeiro_nome');

        $validator
            ->scalar('meio_nome')
            ->maxLength('meio_nome', 64)
            ->allowEmptyString('meio_nome');

        $validator
            ->scalar('ultimo_nome')
            ->maxLength('ultimo_nome', 64)
            ->allowEmptyString('ultimo_nome');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 16)
            ->allowEmptyString('gender');

        $validator
            ->scalar('locale')
            ->maxLength('locale', 256)
            ->allowEmptyString('locale');

        $validator
            ->scalar('cover')
            ->maxLength('cover', 256)
            ->allowEmptyString('cover');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 256)
            ->allowEmptyString('photo');

        $validator
            ->scalar('photo_dir')
            ->maxLength('photo_dir', 256)
            ->allowEmptyString('photo_dir');

        $validator
            ->integer('photo_size')
            ->allowEmptyString('photo_size');

        $validator
            ->scalar('photo_type')
            ->maxLength('photo_type', 256)
            ->allowEmptyString('photo_type');

        $validator
            ->scalar('link')
            ->maxLength('link', 256)
            ->allowEmptyString('link');

        $validator
            ->allowEmptyArray('info');

        $validator
            ->scalar('sexo')
            ->allowEmptyString('sexo');

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
        $rules->add($rules->existsIn(['user_cadastro_id'], 'UserCadastro'));
        $rules->add($rules->existsIn(['perfis_id'], 'Perfis'));

        return $rules;
    }
}
