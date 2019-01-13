<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Discente Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $regras_id
 * @property string $tipo
 * @property string|null $ra
 * @property string|null $token_aluno
 * @property bool|null $bonificacao
 * @property array|null $bonificacao_historico
 * @property array|null $aproveitamento
 * @property string|null $distancia_casa_sede
 * @property array|null $monitor
 * @property array|null $presenca
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Regra $regra
 */
class Discente extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'tipo' => true,
        'ra' => true,
        'token_aluno' => true,
        'bonificacao' => true,
        'bonificacao_historico' => true,
        'aproveitamento' => true,
        'distancia_casa_sede' => true,
        'monitor' => true,
        'presenca' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'regra' => true
    ];
}
