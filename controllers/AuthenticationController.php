<?php

require_once 'models/User.php';

class AuthenticationController
{
   public function login()
   {
      include 'views/authentication/login.php';
   }

   public function register()
   {
      include 'views/authentication/register.php';
   }

   public function loginStore()
   {
      // var_dump('dasd');
      $user = new User();

      $email = $_POST['email'];
      $password = $_POST['password'];

      $errors = [];
      
      if (empty($email) || is_numeric($email) || !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
         $errors['email'] = 'error de email';
      }
      
      if (empty($password)) {
         $errors['password'] = 'error de password';
      }

      if (count($errors) == 0) {
         # code...
      }else{
         $_SESSION['errors'] = $errors;
         header('location:'. APP_URL.'authentication/login');
      }

   }
}