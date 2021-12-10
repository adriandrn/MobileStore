<?php

class AdminProductController
{
   public function index()
   {
      include 'views/admin/products/index.php';
   }

   public function create()
   {
      include 'views/admin/products/create.php';
   }

   public function edit()
   {
      include 'views/admin/products/edit.php';
   }

   public function delete()
   {
      
   }
}