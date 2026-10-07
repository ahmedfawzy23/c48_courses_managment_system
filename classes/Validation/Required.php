<?php

namespace Classes\Validation;

class Required implements ValidationInterface
{
    private $key;
    private $value;
    public function validate($key, $value)
    {
        $this->key = $key;
        $this->value = $value;
        if ($this->value == null || $this->value == "") {
            return false;
        }
        return true;
    }

    public function getMessage()
    {
        return ucfirst($this->key) . " is required"; // Name
    }
}
