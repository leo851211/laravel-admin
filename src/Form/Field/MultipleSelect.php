<?php

namespace Encore\Admin\Form\Field;

class MultipleSelect extends Select
{
    public function fill($data)
    {
        $relations = array_get($data, $this->column);

        foreach ($relations as $relation) {
            $this->value[] = array_pop($relation['pivot']);
        }
    }

    public function setOriginal($data)
    {
        $relations = array_get($data, $this->column);

        foreach ($relations as $relation) {
            $this->original[] = array_pop($relation['pivot']);
        }
    }

    public function prepare(array $value)
    {
        return array_filter($value);
    }
}
