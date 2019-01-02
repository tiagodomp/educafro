<?php
/**
 * Created by PhpStorm.
 * User: Tiago Pereira
 * Date: 29/12/2018
 * Time: 16:22
 */

/**
 * Esta classe tem como objetivo facilitar a manipulação dos JSON no BD.
 *
 */
class ManipulandoJsonBehavior extends ModelBehavior {
    /**
     * As opções padrões para o Behavior
     *
     * @var array
     * @access public
     */
    public $settings = array(
        'fields' => array()
    );

    /**
     * Configuração do Behavior
     *
     * @param object $model Reference to model
     * @param array $settings Settings
     * @return void
     * @access public
     */
    public function setup(Model $model, $settings) {
        $this->settings = array_merge($this->settings, $settings);
    }

    /**
     *
     * @param object $model Reference to model
     * @access public
     */
    public function beforeSave(Model $model) {
        foreach($this->settings['fields'] as $field){
            if(isset($model->data[$model->alias][$field]))
                $model->data[$model->alias][$field] = $this->_encode($model->data[$model->alias][$field]);
        }
        return true;
    }


    /**
     *
     * @param object $model Reference to model
     * @access public
     */
    public function afterFind(Model $model, $results) {
        foreach($results as $i => &$res){
            foreach($this->settings['fields'] as $field){
                if(isset($res[$model->alias][$field]))
                    $res[$model->alias][$field] = $this->_decode($res[$model->alias][$field]);
            }
        }
        return $results;
    }

    /**
     * Encode json
     *
     * @param $data
     * @return mixed
     */
    protected function _encode($data){
        return json_encode($data);
    }

    /**
     * Decode json
     *
     * @param $data
     * @return mixed
     */
    protected function _decode($data){
        $decode = json_decode($data);
        return is_object($decode) ? (array)$decode : $decode;
    }
}
?>