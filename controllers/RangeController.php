<?php

require_once 'models/Range.php';

class RangeController
{
   public function index()
   {
      $range = new Range();
      $ranges = $range-> getAll();
   }
}