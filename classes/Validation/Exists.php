<?php

namespace Classes\Validation;

class Exists implements ValidationInterface
{
    private $key;
    private $value;
    // private $table;
    // private $column;
    // private $connection;

    public function __construct(private $table, private $column, private $connection) {}
    public function validate($key, $value)
    {
        $this->key = $key;
        $this->value = $value;


        $statment = $this->connection->prepare(
            "SELECT * FROM $this->table
                WHERE $this->column = :value "
        );
        $statment->execute([":value" => $this->value]);
        if ($statment->rowCount() > 0) {
            return true;
        }
        return false;
    }

    public function getMessage()
    {
        return ucfirst($this->key) . " not found in {$this->table}";
    }
}
