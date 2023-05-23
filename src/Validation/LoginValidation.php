<?php

namespace src\Validation;

use src\Queries\AdminQueries;

final class LoginValidation
{
    protected array $formErrors = [];

    public function validate(array $data): array
    {
        if (!empty($data['id'])) {
            $id = trim($data['id']);
            if (!empty($data['password'])) {
                $password = trim($data['password']);
                if (preg_match( '/^([a-zA-ZÀ-ż0-9\-\_\.]){1,50}$/', $id)) {
                    if (AdminQueries::isValidId($id) !== 0 && (AdminQueries::isValidPassword($id, $password))) {
                        $this->formErrors = [];
                    } else {
                        $this->formErrors['mail_pass'] = 'Vos identifiants sont invalides.';
                    }
                } else {
                    $this->formErrors['mail'] = 'L\'identifiant est invalide.';
                }
            } else {
                $this->formErrors['password'] = 'Le mot de passe est obligatoire.';
            }
        } else {
            $this->formErrors['mail'] = 'L\'identifiant est obligatoire.';
        }
        return $this->formErrors;
    }
}