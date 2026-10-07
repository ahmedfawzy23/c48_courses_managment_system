<?php

namespace Classes\Validation;

class Email implements ValidationInterface
{
    private $key;
    private $value;
    public function validate($key, $value)
    {
        $this->key = $key;
        $this->value = $value;
        if (!filter_var($this->value, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }

    public function getMessage()
    {
        return ucfirst($this->key) . " not valid email";
    }
}
