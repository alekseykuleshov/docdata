<?php

namespace JouwWeb\DocData\Type;


abstract class AbstractObject implements TypeInterface
{
    /**
     * @return array
     */
    public function toArray()
    {
        $return = [];

        foreach ($this as $name => $value) {
            if ($value === null) {
                continue;
            }

            if ($value instanceof TypeInterface) {
                $data = $value->toArray();
            } else {
                $data = (string) $value;
            }

            $return[$name] = $data;
        }

        return $return;
    }
}
