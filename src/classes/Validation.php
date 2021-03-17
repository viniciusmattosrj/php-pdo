<?php

namespace src\classes;

class Validation
{
    private $validate = [];

    public function validate($post)
    {
        foreach ($post as $key => $value) {
            $this->validate[$key] = filter_var($value, FILTER_SANITIZE_STRING);
        }

        return (object) $this->validate;
    }
}
