<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GruposDeVoluntarios Model
 *
 * @property \App\Model\Table\GruposTable|\Cake\ORM\Association\BelongsTo $Grupos
 * @property \App\Model\Table\VoluntariosTable|\Cake\ORM\Association\BelongsTo $Voluntarios
 *
 * @method \App\Model\Entity\GruposDeVoluntario get($primaryKey, $options = [])
 * @method \App\Model\Entity\GruposDeVoluntario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GruposDeVoluntario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GruposDeVoluntario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GruposDeVoluntario|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GruposDeVoluntario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GruposDeVoluntario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GruposDeVoluntario findOrCreate($search, callable $callback = null, $options = [])
 */
class GruposDeVoluntariosTable extends Table
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

        $this->setTable('grupos_de_voluntarios');
        $this->setDisplayField('grupos_id');
        $this->setPrimaryKey(['grupos_id', 'voluntarios_id']);

        $this->belongsTo('Grupos', [
            'foreignKey' => 'grupos_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Voluntarios', [
            'foreignKey' => 'voluntarios_id',
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
        $rules->add($rules->existsIn(['voluntarios_id'], 'Voluntarios'));

        return $rules;
    }
}