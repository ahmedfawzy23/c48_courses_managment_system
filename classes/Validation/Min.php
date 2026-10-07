<?php

namespace Classes\Validation;

class Min implements ValidationInterface
{
    private $key;
    private $value;
    private $min;

    public function __construct($min)
    {
        $this->min = $min;
    }
    public function validate($key, $value)
    {
        $this->key = $key;
        $this->value = $value;
        if (strlen($this->value) < $this->min) {
            return false;
        }
        return true;
    }

    public function getMessage()
    {
        return ucfirst($this->key) . " must be grater than {$this->min}";
    }
}
