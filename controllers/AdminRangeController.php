<?php

class AdminRangeController
{
   public function index()
   {
      include 'views/admin/ranges/index.php';
   }

   public function create()
   {
      include 'views/admin/ranges/create.php';
   }

   public function edit()
   {
      include 'views/admin/ranges/edit.php';
   }
}