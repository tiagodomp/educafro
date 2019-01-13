<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Docente Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $regras_id
 * @property string|null $tipo
 * @property array|null $presenca
 * @property int|null $pontuacao
 * @property string|null $distancia_casa_sede
 * @property array|null $avaliacao_alunos
 * @property array|null $avaliacao_dirigentes
 * @property array|null $dias_disponiveis
 * @property array|null $meus_alunos
 * @property array|null $conselheiro
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Regra $regra
 */
class Docente extends Entity
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
        'distancia_casa_sede' => true,
        'avaliacao_alunos' => true,
        'avaliacao_dirigentes' => true,
        'dias_disponiveis' => true,
        'meus_alunos' => true,
        'conselheiro' => true,
        'modified' => true,
        'user' => true,
        'regra' => true
    ];
}
