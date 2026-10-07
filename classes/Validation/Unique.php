<?php

namespace Classes\Validation;

class Unique implements ValidationInterface
{
    private $key;
    private $value;
    // private $table;
    // private $column;
    // private $connection;

    public function __construct(private $table, private $column, private $connection, private $id) {}
    public function validate($key, $value)
    {
        $this->key = $key;
        $this->value = $value;
        if ($this->id) {
            $statment = $this->connection->prepare(
                "SELECT * FROM $this->table
            WHERE $this->column = :value and id != :id"
            );
            $statment->execute([":value" => $this->value, ":id" => $this->id]);
        } else {

            $statment = $this->connection->prepare(
                "SELECT * FROM $this->table
                WHERE $this->column = :value "
            );
            $statment->execute([":value" => $this->value]);
        }
        if ($statment->rowCount() > 0) {
            return false;
        }
        return true;
    }

    public function getMessage()
    {
        return ucfirst($this->key) . " alredy exist in {$this->table}";
    }
}
