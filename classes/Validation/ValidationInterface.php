<?php

namespace Classes\Validation;

interface ValidationInterface
{
    public function validate($key, $value);
    public function getMessage();
}
