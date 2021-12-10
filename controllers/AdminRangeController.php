<?php
require_once 'models/Range.php';

class AdminRangeController{
    public function index(){
        $range = new Range();
        $ranges = $range->getAll();
        include 'views/admin/ranges/index.php';
    }
    public function create(){
        include 'views/admin/ranges/create.php';
    }
    public function store(){

    }
    public function edit(){
        $range_id = $_GET['id'];
        $range = new Range();
        // $range = $range->find($range_id);
        include 'views/admin/ranges/edit.php';
    }
    public function update(){

    }
    public function destroy(){
        $range_id = $_GET['id'];
        $range = new Range();
        // $brand->delete($range_id);
        // header('Location:'.APP_URL.'AdminRange/index');
    }
}

?>
