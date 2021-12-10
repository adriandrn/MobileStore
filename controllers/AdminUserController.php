<?php

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