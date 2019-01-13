<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GruposDeOutros Model
 *
 * @property \App\Model\Table\GruposTable|\Cake\ORM\Association\BelongsTo $Grupos
 * @property \App\Model\Table\OutrosTable|\Cake\ORM\Association\BelongsTo $Outros
 *
 * @method \App\Model\Entity\GruposDeOutro get($primaryKey, $options = [])
 * @method \App\Model\Entity\GruposDeOutro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GruposDeOutro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GruposDeOutro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GruposDeOutro|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GruposDeOutro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GruposDeOutro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GruposDeOutro findOrCreate($search, callable $callback = null, $options = [])
 */
class GruposDeOutrosTable extends Table
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

        $this->setTable('grupos_de_outros');
        $this->setDisplayField('grupos_id');
        $this->setPrimaryKey(['grupos_id', 'outros_id']);

        $this->belongsTo('Grupos', [
            'foreignKey' => 'grupos_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Outros', [
            'foreignKey' => 'outros_id',
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
        $rules->add($rules->existsIn(['outros_id'], 'Outros'));

        return $rules;
    }
}
