<?php
namespace App\Model\Entity;

use CakeDC\Users\Model;
use Cake\ORM\Entity;
use Lqdt\OrmJson\Model\Entity\JsonTrait;
use Cake\I18n\Time;

/**
 * User Entity
 *
 * @property int $id
 * @property int $user_cadastro_id
 * @property int $perfis_id
 * @property string|null $username
 * @property string|null $email
 * @property string|null $password
 * @property string|null $remember_token
 * @property string|null $google
 * @property string|null $oauth_provider
 * @property string|null $primeiro_nome
 * @property string|null $meio_nome
 * @property string|null $ultimo_nome
 * @property string|null $gender
 * @property string|null $locale
 * @property string|null $cover
 * @property string|null $photo
 * @property string|null $photo_dir
 * @property int|null $photo_size
 * @property string|null $photo_type
 * @property string|null $link
 * @property array|null $info
 * @property string|null $sexo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\UserCadastro $user_cadastro
 * @property \App\Model\Entity\Perfi $perfi
 */
class User extends Model\Entity\User
{

    use JsonTrait;

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
        'username' => true,
        'email' => true,
        'password' => true,
        'remember_token' => true,
        'google' => true,
        'oauth_provider' => true,
        'primeiro_nome' => true,
        'meio_nome' => true,
        'ultimo_nome' => true,
        'gender' => true,
        'locale' => true,
        'cover' => true,
        'photo' => true,
        'photo_dir' => true,
        'photo_size' => true,
        'photo_type' => true,
        'link' => true,
        'info' => true,
        'sexo' => true,
        'created' => true,
        'modified' => true,
        'user_cadastro' => true,
        'perfi' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    /// Método que retorna o nome completo através da chamada "echo $user->nome_completo;"
    protected function _getNomeCompleto ()
    {
        $NomeCompleto = null;

        ///Concatenação dos dados que existirem
        if(is_string($this->_properties['primeiro_nome'])){
            $NomeCompleto =  $this->_properties['primeiro_nome'];
        }
        if(is_string($this->_properties['meio_nome'])){
            $NomeCompleto .= " ".$this->_properties['meio_nome'];
        }
        if(is_string($ultimoNome)){
            $NomeCompleto .= " ".$this->_properties['ultimo_nome'];
        }

        return $NomeCompleto;
    }

    ///Método que especifique os dados que serão salvos no campo JSON
    protected function infoJson()
    {
        ///Certificar-se que o JSON é válido antes de implementá-lo https://codebeautify.org/jsonviewer
        $baseJson = '{
                      "status": {
                        "Pendente": null,
                        "Ativo": null,
                        "Penalizado": null,
                        "Bloqueado": null,
                        "info": {
                          "pendente": {
                            "criado": "",
                            "MaquinaIP": ""
                          },
                          "ativo": {
                            "modificadores_id": "",
                            "criado": ""
                          },
                          "penalizado": {
                            "modificadores_id": "",
                            "_inicio": "",
                            "_final": "",
                            "motivo": "",
                            "importancia": "",
                            "tipo": {
                              "iterador": "",
                              "data_ultima_pena": "",
                              "importancia": ""
                            }
                          },
                          "bloqueado": {
                            "modificadores_id": "",
                            "datetime": "",
                            "motivo": ""
                          }
                        }
                      },
                      "SessionInitial": {
                          "login": {
                            "user_historico_acoes_id": "",
                            "user_preferencias_id": "",
                            "user_info_id": "",
                            "regras_historico_atribuicoes_id": "",
                            "perfis_preferencias_id": "",
                            "grupos_membros_id": ""
                          },
                          "modificacoesNaoSalvas": {}
                        }
                    }';

        return json_decode($baseJson);
    }


    /// Método que retorna uma "entidade" para obter os dados do campo info através de "echo $user->novo_info;"
    protected function _getNovoInfo()
    {
        if(is_object($this->infoJson()) || is_array($this->infoJson()) ) {
            $infoObj = $this->infoJson();

            return $infoObj;
        }
    }
}
