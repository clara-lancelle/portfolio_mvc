<?php

namespace Controller;
use Model\{Message, Contact};
use src\Queries\{MessageQueries, ContactQueries};
use src\Validation\MessageValidation;
class IndexController
{
    public function __invoke() :void
    {
        $title = 'Index';
        include(__DIR__ . '/../view/index.php');
    }
    public function sendMessage() :void
    {
         // Ajax fetch
         $data = json_decode(file_get_contents('php://input'), true);

         if (isset($data['message']) && isset($data['action']) && $data['action'] == 'send') {
         
            $MessageValidation = new MessageValidation;
            $formErrors = $MessageValidation->validate($data);
            
            if (count($formErrors) == 0) {
                
                $contact = new Contact;
                $contact->setLastname(strip_tags(trim($data['lastname'])));
                $contact->setFirstname(strip_tags(trim($data['firstname'])));
                $contact->setEmail(strip_tags(trim($data['email'])));

                if(!ContactQueries::isExistingEmail($contact->getEmail()) > 0) {
                    ContactQueries::insertContact($contact);
                }

                $message = new Message;
                $message->setContent(strip_tags(trim($data['message'])));

                if(!MessageQueries::isExistingMessage($message, $contact)) {
                    MessageQueries::insertMessage($message, $contact);

                    echo json_encode(['success'=> true]);
                    exit;

                } else {
                    echo json_encode(['message' => 'Vous avez déja publié ce commentaire.']);
                    exit;
                }
            } else {
                echo json_encode(['formErrors' => $formErrors]);
                exit;
            }
        }
    }
}