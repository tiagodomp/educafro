<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Log Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\MysqlLogsTable|\Cake\ORM\Association\BelongsTo $MysqlLogs
 * @property \App\Model\Table\CursosTable|\Cake\ORM\Association\BelongsTo $Cursos
 * @property \App\Model\Table\CursosModulosTable|\Cake\ORM\Association\BelongsTo $CursosModulos
 * @property \App\Model\Table\EventosTable|\Cake\ORM\Association\BelongsTo $Eventos
 * @property \App\Model\Table\CursosHistoricoTable|\Cake\ORM\Association\HasMany $CursosHistorico
 * @property \App\Model\Table\GruposHistoricoTable|\Cake\ORM\Association\HasMany $GruposHistorico
 * @property \App\Model\Table\UserHistoricoAcoesTable|\Cake\ORM\Association\HasMany $UserHistoricoAcoes
 *
 * @method \App\Model\Entity\Log get($primaryKey, $options = [])
 * @method \App\Model\Entity\Log newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Log[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Log|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Log|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Log patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Log[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Log findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LogTable extends Table
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

        $this->setTable('log');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('MysqlLogs', [
            'foreignKey' => 'mysql_log_id'
        ]);
        $this->belongsTo('Cursos', [
            'foreignKey' => 'cursos_id'
        ]);
        $this->belongsTo('CursosModulos', [
            'foreignKey' => 'cursos_modulo_id'
        ]);
        $this->belongsTo('Eventos', [
            'foreignKey' => 'eventos_id'
        ]);
        $this->hasMany('CursosHistorico', [
            'foreignKey' => 'log_id'
        ]);
        $this->hasMany('GruposHistorico', [
            'foreignKey' => 'log_id'
        ]);
        $this->hasMany('UserHistoricoAcoes', [
            'foreignKey' => 'log_id'
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
            ->allowEmptyString('avisos');

        $validator
            ->scalar('ip')
            ->maxLength('ip', 64)
            ->allowEmptyString('ip');

        $validator
            ->scalar('url')
            ->maxLength('url', 128)
            ->allowEmptyString('url');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['mysql_log_id'], 'MysqlLogs'));
        $rules->add($rules->existsIn(['cursos_id'], 'Cursos'));
        $rules->add($rules->existsIn(['cursos_modulo_id'], 'CursosModulos'));
        $rules->add($rules->existsIn(['eventos_id'], 'Eventos'));

        return $rules;
    }
}
