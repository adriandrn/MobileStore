<?php

class AdminBrandController
{
   public function index()
   {
      include 'views/admin/brands/index.php';
   }

   public function create()
   {
      include 'views/admin/brands/create.php';
   }

   public function edit()
   {
      include 'views/admin/brands/edit.php';
   }
}
