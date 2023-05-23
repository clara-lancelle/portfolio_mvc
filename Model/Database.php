<?php

namespace Model;

use src\Configuration\DatabaseConfiguration;

abstract class Database
{ 
    protected object $dbco; 
    public function __construct()
    { 
        $this->dbco = $this->getConnexion(); 
    }
    private function getConnexion()
    {
        $DatabaseConfiguration = new DatabaseConfiguration;
        try {
            return new \PDO('mysql:host=' . $DatabaseConfiguration->getServerName() . ';dbname=' . $DatabaseConfiguration->getDatabaseName(). ';charset=utf8mb4', $DatabaseConfiguration->getUser(), $DatabaseConfiguration->getPassword());
        } catch (\Exception $e) {
            die($e->getMessage());
        }

    }
}