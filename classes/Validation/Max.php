<?php

namespace Classes\Validation;

class Max implements ValidationInterface
{
    private $key;
    private $value;
    private $max;

    public function __construct($max)
    {
        $this->max = $max;
    }
    public function validate($key, $value)
    {
        $this->key = $key;
        $this->value = $value;
        if (strlen($this->value) > $this->max) {
            return false;
        }
        return true;
    }

    public function getMessage()
    {
        return ucfirst($this->key) . " must be less than {$this->max}";
    }
}
