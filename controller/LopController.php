<?php

class LopController
{
    public function index()
    {
        require 'model/Lop.php';
        $arr = (new Lop())->all();
        require 'view/lop/index.php';
    }
    public function create()
    {
        require 'view/lop/create.php';
    }
    public function store()
    {

        require 'model/Lop.php';
        (new Lop())->create($_POST);
        header('location: index.php?controller=lop');
    }
    public function edit()
    {
        $ma = $_GET['ma'];
        require 'model/Lop.php';
        $each = (new Lop())->find($ma);
        require 'view/lop/edit.php';
    }
    public function update()
    {

        require 'model/Lop.php';
        (new Lop())->update($_POST);
        header('location: index.php?controller=lop');
    }
    public function delete()
    {
        $ma = $_GET['ma'];

        require 'model/Lop.php';
        (new Lop())->destroy($ma);
        header('location: index.php?controller=lop');
    }
}