<?php

namespace Classes\Validation;

use Classes\Database\MySql;


class Validator
{
    private $key;
    private $value;
    private $messages = [];
    private $connection;
    public function __construct($rulesArr, $request)
    {
        $db = new MySql();
        $this->connection = $db->connect();
        foreach ($rulesArr as $key =>  $rules) {
            $this->key = $key;
            $this->value = $request[$key];
            $this->checkRules($rules);
        }
    }

    // make validation
    private function makeValidation(ValidationInterface $obj)
    {
        if ($obj->validate($this->key, $this->value)) {
            return true;
        }
        return $obj->getMessage();
    }
    // checkRule

    private function checkRules($rules)
    {
        $error = "";
        $paramString = "";
        $params = null;

        foreach ($rules as $rule) {
            if (str_contains($rule, ":")) {
                // die($rule);
                $paramString = explode(":", $rule)[1]; // table,col
                $params = explode(",", $paramString);
                $rule = explode(":", $rule)[0]; // min, max
                // if(iss)
                // die($params[3]);
            }

            $error = match ($rule) {
                "required" => $this->makeValidation(new Required),
                "email" => $this->makeValidation(new Email),
                "min" => $this->makeValidation(new Min($paramString)),
                "max" => $this->makeValidation(new Max($paramString)),
                "unique" => $this->makeValidation(new Unique($params[0], $params[1], $this->connection, $params[2] ?? null)),
                "exists" => $this->makeValidation(new Exists($params[0], $params[1], $this->connection)),
                default => true
            };
            if ($error !== true) {
                $this->messages[$this->key] = $error;
                break;
            }
        }
    }

    public function hasErrors()
    {
        return count($this->messages) > 0;
    }

    public function getErrors()
    {
        return $this->messages;
    }
    public function getError($key)
    {
        return $this->messages[$key];
    }
}


/*



[
    "name" => ['required']
    "email" => ['required', "email]
], $request

$_POST['name']
*/