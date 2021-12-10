<?php
<<<<<<< HEAD

class AdminUserController
{
   public function index()
   {
      include 'views/admin/users/index.php';
   }

   public function create()
   {
      include 'views/admin/users/create.php';
   }

   public function edit()
   {
      include 'views/admin/users/edit.php';
   }

   public function delete()
   {
      echo 'eliminado';
   }
}
=======
require_once 'models/User.php';

class AdminProductController{
    public function index(){
        $user = new Product();
        // $users = $user->getAll();
        include 'views/admin/users/index.php';
    }
    public function create(){
        include 'views/admin/users/create.php';
    }
    public function store(){

    }
    public function edit(){
        include 'views/admin/users/edit.php';
    }
    public function update(){

    }
    public function destroy(){
        $user_id = $_GET['id'];
        $user = new Product();
        // $user->delete($user_id);
        // header('Location:'.APP_URL.'AdminUser/index');
    }
}

?>
>>>>>>> 38bd94732b6f97037bc4beeb4c8e7d36d9977647
