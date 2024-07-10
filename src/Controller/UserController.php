<?php
namespace App\Controller;

use App\Controller\AbstractController;

class UserController extends AbstractController
{
    public function showConnexionForm()
    {
        $this->render('connexion');
    }

    public function processLogin()
    {
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            if (isset($_POST['email']) || !empty($_POST['email']) || isset($_POST['pwd']) || !empty($_POST['pwd'])) {

                echo 'Ablo est connecté';
            }

            $email = trim($_POST['email']);
            $pwd = trim($_POST['pwd']);
            
        }
   }

} 