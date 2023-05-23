<?php

namespace src\Queries;

use Model\Database;

final class AdminQueries extends Database
{
    // verifiers

    public static function isValidId(string $id) : int
    { 
        $instance = new self;
        try {
            $query = 'SELECT COUNT(admin_id) FROM `admin` WHERE admin_id = :id';
            $queryPrepare = $instance->dbco->prepare($query);
            $queryPrepare->bindValue(':id', strip_tags($id), \PDO::PARAM_STR);
            $queryPrepare->execute();

        } catch (\PDOException $e) {
            die($e->getMessage());
        }
        return $queryPrepare->fetch(\PDO::FETCH_COLUMN);
    }
    
    public static function isValidPassword(string $id, string $pass)
    {
        $instance = new self;
        $query = 'SELECT password FROM `admin` WHERE admin_id = :id';
        $queryPrepare = $instance->dbco->prepare($query);
        $queryPrepare->bindValue(':id', strip_tags($id), \PDO::PARAM_STR);
        $queryPrepare->execute();
        $passHach = $queryPrepare->fetch(\PDO::FETCH_COLUMN);
        return password_verify($pass, $passHach);
    }
}