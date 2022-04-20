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
      $email = isset($_POST["email"]) ? $_POST["email"] : false;
      $password = isset($_POST["password"]) ? $_POST["password"] : false;
      $errors = [];
      if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $errors['email'] = "Se requiere un correo electrónico.";
      }
      if (!$password) {
         $errors['password'] = "Contraseña no valida";
      }
      if (count($errors) == 0) {
         $user = new User();
         $user->setEmail($email);
         $user->setPassword($password);

         $save = $user->login();
         if ($save && is_object($user)) {
            $_SESSION['user'] = $save;
            if ($save->role == "admin") {
               $_SESSION['admin'] = true;
            }
            header('Location:' . APP_URL . 'home/index');
            exit();
         } else {
            $_SESSION['data'] = [
               'email' => $email,
            ];
            $_SESSION['login-error'] = "Error en los datos";
         }
      } else {
         $_SESSION['data'] = [
            'email' => $email,
         ];
         $_SESSION['login'] = $errors;
      }
      header('Location:' . APP_URL . 'authentication/login');
   }
   public function registerStore()
   {
      $name = isset($_POST["name"]) ? $_POST["name"] : false;
      $email = isset($_POST["email"]) ? $_POST["email"] : false;
      $phone = isset($_POST["phone"]) ? $_POST["phone"] : false;
      $address = isset($_POST["address"]) ? $_POST["address"] : false;
      $password = isset($_POST["password"]) ? $_POST["password"] : false;
      $password_confirm = isset($_POST["password-confirm"]) ? $_POST["password-confirm"] : false;
      // --------------------------------------------------------------------------------
      $errors = [];
      if (!$name || is_numeric($name) || preg_match('/[0-9\.\-\_\/\'\"\@\#]/', $name)) {
         $errors['name'] = "Verifique que los datos sean validos.";
      }
      if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $errors['email'] = "Se requiere un correo electrónico.";
      }
      if (!$phone || preg_match('/[A-Za-z\.\-\_\/\'\"\@\#]/', $phone)) {
         $errors['phone'] = "El campo debe contener números.";
      }
      if (!$address || !is_string($address)) {
         $errors['address'] = "El campo debe ser una cadena.";
      }
      if (!$password) {
         $errors['password'] = "Contraseña no valida";
      }
      if (!$password_confirm || $password_confirm != $password) {
         $errors['password-confirm'] = "Verifique la contraseña";
      }
      // ----------------------------------------------------------------------------------
      if (count($errors) == 0) {
         // var_dump("Sin errores");
         $user = new User();
         $user->setName($name);
         $user->setEmail($email);
         $user->setPhone($phone);
         $user->setAddress($address);
         $user->setPassword($password);
         $save = $user->register();
         if ($save) {
            $_SESSION['register-success'] = "Registro exitoso";
            header('Location:' . APP_URL . 'authentication/login');
            exit();
         } else {
            $_SESSION['register-error'] = "Error durante el registro";
         }
      } else {
         $_SESSION['data'] = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
         ];
         $_SESSION['register'] = $errors;
      }
      header('Location:' . APP_URL . 'authentication/register');
   }
   public function logout()
   {
      unset($_SESSION['user']);
      unset($_SESSION['admin']);
      header('Location:' . APP_URL . 'home/index');
   }
}
