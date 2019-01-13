<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Voluntario Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $regras_id
 * @property string|null $tipo
 * @property array|null $presenca
 * @property int|null $pontuacao
 * @property bool|null $bonificacao
 * @property array|null $bonificacao_historico
 * @property string|null $distancia_casa_sede
 * @property array|null $auto_avaliacao
 * @property array|null $avaliacao_equipe
 * @property array|null $avaliacao_administradores
 * @property array|null $dias_disponiveis
 * @property \Cake\I18n\FrozenTime|null $created
 * @property array|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Regra $regra
 */
class Voluntario extends Entity
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
        'auto_avaliacao' => true,
        'avaliacao_equipe' => true,
        'avaliacao_administradores' => true,
        'dias_disponiveis' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'regra' => true
    ];
}
