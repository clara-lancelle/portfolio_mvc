<?php

namespace src\Queries;

use Model\Database;

final class MessageQueries extends Database
{
    // verifiers

    public static function getMessages(int $first, int $perPage ) : array
    { 
        $instance = new self;
        try {
            $query = 'SELECT contact.firstname, contact.lastname, contact.email, DATE_FORMAT(message.date_time, "%d/%m/%Y  %H\h%i") AS date_time, message.content
                FROM contact
                INNER JOIN message ON message.contact_email = contact.email
                ORDER BY message.date_time DESC
                LIMIT :first, :perpage'; 
            $queryPrepare = $instance->dbco->prepare($query);
            $queryPrepare->bindValue(':first',$first,\PDO::PARAM_INT);
            $queryPrepare->bindValue(':perpage',$perPage,\PDO::PARAM_INT);
            $queryPrepare->execute();

        } catch (\PDOException $e) {
            die($e->getMessage());
        }
        return $queryPrepare->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function getNumberOfMessages() : int
    {  
        $instance = new self;
        try {
            $query = 'SELECT COUNT(*) FROM message';
            $queryPrepare = $instance->dbco->prepare($query);
            $queryPrepare->execute();

        } catch (\PDOException $e) {
            die($e->getMessage());
        }
       
        return $queryPrepare->fetch(\PDO::FETCH_COLUMN);
    }

    public static function isExistingMessage(object $message, object $contact) :int
    {
        try {
            $instance = new self;
            
            $query = 'SELECT COUNT(content)
            FROM message
            WHERE content = :content 
            AND contact_email = :email';
            $queryPrepare = $instance->dbco->prepare($query);
            $queryPrepare->bindValue(':content', $message->getContent(), \PDO::PARAM_STR);
            $queryPrepare->bindValue(':email', $contact->getEmail(), \PDO::PARAM_STR);
            $queryPrepare->execute();
        
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
        return $queryPrepare->fetch(\PDO::FETCH_COLUMN);
    }

    //insert

    public static function insertMessage(object $message, object $contact) :void 
    {
        try {
            $instance = new self;
            $query = 'INSERT INTO message(contact_email, date_time, content)
            VALUES (:email, NOW(), :content)';
            $queryPrepare = $instance->dbco->prepare($query);
            $queryPrepare->bindValue(':email', $contact->getEmail(), \PDO::PARAM_STR);
            $queryPrepare->bindValue(':content', $message->getContent(), \PDO::PARAM_STR);
            $queryPrepare->execute();
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
        return;
    }
}