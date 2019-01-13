<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tags Model
 *
 * @property \App\Model\Table\ModificadoresTable|\Cake\ORM\Association\BelongsTo $Modificadores
 * @property \App\Model\Table\TagsTagsTable|\Cake\ORM\Association\BelongsTo $TagsTags
 * @property \App\Model\Table\TagsTaggedsTable|\Cake\ORM\Association\BelongsTo $TagsTaggeds
 *
 * @method \App\Model\Entity\Tag get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tag newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tag[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tag|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tag|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tag patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tag[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tag findOrCreate($search, callable $callback = null, $options = [])
 */
class TagsTable extends Table
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

        $this->setTable('tags');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'modificadores_id', 'tags_tags_id', 'tags_tagged_id']);

        $this->belongsTo('Modificadores', [
            'foreignKey' => 'modificadores_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TagsTags', [
            'foreignKey' => 'tags_tags_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TagsTaggeds', [
            'foreignKey' => 'tags_tagged_id',
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
            ->allowEmptyString('lista');

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
        $rules->add($rules->existsIn(['modificadores_id'], 'Modificadores'));
        $rules->add($rules->existsIn(['tags_tags_id'], 'TagsTags'));
        $rules->add($rules->existsIn(['tags_tagged_id'], 'TagsTaggeds'));

        return $rules;
    }
}
