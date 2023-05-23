<?php

namespace src\Queries;

use Model\Database;

final class ContactQueries extends Database
{
    public static function isExistingEmail($mail) : int
    { 
        $instance = new self;
        try {
            $query = 'SELECT COUNT(email) FROM `contact` WHERE email = :mail';
            $queryPrepare = $instance->dbco->prepare($query);
            $queryPrepare->bindValue(':mail', $mail, \PDO::PARAM_STR);
            $queryPrepare->execute();

        } catch (\PDOException $e) {
            die($e->getMessage());
        }
        return $queryPrepare->fetch(\PDO::FETCH_COLUMN);
    }

    public static function insertContact(object $contact) :void 
    {
        try {
            $instance = new self;
            $query = 'INSERT INTO contact(email, firstname, lastname)
            VALUES (:email, :firstname, :lastname)';
            $queryPrepare = $instance->dbco->prepare($query);
            $queryPrepare->bindValue(':email', $contact->getEmail(), \PDO::PARAM_STR);
            $queryPrepare->bindValue(':firstname', $contact->getFirstname(), \PDO::PARAM_STR);
            $queryPrepare->bindValue(':lastname', $contact->getLastname(), \PDO::PARAM_STR);
            $queryPrepare->execute();
            
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
        return;
    }
}
