<?php

abstract class Model
{
    protected $dbHandle;
    protected $preparedStatement;

    public function __construct()
    {
        $this->dbHandle = new PDO(DB_DNS, DB_USER, DB_PASS);
    }

    public function query($query)
    {
        $this->preparedStatement = $this->dbHandle->prepare($query);
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->preparedStatement->bindValue($param, $value, $type);
    }

    public function execute()
    {
        $this->preparedStatement->execute();
    }

    public function resultSet()
    {
        $this->execute();
        return $this->preparedStatement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single()
    {
        $this->execute();
        return $this->preparedStatement->fetch(PDO::FETCH_ASSOC);
    }
    public function countSet()
    {
        $this->execute();
        return $this->preparedStatement->fetchColumn();
    }

    public function lastInsertId()
    {
        return $this->dbHandle->lastInsertId();
    }
}
 