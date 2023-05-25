<?php

namespace src\Validation;

final class MessageValidation
{
    protected array $formErrors = [];

    protected array $regex = [
        'message' => '/^[A-Za-zÀ-ż0-9\.\,\ \+\-\’\:\!\;\?\/\(\)\'\"\%]{1,650}$/',
        'name' => '/^([a-zA-ZÀ-ż\-\_\.\ ]){1,50}$/',

    ];

    protected array $errors = [
            'lastname_invalid'=> 'Le nom de famille est invalide, il ne peut contenir que des lettres et des caractères accentués.',
            'lastname_empty'=> 'Le nom de famille est obligatoire.',
            'firstname_invalid'=> 'Le prénom est invalide, il ne peut contenir que des lettres et des caractères accentués.',
            'firstname_empty'=> 'Le prénom est obligatoire.',
            'email_empty'=> 'L\'email est obligatoire.',
            'email_invalid'=> 'L\'email est incorrect. ',
            'message_empty'=> 'Le message est obligatoire.',
            'message_invalid'=> 'Le message est incorrect. ',
        
    ];

    public function validate(array $post): array
    {
         //email
        if (isset($post['email']) && !empty($post['email'])) {
            if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
                $this->formErrors['email'] = $this->errors['email_invalid'];
            }
        } else {
            $this->formErrors['email'] = $this->errors['email_empty'];
        }
        //lastname
        if (isset($post['lastname']) && !empty($post['lastname'])) {
            if (!preg_match($this->regex['name'], strval($post['lastname']))) {
                $this->formErrors['content'] = $this->errors['lastname_invalid'];
            }
        } else {
            $this->formErrors['lastname'] = $this->errors['lastname_empty'];
        }
        //firstname
        if (isset($post['firstname']) && !empty($post['firstname'])) {
            if (!preg_match($this->regex['name'], strval($post['firstname']))) {
                $this->formErrors['content'] = $this->errors['firstname_invalid'];
            }
        } else {
            $this->formErrors['firstname'] = $this->errors['firstname_empty'];
        }
        //message
        if (isset($post['message']) && !empty($post['message'])) {
            if (!preg_match($this->regex['message'], strval($post['message']))) {
                $this->formErrors['content'] = $this->errors['message_invalid'];
            }
        } else {
            $this->formErrors['content'] = $this->errors['message_empty'];
        }

    return $this->formErrors;
  
    }
}