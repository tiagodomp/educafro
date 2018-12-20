<?php
namespace Josegonzalez\Upload\File\Path\Basepath;

use Cake\Utility\Hash;
use LogicException;

trait DefaultTrait
{
    /**
     * Returns the basepath for the current field/data combination.
     * If a `path` is specified in settings, then that will be used as
     * the replacement pattern
     *
     * @return string
     * @throws LogicException if a replacement is not valid for the current dataset
     */
    public function basepath()
    {
        $defaultPath = 'webroot{DS}files{DS}{primaryKey}{DS}{model}{DS}{field}{DS}';
        $path = Hash::get($this->settings, 'path', $defaultPath);
        if (strpos($path, '{primaryKey}') !== false) {
            if ($this->entity->isNew()) {
                throw new LogicException('{primaryKey} >>> substituição não permitida para novas entidades');
            }
            if (is_array($this->table->getPrimaryKey())) {
                throw new LogicException('{primaryKey} >>> substituição não válida para chaves primárias compostas');
            }
        }

        $replacements = [
            '{primaryKey}' => $this->entity->get($this->table->getPrimaryKey()),
            '{model}' => $this->table->getAlias(),
            '{table}' => $this->table->getTable(),
            '{field}' => $this->field,
            '{year}' => date("Y"),
            '{month}' => date("m"),
            '{day}' => date("d"),
            '{time}' => time(),
            '{microtime}' => microtime(true),
            '{DS}' => DIRECTORY_SEPARATOR,
        ];

        if (preg_match_all("/{field-value:(\w+)}/", $path, $matches)) {
            foreach ($matches[1] as $field) {
                $value = $this->entity->get($field);
                if ($value === null) {
                    throw new LogicException(sprintf('O valor do campo para substituição esta ausente: %s', $field));
                } elseif (!is_scalar($value)) {
                    throw new LogicException(sprintf('O valor do campo para substituição deve ser um inteiro, float, string ou booleano: %s', $field));
                } elseif (strlen($value) < 1) {
                    throw new LogicException(sprintf('
O valor do campo para substituição deve ter comprimento diferente de zero: %s', $field));
                }

                $replacements[sprintf('{field-value:%s}', $field)] = $value;
            }
        }

        return str_replace(
            array_keys($replacements),
            array_values($replacements),
            $path
        );
    }
}
