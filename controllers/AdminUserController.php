<?php
require_once 'models/User.php';

class AdminUserController{
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
