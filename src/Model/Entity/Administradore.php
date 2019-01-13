<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Administradore Entity
 *
 * @property int $id
 * @property int $regras_id
 * @property int $user_id
 * @property string|null $tipo
 * @property array|null $presenca
 * @property int|null $pontuacao
 * @property bool|null $bonificacao
 * @property array|null $bonificacao_historico
 * @property string|null $distancia_casa_sede
 * @property array|null $dias_disponiveis
 * @property array|null $conselheiro
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Regra $regra
 * @property \App\Model\Entity\User $user
 */
class Administradore extends Entity
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
        'presenca' => true,
        'pontuacao' => true,
        'bonificacao' => true,
        'bonificacao_historico' => true,
        'distancia_casa_sede' => true,
        'dias_disponiveis' => true,
        'conselheiro' => true,
        'created' => true,
        'modified' => true,
        'regra' => true,
        'user' => true
    ];
}
