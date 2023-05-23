<?php

namespace Controller;
use Model\Admin;
use src\Queries\{MessageQueries, AdminQueries};
use src\Validation\LoginValidation;

class AdminController extends Admin
{
    public function __invoke() :void
    {
       $this->login();
    }
    public function dashboard() :array
    {
        if(!isset($_SESSION['id'])) {

            header("location: /admin/login");
            exit;
        }
        if(AdminQueries::isValidId($_SESSION['id']) == 0) {

            header("location: /admin/login");
            exit;   
        }
 
        $numberOfMessages = MessageQueries::getNumberOfMessages();
        
        if($numberOfMessages == 0) {
            $message = 'Vous n\'avez aucun messages.';

            $title = 'dashboard';
            include(__DIR__ . '/../view/dashboard.php');

            return [$message];
        }
        //pagination
        $currentPage = 1;
        $perPage = 4; 

        if(isset($_GET['page']) && !empty($_GET['page'])){
            $currentPage = (int) strip_tags($_GET['page']);
        }
        
        $numberOfPages = ceil($numberOfMessages / $perPage);
        $first = ($currentPage * $perPage) - $perPage;

        $messages = MessageQueries::getMessages($first, $perPage);
        
        $pagination = [
            'numberOfPages' => $numberOfPages,
            'currentPage' => $currentPage,
        ];

        $title = 'dashboard';
        include(__DIR__ . '/../view/dashboard.php');
        
        return [$messages, $pagination];
        
    }

    public function login() :array
    {   
        if(isset($_SESSION['id'])) {

           header("location: /admin/dashboard");
           exit;
        }

        if (count($_POST) > 0) {
          
            $formErrors = [];
            $loginValidation = new LoginValidation();
            $formErrors = $loginValidation->validate($_POST); //array empty or errorArray
            if (count($formErrors) === 0) {
               
                $_SESSION['id'] = trim($_POST['id']);
             
                header("location: /admin/dashboard");
                exit;

            } else {
                $title = 'login';
                include(__DIR__ . '/../view/login.php');

                return $formErrors;
            }
        } else {
           
            $title = 'login';
            include(__DIR__ . '/../view/login.php');

            return [];
        }
    }

    public function logout() :void 
    {
        if(isset($_GET['logout'])){
            session_destroy();
            unset($_SESSION['id']);

            header('location: log_admin.php');
            exit;
        }
    }
}