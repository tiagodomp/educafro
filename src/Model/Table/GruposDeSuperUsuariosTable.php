<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GruposDeSuperUsuarios Model
 *
 * @property \App\Model\Table\GruposTable|\Cake\ORM\Association\BelongsTo $Grupos
 * @property \App\Model\Table\SuperUsuariosTable|\Cake\ORM\Association\BelongsTo $SuperUsuarios
 *
 * @method \App\Model\Entity\GruposDeSuperUsuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\GruposDeSuperUsuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GruposDeSuperUsuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GruposDeSuperUsuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GruposDeSuperUsuario|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GruposDeSuperUsuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GruposDeSuperUsuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GruposDeSuperUsuario findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GruposDeSuperUsuariosTable extends Table
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

        $this->setTable('grupos_de_super_usuarios');
        $this->setDisplayField('grupos_id');
        $this->setPrimaryKey(['grupos_id', 'super_usuarios_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Grupos', [
            'foreignKey' => 'grupos_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SuperUsuarios', [
            'foreignKey' => 'super_usuarios_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['grupos_id'], 'Grupos'));
        $rules->add($rules->existsIn(['super_usuarios_id'], 'SuperUsuarios'));

        return $rules;
    }
}
