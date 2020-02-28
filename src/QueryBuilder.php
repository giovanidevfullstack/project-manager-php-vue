<?php

namespace PM\Framework;

class QueryBuilder
{   
    private $sql;
    private $bind = [];

    public function select(string $table)
    {
        $this->sql = "SELECT * FROM `{$table}`";
        return $this;
    }

    public function insert(string $table, array $data)
    {
        $this->sql = "INSERT INTO `{$table}` (`name`, `email`, `password`) VALUES (?,?,?)";
        return $this;
    }

    public function update(string $table, array $data)
    {
        $this->sql = "UPDATE `{$table}` name=?, email=?";
        return $this;
    }

    public function delete(string $table)
    {
        $this->sql = "DELETE FROM `{$table}`";
        return $this;
    }

    public function where(array $conditions)
    {
        
    }

    public function getData() :\stdClass
    {

    }
}